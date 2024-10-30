<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.ruicruz.pt
 * @since             1.0
 * @package           Ruicruz_Login_Alert
 *
 * @wordpress-plugin
 * Plugin Name:       Login alert by e-mail
 * Plugin URI:        https://www.ruicruz.pt/login-alert
 * Description:       This plugin sends an alert to the main website e-mail when a user login successfully or unsusefsefully to your website.
 * Version:           1.0
 * Author:            Rui Cruz
 * Author URI:        https://www.ruicruz.pt
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ruicruz-login-alert
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'RUICRUZ_LOGIN_ALERT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ruicruz-login-alert-activator.php
 */
function activate_ruicruz_login_alert() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ruicruz-login-alert-activator.php';
	Ruicruz_Login_Alert_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ruicruz-login-alert-deactivator.php
 */
function deactivate_ruicruz_login_alert() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ruicruz-login-alert-deactivator.php';
	Ruicruz_Login_Alert_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ruicruz_login_alert' );
register_deactivation_hook( __FILE__, 'deactivate_ruicruz_login_alert' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ruicruz-login-alert.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0
 */
function run_ruicruz_login_alert() {

	$plugin = new Ruicruz_Login_Alert();
	$plugin->run();

}
run_ruicruz_login_alert();
