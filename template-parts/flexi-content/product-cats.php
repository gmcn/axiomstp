<div class="row product-cat_list">

      <?php

        $taxonomy     = 'product_cat';
        $orderby      = 'menu_order';
        $show_count   = 0;      // 1 for yes, 0 for no
        $pad_counts   = 0;      // 1 for yes, 0 for no
        $hierarchical = 1;      // 1 for yes, 0 for no
        $title        = '';
        $empty        = 1;

        $args = array(
               'taxonomy'     => $taxonomy,
               'orderby'      => $orderby,
               'show_count'   => $show_count,
               'pad_counts'   => $pad_counts,
               'hierarchical' => $hierarchical,
               'title_li'     => $title,
               'hide_empty'   => $empty
        );
       $all_categories = get_categories( $args ); ?>


      <?php foreach ($all_categories as $cat) {
          if($cat->category_parent == 0) {


              $category_id = $cat->term_id;


              $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
              $image = wp_get_attachment_url( $thumbnail_id );



              ?>



              <div class="col-md-4 product-cat_list__cat wow fadeInUp" style="background: url(<?php echo $image; ?>)">

                <h3><?php echo $cat->name; ?></h3>

                <p><?php echo $cat->description; ?></p>

                <a href="/product-category/<?php echo $cat->slug; ?>">View Products

                  <svg xmlns="http://www.w3.org/2000/svg" width="5.737" height="6.609" viewBox="0 0 5.737 6.609">
                    <path id="polygon9" d="M34.326,17.6l-5.737-3.3V20.9Z" transform="translate(-28.589 -14.294)" fill="#fff"/>
                  </svg>

                </a>
              </div>


              <?php  ?>




      <?php
          }
      }
      ?>

</div>
