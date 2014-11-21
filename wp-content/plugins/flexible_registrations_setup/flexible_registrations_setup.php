<?php
/**
 * Flexible Registrations Setup is very flexible plugin for WordPress
 * that provides an shortcode for the registration form with unlimited number of input
 * and all data will be stored in the database and managed through WordPress.
 *
 * @package   Flexible Registrations Setup
 * @author    Niels Meijer
 * @license   GPL-2.0+
 * @link      http://www.wordpress-developer.nl/flexible_registrations_setup/
 * @copyright 2014 Atelier Tackenco. All rights reserved.
 *
 * @wordpress-plugin
 * Plugin Name:  Flexible Registrations Setup
 * Plugin URI:   http://www.wordpress-developer.nl/flexible_registrations_setup/
 * Description:  Flexible Registrations Setup is very flexible plugin for WordPress that provides an shortcode for the registration form with unlimited number of input and all data will be stored in the database and managed through WordPress.
 * Version:      1.0.1
 * Author:       Niels Meijer
 * Author URI:   http://www.wordpress-developer.nl/
 * Text Domain:  frs
 * Contributors: Niels Meijer
 * License:      GPL-2.0+
 * License URI:  http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:  /lang
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) die;

define( 'FRS_ABSPATH' , dirname( __FILE__ ) );
define( 'FRS_RELPATH' , plugins_url( '/' , __FILE__ ) );
define( 'FRS_VERSION', '101' );

// Load the main plugin class and widget class.
//require_once( plugin_dir_path( __FILE__ ) . 'class-floating-social-bar.php' );

// Register hooks for activation, deactivation and uninstall instances.
/*
register_activation_hook( 	__FILE__, array( 'floating_social_bar', 'activate' 	 ) );
register_deactivation_hook( __FILE__, array( 'floating_social_bar', 'deactivate' ) );
register_uninstall_hook( 	__FILE__, array( 'floating_social_bar', 'uninstall'  ) );
*/

// Initialize the plugin.
$floating_social_bar = floating_social_bar::get_instance();

// Generate a template tag for use in template files.
if ( ! function_exists( 'floating_social_bar' ) ) {
    /**
     * Floating Social Bar template tag.
     *
     * Allows you to insert a floating social bar anywhere in your template files.
     * The keys currently available are 'facebook', 'twitter', 'google',
     * 'linkedin', and 'pinterest'. The value should be set to true if you want to
     * display that social service in the bar. Services will be output in the order
     * that you specify in the $args array.
     *
     * @package Floating Social Bar
     * @param array $args Args used for the floating social bar.
	 * @param bool $return Flag for returning or echoing the slider content.
     */
    /*
function floating_social_bar( $args = array(), $return = false ) {

        // Prepare the args to be output into query string shortcode format.
        $output_args = '';
		foreach ( $args as $k => $v )
			$output_args .= $k . '=' . $v . ' ';

        // Return or echo the content via shortcode.
		if ( $return )
			return do_shortcode( '[fsb-social-bar ' . trim( $output_args ) . ']' );
		else
			echo do_shortcode( '[fsb-social-bar ' . trim( $output_args ) . ']' );

    }
*/
}
