<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package nkd
 */

get_header(); ?>

			<div class="page mod post">
               <section id="section-3" data-id="3" class="section">
                    <div class="post-container container" style="width:100%;">
	                    <?php while ( have_posts() ) : the_post(); ?>
	                    
	                    <?php if (get_field('video_link') && has_post_format( 'video' )) : ?>
	                    
                        <!-- start module -->
                        <div id="module-45" class="module text-lightest link-white over-lay cs-black" data-anim="" data-id="45" data-bg-colour="" data-bg-gradient-top="" data-bg-gradient-bottom="" style="">
                            <div class="inner inner-single" style="position: relative;overflow: hidden;">
                                <?php the_post_thumbnail( 'full', array( 'class' => 'top-hero' ) ); ?>
                                <div class="js-video-container" style="z-index: 11;position: absolute;top: 0;width: 100%;">
                                    <!-- start module video -->
                                    <video class="stretch" data-id="29" data-video="<?php the_field('video_link'); ?>" autoplay loop>                                    </video>
                                    <div class="vimeo"></div>
									<div class="overlay" style="width: 100%;height: 100%; position: absolute;"></div> <?php // This is required for video posts ?>
                                    <!-- end module video -->
                                </div>
                                <div class="mod vid-banner-intro" style="position: absolute; top: 0;width: 100%;">
                                    <div class="container hero-video-btn">
                                        <div class="row">

                                                    <h1 class="heading text-center"><?php the_title(); ?></h1>
                                                </div>
                                                <div class="js-play-container clearfix">
                                                    <div class="col-xs-12 pull-center"><a class="js-play" href="<?php the_field('video_link'); ?>" style="display:none;"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/svgs/play-icon.svg" alt="Play" /></a></div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end template -->
                            </div>
                        </div>
                        <!-- end module -->
	                    
	                    <?php elseif ( has_post_format( 'link' ) ) : ?>
		
                        <!-- start module -->
                        <div id="module-45" class="module text-darkest link-white" data-anim="" data-id="45">
                            <div class="inner inner-single" style="position: relative;">
	                            <?php the_post_thumbnail( 'full', array( 'class' => 'top-hero' ) ); ?>
                                <div class="mod vid-banner-intro" style="position: absolute; top: 0;width: 100%;">

                                    <div class="container hero-video-btn">
                                        <div class="row">
                                            <div class="content">
                                                <h1 class="heading text-center"><?php the_title(); ?></h1>
                                                <div class="js-play-container clearfix">
                                                	<div class="col-xs-12 pull-center"><a href="<?php echo esc_url( get_template_directory_uri() ) ?>/download_file.php?filename=<?php echo the_field('download_link'); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/svgs/download-icon.svg" alt="Download"/></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- end template -->
                            </div>
                        </div>
                        <!-- end module -->
                        
                        <?php elseif ( false == get_post_format() ) : ?>
		
                        <!-- start module -->
                        <div id="module-45" class="module text-darkest link-white over-lay cs-black old-singles" data-anim="" data-id="45">
                            <div class="inner" style="position: relative;">
	                            <?php the_post_thumbnail( 'full', array( 'class' => 'top-hero' ) ); ?>
                                <div class="mod vid-banner-intro" style="position: absolute;width: 100%;position: absolute;top: 50%;left: 50%!important;transform: translate(-50%, -60%)!important;z-index: 1;">

                                    <div class="container hero-video-btn">
                                        <div class="row">
                                            <div class="content">
                                            <div class="top-banner-message">
                                                <h1 class="heading text-center"><?php the_title(); ?></h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end template -->
                            </div>
                        </div>
                        <!-- end module -->

                        
                        <?php endif; ?>
                        
                    </div>
                </section>
                <!-- end section -->
                <div class="post-container hero-blog text-darkest mod">
                    <div class="post-header container text-short">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="content pull-center">
                                    <h2 class="meta"><?php echo the_time('F j, Y'); ?><?php if( false == get_post_format() || (get_field('display_author')) ){ // Only displays when the post format isn't 'Video' or 'Link'. ?> by <?php the_author_meta('first_name'); ?> <?php } ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="container text-long">
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="content">
	                                <?php the_content(); ?>
									<?php
										                              
										// Displays a button if the link post format is selected.
											if (get_field('download_link') && has_post_format( 'link' )) {
												echo '<p class="link-primary"><a class="btn btn-lg btn-default" target="_blank" href="'. get_field('download_link') .'">View In Browser</a>&nbsp; &nbsp;<a class="btn btn-lg btn-default" href="'.esc_url( get_template_directory_uri()).'/download_file.php?filename='. get_field('download_link') .'">Download</a></p>';// target="_blank" download>Download</a></p>';
											}
									?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mod">
                        
                        <div class="container text-author">
                            
                            <?php if( false == get_post_format() || (get_field('display_author')) ){ // Only displays when the post format isn't 'Video' or 'Link'. ?>
                            
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                                    <?php
										// Checks if the user has a Gravatar
	                                	$check_gravatar = get_the_author_meta( 'email' );
										
										// If the user does have a Gravatar it then adds it
										if(validate_gravatar( $check_gravatar )){ 

										?>
									<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>"><img class="center-block img-responsive img-circle" alt="<?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?>" src="<?php esc_url( my_gravatar_url() ); ?>"></a>
									<?php } ?>
                                    <p class="text-center"><?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></p>
                                </div>
                            </div>
                            
                            <?php } ?>
                            
                            <div class="row">
                                <div class="col-xs-12 col-sm-5 pull-left tags">
                                    <?php if(has_tag()) { ?>
                                    <span class="tags-icon"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/svgs/tags.svg" alt="tags"></span>
                                    <?php the_tags( '<span class="tag-label">', '</span> <span class="tag-label">', '</span>' ); ?>
                                    <?php } ?>
                                </div>
                                <div class="col-xs-12 col-sm-5 pull-right share-this">
                                    <span >Share:</span>
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php esc_url( the_permalink() ); ?>&title=<?php get_the_title(); ?>&summary=&source=<?php bloginfo('name'); ?>" target="_blank"><span class="linkedin"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/svgs/linkedin.svg" alt="LinkedIn"/></span></a>
                                    <a href="http://www.facebook.com/share.php?u=<?php esc_url( the_permalink() ); ?>&title=<?php get_the_title(); ?>"><span class="facebook"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/svgs/facebook.svg" alt="Facebook"/></span></a>
                                    <a href="http://twitter.com/intent/tweet?url=<?php esc_url( the_permalink() ); ?>&text=<?php get_the_title(); ?>&via=helloNKD"><span class="twitter"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/svgs/twitter.svg" alt="Twitter"/></span></a>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <?php
	                 
	                endwhile; // End of the loop.
	                
	                wp_reset_postdata();
				?>

                
				<?php if(get_field('similar_posts')):
						
				  	global $post;
	
				  		$tag = get_field('similar_posts');
								
						$args = array(
							'posts_per_page' => 4,
							'post__not_in'	 => array( $post->ID ),
							'tag_id' => $tag
						);
							
						$similar = new WP_Query(  $args );
								
				?>
						
				<?php if( $similar->have_posts() ): ?>
						
                <div class="similar-posts-container">
                    <div class="container">
                        <h2 class="pull-left text-darkest heading small">Similar posts</h2>
                    </div>					
                    <div class="container masonry text-light text-lightest link-white blog-grid">

						<?php while ( $similar->have_posts() ) :  $similar->the_post(); ?>

                        <div class="col col-sm-6 col-md-3">
                            <div class="image nojs">
                                <div class="ribbon bg-pink"><p><?php foreach((get_the_category()) as $category) { echo $category->cat_name . '&nbsp; '; } ?></p></div>
                                <a href="<?php the_permalink(); ?>">
                                   <?php the_post_thumbnail('square-thumb'); ?>
                                    <div class="overlay">
                                        <div class="pull-left pull-vertical title">
                                            <h2 class="text-larger"><?php the_title(); ?></h2>
                                        </div>
                                        <p class="date"><?php echo the_time('M t, Y'); ?> <?php if( false == get_post_format() || (get_field('display_author')) ){ // Only displays when the post format isn't 'Video' or 'Link'. ?>by <?php the_author_meta('first_name'); ?><?php } ?></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <?php endwhile; ?>
                        
					</div>
					
					
	                <?php        
						
						endif; // Endif $similar
	                        
						endif; // Endif $similar_posts
						
						wp_reset_postdata(); // Reset Query

					?>

                </div>
            </div>
        

<?php
get_footer();
