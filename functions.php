<?php
/**
 * Owari Custom Footer Text functions
 *
 * @package Owari Custom Footer Text
 */

/**
 * Enqueue styles.
 */
function owari_custom_footer_text_styles() {
	// Load the parent theme stylesheet
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

	// Dequeue ceremonial child theme stylesheet
	wp_dequeue_style( 'owari-style' );
} // end function owari_custom_footer_text_styles
add_action( 'wp_enqueue_scripts', 'owari_custom_footer_text_styles', 11 );
