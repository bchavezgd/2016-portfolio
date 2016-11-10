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

	while ( have_posts() ) : the_post(); ?>



		 <header class="entry-header">
		<?php
			if( has_post_thumbnail() ) {
				the_post_thumbnail('full', ['class'=>'hero']) ;
			}
			the_title( '<h1 class="entry-title content-margin">', '</h1>' );
			?>

		</header><!-- .entry-header -->
		<div class="entry-content content-margin">
		<?php
			the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses(
						__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bchavez_portfolio' ), array('span' => array( 'class' => array() ) )
					),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				)
			);
		?>
		</div><!-- .entry-content -->
		<footer class="entry-footer">
			<div class="entry-meta content-margin">
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bchavez_portfolio' ),
					'after'  => '</div>',
				) );
				bchavez_portfolio_categories_list();
				bchavez_portfolio_tag_list();
			?>
			</div>
			<!-- .entry-meta -->
		</footer>
		<!-- .entry-footer -->
<?php
	endwhile; // End of the loop.
	wp_nav_menu( array(
	  'theme_location'  => 'portfolio-post',
	  'menu_id'         => 'portfolio-post',
		'container_class' => 'portfolio-nav nav-container content-margin'
	) );
	dynamic_sidebar( 'post-footer-widget' );
echo '</main><!-- #main -->';

get_footer();
