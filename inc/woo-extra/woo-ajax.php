<?php 
/*if ( ! class_exists( 'WooCommerce' ) ){
  return;
}*/

if(!function_exists('jot_shop_cat_filter_ajax')){
/***************************/
//category product section product ajax filter
/***************************/
add_action('wp_ajax_jot_shop_cat_filter_ajax', 'jot_shop_cat_filter_ajax');
add_action('wp_ajax_nopriv_jot_shop_cat_filter_ajax', 'jot_shop_cat_filter_ajax');
function jot_shop_cat_filter_ajax(){
$prdct_optn = get_theme_mod('jot_shop_category_optn','recent');
   if( taxonomy_exists( 'product_cat' ) ){
     // product filter  
            $args = array(
                      'tax_query' => array(
                        'relation' => 'AND',
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['data_cat_slug'],
                          ),
                          array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                      ),
                      'post_type' => 'product',
                      'orderby'   => 'menu_order',
                      'meta_query' => array(
                              array(
                                  'key' => '_stock_status',
                                  'value' => 'instock'
                              ),
                              array(
                                  'key' => '_backorders',
                                  'value' => 'no'
                              ),
                          )
                  );

   // product filter 
  if($prdct_optn=='random'){  
     $args = array(
                      
                      'tax_query' => array(
                        'relation' => 'AND',
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['data_cat_slug'],
                          ),

                          array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                      ),
                      'post_type' => 'product',
                      'orderby' => 'rand',
                      'meta_query' => array(
                              array(
                                  'key' => '_stock_status',
                                  'value' => 'instock'
                              ),
                              array(
                                  'key' => '_backorders',
                                  'value' => 'no'
                              ),
                          )
    );
}elseif($prdct_optn=='featured'){
    $args = array(
                      
                      'tax_query' => array(
                        'relation' => 'AND',
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['data_cat_slug'],
                          ),

                          array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                      ),
                      'post_type' => 'product',
                      'post__in'  => wc_get_featured_product_ids(),
                      'meta_query' => array(
                              array(
                                  'key' => '_stock_status',
                                  'value' => 'instock'
                              ),
                              array(
                                  'key' => '_backorders',
                                  'value' => 'no'
                              ),
                          )
    );

}else{
    $args = array(
                      
                      'tax_query' => array(
                        'relation' => 'AND',
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['data_cat_slug'],
                          ),

                          array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                      ),
                      'post_type' => 'product',
                      'orderby' => 'menu_order',
                      
                      'meta_query' => array(
                              array(
                                  'key' => '_stock_status',
                                  'value' => 'instock'
                              ),
                              array(
                                  'key' => '_backorders',
                                  'value' => 'no'
                              ),
                          )
    );
}
    echo jot_shop_product_filter_loop($args);
    exit;
  }
}

}

if(!function_exists('jot_shop_cat_list_filter_ajax')){
/*****************************************/
//Product filter for List View ajax filter
/*******************************************/
add_action('wp_ajax_jot_shop_cat_list_filter_ajax', 'jot_shop_cat_list_filter_ajax');
add_action('wp_ajax_nopriv_jot_shop_cat_list_filter_ajax', 'jot_shop_cat_list_filter_ajax');
function jot_shop_cat_list_filter_ajax(){
$prdct_optn = get_theme_mod('jot_shop_category_tb_list_optn','recent');
   if( taxonomy_exists( 'product_cat' ) ){
     // product filter  
            $args = array(
                      'tax_query' => array(
                        'relation' => 'AND',
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['data_cat_slug'],
                          ),
                          array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                      ),
                      'post_type' => 'product',
                      'orderby'   => 'menu_order',
                      'meta_query' => array(
                              array(
                                  'key' => '_stock_status',
                                  'value' => 'instock'
                              ),
                              array(
                                  'key' => '_backorders',
                                  'value' => 'no'
                              ),
                          )
                  );

   // product filter 
  if($prdct_optn=='random'){  
     $args = array(
                      
                      'tax_query' => array(
                        'relation' => 'AND',
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['data_cat_slug'],
                          ),
                           array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                      ),
                      'post_type' => 'product',
                      'orderby' => 'rand',
                      'meta_query' => array(
                              array(
                                  'key' => '_stock_status',
                                  'value' => 'instock'
                              ),
                              array(
                                  'key' => '_backorders',
                                  'value' => 'no'
                              ),
                          )
    );
}elseif($prdct_optn=='featured'){
    $args = array(
                      
                      'tax_query' => array(
                        'relation' => 'AND',
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['data_cat_slug'],
                          ),
                          array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                      ),
                      'post_type' => 'product',
                      'post__in'  => wc_get_featured_product_ids(),
                      'meta_query' => array(
                              array(
                                  'key' => '_stock_status',
                                  'value' => 'instock'
                              ),
                              array(
                                  'key' => '_backorders',
                                  'value' => 'no'
                              ),
                          )
    );

}else{
    $args = array(
                      
                      'tax_query' => array(
                        'relation' => 'AND',
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['data_cat_slug'],
                          ),
                          array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                      ),
                      'post_type' => 'product',
                      'orderby' => 'menu_order',
                      'meta_query' => array(
                              array(
                                  'key' => '_stock_status',
                                  'value' => 'instock'
                              ),
                              array(
                                  'key' => '_backorders',
                                  'value' => 'no'
                              ),
                          )
    );
}
    echo jot_shop_product_list_filter_loop($args);
    exit;
  }
}
}

