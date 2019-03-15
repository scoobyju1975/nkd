<?php
/**
 * This is the template that displays the Infographic page by default.
 *
 * Template Name: DHL Infographic
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nkd
 */
get_header(); ?>
            <div class="post-container"></div>
            <!-- start page -->
            <div class="page" id="page-infographic" class="page-infographic">

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
                        <div class="top-hero" style="background-image: url(<?php echo get_field('banner_image'); ?>);background-size: cover;background-repeat: no-repeat; background-attachment: fixed; background-position: top; max-height: 650px;height: 100%;padding-top: 650px; position: relative;"></div>
                        <?php endif; // end of if field_name logic ?>
                        <div class="mod vid-banner-intro" style="height: 100%; position: absolute; top: 0; width: 100%; background-color: rgba(0, 0, 0, 0.6);">
                            <!-- Red text -->
                            <?php if ( get_field( 'red_highlighted_text' ) ): ?>
                            <div class="red-highlighted-text come-in">
                                <p><?php the_field('red_highlighted_text'); ?></p>
                            </div>
                            <?php else: ?>
                            <?php endif; ?>
                            <!-- banner title -->
                            <div class="top-banner-message">
                                <div class="single-cs-banner-message come-in-deep">
                                    <h1><?php the_field('banner_title'); ?></h1>
                                </div>
                                <!-- banner text -->
                                <?php if ( get_field( 'banner_text' ) ): ?>
                                <div class="cs-banner-text come-in-deep">
                                    <?php the_field('banner_text'); ?>
                                </div>
                                <?php else: ?>
                                <?php endif; ?>
                            </div>
                            <!-- company name -->
                            <?php if ( get_field( 'company_name' ) ): ?>
                            <div class="company-name come-in-deeper">
                                <?php the_field('company_name'); ?>
                            </div>
                            <?php else: ?>
                            <?php endif; ?>
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
                    <section id="section-84" data-id="84" class="section ">
                        <div class="st-container">
                            <!-- start push wrapper -->
                            <div class="st-pusher">
                                <div class="js-section-images-container">
                                </div>
                                <div class="modules" data-source="">
                                    <!-- start module -->
                                    <div id="module-267" class="module text-darkest link-primary" data-anim="" data-id="267" data-bg-colour="" data-bg-gradient-top="" data-bg-gradient-bottom="" style=""> <!-- link-blue -->
                                        <div class="inner" style="position: relative;">
                                            <!-- start template -->
                                            <div class="js-images-container">
                                            </div>
                                            <div class="js-video-container">
                                            </div>
                                            <div class="mod infographic"> <!-- style="padding-top:100px; -->
                                                <div class="container"> <!-- text-left-btn-alt -->
                                                    <div class="row">
                                                        <div class="content">
                                                            <div class="col-xs-12 col-sm-12">
																	
															<?php
															while ( have_posts() ) : the_post();
															
																get_template_part( 'template-parts/content', 'page-infographic' );
															
															endwhile; // End of the loop.
															?>
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

                    
                     <!-- in-page navigation -->
                        <section class="link-primary ci-module">

                        <div class="container cases-nav">

                        <?php
                       $previous_post_url = get_permalink(get_adjacent_post(false, '', true));
                       $first = new WP_Query('posts_per_page=1&order=ASC&taxonomy=case_studies&$loop=max_num_pages');$term_slug = get_queried_object()->case_studies; $loop->max_num_pages; ?>
                       
                       <?php wp_reset_query();?>
                       
                       <?php $next_post_url = get_permalink(get_adjacent_post(false, '', false));
                       $first = new WP_Query('posts_per_page=1&order=ASC&taxonomy=case_studies&$loop=max_num_pages');$term_slug = get_queried_object()->case_studies; $loop->max_num_pages ;?>

                                <!-- Previous Post Link -->

                                    <div class="cases-previous"><?php if ( $next_post_url != get_the_permalink() ) : ?><a class="cases-next-a" href="<?php echo $next_post_url; ?>"><div class="nav-arrow nav-arrow-prev col col-sm-2 col-xs-2"><div class="positioner"><span class="nav-arrow-left"></span></div></div><div class="text-container col col-sm-10 col-xs-8"><div class="title text-pink"><?php next_post_link('%link'); ?></div></div></a><?php endif; ?></div>

                                <!-- Next Post Link -->

                                    <div class="cases-next"><?php if ( $previous_post_url != get_the_permalink() ) : ?><a class="cases-prev-a" href="<?php echo $previous_post_url; ?>">
                                    <div class="text-container col col-sm-10 col-xs-8"><div class="title text-pink"><?php previous_post_link('%link'); ?></div></div><div class="nav-arrow nav-arrow-next col col-sm-2 col-xs-2"><div class="positioner"><span class="nav-arrow-right"></span></div></div></a><?php endif; ?></div>
                        </div>
                    </section>
                    <!-- end in-page navigation -->

                </div>
            </div>
	

<?php
get_footer();
