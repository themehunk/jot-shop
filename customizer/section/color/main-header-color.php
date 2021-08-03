<?php 
/******************/
//Main Header
/******************/
// background divider
$wp_customize->add_setting('jot_shop_divide_main_hdr_bg', array(
        'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control( new jot_shop_Misc_Control( $wp_customize, 'jot_shop_divide_main_hdr_bg',
            array(
        'section'     => 'jot-shop-main-header-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Background','jot-shop' ),
        'priority'    => 1,
)));


// above content header
$wp_customize->add_setting('jot_shop_divide_main_hdr_content', array(
        'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control( new jot_shop_Misc_Control( $wp_customize, 'jot_shop_divide_main_hdr_content',
            array(
        'section'     => 'jot-shop-main-header-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Main Header Content','jot-shop' ),
        'priority'    => 3,
)));