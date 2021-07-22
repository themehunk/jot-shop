<?php 
$wp_customize->add_setting('jot_shop_body_fontfamily', array(
                'sanitize_callback' => 'sanitize_text_field',
                'default'           => jot_shop_get_option('jot_shop_body_fontfamily'),
            )
        );
$wp_customize->add_control(
            new Jot_Shop_Control_Typography(
                $wp_customize, 'jot_shop_body_fontfamily', array(
                    'label'       => esc_html__( 'Font Family', 'jot-shop-pro' ),
                    'name'        => 'jot_shop_body_fontfamily',
                    'section'     => 'jot-shop-section-base-typo',
                    'type'        => 'bigstr-font-family',
					'connect'     => 'jot_shop_body_fontweight',
                    'ast_inherit' => __( 'Default System Font', 'jot-shop-pro' ),
                    
                )
        )
);
$wp_customize->add_setting(
            'jot_shop_body_fontweight', array(
                'sanitize_callback' => 'jot_shop_sanitize_font_weight',
                'default'           => jot_shop_get_option('jot_shop_body_fontweight'),
            )
        );
$wp_customize->add_control(
            new Jot_Shop_Control_Typography(
                $wp_customize, 'jot_shop_body_fontweight', array(
                    'label'       => esc_html__( 'Font Weight', 'jot-shop-pro' ),
                    'name'        =>'jot_shop_body_fontweight',
                    'section'     => 'jot-shop-section-base-typo',
                    'type'        => 'bigstr-font-weight',
					'connect'     => 'jot_shop_body_fontfamily',
                    'ast_inherit' => __( 'Default', 'jot-shop-pro' ),
                )
        )
);
//Text-transform
$wp_customize->add_setting('jot_shop_body_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'jot_shop_body_text_transform', array(
        'settings' => 'jot_shop_body_text_transform',
        'label'    => __('Text Transform','jot-shop-pro'),
        'section'  => 'jot-shop-section-base-typo',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'jot-shop-pro' ),
        'none'       => __( 'None', 'jot-shop-pro' ),
        'capitalize' => __( 'Capitalize', 'jot-shop-pro' ),
        'uppercase'  => __( 'Uppercase', 'jot-shop-pro' ),
        'lowercase'  => __( 'Lowercase', 'jot-shop-pro' ),    
        ),
));
/*******************/
// font-size
/*******************/
if ( class_exists( 'jot_shop_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'jot_shop_body_font_size', array(
                'sanitize_callback' => 'jot_shop_sanitize_range_value',
                'default'           => '13',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new jot_shop_WP_Customizer_Range_Value_Control(
                $wp_customize, 'jot_shop_body_font_size', array(
                    'label'       => esc_html__( 'Font-Size', 'jot-shop-pro' ),
                    'section'     => 'jot-shop-section-base-typo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
// font line-height
$wp_customize->add_setting(
            'jot_shop_body_font_line_height', array(
                'sanitize_callback' => 'jot_shop_sanitize_range_value',
                'default'           => '21',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new jot_shop_WP_Customizer_Range_Value_Control(
                $wp_customize,'jot_shop_body_font_line_height', array(
                    'label'       => esc_html__( 'Line-Height', 'jot-shop-pro' ),
                    'section'     => 'jot-shop-section-base-typo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 50,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
// font letter spacing
$wp_customize->add_setting(
                'jot_shop_body_font_letter_spacing', array(
                'sanitize_callback' => 'jot_shop_sanitize_range_value',
                'default'           => '0.8',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new jot_shop_WP_Customizer_Range_Value_Control(
                $wp_customize, 'jot_shop_body_font_letter_spacing', array(
                    'label'       => esc_html__( 'Letter-Spacing', 'jot-shop-pro' ),
                    'section'     => 'jot-shop-section-base-typo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
}