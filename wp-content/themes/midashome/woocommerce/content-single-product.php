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
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

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

global $product;

?>

			

<div id="product-<?php the_ID(); ?>" <?php // wc_product_class(); ?>>

	<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		// do_action( 'woocommerce_before_single_product_summary' );
	?>

            <!-- PRODUCT TOP-->
			<section class="product-top">
                <div class="container-fluid padding">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php 
                                $attachment_ids = $product->get_gallery_image_ids();
                                $feature_img = get_the_post_thumbnail_url($product->get_ID());
                            ?>
                            <div class="row row-img pleft-page">
                                <div class="col-big-img">
                                    <div class="img-drop"><img src="<?php echo $feature_img; ?>" alt=""></div>
                                </div>
                                <div class="col-thumb-img">
                                    <div class="img-drop active"><img src="<?php echo get_the_post_thumbnail_url($product->get_ID(), "thumbnail" ); ?>" alt="" data-img="<?php echo $feature_img; ?>"></div>
                                    <?php foreach( $attachment_ids as $attachment_id ): ?>
                                        <div class="img-drop"><img src="<?php echo wp_get_attachment_image_url( $attachment_id, "thumbnail" ); ?>" alt="" data-img="<?php echo wp_get_attachment_url( $attachment_id ); ?>"></div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div class="row block-text pleft-page auto-hide">
                                <div class="col-xl-4">
                                    <div class="social-us"><span>Share this on:</span><a href="#" target="_blank"><i class="iconi facebook"></i></a><a href="#" target="_blank"><i class="iconi twitter"></i></a><a href="#" target="_blank"><i class="iconi pinterest"></i></a></div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="description">
                                        <span class="title-mini">Description:</span>
                                        <?php $short_description = wpautop($product->get_short_description());
                                        echo $short_description; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="wrap-product-top">
                                <h1 class="big-title"><?php echo $product->get_title(); ?></h1>
                                <div class="price"><?php echo strip_tags($product->get_price_html())." ".get_woocommerce_currency(); ?></div>
                                <?php do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' );; ?>
                            </div>
                        </div>
                        <div class="col-lg-6 d-lg-none">
                            <div class="row block-text pleft-page">
                                <div class="col-xl-4">
                                    <div class="social-us"><span>Share this on:</span><a href="#" target="_blank"><i class="iconi facebook"></i></a><a href="#" target="_blank"><i class="iconi twitter"></i></a><a href="#" target="_blank"><i class="iconi pinterest"></i></a></div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="description">
                                        <span class="title-mini">Description:</span>
                                        <?php echo $short_description; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</section>
			
            <!-- PRODUCT INFO-->
            <?php 
                $video_background = get_field("video_background");
                $video_url = get_field("video_url");
            ?>
            <section class="product-info bg-gray border-gray">
                <div class="container-edit">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-6">
                            <div class="box-text margin-left-page">
                                <h3 class="title-border"><span>Product Information</span></h3>
                                <?php echo wpautop($product->get_description());?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="img-drop video-box video-holder" data-link="<?php echo $video_url; ?>">
                                <img class="lazyload" data-src="<?php echo $video_background["sizes"]["large"]; ?>">
                                <?php if($video_url): ?>
                                    <a class="btn-play icon-play" href="#"><span class="icon"><i class="iconi play"></i></span><span>Watch video</span></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
			</section>
			
            <!-- ENQUIRE US-->
            <section class="enquire-us">
                <div class="container-fluid padding">
                    <div class="wrap-enquire">
                        <h2 class="title-page text-center">Enquire us</h2>
                        <div class="des-page text-center">
                            <p>Large quantity is made to order, please submit the below information to enquire about having it made for you with a reasonable price.</p>
                        </div>
                    </div>
                    <div class="form-enquire form-style">
                        <form action="">
                            <div class="gform_body">
                                <div class="gform_page">
                                    <div class="gform_page_fields">
                                        <ul>
                                            <li class="col-half">
                                                <label for="firstname">First name *</label>
                                                <input type="text" value="Vivian" id="firstname">
                                            </li>
                                            <li class="col-half">
                                                <label for="lastname">Last name *</label>
                                                <input type="text" id="lastname">
                                            </li>
                                            <li>
                                                <label for="address">Address *</label>
                                                <input type="text" placeholder="House number, Street name, Suburb, State and Postcode" id="address">
                                            </li>
                                            <li class="col-half">
                                                <label for="phone">Phone number *</label>
                                                <input type="text" id="phone">
                                            </li>
                                            <li class="col-half">
                                                <label for="email">Email address *</label>
                                                <input type="text" id="email">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="gform_page">
                                    <div class="gform_page_fields">
                                        <ul>
                                            <li class="col-half">
                                                <label for="quantity">Quantity</label>
                                                <input type="number" placeholder="1000" id="quantity">
                                            </li>
                                            <li class="col-half">
                                                <label for="color">Color</label>
                                                <select id="color">
                                                    <option>Blue</option>
                                                    <option>Green</option>
                                                    <option>Red</option>
                                                </select>
                                            </li>
                                            <li>
                                                <label for="message">Message</label>
                                                <textarea id="message" name="message" placeholder="Special notes for us" rows="4"></textarea>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="gform_footer">
                                <input type="submit" value="SUBMIT">
                            </div>
                        </form>
                    </div>
                </div>
            </section>

	<?php
		/**
		 * Hook: woocommerce_after_single_product_summary.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		// do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
