<?php
/**
* The template for displaying the Front Page (Home.)
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
<div class="page" id="page-home" class="page-home" data-page-id="8">
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
                                <div class="top-hero" style="background-image: url(<?php echo get_field('banner_image'); ?>);background-size: cover; background-attachment: fixed; background-position: center; background-repeat: no-repeat;max-height: 580px;height: 100%;padding-top: 580px; position: relative;margin-bottom: 60px;"></div>
                                <?php endif; // end of if field_name logic ?>
                                <div class="mobile-switch-banner">
                                    <div class="top-hero" style="background-image: url(<?php echo get_field('banner_image'); ?>);background-size: cover; background-attachment: fixed; background-position: center; background-repeat: no-repeat;max-height: 580px;height: 100%;padding-top: 580px; position: relative;margin-bottom: 60px;"></div>
                                </div>
                                <div class="mod vid-banner-intro" style="height: 100%;; position: absolute; top: 0; width: 100%; background-color: rgba(0, 0, 0, 0.6);">
                                    <div class="top-banner-message">
                                        <div class="banner-message come-in">
                                            <h1><?php the_field('banner_sliding_message'); ?></h1>
                                        </div>
                                    </div>
                                    <div class="top-banner-button">
                                        <div class="pull-center come-in-deeper"><a class="btn btn-outline" rel="wp-video-lightbox" href="<?php the_field('video_button_link'); ?>" style="opacity: 1;transform: translateY(0px);">Watch our film</a></div>
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
                                <div data-anim="" data-padding-top="100" data-padding-bottom="0" style="">
                                    <div class="container text-lead-medium">
                                        <div class="row">
                                            <div class="content pull-center">
                                                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                                                    <h2 style="width: 70%;margin: 0 auto 40px auto;display: inline-block;" class="lead ci-module"><?php the_field('intro_text_1'); ?></h2>
                                                    <h1 class="large-font chevron ci-module"><?php the_field('intro_text_2'); ?> <span class="bold"><?php the_field('intro_text_3'); ?></span></h1>
                                                    
                                                    <h1 class="large-font chevron ci-module"><?php the_field('intro_text_4'); ?> <span class="bold"><?php the_field('intro_text_5'); ?></span></h1>
                                                    
                                                    <h1 style="margin-bottom: 40px" class="large-font ci-module"><?php the_field('intro_text_6'); ?> <span class="bold"><?php the_field('intro_text_7'); ?></span></h1>
                                                    <h2 style="margin-bottom: 20px" class="lead ci-module"><?php the_field('intro_text_8'); ?></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end template -->
                                <!-- start client logos -->
                                <div id="module-92" class="module text-darkest link-primary ci-module" data-anim="" data-id="92" data-bg-colour="" data-bg-gradient-top="" data-bg-gradient-bottom="" style="">
                                    <div class="inner" style="position: relative;">
                                        <!-- start template -->
                                        
                                        <div class="container brands home-logos">
                                            <div class="row items">
                                                <div class="col-lg-12 item">
                                                    <section class="slider responsive">
                                                        <div>
                                                            <img src="http://nkd.co.uk/wp-content/themes/nkd/svgs/brand-virginatlantic.svg" alt="Virgin Atlantic">
                                                        </div>
                                                        <div>
                                                            <img src="http://nkd.co.uk/wp-content/themes/nkd/svgs/brand-dhl.svg" alt="DHL">
                                                        </div>
                                                        <div>
                                                            <img src="http://nkd.co.uk/wp-content/themes/nkd/svgs/brand-mercserono.svg" alt="Merc Serono">
                                                        </div>
                                                        <div>
                                                            <img src="http://nkd.co.uk/wp-content/themes/nkd/svgs/brand-meridien.svg" alt="Meridien">
                                                        </div>
                                                        <div>
                                                            <img src="http://nkd.co.uk/wp-content/themes/nkd/svgs/brand-vodafone.svg" alt="Vodaphone">
                                                        </div>
                                                        <div>
                                                            <img src="http://nkd.co.uk/wp-content/themes/nkd/svgs/brand-cooperative.svg" alt="Cooperative">
                                                        </div>
                                                        <div>
                                                            <img src="http://nkd.co.uk/wp-content/themes/nkd/svgs/brand-tesco.svg" alt="Tesco">
                                                        </div>
                                                        <div>
                                                            <img src="http://nkd.co.uk/wp-content/themes/nkd/svgs/brand-ba.svg" alt="British Airways">
                                                        </div>
                                                    </section>
                                                    <div class="flexslider carousel">
                                                        <div class="flex-viewport" >
                                                            <div class="ci-module">
                                                                <ul class="slides">
                                                                    <li>
                                                                        <img src="http://nkd.co.uk/wp-content/themes/nkd/svgs/brand-virginatlantic.svg" alt="Virgin Atlantic">
                                                                    </li>
                                                                    <li>
                                                                        <img src="http://nkd.co.uk/wp-content/themes/nkd/svgs/brand-dhl.svg" alt="DHL">
                                                                    </li>
                                                                    <li>
                                                                        <img src="http://nkd.co.uk/wp-content/themes/nkd/svgs/brand-mercserono.svg" alt="Merc Serono">
                                                                    </li>
                                                                    <li>
                                                                        <img src="http://nkd.co.uk/wp-content/themes/nkd/svgs/brand-meridien.svg" alt="Meridien">
                                                                    </li>
                                                                    <li>
                                                                        <img src="http://nkd.co.uk/wp-content/themes/nkd/svgs/brand-vodafone.svg" alt="Vodaphone">
                                                                    </li>
                                                                    <li>
                                                                        <img src="http://nkd.co.uk/wp-content/themes/nkd/svgs/brand-cooperative.svg" alt="Cooperative">
                                                                    </li>
                                                                    <li>
                                                                        <img src="http://nkd.co.uk/wp-content/themes/nkd/svgs/brand-tesco.svg" alt="Tesco">
                                                                    </li>
                                                                    <li>
                                                                        <img src="http://nkd.co.uk/wp-content/themes/nkd/svgs/brand-ba.svg" alt="British Airways">
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end template -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end module -->
                                </div>
                            </div>
                            <!-- end push wrapper -->
                        </div>
                        <div class="flex-container cases home-cases">
                            
                            <div id ="flexslider-cases" class="flexslider ci-module">
                                <ul class="slides">
                                    <?php
                                    $flex = new WP_Query(array('category_name' => 'case_studies', 'posts_per_page' => -1));
                                    if($flex->have_posts()) :
                                    while($flex->have_posts()) : $flex->the_post();
                                    ?>
                                    <?php if ( get_field( 'show_case_study_in_home_slider' ) ): ?>
                                    <li class="over-lay black" style="background-image: url(<?php echo get_field('case_study_page_-_case_study_background_image'); ?>); background-size: cover; background-repeat: no-repeat; background-position: center;">
                                        <div class="cases-inner">
                                        </div>
                                        <div class="home-cases-inner-text <?php the_field('stats_appearance'); ?>">
                                            <div class="slider-text-top">
                                                <h3><?php the_field('main_text'); ?></h3>
                                                <p style="font-weight: 700!important; margin-top: 10px;"><?php the_field('small_text'); ?></p>
                                                <p><?php the_field('small_text_for_slider_normal_font_weight'); ?></p>
                                            </div>
                                            <?php if ( get_field( 'more_button' ) ): ?>
                                            <div class="btn-outline link-white home-case-button">
                                                <a rel="wp-video-lightbox" class="btn btn-outline link-white" href="<?php the_field('more_button'); ?>" style="z-index:1000; position:relative;opacity: 1; transform: translateY(0px); top:20px;">Watch the film</a>
                                            </div>
                                            <?php else: // field_name returned false ?>
                                            <?php endif; // end of if field_name logic ?>
                                            <?php if ( get_field( 'page_link_for_slide' ) ): ?>
                                            <div class="btn-outline link-white home-case-button">
                                                <a class="btn btn-outline link-white" href="<?php the_field('page_link_for_slide'); ?>" style="z-index:1000; position:relative;opacity: 1; transform: translateY(0px); top:20px;">Show me more</a>
                                            </div>
                                            <?php else: // field_name returned false ?>
                                            <?php endif; // end of if field_name logic ?>
                                            
                                            <?php if(get_field('stats')): ?>
                                            
                                            <?php while(has_sub_field('stats')): ?>
                                            <?php if (get_sub_field( 'up_or_down' ) ): ?>
                                            <div class="up">
                                                <?php else: // field_name returned false ?>
                                                <div class="down">
                                                    <?php endif; // end of if field_name logic ?>
                                                    <div class="stats-individual">
                                                        <div class="percent-wrapper">
                                                            <div class="middler">
                                                                <h1><div class="counter" data-count="<?php the_sub_field('stats_percentage'); ?>">0</div></h1>
                                                                <h2 class="percent-sign"><?php the_sub_field('percent_sign'); ?></h2>
                                                            </div>
                                                        </div>
                                                        <div class="stats-individual-bottom">
                                                            <p><?php the_sub_field('stats_text'); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endwhile; ?>
                                                
                                                <?php endif; ?>
                                            </div>
                                        </li>
                                        <?php else: // field_name returned false ?>
                                        <?php endif; // end of if field_name logic ?>
                                        <?php
                                        endwhile;
                                        endif;
                                        ?>
                                    </ul>
                                    
                                </div>
                                
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
                                                                <!--<h2 class="heading small ci-module">This is how we do it</h2>-->
                                                            </div>
                                                            <div class="col-xs-12 pull-center space-both ci-module" style="padding-bottom: 100px;">
                                                                <a href="/what-we-do" class="btn btn-default" style="font-size: 20px;">What we do</a>
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