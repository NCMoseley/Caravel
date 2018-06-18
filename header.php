<?php
/**
 * The header for our theme.
 *
 * @package Caravel_Web_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html('Skip to content'); ?></a>

			<header id="masthead" class="site-header" role="banner">
			
<<<<<<< HEAD
			
				<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="header-menu-logo"></div>
=======
				<nav id="site-navigation" class="main-navigation navSlide" role="navigation">
				<a href="<?php echo esc_url(home_url('/')); ?>" <div class="header-menu-logo"></div></a>
>>>>>>> 29ff77b061f52750218ccdf9d0970dbfb9299991
				
					<?php wp_nav_menu(array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' )); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->


			
			<div id="content" class="site-content">
