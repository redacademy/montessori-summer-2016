<?php
/**
 * The main template file.
 *Template Name: front-page
 * @package Montessori_Theme
 */
get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
      <div class="home container">
      <section class="home-wrapper">
        <div class="home-img">
          <img src="<?php bloginfo('template_directory'); ?>/images/header-pic2.jpg" alt="img" />
        </div>
<!-- this is for the welcoming title  -->
        <div class="welcome-wrapper ">
            <h2> <?php echo CFS()->get('banner_header'); ?> </h2>
            <p><?php echo CFS()->get('banner_paragraph') ?></p>
            <a class="red-btn" href="<?php echo esc_url(the_permalink()); ?>/about/">Our Society Role</a>
        </div>
      </section>
<!-- this is for the quick links -->
    <div class="link-title">
      <h2> <?php echo CFS()->get('links_title'); ?> </h2>

    </div>

      <section class="links-wrapper ">
          <article class="benifits">
            <a class="green-btn" href="<?php  echo esc_url(the_permalink()); ?>/what-is-montessori/">Benefits of Montessori</a>
            <p><?php echo CFS()->get('contents'); ?></p>
          </article>
          <article class="nw-program-page">
            <a class="green-btn" href="<?php echo esc_url(the_permalink()); ?>/nw-program/">NW Program</a>
            <p><?php echo CFS()->get('nw_text'); ?></p>
          </article>
          <article class="involved">
            <a class="red-btn" href="<?php echo esc_url(the_permalink()); ?>/get-involved/">Get involved</a>
            <p><?php echo CFS()->get('get_text'); ?></p>
          </article>
      </section>
<!-- we need your support section -->
    <section class="support-wrapper ">
      <div class="information">
        <h2> <?php echo CFS()->get('support_title'); ?> </h2>
        <p class="info"> <?php echo CFS()->get('first_support_paragraph'); ?> </p>
        <div class="support-img-wrapper">
           <img src="<?php bloginfo('template_directory'); ?>/images/Group-8.jpg" alt="image" />
            <p class="image-text"> Your monthly contribution costs only two Lattes a month.</p>
        </div>
       <?php echo CFS()->get('second_support_paragraph'); ?>
       <div class="btn">
            <a class="red-btn" href="<?php echo esc_url(the_permalink()); ?>/get-involved/">Support Now</a>
          <a class="green-btn" href="<?php echo esc_url(the_permalink()); ?>/nw-program/">How Money is Spent</a>
        </div>
      </div>
    </section>


<!-- this is for the features news  -->
    <asection class="all-features">
         <h2> Features News</h2>
                    <!-- // All the content in the loop goes here -->
              <div class="features-wrapper">
                <div class="features-flipper" >

                         <?php $args = CFS()->get('features_news'); ?>

              <?php
              //Loop through posts
              $args = array(
                'posts_per_page' => 3,
              );
              $my_query = new WP_Query( $args );
              if ( $my_query->have_posts() ) {
                while ( $my_query->have_posts() ) {
                  $my_query->the_post();
              ?>
                    <p class="front"><?php the_title(  ); ?> </p>
                    <div class="features-back"> <?php the_content(); ?> </div>
                 <?php
                 ?>
                  <a class="btn" href="<?php the_permalink(50); ?>?postid=<?php echo get_the_id();?>" >Read More</a>
                  <br>
                  <!--<?php echo CFS()->get( 'features_news' ); ?>-->
                <?php
                }
              }
              wp_reset_postdata();

                  //loop end here
              ?>
              </div> <!--features-wrapper-->
              </div> <!--features-flipper-->
  </section>



        </main><!-- #main -->
    </div><!-- #primary -->
  <?php get_footer(); ?>
