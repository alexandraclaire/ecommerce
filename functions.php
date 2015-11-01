<?php 
//Disable Default Stylesheet for WooCommerce//
define('WOOCOMMERCE_USE_CSS', false);
//Theme Support for WooCommerce//
add_theme_support( 'woocommerce' ); //avoids error messages for future users of theme//

//Removes the user login bar at the top 
//add_filter( 'show_admin_bar', '__return_false' );
?>