<?php

if ( is_woocommerce_activated() ) {

	// BroadCroump
	//remove_action( 'woocommerce_before_main_content',	'woocommerce_output_content_wrapper', 	10);
	remove_action( 'woocommerce_before_main_content',	'woocommerce_breadcrumb', 				20);
	remove_action('breadcrumb',							'breadcrumbs',							30);
	add_action( 'woocommerce_before_main_content',		'woo_breadcrumbs', 						20);
	add_action('breadcrumb',							'woo_breadcrumbs',						30);
	
	// Product Shorting
	//remove_action( 'woocommerce_before_shop_loop',		'woocommerce_result_count', 				20);
	//remove_action( 'woocommerce_before_shop_loop',		'woocommerce_catalog_ordering', 			30);
	//add_action('woo_start',								'woocommerce_result_count',					10);
	//add_action('woo_start',								'woocommerce_catalog_ordering',				20);
	
	
	//add_action('content',								'woo_product',								403);
	add_action('header',								'header_cart',								325);
	//add_action('single_content',						'woo_single_product',						402);
	
	// Extra Remover
	//remove_action( 'woocommerce_after_shop_loop',		'woocommerce_pagination', 						10);
	//remove_action( 'woocommerce_after_main_content',	'woocommerce_output_content_wrapper_end', 		10);
	//remove_action( 'woocommerce_sidebar',				'woocommerce_get_sidebar', 						10);
	
}
