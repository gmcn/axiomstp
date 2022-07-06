<section class="container-fluid section-usps">

  <div class="row">

    <?php if ( have_rows('usps') ): ?>

        <?php while ( have_rows('usps') ) : the_row(); ?>
          <div class="col-md-4 section-usps__usp wow fadeIn">

            <img src="<?php the_sub_field('usp_image'); ?>" alt="<?php the_sub_field('usp_heading'); ?>">
            <h4><?php the_sub_field('usp_heading'); ?></h4>
            <p><?php the_sub_field('usp_description'); ?></p>

          </div>
        <?php endwhile; ?>

    <?php endif; ?>


  </div>


</section>
