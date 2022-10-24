<div class="container">

  <?php
    $featured_products = get_sub_field('product_selection');
    if( $featured_products ): ?>

      <div class="latest-products">

        <h2><?php echo get_sub_field('section_heading') ?></h2>

        <p class="mb-5"><?php echo get_sub_field('section_paragraph') ?></p>

        <div class="swiper _js_latestproducts">
          <div class="swiper-wrapper ">


            <?php foreach( $featured_products as $featured_product ):
                $permalink = get_permalink( $featured_product->ID );
                $title = get_the_title( $featured_product->ID );
                $content = get_the_content( $featured_product->ID );
                $custom_field = get_field( 'field_name', $featured_product->ID );
                ?>


              <div class="swiper-slide">
                <div class="swiper-slide__thumbnail_wrap">

                  <?php


                  echo get_the_post_thumbnail($featured_product->ID, 'large');


                  $product = new WC_Product( $featured_product->ID );
                  $attachment_ids = $product->get_gallery_image_ids();

                  if ( is_array( $attachment_ids ) && !empty($attachment_ids) ) {
                      $first_image_url = wp_get_attachment_url( $attachment_ids[0], "large" );
                      echo '<div class="in_use_image" style=" background: url(' . $first_image_url . ') no-repeat center center #fff; background-size: cover; "></div>';
                  }


                   ?>

                  <a href="<?php echo $permalink; ?>">

                    <svg xmlns="http://www.w3.org/2000/svg" width="16.003" height="16.002" viewBox="0 0 16.003 16.002">
      						  <path id="Search" d="M1604.806,97.865l-3.847-3.846a6.738,6.738,0,1,0-.944.944l3.847,3.844a.667.667,0,1,0,.944-.941Zm-9.063-2.72a5.4,5.4,0,1,1,5.4-5.4A5.409,5.409,0,0,1,1595.744,95.145Z" transform="translate(-1589 -82.999)"></path>
      						</svg>

                  </a>


                </div>

                <h3><a href="<?php echo $permalink; ?>"><?php echo $title ; ?></a></h3>
                <?php echo wp_trim_words( $content, 20, '...' ); ?>


                <?php $price = get_post_meta( $featured_product->ID, '_price', true ); ?>
                <span class="woocommerce-Price-amount"><?php echo wc_price( $price ); ?></span>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>

        </div>

    </div>


  <?php endif; ?>

</div>
