<?php 
//Above footer
// BG color
 $wp_customize->add_setting('jot_shop_above_ftr_bg_clr', array(
        'default'           => '#fff',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_above_ftr_bg_clr', array(
        'label'      => __('Background Color', 'jot-shop'),
        'section'    => 'jot-shop-abv-footer-clr',
        'settings'   => 'jot_shop_above_ftr_bg_clr',
        'priority'   => 1,
    ) ) 
 );  

$wp_customize->add_setting('jot_shop_above_ftr_txt_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_above_ftr_txt_clr', array(
        'label'      => __('Text Color', 'jot-shop' ),
        'section'    => 'jot-shop-abv-footer-clr',
        'settings'   => 'jot_shop_above_ftr_txt_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_above_ftr_link_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_above_ftr_link_clr', array(
        'label'      => __('Link Color', 'jot-shop' ),
        'section'    => 'jot-shop-abv-footer-clr',
        'settings'   => 'jot_shop_above_ftr_link_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_above_ftr_link_hvr_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_above_ftr_link_hvr_clr', array(
        'label'      => __('Link Hover Color', 'jot-shop' ),
        'section'    => 'jot-shop-abv-footer-clr',
        'settings'   => 'jot_shop_above_ftr_link_hvr_clr',
        
    ) ) 
 );
//Widget footer
//BG color
 $wp_customize->add_setting('jot_shop_wgt_ftr_bg_clr', array(
        'default'           => '#fff',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_wgt_ftr_bg_clr', array(
        'label'      => __('Background Color', 'jot-shop'),
        'section'    => 'jot-shop-footer-widget-clr',
        'settings'   => 'jot_shop_wgt_ftr_bg_clr',
        'priority'   => 1,
    ) ) 
 );  
$wp_customize->add_setting('jot_shop_wgt_ftr_tle_hvr_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_wgt_ftr_tle_hvr_clr', array(
        'label'      => __('Widget Title Color', 'jot-shop' ),
        'section'    => 'jot-shop-footer-widget-clr',
        'settings'   => 'jot_shop_wgt_ftr_tle_hvr_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_wgt_ftr_txt_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_wgt_ftr_txt_clr', array(
        'label'      => __('Text Color', 'jot-shop' ),
        'section'    => 'jot-shop-footer-widget-clr',
        'settings'   => 'jot_shop_wgt_ftr_txt_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_wgt_ftr_link_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_wgt_ftr_link_clr', array(
        'label'      => __('Link Color', 'jot-shop' ),
        'section'    => 'jot-shop-footer-widget-clr',
        'settings'   => 'jot_shop_wgt_ftr_link_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_wgt_ftr_link_hvr_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_wgt_ftr_link_hvr_clr', array(
        'label'      => __('Link Hover Color', 'jot-shop' ),
        'section'    => 'jot-shop-footer-widget-clr',
        'settings'   => 'jot_shop_wgt_ftr_link_hvr_clr',
        
    ) ) 
 );
//Below footer
//BG color
 $wp_customize->add_setting('jot_shop_below_ftr_bg_clr', array(
        'default'           => '#fff',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_below_ftr_bg_clr', array(
        'label'      => __('Background Color', 'jot-shop'),
        'section'    => 'jot-shop-btm-footer-clr',
        'settings'   => 'jot_shop_below_ftr_bg_clr',
        'priority'   => 1,
    ) ) 
 );  

$wp_customize->add_setting('jot_shop_below_ftr_txt_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_below_ftr_txt_clr', array(
        'label'      => __('Text Color', 'jot-shop' ),
        'section'    => 'jot-shop-btm-footer-clr',
        'settings'   => 'jot_shop_below_ftr_txt_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_below_ftr_link_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_below_ftr_link_clr', array(
        'label'      => __('Link Color', 'jot-shop' ),
        'section'    => 'jot-shop-btm-footer-clr',
        'settings'   => 'jot_shop_below_ftr_link_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_below_ftr_link_hvr_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_below_ftr_link_hvr_clr', array(
        'label'      => __('Link Hover Color', 'jot-shop' ),
        'section'    => 'jot-shop-btm-footer-clr',
        'settings'   => 'jot_shop_below_ftr_link_hvr_clr',
        
    ) ) 
 );