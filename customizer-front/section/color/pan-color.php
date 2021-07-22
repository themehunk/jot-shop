<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$wp_customize->add_setting('jot_shop_pan_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_pan_bg_clr', array(
        'label'      => __('BG Color', 'jot-shop' ),
        'section'    => 'jot-shop-pan-color',
        'settings'   => 'jot_shop_pan_bg_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_pan_title_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_pan_title_clr', array(
        'label'      => __('Title Color', 'jot-shop'),
        'section'    => 'jot-shop-pan-color',
        'settings'   => 'jot_shop_pan_title_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_pan_txt_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_pan_txt_clr', array(
        'label'      => __('Text Color', 'jot-shop'),
        'section'    => 'jot-shop-pan-color',
        'settings'   => 'jot_shop_pan_txt_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_pan_link_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_pan_link_clr', array(
        'label'      => __('Link Color', 'jot-shop'),
        'section'    => 'jot-shop-pan-color',
        'settings'   => 'jot_shop_pan_link_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_pan_link_hvr_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_pan_link_hvr_clr', array(
        'label'      => __('Link Hover Color', 'jot-shop'),
        'section'    => 'jot-shop-pan-color',
        'settings'   => 'jot_shop_pan_link_hvr_clr',
        
    ) ) 
 );