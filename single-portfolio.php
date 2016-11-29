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
	<article id="post-<?php the_ID() ?>" <?php post_class('project content-margin'); ?>>


		 <header class="project-header">
		<?php
			// if( has_post_thumbnail() ) {
			// 	the_post_thumbnail('full', ['class'=>'hero']) ;
			// }
			the_title( '<h1 class="entry-title header-underline">', '</h1>' );
			?>

		</header><!-- .entry-header -->
		<!-- <div class="project-content entry-content "> -->
		<div class="project-content">
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
		</article>
		<!-- end .project -->
		<section id="follow" class="wrapper">

			<?php
				// WP_Query arguments
				$args = array (
					'post_type' => array( 'static_page' ),
					// 'posts_per_page' => '15',
					'pagename' => 'follow-me',
				);
				// The Query
				$query = new WP_Query( $args );

			// the loop
			if( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();

					the_title('<h2 class="fa-title header-underline content-margin">','</h2>');
					echo '<div class="fa-wrapper content-margin">';
					the_content();
					echo '</div><!--end fa-wrapper -->';
				};
			};
			wp_reset_postdata();

			?>
		</section>
		<!-- end .wrapper -->
		<!-- follow me section -->
		<footer class="entry-footer">
			<div class="wrapper">
				<section class="entry-meta">

				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bchavez_portfolio' ),
						'after'  => '</div>',
					) );
					bchavez_portfolio_categories_list();
					bchavez_portfolio_tag_list();
				?>
				</section>
			</div>
			<!-- .entry-meta -->
		</footer>
		<!-- .entry-footer -->
<?php
	endwhile; // End of the loop.
	echo '<section class="wrapper">';
	wp_nav_menu( array(
	  'theme_location'  => 'portfolio-post',
	  'menu_id'         => 'portfolio-post',
		'container_class' => 'portfolio-nav nav-container content-margin'
	) );

echo '</section><!-- end .wrapper --></main><!-- #main -->';

get_footer();
