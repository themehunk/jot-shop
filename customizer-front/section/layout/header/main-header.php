<?php
if ( ! defined( 'ABSPATH' ) ) exit;
// choose col layout
if(class_exists('Jot_Shop_WP_Customize_Control_Radio_Image')){
        $wp_customize->add_setting(
            'jot_shop_main_header_layout', array(
                'default'           => 'mhdrthree',
                'sanitize_callback' => 'jot_shop_sanitize_radio',
            )
        );
$wp_customize->add_control(
            new Jot_Shop_WP_Customize_Control_Radio_Image(
                $wp_customize, 'jot_shop_main_header_layout', array(
                    'label'    => esc_html__( 'Header Layout', 'jot-shop' ),
                    'section'  => 'jot-shop-main-header',
                    'choices'  => array(
                        'mhdrthree' => array(
                            'url' => BIG_STORE_MAIN_HEADER_LAYOUT_ONE,
                        ),
                        'mhdrdefault'   => array(
                            'url' => BIG_STORE_PRO_MAIN_HEADER_LAYOUT_TWO,
                        ),
                        'mhdrone'   => array(
                            'url' => BIG_STORE_PRO_MAIN_HEADER_LAYOUT_THREE,
                        ),
                        'mhdrtwo' => array(
                            'url' => BIG_STORE_PRO_MAIN_HEADER_LAYOUT_FOUR,
                        ),
                        
                                     
                    ),
                    'priority'   => 1,
                )
            )
        );
} 
/***********************************/  
// Off Canvas Sidebar
/***********************************/ 
//Main menu option
$wp_customize->add_setting('jot_shop_main_header_option', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_select',
    ));
$wp_customize->add_control( 'jot_shop_main_header_option', array(
        'settings' => 'jot_shop_main_header_option',
        'label'    => __('Right Column','jot-shop'),
        'section'  => 'jot-shop-main-header',
        'type'     => 'select',
        'choices'    => array(
        'none'       => __('None','jot-shop'),
        'button'     => __('Button','jot-shop'),
        'callto'     => __('Call-To','jot-shop'),
        'widget'     => __('Widget','jot-shop'),     
        ),
         'priority'   => 3,
    ));
$wp_customize->add_setting('jot_shop_canvas_alignment', array(
        'default'        => 'cnv-none',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_select',
    ));
$wp_customize->add_control( 'jot_shop_canvas_alignment', array(
        'settings' => 'jot_shop_canvas_alignment',
        'label'    => __('Off Canvas Sidebar','jot-shop'),
        'section'  => 'jot-shop-main-header',
        'type'     => 'select',
        'choices'    => array(
        'cnv-none'          => __('None','jot-shop'),
        'bfr-logo'      => __('Before logo','jot-shop'),
        'aftr-logo'     => __('After logo','jot-shop'),
        ),
         'priority'   => 50,
    ));

$wp_customize->add_setting('jot_shop_offcanvas_icon_clr', array(
        'default'           => '#fff',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_offcanvas_icon_clr', array(
        'label'      => __('Off-Canvas Icon Color', 'jot-shop' ),
        'section'    => 'jot-shop-icon-header-clr',
        'settings'   => 'jot_shop_offcanvas_icon_clr',
        'priority'   => 2,
    ) ) 
 );