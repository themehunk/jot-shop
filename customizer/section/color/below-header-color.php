<?php 
/******************/
//Below Header
/******************/
// BG color
 $wp_customize->add_setting('jot_shop_below_hd_bg_clr', array(
        'default'           => '#1f4c94',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_below_hd_bg_clr', array(
        'label'      => __('Background Color', 'jot-shop' ),
        'section'    => 'jot-shop-below-header-clr',
        'settings'   => 'jot_shop_below_hd_bg_clr',
        'priority'   => 1,
    ) ) 
 );  

$wp_customize->add_setting('jot_shop_category_text_clr', array(
        'default'        => '#fff',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_category_text_clr', array(
        'label'      => __('Category Text Color', 'jot-shop' ),
        'section'    => 'jot-shop-below-header-clr',
        'settings'   => 'jot_shop_category_text_clr',
        'priority' => 1,
    ) ) 
 );

$wp_customize->add_setting('jot_shop_category_icon_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_category_icon_clr', array(
        'label'      => __('Category Icon Color', 'jot-shop' ),
        'section'    => 'jot-shop-below-header-clr',
        'settings'   => 'jot_shop_category_icon_clr',
        'priority'   => 1,
    ) ) 
 );  
//********************/
// icon color
//********************/
$wp_customize->add_setting('jot_shop_sq_icon_bg_clr', array(
        'default'           => '#1f4c94',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_sq_icon_bg_clr', array(
        'label'      => __('Background Color', 'jot-shop' ),
        'section'    => 'jot-shop-icon-header-clr',
        'settings'   => 'jot_shop_sq_icon_bg_clr',
        'priority'   => 1,
    ) ) 
 ); 

 // icon color
$wp_customize->add_setting('jot_shop_sq_icon_clr', array(
        'default'           => '#fff',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_sq_icon_clr', array(
        'label'      => __('Color', 'jot-shop' ),
        'section'    => 'jot-shop-icon-header-clr',
        'settings'   => 'jot_shop_sq_icon_clr',
        'priority'   => 2,
    ) ) 
 );  

// menu
$wp_customize->add_setting('jot_shop_divide_main_menu_clr', array(
        'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control( new jot_shop_Misc_Control( $wp_customize, 'jot_shop_divide_main_menu_clr',
            array(
        'section'     => 'jot-shop-menu-header-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Main Menu','jot-shop' ),
        'priority'    => 1,
)));
$wp_customize->add_setting('jot_shop_menu_link_clr', array(
        'default'           => '#fff',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_menu_link_clr', array(
        'label'      => __('Link Color', 'jot-shop' ),
        'section'    => 'jot-shop-menu-header-clr',
        'settings'   => 'jot_shop_menu_link_clr',
        'priority'   => 1,
    ) ) 
 );  
$wp_customize->add_setting('jot_shop_menu_link_hvr_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_menu_link_hvr_clr', array(
        'label'      => __('Link Hover Color', 'jot-shop' ),
        'section'    => 'jot-shop-menu-header-clr',
        'settings'   => 'jot_shop_menu_link_hvr_clr',
        'priority'   => 2,
    ) ) 
 );  

$wp_customize->add_setting('jot_shop_divide_sub_menu_clr', array(
        'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control( new jot_shop_Misc_Control( $wp_customize, 'jot_shop_divide_sub_menu_clr',
            array(
        'section'     => 'jot-shop-menu-header-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Sub Menu','jot-shop' ),
        'priority'    => 3,
)));

$wp_customize->add_setting('jot_shop_sub_menu_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_sub_menu_bg_clr', array(
        'label'      => __('Sub Menu BG Color', 'jot-shop' ),
        'section'    => 'jot-shop-menu-header-clr',
        'settings'   => 'jot_shop_sub_menu_bg_clr',
        'priority'   => 4,
    ) ) 
 ); 

 $wp_customize->add_setting('jot_shop_sub_menu_lnk_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_sub_menu_lnk_clr', array(
        'label'      => __('Sub Menu Link Color', 'jot-shop' ),
        'section'    => 'jot-shop-menu-header-clr',
        'settings'   => 'jot_shop_sub_menu_lnk_clr',
        'priority'   => 5,
    ) ) 
 );  

$wp_customize->add_setting('jot_shop_sub_menu_lnk_hvr_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_sub_menu_lnk_hvr_clr', array(
        'label'      => __('Sub Menu Link Hover Color', 'jot-shop' ),
        'section'    => 'jot-shop-menu-header-clr',
        'settings'   => 'jot_shop_sub_menu_lnk_hvr_clr',
        'priority'   => 6,
    ) ) 
 );  