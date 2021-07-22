<?php
if ( ! defined( 'ABSPATH' ) ) exit;
/******************/
//Widegt footer
/******************/
if(class_exists('Jot_Shop_WP_Customize_Control_Radio_Image')){
               $wp_customize->add_setting(
               'jot_shop_bottom_footer_widget_layout', array(
               'default'           => 'ft-wgt-none',
               'sanitize_callback' => 'sanitize_text_field',
            )
        );
$wp_customize->add_control(
            new Jot_Shop_WP_Customize_Control_Radio_Image(
                $wp_customize, 'jot_shop_bottom_footer_widget_layout', array(
                    'label'    => esc_html__( 'Layout','jot-shop'),
                    'section'  => 'jot-shop-widget-footer',
                    'choices'  => array(
                       'ft-wgt-none'   => array(
                            'url' => BIG_STORE_FOOTER_WIDGET_LAYOUT_NONE,
                        ),
                        'ft-wgt-one'   => array(
                            'url' => WIDGET_FOOTER_1,
                        ),
                        'ft-wgt-two' => array(
                            'url' => WIDGET_FOOTER_2,
                        ),
                        'ft-wgt-three' => array(
                            'url' => WIDGET_FOOTER_3,
                        ),
                        'ft-wgt-four' => array(
                            'url' => WIDGET_FOOTER_4,
                        ),
                        'ft-wgt-five' => array(
                            'url' => WIDGET_FOOTER_5,
                        ),
                        'ft-wgt-six' => array(
                            'url' => WIDGET_FOOTER_6,
                        ),
                        'ft-wgt-seven' => array(
                            'url' => WIDGET_FOOTER_7,
                        ),
                        'ft-wgt-eight' => array(
                            'url' => WIDGET_FOOTER_8,
                        ),
                    ),
                     'priority'   => 1,
                )
            )
        );
    } 