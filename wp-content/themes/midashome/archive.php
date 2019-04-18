<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme
 * @subpackage Theme
 * @since 1.0.0
 */

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content-archive', get_post_type() );
	endwhile;
else :
	get_template_part( 'template-parts/content', 'none' );
endif;
		
get_footer();
