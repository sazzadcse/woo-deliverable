<?php
/**
 * Plugin Name:       WooDeliverables
 * Plugin URI:        https://github.com/sazzadcse/woo-deliverable
 * Description:       WooDeliverable is one of the top wp plugin that helps you to give your customer the power of selecting order delivery date & time during the WooCommerce checkout.
 * Version:           1.0.1
 * Author:            Md. Sazzad Hossian
 * Author URI:        https://github.com/sazzadcse/woo-deliverable
 * License:           GPL-2.0+
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       woo-deliverables
 * Domain Path:       /languages
 */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}


define(  'WOODELIVERABLES_VERSION', '0.0.1' );
defined( 'WOODELIVERABLES_PATH' ) or define( 'WOODELIVERABLES_PATH', plugin_dir_path( __FILE__ ) );
defined( 'WOODELIVERABLES_URL' ) or define( 'WOODELIVERABLES_URL', plugin_dir_url( __FILE__ ) );
defined( 'WOODELIVERABLES_BASE_FILE' ) or define( 'WOODELIVERABLES_BASE_FILE', __FILE__ );
defined( 'WOODELIVERABLES_BASE_PATH' ) or define( 'WOODELIVERABLES_BASE_PATH', plugin_basename(__FILE__) );
defined( 'WOODELIVERABLES_IMG_DIR' ) or define( 'WOODELIVERABLES_IMG_DIR', plugin_dir_url( __FILE__ ) . 'assets/img/' );
defined( 'WOODELIVERABLES_CSS_DIR' ) or define( 'WOODELIVERABLES_CSS_DIR', plugin_dir_url( __FILE__ ) . 'assets/css/' );
defined( 'WOODELIVERABLES_JS_DIR' ) or define( 'WOODELIVERABLES_JS_DIR', plugin_dir_url( __FILE__ ) . 'assets/js/' );

// include utils
require_once WOODELIVERABLES_PATH . 'includes/WooDeliverablesUtils.php';
require_once WOODELIVERABLES_PATH . 'includes/WooDeliverablesDB.php';

//include admin classes
require_once WOODELIVERABLES_PATH . 'backend/class-woo-deliverables-admin-ajax.php';
require_once WOODELIVERABLES_PATH . 'backend/class-woo-deliverables-admin.php';

//include frontend classes
require_once WOODELIVERABLES_PATH . 'frontend/class-woo-deliverables-frontend-ajax.php';
require_once WOODELIVERABLES_PATH . 'frontend/class-woo-deliverables-frontend.php';