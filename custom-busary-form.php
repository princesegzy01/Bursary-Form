<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the
 * plugin admin area. This file also defines a function that starts the plugin.
 *
 * @link              http://michaelsodium.com/plugin
 * @since             1.0.0
 * @package           busary_form
 *
 * @wordpress-plugin
 * Plugin Name:       Bursary Form
 * Plugin URI:        http://michaelsodium.com/plugin
 * Description:       Create a bursary form for the website
 * Version:           1.0.0
 * Author:            Sodimu Segun
 * Author URI:        https://michaelsodium.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */
 
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
     die;
}

// Include the dependencies needed to instantiate the plugin.
foreach ( glob( plugin_dir_path( __FILE__ ) . 'admin/*.php' ) as $file ) {
    include_once $file;
}

 
add_action( 'plugins_loaded', 'bursary_form_settings' );
/**
 * Starts the plugin.
 *
 * @since 1.0.0
 */
function bursary_form_settings() {

	$plugin = new Submenu( new Submenu_Page() );
    $plugin->init();
 
}
