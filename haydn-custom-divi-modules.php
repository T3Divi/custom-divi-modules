<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/twitchedy/haydn-custom-divi-modules
 * @since             1.0.0
 * @package           CustomDiviModules
 *
 * @wordpress-plugin
 * Plugin Name:       Custom Divi Modules
 * Plugin URI:        https://github.com/twitchedy/haydn-custom-divi-modules
 * Description:       Provides a GUI for creating custom modules for Divi.
 * Version:           1.0.0
 * Author:            Haydn Smith
 * Author URI:        https://github.com/twitchedy
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       CustomDiviModules
 * Domain Path:       /languages
 */

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in lib/Activator.php
 */
\register_activation_hook( __FILE__, '\Haydn\CustomDiviModules\Activator::activate' );

/**
 * The code that runs during plugin deactivation.
 * This action is documented in lib/Deactivator.php
 */
\register_deactivation_hook( __FILE__, '\Haydn\CustomDiviModules\Deactivator::deactivate' );

/**
 * Begins execution of the plugin.
 *
 * @since    1.0.0
 */
\add_action( 'plugins_loaded', function () {
    $plugin = new \Haydn\CustomDiviModules\Plugin();
    $plugin->run();
} );
