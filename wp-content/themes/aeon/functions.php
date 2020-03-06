<?php
/**
 * Aeon functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Aeon
 */

if ( ! function_exists( 'aeon_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function aeon_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Aeon, use a find and replace
		 * to change 'aeon' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'aeon', get_template_directory() . '/languages' );

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
			'mobile-menu' => esc_html__( 'Mobile Menu', 'aeon' ),
			'left-menu' => esc_html__( 'Left Menu', 'aeon' ),
			'right-menu' => esc_html__( 'Right Menu', 'aeon' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'aeon' ),
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
		add_theme_support( 'custom-background', apply_filters( 'aeon_custom_background_args', array(
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
add_action( 'after_setup_theme', 'aeon_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function aeon_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'aeon_content_width', 640 );
}
add_action( 'after_setup_theme', 'aeon_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function aeon_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widgets', 'aeon' ),
		'id'            => 'footer-widgets',
		'description'   => esc_html__( 'Add widgets here.', 'aeon' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title" style="display: none;">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Announcement Bar', 'aeon' ),
		'id'            => 'announcement-bar',
		'description'   => esc_html__( 'Add one text widget', 'aeon' ),
		'before_widget' => '<div class="announcement">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 style="display: none;">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'aeon_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function aeon_scripts() {
	wp_enqueue_style( 'aeon-reset', get_template_directory_uri() . '/reset.css', array(), null, 'all' );
	wp_enqueue_style( 'aeon-style', get_stylesheet_uri() );

	wp_enqueue_script( 'aeon-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	
	wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/custom.js', array(), '20200130', true );
	wp_enqueue_script( 'owl-js', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array(), '20200130', true );

	wp_enqueue_script( 'aeon-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'aeon_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function prefix_category_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'prefix_category_title' );

function cpt_press() {
	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Press', 'quim' ),
		'singular_name'       => _x( 'Press',  'quim' ),
		'menu_name'           => __( 'Press', 'quim' ),
		'parent_item_colon'   => __( 'Parent Press', 'quim' ),
		'all_items'           => __( 'All Press', 'quim' ),
		'view_item'           => __( 'View Press', 'quim' ),
		'add_new_item'        => __( 'Add New Press', 'quim' ),
		'add_new'             => __( 'Add New', 'quim' ),
		'edit_item'           => __( 'Edit Press', 'quim' ),
		'update_item'         => __( 'Update Press', 'quim' ),
		'search_items'        => __( 'Search Press', 'quim' ),
		'not_found'           => __( 'Not Found', 'quim' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'quim' ),
	);
	// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'Press', 'quim' ),
		'description'         => __( 'List of Press', 'quim' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'custom-fields', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 7,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
  		'menu_icon'=> 'dashicons-awards',
	);
	// Registering your Custom Post Type
	register_post_type( 'press', $args );
}
add_action( 'init', 'cpt_press', 0 );


