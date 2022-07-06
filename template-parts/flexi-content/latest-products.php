<?php //echo do_shortcode('[products limit="4" columns="4" class="quick-sale" ]') ?>
<div class="container">

  <?php
  $args = array(
    'post_type' => 'product',
    'posts_per_page' => 12,
  );
  $query = new WP_Query( $args );
  if ( $query->have_posts() ) : ?>



      <div class="latest-products">

        <h2><?php echo get_sub_field('section_heading') ?></h2>

        <p class="mb-5"><?php echo get_sub_field('section_paragraph') ?></p>

        <div class="swiper _js_latestproducts">
          <div class="swiper-wrapper ">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="swiper-slide">
                <div class="swiper-slide__thumbnail_wrap">

                  <?php the_post_thumbnail();


                  $product = new WC_Product( get_the_ID() );
                  $attachment_ids = $product->get_gallery_image_ids();

                  if ( is_array( $attachment_ids ) && !empty($attachment_ids) ) {
                      $first_image_url = wp_get_attachment_url( $attachment_ids[0], "large" );
                      echo '<div class="in_use_image" style=" background: url(' . $first_image_url . ') no-repeat center center #fff; background-size: cover; "></div>';
                  }


                   ?>

                  <a href="<?php the_permalink(); ?>">

                    <svg xmlns="http://www.w3.org/2000/svg" width="16.003" height="16.002" viewBox="0 0 16.003 16.002">
      						  <path id="Search" d="M1604.806,97.865l-3.847-3.846a6.738,6.738,0,1,0-.944.944l3.847,3.844a.667.667,0,1,0,.944-.941Zm-9.063-2.72a5.4,5.4,0,1,1,5.4-5.4A5.409,5.409,0,0,1,1595.744,95.145Z" transform="translate(-1589 -82.999)"></path>
      						</svg>

                  </a>


                </div>

                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php echo wp_trim_words( get_the_content(), 20, '...' ); ?>


                <?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>
                <span class="woocommerce-Price-amount"><?php echo wc_price( $price ); ?></span>
              </div>
            <?php endwhile; ?>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>

        </div>

    </div>


  <?php endif; ?>
  <?php wp_reset_postdata(); ?>

</div>
