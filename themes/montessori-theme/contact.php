<?php
/**
 * The template for displaying all single posts.
 * Template Name: contact
 * @package montessori_Theme

 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <div id="contact-us" class="contact_info content-wrapper wpcf7-form-control-wrap">
	        <p class="contact-info"><?php echo CFS()->get('contact_info'); ?></p>
					<div class="facebook-btn">
						<a href="https://www.facebook.com/pages/Vancouver-Montessori-School/219470428069793?hc_ref=SEARCH"><i class="fa fa-facebook-official"></i> Like us on Facebook</a>
					</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
