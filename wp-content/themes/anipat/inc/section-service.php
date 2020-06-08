<?php
/**
 * Custom template section for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Anipat
 */

?>
	<!-- service_area_start  -->
	<div class="service_area">
		<div class="container">
			<div class="row justify-content-center ">
				<div class="col-lg-7 col-md-10">
					<div class="section_title text-center mb-95">
						<h3><?php the_field('services_title', 25); ?></h3>
						<p><?php the_field('services_content', 25); ?></p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<?php
					global $post;
					$myposts = get_posts( array(
						'post_type'   => 'service',
						'numberposts' => 3,
					) );

					if (!empty($myposts)) {
						
						foreach( $myposts as $post ) {
							setup_postdata( $post ); ?>
							<!-- card -->
							<div class="col-lg-4 col-md-6">
								<div class="single_service">
									<div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
										<a class="service_icon" href="<?php the_permalink() ?>">
											<?php the_post_thumbnail( 'serv-card' ); ?>
										</a>
									</div>
									<div class="service_content text-center">
										<h3><?php the_title(); ?></h3>
										<?php the_content(); ?>
									</div>
								</div>
							</div>
							<!-- /card -->															
						<?php 
						} 				
					} else {
						echo "Сервисов нет";
					}
					wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
	<!-- service_area_end -->
<?php  // вставка этого участка кода get_template_part( 'inc/section', 'service' );
