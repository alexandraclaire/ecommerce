<?php 
//Disable Default Stylesheet for WooCommerce//
define('WOOCOMMERCE_USE_CSS', false);
//Theme Support for WooCommerce//
add_theme_support( 'woocommerce' ); //avoids error messages for future users of theme//

//Removes the user login bar at the top 
add_filter( 'show_admin_bar', '__return_false' );
add_action( 'init', 'jk_remove_wc_breadcrumbs' );

function jk_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}
function theme_js() {
	global $wp_script;

    wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/js/hovers.js', array('jquery'), '', true );
} 
// Adding the wp_enqueue_script to make the js function work
add_action( 'wp_enqueue_scripts', 'theme_js');

