<?php
if ( ! defined( 'ABSPATH' ) ) exit;
    $wpc_delivery = array(
		'k1' => 'Departure',	
		'k2' => 'Arrival',
		'k3' => '',
		'k4' => '',
		'k5' => 'Weight, kg',
		'k6' => 'Volume',
		'k7' => '18',
		'k8' => '#ff0000',
		'k9' => 'Max Weight - 20 000 kg',
		'k10' => 'Calculate',
		'k11' => 'Order',
		'k12' => '$',
		'k13' => '230',
		);
	add_option('wpc_delivery', $wpc_delivery);
	
	$delivery_weight = array(
		'0' => '20000'
		);
	add_option('delivery_weight', $delivery_weight);
	
	$delivery_price = array(
		'0' => '10'
		);
	add_option('delivery_price', $delivery_price);