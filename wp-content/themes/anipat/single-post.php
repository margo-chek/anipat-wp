<?php
    if (have_posts()) the_post();
    get_header('page');
?>

<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
					<div class="single-post">
						<div class="feature-img">
							<a class="img-fluid" href="<?php the_permalink() ?>"><?php the_post_thumbnail('blog-card') ?></a>
						</div>
						<div class="blog_details">
							<h2><?php the_title(); ?></h2>
							<ul class="blog-info-link mt-3 mb-4">
								<li><a href="<?php echo get_category_link( get_the_category()[0]->cat_ID ); ?>"><i class="fa fa-folder-open"></i> <?php echo get_the_category()[0]->cat_name; ?></a></li>
							</ul>
							<p><?php the_content(); ?></p>
							<p><?php the_content(); ?></p>
							<div class="quote-wrapper">
								<div class="quotes">
									<?php the_excerpt(); ?>
								</div>
							</div>
							<p><?php the_content(); ?></p>
							<p><?php the_content(); ?></p>
						</div>
					</div>

					<div class="navigation-top">
						<div class="navigation-area">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
									<?php $prev_post = get_previous_post(); ?>
									<div class="thumb">
										<a class="img-fluid" href="<?php echo get_permalink( $prev_post ); ?>"><?php echo get_the_post_thumbnail( $prev_post, 'post-nav' ); ?></a>
									</div>
									<div class="arrow">
										<a href="<?php echo get_permalink( $prev_post ); ?>">
											<span class="lnr text-white ti-arrow-left"></span>
										</a>
									</div>
									<div class="detials">
										<p>Prev Post</p>
										<a href="<?php echo get_permalink( $prev_post ); ?>">
											<h4><?php echo get_the_title( $prev_post ); ?></h4>
										</a>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
									<?php $next_post = get_next_post(); ?>
									<div class="detials">
										<p>Next Post</p>
										<a href="<?php echo get_permalink( $next_post ); ?>">
											<h4><?php echo get_the_title( $next_post ); ?></h4>
										</a>
									</div>
									<div class="arrow">
										<a href="<?php echo get_permalink( $next_post ); ?>">
											<span class="lnr text-white ti-arrow-right"></span>
										</a>
									</div>
									<div class="thumb">
									<a class="img-fluid" href="<?php echo get_permalink( $next_post ); ?>"><?php echo get_the_post_thumbnail( $next_post, 'post-nav' ); ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="blog-author">
						<div class="media align-items-center">
							<img src="<?php echo get_template_directory_uri(); ?>/img/blog/author.png" alt="">
							<div class="media-body">
								<a href="#">
									<h4>Harvard milan</h4>
								</a>
								<p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
									our dominion twon Second divided from</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="blog_right_sidebar">
						<aside class="single_sidebar_widget search_widget">
							<form action="#">
								<?php echo do_shortcode('[contact-form-7 id="146" title="Search"]') ?>
							</form>
						</aside>

						<?php get_sidebar('post'); ?>

					</div>
				</div>
			</div>
		</div>
	</section>
    <!--================ Blog Area end =================-->
    
    <?php get_footer(); ?>
