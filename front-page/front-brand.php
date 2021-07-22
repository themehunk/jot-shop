<?php
if(get_theme_mod('jot_shop_disable_brand_sec',false) == true){
    return;
  }
?>
<section class="thunk-brand-section">
<?php jot_shop_display_customizer_shortcut( 'jot_shop_brand' );
jot_shop_display_color_customizer_shortcut('jot-shop-brand-color');?>
<div class="content-wrap">
    <div class="thunk-slide thunk-brand owl-carousel">
    	<?php   
             $default =   Jot_Shop_Defaults_Models::instance()->get_brand_default();
             jot_shop_brand_content('jot_shop_brand_content', $default);
        ?>
    </div>
</div>
</section>