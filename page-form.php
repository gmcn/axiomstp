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

			

			<?php if ( $formId == 208 ) : ?>

			<!-- Begin Mailchimp Signup Form -->
			<div id="mc_embed_signup">
			<form action="https://axiomsp.us10.list-manage.com/subscribe/post?u=f7e82b844678d7da02d8ca070&amp;id=0666c991a0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<div id="mc_embed_signup_scroll">
			
			<div class="form-group">
				<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
				<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
			</div><!-- /.form-group -->
			<div class="form-group">
				<label for="mce-FNAME">First Name </label>
				<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
			</div><!-- /.form-group -->
			<div class="form-group">
				<label for="mce-LNAME">Last Name </label>
				<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
			</div><!-- /.form-group -->
				<div id="mce-responses" class="clear">
					<div class="response alert alert-danger" id="mce-error-response" style="display:none"></div>
					<div class="response alert alert-success" id="mce-success-response" style="display:none"></div>
				</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f7e82b844678d7da02d8ca070_0666c991a0" tabindex="-1" value=""></div>
				<div class="clear">
					<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button wpcf7-submit"></div>
				</div>
			</form>
			</div>
			<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';fnames[6]='MMERGE6';ftypes[6]='address';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
			<!--End mc_embed_signup-->

			<?php else : ?>
				<?php echo do_shortcode('[contact-form-7 id="' . $formId . '"]') ?>
			<?php endif; ?>
				
			</div>

		</div>


	</div>

	<?php include('template-parts/content-flexi.php'); ?>

<?php
//get_sidebar();
get_footer();
