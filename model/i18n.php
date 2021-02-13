<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    WordPress_Plugin_Skeleton
 * @subpackage WordPress_Plugin_Skeleton/model
 */

namespace WordPressPluginSkeleton\Model;

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    WordPress_Plugin_Skeleton
 * @subpackage WordPress_Plugin_Skeleton/model
 * @author     Your Name <email@example.com>
 */
class I18n {
	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    0.1
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			WORDPRESS_PLUGIN_SKELETON_TEXT_DOMAIN,
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/language/'
		);

	}


}
