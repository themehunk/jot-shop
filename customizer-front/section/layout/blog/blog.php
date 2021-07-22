<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/*********************/
    //blog post pagination
    /*********************/
   $wp_customize->add_setting('jot_shop_blog_post_pagination', array(
        'default'        => 'num',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('jot_shop_blog_post_pagination', array(
        'settings' => 'jot_shop_blog_post_pagination',
        'label'   => __('Post Pagination','jot-shop'),
        'section' => 'jot-shop-section-blog-group',
        'type'    => 'select',
        'choices' => array(
        'num'     => __('Numbered','jot-shop'),
        'click'   => __('Load More','jot-shop'), 
        'scroll'  => __('Infinite Scroll','jot-shop'), 
        ),
        'priority'   =>13,
    ));