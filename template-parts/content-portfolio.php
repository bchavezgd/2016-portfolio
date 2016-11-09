<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bchavez
 *
 * in loop
 */

?>
<!-- content-portfolio.php -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		$permalink = esc_url( get_permalink() ) ;
		if( has_post_thumbnail() ) {
			if( is_sticky() ){
				the_post_thumbnail('full', ['class'=>'hero']);
				the_title( '<h2 class="entry-title"><a href="' . $permalink  . '" rel="bookmark">', '</a></h2>' );

			} elseif ( is_single() ) {
				the_post_thumbnail('full', ['class'=>'hero']) ;
				the_title( '<h1 class="entry-title content-margin">', '</h1>' );

			} else {
				// display in the loop.
				the_post_thumbnail('loop', ['class'=>'hero']);
				the_title( '<h2 class="entry-title"><a href="' . $permalink . '" rel="bookmark">', '</a></h2>' );

			};
		} else {

				if ( is_single() ) {
					the_title( '<h1 class="entry-title content-margin">', '</h1>' );

				} else {
					the_title( '<h2 class="entry-title"><a href="' . $permalink . '" rel="bookmark">', '</a></h2>' );

				}
		}
		?>

	</header><!-- .entry-header -->
	<?php if( is_single() ) : ?>
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
	endif;
	//end if is_single().
?>
</article>
