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

<section id="nw-program" class="nw-program">
			<h1>Why NW Montessori Program?</h1>
			<div class="why-nw"> <?php echo CFS()->get('main-reason'); ?> </p></div>
			<div class="nw-img">
<img src="<?php bloginfo('template_directory'); ?>/images/nw-program/why to choose.jpg" alt="Why NW Program" />
			</div>

		<div class="red-border-container"><?php echo CFS()->get('main-reason'); ?></div>
</section>

<!-- **********///////////Montessori Daily Schedule section/////////////********** -->


             <!-- here will be the montessory schedula code-->


<!-- **********////////////////////////Funding///////////////////////********** -->

	<section id="funding" class="funding">
				<h1>Funding</h1>
				<h2 >Where does it come from?</h2>
				<h3>There are two ways of answering this</h3>
			  <div class="red-border-container"> <?php echo CFS()->get('funding-block'); ?> </div>
				<div class="funding-img">
 <img src="<?php bloginfo('template_directory'); ?>/images/nw-program/DSC_2376.png" alt="Funding" />
			  </div>
				<p> <?php echo CFS()->get('extra-funding'); ?> </p>
				<h2>How is the money spent?</h2>
				<div class="money-spend-img">
 <img src="<?php bloginfo('template_directory'); ?>/images/nw-program/materials.jpg" alt="How is the money spent" />
 </div>
				<p> <?php echo CFS()->get('money-spend'); ?> </p>
				<div class="funding-btn">
				<button class="green-btn" href="<?php echo esc_url(the_permalink()); ?>">Donate Now</button>
			  </div>
	</section>

	<!-- **********/////////Custom Post Loop To Call School List/////////********** -->

	<section id="schools-teachers" class="school-list">

		<h1>Schools & Teachers</h1>
				<?php query_posts(array( 'post_type' => 'school','taxonomy' => 'school_categories','school_categories' =>'school' ));?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				 <div class="post">
				 <!-- Display the Title  -->
				 <h1><?php the_title(); ?></h1>
				  <div class="shool-content">
				    <?php the_content(); ?>
				  </div>
					<div class="school-img">
						<?php the_post_thumbnail('post->id','small'); ?>
					</div>
				 </div> <!-- closes the first div box -->
				  <p ><span style="font-weight:bolder">Address: </span><?php echo CFS()->get('address'); ?></p>
					<p ><span style="font-weight:bolder">Phone: </span><?php echo CFS()->get('phone'); ?></p>
				 <?php endwhile; else: ?>
				 <h1>Sorry, no posts matched your criteria.</h1>
				 <?php endif; ?>
				 <?php wp_reset_query(); ?>
	 </section>

 <!-- **********///////////////// Teacher List Section ///////////////********** -->

 <section class="teacher-list">
	 <h1>Teachers<span class="toggle"><i class="fa fa-angle-down arrow" aria-hidden="true"></i></span></h1>
	 <!-- <div id="target"></div> -->

 <!-- Custom Post Loop To Call Teacher List  -->
 <?php

 query_posts(array( 'post_type' => 'staff','taxonomy' => 'staff_categories','staff_categories' =>'teachers' ));
  ?>
	<div class="teacher-grid">
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="teacher-block">
	<div class="flip-container">
	<div class="flip-wrap">
	<div class="flipper">
	      <div class="front">
					<?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'large' ); ?>
								<?php endif; ?>
							</div>
			<div class="back"><p ><?php echo CFS()->get('teacher_vision'); ?></p></div>
		</div><!-- #flippre -->
	</div><!-- #flippre-wrap-->
</div><!-- #flip-container -->
		<div class="teacher_det">
      <p><?php echo CFS()->get('teacher_name'); ?></p>
    	<p><?php echo CFS()->get('teacher_title'); ?></p>
		</div><!-- #teacher_det -->
	</div><!-- #teacher_block -->

  <?php endwhile; else: ?>
  <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
		</div>
	<?php wp_reset_query(); ?>
  </section>

 <!-- **********///////////////// Preschools List Section ///////////////********** -->

  <section class="preschools-list">
  <!-- Custom Field Loop To Call Preschools List  -->
	<h1>List of Private </br>Montessori Preschools<span class="toggle"><i class="fa fa-angle-down arrow" aria-hidden="true"></i></span></h1>
		 <div class="target">
	<?php
  	$fields = CFS()->get( 'list_of_preschools' );
     foreach ( $fields as $field ) {
       echo '<p style="color:#248E6A>'.$field['school_name'].'</p>';
       echo '<span>'.$field['adrees'].'</span>';
        } ?>
			</div>
  <?php echo '<p>'.CFS()->get( 'abstract' ).'</p>'; ?>
   </section>

 <!-- **********/////////////////Enrollment Section///////////////********** -->

<section id="how-to-enroll" class="enroll">
				<h1>How to Enroll Your Child</h1>
				<div class="red-border-container"> <?php echo CFS()->get('enroll'); ?> </div>
<div class="enroll-info">
				<h2 >When can my child start? </h2>
				<p> <?php echo CFS()->get('time-start'); ?> </p>

			  <h2 >How do I apply?</h2>
		  	<ol>
			  <?php $fields = CFS()->get( 'guids' );

	 foreach ( $fields as $field ) {?>
						 <li>
			  <?php echo '<p class="">'.$field['instructions'].'</p>';
			  } ?>
			  </li>
			  </ol>
			</div>
				<div class="enroll-block">
			  <div class="enroll-img">
			  <img src="<?php bloginfo('template_directory'); ?>/images/nw-program/school.jpg" alt="How is the money spent" />
			  </div>
				<div class="enroll-btn">
			  <button class="green-btn" href="<?php echo esc_url(the_permalink()); ?>">Official School Board Website</button>
				</div>
			  </div>
</section>
<!-- **********/////////////////*****************///////////////********** -->

</div>
<!-- #about-page -->
	<?php get_footer(); ?>
</main>
<!-- #main -->
</div>
<!-- #primary -->
