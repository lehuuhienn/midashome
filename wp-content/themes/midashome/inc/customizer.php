<?php
/**
 * Theme: Customizer
 *
 * @package Theme
 * @subpackage Theme
 * @since 1.0.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function themecustom_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'themecustom_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'themecustom_customize_partial_blogdescription',
			)
		);
	}

	/**
	 * Primary color.
	 */
	$wp_customize->add_setting(
		'primary_color',
		array(
			'default'           => 'default',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'themecustom_sanitize_color_option',
		)
	);

	$wp_customize->add_control(
		'primary_color',
		array(
			'type'     => 'radio',
			'label'    => __( 'Primary Color', 'themecustom' ),
			'choices'  => array(
				'default' => _x( 'Default', 'primary color', 'themecustom' ),
				'custom'  => _x( 'Custom', 'primary color', 'themecustom' ),
			),
			'section'  => 'colors',
			'priority' => 5,
		)
	);

	// Add primary color hue setting and control.
	$wp_customize->add_setting(
		'primary_color_hue',
		array(
			'default'           => themecustom_get_default_hue(),
			'transport'         => 'postMessage',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'primary_color_hue',
			array(
				'description' => __( 'Apply a custom color for buttons, links, featured images, etc.', 'themecustom' ),
				'section'     => 'colors',
				'mode'        => 'hue',
			)
		)
	);

	// Add image filter setting and control.
	$wp_customize->add_setting(
		'image_filter',
		array(
			'default'           => 1,
			'sanitize_callback' => 'absint',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		'image_filter',
		array(
			'label'   => __( 'Apply a filter to featured images using the primary color', 'themecustom' ),
			'section' => 'colors',
			'type'    => 'checkbox',
		)
	);
}
add_action( 'customize_register', 'themecustom_customize_register' );

/**
 * Gravity Forms anchor - disable auto scrolling of forms
 */

add_filter('gform_confirmation_anchor', '__return_false');

/**
 * CHANGE SPINER LOADING
 */
function htl_custom_gforms_spinner( $src ) {
	return get_template_directory_uri().'/frontend/img/loading.svg';
}
add_filter( 'gform_ajax_spinner_url', 'htl_custom_gforms_spinner' );

/**
 * Change POST support page-attributes
 */
function posts_order_wpse_attributes() 
{
    add_post_type_support( 'post', 'page-attributes' );
}
add_action( 'admin_init', 'posts_order_wpse_attributes' );

/**
 * Support SVG files
 */
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/**
 * EIDT LOGIN PAGE
 */

function my_login_stylesheet() {
	wp_enqueue_style( 'custom-login', get_template_directory_uri().'/frontend/scss/login.css' );
	// wp_enqueue_script( 'custom-login', get_stylesheet_directory_uri() . '/style-login.js' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

/**
 * Admin footer modification
 */
function remove_footer_admin () 
{
    // echo '<span id="footer-thankyou">Developed by ThemeCustom</span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

/**
 * THE FRONTEND
 */
function get_frontend(){
	return get_template_directory_uri()."/frontend/";
}
function the_frontend(){
	echo get_template_directory_uri()."/frontend/";
}

function user_nickname_is_login( $meta, $user, $update ){
	$meta["nickname"] = $user->user_login;
	return $meta;
}
add_filter( 'insert_user_meta', 'user_nickname_is_login', 10, 3 );