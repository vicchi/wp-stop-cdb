<?php
/*
Plugin Name: WP Stop CDB
Plugin URI: http://www.vicchi.org/codeage/wp-stop-cdb/
Description: Add a ribbon to the top right corner of your WordPress site to protest against the UK's Draft Communications Data bill.
Version: 1.0
Author: Gary Gale
Author URI: http://www.garygale.com/
License: GPLv2
Text Domain: wp-stop-cdb
*/

define ('WPSTOPCDB_PATH', plugin_dir_path (__FILE__));

require_once (WPSTOPCDB_PATH . '/wp-plugin-base/wp-plugin-base.php');

class WP_StopCDB extends WP_PluginBase {
	
	static $instance;
	
	/**
	 * Class constructor
	 */
	
	function __construct () {
		self::$instance = $this;

		define ('WPSTOPCDB_PLUGIN_URL', plugin_dir_url (__FILE__));
		define ('WPSTOPCDB_PLUGIN_PATH', plugin_dir_path (__FILE__));
		define ('WPSTOPCDB_RIBBON_URL', WPSTOPCDB_PLUGIN_URL . '/images/ribbon.png');
		define ('WPSTOPCDB_LINK_URL', 'https://secure.38degrees.org.uk/page/s/stop-government-snooping');
		
		$this->hook ('plugins_loaded');
	}
	
	/**
	 * "plugins_loaded" action hook; called after all active plugins and pluggable functions
	 * are loaded.
	 *
	 * Adds front-end display actions and admin actions.
	 */
	
	function plugins_loaded () {
		register_activation_hook (__FILE__, array ($this, 'add_settings'));
		
		$this->hook ('wp_enqueue_scripts', 'style');
		$this->hook ('wp_footer', 'add_ribbon');
	}
	
	/**
	 * "wp_enqueue_scripts" action hook; called to load the plugin's CSS.
	 */

	function style () {
		wp_enqueue_style ('wp-stop-cdb', WPSTOPCDB_PLUGIN_URL . 'css/wp-stop-cdb.css');	
	}
	
	/**
	 * "wp_footer" action hook; called to display the ribbon image.
	 */
	
	function add_ribbon () {
		$content = array ();
		
		$content[] = sprintf ('<a href="%s" target="_blank" class="wp-stop-cdb">', WPSTOPCDB_LINK_URL);
		$content[] = sprintf ('<img src="%s" alt="Stop the UK CDB" class="wp-stop-cdb-ribbon" />',
			WPSTOPCDB_RIBBON_URL);
		$content[] = '</a>';
		
		echo implode ('', $content);
	}
	
}	// end-class WP_StopCDB

$__wp_stop_cdb_instance = new WP_StopCDB;

?>