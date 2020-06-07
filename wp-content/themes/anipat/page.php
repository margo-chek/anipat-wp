<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Anipat
 */

if ( have_posts() ) the_post();

$id = get_the_ID();

if ( $id == 25) {
	wp_redirect( home_url() );
	// exit;
}

get_header('page');

if ( $id == 6) {
	get_template_part( 'inc/section', 'team' );
	get_template_part( 'inc/section', 'care' );
	get_template_part( 'inc/section', 'help' );
}

if ( $id == 10) {
	get_template_part( 'inc/section', 'service' );
}

if ( $id == 262) {
	the_content();
}

	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', 'page' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile; // End of the loop.

get_template_part( 'inc/section', 'review' );

get_template_part( 'inc/section', 'why' );

get_footer();
