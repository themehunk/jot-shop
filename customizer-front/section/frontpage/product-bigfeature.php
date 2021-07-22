<?php
/**
 * Category Section Customizer Settings
 */
$wp_customize->add_setting( 'jot_shop_disable_feature_product_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'jot_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jot_shop_disable_feature_product_sec', array(
                'label'                 => esc_html__('Disable Section', 'jot-shop'),
                'type'                  => 'checkbox',
                'section'               => 'jot_shop_product_big_feature',
                'settings'              => 'jot_shop_disable_feature_product_sec',
            ) ) );
// section heading
$wp_customize->add_setting('jot_shop_feature_product_heading', array(
        'default' => __('Big Featured Slider','jot-shop'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'jot_shop_feature_product_heading', array(
        'label'    => __('Section Heading', 'jot-shop'),
        'section'  => 'jot_shop_product_big_feature',
         'type'       => 'text',
));
//= Choose All Category  =   
    if (class_exists( 'Jot_Shop_Customize_Control_Checkbox_Multiple')) {
   $wp_customize->add_setting('jot_shop_feature_product_tab_list', array(
        'default'           => '',
        'sanitize_callback' => 'jot_shop_checkbox_explode'
    ));
    $wp_customize->add_control(new Jot_Shop_Customize_Control_Checkbox_Multiple(
            $wp_customize,'jot_shop_feature_product_tab_list', array(
        'settings'=> 'jot_shop_feature_product_tab_list',
        'label'   => __( 'Choose Categories To Show', 'jot-shop' ),
        'section' => 'jot_shop_product_big_feature',
        'choices' => jot_shop_get_category_list(array('taxonomy' =>'product_cat'),true),
        ) 
    ));

}  
$wp_customize->add_setting('jot_shop_feature_product_optn', array(
        'default'        => 'recent',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_select',
    ));
$wp_customize->add_control( 'jot_shop_feature_product_optn', array(
        'settings' => 'jot_shop_feature_product_optn',
        'label'   => __('Choose Option','jot-shop'),
        'section' => 'jot_shop_product_big_feature',
        'type'    => 'select',
        'choices'    => array(
        'recent'     => __('Recent','jot-shop'),
        'featured'   => __('Featured','jot-shop'),
        'random'     => __('Random','jot-shop'),
            
        ),
    ));

$wp_customize->add_setting('jot_shop_feature_product_slider_doc', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_feature_product_slider_doc',
            array(
        'section'     => 'jot_shop_product_big_feature',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/jot-shop-pro/#big-featured',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
    )));