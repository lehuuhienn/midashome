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