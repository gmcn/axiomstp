<?php

$video_image = get_sub_field('section_help_you_video_image');
$video_title = get_sub_field('section_help_you_video_title');
$video_link = get_sub_field('section_help_you_video_link');
$content_heading = get_sub_field('section_help_you_content_heading');



 ?>

<section class="container-fluid section-help">

  <div class="container">
    <div class="row">
      <div class="col-lg-6">

        <img src="<?php echo $video_image; ?>" alt="<?php echo $video_title; ?>">

        <div class="section-help__wrap">
          <p class="video-title"><?php echo $video_title; ?></p>

          <a class="fancybox" data-fancybox-type="iframe" href="<?php echo $video_link; ?>">

            <svg xmlns="http://www.w3.org/2000/svg" width="119.19" height="119.189" viewBox="0 0 119.19 119.189">
              <g id="Group_9" data-name="Group 9" transform="translate(-869.055 -1778.887)">
                <circle id="Background" cx="57.38" cy="57.38" r="57.38" transform="translate(871.27 1781.102)" fill="#fff" opacity="0.431"/>
                <circle id="Background_copy_2" data-name="Background copy 2" cx="57.38" cy="57.38" r="57.38" transform="translate(871.27 1781.102)" fill="none" stroke="#fff" stroke-width="4.43"/>
                <path id="polygon9" d="M82.176,45.124,28.589,14.3V75.948Z" transform="translate(881.489 1793.055)" fill="#fff"/>
              </g>
            </svg>



          </a>

        </div>

      </div>

      <div class="col-lg-6 d-flex">

        <div class="align-self-center">
          <p class="title"><?php echo $content_heading; ?></p>

          <?php if ( have_rows('section_help_you_content') ): ?>
            <div id="accordion">

              <?php $i = 1; while ( have_rows('section_help_you_content') ) : the_row(); ?>


                  <div class="card-header" id="heading<?php echo $i ?>">

                      <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse<?php echo $i ?>" aria-expanded="true" aria-controls="collapse<?php echo $i ?>">
                        <?php the_sub_field('section_help_you_content_title'); ?>
                      </a>

                  </div>

                  <div id="collapse<?php echo $i ?>" class="collapse <?php if($i == 1) : ?><!--show--><?php endif; ?>" aria-labelledby="heading<?php echo $i ?>" data-parent="#accordion">
                    <div class="card-body">
                      <?php the_sub_field('section_help_you_content_copy'); ?>
                    </div>
                  </div>


              <?php $i++; endwhile; ?>

              </div>
          <?php endif; ?>
        </div>


      </div>

    </div>
  </div>






</section>
