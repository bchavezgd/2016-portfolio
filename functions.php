<?php
/**
 * bchavez functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bchavez
 */

if ( ! function_exists( 'bchavez_portfolio_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bchavez_portfolio_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on bchavez, use a find and replace
	 * to change 'bchavez_portfolio' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'bchavez_portfolio', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size('loop', 360);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'bchavez_portfolio' ),
		'portfolio-post' => esc_html__( 'Portfolio Post Nav', 'bchavez_portfolio'),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'bchavez_portfolio_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'bchavez_portfolio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bchavez_portfolio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bchavez_portfolio_content_width', 700 );
}
add_action( 'after_setup_theme', 'bchavez_portfolio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bchavez_portfolio_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bchavez_portfolio' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget widget-sidebar %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'site-footer-a', 'bchavez_portfolio' ),
		'id'            => 'site-footer-a',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget widget-site-footer %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'site-footer-b', 'bchavez_portfolio' ),
		'id'            => 'site-footer-b',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget widget-site-footer %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'site-footer-c', 'bchavez_portfolio' ),
		'id'            => 'site-footer-c',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget widget-site-footer %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'	=> esc_html__('post-footer-widget', 'bchavez_portfolio'),
		'id'	=> 'post-footer-widget',
		'description'   => 'at the end of the portfolio project',
		'before_widget' => '<section id="%1$s" class="widget widget-portfolio-footer %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'bchavez_portfolio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bchavez_portfolio_scripts() {
	wp_enqueue_style( 'bchavez_portfolio-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bchavez_portfolio-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20151215', true );
	wp_localize_script( 'bchavez_portfolio-navigation', 'screenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'bchavez_portfolio' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'bchavez_portfolio' ) . '</span>',
	) );

	wp_enqueue_script( 'bchavez_portfolio-typekit', get_template_directory_uri() . '/js/typekit.js', [],'161102' );

	wp_enqueue_script( 'bchavez_portfolio-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'bchavez_portfolio-jquery-things', get_template_directory_uri() . '/js/elephantaviator.js', array('jquery'), '20161101', true );

	// wp_enqueue_script('jquery');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bchavez_portfolio_scripts' );

function bchavez_portfolio_read_more_link() {
    return '<a class="more-link btn btn-primary" href="' . get_permalink() . '">Your Read More Link Text</a>';
}
add_filter( 'the_content_more_link', 'bchavez_portfolio_read_more_link' );




function bchavez_portfolio_raw_html($content){
//if it does not work, you may want to pass the current post object to get_post_type
	if(get_post_type() == 'portfolio' || get_post_type() == 'static') {
		//no autop
		return $content;
	} else {
		return wpautop($content);
	}
}
// modified content filter to so portfolio post types
// don't get extranious tags when using shortcodes.
remove_filter('the_content','wpautop');
//decide when you want to apply the auto paragraph
add_filter('the_content','bchavez_portfolio_raw_html');


add_filter('widget_text','do_shortcode');

add_action( 'init', 'bchavez_portfolio_load_bfa' );
/**
 * Initialize the Better Font Awesome Library.
 *
 * (see usage notes below on proper hook priority)
 */
function bchavez_portfolio_load_bfa() {

    // Include the main library file. Make sure to modify the path to match your directory structure.
    require_once ( dirname( __FILE__ ) . '/inc/better-font-awesome-library/better-font-awesome-library.php' );

    // Set the library initialization args (defaults shown).
    $args = array(
            'version'             => 'latest',
            'minified'            => true,
            'remove_existing_fa'  => false,
            'load_styles'         => true,
            'load_admin_styles'   => true,
            'load_shortcode'      => true,
            'load_tinymce_plugin' => true,
    );

    // Initialize the Better Font Awesome Library.
    Better_Font_Awesome_Library::get_instance( $args );
}


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Resume CPT.
 */
require get_template_directory() . '/inc/resume/resume_cpt.php';

require get_template_directory() . '/inc/cpt-portfolio.inc';
