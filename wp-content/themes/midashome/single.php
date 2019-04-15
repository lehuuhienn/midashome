<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Theme
 * @subpackage Theme
 * @since 1.0.0
 */

get_header();

while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content-single', get_post_type() );

	// If comments are open or we have at least one comment, load up the comment template.
	// if ( comments_open() || get_comments_number() ) {
	// 	comments_template();
	// }

endwhile; 
		
get_footer();
