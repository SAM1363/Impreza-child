<?php
	function my_theme_enqueue_styles() {
		// CSS
		// wp_enqueue_style( 'Impreza', get_template_directory_uri() . '/css/style.css' );
		// wp_enqueue_style( 'Impreza-child', get_template_directory_uri() . '/style.css' );

		// JS
		wp_enqueue_script( 'lapraim.js', get_template_directory_uri() . '-child/lapraim.js', array('jquery'), '1.0.0', true );
	}
	add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>