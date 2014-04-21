<div class="new-feature-tip" id="feature-tip" style="display: none">
<a href="http://us.battle.net/wow/es/zone/" data-label="World of Warcraft Game Guide" class="clickable">
<span class="title">¡ACTUALIZACIÓN!</span>
<strong>Gestas </strong>
<span class="desc">¡Échale un vistazo a la información actualizada en nuestra guía acerca de las nuevas Gestas en Mists of Pandaria!” </span>
</a>
<a href="javascript:;" class="close" rel="close" data-label="Close"></a>
</div>
<script type="text/javascript">
//<![CDATA[
Core.showUntilClosed('#feature-tip', 'mop.talent.calculator', {
startDate: '2012/11/28',
endDate: '2012/12/04',
cookieParams: { expires: 720 }
});
//]]>
</script>
</div>
<div id="content">
<div class="content-top body-top">
<div class="content-trail">
<ol class="ui-breadcrumb">
<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="http://us.battle.net/wow/es/" rel="np" class="breadcrumb-arrow" itemprop="url">
<span class="breadcrumb-text" itemprop="title">World of Warcraft</span>
</a>
</li>
<li class="last" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="index.html" rel="np" itemprop="url">
<span class="breadcrumb-text" itemprop="title"><?php echo lang('menu:community'); ?></span>
</a>
</li>
</ol>
</div>
<div class="content-bot clear">	
		<script type="text/javascript">
		//<![CDATA[
		$(document).ready(function(){
			Input.bind('#wowcharacter');
			Input.bind('#wowguild');
		});
		//]]>
		</script>
	
	<div id="left">
		<div class="profiles">
			<h4><?php echo lang('menu:community'); ?></h4>
			<div class="profiles-section">

	<div class="sidebar-module " id="sidebar-profiles-search">
			<div class="sidebar-title">
				<h3 class="header-3 title-profiles-search" >Perfiles</h3>
			</div>

		<div class="sidebar-content">
					<div class="profiles-search-block">
						<span class="profiles-search-title">Personaje</span>
						<form action="search" method="get">
							<input type="hidden" name="f" value="wowcharacter" />
							<input type="text" id="wowcharacter" alt="Nombre" name="q" />
							<button class="ui-button button1" type="submit"><span class="button-left"><span class="button-right">Búsqueda</span></span></button>
						</form>
					</div>
					<div class="profiles-search-block">
						<span class="profiles-search-title">Hermandad</span>
						<form action="http://us.battle.net/wow/es/search" method="get">
							<input type="hidden" name="f" value="wowguild" />
							<input type="text" id="wowguild" alt="Nombre" name="q" />
							<button class="ui-button button1" type="submit"><span class="button-left"><span class="button-right">Búsqueda</span></span></button>
						</form>
					</div>
		</div>
	</div>
				<p class="profiles-tip">Tip: inicia sesión para acceder a tu perfil.</p>
				<span class="clear"><!-- --></span>
			</div>
		</div>
		<div class="main-feature">
			<div class="main-feature-wrapper">
	<div class="sidebar-module " id="sidebar-leaderboards">
			<div class="sidebar-title">
				<h3 class="header-3 title-leaderboards" >Marcadores</h3>
			</div>

		<div class="sidebar-content">
					<div id="challenge-mode" class="leaderboard-content-block">
						<a href="http://us.battle.net/wow/es/challenge/dungeon/gate-of-the-setting-sun/" class="leaderboard-content-title">Modalidad de Desafío</a>
						<span class="leaderboard-content-desc">¡Ve los mejores tiempos para cada calabozo y reino!</span>
						<div class="group">
									<a href="http://us.battle.net/wow/es/challenge/dungeon/gate-of-the-setting-sun/">
										<span class="group-thumbnail thumb-gate-of-the-setting-sun"></span>
										<span class="group-name">Puerta del Sol Poniente</span>
										<span class="clear"><!-- --></span>
									</a>
									<a href="http://us.battle.net/wow/es/challenge/dungeon/mogushan-palace/">
										<span class="group-thumbnail thumb-mogushan-palace"></span>
										<span class="group-name">Palacio Mogu'shan</span>
										<span class="clear"><!-- --></span>
									</a>
									<a href="http://us.battle.net/wow/es/challenge/dungeon/scarlet-halls/">
										<span class="group-thumbnail thumb-scarlet-halls"></span>
										<span class="group-name">Cámaras Escarlata</span>
										<span class="clear"><!-- --></span>
									</a>
									<a href="http://us.battle.net/wow/es/challenge/dungeon/scarlet-monastery/">
										<span class="group-thumbnail thumb-scarlet-monastery"></span>
										<span class="group-name">Monasterio Escarlata</span>
										<span class="clear"><!-- --></span>
									</a>
									<a href="http://us.battle.net/wow/es/challenge/dungeon/scholomance/">
										<span class="group-thumbnail thumb-scholomance"></span>
										<span class="group-name">Scholomance</span>
										<span class="clear"><!-- --></span>
									</a>
									<a href="http://us.battle.net/wow/es/challenge/dungeon/shadopan-monastery/">
										<span class="group-thumbnail thumb-shadopan-monastery"></span>
										<span class="group-name">Monasterio del Shadopan</span>
										<span class="clear"><!-- --></span>
									</a>
									<a href="http://us.battle.net/wow/es/challenge/dungeon/siege-of-niuzao-temple/">
										<span class="group-thumbnail thumb-siege-of-niuzao-temple"></span>
										<span class="group-name">Asedio del Templo Niuzao</span>
										<span class="clear"><!-- --></span>
									</a>
									<a href="http://us.battle.net/wow/es/challenge/dungeon/stormstout-brewery/">
										<span class="group-thumbnail thumb-stormstout-brewery"></span>
										<span class="group-name">Cervecería del Trueno</span>
										<span class="clear"><!-- --></span>
									</a>
									<a href="http://us.battle.net/wow/es/challenge/dungeon/temple-of-the-jade-serpent/">
										<span class="group-thumbnail thumb-temple-of-the-jade-serpent"></span>
										<span class="group-name">Templo del Dragón de Jade</span>
										<span class="clear"><!-- --></span>
									</a>
						</div>
					</div>
					<div id="pvp-ladder" class="leaderboard-content-block">
						<a href="http://us.battle.net/wow/es/pvp/leaderboards/3v3" class="leaderboard-content-title">Jugador c. Jugador</a>
						<span class="leaderboard-content-desc">Ve las escalas de Arena y Campos de Batalla puntuados.</span>
						<div class="group">
								<a href="http://us.battle.net/wow/es/pvp/leaderboards/rbg">
									<span class="group-thumbnail thumb-battlegrounds"></span>
									<span class="group-name">Campos de Batalla
									</span>
									<span class="clear"><!-- --></span>
								</a>
								<a href="http://us.battle.net/wow/es/pvp/leaderboards/2v2">
									<span class="group-thumbnail thumb-arena-2v2"></span>
									<span class="group-name">Arenas 2c2
									</span>
	<span class="clear"><!-- --></span>
								</a>
								<a href="http://us.battle.net/wow/es/pvp/leaderboards/3v3">
									<span class="group-thumbnail thumb-arena-3v3"></span>
									<span class="group-name">Arenas 3c3
									</span>
	<span class="clear"><!-- --></span>
								</a>
								<a href="http://us.battle.net/wow/es/pvp/leaderboards/5v5">
									<span class="group-thumbnail thumb-arena-5v5"></span>
									<span class="group-name">Arenas 5c5
									</span>
	<span class="clear"><!-- --></span>
								</a>
						</div>	
					</div>
	<span class="clear"><!-- --></span>
		</div>
	</div>
			</div>
		</div>
	</div>
	
	<div id="right">

	<div class="sidebar-module " id="sidebar-auction-house">
			<div class="sidebar-title">


	<h3 class="header-3 title-auction-house" >
					Casa de Subastas



