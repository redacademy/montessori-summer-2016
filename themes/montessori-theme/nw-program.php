<?php
/**
 * The template for displaying all pages.
 * Template Name: nw-program
 * @package montessori_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
	  <main id="main" class="site-main" role="main">


	
<section>

<?php 

query_posts(array( 'post_type' => 'school' )); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 <div class="post">

 <!-- Display the Title as a link to the Post's permalink. -->
 <h2><?php the_title(); ?></h2>

 
  <div class="entry">
    <?php the_content(); ?>
  </div>

 </div> <!-- closes the first div box -->

 
     <span class="address">$<?php echo CFS()->get('address'); ?></span>
	<span class="phone">$<?php echo CFS()->get('phone'); ?></span>
		

 <?php endwhile; else: ?>
 <p>Sorry, no posts matched your criteria.</p>
 <?php endif; ?>

 </section>


 <section>

     <?php echo'<p>'.CFS()->get( 'title' ).'</p>'; ?>



	<?php $fields = CFS()->get( 'list_of_preschools' );

     foreach ( $fields as $field ) {
		
       echo '<p class"lstSchool">'.$field['school_name'].'</p>';
       echo '</p>'.$field['adrees'].'</p>';

        }

        ?>

 <?php echo '<p>'.CFS()->get( 'abstract' ).'</p>'; ?>

 </section>


		</main><!-- #main -->
	
	<!-- #primary -->
	<?php get_footer(); ?>
