<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bchavez
 * Template Name: Full Width
 */

get_header();

echo '<main id="main" class="site-main" role="main">';

	while ( have_posts() ) : the_post();

		get_template_part('template-parts/content-portfolio');
		// the_post_navigation();

	endwhile; // End of the loop.
	wp_nav_menu( array(
	  'theme_location'  => 'portfolio-post',
	  'menu_id'         => 'portfolio-post',
		'container_class' => 'portfolio-nav nav-container content-margin'
	) );
	dynamic_sidebar( 'post-footer-widget' );
echo '</main><!-- #main -->';

get_footer();