if(!function_exists('jot_shop_big_product_cat_filter_default_ajax_loop1')){
/*******************************************************/
//Product filter Featured Product to big show ajax filter
/*******************************************************/
add_action( 'wp_ajax_jot_shop_big_product_cat_filter_default_ajax_loop1',        'jot_shop_big_product_cat_filter_default_ajax_loop1' );
add_action( 'wp_ajax_nopriv_jot_shop_big_product_cat_filter_default_ajax_loop1', 'jot_shop_big_product_cat_filter_default_ajax_loop1' );
function jot_shop_big_product_cat_filter_default_ajax_loop1(){
$prdct_optn = get_theme_mod('jot_shop_feature_product_optn','recent');
// product filter 
if( taxonomy_exists( 'product_cat' ) ){
     // product filter  
            $args = array(
                      'tax_query' => array(
                        'relation' => 'AND',
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['data_cat_slug'],
                          ),
                          array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                      ),
                      'post_type' => 'product',
                      'orderby'   => 'menu_order',
                      'meta_query' => array(
                              array(
                                  'key' => '_stock_status',
                                  'value' => 'instock'
                              ),
                              array(
                                  'key' => '_backorders',
                                  'value' => 'no'
                              ),
                          )
                  );

  if($prdct_optn=='random'){  
     $args = array(
                      
                      'tax_query' => array(
                        'relation' => 'AND',
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['data_cat_slug'],
                          ),
                           array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                      ),
                      'post_type' => 'product',
                      'orderby' => 'rand',
                      'meta_query' => array(
                              array(
                                  'key' => '_stock_status',
                                  'value' => 'instock'
                              ),
                              array(
                                  'key' => '_backorders',
                                  'value' => 'no'
                              ),
                          )
    );
}elseif($prdct_optn=='featured'){
    $args = array(
                      
                      'tax_query' => array(
                        'relation' => 'AND',
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['data_cat_slug'],
                          ),
                          array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                      ),
                      'post_type' => 'product',
                      'post__in'  => wc_get_featured_product_ids(),
                      'meta_query' => array(
                              array(
                                  'key' => '_stock_status',
                                  'value' => 'instock'
                              ),
                              array(
                                  'key' => '_backorders',
                                  'value' => 'no'
                              ),
                          )
    );

}else{
    $args = array(
                      
                      'tax_query' => array(
                        'relation' => 'AND',
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['data_cat_slug'],
                          ),
                          array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                      ),
                      'post_type' => 'product',
                      'orderby' => 'menu_order',
                      'ignore_sticky_posts'   => 1,
                      'posts_per_page' => 4,
                      'meta_query' => array(
                              array(
                                  'key' => '_stock_status',
                                  'value' => 'instock'
                              ),
                              array(
                                  'key' => '_backorders',
                                  'value' => 'no'
                              ),
                          )
    );
}
   
    $products = new WP_Query( $args );
     
    if ( $products->have_posts() ){

      while ( $products->have_posts() ) : $products->the_post();
      global $product;
      $pid =  $product->get_id();
     
      ?>
        <div <?php post_class(); ?>>
          <div class="thunk-product-wrap">
          <div class="thunk-product">
               <div class="thunk-product-image">
                <a href="<?php the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                <?php $sale = get_post_meta( $pid, '_sale_price', true);
                    if( $sale) {
                      // Get product prices
                        $regular_price = (float) $product->get_regular_price(); // Regular price
                        $sale_price = (float) $product->get_price(); // Sale price
                        $saving_price = wc_price( $regular_price - $sale_price );
                        echo $sale = '<span class="onsale">-'.$saving_price.'</span>';
                    }?>
                 <?php 
                      the_post_thumbnail(); 
                      $hover_style = get_theme_mod( 'jot_shop_woo_product_animation' );
                         // the_post_thumbnail();
                        if ( 'swap' === $hover_style ){
                                $attachment_ids = $product->get_gallery_image_ids($pid);
                                if(!empty($attachment_ids)){
                             
                                 $glr = wp_get_attachment_image($attachment_ids[0], 'shop_catalog', false, array( 'class' => 'show-on-hover' ));
                                   echo $category_product['glr'] = $glr;

                                 }
                               
                           }
                           if ( 'slide' === $hover_style ){
                                $attachment_ids = $product->get_gallery_image_ids($pid);
                                if(!empty($attachment_ids)){
                             
                                 $glr = wp_get_attachment_image($attachment_ids[0], 'shop_catalog', false, array( 'class' => 'show-on-slide' ));
                                   echo $category_product['glr'] = $glr;

                                 }
                               
                           }
                  ?>
                  </a>
                  
               </div>
               <div class="thunk-product-content">
                   <?php 
                        $rat_product = wc_get_product($pid);
                        $rating_count =  $rat_product->get_rating_count();
                        $average =  $rat_product->get_average_rating();
                        echo $rating_count = wc_get_rating_html( $average, $rating_count );
                       ?>
                  <h2 class="woocommerce-loop-product__title"><a href="<?php the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><?php the_title(); ?></a></h2>
                  <div class="price"><?php echo $product->get_price_html(); ?></div> 
               </div>
               <div class="thunk-product-hover">     
                    <?php 
                      echo jot_shop_add_to_cart_url($product);
                      if(get_theme_mod( 'jot_shop_woo_quickview_enable', true )){
                  ?>
                   <div class="thunk-quickview">
                               <span class="quik-view">
                                   <a href="#" class="opn-quick-view-text" data-product_id="<?php echo esc_attr($pid); ?>">
                                      <span><?php _e('Quick View','jot-shop');?></span>
                                   </a>
                                </span>
                    </div>
                  <?php } 

                  if( ( class_exists( 'WPCleverWooscp' ))){
                    echo do_shortcode('[wooscp id='.$pid.']');
                  }
                    if( ( class_exists( 'YITH_Woocompare' )) && (! class_exists( 'WPCleverWooscp' ))){
                  echo jot_shop_add_to_compare_fltr($pid);
                }
                if( class_exists( 'YITH_WCWL' ) && (! class_exists( 'WPCleverWoosw' ))){
                      echo jot_shop_whish_list();
                    }
                      if( ( class_exists( 'WPCleverWoosw' ))){
                      echo do_shortcode('[woosw id='.$pid.']');
                    }
                  ?>
                   
            </div>
          </div>
        </div>
        </div>
   <?php endwhile;
    } else {
      echo __( 'No products found','jot-shop' );
    }
    
    exit;
  }
}
}

