/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */
jQuery(document).ready(function($){
    $.bigStore = {
        init: function () {
            this.focusForCustomShortcut();
        },
        focusForCustomShortcut: function (){
            var fakeShortcutClasses = [
                'jot_shop_top_slider_section',
                'jot_shop_category_tab_section',
                'jot_shop_product_slide_section',
                'jot_shop_cat_slide_section',
                'jot_shop_product_slide_list',
                'jot_shop_product_cat_list',
                'jot_shop_brand',
                'jot_shop_ribbon',
                'jot_shop_banner',
                'jot_shop_highlight',
                'jot_shop_product_tab_image',
                'jot_shop_product_big_feature',
                'jot_shop_1_custom_sec',
                'jot_shop_2_custom_sec',
                'jot_shop_3_custom_sec',
                'jot_shop_4_custom_sec',
            ];
            fakeShortcutClasses.forEach(function (element){
                $('.customize-partial-edit-shortcut-'+ element).on('click',function (){
                   wp.customize.preview.send( 'jot-shop-customize-focus-section', element );
                });
            });
        }
    };
    $.bigStore.init();
    // color
    $.bigStoreColor = {
        init: function () {
            this.focusForCustomShortcutColor();
        },
        focusForCustomShortcutColor: function (){
            var fakeShortcutClasses = [
                'jot-shop-top-slider-color',
                'jot-shop-product-cat-slide-tab-color',
                'jot-shop-cat-slider-color',
                'jot-shop-product-slider-color',
                'jot-shop-product-list-slide-color',
                'jot-shop-product-list-tab-slide-color',
                'jot-shop-ribbon-color',
                'jot-shop-highlight-color',
                'jot-shop-banner-color',
                'jot-shop-brand-color',
                'jot-shop-tabimgprd-color',
                'jot-shop-big-featured-color',
                'jot-shop-custom-one-color',
                'jot-shop-custom-two-color',
                'jot-shop-custom-three-color',
                'jot-shop-custom-four-color',
            ];
            fakeShortcutClasses.forEach(function (element){
                $('.customize-partial-edit-shortcut-'+ element).on('click',function (){
                   wp.customize.preview.send( 'jot-shop-customize-focus-color-section', element );
                });
            });
        }
    };
    $.bigStoreColor.init();
});