<?php
/**
 * This is the template that displays the About Us page by default.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nkd
 */

get_header(); ?>

            <!-- start page -->
            <div class="page" id="page-about-us" data-page-id="4">
				<div>
				    <!-- start section -->
                    <section id="section-3" data-id="3" class="section ">
                        <div class="st-container">
                            <!-- start push wrapper -->
                            <div class="st-pusher">
                                <div class="js-section-images-container">
                                </div>
                                <div class="modules" data-source="">
                                    <!-- start module -->
                                    <div id="module-45" class="module text-darkest link-white" data-anim="" data-id="45">

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

                                    <div class="link-primary">

                                    <div class="container text-lead-medium ci-module">
                                                    <div class="row">
                                                        <div class="content pull-center">
                                                            <div class="col-xs-12 col-sm-10 col-sm-offset-1">

                                     <h2 class="heading small bottom-fix"><?php the_field('about_us_videos_title'); ?></h2>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="st-container" style="margin-bottom: 70px;">
                            <!-- start push wrapper -->
                            <div class="st-pusher">

                                <?php if(get_field('about_us_videos')): ?>
                                         <?php while(has_sub_field('about_us_videos')): ?>

                                            <div class="about-container">

                                            <div class="serv-ind-wrap ci-module">

                                            <div class="about-vid-container over-lay black" style="background-image: url(<?php echo get_sub_field('about_us_video_image'); ?>);background-size: cover;background-repeat: no-repeat;width: 220px; max-height: 220px;height: 220px;position: relative;margin: 0 15px 15px 0;">
                                            </div>

                                            <div class="vid-button">

                                            <div class="pull-center"><a rel="wp-video-lightbox" class="js-play btn btn-outline" style="border:solid 2px #fff; color: #fff; padding: 5px 30px;" href="<?php echo get_sub_field('link_to_video'); ?>" style="opacity: 1; transform: translateY(0px); margin-top: 100px;">Watch the film</a></div>

                                            </div>

                                            <div class="vid-text-container">

                                            <div class="about-vid-title">

                                            <?php echo get_sub_field('about_video_title'); ?>

                                            </div>

                                            <div class="about-vid-text">

                                            <?php echo get_sub_field('about_video_name'); ?>

                                            </div>

                                            </div>

                                            </div>

                                            </div>

                                                <?php endwhile; ?>
                                        <?php endif; ?>

                                    </div>

                                    </div>


                                </div>
                            </div>
                            <!-- end push wrapper -->
                        </div>
                    </section>
                    <!-- end section -->
                    <!-- start section -->
                    <section id="section-19" data-id="19" class="section ">
                        <div class="st-container">
                            <!-- start push wrapper -->
                            <div class="st-pusher">
                                <div class="js-section-images-container">
                                </div>
                                <div class="modules" data-source="">
                                    <!-- start module -->
                                    <div id="module-108" class="module text-darker link-primary" data-anim="" data-id="108" data-bg-colour="#21333a" data-bg-gradient-top="" data-bg-gradient-bottom="" style="background-color:#21333a;">
                                        <div class="inner" style="position: relative;">
                                            <!-- start template -->
                                            <div class="js-images-container">
                                            </div>
                                            <div class="js-video-container">
                                            </div>
                                            <div class="mod" data-anim="" data-padding-top="50" data-padding-bottom="25" style="padding-top:50px; padding-bottom:25px;">
                                                <div class="container text-lead-stats">
                                                    <div class="row">
                                                        <div class="content pull-center ci-module">
                                                            <h2 class="heading text-center"><span style="color:#FFFFFF;"></span><span style="color:#FFFFFF;">One big family</span><br></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end template -->
                                        </div>
                                    </div>
                                    <!-- end module -->
                                    <!-- start module -->
                                    <div id="module-109" class="module link-white text-darker link-primary" data-anim="" data-id="109" data-bg-colour="#21333a" data-bg-gradient-top="" data-bg-gradient-bottom="" style="background-color:#21333a;">
                                        <div class="inner" style="position: relative;">
                                            <!-- start template -->
                                            <div class="js-images-container">
                                            </div>
                                            <div class="js-video-container">
                                            </div>
                                            <div class="mod" data-anim="transition.slideUpIn" data-padding-top="" data-padding-bottom="50" style=" padding-bottom:50px;">
                                                <div class="container pills-staff">
                                                    <div class="row">
                                                        <div class="col-xs-8 col-xs-push-2 col-sm-12 col-sm-push-0">
                                                            <div class="content pull-center">
                                                                <ul class="nav nav-pills-outline nav-center">
                                                                    <li class="active"><a href="#" data-filter="*">All</a></li>
                                                                    <li><a href="#" data-filter=".leader">Leadership</a></li>
                                                                    <li><a href="#" data-filter=".thinker">Thinkers</a></li>
                                                                    <li><a href="#" data-filter=".creative">Creatives</a></li>
                                                                    <li><a href="#" data-filter=".planner">Planners</a></li>
                                                                    <li><a href="#" data-filter=".support">Finance and Support</a></li>
                                                                </ul>
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
                                    <div id="module-52" class="module text-darkest link-primary ci-module" data-anim="" data-id="52" data-bg-colour="#21333a" data-bg-gradient-top="" data-bg-gradient-bottom="" style="background-color:#21333a;">
                                        <div class="inner" style="position: relative;">
                                            <!-- start template -->
                                            <div class="js-images-container">
                                            </div>
                                            <div class="js-video-container">
                                            </div>
                                            <div class="mod" data-anim="" data-padding-top="" data-padding-bottom="100" style=" padding-bottom:100px;">
                                                <div class="container isotope-staff">
                                                    <div class="row">
                                                        <div class="items staff isotope">
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 leader">
                                                                <a href="#sue-stoneman">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Sue Stoneman</h4>
                                                                        <p>CEO</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20150909-QwvmuojFyOjl.jpg" alt="Sue Stoneman" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 leader">
                                                                <a href="#laurence-bishop">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Laurence Bishop</h4>
                                                                        <p>CFO</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20141016-bO6u0Ml2Tpa1.jpg" alt="Laurence Bishop" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 leader">
                                                                <a href="#phil-akilade">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Phil Akilade</h4>
                                                                        <p>Chief Customer Officer</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/Phil_Akilade.jpg" alt="Phil Akilade" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 leader">
                                                                <a href="#sandy-willoughby">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Sandy Willoughby</h4>
                                                                        <p>Consulting Director Quality</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20141016-npEKBnfVvd8U.jpg" alt="Sandy Willoughby" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 leader">
                                                                <a href="#michael-faulkner">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Michael Faulkner</h4>
                                                                        <p>Consulting Director, Customer Experience</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20160324-ZhhwOCWT61GN.jpg" alt="Michael Faulkner" />
                                                                </a>
                                                            </div>                                                            
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 leader">
                                                                <a href="#darren-hudson">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Darren Hudson</h4>
                                                                        <p>Creative Consulting Director</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20150512-41VpGKJl1ze3.jpg" alt="Darren Hudson" />
                                                                </a>
                                                            </div>                                                           
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 leader">
                                                                <a href="#david-colgate">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>David Colgate</h4>
                                                                        <p>Consulting Director Innovation</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20141016-xvD7mKtl0UDw.jpg" alt="David Colgate" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 leader">
                                                                <a href="#obi-abuchi">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Obi Abuchi</h4>
                                                                        <p>Consulting Director Quality</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20141016-4JXNJAu2Pq0Y.jpg" alt="Obi Abuchi" />
                                                                </a>
                                                            </div>
                                                            
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 thinker">
                                                                <a href="#mark-singleton">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Mark Singleton</h4>
                                                                        <p>Learning Director</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20141016-Jr0Pg3PpnsV0.jpg" alt="Mark Singleton" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 thinker">
                                                                <a href="#alex-busteed">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Alex Busteed</h4>
                                                                        <p>Learning Director</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20150219-UoZ0vzMgrmwf.jpg" alt="Alex Busteed" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 thinker">
                                                                <a href="#greg-howse">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Greg Howse</h4>
                                                                        <p>Learning Director</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20150720-BYynVcnrMcdY.jpg" alt="Greg Howse" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 thinker">
                                                                <a href="#david-campbell">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>David Campbell</h4>
                                                                        <p>Learning Director</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20150724-ONWLQpF8iJeb.jpg" alt="David Campbell" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 thinker">
                                                                <a href="#edward-lynam">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Edward Lynam</h4>
                                                                        <p>Learning Director</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20151204-ZJtX2kFggQVx.jpg" alt="Edward Lynam" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 thinker">
                                                                <a href="#kat-hounsell">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Kat Hounsell</h4>
                                                                        <p>Learning Consultant</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20141016-5xo6wz5R5uyL.jpg" alt="Kat Hounsell" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 thinker">
                                                                <a href="#florence-hamilton">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Florence Hamilton</h4>
                                                                        <p>Learning Consultant</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20150804-EpCEdD3sVBPL.jpg" alt="Florence Hamilton" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 thinker">
                                                                <a href="#sam-lawton">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Sam Lawton</h4>
                                                                        <p>Learning Consultant</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20151204-5a1Jd7wHoj7t.jpg" alt="Sam Lawton" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 creative">
                                                                <a href="#adeline-tudara">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Adeline Tudara</h4>
                                                                        <p>Studio Manager</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20141016-P0zpgD1HS2Lg.jpg" alt="Adeline Tudara" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 creative">
                                                                <a href="#ricardo-cabrita">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Ricardo Cabrita</h4>
                                                                        <p>Head of Creative</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20141016-Jdsz9ESk1Mm3.jpg" alt="Ricardo Cabrita" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 creative">
                                                                <a href="#paul-chamberlain">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Paul Chamberlain</h4>
                                                                        <p>Senior Creative Lead</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/Paul_Chamberlain.jpg" alt="Paul Chamberlain" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 creative">
                                                                <a href="#marine-joigneault">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Marine Joigneault</h4>
                                                                        <p>Creative Lead</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20150219-7HFilXPhjuRg.jpg" alt="Marine Joigneault" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 creative">
                                                                <a href="#sam-thomas">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Sam Thomas</h4>
                                                                        <p>Creative Lead</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/Sam_Thomas.jpg" alt="Sam Thomas" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 creative">
                                                                <a href="#chee-yau">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Chee Yau</h4>
                                                                        <p>Creative Artworker</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20150720-csh52IM5D9QS.jpg" alt="Chee Yau" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 creative">
                                                                <a href="#felicia-loykowski">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Felicia Loykowski</h4>
                                                                        <p>Digital Lead</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/Felicia_Loykowski.jpg" alt="Felicia Loykowski" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 creative">
                                                                <a href="#cristina-dascalescu">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Cristina Dascalescu</h4>
                                                                        <p>Digital Creative</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/Cristina_Dascalescu.jpg" alt="Cristina Dascalescu" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 planner">
                                                                <a href="#emma-thelwell">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Emma Thelwell</h4>
                                                                        <p>Head of Customer Operations</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20141016-KnxKUaahVcHO.jpg" alt="Emma Thelwell" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 planner">
                                                                <a href="#magda-dzugan">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Magda Dzugan</h4>
                                                                        <p>Customer Experience Manager</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20150219-cXuqu1auC1m4.jpg" alt="Magda Dzugan" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 planner">
                                                                <a href="#molly-crowe">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Molly Crowe</h4>
                                                                        <p>Customer Experience Manager</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20150219-yBXb4Yar2xdO.jpg" alt="Molly Crowe" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 planner">
                                                                <a href="#katherine-usher">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Katherine Usher</h4>
                                                                        <p>Customer Experience Manager</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/Katherine_Usher.jpg" alt="Katherine Usher" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 planner">
                                                                <a href="#charlotte-elsey">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Charlotte Elsey</h4>
                                                                        <p>Project Lead</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20160222-HE699AHCGJfZ.jpg" alt="Charlotte Elsey" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 planner">
                                                                <a href="#lisa-bennett">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Lisa Bennett</h4>
                                                                        <p>Project Lead</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20141016-HNAgYzCbnWsL.jpg" alt="Lisa Bennett" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 planner">
                                                                <a href="#cara-jan-craig">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Cara-Jan Craig</h4>
                                                                        <p>Project Lead</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20160113-I1PinonG0Mb4.jpg" alt="Cara-Jan Craig" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 planner">
                                                                <a href="#simran-scammell">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Simran Scammell</h4>
                                                                        <p>Project Executive</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20150515-LYXPIf2eOgmS.jpg" alt="Simran Scammell" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 planner">
                                                                <a href="#alice-johnson">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Alice Johnson</h4>
                                                                        <p>Project Executive</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20150219-W0xb3ABwgDZk.jpg" alt="Alice Johnson" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 planner">
                                                                <a href="#robert-wade-smith">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Robert Wade-Smith</h4>
                                                                        <p>Project Executive</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/Robert_Wade_Smith.jpg" alt="Robert Wade-Smith" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 planner">
                                                                <a href="#abi-fashina">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Abi Fashina</h4>
                                                                        <p>Project Executive</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/Abi_Fashina.jpg" alt="Abi Fashina" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 support">
                                                                <a href="#james-hynes">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>James Hynes</h4>
                                                                        <p>Client Services Lead</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20150219-qPLAjeLVe5M5.jpg" alt="James Hynes" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 support">
                                                                <a href="#diana-balan">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Diana Balan</h4>
                                                                        <p>Business Support Executive</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20160419-Po769fxjBo7n.jpg" alt="Diana Balan" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 support">
                                                                <a href="#natasha-elms-lester">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Natasha Elms-Lester</h4>
                                                                        <p>Management Accountant</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20141016-Cx7YhQKEideJ.jpg" alt="Natasha Elms-Lester" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 ">
                                                                <a href="#bella-and-oli">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Bella and Oli</h4>
                                                                        <p>Office Companions</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20141016-lCzKBDVV2IFh.jpg" alt="Bella and Oli" />
                                                                </a>
                                                            </div>
                                                            <div class="item col-xs-6 col-sm-3 col-md-15 ">
                                                                <a href="#skye">
                                                                <div class="overlay text-center">
                                                                    <div class="content">
                                                                        <h4>Skye</h4>
                                                                        <p>Guard Dog</p>
                                                                    </div>
                                                                </div>
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/uploads/images/20160419-nNz1hIkxNpm2.jpg" alt="Skye" />
                                                                </a>
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
				</div>
            </div>

<?php
get_footer();
