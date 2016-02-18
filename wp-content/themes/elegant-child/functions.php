<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'emrose-styles', esc_url_raw( 'http://emrose.net/sites/all/themes/emr/style.css' ), array(), null );
	wp_enqueue_style( 'emrose-editor', esc_url_raw( 'http://emrose.net/sites/all/themes/emr/editor.css'), array(), null);
	
	wp_enqueue_script( 'main-script', get_stylesheet_directory_uri() . '/js/script.js', array( 'jquery' ));
}

?>