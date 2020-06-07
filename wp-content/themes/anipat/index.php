<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Anipat
 */

get_header();
?>
	
	<!-- slider_area_start -->
	<div class="slider_area">
		<div class="single_slider slider_bg_1 d-flex align-items-center">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6">
						<div class="slider_text">
							<h3><?php the_field('slider_area_start_title', 25); ?> <br> <span><?php the_field('slider_area_start_subtitle', 25); ?></span></h3>
							<p><?php the_field('slider_area_start_content', 25); ?></p>
							<a href="<?php echo home_url('/contact/'); ?>" class="boxed-btn4"><?php the_field('footer_contact_title', 13); ?></a>
						</div>
					</div>
				</div>
			</div>
			<div class="dog_thumb d-none d-lg-block">
				<img src="<?php the_field('slider_area_start_img', 25); ?>" alt="">
			</div>
		</div>
	</div>
    <!-- slider_area_end -->
	<?php
	// service_area_start
	get_template_part( 'inc/section', 'service' );
	// service_area_end

	// pet_care_area_start
	get_template_part( 'inc/section', 'care' );
	// pet_care_area_end

	// adapt_area_start
	get_template_part( 'inc/section', 'help' );
	// adapt_area_end

	// testmonial_area_start
	get_template_part( 'inc/section', 'review' );
	// testmonial_area_end

	// team_area_start
	get_template_part( 'inc/section', 'team' );
	// team_area_start


get_template_part( 'inc/section', 'why' );

get_footer('');
