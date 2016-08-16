<?php
/**
 * Castro Street Fair functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CastroStreetFair
 */

if ( ! function_exists( 'castrostreetfair_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function castrostreetfair_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Castro Street Fair, use a find and replace
	 * to change 'castrostreetfair' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'castrostreetfair', get_template_directory() . '/languages' );

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
	add_image_size( 'castrostreetfair-full', 2000, 1500, true  );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'castrostreetfair' ),
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

	// Set up the WordPress core custom background feature.
	// add_theme_support( 'custom-background', apply_filters( 'castrostreetfair_custom_background_args', array(
	// 	'default-color' => 'ffffff',
	// 	'default-image' => '',
	// ) ) );
}
endif;
add_action( 'after_setup_theme', 'castrostreetfair_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function castrostreetfair_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'castrostreetfair_content_width', 640 );
}
add_action( 'after_setup_theme', 'castrostreetfair_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function castrostreetfair_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'castrostreetfair' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'castrostreetfair' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'castrostreetfair_widgets_init' );

/**
 * Google Fonts
 * Gives translators ability to deactivate fonts that don't include their language's characters.
 */
function castrostreetfair_fonts_url() {
    $fonts_url = '';

    /* Translators: If there are characters in your language that are not
    * supported by Montserrat, translate this to 'off'. Do not translate
    * into your own language.
    */
    $franklin = _x( 'on', 'Libre Franklin font: on or off', 'castrostreetfair' );

    /* Translators: If there are characters in your language that are not
    * supported by Karla, translate this to 'off'. Do not translate
    * into your own language.
    */
    $karla = _x( 'on', 'Karla font: on or off', 'castrostreetfair' );

    if ( 'off' !== $franklin || 'off' !== $karla ) {
        $font_families = array();

        if ( 'off' !== $franklin ) {
            $font_families[] = 'Libre+Franklin:900';
        }

        if ( 'off' !== $karla ) {
            $font_families[] = 'Karla:400,700,400italic,700italic';
        }

        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );

        $fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
    }

    return $fonts_url;
}

/**
 * Enqueue scripts and styles.
 */
function castrostreetfair_scripts() {
	wp_enqueue_style( 'castrostreetfair-fonts', castrostreetfair_fonts_url(), array(), null );

	wp_enqueue_style( 'castrostreetfair-style', get_stylesheet_uri() );

	wp_enqueue_script( 'castrostreetfair-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'castrostreetfair-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'castrostreetfair_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/components/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/components/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/components/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/components/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/components/inc/jetpack.php';
