<?php
/**
 * The header for our theme.
 *Template Name:motessori
 * @package Montessori_Theme
 */
 get_header();

?>

        <main id="main" class="site-main" role="main">

          <section id="history" class="history-section container">
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
                                  <div class="">
                                    <!-- <a href="#<?php the_title();?>" class="">
                                      <img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-".$post->post_name.".svg"?>">
                                    </a> -->
                                    <h1><?php the_title();?></h1>
                                  </div>
                                  <div id="<?php the_title();?>" class="history">
                                  </div>
                                  <div>
                                      <?php if ( has_post_thumbnail() ) : ?>
                                      </div>
                                      <div>
                                          <?php the_post_thumbnail( 'original' ); ?>
                                        </div>
                                      <?php endif; ?>
          <div>
                                      <p><?php the_content(); ?></p>

                                  </div>
                                </li>
                              <?php endforeach; wp_reset_postdata(); ?>
                            </ul>
                          </div>

          <h1>yousef2</h1>

          </section>

<section id="materials" class="materials-section container">
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
                        <div class="">
                          <!-- <a href="#<?php the_title();?>" class="">
                            <img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-".$post->post_name.".svg"?>">
                          </a> -->
                          <h1><?php the_title();?></h1>
                        </div>
                        <div id="<?php the_title();?>" class="material">
                        </div>
                        <div>
                            <?php if ( has_post_thumbnail() ) : ?>
                            </div>
                            <div>
                                <?php the_post_thumbnail( 'original' ); ?>
                              </div>
                            <?php endif; ?>
<div>
                            <p><?php the_content(); ?></p>

                        </div>
                      </li>
                    <?php endforeach; wp_reset_postdata(); ?>
                  </ul>
                </div>

<h1>yousef2</h1>

</section>

<?php get_footer();?>
