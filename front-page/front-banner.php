<?php
if(get_theme_mod('jot_shop_disable_banner_sec',false) == true){
    return;
  }
?>
<section class="thunk-banner-section">	
	<?php jot_shop_display_customizer_shortcut('jot_shop_banner');
	jot_shop_display_color_customizer_shortcut('jot-shop-banner-color');?>
	<div class="content-wrap">
  <?php jot_shop_pro_front_banner(); ?>
</div>
</section>