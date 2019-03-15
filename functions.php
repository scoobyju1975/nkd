<?php
/**
 * nkd functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nkd
 */

if ( ! function_exists( 'nkd_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
 
	
	
function nkd_setup() {	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
  	 */
  	add_theme_support( 'post-thumbnails' );
	
	add_image_size( 'wide-thumb', 920, 446, array( 'center', 'center') ); // Sets the sizes for the wider panel image.
	add_image_size( 'square-thumb', 440, 446, array( 'center', 'center') ); // Sets the sizes for the square panel image.
	
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'nkd', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );


	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'nkd' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'nkd_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
	/**
     * Adding the additional post formats.
     */ 
	add_theme_support( 'post-formats', array( 'link', 'video' ) );
}
endif;
add_action( 'after_setup_theme', 'nkd_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nkd_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nkd_content_width', 640 );
}
add_action( 'after_setup_theme', 'nkd_content_width', 0 );

/**
 * Load custom NKD admin settings.
 */
require get_template_directory() . '/inc/admin.php';

/**
 * Load custom NKD Gravatar settings.
 */
require get_template_directory() . '/inc/gravatar.php';

/**
 * Load custom NKD Gravity form settings.
 */
require get_template_directory() . '/inc/gravity.php';


/**
 * Enqueue scripts and styles.
 *
 * Enqueue the styles
 */
  function nkd_theme_styles() {
	 wp_enqueue_style( 'lato_css', '//fonts.googleapis.com/css?family=Lato:300%7COpen+Sans:400italic,400,700,600' );
	 wp_enqueue_style( 'lib_css', get_template_directory_uri() . '/dist/libs.css' );
	 wp_enqueue_style( 'style_css', get_template_directory_uri() . '/dist/style.css' );
	 wp_enqueue_style( 'flexslider_css', get_template_directory_uri() . '/dist/flexslider.css' ); 
	 wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/dist/custom.css' ); // This can be commented out if it's not being used!
 }
 add_action( 'wp_enqueue_scripts', 'nkd_theme_styles' );


/**
 * Asynchronously load scripts - Append '#asyncload' to scripts uri to load asynchronously
 */
 function async_scripts($url) {
    if ( strpos( $url, '#asyncload') === false )
        return $url;
    else if ( is_admin() )
        return str_replace( '#asyncload', '', $url );
    else
	return str_replace( '#asyncload', '', $url )."' async='async";
 }
 add_filter( 'clean_url', 'async_scripts', 11, 1 );

/**
 * Dequeue jquery on the front end to work with NKD's original JQuery
 */
 add_action( 'wp_enqueue_scripts', function(){
    if (is_admin()) return; // don't dequeue on the backend
    wp_deregister_script( 'jquery' );
    
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js', array(), false, '2.1.1'); // #asyncload
    wp_enqueue_script( 'jquery');
 });


/**
 * Enqueue the scripts.
 */
 function theme_js() {

	 global $wp_scripts;
		  	 
	 wp_enqueue_script('jqueryui_js', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js', array('jquery'), '', false );
	 
	 if ( is_page('contact-us') ){
		wp_enqueue_script( 'gmap_js', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAno7NRoEIyfvvdCzHCDxeVQl5RXdeX5-E&callback=initMap', array('jquery'),  '', true ); // http://maps.googleapis.com/maps/api/js?v=3.exp
	 }

	
	 wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.js', array('jquery', 'ckeditor_js'), '', true );
	 wp_enqueue_script('ckeditor_js', get_template_directory_uri() . '/js/ckeditor/ckeditor.js', array('jquery'), '', true );
	 wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', false );
	 wp_enqueue_script('custom_js', get_template_directory_uri() . '/js/custom.js', array('jquery', 'ckeditor_js'), '', true );

     wp_enqueue_script('flexslider', get_stylesheet_directory_uri().'/js/jquery.flexslider-min.js', array('jquery'),  '', true );
     wp_enqueue_script('flexslider-init', get_stylesheet_directory_uri().'/js/flexslider-init.js', array('jquery', 'flexslider'),  '', true );
	 
	 // Not used as comments aren't enabled ont the theme 
	 if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	 }
	 
 }
 add_action( 'wp_enqueue_scripts', 'theme_js' );

/**
 * Adds better support for IE8
 */
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_script( 'html5shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', array( 'jquery' ), '3.7.2', false );
    wp_scripts()->add_data( 'html5shiv', 'conditional', 'lt IE 9' );
    wp_enqueue_script( 'respondjs', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', array( 'jquery' ), '', false );
    wp_scripts()->add_data( 'respondjs', 'conditional', 'lt IE 9' );
} );


 
/**
 * Removes the thumbnail dimensions on 'full' thumbnails.
 */ 
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 4 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id,$post_thumbnail) {
    if ($post_thumbnail=='full'){
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    }
    return $html;
}


