<?php
if(get_theme_mod('jot_shop_disable_feature_product_sec',false) == true){
    return;
  }
?>
<section class="thunk-feature-product-section">

     <?php jot_shop_display_customizer_shortcut('jot_shop_product_big_feature');
     jot_shop_display_color_customizer_shortcut('jot-shop-big-featured-color');
    ?>
 <!-- thunk head start -->
<div id="thunk-feature-product-tab" class="thunk-cat-tab">
  <div class="thunk-heading-wrap">
  <div class="thunk-heading">
    <h4 class="thunk-title">
    <span class="title"><?php echo esc_html(get_theme_mod('jot_shop_feature_product_heading','Product Slider'));?></span>
   </h4>
  </div>
<!-- tab head start -->
<?php  $term_id = get_theme_mod('jot_shop_feature_product_tab_list');
jot_shop_category_tab_list($term_id); 
?>
</div>
<!-- tab head end -->
<div class="content-wrap">
  <div class="tab-content">
      <div class="thunk-product-col1">
        <div class="thunk-product-col1-wrap">
       <?php 
          $term_id = get_theme_mod('jot_shop_feature_product_tab_list'); 
          $prdct_optn = get_theme_mod('jot_shop_feature_product_optn','recent'); 
          $exludeaary = jot_shop_featured_get_products_by_ID($term_id,$prdct_optn);
          jot_shop_big_product_cat_filter_default_loop1($term_id,$prdct_optn); 
         ?>
         </div>
      </div>
      <div class="thunk-product-col2">
         <div class="thunk-product-col2-wrap">
        <?php jot_shop_featured_product_show_big($term_id);?>
      </div>
      </div>
      <div class="thunk-product-col3">
        <div class="thunk-product-col3-wrap">
       <?php 
          $term_id = get_theme_mod('jot_shop_feature_product_tab_list'); 
          $prdct_optn = get_theme_mod('jot_shop_feature_product_optn','recent');
          jot_shop_big_product_cat_filter_default_loop2($term_id,$prdct_optn,$exludeaary); 
         ?>
       </div>
      </div>
    </div>	    
</div>
</div>

</section>