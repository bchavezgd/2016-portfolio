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
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<div class="entry-header gray">

			<?php
				if( has_post_thumbnail() ) {
					?>
					<a href="<?php the_permalink(); ?>" rel="bookmark">
						<?php
					the_post_thumbnail('loop', ['class'=>'entry-thumbnail-loop ']);
					the_title( '<h2 class="entry-title">', '</h2>' );
					echo "</a>";
				} else {
					?>
					<a href="<?php the_permalink(); ?>" rel="bookmark">
						<?php
					the_title( '<h2 class="entry-title">', '</h2>' );
					echo "</a>";
				}
			?>
	</div><!-- .entry-header -->
</article>
