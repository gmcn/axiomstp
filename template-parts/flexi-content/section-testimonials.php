<?php

  $testimonial = get_sub_field('testimonial');
  $testimonial_byline = get_sub_field('testimonial_byline');

 ?>

 <!-- <div class="container section-quote">

   <p class="section-quote__title">What customers say</p>

   <p class="section-quote__quote">

     <?php echo $testimonial; ?>

   </p>

    <p class="section-quote__name"><?php echo $testimonial_byline; ?></p>

 </div> -->



 <div class="container section-quote">

   <p class="section-quote__title">What customers say</p>


    <?php if ( have_rows('testimonials_rf') ): ?>
       <!-- Swiper -->
           <div class="swiper myswiper _js_quote">
             <div class="swiper-wrapper">


               <?php while ( have_rows('testimonials_rf') ) : the_row();




               ?>
               <div class="swiper-slide">


                 <p class="section-quote__quote">

                   <?php the_sub_field('testimonial'); ?>

                 </p>

                  <p class="section-quote__name"><?php the_sub_field('testimonial_byline'); ?></p>


               </div>

               <?php endwhile; ?>


             </div>
             <div class="swiper-scrollbar"></div>
           </div>

    <?php endif; ?>

 </div>
