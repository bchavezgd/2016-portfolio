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
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bchavez_portfolio' ) );?> ">
        <?php printf( esc_html__( 'Proudly powered by %s', 'bchavez_portfolio' ), 'WordPress' ); ?>
      </a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'bchavez_portfolio' ), 'bchavez_portfolio', '<a href="http://www.briandesignworks.com" rel="designer">Brian Chavez</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
