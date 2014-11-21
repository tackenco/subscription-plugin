<?php
/**
 * Flexible Registrations provides an shortcode for a registration form with unlimited number of inputs.
 * All data will be stored in seperated database tables and can be managed in the admin area.
 *
 * @package   Flexible Registrations
 * @author    Niels Meijer
 * @license   GPL-2.0+
 * @link      http://www.wordpress-developer.nl/flexible_registrations/
 * @copyright 2014 Atelier Tackenco. All rights reserved.
 *
 * @wordpress-plugin
 * Plugin Name:  Flexible Registrations
 * Plugin URI:   http://www.wordpress-developer.nl/flexible_registrations/
 * Description:  Flexible Registrations provides an shortcode for a registration form with unlimited number of inputs. All data will be stored in seperated database tables and can be managed in the admin area.
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
require_once( FRS_ABSPATH . '/class/frs_core.class.php' );

// Register hooks for activation, deactivation and uninstall instances.
register_activation_hook( 	__FILE__, array( 'Flexible_Registrations', 'activate' 	 ) );
register_deactivation_hook( __FILE__, array( 'Flexible_Registrations', 'deactivate' ) );
register_uninstall_hook( 	__FILE__, array( 'Flexible_Registrations', 'uninstall'  ) );

// Initialize the plugin.
$flexible_registrations = new Flexible_Registrations();
?>