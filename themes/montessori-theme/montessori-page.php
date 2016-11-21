<?php
/**
 * The header for our theme.
 *Template Name:motessori
 * @package Montessori_Theme
 */
 get_header();

?>

        <main id="main" class="site-main mobile-container  " role="main">

<!-- Our History Section  -->
          <section id="history" class="history-section ">

                            <ul class="main-history">
                          <?php
                                $args = array(
                                  'post_type' => 'history',
                                  'numberposts' => -1,
                                  'order' => 'ASC',
                                  );
                                $history_post = get_posts($args);
                                ?>
                                <?php foreach($history_post as $post) : setup_postdata( $post); ?>
                                  <li class="history-title">
                                    <h1><?php the_title();?></h1>
                                 </li>

                                      <?php if ( has_post_thumbnail() ) : ?>

                                      <li class="history-thumbnail">
                                          <?php the_post_thumbnail( 'original' ); ?>
                                        </li>

                                      <?php endif; ?>
                                   </li class="history-thumbnail">
                                      <p><?php the_content(); ?></p>
                               <li>

                              <?php endforeach; wp_reset_postdata(); ?>

                          </ul>

          </section>

<!-- Philosophy Section  -->

<section id="philosophys" class="philosophy-section  mobile-container">


          	<div class="title-philosophy">
              <h1 id="philosophy" >philosophy</h1>
						<ul class="main-philosophy  ">
              <?php
                $args = array(
                  'post_type' => 'philosophy',
                  'numberposts' => 6,
                  'order' => 'ASC',
                  );
                $philosophy_post = get_posts($args);
                ?>
                <?php foreach($philosophy_post as $post) : setup_postdata( $post); ?>
								<li class="each-philosophy">

									<div class="<?php the_title();?>  philosophy-thumbnails" >
										<div>
				<h2><?php the_title();?></h2>
											<?php if ( has_post_thumbnail() ) : ?>
												<div>
													<?php the_post_thumbnail( 'original' ); ?>
												</div>
											<?php endif; ?>

										<?php the_content(); ?>

										</div>
									</div>
								</li>
							<?php endforeach; wp_reset_postdata(); ?>
						</ul>
					</div>
				</section>


<!-- Materials Section  -->


<section id="materials" class="materials-section mobile-container">
                  <ul class="main-materials">
                    <?php
                      $args = array(
                        'post_type' => 'materials',
                        'numberposts' => -1,
                        'order' => 'ASC',
                        );
                      $material_post = get_posts($args);
                      ?>
                      <?php foreach($material_post as $post) : setup_postdata( $post); ?>
                        <li class="the_title();">
                           <h1><?php the_title();?></h1>
                        </li>

                            <?php if ( has_post_thumbnail() ) : ?>
                              <div>
                                <?php the_post_thumbnail( 'original' ); ?>
                              </div>

                            <?php endif; ?>
                            <li class="materials-content">
                            <p><?php the_content(); ?></p>

                        </li>

                    <?php endforeach; wp_reset_postdata(); ?>
                  </ul>


</section>
<!-- Resources Section  -->
<section> 
<div class="title-resources">
              <h1 id="resources" >Resources</h1>
</section>


 <!-- <a href="#<?php the_title();?>" class="">
                            <img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-".$post->post_name.".svg"?>">
                          </a> -->
                           <!--       <?php the_title( sprintf( '<h2 class="journal-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
            <a href="<?php echo esc_url( get_permalink() );?>"><button class="read-entry">Read Entry</button></a> -->

<?php get_footer();?>
