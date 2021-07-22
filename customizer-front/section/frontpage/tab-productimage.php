<?php
$wp_customize->add_setting( 'jot_shop_disable_product_img_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'jot_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jot_shop_disable_product_img_sec', array(
                'label'                 => esc_html__('Disable Section', 'jot-shop'),
                'type'                  => 'checkbox',
                'section'               => 'jot_shop_product_tab_image',
                'settings'              => 'jot_shop_disable_product_img_sec',
 ) ) );

// section heading
$wp_customize->add_setting('jot_shop_product_img_sec_heading', array(
        'default' => __('Product Tab Image Carousel','jot-shop'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'jot_shop_product_img_sec_heading', array(
        'label'    => __('Section Heading', 'jot-shop'),
        'section'  => 'jot_shop_product_tab_image',
         'type'       => 'text',
));

//= Choose All Category  =   
    if (class_exists( 'Jot_Shop_Customize_Control_Checkbox_Multiple')){
   $wp_customize->add_setting('jot_shop_product_img_sec_cat_list', array(
        'default'           => '',
        'sanitize_callback' => 'jot_shop_checkbox_explode'
    ));
    $wp_customize->add_control(new Jot_Shop_Customize_Control_Checkbox_Multiple(
            $wp_customize,'jot_shop_product_img_sec_cat_list', array(
        'settings'=> 'jot_shop_product_img_sec_cat_list',
        'label'   => __( 'Choose Categories To Show', 'jot-shop' ),
        'section' => 'jot_shop_product_tab_image',
        'choices' => jot_shop_get_category_list(array('taxonomy' =>'product_cat'),true),
        ) 
    ));

}  

$wp_customize->add_setting('jot_shop_product_img_sec_optn', array(
        'default'        => 'recent',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_select',
    ));
$wp_customize->add_control( 'jot_shop_product_img_sec_optn', array(
        'settings' => 'jot_shop_product_img_sec_optn',
        'label'   => __('Choose Option','open-mart'),
        'section' => 'jot_shop_product_tab_image',
        'type'    => 'select',
        'choices'    => array(
        'recent'     => __('Recent','jot-shop'),
        'featured'   => __('Featured','jot-shop'),
        'random'     => __('Random','jot-shop'),
            
        ),
    ));

// Add an option to disable the logo.
  $wp_customize->add_setting( 'jot_shop_product_img_sec_slider_optn', array(
    'default'           => false,
    'sanitize_callback' => 'jot_shop_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new jot_shop_Toggle_Control( $wp_customize, 'jot_shop_product_img_sec_slider_optn', array(
    'label'       => esc_html__( 'Slide Auto Play', 'jot-shop' ),
    'section'     => 'jot_shop_product_tab_image',
    'type'        => 'toggle',
    'settings'    => 'jot_shop_product_img_sec_slider_optn',
  ) ) );

  $wp_customize->add_setting('jot_shop_product_img_sec_adimg', array(
        'default'       => '',
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_upload',
    ));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'jot_shop_product_img_sec_adimg', array(
        'label'          => __('Upload Image', 'jot-shop'),
        'section'        => 'jot_shop_product_tab_image',
        'settings'       => 'jot_shop_product_img_sec_adimg',
 )));

$wp_customize->add_setting('jot_shop_product_img_sec_side', array(
        'default'        => 'left',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_select',
    ));
$wp_customize->add_control( 'jot_shop_product_img_sec_side', array(
        'settings' => 'jot_shop_product_img_sec_side',
        'label'   => __('PLace Image On','jot-shop'),
        'section' => 'jot_shop_product_tab_image',
        'type'    => 'select',
        'choices'    => array(
        'left'     => __('Left','jot-shop'),
        'right'     => __('Right','jot-shop'),
            
        ),
    ));
$wp_customize->add_setting( 'jot_shop_product_img_sec_single_row_slide', array(
                'default'               => true,
                'sanitize_callback'     => 'jot_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'jot_shop_product_img_sec_single_row_slide', array(
                'label'                 => esc_html__('Enable Single Row Slide', 'jot-shop'),
                'type'                  => 'checkbox',
                'section'               => 'jot_shop_product_tab_image',
                'settings'              => 'jot_shop_product_img_sec_single_row_slide',
            ) ) );
$wp_customize->add_setting('jot_shop_product_img_sec_doc', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_product_img_sec_doc',
            array(
        'section'   => 'jot_shop_product_tab_image',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/jot-shop/#product-tab',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
    )));