<?php
/**
 * Custom template section for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Anipat
 */

?>
<!-- adapt_area_start  -->
    <div class="adapt_area">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-5">
					<div class="adapt_help">
						<div class="section_title">
							<h3><span><?php the_field('help_subtitle', 25); ?></span> <?php the_field('help_title', 25); ?></h3>
							<p><?php the_field('help_content', 25); ?></p>
							<a href="<?php echo home_url('/contact/'); ?>" class="boxed-btn3"><?php the_field('footer_contact_title', 13); ?></a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="adapt_about">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6">
								<div class="single_adapt text-center">
									<img src="<?php echo get_template_directory_uri(); ?>/img/adapt_icon/1.png" alt="">
									<div class="adapt_content">
										<h3 class="counter">452</h3>
										<p>Pets Available</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="single_adapt text-center">
									<img src="<?php echo get_template_directory_uri(); ?>/img/adapt_icon/3.png" alt="">
									<div class="adapt_content">
										<h3><span class="counter">52</span>+</h3>
										<p>Pets Available</p>
									</div>
								</div>
								<div class="single_adapt text-center">
									<img src="<?php echo get_template_directory_uri(); ?>/img/adapt_icon/2.png" alt="">
									<div class="adapt_content">
										<h3><span class="counter">52</span>+</h3>
										<p>Pets Available</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- adapt_area_end  -->
<?php  // вставка этого участка кода get_template_part( 'inc/section', 'help' );
