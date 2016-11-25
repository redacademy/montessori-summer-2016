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
   if ( have_posts() ) :
       while ( have_posts() ) : the_post();
       ?>


   <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
       <header class="entry-header">
           <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
       </header><!-- .entry-header -->
   <?php get_the_post_thumbnail( 'thumbnail' ); ?>
       <div class="entry-content">
           <?php the_content(); ?>

       </div><!-- .entry-content -->
   </section><!-- #post-## -->

       <?php endwhile;


   else :
       echo wpautop( 'Sorry, no posts were found' );
   endif;
   ?>

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