if(!function_exists('jot_shop_cat_filter_featured_big_prd_ajax')){
add_action('wp_ajax_jot_shop_cat_filter_featured_big_prd_ajax', 'jot_shop_cat_filter_featured_big_prd_ajax');
add_action('wp_ajax_nopriv_jot_shop_cat_filter_featured_big_prd_ajax', 'jot_shop_cat_filter_featured_big_prd_ajax');
function jot_shop_cat_filter_featured_big_prd_ajax(){ 
$args = array(
                      
                      'tax_query' => array(
                        'relation' => 'AND',
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['data_cat_slug'],
                          ),
                          array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                      ),
                      'post_type' => 'product',
                      'post__in'  => wc_get_featured_product_ids(),
                      'posts_per_page' => 1,
                      'orderby' => 'menu_order',
                      'meta_query' => array(
                              array(
                                  'key' => '_stock_status',
                                  'value' => 'instock'
                              ),
                              array(
                                  'key' => '_backorders',
                                  'value' => 'no'
                              ),
                          )

    );
   $products = new WP_Query( $args );
    if ( $products->have_posts() ){
      while ( $products->have_posts() ) : $products->the_post();
      global $product;
      $pid =  $product->get_id();
      ?>
        <div <?php post_class(); ?>>
          <div class="thunk-product-wrap">
          <div class="thunk-product">
               <div class="thunk-product-image">
                <a href="<?php the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                <?php $sale = get_post_meta( $pid, '_sale_price', true);
                    if( $sale) {
                      // Get product prices
                        $regular_price = (float) $product->get_regular_price(); // Regular price
                        $sale_price = (float) $product->get_price(); // Sale price
                        $saving_price = wc_price( $regular_price - $sale_price );
                        echo $sale = '<span class="onsale">-'.$saving_price.'</span>';
                    }?>
                 <?php the_post_thumbnail(); ?>
                  </a>
                
               </div>
               <div class="thunk-product-content">
                   <?php 
                        $rat_product = wc_get_product($pid);
                        $rating_count =  $rat_product->get_rating_count();
                        $average =  $rat_product->get_average_rating();
                        echo $rating_count = wc_get_rating_html( $average, $rating_count );
                       ?>
                  <h2 class="woocommerce-loop-product__title"><a href="<?php the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><?php the_title(); ?></a></h2>
                  <div class="price"><?php echo $product->get_price_html(); ?></div> 
               </div>
            <div class="thunk-product-hover">     
                    <?php 
                      echo jot_shop_add_to_cart_url($product);
                    if(get_theme_mod( 'jot_shop_woo_quickview_enable', true )){
                      ?>
                         <div class="thunk-quickview">
                               <span class="quik-view">
                                   <a href="#" class="opn-quick-view-text" data-product_id="<?php echo esc_attr($pid); ?>">
                                      <span><?php _e('Quick View','jot-shop');?></span>
                                   </a>
                                </span>
                          </div>
                     <?php  }
                     if( ( class_exists( 'WPCleverWooscp' ))){
                    echo do_shortcode('[wooscp id='.$pid.']');
                  }
                    if( ( class_exists( 'YITH_Woocompare' )) && (! class_exists( 'WPCleverWooscp' ))){
                  echo jot_shop_add_to_compare_fltr($pid);
                }
                if( class_exists( 'YITH_WCWL' ) && (! class_exists( 'WPCleverWoosw' ))){
                      echo jot_shop_whish_list();
                    }
                      if( ( class_exists( 'WPCleverWoosw' ))){
                      echo do_shortcode('[woosw id='.$pid.']');
                    }
                    ?>
            </div>
          </div>
        </div>
      </div>
   <?php endwhile;
    } 
    wp_reset_postdata();
    exit;
}
}

