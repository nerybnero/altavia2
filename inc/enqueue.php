<?php
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
	
	wp_enqueue_style( 'style', get_template_directory_uri() .'/assets/css/style.css');
    
	wp_enqueue_script( 'newscript', get_template_directory_uri() . '/assets/js/app.js');

}

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');


add_filter( 'script_loader_tag', 'add_type_attribute' , 10, 3 );

function add_type_attribute($tag, $handle, $src) {
	// if not your script, do nothing and return original $tag
	if ( 'newscript' !== $handle ) {
		return $tag;
	}
	// change the script tag by adding type="module" and return it.
	$tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
	return $tag;
}

?>