</h3>
			</div>

		<div class="sidebar-content">
			<ul>
						<li>
							<a href="http://us.battle.net/wow/es/vault/character/auction/" class="web-auction-house block">
								<span class="content-icon"></span>
								<span class="content-title">Casa de Subastas Web</span>
								<span class="content-desc">¡Ve, compra y vende en la web!</span>
	<span class="clear"><!-- --></span>
							</a>
						</li>
						<li>
							<a href="http://us.battle.net/wow/es/services/mobile-armory/" class="mobile-armory block">
								<span class="content-icon"></span>
								<span class="content-title">Aplicación Móvil </span>
								<span class="content-desc">Accessa la casa de subastas, chat de hermandad, y perfiles de personaje desde tu dispositivo móvil.</span>
	<span class="clear"><!-- --></span>
							</a>
						</li>
			</ul>
		</div>
	</div>

	<div class="sidebar-module " id="sidebar-social-media">
			<div class="sidebar-title">


	<h3 class="header-3 title-social-media" >
					Permanece Conectado



</h3>
			</div>

		<div class="sidebar-content">
			<ul class="social-media">
				<li class="atom-feed">
					<a href="http://us.battle.net/wow/es/feed/news" target="_blank"></a>
				</li>
					<li class="facebook">
						<a href="http://www.facebook.com/WarcraftES" title="World of Warcraft en Facebook"></a>
					</li>
					<li class="twitter">
						<a href="http://twitter.com/warcraft_ES" title="World of Warcraft en Twitter"></a>
					</li>
					<li class="youtube">
						<a href="http://www.youtube.com/WorldofWarcraftES" title="World of Warcraft en Youtube"></a>
					</li>
					<li class="reddit">
						<a href="http://www.reddit.com/r/wow" title="World of Warcraft on reddit"></a>
					</li>
	<span class="clear"><!-- --></span>
			</ul>
		</div>
	</div>
		

	<div class="sidebar-module " id="sidebar-blizzard-community">
			<div class="sidebar-title">


	<h3 class="header-3 title-blizzard-community" >
					Contenido de la Comunidad Blizzard



