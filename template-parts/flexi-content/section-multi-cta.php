


<section class="container section-multi-cta">

  <div class="row">

    <?php if ( have_rows('multi_cta') ): ?>

        <?php $i = 1; while ( have_rows('multi_cta') ) : the_row(); ?>
          <div class="col-md-6 col-lg-3 section-multi-cta__cta wow <?php if ($i % 2): ?>fadeInDown <?php else: ?> fadeInUp <?php endif ?>">

            <div class="section-multi-cta__cta__wrap align-self-end ">

                <img src="<?php echo the_sub_field('multi_cta_image'); ?>" alt="<?php echo the_sub_field('usp_heading'); ?>">
                <h3><?php echo the_sub_field('multi_cta_heading'); ?></h3>


                <div class="hide">
                  <p><?php echo the_sub_field('multi_cta_description'); ?></p>

                  <?php
                    $link = get_sub_field('multi_cta_link');
                    if( $link ):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">


                          <?php echo esc_html( $link_title ); ?>

                          <svg xmlns="http://www.w3.org/2000/svg" width="5.737" height="6.609" viewBox="0 0 5.737 6.609">
                            <path id="polygon9" d="M34.326,17.6l-5.737-3.3V20.9Z" transform="translate(-28.589 -14.294)" fill="#fff"/>
                          </svg>

                        </a>
                    <?php endif; ?>
                </div>
            </div>





          </div>
        <?php $i++; endwhile; ?>

    <?php endif; ?>


  </div>


</section>
