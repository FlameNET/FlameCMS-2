/**
 * Core global functionality.
 */
var Core = {

	/**
	 * Base context URL for the project.
	 */
	baseUrl: '/',

	/**
	 * Battle.net support site URL.
	 */
	supportUrl: '/support/',

	/**
	 * The cached string for the browser.
	 */
	browser: null,

	/**
	 * Dynamic load queue.
	 */
	deferredLoadQueue: [],

	/**
	 * Current locale and region.
	 */
	locale: 'en-us',
	region: 'us',

	/**
	 * Short date format
	 */
	shortDateFormat: 'MM/dd/Y',

	/**
	 * Date/time format
	 */
	dateTimeFormat: 'dd/MM/yyyy HH:mm',

	/**
	 * The current project.
	 */
	project: '',

	/**
	 * Path to static content.
	 */
	staticUrl: '/',
	sharedStaticUrl: '/local-common/',

	/**
	 * The current host and protocol.
	 */
	host: '',

	/**
	 * User agent specification
	 */
	userAgent: 'web',

	/**
	 * Initialize the script.
	 *
	 * @constructor
	 */
	initialize: function() {
		Core.processLoadQueue();
		Core.ui();
		Core.host = location.protocol + '//' + (location.host || location.hostname);

		// Determine the user agent and add the class name to the html tag
		var html = $('html'),
			browser = Core.getBrowser();

		if (browser.name !== '') {
			html.addClass(browser.name).addClass(browser.full);

			if (browser.name === 'ie' && (browser.version === 6 || browser.version === 7)) {
				html.addClass('ie67');
			}
		}
	},

	/**
	 * Return letter (alphabet) values only within a string.
	 *
	 * @param string
	 * @return string
	 */
	alpha: function(string) {
		return string.replace(/[^a-zA-Z]/gi, '');
	},

	/**
	 * Create a frame within the document.
	 *
	 * @param url
	 * @param width
	 * @param height
	 * @param parent
	 * @param id
	 */
	appendFrame: function(url, width, height, parent, id) {
		if (typeof url === 'undefined')
			return;

		if (typeof width === 'undefined')
			width = 1;

		if (typeof height === 'undefined')
			height = 1;

		if (typeof parent === 'undefined')
			parent = $('body');

		if (Core.isIE()) {
			parent.append('<iframe src="' + url + '" width="' + width + '" height="' + height + '" scrolling="no" frameborder="0" allowTransparency="true"' + ((typeof id !== 'undefined') ? ' id="' + id + '"' : '') + '></iframe>');
		} else {
			parent.append('<object type="text/html" data="' + url + '" width="' + width + '" height="' + height + '"' + ((typeof id !== 'undefined') ? ' id="' + id + '"' : '') + '></object>');
		}
	},

	/**
	 * Fix column headers if multiple lines.
	 *
	 * @param query
	 * @param baseHeight
	 */
	fixTableHeaders: function(query, baseHeight) {
		$(query).each(function() {
			baseHeight = baseHeight || 18;

			var table = $(this);
			var height = baseHeight;

			table.find('.sort-link').each(function() {
				var linkHeight = $(this).height();

				if (linkHeight > height) {
					height = linkHeight;
				}
			});

			if (height > baseHeight) {
				table.find('.sort-link, .sort-tab').css('height', height);
			}
		});
	},

	/**
	 * Format a locale to a specific structure.
	 *
	 * @param format
	 * @param divider
	 * @return string
	 */
	formatLocale: function(format, divider) {
		divider = divider || '-';
		format = format || 1;

		switch (format) {
			case 1:
			default:
				return Core.locale.replace('-', divider);
			break;
			case 2:
				var parts = Core.locale.split('-');
				return parts[0] + divider + parts[1].toUpperCase();
			break;
			case 3:
				return Core.locale.toUpperCase().replace('-', divider);
			break;
		}
	},

	/**
	 * Convert a datetime string to a users local time zone and return as a string using the specified format.
	 *
	 * http://www.w3.org/TR/html5/common-microsyntaxes.html#valid-global-date-and-time-string
	 *
	 * @param format
	 * @param datetime (2010-07-22T07:41-07:00)
	 * @return string
	 */
	formatDatetime: function(format, datetime) {
		var localDate;

		if (!datetime) {
			localDate = new Date();
		} else {
			// gecko
			localDate = new Date(datetime);

			// webkit
			if (isNaN(localDate.getTime())) { // 2010-07-22 07:41 GMT-0700
				datetime = datetime.substring(0,10) + ' ' + datetime.substring(11,16) + ':00 GMT' + datetime.substring(16,19) + datetime.substring(20,22);
				localDate = new Date(datetime);
			}

			// safari still thinking different
			if (isNaN(localDate.getTime())) { // 2010/07/22 07:41 GMT-0700
				datetime = datetime.substring(0,4) + '/' + datetime.substring(5,7) + '/' + datetime.substring(8,29);
				localDate = new Date(datetime);
			}

			// trident
			if (isNaN(localDate.getTime())) { // 07-22 07:41 GMT-0700 2010
				datetime = datetime.substring(5,10) + ' ' + datetime.substring(11,16) + ' GMT' + datetime.substring(23,28) + ' ' + datetime.substring(0,4);
				localDate = new Date(datetime);
			}

			if (isNaN(localDate.getTime())) {
				return false;
			}
		}

		if (!format) {
			format = 'yyyy-MM-ddThh:mmZ';
		}

		var hr = localDate.getHours(),
			meridiem = 'AM';

		if (hr > 12) {
			hr -= 12;
			meridiem = 'PM'

		} else if (hr === 12) {
			meridiem = 'PM'

		} else if (hr === 0) {
			hr = 12;
		}

		var tz = parseInt(localDate.getTimezoneOffset() / 60 * -1, 10);

		if (tz < 0) {
			tz = '-' + Core.zeroFill(Math.abs(tz), 2) + ':00';
		} else {
			tz = ' + ' + Core.zeroFill(Math.abs(tz), 2) + ':00';
		}

		format = format.replace('yyyy', localDate.getFullYear());
		format = format.replace('MM', Core.zeroFill(localDate.getMonth() + 1,2));
		format = format.replace('dd', Core.zeroFill(localDate.getDate(),2));
		format = format.replace('HH', Core.zeroFill(localDate.getHours(),2));
		format = format.replace('hh', Core.zeroFill(hr,2));
		format = format.replace('mm', Core.zeroFill(localDate.getMinutes(),2));
		format = format.replace('a', meridiem);
		format = format.replace('Z', tz);

		return format;
	},

	/**
	 * Detect the browser type, based on feature detection and not user agent.
	 *
	 * @return object
	 */
	getBrowser: function() {
		if (Core.browser) {
			return Core.browser;
		}

		var s = $.support,
			browser = '',
			version = 0;

		if (!s.hrefNormalized && !s.tbody && !s.style && !s.opacity) {
			if (typeof document.body.style.maxHeight !== "undefined" || window.XMLHttpRequest) {
				browser = 'ie';
				version = 7;
			} else {
				browser = 'ie';
				version = 6;
			}

		} else if (s.hrefNormalized && s.tbody && s.style && !s.opacity) {
			browser = 'ie';
			version = 8;

		// $.browser was removed from jQuery in version 1.9
		} else if (typeof $.browser !== 'undefined') {
			if ($.browser.mozilla) {
				browser = 'ff';
			} else if ($.browser.msie) {
				browser = 'ie';
			} else if ($.browser.webkit) {
				if (navigator.userAgent.toLowerCase().indexOf('chrome') >= 0) {
					browser = 'chrome';
				} else {
					browser = 'safari';
				}
			} else if ($.browser.opera) {
				browser = 'opera';
			}

			version = parseInt($.browser.version, 10);
		}

		Core.browser = {
			name: browser,
			full: browser + version,
			version: version
		};

		return Core.browser;
	},

	/**
	 * Get the hash from the URL.
	 *
	 * @return string
	 */
	getHash: function() {
		var hash = location.hash || "";

		return hash.substr(1, hash.length);
	},

	/**
	 * Return the language based off locale.
	 *
	 * @return string
	 */
	getLanguage: function() {
		return Core.locale.split('-')[0];
	},

	/**
	 * Return the region based off locale.
	 *
	 * @return string
	 */
	getRegion: function() {
		return Core.locale.split('-')[1];
	},

	/**
	 * Conveniently jump to a page.
	 *
	 * @param url
	 * @param base
	 */
	goTo: function(url, base) {
		window.location.href = (base ? Core.baseUrl : '') + url;

		if (window.event)
			window.event.returnValue = false;
	},

	/**
	 * Include a JavaScript file via XHR.
	 *
	 * @param url
	 * @param success
	 * @param cache - defaults to true
	 */
	include: function(url, success, cache) {
		$.ajax({
			url: url,
			dataType: 'script',
			success: success,
			cache: cache !== false
		});
	},

	/**
	 * Checks to see if the argument is a function/callback.
	 *
	 * @param callback
	 * @return boolean
	 */
	isCallback: function(callback) {
		return (callback && typeof callback === 'function');
	},

	/**
	 * Is the browser using IE?
	 *
	 * @param version
	 * @return boolean
	 */
	isIE: function(version) {
		var browser = Core.getBrowser();

		if (version) {
			return (version === browser.version)
		}

		return (browser.name === 'ie');
	},

	/**
	 * Loads either a JavaScript or CSS file, by default deferring the load until after other
	 * content has loaded. The file type is determined by using the file extension.
	 *
	 * @param path
	 * @param deferred - true by default
	 * @param callback
	 */
	load: function(path, deferred, callback) {
		deferred = deferred !== false;

		if (Page.loaded || !deferred) {
			Core.loadDeferred(path, callback);
		} else {
			Core.deferredLoadQueue.push(path);
		}
	},

	/**
	 * Determine which type to load.
	 *
	 * @param path
	 * @param callback
	 */
	loadDeferred: function(path, callback) {
		var queryIndex = path.indexOf("?");
		var extIndex = path.lastIndexOf(".") + 1;
		var ext = path.substring(extIndex, queryIndex === -1 ? path.length : queryIndex);

		switch (ext) {
			case 'js':
				Core.loadDeferredScript(path, callback);
			break;
			case 'css':
				Core.loadDeferredStyle(path);
			break;
		}
	},

	/**
	 * Include JS file.
	 *
	 * @param path
	 * @param callback
	 */
	loadDeferredScript: function(path, callback) {
		$.ajax({
			url: path,
			cache: true,
			global: false,
			dataType: 'script',
			success: callback
		});
	},

	/**
	 * Include CSS file; must be done this way because of IE (of course).
	 *
	 * @param path
	 * @param media
	 */
	loadDeferredStyle: function(path, media) {
		$('head').append('<link rel="stylesheet" href="' + path + '" type="text/css" media="' + (media || "all") + '" />');
	},

	/**
	 * Replace {0}, {1}, etc. with the passed arguments.
	 *
	 * @param str
	 * @return string
	 */
	msg: function(str) {
		for (var i = 1, len = arguments.length; i < len; ++i) {
			str = str.replace("{" + (i - 1) + "}", arguments[i]);
		}

		return str;
	},

	/**
	 * This version can handle multiple occurences of the same token, but is slower due to the use of a RegExp. Only use if needed.
	 *
	 * @param str
	 * @return string
	 */
	msgAll: function(str) {
		for (var i = 1, len = arguments.length; i < len; ++i) {
			str = str.replace(new RegExp("\\{" + (i - 1) + "\\}", "g"), arguments[i]);
		}

		return str;
	},

	/**
	 * Return numeric values only within a string.
	 *
	 * @param string
	 * @return int
	 */
	numeric: function(string) {
		string = string.replace(/[^0-9]/gi, '');

		if (!string || isNaN(string)) {
			string = 0;
		}

		return string;
	},

	/**
	 * Open the link in a new window.
	 *
	 * @param node
	 * @return false
	 */
	open: function(node) {
		if (node.href)
			window.open(node.href);

		return false;
	},

	/**
	 * Helper function for event preventDefault.
	 *
	 * @param e
	 */
	preventDefault: function(e) {
		e.preventDefault();
	},

	/**
	 * Run on page load!
	 */
	processLoadQueue: function() {
		if (Core.deferredLoadQueue.length > 0) {
			for (var i = 0, path; path = Core.deferredLoadQueue[i]; i++) {
				Core.load(path);
			}
		}
	},

	/**
	 * Generate a random number between 0 and up to the argument.
	 *
	 * @param no
	 * @return int
	 */
	randomNumber: function(no) {
		return Math.floor(Math.random() * no);
	},

	/**
	 * Scroll to a specific part of the page.
	 *
	 * @param target
	 * @param duration
	 * @param callback
	 */
	scrollTo: function(target, duration, callback) {
		target = $(target);

		if (target.length !== 1) {
			return;
		}

		var win = $(window),
			winTop = win.scrollTop(),
			winBottom = winTop + win.height(),
			top = target.offset().top;

		top -= 15;

		if (top >= winTop && top <= winBottom) {
			return;
		}

		// $.browser was removed from jQuery in version 1.9
		if (typeof $.browser !== 'undefined') {
			$($.browser.webkit ? 'body' : 'html').animate({
				scrollTop: top
			},
			duration || 350,
			callback || null);
		}
	},

	/**
	 * Scroll to a specific part of the page (enough to make sure it's fully visible).
	 *
	 * @param target
	 * @param duration
	 * @param callback
	 */
	scrollToVisible: function(target, duration, callback) {
		target = $(target);

		if (target.length !== 1) {
			return;
		}

		var win = $(window),
			winTop = win.scrollTop(),
			winBottom = winTop + win.height(),
			top = target.offset().top,
			bottom = top + target.height();

		top -= 15;
		bottom += 15;

		if (top >= winTop && bottom <= winBottom) {
			return;
		}

		// $.browser was removed from jQuery in version 1.9
		if (typeof $.browser !== 'undefined') {
			$($.browser.webkit ? 'body' : 'html').animate({
				scrollTop: (top < winTop ? top : bottom - win.height())
			},
			duration || 350,
			callback || null);
		}
	},

	/**
	 * Helper function for event stopPropagation and preventDefault.
	 *
	 * @param e
	 */
	stopEvent: function(e) {
		e.stop();
	},

	/**
	 * Helper function for event stopPropagation.
	 *
	 * @param e
	 */
	stopPropagation: function(e) {
		e.stopPropagation();
	},

	/**
	 * Trims specific characters off the end of a string.
	 *
	 * @param string
	 * @param c
	 * @return string
	 */
	trimChar: function(string, c) {
		if (string.substr(0, 1) === c)
			string = string.substr(1, (string.length - 1));

		if (string.substr((string.length - 1), string.length) === c)
			string = string.substr(0, (string.length - 1));

		return string;
	},

	/**
	 * Trims specific characters off the right end of a string.
	 *
	 * @param string
	 * @param charlist
	 * @return string
	 */
	trimRight: function(string, charlist) {
		charlist = !charlist ? ' \\s\u00A0' : (charlist + '').replace(/([\[\]\(\)\.\?\/\*\{\}\+\$\^\:])/g, '\\$1');

		return (string + '').replace( new RegExp('[' + charlist + ']+$', 'g') , '');
	},

	/**
	 * Apply global functionality to certain UI elements.
	 *
	 * @param context
	 */
	ui: function(context) {
		context = context || document;

		if (Core.isIE(6)) {
			$(context).find('button.ui-button').hover(
				function() {
					if (!this.disabled || this.className.indexOf('disabled') == -1) {
						$(this).addClass('hover');
					}
				},
				function() {
					$(this).removeClass('hover');
				}
			);
		}

		if (Core.project !== 'bam') {
			$(context).find('button.ui-button').click(function(e) {
				var self = $(this);
				var alt = self.attr('data-text');

				if (typeof alt === 'undefined') {
					alt = "";
				}

				if (this.tagName.toLowerCase() === 'button' && alt !== "") {
					if (self.attr('type') === 'submit') {
						e.preventDefault();
						e.stopPropagation();

						self.find('span span').html(alt);
						self.removeClass('hover')
							.addClass('processing')
							.attr('disabled', 'disabled');

						// Manually submit
						self.parents('form').submit();
					}
				}

				return true;
			});
		}
	},

	/**
	 * Zero-fills a number to the specified length (works on floats and negatives, too).
	 *
	 * @param number
	 * @param width
	 * @param includeDecimal
	 * @return string
	 */
	zeroFill: function(number, width, includeDecimal) {
		if (typeof includeDecimal === 'undefined') {
			includeDecimal = false;
		}

		var result = parseFloat(number),
			negative = false,
			length = width - result.toString().length,
			i = length - 1;

		if (result < 0) {
			result = Math.abs(result);
			negative = true;
			length++;
			i = length - 1;
		}

		if (width > 0) {
			if (result.toString().indexOf('.') > 0) {
				if (!includeDecimal) {
					length += result.toString().split('.')[1].length;
				}

				length++;
				i = length - 1;
			}

			if (i >= 0) {
				do {
					result = '0' + result;
				} while (i--);
			}
		}

		if (negative) {
			return '-' + result;
		}

		return result;
	},

	/**
	 * Fire a Google Analytics event asynchronously.
	 */
	trackEvent: function(eventCategory, eventAction, eventLabel) {
		window._gaq = _gaq || [];
		_gaq.push(['_trackEvent', eventCategory, eventAction, eventLabel]);
	},

	/**
	 * Fire a GA event on click
	 * @param selector jquery element selector
	 * @param eventCategory GA category if data-category not specified, Core.project if neither specified
	 * @param eventAction GA action if data-action not specified, "Click" if neither specified
	 * @param eventLabel GA label if data-label not specified, Core.locale if neither specified
	 */
	bindTrackEvent: function(selector, eventCategory, eventAction, eventLabel) {
		$(selector).on('click.analytics', function() {
			var self = $(this);
			eventCategory = self.data('category') || eventCategory || Core.project;
			eventAction = self.data('action') || eventAction || "Click";
			eventLabel = self.data('label') || eventLabel || Core.locale;
			Core.trackEvent( eventCategory, eventAction, eventLabel );
		});
	},


	/**
	 * Utility for boxes that can be closed permanently.
	 * e.g: New Feature Box, BlizzCon Bar
	 *
	 * @param nodeQuery
	 * @param cookieId
	 * @param options - startDate, endDate, cookieParams, fadeIn, trackingCategory, trackingAction, onShow, onHide
	 */
	showUntilClosed: function(nodeQuery, cookieId, options) {
		options = options || {};

		var node = $(nodeQuery),
			COOKIE_NAME = 'bnet.closed.' + cookieId;

		if (!node.length || !Cookie.isSupported() || Cookie.read(COOKIE_NAME)) {
			return false;
		}

		// Date validation
		var now = new Date();

		if (options.startDate) {
			var startDate = new Date(options.startDate);

			if ((startDate - now) > 0) {
				return false;
			}
		}

		if (options.endDate) {
			var endDate = new Date(options.endDate);

			if ((endDate - now) < 0) {
				return false;
			}
		}

		// Show the node
		if (options.fadeIn) {
			node.fadeIn(options.fadeIn, options.onShow);
		} else {
			node.show();

			if (options.onShow) {
				options.onShow();
			}
		}

		// Click events
		var cookieParams = $.extend({
			path: Core.baseUrl,
			expires: 8760
		}, options.cookieParams || {});

		node.delegate('a', 'click', function() {
			var self = $(this),
				trackingLabel = self.data('label'),
				closeButton = (this.rel === 'close');

			if (closeButton) {
				node.hide();

				if (options.onHide) {
					options.onHide();
				}
			}

			if (closeButton || !options.closeButtonOnly) {
				Cookie.create(COOKIE_NAME, 1, cookieParams);
			}

			if (trackingLabel) {
				Marketing.trackImpression(options.trackingCategory || 'Tracking', options.trackingAction || 'Click', trackingLabel);
			}
		});

		return true;
	}

};

$(function() {
	Core.initialize();
});
