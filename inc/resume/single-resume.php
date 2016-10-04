<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bchavez
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID() ?>" <?php post_class(); ?>>

				<header class="entry-header clear">
					<?php bchavez_post_hero(); ?>
				</header><!-- .entry-header -->
					<div class="entry-content">
					<section>
				<?php
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses(
							__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bchavez_portfolio' ),
							array('span' => array( 'class' => array() ) )
						),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );
					echo '</section>';

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bchavez_portfolio' ),
						'after'  => '</div>',
					) );
					?>
			</div><!-- .entry-content -->
					<footer class="entry-footer">
					<div class="entry-meta">
						<div class="flex flex-row flex-just-between">
							<?php bchavez_portfolio_posted_on(); ?>
							<?php bchavez_portfolio_categories_list(); ?>
						</div>
						<?php if ( 'post' === get_post_type() )  :?>
						<div class="flex flex-row flex-just-between">
							<?php
								bchavez_portfolio_tag_list();
								bchavez_portfolio_comments_link();
								bchavez_portfolio_edit_link();
								?>
						</div>
					<?php endif; ?>

					</div>
					<!-- end .entry-meta -->
				<?php the_post_navigation(); ?>
			</footer><!-- .entry-footer -->
		</article><!-- #post-## -->

		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) { comments_template(); }

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_sidebar();
get_footer();
