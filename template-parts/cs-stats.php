<?php
/**
 * Template part for displaying case study section - Stats section.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nkd
 */

?>
          <div id="case-study-section" class="<?php echo get_sub_field('choose_layout'); ?> cs-section">

              <!-- Stats Area 1 -->

              <div class="cs-stats-container stat-single ci-module">

              <?php if (get_sub_field( 'stat_svg' ) ): ?>

              <div class="stat-svg">

              <?php the_sub_field('stat_svg'); ?>

              </div>

              <?php else: // field_name returned false ?>

              <?php endif; // end of if field_name logic ?>

              <?php if (get_sub_field( 'up_or_down' ) ): ?>

              <div class="up">

              <?php else: // field_name returned false ?>

              <div class="down">

              <?php endif; // end of if field_name logic ?>

              <?php if ( get_sub_field( 'stats_percentage' ) ): ?>

              <div class="stats-individual">

              <div class="percent-wrapper">

              <div class="middler">

              <h1 style="font-size:<?php the_sub_field('stat_font_size'); ?>"><?php the_sub_field('stats_percentage'); ?></h1>

              <h2 class="percent-sign"><?php the_sub_field('percent_sign'); ?></h2>

              </div>
              </div>

              <div class="stats-individual-single-bottom">

              <p><?php the_sub_field('stats_text'); ?></p>

              </div>

              </div>

              <?php else: ?>

              <?php endif; ?>

              </div>

              </div>

              <!-- end stats 1 -->

              <!-- Stats Area 2 -->

              <div class="two-stats-container ci-module">

              <div class="two-stats">

              <div class="cs-stats-container">

              <?php if (get_sub_field( 'stat_svg_2' ) ): ?>

              <div class="stat-svg">

              <?php the_sub_field('stat_svg_2'); ?>

              </div>

              <?php else: // field_name returned false ?>

              <?php endif; // end of if field_name logic ?>

              <?php if (get_sub_field( 'up_or_down_2' ) ): ?>

              <div class="up">

              <?php else: // field_name returned false ?>

              <div class="down">

              <?php endif; // end of if field_name logic ?>

              <?php if ( get_sub_field( 'stats_percentage_2' ) ): ?>

              <div class="stats-individual">

              <div class="percent-wrapper">

              <div class="middler">

              <h1 style="font-size:<?php the_sub_field('stat_font_size_2'); ?>"><?php the_sub_field('stats_percentage_2'); ?></h1>

              <h2 class="percent-sign"><?php the_sub_field('percent_sign_2'); ?></h2>

              </div>
              </div>

              <div class="stats-individual-single-bottom">

              <p><?php the_sub_field('stats_text_2'); ?></p>

              </div>

              </div>

              <?php else: ?>

              <?php endif; ?>

              </div>

              </div>

              <!-- end stats 2 -->           

              <!-- Stats Area 3 -->

              <div class="cs-stats-container ci-module">

              <?php if (get_sub_field( 'stat_svg_3' ) ): ?>

              <div class="stat-svg">

              <?php the_sub_field('stat_svg_3'); ?>

              </div>

              <?php else: // field_name returned false ?>

              <?php endif; // end of if field_name logic ?>

              <?php if (get_sub_field( 'up_or_down_3' ) ): ?>

              <div class="up">

              <?php else: // field_name returned false ?>

              <div class="down">

              <?php endif; // end of if field_name logic ?>

              <?php if ( get_sub_field( 'stats_percentage_3' ) ): ?>

              <div class="stats-individual">

              <div class="percent-wrapper">

              <div class="middler">

              <h1 style="font-size:<?php the_sub_field('stat_font_size_3'); ?>"><?php the_sub_field('stats_percentage_3'); ?></h1>

              <h2 class="percent-sign"><?php the_sub_field('percent_sign_3'); ?></h2>

              </div>
              </div>

              <div class="stats-individual-single-bottom">

              <p><?php the_sub_field('stats_text_3'); ?></p>

              </div>

              </div>

              <?php else: ?>

              <?php endif; ?>

              </div>

              </div>

              </div>

              <!-- end stats 3 -->
              
           </div>
