<?php
/**
 * The template for displaying all pages.
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

	
			<!-- start flash messages -->
            <!-- end flash messages -->
            <div class="post-container"></div>
            <!-- start page -->
            <div class="page" id="cookies-privacy">
                <div class="" data-source="">
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
                                            <div class="mod " data-anim="" data-padding-top="100" data-padding-bottom="0" style="padding:100px 0;"> <!-- style="padding-top:100px; -->
                                                <div class="container"> <!-- text-left-btn-alt -->
                                                    <div class="row">
                                                        <div class="content">
                                                            <div class="col-xs-12 col-sm-12">
																	
															<?php
															while ( have_posts() ) : the_post();
															
																get_template_part( 'template-parts/content', 'page' );
															
															endwhile; // End of the loop.
															?>
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
