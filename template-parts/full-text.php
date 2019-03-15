<?php
/**
 * Template part for displaying case study section - full width text.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nkd
 */

?>
          <div id="case-study-section" class="<?php echo get_sub_field('background_color'); ?>  <?php the_sub_field('section_arrow_bottom'); ?> <?php echo get_sub_field('choose_layout'); ?> cs-section">

                                             <!-- section title -->

                                             <?php if ( get_sub_field( 'section_title' ) ): ?>

                                             <div class="section-title">
                                             <h1><?php the_sub_field('section_title'); ?></h1>
                                             </div>
                                             <?php else: ?>
                                             <?php endif; ?>

                                             <!-- section text -->

                                             <?php if ( get_sub_field( 'section_text' ) ): ?>

                                             <div class="section-text">
                                             <h2><?php the_sub_field('section_text'); ?></h2>
                                             </div>
                                             <?php else: ?>
                                             <?php endif; ?>

           </div>
