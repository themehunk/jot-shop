<?php
/**
 * First Custom Section  Customizer Settings
 */
$wp_customize->add_setting( 'jot_shop_custom_section1_hide',
                array(
                    'default'  => '1',
                    'sanitize_callback' => 'jot_shop_sanitize_checkbox',
                 ));
$wp_customize->add_control( 'jot_shop_custom_section1_hide',
                array(
                    'type'        => 'checkbox',
                    'label'       => esc_html__('Disable section', 'jot-shop'),
                    'priority'   => 1,
                    'section'     => 'jot_shop_1_custom_sec',
                ));
$wp_customize->add_setting('jot_shop_custom_1_heading', 
      array(
        'default' => __('First Custom Section', 'jot-shop'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_text',
        'transport'         => 'postMessage',
));
    $wp_customize->add_control( 'jot_shop_custom_1_heading', 
    array(
        'label'    => __('First Custom Section', 'jot-shop'),
        'section'  => 'jot_shop_1_custom_sec',
         'type'       => 'text',
));

/******************/
//custom section widget
/******************/
if(class_exists('Jot_Shop_WP_Customize_Control_Radio_Image')){
               $wp_customize->add_setting(
               'jot_shop_custom_section1_widget_layout', array(
               'default'           => 'cs-1-1',
               'sanitize_callback' => 'jot_shop_sanitize_radio',
            )
        );
$wp_customize->add_control(
            new  Jot_Shop_WP_Customize_Control_Radio_Image(
                $wp_customize, 'jot_shop_custom_section1_widget_layout', array(
                    'label'    => esc_html__( 'Layout','jot-shop'),
                    'section'  => 'jot_shop_1_custom_sec',
                    'choices'  => array(
                        'cs-1-1'   => array(
                            'url' => CUSTOM_WIDGET_LAY_1,
                        ),
                        'cs-1-2' => array(
                            'url' => CUSTOM_WIDGET_LAY_2,
                        ),
                        'cs-1-3' => array(
                            'url' => CUSTOM_WIDGET_LAY_3,
                        ),
                        'cs-1-4' => array(
                            'url' => BIG_STORE_FOOTER_WIDGET_LAYOUT_4,
                        ),
                        
                        
                    ),
                )
            )
        );
    } 
/******************************/
/* Widget Redirect
/****************************/
if (class_exists('Jot_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'jot_shop_custom_section1_widget_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Jot_Shop_Widegt_Redirect(
                $wp_customize, 'jot_shop_custom_section1_widget_redirect', array(
                    'section'      => 'jot_shop_1_custom_sec',
                    'button_text'  => esc_html__( 'Go To Widget', 'jot-shop' ),
                    'button_class' => 'focus-customizer-widget-redirect',  
                )
            )
        );
} 


  $wp_customize->add_setting('jot_shop_custom_section_doc', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
  $wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_custom_section_doc',
            array(
        'section'     => 'jot_shop_1_custom_sec',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/jot-shop-pro/#custom-section',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
    )));