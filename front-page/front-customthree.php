<?php
if(get_theme_mod('jot_shop_custom_section3_hide',true) == true){
    return;
  }
?>
<section class="thunk-custom-three-section">
     <?php jot_shop_display_customizer_shortcut( 'jot_shop_3_custom_sec' );
     jot_shop_display_color_customizer_shortcut( 'jot-shop-custom-three-color' );
 if(get_theme_mod('jot_shop_custom_3_heading','Third Custom Section')!==''):
     ?>
     <div class="thunk-heading-wrap">
  <div class="thunk-heading">
    <h4 class="thunk-title">
    <span class="title"><?php echo esc_html(get_theme_mod('jot_shop_custom_3_heading','Third Custom Section'));?></span>
   </h4>
</div>
</div>
<?php endif;?>
<div class="content-wrap">
    <div class="widget-wrap">
    	<?php jot_shop_custom_three_markup();?>
    </div>
  </div>
</section>