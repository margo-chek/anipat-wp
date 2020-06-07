<?php
/**
 * Custom template section for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Anipat
 */

?>
<!-- pet_care_area_start  -->
    <div class="pet_care_area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 col-md-6">
					<div class="pet_thumb">
						<img src="<?php the_field('care_img', 25); ?>" alt="">
					</div>
				</div>
				<div class="col-lg-6 offset-lg-1 col-md-6">
					<div class="pet_info">
						<div class="section_title">
							<h3><span><?php the_field('care_subtitle', 25); ?> </span> <br><?php the_field('care_title', 25); ?></h3>
							<p><?php the_field('care_content', 25); ?></p>
							<a href="<?php echo home_url('/about/'); ?>" class="boxed-btn3"><?php the_field('title_about', 6); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- pet_care_area_end  -->
<?php  // вставка этого участка кода get_template_part( 'inc/section', 'care' );
