<?php
if ( ! defined( 'ABSPATH' ) ) exit;
if ( ! class_exists( 'WooCommerce' ) ){
    return;
}
/************************/
//Shop product pagination
/************************/
   $wp_customize->add_setting('jot_shop_pagination', array(
        'default'        => 'num',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_select',
    ));
    $wp_customize->add_control('jot_shop_pagination', array(
        'settings' => 'jot_shop_pagination',
        'label'   => __('Shop Page Pagination','jot-shop'),
        'section' => 'jot-shop-woo-shop-page',
        'type'    => 'select',
        'choices' => array(
        'num'     => __('Numbered','jot-shop'),
        'click'   => __('Load More','jot-shop'), 
        'scroll'  => __('Infinite Scroll','jot-shop'), 
        )
    ));