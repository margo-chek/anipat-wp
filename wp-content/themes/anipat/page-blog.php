<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Anipat
 */

get_header('page');
// get_header('archive');
?>

	<!--================Blog Area =================-->
	<section class="blog_area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="blog_left_sidebar">

						<?php
							global $post;

							$myposts = get_posts( array(
								'numberposts' => 4,
								'offset'      => 0, // с учетом пагинации смещение/отступ от первого поста
								'order'       => 'DESC',
							) );

							if (!empty($myposts)) {
								
								foreach( $myposts as $post ) {
									setup_postdata( $post ); ?>

									<article class="blog_item">
										<div class="blog_item_img">
											<a class="card-img rounded-0" href="<?php the_permalink() ?>"><?php the_post_thumbnail('blog-card') ?></a>
											<a href="<?php echo get_post_type_archive_link( get_the_date() ); ?>" class="blog_item_date"> <!--href="archive.html" -->
												<h3><?php echo get_the_date('j'); ?></h3>
												<p><?php echo get_the_date('F'); ?></p>
											</a>
										</div>

										<div class="blog_details">
											<a class="d-inline-block" href="single-blog.html">
												<h2><?php the_title(); ?></h2>
											</a>
											<p><?php the_excerpt(); ?></p>
											<ul class="blog-info-link">
												<li><a href="<?php echo get_category_link( get_the_category()[0]->cat_ID ); ?>"><i class="fa fa-folder-open"></i> <?php echo get_the_category()[0]->cat_name; ?></a></li>
											</ul>
										</div>
									</article>	

								<?php 
								} 
								
							} else {
								echo "Постов нет";
							}
			
							wp_reset_postdata();
						?>

						<!-- <nav class="blog-pagination justify-content-center d-flex">
							<ul class="pagination">
								<li class="page-item">
									<a href="#" class="page-link" aria-label="Previous">
										<i class="ti-angle-left"></i>
									</a>
								</li>
								<li class="page-item">
									<a href="#" class="page-link">1</a>
								</li>
								<li class="page-item active">
									<a href="#" class="page-link">2</a>
								</li>
								<li class="page-item">
									<a href="#" class="page-link" aria-label="Next">
										<i class="ti-angle-right"></i>
									</a>
								</li>
							</ul>
						</nav> -->

					</div>
				</div>

				<div class="col-lg-4">
					<div class="blog_right_sidebar">

						<aside class="single_sidebar_widget search_widget">
							<form action="#">
								<?php echo do_shortcode('[contact-form-7 id="146" title="Search"]') ?>
							</form>
						</aside>

						<?php get_sidebar('blog'); ?>

						<aside class="single_sidebar_widget newsletter_widget">
							<h4 class="widget_title">Newsletter</h4>
							<form action="#">
								<?php echo do_shortcode('[contact-form-7 id="145" title="Newsletter"]'); ?>
							</form>
						</aside>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================Blog Area =================-->

<?php

get_footer();
