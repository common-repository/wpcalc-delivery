<?php
if ( ! defined( 'ABSPATH' ) ) exit;
if( defined('DOING_AJAX') && DOING_AJAX ){
	add_action( 'wp_ajax_send_wpcalc_delivery', 'send_wpcalc_delivery' );
	add_action( 'wp_ajax_nopriv_send_wpcalc_delivery', 'send_wpcalc_delivery' );
	}
function send_wpcalc_delivery() {
	global $wpdb; 
	$way= sanitize_text_field($_POST['way']);
	$ves= sanitize_text_field($_POST['ves']);
	$ob= sanitize_text_field($_POST['ob']);
		
	$options = get_option('wpc_delivery');
	$options_weight = get_option('delivery_weight');
	$options_price = get_option('delivery_price');
	
	$vesob = $ob * $options[k13];
	
	if ($vesob > $ves) {
	    $weight = $vesob;
	}
	else {
	     $weight = $ves;
	}
	$km = $way/1000;	
	$cnt = count($options_weight);	
	$x = 0;
	while ($x<$cnt) {
	    if ($options_weight[$x]>=$weight){
	        $cost = $km*$options_price[$x];
	        break;
	        } 
        else {
            $cost = $options[k9];
            }
        $x++;
    }
	
	
	if (is_numeric($cost)) {
	    $print_cost = number_format ( $cost , $decimals = 0 , $dec_point = '.' , $thousands_sep = ' ' );
	    print '<span style="color:'.$options[k8].';font-size:'.$options[k7].'px;">'.$print_cost.'</span> '  . $options[k12];
	}
	else {
	    $print_cost = $cost;
	    print '<span style="color:'.$options[k8].';font-size:'.$options[k7].'px;">'.$print_cost.'</span> ';
	}
			
	exit();
	}
?>