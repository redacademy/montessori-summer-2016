<?php
/**
 * The template for displaying all single posts.
 * Template Name: contact
 * @package montessori_Theme

 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <div class="contact_info">
        <p class="contact-info"> <?php echo CFS()->get('contact_info'); ?> </p>
        <a href="https://www.facebook.com/pages/Vancouver-Montessori-School/219470428069793?hc_ref=SEARCH"><i class="fa fa-facebook-official"></i> Like us on Facebook</a>
	</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
