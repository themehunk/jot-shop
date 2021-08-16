<?php
/**
 * Perform WooCommerce function with Ajax
 *
 * @package Open WordPress theme
 */
add_action( 'wp_ajax_jot_shop_product_remove', 'jot_shop_product_remove' );
add_action( 'wp_ajax_nopriv_jot_shop_product_remove', 'jot_shop_product_remove' );
function  jot_shop_product_remove(){
    global $woocommerce;
    $cart = $woocommerce->cart;
    foreach ($woocommerce->cart->get_cart() as $cart_item_key => $cart_item){
    if($cart_item['product_id'] == $_POST['product_id'] ){
        // Remove product in the cart using  cart_item_key.
        $cart->remove_cart_item($cart_item_key);
        woocommerce_mini_cart();
        exit();
      }
    }
  die();
}

function jot_shop_product_count_update(){
   global $woocommerce; 
  ?>
<span class="cart-content"><?php echo sprintf ( _n( '<span class="count-item">%d <span class="item">item</span></span>', '<span class="count-item">%d <span class="item">items</span></span>', WC()->cart->get_cart_contents_count(),'jot-shop' ), WC()->cart->get_cart_contents_count(),'jot-shop'); ?><?php echo WC()->cart->get_cart_total(); ?></span>
<?php 
  die();
}
add_action( 'wp_ajax_jot_shop_product_count_update', 'jot_shop_product_count_update' );
add_action( 'wp_ajax_nopriv_jot_shop_product_count_update', 'jot_shop_product_count_update' );

/**
 * Live autocomplete search feature.
 *
 * @since 1.0.0
 */
function jot_shop_search_site(){
  if($_POST['cat']=='0'){
    $taxsrch = '';
    }else{
    $taxsrch = array(
                        
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['cat'],
                          ),
                        );
  }
   $results = new WP_Query( array(
    'post_type'     => 'product',
    'post_status'   => 'publish',
    'nopaging'      => true,
    'posts_per_page'=> 100,
    's'             => $_POST['match'],
    'tax_query' => $taxsrch,
  ) );
  $items = array();
  if ( !empty( $results->posts ) ){
    foreach ( $results->posts as $result ){
      $product = wc_get_product($result->ID);
      $items[] = array('label' => $result->post_title,'link' => get_permalink($result->ID), 'imglink' => get_the_post_thumbnail($result->ID, 'thumbnail' ),'price' => $product->get_price_html(), 'urli' => $urli);
     
    }
  }
 wp_send_json_success( $items );
}
add_action( 'wp_ajax_jot_shop_search_site',        'jot_shop_search_site' );
add_action( 'wp_ajax_nopriv_jot_shop_search_site', 'jot_shop_search_site' );