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
        'dashicons-marker',
        6
    );
}
add_action( 'admin_menu', 'wpbkt_google_map_add_menu' );

/**
 * Display a custom menu page
 */
function wpbkt_google_map_add_menu_callback(){
    esc_html_e( 'Admin Page Test', 'textdomain' );
}
