<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.ruicruz.pt
 * @since      1.0
 *
 * @package    Ruicruz_Login_Alert
 * @subpackage Ruicruz_Login_Alert/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0
 * @package    Ruicruz_Login_Alert
 * @subpackage Ruicruz_Login_Alert/includes
 * @author     Rui Cruz <mail@ruicruz.pt>
 */
class Ruicruz_Login_Alert_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ruicruz-login-alert',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
