<?php
/**
 * Plugin Name:       WPBKT Google Map
 * Plugin URI:        https://wpbkt.com
 * Description:       WordPress Google Map created by WordPress Bhaktapur Group.
 * Version:           1.0.0
 * Author:												WordPress Bhaktapur
 * Author URI:								https://wpbkt.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:							wpbkt-google-map
 * Domain Path:       /languages
 *
 * @package wpbkt-google-map
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


/**
 * Register a custom menu page.
 */
function wpbkt_google_map_add_menu(){
    add_menu_page(
        __( 'WPBKT Google Map', 'textdomain' ),
        'Google Map',
        'manage_options',
        'google-map',
        'wpbkt_google_map_add_menu_callback',
        'dashicons-admin-site',
        60
    );
}
add_action( 'admin_menu', 'wpbkt_google_map_add_menu' );

/**
 * Display a custom menu page
 */
function wpbkt_google_map_add_menu_callback(){
    esc_html_e( 'Admin Page Test', 'textdomain' );
}
// Register style sheet.
add_action( 'admin_enqueue_scripts', 'register_plugin_styles' );

/**
 * Register style sheet.
 */
function register_plugin_styles() {
	wp_register_style( 'wpbkt_google_map_css', plugins_url('',__FILE__) .'/css/wpbkt-google-map.css' );
	wp_enqueue_style( 'wpbkt_google_map_css' );
    wp_enqueue_script( 'wpbkt_google_map_js', plugins_url('',__FILE__) .'/js/wpbkt-google-map.js', array(), '', true );
}

 
 add_shortcode( 'google_map', 'wpbkt_google_map_shortcode_cbd' );


 function wpbkt_google_map_shortcode_cbd($atts) {

 	shortcode_atts( array( 'lat'=>'', 'long'=> '' ), $atts, 'google_map' );
 	
 	if($atts['lat'] === 1 ) :
 	
 	return "This is shorcode output when lat is 1";

 	endif;



 }












