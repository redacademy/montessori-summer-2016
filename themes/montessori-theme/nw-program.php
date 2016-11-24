<?php
/**
 * The template for displaying all pages.
 * Template Name: nw-program
 * @package montessori_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
	  <main id="main" class="site-main" role="main">
		<div class="nw-program-wrapper">

	<!-- **********/////////////////Why NW Program Section///////////////********** -->

<section class="nw-program">
			<h1>Why NW Montessori Program?</h1>
			<p> <?php echo CFS()->get('main-reason'); ?> </p>
			<div class="nw-img">
<img src="<?php bloginfo('template_directory'); ?>/images/nw-program/why to choose.jpg" alt="Why NW Program" />
			</div>
		<div class=""><?php echo CFS()->get('main-reason'); ?> </div>
</section>



<!-- **********///////////Montessori Daily Schedule section/////////////********** -->


             <!-- here will be the montessory schedula code-->


<!-- **********////////////////////////Funding///////////////////////********** -->

	<section class="funding">
				<h1>Funding</h1>
				<p class="funding-info">Where does it come from?</p>
				<span class="funding-explain">There are two ways of answering this.</span>
			  <div> <?php echo CFS()->get('funding-block'); ?> </div>
				<div class="funding-img">
 <img src="<?php bloginfo('template_directory'); ?>/images/nw-program/DSC_2376.png" alt="Funding" />
			  </div>
				<p> <?php echo CFS()->get('extra-funding'); ?> </p>
				<h3 class="nw-program">How is the money spent?</h3>
 <img src="<?php bloginfo('template_directory'); ?>/images/nw-program/materials.jpg" alt="How is the money spent" />
				<p> <?php echo CFS()->get('money-spend'); ?> </p>
				<button class="green-btn" type="button" name="button">Donate Now</button>
	</section>

	<!-- **********/////////Custom Post Loop To Call School List/////////********** -->

	<section class="school-list">
				<?php query_posts(array( 'post_type' => 'school', ));?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				 <div class="post">
				 <!-- Display the Title as a link to the Post's permalink. -->
				 <h1><?php the_title(); ?></h1>
				  <div class="entry">
				    <?php the_content(); ?>
				  </div>
				 </div> <!-- closes the first div box -->
				     <span class="address">$<?php echo CFS()->get('address'); ?></span>
					<span class="phone">$<?php echo CFS()->get('phone'); ?></span>
				 <?php endwhile; else: ?>
				 <h1>Sorry, no posts matched your criteria.</h1>
				 <?php endif; ?>
				 <?php wp_reset_query(); ?>
	 </section>

 <!-- **********///////////////// Teacher List Section ///////////////********** -->

 <section class="teacher-list">
	 <div class="teacher-grid">
 <!-- Custom Post Loop To Call Teacher List  -->
 <?php
  query_posts(array( 'post_type' => 'staff','staff-category' => 'Teachers' ));
  ?>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="switch">

	    <div class="teacher-img"><?php the_post_thumbnail('small'); ?></div>
			<div class="teacher_vision">
			<p ><?php echo CFS()->get('teacher_vision'); ?></p>
					</div>

		</div>
      <p class="teacher_name"><?php echo CFS()->get('teacher_name'); ?></p>
    	<p class="teacher_title"><?php echo CFS()->get('teacher_title'); ?></p>
  <?php endwhile; else: ?>
  <p>Sorry, no posts matched your criteria.</p>
  <?php endif; ?>
	<?php wp_reset_query(); ?>
</div>
  </section>

 <!-- **********///////////////// Preschools List Section ///////////////********** -->

  <section class="preschools-list">
  <!-- Custom Field Loop To Call Preschools List  -->
  <label class="toggle">
		<h1>List of Private Montessori Preschools</h1>
		<i class="fa fa-angle-down fa-3x" aria-hidden="true"></i>
	</label>
		 <div class="target">
	<?php
  	$fields = CFS()->get( 'list_of_preschools' );
     foreach ( $fields as $field ) {
       echo '<span class"lstSchool">'.$field['school_name'].'</span>';
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
  <?php
		$fields = CFS()->get( 'guids' );
     foreach ( $fields as $field ) {
 echo '<p class="">'.$field['instructions'].'</p>';
}
   ?>
	 <div class="enroll-img">
	 <img src="<?php bloginfo('template_directory'); ?>/images/nw-program/school.jpg" alt="How is the money spent" />
 </div>
 <a class="green-btn" href="<?php echo esc_url(the_permalink()); ?>">Official School Board Website</a>
</section>
<!-- **********/////////////////*****************///////////////********** -->

</div>
<!-- #about-page -->
</main>
<!-- #main -->
</div>
<!-- #primary -->
	<?php get_footer(); ?>
