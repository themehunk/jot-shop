<?php
if(get_theme_mod('jot_shop_disable_ribbon_sec',false) == true){
    return;
  }
if(get_theme_mod('jot_shop_ribbon_background','image')=='image'){
?>
<section class="thunk-ribbon-section bg-image">
	
<?php jot_shop_display_customizer_shortcut( 'jot_shop_ribbon' );jot_shop_display_color_customizer_shortcut( 'jot-shop-ribbon-color' );?>
<div class="content-wrap">
    <div class="thunk-ribbon-content">
    	<div class="thunk-ribbon-content-col1" ><h3><?php echo esc_html(get_theme_mod('jot_shop_ribbon_text','')); ?></h3></div>
    	<?php if(get_theme_mod('jot_shop_ribbon_btn_text','')!==''):?>
    	<div class="thunk-ribbon-content-col2" ><a href="<?php echo esc_url(get_theme_mod('jot_shop_ribbon_btn_link',''));?>" class="ribbon-btn"><?php echo esc_html(get_theme_mod('jot_shop_ribbon_btn_text',''));?></a></div>
        <?php endif; ?>
    </div>
</div>
</section>
<?php }elseif(get_theme_mod('jot_shop_ribbon_background')=='video'){?>
<section class="thunk-ribbon-section">
<video autoplay="autoplay" loop playsinline id="bgvid" muted  poster="<?php echo get_theme_mod( 'jot_shop_ribbon_video_poster_image'); ?>">
<source src="<?php echo get_theme_mod( 'jot_shop_ribbon_bg_video'); ?>" type="video/mp4" />
</video>	

<?php jot_shop_display_customizer_shortcut( 'jot_shop_ribbon' );
jot_shop_display_color_customizer_shortcut( 'jot-shop-ribbon-color' );?>
<div class="content-wrap">
    <div class="thunk-ribbon-content">
    	<div class="thunk-ribbon-content-col1" ><h3><?php echo esc_html(get_theme_mod('jot_shop_ribbon_text','')); ?></h3></div>
    	<?php if(get_theme_mod('jot_shop_ribbon_btn_text','')!==''):?>
    	<div class="thunk-ribbon-content-col2" ><a href="<?php echo esc_url(get_theme_mod('jot_shop_ribbon_btn_link',''));?>" class="ribbon-btn"><?php echo esc_html(get_theme_mod('jot_shop_ribbon_btn_text',''));?></a></div>
        <?php endif; ?>
    </div>
</div>
</section>
<?php }?>