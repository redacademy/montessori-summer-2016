<?php
/**
 * The template for displaying all pages.
 * Template Name: nw-program
 * @package montessori_Theme
 */
get_header(); ?>
      <div id="primary" class="content-area">
      <main id="main back-to-top" class="site-main" role="main">
        <div class="nw-program-wrapper">
    <!-- **********/////////////////Why NW Program Section///////////////********** -->
<section id="nw-program" class="nw-program">
            <h1>Why NW Montessori Program?</h1>
            <div class="nw-part1">
            <div class="why-nw"><?php echo CFS()->get('main-reason'); ?></div>
            <div class="nw-img">
<img src="<?php bloginfo('template_directory'); ?>/images/nw-program/why to choose.jpg" alt="Why NW Program" />
            </div>
            </div>
        <div class="red-border-container"><?php echo CFS()->get('extra-reason'); ?></div>
</section>
<!-- **********///////////Montessori Daily Schedule/////////////********** -->
<section class="montessori-schedual">
                <h1>Montessori Daily Schedule</h1>
        <div class="schedule-menu">
            <div class="morning-title"><a  class="showSingle" data-target="1"><h2>Morning</h2></a></div>
      <div class="afternoon-title"><a  class="showSingle" data-target="2"><h2>Afternoon</h2></a></div>
        </div>
              <div class="schedule-countener">
          <div class="morning">
                    <div id="div1" class="targetDiv">
<?php
$fields = CFS()->get( 'morning' );
foreach ( $fields as $field ) {?>
         <div class="row">
                <p><?php echo $field['morning-time'];?></p>
                <p> <?php echo $field['morning-action']?> </p>
                </div>
<?php  } ?>
           </div>
               </div>
           <div class="afternoon">
                 <div id="div2" class="targetDiv">
<?php
$fields = CFS()->get( 'afternoon' );
foreach ( $fields as $field ) {?>
          <div class="row">
                 <p><?php echo $field['afternoon-time'];?></p>
                 <p> <?php echo $field['afternoon-action']?> </p>
              </div>
<?php  } ?>
      </div>
          </div>
      </div>  <!-- schedule-container -->
</section>
<!-- **********////////////////////////Funding///////////////////////********** -->
<section id="funding" class="funding">
                <h1>Funding</h1>
                <h3 >Where does it come from?</h3>
                <h3>There are two ways of answering this</h3>
                <div class="nw-part2">
              <div class="red-border-container"><p class="spcil"> <?php echo CFS()->get('funding-block'); ?></p></div>
                <div class="funding-img">
 <img src="<?php bloginfo('template_directory'); ?>/images/nw-program/DSC_2376.png" alt="Funding" />
              </div>
                </div>
                <p> <?php echo CFS()->get('extra-funding'); ?> </p>
                <h3>How Is The Money Spent?</h3>
                <div class="nw-part3">
                <div class="money-spend">
                  <p> <?php echo CFS()->get('money-spend'); ?> </p>
                </div>
                <div class="money-spend-img">
 <img src="<?php bloginfo('template_directory'); ?>/images/nw-program/materials.jpg" alt="How is the money spent" />
        </div>
                </div>
                <div class="funding-btn">
                  <button class="green-btn" href="<?php echo esc_url(the_permalink()); ?>">Donate Now</button>
              </div>
</section>
    <!-- **********/////////Custom Post Loop To Call School List/////////********** -->
<section id="schools-teachers" class="school-list">
        <h1>Schools & Teachers</h1>
                <?php query_posts(array( 'post_type' => 'school','taxonomy' => 'school_categories','school_categories' =>'school' ));?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                 <!-- Display the Title  -->
                    <h1><?php the_title(); ?></h1>
                    <div class="part4-container">
                  <div class="school-img">
                        <?php the_post_thumbnail('post->id','small'); ?>
                    </div>
                    <div class="nw-part4">
                  <div class="shool-content">
                    <?php the_content(); ?>
                  </div>
                    <p ><span style="font-weight:bolder">Address: </span><?php echo CFS()->get('address'); ?></p>
                    <p ><span style="font-weight:bolder">Phone: </span><?php echo CFS()->get('phone'); ?></p>
                    </div>
                    </div>
                 <?php endwhile; else: ?>
                    <h1>Sorry, no posts matched your criteria.</h1>
                 <?php endif; ?>
                 <?php wp_reset_query(); ?>
</section>
 <!-- **********///////////////// Teacher List Section ///////////////********** -->
<section class="teacher-list">
               <h1>Teachers</h1>
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
 <!-- **********///////////////////////// Preschools List Section ////////////////////////////////********** -->
 <section class="preschools-list">
                     <!-- Custom Field Loop To Call Preschools List  -->
           <h1>List of Private Montessori Preschools<span class="toggle"><i class="fa fa-angle-down arrow" aria-hidden="true"></i></span></h1>
           <div id="target">
 <?php
 $fields = CFS()->get( 'list_of_preschools' );
 foreach ( $fields as $field ) {?>
         <p style="font-size:1.4rem"><span style="color:#248E6A"><?php echo $field['school_name'];?></span>
<?php echo $field['adrees']?> </p>
<?php  } ?>
<?php echo '<p>'.CFS()->get( 'abstract' ).'</p>'; ?>
         </div>
</section>
 <!-- **********/////////////////Enrollment Section///////////////********** -->
<section id="how-to-enroll" class="enroll">
                <h1>How to Enroll Your Child</h1>
            <div class="red-border-container"><p class="spcil"> <?php echo CFS()->get('enroll'); ?> </p></div>
      <div class="enroll-info">
                <h3 >When can my child start?</h3>
                <p> <?php echo CFS()->get('time-start'); ?> </p>
              <h3 >How do I apply?</h3>
            <div class="enrollment-wrap">
            <div class="guids">
            <ol>
<?php $fields = CFS()->get( 'guids' );
foreach ( $fields as $field ) {?>
              <li>
<p><?php echo $field['instructions'];?> </p>
<?php } ?>
              </li>
              </ol>
      </div>
            <div class="enroll-block">
            <div class="enroll-img">
<img src="<?php bloginfo('template_directory'); ?>/images/nw-program/school.jpg" alt="How is the money spent" />
            </div>
            <div class="enroll-btn">
       <button class="green-bt"><a href="<?php the_permalink(17); ?>">Official School Board Website</button>
            </div>
            </div>
            </div>
          </div>
</section>
<!-- **********//////////////////////////////////*****************//////////////////////////////////********** -->
</div>
<!-- #about-page -->
</main>
<!-- #main -->
</div>
<!-- #primary -->
  <?php get_footer(); ?>