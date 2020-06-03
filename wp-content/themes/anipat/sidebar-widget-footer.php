<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anipat
 */

if ( ! is_active_sidebar( 'sidebar-widget-footer' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-widget-footer' ); ?>
</aside><!-- #secondary -->
