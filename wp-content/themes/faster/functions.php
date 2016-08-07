<?php
function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
	array( $parent_style )
	);
	
	// Load Font Awesome
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome-4.6.3/css/font-awesome.css', array());
	// Load Bootstrap
	wp_enqueue_script( 'bootstrap-jquery-js', get_template_directory_uri() . '/js/jquery-3.1.0.min.js', array());
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array());
	wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css', false, NULL, 'all' );
	wp_register_style( 'bootstrap-theme-css', get_template_directory_uri() . '/css/bootstrap-theme.css', false, NULL, 'all' );
	wp_enqueue_style( 'bootstrap-theme-css' );
	wp_enqueue_style( 'bootstrap-css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
?>
