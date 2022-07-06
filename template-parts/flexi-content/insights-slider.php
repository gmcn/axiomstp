<div class="insights-slider">

  <?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 10,
  );
  $query = new WP_Query( $args );
  if ( $query->have_posts() ) : ?>
  <div class="container-fluid swiper _js_related">


    <?php if (is_single()): ?>
      <h4>Related News</h4>
    <?php else : ?>
      <h4><?php echo get_sub_field('section_heading') ?></h4>
    <?php endif; ?>



    <div class="swiper-wrapper">
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>




        <div class="swiper-slide" style="background: #000 url(<?php echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>) center center / cover">

          <div class="align-self-end">

            <a href="<?php echo the_permalink(); ?>">

              <?php the_title(); ?>

            </a>

            <p class="date"><?php the_date(); ?></p>
          </div>







        </div>



      <?php endwhile; ?>

    </div>
    <div class="swiper-pagination"></div>
  </div>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>

</div>
