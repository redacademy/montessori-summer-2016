<?php
/**
* The main template file.
*template name: get-involved
* @package RED_Starter_Theme
*/
get_header();
?>

<h1 class="main-title">What's New</h1>
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
              <div id="<?php echo get_the_ID(); ?>" class="involved-title-box">

              <!-- Link tag -->
                <a class="title-link" href="#"><?php the_title(); ?></a>
              </div>
          <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <div id="allPosts">
          <?php while ($query-> have_posts() ) : $query->the_post(); ?>
          <div id="post-<?php echo $id; ?>">
              <div class="involved-content">
                <?php the_content('involved_content');?>
              </div>
              <div class="involved-img" >
                <?php output_image('involved_img'); ?>
              </div>
          </div>
          <?php endwhile; ?>
        </div>
      <?php wp_reset_postdata(); ?>
      <button class="interest">
        <a class="green-button" href="<?php echo esc_url(the_permalink()); ?>">Express your interest</a>
      </button>
    </section>

    <section id="involved-support-now">
      <div class="text-shadow">
        <h3>Support Now</h2>
      </div>
      <div class="banner_post">
        <h3> Did you Know.... </h2>
      </div>
    </section>
    <!-- Past events panel on the right -->
    </div> <!-- End of the column left -->
    <div id="column-right">
      <!-- <?php // get_sidebar(); ?> -->
      <div id="past-events" style="text-align: center; font-size: 30px;">Past Events</div>
      <div id="yearsArchives">
        <!-- stock image for side bar / placeholder for plugin -->
        <img src="../wp-includes/images/years.png" />
      </div>

    </div>
  </main>

  <div class="full-width-section">
    <!-- Support Now Slider -->
    <div class="involved-slider full-width-section-item">
      <!-- <h1>Slider Here</h1> -->
      <!-- stock image for side bar / placeholder for plugin -->
      <img id="sliderImages" src="../wp-includes/images/sliderimages.png" />

    </div>
  </div>

  <!-- Giant Horizontal Brace and  -->
    <div class="braces-container">
      <img src="../wp-includes/images/brace.png" style="margin-right: auto; margin-left: auto; width: 1420;" />
    </div>

    <!-- Circle Stamp -->
    <!-- <img src="" /> -->

    <!-- conflicting scss - not matching with values in _involved.scss  using inline-->
    <div style="width: 100%;">
      <div id="circle-button" style="width: 300px;
      height: 300px; border-radius: 150px; background-color: #4FC8A1; padding-top: 60px;">
        <a id="circle-text" class="circle-link" href="<?php echo esc_url(the_permalink()); ?>/get-involved/" style="color: FFF;">your<br />involvement<br />+<br />contribution</a>
        <p><?php echo CFS()->get('get_text'); ?></p>
<section id="support-now" class="support-section container">
      <div class="title">
        <h1>Support Now</h1>
        <h3>Did You Know ...</h3>
      </div>
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

        <!-- <div class="button-contact-placeholder"> -->
          <!-- placeholder image -->
          <!-- <img src="../wp-includes/images/buttons-placeholder.png" /> -->
        <!-- </div> -->

        <article class="contact-container">
          <div class="contact-person">
            <a class="gre-btn" href="<?php echo esc_url(the_permalink()); ?>/get-involved/"pay pal ></a>
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




<?php  get_sidebar();?>
<?php get_footer(); ?>
