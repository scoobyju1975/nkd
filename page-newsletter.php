<?php
/**
 *
 * Template Name: Newsletter page template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nkd
 */
 ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php the_content(); ?>

<?php endwhile; // End of the loop. ?>