<?php
/**
* The main template file.
*template name: get-involved
* @package RED_Starter_Theme
*/
get_header();
?>

       <main id="main back-to-top" class="site-main" role="main">


         <!-- our involved section -->
<section id="involved" class="involved-section mob-container ">
<div class="main-involved-wrapper">
  <?php
$args = array(
   'post_type' => 'post',
   'posts_per_page' => 3,
);
$query = new WP_Query( $args  );
if ( $query-> have_posts() ) :
 while ($query-> have_posts() )  : $query->the_post(); ?>
  <div class="involved-title">
     <a href="#"><?php the_title(); ?></a>



  </div>

<?php endwhile; ?>
<?php while ($query-> have_posts() )  : $query->the_post(); ?>
<div class="involved-content">
   <?php the_content('involved_content');?>
 </div>
   <div class= "involved-img" >
     <?php output_image('involved_img'); ?>

 </div>

     <div class="button">
       <a class="green-button" href="<?php echo esc_url(the_permalink()); ?>/interview/">Exprsee your intrest</a></div>
       <p> <?php echo CFS()->get('interview');?></p>
       <a class="red-btn" href="<?php echo esc_url(the_permalink()); ?>/interview/">interview with our teacher</a>


 <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>


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

<!-- Support now section -->

<section id="support-now" class="support-section container">
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

  <section class="make-donation-wrapper">
      <div class="donation"><a><span class="toggle donation"><i aria-hidden="true"></i> Make a Donation</span></a>
         <a class="btn btn-donate" href="https://www.paypal.com/signin">Donate Now</a>
      </div>
  </section>





<?php get_sidebar(); ?>
<?php get_footer(); ?>

</div>
</main>
