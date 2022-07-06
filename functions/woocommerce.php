<?php

function add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'add_woocommerce_support' );

add_action( 'after_setup_theme', 'woocommerce_gallery' );

function woocommerce_gallery() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'woocommerce_after_shop_loop_item', 'remove_add_to_cart_buttons', 1 );

function remove_add_to_cart_buttons() {
      if( is_product_category() || is_shop()) {
        remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');
      }
}
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 9 );


// if in_use_image is added, this will display on hover

function woocommerce_template_loop_product_thumbnail() {

  echo woocommerce_get_product_thumbnail();

  $product = new WC_Product( get_the_ID() );
  $attachment_ids = $product->get_gallery_image_ids();

  if ( is_array( $attachment_ids ) && !empty($attachment_ids) ) {
      $first_image_url = wp_get_attachment_url( $attachment_ids[0], "large" );
      echo '<div class="in_use_image" style=" background: url(' . $first_image_url . ') no-repeat center center #fff; background-size: cover; "></div>';
  }


}

/**
 * Change breadcrumb wrap
 */
add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
function jk_woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => ' &#47; ',
            'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb"><div class="container">',
            'wrap_after'  => '</dv></nav>',
            'before'      => '',
            'after'       => '',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
}


/**
* Hide shipping rates when free shipping is available.
* Updated to support WooCommerce 2.6 Shipping Zones.
*
* @param array $rates Array of rates found for the package.
* @return array
*/
function my_hide_shipping_when_free_is_available( $rates ) {
$free = array();
foreach ( $rates as $rate_id => $rate ) {
if ( 'free_shipping' === $rate->method_id ) {
  $free[ $rate_id ] = $rate;
  break;
}
}
return ! empty( $free ) ? $free : $rates;
}
add_filter( 'woocommerce_package_rates', 'my_hide_shipping_when_free_is_available', 100 );
