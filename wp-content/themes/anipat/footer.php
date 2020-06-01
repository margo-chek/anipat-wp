<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anipat
 */

?>

	<!-- footer_start  -->
	<footer class="footer">
		<div class="footer_top">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-md-6 col-lg-3">
						<div class="footer_widget">
							<h3 class="footer_title">
								Contact Us
							</h3>
							<ul class="address_line">
								<li><a href="#">+555 0000 565</a></li>
								<li><a href="#">anipat@gmail.com</a></li>
								<li>700, Green Lane, New York, USA</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-lg-3">
						<div class="footer_widget">
							<h3 class="footer_title">
								Our Servces
							</h3>
							<ul class="links">
								<li><a href="service.html">Pet Insurance</a></li>
								<li><a href="service.html">Pet surgeries </a></li>
								<li><a href="service.html">Pet Adoption</a></li>
								<li><a href="service.html">Dog Insurance</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-3  col-md-6 col-lg-3">
						<div class="footer_widget">
							<h3 class="footer_title">
								Quick Link
							</h3>
							<ul class="links">
								<li><a href="about.html">About Us</a></li>
								<li><a href="blog.html">Our Blog</a></li>
								<li><a href="service.html">Terms of Service</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-lg-3 ">
						<div class="footer_widget">
							<div class="footer_logo">
								<a href="index.html">
									<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
								</a>
							</div>
							<p class="address_text">239 E 5th St, New York 
								NY 10003, USA
							</p>
							<div class="socail_links">
								<ul>
									<li>
										<a href="#">
											<i class="ti-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-vk"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-instagram"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-twitter"></i>
										</a>
									</li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copy-right_text">
			<div class="container">
				<div class="bordered_1px"></div>
				<div class="row">
					<div class="col-xl-12">
						<p class="copy_right text-center">
							<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- footer_end  -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
