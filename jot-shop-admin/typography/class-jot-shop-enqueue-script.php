<?php
/**
 * Loader Functions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme Enqueue Scripts
 */
if ( ! class_exists( 'Jot_Shop_Enqueue_Scripts' ) ) {


	/**
	 * Theme Enqueue Scripts
	 */
	class Jot_Shop_Enqueue_Scripts {

		/**
		 * Class styles.
		 *
		 * @access public
		 * @var $styles Enqueued styles.
		 */
		public static $styles;

		/**
		 * Class scripts.
		 *
		 * @access public
		 * @var $scripts Enqueued scripts.
		 */
		public static $scripts;

		/**
		 * Constructor
		 */
		public function __construct() {

			add_action( 'jot_shop_get_fonts', array( $this, 'add_fonts' ), 1 );
			add_action( 'wp_enqueue_scripts', array( $this, 'font_enqueue_scripts' ), 1 );
			
		}

        /**
		 * Add Fonts
		 */
		public function add_fonts() {
			// body
			$font_family  = get_theme_mod( 'jot_shop_body_fontfamily' );
			$font_weight  = get_theme_mod( 'jot_shop_body_fontweight' );
			Jot_Shop_Fonts::add_font( $font_family, $font_weight );
            // title
		    $title_font_family  = get_theme_mod( 'jot_shop_title_fontfamily' );
			$title_font_weight  = get_theme_mod( 'jot_shop_sanitize_font_weight' );
			Jot_Shop_Fonts::add_font( $title_font_family, $title_font_weight );
			// h1
		    $h1_font_family  = get_theme_mod( 'jot_shop_h1_fontfamily' );
			$h1_font_weight  = get_theme_mod( 'jot_shop_h1_fontweight' );
			Jot_Shop_Fonts::add_font( $h1_font_family, $h1_font_weight );
			// h2
		    $h2_font_family  = get_theme_mod( 'jot_shop_h2_fontfamily' );
			$h2_font_weight  = get_theme_mod( 'jot_shop_h2_fontweight' );
			Jot_Shop_Fonts::add_font( $h2_font_family, $h2_font_weight );
			// h3
		    $h3_font_family  = get_theme_mod( 'jot_shop_h3_fontfamily' );
			$h3_font_weight  = get_theme_mod( 'jot_shop_h3_fontweight' );
			Jot_Shop_Fonts::add_font( $h3_font_family, $h3_font_weight );
			// h4
		    $h4_font_family  = get_theme_mod( 'jot_shop_h4_fontfamily' );
			$h4_font_weight  = get_theme_mod( 'jot_shop_h4_fontweight' );
			Jot_Shop_Fonts::add_font( $h4_font_family, $h4_font_weight );
			// h5
		    $h5_font_family  = get_theme_mod( 'jot_shop_h5_fontfamily' );
			$h5_font_weight  = get_theme_mod( 'jot_shop_h5_fontweight' );
			Jot_Shop_Fonts::add_font( $h5_font_family, $h5_font_weight );
			// h6
		    $h6_font_family  = get_theme_mod( 'jot_shop_h6_fontfamily' );
			$h6_font_weight  = get_theme_mod( 'jot_shop_h6_fontweight' );
			Jot_Shop_Fonts::add_font( $h6_font_family, $h6_font_weight );
		}
		/**
		 * Enqueue Scripts
		 */
		public function font_enqueue_scripts() {
		//Fonts - Render Fonts.
			Jot_Shop_Fonts::render_fonts();
		}




   }
   new Jot_Shop_Enqueue_Scripts();

}