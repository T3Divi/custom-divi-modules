<?php

/**
 * The dashboard-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    PluginName
 * @subpackage PluginName/admin
 */

namespace Haydn\CustomDiviModules;

/**
 * The dashboard-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    PluginName
 * @subpackage PluginName/admin
 * @author     Your Name <email@example.com>
 */
class Admin {

	/**
	 * The plugin's instance.
	 *
	 * @since  1.0.0
	 * @access private
	 * @var    Plugin $plugin This plugin's instance.
	 */
	private $plugin;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since 1.0.0
	 *
	 * @param Plugin $plugin This plugin's instance.
	 */
	public function __construct( Plugin $plugin ) {
		$this->plugin = $plugin;
	}

	/**
	 * Register the stylesheets for the dashboard if they are needed on
	 * the page.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {
		$screen = \get_current_screen();

		if ($screen->id === 'toplevel_page_haydn_divi_modules' ||
			$screen->id === 'divi-modules_page_haydn_divi_modules_new') {
			\wp_enqueue_style(
				$this->plugin->get_name(),
				\plugin_dir_url( dirname( __FILE__ ) ) . 'dist/styles/adminstyles.css',
				array(),
				$this->plugin->get_version(),
				'all' );

			\wp_enqueue_style(
				'vuetify',
				\plugin_dir_url( dirname( __FILE__ ) ) . 'dist/styles/vuetify.css',
				array(),
				$this->plugin->get_version(),
				'all' );
		}
	}

	/**
	 * Register the JavaScript for the plugin when we are on the correct pages.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
		$screen = \get_current_screen();

		if ($screen->id === 'toplevel_page_haydn_divi_modules' ||
			$screen->id === 'divi-modules_page_haydn_divi_modules_new') {
			\wp_enqueue_script(
				$this->plugin->get_name(),
				\plugin_dir_url( dirname( __FILE__ ) ) . 'dist/scripts/admin.js',
				array( 'jquery' ),
				$this->plugin->get_version(),
				false );

			\wp_enqueue_script(
				$this->plugin->get_name() . '-styles',
				\plugin_dir_url( dirname( __FILE__ ) ) . 'dist/scripts/styles.js',
				array( 'jquery' ),
				$this->plugin->get_version(),
				false );
		}
	}

	/**
	 * Adds the CSS and icons required for Vuetify.
	 */
	public function add_to_head()
	{
		?>
			<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
		<?php
	}

}
