<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bchavez
 */

?>

	</div><!-- #content .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<section class="wrapper">
			<div class="widget-site-footer-container">
				<?php
				if ( is_active_sidebar( 'site-footer-a' ) ) { ?>
					<div class="">
						<?php dynamic_sidebar( 'site-footer-a' ); ?>
					</div>
					<?php
				}
				if ( is_active_sidebar( 'site-footer-b' ) ) { ?>
					<div class="">
						<?php dynamic_sidebar( 'site-footer-b' ); ?>
					</div>
				<?php
				}
				if ( is_active_sidebar( 'site-footer-c' ) ) { ?>
					<div class="">
						<?php dynamic_sidebar( 'site-footer-c' ); ?>
					</div>
				 <?php } ?>
			</div>
			<div class="site-info small">
				<a href="<?php home_url(); ?>" rel="designer">Brian Chavez</a>
				<?php printf( esc_html__( '&copy; %s', 'bchavez_portfolio' ), get_the_date('Y') ); ?>
			</div>
			<!-- .site-info -->
		</section>
		<!-- end section.wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
