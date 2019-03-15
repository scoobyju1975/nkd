<?php
/**
 * This is the template that displays the Case Studies page by default.
 *
 * Template Name: Case Studies default template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nkd
 */

get_header(); ?>

        <div class="page" id="case-studies-single" class="case-studies-single">

            <div>

                <section class="section">

                    <div class="st-container">

                        <div class="modules">

                        <?php get_template_part( 'template-parts/cases-banner' ); ?>
                                    
                            <div class="cs-single-page">

                                <?php if(get_field('page_content')): ?>
                                
                                <?php while(has_sub_field('page_content')): ?>

                                <?php if( get_sub_field('choose_layout') == 'cs-full-width-image' ): ?>
                                <?php get_template_part( 'template-parts/full-width-image' ); ?>
                                <?php else: ?>
                                <?php endif; ?>

                                <?php if( get_sub_field('choose_layout') == 'cs-full-width-text' ): ?>
                                <?php get_template_part( 'template-parts/full-text' ); ?>
                                <?php else: ?>
                                <?php endif; ?>

                                <?php if( get_sub_field('choose_layout') == 'cs-half-width-text' ): ?>
                                <?php get_template_part( 'template-parts/half-image-half-text' ); ?>
                                <?php else: ?>
                                <?php endif; ?>

                                <?php if( get_sub_field('choose_layout') == 'cs-two-image' ): ?>
                                <?php get_template_part( 'template-parts/cs-two-images' ); ?>
                                <?php else: ?>
                                <?php endif; ?>

                                <?php if( get_sub_field('choose_layout') == 'cs-single-stats' ): ?>
                                <?php get_template_part( 'template-parts/cs-stats' ); ?>
                                <?php else: ?>
                                <?php endif; ?>

                                <?php endwhile; ?>
                                <?php endif; ?>

                            </div>

                        </div>
                    
                    </div>

                </section>
                     
                    <!-- end section -->

                    <?php get_template_part( 'template-parts/cases-bottom-nav' ); ?>

                </div>
            </div>
<?php
get_footer();
