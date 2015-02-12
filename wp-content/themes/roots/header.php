<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<title><?php bloginfo('name'); ?> | <?php echo (is_front_page()) ? bloginfo('description') : wp_title(''); ?></title>
	
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<meta name="description" content="Specializing in new and used wine barrels, racks, wine barrel planters and metal recycling services available to anyone in almost any quantity." />

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/blueprint/screen.css">
<?php if (class_exists('RGForms')) { ?>
	<link rel="stylesheet" href="<?php echo plugins_url(); ?>/gravityforms/css/forms.css">
<?php } ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/typography.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/fish.css">
	<!--[if lt IE 8]><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/blueprint/ie.css"><![endif]-->

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php site_url(); ?>/feed/">

	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/libs/modernizr-1.7.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script>window.jQuery || document.write("<script src='<?php echo get_stylesheet_directory_uri(); ?>/js/libs/jquery-1.5.1.min.js'>\x3C/script>")</script>
	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-37223883-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
	
	
	<?php wp_head(); ?>

<?php if (get_option('roots_google_analytics') !== "") { ?>
	<script>
		var _gaq=[["_setAccount","<?php echo get_option('roots_google_analytics') ?>"],["_trackPageview"]];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
		g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
		s.parentNode.insertBefore(g,s)}(document,"script"));
	</script>
	
<?php } ?>

</head>
<body <?php $page_slug = $post->post_name; body_class($page_slug); ?>>
	<div id="wrap" class="container" role="document">
		<header id="banner" class="span-24" role="banner">
			<div class="container">
				<a id="logo" href="<?php bloginfo('wpurl'); ?>/"><img src="<?php bloginfo('template_url') ?>/img/header.png" title="Country Connection Barrels and Racks" alt="Country Connection Logo" /></a>
				<nav id="nav-main" role="navigation">
					<?php wp_nav_menu(array('theme_location' => 'primary_navigation')); ?>
				</nav>		
			</div>
		</header>
