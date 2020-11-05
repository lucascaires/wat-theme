<?php 

//remove default wp emojicons
function disable_wp_emojicons() {
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
}
add_action( 'init', 'disable_wp_emojicons' );


//remove default js and css
function remove_assets () {
  wp_deregister_style( 'wp-block-library' );
  wp_deregister_style( 'wp-block-library-theme' );
  wp_deregister_style( 'wc-block-style' );  
  wp_deregister_script( 'wp-embed' );
}
add_action( 'init', 'remove_assets' );


//add wat assets
function add_assets() {
	wp_enqueue_style( 'wat-style', get_template_directory_uri() . '/assets/app.css' );
	wp_enqueue_script( 'wat-script', get_template_directory_uri() . '/assets/app.js' );
}
add_action( 'wp_enqueue_scripts', 'add_assets' );