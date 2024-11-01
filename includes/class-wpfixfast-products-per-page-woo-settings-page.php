<?php
/**
 * The admin-specific functionality of the plugin.
 * Extends WooCommerce settings page for Products per Page tab and settings
 *
 * @link       https://wpfixfast.com
 * @since      1.0.0
 *
 * @package    Wpfixfast_Products_Per_Page
 * @subpackage Wpfixfast_Products_Per_Page/admin
 * @author     Wp Fix Fast <support@wpfixfast.com> 
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class WPFF_PPP_Woo_Settings_Page extends WC_Settings_Page 
{
	public function __construct() {
		$this->id    = 'wpfixfast-products-per-page';
		$this->label = __('Products per Page', 'wpfixfast-products-per-page');

		parent::__construct();
	}

	protected function get_settings_for_default_section() 
	{
		$settings = [
			[
				'type'  => 'title',
				'id'    => 'custom_ppp_fields',
				'title' => __('Products per Page', 'wpfixfast-products-per-page'),
				'desc'  => __('Set the default number of products per page displayed on WooCommerce Shop pages.', 'wpfixfast-products-per-page'),
			],
        [
          'type'     => 'number',
          'id'       => 'wpff_ppp_woo_products_per_page_items',
          'default'  => '30',
          'title'    => __('Default products per page', 'wpfixfast-products-per-page'),
          'desc_tip' => __('Number of products displayed per page in WooCommerce Shop pages (and product categories).', 'wpfixfast-products-per-page')
        ],
				[
					'type'     => 'checkbox',
					'id'       => 'wpff_ppp_woo_products_per_page_remove_data_on_uninstall',
					'default'  => '',
					'title'    => __('Remove plugin data when uninstalled', 'wpfixfast-products-per-page'),
					'desc'     => ''
				],
			['type'=>'sectionend','id'=>'custom_ppp_fields']
		];

		return apply_filters('woocommerce_userfields_settings', $settings);
	}

}

return new WPFF_PPP_Woo_Settings_Page();