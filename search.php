<?php
/**
 * The Archive template file.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nkd
 */

get_header(); ?>

            <div class="page insights">
                <div class="container text-large link-blue blog-header">

                    <ul class="filters col col-md-9">
	                    <li><h3><?php _e('Categories:', 'nkd'); ?></h3></li>
                        <li class="all"><a href="<?php echo esc_url( home_url() ) . '/insights/'; ?>"><h3><?php _e('All', 'nkd'); ?></h3></a></li>
                        <li><a href="/category/white-papers"><h3><?php _e('White Papers', 'nkd'); ?></h3></a></li>
                        <li><a href="/category/blogs"><h3><?php _e('Blogs', 'nkd'); ?></h3></a></li>
                        <li><a href="/category/videos"><h3><?php _e('Videos', 'nkd'); ?></h3></a></li>
                        <li><a href="/category/events"><h3><?php _e('Events', 'nkd'); ?></h3></a></li>
                        <li><a href="/category/articles"><h3><?php _e('Articles', 'nkd'); ?></h3></a></li>
                        <li class="hidden-sm hidden-xs">|</li>
                        <li class="tags hidden-sm hidden-xs"><a href="#" data-toggle="collapse" data-target="#collapse-tags" aria-expanded="false" aria-controls="collapse-tags"><h3><?php _e('Tags', 'nkd'); ?></h3></a></li>
                    </ul>
                    
                    <div class="input-group col search-tag pull-right">
						<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
							<input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'nkd' ) ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" />
							<span class="input-group-btn">
								<button class="btn btn-default btn-round" type="submit"><?php _e('Go', 'nkd'); ?></button>
							</span>
						</form>
                    </div>
                    
                </div>
                
                <div class="collapse" id="collapse-tags">
	                <div class="container tags">
                		
                		<hr>
					
						<?php get_template_part( 'template-parts/content', 'tags' ); ?>
					
	                </div>
				</div>
				
				<div class="container">
	            	<header class="page-header">
						<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'nkd' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header> <!-- .page-header -->
            	</div>
				
                <?php get_template_part( 'template-parts/content', 'loop' ); ?>
                
            </div>
        </div>

<?php
get_footer();

