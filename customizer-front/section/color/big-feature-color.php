<?php
if ( ! defined( 'ABSPATH' ) ) exit; 
if(class_exists('Heading')){
$wp_customize->add_setting('jot_shop_big_ftrd_section_style', array(
        'default'           => '',
        'sanitize_callback' => 'jot_shop_sanitize_text',
                )
            );
$wp_customize->add_control(
            new Heading(
                $wp_customize, 'jot_shop_big_ftrd_section_style', array(
                    'label'            => esc_html__( 'Section Style', 'jot-shop' ),
                    'section'          => 'jot-shop-big-featured-color',
                    'class'            => 'jot_shop_big_ftrd_section_style',
                    'accordion'        => true,
                    'expanded'         => false,
                    'controls_to_wrap' => 5,
                )
            )
        );
}
$wp_customize->add_setting('jot_shop_big_ftrd_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_big_ftrd_bg_clr', array(
        'label'      => __('BG Color', 'jot-shop' ),
        'section'    => 'jot-shop-big-featured-color',
        'settings'   => 'jot_shop_big_ftrd_bg_clr',
        
    ) ) 
 );
// special color
$wp_customize->add_setting('jot_shop_big_ftrd_sec_special_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_big_ftrd_sec_special_clr', array(
        'label'      => __('Section Global Color', 'jot-shop'),
        'section'    => 'jot-shop-big-featured-color',
        'settings'   => 'jot_shop_big_ftrd_sec_special_clr',
        
    )) 
 );
$wp_customize->add_setting('jot_shop_big_ftrd_hd_txt_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_big_ftrd_hd_txt_clr', array(
        'label'      => __('Heading', 'jot-shop' ),
        'section'    => 'jot-shop-big-featured-color',
        'settings'   => 'jot_shop_big_ftrd_hd_txt_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_big_ftrd_cat_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_big_ftrd_cat_clr', array(
        'label'      => __('Category', 'jot-shop' ),
        'section'    => 'jot-shop-big-featured-color',
        'settings'   => 'jot_shop_big_ftrd_cat_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_big_ftrd_cat_hvr_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_big_ftrd_cat_hvr_clr', array(
        'label'      => __('Category Hover', 'jot-shop' ),
        'section'    => 'jot-shop-big-featured-color',
        'settings'   => 'jot_shop_big_ftrd_cat_hvr_clr',
        
    ) ) 
 );
if(class_exists('Heading')){
$wp_customize->add_setting('jot_shop_big_ftrd_prd_section_style', array(
        'default'           => '',
        'sanitize_callback' => 'jot_shop_sanitize_text',
                )
            );
$wp_customize->add_control(
            new Heading(
                $wp_customize, 'jot_shop_big_ftrd_prd_section_style', array(
                    'label'            => esc_html__( 'Product Style', 'jot-shop' ),
                    'section'          => 'jot-shop-big-featured-color',
                    'class'            => 'jot_shop_big_ftrd_prd_section_style',
                    'accordion'        => true,
                    'expanded'         => false,
                    'controls_to_wrap' => 6,
                )
            )
        );
}
// product style
$wp_customize->add_setting('jot_shop_big_ftrd_product_title_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_big_ftrd_product_title_clr', array(
        'label'      => __('Product Title', 'jot-shop' ),
        'section'    => 'jot-shop-big-featured-color',
        'settings'   => 'jot_shop_big_ftrd_product_title_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_big_ftrd_product_price_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_big_ftrd_product_price_clr', array(
        'label'      => __('Price', 'jot-shop' ),
        'section'    => 'jot-shop-big-featured-color',
        'settings'   => 'jot_shop_big_ftrd_product_price_clr',
        
    ) ) 
 );
// icon
$wp_customize->add_setting('jot_shop_big_ftrd_icon_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_big_ftrd_icon_bg_clr', array(
        'label'      => __('Icon Background', 'jot-shop' ),
        'section'    => 'jot-shop-big-featured-color',
        'settings'   => 'jot_shop_big_ftrd_icon_bg_clr',
        
    ) ) 
 );  
$wp_customize->add_setting('jot_shop_big_ftrd_icon_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_big_ftrd_icon_clr', array(
        'label'      => __('Icon Color', 'jot-shop' ),
        'section'    => 'jot-shop-big-featured-color',
        'settings'   => 'jot_shop_big_ftrd_icon_clr',
        
    ) ) 
 );
// sale
$wp_customize->add_setting('jot_shop_big_ftrd_sale_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_big_ftrd_sale_bg_clr', array(
        'label'      => __('Sale Background', 'jot-shop' ),
        'section'    => 'jot-shop-big-featured-color',
        'settings'   => 'jot_shop_big_ftrd_sale_bg_clr',
        
    ) ) 
 );  
$wp_customize->add_setting('jot_shop_big_ftrd_sale_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_big_ftrd_sale_clr', array(
        'label'      => __('Sale Color', 'jot-shop'),
        'section'    => 'jot-shop-big-featured-color',
        'settings'   => 'jot_shop_big_ftrd_sale_clr',  
    ) ) 
 );