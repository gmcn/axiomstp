<?php if( have_rows('flexible_content') ): ?>
 <?php while( have_rows('flexible_content') ): the_row(); ?>

   <?php if( get_row_layout() == 'hero_slider' ): ?>

     <?php include(locate_template("template-parts/flexi-content/hero-slider.php")); ?>

   <?php elseif( get_row_layout() == 'social_row' ): ?>

     <?php include(locate_template("template-parts/flexi-content/social-row.php")); ?>

   <?php elseif( get_row_layout() == 'section_intro' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-intro.php")); ?>

   <?php elseif( get_row_layout() == 'section_testimonials' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-testimonials.php")); ?>

   <?php elseif( get_row_layout() == 'section_case_study' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-cs.php")); ?>

   <?php elseif( get_row_layout() == 'paragraph' ): ?>

     <?php include(locate_template("template-parts/flexi-content/paragraph.php")); ?>

   <?php elseif( get_row_layout() == 'section_insights_slider' ): ?>

     <?php include(locate_template("template-parts/flexi-content/insights-slider.php")); ?>

   <?php elseif( get_row_layout() == 'section_stats' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-stats.php")); ?>

   <?php elseif( get_row_layout() == 'section_brands' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-brands.php")); ?>

   <?php elseif( get_row_layout() == 'product_cat' ): ?>

     <?php include(locate_template("template-parts/flexi-content/product-cats.php")); ?>

   <?php elseif( get_row_layout() == 'section_usp' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-usp.php")); ?>

   <?php elseif( get_row_layout() == 'section_help_you' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-help.php")); ?>

   <?php elseif( get_row_layout() == 'product_categories' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-prod-cat.php")); ?>

   <?php elseif( get_row_layout() == 'section_clients' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-clients.php")); ?>

   <?php elseif( get_row_layout() == 'section_multi_cta' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-multi-cta.php")); ?>

   <?php elseif( get_row_layout() == 'section_cta' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-cta.php")); ?>

   <?php elseif( get_row_layout() == 'latest_products' ): ?>

     <?php include(locate_template("template-parts/flexi-content/latest-products.php")); ?>

   <?php elseif( get_row_layout() == 'section_team' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-team.php")); ?>

   <?php elseif( get_row_layout() == 'section_copy_gallery' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-copy-gallery.php")); ?>



   <?php endif; ?>
 <?php endwhile; ?>
<?php endif; ?>
