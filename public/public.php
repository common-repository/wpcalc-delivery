<?php
if ( ! defined( 'ABSPATH' ) ) exit;
	function shortcode_wpcalc_delivery() {
	    echo '<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>';
		wp_enqueue_script( 'wpcalc-delivery-calc', plugins_url( 'js/calc.js', __FILE__ ));
		wp_localize_script( 'wpcalc-delivery-calc', 'wpcal_delivery', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );		
		wp_enqueue_style ( 'wpcalc-delivery-style', plugins_url( 'css/style.css', __FILE__ ));		
		include_once( 'partials/page-calc.php' );		
		}
	
	add_shortcode( 'wpcdelivery', 'shortcode_wpcalc_delivery' );
