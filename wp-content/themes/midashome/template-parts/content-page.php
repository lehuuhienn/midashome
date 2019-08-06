<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme
 * @subpackage Theme
 * @since 1.0.0
 */

global $post;
$isTermLayout = get_field('type_page') === "term";
if($isTermLayout){
	$args = array(
		'posts_per_page' => -1,
		'post_status'    => 'publish',
		'post_type'      => 'page',
		// 'post__not_in'   => array($post->ID),
		'orderby'        => array( 'menu_order' => 'DESC', 'post_date' => 'ASC'),
		'meta_query'     => array(
			array(
				'key'     => 'type_page',
				'value'   => 'term',
				'compare' => '=',
			),
		),
	);
	$pages = get_posts($args);
	if(count($pages) - 1 < 1) $isTermLayout = false;
}

?>
		<h1 class="d-none"><?php the_title(); ?></h1>

		<?php get_template_part( 'template-parts/block/banner'); ?>

		<section id="post-<?php the_ID(); ?>" <?php post_class('default-page padding'); ?>>
			
			<!-- Page Content -->
			<div class="container">

				<!-- Term & Codition -->
				<div class="<?php !is_page(array('thanh-toan', 'dang-ky', 'tai-khoan'))?'about':''; ?>" style="position: relative">
					<?php if(!is_page(array('thanh-toan', 'dang-ky', 'tai-khoan'))): ?>
					<div class="red-line"></div>
					<button class="button-midas button-center"><?php the_title(); ?></button>
					<?php endif; ?>
					<div class="row mt-20">
						<div class="<?php !is_page(array('thanh-toan', 'dang-ky', 'tai-khoan'))?'bg-term p-4 ':''; ?><?php echo $isTermLayout?'col-lg-9 ':'col-lg-12 '; ?>">
							<?php
								the_content();

								if ( get_edit_post_link() ){
									edit_post_link(
										sprintf(
											wp_kses(
												/* translators: %s: Name of current post. Only visible to screen readers */
												__( 'Edit <span class="screen-reader-text">%s</span>', 'themecustom' ),
												array(
													'span' => array(
														'class' => array(),
													),
												)
											),
											get_the_title()
										),
										'<span class="edit-link">',
										'</span>'
									);
								}
							?>
						</div>

						<?php if($isTermLayout): ?>
						<div class="col-lg-3">
							<div class="bg-term p-3">
								<?php foreach($pages as $key => $page): ?>
									<div><a href="<?php the_permalink($page->ID); ?>"><?php echo $key+1; ?>. <?php echo $page->post_title; ?></a></div>
								<?php endforeach; ?>
							</div>
						</div>
						<?php endif;?>

					</div>
				</div>
				
			</div>

		</section>