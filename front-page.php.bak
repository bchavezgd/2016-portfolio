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
			<p>
				 this is the front-page file.
			</p>
			<section>

				<?php
				$args = ['pagename' => 'about'];
				$query = new WP_query($args);
				if( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						the_content();
					};
				};
				wp_reset_postdata();
				?>
			</section>
			<section>

			</section>
			<section id="contact">
				<?php
					$args = ['page_id' => '199'];
					$query = new WP_query($args);
					if( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							the_content();
						};
					};
					wp_reset_postdata();

				?>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
