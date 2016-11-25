<?php
/**
* The main template file.
*template name: get-involved
* @package RED_Starter_Theme
*/
get_header();
 ?>

<div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
<section class="involved-wrapper ">
<div class="main-what-new mob-container">
 <?php
$args = array(
    'post_type' => 'post',
    'show_per_page' => 1,
);
$query = new WP_Query( $args  );
if ( $query-> have_posts() ) :  ?>

    <?php while ($query-> have_posts() )  : $query->the_post(); ?>
  <div class="involved-title">
<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<?php the_content();?>
</div>
<!-- <?php //if (has_post_thumbnail( )): ?> -->
</div>
    <php the_content();?>
    <?php if (has_post_thumbnail()): ?>
    <?php the_post_thumbnail('Normal'); ?>
      <a class="green-btn" href="<?php echo esc_url(the_permalink()); ?>">Exprsee your intrest</a>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>




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
           <a class="circle-btn" href="<?php echo esc_url(the_permalink()); ?>/get-involved/">your involvement+contribution</a>
           <p><?php echo CFS()->get('get_text'); ?></p>
         </article>

         <div>
                     <a class="re-btn" href="<?php echo esc_url(the_permalink()); ?>/get-involved/">Voleenter</a>
                   <a class="pink-btn" href="<?php echo esc_url(the_permalink()); ?>/get-involved/">Make a donation</a>
          </div>

         <article class="contact-container">
              <div class="contact-person">
            <a class="gre-btn" href="<?php echo esc_url(the_permalink()); ?>/get-involved/"in person ></a></div>
            <div class="contact-online">
              <a class="gre-btn" href="<?php echo esc_url(the_permalink()); ?>/get-involved/" online ></a><div>
              <div class="contact-email">
                  <a class="gre-btn" href="<?php echo esc_url(the_permalink()); ?>/get-involved/" email></a></div>
           <p><?php echo CFS()->get('get_text'); ?></p>
         </article>
       </section>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
</main>
</div>
