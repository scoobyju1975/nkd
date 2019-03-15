<?php
/**
* This is the template that displays the Contact Us page by default.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package nkd
*/
get_header(); ?>
<div class="page" id="page-contact-us" data-page-id="9">
    <div class="" data-source="">
        <!-- start section -->
        <section id="section-30" data-id="30" class="section ">
            <div class="st-container">
                <!-- start push wrapper -->
                <div class="st-pusher">
                    <div class="js-section-images-container">
                    </div>
                    <div class="modules">
<!-- start module -->
<!-- <div id="module-68" class="module text-darkest link-white" data-anim="" data-id="68">
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
        <div class="mod" style="padding-top:160px; height: 100%; position: absolute; top: 0; width: 100%; background-color: rgba(0, 0, 0, 0.6);">
            <div class="container hero-video-btn">
                <div class="row">
                    <div class="content">
                        <div class="col-xs-12">
                            <div class="top-banner-message">
                                <div class="banner-message come-in">
                                    <h1><?php the_field('banner_message'); ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- end module -->
                    </div>
                </div>
                <!-- end push wrapper -->
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section id="section-35" data-id="35" class="section ">
            <div class="st-container">
                <!-- start push wrapper -->
                <div class="st-pusher">
                    <div class="js-section-images-container">
                    </div>
                    <div class="modules" data-source="">
                        <!-- start module -->
                        <div id="module-197" class="module text-darkest link-primary come-in" data-anim="" data-id="197" data-bg-colour="" data-bg-gradient-top="" data-bg-gradient-bottom="" style="">
                            <div class="inner" style="position: relative;">
                                <!-- start template -->
                                <div class="mod" style="padding-bottom:10px;padding-top: 60px;">
                                    <div class="container heading-small">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="content">
                                                    <h2 class="heading small text-center">Get in touch today!<br></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end template -->
                            </div>
                        </div>
                        <!-- end module -->
                        <!-- start module -->
                        <div id="module-73" class="module text-darkest link-blue" data-anim="" data-id="73" data-bg-colour="" data-bg-gradient-top="" data-bg-gradient-bottom="" style="">
                            <div class="inner" style="position: relative;">
                                <!-- start template -->
                                <div class="mod come-in" data-padding-top="0" data-padding-bottom="59" style=" padding-bottom:59px;">
                                    <div class="container contact-form">
                                        <div class="row">
                                            <div class="content pull-center ci-module">
                                                <div class="col-sm-12 col-md-8 col-md-push-2">
                                                    <?php while ( have_posts() ) : the_post(); ?>
                                                    <?php the_content(); ?>
                                                    <?php endwhile; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="full-width-colored ci-module">
                                    <div class="mod">
                                        <div class="container contact-form">
                                            <div class="row">
                                                <div class="content pull-center">
                                                    <div class="col-sm-12 col-md-8 col-md-push-2">
                                                        <h2 class="heading small text-center">Subscribe to our newsletter</h2>
                                                        <?php echo do_shortcode("[gravityform id=2 title=false description=false ajax=true]"); ?>
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
        <section id="section-33" data-id="33" class="section ">
            <div class="st-container">
                <!-- start push wrapper -->
                <div class="st-pusher">
                    <div class="js-section-images-container">
                    </div>
                    <div class="modules" data-source="">
                        <!-- start module -->
                        <div id="module-71" class="module text-darkest link-primary" data-anim="" data-id="71" data-bg-colour="" data-bg-gradient-top="" data-bg-gradient-bottom="" style="">
                            <div class="inner" style="position: relative;">
                                <!-- start template -->
                                <div class="js-images-container">
                                </div>
                                <div class="js-video-container">
                                </div>
                                <div class="mod ci-module" data-anim="" data-padding-top="0" data-padding-bottom="0" style="">
                                    <div class="google-maps">
                                        <div class="overlay"></div>
                                        <div id="js-map"></div>
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
    </div>
</div>
<?php get_footer();