<?php
/**
 * _s functions and definitions
 *
 * @package treehouse
 */


/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'treehouse_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function treehouse_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on _s, use a find and replace
	 * to change '_s' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'treehouse', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );
  // Add post thumbnails
  add_theme_support( 'post-thumbnails' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'treehouse' ),
    'footer' => __( 'Footer Menu', 'treehouse' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'treehouse_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
}
endif; // treehouse_setup
add_action( 'after_setup_theme', 'treehouse_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function treehouse_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'treehouse' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'treehouse_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function treehouse_scripts() {
	wp_enqueue_style( 'treehouse-style', get_stylesheet_uri() );

	wp_enqueue_script( 'treehouse-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'treehouse-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
//add_action( 'wp_enqueue_scripts', 'treehouse_scripts' );

function responsive_styles()
{
    // Zurb foundation styles
    wp_register_style( 'foundation-style', get_template_directory_uri() . '/css/foundation.min.css', array(), 'all' );
    wp_register_style( 'site-style', get_template_directory_uri() . '/style.css', array(), 'all');

    // Google fonts styles
    wp_register_style( 'andada-font', "http://fonts.googleapis.com/css?family=Andada", array(), 'all');
    wp_register_style( 'pt-serif', "http://fonts.googleapis.com/css?family=PT+Serif", array(), 'all');

    wp_enqueue_style( 'foundation-style' );
    wp_enqueue_style( 'site-style' );
    wp_enqueue_style( 'andada-font' );
    wp_enqueue_style( 'pt-serif' );

    // Javascript 
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array(), '20140406', false);
    wp_enqueue_script( 'foundation-jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '20140406', true);
    wp_enqueue_script( 'fastclick', get_template_directory_uri() . '/js/vendor/fastclick.js', array(), '20140406', true);
    wp_enqueue_script( 'foundation-orbit-only', get_template_directory_uri() . '/js/foundation_orbit_only.min.js', array(), '20140406', true);
}
add_action( 'wp_enqueue_scripts', 'responsive_styles' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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
