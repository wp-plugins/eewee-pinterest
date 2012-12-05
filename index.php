<?php 
/*
Plugin Name: Eewee Pinterest
Plugin URI: http://www.eewee.fr/
Description: Pinterest. Display bloc pinterest on your wordpress website.
Version: 1.3
Author: Michael DUMONTET
Author URI: http://www.eewee.fr/wordpress/
License: copyright eewee
*/

/**
 * Define
 * @since 1.0.0
 */
define( 'EEWEE_PINTEREST_VERSION', '1.3' );
define( 'EEWEE_PINTEREST_NAME', 'eeweePinterest' );
define( 'EEWEE_PINTEREST_PLUGIN_DIR', WP_PLUGIN_DIR . '/' . dirname( plugin_basename( __FILE__ ) ) );
define( 'EEWEE_PINTEREST_PLUGIN_URL', WP_PLUGIN_URL . '/' . dirname( plugin_basename( __FILE__ ) ) );

// Gestion lang (dossier lang dans le plugin, contenant les .mo)
load_plugin_textdomain("eewee-pinterest", false, dirname( plugin_basename( __FILE__ ) ) . '/lang');

/**
 * Add CSS
 * @since 1.0.0
 */
function addCssPinterest(){
//	wp_enqueue_style( 'cssPinterest-style', '/wp-content/plugins/eewee_pinterest/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'addCssPinterest' );

/**
 * Add JS
 * @since 1.0.0
 */
function addJsPinterest(){
	wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
    wp_enqueue_script( 'jquery' );
    
	wp_enqueue_script( 'jsPinterest', 'http://assets.pinterest.com/js/pinit.js' );
}
add_action( 'wp_enqueue_scripts', 'addJsPinterest' );


/**
 * Add Files
 * @since 1.0.0
 */
require_once( EEWEE_PINTEREST_PLUGIN_DIR . '/forms/addPinterest.php' );
require_once( EEWEE_PINTEREST_PLUGIN_DIR . '/controllers/EeweePinterest.php' );


/**
 * Instantiate Classe
 * @since 1.0.0
 */
$eewee_admin = new EeweePinterest();


/**
 * Wordpress Activate/Deactivate
 *
 * @uses register_activation_hook()
 * @uses register_deactivation_hook()
 *
 * @since 1.0.0
 */
register_activation_hook( __FILE__, array( $eewee_admin, 'eewee_activate' ) );
register_deactivation_hook( __FILE__, array( $eewee_admin, 'eewee_deactivate' ) );


/**
 * Required action filters
 *
 * @uses add_action()
 *
 * @since 1.0.0
 */
add_action( 'admin_menu', array( $eewee_admin, 'eewee_adminMenu' ) );
?>