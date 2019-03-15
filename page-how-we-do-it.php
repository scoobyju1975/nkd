<?php
/**
 * The template for displaying Our How we do it page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nkd
 */

get_header(); ?>

<div class="post-container"></div>
            <!-- start page -->
            <div class="page" id="page-services" class="page-services" data-page-id="8">
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

                                                <div class="top-hero" style="background-image: url(<?php echo get_field('banner_image'); ?>);background-size: cover;background-repeat: no-repeat; background-attachment: fixed; background-position: center; max-height: 470px;height: 100%;padding-top: 580px; position: relative;margin-bottom: 60px;"></div>

                                               <?php endif; // end of if field_name logic ?>


                                            <div class="js-video-container">
                                            </div>
                                            <div class="mod vid-banner-intro" style="height: 100%; position: absolute; top: 0; width: 100%; background-color: rgba(0, 0, 0, 0.6);">
                                                <div class="container hero-video-btn">

                                                            <div class="top-banner-message">

                                                            <div class="banner-message come-in">

                                                                <h1><?php the_field('banner_message'); ?></h1>

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
                                <div class="modules">

                                    <div class="container text-lead-medium">
                                                    <div class="row link-white">
                                                        <div class="content pull-center">

                                                            <div class="hwdi-title">

                                                            <h2 class="lead ci-module" style="font-size: 30px!important;">

                                                            <?php the_field('introduction_text'); ?></h2>

                                                            </div>

                                                            <!-- Accordian -->

                                                            <div class="accordian-container ci-module">

                                                            <?php if(get_field('bottom_content')): ?>

                                                            <?php while(has_sub_field('bottom_content')): ?>

                                                            <dl class="accordion">

                                                            <dt class="over-lay black" style="background-image: url(<?php echo get_sub_field('area_background'); ?>);background-size: cover;background-repeat: no-repeat; background-position: center; max-height: 420px;height: 420px;position: relative;">

                                                            

                                                            <div class="accordian-title">
                                                           
                                                            <h2 class="ci-module" style="font-size: 50px;margin-bottom: 60px"><?php the_sub_field('area_title'); ?></h2>

                                                            <h2 class="ci-module" style="font-size: 30px!important;"><?php the_sub_field('area_text'); ?></h2>

                                                            </div>

                                                            <a href="">

                                                            <div class="top-banner-button">
                                                             
                                                             <div class="pull-center ci-module">

                                                             <button class="btn btn-outline how-we-do-it-btn" data-text-swap="Show me less">Show me more
                                                             </button>

                                                             </div>
                                                            
                                                            </div>

                                                            </a>

                                                            </dt>

                                                            <dd>

                                                            <h2 style="color:#fff!important;font-size: 22px!important;"><?php the_sub_field('section_content'); ?></h2>

                                                            </dd>
                                                            
                                                        </dl>

                                                        <?php endwhile; ?>
                                                       
                                                        <?php endif; ?>    

                                                        </div> 

                                                    </div>
                                                </div>
                                            </div>        
                                   </div>
                                 <!-- end module -->
                            </div>
                            <!-- end push wrapper -->
                        </div>
                    </section>
                    <!-- end section -->
                </div>
            </div>
    

<?php
get_footer();
