<?php
if ( ! defined( 'ABSPATH' ) ) exit; 
$wp_customize->add_setting('jot_shop_ribbon_ovrly_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_ribbon_ovrly_clr', array(
        'label'      => __('Overlay Color', 'jot-shop' ),
        'section'    => 'jot-shop-ribbon-color',
        'settings'   => 'jot_shop_ribbon_ovrly_clr',
        
    ) ) 
 ); 

$wp_customize->add_setting('jot_shop_ribbon_hd_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_ribbon_hd_clr', array(
        'label'      => __('Heading Color', 'jot-shop'),
        'section'    => 'jot-shop-ribbon-color',
        'settings'   => 'jot_shop_ribbon_hd_clr',
        
    ) ) 
 );

$wp_customize->add_setting('jot_shop_ribbon_btn_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_ribbon_btn_bg_clr', array(
        'label'      => __('Button BG Color', 'jot-shop' ),
        'section'    => 'jot-shop-ribbon-color',
        'settings'   => 'jot_shop_ribbon_btn_bg_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_ribbon_btn_txt_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_ribbon_btn_txt_clr', array(
        'label'      => __('Button Text Color', 'jot-shop' ),
        'section'    => 'jot-shop-ribbon-color',
        'settings'   => 'jot_shop_ribbon_btn_txt_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_ribbon_btn_hvr_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_ribbon_btn_hvr_bg_clr', array(
        'label'      => __('Button BG Hover Color', 'jot-shop' ),
        'section'    => 'jot-shop-ribbon-color',
        'settings'   => 'jot_shop_ribbon_btn_hvr_bg_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_ribbon_btn_txt_hvr_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_ribbon_btn_txt_hvr_clr', array(
        'label'      => __('Button Text Hover Color', 'jot-shop' ),
        'section'    => 'jot-shop-ribbon-color',
        'settings'   => 'jot_shop_ribbon_btn_txt_hvr_clr',
        
    ) ) 
 );