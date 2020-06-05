<?php
/*
Template Name: Contact
Template Post Type: page
*/

if (have_posts()) the_post();
get_header('page');
?>

    <!-- ================ contact section start ================= -->
	<section class="contact-section">
			<div class="container">
				<div class="d-none d-sm-block mb-5 pb-4">
                    <?php the_content(); ?>
				</div>
	
				<div class="row">
					<div class="col-12">
						<h2 class="contact-title">Get in Touch</h2>
					</div>
					<div class="col-lg-8">
						<form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <?php echo do_shortcode('[contact-form-7 id="135" title="Get in Touch"]') ?>
						</form>
					</div>
					<div class="col-lg-3 offset-lg-1">
						<div class="media contact-info">
							<span class="contact-info__icon"><i class="ti-home"></i></span>
							<div class="media-body">
								<h3><?php the_field('media_contact_home_title', 13); ?></h3>
								<p><?php the_field('media_contact_home_content', 13); ?></p>
							</div>
						</div>
						<div class="media contact-info">
							<span class="contact-info__icon"><i class="ti-tablet"></i></span>
							<div class="media-body">
								<h3><a href="#">+<?php the_field('media_contact_phone', 13); ?></a></h3>
								<p><?php the_field('media_contact_phone_comments', 13); ?></p>
							</div>
						</div>
						<div class="media contact-info">
							<span class="contact-info__icon"><i class="ti-email"></i></span>
							<div class="media-body">
								<h3><a href="#"><?php the_field('media_contact_email', 13); ?></a></h3>
								<p><?php the_field('media_contact_email_comments', 13); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- ================ contact section end ================= -->

<?php

get_footer();
