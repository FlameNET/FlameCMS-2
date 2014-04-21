<div id="content">
<div class="content-top body-top">
<!-- Content Trail -->
<div class="content-trail">
<ol class="ui-breadcrumb">
<li class="last" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="/wow/en/" rel="np" itemprop="url">
<span class="breadcrumb-text" itemprop="title">World of Warcraft</span>
</a>
</li>
</ol>
</div>
<!-- Content Trail END -->
<div class="content-bot clear">
<!-- Slideshow -->
<div id="slideshow" class="ui-slideshow">
        <div class="slideshow">
		<?php foreach ($slideshow as $slideshow_item): ?>
			<div class="slide" id="<?php echo $slideshow_item['slide_id'] ?>" style="background-image: url('<?php echo $slideshow_item['url'] ?>'); <?php echo $slideshow_item['display'] ?>"></div>
		<?php endforeach ?>
        </div>
            <div class="paging">
                <a href="javascript:;" class="prev" onclick="Slideshow.prev();"></a>
                <a href="javascript:;" class="next" onclick="Slideshow.next();"></a>
            </div>

        <div class="caption">
            <h3><a href="javascript:;" class="link"></a></h3>
        </div>

        <div class="preview"></div>
        <div class="mask"></div>
    </div>
	<script type="text/javascript">
		//<![CDATA[
        $(function() {
            Slideshow.initialize('#slideshow', [
                {
                    image: "//bnetcmsus-a.akamaihd.net/cms/carousel_header/XBMCY795QIMR1393316955771.jpg",
                    desc: "",
                    title: "",
                    url: "http://battle.net/d3/en/blog/13032539/",
                    id: "13075416",
                    duration: 7
                },
                {
                    image: "//bnetcmsus-a.akamaihd.net/cms/carousel_header/58NEEFYFHHW81390833342761.jpg",
                    desc: "",
                    title: "",
                    url: "http://battle.net/hearthstone/en/blog/12440010/#blog",
                    id: "12644742",
                    duration: 7
                },
                {
                    image: "//bnetcmsus-a.akamaihd.net/cms/carousel_header/584E4NWRVHUA1390557025404.jpg",
                    desc: "",
                    title: "",
                    url: "http://battle.net/wow/en/blog/12346796/",
                    id: "12379144",
                    duration: 7
                }
            ]);

        });
		//]]>
		</script>
<!-- Slideshow END -->
<!-- Sidebar -->
<div class="right-sidebar">
	<!-- Advertisements -->
	<div id="sidebar-marketing" class="sidebar-module">
	<div class="bnet-offer">
	<div class="bnet-offer-bg">
		<a href="#" target="_blank" id="#" class="bnet-offer-image">
		<img src="//bnetcmsus-a.akamaihd.net/cms/ad_300x250/32WKK501BM5G1384352523717.jpg" width="300" height="250" alt="" />
		</a>
	</div>
	</div>
	</div>
	<!-- Advertisements END -->
<div class="sidebar" id="sidebar">
	<div class="sidebar-top">
	<div class="sidebar-bot">
	<!--
	<div id="sidebar-links" class="promo-ad">
		<a href="http://www.blizzard.com/gamescom" onclick="window.open(this.href); return false;" class="promo-gamescom2013">
		Gamescom 2013
		</a>
	</div>
	<img width="1" height="1" style="border:0" src="HTTPS://bs.serving-sys.com/BurstingPipe/ActivityServer.bs?cn=as&amp;ActivityID=417046&amp;ns=1" />
	-->
<div class="sidebar-module " id="sidebar-social-media">
	<div class="sidebar-title">
		<h3 class="header-3 title-social-media">
		<?php echo lang('1'); ?>
		</h3>
	</div>
<div class="sidebar-content">
	<ul class="social-media">
		<li class="atom-feed">
		<a href="#" target="_blank"></a>
		</li>
		<li class="facebook">
		<a href="<?php echo lang('Facebook'); ?>" title="<?php echo lang('title'); ?> <?php echo lang('11'); ?> Facebook"></a>
		</li>
		<li class="twitter">
		<a href="<?php echo lang('Twitter'); ?>" title="<?php echo lang('title'); ?> <?php echo lang('11'); ?> Twitter"></a>
		</li>
		<li class="youtube">
		<a href="<?php echo lang('Youtube'); ?>" title="<?php echo lang('title'); ?> <?php echo lang('11'); ?> Youtube"></a>
		</li>
		<li class="reddit">
		<a href="<?php echo lang('Reddit'); ?>" title="<?php echo lang('title'); ?> <?php echo lang('11'); ?> reddit"></a>
		</li>
	<span class="clear"><!-- --></span>
	</ul>
</div>
</div>
<div id="fb-root"></div>
<div id="dynamic-sidebar-target"><div class="sidebar-module " id="sidebar-expansion" style="">
<div class="sidebar-title">
<h3 class="header-3 title-expansion">
	<a href="#"><?php echo lang('2'); ?></a>
