<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if(class_exists('Heading')){
$wp_customize->add_setting('jot_shop_product_list_section_style', array(
        'default'           => '',
        'sanitize_callback' => 'jot_shop_sanitize_text',
                )
            );
$wp_customize->add_control(
            new Heading(
                $wp_customize, 'jot_shop_product_list_section_style', array(
                    'label'            => esc_html__( 'Section Style', 'jot-shop' ),
                    'section'          => 'jot-shop-product-list-slide-color',
                    'class'            => 'jot_shop_product_list_section_style',
                    'accordion'        => true,
                    'expanded'         => false,
                    'controls_to_wrap' => 3,
                )
            )
        );
}
$wp_customize->add_setting('jot_shop_product_list_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_product_list_bg_clr', array(
        'label'      => __('BG Color', 'jot-shop' ),
        'section'    => 'jot-shop-product-list-slide-color',
        'settings'   => 'jot_shop_product_list_bg_clr',
        
    ) ) 
 );  
// special color
$wp_customize->add_setting('jot_shop_product_list_sec_spc_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_product_list_sec_spc_clr', array(
        'label'      => __('Section Global Color', 'jot-shop'),
        'section'    => 'jot-shop-product-list-slide-color',
        'settings'   => 'jot_shop_product_list_sec_spc_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_product_list_hd_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_product_list_hd_clr', array(
        'label'      => __('Heading Color', 'jot-shop'),
        'section'    => 'jot-shop-product-list-slide-color',
        'settings'   => 'jot_shop_product_list_hd_clr',
        
    ) ) 
 );

// product style
if(class_exists('Heading')){
$wp_customize->add_setting('jot_shop_product_list_product_style', array(
        'default'           => '',
        'sanitize_callback' => 'jot_shop_sanitize_text',
                )
            );
$wp_customize->add_control(
            new Heading(
                $wp_customize, 'jot_shop_product_list_product_style', array(
                    'label'            => esc_html__( 'Product Style', 'jot-shop' ),
                    'section'          => 'jot-shop-product-list-slide-color',
                    'class'            => 'jot_shop_product_list_product_style',
                    'accordion'        => true,
                    'expanded'         => false,
                    'controls_to_wrap' => 2,
                )
            )
        );
}
$wp_customize->add_setting('jot_shop_product_list_title_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_product_list_title_clr', array(
        'label'      => __('Product Title', 'jot-shop' ),
        'section'    => 'jot-shop-product-list-slide-color',
        'settings'   => 'jot_shop_product_list_title_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_product_list_price_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_product_list_price_clr', array(
        'label'      => __('Price', 'jot-shop' ),
        'section'    => 'jot-shop-product-list-slide-color',
        'settings'   => 'jot_shop_product_list_price_clr',
        
    ) ) 
 );