<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bchavez
 */

?>
<!-- content.php -->
<article id="post-<?php the_ID() ?>" <?php post_class(); ?>>
	<header class="entry-header clear">

		<?php
		$permalink = esc_url( get_permalink() ) ;
		// bchavez_post_hero();
		if( has_post_thumbnail() ) :
			echo '<div class="entry-meta">';
				if ( is_single() ) {
					the_title( '<h1 class="entry-title">', '</h1>' );
				} else {
					the_title( '<h2 class="entry-title"><a href="' . $permalink . '" rel="bookmark">', '</a></h2>' );
				}
				echo '</div><!-- .entry-meta -->';
			else :

		echo '<div class="entry-meta alignleft">';
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . $permalink . '" rel="bookmark">', '</a></h2>' );
			}
			echo '</div><!-- .entry-meta -->';


 endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		if( has_post_thumbnail() ) {
			echo '<figure><a href="' . $permalink . '">';
			the_post_thumbnail('loop');
			echo '</a></figure>';
		}; ?>
		<section>
			<?php
			the_excerpt( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses(
					__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bchavez_portfolio' ),
					array('span' => array( 'class' => array() ) )
				),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );?>
		</section>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bchavez_portfolio' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
		bchavez_portfolio_posted_on();
		bchavez_portfolio_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
