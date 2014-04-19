<?php
/*
 * Copyright (C) 2014 Luis Cortés <https://qualtiva.com>
 *
 * Do not edit or add to this file if you wish to upgrade Qualtiva to newer
 * versions in the future. If you wish to customize Qualtiva for your
 * needs please refer to http://www.qualtiva.com for more information.
 *
 * @author Luis Cortés <luis@qualtiva.com>
 * @copyright 2013 Qualtiva
 * International Registered Trademark & Property of Qualtiva
 *
 */
?>
<!-- DO NOT TOUCH -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" class="en-gb">
<head xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<meta http-equiv="imagetoolbar" content="false" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<!-- YOU CAN TOUCH NOW -->
<!-- (If you know what you're doing) -->
<!-- Description of CMS -->
<meta name="description" content="BattleCMS is a free CMS developed by One for World of Warcraft Emulated Servers!" />
<!-- Description of CMS END -->
<?php foreach ($version as $cms_item): ?>
<title><?php echo lang('account:of'); ?> <?php echo $cms_item['title_CMS']; ?></title>
<?php endforeach ?>
<!-- The Styles & Javascripts of the CMS -->
<!-- Le Styles -->
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/account/local-common/css/common.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/account/css/bnet.css" />
<link rel="stylesheet" type="text/css" media="print" href="<?php echo base_url();?>assets/account/css/bnet-print.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/account/css/legal/ratings.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/account/css/inputs.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/account/css/account-creation/streamlined-creation.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/account/css/locale/es-es.css" />
<!-- Le Javascripts -->
<script type="text/javascript" src="<?php echo base_url();?>assets/account/local-common/js/third-party/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/account/local-common/js/common/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/account/local-common/js/third-party/class-inheritan.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/account/local-common/js/third-party/swfobject-2.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/account/local-common/js/common.js"></script>
<script type="text/javascript">
//<![CDATA[
var Core = Core || {},
Login = Login || {};
Core.staticUrl = '/account/static';
Core.sharedStaticUrl = '/account/static/local-common';
Core.baseUrl = '/account';
Core.projectUrl = '/account';
Core.cdnUrl = 'http://media.blizzard.com/';
Core.supportUrl = 'http://us.battle.net/support/';
Core.secureSupportUrl = 'https://us.battle.net/support/';
Core.project = 'bam';
Core.locale = 'es-es';
Core.language = 'es';
Core.region = 'us';
Core.shortDateFormat = 'dd/MM/yyyy';
Core.dateTimeFormat = 'dd/MM/yyyy HH:mm';
Core.loggedIn = false;
Core.userAgent = 'web';
Login.embeddedUrl = 'https://us.battle.net/login/login.frag';
var Flash = Flash || {};
Flash.videoPlayer = 'http://media.blizzard.com/global-video-player/themes/bam/video-player.swf';
Flash.videoBase = 'http://media.blizzard.com/bam/media/videos';
Flash.ratingImage = '../../../media.blizzard.com/global-video-player/ratings/bam/es-es.html';
Flash.expressInstall = 'http://media.blizzard.com/global-video-player/expressInstall.swf';
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-544112-16']);
_gaq.push(['_setDomainName', '.battle.net']);
_gaq.push(['_setAllowLinker', true]);
_gaq.push(['_trackPageview', '/account/creation/tos.html[/account/creation/start-TRACKING]?-TRACKING']);
//]]>
</script>
</head>
<body class="es-es creation">
<script>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&amp;l='+l:'';j.async=true;j.src=
'../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);})
(window,document,'script','dataLayer','GTM-589KTQ');
</script> <div id="layout-top">
<div class="wrapper">
<div id="header">
<div id="search-bar">
<form action="<?php echo base_url();?>search" method="get" id="search-form">
<div>
<input type="text" name="q" id="search-field" value="Buscar en Battle.net" maxlength="35" alt="Buscar en Battle.net" tabindex="50" accesskey="q" />
<input type="submit" id="search-button" value="" title="Buscar en Battle.net" tabindex="50" />
</div>
</form>
</div>
<h1 id="logo"><a href="<?php echo base_url();?>" tabindex="50" accesskey="h">Battle.net</a></h1>
<div id="navigation">
<div id="page-menu" class="large">
<h2 class="isolated"><?php echo lang('creation:account');?></h2>
<span class="clear"></span>
</div>
<span class="clear"></span>
</div>
</div>
<div id="service">
<ul class="service-bar">
<li class="service-cell service-home">
<a href="http://us.battle.net/" tabindex="50" accessKey="1" title="Battle.net" data-action="Battle.net Home"> </a>
</li>
<li class="service-cell service-welcome">
<a href="https://us.battle.net/login/es/?ref=https://us.battle.net/account/creation/tos.html&amp;app=bam" onclick="return Login.open()">Inicia sesión</a> o <a href="tos.html">Crea una cuenta</a>
</li>
<li class="service-cell service-shop">
<a href='https://us.battle.net/shop/' class="service-link" data-action="Shop">Tienda</a>
</li>
<li class="service-cell service-account">
<a href="https://us.battle.net/account/management/" class="service-link" tabindex="50" accesskey="3" data-action="Account">Cuenta</a>
</li>
<li class="service-cell service-support service-support-enhanced">
<a href="#support" class="service-link service-link-dropdown" tabindex="50" accesskey="4" id="support-link" onclick="return false" style="cursor: progress" rel="javascript" data-action="Support - Support">Asistencia<span class="no-support-tickets" id="support-ticket-count"></span></a>
<div class="support-menu" id="support-menu" style="display:none;">
<div class="support-primary">
<ul class="support-nav">
<li>
<a href="http://us.battle.net/support/" tabindex="55" class="support-category" id="support-nav-kb" data-action="Support - Knowledge Center">
<strong class="support-caption">Artículos de asistencia</strong>
Explorar base de datos
</a>
</li>
<li>
<a href="https://us.battle.net/support/ticket/status" tabindex="55" class="support-category" id="support-nav-tickets" data-action="Support - Your Support Tickets">
<strong class="support-caption">Tus consultas</strong>
Ver historial completo de tus consultas (debes iniciar sesión).
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
<a href="#explore" tabindex="50" accesskey="5" class="dropdown" id="explore-link" onclick="return false" style="cursor: progress" rel="javascript" data-action="Explore - Explore">Explorar</a>
<div class="explore-menu" id="explore-menu" style="display:none;">
<div class="explore-primary">
<ul class="explore-nav">
<li>
<a href="http://us.battle.net/" tabindex="55" data-action="Explore - Battle.net Home">
<strong class="explore-caption">Battle.net</strong>
</a>
</li>
<li>
<a href="https://us.battle.net/shop/" tabindex="55" data-action="Explore - Shop">
<strong class="explore-caption">Tienda</strong>
</a>
</li>
<li>
<a href="https://us.battle.net/account/management/" tabindex="55" data-action="Explore - Account">
<strong class="explore-caption">Cuenta</strong>
</a>
</li>
<li>
<a href="http://us.battle.net/support/" tabindex="55" data-action="Explore - Support">
<strong class="explore-caption">Asistencia</strong>
</a>
</li>
</ul>
<div class="explore-links">
<h2 class="explore-caption">Más</h2>
<ul>
<li><a href="http://us.battle.net/what-is/" tabindex="55" data-action="Explore - ¿Qué es Battle.net?">¿Qué es Battle.net?</a></li>
<li><a href="https://us.battle.net/account/parental-controls/index.html" tabindex="55" data-action="Explore - Control paterno">Control paterno</a></li>
<li><a href="http://us.battle.net/security/" tabindex="55" data-action="Explore - Seguridad de cuentas">Seguridad de cuentas</a></li>
<li><a href="http://jobs.blizzard.com/?utm_campaign=Blizzard_Jobs&amp;utm_source=Battle_net&amp;utm_medium=Explore" tabindex="55" data-action="Explore - ¡Trabaja en Blizzard!">¡Trabaja en Blizzard!</a></li>
<li><a href="https://us.battle.net/account/support/password-reset.html" tabindex="55" data-action="Explore - ¿No puedes iniciar sesión?">¿No puedes iniciar sesión?</a></li>
<li><a href="https://us.battle.net/account/download/" tabindex="55" data-action="Explore - Descarga de juegos">Descarga de juegos</a></li>
<li><a href="https://us.battle.net/account/management/claim-code.html" tabindex="55" data-action="Explore - Canjear códigos">Canjear códigos</a></li>
<li><a href="http://us.battle.net/games/classic" tabindex="55" data-action="Explore - Juegos clásicos">Juegos clásicos</a></li>
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
<a href="http://us.battle.net/wow/" tabindex="55" data-action="Explore - wow">
<span class="explore-game-inner">
<strong class="explore-caption">World of Warcraft®</strong>
</span>
</a>
</li>
<li class="explore-game explore-game-d3">
<a href="http://us.battle.net/d3/" tabindex="55" data-action="Explore - d3">
<span class="explore-game-inner">
<strong class="explore-caption">Diablo® III</strong>
</span>
</a>
</li>
<li class="explore-game explore-game-sc2">
<a href="http://us.battle.net/sc2/" tabindex="55" data-action="Explore - sc2">
<span class="explore-game-inner">
<strong class="explore-caption">StarCraft® II</strong>
</span>
</a>
</li>
<li class="explore-game explore-game-hs">
<a href="http://us.battle.net/hearthstone/" tabindex="55" data-action="Explore - hs">
<span class="explore-game-inner">
<strong class="explore-caption">Hearthstone™</strong>
</span>
</a>
</li>
<li class="explore-game explore-game-heroes">
<a href="http://www.heroesofthestorm.com/es-es" tabindex="55" data-action="Explore - heroes">
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
<script type="text/javascript">
//<![CDATA[
$(function() {
App.saveCookie('html5Warning');
App.resetCookie('browserWarning');
});
//]]>
</script>
<!--[if lt IE 8]> <div id="browser-warning" class="warning warning-red">
<div class="warning-inner2">
No estás utilizando la última versión de tu navegador.<br />
<a href="http://us.blizzard.com/support/article/browserupdate">Actualizar</a> o <a href="http://www.google.com/chromeframe/?hl=es-ES" id="chrome-frame-link">instalar Google Chrome Frame</a>.
<a href="#close" class="warning-close" onclick="App.closeWarning('#browser-warning', 'browserWarning'); return false;"></a>
</div>
</div>
<![endif]-->
<!--[if lt IE 8]> <script type="text/javascript" src="/account/static/local-common/js/third-party/CFInstall.min.js?v=58"></script>
<script type="text/javascript">
//<![CDATA[
$(function() {
var age = 365 * 24 * 60 * 60 * 1000;
var src = 'https://www.google.com/chromeframe/?hl=es-ES';
if ('http:' == document.location.protocol) {
src = 'http://www.google.com/chromeframe/?hl=es-ES';
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
Debes tener activado JavaScript para utilizar esta página.
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
</div>
</div>