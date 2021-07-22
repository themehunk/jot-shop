<?php
/******************/
//Bootm footer
/******************/
//choose col layout
if(class_exists('Jot_Shop_WP_Customize_Control_Radio_Image')){
               $wp_customize->add_setting(
               'jot_shop_bottom_footer_layout', array(
                'default'           => 'ft-btm-one',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
$wp_customize->add_control(
            new Jot_Shop_WP_Customize_Control_Radio_Image(
                $wp_customize, 'jot_shop_bottom_footer_layout', array(
                    'label'    => esc_html__('Layout','jot-shop'),
                    'section'  => 'jot-shop-bottom-footer',
                    'choices'  => array(
                       'ft-btm-none'   => array(
                            'url' => BIG_STORE_TOP_HEADER_LAYOUT_NONE,
                        ),
                        'ft-btm-one'   => array(
                            'url' => BIG_STORE_TOP_HEADER_LAYOUT_1,
                        ),
                        'ft-btm-two' => array(
                            'url' => BIG_STORE_TOP_HEADER_LAYOUT_2,
                        ),
                        'ft-btm-three' => array(
                            'url' => BIG_STORE_TOP_HEADER_LAYOUT_3,
                        ),
                    ),
                )
            )
        );
    } 
//********************************/
// col1-setting
//*******************************/
$wp_customize->add_setting('jot_shop_bottom_footer_col1_set', array(
        'default'        => 'text',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
    ));
$wp_customize->add_control('jot_shop_bottom_footer_col1_set', array(
        'settings' => 'jot_shop_bottom_footer_col1_set',
        'label'    => __('Column 1','jot-shop'),
        'section'  => 'jot-shop-bottom-footer',
        'type'     => 'select',
        'choices'  => array(
        'none'             => __('None','jot-shop'),
        'text'             => __('Text','jot-shop'),
        'menu'             => __('Menu','jot-shop'),
        'widget'           => __('Widget','jot-shop'),
        'social'           => __('Social Media','jot-shop'),   
    ),
));
//col1-text/html
$wp_customize->add_setting('jot_shop_footer_bottom_col1_texthtml', array(
        'default'           => __('Copyright | Jot Shop| Developed by ThemeHunk','jot-shop'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_textarea',
        'transport'         => 'postMessage',
        
    ));
$wp_customize->add_control('jot_shop_footer_bottom_col1_texthtml', array(
        'label'    => __('Text', 'jot-shop'),
        'section'  => 'jot-shop-bottom-footer',
        'settings' => 'jot_shop_footer_bottom_col1_texthtml',
         'type'    => 'textarea',
    ));
// col1 widget redirection
if (class_exists('Jot_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'jot_shop_footer_bottom_col1_widget_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Jot_Shop_Widegt_Redirect(
                $wp_customize,'jot_shop_footer_bottom_col1_widget_redirect', array(
                    'section'      => 'jot-shop-bottom-footer',
                    'button_text'  => esc_html__('Go To Widget','jot-shop'),
                    'button_class' => 'focus-customizer-widget-redirect-col1',  
                )
            )
        );
} 
// col1 menu redirection
if (class_exists('Jot_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'jot_shop_footer_bottom_col1_menu_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Jot_Shop_Widegt_Redirect(
                $wp_customize,'jot_shop_footer_bottom_col1_menu_redirect', array(
                    'section'      => 'jot-shop-bottom-footer',
                    'button_text'  => esc_html__('Go To Menu','jot-shop'),
                    'button_class' => 'focus-customizer-menu-redirect-col1',  
                )
            )
        );
} 
// col1 social media redirection
if (class_exists('Jot_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'jot_shop_footer_bottom_col1_social_media_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Jot_Shop_Widegt_Redirect(
                $wp_customize, 'jot_shop_footer_bottom_col1_social_media_redirect', array(
                    'section'      => 'jot-shop-bottom-footer',
                    'button_text'  => esc_html__( 'Go To Social Media', 'jot-shop' ),
                    'button_class' => 'focus-customizer-social_media-redirect-col1',  
                )
            )
        );
} 
/***************************************/
// col2
/***************************************/
$wp_customize->add_setting('jot_shop_bottom_footer_col2_set',array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
    ));
$wp_customize->add_control( 'jot_shop_bottom_footer_col2_set',array(
        'settings' => 'jot_shop_bottom_footer_col2_set',
        'label'   => __('Column 2','jot-shop'),
        'section' => 'jot-shop-bottom-footer',
        'type'    => 'select',
        'choices'    => array(
        'none'             => __('None','jot-shop'),
        'text'             => __('Text','jot-shop'),
        'menu'             => __('Menu','jot-shop'),
        'search'           => __('Search','jot-shop'),
        'widget'           => __('Widget','jot-shop'),
        'social'           => __('Social Media','jot-shop'),     
        ),
    ));
// col2-text/html
$wp_customize->add_setting('jot_shop_bottom_footer_col2_texthtml', array(
        'default'           => __('Add your content here','jot-shop'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_textarea', 
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control('jot_shop_bottom_footer_col2_texthtml', array(
        'label'    => __('Text', 'jot-shop'),
        'section'  => 'jot-shop-bottom-footer',
        'settings' => 'jot_shop_bottom_footer_col2_texthtml',
         'type'    => 'textarea',
    ));
// col2 widget redirection
if (class_exists('Jot_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'jot_shop_bottom_footer_col2_widget_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Jot_Shop_Widegt_Redirect(
                $wp_customize,'jot_shop_bottom_footer_col2_widget_redirect', array(
                    'section'      => 'jot-shop-bottom-footer',
                    'button_text'  => esc_html__( 'Go To Widget', 'jot-shop' ),
                    'button_class' => 'focus-customizer-widget-redirect-col2',  
                )
            )
        );
}  
// col2 menu redirection
if (class_exists('Jot_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'jot_shop_bottom_footer_col2_menu_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Jot_Shop_Widegt_Redirect(
                $wp_customize,'jot_shop_bottom_footer_col2_menu_redirect', array(
                    'section'      => 'jot-shop-bottom-footer',
                    'button_text'  => esc_html__( 'Go To Menu', 'jot-shop' ),
                    'button_class' => 'focus-customizer-menu-redirect-col2',  
                )
            )
        );
}    
// col2 social media redirection
if (class_exists('Jot_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'jot_shop_bottom_footer_col2_social_media_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Jot_Shop_Widegt_Redirect(
                $wp_customize, 'jot_shop_bottom_footer_col2_social_media_redirect', array(
                    'section'      => 'jot-shop-bottom-footer',
                    'button_text'  => esc_html__( 'Go To Social Media', 'jot-shop' ),
                    'button_class' => 'focus-customizer-social_media-redirect-col2',  
                )
            )
        );
} 
// col3
$wp_customize->add_setting('jot_shop_bottom_footer_col3_set', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
    ));
$wp_customize->add_control('jot_shop_bottom_footer_col3_set', array(
        'settings' => 'jot_shop_bottom_footer_col3_set',
        'label'   => __('Column 3','jot-shop'),
        'section' => 'jot-shop-bottom-footer',
        'type'    => 'select',
        'choices' => array(
        'none'             => __('None','jot-shop'),
        'text'             => __('Text','jot-shop'),
        'menu'             => __('Menu','jot-shop'),
        'search'           => __('Search','jot-shop'),
        'widget'           => __('Widget','jot-shop'),
        'social'           => __('Social Media','jot-shop'),   
        ),
    ));
// col3-text/html
$wp_customize->add_setting('jot_shop_bottom_footer_col3_texthtml', array(
        'default'          => __('Add your content here','jot-shop'),
        'capability'       => 'edit_theme_options',
        'sanitize_callback'=> 'jot_shop_sanitize_textarea',  
        'transport'         => 'postMessage', 
    ));
$wp_customize->add_control('jot_shop_bottom_footer_col3_texthtml', array(
        'label'    => __('Text', 'jot-shop'),
        'section'  => 'jot-shop-bottom-footer',
        'settings' => 'big-store_bottom_footer_col3_texthtml',
        'type'     => 'textarea',
    ));
// col3 social media redirection
if (class_exists('Jot_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'jot_shop_bottom_footer_col3_social_media_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Jot_Shop_Widegt_Redirect(
                $wp_customize, 'jot_shop_bottom_footer_col3_social_media_redirect', array(
                    'section'      => 'jot-shop-bottom-footer',
                    'button_text'  => esc_html__( 'Go To Social Media', 'jot-shop' ),
                    'button_class' => 'focus-customizer-social_media-redirect-col3',  
                )
            )
        );
} 
// col3 widget redirection
if (class_exists('Jot_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'jot_shop_bottom_footer_col3_widget_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Jot_Shop_Widegt_Redirect(
                $wp_customize,'jot_shop_bottom_footer_col3_widget_redirect', array(
                    'section'      => 'jot-shop-bottom-footer',
                    'button_text'  => esc_html__( 'Go To Widget', 'jot-shop' ),
                    'button_class' => 'focus-customizer-widget-redirect-col3',  
                )
            )
        );
}
// col3 widget redirection
if (class_exists('Jot_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'jot_shop_bottom_footer_col3_menu_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Jot_Shop_Widegt_Redirect(
                $wp_customize,'jot_shop_bottom_footer_col3_menu_redirect', array(
                    'section'      => 'jot-shop-bottom-footer',
                    'button_text'  => esc_html__( 'Go To Menu', 'jot-shop' ),
                    'button_class' => 'focus-customizer-menu-redirect-col3',  
                )
            )
        );
}
/****************************/
// common option
/****************************/
if ( class_exists( 'Jot_Shop_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'jot_shop_btm_ftr_hgt', array(
                'sanitize_callback' => 'jot_shop_sanitize_range_value',
                'default'           => '40',
                 'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new Jot_Shop_WP_Customizer_Range_Value_Control(
                $wp_customize, 'jot_shop_btm_ftr_hgt', array(
                    'label'       => esc_html__( 'Height', 'jot-shop' ),
                    'section'     => 'jot-shop-bottom-footer',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 30,
                        'max'  => 1000,
                        'step' => 1,
                    ),
                      'media_query' => true,
                    'sum_type'    => true,
                )
           )
    );
}
// above bottom-border
if ( class_exists( 'Jot_Shop_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'jot_shop_btm_ftr_botm_brd', array(
                'sanitize_callback' => 'jot_shop_sanitize_range_value',
                'default'           => '1',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new Jot_Shop_WP_Customizer_Range_Value_Control(
                $wp_customize, 'jot_shop_btm_ftr_botm_brd', array(
                    'label'       => esc_html__( 'Top Border', 'jot-shop' ),
                    'section'     => 'jot-shop-bottom-footer',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 200,
                        'step' => 1,
                    ),
                      'media_query' => true,
                    'sum_type'    => true,
                )
            )
        );
    }
// border-color
 $wp_customize->add_setting('jot_shop_bottom_frt_brdr_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Jot_Shop_Customizer_Color_Control($wp_customize,'jot_shop_bottom_frt_brdr_clr', array(
        'label'      => __('Border Color', 'jot-shop' ),
        'section'    => 'jot-shop-bottom-footer',
        'settings'   => 'jot_shop_bottom_frt_brdr_clr',
    ) ) 
 );  


/****************/
//doc link
/****************/
$wp_customize->add_setting('jot_shop_ftr_blw_learn_more', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_ftr_blw_learn_more',
            array(
        'section'     => 'jot-shop-bottom-footer',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/jot-shop/#below-footer',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'    =>100,
    )));

$wp_customize->selective_refresh->add_partial('jot_shop_footer_bottom_col1_texthtml', array(
        'selector' => '.below-footer-col1 .content-html',
) );