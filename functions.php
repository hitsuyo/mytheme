<?php
/**
 * mytheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mytheme
 */

define( 'EDD_USE_PHP_SESSIONS', false );

if ( ! function_exists( 'mytheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mytheme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on underscores, use a find and replace
		 * to change 'underscores' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mytheme', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'mytheme_setup' ),
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
		add_theme_support( 'custom-background', apply_filters( 'umytheme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'mytheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mytheme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'mytheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'mytheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// function underscores_widgets_init() {
// 	register_sidebar( array(
// 		'name'          => esc_html__( 'Sidebar', 'mytheme' ),
// 		'id'            => 'sidebar-1',
// 		'description'   => esc_html__( 'Add widgets here.', 'mytheme' ),
// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 		'after_widget'  => '</section>',
// 		'before_title'  => '<h2 class="widget-title">',
// 		'after_title'   => '</h2>',
// 	) );
// }
// add_action( 'widgets_init', 'mytheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */


/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
// require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
// require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
// if ( defined( 'JETPACK__VERSION' ) ) {
// 	require get_template_directory() . '/inc/jetpack.php';
// }


//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  
// add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
// function theme_enqueue_styles() {
//     wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
//     wp_enqueue_style( 'child-style',
//         get_stylesheet_directory_uri() . '/style.css',
//         array('parent-style')
//     );
// }
//
// Your code goes below

include 'inc/icon_social.php';
include 'inc/info_web.php';
include 'inc/main_menu_s1.php';
include 'inc/create_side_bar.php';
include 'inc/setting.php';
include 'inc/init.php';

// hook init active, call custom post type
add_action( 'init', 'book_custom_init');
add_action( 'init', 'shoe_custom_init');


// add_action('template_redirect', 'remove_sidebar_shop');
// function remove_sidebar_shop() {
// if ( is_product('add-page-i.d-here') ) {
//     remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');
//     }
// }

require get_template_directory() . '/shortcode/show-posts.php';

function my_enqueue_scripts() {
	$version = '1.1.0';
	$url = get_template_directory_uri();
	// wp_enqueue_script( '/assets/js/custom');

	wp_enqueue_script( 'material-js', $uri .'/assets/js/materialize.js', array('material'), $version, true );

	// wp_enqueue_script( 'jquery-js', get_template_directory_uri() .'/assets/js/jquery-3-3-1.js', array('jquery'), $version, true );
	// wp_enqueue_script( 'custom-js', get_template_directory_uri() .'/assets/js/custom.js', array('jquery'), $version, true );

	

		wp_enqueue_style('material-css', get_template_directory_uri() .'/assets/css/materialize.css', array(), $version, 'all'); // default

		wp_enqueue_style('skeleton', get_template_directory_uri() . '/assets/css/skeleton.css', array(), $version, 'all'); // default
	   
	   wp_enqueue_style('my_style', get_template_directory_uri() . '/assets/css/my_style.css', array(), '1.1.0' , 'all'); // default

	   wp_enqueue_style( 'style', get_stylesheet_uri() ); //important

	wp_enqueue_script('my-script', get_template_directory_uri() . '/assets/js/script.js' , array('jquery'), '1.1.0', true); // default
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

// wp_register_style( 'material-css', get_template_directory_uri() .'assets/css/materialize.css', array());

// wp_enqueue_style( 'style', get_stylesheet_uri() ); //important
// wp_enqueue_style( 'my_style', get_stylesheet_uri() , array(), '1.1.0' , 'all' ); //important

// wp_enqueue_style( '/assets/css/skeleton.css', get_stylesheet_uri() );

/**@ Thiết lập $content_width để khai báo kích thước chiều rộng của nội dung**/
if ( ! isset( $content_width ) ) {
    /*
     * Nếu biến $content_width chưa có dữ liệu thì gán giá trị cho nó
     */
    $content_width = 620;
}
/*
* Thêm chức năng title-tag để tự thêm <title>
*/
add_theme_support( 'title-tag' );

/*
* Thêm chức năng post format
*/
add_theme_support( 'post-formats',
    array(
       'image',
       'video',
       'gallery',
       'quote',
       'link'
    )
 );

 /*
* Thêm chức năng custom background
*/
$default_background = array(
    'default-color' => '#e8e8e8',
 );
 add_theme_support( 'custom-background', $default_background );

/*
* Tạo menu cho theme
*/
// register_nav_menu ( 'primary-menu', __('Primary Menu', 'thachpham') );


add_theme_support( 'post-thumbnails' );

// set_post_thumbnail_size( 350, 350 );

function setup_woocommerce_support()
{
  add_theme_support('woocommerce');
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'woocommerce', array(
	'thumbnail_image_width' => 350,
	'single_image_width' => 322,
'gallery_thumbnail_image_width' => 100
	) );
	set_post_thumbnail_size( 350, 350 );
}
add_action( 'after_setup_theme', 'setup_woocommerce_support' );

/*--------------------------------------------*/
// Add other useful image sizes for use through Add Media modal
// add_image_size( 'medium-width', 480 );
// add_image_size( 'medium-height', 9999, 480 );
// add_image_size( 'medium-something', 480, 480 );

// // Register the three useful image sizes for use in Add Media modal
// add_filter( 'image_size_names_choose', 'wpshout_custom_sizes' );
// function wpshout_custom_sizes( $sizes ) {
//     return array_merge( $sizes, array(
//         'medium-width' => __( 'Medium Width' ),
//         'medium-height' => __( 'Medium Height' ),
//         'medium-something' => __( 'Medium Something' ),
//     ) );
// }
/*----------------------------------------------*/

// function sideright_widgets_init() {

//     register_sidebar( array(
//      'name' => 'Witget_side',
//      'id' => 'sidebar-1',
//      'before_widget' => '<div>',
//      'after_widget' => '</div>',
//      'before_title' => '<h3>',
//      'after_title' => '</h3>',
//      ) );
     
// }
// add_action( 'widgets_init', 'sideright_widgets_init' );


/*---------------------------------------------*/
/* shortcode */
