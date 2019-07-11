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


add_action( 'wp_ajax_contact_form', 'contact_form' );
add_action( 'wp_ajax_nopriv_contact_form', 'contact_form' );

function contact_form(){
	parse_str($_POST['form_data'], $form_data);
	
	$my_post = array(
		'post_title'    => wp_strip_all_tags( $form_data['fname'] ).'- '.$form_data['subject'],
		'post_type'		=> 'contact',
		 'meta_input'   => $form_data
	);

	wp_insert_post($my_post);
	
	wp_die(json_encode($form_data))	;
}

function custom_post_types() {

	$labels = array(
			'name'               => __('Contact'),
			'singular_name'      => __('Contact'),
			'add_new'            => __('Add New'),
			'add_new_item'       => __( 'Add New Contact' ),
			'edit_item'          => __( 'Edit Contacts' ),
			'new_item'           => __( 'New Contact' ),
			'view_item'          => __( 'View Contact' ),
			'search_items'       => __( 'Search Contact' ),
			'not_found'          => __( 'No Contact found' ),
			'not_found_in_trash' => __( 'No Contact found in the Trash' ),
			'parent_item_colon'  => '',
			'menu_name'          => 'Contact'
	);
	$args = array(
			'labels'        => $labels,
			'description'   => 'Contact',
			'public'        => true,
			'publicly_queryable' => true,
			'menu_position' => 4,
			'supports'      => array( 'title', 'editor','thumbnail', 'author' ),
			'has_archive'   => true,
	);
	
	register_post_type( 'contact', $args );

}
add_action( 'init', 'custom_post_types' );