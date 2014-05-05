<!-- DO NOT TOUCH -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" class="en-gb">
<head xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<meta http-equiv="imagetoolbar" content="false" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<!-- YOU CAN TOUCH NOW -->
<!-- (If you know what you're doing) -->
<!-- Description of CMS -->
<meta name="description" content="<?php echo lang('description:Site'); ?>" />
<!-- Description of CMS END -->
<?php foreach ($version as $cms_item): ?>
<title><?php echo $cms_item['title_CMS'] ?> - <?php echo lang('menu:forum')?></title>
<?php endforeach ?>
<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/meta/favicon.ico" />
<!-- The Styles & Javascripts of the CMS -->
<!-- Le Styles -->
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/css/common-game-site.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/css/wow.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/css/lightbox.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/css/cms.min.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/css/cms.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/css/locale/en-gb.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/css/legal/ratings.css" />
<!-- Le Javascripts -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/third-party.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/common-game-site.js"></script>
<script type="text/javascript">
//<![CDATA[
var Core = Core || {},
Login = Login || {};
Core.staticUrl = '/wow/static';
Core.sharedStaticUrl = 'assets/local-common';
Core.baseUrl = '/wow/en';
Core.projectUrl = '/wow';
Core.cdnUrl = 'http://media.blizzard.com';
Core.supportUrl = 'http://eu.battle.net/support/';
Core.secureSupportUrl = 'https://eu.battle.net/support/';
Core.project = 'wow';
Core.locale = 'en-gb';
Core.language = 'en';
Core.region = 'eu';
Core.shortDateFormat = 'dd/MM/yyyy';
Core.dateTimeFormat = 'dd/MM/yyyy HH:mm';
Core.loggedIn = false;
Core.userAgent = 'web';
Login.embeddedUrl = 'https://eu.battle.net/login/login.frag';
var Flash = Flash || {};
Flash.videoPlayer = 'http://media.blizzard.com/global-video-player/themes/wow/video-player.swf';
Flash.videoBase = 'http://media.blizzard.com/wow/media/videos';
Flash.ratingImage = 'http://media.blizzard.com/global-video-player/ratings/wow/en-gb.jpg';
Flash.expressInstall = 'http://media.blizzard.com/global-video-player/expressInstall.swf';
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-544112-16']);
_gaq.push(['_setDomainName', '.battle.net']);
_gaq.push(['_setAllowLinker', true]);
_gaq.push(['_trackPageview']);
//]]>
</script>
<!-- The Styles & Javascripts of the CMS END -->
</head>
<body class="en-gb homepage news">
<div id="wrapper">
<!-- User Panel -->
<div id="service">
<ul class="service-bar">
<li class="service-cell service-home">
<a href="<?php echo base_url();?>" tabindex="50" accessKey="1" title="BattleCMS HOME" data-action=" HOME">&nbsp;</a>
<div id="bnet-app-tooltip" style="display: none">
<div class="tooltip-arrow"></div>
<div class="tooltip-wrapper">
<a href="javascript:;" class="close" rel="close" data-label="Close"></a>
<div class="content">
<h3 class="sub-title">Launcher Update</h3>
<h2 class="title">Get the Desktop App for BattleCMS Now</h2>
<ul>
<li>All your games in 1 place</li>
<li>Log in once</li>
<li>Automatic game updates</li>
</ul>
</div>
<span class="clear"><!-- --></span>
<a href="http://battle.net/app/" class="button">Learn more</a>
<a href="javascript:;" rel="close" data-label="Close">No thanks</a>
</div>
</div>
<script type="text/javascript">
//<![CDATA[
Core.showUntilClosed('#bnet-app-tooltip', 'bnet.app.tooltip', {
startDate: '2013/09/07',
endDate: '2013/11/07',
cookieParams: { expires: 720 }
});
//]]>
</script>
</li>
<li class="service-cell service-welcome">
<a href="?login" onclick="return Login.open()">Log in</a> or <a href="account/creation/tos.html">Create an Account</a>
</li>
<li class="service-cell service-shop">
<a href='shop/' class="service-link" data-action="Shop">Shop</a>
</li>
<li class="service-cell service-account">
<a href="account/management/" class="service-link" tabindex="50" accesskey="3" data-action="Account">Account</a>
</li>
<li class="service-cell service-support service-support-enhanced">
<a href="#support" class="service-link service-link-dropdown" tabindex="50" accesskey="4" id="support-link" onclick="return false" style="cursor: progress" rel="javascript" data-action="Support - Support">Support<span class="no-support-tickets" id="support-ticket-count"></span></a>
<div class="support-menu" id="support-menu" style="display:none;">
<div class="support-primary">
<ul class="support-nav">
<li>
<a href="support/" tabindex="55" class="support-category" id="support-nav-kb" data-action="Support - Knowledge Center">
<strong class="support-caption">Knowledge Center</strong>
Browse our support articles
</a>
</li>
<li>
<a href="support/ticket/status" tabindex="55" class="support-category" id="support-nav-tickets" data-action="Support - Your Support Tickets">
<strong class="support-caption">Your Support Tickets</strong>
View your active tickets (login required).
</a>
</li>
</ul>
<span class="clear"><!-- --></span>
</div>
<div class="support-secondary"></div>
<!--[if IE 6]> <iframe id="support-shim" src="javascript:false;" frameborder="0" scrolling="no" style="display: block; position: absolute; top: 0; left: 9px; width: 297px; height: 400px; z-index: -1;"></iframe>
<script type="text/javascript">
//<![CDATA[
(function(){
var doc = document;
var shim = doc.getElementById('support-shim');
shim.style.filter = 'progid:DXImageTransform.Microsoft.Alpha(style=0,opacity=0)';
shim.style.display = 'block';
})();
//]]>
</script>
<![endif]-->
</div>
</li>
<li class="service-cell service-explore">
<a href="#explore" tabindex="50" accesskey="5" class="dropdown" id="explore-link" onclick="return false" style="cursor: progress" rel="javascript" data-action="Explore - Explore">Explore</a>
<div class="explore-menu" id="explore-menu" style="display:none;">
<div class="explore-primary">
<ul class="explore-nav">
<li>
<a href="http://battle.net/" tabindex="55" data-action="Explore - Flame.net Home">
<?php foreach ($version as $cms_item): ?>
<strong class="explore-caption"><?php echo $cms_item['title_CMS'] ?> Home</strong>
<?php endforeach ?>
</a>
</li>
<li>
<a href="shop" tabindex="55" data-action="Explore - Shop">
<strong class="explore-caption">Shop</strong>
</a>
</li>
<li>
<a href="account/management/" tabindex="55" data-action="Explore - Account">
<strong class="explore-caption">Account</strong>
</a>
</li>
<li>
<a href="support/" tabindex="55" data-action="Explore - Support">
<strong class="explore-caption">Support</strong>
</a>
</li>
</ul>
<div class="explore-links">
<h2 class="explore-caption">More</h2>
<ul>
<?php foreach ($version as $cms_item): ?>
<li><a href="what-is/" tabindex="55" data-action="Explore - What is Flame.net?">What is <?php echo $cms_item['title_CMS'] ?>?</a></li>
<?php endforeach ?>
<li><a href="realid/" tabindex="55" data-action="Explore - What is Real ID?">What is Real ID?</a></li>
<li><a href="account/parental-controls/index.html" tabindex="55" data-action="Explore - Parental Controls">Parental Controls</a></li>
<li><a href="security/" tabindex="55" data-action="Explore - Account Security">Account Security</a></li>
<li><a href="http://jobs.blizzard.com/?utm_campaign=Blizzard_Jobs&amp;utm_source=Battle_net&amp;utm_medium=Explore" tabindex="55" data-action="Explore - Work At Blizzard">Work At Blizzard</a></li>
<li><a href="http://battle.net/games/classic" tabindex="55" data-action="Explore - Classic Games">Classic Games</a></li>
<li><a href="https://battle.net/account/support/index.html" tabindex="55" data-action="Explore - Account Support">Account Support</a></li>
</ul>
</div>
<span class="clear"><!-- --></span>
<!--[if IE 6]> <iframe id="explore-shim" src="javascript:false;" frameborder="0" scrolling="no" style="display: block; position: absolute; top: 0; left: 9px; width: 409px; height: 400px; z-index: -1;"></iframe>
<script type="text/javascript">
//<![CDATA[
(function(){
var doc = document;
var shim = doc.getElementById('explore-shim');
shim.style.filter = 'progid:DXImageTransform.Microsoft.Alpha(style=0,opacity=0)';
shim.style.display = 'block';
})();
//]]>
</script>
<![endif]-->
</div>
<ul class="explore-secondary">
<li class="explore-game explore-game-wow">
<a href="http://battle.net/wow/" tabindex="55" data-action="Explore - wow">
<span class="explore-game-inner">
<strong class="explore-caption">World of Warcraft</strong>
</span>
</a>
</li>
<li class="explore-game explore-game-d3">
<a href="http://battle.net/d3/" tabindex="55" data-action="Explore - d3">
<span class="explore-game-inner">
<strong class="explore-caption">Diablo III</strong>
</span>
</a>
</li>
<li class="explore-game explore-game-sc2">
<a href="http://battle.net/sc2/" tabindex="55" data-action="Explore - sc2">
<span class="explore-game-inner">
<strong class="explore-caption">StarCraft® II</strong>
</span>
</a>
</li>
<li class="explore-game explore-game-hs">
<a href="http://battle.net/hearthstone/" tabindex="55" data-action="Explore - hs">
<span class="explore-game-inner">
<strong class="explore-caption">Hearthstone™</strong>
</span>
</a>
</li>
<li class="explore-game explore-game-heroes">
<a href="http://www.heroesofthestorm.com/en-gb" tabindex="55" data-action="Explore - heroes">
<span class="explore-game-inner">
<strong class="explore-caption">Heroes of the Storm™</strong>
</span>
</a>
</li>
</ul>
</div>
</li>
</ul>
<div id="warnings-wrapper">
<!--[if lt IE 8]> <div id="browser-warning" class="warning warning-red">
<div class="warning-inner2">
You are using an outdated web browser.<br />
<a href="http://eu.blizzard.com/support/article/browserupdate">Upgrade</a> or <a href="http://www.google.com/chromeframe/?hl=en-GB" id="chrome-frame-link">install Google Chrome Frame</a>.
<a href="#close" class="warning-close" onclick="App.closeWarning('#browser-warning', 'browserWarning'); return false;"></a>
</div>
</div>
<![endif]-->
<!--[if lt IE 8]> <script type="text/javascript" src="assets/js/third-party/CFInstall.min.js?v=58"></script>
<script type="text/javascript">
//<![CDATA[
$(function() {
var age = 365 * 24 * 60 * 60 * 1000;
var src = 'https://www.google.com/chromeframe/?hl=en-GB';
if ('http:' == document.location.protocol) {
src = 'http://www.google.com/chromeframe/?hl=en-GB';
}
document.cookie = "disableGCFCheck=0;path=/;max-age="+age;
$('#chrome-frame-link').bind({
'click': function() {
App.closeWarning('#browser-warning');
CFInstall.check({
mode: 'overlay',
url: src
});
return false;
}
});
});
//]]>
</script>
<![endif]-->
<noscript>
<div id="javascript-warning" class="warning warning-red">
<div class="warning-inner2">
JavaScript must be enabled to use this site.
</div>
</div>
</noscript>
</div>
<script type="text/javascript">
//<![CDATA[
$(function() {
var category = Core.project + ' - GNB';
Core.bindTrackEvent('#service .service-home a', category);
Core.bindTrackEvent('#service .service-account a', category);
Core.bindTrackEvent('#service .service-shop a', category);
Core.bindTrackEvent('#support-link', category);
Core.bindTrackEvent('#support-nav-kb', category);
Core.bindTrackEvent('#support-nav-tickets', category);
Core.bindTrackEvent('#ticket-summary', category);
Core.bindTrackEvent('#explore-link', category);
Core.bindTrackEvent('.explore-nav li a', category);
});
//]]>
</script>
</div>
<!-- User Panel END -->
<div id="header">
<!-- Search -->
<div class="search-bar">
<form action="/wow/en/search" method="get" autocomplete="off">
<div>
<input type="text" class="search-field input" name="q" id="search-field" maxlength="200" tabindex="40" alt="<?php echo lang('search');?>" value="<?php echo lang('search');?>" />
<input type="submit" class="search-button" value="" tabindex="41" />
</div>
</form>
</div>
<!-- Search END -->
<h1 id="logo"><?php anchor('home', ''.lang('menu:home').'')?></h1>
<!-- Header -->
<div class="header-plate">
<ul class="menu" id="menu">
<li class="menu-home" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
<?=anchor('home', '<span itemprop="name">'.lang('menu:home').'</span>')?>
</li>
<li class="menu-game" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
<?=anchor('game', '<span itemprop="name">'.lang('menu:game').'</span>')?>
</li>
<li class="menu-community" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
<?=anchor('community', '<span itemprop="name">'.lang('menu:community').'</span>')?>
</li>
<li class="menu-media" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
<?=anchor('media', '<span itemprop="name">'.lang('menu:media').'</span>')?>
</li>
<li class="menu-forums" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
<a class="menu-active"<?=anchor('forum', '<span itemprop="name">'.lang('menu:forum').'</span>')?>
</li>
<li class="menu-services" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
<?=anchor('shop', '<span itemprop="name">'.lang('menu:shop').'</span>')?>
</li>
</ul>
<div class="user-plate">
<a href="?login" class="card-character plate-logged-out" onclick="return Login.open('https://battle.net/login/login.frag');">
<span class="card-portrait"></span>
<span class="wow-login-key"></span>
<span class="login-msg"><strong>Log in now</strong> to enhance and personalize your experience!</span>
</a>
</div>
</div>
<!-- Header END -->
</div>