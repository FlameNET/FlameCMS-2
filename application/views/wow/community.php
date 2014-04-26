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
			<span class="breadcrumb-text" itemprop="title"><?php echo lang('menu:community'); ?>
			</span>
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
				<h4><?php echo lang('menu:community'); ?>
				</h4>
				<div class="profiles-section">
					<div class="sidebar-module " id="sidebar-profiles-search">
						<div class="sidebar-title">
							<h3 class="header-3 title-profiles-search"><?php echo lang('profiles'); ?></h3>
						</div>
						<div class="sidebar-content">
							<div class="profiles-search-block">
								<span class="profiles-search-title"><?php echo lang('character'); ?></span>
								<form action="search" method="get">
									<input type="hidden" name="f" value="wowcharacter"/>
									<input type="text" id="wowcharacter" alt="<?php echo lang('name'); ?>" name="q"/>
									<button class="ui-button button1" type="submit"><span class="button-left"><span class="button-right"><?php echo lang('search'); ?></span></span></button>
								</form>
							</div>
							<div class="profiles-search-block">
								<span class="profiles-search-title"><?php echo lang('guild'); ?></span>
								<form action="http://us.battle.net/wow/es/search" method="get">
									<input type="hidden" name="f" value="wowguild"/>
									<input type="text" id="wowguild" alt="<?php echo lang('name'); ?>" name="q"/>
									<button class="ui-button button1" type="submit"><span class="button-left"><span class="button-right"><?php echo lang('search'); ?></span></span></button>
								</form>
							</div>
						</div>
					</div>
					<p class="profiles-tip">
						<?php echo lang('profiles:tip'); ?>
					</p>
					<span class="clear">
					<!-- -->
					</span>
				</div>
			</div>
			<div class="main-feature">
				<div class="main-feature-wrapper">
					<div class="sidebar-module " id="sidebar-leaderboards">
						<div class="sidebar-title">
							<h3 class="header-3 title-leaderboards"><?php echo lang('title:leaderboards'); ?></h3>
						</div>
						<div class="sidebar-content">
							<div id="challenge-mode" class="leaderboard-content-block">
								<a href="http://us.battle.net/wow/es/challenge/dungeon/gate-of-the-setting-sun/" class="leaderboard-content-title"><?php echo lang('challenge:Mode'); ?></a>
								<span class="leaderboard-content-desc"><?php echo lang('fastest:times'); ?></span>
								<div class="group">
									<?php foreach ($pve_mode as $pve_mode_item): ?>
									<a href="<?php echo $pve_mode_item['link'] ?>"> <span class="group-thumbnail <?php echo $pve_mode_item['thumb'] ?>"></span>
									<span class="group-name"><?php echo $pve_mode_item['group-name'] ?>
									</span>
									<span class="clear">
									<!-- -->
									</span>
									</a>
									<?php endforeach ?>
								</div>
							</div>
							<div id="pvp-ladder" class="leaderboard-content-block">
								<a href="http://us.battle.net/wow/es/pvp/leaderboards/3v3" class="leaderboard-content-title"><?php echo lang('Player:vs:Player'); ?></a>
								<span class="leaderboard-content-desc"><?php echo lang('Battleground:and:Arena'); ?></span>
								<div class="group">
									<?php foreach ($pvp_mode as $pvp_mode_item): ?>
									<a href="<?php echo $pvp_mode_item['link'] ?>"> <span class="group-thumbnail <?php echo $pvp_mode_item['thumb'] ?>"></span>
									<span class="group-name"><?php echo $pvp_mode_item['group-name'] ?>
									</span>
									<span class="clear">
									<!-- -->
									</span>
									</a>
									<?php endforeach ?>
								</div>
							</div>
							<span class="clear">
							<!-- -->
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="right">
			<div class="sidebar-module " id="sidebar-auction-house">
				<div class="sidebar-title">
					<h3 class="header-3 title-auction-house"><?php echo lang('Auction:House'); ?></h3>
				</div>
				<div class="sidebar-content">
					<ul>
						<li>
						<a href="http://us.battle.net/wow/es/vault/character/auction/" class="web-auction-house block">
						<span class="content-icon"></span>
						<span class="content-title"><?php echo lang('web:auction:house'); ?></span>
						<span class="content-desc"><?php echo lang('web:auction:house:block'); ?></span>
						<span class="clear">
						<!-- -->
						</span>
						</a>
						</li>
						<li>
						<a href="http://us.battle.net/wow/es/services/mobile-armory/" class="mobile-armory block">
						<span class="content-icon"></span>
						<span class="content-title"><?php echo lang('mobile:armory'); ?></span>
						<span class="content-desc"><?php echo lang('mobile:armory:block'); ?></span>
						<span class="clear">
						<!-- -->
						</span>
						</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="sidebar-module " id="sidebar-social-media">
				<div class="sidebar-title">
					<h3 class="header-3 title-social-media"><?php echo lang('social:media'); ?></h3>
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
						<span class="clear">
						<!-- -->
						</span>
					</ul>
				</div>
			</div>
			<div class="sidebar-module " id="sidebar-blizzard-community">
				<div class="sidebar-title">
					<h3 class="header-3 title-blizzard-community"><?php echo lang('title:blizzard:community'); ?></h3>
				</div>
				<div class="sidebar-content">
					<ul>
						<li>
						<a href="http://us.blizzard.com/es-mx/community/insider/" class="blizzard-insider block" target="_blank">
						<span class="content-icon"></span>
						<span class="content-title">Blizzard Insider</span>
						<span class="content-desc">¿Te intrigan nuestras ideas y deseas suscribirte al boletín? ¡Ahora tienes la oportunidad de hacerlo!</span>
						<span class="clear">
						<!-- -->
						</span>
						</a>
						</li>
						<li>
						<a href="http://us.blizzard.com/es-mx/community/blizzcast/" class="blizzcast block" target="_blank">
						<span class="content-icon"></span>
						<span class="content-title">Blizzcast</span>
						<span class="content-desc">El podcast oficial de Blizzard que incluye entrevistas con los desarrolladores, sesiones de Q&amp;A y más.</span>
						<span class="clear">
						<!-- -->
						</span>
						</a>
						</li>
						<li>
						<a href="http://us.blizzard.com/es-mx/community/contests/" class="contests block" target="_blank">
						<span class="content-icon"></span>
						<span class="content-title">Concursos</span>
						<span class="content-desc">Concursos previos y actuales para que veas y participes. ¡Échales un vistazo!</span>
						<span class="clear">
						<!-- -->
						</span>
						</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="sidebar-module " id="sidebar-fan-contributions">
				<div class="sidebar-title">
					<h3 class="header-3 title-fan-contributions">
					Contribuciones de fans </h3>
				</div>
				<div class="sidebar-content">
					<ul>
						<li>
						<a href="http://us.battle.net/wow/es/media/fanart/" class="fanart block" target="_blank">
						<span class="content-thumb"></span>
						<span class="content-title">Fan Art</span>
						<span class="clear">
						<!-- -->
						</span>
						</a>
						<a href="http://us.blizzard.com/es-mx/community/fanart/rules.html" class="tosubmit external">Enviar</a>
						</li>
						<li>
						<a href="http://us.battle.net/wow/es/media/comics/" class="comics block" target="_blank">
						<span class="content-thumb"></span>
						<span class="content-title">Cómics</span>
						<span class="clear">
						<!-- -->
						</span>
						</a>
						<a href="http://us.blizzard.com/es-mx/community/contests/comic/" class="tosubmit external">Enviar</a>
						</li>
						<li>
						<a href="http://us.battle.net/wow/es/media/screenshots/" class="screenshot block" target="_blank">
						<span class="content-thumb"></span>
						<span class="content-title">Capturas de pantalla</span>
						<span class="clear">
						<!-- -->
						</span>
						</a>
						<a href="http://us.blizzard.com/es-mx/community/screenshots/index.html" class="tosubmit external">Enviar</a>
						</li>
						<li>
						<a href="http://us.battle.net/wow/es/media/wallpapers/fan-art" class="wallpaper block" target="_blank">
						<span class="content-thumb"></span>
						<span class="content-title">Fondos de Fans</span>
						<span class="clear">
						<!-- -->
						</span>
						</a>
						<a href="http://us.blizzard.com/es-mx/community/fanart/rules.html" class="tosubmit external">Enviar</a>
						</li>
					</ul>
				</div>
			</div>
			<span class="clear">
			<!-- -->
			</span>
		</div>
		<span class="clear">
		<!-- -->
		</span>
	</div>
</div>
</div>