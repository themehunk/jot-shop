<?php
if (!defined( 'ABSPATH' )) exit;
if(class_exists('Heading')){
$wp_customize->add_setting('jot_shop_custm_1_section_style', array(
        'default'           => '',
        'sanitize_callback' => 'jot_shop_sanitize_text',
                )
            );
$wp_customize->add_control(
            new Heading(
                $wp_customize, 'jot_shop_custm_1_section_style', array(
                    'label'            => esc_html__( 'Custom Section 1 Style', 'jot-shop' ),
                    'section'          => 'jot-shop-custom-one-color',
                    'class'            => 'jot_shop_custm_1_section_style',
                    'accordion'        => true,
                    'expanded'         => false,
                    'controls_to_wrap' => 6,
                )
            )
        );
}
$wp_customize->add_setting('jot_shop_custm_1_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_custm_1_bg_clr', array(
        'label'      => __('BG Color', 'jot-shop'),
        'section'    => 'jot-shop-custom-one-color',
        'settings'   => 'jot_shop_custm_1_bg_clr',
    )) 
 );
$wp_customize->add_setting('jot_shop_custm_1_tle_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_custm_1_tle_clr', array(
        'label'      => __('Title Color', 'jot-shop'),
        'section'    => 'jot-shop-custom-one-color',
        'settings'   => 'jot_shop_custm_1_tle_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_custm_1_gloabal_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_custm_1_gloabal_clr', array(
        'label'      => __('Section Global Color', 'jot-shop'),
        'section'    => 'jot-shop-custom-one-color',
        'settings'   => 'jot_shop_custm_1_gloabal_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_custm_1_wgt_tle_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_custm_1_wgt_tle_clr', array(
        'label'      => __('Widget Title Color', 'jot-shop'),
        'section'    => 'jot-shop-custom-one-color',
        'settings'   => 'jot_shop_custm_1_wgt_tle_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_custm_1_wgt_txt_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_custm_1_wgt_txt_clr', array(
        'label'      => __('Widget Text Color', 'jot-shop'),
        'section'    => 'jot-shop-custom-one-color',
        'settings'   => 'jot_shop_custm_1_wgt_txt_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_custm_1_wgt_lnk_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_custm_1_wgt_lnk_clr', array(
        'label'      => __('Widget Link Color', 'jot-shop'),
        'section'    => 'jot-shop-custom-one-color',
        'settings'   => 'jot_shop_custm_1_wgt_lnk_clr',
        
    ) ) 
 );
// section 2
if(class_exists('Heading')){
$wp_customize->add_setting('jot_shop_custm_2_section_style', array(
        'default'           => '',
        'sanitize_callback' => 'jot_shop_sanitize_text',
                )
            );
$wp_customize->add_control(
            new Heading(
                $wp_customize, 'jot_shop_custm_2_section_style', array(
                    'label'            => esc_html__( 'Custom Section 2 Style', 'jot-shop' ),
                    'section'          => 'jot-shop-custom-one-color',
                    'class'            => 'jot_shop_custm_2_section_style',
                    'accordion'        => true,
                    'expanded'         => false,
                    'controls_to_wrap' => 6,
                )
            )
        );
}
$wp_customize->add_setting('jot_shop_custm_2_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_custm_2_bg_clr', array(
        'label'      => __('BG Color', 'jot-shop'),
        'section'    => 'jot-shop-custom-one-color',
        'settings'   => 'jot_shop_custm_2_bg_clr',
    )) 
 );
$wp_customize->add_setting('jot_shop_custm_2_tle_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_custm_2_tle_clr', array(
        'label'      => __('Title Color', 'jot-shop'),
        'section'    => 'jot-shop-custom-one-color',
        'settings'   => 'jot_shop_custm_2_tle_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_custm_2_gloabal_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_custm_2_gloabal_clr', array(
        'label'      => __('Section Global Color', 'jot-shop'),
        'section'    => 'jot-shop-custom-one-color',
        'settings'   => 'jot_shop_custm_2_gloabal_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_custm_2_wgt_tle_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_custm_2_wgt_tle_clr', array(
        'label'      => __('Widget Title Color', 'jot-shop'),
        'section'    => 'jot-shop-custom-one-color',
        'settings'   => 'jot_shop_custm_2_wgt_tle_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_custm_2_wgt_txt_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_custm_2_wgt_txt_clr', array(
        'label'      => __('Widget Text Color', 'jot-shop'),
        'section'    => 'jot-shop-custom-one-color',
        'settings'   => 'jot_shop_custm_2_wgt_txt_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_custm_2_wgt_lnk_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_custm_2_wgt_lnk_clr', array(
        'label'      => __('Widget Link Color', 'jot-shop'),
        'section'    => 'jot-shop-custom-one-color',
        'settings'   => 'jot_shop_custm_2_wgt_lnk_clr',
        
    ) ) 
 );
// section 3
if(class_exists('Heading')){
$wp_customize->add_setting('jot_shop_custm_3_section_style', array(
        'default'           => '',
        'sanitize_callback' => 'jot_shop_sanitize_text',
                )
            );
$wp_customize->add_control(
            new Heading(
                $wp_customize, 'jot_shop_custm_3_section_style', array(
                    'label'            => esc_html__( 'Custom Section 3 Style', 'jot-shop' ),
                    'section'          => 'jot-shop-custom-one-color',
                    'class'            => 'jot_shop_custm_3_section_style',
                    'accordion'        => true,
                    'expanded'         => false,
                    'controls_to_wrap' => 6,
                )
            )
        );
}
$wp_customize->add_setting('jot_shop_custm_3_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_custm_3_bg_clr', array(
        'label'      => __('BG Color', 'jot-shop'),
        'section'    => 'jot-shop-custom-one-color',
        'settings'   => 'jot_shop_custm_3_bg_clr',
    )) 
 );
$wp_customize->add_setting('jot_shop_custm_3_tle_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_custm_3_tle_clr', array(
        'label'      => __('Title Color', 'jot-shop'),
        'section'    => 'jot-shop-custom-one-color',
        'settings'   => 'jot_shop_custm_3_tle_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_custm_3_gloabal_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_custm_3_gloabal_clr', array(
        'label'      => __('Section Global Color', 'jot-shop'),
        'section'    => 'jot-shop-custom-one-color',
        'settings'   => 'jot_shop_custm_3_gloabal_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_custm_3_wgt_tle_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_custm_3_wgt_tle_clr', array(
        'label'      => __('Widget Title Color', 'jot-shop'),
        'section'    => 'jot-shop-custom-one-color',
        'settings'   => 'jot_shop_custm_3_wgt_tle_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_custm_3_wgt_txt_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_custm_3_wgt_txt_clr', array(
        'label'      => __('Widget Text Color', 'jot-shop'),
        'section'    => 'jot-shop-custom-one-color',
        'settings'   => 'jot_shop_custm_3_wgt_txt_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_custm_3_wgt_lnk_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_custm_3_wgt_lnk_clr', array(
        'label'      => __('Widget Link Color', 'jot-shop'),
        'section'    => 'jot-shop-custom-one-color',
        'settings'   => 'jot_shop_custm_3_wgt_lnk_clr',
        
    ) ) 
 );
// section 4
if(class_exists('Heading')){
$wp_customize->add_setting('jot_shop_custm_4_section_style', array(
        'default'           => '',
        'sanitize_callback' => 'jot_shop_sanitize_text',
                )
            );
$wp_customize->add_control(
            new Heading(
                $wp_customize, 'jot_shop_custm_4_section_style', array(
                    'label'            => esc_html__( 'Custom Section 4 Style', 'jot-shop' ),
                    'section'          => 'jot-shop-custom-one-color',
                    'class'            => 'jot_shop_custm_4_section_style',
                    'accordion'        => true,
                    'expanded'         => false,
                    'controls_to_wrap' => 6,
                )
            )
        );
}
$wp_customize->add_setting('jot_shop_custm_4_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_custm_4_bg_clr', array(
        'label'      => __('BG Color', 'jot-shop'),
        'section'    => 'jot-shop-custom-one-color',
        'settings'   => 'jot_shop_custm_4_bg_clr',
    )) 
 );
$wp_customize->add_setting('jot_shop_custm_4_tle_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_custm_4_tle_clr', array(
        'label'      => __('Title Color', 'jot-shop'),
        'section'    => 'jot-shop-custom-one-color',
        'settings'   => 'jot_shop_custm_4_tle_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_custm_4_gloabal_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_custm_4_gloabal_clr', array(
        'label'      => __('Section Global Color', 'jot-shop'),
        'section'    => 'jot-shop-custom-one-color',
        'settings'   => 'jot_shop_custm_4_gloabal_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_custm_4_wgt_tle_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_custm_4_wgt_tle_clr', array(
        'label'      => __('Widget Title Color', 'jot-shop'),
        'section'    => 'jot-shop-custom-one-color',
        'settings'   => 'jot_shop_custm_4_wgt_tle_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_custm_4_wgt_txt_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_custm_4_wgt_txt_clr', array(
        'label'      => __('Widget Text Color', 'jot-shop'),
        'section'    => 'jot-shop-custom-one-color',
        'settings'   => 'jot_shop_custm_3_wgt_txt_clr',
        
    ) ) 
 );
$wp_customize->add_setting('jot_shop_custm_4_wgt_lnk_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
 ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_custm_4_wgt_lnk_clr', array(
        'label'      => __('Widget Link Color', 'jot-shop'),
        'section'    => 'jot-shop-custom-one-color',
        'settings'   => 'jot_shop_custm_4_wgt_lnk_clr',
        
    ) ) 
 );