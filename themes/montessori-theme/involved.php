<?php
/**
* The main template file.
*template name: get-involved
* @package RED_Starter_Theme
*/
get_header();
?>
<h1 id="what-is-new" class="main-title"></h1>
<main id="involved-container" class="" role="main">
<!-- Column Left -->
  <div id="column-left">
  <!-- First titles, rounded corners -->
    <section id="involved-titles-container">
      <?php $args = array('post_type' => 'post',
                          'posts_per_page' => 3,);
            $query = new WP_Query( $args ); ?>
            <!-- Three Green Buttons -->
            <div class="title-container">
            <?php if ( $query-> have_posts() ) : ?>
              <!-- Check for titles and loop -->
              <!-- JQUERY in main js file -->
            <?php while ($query-> have_posts() ) : $query->the_post(); ?>
              <div data-related="<?php echo get_the_ID(); ?>" class="involved-title-box">
              <!-- Link tag -->
                <a class="title-link" href="#"><?php the_title(); ?></a>
              </div>
          <?php endwhile; ?>
          </div>
        <?php endif; ?>
        <div id="allPosts">
          <?php while ($query-> have_posts() ) : $query->the_post(); ?>
          <div id="<?php echo $id; ?>" data-id="<?php echo $id; ?>" class="post-content">
              <div class="involved-content">
                <?php the_content('involved_content');?>
              </div>
          </div>
          <?php endwhile; ?>
        </div>
      <?php wp_reset_postdata(); ?>
      <button class="interest">
        <a class="green-button" href="<?php echo esc_url(the_permalink()); ?>">Express your interest</a>
      </button>
      <button id="involved-interview" class="interest">
        <a class="gre-button" href="<?php echo esc_url(the_permalink()); ?>">Read interview</a>
      </button>
    </section>
    <!-- Past events panel on the right -->
    </div> <!-- End of the column left -->
    <!-- past event section -->
<section class="past-event-wrapper">
  <div class="past-event">
    <h3>Past Events<span class="toggle"><i class="fa fa-angle-down arrow" aria-hidden="true"></i></span></h3>
    <div id="target" class="the-event">
        <div class="event-years">
          <div class="year">2016<span class="toggle"><i class="fa fa-angle-down arrow" aria-hidden="true"></i></span>
              <ul>June 29,  2016, The NWMS Board Meetings</ul>
              <ul>May18,  2016, Like us on Facebook!</ul>
              <ul>April 02, 2016, Money Matters</ul>
          </div>
          <div class="year">2015<i class="fa fa-angle-down arrowt" aria-hidden="true"></i></div>
          <div class="year">2014<i class="fa fa-angle-down arrow" aria-hidden="true"></i></div>
      </div>
    </div>
  </div>
</section>
</main>
<!-- Support now section -->
<section class="support-section container">
      <div class="title">
        <h1>Support Now</h1>
        <h3>Did You Know ...</h3>
      </div>
    <div class="image-wrapper">
        <div class="first-image">
          <img src="<?php bloginfo('template_directory'); ?>/images/group8.jpg" alt="img" />
            <p><?php echo CFS()->get('image_one_text') ?></p>
        </div>
        <div class="second-image">
          <img src="<?php bloginfo('template_directory'); ?>/images/field-trip2.jpg" alt="img" />
          <p><?php echo CFS()->get('image_two_text') ?></p>
        </div>
        <div class="third-image">
          <img src="<?php bloginfo('template_directory'); ?>/images/guest-speaker.jpg" alt="img" />
          <p><?php echo CFS()->get('image_three_text') ?></p>
        </div>
      </div>
      <div class="bracket">
        <img src="<?php bloginfo('template_directory'); ?>/images/bracket.svg" alt="bracket"/>
      </div>
</section>
<div class="your-involvement-wrapper">
  <p>Your Involvement + Contribution</p>
</div>
<!-- Two buttons on the bottom of the page -->
<section id="Donation">
    <div class="donation-button-group">
      <a class="pink-btn donation-button" href="<?php echo esc_url(the_permalink()); ?>/get-involved/">Make a donation</a>
      <a class="re-btn donation-button" href="<?php echo esc_url(the_permalink()); ?>/get-involved/">Become a Volunteer</a>
    </div>
    <div class="contact-group">
    <article class="contact-container">
      <div class="contact-person" style="width: 100px; height: 100px;">
        <a class="gre-btn" href="<?php echo esc_url(the_permalink()); ?>/get-involved/"in person ></a>
      </div>
      <div class="contact-online">
        <a class="gre-btn" href="<?php echo esc_url(the_permalink()); ?>/get-involved/" online ></a>
      </div>
      <div class="contact-email">
        <a class="gre-btn" href="<?php echo esc_url(the_permalink()); ?>/get-involved/" email></a>
      </div>
      <p><?php echo CFS()->get('get_text'); ?></p>
    </article>
   
    <article class="contact-container">
      <div class="contact-person">
        <a class="gre-btn" href="https://www.paypal.com/signin">Paypal</a>
      </div>
      
      <div class="contact-online">
         <a class="gre-btn" href="<?php echo esc_url(the_permalink()); ?>/get-involved/" by cheqe></a>
      </div>
      <div class="contact-email">
          <a class="gre-btn" href="<?php echo esc_url(the_permalink()); ?>/get-involved/"United Why ></a>
      </div>
      <p><?php echo CFS()->get('get_text'); ?></p>
    </article>
  </div>
</section>
<?php get_footer(); ?>
