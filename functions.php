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


// add some theme support
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

//register menu
register_nav_menu( 'primary',  'Main');



// custom get menu function
if ( ! function_exists( 'get_menu_by_location' ) ) {
  function get_menu_by_location( $theme_location, $args = array() ) {
    $theme_locations = get_nav_menu_locations();
    $menu_obj = get_term( $theme_locations[ $theme_location ], 'nav_menu' );
    return ( $menu_obj )  
      ? wp_get_nav_menu_items( $menu_obj->term_id, $args )
      : $menu_obj;
  }
}

// custom get logo src
if (! function_exists('get_custom_logo_src')) {
    function get_custom_logo_src($size = 'full')
    {
        $logo = get_theme_mod('custom_logo');
        list($src, $width, $height) = wp_get_attachment_image_src($logo, $size);
        return $src;
    }
}

