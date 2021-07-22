<?php
if(get_theme_mod('jot_shop_custom_section4_hide',true) == true){
    return;
  }
?>
<section class="thunk-custom-four-section">
     <?php jot_shop_display_customizer_shortcut( 'jot_shop_4_custom_sec' );
     jot_shop_display_color_customizer_shortcut( 'jot-shop-custom-four-color' );
if(get_theme_mod('jot_shop_custom_4_heading','Fourth Custom Section')!==''):
     ?>
     <div class="thunk-heading-wrap">
  <div class="thunk-heading">
    <h4 class="thunk-title">
    <span class="title"><?php echo esc_html(get_theme_mod('jot_shop_custom_4_heading','Fourth Custom Section'));?></span>
   </h4>
</div>
</div>
<?php endif;?>
<div class="content-wrap">
    <div class="widget-wrap">
    	<?php jot_shop_custom_four_markup();?>
    </div>
  </div>
</section>