</h3>
</div>
<div class="sidebar-content">
<a href="#" class="sidebar-expansion"></a>
<ul id="expansion" class="trending-topics">
<ul>
<li><a href="#"><?php echo lang('3'); ?></a></li>
<li><a href="#"><?php echo lang('4'); ?></a></li>
<li><a href="#"><?php echo lang('5'); ?></a></li>
<li><a href="#"><?php echo lang('6'); ?></a></li>
<li><a href="#"><?php echo lang('7'); ?></a></li>
</ul>
</ul>
</div>
</div>
<div class="sidebar-module " id="sidebar-under-dev" style="">
<div class="sidebar-title">
<h3 class="header-3 title-under-dev">
<a href="#"><?php echo lang('8'); ?></a>
</h3>
</div>
<div class="sidebar-content">
<a href="#" class="latest-patch"></a>
</div>
</div>
<div class="sidebar-module " id="sidebar-sotd" style="">
<div class="sidebar-title">
<h3 class="header-3 title-sotd"><a href="#">Screenshot of the Day</a>
</h3>
</div>
<div class="sidebar-content">
<div class="sotd" style="background-image: url('http://media.blizzard.com/wow/media/screenshots/screenshot-of-the-day/mists-of-pandaria/mists-of-pandaria-ss0582-large-thumb.jpg');">
<a href="#" class="image"> </a>
<div class="caption">
<a href="#" class="view">All Screenshots</a>
<a href="#" class="submit">Submit Screenshot</a>
<span class="clear"><!-- --></span>
</div>
</div>
</div>
</div>
<div class="sidebar-module " id="sidebar-blizzard-posts" style="">
<div class="sidebar-title">
<h3 class="header-3 title-blizzard-posts"><a href="#"><?php echo lang('9'); ?></a>
</h3>
</div>
<div class="sidebar-content">
<ul class="articles-list-plain">
<li>
	<a href="#" class="title">Battleground Honor Adjustments</a>
	<a href="#" class="category">Battlegrounds and World PvP</a>
		<span class="date">03/03/14 13:44</span>
</li>	
<li>
	<a href="#" class="title">Warlords of Draenor Racial Traits</a>
	<a href="#" class="category">General</a>
		<span class="date">03/03/14 10:59</span>
</li>	
<li>
	<a href="#" class="title">New MVP</a>
	<a href="#" class="category">General</a>
		<span class="date">27/02/14 08:54</span>
</li>	
<li>
	<a href="#" class="title">Connected Realms Update - 28/02</a>
	<a href="#" class="category">General</a>
		<span class="date">21/02/14 08:53</span>
</li>	
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
//<![CDATA[
	$(function() {
		Sidebar.sidebar([
			{ "type": "expansion", "query": "" },
			{ "type": "under-dev", "query": "" },
			{ "type": "sotd", "query": "" },
			{ "type": "blizzard-posts", "query": "" }
		]);
	});
//]]>
</script>
</div>
<!-- Sidebar END -->
<div class="left-content" itemscope="itemscope" itemtype="http://schema.org/WebPageElement">
<div class= "left-content-inner">
<div class="featured-news-container">
<ul class="featured-news">
<!-- Featured News -->
<li>
<div class="article-wrapper">
		<a href="/wow/en/blog/12383903/free-character-migrations-available-05-03-2014" class="featured-news-link" data-category="wow" data-action="Blog_Click-Throughs" data-label="home 0 - eu - 12383903 - 12492647">
	<div class="article-image" style="background-image:url(//bnetcmsus-a.akamaihd.net/cms/connect_thumbnail/W4FVJ7J5O3381390338339697.jpg)">
	<div class="article-image-frame"></div>
	</div>
	<div class="article-content">
		<span class="article-title" title="Free Character Migrations Available">Free Character Migrations Available</span>
		<span class="article-summary">If you're on one of the listed source realms, you can move your characters to one of the designated destination realms and avoid the queues—for free!</span>
	</div>
		</a>
	<div class="article-meta">
		<a href="/wow/en/blog/12383903/free-character-migrations-available-05-03-2014#comments" class="comments-link">0</a>
		<span class="publish-date" title="05 Mar 2014 15:58 GMT">1 day ago</span>
	</div>
</div>
</li>
</ul>
</div>
<span class="clear"><!-- --></span>
<!-- Featured News END -->
<!-- Articles -->
<div id="blog-articles" class="blog-articles" itemscope="itemscope" itemtype="http://schema.org/Blog">
<div class="article-wrapper">
	<a href="/wow/en/blog/12383903/free-character-migrations-available-05-03-2014" itemprop="url">
	<div class="article-image" style="background-image:url(//bnetcmsus-a.akamaihd.net/cms/connect_thumbnail/W4FVJ7J5O3381390338339697.jpg)">
	<div class="article-image-frame"></div>
	</div>
	<div class="article-content" itemprop="blogPost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
<h2 class="header-2" >
	<span class="article-title" itemprop="headline">Free Character Migrations Available</span>
</h2>
<span class="clear"><!-- --></span>
<div class="article-summary" itemprop="description">If you're on one of the listed source realms, you can move your characters to one of the designated destination realms and avoid the queues—for free!</div>
<span class="clear"><!-- --></span>
<meta itemprop="datePublished" content="2014-03-05T15:58:48Z" />
<meta itemprop="dateModified" content="2014-03-05T15:58:48Z" />
<meta itemprop="inLanguage" content="en-GB" />
<meta itemprop="interactionCount" content="UserComments:0" />
<meta itemprop="thumbnailUrl" content="//bnetcmsus-a.akamaihd.net/cms/connect_thumbnail/W4FVJ7J5O3381390338339697.jpg" />
	</div>
	</a>
<div class="article-meta">
<span class="publish-date" title="05 Mar 2014 15:58 GMT">1 day ago</span>
</div>
<span class="clear"><!-- --></span>
</div>
</div>
<!-- Articles END -->
<span class="clear"><!-- --></span>
<div class="blog-load-more">
<a class="load-more" id="load-more" href="javascript:;"><?php echo lang('10'); ?></a>
<span class="clear"><!-- --></span>
</div>
</div>
</div>
<span class="clear"><!-- --></span>
<script type="text/javascript">
//<![CDATA[
$(function(){
		Blog.init({
			loadMore: true,
			loadMorePath: "/wow/en/blog/infinite",
			loadMoreArticleTarget: "#blog-articles",
			loadMoreArticleType: "blog",
			loadMoreArticleLimit: 11
		});
	});
//]]>
</script>
</div>
</div>
</div>