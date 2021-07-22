<?php 
$wp_customize->add_setting('jot_shop_title_fontfamily', array(
                'sanitize_callback' => 'sanitize_text_field',
                'default'           => jot_shop_get_option('jot_shop_title_fontfamily'),
            )
        );
$wp_customize->add_control(
            new Jot_Shop_Control_Typography(
                $wp_customize, 'jot_shop_title_fontfamily', array(
                    'label'       => esc_html__( 'font family', 'jot-shop-pro' ),
                    'name'        => 'jot_shop_title_fontfamily',
                    'section'     => 'jot-shop-section-title-typo',
                    'type'        => 'bigstr-font-family',
					'connect'     => 'jot_shop_title_fontweight',
                    'ast_inherit' => __( 'Default System Font', 'jot-shop-pro' ),
                    
                )
        )
);
$wp_customize->add_setting(
            'jot_shop_title_fontweight', array(
                'sanitize_callback' => 'jot_shop_sanitize_font_weight',
                'default'           => jot_shop_get_option('jot_shop_title_fontweight'),
            )
        );
$wp_customize->add_control(
            new Jot_Shop_Control_Typography(
                $wp_customize, 'jot_shop_title_fontweight', array(
                    'label'       => esc_html__( 'Weight', 'jot-shop-pro' ),
                    'name'        =>'jot_shop_title_fontweight',
                    'section'     => 'jot-shop-section-title-typo',
                    'type'        => 'bigstr-font-weight',
					'connect'     => 'jot_shop_title_fontfamily',
                    'ast_inherit' => __( 'Default', 'jot-shop-pro' ),
                )
        )
);
//Text-transform
$wp_customize->add_setting('jot_shop_title_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'jot_shop_title_text_transform', array(
        'settings' => 'jot_shop_title_text_transform',
        'label'    => __('Text Transform','jot-shop-pro'),
        'section'  => 'jot-shop-section-title-typo',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'jot-shop-pro' ),
        'none'       => __( 'None', 'jot-shop-pro' ),
        'capitalize' => __( 'Capitalize', 'jot-shop-pro' ),
        'uppercase'  => __( 'Uppercase', 'jot-shop-pro' ),
        'lowercase'  => __( 'Lowercase', 'jot-shop-pro' ),    
        ),
));