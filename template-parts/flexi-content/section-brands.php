<div class="container-fluid section-brands">
  <?php if ( have_rows('brands') ): ?>
    <div class="container">

      <h2>Axiom Exclusive Brands</h2>


      <div class="row">
        <?php while ( have_rows('brands') ) : the_row();

        $brand_logo = get_sub_field('brand_logo');
        $brand_details = get_sub_field('brand_details');
        $brand_url = get_sub_field('brand_url');



        ?>
          <div class="col-md-6 wow fadeInUp">

            <?php //echo $brand_logo ?>

            <img src="<?php echo esc_url($brand_logo['url']); ?>" alt="<?php echo esc_attr($brand_logo['alt']); ?>" />

            <p><?php echo $brand_details ?></p>

            <a target="_blank" href="https://<?php echo $brand_url ?>"><?php echo $brand_url ?></a>





          </div>
        <?php endwhile; ?>
      </div>
  </div>
  <?php endif; ?>
</div>
