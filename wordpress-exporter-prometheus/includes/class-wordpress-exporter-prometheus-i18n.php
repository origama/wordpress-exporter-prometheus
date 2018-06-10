<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/origama
 * @since      1.0.0
 *
 * @package    Wordpress_Exporter_Prometheus
 * @subpackage Wordpress_Exporter_Prometheus/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wordpress_Exporter_Prometheus
 * @subpackage Wordpress_Exporter_Prometheus/includes
 * @author     Giuseppe Virzì <origama0@gmail.com>
 */
class Wordpress_Exporter_Prometheus_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wordpress-exporter-prometheus',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
