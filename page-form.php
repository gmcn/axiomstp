<?php
/**
 * Template Name: Form Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header();

$formId = get_field('form_id');

?>

<?php include('template-parts/page-header.php'); ?>

	<div class="container page-contact">

		<div class="row">

			<div class="col-md-6">
				<?php echo the_content(); ?>
			</div>

			<div class="col-md-6">
				<?php echo do_shortcode('[contact-form-7 id="' . $formId . '"]') ?>
			</div>

		</div>


	</div>

	<?php include('template-parts/content-flexi.php'); ?>

<?php
//get_sidebar();
get_footer();
