<?php
/**
* The main template file.
*template name: Get-involved
* @package RED_Starter_Theme
*/
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

 <?php
$args = array(

    'post_type' => 'post',
    'show_per_page' => 1,
);
$query = new WP_Query( $args  );


if ( $query-> have_posts() ) :  ?>

    <?php while ($query-> have_posts() )  : $query->the_post(); ?>

<section class="involved-wrapper container">

  <div class="involved-title">

     




<?php the_content();?>
</div>

<!-- <?php //if (has_post_thumbnail( )): ?> -->

</div>
    <div class="green-btn">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    </div>
    <php the_content();?>
    <?php if (has_post_thumbnail()): ?>
    <?php the_post_thumbnail('Normal'); ?>

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
