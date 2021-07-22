<?php
if ( ! defined( 'ABSPATH' ) ) exit; 
if(class_exists('Heading')){
$wp_customize->add_setting('jot_shop_slider_section_style', array(
        'default'           => '',
        'sanitize_callback' => 'jot_shop_sanitize_text',
                )
            );
$wp_customize->add_control(
            new Heading(
                $wp_customize, 'jot_shop_slider_section_style', array(
                    'label'            => esc_html__( 'Section Style', 'jot-shop' ),
                    'section'          => 'jot-shop-top-slider-color',
                    'class'            => 'jot_shop_slider_section_style',
                    'accordion'        => true,
                    'expanded'         => false,
                    'controls_to_wrap' => 4,
                )
            )
        );
}

$wp_customize->add_setting('jot_shop_slider_box_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_slider_box_bg_clr', array(
        'label'      => __('Box BG Color', 'jot-shop' ),
        'section'    => 'jot-shop-top-slider-color',
        'settings'   => 'jot_shop_slider_box_bg_clr',
        
    ) ) 
 );  

$wp_customize->add_setting('jot_shop_slider_hd_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_slider_hd_clr', array(
        'label'      => __('Heading Color', 'jot-shop'),
        'section'    => 'jot-shop-top-slider-color',
        'settings'   => 'jot_shop_slider_hd_clr',
        
    ) ) 
 );

$wp_customize->add_setting('jot_shop_slider_spcl_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_slider_spcl_clr', array(
        'label'      => __('Section Global Color', 'jot-shop'),
        'section'    => 'jot-shop-top-slider-color',
        'settings'   => 'jot_shop_slider_spcl_clr',
        
    ) ) 
 );

$wp_customize->add_setting('jot_shop_slider_cat_tle_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_slider_cat_tle_clr', array(
        'label'      => __('Title Color', 'jot-shop'),
        'section'    => 'jot-shop-top-slider-color',
        'settings'   => 'jot_shop_slider_cat_tle_clr',
        
    ) ) 
 );

// slide
if(class_exists('Heading')){
$wp_customize->add_setting('jot_shop_slider_slide_style', array(
        'default'           => '',
        'sanitize_callback' => 'jot_shop_sanitize_text',
                )
            );
$wp_customize->add_control(
            new Heading(
                $wp_customize, 'jot_shop_slider_slide_style', array(
                    'label'            => esc_html__( 'Slide Style', 'jot-shop' ),
                    'section'          => 'jot-shop-top-slider-color',
                    'class'            => 'jot_shop_slider_slide_style',
                    'accordion'        => true,
                    'expanded'         => false,
                    'controls_to_wrap' => 6,
                )
            )
        );
}
$wp_customize->add_setting('jot_shop_slider_slide_hd_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_slider_slide_hd_clr', array(
        'label'      => __('Heading Color', 'jot-shop'),
        'section'    => 'jot-shop-top-slider-color',
        'settings'   => 'jot_shop_slider_slide_hd_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_slider_slide_sbhd_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_slider_slide_sbhd_clr', array(
        'label'      => __('Sub Heading Color', 'jot-shop'),
        'section'    => 'jot-shop-top-slider-color',
        'settings'   => 'jot_shop_slider_slide_sbhd_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_slider_btn_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_slider_btn_bg_clr', array(
        'label'      => __('Button BG Color', 'jot-shop' ),
        'section'    => 'jot-shop-top-slider-color',
        'settings'   => 'jot_shop_slider_btn_bg_clr',
        
    ) ) 
 ); 
$wp_customize->add_setting('jot_shop_slider_btn_txt_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_slider_btn_txt_clr', array(
        'label'      => __('Button Text Color', 'jot-shop' ),
        'section'    => 'jot-shop-top-slider-color',
        'settings'   => 'jot_shop_slider_btn_txt_clr',
        
    ) ) 
 );

$wp_customize->add_setting('jot_shop_slider_nav_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_slider_nav_bg_clr', array(
        'label'      => __('Nav BG Color', 'jot-shop' ),
        'section'    => 'jot-shop-top-slider-color',
        'settings'   => 'jot_shop_slider_nav_bg_clr',
        
    ) ) 
 );
 $wp_customize->add_setting('jot_shop_slider_nav_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_slider_nav_clr', array(
        'label'      => __('Nav Color', 'jot-shop' ),
        'section'    => 'jot-shop-top-slider-color',
        'settings'   => 'jot_shop_slider_nav_clr',
        
    ) ) 
 );  