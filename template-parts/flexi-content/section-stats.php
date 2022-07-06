<section class="container-fluid stats">

  <div class="container">

    <h2>Axiom By The Numbers</h2>

    <?php if ( have_rows('statistics') ): ?>
      <div class="row no-gutters">
        <?php while ( have_rows('statistics') ) : the_row(); ?>
          <div class="col-6 col-lg-3 stats__wrap">
            <p class="wow stat"><span class="count"><?php the_sub_field('statistic'); ?></span><?php the_sub_field('statistic_letters'); ?></p>
            <p><?php the_sub_field('statistic_details'); ?></p>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>

</section>
