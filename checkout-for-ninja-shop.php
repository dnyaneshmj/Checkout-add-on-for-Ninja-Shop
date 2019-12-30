<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://dnyaneshmj.github.io/portfolio/
 * @since             1.0.0
 * @package           Checkout_For_Ninja_Shop
 *
 * @wordpress-plugin
 * Plugin Name:       Checkout for Ninja Shop
 * Plugin URI:        https://dnyaneshmj.github.io/portfolio/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Dnyanesh Mahajan
 * Author URI:        https://dnyaneshmj.github.io/portfolio/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       checkout-for-ninja-shop
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
define( 'CHECKOUT_FOR_NINJA_SHOP_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-checkout-for-ninja-shop-activator.php
 */
function activate_checkout_for_ninja_shop() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-checkout-for-ninja-shop-activator.php';
	Checkout_For_Ninja_Shop_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-checkout-for-ninja-shop-deactivator.php
 */
function deactivate_checkout_for_ninja_shop() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-checkout-for-ninja-shop-deactivator.php';
	Checkout_For_Ninja_Shop_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_checkout_for_ninja_shop' );
register_deactivation_hook( __FILE__, 'deactivate_checkout_for_ninja_shop' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-checkout-for-ninja-shop.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_checkout_for_ninja_shop() {

	$plugin = new Checkout_For_Ninja_Shop();
	$plugin->run();

}
run_checkout_for_ninja_shop();
