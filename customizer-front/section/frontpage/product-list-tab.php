<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$wp_customize->add_setting( 'jot_shop_disable_cat_list_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'jot_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jot_shop_disable_cat_list_sec', array(
                'label'                 => esc_html__('Disable Section', 'jot-shop'),
                'type'                  => 'checkbox',
                'section'               => 'jot_shop_product_cat_list',
                'settings'              => 'jot_shop_disable_cat_list_sec',
            ) ) );
// section heading
$wp_customize->add_setting('jot_shop_list_cat_tab_heading', array(
        'default' => __('Category Slider','jot-shop'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'jot_shop_list_cat_tab_heading', array(
        'label'    => __('Section Heading', 'jot-shop'),
        'section'  => 'jot_shop_product_cat_list',
         'type'       => 'text',
));
//= Choose All Category  =   
    if (class_exists( 'Jot_Shop_Customize_Control_Checkbox_Multiple')) {
   $wp_customize->add_setting('jot_shop_category_tb_list', array(
        'default'           => '',
        'sanitize_callback' => 'jot_shop_checkbox_explode'
    ));
    $wp_customize->add_control(new Jot_Shop_Customize_Control_Checkbox_Multiple(
            $wp_customize,'jot_shop_category_tb_list', array(
        'settings'=> 'jot_shop_category_tb_list',
        'label'   => __( 'Choose Categories To Show', 'jot-shop' ),
        'section' => 'jot_shop_product_cat_list',
        'choices' => jot_shop_get_category_list(array('taxonomy' =>'product_cat'),false),
        ) 
    ));

}  

$wp_customize->add_setting('jot_shop_category_tb_list_optn', array(
        'default'        => 'recent',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_select',
    ));
$wp_customize->add_control( 'jot_shop_category_tb_list_optn', array(
        'settings' => 'jot_shop_category_tb_list_optn',
        'label'   => __('Choose Option','jot-shop'),
        'section' => 'jot_shop_product_cat_list',
        'type'    => 'select',
        'choices'    => array(
        'recent'     => __('Recent','jot-shop'),
        'featured'   => __('Featured','jot-shop'),
        'random'     => __('Random','jot-shop'),
            
        ),
    ));

$wp_customize->add_setting( 'jot_shop_single_row_slide_cat_tb_lst', array(
                'default'               => false,
                'sanitize_callback'     => 'jot_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jot_shop_single_row_slide_cat_tb_lst', array(
                'label'                 => esc_html__('Enable Single Row Slide', 'jot-shop'),
                'type'                  => 'checkbox',
                'section'               => 'jot_shop_product_cat_list',
                'settings'              => 'jot_shop_single_row_slide_cat_tb_lst',
            ) ) );
// Add an option to disable the logo.
  $wp_customize->add_setting( 'jot_shop_cat_tb_lst_slider_optn', array(
    'default'           => false,
    'sanitize_callback' => 'jot_shop_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new Jot_Shop_Toggle_Control( $wp_customize, 'jot_shop_cat_tb_lst_slider_optn', array(
    'label'       => esc_html__( 'Slide Auto Play', 'jot-shop' ),
    'section'     => 'jot_shop_product_cat_list',
    'type'        => 'toggle',
    'settings'    => 'jot_shop_cat_tb_lst_slider_optn',
  ) ) );
  $wp_customize->add_setting('jot_shop_cat_tb_lst_slider_speed', array(
        'default' =>'3000',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_number',
   ));
   $wp_customize->add_control( 'jot_shop_cat_tb_lst_slider_speed', array(
            'label'       => __('Speed', 'jot-shop'),
            'description' =>__('Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000','jot-shop'),
            'section'     => 'jot_shop_product_cat_list',
             'type'       => 'number',
    ));
 $wp_customize->add_setting('jot_shop_cat_tb_lst_slider_doc', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_cat_tb_lst_slider_doc',
            array(
        'section'    => 'jot_shop_product_cat_list',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/jot-shop-pro/#product-list',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
    )));