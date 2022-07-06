<?php

$cta_title = get_sub_field('cta_title');
$cta_details = get_sub_field('cta_details');
$cta_link = get_sub_field('cta_link');

 ?>

  <div class="cta-bar">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 cta-bar_copy align-self-center">
          <p class="cta-bar_header wow fadeIn"><?php echo $cta_title ?></p>
          <!-- <p class="wow fadeIn"><?php echo $cta_details ?></p> -->
        </div>
        <div class="col-lg-6 cta-bar_link align-self-center">


          <?php
            if( $cta_link ):
                $link_url = $cta_link['url'];
                $link_title = $cta_link['title'];
                $link_target = $cta_link['target'] ? $cta_link['target'] : '_self';
                ?>
                <a class="wow fadeIn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                  <?php echo esc_html( $link_title ); ?>

                  <svg xmlns="http://www.w3.org/2000/svg" width="5.737" height="6.609" viewBox="0 0 5.737 6.609">
                    <path id="polygon9" d="M34.326,17.6l-5.737-3.3V20.9Z" transform="translate(-28.589 -14.294)" fill="#fff"/>
                  </svg>


                </a>
            <?php endif; ?>

        </div>
      </div>
    </div>

  </div>
