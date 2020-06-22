<?php
/**
 * Plugin Name: PLUGIN NAME
 * Description: PLUGIN DESCRIPTION
 * Author: AUTHOR NAME
 * Author URI: AUTHOR URI
 *
 * @package [PACKAGE NAME]
 */
// TODO: Update plugin namespace (and in ./composer.json)
namespace NSM\Plugin;

include_once( dirname( __FILE__ ) . '/vendor/autoload.php' );

if ( ! function_exists( 'nsm_init' ) ) {
	function nsm_init() {
		define( 'NSM_DIR_PATH', plugin_dir_path( __FILE__ ) );
		define( 'NSM_DIR_URL', plugin_dir_url( __FILE__ ) );
		add_action( 'plugins_loaded', array( new Core(), 'init' ) );
	}
	// Load plugin.
	nsm_init();
}
