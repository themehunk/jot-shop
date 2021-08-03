<?php
if ( ! defined( 'ABSPATH' ) ) exit; 
/**********************/
// Brand Function
/**********************/
//brand content output function
function jot_shop_brand_content( $jot_shop_brand_content_id, $default ) {
//passing the seeting ID and Default Values
	$jot_shop_brand_content= get_theme_mod( $jot_shop_brand_content_id, $default );
		if ( ! empty( $jot_shop_brand_content ) ) :
			$jot_shop_brand_content = json_decode( $jot_shop_brand_content );
			if ( ! empty( $jot_shop_brand_content ) ) {
				foreach ( $jot_shop_brand_content as $brand_item ) :
					$icon   = ! empty( $brand_item->icon_value ) ? apply_filters( 'big-store_translate_single_string', $brand_item->icon_value, 'Brand section' ) : '';

					$image = ! empty( $brand_item->image_url ) ? apply_filters( 'big-store_translate_single_string', $brand_item->image_url, 'Brand section' ) : '';

					$title  = ! empty( $brand_item->title ) ? apply_filters( 'big-store_translate_single_string', $brand_item->title, 'Brand section' ) : '';
					$text   = ! empty( $brand_item->text ) ? apply_filters( 'big-store_translate_single_string', $brand_item->text, 'Brand section' ) : '';
					$link   = ! empty( $brand_item->link ) ? apply_filters( 'big-store_translate_single_string', $brand_item->link, 'Brand section' ) : '';
					$color  = ! empty( $brand_item->color ) ? $brand_item->color : '';
			?>	
		<div class="thunk-brands">
         	<a target="_blank" href="<?php echo esc_url($link); ?>">
        		<img src="<?php echo esc_url($image); ?>" class="cate-img">
            </a>
        </div> <!-- thunk-brands End -->
	
			<?php	
				
				endforeach;			
			} // End if().
		
	endif;	
}
/******************/
//Banner Function
/******************/
function jot_shop_pro_front_banner(){
$jot_shop_banner_layout     = get_theme_mod( 'jot_shop_banner_layout','bnr-two');
// first
$jot_shop_bnr_1_img     = get_theme_mod( 'jot_shop_bnr_1_img','');
$jot_shop_bnr_1_url     = get_theme_mod( 'jot_shop_bnr_1_url','');
// second
$jot_shop_bnr_2_img     = get_theme_mod( 'jot_shop_bnr_2_img','');
$jot_shop_bnr_2_url     = get_theme_mod( 'jot_shop_bnr_2_url','');
// third
$jot_shop_bnr_3_img     = get_theme_mod( 'jot_shop_bnr_3_img','');
$jot_shop_bnr_3_url     = get_theme_mod( 'jot_shop_bnr_3_url','');
// fouth
$jot_shop_bnr_4_img     = get_theme_mod( 'jot_shop_bnr_4_img','');
$jot_shop_bnr_4_url     = get_theme_mod( 'jot_shop_bnr_4_url','');
// fifth
$jot_shop_bnr_5_img     = get_theme_mod( 'jot_shop_bnr_5_img','');
$jot_shop_bnr_5_url     = get_theme_mod( 'jot_shop_bnr_5_url','');

if($jot_shop_banner_layout=='bnr-one'){?>
<div class="thunk-banner-wrap bnr-layout-1 thnk-col-1">
 	 <div class="thunk-banner-col1">
 	 	<div class="thunk-banner-col1-content"><a href="<?php echo esc_url($jot_shop_bnr_1_url);?>"><img src="<?php echo esc_url($jot_shop_bnr_1_img );?>"></a>
 	 	</div>
 	 </div>
  </div>
<?php }elseif($jot_shop_banner_layout=='bnr-two'){?>
<div class="thunk-banner-wrap bnr-layout-2 thnk-col-2">
 	 <div class="thunk-banner-col1">
 	 	<div class="thunk-banner-col1-content"><a href="<?php echo esc_url($jot_shop_bnr_1_url);?>"><img src="<?php echo esc_url($jot_shop_bnr_1_img );?>"></a></div>
 	 </div>
 	 <div class="thunk-banner-col2">
 	 	<div class="thunk-banner-col2-content"><a href="<?php echo esc_url($jot_shop_bnr_2_url);?>"><img src="<?php echo esc_url($jot_shop_bnr_2_img );?>"></a></div>
 	 </div>
  </div>

<?php }elseif($jot_shop_banner_layout=='bnr-three'){?>
<div class="thunk-banner-wrap bnr-layout-3 thnk-col-3">
 	 <div class="thunk-banner-col1">
 	 	<div class="thunk-banner-col1-content"><a href="<?php echo esc_url($jot_shop_bnr_1_url);?>"><img src="<?php echo esc_url($jot_shop_bnr_1_img );?>"></a></div>
 	 </div>
 	 <div class="thunk-banner-col2">
 	 	<div class="thunk-banner-col2-content"><a href="<?php echo esc_url($jot_shop_bnr_2_url);?>"><img src="<?php echo esc_url($jot_shop_bnr_2_img );?>"></a></div>
 	 </div>
 	 <div class="thunk-banner-col3">
 	 	<div class="thunk-banner-col3-content"><a href="<?php echo esc_url($jot_shop_bnr_3_url);?>"><img src="<?php echo esc_url($jot_shop_bnr_3_img );?>"></a></div>
 	 </div>
  </div>
<?php }elseif($jot_shop_banner_layout=='bnr-four'){?>
 <div class="thunk-banner-wrap bnr-layout-4 thnk-col-5">
 	 <div class="thunk-banner-col">
 	 	<div class="thunk-banner-item"><a href="<?php echo esc_url($jot_shop_bnr_1_url);?>"><img src="<?php echo esc_url($jot_shop_bnr_1_img );?>"></a></div>
 	 	<div class="thunk-banner-item"><a href="<?php echo esc_url($jot_shop_bnr_2_url);?>"><img src="<?php echo esc_url($jot_shop_bnr_2_img );?>"></a></div>
 	 </div>
 	 <div class="thunk-banner-col">
 	 	<div class="thunk-banner-item"><a href="<?php echo esc_url($jot_shop_bnr_3_url);?>"><img src="<?php echo esc_url($jot_shop_bnr_3_img );?>"></a></div>
 	 </div>
 	 <div class="thunk-banner-col">
 	 	<div class="thunk-banner-item"><a href="<?php echo esc_url($jot_shop_bnr_4_url);?>"><img src="<?php echo esc_url($jot_shop_bnr_4_img );?>"></a></div>
 	 	<div class="thunk-banner-item"><a href="<?php echo esc_url($jot_shop_bnr_5_url);?>"><img src="<?php echo esc_url($jot_shop_bnr_5_img );?>"></a></div>
 	 </div>
  </div>
<?php }elseif($jot_shop_banner_layout=='bnr-five'){?>
 <div class="thunk-banner-wrap bnr-layout-5 thnk-col-4">
 	 <div class="thunk-banner-col">
 	 	<div class="thunk-banner-item"><a href="<?php echo esc_url($jot_shop_bnr_1_url);?>"><img src="<?php echo esc_url($jot_shop_bnr_1_img );?>"></a></div>
 	 	
 	 </div>
 	 <div class="thunk-banner-col">
 	 	<div class="thunk-banner-item"><a href="<?php echo esc_url($jot_shop_bnr_2_url);?>"><img src="<?php echo esc_url($jot_shop_bnr_2_img );?>"></a></div>
 	 	<div class="thunk-banner-item"><a href="<?php echo esc_url($jot_shop_bnr_3_url);?>"><img src="<?php echo esc_url($jot_shop_bnr_3_img );?>"></a></div>
 	 </div>
 	 <div class="thunk-banner-col">
 	 	<div class="thunk-banner-item"><a href="<?php echo esc_url($jot_shop_bnr_4_url);?>"><img src="<?php echo esc_url($jot_shop_bnr_4_img );?>"></a></div>
 	 </div>
  </div>
  <?php }elseif($jot_shop_banner_layout=='bnr-six'){?>
      <div class="thunk-banner-wrap bnr-layout-6 thnk-col-2">
	 	 <div class="thunk-banner-col col-1">
	 	 	<div class="thunk-banner-item"><a href="<?php echo esc_url($jot_shop_bnr_1_url);?>"><img src="<?php echo esc_url($jot_shop_bnr_1_img );?>"></a></div>
	 	 	
	 	 </div>
	 	 <div class="thunk-banner-col col-2">
	 	 	<div class="thunk-banner-item"><a href="<?php echo esc_url($jot_shop_bnr_2_url);?>"><img src="<?php echo esc_url($jot_shop_bnr_2_img );?>"></a></div>
	 	 </div>
      </div>
<?php
 }
}

     /*************************
     * Get Off Canvas Sidebar
     *
     * @return void
     */
      function jot_shop_show_off_canvas_sidebar_icon(){
      if ( ! class_exists( 'WooCommerce' ) ){
           return;
      }
      $offcanvas = get_theme_mod('jot_shop_canvas_alignment','cnv-none');
      if($offcanvas!=='cnv-none'):
      ?>
      <span class="canvas-icon">
      <a href="#" class="off-canvas-button">
         <span class="cnv-top"></span>
         <span class="cnv-top"></span>
         <span class="cnv-bot"></span>
       </a>
    </span>
    <?php  endif; }
    function jot_shop_get_off_canvas_sidebar(){
     if(get_theme_mod('jot_shop_canvas_alignment','cnv-none')!=='cnv-none'):
        echo '<div class="jot-shop-off-canvas-sidebar-wrapper from-left"><div class="jot-shop-off-canvas-sidebar"><div class="menu-close"><a class="menu-close-btn" tabindex="-1">'.__('close','jot-shop').'</a></div>';
        if ( is_active_sidebar('open-woo-canvas-sidebar') ){
                          dynamic_sidebar('open-woo-canvas-sidebar');
                       }else{ ?>
                  <p class='no-widget-text'>
          <a href='<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>'>
            <?php esc_html_e( 'Click here to assign a widget for this area.', 'jot-shop' ); ?>
          </a>
        </p>
    <?php }
        echo '</div></div>';
      endif;
     
    }
    add_action( 'wp_footer', 'jot_shop_get_off_canvas_sidebar' );


        // woocommerce sidebar
		/**
		 * Store widgets init.
		 */
		function jot_shop_pro_widgets_init(){
        register_sidebar(array(
		              'name'          => esc_html__( 'Off Canvass Sidebar', 'jot-shop' ),
		              'id'            => 'open-woo-canvas-sidebar',
		              'description'   => esc_html__( 'This sidebar will be used on Single Product page.', 'jot-shop' ),
		              'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="jot-shop-widget-content">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	        ) );
    for ( $i = 1; $i <= 4; $i++ ){
  //Widgets for First Custom Section
    register_sidebar( array(
      'name'          => sprintf( esc_html__( 'First Custom Section Widget Area %d', 'jot-shop' ), $i ),
      'id'            => 'first-customsec-' . $i,
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ) );
  //Widgets for Second Custom Section
    register_sidebar( array(
      'name'          => sprintf( esc_html__( 'Second Custom Section Widget Area %d', 'jot-shop' ), $i ),
      'id'            => 'second-customsec-' . $i,
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ) );
  //Widgets for Third Custom Section
    register_sidebar( array(
      'name'          => sprintf( esc_html__( 'Third Custom Section Widget Area %d', 'jot-shop' ), $i ),
      'id'            => 'third-customsec-' . $i,
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ) );
  //Widgets for Four Custom Section
    register_sidebar( array(
      'name'          => sprintf( esc_html__( 'Fourth Custom Section Widget Area %d', 'jot-shop' ), $i ),
      'id'            => 'four-customsec-' . $i,
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ) );
  }

		}
		add_action( 'widgets_init', 'jot_shop_pro_widgets_init', 15 );

function jot_shop_widget_script_registers(){
//widget
 wp_enqueue_style( 'wp-color-picker' );
 wp_enqueue_script( 'wp-color-picker');
}
add_action('customize_controls_enqueue_scripts', 'jot_shop_widget_script_registers' );
add_action('admin_enqueue_scripts', 'jot_shop_widget_script_registers' );

/**********************************************
//Funtion Vertical Category list show
 **********************************************/   
function jot_shop_vertical_category_tab_list( $term_id ){
  if( taxonomy_exists( 'product_cat' ) ){ 
      // category filter  
      $args = array(
            'orderby'    => 'title',
            'order'      => 'ASC',
            'hide_empty' => 1,
            'slug'    => $term_id
        );
      $product_categories = get_terms( 'product_cat', $args );
      $count = count($product_categories);
      $cat_list = $cate_product = '';
      $cat_list_drop = '';
      $i=1;
      $dl=0;
?>
<?php
     if ( $count > 0 ){
      foreach ( $product_categories as $product_category ){
              //global $product; 
              $category_product = array();
              $current_class = '';
              $cat_list .='
                  <li>
                  <a data-filter="' .esc_attr($product_category->slug) .'" data-animate="fadeInUp"  href="#"  data-term-id='.esc_attr($product_category->term_id) .' product_count="'.esc_attr($product_category->count).'">
                     '.esc_html($product_category->name).'</a>
                  </li>';
          
          }
          $return = '<div class="tab-head" catlist="'.esc_attr($i).'" >
          <div class="tab-link-wrap">
          <ul class="tab-link">';
 $return .=  $cat_list;
 $return .= '</ul>';
  
$return .= '</div></div>';

 echo $return;
       }
    } 
}

/**********************************************
//Funtion Category list show
 **********************************************/   
function jot_shop_vertical_category_tab_list2( $term_id ){
  if( taxonomy_exists( 'product_cat' ) ){ 
      // category filter  
      $args = array(
            'orderby'    => 'menu_order',
            'order'      => 'ASC',
            'hide_empty' => 1,
            'slug'       => $term_id
        );
      $product_categories = get_terms( 'product_cat', $args );
      $count = count($product_categories);
      $cat_list = $cate_product = '';
      $cat_list_drop = '';
      $i=1;
      $dl=0;
?>
<?php
//Detect special conditions devices
$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");

//do something with this information
if( $iPod || $iPhone ){
  $device_cat =  '2';
    //browser reported as an iPhone/iPod touch -- do something here
}else if($iPad){
  $device_cat =  '2';
    //browser reported as an iPad -- do something here
}else if($Android){
  $device_cat =  '2';
    //browser reported as an Android device -- do something here
}else if($webOS){
   $device_cat =  '5';
    //browser reported as a webOS device -- do something here
}else{
    $device_cat =  '5';
}
     if ( $count > 0 ){
      foreach ( $product_categories as $product_category ){
              //global $product; 
              $category_product = array();
              $current_class = '';
              $cat_list .='
                  <li>
                  <a data-filter="' .esc_attr($product_category->slug) .'" data-animate="fadeInUp"  href="#"  data-term-id='.esc_attr($product_category->term_id) .' product_count="'.esc_attr($product_category->count).'">
                     '.esc_html($product_category->name).'</a>
                  </li>';
          if ($i++ == $device_cat) break;
          }
          if($count > $device_cat){
          foreach ( $product_categories as $product_category ){
              //global $product; 
              $dl++;
              if($dl <= $device_cat) continue;
              $category_product = array();
              $current_class = '';
              $cat_list_drop .='
                  <li>
                  <a data-filter="' .esc_attr($product_category->slug) .'" data-animate="fadeInUp"  href="#"  data-term-id='.esc_attr($product_category->term_id) .' product_count="'.esc_attr($product_category->count).'">
                     '.esc_html($product_category->name).'</a>
                  </li>';
          }
        }
          $return = '<div class="tab-head" catlist="'.esc_attr($i).'" >
          <div class="tab-link-wrap">
          <ul class="tab-link">';
 $return .=  $cat_list;
 $return .= '</ul>';
 if($count > $device_cat){
  $return .= '<div class="header__cat__item dropdown"><a href="#" class="more-cat" title="More categories...">•••</a><ul class="dropdown-link">';
 $return .=  $cat_list_drop;
 $return .= '</ul></div>';
}
  $return .= '</div></div>';

 echo $return;
       }
    } 
}