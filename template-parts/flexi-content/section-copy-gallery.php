<div class="container-fluid section_copy_gallery">

  <div class="row">
    <div class="col-xl-4">
      <?php echo the_sub_field('section_copy_gallery__copy'); ?>
    </div>
    <div class="col-xl-8 section_copy_gallery__gallery">

      <?php
        $images = get_sub_field('section_copy_gallery__gallery');
        if( $images ): ?>
        <div class="swiper _js__gallery">
        <div class="swiper-wrapper">
                <?php foreach( $images as $image ): ?>
                  <div class="swiper-slide">
                        <!-- <a href="<?php echo esc_url($image['url']); ?>"> -->
                             <img src="<?php echo esc_url($image['sizes']['gallery-large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <!-- </a> -->
                    </div>
                <?php endforeach; ?>
              </div>
              <div class="swiper-button-next">

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="17.001" viewBox="0 0 24 17.001">
                  <path id="Next" d="M1820.161,1562.254a.843.843,0,0,0-1.21,0,.865.865,0,0,0,0,1.207l6.133,6.178h-20.238a.846.846,0,0,0-.847.854.856.856,0,0,0,.847.866h20.238l-6.133,6.166a.88.88,0,0,0,0,1.219.841.841,0,0,0,1.21,0l7.585-7.641a.843.843,0,0,0,0-1.206Z" transform="translate(-1804 -1561.998)" fill="#293341"/>
                </svg>


              </div>
              <div class="swiper-button-prev">

                <svg xmlns="http://www.w3.org/2000/svg" width="23.969" height="16.969" viewBox="0 0 23.969 16.969">
                    <path id="Previous" d="M1741.86,1578.744a.841.841,0,0,0,1.208,0,.863.863,0,0,0,0-1.2l-6.125-6.167h20.212a.858.858,0,0,0,0-1.716h-20.212l6.125-6.156a.878.878,0,0,0,0-1.217.844.844,0,0,0-1.208,0l-7.575,7.627a.842.842,0,0,0,0,1.2Z" transform="translate(-1734.031 -1562.03)" fill="#293341"/>
                  </svg>



              </div>
            </div>
        <?php endif; ?>
    </div>
  </div>

</div>
