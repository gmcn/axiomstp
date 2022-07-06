<?php if ( have_rows('hero_slider') ): ?>
  <div class="swiper heroSwiper">
    <div class="swiper-wrapper">
    <?php while ( have_rows('hero_slider') ) : the_row();

    $hero_slider_image = get_sub_field('hero_slider_image');
    $hero_slider_video = get_sub_field('hero_slider_video');
    // $hero_slider_sub_title = get_sub_field('hero_slider_sub_title');
    $hero_slider_main_title = get_sub_field('hero_slider_main_title');
    $hero_slider_description = get_sub_field('hero_slider_description');


    ?>

    <div class="swiper-slide" style="background: url(<?php echo $hero_slider_image ?>) center center; background-size: cover;">

      <?php if ($hero_slider_video): ?>


        <video width="100%" autoplay="" playsinline="" muted="muted" loop="loop">
          <source src="<?php echo $hero_slider_video ?>" type="video/mp4" autoplay muted>
        </video>


      <?php endif; ?>

      <div class="swiper-slide__content align-self-center container">

        <div class="">

          <h1>
            <?php echo $hero_slider_main_title ?>
          </h1>

          <p><?php echo $hero_slider_description ?></p>


          <?php if ( have_rows('hero_slider_links') ): ?>
              <?php while ( have_rows('hero_slider_links') ) : the_row(); ?>
                <?php
                $lightbox = get_sub_field('lightbox');
                  $link = get_sub_field('links');
                  if( $link ):
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self';
                      ?>


                      <a <?php if ($lightbox): ?>class="fancybox" data-fancybox-type="iframe"<?php endif; ?> href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?>

                        <svg xmlns="http://www.w3.org/2000/svg" width="5.737" height="6.609" viewBox="0 0 5.737 6.609">
                          <path id="polygon9" d="M34.326,17.6l-5.737-3.3V20.9Z" transform="translate(-28.589 -14.294)" fill="#fff"/>
                        </svg>


											</a>
                  <?php endif; ?>
              <?php endwhile; ?>
          <?php endif; ?>
        </div>


      </div>



    </div>
    <?php endwhile; ?>
  </div>
  <!-- <div class="swiper-pagination"></div> -->
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
