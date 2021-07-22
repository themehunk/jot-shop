<?php
if ( ! defined( 'ABSPATH' ) ) exit; 
$wp_customize->add_setting('jot_shop_cat_sec_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_cat_sec_bg_clr', array(
        'label'      => __('BG Color', 'jot-shop' ),
        'section'    => 'jot-shop-cat-slider-color',
        'settings'   => 'jot_shop_cat_sec_bg_clr',
        
    ) ) 
 );  

$wp_customize->add_setting('jot_shop_cat_sec_hd_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_cat_sec_hd_clr', array(
        'label'      => __('Heading Color', 'jot-shop'),
        'section'    => 'jot-shop-cat-slider-color',
        'settings'   => 'jot_shop_cat_sec_hd_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_cat_sec_spcl_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_cat_sec_spcl_clr', array(
        'label'      => __('Special Color', 'jot-shop'),
        'section'    => 'jot-shop-cat-slider-color',
        'settings'   => 'jot_shop_cat_sec_spcl_clr',
        
    ) ) 
 );

$wp_customize->add_setting('jot_shop_cat_sec_title_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_cat_sec_title_clr', array(
        'label'      => __('Title Color', 'jot-shop'),
        'section'    => 'jot-shop-cat-slider-color',
        'settings'   => 'jot_shop_cat_sec_title_clr',
        
    ) ) 
 );