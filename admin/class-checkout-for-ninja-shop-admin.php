<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://dnyaneshmj.github.io/portfolio/
 * @since      1.0.0
 *
 * @package    Checkout_For_Ninja_Shop
 * @subpackage Checkout_For_Ninja_Shop/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Checkout_For_Ninja_Shop
 * @subpackage Checkout_For_Ninja_Shop/admin
 * @author     Dnyanesh Mahajan <dnyaneshmahajan12@gmail.com>
 */
class Checkout_For_Ninja_Shop_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/checkout-for-ninja-shop-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/checkout-for-ninja-shop-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function cns_add_setting() {
		
		add_option( 'cns_option_grp', 'This is my option value.');
   		register_setting( 'cns_option_grp', 'cns_message_option', '' );
   		register_setting( 'cns_option_grp', 'cns_link_option', '' );

		add_options_page( __( 'Checkout Settings', 'checkout-for-ninja-shop' ) , __( 'Checkout Settings', 'checkout-for-ninja-shop' ), 'manage_options', 'checkout-setting.php', array( $this,'cns_settings_page_callback') );

	}

	function cns_settings_page_callback(){ ?>
		
		<div id="wpbody" role="main">
			<div id="wpbody-content">	
				<div class="wrap">
					<h1><?php  _e( 'Checkout Settings', 'checkout-for-ninja-shop' ) ?></h1>
					<h2><?php _e( 'Ninja Shop Checkout Setting', 'checkout-for-ninja-shop' ) ?></h2>
					<hr>
					<form method="post" action="options.php">
						<?php settings_fields( 'cns_option_grp' ); ?>
						<table class="form-table tools-privacy-policy-page" role="presentation">
							<tbody>
							 	<tr>
									<th scope="row">
										<label for=""><?php _e('Terms and Conditions Message','checkout-for-ninja-shop')?></label>
									</th>
									<td>
										<input type="text" id="cns_message_option" name="cns_message_option" value="<?php echo get_option('cns_message_option'); ?>" />

									</td>
								</tr>
								<tr>
									<th scope="row">
										<label for=""><?php _e('Link for Terms and Conditions','checkout-for-ninja-shop')?> </label>
									</th>
									<td>
										<input type="text" id="cns_link_option" name="cns_link_option" value="<?php echo get_option('cns_link_option'); ?>" />

									</td>
								</tr>
							</tbody>
						</table>
						<?php  submit_button(); ?>
					</form>
				</div>
		 </div>
	<?php 
	}

}
