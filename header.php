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
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<a href="<?php echo esc_url(home_url('/')); ?>"> <div class="header-menu-logo"></div></a>
					<?php wp_nav_menu(array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container_class' => 'nav-menu-container')); ?>
						<input id="toggle" type="checkbox">
						<label class="toggle-container" for="toggle">
							<span class="button button-toggle"></span>
		
							<button class="hamburger--slider" type="button">
								<span class="hamburger-box">
									<span class="hamburger-inner"></span>
								</span>
							</button>
						</label>
				</nav><!-- #site-navigation -->



			</header><!-- #masthead -->

	






			
			<div id="content" class="site-content">