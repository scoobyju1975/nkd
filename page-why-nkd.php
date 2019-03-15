<?php
/**
 * This is the template that displays the Why NKD Us page by default.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nkd
 */

get_header(); ?>

            <!-- start page -->
            <div class="page" id="page-why-nkd" class="page-why-nkd" data-page-id="8">
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

                                                <div class="top-hero" style="background-image: url(<?php echo get_field('banner_image'); ?>);background-size: cover;background-repeat: no-repeat; background-attachment: fixed; background-position: center; max-height: 470px;height: 100%;padding-top: 580px; position: relative;margin-bottom: 60px;"></div>

                                               <?php endif; // end of if field_name logic ?>


                                            <div class="js-video-container">
                                            </div>
                                            <div class="mod vid-banner-intro" style="padding-top:160px; height: 100%; position: absolute; top: 0; width: 100%; background-color: rgba(0, 0, 0, 0.6);">
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
                                            <div class="container text-lead-medium">
                                                    <div class="row">
                                                        <div class="content pull-center">
                                                            <div class="col-xs-12 col-sm-10 col-sm-offset-1">

                                                        <h2 class="heading small ci-module"><?php the_field('nkd_top_title'); ?></h2>


                                                        <h2 class="lead ci-module"><?php the_field('nkd_text'); ?></h2>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <?php if ( get_field( 'video_1_background' ) ): ?>

                                            <div class="content-video over-lay black ci-module">

                                            <div style="background-image: url(<?php echo get_field('video_1_background'); ?>);background-size: cover;background-repeat: no-repeat; padding-top: 580px;"></div>

                                            <?php if ( get_field( 'video_1_text' ) ): ?>

                                            <div class="video_1_text ci-module">

                                            <h2><?php the_field('video_1_text'); ?></h2>

                                            </div>

                                            <?php else: // field_name returned false ?>

                                                <div></div>

                                            <?php endif; // end of if field_name logic ?>


                                            <?php if ( get_field( 'small_text_bold' ) ): ?>

                                            <div class="video_1_text_name ci-module">

                                            <p style="font-weight: 900;"><?php the_field('small_text_bold'); ?></p>

                                            </div>

                                            <?php else: // field_name returned false ?>

                                                <div></div>

                                            <?php endif; // end of if field_name logic ?>


                                            <?php if ( get_field( 'small_text_for_slider_-_normal_font_weight' ) ): ?>

                                            <div class="video_1_text_quote ci-module">

                                            <p><?php the_field('small_text_for_slider_-_normal_font_weight'); ?></p>

                                            </div>

                                            <?php else: // field_name returned false ?>

                                                <div></div>

                                            <?php endif; // end of if field_name logic ?>


                                            <div class="video_1_button ci-module">

                                            <div class="pull-center link-white"><a rel="wp-video-lightbox" class="js-play btn btn-outline" href="<?php the_field('video_1_link'); ?>" style="opacity: 1; transform: translateY(0px); margin-top: 100px;">Watch film</a></div>
                                            </div>

                                            </div>

                                            <?php else: // field_name returned false ?>

                                                <div></div>

                                            <?php endif; // end of if field_name logic ?>

                                            <?php if ( get_field( 'video_2_background' ) ): ?>

                                            <div class="full-width-colored ci-module">

                                            <div class="video_2_title ci-module">

                                            <h2><?php the_field('video_2_title'); ?></h2>

                                            </div>

                                            <div class="video_2_text ci-module">

                                            <?php the_field('video_2_text'); ?>

                                            </div>

                                            <div class="content-video-2">

                                            <div class="content-video-2-image" style="background-image: url(<?php echo get_field('video_2_background'); ?>);background-size: 100%;background-repeat: no-repeat;height: 400px;">
                                            </div>

                                            <div class="video_2_button ci-module">

                                            <div class="pull-center link-white"><a rel="wp-video-lightbox" class="js-play btn btn-outline" href="<?php the_field('video_2_link'); ?>" style="opacity: 1; transform: translateY(0px); margin-top: 100px;">Watch film</a></div>
                                            </div>

                                            </div>

                                            </div>

                                            <?php else: // field_name returned false ?>

                                                <div></div>

                                               <?php endif; // end of if field_name logic ?>







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
                                <div class="js-section-images-container">
                                </div>
                                <div class="modules" data-source="">


                     <!-- start module -->
                                    <div id="module-92" class="module text-darkest link-primary" data-anim="" data-id="92" data-bg-colour="" data-bg-gradient-top="" data-bg-gradient-bottom="" style="">
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

                                    </div>

                                    </section>



                    <!-- start section -->
<section id="section-10" data-id="10" class="section ">
    <div class="mod link-primary text-darker">
        <div class="container text-short ci-module">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content pull-center">
                        <h2 class="heading small">Bragging Rights</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!-- start module -->
                                    <div id="module-254" class="module text-darkest link-primary" data-anim="" data-id="254" data-bg-colour="" data-bg-gradient-top="" data-bg-gradient-bottom="" style="">
                                        <div class="inner ci-module" style="position: relative;">
                                            <!-- start template -->
                                            <div class="js-images-container">
                                            </div>
                                            <div class="js-video-container">
                                            </div>
                                            <div class="mod" data-anim="" data-padding-top="" data-padding-bottom="60" style=" padding-bottom:60px;">
                                                <div class="container awards">
                                                    <div class="row items pull-center">
                                                        <div class="col-xs-6 col-md-2 col-md-offset-2 item">
                                                            <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/awards/customer-service.jpg" alt="Best learning Partnership" />
                                                            <p><strong>Best Learning Partnership</strong>
                                                                <br> 2012 Silver Winner</p>
                                                        </div>
                                                        <div class="col-xs-6 col-md-2 item">
                                                            <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/awards/hr-awards.jpg" alt="Distinction in Leadership" />
                                                            <p><strong>Distinction in Leadership</strong>
                                                                <br> 2013 Winner</p>
                                                        </div>
                                                        <div class="col-xs-6 col-md-2 item">
                                                            <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/awards/learning-awards.jpg" alt="People Development Programme of the Year" />
                                                            <p><strong>People Development Programme of the Year</strong>
                                                                <br> 2014 Bronze Winner</p>
                                                        </div>
                                                        <div class="col-xs-6 col-md-2 item">
                                                            <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/awards/tj-awards.jpg" alt="Best Leadership" />
                                                            <p><strong>Best Leadership<br>
            Development Program</strong>
                                                                <br> 2014 Winner</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end template -->
                                        </div>
                                    </div>
                                    <!-- end module -->
                                </section>
                              <!-- end section -->
                </div>
            </div>
	

<?php
get_footer();