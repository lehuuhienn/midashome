<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Theme
 * @subpackage Theme
 * @since 1.0.0
 */

/**
 * Theme only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

if ( ! function_exists( 'themecustom_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function themecustom_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Theme, use a find and replace
		 * to change 'themecustom' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'themecustom', get_template_directory() . '/languages' );

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
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'header' => __( 'Header Menu', 'themecustom' ),
				// 'footer' => __( 'Footer Menu', 'themecustom' ),
				// 'term' => __( 'Footer Menu - Term', 'themecustom' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support('editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'themecustom' ),
					'shortName' => __( 'S', 'themecustom' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'themecustom' ),
					'shortName' => __( 'M', 'themecustom' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'themecustom' ),
					'shortName' => __( 'L', 'themecustom' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'themecustom' ),
					'shortName' => __( 'XL', 'themecustom' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		$default_hue     = themecustom_get_default_hue();
		$saturation      = apply_filters( 'themecustom_custom_colors_saturation', 100 );
		$lightness       = apply_filters( 'themecustom_custom_colors_lightness', 33 );
		$lightness_hover = apply_filters( 'themecustom_custom_colors_lightness_hover', 23 );
		// Editor color palette.
		add_theme_support('editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'themecustom' ),
					'slug'  => 'primary',
					'color' => themecustom_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? $default_hue : get_theme_mod( 'primary_color_hue', $default_hue ), $saturation, $lightness ),
				),
				array(
					'name'  => __( 'Secondary', 'themecustom' ),
					'slug'  => 'secondary',
					'color' => themecustom_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? $default_hue : get_theme_mod( 'primary_color_hue', $default_hue ), $saturation, 23 ),
				),
				array(
					'name'  => __( 'Dark Gray', 'themecustom' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'themecustom' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'themecustom' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
		// Woo
		add_theme_support( 'woocommerce' );
	}
endif;
add_action( 'after_setup_theme', 'themecustom_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function themecustom_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'themecustom' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'themecustom' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'themecustom_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function themecustom_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'themecustom_content_width', 640 );
}
add_action( 'after_setup_theme', 'themecustom_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function themecustom_scripts() {
	wp_enqueue_style( 'themecustom-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	wp_style_add_data( 'themecustom-style', 'rtl', 'replace' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	$fe = get_frontend();
	
	// CSS
	wp_enqueue_style( 'themecustom-frontend-css-bootstrap3', $fe ."vendor/jquery/bootstrap.min.css" );
	wp_enqueue_style( 'themecustom-frontend-css-font-awesome', $fe . "vendor/font-awesome/css/font-awesome.css" );
	wp_enqueue_style( 'themecustom-frontend-css-bootstrap4', $fe . "vendor/bootstrap/css/bootstrap.min.css" );
	wp_enqueue_style( 'themecustom-frontend-css-jssocials', $fe . "vendor/jsSocial/jssocials.css" );
	wp_enqueue_style( 'themecustom-frontend-css-style', $fe . "css/style.css" );

	// JS
	// wp_enqueue_script( 'themecustom-frontend-js-bootstrap3', $fe . 'vendor/bootstrap/js/bootstrap.bundle.min.js', array( 'jquery' ), null, true);
	wp_enqueue_script( 'themecustom-frontend-js-bootstrap4', $fe . 'vendor/jquery/bootstrap.min.js', array( 'jquery' ), null, true);
	wp_enqueue_script( 'themecustom-frontend-js-jssocials', $fe . 'vendor/jsSocial/jssocials.min.js', array( 'jquery' ), null, true);
	wp_enqueue_script( 'themecustom-frontend-js-validate', $fe . 'vendor/jquery-validate/jquery.validate.min.js', array( 'jquery' ), null, true);
	wp_enqueue_script( 'themecustom-frontend-js-slick', $fe . 'vendor/slick/slick.min.js', array( 'jquery' ), null, true);
	wp_enqueue_script( 'themecustom-frontend-js-main', $fe . 'js/main.js', array( 'jquery' ), null, true);
	wp_enqueue_script( 'themecustom-frontend-js-custom', $fe . 'js/custom.js', array( 'jquery' ), null, true);
}
add_action( 'wp_enqueue_scripts', 'themecustom_scripts' );


/**
 * POST-TYPE
 */
require get_template_directory() . '/inc/post-type.php';

/**
 * Default color filters.
 */
require get_template_directory() . '/inc/color-filters.php';

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Backup plugin
 */
require get_template_directory() . '/inc/backup-pluginname.php';

/**
 * ACF
 */
require get_template_directory() . '/inc/acf.php';

/**
 * WOOCOMMERCE
 */
require get_template_directory() . '/inc/woocommerce.php';
