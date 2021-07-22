<?php
/**
 * The WooCommerce template file
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#woocommerce
 * @package  Jot Shop
 * @since 1.0.0
 */
if ( ! class_exists( 'WooCommerce' ) ){
    return;
}
get_header();
$singleproduct_layout = get_theme_mod('jot_shop_product_single_sidebar_disable',true);
if((is_product() && $singleproduct_layout ==true)){
   $layout = 'no-sidebar';
}elseif(is_shop() || is_product_category()){
   $shop_page_id = get_option( 'woocommerce_shop_page_id' );
   $layout = get_post_meta( $shop_page_id, 'jot_shop_sidebar_dyn', true );
}else{
  $layout  = get_post_meta( get_queried_object_id(), 'jot_shop_sidebar_dyn', true );
}
?>
<div id="content" class="page-content  <?php echo esc_attr($layout); ?>">
        	<div class="content-wrap" >
        		<div class="container">
        			<div class="main-area">
        				<div id="primary" class="primary-content-area">
        					<div class="primary-content-wrap">
                          <div class="page-head">
                   <?php jot_shop_get_page_title();?>
                   <?php jot_shop_breadcrumb_trail();?>
                    </div>
                            <?php woocommerce_content();?>	
                           </div> <!-- end primary-content-wrap-->
        				</div> <!-- end primary primary-content-area-->
        				<?php 
                if(class_exists( 'WooCommerce' ) && is_shop()){
                $shoppage_id = get_option( 'woocommerce_shop_page_id' );
                       if(get_post_meta( $shoppage_id, 'jot_shop_disable_page_sidebar', true )!=='on'){
                         get_sidebar();
                        }
                }elseif(class_exists( 'WooCommerce' ) && is_product()){

                if(get_theme_mod('jot_shop_product_single_sidebar_disable')!==true){
                    if(get_post_meta(get_the_ID(), 'jot_shop_disable_page_sidebar', true )!=='on'){
                         get_sidebar();
                    }
                }
                }elseif(get_post_meta(get_the_ID(), 'jot_shop_disable_page_sidebar', true )!=='on'){
                    get_sidebar();
                  } 
                 ?><!-- end sidebar-primary  sidebar-content-area-->
        			</div> <!-- end main-area -->
        		</div>
        	</div> <!-- end content-wrap -->
        </div> <!-- end content page-content -->
<?php get_footer();?>
