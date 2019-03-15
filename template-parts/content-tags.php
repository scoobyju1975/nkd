<?php
/**
 * Template part for displaying all the tags.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nkd
 */
?>

					<?php

						function wp_get_all_tags( $args = '' ) {
						
						  $tags = get_terms('post_tag');
						  foreach ( $tags as $key => $tag ) {
						      if ( 'edit' == 'view' )
						          $link = get_edit_tag_link( $tag->term_id, 'post_tag' );
						      else
						          $link = get_term_link( intval($tag->term_id), 'post_tag' );
						      if ( is_wp_error( $link ) )
						          return false;
						
						      $tags[ $key ]->link = $link;
						      $tags[ $key ]->id = $tag->term_id;
						      $tags[ $key ]->name = $tag->name;
						      $tags[ $key ]->count = $tag->count;
							      echo ' <span class="tag-label"><a href="'. esc_url( $link ) .'">' . $tag->name . ' (' . $tag->count . ')</a> &nbsp;</span>';
						      }
						  return $tags;
						}
						wp_get_all_tags();
						
					?>