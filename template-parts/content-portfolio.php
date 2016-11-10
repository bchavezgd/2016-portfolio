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
	<div class="entry-header">
		<?php
		$permalink = esc_url( get_permalink() ) ;
		if( has_post_thumbnail() ) {
			if( is_sticky() ){
				the_post_thumbnail('full', ['class'=>'hero']);
				the_title( '<h2 class="entry-title"><a href="' . $permalink  . '" rel="bookmark">', '</a></h2>' );

			}
			else {
				// display in the loop.
				the_post_thumbnail('loop', ['class'=>'hero']);
				the_title( '<h2 class="entry-title"><a href="' . $permalink . '" rel="bookmark">', '</a></h2>' );

			};
		} else {
			the_title( '<h2 class="entry-title"><a href="' . $permalink . '" rel="bookmark">', '</a></h2>' );
		}
		?>

	</div><!-- .entry-header -->
</article>
