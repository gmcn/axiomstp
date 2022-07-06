<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

 $thumbnail = get_the_post_thumbnail();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-3'); ?>>
	<header class="entry-header">

		<?php if ($thumbnail) : ?>
			<?php echo get_the_post_thumbnail(); ?>
			<?php else: ?>
				<img width="300" height="300" src="/wp-content/uploads/woocommerce-placeholder-300x300.png" class="woocommerce-placeholder wp-post-image" alt="Placeholder" loading="lazy" srcset="/wp-content/uploads/woocommerce-placeholder-300x300.png 300w, /wp-content/uploads/woocommerce-placeholder-100x100.png 100w, /wp-content/uploads/woocommerce-placeholder-600x600.png 600w, /wp-content/uploads/woocommerce-placeholder-1024x1024.png 1024w, /wp-content/uploads/woocommerce-placeholder-150x150.png 150w, /wp-content/uploads/woocommerce-placeholder-768x768.png 768w, /wp-content/uploads/woocommerce-placeholder-550x550.png 550w, /wp-content/uploads/woocommerce-placeholder-420x420.png 420w, /wp-content/uploads/woocommerce-placeholder.png 1200w" sizes="(max-width: 300px) 100vw, 300px">
		<?php endif ?>

		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
