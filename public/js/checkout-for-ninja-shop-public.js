(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	 	jQuery(document ).on('click', '#checkTerms', function() {

            var checked = jQuery(this).is(':checked');
            if (checked) {
            	jQuery('#ninja-shop-cart-actions').find('.ninja-shop-purchase-button').prop('disabled', false);
                jQuery('.ninja-shop-purchase-button').removeAttr('style');

            } else {
                jQuery('.ninja-shop-purchase-button').attr('disabled', 'disabled');
                jQuery('.ninja-shop-purchase-button').css( 
                	{
                		'background-color':'#c1c1c1', 
                		'color':'#efefef',
                		'cursor':'not-allowed'}
                	
                	);
            }
        });

})( jQuery );