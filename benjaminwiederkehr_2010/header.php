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
	<title><?php bloginfo('name'); ?></title>
	<!-- ——————————————————————————————————————————————————————————————————— Normal -->
	<meta name="Keywords" content="<?php bloginfo('name'); ?>, Benjamin, Wiederkehr, Benjamin Wiederkehr, Interactive Things, Datavisualization.ch, Interaction Design, User Experience Design, Data Visualization" />
	<?php }; ?>
	<meta name="Description" content="<?php bloginfo('name'); ?>, <?php bloginfo('description'); ?>" />
	<meta name="Author" content="Benjamin Wiederkehr" />
	<meta name="Copyright" content="<?php print date("Y"); ?>" />
	<meta name="Distribution" content="Global" />
	<meta name="Language" content="en" />
	<meta name="Robots" content="ALL" />
	<!-- ——————————————————————————————————————————————————————————————————— IMAGE -->
	<link rel="image_src" href="<?php echo get_template_directory_uri() . '/assets/img/benjaminwiederkehr_logo_dark.png'; ?>" />
	<meta property="og:image" content="<?php echo get_template_directory_uri() . '/assets/img/benjaminwiederkehr_logo_dark.png'; ?>" />
	<!-- ——————————————————————————————————————————————————————————————————— FAVICON -->
	<link rel="icon" href="<?php echo get_template_directory_uri() . '/assets/img/favicon.ico'; ?>" type="image/x-icon" />
	<!-- ——————————————————————————————————————————————————————————————————— CSS -->
	<link rel="stylesheet" href="http://benjaminwiederkehr.com/assets/css/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<!-- ——————————————————————————————————————————————————————————————————— JS -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
	<script type="text/javascript" src="https://use.typekit.com/aea1puq.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
<!-- ——————————————————————————————————————————————————————————————————— RSS -->
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!-- ——————————————————————————————————————————————————————————————————— WP HEAD -->
	<?php wp_head(); ?>
</head>
<!-- ——————————————————————————————————————————————————————————————————— Body -->
<body class='<?php single_cat_title(); ?>'>
<div class="container">
	<div id="header" class="span-24">
		<div class="span-6">
			<h1>
				<a href="<?php echo get_settings('home'); ?>" rel="me" title="<?php bloginfo('name'); ?>">
					<span class="title">Benjamin Wiederkehr</span>
					<span class="subtitle">Archive</span>
				</a>
			</h1>
		</div><!-- .span-6 -->
	</div><!-- span-24 -->
