<?php
/**
 * The template for displaying all pages.
 * Template Name: about
 * @package montessori_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
	  <main id="main" class="site-main" role="main">

<!-- **********///////////////// about NW School Section ///////////////********** -->
<section>
	<?php
		$fields = CFS()->get( 'content_group' );

     foreach ( $fields as $field ) {

 echo '<h1 class="">'.$field['content_group_title'].'</h1>';
 echo '<p class="">'.$field['content_group_paragragh'].'</p>';

echo '<div class="">'.$field['content_group_description'].'</div>';
}
?>
</section>

<!-- **********///////////////// Members List Section ///////////////********** -->

<section>
<!-- Custom Post Loop To Call Members List  -->
<?php
 query_posts(array( 'post_type' => 'staff','staff-category' => 'members' ));
 ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 <!-- <h2><?php the_title(); ?></h2> -->


    <div class=""> <?php the_post_thumbnail('thumnail');?> </div>

		 <div class="back"><p class="teacher_title"><?php echo CFS()->get('member_vision'); ?></p></div>

		 <div>
		 <p class="teacher_name"><?php echo CFS()->get('member_name'); ?></p>
		 <p class="teacher_title"><?php echo CFS()->get('member_title'); ?></p>
	 </div>

 <?php endwhile; else: ?>
 <p>Sorry, no posts matched your criteria.</p>
 <?php endif; ?>
 <?php wp_reset_query(); ?>
 </section>


 <!-- **********///////////////// Archive Section ///////////////********** -->


 <button class="toggle"> <?php the_archive_title( '<h1 class="page-title">', '</h1>' );?>  </button>

 <div class="target"

<?php get_sidebar(); ?>

</div>

</section>

<!-- **********///////////////// newsLetter Section ///////////////********** -->
<section>
<div class="newsLetter">
	 <h2>NewsLetter</h2>
	  <p>exciting time of the year! </p>
	 <?php echo '<h3>'.CFS()->get( 'date' ).'</h3>'; ?>
	 <?php echo '<p>'.CFS()->get( 'details' ).'</p>'; ?>
</div>
</section>
		</main><!-- #main -->
	</div>
	<!-- #primary -->
	<?php get_footer(); ?>
