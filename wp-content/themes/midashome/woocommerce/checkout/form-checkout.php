<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<div class="w-100 mb-5" id="cart">
	<div class="row">
		<div class="col-12 col-sm-8">
			<div class="shopping-cart">
				<!-- Title -->
				<div class="title">
					Giỏ hàng
				</div>

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
		</div>
		<div class="col-12 col-sm-4 info-cart">
			<label class="mt-5" for="">THANH TOÁN</label>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<?php do_action( 'woocommerce_checkout_billing' ); ?>

			<?php do_action( 'woocommerce_checkout_shipping' ); ?>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>
	
	<?php // do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
	
	
	<?php //do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div id="order_review" class="woocommerce-checkout-review-order">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<?php // do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>

<?php //do_action( 'woocommerce_after_checkout_form', $checkout ); ?>

		</div>
	</div>
</div>