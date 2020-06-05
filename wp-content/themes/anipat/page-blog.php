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
						<article class="blog_item">
							<div class="blog_item_img">
								<img class="card-img rounded-0" src="img/blog/single_blog_1.png" alt="">
								<a href="archive.html" class="blog_item_date">
									<h3>15</h3>
									<p>Jan</p>
								</a>
							</div>

							<div class="blog_details">
								<a class="d-inline-block" href="single-blog.html">
									<h2>Google inks pact for new 35-storey office</h2>
								</a>
								<p>That dominion stars lights dominion divide years for fourth have don't stars is that
									he earth it first without heaven in place seed it second morning saying.</p>
								<ul class="blog-info-link">
									<li><a href="archive.html"><i class="fa fa-folder-open"></i> Lifestyle</a></li>
								</ul>
							</div>
						</article>

						<article class="blog_item">
							<div class="blog_item_img">
								<img class="card-img rounded-0" src="img/blog/single_blog_3.png" alt="">
								<a href="archive.html" class="blog_item_date">
									<h3>15</h3>
									<p>Jan</p>
								</a>
							</div>

							<div class="blog_details">
								<a class="d-inline-block" href="single-blog.html">
									<h2>Google inks pact for new 35-storey office</h2>
								</a>
								<p>That dominion stars lights dominion divide years for fourth have don't stars is that
									he earth it first without heaven in place seed it second morning saying.</p>
								<ul class="blog-info-link">
									<li><a href="archive.html"><i class="fa fa-folder-open"></i> Lifestyle</a></li>
								</ul>
							</div>
						</article>

						<article class="blog_item">
							<div class="blog_item_img">
								<img class="card-img rounded-0" src="img/blog/single_blog_5.png" alt="">
								<a href="archive.html" class="blog_item_date">
									<h3>15</h3>
									<p>Jan</p>
								</a>
							</div>

							<div class="blog_details">
								<a class="d-inline-block" href="single-blog.html">
									<h2>Google inks pact for new 35-storey office</h2>
								</a>
								<p>That dominion stars lights dominion divide years for fourth have don't stars is that
									he earth it first without heaven in place seed it second morning saying.</p>
								<ul class="blog-info-link">
									<li><a href="archive.html"><i class="fa fa-folder-open"></i> Lifestyle</a></li>
								</ul>
							</div>
						</article>

						<nav class="blog-pagination justify-content-center d-flex">
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
						</nav>
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


						<!-- <aside class="single_sidebar_widget tag_cloud_widget">
							<h4 class="widget_title">Tag Clouds</h4>
							<ul class="list">
								<li>
									<a href="archive.html">project</a>
								</li>
								<li>
									<a href="archive.html">love</a>
								</li>
								<li>
									<a href="archive.html">technology</a>
								</li>
								<li>
									<a href="archive.html">travel</a>
								</li>
								<li>
									<a href="archive.html">restaurant</a>
								</li>
								<li>
									<a href="archive.html">life style</a>
								</li>
								<li>
									<a href="archive.html">design</a>
								</li>
								<li>
									<a href="archive.html">illustration</a>
								</li>
							</ul>
						</aside> -->

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
// get_sidebar();

get_footer();
