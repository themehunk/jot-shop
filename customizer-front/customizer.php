<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
/**
 * all customizer setting includeed
 *
 * @param  
 * @return mixed|string
 */
function jot_shop_pro_front_customize_register( $wp_customize ){
$wp_customize->register_section_type( 'Heading' );
$wp_customize->register_section_type( 'Jot_Shop_Control_Typography' );
//Front Page Settings
require JOT_SHOP_THEME_DIR . '/customizer-front/section/frontpage/top-slider.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/frontpage/brand.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/frontpage/category-tab.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/frontpage/product-slide.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/frontpage/category-slider.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/frontpage/product-list.php';

require JOT_SHOP_THEME_DIR . '/customizer-front/section/frontpage/ribbon.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/frontpage/banner.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/frontpage/higlight.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/frontpage/tab-productimage.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/frontpage/product-bigfeature.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/frontpage/product-list-tab.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/frontpage/custom-one.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/frontpage/custom-two.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/frontpage/custom-three.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/frontpage/custom-four.php';

require JOT_SHOP_THEME_DIR . '/customizer-front/section/layout/blog/blog.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/layout/woo/shop.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/layout/woo/product.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/layout/header/main-header.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/layout/footer/widget-footer.php';

// front-page color-option
require JOT_SHOP_THEME_DIR . '/customizer-front/section/color/tabbed-product-carousel-color.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/color/top-slider-color.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/color/category-section-color.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/color/product-carousel-color.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/color/product-list-color.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/color/tabbed-product-list.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/color/ribbon-color.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/color/higlight-color.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/color/tab-productimage-color.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/color/big-feature-color.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/color/custom-section-color.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/color/pan-color.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/color/woocommerce-color.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/color/footer-color.php';
// typo
require JOT_SHOP_THEME_DIR . '/customizer-front/section/typo/base-typography.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/typo/content-typography.php';
require JOT_SHOP_THEME_DIR . '/customizer-front/section/typo/title-typography.php';
// important doc link
/*************************/
/*Typography Panel*/
/*************************/
$wp_customize->add_panel('jot-shop-panel-typography', array(
                'priority' => 3,
                'title'    => __('Typography', 'jot-shop-pro'),
));
$jot_shop_section_base_typo = new  jot_shop_WP_Customize_Section($wp_customize, 'jot-shop-section-base-typo', array(
    'title' =>  __('Base Typography', 'jot-shop-pro'),
    'panel' => 'jot-shop-panel-typography',
    'priority' => 2,
));
$wp_customize->add_section($jot_shop_section_base_typo);
$jot_shop_section_title_typo = new  jot_shop_WP_Customize_Section($wp_customize, 'jot-shop-section-title-typo', array(
    'title' =>  __('Title', 'jot-shop-pro'),
    'panel' => 'jot-shop-panel-typography',
    'priority' => 3,
));
$wp_customize->add_section($jot_shop_section_title_typo);

$jot_shop_section_content_typo = new  jot_shop_WP_Customize_Section($wp_customize, 'jot-shop-section-content-typo', array(
    'title' =>  __('Content', 'jot-shop-pro'),
    'panel' => 'jot-shop-panel-typography',
    'priority' => 4,
));
$wp_customize->add_section($jot_shop_section_content_typo);
$wp_customize->add_setting('jot_shop_site_identity', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_site_identity',
            array(
        'section'    => 'title_tagline',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/jot-shop-pro/#site-identity',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
)));
$wp_customize->add_setting('jot_shop_home_page_setup', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_home_page_setup',
            array(
        'section'    => 'static_front_page',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/jot-shop-pro/#homepage-setting',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
    )));
// header
$wp_customize->add_setting('jot_shop_abv_header_doc_learn_more', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_abv_header_doc_learn_more',
            array(
        'section'    => 'jot-shop-above-header',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/jot-shop-pro/#above-header',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
    )));
// main header
$wp_customize->add_setting('jot_shop_main_header_doc_learn_more', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_main_header_doc_learn_more',
            array(
        'section'     => 'jot-shop-main-header',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/jot-shop-pro/#main-header',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'    =>100,
    )));
// exclude category
$wp_customize->add_setting('jot_shop_exclde_cat_header_doc_learn_more', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_exclde_cat_header_doc_learn_more',
            array(
        'section'     => 'jot_shop_exclde_cat_header',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/jot-shop-pro/#exclude-category',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'    =>100,
    )));
// blog
$wp_customize->add_setting('jot_shop_blog_arch_learn_more', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_blog_arch_learn_more',
            array(
        'section'    => 'jot-shop-section-blog-group',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/jot-shop-pro/#blog-setting',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
    )));
//footer
$wp_customize->add_setting('jot_shop_abv_ftr_learn_more', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_abv_ftr_learn_more',
            array(
        'section'    => 'jot-shop-above-footer',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/jot-shop-pro/#above-footer',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
    )));

