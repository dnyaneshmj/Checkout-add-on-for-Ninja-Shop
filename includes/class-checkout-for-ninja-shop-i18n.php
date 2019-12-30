<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://dnyaneshmj.github.io/portfolio/
 * @since      1.0.0
 *
 * @package    Checkout_For_Ninja_Shop
 * @subpackage Checkout_For_Ninja_Shop/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Checkout_For_Ninja_Shop
 * @subpackage Checkout_For_Ninja_Shop/includes
 * @author     Dnyanesh Mahajan <dnyaneshmahajan12@gmail.com>
 */
class Checkout_For_Ninja_Shop_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'checkout-for-ninja-shop',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
