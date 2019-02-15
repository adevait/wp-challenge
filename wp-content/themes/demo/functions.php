<?php
/**
 * Demp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Demo
 */

function demo_theme_scripts() {

	//include styles
	wp_enqueue_style( 'demo-bootstrap-theme', get_template_directory_uri() . '/css/bootstrap/bootstrap-reboot.min.css');
	wp_enqueue_style( 'demo-bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css');
	wp_enqueue_style( 'demo-style', get_template_directory_uri() . '/css/style.css' );

	//include js
	wp_enqueue_script( 'bootstrap-jquery', 'https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'));
	wp_enqueue_script( 'demo-theme', get_template_directory_uri() . '/js/theme.js', ['jquery'], true);
	wp_enqueue_script( 'demo-main', get_template_directory_uri() . '/js/app.js', ['jquery', 'demo-theme'], true);
	
}
add_action( 'wp_enqueue_scripts', 'demo_theme_scripts' );

