/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ){
/**
 * Dynamic Internal/Embedded Style for a Control
 */
function jot_shop_pro_add_dynamic_css( control, style ){
      control = control.replace( '[', '-' );
      control = control.replace( ']', '' );
      jQuery( 'style#' + control ).remove();

      jQuery( 'head' ).append(
            '<style id="' + control + '">' + style + '</style>'
      );
}
/**
 * Responsive Spacing CSS
 */
function jot_shop_pro_responsive_spacing( control, selector, type, side ){
	wp.customize( control, function( value ){
		value.bind( function( value ){
			var sidesString = "";
			var spacingType = "padding";
			if ( value.desktop.top || value.desktop.right || value.desktop.bottom || value.desktop.left || value.tablet.top || value.tablet.right || value.tablet.bottom || value.tablet.left || value.mobile.top || value.mobile.right || value.mobile.bottom || value.mobile.left ) {
				if ( typeof side != undefined ) {
					sidesString = side + "";
					sidesString = sidesString.replace(/,/g , "-");
				}
				if ( typeof type != undefined ) {
					spacingType = type + "";
				}
				// Remove <style> first!
				control = control.replace( '[', '-' );
				control = control.replace( ']', '' );
				jQuery( 'style#' + control + '-' + spacingType + '-' + sidesString ).remove();

				var desktopPadding = '',
					tabletPadding = '',
					mobilePadding = '';

				var paddingSide = ( typeof side != undefined ) ? side : [ 'top','bottom','right','left' ];

				jQuery.each(paddingSide, function( index, sideValue ){
					if ( '' != value['desktop'][sideValue] ) {
						desktopPadding += spacingType + '-' + sideValue +': ' + value['desktop'][sideValue] + value['desktop-unit'] +';';
					}
				});

				jQuery.each(paddingSide, function( index, sideValue ){
					if ( '' != value['tablet'][sideValue] ) {
						tabletPadding += spacingType + '-' + sideValue +': ' + value['tablet'][sideValue] + value['tablet-unit'] +';';
					}
				});

				jQuery.each(paddingSide, function( index, sideValue ){
					if ( '' != value['mobile'][sideValue] ) {
						mobilePadding += spacingType + '-' + sideValue +': ' + value['mobile'][sideValue] + value['mobile-unit'] +';';
					}
				});

				// Concat and append new <style>.
				jQuery( 'head' ).append(
					'<style id="' + control + '-' + spacingType + '-' + sidesString + '">'
					+ selector + '	{ ' + desktopPadding +' }'
					+ '@media (max-width: 768px) {' + selector + '	{ ' + tabletPadding + ' } }'
					+ '@media (max-width: 544px) {' + selector + '	{ ' + mobilePadding + ' } }'
					+ '</style>'
				);

			} else {
				wp.customize.preview.send( 'refresh' );
				jQuery( 'style#' + control + '-' + spacingType + '-' + sidesString ).remove();
			}

		} );
	} );
}
/**
 * Apply CSS for the element
 */
function jot_shop_pro_css( control, css_property, selector, unit ){

	wp.customize( control, function( value ) {
		value.bind( function( new_value ) {

			// Remove <style> first!
			control = control.replace( '[', '-' );
			control = control.replace( ']', '' );

			if ( new_value ){
				/**
				 *	If ( unit == 'url' ) then = url('{VALUE}')
				 *	If ( unit == 'px' ) then = {VALUE}px
				 *	If ( unit == 'em' ) then = {VALUE}em
				 *	If ( unit == 'rem' ) then = {VALUE}rem.
				 */
				if ( 'undefined' != typeof unit) {
					if ( 'url' === unit ) {
						new_value = 'url(' + new_value + ')';
					} else {
						new_value = new_value + unit;
					}
				}

				// Remove old.
				jQuery( 'style#' + control ).remove();

				// Concat and append new <style>.
				jQuery( 'head' ).append(
					'<style id="' + control + '">'
					+ selector + '	{ ' + css_property + ': ' + new_value + ' }'
					+ '</style>'
				);

			} else {

				wp.customize.preview.send( 'refresh' );

				// Remove old.
				jQuery( 'style#' + control ).remove();
			}

		} );
	} );
}
/*******************************/
// Range slider live customizer
/*******************************/
function bigStoreProGetCss( arraySizes, settings, to ) {
    'use strict';
    var data, desktopVal, tabletVal, mobileVal,
        className = settings.styleClass, i = 1;

    var val = JSON.parse( to );
    if ( typeof( val ) === 'object' && val !== null ) {
        if ('desktop' in val) {
            desktopVal = val.desktop;
        }
        if ('tablet' in val) {
            tabletVal = val.tablet;
        }
        if ('mobile' in val) {
            mobileVal = val.mobile;
        }
    }

    for ( var key in arraySizes ) {
        // skip loop if the property is from prototype
        if ( ! arraySizes.hasOwnProperty( key )) {
            continue;
        }
        var obj = arraySizes[key];
        var limit = 0;
        var correlation = [1,1,1];
        if ( typeof( val ) === 'object' && val !== null ) {

            if( typeof obj.limit !== 'undefined'){
                limit = obj.limit;
            }

            if( typeof obj.correlation !== 'undefined'){
                correlation = obj.correlation;
            }

            data = {
                desktop: ( parseInt(parseFloat( desktopVal ) / correlation[0]) + obj.values[0]) > limit ? ( parseInt(parseFloat( desktopVal ) / correlation[0]) + obj.values[0] ) : limit,
                tablet: ( parseInt(parseFloat( tabletVal ) / correlation[1]) + obj.values[1] ) > limit ? ( parseInt(parseFloat( tabletVal ) / correlation[1]) + obj.values[1] ) : limit,
                mobile: ( parseInt(parseFloat( mobileVal ) / correlation[2]) + obj.values[2] ) > limit ? ( parseInt(parseFloat( mobileVal ) / correlation[2]) + obj.values[2] ) : limit
            };
        } else {
            if( typeof obj.limit !== 'undefined'){
                limit = obj.limit;
            }

            if( typeof obj.correlation !== 'undefined'){
                correlation = obj.correlation;
            }
            data =( parseInt( parseFloat( to ) / correlation[0] ) ) + obj.values[0] > limit ? ( parseInt( parseFloat( to ) / correlation[0] ) ) + obj.values[0] : limit;
        }
        settings.styleClass = className + '-' + i;
        settings.selectors  = obj.selectors;

        bigStoreProSetCss( settings, data );
        i++;
    }
}
function bigStoreProSetCss( settings, to ){
    'use strict';
    var result     = '';
    var styleClass = jQuery( '.' + settings.styleClass );
    if ( to !== null && typeof to === 'object' ){
        jQuery.each(
            to, function ( key, value ) {
                var style_to_add;
                if ( settings.selectors === '.container' ){
                    style_to_add = settings.selectors + '{ ' + settings.cssProperty + ':' + value + settings.propertyUnit + '; max-width: 100%; }';
                } else {
                    style_to_add = settings.selectors + '{ ' + settings.cssProperty + ':' + value + settings.propertyUnit + '}';
                }
                switch ( key ) {
                    case 'desktop':
                        result += style_to_add;
                        break;
                    case 'tablet':
                        result += '@media (max-width: 767px){' + style_to_add + '}';
                        break;
                    case 'mobile':
                        result += '@media (max-width: 544px){' + style_to_add + '}';
                        break;
                }
            }
        );
        if ( styleClass.length > 0 ) {
            styleClass.text( result );
        } else {
            jQuery( 'head' ).append( '<style type="text/css" class="' + settings.styleClass + '">' + result + '</style>' );
        }
    } else {
        jQuery( settings.selectors ).css( settings.cssProperty, to + 'px' );
    }
}	

// top-slider	
jot_shop_pro_css( 'jot_shop_slider_box_bg_clr','background', '.thunk-slider-content-bar');
jot_shop_pro_css( 'jot_shop_slider_hd_clr','color', '.thunk-slider-content-bar .slider-cat-title a');	
wp.customize( 'jot_shop_slider_spcl_clr', function( setting ){
        setting.bind( function( cssval ){
                var dynamicStyle = '';
                 dynamicStyle += '.slider-cat-title a:before,.thunk-slider-multi-item a:hover{ color: ' + cssval + '} ';
                 dynamicStyle += '.slider-content-caption a.slide-btn:hover,.slide-layout-4 .item-button a:hover{ background: ' + cssval + '} ';
                jot_shop_pro_add_dynamic_css( 'jot_shop_slider_spcl_clr', dynamicStyle );

        } );
} );
jot_shop_pro_css( 'jot_shop_slider_cat_tle_clr','color', '.thunk-product-cat-list.slider a');
jot_shop_pro_css( 'jot_shop_slider_slide_hd_clr','color', '.slider-content-caption h2 a,.thunk-slider-multi-item a');
jot_shop_pro_css( 'jot_shop_slider_slide_sbhd_clr','color', '.slider-content-caption p');
jot_shop_pro_css( 'jot_shop_slider_btn_bg_clr','background', '.slider-content-caption a.slide-btn,.slide-layout-4 .item-button a');
jot_shop_pro_css( 'jot_shop_slider_btn_txt_clr','color', '.slider-content-caption a.slide-btn,.slide-layout-4 .item-button a');
jot_shop_pro_css( 'jot_shop_slider_nav_clr','color', '.thunk-top2-slide.owl-carousel .owl-nav button');
jot_shop_pro_css( 'jot_shop_slider_nav_bg_clr','background', '.thunk-top2-slide.owl-carousel .owl-nav button');
// woo category
jot_shop_pro_css( 'jot_shop_cat_sec_bg_clr','background', '.thunk-category-slide-section');
jot_shop_pro_css( 'jot_shop_cat_sec_hd_clr','color', '.thunk-category-slide-section .thunk-title .title');
jot_shop_pro_css( 'jot_shop_cat_sec_spcl_clr','color', '.thunk-category-slide-section .thunk-title .title:before,.thunk-category-slide-section .thunk-cat-title a:hover,.cat-layout-3 .cat-content-3 a:hover,.cat-layout-3 .cat-content-3 .hover-area .cat-title:hover');
jot_shop_pro_css( 'jot_shop_cat_sec_spcl_clr','background', '.thunk-category-slide-section .thunk-heading-wrap:before, .cat-list a:after');
jot_shop_pro_css( 'jot_shop_cat_sec_title_clr','color', '.thunk-category-slide-section .thunk-cat-title a,.cat-list a span,.cat-layout-3 .cat-content-3 a,.cat-layout-3 .cat-content-3 .hover-area .cat-title,.prd-total-number');
// product carousal

jot_shop_pro_css( 'jot_shop_product_slide_bg_clr','background', '.thunk-product-slide-section');
jot_shop_pro_css( 'jot_shop_product_slide_hd_clr','color', '.thunk-product-slide-section .thunk-title .title');
jot_shop_pro_css( 'jot_shop_product_slide_sec_spc_clr','color', '.thunk-product-slide-section .thunk-title .title:before,.thunk-product-slide-section .star-rating::before,.thunk-product-slide-section .thunk-product-content .star-rating,.thunk-product-slide-section .thunk-woo-product-list .woocommerce-loop-product__title a:hover');
jot_shop_pro_css( 'jot_shop_product_slide_sec_spc_clr','background', '.thunk-product-slide-section .thunk-heading-wrap:before,.thunk-product-slide-section .thunk-product-hover .thunk-wishlist a.add_to_wishlist:hover,.woocommerce .thunk-product-slide-section .thunk-product-hover a.add_to_cart_button:hover,.thunk-product-slide-section .thunk-quickview a:hover,.thunk-product-slide-section .thunk-compare .compare-button a.compare.button:hover,.thunk-product-slide-section .thunk-product .woosw-btn:hover,.thunk-product-slide-section .thunk-product .wooscp-btn:hover');
jot_shop_pro_css( 'jot_shop_product_slide_product_price_clr','color', '.woocommerce .thunk-product-slide-section .thunk-woo-product-list .price,.woocommerce .thunk-product-slide-section .thunk-woo-product-list .price del');
jot_shop_pro_css( 'jot_shop_product_slide_product_icon_bg_clr','background', '.thunk-product-slide-section .thunk-product .woosw-btn,.thunk-product-slide-section .thunk-product .wooscp-btn,.thunk-product-slide-section .thunk-product-hover .thunk-wishlist a.add_to_wishlist,.woocommerce .thunk-product-slide-section .thunk-product-hover a.add_to_cart_button,.thunk-product-slide-section .thunk-quickview a,.thunk-product-slide-section .thunk-compare .compare-button a.compare.button');
jot_shop_pro_css( 'jot_shop_product_slide_product_icon_clr','color', '.thunk-product-slide-section .thunk-product .woosw-btn,.thunk-product-slide-section .thunk-product .wooscp-btn,.thunk-product-slide-section .thunk-product-hover .thunk-wishlist a.add_to_wishlist,.woocommerce .thunk-product-slide-section .thunk-product-hover a.add_to_cart_button,.thunk-product-slide-section .thunk-quickview a,.thunk-product-slide-section .thunk-compare .compare-button a.compare.button,.thunk-product-slide-section .thunk-product-hover .thunk-wishlist a.add_to_wishlist:hover,.woocommerce .thunk-product-slide-section .thunk-product-hover a.add_to_cart_button:hover,.thunk-product-slide-section .thunk-quickview a:hover,.thunk-product-slide-section .thunk-compare .compare-button a.compare.button:hover');
jot_shop_pro_css( 'jot_shop_product_slide_product_sale_bg_clr','background', '.woocommerce .thunk-product-slide-section .thunk-woo-product-list span.onsale');
jot_shop_pro_css( 'jot_shop_product_slide_product_sale_clr','color', '.woocommerce .thunk-product-slide-section .thunk-woo-product-list span.onsale');
jot_shop_pro_css( 'jot_shop_product_slide_product_title_clr','color', '.thunk-product-slide-section .thunk-woo-product-list .woocommerce-loop-product__title a');

// product tabbed carousal
jot_shop_pro_css( 'jot_shop_product_tabbed_slide_bg_clr','background', '.thunk-product-tab-section');
jot_shop_pro_css( 'jot_shop_product_tabbed_slide_hd_txt_clr','color', '.thunk-product-tab-section .thunk-title .title');
jot_shop_pro_css( 'jot_shop_product_tabbed_slide_cat_clr','color', '.thunk-product-tab-section .thunk-cat-tab .tab-link li a');
jot_shop_pro_css( 'jot_shop_product_tabbed_slide_cat_hvr_clr','color', '.thunk-product-tab-section .thunk-cat-tab .tab-link li a.active, .thunk-product-tab-section .thunk-cat-tab .tab-link li a:hover');
jot_shop_pro_css( 'jot_shop_product_tabbed_slide_sec_special_clr','color', '.thunk-product-tab-section .thunk-title .title:before,.thunk-product-tab-section .thunk-product-content .star-rating,.thunk-product-tab-section .star-rating::before,.thunk-product-tab-section .thunk-woo-product-list .woocommerce-loop-product__title a:hover');
jot_shop_pro_css( 'jot_shop_product_tabbed_slide_sec_special_clr','background', '.thunk-product-tab-section .thunk-product .woosw-btn:hover,.thunk-product-tab-section .thunk-product .wooscp-btn:hover,.thunk-product-tab-section .thunk-quickview a:hover,.thunk-product-tab-section .thunk-heading-wrap:before,.thunk-product-tab-section .thunk-product-hover .thunk-wishlist a.add_to_wishlist:hover,.woocommerce .thunk-product-tab-section .thunk-product-hover a.add_to_cart_button:hover,.thunk-product-tab-section .thunk-quickview a:hover,.thunk-product-tab-section .thunk-compare .compare-button a.compare.button:hover');
jot_shop_pro_css( 'jot_shop_product_tabbed_slide_product_price_clr','color', '.woocommerce .thunk-woo-product-list .price');
jot_shop_pro_css( 'jot_shop_product_tabbed_slide_product_title_clr','color', '.thunk-product-tab-section .thunk-woo-product-list .woocommerce-loop-product__title a');
jot_shop_pro_css( 'jot_shop_product_tabbed_slide_sale_bg_clr','background', '.woocommerce .thunk-product-tab-section .thunk-woo-product-list span.onsale');
jot_shop_pro_css( 'jot_shop_product_tabbed_slide_sale_clr','color', '.woocommerce .thunk-product-tab-section .thunk-woo-product-list span.onsale');
jot_shop_pro_css( 'jot_shop_product_tabbed_slide_icon_bg_clr','background', '.thunk-product-tab-section .thunk-product .woosw-btn,.thunk-product-tab-section .thunk-product .wooscp-btn,.thunk-product-tab-section .thunk-product-hover .thunk-wishlist a.add_to_wishlist,.woocommerce .thunk-product-tab-section .thunk-product-hover a.add_to_cart_button,.thunk-product-tab-section .thunk-quickview a,.thunk-product-tab-section .thunk-compare .compare-button a.compare.button');
jot_shop_pro_css( 'jot_shop_product_tabbed_slide_icon_clr','color', '.thunk-product-tab-section .thunk-product .woosw-btn,.thunk-product-tab-section .thunk-product .wooscp-btn,.thunk-product-tab-section .thunk-quickview a,.thunk-product-tab-section .thunk-product-hover .thunk-wishlist a.add_to_wishlist,.woocommerce .thunk-product-tab-section .thunk-product-hover a.add_to_cart_button,.thunk-product-tab-section .thunk-quickview a,.thunk-product-tab-section .thunk-compare .compare-button a.compare.button,.thunk-product-tab-section .thunk-product-hover .thunk-wishlist a.add_to_wishlist:hover,.woocommerce .thunk-product-tab-section .thunk-product-hover a.add_to_cart_button:hover,.thunk-product-tab-section .thunk-quickview a:hover,.thunk-product-tab-section .thunk-compare .compare-button a.compare.button:hover');

// product list
jot_shop_pro_css( 'jot_shop_product_list_hd_clr','color', '.thunk-product-list-section .thunk-title .title');
jot_shop_pro_css( 'jot_shop_product_list_sec_spc_clr','color', '.thunk-product-list-section .thunk-title .title:before,.thunk-product-list-section .thunk-list .thunk-product-content .star-rating,.thunk-product-list-section .thunk-list .thunk-product-content .woocommerce-LoopProduct-title:hover');
jot_shop_pro_css( 'jot_shop_product_list_sec_spc_clr','background', '.thunk-product-list-section .thunk-heading-wrap:before');
jot_shop_pro_css( 'jot_shop_product_list_title_clr','color', '.thunk-product-list-section .thunk-list .thunk-product-content .woocommerce-LoopProduct-title');
jot_shop_pro_css( 'jot_shop_product_list_price_clr','color', '.woocommerce .thunk-product-list-section .thunk-woo-product-list .price,.woocommerce .thunk-product-list-section .thunk-woo-product-list .price del');
jot_shop_pro_css( 'jot_shop_product_list_bg_clr','background', '.thunk-product-list-section');

// product tab list
jot_shop_pro_css( 'jot_shop_product_tab_list_bg_clr','background', '.thunk-product-tab-list-section');
jot_shop_pro_css( 'jot_shop_product_tab_list_hd_clr','color', '.thunk-product-tab-list-section .thunk-title .title');
jot_shop_pro_css( 'jot_shop_product_tab_list_cat_clr','color', '.thunk-product-tab-list-section .thunk-cat-tab .tab-link li a');
jot_shop_pro_css( 'jot_shop_product_tab_list_cat_hvr_clr','color', '.thunk-product-tab-list-section .thunk-cat-tab .tab-link li a.active, .thunk-product-tab-list-section .thunk-cat-tab .tab-link li a:hover');
jot_shop_pro_css( 'jot_shop_product_tab_list_sec_spc_clr','color', '.thunk-product-tab-list-section .thunk-title .title:before,.thunk-product-tab-list-section .thunk-list .thunk-product-content .woocommerce-LoopProduct-title:hover,.thunk-product-tab-list-section .thunk-list .thunk-product-content .star-rating,.thunk-product-tab-list-section .star-rating::before');
jot_shop_pro_css( 'jot_shop_product_tab_list_sec_spc_clr','background', '.thunk-product-tab-list-section .thunk-heading-wrap:before');
jot_shop_pro_css( 'jot_shop_product_tab_list_title_clr','color', '.thunk-product-tab-list-section .thunk-list .thunk-product-content .woocommerce-LoopProduct-title');
jot_shop_pro_css( 'jot_shop_product_tab_list_price_clr','color', '.woocommerce .thunk-product-tab-list-section .thunk-woo-product-list .price,.woocommerce .thunk-product-tab-list-section thunk-woo-product-list .price del');

//ribbon
jot_shop_pro_css( 'jot_shop_ribbon_ovrly_clr','background', '.jotshop-site section.thunk-ribbon-section .content-wrap:before');
jot_shop_pro_css( 'jot_shop_ribbon_hd_clr','color', '.thunk-ribbon-content-col1 h3');
jot_shop_pro_css( 'jot_shop_ribbon_btn_txt_clr','color', '.ribbon-btn');
jot_shop_pro_css( 'jot_shop_ribbon_btn_bg_clr','background', '.ribbon-btn');
jot_shop_pro_css( 'jot_shop_ribbon_btn_txt_hvr_clr','color', '.ribbon-btn:hover');
jot_shop_pro_css( 'jot_shop_ribbon_btn_hvr_bg_clr','background', '.ribbon-btn:hover');

// Higlight
jot_shop_pro_css( 'jot_shop_highlight_bg_clr','background', '.thunk-product-highlight-section');
jot_shop_pro_css( 'jot_shop_highlight_bxbg_clr','background', '.thunk-product-highlight-section .content-wrap');
jot_shop_pro_css( 'jot_shop_highlight_icon_clr','color', '.thunk-product-highlight-section .thunk-hglt-icon');
jot_shop_pro_css( 'jot_shop_highlight_tle_clr','color', '.thunk-hglt-box h6');
jot_shop_pro_css( 'jot_shop_highlight_txt_clr','color', '.thunk-hglt-box p');

//Banner
jot_shop_pro_css( 'jot_shop_banner_bg_clr','background', '.thunk-banner-section');

//brand
jot_shop_pro_css( 'jot_shop_brand_bg_clr','background', '.thunk-brand-section');
jot_shop_pro_css( 'jot_shop_brand_bxbg_clr','background', '.thunk-brand-section .content-wrap');

//product tab image
jot_shop_pro_css( 'jot_shop_tab_prdimg_bg_clr','background', '.thunk-product-image-tab-section');
jot_shop_pro_css( 'jot_shop_tab_prdimg_sec_special_clr','color', '.thunk-product-image-tab-section .thunk-title .title:before,.woocommerce .thunk-product-image-tab-section .thunk-product-content .star-rating,.woocommerce .thunk-product-image-tab-section .star-rating::before');
jot_shop_pro_css( 'jot_shop_tab_prdimg_sec_special_clr','background', '.thunk-product-image-tab-section .thunk-heading-wrap:before,.thunk-product-image-tab-section .thunk-heading-wrap:before,.thunk-product-image-tab-section .thunk-product-hover .thunk-wishlist a.add_to_wishlist:hover,.woocommerce .thunk-product-image-tab-section .thunk-product-hover a.add_to_cart_button:hover,.thunk-product-image-tab-section .thunk-quickview a:hover,.thunk-product-image-tab-section .thunk-compare .compare-button a.compare.button:hover');
jot_shop_pro_css( 'jot_shop_tab_prdimg_sec_special_clr','border-color', '.woocommerce .thunk-product-image-tab-section .thunk-woo-product-list:hover .thunk-product');
jot_shop_pro_css( 'jot_shop_tab_prdimg_hd_txt_clr','color', '.thunk-product-image-cat-slide .thunk-title .title');
jot_shop_pro_css( 'jot_shop_tab_prdimg_cat_clr','color', '.thunk-product-image-cat-slide .thunk-cat-tab .tab-link li a');
jot_shop_pro_css( 'jot_shop_tab_prdimg_cat_hvr_clr','color', '.thunk-product-image-tab-section .thunk-cat-tab .tab-link li a.active, .thunk-product-image-tab-section .thunk-cat-tab .tab-link li a:hover');
jot_shop_pro_css( 'jot_shop_product_tabbed_img_product_title_clr','color', '.thunk-product-image-tab-section .thunk-woo-product-list .woocommerce-loop-product__title a');
jot_shop_pro_css( 'jot_shop_product_tabbed_img_product_price_clr','color', 'woocommerce .thunk-product-image-tab-section .thunk-woo-product-list .price,.woocommerce .thunk-product-image-tab-section .thunk-woo-product-list .price');
jot_shop_pro_css( 'jot_shop_product_tabbed_img_icon_bg_clr','background', '.thunk-product-image-tab-section .thunk-product .woosw-btn,.thunk-product-image-tab-section .thunk-product .wooscp-btn,.woocommerce .thunk-product-image-tab-section .thunk-product-hover a.add_to_cart_button,.woocommerce .thunk-product-image-tab-section .thunk-product-hover .thunk-wishlist a.add_to_wishlist,.thunk-product-image-tab-section .thunk-quickview a,.thunk-product-image-tab-section .thunk-compare .compare-button a.compare.button');
jot_shop_pro_css( 'jot_shop_product_tabbed_img_icon_clr','color', '.thunk-product-image-tab-section .thunk-product .woosw-btn,.thunk-product-image-tab-section .thunk-product .wooscp-btn,.thunk-product-image-tab-section .thunk-product-hover .thunk-wishlist a.add_to_wishlist:hover,.woocommerce .thunk-product-image-tab-section .thunk-product-hover a.add_to_cart_button:hover,.thunk-product-image-tab-section .thunk-quickview a:hover,.thunk-product-image-tab-section .thunk-compare .compare-button a.compare.button:hover,.woocommerce .thunk-product-image-tab-section .thunk-product-hover a.add_to_cart_button,.woocommerce .thunk-product-image-tab-section .thunk-product-hover .thunk-wishlist a.add_to_wishlist,.thunk-product-image-tab-section .thunk-quickview a,.thunk-product-image-tab-section .thunk-compare .compare-button a.compare.button');
jot_shop_pro_css( 'jot_shop_product_tabbed_img_sale_bg_clr','background', '.woocommerce .thunk-product-image-tab-section .thunk-woo-product-list span.onsale');
jot_shop_pro_css( 'jot_shop_product_tabbed_img_sale_clr','color', '.woocommerce .thunk-product-image-tab-section .thunk-woo-product-list span.onsale');

//Big Featured Product Tab Image
jot_shop_pro_css( 'jot_shop_big_ftrd_bg_clr','background','.thunk-feature-product-section');
jot_shop_pro_css( 'jot_shop_big_ftrd_hd_txt_clr','color','.thunk-feature-product-section .thunk-title .title');
jot_shop_pro_css( 'jot_shop_big_ftrd_cat_clr','color','.thunk-feature-product-section .thunk-cat-tab .tab-link li a');
jot_shop_pro_css( 'jot_shop_big_ftrd_cat_hvr_clr','color','.thunk-feature-product-section .thunk-cat-tab .tab-link li a.active, .thunk-feature-product-section .thunk-cat-tab .tab-link li a:hover');
jot_shop_pro_css( 'jot_shop_big_ftrd_sec_special_clr','color', '.thunk-feature-product-section .thunk-title .title:before,.woocommerce .thunk-feature-product-section .thunk-product-content .star-rating,.woocommerce .thunk-feature-product-section .star-rating::before,.thunk-feature-product-section .thunk-woo-product-list .woocommerce-loop-product__title a:hover');
jot_shop_pro_css( 'jot_shop_big_ftrd_product_title_clr','color', '.thunk-feature-product-section .thunk-woo-product-list .woocommerce-loop-product__title a');
jot_shop_pro_css( 'jot_shop_big_ftrd_product_price_clr','color', '.woocommerce .thunk-feature-product-section .thunk-woo-product-list .price,.woocommerce .thunk-feature-product-section .thunk-woo-product-list .price del');
jot_shop_pro_css( 'jot_shop_big_ftrd_icon_bg_clr','background', '.thunk-feature-product-section .thunk-product .woosw-btn,.thunk-feature-product-section .thunk-product .wooscp-btn,.woocommerce .thunk-feature-product-section .thunk-product-hover a.add_to_cart_button,.woocommerce .thunk-feature-product-section .thunk-product-hover .thunk-wishlist a.add_to_wishlist,.thunk-feature-product-section .thunk-quickview a,.thunk-feature-product-section .thunk-compare .compare-button a.compare.button');
jot_shop_pro_css( 'jot_shop_big_ftrd_icon_clr','color', '.thunk-feature-product-section .thunk-product .woosw-btn,.thunk-feature-product-section .thunk-product .wooscp-btn,.thunk-feature-product-section .thunk-heading-wrap:before,.woocommerce .thunk-feature-product-section .thunk-product-hover .thunk-wishlist a.add_to_wishlist:hover,.woocommerce .thunk-feature-product-section .thunk-product-hover a.add_to_cart_button:hover,.thunk-feature-product-section .thunk-quickview a:hover,.thunk-feature-product-section .thunk-compare .compare-button a.compare.button:hover,.woocommerce .thunk-feature-product-section .thunk-product-hover a.add_to_cart_button,.woocommerce .thunk-feature-product-section .thunk-product-hover .thunk-wishlist a.add_to_wishlist,.thunk-feature-product-section .thunk-quickview a,.thunk-feature-product-section .thunk-compare .compare-button a.compare.button');
jot_shop_pro_css( 'jot_shop_big_ftrd_sec_special_clr','background', '.thunk-feature-product-section .thunk-product .woosw-btn:hover,.thunk-feature-product-section .thunk-product .wooscp-btn:hover,.thunk-feature-product-section .thunk-heading-wrap:before,.woocommerce .thunk-feature-product-section .thunk-product-hover .thunk-wishlist a.add_to_wishlist:hover,.woocommerce .thunk-feature-product-section .thunk-product-hover a.add_to_cart_button:hover,.thunk-feature-product-section .thunk-quickview a:hover,.thunk-feature-product-section .thunk-compare .compare-button a.compare.button:hover');
jot_shop_pro_css( 'jot_shop_big_ftrd_sale_bg_clr','background', '.woocommerce .thunk-feature-product-section .thunk-woo-product-list span.onsale');
jot_shop_pro_css( 'jot_shop_big_ftrd_sale_clr','color', '.woocommerce .thunk-feature-product-section .thunk-woo-product-list span.onsale');

// custom section 1
jot_shop_pro_css( 'jot_shop_custm_1_bg_clr','background', '.thunk-custom-one-section');
jot_shop_pro_css( 'jot_shop_custm_1_tle_clr','color', '.thunk-custom-one-section .thunk-title .title');
jot_shop_pro_css( 'jot_shop_custm_1_gloabal_clr','color', '.thunk-custom-one-section .thunk-title .title:before,.thunk-custom-one-section .thunk-woo-product-list .woocommerce-loop-product__title a:hover, .thunk-custom-one-section .widget-cs-bar a:hover');
jot_shop_pro_css( 'jot_shop_custm_1_gloabal_clr','background', '.thunk-custom-one-section .thunk-heading-wrap:before');
jot_shop_pro_css( 'jot_shop_custm_1_wgt_tle_clr','color', '.thunk-custom-one-section .widget-title');
jot_shop_pro_css( 'jot_shop_custm_1_wgt_txt_clr','color', '.thunk-custom-one-section .widget-cs-bar');
jot_shop_pro_css( 'jot_shop_custm_1_wgt_lnk_clr','color', '.thunk-custom-one-section .widget-cs-bar a');
// custom section 2
jot_shop_pro_css( 'jot_shop_custm_2_bg_clr','background', '.thunk-custom-two-section');
jot_shop_pro_css( 'jot_shop_custm_2_tle_clr','color', '.thunk-custom-two-section .thunk-title .title');
jot_shop_pro_css( 'jot_shop_custm_2_gloabal_clr','color', '.thunk-custom-two-section .thunk-title .title:before,.thunk-custom-one-section .thunk-woo-product-list .woocommerce-loop-product__title a:hover, .thunk-custom-one-section .widget-cs-bar a:hover');
jot_shop_pro_css( 'jot_shop_custm_2_gloabal_clr','background', '.thunk-custom-two-section .thunk-heading-wrap:before');
jot_shop_pro_css( 'jot_shop_custm_2_wgt_tle_clr','color', '.thunk-custom-two-section .widget-title');
jot_shop_pro_css( 'jot_shop_custm_2_wgt_txt_clr','color', '.thunk-custom-two-section .widget-cs-bar');
jot_shop_pro_css( 'jot_shop_custm_2_wgt_lnk_clr','color', '.thunk-custom-two-section .widget-cs-bar a');
// custom section 3
jot_shop_pro_css( 'jot_shop_custm_3_bg_clr','background', '.thunk-custom-three-section');
jot_shop_pro_css( 'jot_shop_custm_3_tle_clr','color', '.thunk-custom-three-section .thunk-title .title');
jot_shop_pro_css( 'jot_shop_custm_3_gloabal_clr','color', '.thunk-custom-three-section .thunk-title .title:before,.thunk-custom-one-section .thunk-woo-product-list .woocommerce-loop-product__title a:hover, .thunk-custom-one-section .widget-cs-bar a:hover');
jot_shop_pro_css( 'jot_shop_custm_3_gloabal_clr','background', '.thunk-custom-three-section .thunk-heading-wrap:before');
jot_shop_pro_css( 'jot_shop_custm_3_wgt_tle_clr','color', '.thunk-custom-three-section .widget-title');
jot_shop_pro_css( 'jot_shop_custm_3_wgt_txt_clr','color', '.thunk-custom-three-section .widget-cs-bar');
jot_shop_pro_css( 'jot_shop_custm_3_wgt_lnk_clr','color', '.thunk-custom-three-section .widget-cs-bar a');
// custom section 4
jot_shop_pro_css( 'jot_shop_custm_4_bg_clr','background', '.thunk-custom-four-section');
jot_shop_pro_css( 'jot_shop_custm_4_tle_clr','color', '.thunk-custom-four-section .thunk-title .title');
jot_shop_pro_css( 'jot_shop_custm_4_gloabal_clr','color', '.thunk-custom-four-section .thunk-title .title:before,.thunk-custom-one-section .thunk-woo-product-list .woocommerce-loop-product__title a:hover, .thunk-custom-one-section .widget-cs-bar a:hover');
jot_shop_pro_css( 'jot_shop_custm_4_gloabal_clr','background', '.thunk-custom-four-section .thunk-heading-wrap:before');
jot_shop_pro_css( 'jot_shop_custm_4_wgt_tle_clr','color', '.thunk-custom-four-section .widget-title');
jot_shop_pro_css( 'jot_shop_custm_4_wgt_txt_clr','color', '.thunk-custom-four-section .widget-cs-bar');
jot_shop_pro_css( 'jot_shop_custm_4_wgt_lnk_clr','color', '.thunk-custom-four-section .widget-cs-bar a');
// Mobile Pan 
jot_shop_pro_css( 'jot_shop_pan_bg_clr','background', '.jot-shop-off-canvas-sidebar-wrapper.from-left .jot-shop-off-canvas-sidebar,.jot-shop-off-canvas-sidebar-wrapper.from-right .jot-shop-off-canvas-sidebar');
jot_shop_pro_css( 'jot_shop_pan_title_clr','color', '.jot-shop-off-canvas-sidebar-wrapper .widget.woocommerce .widget-title');
jot_shop_pro_css( 'jot_shop_pan_link_clr','color', '.jot-shop-off-canvas-sidebar-wrapper .jot-shop-widget-content li a');
jot_shop_pro_css( 'jot_shop_pan_link_hvr_clr','color', '.jot-shop-off-canvas-sidebar-wrapper .jot-shop-widget-content li a:hover');
jot_shop_pro_css( 'jot_shop_pan_txt_clr','color', '.jot-shop-off-canvas-sidebar-wrapper .jot-shop-widget-content');
jot_shop_pro_css( 'jot_shop_custm_3_bg_clr','background', '.thunk-custom-three-section');

wp.customize( 'jot_shop_pan_bg_clr', function( setting ){
        setting.bind( function( cssval ){
                var dynamicStyle = '@media screen and (max-width:1024px){.mobile-nav-bar.sider.left,.mobile-nav-bar.sider.right{ color: ' + cssval + '} }';
                jot_shop_pro_add_dynamic_css( 'jot_shop_pan_bg_clr', dynamicStyle );
        } );
    } );
wp.customize( 'jot_shop_pan_link_clr', function( setting ){
        setting.bind( function( cssval ){
                var dynamicStyle = '@media screen and (max-width:1024px){.mobile-nav-bar.sider .jot-shop-menu li  a,#open-above-menu.jot-shop-menu > li a,.mobile-nav-tab-category ul[data-menu-style="accordion"] li a,.mobile-nav-widget a{ color: ' + cssval + '} }';
                jot_shop_pro_add_dynamic_css( 'jot_shop_pan_link_clr', dynamicStyle );
        } );
    } );
wp.customize( 'jot_shop_pan_link_hvr_clr', function( setting ){
        setting.bind( function( cssval ){
                var dynamicStyle = '@media screen and (max-width:1024px){.mobile-nav-bar.sider .jot-shop-menu  li  a:hover,#open-above-menu.jot-shop-menu > li a:hover,.mobile-nav-tab-category ul[data-menu-style="accordion"] li a:hover,.mobile-nav-widget a:hover{ color: ' + cssval + '} }';
                jot_shop_pro_add_dynamic_css( 'jot_shop_pan_link_hvr_clr', dynamicStyle );
        } );
    } );
wp.customize( 'jot_shop_pan_title_clr', function( setting ){
        setting.bind( function( cssval ){
                var dynamicStyle = '@media screen and (max-width:1024px){.mobile-nav-widget .title{ color: ' + cssval + '} }';
                jot_shop_pro_add_dynamic_css( 'jot_shop_pan_title_clr', dynamicStyle );
        } );
    } );
wp.customize( 'jot_shop_pan_txt_clr', function( setting ){
        setting.bind( function( cssval ){
                var dynamicStyle = '@media screen and (max-width:1024px){.mobile-nav-widget{ color: ' + cssval + '} }';
                jot_shop_pro_add_dynamic_css( 'jot_shop_pan_txt_clr', dynamicStyle );
        } );
    } );
// footer above color
jot_shop_pro_css( 'jot_shop_above_ftr_txt_clr','background', '.top-footer .top-footer-bar');
jot_shop_pro_css( 'jot_shop_above_ftr_bg_clr','background', '.top-footer:before');
jot_shop_pro_css( 'jot_shop_above_ftr_link_clr','color', 'footer .top-footer .top-footer-bar a');
jot_shop_pro_css( 'jot_shop_above_ftr_link_hvr_clr','background', 'footer .top-footer .top-footer-bar a:hover');
//footer widget
jot_shop_pro_css( 'jot_shop_wgt_ftr_bg_clr','background', '.widget-footer:before');
jot_shop_pro_css( 'jot_shop_wgt_ftr_tle_hvr_clr','color', '.widget-footer h2.widget-title,.widget.woocommerce .widget-title');
jot_shop_pro_css( 'jot_shop_wgt_ftr_txt_clr','color', '.widget-footer .widget');
jot_shop_pro_css( 'jot_shop_wgt_ftr_link_clr','color', '.widget-footer .widget a,.woocommerce ul.product_list_widget li a');
jot_shop_pro_css( 'jot_shop_wgt_ftr_tle_hvr_clr','color', '.widget-footer .widget a:hover');
//footer below color
jot_shop_pro_css( 'jot_shop_below_ftr_bg_clr','background', '.below-footer:before');
jot_shop_pro_css( 'jot_shop_below_ftr_txt_clr','color', '.below-footer .below-footer-bar');
jot_shop_pro_css( 'jot_shop_below_ftr_link_clr','color', '.below-footer .below-footer-bar a');
jot_shop_pro_css( 'jot_shop_below_ftr_link_hvr_clr','color', '.below-footer .below-footer-bar a:hover');
// shopping cart
jot_shop_pro_css( 'jot_shop_shp_crt_bg_clr','background','header #open-cart');
jot_shop_pro_css( 'jot_shop_shp_crt_tle_clr','color','.cart-widget-heading h4');
jot_shop_pro_css( 'jot_shop_shp_crt_lnk_clr','color','.open-cart ul.cart_list li');
jot_shop_pro_css( 'jot_shop_shp_crt_txt_clr','color','.open-cart p.total,.open-cart li span');
jot_shop_pro_css( 'jot_shop_shp_crt_btn_bg_clr','background','.open-cart p.buttons a');
jot_shop_pro_css( 'jot_shop_shp_crt_btn_bg_clr','border-color','.open-cart p.buttons a');
jot_shop_pro_css( 'jot_shop_shp_crt_cls_clr','color','.open-cart p.buttons a');
jot_shop_pro_css( 'jot_shop_shp_crt_cls_clr','background','.cart-close-btn:before, .cart-close-btn:after');
//global product style
jot_shop_pro_css( 'jot_shop_product_title_clr','color','.woocommerce ul.products li.product .woocommerce-loop-category__title, .woocommerce ul.products li.product .woocommerce-loop-product__title, .woocommerce ul.products li.product h3,.thunk-woo-product-list .woocommerce-loop-product__title a,.thunk-woo-product-list .woocommerce-loop-product__title a,.thunk-product-list-section .thunk-list .thunk-product-content .woocommerce-LoopProduct-title, .thunk-product-tab-list-section .thunk-list .thunk-product-content .woocommerce-LoopProduct-title');
jot_shop_pro_css( 'jot_shop_product_price_clr','color','.woocommerce ul.products li.product.thunk-woo-product-list .price, .woocommerce .thunk-list-view ul.products li.product.thunk-woo-product-list .price,.woocommerce ul.products li.product.thunk-woo-product-list .price del,.woocommerce .thunk-woo-product-list .price,.woocommerce .thunk-woo-product-list .price del');
jot_shop_pro_css( 'jot_shop_product_icon_bg_clr','background','.woocommerce .thunk-product-hover a.add_to_cart_button, .woocommerce .thunk-product-hover .thunk-wishlist a.add_to_wishlist, .thunk-wishlist .yith-wcwl-wishlistaddedbrowse, .thunk-wishlist .yith-wcwl-wishlistexistsbrowse, .thunk-quickview a, .thunk-compare .compare-button a.compare.button,.thunk-quickview a,.woocommerce ul.products li.product .thunk-product-hover a.add_to_cart_button, .woocommerce .thunk-compare .compare-button a.compare.button,.woocommerce .thunk-product-image-tab-section .thunk-product-hover a.add_to_cart_button,.woocommerce .thunk-product-slide-section .thunk-product-hover a.add_to_cart_button,.woocommerce .thunk-product-hover .button.th-button,.thunk-product .woosw-btn,.thunk-product .wooscp-btn');
jot_shop_pro_css( 'jot_shop_product_icon_clr','color','.woocommerce .thunk-product-hover a.add_to_cart_button, .woocommerce .thunk-product-hover .thunk-wishlist a.add_to_wishlist, .thunk-wishlist .yith-wcwl-wishlistaddedbrowse, .thunk-wishlist .yith-wcwl-wishlistexistsbrowse, .thunk-quickview a, .thunk-compare .compare-button a.compare.button,.thunk-quickview a,.woocommerce ul.products li.product .thunk-product-hover a.add_to_cart_button, .woocommerce .thunk-compare .compare-button a.compare.button,.woocommerce .thunk-product-image-tab-section .thunk-product-hover a.add_to_cart_button,.woocommerce .thunk-product-slide-section .thunk-product-hover a.add_to_cart_button,.woocommerce .thunk-product-hover .button.th-button,.thunk-product .woosw-btn,.thunk-product .wooscp-btn');
jot_shop_pro_css( 'jot_shop_product_sale_bg_clr','background','.woocommerce .thunk-woo-product-list span.onsale');
jot_shop_pro_css( 'jot_shop_product_sale_clr','color','.woocommerce .thunk-woo-product-list span.onsale');
jot_shop_pro_css( 'jot_shop_product_txt_clr','color','.thunk-list-view .os-product-excerpt');

})( jQuery );