<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bchavez
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="portfolio">
				<?php
					// WP_Query arguments
					$args = array (
						'post_type' => array( 'portfolio' ),
					);
					// The Query
					$query = new WP_Query( $args );

				// the loop
				if( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();

						get_template_part( 'template-parts/content-portfolio' );
					};
				};
				wp_reset_postdata();
				?>
			</section>
			<!-- end portfolio -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
