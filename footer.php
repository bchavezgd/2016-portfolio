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
				if ( is_active_sidebar( 'site-footer-a' ) ) {
					dynamic_sidebar( 'site-footer-a' );
				}
				if ( is_active_sidebar( 'site-footer-b' ) ) {
					dynamic_sidebar( 'site-footer-b' );
				}
				if ( is_active_sidebar( 'site-footer-c' ) ) {
					dynamic_sidebar( 'site-footer-c' );
				}
				?>
			</div>
			<div class="site-info">
				<?php printf( esc_html__( '&copy; %2$s %1$s', 'bchavez_portfolio' ), '<a href="http://www.briandesignworks.com" rel="designer">Brian Chavez</a>', get_the_date('Y') ); ?>
			</div>
			<!-- .site-info -->
		</section>
		<!-- end section.wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
