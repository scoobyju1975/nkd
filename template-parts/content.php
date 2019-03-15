<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nkd
 */

?>
						<div class="col col-sm-6 col-md-3">
                            <div class="image">
                                <span class="ribbon bg-pink"><p><?php foreach((get_the_category()) as $category) { echo $category->cat_name . '&nbsp; '; } ?></p></span>
                                <a href="<?php the_permalink(); ?>">
	                                <?php the_post_thumbnail('square-thumb'); ?>
                                    <div class="overlay">
                                        <div class="pull-left pull-vertical title">
                                            <h2 class="text-larger"><?php the_title(); ?></h2>
                                        </div>
                                        <p class="date"><?php echo get_the_date('M t, Y'); ?> by <?php the_author_meta('first_name'); ?></p>
                                    </div>
                                </a>
                            </div>
                        </div>