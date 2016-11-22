<?php
/**
 * The main template file.
 *Template Name: front-page
 * @package Montessori_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!-- <div class="home container"> -->

      <section class="home-wrapper container">
				<h2 class="site-title screen-reader-text">Montessori Society</h2>
        <img src="<?php bloginfo('template_directory'); ?>/images/header-pic2.jpg" alt="img" />
<!-- this is for the welcoming title  -->
        <div class="container-wrapper">
          <h2> <?php echo CFS()->get('banner_header'); ?> </h2>
            <p><?php echo CFS()->get('banner_paragraph') ?></p>
            <a class="red-btn" href="<?php echo esc_url(the_permalink()); ?>/about/">Our Society Role</a>
        </div>
      </section>

<!-- this is for the quick links -->
    <section class="links-wrapper container">
      <h2> <?php echo CFS()->get('links_title'); ?> </h2>

          <p><?php echo CFS()->get('contents'); ?></p>
        </article>

        <article class="nw-program">
          <a class="green-btn" href="<?php echo esc_url(the_permalink()); ?>/nw-program/">NW Program</a>
          <p><?php echo CFS()->get('nw_text'); ?></p>
        </article>

        <article class="involved">
          <a class="red-btn" href="<?php echo esc_url(the_permalink()); ?>/get-involved/">Get involved</a>
          <p><?php echo CFS()->get('get_text'); ?></p>
        </article>

    </section>

    <!-- we need your support section -->

    <section class="support-wrapper container">
      <div class="information">
        <p class="info"> <?php echo CFS()->get('info_paragraph'); ?></p>
        	<a class="red-btn" href="<?php echo esc_url(the_permalink()); ?>">Support Now</a>
          <a class="green-btn" href="<?php echo esc_url(the_permalink()); ?>">How $ is Spent</a>
      </div>
    </section>
<!-- this is for the features news  -->
    <section class="all-features container">

    <h2> <?php echo CFS()->get('featured_title'); ?></h2>
    <section class="features-wrapper container">

      <div class="front-page-posts">
        <ul class="post container">
        	<?php
        	$args = array(
      			'post_type' => 'post',
      			'posts_per_page' => 3,
      		  'order'=> 'DESC',); // returns an array of posts

          	$postslist = get_posts( $args );
          	foreach ( $postslist as $post ) :
          	setup_postdata( $post ); ?>
          	<li >
          			<div class="information-journal">
                  <?php the_title(); ?>
        				<!-- <?php the_title( sprintf( '<p><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ); ?> -->
          			<a class="btn" href="<?php the_permalink(); ?>">Read More</a>
          			</div>
          	</li>
          <?php
          endforeach;
          wp_reset_postdata();
          ?>
        </ul>
      </div>

      <!-- <div class="features"> -->

      <section class="features-wrapper container">

        <div class="features-flipper">
          <p class="front">
            <?php echo CFS()->get('features_front'); ?>
          </p>
          <p class="features-back">
            <?php echo CFS()->get('features_back'); ?>
            <a class="green-btn" href="<?php echo esc_url(the_permalink()); ?>">Read More</a>
          </p>
        </div>
      </section>
<!-- second flipper -->

        <section class="features-wrapper container">
            <div class="features-flipper">
              <p class="front">
                <?php echo CFS()->get('second_features_front'); ?>
              </p>
              <p class="features-back">
                <?php echo CFS()->get('second_features_back'); ?>
                <a class="green-btn" href="<?php echo esc_url(the_permalink()); ?>">Read More</a>
              </p>
            </div>
        </section>
<!-- third flipper -->
            <section class="features-wrapper container">
                <div class="features-flipper">
                  <p class="front">
                    <?php echo CFS()->get('third_features_front'); ?>
                  </p>
                  <p class="features-back">
                    <?php echo CFS()->get('third_features_back'); ?>
                    <a class="green-btn" href="<?php echo esc_url(the_permalink()); ?>">Read More</a>
                  </p>
                </div>
              </section>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

  <?php get_footer(); ?>
