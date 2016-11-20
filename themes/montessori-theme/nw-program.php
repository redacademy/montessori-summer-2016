<?php
/**
 * The template for displaying all pages.
 * Template Name: nw-program
 * @package montessori_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
	  <main id="main" class="site-main" role="main">




<?php
		$fields = CFS()->get( 'list_of_preschools' );
		
     foreach ( $fields as $field ) {
		
 echo '<span class"lstSchool" >'.$field['school_name'].'<p>';
 echo '</span>'.$field['adrees'].'</p>';

}

?>

 <?php echo '<p>'.CFS()->get( 'abstract' ).'</p>'; ?>



 	  <?php



		$fields = CFS()->get( 'guids' );
		
     foreach ( $fields as $field ) {
		
 echo '<p class="">'.$field['instructions'].'</p>';

}
?>



		</main><!-- #main -->
	</div>
	<!-- #primary -->
	<?php get_footer(); ?>
