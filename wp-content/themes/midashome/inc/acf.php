<?php

if(!function_exists("get_field")){ 
	add_action( 'admin_notices', function() {
		?>
		<div class="notice notice-success ">
			<p><?php _e( 'We need to install ACF Plugin!', 'sample-text-domain' ); ?></p>
		</div>
		<?php
	});
	return; 
}

if( function_exists('acf_add_options_page') ) {

	$options = acf_add_options_page( array(
		'menu_title' => __('Theme Options', 'themecustom'),
		'page_title' => __('Cấu hình web', 'themecustom'),
		'redirect'   => true
	));

	// acf_add_options_sub_page( array(
	// 	'page_title'	=> __('Header', 'themecustom'),
	// 	'menu_title' 	=> __('Header', 'themecustom'),
	// 	'parent_slug'	=> $options['menu_slug']
	// ));

	// acf_add_options_sub_page( array(
	// 	'page_title'	=> __('Phần cuối trang', 'themecustom'),
	// 	'menu_title' 	=> __('Footer', 'themecustom'),
	// 	'parent_slug'	=> $options['menu_slug']
	// ));

	add_filter( 'acf/fields/google_map/api', 'my_acf_google_map_api' );
	function my_acf_google_map_api( $api ){
		$api[ 'key' ] = 'AIzaSyDWxTe1EusdOlfkBbQ2XNFNoA5xV0WXszs';
		return $api;
	}
}
