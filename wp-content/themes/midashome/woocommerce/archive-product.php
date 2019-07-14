<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
// do_action( 'woocommerce_before_main_content' );

?>
<style style="text/css">
	#product a img,
	button,
	label {
		display: block;
		margin: auto;
		text-align: center;
		margin-top: 1rem;
	}

	.item-product {
		border: 1px solid #770000;
	}

	.btn-detai-product {
		margin: 2rem auto;
		height: 30px;
		width: auto;
		color: white;
		background-color: #770000;
		border: none;
		padding: 0 2rem;
	}
	.woocommerce nav.woocommerce-pagination ul{
		border: 0;
	}
	.woocommerce nav.woocommerce-pagination ul li{
		background-color: #770000;
		border-color: #770000;
		border-radius: 2px;
		overflow: hidden;
		min-width: 28px;
	}
	.woocommerce nav.woocommerce-pagination ul li:not(:last-child){
		margin-right: 10px;
	}
	.woocommerce nav.woocommerce-pagination ul li span.current{
		background-color: #770000;	
		color: #ffffff;
	}
	.woocommerce nav.woocommerce-pagination ul li a.page-numbers{
		color: #ffffff;
		background-color: #770000;	

	}
	.woocommerce nav.woocommerce-pagination ul li a.page-numbers.next, 
	.woocommerce nav.woocommerce-pagination ul li a.page-numbers.prev{
		position: relative;
	}
</style>

<div class="container mt-5">

<div class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<div class="about mb-4">
			<div class="red-line"></div>
			<h1 class="button-midas" style="display: inline-block;margin: 0;font-size: 14px"><?php woocommerce_page_title(); ?></h1>
		</div>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	// do_action( 'woocommerce_archive_description' );
	?>
</div>
<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 *
			 * @hooked WC_Structured_Data::generate_product_data() - 10
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
// do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action( 'woocommerce_sidebar' );

?>

</div> <!-- end-container -->

<?php

get_footer( 'shop' );

?>