/**
 * Add SVG capabilities
 */
function nkd_svg_mime_type( $mimes = array() ) {
  $mimes['svg']  = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'nkd_svg_mime_type' );


/**
 * Prevents search results outside the scope of posts.
 */
function SearchFilter($query) {
	if ($query->is_search) {
$query->set('post_type', 'post');
	}
	return $query;
}
add_filter('pre_get_posts','SearchFilter');


/**
 * If page slug exsists
 */
function get_page_by_name($pagename)
{
$pages = get_pages();
foreach ($pages as $page) if ($page->post_name == $pagename) return $page;
return false;
}


/**
 * Removes static file query strings
 */
function _remove_script_version( $src ){
$parts = explode( '?ver', $src );
return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 ); 


/**
 * Makes the post count for the posts page accurate as it subtracts stickies
 */
if ( is_front_page() ) {

add_action( 'pre_get_posts', 'exclude_sticky' );

	function exclude_sticky( $query ) {
	
    	if ($query->get('paged') == 0) {
        	$sticky = get_option('sticky_posts');
			$num = get_option('posts_per_page');
			$extras = $num - count($sticky);
			$query->set( 'posts_per_page', $extras );
    	}
	}
}

add_action( 'pre_get_posts', function ( $q ) 
{

    if ( $q->is_main_query() && $q->is_home() ) {

        $count_stickies = count( get_option( 'sticky_posts' ) );
        $ppp = get_option( 'posts_per_page' );
        $offset = ( $count_stickies <= $ppp ) ? ( $ppp - ( $ppp - $count_stickies ) ) : $ppp;

        if (!$q->is_paged()) {
          $q->set('posts_per_page', ( $ppp - $offset ));
        } else {
          $offset = ( ($q->query_vars['paged']-1) * $ppp ) - $offset;
          $q->set('posts_per_page',$ppp);
          $q->set('offset',$offset);
        }

    }

});    

add_filter( 'found_posts', function ( $found_posts, $q ) 
{

    if( $q->is_main_query() && $q->is_home() ) {

        $count_stickies = count( get_option( 'sticky_posts' ) );
        $ppp = get_option( 'posts_per_page' );
        $offset = ( $count_stickies <= $ppp ) ? ( $ppp - ( $ppp - $count_stickies ) ) : $ppp;        

        $found_posts = $found_posts + $offset;
    }
    return $found_posts;

}, 10, 2 ); 

/**
 * Bootstrap pagination function
 */
