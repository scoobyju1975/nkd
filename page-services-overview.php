<?php
/**
 * The template for displaying Services Overview page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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

                                                <div class="top-hero" style="background-image: url(<?php echo get_field('banner_image'); ?>);background-size: cover;background-attachment: fixed; background-position: center; background-repeat: no-repeat;max-height: 580px;height: 100%;padding-top: 580px; position: relative;margin-bottom: 60px;"></div>

                                               <?php endif; // end of if field_name logic ?>


                                            <div class="js-video-container">
                                            </div>
                                            <div class="mod" style="padding-top:120px; height: 100%; position: absolute; top: 0; width: 100%; background-color: rgba(0, 0, 0, 0.6);">
                                                <div class="container hero-video-btn">
                                                    <div class="row">
                                                        <div class="content">
                                                            <div class="col-xs-12">
                                                
                                                               <div class="col-xs-12 col-sm-10 col-sm-offset-1">

                                                               <div class="top-banner-message">

                                                               <div class="services-banner-message">

                                                               <div class="come-in">
                                                                <h1 class="large-font chevron">Shift <span class="bold">thinking</span></h1></div>
                                                                <div class="come-in-deep">
                                                                <h1 class="large-font chevron">Change <span class="bold">behaviour</span></h1></div>
                                                                <div class="come-in-deeper">
                                                                <h1 class="large-font space-bottom">Transform <span class="bold">performance</span></h1></div>

                                                                </div>
                                                                </div>
                                                            </div>
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
                    <section id="section-7" data-id="7" class="section ">
                        <div class="st-container">
                            <!-- start push wrapper -->
                            <div class="st-pusher">
                                <div class="js-section-images-container">
                                </div>
                                <div class="modules" data-source="">
                                    <!-- start module -->
                                    <div id="module-29" class="module text-darker link-primary" data-anim="" data-id="29" data-bg-colour="#fefefe" data-bg-gradient-top="" data-bg-gradient-bottom="" style="background-color:#fefefe;">
                                        <div class="inner" style="position: relative;">
                                            <!-- start template -->
                                            <div class="js-images-container">
                                            </div>
                                            <div class="js-video-container">
                                            </div>
                                            <div data-anim="" data-padding-top="100" data-padding-bottom="0" style="">
                                                <div class="container text-lead-medium">
                                                    <div class="row">
                                                        <div class="content pull-center">
                                                            
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
                                <div class="js-section-images-container">
                                </div>
                                <div class="modules" data-source="">
                                    <!-- start module -->
                                    <div id="module-31" class="module text-darker link-primary" data-anim="" data-id="31" data-bg-colour="" data-bg-gradient-top="" data-bg-gradient-bottom="" style="">
                                        <div class="inner" style="position: relative;">
                                            <!-- start template -->
                                            <div class="js-images-container">
                                            </div>
                                            <div class="js-video-container">
                                            </div>
                                            <!-- end template -->
                                        </div>
                                    </div>
                                    <!-- end module -->
                                    <!-- start module -->
                                    <div id="module-252" class="module text-darkest link-primary" data-anim="" data-id="252" data-bg-colour="" data-bg-gradient-top="" data-bg-gradient-bottom="" style="">
                                        <div class="inner" style="position: relative;">
                                            <!-- start template -->
                                            <div class="js-images-container">
                                            </div>
                                            <div class="js-video-container">
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
                    <section id="section-7" data-id="7" class="section ">
                        <div class="st-container">
                            <!-- start push wrapper -->
                            <div class="st-pusher">

                            <div class="link-primary ci-module">

                                    <div class="container text-lead-medium">
                                                    <div class="row">
                                                        <div class="content pull-center">
                                                            <div class="col-xs-12 col-sm-10 col-sm-offset-1">

                                     <h2 class="heading small bottom-fix"><?php the_field('our_services_title'); ?></h2>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                <div class="services-container">

                    <?php $query = new WP_Query( array('post_type' => 'nkd_services', 'posts_per_page' => -1 ) );
                      while ( $query->have_posts() ) : $query->the_post(); ?>

                      <div class="services-ind-wrap ci-module">

                                            <?php if ( get_field( 'service_image' ) ): ?>

                                            <div class="rounded" style="background-image: url(<?php echo get_field('service_image'); ?>);background-size: cover;background-repeat: no-repeat;width: 100%;height: 100%;position: relative;background-position: center;">

                                            <?php else: // field_name returned false ?>

                                            <div class="rounded over-lay black" style="background-image: url(<?php echo get_field('banner_image'); ?>);background-size: cover;background-repeat: no-repeat;width: 100%;height: 100%;position: relative;background-position: center;">

                                            <?php endif; // end of if field_name logic ?>

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

                                            </div>

                    <?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>

                    </div>



                                    </div>

                                    </div>

                                    </section>                   

                    <!-- start section -->
                    <section id="section-100" data-id="100" class="section ">
                        <div class="st-container">
                            <!-- start push wrapper -->
                            <div class="st-pusher">
                                <div class="js-section-images-container">
                                </div>
                                <div class="modules" data-source="">
                                    <!-- start module -->
                                    <div id="module-335" class="module text-darkest link-black" data-anim="" data-id="335" data-bg-colour="#fefefe" data-bg-gradient-top="" data-bg-gradient-bottom="" style="background-color:#fefefe;">
                                        <div class="inner" style="position: relative;">
                                            <!-- start template -->
                                            <div class="js-images-container">
                                            </div>
                                            <div class="js-video-container">
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
                </div>
            </div>
	

<?php
get_footer();
