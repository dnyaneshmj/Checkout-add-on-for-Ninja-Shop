<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://dnyaneshmj.github.io/portfolio/
 * @since      1.0.0
 *
 * @package    Checkout_For_Ninja_Shop
 * @subpackage Checkout_For_Ninja_Shop/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Checkout_For_Ninja_Shop
 * @subpackage Checkout_For_Ninja_Shop/public
 * @author     Dnyanesh Mahajan <dnyaneshmahajan12@gmail.com>
 */
class Checkout_For_Ninja_Shop_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Checkout_For_Ninja_Shop_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Checkout_For_Ninja_Shop_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/checkout-for-ninja-shop-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Checkout_For_Ninja_Shop_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Checkout_For_Ninja_Shop_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/checkout-for-ninja-shop-public.js', array( 'jquery' ), $this->version, true );

	}
	
	public function cns_checkout_message(){

		$string = __( 'I Agree', 'checkout-for-ninja-shop' );
		$msg = (get_option('cns_message_option') =='')? __( 'Terms & Conditions', 'checkout-for-ninja-shop' ): get_option('cns_message_option'); 
		$link = $msg;
		if (get_option('cns_link_option') !='') {
			$link = " <a href='".get_option('cns_link_option')."' target='_blank' >".$msg." </a>";	
		}
		echo "<input type='checkbox' id='checkTerms' checked> <label for='checkTerms'> "; 
		echo $string." ".$link;
		echo "</label>";

	}

}