if(!function_exists('jot_shop_big_product_cat_filter_default_ajax_loop3')){
add_action( 'wp_ajax_jot_shop_big_product_cat_filter_default_ajax_loop3',        'jot_shop_big_product_cat_filter_default_ajax_loop3' );
add_action( 'wp_ajax_nopriv_jot_shop_big_product_cat_filter_default_ajax_loop3', 'jot_shop_big_product_cat_filter_default_ajax_loop3' );
function jot_shop_big_product_cat_filter_default_ajax_loop3(){ 
$prdct_optn = get_theme_mod('jot_shop_feature_product_optn','recent'); 
$exludeaary = jot_shop_featured_get_products_by_ID($_POST['data_cat_slug'],$prdct_optn);  
// product filter 
if( taxonomy_exists( 'product_cat' ) ){
     // product filter  
            $args = array(
                      'tax_query' => array(
                        'relation' => 'AND',
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['data_cat_slug'],
                          ),
                          array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                      ),
                      'post_type' => 'product',
                      'orderby'   => 'menu_order',
                      'ignore_sticky_posts'   => 1,
                      'post__not_in'  => $exludeaary,
                      'posts_per_page' => 4,
                      'meta_query' => array(
                              array(
                                  'key' => '_stock_status',
                                  'value' => 'instock'
                              ),
                              array(
                                  'key' => '_backorders',
                                  'value' => 'no'
                              ),
                          )
                  );

  if($prdct_optn=='random'){  
     $args = array(
                      
                      'tax_query' => array(
                        'relation' => 'AND',
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['data_cat_slug'],
                          ),
                           array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                      ),
                      'post_type' => 'product',
                      'orderby' => 'rand',
                      'ignore_sticky_posts'   => 1,
                      'post__not_in'  => $exludeaary,
                      'posts_per_page' => 4,
                      'meta_query' => array(
                              array(
                                  'key' => '_stock_status',
                                  'value' => 'instock'
                              ),
                              array(
                                  'key' => '_backorders',
                                  'value' => 'no'
                              ),
                          )
    );
}elseif($prdct_optn=='featured'){
    $args = array(
                      
                      'tax_query' => array(
                        'relation' => 'AND',
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['data_cat_slug'],
                          ),
                          array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                      ),
                      'post_type' => 'product',
                      'post__in'  => wc_get_featured_product_ids(),
                      'ignore_sticky_posts'   => 1,
                      'post__not_in'  =>$exludeaary,
                      'posts_per_page' => 4,
                      'meta_query' => array(
                              array(
                                  'key' => '_stock_status',
                                  'value' => 'instock'
                              ),
                              array(
                                  'key' => '_backorders',
                                  'value' => 'no'
                              ),
                          )
    );

}else{
    $args = array(
                      
                      'tax_query' => array(
                        'relation' => 'AND',
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['data_cat_slug'],
                          ),
                          array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                      ),
                      'post_type' => 'product',
                      'orderby' => 'menu_order',
                      'ignore_sticky_posts'   => 1,
                      'post__not_in'  => $exludeaary,
                      'posts_per_page' => 4,
                      'meta_query' => array(
                              array(
                                  'key' => '_stock_status',
                                  'value' => 'instock'
                              ),
                              array(
                                  'key' => '_backorders',
                                  'value' => 'no'
                              ),
                          )
    );
}
   
    $products = new WP_Query( $args );
     
    if ( $products->have_posts() ){

      while ( $products->have_posts() ) : $products->the_post();
      global $product;
      $pid =  $product->get_id();
     
      ?>
        <div <?php post_class(); ?>>
          <div class="thunk-product-wrap">
          <div class="thunk-product">
               <div class="thunk-product-image">
                <a href="<?php the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                <?php $sale = get_post_meta( $pid, '_sale_price', true);
                    if( $sale) {
                      // Get product prices
                        $regular_price = (float) $product->get_regular_price(); // Regular price
                        $sale_price = (float) $product->get_price(); // Sale price
                        $saving_price = wc_price( $regular_price - $sale_price );
                        echo $sale = '<span class="onsale">-'.$saving_price.'</span>';
                    }?>
                 <?php 
                      the_post_thumbnail(); 
                      $hover_style = get_theme_mod( 'jot_shop_woo_product_animation' );
                         // the_post_thumbnail();
                        if ( 'swap' === $hover_style ){
                                $attachment_ids = $product->get_gallery_image_ids($pid);
                                if(!empty($attachment_ids)){
                             
                                 $glr = wp_get_attachment_image($attachment_ids[0], 'shop_catalog', false, array( 'class' => 'show-on-hover' ));
                                   echo $category_product['glr'] = $glr;

                                 }
                               
                           }
                           if ( 'slide' === $hover_style ){
                                $attachment_ids = $product->get_gallery_image_ids($pid);
                                if(!empty($attachment_ids)){
                             
                                 $glr = wp_get_attachment_image($attachment_ids[0], 'shop_catalog', false, array( 'class' => 'show-on-slide' ));
                                   echo $category_product['glr'] = $glr;

                                 }
                               
                           }
                  ?>
                  </a>
                  
               </div>
               <div class="thunk-product-content">
                   <?php 
                        $rat_product = wc_get_product($pid);
                        $rating_count =  $rat_product->get_rating_count();
                        $average =  $rat_product->get_average_rating();
                        echo $rating_count = wc_get_rating_html( $average, $rating_count );
                       ?>
                  <h2 class="woocommerce-loop-product__title"><a href="<?php the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><?php the_title(); ?></a></h2>
                  <div class="price"><?php echo $product->get_price_html(); ?></div> 
               </div>
               <div class="thunk-product-hover">     
                    <?php 
                      echo jot_shop_add_to_cart_url($product);
                      if(get_theme_mod( 'jot_shop_woo_quickview_enable', true )){
                  ?>
                   <div class="thunk-quickview">
                               <span class="quik-view">
                                   <a href="#" class="opn-quick-view-text" data-product_id="<?php echo esc_attr($pid); ?>">
                                      <span><?php _e('Quick View','jot-shop');?></span>
                                   </a>
                                </span>
                    </div>
                  <?php } 

                 if( ( class_exists( 'WPCleverWooscp' ))){
                    echo do_shortcode('[wooscp id='.$pid.']');
                  }
                    if( ( class_exists( 'YITH_Woocompare' )) && (! class_exists( 'WPCleverWooscp' ))){
                  echo jot_shop_add_to_compare_fltr($pid);
                }
                if( class_exists( 'YITH_WCWL' ) && (! class_exists( 'WPCleverWoosw' ))){
                      echo jot_shop_whish_list();
                    }
                      if( ( class_exists( 'WPCleverWoosw' ))){
                      echo do_shortcode('[woosw id='.$pid.']');
                    }
                  ?>
                   
            </div>
          </div>
        </div>
        </div>
   <?php endwhile;
    } else {
      echo __( 'No products found','jot-shop' );
    }
    
    exit;
  }
 }
}