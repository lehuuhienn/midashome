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

/*
    CART: Remove item
*/

function ajax_remove_item_from_cart() {
    $cart_item_key = $_POST['cart_item_key'];
    if($cart_item_key){
       WC()->cart->remove_cart_item($cart_item_key);
       wp_send_json(true);
    } 
    wp_send_json(false);
}
add_action('wp_ajax_remove_item_from_cart', 'ajax_remove_item_from_cart');
add_action('wp_ajax_nopriv_remove_item_from_cart', 'ajax_remove_item_from_cart');

/*
    CART: Upadate quantity item
*/

function ajax_update_item_qty_from_cart() {
    $cart_item_key = $_POST['cart_item_key'];
    if($cart_item_key){
        $threeball_product_values = WC()->cart->get_cart_item( $cart_item_key );
        $threeball_product_quantity = apply_filters( 'woocommerce_stock_amount_cart_item', apply_filters( 'woocommerce_stock_amount', preg_replace( "/[^0-9\.]/", '', filter_var($_POST['quantity'], FILTER_SANITIZE_NUMBER_INT)) ), $cart_item_key );
        $passed_validation  = apply_filters( 'woocommerce_update_cart_validation', true, $cart_item_key, $threeball_product_values, $threeball_product_quantity );
        if ( $passed_validation ) {
            WC()->cart->set_quantity( $cart_item_key, $threeball_product_quantity, true );
            wp_send_json(true);
        }
        else{
            wp_send_json(false);
        }
    }
    wp_send_json(false);
}

add_action('wp_ajax_update_item_qty_from_cart', 'ajax_update_item_qty_from_cart');
add_action('wp_ajax_nopriv_update_item_qty_from_cart', 'ajax_update_item_qty_from_cart');


/*
    CART: Fragment checkout 
*/

function add_points_widget_to_fragment( $fragments ) {
    global $woocommerce;
    ob_start();
?>
            <div class="shopping-cart">
				<!-- Title -->
				<div class="title">Giỏ hàng </div>

				<?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) : ?>
					<?php
						$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
					?>
					<!-- Product #1 -->
					<div class="item">
						<div class="buttons">
							<span data-cart-item-key="<?php echo $cart_item_key; ?>" class="delete-btn remove-item"></span>
							<span data-cart-item-key="<?php echo $cart_item_key; ?>" class="like-btn"></span>
						</div>

						<div class="image">
							<img src="<?php echo get_the_post_thumbnail_url($_product->get_ID(), "thumbnail") ?>" alt="" style="max-height:80px" />
						</div>

						<div class="description">
							<?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;'; ?>
							<?php echo wc_get_formatted_cart_item_data( $cart_item ); ?>
						</div>

						<div class="quantity" data-cart-item-key="<?php echo $cart_item_key; ?>">
							<button class="plus-btn quantity-edit-btn" type="button" name="button">
								<img src="<?php the_frontend(); ?>img/plus.svg" alt="" />
							</button>
							<input type="text" name="name" value="<?php echo $cart_item['quantity']; ?>">
							<button class="minus-btn quantity-edit-btn" type="button" name="button">
								<img src="<?php the_frontend(); ?>img/minus.svg" alt="" />
							</button>
						</div>

						<div class="total-price"><?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?></div>
					</div>

				<?php endforeach; ?>

				<div class="item">
					<div class="row w-100 text-right text-bold">
						<div class="col-12 col-sm-6">Tổng :</div>
						<div class="col-12 col-sm-6"><?php echo WC()->cart->get_cart_total(); ?></div>
					</div>
				</div>
			</div>
<?php
    $fragments['div.shopping-cart'] = ob_get_clean();
    return $fragments;
}
add_filter('woocommerce_update_order_review_fragments', 'add_points_widget_to_fragment');

/*
    SHORTCODE: [wc_reg_form_account]
*/
  
add_shortcode( 'wc_reg_form_account', 'account_separate_registration_form' );
    
function account_separate_registration_form() {
if ( is_admin() ) return;
ob_start();
if ( is_user_logged_in() ) {
   wc_add_notice( sprintf( __( 'You are currently logged in. If you wish to register with a different account please <a href="%s">log out</a> first', 'bbloomer' ), wc_logout_url() ) );
   wc_print_notices();
} else {
     
   // NOTE: THE FOLLOWING <FORM> IS COPIED FROM woocommerce\templates\myaccount\form-login.php
   // IF WOOCOMMERCE RELEASES AN UPDATE TO THAT TEMPLATE, YOU MUST CHANGE THIS ACCORDINGLY
   ?>

<div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto" id="login">
        <div class="card card-signin my-5">
            <div class="card-body">
                <h5 class="card-title text-center">ĐĂNG KÝ</h5>
                <form method="post" class="woocommerce-form woocommerce-form-register register form-signin" action="#registra" <?php do_action( 'woocommerce_register_form_tag' ); ?>>

                    <?php do_action( 'woocommerce_register_form_start' ); ?>

                    <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
                    <div class="form-label-group">
                        <input placeholder="Username" type="text" class="form-control" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" />
                    </div>
                    <?php endif; ?>

                    <div class="form-label-group">
                        <input placeholder="Email" type="email" class="form-control" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" />
                    </div>

                    <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

                    <div class="form-label-group">
                        <input placeholder="Mật khẩu" type="password" class="form-control" name="password" id="reg_password" autocomplete="new-password" />
                    </div>
                    
                    <?php endif; ?>

                    <?php //do_action( 'woocommerce_register_form' ); ?>

                    <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
                    <button type="submit" class="btn btn-lg btn-primary btn-block text-uppercase" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>

                    <?php do_action( 'woocommerce_register_form_end' ); ?>

                </form>
            </div>
        </div>
    </div>
</div>

   <?php
   // END OF COPIED HTML
   // ------------------
     
}
return ob_get_clean();
}