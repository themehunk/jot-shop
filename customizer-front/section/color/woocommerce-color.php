<?php
// product style
$wp_customize->add_setting('jot_shop_product_title_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_product_title_clr', array(
        'label'      => __('Product Title', 'jot-shop' ),
        'section'    => 'jot-shop-woo-prdct-color',
        'settings'   => 'jot_shop_product_title_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_product_price_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_product_price_clr', array(
        'label'      => __('Price', 'jot-shop' ),
        'section'    => 'jot-shop-woo-prdct-color',
        'settings'   => 'jot_shop_product_price_clr',
        
    ) ) 
 );

// icon
$wp_customize->add_setting('jot_shop_product_icon_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_product_icon_bg_clr', array(
        'label'      => __('Icon Background', 'jot-shop' ),
        'section'    => 'jot-shop-woo-prdct-color',
        'settings'   => 'jot_shop_product_icon_bg_clr',
        
    ) ) 
 );  
$wp_customize->add_setting('jot_shop_product_icon_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_product_icon_clr', array(
        'label'      => __('Icon Color', 'jot-shop' ),
        'section'    => 'jot-shop-woo-prdct-color',
        'settings'   => 'jot_shop_product_icon_clr',
        
    ) ) 
 );

// sale
$wp_customize->add_setting('jot_shop_product_sale_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_product_sale_bg_clr', array(
        'label'      => __('Sale Background', 'jot-shop' ),
        'section'    => 'jot-shop-woo-prdct-color',
        'settings'   => 'jot_shop_product_sale_bg_clr',
        
    ) ) 
 );  
$wp_customize->add_setting('jot_shop_product_sale_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_product_sale_clr', array(
        'label'      => __('Sale Color', 'jot-shop'),
        'section'    => 'jot-shop-woo-prdct-color',
        'settings'   => 'jot_shop_product_sale_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_product_txt_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_product_txt_clr', array(
        'label'      => __('Text Color', 'jot-shop'),
        'section'    => 'jot-shop-woo-prdct-color',
        'settings'   => 'jot_shop_product_txt_clr',
        
    ) ) 
 );

//shopping cart
$wp_customize->add_setting('jot_shop_shp_crt_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_shp_crt_bg_clr', array(
        'label'      => __('Background', 'jot-shop' ),
        'section'    => 'jot-shop-woo-cart-color',
        'settings'   => 'jot_shop_shp_crt_bg_clr',
        
    ) ) 
 );  

$wp_customize->add_setting('jot_shop_shp_crt_tle_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_shp_crt_tle_clr', array(
        'label'      => __('Title Color', 'jot-shop' ),
        'section'    => 'jot-shop-woo-cart-color',
        'settings'   => 'jot_shop_shp_crt_tle_clr',
        
    ) ) 
 );


$wp_customize->add_setting('jot_shop_shp_crt_lnk_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_shp_crt_lnk_clr', array(
        'label'      => __('Link Color', 'jot-shop' ),
        'section'    => 'jot-shop-woo-cart-color',
        'settings'   => 'jot_shop_shp_crt_lnk_clr',
        
    ) ) 
 );

$wp_customize->add_setting('jot_shop_shp_crt_txt_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_shp_crt_txt_clr', array(
        'label'      => __('Content Color', 'jot-shop' ),
        'section'    => 'jot-shop-woo-cart-color',
        'settings'   => 'jot_shop_shp_crt_txt_clr',
        
    ) ) 
 );

$wp_customize->add_setting('jot_shop_shp_crt_btn_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_shp_crt_btn_bg_clr', array(
        'label'      => __('Button Bg Color', 'jot-shop' ),
        'section'    => 'jot-shop-woo-cart-color',
        'settings'   => 'jot_shop_shp_crt_btn_bg_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_shp_crt_btn_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_shp_crt_btn_clr', array(
        'label'      => __('Button Color', 'jot-shop' ),
        'section'    => 'jot-shop-woo-cart-color',
        'settings'   => 'jot_shop_shp_crt_btn_clr',
        
    ) ) 
 );

$wp_customize->add_setting('jot_shop_shp_crt_cls_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_shp_crt_cls_clr', array(
        'label'      => __('Close Link Color', 'jot-shop' ),
        'section'    => 'jot-shop-woo-cart-color',
        'settings'   => 'jot_shop_shp_crt_cls_clr',
        
    ) ) 
 );