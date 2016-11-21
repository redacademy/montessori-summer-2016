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
 'showposts' => 3,
);
$query = new WP_Query( $args  );

if ( $query->have_posts() ) :  ?>

    <?php while ($query-> have_posts() )  : $query->the_post(); ?>


<section class="involved-wrapper container">
  <div class="green-btn">
<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
</div>
<?php the_content();?>
<?php if (has_post_thumbnail( )): ?>
         		<?php the_post_thumbnail( 'Normal' ); ?>

 <a class="moretag" href="<?php the_permalink(); ?>">Exprsee your Intrest</a>
          <?php endif ; ?>
    <?php endwhile;  ?>

<?php endif; ?>



</section>

   </main><!-- #main -->
 </div><!-- #primary -->


  <!-- This is for support now-->



<?php get_sidebar(); ?>
<?php get_footer(); ?>
