<?php
if ( ! defined( 'ABSPATH' ) ) exit;

	function add_global_wpcalc_delivery_options() {
		add_options_page('Wpcalc Delivery', 'Wpcalc Delivery', 'manage_options', 'wpcalc-delivery','global_wpcalc_delivery_options');
	}
	
	function global_wpcalc_delivery_options() {
	
		include_once( 'partials/display.php' );
		
	
	}
	
	

	add_action('admin_menu', 'add_global_wpcalc_delivery_options');


	
