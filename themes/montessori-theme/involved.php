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



    <?php endwhile;  ?>

<?php endif; ?>




   </main><!-- #main -->
 </div><!-- #primary -->



<?php get_sidebar(); ?>
<?php get_footer(); ?>
