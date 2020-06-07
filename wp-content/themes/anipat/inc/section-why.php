<?php
/**
 * Custom template section for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Anipat
 */

// section why ?>
    <div class="contact_anipat anipat_bg_1">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="contact_text text-center">
						<div class="section_title text-center">
							<h3><?php the_field('slider_come_with_us_title', 25); ?></h3>
							<p><?php the_field('slider_come_with_us_content', 25); ?></p>
						</div>
						<div class="contact_btn d-flex align-items-center justify-content-center">
							<a href="<?php echo home_url('/contact/'); ?>" class="boxed-btn4"><?php the_field('footer_contact_title', 13); ?></a>
							<p>Or <a href="#">+<?php the_field('short_contact_phone', 13); ?></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- /section why --> <?php  // вставка этого участка кода get_template_part( 'inc/section', 'why' );
