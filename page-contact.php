<?php
/**
 * Template Name: Contact Page
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

get_header(); ?>

<?php include('template-parts/page-header.php'); ?>

	<div class="container page-contact">

		<div class="row">

			<div class="col-md-6">
				<?php echo the_content(); ?>
			</div>

			<div class="col-md-6">
				<?php echo do_shortcode('[contact-form-7 id="171" title="Contact"]') ?>
			</div>

		</div>


	</div>

	<div class="contact_map">

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2470.9472259062077!2d-114.00557148969291!3d51.10033548819031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x537164f58f72cdb7%3A0x31e3d3b093b23b3e!2sAxiom%20Surface%20Protection%20Inc.!5e0!3m2!1sen!2suk!4v1652799556607!5m2!1sen!2suk" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

	</div>

	<?php include('template-parts/content-flexi.php'); ?>

<?php
//get_sidebar();
get_footer();
