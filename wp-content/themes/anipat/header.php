<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anipat
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home | Anipat</title>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'anipat' ); ?></a>

	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- header_start -->
	<header>
		<div class="header-area ">
			<div class="header-top_area">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-8">
							<div class="short_contact_list">
								<ul>
									<li><a href="#">+880 4664 216</a></li>
									<li><a href="contact.html">Mon - Sat 10:00 - 7:00</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6 col-md-4 ">
							<?php 
								wp_nav_menu( [
									'theme_location'  => 'social-links-header-menu',
									'container'       => 'div',
									'container_class' => 'social_media_links',
									'menu_class'      => 'false',								
									] );
							?>
							<!-- <div class="social_media_links">
								<a href="#">
									<i class="fa fa-facebook"></i>
								</a>
								<a href="#">
									<i class="fa fa-vk"></i>
								</a>
								<a href="#">
									<i class="fa fa-instagram"></i>
								</a>
								<a href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>
			<div id="sticky-header" class="main-header-area">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-xl-3 col-lg-3">
							<div class="logo">
								<?php // the_custom_logo( $blog_id ); ?>
								<a href="index.html">
									<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
								</a>
							</div>
						</div>
						<div class="col-xl-9 col-lg-9">
							<div class="main-menu  d-none d-lg-block">
								<nav>
									<ul id="navigation">
										<li><a href="index.html">Home</a></li>
										<li><a href="about.html">About</a></li>
										<li><a href="blog.html">Blog</a></li>
										<li><a href="service.html">Services</a></li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-12">
							<div class="mobile_menu d-block d-lg-none"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- header_end -->
