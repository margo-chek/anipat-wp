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

						<?php

							if ( have_posts() ) : 
								while ( have_posts() ) : the_post(); ?>

										<article class="blog_item">
											<div class="blog_item_img">
												<a class="card-img rounded-0" href="<?php the_permalink() ?>"><?php the_post_thumbnail('blog-card') ?></a>
												<a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j')); ?>" class="blog_item_date"> <!--href="archive.html" -->
													<h3><?php echo get_the_date('j'); ?></h3>
													<p><?php echo get_the_date('F'); ?></p>
												</a>
											</div>

											<div class="blog_details">
												<a class="d-inline-block" href="<?php the_permalink(); ?>">
													<h2><?php the_title(); ?></h2>
												</a>
												<p><?php the_excerpt(); ?></p>
												<ul class="blog-info-link">
													<li><a href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>"><i class="fa fa-folder-open"></i> <?php echo get_the_category()[0]->cat_name; ?></a></li>
												</ul>
											</div>
										</article>
									
								
								<?php		
								endwhile;

							else :

							get_template_part( 'template-parts/content', 'none' );

							endif;
						?>		

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