function wp_bs_pagination($pages = '', $range = 4) {  
     $showitems = ($range * 2) + 1;  
     global $paged;
     if(empty($paged)) $paged = 1;
     if($pages == '') {
         global $wp_query; 
		 $pages = $wp_query->max_num_pages;
 
         if(!$pages) {
             $pages = 1;
         }
     }   

     if(1 != $pages) {
        echo '<div class="text-center col col-xs-12">'; 
        echo '<nav><ul class="pagination"><li class="disabled hidden-xs"><span><span aria-hidden="true">Page '.$paged.' of '.$pages.'</span></span></li>';
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."' aria-label='First'>&laquo;<span class='hidden-xs'> First</span></a></li>";
         if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."' aria-label='Previous'>&lsaquo;<span class='hidden-xs'> Previous</span></a></li>";
         for ($i=1; $i <= $pages; $i++) {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
                 echo ($paged == $i)? "<li class=\"active\"><span>".$i." </span></li>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<li><a href=\"".get_pagenum_link($paged + 1)."\"  aria-label='Next'><span class='hidden-xs'>Next </span>&rsaquo;</a></li>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."' aria-label='Last'><span class='hidden-xs'>Last </span>&raquo;</a></li>";
         echo "</ul></nav>";
         echo "</div>";
     }
}

/**
 * Add Services Post type
 */

add_action( 'init', 'cptui_register_my_cpts_nkd_services' );
function cptui_register_my_cpts_nkd_services() {
	$labels = array(
		"name" => __( 'Services', 'nkd' ),
		"singular_name" => __( 'Service', 'nkd' ),
		);

	$args = array(
		"label" => __( 'Services', 'nkd' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
				"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "nkd_services", "with_front" => true ),
		"query_var" => true,
		
		"supports" => array( "title", "editor", "thumbnail" ),		
		"taxonomies" => array( "category", "post_tag" ),
			);
	register_post_type( "nkd_services", $args );

// End of cptui_register_my_cpts_nkd_services()
}

/**
 * Add Tags and Cats to Pages & Services Post type
 */

function add_taxonomies_to_pages() {
 register_taxonomy_for_object_type( 'post_tag', 'page' );
 register_taxonomy_for_object_type( 'category', 'page' );
 }
add_action( 'init', 'add_taxonomies_to_pages' );
 if ( ! is_admin() ) {
 add_action( 'pre_get_posts', 'category_and_tag_archives' );
 
 }
function category_and_tag_archives( $wp_query ) {
$my_post_array = array('post','page');
 
 if ( $wp_query->get( 'category_name' ) || $wp_query->get( 'cat' ) )
 $wp_query->set( 'post_type', $my_post_array );
 
 if ( $wp_query->get( 'tag' ) )
 $wp_query->set( 'post_type', $my_post_array );
}

/**
 * Admin Menu Order
 */

function custom_menu_order($menu_ord) {
    if (!$menu_ord) return true;
     
    return array(
        'index.php', // Dashboard
        'separator1', // First separator
        'edit.php?post_type=page', // Pages
        'edit.php?post_type=nkd_services', // Pages
        'edit.php?post_type=insights', // Pages
        'edit.php', // Posts
        'upload.php', // Media
        'separator2', // Second separator
        'users.php', // Users
        'link-manager.php', // Links
        'edit-comments.php', // Comments
        'themes.php', // Appearance
        'plugins.php', // Plugins
        'tools.php', // Tools
        'options-general.php', // Settings
        'separator-last', // Last separator
    );
}
add_filter('custom_menu_order', 'custom_menu_order'); // Activate custom_menu_order
add_filter('menu_order', 'custom_menu_order');

/**
 * Add current menu item class
 */

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'current ';
    }
    return $classes;
}

if ( ! defined( 'ABSPATH' ) ) { 
    exit; // Exit if accessed directly
}

/* Next & Previous Category*/

add_filter( 'get_next_post_join', 'navigate_in_same_taxonomy_join', 20);
add_filter( 'get_previous_post_join', 'navigate_in_same_taxonomy_join', 20 );
function navigate_in_same_taxonomy_join() {
	global $wpdb;
	return " INNER JOIN $wpdb->term_relationships AS tr ON p.ID = tr.object_id INNER JOIN $wpdb->term_taxonomy tt ON tr.term_taxonomy_id = tt.term_taxonomy_id";
}
 
 
add_filter( 'get_next_post_where' , 'navigate_in_same_taxonomy_where' );
add_filter( 'get_previous_post_where' , 'navigate_in_same_taxonomy_where' );
function navigate_in_same_taxonomy_where( $original ) {
	global $wpdb, $post;
	$where 		= '';
	$taxonomy  	= 'category';
	$op 		= ('get_previous_post_where' == current_filter()) ? '<' : '>';
	$where 		= $wpdb->prepare( "AND tt.taxonomy = %s", $taxonomy );
	if ( ! is_object_in_taxonomy( $post->post_type, $taxonomy ) )
		return $original ;
 
	$term_array = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
 
	$term_array = array_map( 'intval', $term_array );
 
	if ( ! $term_array || is_wp_error( $term_array ) )
		return $original ;
 
	$where 		= " AND tt.term_id IN (" . implode( ',', $term_array ) . ")";
	return $wpdb->prepare( "WHERE p.post_date $op %s AND p.post_type = %s AND p.post_status = 'publish' $where", $post->post_date, $post->post_type );
}

/* Remove p tags from ACF */
remove_filter ('acf_the_content', 'wpautop');