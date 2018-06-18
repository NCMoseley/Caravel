<?php
/**
 * The template for displaying all pages.
 *
 * @package Caravel_Web_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while (have_posts()) : the_post(); ?>

			<div><h1>pagepagepage</h1></div>

				<?php get_template_part('template-parts/content', 'page'); ?>

			<?php endwhile; // End of the loop.?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
