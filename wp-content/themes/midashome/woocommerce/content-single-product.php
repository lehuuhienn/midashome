<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<!-- title -->
	<div class="about pb-4">
		<div class="url-map text-uppercase"><i class="fa fa-home icon-home"></i>TRANG CHỦ > <?php echo wc_get_product_category_list($product->get_id()) ?> > <?php echo $product->get_name(); ?>
		</div>
	</div>
	<!-- End title-->

	<div class="row mt-3">
            <div class="col col-lg-6">
                <!-- <img src="img/00gkgm51.png" class="detail-img-large" alt=""> -->

                <div class="container">

					<?php $attachment_ids = $product->get_gallery_image_ids(); ?>
					<?php foreach( $attachment_ids as $attachment_id ): ?>
                    <div class="mySlides">
                        <img src="<?php echo $image_link = wp_get_attachment_url( $attachment_id ); ?>" style="width:100%">
					</div>
					<?php endforeach; ?>

                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>

                    <div class="row">
						<?php foreach( $attachment_ids as $key => $attachment_id ): ?>
                        <div class="column">
                            <img class="demo cursor" src="<?php echo $image_link = wp_get_attachment_url( $attachment_id ); ?>" style="width:100%" onclick="currentSlide(<?php echo $key+1; ?>)">
						</div>
						<?php endforeach; ?>
                    </div>
                </div>

                <div class="share mt-2">
					<div class="sharejs"></div>
                </div>
            </div>
            <div class="col col-lg-5">
                <h3 class="title-detail"><?php echo $product->get_name(); ?></h3>
                <p class="btn-add" style="float:left">
                    <i class="fa fa-calendar pr-2"></i><a class="hidden-sm"><?php echo $product->get_date_created(); ?></a>
                </p>
                <p class="btn-details pr-3" style="float: left">
                    <i class="fa fa-comments-o pl-4 pr-2"></i><a class="hidden-sm"><?php echo $product->get_review_count(); ?></a>
                </p>
                <p class="btn-details">
                    <a class="hidden-sm pr-1">5.0</a><i class="fa fa-star pr-1"></i><i class="fa fa-star pr-1"></i><i
                        class="fa fa-star pr-1"></i><i class="fa fa-star pr-1"></i><i class="fa fa-star pr-1"></i>
                </p>
                <div class="row w-100 mt-5">
                    <div class="w-100"><button class="btn-search" style="width: 200px; height: 30px;"> <i
                                class="fa fa-tag pr-2" style="color:#fff"></i>MÔ TẢ SẢN PHẨM</button></div>
                    <div class="mt-1">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="row w-100 mt-5">
                    <div>
                        <!-- <button class="btn-buy mr-5">MUA NGAY</button> -->
						<?php 
							echo apply_filters( 'woocommerce_loop_add_to_cart_link',
							sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="text-uppercase %s product_type_%s"><button class="btn-buy">%s</button></a>',
								esc_url( $product->add_to_cart_url() ),
								esc_attr( $product->get_id() ),
								esc_attr( $product->get_sku() ),
								$product->is_purchasable() ? 'add_to_cart_button' : '',
								esc_attr( $product->get_type() ),
								esc_html("THÊM VÀO GIỎ HÀNG" )
							),
							$product );
						?>
                    </div>
                </div>
            </div>
        </div>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	// do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		// do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
