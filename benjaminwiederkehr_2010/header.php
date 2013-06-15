<!DOCTYPE html>
<html lang="en">
<head>
	<!-- ——————————————————————————————————————————————————————————————————— META -->
	<meta charset="UTF-8" />
	<?php if ( is_single() ) { ?>
	<title><?php bloginfo('name'); ?> | <?php wp_title(''); ?></title>
	<!-- ——————————————————————————————————————————————————————————————————— Single -->
	<meta name="Keywords" content="<?php wp_title(''); ?>, Benjamin, Wiederkehr, Benjamin Wiederkehr, Interactive Things, Datavisualization.ch, Interaction Design, User Experience Design, Data Visualization" />
	<?php }; ?>
	<?php if ( ! is_single() ) { ?>
	<title><?php bloginfo('name'); ?><?php //bloginfo('description'); ?></title>
	<!-- ——————————————————————————————————————————————————————————————————— Normal -->
	<meta name="Keywords" content="<?php bloginfo('name'); ?>, Benjamin, Wiederkehr, Benjamin Wiederkehr, Interactive Things, Datavisualization.ch, Interaction Design, User Experience Design, Data Visualization" />
	<?php }; ?>
	<meta name="Description" content="<?php bloginfo('name'); ?>, <?php bloginfo('description'); ?>" />
	<meta name="Author" content="Benjamin Wiederkehr" />
	<meta name="Copyright" content="2012" />
	<meta name="Distribution" content="Global" />
	<meta name="Language" content="en" />
	<meta name="Robots" content="ALL" />
	<!-- ——————————————————————————————————————————————————————————————————— IMAGE -->
	<link rel="image_src" href="http://benjaminwiederkehr.com/assets/img/logos/benjaminwiederkehr_logo_dark.png" />
	<meta property="og:image" content="http://benjaminwiederkehr.com/assets/img/logos/benjaminwiederkehr_logo_dark.png" />
	<!-- ——————————————————————————————————————————————————————————————————— FAVICON -->
	<link rel="icon" href="http://benjaminwiederkehr.com/favicon.ico" type="image/x-icon" />
	<!-- ——————————————————————————————————————————————————————————————————— CSS -->
	<link rel="stylesheet" href="http://benjaminwiederkehr.com/assets/css/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<!--[if lt IE 8]>
	  <link rel="stylesheet" href="css/global/ie.css" type="text/css" media="screen, projection" />
	<![endif]-->
	<!-- ——————————————————————————————————————————————————————————————————— JS -->
	<script type="text/javascript" src="http://use.typekit.com/aea1puq.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
<!-- ——————————————————————————————————————————————————————————————————— RSS -->
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://feeds2.feedburner.com/artillery/Portfolio" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!-- ——————————————————————————————————————————————————————————————————— WP HEAD -->
	<?php wp_head(); ?>
</head>
<!-- ——————————————————————————————————————————————————————————————————— Body -->
<body class='<?php single_cat_title(); ?>'>
<div class="container">
	<div id="header" class="span-24">
		<div class="span-6">
			<h1><a href="<?php echo get_settings('home'); ?>" rel="me" title="<?php bloginfo('name'); ?>"><img src="http://benjaminwiederkehr.com/assets/img/logos/benjaminwiederkehr_archive_logo.png" width="230" height="150" alt="<?php bloginfo('name'); ?>" /></a></h1>
		</div><!-- .span-6 -->
		<?php if(is_home()): ?>
		<div class="span-18 last">
			<p>
				Wholeheartedly passionate about making things understandable.<br/>
				I create experiences, visualize data and craft useful things. Have a look!
			</p>
		</div><!-- .span-13 -->
		<a href="http://interactivethings.com" title="Interactive Things is available for work!" id="badge_hire" class="badge">For Hire!</a>
		<?php endif; ?>
	</div><!-- span-24 -->