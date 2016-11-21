<?php
/**
 * The main template file.
 *Template Name: front-page
 * @package Montessori_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <section class="home-wrapper container">
				<h2 class="site-title screen-reader-text">Montessori Society</h2>
        <img src="<?php bloginfo('template_directory'); ?>/images/header-pic2.jpg" alt="img" />
<!-- this is for the welcoming  -->
    <div class="container-wrapper">
      <h2> <?php echo CFS()->get('banner_header'); ?> </h2>
        <p><?php echo CFS()->get('banner_paragraph') ?></p>
        <a class="red-btn" href="<?php the_permalink(); ?>">Our Society Role</a>
    </div>
  </section>

<!-- this is for the quick links -->
    <section class="links-wrapper container">
      <h2> <?php echo CFS()->get('links_title'); ?> </h2>

        <article class="benifits">
          <a class="green-btn" href="<?php the_permalink(); ?>">Benefits of Montessori</a>
          <p><?php echo CFS()->get('contents'); ?></p>
        </article>

        <article class="nw-program">
          <a class="green-btn" href="<?php the_permalink(); ?>">NW Program</a>
          <p><?php echo CFS()->get('nw_text'); ?></p>
        </article>

        <article class="involved">
          <a class="red-btn" href="<?php the_permalink(); ?>">Get involved</a>
          <p><?php echo CFS()->get('get_text'); ?></p>
        </article>

    </section>

    <!-- we need your support section -->

    <section class="support-wrapper container">
      <div class="information">
        <p class="info"> <?php echo CFS()->get('info_paragraph'); ?></p>
        	<a class="red-btn" href="<?php the_permalink(); ?>">Support Now</a>
          <a class="green-btn" href="<?php the_permalink(); ?>">How $ is Spent</a>
      </div>
    </section>

    <h2> <?php echo CFS()->get('featured_title'); ?></h2>
    <section class="features-wrapper container">
      <!-- <div class="features"> -->
        <div class="features-flipper">
          <p class="front">
            <?php echo CFS()->get('features_front'); ?>
          </p>
          <p class="features-back">
            <?php echo CFS()->get('features_back'); ?> <br>
            <a class="green-btn" href="<?php the_permalink(); ?>">Read More</a>
          </p>
        </div>
    <!-- </div> -->
    </section>

		</main><!-- #main -->
	</div><!-- #primary -->

  <?php get_footer(); ?>
