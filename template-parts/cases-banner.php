<?php
/**
 * Template part for displaying case study banner.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nkd
 */

?>
 <!-- start module -->
            <div id="module-1" class="module text-lightest link-white">

                  <div class="inner" style="position: relative;">

                      <?php if ( get_field( 'banner_video' ) ): ?>

                            <div class="banner-video">

                                  <?php the_field('banner_video'); ?>

                            </div>

                              <?php else: // field_name returned false ?>

                                <div class="top-hero" style="background-image: url(<?php echo get_field('banner_image'); ?>);background-size: cover;background-repeat: no-repeat; background-attachment: fixed; background-position: top; max-height: 650px;height: 100%;padding-top: 650px; position: relative;"></div>
                                  <?php endif; // end of if field_name logic ?>
                                  <div class="mod cs-banner vid-banner-intro" style="height: 100%; position: absolute; top: 0; width: 100%; background-color: rgba(0, 0, 0, 0.6);">
                                    
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
