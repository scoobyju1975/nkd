<?php
/**
 * Template part for displaying case study section - full width image.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nkd
 */

?>
         <div class="<?php echo get_sub_field('image_overlay'); ?>">

            <div id="case-study-section" class="<?php echo get_sub_field('background_color'); ?>  <?php the_sub_field('section_arrow_bottom'); ?> <?php echo get_sub_field('choose_layout'); ?> cs-section" style="background-image: url(<?php echo get_sub_field('full_width_image'); ?>);background-size:cover;background-repeat: no-repeat;background-position: top; max-height: 470px;height: 100%;padding-top: 580px; position: relative;">
            </div>

                <?php if ( get_sub_field( 'full_width_image_text' ) ): ?>

                      <div class="video_1_text ci-module">

                            <h2><?php the_sub_field('full_width_image_text'); ?></h2>

                      </div>
                                            <?php else:?>
                                            <?php endif;?>

                                            <?php if ( get_sub_field( 'full_width_image_text_small_bold' ) ): ?>

                                            <div class="video_1_text_name ci-module">

                                            <p style="font-weight: 900;"><?php the_sub_field('full_width_image_text_small_bold'); ?></p>

                                            </div>

                                            <?php else:?>
                                            <?php endif;?>

                                            <?php if ( get_sub_field( 'full_width_image_text_small_normal_weight' ) ): ?>

                                            <div class="video_1_text_quote ci-module">

                                            <p><?php the_sub_field('full_width_image_text_small_normal_weight'); ?></p>

                                            </div>

                                            <?php else:?>
                                            <?php endif;?>

                                            <?php if ( get_sub_field( 'full_width_image_link_button' ) ): ?>

                                            <div class="video_1_button ci-module">

                                            <div class="pull-center link-white"><a rel="wp-video-lightbox" class="js-play btn btn-outline" href="<?php the_sub_field('full_width_image_link_button'); ?>" style="opacity: 1; transform: translateY(0px); margin-top: 100px;">Watch film</a></div>
                                            </div>

                                                                        <?php else:?>

                            <?php endif;?>

                                            </div>