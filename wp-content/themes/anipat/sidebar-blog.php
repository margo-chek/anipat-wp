<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anipat
 */

if ( ! is_active_sidebar( 'sidebar-blog' ) ) {
	return;
}

dynamic_sidebar( 'sidebar-blog' );
