<?php
/**
 * Custom template section for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Anipat
 */

?>
<!-- testmonial_area_start  -->
    <div class="testmonial_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="textmonial_active owl-carousel">
						<?php
							global $post;
							$myposts = get_posts( array(
								'post_type'   => 'review',
								'numberposts' =>  10,
							) );

							if (!empty($myposts)) {							
								foreach( $myposts as $post ){
									setup_postdata( $post ); ?>
									<!-- card -->
									<div class="testmonial_wrap">
										<div class="single_testmonial d-flex align-items-center">
											<div class="test_thumb" href="<?php the_permalink() ?>">
												<?php the_post_thumbnail( 'photo-thumb' ); ?>
											</div>
											<div class="test_content">
												<h4><?php the_title(); ?></h4>
												<span><?php echo get_taxonomies()[0]->name; ?></span>
												<p><?php the_content(); ?></p>
											</div>
										</div>
									</div>
									<!-- /card -->															
								<?php 
								} 				
							} else {
								echo "Нет отзывов";
							}
							wp_reset_postdata();
						?>
					</div>
				</div>
			</div>

		</div>
	</div>
<!-- testmonial_area_end  -->
<?php  // вставка этого участка кода get_template_part( 'inc/section', 'review' );
