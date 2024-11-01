<?php

/**
 * Fired when the plugin is uninstalled.
 *
 * @link       https://wpfixfast.com
 * @since      1.0.0
 *
 * @package    Wpfixfast_Products_Per_Page
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

if (get_option('wpff_ppp_woo_products_per_page_remove_data_on_uninstall')) {
  delete_option('wpff_ppp_woo_products_per_page_items');
  delete_option('wpff_ppp_woo_products_per_page_remove_data_on_uninstall');
}