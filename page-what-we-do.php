<?php
/**
 * The template for displaying Our What we do page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nkd
 */

get_header(); ?>

<div class="post-container"></div>
            <!-- start page -->
            <div class="page" id="page-approach" class="page-approach" data-page-id="8">
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

                                                <div class="top-hero" style="background-image: url(<?php echo get_field('banner_image'); ?>);background-size: cover;background-attachment: fixed; background-position: center; background-repeat: no-repeat;max-height: 580px;height: 100%;padding-top: 580px; position: relative;margin-bottom: 60px;"></div>

                                               <?php endif; // end of if field_name logic ?>


                                            <div class="js-video-container">
                                            </div>
                                            <div class="mod vid-banner-intro" style="padding-top:120px; height: 100%; position: absolute; top: 0; width: 100%; background-color: rgba(0, 0, 0, 0.6);">
                                                <div class="container hero-video-btn">
                                                
                                                               <div class="col-xs-12 col-sm-10 col-sm-offset-1">

                                                               <div class="top-banner-message">

                                                               <div class="banner-message come-in">

                                                                <h1><?php the_field('banner_message'); ?></h1>

                                                                </div>

                                                                </div>
                                                            </div>
                                            </div>
                                        </div>
                                            <!-- end template -->
                                    </div>
                                </div>
                                    <!-- end module -->
                            </div>
                        </div>
                            <!-- end push wrapper -->
                    </div>
                
                </section>
                    
                <!-- end section -->

                    <!-- start section -->
                    <section id="section-9" data-id="9" class="section ">
                        <div class="st-container">
                            <!-- start push wrapper -->
                            <div class="st-pusher">
                                <div class="modules" data-source="">
                                    <!-- start module -->
                                    <div id="module-252" class="module text-darkest link-primary" data-anim="" data-id="252" data-bg-colour="" data-bg-gradient-top="" data-bg-gradient-bottom="" style="">
                                        <div class="inner" style="position: relative;">
                                            <!-- start template -->
                                            <div class="js-images-container">
                                            </div>
                                            <div class="js-video-container">
                                            </div>
                                            <div class="container text-lead-medium">
                                                    <div class="row">
                                                        <div class="content pull-center">
                                                            <div class="col-xs-12 col-sm-10 col-sm-offset-1">

                                                        <div class="app-intro">

                                                         <?php if(get_field('approach_top_text')): ?>
                                         <?php while(has_sub_field('approach_top_text')): ?>

                                                        <h2 class="lead ci-module"><?php the_sub_field('text'); ?></h2>

                                                <?php endwhile; ?>
                                        <?php endif; ?>

                                                        </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end template -->
                                        </div>
                                    </div>
                                    <!-- end module -->

                            <div class="services-desktop">

                            <!-- Case Studies Section desktop 1-->

                            <!-- Top Tabs 1-->

                            <div class="flex-container cases" style="margin-bottom: 0px!important;">

                            <div class="flexslider-controls top-tabs ci-module" style="margin-bottom: -20px;">

                            <ol id="tabs-nav">

                            <?php
                                        $flex = new WP_Query(array('post_type' => 'nkd_services', 'posts_per_page' => 4));
                                          if($flex->have_posts()) :
                                              while($flex->have_posts()) : $flex->the_post();
                                          ?>

                             <div class="case-study-outer">

                             <li style="border-radius: 4px;">

                             <div class="case-studies-container over-lay black" style="background-image: url(<?php echo get_field('service_image'); ?>); background-size: cover; background-repeat: no-repeat; width: 100%; height: 100%; position: relative; cursor: pointer;">
                             </div>

                             <div class="tabs-text">
                                            <?php the_title(); ?>
                                            </div>

                                            <div class="cases-button pull-center"><a class="js-play btn btn-outline" style="border:solid 2px #fff; color: #fff;" style="opacity: 1; transform: translateY(0px); margin-top: 100px;">EXPLORE</a></div>
                             </li>
                             </div>

                             <?php
                                              endwhile;
                                          endif;
                                    ?>
                           </ol>
                        </div>

                        <!-- Content area desktop 1-->
                        
                            <div id ="flexslider-approach-page" class="flexslider ci-module">
                                <ul class="slides">
                                    <?php
                                        $flex = new WP_Query(array('post_type' => 'nkd_services', 'posts_per_page' => 4));
                                          if($flex->have_posts()) :
                                              while($flex->have_posts()) : $flex->the_post();
                                          ?>

                                            <li style="border-radius: 4px;background-color: #21333a;">

                                             <div class="cases-inner-text case-button">

                                             <div class="approach-title">
                                             <h3><?php the_title(); ?></h3>  
                                             </div>

                                             <p><?php the_field('main_text'); ?></p>

                                             <div class="round-elements-container">

                                               <?php if(get_field('round_elements')): ?>
                                                 
                                                 <?php while(has_sub_field('round_elements')): ?>

                                                <div class="round-element-pusher">  

                                                  <div class="round-element">

                                                  <p><?php the_sub_field('round_element_text'); ?></p>

                                                  </div>

                                                </div>

                                                  <?php endwhile; ?>
                                        <?php endif; ?>
                                        </div>

                                              <?php if ( get_field( 'full_case_study_1' ) ): ?>

                                                <div class="cases-button pull-center" style="margin: 40px auto 0 auto;position: relative;bottom: 0">
                                                <a class="js-play btn btn-outline" style="border:solid 2px #fff; color: #fff;opacity: 1; transform: translateY(0px);" href="<?php echo get_field('case_study_1_link'); ?>">
                                                Take a deeper look</a>
                                                </div>

                                               <?php else: // Link to case Study if no Video ?>

                                               <?php endif; // end of if field_name logic ?>

                                               <?php if ( get_field( 'full_case_study_2' ) ): ?>

                                                <div class="cases-button pull-center" style="margin: 40px auto 0 auto;position: relative;bottom: 0">
                                                <a class="js-play btn btn-outline" style="border:solid 2px #fff; color: #fff;opacity: 1; transform: translateY(0px);" href="<?php echo get_field('case_study_1_link'); ?>">
                                                Take a deeper look</a>
                                                </div>

                                               <?php else: // Link to case Study if no Video ?>

                                               <?php endif; // end of if field_name logic ?>

                                             </div>

                                            </li>

                                          <?php
                                              endwhile;
                                          endif;
                                    ?>

                                </ul>  
                            </div>
                        </div>

                        <?php wp_reset_query(); ?>

                        <div class="container text-lead-medium">
                                                    <div class="row link-primary">
                                                        <div class="content pull-center">
                                                            <div class="col-xs-12 col-sm-10 col-sm-offset-1 wwd-bot-con">

                                   <?php if(get_field('middle_text')): ?>
                                                            <?php while(has_sub_field('middle_text')): ?>

                                                        <div class="app-intro">
                                                        <h2 class="heading small ci-module"><?php echo get_sub_field('text_title'); ?></h2>
                                                        </div>
                                                        <div class="app-title">
                                                        <h2 class="lead ci-module"><?php echo get_sub_field('text_content'); ?></h2>
                                                        </div>

                                                        <?php endwhile; ?>
                                                        <?php endif; ?>

                                                        </div>
                                                        </div>
                                                        </div>
                                                </div>
                        
                         <?php wp_reset_query(); ?>

                         <!-- Case Studies Section desktop 2-->

                                <!-- Top Tabs 2-->

                            <div class="flex-container cases">

                            <div class="flexslider-controls-bottom top-tabs ci-module" style="margin-bottom: -20px;">

                            <ol id="tabs-nav-2">

                            <?php
                                        $flex = new WP_Query(array('post_type' => 'nkd_services', 'offset'=> 4, 'posts_per_page' => 4));
                                          if($flex->have_posts()) :
                                              while($flex->have_posts()) : $flex->the_post();
                                          ?>

                             <div class="case-study-outer">

                             <li style="border-radius: 4px;">

                             <div class="case-studies-container over-lay black" style="background-image: url(<?php echo get_field('service_image'); ?>); background-size: cover; background-repeat: no-repeat; width: 100%; height: 100%; position: relative; cursor: pointer;">
                             </div>

                             <div class="tabs-text">
                                            <?php the_title(); ?>
                                            </div>

                                            <div class="cases-button pull-center"><a class="js-play btn btn-outline" style="border:solid 2px #fff; color: #fff;" style="opacity: 1; transform: translateY(0px); margin-top: 100px;">EXPLORE</a></div>
                             </li>
                             </div>

                             <?php
                                              endwhile;
                                          endif;
                                    ?>
                           </ol>
                        </div>

                        <!-- Content area desktop 2-->
                        
                            <div id ="flexslider-approach-page-2" class="flexslider ci-module">
                                <ul class="slides">
                                    <?php
                                        $flex = new WP_Query(array('post_type' => 'nkd_services', 'offset'=> 4, 'posts_per_page' => 4));
                                          if($flex->have_posts()) :
                                              while($flex->have_posts()) : $flex->the_post();
                                          ?>

                                            <li style="border-radius: 4px;background-color: #21333a;">

                                             <div class="cases-inner-text case-button">

                                             <div class="approach-title">
                                             <h3><?php the_title(); ?></h3>  
                                             </div>

                                             <p><?php the_field('main_text'); ?></p>

                                             <div class="round-elements-container">

                                               <?php if(get_field('round_elements')): ?>
                                                 
                                                 <?php while(has_sub_field('round_elements')): ?>

                                                <div class="round-element-pusher">  

                                                  <div class="round-element">

                                                  <p><?php the_sub_field('round_element_text'); ?></p>

                                                  </div>

                                                </div>

                                                  <?php endwhile; ?>
                                        <?php endif; ?>
                                        </div>

                                              <?php if ( get_field( 'full_case_study_1' ) ): ?>

                                                <div class="cases-button pull-center" style="margin: 40px auto 0 auto;position: relative;bottom: 0">
                                                <a class="js-play btn btn-outline" style="border:solid 2px #fff; color: #fff;opacity: 1; transform: translateY(0px);" href="<?php echo get_field('case_study_1_link'); ?>">
                                                Take a deeper look</a>
                                                </div>

                                               <?php else: // Link to case Study if no Video ?>

                                               <?php endif; // end of if field_name logic ?>

                                               <?php if ( get_field( 'full_case_study_2' ) ): ?>

                                                <div class="cases-button pull-center" style="margin: 40px auto 0 auto;position: relative;bottom: 0">
                                                <a class="js-play btn btn-outline" style="border:solid 2px #fff; color: #fff;opacity: 1; transform: translateY(0px);" href="<?php echo get_field('case_study_1_link'); ?>">
                                                Take a deeper look</a>
                                                </div>

                                               <?php else: // Link to case Study if no Video ?>

                                               <?php endif; // end of if field_name logic ?>

                                             </div>

                                            </li>

                                          <?php
                                              endwhile;
                                          endif;
                                    ?>

                                </ul>  
                            </div>

                            </div>

                            </div>

                            <!-- End Case Study Section desktop -->
                                                 
                            <?php wp_reset_query(); ?>

                            <!-- Start Case Study Section mobile -->

                            <div class="services-mobile">

                             <!-- start section -->


                <?php
                    $flex = new WP_Query(array('post_type' => 'nkd_services', 'offset'=> 1, 'posts_per_page' => 3));
                                          if($flex->have_posts()) :
                                              while($flex->have_posts()) : $flex->the_post();
                                          ?>

                <!-- Accordian -->

                            <div class="accordian-container accordian-mobile ci-module" style="margin:0 auto;width:90%">

                            <dl class="accordion">

                            <dt style="height:auto!important;max-height: none!important;position: relative;padding-top: 0;">

                            <a class="cases-button pull-center btn btn-outline" style="border:solid 2px #fff; color: #fff; opacity: 1;z-index: 1;bottom: 80px;width: 60%;left:20%;">EXPLORE</a>

                            <div class="case-study-outer" style="height: 400px;">

                             <div style="border-radius: 4px;">

                             <div class="case-studies-container over-lay black" style="background-image: url(<?php echo get_field('service_image'); ?>); background-size: cover; background-repeat: no-repeat; width: 100%; height: 100%;position: relative;cursor: pointer;padding-top: 400px;height: 400px;">
                             </div>

                             <div class="tabs-text" style="font-size: 36px;line-height: 38px;">
                                            <?php the_title(); ?>
                                            </div>

                             </div>
                             </div>
                             </dt>
                                          <dd style="width: 100%;margin: 0 auto 40px auto;border-radius: 4px;">

                                          <div style="border-radius: 4px;background-color: #21333a;">

                                             <div class="cases-inner-text case-button">

                                             <div class="approach-title">
                                             <h3><?php the_title(); ?></h3>  
                                             </div>

                                             <p><?php the_field('main_text'); ?></p>

                                             <div class="round-elements-container">

                                               <?php if(get_field('round_elements')): ?>
                                                 
                                                 <?php while(has_sub_field('round_elements')): ?>

                                                <div class="round-element-pusher">  

                                                  <div class="round-element">

                                                  <p><?php the_sub_field('round_element_text'); ?></p>

                                                  </div>

                                                </div>

                                                  <?php endwhile; ?>
                                        <?php endif; ?>
                                        </div>

                                              <?php if ( get_field( 'full_case_study_1' ) ): ?>

                                                <div class="cases-button pull-center" style="margin: 40px auto 0 auto;position: relative;bottom: 0">
                                                <a class="js-play btn btn-outline dd-btn-mob" style="border:solid 2px #fff; color: #fff;opacity: 1; transform: translateY(0px);" href="<?php echo get_field('case_study_1_link'); ?>">
                                                Take a deeper look</a>
                                                </div>

                                               <?php else: // Link to case Study if no Video ?>

                                               <?php endif; // end of if field_name logic ?>

                                               <?php if ( get_field( 'full_case_study_2' ) ): ?>

                                                <div class="cases-button pull-center" style="margin: 40px auto 0 auto;position: relative;bottom: 0">
                                                <a class="js-play btn btn-outline" style="border:solid 2px #fff; color: #fff;opacity: 1; transform: translateY(0px);" href="<?php echo get_field('case_study_1_link'); ?>">
                                                Take a deeper look</a>
                                                </div>

                                               <?php else: // Link to case Study if no Video ?>

                                               <?php endif; // end of if field_name logic ?>

                                             </div>

                                            </div>

                                            </dd>
                                                            
                                         </dl>

                                                        </div> 

                                                      <?php
                                              endwhile;
                                          endif;
                                    ?>

                                    <?php wp_reset_query(); ?>

                        <div class="container text-lead-medium">
                                                    <div class="row link-primary">
                                                        <div class="content pull-center">
                                                            <div class="col-xs-12 col-sm-10 col-sm-offset-1 wwd-bot-con">

                                   <?php if(get_field('middle_text')): ?>
                                                            <?php while(has_sub_field('middle_text')): ?>

                                                        <div class="app-intro">
                                                        <h2 class="heading small ci-module"><?php echo get_sub_field('text_title'); ?></h2>
                                                        </div>
                                                        <div class="app-title">
                                                        <h2 class="lead ci-module"><?php echo get_sub_field('text_content'); ?></h2>
                                                        </div>

                                                        <?php endwhile; ?>
                                                        <?php endif; ?>

                                                        </div>
                                                        </div>
                                                        </div>
                                                </div>
                        
                         <?php wp_reset_query(); ?>


                                         <?php
                    $flex = new WP_Query(array('post_type' => 'nkd_services', 'offset'=> 5, 'posts_per_page' => 3));
                                          if($flex->have_posts()) :
                                              while($flex->have_posts()) : $flex->the_post();
                                          ?>

                <!-- Accordian -->

                            <div class="accordian-container accordian-mobile ci-module" style="margin:0 auto;width:90%">

                            <dl class="accordion">

                            <dt style="height:auto!important;max-height: none!important;position: relative;padding-top: 0;">

                            <a class="cases-button pull-center btn btn-outline" style="border:solid 2px #fff; color: #fff; opacity: 1;z-index: 1;bottom: 80px;width: 60%;left:20%;">EXPLORE</a>

                            <div class="case-study-outer" style="height: 400px;">

                             <div style="border-radius: 4px;">

                             <div class="case-studies-container over-lay black" style="background-image: url(<?php echo get_field('service_image'); ?>); background-size: cover; background-repeat: no-repeat; width: 100%; height: 100%;position: relative;cursor: pointer;padding-top: 400px;height: 400px;">
                             </div>

                             <div class="tabs-text" style="font-size: 36px;line-height: 38px;">
                                            <?php the_title(); ?>
                                            </div>

                             </div>
                             </div>
                             </dt>
                                          <dd style="width: 100%;margin: 0 auto 40px auto;border-radius: 4px;">

                                          <div style="border-radius: 4px;background-color: #21333a;">

                                             <div class="cases-inner-text case-button">

                                             <div class="approach-title">
                                             <h3><?php the_title(); ?></h3>  
                                             </div>

                                             <p><?php the_field('main_text'); ?></p>

                                             <div class="round-elements-container">

                                               <?php if(get_field('round_elements')): ?>
                                                 
                                                 <?php while(has_sub_field('round_elements')): ?>

                                                <div class="round-element-pusher">  

                                                  <div class="round-element">

                                                  <p><?php the_sub_field('round_element_text'); ?></p>

                                                  </div>

                                                </div>

                                                  <?php endwhile; ?>
                                        <?php endif; ?>
                                        </div>

                                              <?php if ( get_field( 'full_case_study_1' ) ): ?>

                                                <div class="cases-button pull-center" style="margin: 40px auto 0 auto;position: relative;bottom: 0">
                                                <a class="js-play btn btn-outline dd-btn-mob" style="border:solid 2px #fff; color: #fff;opacity: 1; transform: translateY(0px);" href="<?php echo get_field('case_study_1_link'); ?>">
                                                Take a deeper look</a>
                                                </div>

                                               <?php else: // Link to case Study if no Video ?>

                                               <?php endif; // end of if field_name logic ?>

                                               <?php if ( get_field( 'full_case_study_2' ) ): ?>

                                                <div class="cases-button pull-center" style="margin: 40px auto 0 auto;position: relative;bottom: 0">
                                                <a class="js-play btn btn-outline" style="border:solid 2px #fff; color: #fff;opacity: 1; transform: translateY(0px);" href="<?php echo get_field('case_study_1_link'); ?>">
                                                Take a deeper look</a>
                                                </div>

                                               <?php else: // Link to case Study if no Video ?>

                                               <?php endif; // end of if field_name logic ?>

                                             </div>

                                            </div>

                                            </dd>
                                                            
                                         </dl>

                                                        </div> 

                                                      <?php
                                              endwhile;
                                          endif;
                                    ?>

                            </div>

                            <!-- End Case Study Section mobile -->

                          </div>
                          </div>
                          </div>
                          </section>

                    
            </div>
    

<?php
get_footer();
