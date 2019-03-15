<?php
/**
 * This is the template that displays the Serives Post type by default.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nkd
 */

get_header(); ?>

        <div class="post-container"></div>
            <!-- start page -->
            <div class="page" id="page-services-single" class="page-services-single" data-page-id="8">
                <div class="" data-source="">
                    <!-- start section -->
                    <section id="section-5" data-id="5" class="section ">
                        <div class="st-container">
                            <!-- start push wrapper -->
                            <div class="st-pusher">
                                <div class="js-section-images-container">
                                </div>
                                <div class="modules" data-source="">
                                    <!-- start module -->
                                    <div id="module-1" class="module text-lightest link-white" data-anim="" data-id="1">
                                        <div class="inner" style="position: relative;">

                                         <?php if ( get_field( 'banner_video' ) ): ?>

                                            <div class="banner-video">

                                            <?php the_field('banner_video'); ?>

                                            </div>

                                            <?php else: // field_name returned false ?>

                                                <div class="top-hero" style="background-image: url(<?php echo get_field('banner_image'); ?>);background-size: cover;background-repeat: no-repeat; background-attachment: fixed; background-position: top center; max-height: 470px;height: 100%;padding-top: 580px; position: relative;margin-bottom: 60px;"></div>

                                               <?php endif; // end of if field_name logic ?>


                                            <div class="js-video-container">
                                            </div>
                                            <div class="mod vid-banner-intro" style="height: 100%; position: absolute; top: 0; width: 100%; background-color: rgba(0, 0, 0, 0.6);">
                                                <div class="container hero-video-btn">

                                                            <div class="top-banner-message">

                                                            <div class="single-services-banner-message come-in">

                                                                <h1><?php the_title(); ?></h1>

                                                                </div>
                                                                </div>
                                                </div>
                                            </div>
                                            <!-- end template -->
                                        </div>
                                    </div>
                                    <!-- end module -->

                                    <div class="service-page-content ci-module">

                                    <?php the_field('service_content'); ?>

                                    </div>

                                     <!-- Services Case Studies Section -->

                                     <?php if ( get_field( 'service_case_study' ) ): ?>

                                     <div class="services-case-insights-container ci-module">

                                     <div class="services-case-insights-container-inner">

                                     <div class="services-case-studies">

                                     <h3>Case Study</h3>

                                     <?php

                                     $post_object = get_field('service_case_study');

                                     if( $post_object ): 

                                         // override $post
                                         $post = $post_object;
                                         setup_postdata( $post ); 

                                         ?>
                                         <div class="services-case-studies-box">

                                         <h2><?php the_title(); ?></h2>


                                         <div class="serv-button pull-center" style="position: absolute; z-index:100;width: 100%;bottom: 10px;left: 50%;transform: translate(-50%, -50%);;"><a class="js-play btn btn-outline" style="border:solid 2px #fff; color: #fff;" href="<?php the_permalink(); ?>" style="opacity: 1; transform: translateY(0px); margin-top: 100px;">EXPLORE</a></div>

                                         <div class="serv-case-container over-lay black" style="background-image: url(<?php echo get_field('case_image'); ?>); background-size: cover; background-repeat: no-repeat; height: 220px; width: 300px; position: relative;">

                                         </div>
                                         </div>
                                         <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                     <?php endif; ?>

                                     </div>

                                     <?php if(get_field('services_insights')): ?>

                                     <div class="service-insight-container">

                                     <h3>Insights</h3>
                                         
                                     <?php while(has_sub_field('services_insights')): ?>

                                     <div class="services-insights">

                                     <?php

                                     $post_object = get_sub_field('service_insight');

                                     if( $post_object ): 

                                         // override $post
                                         $post = $post_object;
                                         setup_postdata( $post ); 

                                         ?>

                                         <span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>

                                         <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

                                     <?php else: ?>

                                     <?php endif; ?>

                                     </div>

                                     <?php endwhile; ?>

                                     </div>

                                     <?php else: ?>
                                     
                                     <?php endif; ?>

                                     </div>

                                     </div>

                                     <?php else: // field_name returned false ?>

                                     <?php endif; // end of if field_name logic ?>

                                     <!-- End Case Studies Section -->

                                    <div class="services-container">

                                    <h3>Our Platforms</h3>

                    <?php $query = new WP_Query( array('post_type' => 'nkd_services', 'posts_per_page' => -1 ) );
                      while ( $query->have_posts() ) : $query->the_post(); ?>

                      <?php if ( get_field( 'service_detail_1' ) ): ?>

                      <div class="services-ind-wrap ci-module">

                                            <div class="serv-img rounded over-lay black" style="background-image: url(<?php echo get_field('service_image'); ?>);background-size: cover;background-repeat: no-repeat;width: 100%;height: 100%;position: relative;background-position: center;">
                                            </div>

                                            <div class="services-page-text">

                                            <?php the_title(); ?>

                                            </div>

                                            <div class="serv-button pull-center"><a class="js-play btn btn-outline" style="border:solid 2px #fff; color: #fff;" href="<?php the_permalink(); ?>" style="opacity: 1; transform: translateY(0px); margin-top: 100px;">EXPLORE</a></div>

                                            <!-- Service Detail -->

                                            <div class="service-detail-container">

                                            <?php if ( get_field( 'service_detail_1' ) ): ?>

                                            <div class="service_detail">

                                            <?php the_field('service_detail_1'); ?>

                                            </div>

                                            <?php else: // field_name returned false ?>

                                            <?php endif; // end of if field_name logic ?>


                                            <?php if ( get_field( 'service_detail_2' ) ): ?>

                                            <div class="service_detail">

                                            <?php the_field('service_detail_2'); ?>

                                            </div>

                                            <?php else: // field_name returned false ?>

                                            <?php endif; // end of if field_name logic ?>


                                            <?php if ( get_field( 'service_detail_3' ) ): ?>

                                            <div class="service_detail">

                                            <?php the_field('service_detail_3'); ?>

                                            </div>

                                            <?php else: // field_name returned false ?>

                                            <?php endif; // end of if field_name logic ?>


                                            <?php if ( get_field( 'service_detail_4' ) ): ?>

                                            <div class="service_detail">

                                            <?php the_field('service_detail_4'); ?>

                                            </div>

                                            <?php else: // field_name returned false ?>

                                            <?php endif; // end of if field_name logic ?>

                                            </div>

                                            <!-- End Service Detail -->

                                            </div>

                                             <?php else: // field_name returned false ?>

                                              <?php endif; // end of if field_name logic ?>

                    <?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>

                    </div>

                    
                                </div>
                            </div>
                            <!-- end push wrapper -->
                        </div>
                    </section>
                    <!-- end section -->
                </div>
            </div>
	

<?php
get_footer();
