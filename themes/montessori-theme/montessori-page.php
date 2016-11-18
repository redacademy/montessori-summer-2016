<?php
/**
 * The header for our theme.
 *Template Name:motessori
 * @package Montessori_Theme
 */
 get_header();

?>
<div class="container2">
<section id="history" class="our-history">

  		<?php while ( have_posts() ) : the_post(); ?>
<div class="history">
  			<h3><?php echo CFS()->get( 'our_history_title' ); ?></h3>
      </div>
      <div class="cfsBorder">
  			<p><?php echo CFS()->get( 'our_history_description' ); ?></p>
      </div>
  			<h3><?php echo CFS()->get( 'our_history_content' ); ?></h3>



  		<?php endwhile; // End of the loop. ?>


</section>

</div>









<?php get_footer();?>
