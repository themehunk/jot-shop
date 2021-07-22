<?php
if ( ! defined( 'ABSPATH' ) ) exit; 
$wp_customize->add_setting('jot_shop_highlight_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_highlight_bg_clr', array(
        'label'      => __('BG Color', 'jot-shop' ),
        'section'    => 'jot-shop-highlight-color',
        'settings'   => 'jot_shop_highlight_bg_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_highlight_bxbg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_highlight_bxbg_clr', array(
        'label'      => __('Box BG Color', 'jot-shop' ),
        'section'    => 'jot-shop-highlight-color',
        'settings'   => 'jot_shop_highlight_bxbg_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_highlight_icon_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_highlight_icon_clr', array(
        'label'      => __('Icon Color', 'jot-shop'),
        'section'    => 'jot-shop-highlight-color',
        'settings'   => 'jot_shop_highlight_icon_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_highlight_tle_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_highlight_tle_clr', array(
        'label'      => __('Title Color', 'jot-shop'),
        'section'    => 'jot-shop-highlight-color',
        'settings'   => 'jot_shop_highlight_tle_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_highlight_txt_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_highlight_txt_clr', array(
        'label'      => __('Sub Title Color', 'jot-shop'),
        'section'    => 'jot-shop-highlight-color',
        'settings'   => 'jot_shop_highlight_txt_clr',
        
    ) ) 
 );

//Banner
$wp_customize->add_setting('jot_shop_banner_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_banner_bg_clr', array(
        'label'      => __('BG Color', 'jot-shop' ),
        'section'    => 'jot-shop-banner-color',
        'settings'   => 'jot_shop_banner_bg_clr',
        
    ) ) 
 );

//Brand
$wp_customize->add_setting('jot_shop_brand_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_brand_bg_clr', array(
        'label'      => __('BG Color', 'jot-shop' ),
        'section'    => 'jot-shop-brand-color',
        'settings'   => 'jot_shop_brand_bg_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_brand_bxbg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_brand_bxbg_clr', array(
        'label'      => __('Box BG Color', 'jot-shop' ),
        'section'    => 'jot-shop-brand-color',
        'settings'   => 'jot_shop_brand_bxbg_clr',
        
    ) ) 
 );