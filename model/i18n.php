<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://gitlab.com/comtalk-denmark/wp-plugin-product-order-form
 * @since      0.1
 *
 * @package    Comtalk_Product_Order_Form
 * @subpackage Comtalk_Product_Order_Form/inlcudes
 */

namespace WordPressPluginSkeleton\Model;

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Plugin_Name
 * @subpackage Plugin_Name/includes
 * @author     Your Name <email@example.com>
 */
class I18n
{
  /**
   * Load the plugin text domain for translation.
   *
   * @since    0.1
   */
  public function load_plugin_textdomain()
  {

    load_plugin_textdomain(
        COMTALK_PRODUCT_ORDER_FORM_TEXT_DOMAIN,
        false,
        dirname(dirname(plugin_basename(__FILE__))) . '/language/'
    );

  }


}
