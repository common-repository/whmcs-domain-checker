<?php
/**
 * @package   Whmcs_Domain_Checker
 * @author    Cmsbased <info@cmsbased.net>
 * @license   GPL-2.0+
 * @link      http://cmsbased.net/
 * @copyright 2014 Cmsbased
 *
 * @wordpress-plugin
 * Plugin Name: WHMCS Domain Checker
 * Plugin URI:  http://cmsbased.net/
 * Description: Adds widget to allow domain checks in WHMCS. 
 * Version:     1.0.1
 * Author:      Cmsbased
 * Author URI:  http://cmsbased.net/
 * Text Domain: whmcs-domain-checker
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once( plugin_dir_path( __FILE__ ) . 'class-whmcs-domain-checker.php' );

require_once( plugin_dir_path( __FILE__ ) . '/includes/widget-domain_checker.php' );

// Register hooks that are fired when the plugin is activated or deactivated.
// When the plugin is deleted, the uninstall.php file is loaded.
register_activation_hook( __FILE__, array( 'Whmcs_Domain_Checker', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Whmcs_Domain_Checker', 'deactivate' ) );

// Load instance
add_action( 'plugins_loaded', array( 'Whmcs_Domain_Checker', 'get_instance' ) );
//Whmcs_Domain_Checker::get_instance();
?>