$wp_customize->add_setting('jot_shop_ftr_wdgt_learn_more', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_ftr_wdgt_learn_more',
            array(
        'section'    => 'jot-shop-widget-footer',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/jot-shop-pro/#widget-footer',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
    )));
$wp_customize->add_setting('jot_shop_ftr_blw_learn_more', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_ftr_blw_learn_more',
            array(
        'section'     => 'jot-shop-bottom-footer',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/jot-shop-pro/#below-footer',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'    =>100,
    )));
// move top
$wp_customize->add_setting('jot_shop_movetotop_learn_more', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_movetotop_learn_more',
            array(
        'section'    => 'jot-shop-move-to-top',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/jot-shop-pro/#move-top',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
    )));
// preloader
$wp_customize->add_setting('jot_shop_loader_link_more', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_loader_link_more',
            array(
        'section'     => 'jot-shop-pre-loader',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/jot-shop-pro/#pre-loader',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
    )));
//socail icon
$wp_customize->add_setting('jot_shop_social_link_more', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_social_link_more',
            array(
        'section'     => 'jot-shop-social-icon',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/jot-shop-pro/#social-icon',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
    )));
// frontpage
// top slider
$wp_customize->add_setting('jot_shop_top_slider_doc', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_top_slider_doc',
            array(
        'section'    => 'jot_shop_top_slider_section',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/jot-shop-pro/#top-slider',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
    )));
//tabbed product
$wp_customize->add_setting('jot_shop_cat_tab_slider_doc', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_cat_tab_slider_doc',
            array(
        'section'   => 'jot_shop_category_tab_section',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/jot-shop-pro/#tabbed-product',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
    )));
//woo cat
  $wp_customize->add_setting('jot_shop_category_slider_doc', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_category_slider_doc',
            array(
        'section'    => 'jot_shop_cat_slide_section',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/jot-shop-pro/#woo-category',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
    )));
//product tab image
$wp_customize->add_setting('jot_shop_product_img_sec_doc', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_product_img_sec_doc',
            array(
        'section'   => 'jot_shop_product_tab_image',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/jot-shop-pro/#product-tab',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
    )));
//ribbon
  $wp_customize->add_setting('jot_shop_ribbon_doc', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_ribbon_doc',
            array(
        'section'     => 'jot_shop_ribbon',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/jot-shop-pro/#ribbon-section',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
    )));
//product crousal
  $wp_customize->add_setting('jot_shop_product_slider_doc', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_product_slider_doc',
            array(
        'section'    => 'jot_shop_product_slide_section',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/jot-shop-pro/#product-carousel',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
    )));
//banner
$wp_customize->add_setting('jot_shop_bnr_doc', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_bnr_doc',
            array(
        'section'     => 'jot_shop_banner',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/jot-shop-pro/#banner-section',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
    )));
//list product
 $wp_customize->add_setting('jot_shop_product_list_slide_doc', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
  $wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_product_list_slide_doc',
            array(
        'section'    => 'jot_shop_product_slide_list',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/jot-shop-pro/#product-list',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
 )));
//higlight feature
  $wp_customize->add_setting('jot_shop_highlight_doc', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
  $wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_highlight_doc',
            array(
        'section'     => 'jot_shop_highlight',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/jot-shop-pro/#highlight-section',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
  )));  
  // woocommerce 
  $wp_customize->add_setting('jot_shop_product_style_link_more', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_product_style_link_more',
            array(
        'section'     => 'jot-shop-woo-shop',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/jot-shop-pro/#style-product',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
    )));
$wp_customize->add_setting('jot_shop_single_product_link_more', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_single_product_link_more',
            array(
        'section'     => 'jot-shop-woo-single-product',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/jot-shop-pro/#single-product',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
    )));
$wp_customize->add_setting('jot_shop_cart_link_more', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_cart_link_more',
            array(
        'section'     => 'jot-shop-woo-cart-page',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/jot-shop-pro/#cart-page',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
    )));
$wp_customize->add_setting('jot_shop_shop_page_more', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_shop_page_more',
            array(
        'section'     => 'jot-shop-woo-shop-page',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/jot-shop-pro/#shop-page',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>  100,
    )));
// color
$wp_customize->add_setting('jot_shop_global_clr_more', array(
    'sanitize_callback' => 'jot_shop_sanitize_text',
    ));
$wp_customize->add_control(new Jot_Shop_Misc_Control( $wp_customize, 'jot_shop_global_clr_more',
            array(
        'section'     => 'jot-shop-gloabal-color',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/jot-shop-pro/#global-color',
        'description' => esc_html__( 'To know more go with this', 'jot-shop' ),
        'priority'   =>100,
    )));

}
add_action('customize_register','jot_shop_pro_front_customize_register',999);