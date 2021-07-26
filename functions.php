<?php
/**
 * big store functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Jot Shop
 * @since 1.0.0
 */
/**
 * Theme functions and definitions
 */
if ( ! function_exists( 'jot_shop_setup' ) ) :
define( 'JOT_SHOP_THEME_VERSION','1.0.0');
define( 'JOT_SHOP_THEME_DIR', get_template_directory() . '/' );
define( 'JOT_SHOP_THEME_URI', get_template_directory_uri() . '/' );
define( 'JOT_SHOP_THEME_SETTINGS', 'jot-shop-settings' );
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_jot_shop_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function jot_shop_setup(){
		/*
		 * Make theme available for translation.
		 */
		load_theme_textdomain( 'jot-shop', get_template_directory() . '/languages' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'woocommerce' );
	
		// Add support for Block Styles.
        add_theme_support( 'wp-block-styles' );

        // Add support for full and wide align images.
        add_theme_support( 'align-wide' );

        // Add support for editor styles.
        add_theme_support( 'editor-styles' );

        // Enqueue editor styles.
        add_editor_style( 'style-editor.css' );
        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		/**
		 * Add support for core custom logo.
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		// Add support for Custom Header.
		add_theme_support( 'custom-header', 

			apply_filters( 'jot_shop_custom_header_args', array(
				'default-image' => '',
				'flex-height'   => true,
				'header-text'   => false,
				'video'          => false,
		) 


		) );
		// Add support for Custom Background.
         $args = array(
	    'default-color' => 'f1f1f1',
        );
        add_theme_support( 'custom-background',$args );
        
        $GLOBALS['content_width'] = apply_filters( 'jot_shop_content_width', 640 );
        add_theme_support( 'woocommerce', array(
                                                 'thumbnail_image_width' => 320,
                                             ) );
         // Recommend plugins
        add_theme_support( 'recommend-plugins', array(
             'themehunk-customizer' => array(
                'name' => esc_html__( 'Themehunk Customizer', 'jot-shop' ),
                'active_filename' => 'themehunk-customizer/themehunk-customizer.php',
            ),
            'woocommerce' => array(
                'name' => esc_html__( 'Woocommerce', 'jot-shop' ),
                'active_filename' => 'woocommerce/woocommerce.php',
            ),
            'woo-smart-wishlist' => array(
                 'name' => esc_html__( 'WPC Smart Wishlist for WooCommerce', 'jot-shop' ),
                 'active_filename' => 'woo-smart-wishlist/wpc-smart-wishlist.php',
             ),
            'woo-smart-compare' => array(
                 'name' => esc_html__( 'WPC Smart Compare for WooCommerce', 'jot-shop' ),
                 'active_filename' => 'woo-smart-compare/wpc-smart-compare.php',
             ),
            'lead-form-builder' => array(
                'name' => esc_html__( 'Lead Form Builder', 'jot-shop' ),
                'active_filename' => 'lead-form-builder/lead-form-builder.php',
            ),
            'wp-popup-builder' => array(
                'name' => esc_html__( 'WP Popup Builder – Popup Forms & Newsletter', 'jot-shop' ),
                'active_filename' => 'wp-popup-builder/wp-popup-builder.php',
            ), 
            'one-click-demo-import' => array(
                'name' => esc_html__( 'One Click Demo Import', 'jot-shop' ),
                'active_filename' => 'one-click-demo-import/one-click-demo-import.php',
            ),
        ) );

        // Useful plugins
        add_theme_support( 'useful-plugins', array(
             'themehunk-megamenu-plus' => array(
                'name' => esc_html__( 'Megamenu plugin from Themehunk.', 'jot-shop' ),
                'active_filename' => 'themehunk-megamenu-plus/themehunk-megamenu.php',
            ),
        ) );
	}
endif;
add_action( 'after_setup_theme', 'jot_shop_setup' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 */
/**
 * Register widget area.
 */
function jot_shop_widgets_init(){
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'jot-shop' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here to appear in your primary sidebar.', 'jot-shop' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="jot-shop-widget-content">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Above Header First Widget', 'jot-shop' ),
		'id'            => 'top-header-widget-col1',
		'description'   => esc_html__( 'Add widgets here to appear in top header.', 'jot-shop' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Above Header Second Widget', 'jot-shop' ),
		'id'            => 'top-header-widget-col2',
		'description'   => esc_html__( 'Add widgets here to appear in top header.', 'jot-shop' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Above Header Third Widget', 'jot-shop' ),
		'id'            => 'top-header-widget-col3',
		'description'   => esc_html__( 'Add widgets here to appear in top header.', 'jot-shop' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar(array(
		'name'          => esc_html__( 'Main Header Widget', 'jot-shop' ),
		'id'            => 'main-header-widget',
		'description'   => esc_html__( 'Add widgets here to appear in main header.', 'jot-shop' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar(array(
		'name'          => esc_html__( 'Footer Top First Widget', 'jot-shop' ),
		'id'            => 'footer-top-first',
		'description'   => esc_html__( 'Add widgets here to appear in top footer.', 'jot-shop' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Footer Top Second Widget', 'jot-shop' ),
		'id'            => 'footer-top-second',
		'description'   => esc_html__( 'Add widgets here to appear in top footer.', 'jot-shop' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Footer Top Third Widget', 'jot-shop' ),
		'id'            => 'footer-top-third',
		'description'   => esc_html__( 'Add widgets here to appear in top footer.', 'jot-shop' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Footer Below First Widget', 'jot-shop' ),
		'id'            => 'footer-below-first',
		'description'   => esc_html__( 'Add widgets here to appear in top footer.', 'jot-shop' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Footer Below Second Widget', 'jot-shop' ),
		'id'            => 'footer-below-second',
		'description'   => esc_html__( 'Add widgets here to appear in top footer.', 'jot-shop' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Footer Below Third Widget', 'jot-shop' ),
		'id'            => 'footer-below-third',
		'description'   => esc_html__( 'Add widgets here to appear in top footer.', 'jot-shop' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	for ( $i = 1; $i <= 4; $i++ ){
		register_sidebar( array(
			'name'          => sprintf( esc_html__( 'Footer Widget Area %d', 'jot-shop' ), $i ),
			'id'            => 'footer-' . $i,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
	
}
add_action( 'widgets_init', 'jot_shop_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function jot_shop_scripts(){
	// enqueue css
	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	wp_enqueue_style( 'font-awesome', JOT_SHOP_THEME_URI . 'third-party/fonts/font-awesome/css/font-awesome.css', '', JOT_SHOP_THEME_VERSION );
	wp_enqueue_style( 'animate', JOT_SHOP_THEME_URI . 'css/animate.css','',JOT_SHOP_THEME_VERSION);
	wp_enqueue_style( 'owl.carousel-css', JOT_SHOP_THEME_URI . 'css/owl.carousel.css','',JOT_SHOP_THEME_VERSION);
	wp_enqueue_style( 'jot-shop-pro-menu', JOT_SHOP_THEME_URI . 'css/jot-shop-menu.css','',JOT_SHOP_THEME_VERSION);
    if((bool)get_theme_mod('jot_shop_rtl')==true){
	wp_enqueue_style( 'jot-shop-rtl-style', JOT_SHOP_THEME_URI . 'css/rtl.css','',JOT_SHOP_THEME_VERSION);	
	}else{
	wp_enqueue_style( 'jot-shop-main-style', JOT_SHOP_THEME_URI . 'css/style.css','',JOT_SHOP_THEME_VERSION);	
	}	

	wp_enqueue_style( 'jot-shop-style', get_stylesheet_uri(), array(), JOT_SHOP_THEME_VERSION );
	//wp_add_inline_style('jot-shop-style', jot_shop_custom_style());
	
    //enqueue js
    wp_enqueue_script("jquery-effects-core",array( 'jquery' ));
    wp_enqueue_script( 'jquery-ui-autocomplete',array( 'jquery' ),'',true );
    wp_enqueue_script('imagesloaded');
    wp_enqueue_script('jot-shop-menu-js', JOT_SHOP_THEME_URI .'js/jot-shop-menu.js', array( 'jquery' ), '1.0.0', true );
   
    wp_enqueue_script('owl.carousel-js', JOT_SHOP_THEME_URI .'js/owl.carousel.js', array( 'jquery' ), '1.0.1', true );
   
    wp_enqueue_script('jot-shop-accordian-menu-js', JOT_SHOP_THEME_URI .'js/jot-shop-accordian-menu.js', array( 'jquery' ), JOT_SHOP_THEME_VERSION , true );

    wp_enqueue_script( 'jot-shop-custom-js', JOT_SHOP_THEME_URI .'js/jot-shop-custom.js', array( 'jquery' ), JOT_SHOP_THEME_VERSION , true );
     $jotshoplocalize = array(
				'jot_shop_top_slider_optn' => get_theme_mod('jot_shop_top_slider_optn',false),
				'jot_shop_move_to_top_optn' => get_theme_mod('jot_shop_move_to_top',false),
				'jot_shop_sticky_header_effect' => get_theme_mod('jot_shop_sticky_header_effect','scrldwmn'),
				'jot_shop_slider_speed' => get_theme_mod('jot_shop_slider_speed','3000'),
				'jot_shop_rtl' => (bool)get_theme_mod('jot_shop_rtl'),
				
			);
    wp_localize_script( 'jot-shop-custom-js', 'jot_shop',  $jotshoplocalize);
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ){
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jot_shop_scripts' );
/********************************************************/
// Adding Dashicons in WordPress Front-end
/********************************************************/
add_action( 'wp_enqueue_scripts', 'jot_shop_load_dashicons_front_end' );
function jot_shop_load_dashicons_front_end(){
  wp_enqueue_style( 'dashicons' );
}

/**
 * Load init.
 */
require_once trailingslashit(JOT_SHOP_THEME_DIR).'inc/init.php';
//require_once trailingslashit(JOT_SHOP_THEME_DIR).'jot-shop-pro/jot-shop-pro.php';



//custom function conditional check for blog page
function jot_shop_is_blog (){
    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}


if ( ! function_exists( 'wp_body_open' ) ) {

	/**
	 * Shim for wp_body_open, ensuring backward compatibility with versions of WordPress older than 5.2.
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}

//extra function


function jot_shop_pro_scripts(){
//wp_add_inline_style('jot-shop-style', jot_shop_pro_custom_style());
wp_add_inline_style('jot-shop-style', jot_shop_typography_style());
wp_enqueue_script( 'thunk-jot-shop-woo-js', JOT_SHOP_THEME_URI.'inc/woo-extra/js/woo.js', array( 'jquery' ), '1.0.0',true );
 $localize = array(
                'ajaxUrl'  => admin_url( 'admin-ajax.php' ),
                //brand
                'jot_shop_brand_slider_optn' => get_theme_mod('jot_shop_brand_slider_optn',false),
                'jot_shop_brand_slider_speed' => get_theme_mod('jot_shop_brand_slider_speed','3000'),
                //cat-tab-list-filter
                'jot_shop_single_row_slide_cat_tb_lst' => get_theme_mod('jot_shop_single_row_slide_cat_tb_lst',false),
                'jot_shop_cat_tb_lst_slider_optn' => get_theme_mod('jot_shop_cat_tb_lst_slider_optn',false),
                'jot_shop_cat_tb_lst_slider_speed' => get_theme_mod('jot_shop_cat_tb_lst_slider_speed','3000'),
            );
 wp_localize_script( 'thunk-jot-shop-woo-js', 'jotshop',  $localize );  
 // pagination
    wp_enqueue_script('jot-shop-pagination', JOT_SHOP_THEME_URI.'inc/woo-extra/js/shop-pagination.js', array( 'jquery' ), '2.0.0', true );
    wp_localize_script('jot-shop-pagination', 'jotshoppagi', apply_filters( 'open_theme_js_localize',array('ajax_url' => admin_url( 'admin-ajax.php' ))));
}
 add_action( 'wp_enqueue_scripts', 'jot_shop_pro_scripts' );

function jot_shop_pro_customizer_script_registers(){
wp_enqueue_script( 'jot_shop_pro_custom_customizer_script', JOT_SHOP_THEME_URI . 'customizer-front/js/customizer.js', array("jquery"), '', true ); 
wp_enqueue_script( 'jot_shop_customizer_heading', JOT_SHOP_THEME_URI .'customizer-front/heading/js/heading-customizer.js', array("jquery"), '', true );

}
add_action('customize_controls_enqueue_scripts', 'jot_shop_pro_customizer_script_registers',999);
     


function jot_shop_pro_customizer_style_registers(){
    wp_enqueue_style('jot_shop_customizer_heading_styles', JOT_SHOP_THEME_URI .'customizer-front/heading/css/heading-style.css');
}
add_action('customize_controls_print_styles', 'jot_shop_pro_customizer_style_registers');

/**
 * Used by hook: 'customize_preview_init'
 * 
 * @see add_action('customize_preview_init',$func)
 */
function jot_shop_pro_customizer_live_preview(){
wp_enqueue_script( 'jot_shop_pro_live_customizer', JOT_SHOP_THEME_URI .'/customizer-front/js/live-customizer.js', array("jquery"),'', true );  
}
add_action('customize_preview_init','jot_shop_pro_customizer_live_preview');
