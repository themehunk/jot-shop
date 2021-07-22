<?php 
/******************/
//Above Footer
/******************/
// background divider
$wp_customize->add_setting('jot_shop_divide_abv_ftr_bg', array(
        'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control( new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_divide_abv_ftr_bg',
            array(
        'section'     => 'jot-shop-abv-footer-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Background','jot-shop' ),
        'priority'    => 1,
)));
// BG color
 $wp_customize->add_setting('jot_shop_above_ftr_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_above_ftr_bg_clr', array(
        'label'      => __('Background Color', 'jot-shop' ),
        'section'    => 'jot-shop-abv-footer-clr',
        'settings'   => 'jot_shop_above_ftr_bg_clr',
        'priority'   => 2,
    ) ) 
 );  

// Registers abv_header_background settings
    $wp_customize->add_setting( 'jot_shop_abv_ftr_background_image_url', array(
        'sanitize_callback' => 'esc_url',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_setting( 'jot_shop_abv_ftr_background_image_id', array(
        'sanitize_callback' => 'absint',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'jot_shop_abv_ftr_background_repeat', array(
        'default' => 'no-repeat',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'jot_shop_abv_ftr_background_size', array(
        'default' => 'auto',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'jot_shop_abv_ftr_background_attach', array(
        'default' => 'scroll',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'jot_shop_abv_ftr_background_position', array(
        'default' => 'center center',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );
    // Registers example_background control
    $wp_customize->add_control(
        new Jot_Shop_Customize_Custom_Background_Control(
            $wp_customize,
            'jot_shop_abv_ftr_background_image',
            array(
                'label'     => esc_html__( 'Background Image', 'jot-shop' ),
                'section'   => 'jot-shop-abv-footer-clr',
                'priority'   => 2,
                'settings'    => array(
                    'image_url' => 'jot_shop_abv_ftr_background_image_url',
                    'image_id' => 'jot_shop_abv_ftr_background_image_id',
                    'repeat' => 'jot_shop_abv_ftr_background_repeat', // Use false to hide the field
                    'size' => 'jot_shop_abv_ftr_background_size',
                    'position' => 'jot_shop_abv_ftr_background_position',
                    'attach' => 'jot_shop_abv_ftr_background_attach'
                )
            )
        )
    );

     // above content header
$wp_customize->add_setting('jot_shop_divide_abv_ftr_content', array(
        'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control( new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_divide_abv_ftr_content',
            array(
        'section'     => 'jot-shop-abv-footer-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Above Footer Content','jot-shop' ),
        'priority'    => 14,
)));
$wp_customize->add_setting('jot_shop_abv_ftr_content_txt_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_abv_ftr_content_txt_clr', array(
        'label'      => __('Text Color', 'jot-shop' ),
        'section'    => 'jot-shop-abv-footer-clr',
        'settings'   => 'jot_shop_abv_ftr_content_txt_clr',
        'priority' => 15,
    ) ) 
 );
$wp_customize->add_setting('jot_shop_abv_ftr_content_link_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_abv_ftr_content_link_clr', array(
        'label'      => __('Link Color', 'jot-shop' ),
        'section'    => 'jot-shop-abv-footer-clr',
        'settings'   => 'jot_shop_abv_ftr_content_link_clr',
        'priority'   => 16,
    ) ) 
 );
$wp_customize->add_setting('jot_shop_abv_ftr_content_link_hvr_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'jot_shop_abv_ftr_content_link_hvr_clr', array(
        'label'      => __('Link Hover Color', 'jot-shop' ),
        'section'    => 'jot-shop-abv-footer-clr',
        'settings'   => 'jot_shop_abv_ftr_content_link_hvr_clr',
        'priority'   => 17,
    ) ) 
 );

/****************/
//doc link
/****************/
$wp_customize->add_setting('jot_shop_abv_ftr_doc_learn_more', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_abv_ftr_doc_learn_more',
            array(
        'section'     => 'jot-shop-abv-footer-clr',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/jot-shop/#footer-color',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
    )));