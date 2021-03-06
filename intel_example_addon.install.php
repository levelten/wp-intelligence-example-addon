<?php

/**
 * Fired when the plugin is installed and contains schema info and updates.
 *
 * @link       getlevelten.com/blog/tom
 * @since      1.0.0
 *
 * @package    Intel
 */


function intel_example_addon_install() {

}

/**
 * Implements hook_uninstall();
 *
 * Delete plugin settings
 *
 */
function intel_example_addon_uninstall() {
	global $wpdb;

	// delete options
	$sql = "DELETE FROM {$wpdb->options} WHERE option_name LIKE 'wpcf7_intel_%'";
	$wpdb->query( $sql );

	// uninstall plugin related intel data
	if (is_callable('intel_uninstall_plugin')) {
		intel_uninstall_plugin('wpcf7_intel');
	}

}

/**
 * Implements hook_update_n()
 *
 * Used to implement ordered database updates.
 */
function intel_example_adon_update_1001() {

}