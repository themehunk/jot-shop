<?php
if(get_theme_mod('jot_shop_custom_section1_hide',true) == true){
    return;
  }
?>
<section class="thunk-custom-one-section">
   <?php jot_shop_display_customizer_shortcut( 'jot_shop_1_custom_sec' );
   jot_shop_display_color_customizer_shortcut( 'jot-shop-custom-one-color' );
if(get_theme_mod('jot_shop_custom_1_heading','First Custom Section')!==''):
   ?>
   <div class="thunk-heading-wrap">
  <div class="thunk-heading">
    <h4 class="thunk-title">
    <span class="title"><?php echo esc_html(get_theme_mod('jot_shop_custom_1_heading','First Custom Section'));?></span>
   </h4>
</div>
</div>
<?php endif;?>
<div class="content-wrap">
    <div class="widget-wrap">
    	<?php jot_shop_custom_one_markup();?>
    </div>
  </div>
</section>