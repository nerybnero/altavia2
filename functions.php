<?php
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
	
	wp_enqueue_style( 'style', get_template_directory_uri() .'/assets/css/style.min.css');
    
	wp_enqueue_script( 'newscript', get_template_directory_uri() . '/assets/js/app.js');

}

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>