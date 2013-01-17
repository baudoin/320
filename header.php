<!doctype html>  

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
<head>
	<meta charset="utf-8">
	
	<title><?php wp_title(''); ?></title>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-precomposed.png">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	
	<!-- wordpress head functions -->
	<?php wp_head(); ?>
	<!-- end of wordpress head -->

	<!--[if (lt IE 9) & (!IEMobile)]>
	<script src="js/selectivizr.min.js"></script>
	<![endif]-->
		
	<!-- drop Google Analytics Here -->

	<!-- end analytics -->
	
</head>

<body <?php body_class(); ?>>

	<div id="container">
		
		<header class="header" role="banner">
		
			<div id="inner-header" class="wrap clearfix">
				
				<p id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>
				
				<?php // bloginfo('description'); ?>
				
				<nav role="navigation">
					<?php main_nav(); ?>
				</nav>
			
			</div> <!-- end #inner-header -->
		
		</header> <!-- end header -->