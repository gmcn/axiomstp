<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Starting_Theme
 */

get_header(); ?>

	<article class="page-content">

		<div class="container">
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
				  yoast_breadcrumb( '<p class="breadcrumbs">','</p>' );
				}
				?>
		</div>




		<div class="page-header" style="background: url(<?php echo the_post_thumbnail_url(  ); ?>) center center / cover">

			<div class="container" style="display: flex; position: relative;">

					<div class="align-self-end">
						<p class="page-subtitle">

								<?php $categories = get_the_category(); ?>

								<?php echo esc_html( $categories[0]->name ); ?>

							</p>


						<h1><?php echo the_title(); ?></h1>

						<p class="page-date">
							<?php the_date(); ?>
						</p>



					</div>

			</div>

		</div>

		<div class="container post-content">
			<div class="row">

				<div class="col-md-1 post-content__share">


					<a href="https://twitter.com/share?url=<?php echo the_permalink() ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter">

						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="14.875" viewBox="0 0 18 14.875">
							<path id="Path_73" data-name="Path 73" d="M16-11.875l1.125-1.375A1.08,1.08,0,0,0,17.5-14a3.943,3.943,0,0,1-2.125.625h-.25L15-13.5a4.062,4.062,0,0,0-2.562-.875,3.63,3.63,0,0,0-2.562,1.063A3.4,3.4,0,0,0,8.75-10.75l.125,1H8.25A9.256,9.256,0,0,1,3.5-11.5,20.959,20.959,0,0,1,1-13.625a3.444,3.444,0,0,0-.375,2,5.386,5.386,0,0,0,.5,1.75l1,1.625-1.5-.875A3.338,3.338,0,0,0,2-6.25l.75.625L2-5.375A3.41,3.41,0,0,0,4.375-3L5.5-2.75l-1,.625a5.644,5.644,0,0,1-2.5,1,8.031,8.031,0,0,1-2,0A9.143,9.143,0,0,0,5.5.5,9.109,9.109,0,0,0,7,.375L7.75.25A10.909,10.909,0,0,0,13.5-3a11.742,11.742,0,0,0,2.375-4.375,13.41,13.41,0,0,0,.375-3v-.25l.125-.125q1-1,1.625-1.75Z" transform="translate(0 14.375)" fill="#00509f"></path>
						</svg>

					</a>


					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink() ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook">

						<svg xmlns="http://www.w3.org/2000/svg" width="7" height="14" viewBox="0 0 7 14">
						  <path id="facebook" d="M7.75,4.667H6V7H7.75v7h2.917V7h2.125L13,4.667H10.667V3.694c0-.557.112-.778.65-.778H13V0H10.779C8.681,0,7.75.923,7.75,2.692Z" transform="translate(-6)"></path>
						</svg>



					</a>

					<a href="https://www.linkedin.com/shareArticle?mini=true&summary=<?php echo the_excerpt() ?>&title=<?php echo the_title() ?>&url=<?php echo the_permalink() ?>" target="_blank">


						<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
							<path id="logo-linkedin" d="M47.64,32H33.453A1.387,1.387,0,0,0,32,33.324V47.543A1.5,1.5,0,0,0,33.453,49H47.636A1.42,1.42,0,0,0,49,47.543V33.324A1.3,1.3,0,0,0,47.64,32ZM37.27,46.17H34.834V38.6H37.27Zm-1.133-8.724h-.017a1.324,1.324,0,1,1,.017,0ZM46.17,46.17H43.735V42.03c0-.992-.354-1.67-1.236-1.67a1.332,1.332,0,0,0-1.249.9,1.64,1.64,0,0,0-.084.6V46.17H38.731V38.6h2.435v1.054a2.466,2.466,0,0,1,2.2-1.231c1.6,0,2.808,1.054,2.808,3.326Z" transform="translate(-32 -32)"></path>
						</svg>

					</a>

						<a href="mailto:?subject=<?php echo the_title() ?> - <?php echo the_permalink() ?>" title="Share by Email">

							<svg xmlns="http://www.w3.org/2000/svg" width="18.667" height="14" viewBox="0 0 18.667 14">
							  <path id="email" d="M9.333,10.555.012,3H18.655Zm0,2L0,4.993V17H18.667V4.993Z" transform="translate(0 -3)"></path>
							</svg>



					</a>



				</div>


				<div class="col-md-7">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content-post', get_post_format() );

						// the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div>
				<div class="col-md-4">


					<div class="post-content__sidebar">
						<div class="sidebar__block">

			        <p class="title">Search</p>

			        <form role="search" method="get" class="search-form" action="/">
			          <input type="search" class="search-field" placeholder="search keywords" value="" name="s">
			    		</form>


			      </div>

						<div class="sidebar__block">
							<p class="title">Categories</p>

							<?php
								wp_nav_menu( array(
									'theme_location'  => 'menu-sidebar',
									'depth'           => 0, // 1 = no dropdowns, 2 = with dropdowns.
									'container'       => 'div',
									'menu_class'      => 'sidebar_menu',
									) );
								?>

						</div>


						<div class="sidebar__block">

			        <p class="title">Latest Posts</p>

			        <div class="sidebar__popular-posts-wrapper">

			          <?php
								$args = array(
								  'post_type' => 'post',
									'posts_per_page' => 3,
								);
								$query = new WP_Query( $args );
								if ( $query->have_posts() ) : ?>
								    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

											<div class="row">
												<div class="col-4">
													<?php echo get_the_post_thumbnail( $post_id, 'square-small' ); ?>
												</div>

												<div class="col-8 align-self-center">

													<a class="popular-post" href="<?php echo the_permalink(); ?>">
														<?php the_title(); ?>
													</a>

													<p class="date"><?php the_date(); ?></p>


												</div>
											</div>

			              <?php endwhile; ?>
			          <?php endif; ?>
			          <?php wp_reset_postdata(); ?>

			        </div>
			      </div>
					</div>

					<?php //get_sidebar(); ?>





				</div>
			</div>
		</div>



	</article>


	<?php include('template-parts/flexi-content/insights-slider.php'); ?>




<?php
get_footer();
