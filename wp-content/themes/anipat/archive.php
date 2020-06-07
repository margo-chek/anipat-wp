<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Anipat
 */

get_header('archive');
?>

	<!--================Blog Area =================-->
	<section class="blog_area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="blog_left_sidebar">

						<?php get_template_part( 'inc/array', 'blogs' ); ?>

					</div>
				</div>

				<div class="col-lg-4">
					<div class="blog_right_sidebar">

						<?php get_sidebar('category'); ?>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================Blog Area =================-->


<?php
get_footer();
