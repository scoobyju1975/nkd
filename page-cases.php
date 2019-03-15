<?php
/**
 * This is the template that displays the Case Studies page by default.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nkd
 */

get_header(); ?>

            <!-- start page -->
            <div class="page" id="page-case-studies" class="case-studies" data-page-id="8">
                  <!-- start section -->
                    <section id="section-5" data-id="5" class="section ">
                        <div class="st-container">
                            <!-- start push wrapper -->
                            <div class="st-pusher">
                                <div class="modules" data-source="">
                                    <!-- start module -->
                                    <div id="module-1" class="module text-lightest link-white" data-anim="" data-id="1">
                                        <div class="inner" style="position: relative;">

                                         <?php if ( get_field( 'banner_video' ) ): ?>

                                            <div class="banner-video">

                                            <?php the_field('banner_video'); ?>

                                            </div>

                                            <?php else: // field_name returned false ?>

                                                <div class="top-hero" style="background-image: url(<?php echo get_field('banner_image'); ?>);background-size: cover;background-repeat: no-repeat; background-attachment: fixed; background-position: center bottom; max-height: 470px;height: 100%;padding-top: 580px; position: relative;margin-bottom: 60px;"></div>

                                               <?php endif; // end of if field_name logic ?>

                                            <div class="mod vid-banner-intro" style="height: 100%; position: absolute; top: 0; width: 100%; background-color: rgba(0, 0, 0, 0.6);">
                                                <div class="container hero-video-btn">

                                                            <div class="top-banner-message">

                                                            <div class="banner-message come-in">

                                                                <h1><?php the_field('banner_message'); ?></h1>

                                                                </div>
                                                                </div>
                                                </div>
                                                <div class="top-banner-button">
                                                <div class="pull-center come-in-deeper"><a class="js-play btn btn-outline" href="<?php the_field('banner_button_link'); ?>" style="opacity: 1; transform: translateY(0px);">See More</a></div>
                                                </div>
                                            </div>
                                            <!-- end template -->
                                        </div>
                                    </div>
                                    <!-- end module -->

                                    <div id="cases-align" class="link-primary ci-module">

                                    <div class="container text-lead-medium">
                                                    <div class="row">
                                                        <div class="content pull-center">
                                                            <div class="col-xs-12 col-sm-10 col-sm-offset-1">

                                     <h2 class="heading small" style="margin-bottom: 60px;"> <?php the_field('case_study_content_title'); ?></h2>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <!-- Case Studies Section -->

                            <div class="flex-container cases">
                        
                            <div id ="" class="ci-module">
                                <ul class="slides">
                                    
                                    <?php

                                     $post_object = get_field('choose_main_case_study_in_large_box');

                                     if( $post_object ): 

                                         // override $post
                                         $post = $post_object;
                                         setup_postdata( $post ); 

                                         ?>

                                            <li class="over-lay black" style="background-image: url(<?php echo get_field('case_image'); ?>); background-size: cover; background-repeat: no-repeat;">

                                             <a href="<?php the_permalink(); ?>">

                                             <div class="cases-inner">

                                             </div>

                                             </a>

                                             <div class="cases-inner-text case-button single-case-banner">

                                             <h3><?php the_title(); ?></h3>

                                             </div>

                                             <?php if ( get_field( 'case_study_video' ) ): ?>

                                               <div class="case-btn-vid pull-center"><a rel="wp-video-lightbox" class="js-play btn btn-outline" style="border:solid 2px #fff; color: #fff; opacity: 1; transform: translateY(0px); margin-top: 100px; position: relative; z-index: 100; padding: 5px 30px;" href="<?php echo get_field('case_study_video'); ?>">Watch the film</a></div>

                                               <?php else: // Link to case Study if no Video ?>

                                                <div class="case-btn-see-more pull-center"><a class="js-play btn btn-outline" style="border:solid 2px #fff; color: #fff; opacity: 1; transform: translateY(0px); margin-top: 100px; position: relative; z-index: 100; padding: 5px 30px;" href="<?php the_permalink(); ?>">See more</a></div>

                                               <?php endif; // end of if field_name logic ?>

                                            </li>

                                          <?php endif; ?>

                                </ul>
                                
                            </div>

                            <div class="flexslider-controls ci-module">

                            <ol id="tabs-nav">

                            <?php $query = new WP_Query( array('category_name' => 'case_studies', 'posts_per_page' => 10 ) );
                                
                                while ( $query->have_posts() ) : $query->the_post(); ?>

                             <?php if ( get_field( 'title_for_case_study_boxes_on_case_study_main_page' ) ): ?>

                             <a href="<?php the_permalink(); ?>">

                             <div class="case-study-outer">

                             <li>

                             <div class="case-studies-container over-lay black" style="background-image: url(<?php echo get_field('case_image'); ?>); background-size: cover; background-repeat: no-repeat; width: 100%; height: 100%; position: relative; cursor: pointer;">
                             </div>

                             <div class="tabs-text">
                                            <?php the_field('title_for_case_study_boxes_on_case_study_main_page'); ?>
                                            </div>

                                            <div class="cases-button pull-center"><a href="<?php the_permalink(); ?>" class="js-play btn btn-outline" style="border:solid 2px #fff; color: #fff;" style="opacity: 1; transform: translateY(0px); margin-top: 100px;">EXPLORE</a></div>
                             </li>
                             </div>
                             
                             </a>

                             <?php else: ?>

                             <?php endif; ?>

                             <?php endwhile; ?>
                           </ol>
                        </div>
                            </div>
                                   
                                    <?php wp_reset_query(); ?>

                                    <!-- End Case Study Section -->
                            </div>
                            <!-- end push wrapper -->
                        </div>
                    </section>
                    <!-- end section -->
                </div>
            </div>
	

<?php
get_footer();
