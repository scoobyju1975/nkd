<?php
/**
 * Template part for displaying all the posts in a grid.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nkd
 */
?>

                <div class="container masonry text-light text-lightest link-white blog-grid">

<?php if ( have_posts() ) : ?>
    
<?php if ( is_front_page() ) { ?>

<?php


$args = array(
    'post_type'         => 'post'
);

    
?>

<?php $counter = 1 ?>
<?php $loop = new WP_Query( $args ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    
                        <div class="col <?php if ($counter == 1){echo 'col-sm-12 col-md-6';} else {echo 'col-sm-6 col-md-3';} ?>">
                            <div class="image">
                                <div class="ribbon bg-pink"><p><?php foreach((get_the_category()) as $category) { echo preg_replace("/s\b/", "", $category->cat_name . '&nbsp; ' ); } ?></p></div>
                                <a href="<?php the_permalink(); ?>">
                                    <?php if ($counter == 1){ the_post_thumbnail('wide-thumb'); } else { the_post_thumbnail('square-thumb'); } ?>
                                    <div class="overlay">
                                        <div class="pull-left pull-vertical title">
                                            <h2 class="text-larger"><?php the_title(); ?></h2>
                                        </div>
                                        <p class="date"><?php echo get_the_date( get_option('M t, Y') ); ?>by <?php the_author_meta('first_name'); ?></p>
                                    </div>
                                </a>
                            </div>
                        </div>
    <?php $counter++ ; if($counter==4) break; ?>
        <?php endwhile; wp_reset_postdata(); ?>


<?php } elseif ( is_home() ) { ?>


    <?php $counter = 1 ?>

    
        <?php while (have_posts() ) : the_post(); ?>
    
                        <div class="col <?php if ($counter == 1){echo 'col-sm-12 col-md-6';} else if ($counter == 6){echo 'col-sm-12 col-md-6';} else {echo 'col-sm-6 col-md-3';} ?>">
                            <div class="image">
                                <div class="ribbon bg-pink"><p><?php foreach((get_the_category()) as $category) { echo preg_replace("/s\b/", "", $category->cat_name . '&nbsp; ' ); } ?></p></div>
                                <a href="<?php the_permalink(); ?>">
                                    <?php if ($counter == 1){ the_post_thumbnail('wide-thumb'); } else if ($counter == 6){ the_post_thumbnail('wide-thumb'); } else { the_post_thumbnail('square-thumb'); } ?>
                                    <div class="overlay">
                                        <div class="pull-left pull-vertical title">
                                            <h2 class="text-larger"><?php the_title(); ?></h2>
                                        </div>
                                        <p class="date"><?php echo get_the_date( get_option('M t, Y') ); ?> by <?php the_author_meta('first_name'); ?></p>
                                    </div>
                                </a>
                            </div>
                        </div>
    <?php $counter++ ; ?>
        <?php endwhile; ?>
    
    
    <?php 
if (function_exists("wp_bs_pagination"))
    {
         //wp_bs_pagination($the_query->max_num_pages);
         wp_bs_pagination();
}
?> 
    
<?php } else { ?>

    
        <?php while ( have_posts() ) : the_post(); ?>
    
        <div class="col col-sm-6 col-md-3">
            <div class="image">
                <div class="ribbon bg-pink"><p><?php foreach((get_the_category()) as $category) { echo preg_replace("/s\b/", "", $category->cat_name . '&nbsp; ' ); } ?></p></div>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('square-thumb'); ?>
                    <div class="overlay">
                        <div class="pull-left pull-vertical title">
                            <h2 class="text-larger"><?php the_title(); ?></h2>
                        </div>
                        <p class="date"><?php echo get_the_date( get_option('M t, Y') ); ?> by <?php the_author_meta('first_name'); ?></p>
                    </div>
                </a>
            </div>
        </div>

        <?php endwhile; ?>
    
    <?php 
if (function_exists("wp_bs_pagination"))
    {
         //wp_bs_pagination($the_query->max_num_pages);
         wp_bs_pagination();
}
?> 
    
<?php } ?>

<?php endif; ?>
                </div>