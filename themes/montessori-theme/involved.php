<?php
/**
* The main template file.
*template name: get-involved
* @package RED_Starter_Theme
*/
get_header();
?>

       <main id="main" class="site-main" role="main">


         <!-- our involved section -->
<section id="involved" class="involved-section mob-container ">
<div class="main-involved-wrapper">


   <?php
$args = array(
   'post_type' => 'post',
   'show_per_page' => 1,
);
$query = new WP_Query( $args  );
if ( $query-> have_posts() ) :
 while ($query-> have_posts() )  : $query->the_post(); ?>

  <div  class="involved-title">
     <a id= " dd<?php the_id(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>


  </div>

<?php endwhile; ?>
<?php while ($query-> have_posts() )  : $query->the_post(); ?>
<div id= " dd<?php the_id(); ?>" class="involved-content">
   <?php the_content('involved_content');?>
 </div>
   <div class= "involved-img" >
     <?php output_image('involved_img'); ?>
   </div>

 </div>

     <div class="green-button">
       <a class="green-button" href="<?php echo esc_url(the_permalink()); ?>">Exprsee your intrest</a></div>

 <?php endwhile; ?>
<?php endif; ?>



<?php wp_reset_postdata(); ?>

</section>
</main><!-- #main -->
</div><!-- #primary -->



<!--This is for past Events  -->
<!-- <div class="text-title">
<h3>  <a class="text_post" href="<?php echo esc_url(the_permalink()); ?>">past Events </a> </h3>
</div> -->

<!-- This is for suppot now  & did you  and image -->
<div class="text-shadow">


 <h2>Support Now</h2>
</div>
<div class="banner_post">

 <h2>Did you Know.... </h2>
 </div>
<!-- this for support section -->
<div support-containar>
 <div class="support-img"><?php output_image('support_img'); ?>
   <?php output_image('play-img'); ?>
 </div>
</div>
        <article class="involved">
          <a class="circle-btn" href="<?php echo esc_url(the_permalink()); ?>/get-involved/">your involvement+contribution</a>
          <p><?php echo CFS()->get('get_text'); ?></p>
        </article>

        <div>
                    <a class="re-btn" href="<?php echo esc_url(the_permalink()); ?>/get-involved/">Become a Volunteer</a>

                  <a class="re-btn" href="<?php echo esc_url(the_permalink()); ?>/get-involved/">Make a donation</a>
         </div>
          <div id"btn-content"></div>

        <article id="btn-volun" class="contact-container">
             <div class="contact-persons">
           <a class="gre-btn" href="<?php echo esc_url(the_permalink()); ?>/get-involved/"> in person </a></div>
           <div class="contact-online">
             <a class="gre-btn" href="<?php echo esc_url(the_permalink()); ?>/get-involved/"> online </a></div>
             <div class="contact-email">
                 <a class="gre-btn" href="<?php echo esc_url(the_permalink()); ?>/get-involved/"> email</a></div>
          <p><?php echo CFS()->get('get_text'); ?></p>
        </article>

        </div>
      </section>

         <article class="involved">
           <a class="green-btn" href="<?php echo esc_url(the_permalink()); ?>/get-involved/">your involvement+contribution</a>
           <p><?php echo CFS()->get('get_text'); ?></p>
         </article>

         <article class="involved">
           <a class="red-btn" href="<?php echo esc_url(the_permalink()); ?>/get-involved/">voleenter</a>
           <a class="red-btn" href="<?php echo esc_url(the_permalink()); ?>/get-involved/">make a donation</a>
           <p><?php echo CFS()->get('get_text'); ?></p>
         </article>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

</main>
