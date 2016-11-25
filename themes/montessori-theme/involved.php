<?php
/**
* The main template file.
*template name: get-involved
* @package RED_Starter_Theme
*/
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

<section class="involved-wrapper ">
<div class="main-what-new mob-container">
<?php
$args = array(

   'post_type' => 'post',
   'show_page' => 3,
);
$query = new WP_Query( $args  );
if ( $query-> have_posts() ) :  ?>
 <?php while ($query-> the_posts() )  : $query->the_post(); ?>
   echo
   <div class="involved-title">
 <h2>
   <div class="title-containar" -->
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

    </div>


 </h2>
</div>
<?php the_content();?>
<?php if (has_post_thumbnail()): ?>
<?php the_post_thumbnail(); ?>
</div>
</div>

<a class="green-btn" href="<?php echo esc_url(the_permalink()); ?>">Exprsee your intrest</a>

   <?php endif; ?>
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
<h2
  <a class="text_post" href="<?php echo esc_url(the_permalink()); ?>">Support Now </a></div>
<h2>
  <a class="banner_post" href="<?php echo esc_url(the_permalink()); ?>">Did you Know.... </a>

  <div class="involve-page">
           <?php if (has_post_thumbnail( )): ?>
          		<?php the_post_thumbnail( 'large' ); ?>
           <?php endif ; ?>
         </div>
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
