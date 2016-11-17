<?php
/**
 * The main template file.
 *Template Name: front-page
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <section class="home-hero">
				<h2 class="site-title screen-reader-text">Montessori Society</h2>
        <img src="<?php bloginfo('template_directory'); ?>/images/header-pic2.jpg" alt="logo" />
      </section>

<!-- this is for the welcoming  -->
  <section class="home-wrapper">
    <div class="container-wrapper">
      <h2> <?php echo CFS()->get('banner_header'); ?> </h2>
        <p><?php echo CFS()->get('banner_paragraph') ?></p>

        <button class="red-btn" type="button" name="button">Our Society Role</button>
    </div>
  </section>
<!-- this is for the quick links -->
    <section>
      <h2> <?php echo CFS()->get('links_title'); ?> </h2>
        <button class="green-btn" type="button" name="button">Benefits of Montessori</button>
          <p><?php echo CFS()->get('contents') ?></p>
        <button class="green-btn" type="button" name="button">NW Program</button>
          <p><?php echo CFS()->get('nw_text') ?></p>
        <button class="red-btn" type="button" name="button">Get involved</button>
          <p><?php echo CFS()->get('get_text') ?></p>
    </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
