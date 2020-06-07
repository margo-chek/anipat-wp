<?php
/**
 * Custom template section for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Anipat
 */

?>
<!-- team_area_start  -->
    <div class="team_area">
		<div class="container">
			<div class="row justify-content-center ">
				<div class="col-lg-6 col-md-10">
					<div class="section_title text-center mb-95">
						<h3><?php the_field('teams_title', 25); ?></h3>
						<p><?php the_field('teams_content', 25); ?></p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<?php
					global $post;
					$myposts = get_posts( array(
						'post_type'   => 'team',
						'numberposts' =>  6,
						'orderby'     => 'date',
						'order'       => 'ASC',
					) );

					if (!empty($myposts)) {
						
						foreach( $myposts as $post ){
							setup_postdata( $post ); ?>
							<!-- card -->
							<div class="col-lg-4 col-md-6">
								<div class="single_team">
									<div class="thumb" href="<?php the_permalink() ?>">
										<?php the_post_thumbnail( 'photo-team-thumb' ); ?>
									</div>
									<div class="member_name text-center">
										<div class="mamber_inner">
											<h3><?php the_title(); ?></h3>
											<p><?php the_content(); ?></p>
										</div>
									</div>
								</div>
							</div>
							<!-- /card -->															
						<?php 
						} 				
					} else {
						echo "Нет членов команды";
					}
					wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
<!-- team_area_start  -->
<?php  // вставка этого участка кода get_template_part( 'inc/section', 'team' );