</h3>
			</div>

		<div class="sidebar-content">
				<ul>
							<li>
								<a href="http://us.blizzard.com/es-mx/community/insider/" class="blizzard-insider block" target="_blank">
									<span class="content-icon"></span>
									<span class="content-title">Blizzard Insider</span>
									<span class="content-desc">¿Te intrigan nuestras ideas y deseas suscribirte al boletín? ¡Ahora tienes la oportunidad de hacerlo!</span>
	<span class="clear"><!-- --></span>
								</a>
							</li>
							<li>
								<a href="http://us.blizzard.com/es-mx/community/blizzcast/" class="blizzcast block" target="_blank">
									<span class="content-icon"></span>
									<span class="content-title">Blizzcast</span>
									<span class="content-desc">El podcast oficial de Blizzard que incluye entrevistas con los desarrolladores, sesiones de Q&amp;A y más.</span>
	<span class="clear"><!-- --></span>
								</a>
							</li>
							<li>
								<a href="http://us.blizzard.com/es-mx/community/contests/" class="contests block" target="_blank">
									<span class="content-icon"></span>
									<span class="content-title">Concursos</span>
									<span class="content-desc">Concursos previos y actuales para que veas y participes. ¡Échales un vistazo!</span>
	<span class="clear"><!-- --></span>
								</a>
							</li>
				</ul>
		</div>
	</div>
		

	<div class="sidebar-module " id="sidebar-fan-contributions">
			<div class="sidebar-title">


	<h3 class="header-3 title-fan-contributions" >
					Contribuciones de fans



</h3>
			</div>

		<div class="sidebar-content">
			<ul>
	
		<li>
			<a href="http://us.battle.net/wow/es/media/fanart/" class="fanart block" target="_blank">
				<span class="content-thumb"></span>
				<span class="content-title">Fan Art</span>
	<span class="clear"><!-- --></span>
			</a>
						<a href="http://us.blizzard.com/es-mx/community/fanart/rules.html" class="tosubmit external">Enviar</a>
		</li>
	
		<li>
			<a href="http://us.battle.net/wow/es/media/comics/" class="comics block" target="_blank">
				<span class="content-thumb"></span>
				<span class="content-title">Cómics</span>
	<span class="clear"><!-- --></span>
			</a>
						<a href="http://us.blizzard.com/es-mx/community/contests/comic/" class="tosubmit external">Enviar</a>
		</li>
	
		<li>
			<a href="http://us.battle.net/wow/es/media/screenshots/" class="screenshot block" target="_blank">
				<span class="content-thumb"></span>
				<span class="content-title">Capturas de pantalla</span>
	<span class="clear"><!-- --></span>
			</a>
						<a href="http://us.blizzard.com/es-mx/community/screenshots/index.html" class="tosubmit external">Enviar</a>
		</li>
	
		<li>
			<a href="http://us.battle.net/wow/es/media/wallpapers/fan-art" class="wallpaper block" target="_blank">
				<span class="content-thumb"></span>
				<span class="content-title">Fondos de Fans</span>
	<span class="clear"><!-- --></span>
			</a>
						<a href="http://us.blizzard.com/es-mx/community/fanart/rules.html" class="tosubmit external">Enviar</a>
		</li>
	
	
			</ul>
		</div>
	</div>
	<span class="clear"><!-- --></span>
	</div>
	
	<span class="clear"><!-- --></span>
</div>
</div>
</div>