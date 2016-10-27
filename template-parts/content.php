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
		if( has_post_thumbnail() ) {
			echo '<div class="entry-meta">';
			if( is_sticky() ){
				the_post_thumbnail('full');
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() )  . '" rel="bookmark">', '</a></h2>' );
				bchavez_portfolio_posted_on();
			} elseif ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
				bchavez_portfolio_posted_on();
			} else {
				the_title( '<h2 class="entry-title"><a href="' . $permalink . '" rel="bookmark">', '</a></h2>' );
				bchavez_portfolio_posted_on();
			};
			echo '</div><!-- .entry-meta -->';
		} else {
				echo '<div class="entry-meta alignleft">';
				if ( is_single() ) {
					the_title( '<h1 class="entry-title">', '</h1>' );
					bchavez_portfolio_posted_on();
				} else {
					the_title( '<h2 class="entry-title"><a href="' . $permalink . '" rel="bookmark">', '</a></h2>' );
					bchavez_portfolio_posted_on();
				}
				echo '</div><!-- .entry-meta -->';}
		?>
	</header><!-- .entry-header -->

	<div class="entry-content flex">
		<?php bchavez_entry_thumbnail_loop($permalink); ?>
		<!-- <section> -->
			<?php
			the_excerpt( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses(
					__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bchavez_portfolio' ),
					array('span' => array( 'class' => array() ) )
				),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );?>
		<!-- </section> -->

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bchavez_portfolio' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
		bchavez_portfolio_byline();
		bchavez_portfolio_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
