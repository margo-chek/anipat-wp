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
							<h3 class="footer_title"><?php the_field('footer_contact_title', 13); ?></h3>
							<ul class="address_line">
								<li><a href="#">+<?php the_field('footer_contact_phone', 13); ?></a></li>
								<li><a href="mailto:<?php the_field('footer_contact_email', 13); ?>"><?php the_field('footer_contact_email', 13); ?></a></li>
								<?php 
									$address = get_field('footer_contact_address', 13);
									if ($address) {
										?><li><?php echo $address; ?></li><?php
									}
								?>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-lg-3">
						<div class="footer_widget">
							<h3 class="footer_title"><?php the_field('footer_servces_title', 10); ?></h3>
							<?php 
								wp_nav_menu( [
									'theme_location'  => 'servces-footer-menu',
									'container'       => false,
									'menu_class'      => 'links',								
									] );
							?>
						</div>
					</div>
					<div class="col-xl-3  col-md-6 col-lg-3">
						<div class="footer_widget">
							<h3 class="footer_title"><?php the_field('footer_links_title', 6); ?></h3>
							<?php 
								wp_nav_menu( [
									'theme_location'  => 'lincs-footer-menu',
									'container'       => false,
									'menu_class'      => 'links',								
									] );
							?>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-lg-3 ">
						<div class="footer_widget">
							<div class="footer_logo">
								<?php the_custom_logo( $blog_id ); ?>
							</div>
							<p class="address_text"><?php the_field('address_footer', 13); ?></p>
							<?php 
								wp_nav_menu( [
									'theme_location'  => 'social-links-footer-menu',
									'container'       => 'div',
									'container_class' => 'socail_links',
									'menu_class'      => 'false',								
									] );
							?>

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
