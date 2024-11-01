<?php
/**
 * @link              http://wpcalc.com/
 * @since             1.2
 * @package           Wpcalc_Delivery
 *
 * @wordpress-plugin
 * Plugin Name:       Wpcalc Delivery
 * Plugin URI:        http://wpcalc.com/en/plugin-delivery/
 * Description:       Calculator for the cost of shipping goods by road from one city to another
 * Version:           1.2
 * Author:            Dimy4 Wpcalc
 * Author URI:        http://wpcalc.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpcalc-delivery
  */

if ( ! defined( 'WPINC' ) ) {
	die;
}

load_plugin_textdomain('wpcalc-delivery', false, dirname(plugin_basename(__FILE__)) . '/languages/');
	
function activate_wpcalc_delivery() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/activator.php';
	}

function deactivate_wpcalc_delivery() {	
	require_once plugin_dir_path( __FILE__ ) . 'includes/deactivator.php';
}

register_activation_hook( __FILE__, 'activate_wpcalc_delivery' );

register_deactivation_hook( __FILE__, 'deactivate_wpcalc_delivery' );

require_once plugin_dir_path( __FILE__ ) . 'admin/admin.php';

require_once plugin_dir_path( __FILE__ ) . 'public/public.php';

require plugin_dir_path( __FILE__ ) . 'includes/wpcalc.php';

 







