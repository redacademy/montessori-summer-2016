<?php
/**
 * The template for displaying all pages.
 * Template Name: nw-program
 * @package montessori_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
	  <main id="main" class="site-main" role="main">



		   <?php echo'<p>'.CFS()->get( 'title' ).'</p>'; ?>

		

		 

	<?php
     $fields = CFS()->get( 'list_of_preschools' );

     foreach ( $fields as $field ) {
		
       echo '<p class"lstSchool">'.$field['school_name'].'</p>';
       echo '</p>'.$field['adrees'].'</p>';

        }

        ?>

 <?php echo '<p>'.CFS()->get( 'abstract' ).'</p>'; ?>

 



 	  



		</main><!-- #main -->
	
	<!-- #primary -->
	<?php get_footer(); ?>
