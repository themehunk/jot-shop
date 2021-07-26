<?php 
/**
 * all file includeed
 *
 * @param  
 * @return mixed|string
 */
get_template_part( 'inc/admin-function');
get_template_part( 'inc/header-function');
get_template_part( 'inc/admin-extra-function');
get_template_part( 'inc/footer-function');
get_template_part( 'inc/blog-function');
// theme-option
//include_once(ABSPATH.'wp-admin/includes/plugin.php');
//if ( !is_plugin_active('jot-shop-pro/jot-shop-pro.php') ) {
get_template_part( 'lib/theme-option/class-jot-shop-admin-settings');
get_template_part( 'lib/theme-option/theme-option-function');
//}
//breadcrumbs
get_template_part( 'lib/breadcrumbs/breadcrumbs');
//page-post-meta
get_template_part( 'lib/page-meta-box/jotshop-page-meta-box');
//custom-style
//get_template_part( 'inc/jot-shop-custom-style');

//pagination
//get_template_part( 'inc/pagination/pagination');
//get_template_part( 'inc/pagination/infinite-scroll');

// customizer
get_template_part('customizer/models/class-jot-shop-singleton');
get_template_part('customizer/models/class-jot-shop-defaults-models');
get_template_part('customizer/repeater/class-jot-shop-repeater');
get_template_part('customizer/extend-customizer/class-jot-shop-wp-customize-panel');
get_template_part('customizer/extend-customizer/class-jot-shop-wp-customize-section');
get_template_part('customizer/customizer-radio-image/class/class-jot-shop-customize-control-radio-image');
get_template_part('customizer/customizer-range-value/class/class-jot-shop-customizer-range-value-control');
get_template_part('customizer/customizer-scroll/class/class-jot-shop-customize-control-scroll');
get_template_part('customizer/customize-focus-section/jot-shop-focus-section');
get_template_part('customizer/color/class-control-color');
get_template_part('customizer/customize-buttonset/class-control-buttonset');
get_template_part('customizer/sortable/class-open-control-sortable');
get_template_part('customizer/background/class-jot-shop-background-image-control');
get_template_part('customizer/customizer-tabs/class-jot-shop-customize-control-tabs');
get_template_part('customizer/customizer-toggle/class-jot-shop-toggle-control');

get_template_part('customizer/custom-customizer');
get_template_part('customizer/customizer-constant');
get_template_part('customizer/customizer');
/******************************/
// woocommerce
/******************************/
get_template_part( 'inc/woocommerce/woo-core');
get_template_part( 'inc/woocommerce/woo-function');
get_template_part('inc/woocommerce/woocommerce-ajax');

//woocommerce extra 

get_template_part( 'inc/woo-extra/jot-shop-woo');
get_template_part( 'inc/woo-extra/woo-ajax');


//customizer-frontpage
get_template_part('customizer-front/customizer');
get_template_part('customizer-front/customizer-constant');
get_template_part('customizer-front/heading/class-heading');
get_template_part('customizer-front/typography/class-jot-shop-control-typography');


//typography
get_template_part('jot-shop-admin/typography/class-jot-shop-enqueue-script');
get_template_part('jot-shop-admin/typography/class-jot-shop-filesystem');
get_template_part('jot-shop-admin/typography/class-jot-shop-font-families');
//get_template_part('customizer-front/typography/class-jot-shop-control-typography');
get_template_part('jot-shop-admin/typography/jot-shop-typography-style');
