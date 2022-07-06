<?php if ( !is_front_page() && !is_home() && !is_product_category() ):

  $thumbnail = get_the_post_thumbnail_url()


  ?>

    <div class="container-fluid page-header <?php if(!$thumbnail) : ?>no-thumb<?php endif; ?>" style="background: url( <?php echo $thumbnail; ?> ) center center no-repeat; background-size: cover">
      <div class="container align-self-end">
        
        <div class="row">
          <div class="col-12">
            <h1><?php echo the_title(); ?></h1>
          </div>
        </div>

      </div>
    </div>

  <?php endif; ?>

  <?php if ( is_home() ):

    $thumbnail = get_the_post_thumbnail_url(1316);


    ?>

      <div class="container-fluid page-header <?php if(!$thumbnail) : ?>no-thumb<?php endif; ?>" style="background: url( <?php echo $thumbnail; ?> ) center center no-repeat; background-size: cover">
        <div class="container align-self-end">
          <h1>Insights</h1>
        </div>
      </div>

    <?php endif; ?>





    <?php if ( is_product_category() ): ?>

    <div class="container-fluid page-header product-cat-header" >
      <div class="container align-self-end">
        <h1><?php echo single_cat_title(); ?></h1>
      </div>
    </div>

  <?php endif; ?>
