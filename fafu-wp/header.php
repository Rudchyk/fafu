<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name');?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>"> 
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/lightbox.css">
	<!--CSS print-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/print.css" media="print">
    <!--[if !IE]><!-->
		<script>if(/*@cc_on!@*/false){document.documentElement.className+='ie10';}</script>
	<!--<![endif]-->
	<!--[if IE 9]>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/ie.css" >
    <![endif]-->	
	<!--[if lt IE 9]>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/html5.js"></script>
	<![endif]-->
	<!--[if IE 8]>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/ie8.css" >
    <![endif]-->    
	<!--[if lt IE 8]>
	  <script>
	  	location.replace("<?php bloginfo('stylesheet_directory'); ?>/ie7/ie7.html");
	  </script>
	<![endif]-->
	<?php wp_head(); ?>	
</head>
<body>
	<!--main block-->
	<div class="main main_size">
		<!--header-->
		<header role="banner" class="header">
			<div class="h-top clearfix">
				<?php include (TEMPLATEPATH . '/team-list.php'); ?>
				<div class="hallo right"></div>
			</div>
			<div class="h-middle clearfix">
				<!--logo-->
				<div class="logo left">
					<a href="/">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
					</a>
				</div>
				<!--end logo-->	
				<div class="map right" id="ukraine-map"></div>			
			</div>
			<div class="h-bottom clearfix">
				<ul class="social-list h-social-list left">
					<li class="dib social-item"><noindex><a href="http://vk.com/americanfootballinua" class="icon social-icon vk-icon" target="_blank" rel="nofollow"></a></noindex></li>
					<li class="dib social-item"><noindex><a href="https://www.facebook.com/pages/Федерация-американского-футбола-Украины/102390313177835?ref=br_rs#" class="icon social-icon face-icon" target="_blank" rel="nofollow"></a></noindex></li>
					<li class="dib social-item"><noindex><a href="https://twitter.com/FAFUkraine" class="icon social-icon twitter-icon" target="_blank" rel="nofollow"></a></noindex></li>
					<li class="dib social-item"><noindex><a href="https://plus.google.com/100186958012968374741/posts" class="icon social-icon google-icon" target="_blank" rel="nofollow"></a></noindex></li>
					<!-- <li class="dib social-item"><noindex><a href="#" class="icon social-icon youtube-icon" target="_blank" rel="nofollow"></a></noindex></li> -->
					<li class="dib social-item"><span class="icon social-icon mail-icon popup-link popup-link-js" data-popup="mail"></span></li>
					<!-- <li class="dib social-item"><a href="<?php bloginfo('rss2_url'); ?>" class="icon social-icon rss-icon"></a></li> -->
				</ul>
				<!--search-->
				<form action="<?php bloginfo('url'); ?>/" method="get" name="searchform" role="search" class="search right">
					<fieldset>
						<label for="h-search" class="field-search-label"><?php _e('Поиск по сайту', 'kubrick'); ?>:</label>
						<input type="text" class="field field-search" name="s" id="h-search">
						<button class="no-button button-search no_select" name="Поиск"><i class="icon search-icon"></i></button>
					</fieldset>
				</form>
				<!--end search-->				
			</div>
		</header>
		<!--end header-->
		<!--main WP navigation-->
		<nav role="navigation" class="nav">
			<?php wp_nav_menu('menu=top'); ?>
		</nav>
		<!--end main WP navigation-->
		<?php include (TEMPLATEPATH . '/last-games.php'); ?>
		<?php include (TEMPLATEPATH . '/future-games.php'); ?>