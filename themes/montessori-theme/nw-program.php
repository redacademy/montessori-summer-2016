<?php
/**
 * The template for displaying all pages.
 * Template Name: nw-program
 * @package montessori_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
	  <main id="main" class="site-main" role="main">

	<!-- **********/////////////////Why NW Program Section///////////////********** -->

<section class="nw-program">
<h2 class="nw-program">Why NW Montessori Program?</h2>
<p> <?php echo CFS()->get('main-reason'); ?> </p>
<img src="<?php bloginfo('template_directory'); ?>/images/nw-program/why to choose.jpg" alt="Why NW Program" />
<div> <?php echo CFS()->get('main-reason'); ?> </div>
</section>

  <!-- **********////////////////////////Funding///////////////////////********** -->

	<section class="funding">
	<h2 class="nw-program">Funding</h2>
	<p class="funding-info">Where does it come from?</p>
	<span class="funding-explain">There are two ways of answering this.</span>
  <div> <?php echo CFS()->get('funding-block'); ?> </div>
	<img src="<?php bloginfo('template_directory'); ?>/images/nw-program/DSC_2376.png" alt="Funding" />
	<p> <?php echo CFS()->get('extra-funding'); ?> </p>
	<h3 class="nw-program">How is the money spent?</h3>
	<img src="<?php bloginfo('template_directory'); ?>/images/nw-program/materials.jpg" alt="How is the money spent" />
	<p> <?php echo CFS()->get('money-spend'); ?> </p>
	<button class="green-btn" type="button" name="button">Donate Now</button>
	</section>

	<!-- **********/////////Custom Post Loop To Call School List/////////********** -->

<section>
<?php
 query_posts(array( 'post_type' => 'school', ));?>
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
 <?php wp_reset_query(); ?>
 </section>

 <!-- **********///////////////// Teacher List Section ///////////////********** -->

 <section>
 <!-- Custom Post Loop To Call Teacher List  -->
 <?php
  query_posts(array( 'post_type' => 'staff','staff-category' => 'Teachers' ));
  ?>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="post">
  <!-- Display the Title as a link to the Post's permalink. -->
  <h2><?php the_title(); ?></h2>
   <div class="entry">
     <?php the_content(); ?>
   </div>
  </div> <!-- closes the first div box -->
	<?php
        the_post_thumbnail('small');
?>
	    <p class="teacher_title"><?php echo CFS()->get('teacher_vision'); ?></p>
      <p class="teacher_name"><?php echo CFS()->get('teacher_name'); ?></p>
    	<p class="teacher_title"><?php echo CFS()->get('teacher_title'); ?></p>
  <?php endwhile; else: ?>
  <p>Sorry, no posts matched your criteria.</p>
  <?php endif; ?>
	<?php wp_reset_query(); ?>
  </section>

 <!-- **********///////////////// Preschools List Section ///////////////********** -->

  <section>
  <!-- Custom Field Loop To Call Preschools List  -->
  <button class="toggle">
		<?php
		 echo'<p>'.CFS()->get( 'title' ).'</p>'.''; ?></button>
		 <div class="target">
	<?php
  	$fields = CFS()->get( 'list_of_preschools' );
     foreach ( $fields as $field ) {
       echo '<p class"lstSchool">'.$field['school_name'].'</p>';
       echo '</p>'.$field['adrees'].'</p>';
        } ?>
			</div>
  <?php echo '<p>'.CFS()->get( 'abstract' ).'</p>'; ?>
   </section>

 <!-- **********/////////////////Enrollment Section///////////////********** -->

<section class="enroll">
	<div> <?php echo CFS()->get('enroll'); ?> </div>
	<p> <?php echo CFS()->get('time-start'); ?> </p>
  <h3 class="">How do I apply?</h3>
	<img src="<?php bloginfo('template_directory'); ?>/images/nw-program/school.jpg" alt="How is the money spent" />
  <?php
		$fields = CFS()->get( 'guids' );
     foreach ( $fields as $field ) {
 echo '<p class="">'.$field['instructions'].'</p>';
}
   ?>
	 <button class="green-btn" type="button" name="button">Official School Board Website</button>
</section>



		</main><!-- #main -->

	<!-- #primary -->
	<?php get_footer(); ?>
