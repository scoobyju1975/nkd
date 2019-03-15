<?php
/**
 * Template part for displaying case study bottom nav.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nkd
 */

?>
 <!-- in-page navigation -->
                        <section class="link-primary ci-module" style="width: 100%!important;">

                        <div class="container cases-nav">

                        <?php
                       $previous_post_url = get_permalink(get_adjacent_post(false, '', true));
                       $first = new WP_Query('posts_per_page=1&order=ASC&taxonomy=case_studies&$loop=max_num_pages');$term_slug = get_queried_object()->case_studies; $loop->max_num_pages; ?>
                       
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