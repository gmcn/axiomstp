<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php include('template-parts/page-header.php'); ?>

<div class="news-masonry__container">

<section class="webpage__masonry masonry">

	<?php
	$args = array(
	  'post_type' => 'post',
		'posts_per_page' => -1,
	);
	$query = new WP_Query( $args ); ?>

		<?php if ( $query->have_posts() ) : ?>

			<header class="works__header">

				<div class="filter controls news-list__filter">

					<a class="filter__item filter__item--active" type="button" data-filter="*">All</a>
					<a class="filter__item" type="button" data-filter=".__js_latest News">Latest News</a>
					<a class="filter__item" type="button" data-filter=".__js_surface-protection"> Surface Protection</a>
					<a class="filter__item" type="button" data-filter=".__js_dust-control">Dust Control</a>
					<a class="filter__item" type="button" data-filter=".__js_new-products">New Products</a>
					<a class="filter__item" type="button" data-filter=".__js_hvac-protection">HVAC Protection</a>
					<a class="filter__item" type="button" data-filter=".__js_hints-tips">Hints & Tips</a>
					<a class="filter__item" type="button" data-filter=".__js_floor-protection">Floor Protection</a>


				</div>

			</header>

			<div class="grid-wrapper __js_gallery-filter">

			<?php
			/* Start the Loop */
			while ( $query->have_posts() ) : $query->the_post();

					$terms  = wp_get_object_terms( $post->ID, 'category' );
					$cats  = wp_list_pluck( $terms, 'slug' );
					// $output = implode( ', ', $names );

					$date = get_the_date();


			?>

			<div class="masonry-item gallery-item <?php echo "__js_" . implode( ' __js_', $cats ); ?>" style="background: url(<?php echo the_post_thumbnail_url('medium'); ?>) center center; background-size: cover;">

				<?php echo the_post_thumbnail('large'); ?>


				<div class="align-self-end">

					<a href="<?php echo the_permalink(); ?>">

						<?php the_title(); ?>

					</a>

					<p class="date"><?php echo $date; ?></p>
				</div>

			</div>


		<?php	endwhile; ?>
		<?php wp_reset_postdata(); ?>

		</div>

		<?php endif; ?>

	</section><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
