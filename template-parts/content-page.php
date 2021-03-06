<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bchavez
 */

?>

<article id="post-<?php the_ID(); ?>"<?php post_class('page-content'); ?>>
	<?php bchavez_post_hero(); ?>
	<div class="entry-content">
		<section>
		<?php
			the_content();
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bchavez_portfolio' ),
				'after'  => '</div>',
			) );
		?>
		</section>
	</div><!-- .entry-content -->
	<!-- <footer class="entry-footer"> -->
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'bchavez_portfolio' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	<!-- </footer> -->
	<!-- .entry-footer -->
</article><!-- #post-## -->
