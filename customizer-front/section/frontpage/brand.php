<?php
if ( ! defined( 'ABSPATH' ) ) exit;

$wp_customize->add_setting( 'jot_shop_disable_brand_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'jot_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jot_shop_disable_brand_sec', array(
                'label'                 => esc_html__('Disable Section', 'jot-shop'),
                'type'                  => 'checkbox',
                'section'               => 'jot_shop_brand',
                'settings'              => 'jot_shop_disable_brand_sec',
            ) ) );
 //Brand Content Via Repeater
      if ( class_exists( 'Jot_Shop_Repeater' ) ){
            $wp_customize->add_setting(
             'jot_shop_brand_content', array(
             'sanitize_callback' => 'jot_shop_repeater_sanitize',  
             'default'           => Jot_Shop_Defaults_Models::instance()->get_brand_default(),
                )
            );
            $wp_customize->add_control(
                new Jot_Shop_Repeater(
                    $wp_customize, 'jot_shop_brand_content', array(
                        'label'                                => esc_html__( 'Brand Content', 'jot-shop' ),
                        'section'                              => 'jot_shop_brand',
                        'add_field_label'                      => esc_html__( 'Add new Brand', 'jot-shop' ),
                        'item_name'                            => esc_html__( 'Brand', 'jot-shop' ),
                        
                        'customizer_repeater_title_control'    => false,   
                        'customizer_repeater_subtitle_control'    => false, 

                        'customizer_repeater_text_control'    => false,  

                        'customizer_repeater_image_control'    => true, 
                        'customizer_repeater_logo_image_control'    => false, 
                        'customizer_repeater_link_control'     => true,
                        'customizer_repeater_repeater_control' => false,  
                                         
                        
                    ),'Jot_Shop_Brand_Repeater'
                )
            );
        }

// Add an option to disable the logo.
  $wp_customize->add_setting( 'jot_shop_brand_slider_optn', array(
    'default'           => false,
    'sanitize_callback' => 'jot_shop_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new Jot_Shop_Toggle_Control( $wp_customize, 'jot_shop_brand_slider_optn', array(
    'label'       => esc_html__( 'Slide Auto Play', 'jot-shop' ),
    'section'     => 'jot_shop_brand',
    'type'        => 'toggle',
    'settings'    => 'jot_shop_brand_slider_optn',
  ) ) );
  $wp_customize->add_setting('jot_shop_brand_slider_speed', array(
        'default' =>'3000',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_number',
   ));
   $wp_customize->add_control( 'jot_shop_brand_slider_speed', array(
            'label'       => __('Speed', 'jot-shop'),
            'description' =>__('Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000','jot-shop'),
            'section'     => 'jot_shop_brand',
             'type'       => 'number',
    ));
  $wp_customize->add_setting('jot_shop_brand_slider_doc', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
  $wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_brand_slider_doc',
            array(
        'section'     => 'jot_shop_brand',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/jot-shop-pro/#brand-section',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
    )));