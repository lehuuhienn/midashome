<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<style style="text/css">
	.item-product a img,
	.item-product button,
	.item-product label {
		display: block;
		margin: auto;
		text-align: center;
		margin-top: 1rem;
	}

	.item-product {
		border: 1px solid #770000;
	}

	.item-product .btn-detai-product {
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

<?php 
$banner_img_alt = get_field('big_banner');
get_template_part( 'template-parts/block/banner'); 
?>

<div class="container">
	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		// do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		// do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		// do_action( 'woocommerce_sidebar' );
	?>
</div>

<?php get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
