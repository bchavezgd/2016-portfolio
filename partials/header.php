<?php
/**
	* this is the header  stuff
	*/
?>

<?php if ( get_header_image() ) : ?>

	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
	</a>
	<?php endif; // End header image check. ?>

<header id="masthead" class="site-header" role="banner">
  <div class="site-branding">
    <?php
    if ( is_front_page() && is_home() ) : ?>
      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    <?php else : ?>
      <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
    <?php
    endif;

    $description = get_bloginfo( 'description', 'display' );
    if ( $description || is_customize_preview() ) : ?>
      <p class="site-description">
        <?php echo $description; /* WPCS: xss ok. */ ?>
      </p>
    <?php
    endif;
    ?>
  </div><!-- .site-branding -->

  <nav id="site-navigation" class="main-navigation" role="navigation">
    <button class="btn btn-primary menu-toggle" aria-controls="primary-menu" aria-expanded="false">
      <?php esc_html_e( 'Menu', 'bchavez_portfolio' ); ?>
    </button>
    <?php
      wp_nav_menu( array(
        'theme_location'  => 'primary',
        'menu_id'         => 'primary-menu',
				'container_class' => 'menu-first nav-container'
      ) );
    ?>
</nav><!-- #site-navigation --> </header><!-- #masthead -->
