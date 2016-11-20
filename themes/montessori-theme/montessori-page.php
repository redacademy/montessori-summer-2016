<?php
/**
 * The header for our theme.
 *Template Name:motessori
 * @package Montessori_Theme
 */
 get_header();

?>

        <main id="main" class="site-main" role="main">

          <section id="history" class="history-section mobile-container">

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
                           
                            <li class="materials-thmbnail">
                                <?php the_post_thumbnail( 'original' ); ?>
                              </li>
                            <?php endif; ?>
                            <li class="materials-content">
                            <p><?php the_content(); ?></p>

                        </li>
                
                    <?php endforeach; wp_reset_postdata(); ?>
                  </ul>
               

</section>


<section id="philosophys" class="philosophy-section mobile-container">
                  <ul class="main-materials">
                    <h1 id="philosophy" >philosophy</h1>

                    <?php
                      $args = array(
                        'post_type' => 'philosophy',
                        'numberposts' => 6,
                        'order' => 'ASC',
                        );
                      $philosophy_post = get_posts($args);
                      ?>
                      <?php foreach($philosophy_post as $post) : setup_postdata( $post); ?>
                           <li id="<?php the_title();?>" class="philosophy-titles">
                          <a href="#"><?php the_title();?></a>
                        </li>
                        
                            
                                  <li class="philosophy-content" >
                            <p><?php the_content(); ?></p>

                      </li>
                     <?php if ( has_post_thumbnail() ) : ?>
                         

                           <li> <a  href="#" class="<?php the_title();?>  philosophy-thumbnails" >
                                <?php the_post_thumbnail( 'small' ); ?>
                             </a>
                       </li>
                            <?php endif; ?>
                         
             
                      <div>
                    <?php endforeach; wp_reset_postdata(); ?>
                  </ul>
               

</section>
 <!-- <a href="#<?php the_title();?>" class="">
                            <img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-".$post->post_name.".svg"?>">
                          </a> -->
                           <!--       <?php the_title( sprintf( '<h2 class="journal-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
            <a href="<?php echo esc_url( get_permalink() );?>"><button class="read-entry">Read Entry</button></a> -->

<?php get_footer();?>
