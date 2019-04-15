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

?>

<section id="post-<?php the_ID(); ?>" <?php post_class('default-page padding'); ?>>
	<div class="container">
		<h1 class="title-page text-center"><?php the_title(); ?></h1>
		<div class="the-content">
			<?php
			the_content();

			// wp_link_pages(
			// 	array(
			// 		'before' => '<div class="page-links">' . __( 'Pages:', 'themecustom' ),
			// 		'after'  => '</div>',
			// 	)
			// );
			
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
	</div>
</section>