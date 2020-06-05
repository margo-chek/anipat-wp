<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Anipat
 */

get_header('index');
?>

	<!-- service_area_start  -->
	<div class="service_area">
		<div class="container">
			<div class="row justify-content-center ">
				<div class="col-lg-7 col-md-10">
					<div class="section_title text-center mb-95">
						<h3>Services for every dog</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-4 col-md-6">
					<div class="single_service">
						 <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
							 <div class="service_icon">
								 <img src="<?php echo get_template_directory_uri(); ?>/img/service/service_icon_1.png" alt="">
							 </div>
						 </div>
						 <div class="service_content text-center">
							<h3>Pet Boarding</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
						 </div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single_service active">
						 <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
							 <div class="service_icon">
								 <img src="<?php echo get_template_directory_uri(); ?>/img/service/service_icon_2.png" alt="">
							 </div>
						 </div>
						 <div class="service_content text-center">
							<h3>Healthy Meals</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
						 </div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single_service">
						 <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
							 <div class="service_icon">
								 <img src="<?php echo get_template_directory_uri(); ?>/img/service/service_icon_3.png" alt="">
							 </div>
						 </div>
						 <div class="service_content text-center">
							<h3>Pet Spa</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
						 </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- service_area_end -->

	<!-- pet_care_area_start  -->
	<div class="pet_care_area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 col-md-6">
					<div class="pet_thumb">
						<img src="<?php echo get_template_directory_uri(); ?>/img/about/pet_care.png" alt="">
					</div>
				</div>
				<div class="col-lg-6 offset-lg-1 col-md-6">
					<div class="pet_info">
						<div class="section_title">
							<h3><span>We care your pet </span> <br>
								As you care</h3>
							<p>Lorem ipsum dolor sit , consectetur adipiscing elit, sed do <br> iusmod tempor incididunt ut labore et dolore magna aliqua. <br> Quis ipsum suspendisse ultrices gravida. Risus commodo <br>
								viverra maecenas accumsan.</p>
							<a href="about.html" class="boxed-btn3">About Us</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- pet_care_area_end  -->

	<!-- adapt_area_start  -->
	<div class="adapt_area">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-5">
					<div class="adapt_help">
						<div class="section_title">
							<h3><span>We need your</span>
								help Adopt Us</h3>
							<p>Lorem ipsum dolor sit , consectetur adipiscing elit, sed do iusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
							<a href="contact.html" class="boxed-btn3">Contact Us</a>
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

	<!-- testmonial_area_start  -->
	<div class="testmonial_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="textmonial_active owl-carousel">
						<div class="testmonial_wrap">
							<div class="single_testmonial d-flex align-items-center">
								<div class="test_thumb">
									<img src="<?php echo get_template_directory_uri(); ?>/img/testmonial/1.png" alt="">
								</div>
								<div class="test_content">
									<h4>Jhon Walker</h4>
									<span>Head of web design</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci.</p>
								</div>
							</div>
						</div>
						<div class="testmonial_wrap">
							<div class="single_testmonial d-flex align-items-center">
								<div class="test_thumb">
									<img src="<?php echo get_template_directory_uri(); ?>/img/testmonial/1.png" alt="">
								</div>
								<div class="test_content">
									<h4>Jhon Walker</h4>
									<span>Head of web design</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci.</p>
								</div>
							</div>
						</div>
						<div class="testmonial_wrap">
							<div class="single_testmonial d-flex align-items-center">
								<div class="test_thumb">
									<img src="<?php echo get_template_directory_uri(); ?>/img/testmonial/1.png" alt="">
								</div>
								<div class="test_content">
									<h4>Jhon Walker</h4>
									<span>Head of web design</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- testmonial_area_end  -->

	<!-- team_area_start  -->
	<div class="team_area">
		<div class="container">
			<div class="row justify-content-center ">
				<div class="col-lg-6 col-md-10">
					<div class="section_title text-center mb-95">
						<h3>Our Team</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-4 col-md-6">
					<div class="single_team">
						<div class="thumb">
							<img src="<?php echo get_template_directory_uri(); ?>/img/team/1.png" alt="">
						</div>
						<div class="member_name text-center">
							<div class="mamber_inner">
								<h4>Rala Emaia</h4>
								<p>Senior Director</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single_team">
						<div class="thumb">
							<img src="<?php echo get_template_directory_uri(); ?>/img/team/2.png" alt="">
						</div>
						<div class="member_name text-center">
							<div class="mamber_inner">
								<h4>jhon Smith</h4>
								<p>Senior Director</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single_team">
						<div class="thumb">
							<img src="<?php echo get_template_directory_uri(); ?>/img/team/3.png" alt="">
						</div>
						<div class="member_name text-center">
							<div class="mamber_inner">
								<h4>Rala Emaia</h4>
								<p>Senior Director</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single_team">
						<div class="thumb">
							<img src="<?php echo get_template_directory_uri(); ?>/img/team/3.png" alt="">
						</div>
						<div class="member_name text-center">
							<div class="mamber_inner">
								<h4>Rala Emaia</h4>
								<p>Senior Director</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- team_area_start  -->

<?php

get_footer('page');
