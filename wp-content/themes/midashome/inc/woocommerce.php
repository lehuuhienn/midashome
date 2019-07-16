<?php

function filter_wc_add_to_cart_message_html( $message, $products ) { 

    $return_to = apply_filters( 
        'woocommerce_continue_shopping_redirect', 
        wc_get_raw_referer() ? wp_validate_redirect( wc_get_raw_referer(), false ) : wc_get_page_permalink( 'shop' ) 
    );

    $continue   = sprintf( 
        '<a href="%s" class="button wc-forward">%s</a>', 
        esc_url( $return_to ), 
        esc_html__( 'Continue shopping', 'woocommerce' ) 
    );

    $message .= $continue;
    return $message; 
}; 

add_filter( 'wc_add_to_cart_message_html', 'filter_wc_add_to_cart_message_html', 10, 2 );


// remove Order Notes from checkout field in Woocommerce

add_filter( 'woocommerce_checkout_fields' , 'alter_woocommerce_checkout_fields' );
function alter_woocommerce_checkout_fields( $fields ) {
    // var_dump($fields['billing']);
    $fields['billing']['billing_first_name']['label'] = 'Họ và tên';
    $fields['billing']['billing_address_1']['label'] = 'Địa chỉ nhận hàng';
    $fields['billing']['billing_address_1']['type'] = 'textarea';
    $fields['billing']['billing_phone']['priority'] = 10;
    
    unset($fields['billing']['billing_last_name']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_state']);
    return $fields;
}

/*
Change Place Order button text on checkout page in woocommerce
*/
add_filter('woocommerce_order_button_text','custom_order_button_text',1);
function custom_order_button_text($order_button_text) {
	$order_button_text = 'Đặt mua';
	return $order_button_text;
}
?>