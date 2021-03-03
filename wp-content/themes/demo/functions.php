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
	wp_enqueue_script( 'bootstrap-pooper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('popper'));

}
add_action( 'wp_enqueue_scripts', 'demo_theme_scripts' );



add_action( 'wp_ajax_post_cart_clb', 'cart_clb' );
add_action( 'wp_ajax_nopriv_post_cart_clb', 'cart_clb' );

function cart_clb(){
	
		$form_value = $_POST;
		$first_name = $form_value['fields']['first_name'];
		$last_name = $form_value['fields']['last_name'];
		$email = $form_value['fields']['email'];
		$phone = $form_value['fields']['phone'];
		$subject = $form_value['fields']['subject'];

		$description = $form_value['fields']['description'];
	
		$content = "Name: $first_name\n and $last_name  <br>";
		$content .= "Email: $email\n\n <br>";
		$content .= "Phone: $phone\n\n <br>";
		$content .= "Subject Title: $subject\n <br>";
		$content .= "Порака:\n$description\n <br>";
		
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html\r\n";
		$headers .= 'From:'.$email . "\r\n" .
		'Reply-To:' .$email . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

		$success = mail("info@gardensavvy.com", $subject, $content, $headers);
		if ($success) {
			# Set a 200 (okay) response code.
			echo "Thank You! Your message has been sent.";
		} else {
			# Set a 500 (internal server error) response code.
			echo "Oops! Something went wrong, we couldn't send your message.";
		}

    
}
