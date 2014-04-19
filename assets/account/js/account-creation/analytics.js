/**
 * Analytics tracking class for tracking errors on account creation form
 *
 * @requires    class-inheritence
 * @requires    jQuery
 */
var Analytics = Class.extend({
    /**
     * Flags
     */
    category: '',
    delay: 0,
    timers: {},
    eventLimit: 0,
    eventCounts: {},
    creationClass: false,

    /**
     * DOM objects
     */
    emailAddress: null,
    emailAddressConfirmation: null,
    password: null,
    rePassword: null,
    captcha: null,

    /**
     * Selectors
     */
    emailAddressQuery: '',
    emailAddressConfirmationQuery: '',
    passwordQuery: '',
    rePasswordQuery: '',
    captchaQuery: '',

    /**
     * Configuration
     */
    config: {},

    /**
     * Setup configuration
     * 
     * @param {object} config   Configuration details
     */
    init: function(config) {
        config = typeof(config) === 'undefined' ? {} : config;

        this.config = $.extend({
            category: config.category || 'Field Confirmation',
            delay: config.delay || 1000,
            timers: config.timers || {
                emailAddress: {
                    "Input Complete": false,
                    "Field Mismatch": false,
                    "Mismatch Fixed": false,
                },
                emailAddressConfirmation: {
                    "Input Complete": false,
                    "Field Mismatch": false,
                    "Mismatch Fixed": false
                },
                password: {
                    "Input Complete": false,
                    "Field Mismatch": false,
                    "Mismatch Fixed": false,
                    "Other Error": false
                },
                rePassword: {
                    "Input Complete": false,
                    "Field Mismatch": false,
                    "Mismatch Fixed": false
                },
                captcha: {
                    "Input Complete": false
                }
            },
            eventLimit: config.eventLimit || 1,
            eventCounts: config.eventCounts || {
                emailAddress: {
                    "Input Complete": 0,
                    "Field Mismatch": 0,
                    "Mismatch Fixed": 0
                },
                emailAddressConfirmation: {
                    "Input Complete": 0,
                    "Field Mismatch": 0,
                    "Mismatch Fixed": 0
                },
                password: {
                    "Input Complete": 0,
                    "Field Mismatch": 0,
                    "Mismatch Fixed": 0,
                    "Other Error": 0
                },
                rePassword: {
                    "Input Complete": 0,
                    "Field Mismatch": 0,
                    "Mismatch Fixed": 0
                },
                captcha: {
                    "Input Complete": 0
                }
            },
            creationClass: config.creationClass || creation,
            emailAddressQuery: config.emailAddressQuery || '#emailAddress',
            emailAddressConfirmationQuery: config.emailAddressConfirmationQuery || '#emailAddressConfirmation',
            passwordQuery: config.passwordQuery || '#password',
            rePasswordQuery: config.rePasswordQuery || '#rePassword',
            captchaQuery: config.captchaQuery || '#captchaInput'
        }, config);

        this.setup();
    },

    /**
     * Apply configuration
     */
    setup: function() {
        this.category = this.config.category;
        this.delay = this.config.delay;
        this.timers = this.config.timers;
        this.eventLimit = this.config.eventLimit;
        this.eventCounts = this.config.eventCounts;
        this.creationClass = this.config.creationClass;
        this.emailAddress = $(this.config.emailAddressQuery);
        this.emailAddressConfirmation = $(this.config.emailAddressConfirmationQuery);
        this.password = $(this.config.passwordQuery);
        this.rePassword = $(this.config.rePasswordQuery);
        this.captcha = $(this.config.captchaQuery);

        this.registerEvents();
    },

    /**
     * Bind tracking calls
     */
    registerEvents: function() {
        if (document.getElementById('emailAddressConfirmation') != null ){
            this.emailAddress
                .on('focusout',
                    $.proxy(this.setTimer, this, 'emailAddress', 'Input Complete')
                )
                .on('focusout',
                    $.proxy(this.setTimer, this, 'emailAddress', 'Field Mismatch')
                )
                .on('focusout',
                    $.proxy(this.setTimer, this, 'emailAddress', 'Mismatch Fixed')
                )
                .on('focus',
                    $.proxy(this.clearTimer, this, 'emailAddress')
                );

           this.emailAddressConfirmation
                .on('focusout',
                    $.proxy(this.setTimer, this, 'emailAddressConfirmation', 'Input Complete')
                )
                .on('focusout',
                    $.proxy(this.setTimer, this, 'emailAddressConfirmation', 'Field Mismatch')
                )
                .on('focusout',
                    $.proxy(this.setTimer, this, 'emailAddressConfirmation', 'Mismatch Fixed')
                )
                .on('focus',
                    $.proxy(this.clearTimer, this, 'emailAddressConfirmation')
                );
        };
        
        this.password
            .on('focusout',
                $.proxy(this.setTimer, this, 'password', 'Input Complete')
            )
            .on('focusout',
                $.proxy(this.setTimer, this, 'password', 'Field Mismatch')
            )
            .on('focusout',
                $.proxy(this.setTimer, this, 'password', 'Mismatch Fixed')
            )
            .on('focusout',
                $.proxy(this.setTimer, this, 'password', 'Other Error')
            )
            .on('focus',
                $.proxy(this.clearTimer, this, 'password')
            );

        this.rePassword
            .on('focusout',
                $.proxy(this.setTimer, this, 'rePassword', 'Input Complete')
            )
            .on('focusout',
                $.proxy(this.setTimer, this, 'rePassword', 'Field Mismatch')
            )
            .on('focusout',
                $.proxy(this.setTimer, this, 'rePassword', 'Mismatch Fixed')
            )
            .on('focus',
                $.proxy(this.clearTimer, this, 'rePassword')
            );

        this.captcha
            .on('focusout',
                $.proxy(this.setTimer, this, 'captcha', 'Input Complete')
            )
            .on('focus',
                $.proxy(this.clearTimer, this, 'captcha')
            )
    },

    /**
     * Verifies if tracking should load
     * 
     * @param  {string} action  Event action type
     * @param  {string} label   Event label
     * 
     * @return {boolean}        Indicates if tracking should load
     */
    validate: function(action, label) {
        var load = false,
            emailFieldCheck = document.getElementById('emailAddressConfirmation'),
            emailAddress1 = this.emailAddress.val(),
            emailAddress2 = this.emailAddressConfirmation.val(),
            password1 = this.password.val(),
            password2 = this.rePassword.val(),
            emailAddressMismatched = this["eventCounts"]["emailAddress"]["Field Mismatch"] || this["eventCounts"]["emailAddressConfirmation"]["Field Mismatch"];
			passwordMismatched = this["eventCounts"]["password"]["Field Mismatch"] || this["eventCounts"]["rePassword"]["Field Mismatch"];

        if (this["eventCounts"][action][label] < this.eventLimit) {
            switch (label) {
                case 'Field Mismatch':
                    if (emailFieldCheck != null && (action == "emailAddress" || action == "emailAddressConfirmation")) {
                        load = !emailAddressMismatched && emailAddress1 && emailAddress2 && emailAddress1 != emailAddress2;
                    } else {
						load = !passwordMismatched && password1 && password2 && password1 != password2;
					}
                    break;
                case 'Mismatch Fixed':
                    if (emailFieldCheck != null && (action == "emailAddress" || action == "emailAddressConfirmation")) {
                        load = emailAddressMismatched && !this["eventCounts"]["emailAddress"]["Mismatch Fixed"] && !this["eventCounts"]["emailAddressConfirmation"]["Mismatch Fixed"] && emailAddress1 == emailAddress2;
                    } else {
						load = passwordMismatched && !this["eventCounts"]["password"]["Mismatch Fixed"] && !this["eventCounts"]["rePassword"]["Mismatch Fixed"] && password1 == password2;
					}
                    break;
                case 'Other Error':
						load = !this.creationClass.goodPassword;
                    break;
                default:
                    load = this[action].val();
            }
        }
        return load;
    },

    /**
     * Set timeout to fire event
     * 
     * @param {string} action   Event action type (should match field name)
     * @param {string} labels   Event label
     */
    setTimer: function(action, label) {
        if (this.validate(action, label)) {
            this["timers"][action][label] = setTimeout(
                $.proxy(this.track, this, action, label)
            , this.delay);
        }
    },

    /**
     * Clear timeout associated with field
     * 
     * @param {string} action   Field/timeout name
     * @param {string} label    Event label
     */
    clearTimer: function(action, label) {
        clearTimeout(this["timers"][action][label]);
    },

    /**
     * Load event tracking
     * 
     * @param {string} action   Event action type (should match field name)
     * @param {string} label    Event label
     */
    track: function(action, label) {
        _gaq.push(['_trackEvent', this.category, action, label]);
        this["eventCounts"][action][label]++;
    }
});