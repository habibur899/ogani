<?php
/**
 * ogani functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ogani
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ogani_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on ogani, use a find and replace
		* to change 'ogani' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'ogani', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );
	add_theme_support( 'woocommerce' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'desktop-menu' => esc_html__( 'Main Menu', 'ogani' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'ogani_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 350,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}

add_action( 'after_setup_theme', 'ogani_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ogani_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Sidebar', 'ogani' ),
			'id'            => 'blog-sidebar',
			'description'   => esc_html__( 'Add blog sidebar widgets here.', 'ogani' ),
			'before_widget' => '<div id="%1$s" class="blog__sidebar__item widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6 class="widget-title">',
			'after_title'   => '</h6>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget', 'ogani' ),
			'id'            => 'footer-widget',
			'description'   => esc_html__( 'Add footer widgets here.', 'ogani' ),
			'before_widget' => '<div id="%1$s" class="footer__widget widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6 class="widget-title">',
			'after_title'   => '</h6>',
		)
	);
}

add_action( 'widgets_init', 'ogani_widgets_init' );

/**
 * Enqueue scripts and styles.
 */


function ogani_assets() {
	//CSS
	wp_enqueue_style( 'ogani-font', '//fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap', array(), _S_VERSION );
	wp_enqueue_style( 'ogani-bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'ogani-font-awesome-css', get_template_directory_uri() . '/css/font-awesome.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'ogani-elegant-icons-css', get_template_directory_uri() . '/css/elegant-icons.css', array(), _S_VERSION );
	wp_enqueue_style( 'ogani-nice-select-css', get_template_directory_uri() . '/css/nice-select.css', array(), _S_VERSION );
	wp_enqueue_style( 'ogani-jquery-ui-css', get_template_directory_uri() . '/css/jquery-ui.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'ogani-owl-carousel-css', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'ogani-slicknav-css', get_template_directory_uri() . '/css/slicknav.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'ogani-style-css', get_template_directory_uri() . '/css/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'ogani-main-css', get_stylesheet_uri(), array(), _S_VERSION );

	//JS
	wp_enqueue_script( 'ogani-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'ogani-nice-select-js', get_template_directory_uri() . '/js/jquery.nice-select.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'ogani-jquery-ui-js', get_template_directory_uri() . '/js/jquery-ui.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'ogani-slicknav-js', get_template_directory_uri() . '/js/jquery.slicknav.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'ogani-mixitup-js', get_template_directory_uri() . '/js/mixitup.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'ogani-carousel-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'ogani-main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'ogani_assets' );


//File Require
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
require get_template_directory() . '/inc/tgm/tgm.php';
require get_template_directory() . '/inc/woocommerce-helper/woocommerce-function.php';
require get_template_directory() . '/inc/woocommerce-helper/woocommerce-sale-badge-percent.php';
require get_template_directory() . '/inc/woocommerce-helper/plus-minus-quentity.php';
require get_template_directory() . '/inc/acf/options.php';
