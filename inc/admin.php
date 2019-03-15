<?php
/**
 * Custom NKD admin settings.
 *
 * @package nkd
 */

/**
* Renames Posts to Insights in the admin area
*/
function nkd_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Insights';
    echo '';
    foreach ( $menu as $key => $val ) {
    if ( 'Insights' == $val[0] ) {
      $menu[$key][6] = 'dashicons-lightbulb';
    }
  	}
}
function nkd_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Insights';
    $labels->singular_name = 'Insight';
    $labels->menu_name = 'Insights';
    $labels->archives = 'Insights';
    $labels->name_admin_bar = 'Insights';
    $labels->parent_item_colon = 'Insights Item:';
    $labels->all_items = 'All Insights';
	$labels->add_new = 'Add Insight';
	$labels->add_new_item = 'Add Insight';
	$labels->edit_item = 'Edit Insight';
	$labels->new_item = 'Insight';
	$labels->edit_item = 'Edit Insight';
	$labels->update_item = 'Update Insight';	
	$labels->view_item = 'View Insight';
	$labels->search_items = 'Search Insights';
	$labels->not_found = 'No Insights found';
	$labels->not_found_in_trash = 'No Insights found in Trash';
}

add_action( 'admin_menu', 'nkd_change_post_label' );
add_action( 'init', 'nkd_change_post_object' );

/**
* Sets the default admin area settings screen.
*/
function nkd_default_admin_color($user_id) {
    $args = array(
        'ID' => $user_id,
        'admin_color' => 'midnight'
    );
    wp_update_user( $args );
}
add_action('user_register', 'nkd_default_admin_color');

/**
* Custom login screen
*/
function nkd_login_screen() { ?>
	
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
	
	<style type="text/css">
		 
		body.login {
			background-color: #21333A;
			font-family: "Lato", "Helvetica Neue", Helvetica, sans-serif;
		}
		body.login div#login h1 a {
			background-image: url('<?php echo esc_url( get_template_directory_uri() ) ?>/images/nkd+wordpress=insights.png');
			background-image: url('<?php echo esc_url( get_template_directory_uri() ) ?>/svgs/nkd+wordpress=insights.svg');
		 	-webkit-background-size: 300px;
		    background-size: 300px;
		 	padding-bottom: 0;
		 	height: 60px;
		 	width: 300px;
		 	
		}
		body.login div#login .button-primary {
		    background: #e7392e;
		    border: none;
		    -webkit-box-shadow: none;
		    box-shadow: none;
		    color: #fefefe;
		    letter-spacing: .05em;
		    text-decoration: none;
		    text-shadow: none;
		    -webkit-transition: background .25s ease-out, color .15s ease-out;
			transition: background .25s ease-out, color .15s ease-out;
		}
		body.login div#login .button-primary:hover {
			background: #C30E03;
		}
		body.login div#login #nav a,
		body.login div#login #backtoblog a {
			font-weight: 400;
			color: #777;
		}
		body.login div#login #nav a:hover,
		body.login div#login #backtoblog a:hover {
			color: #fff;
		}
	</style>
 <?php } 
add_action( 'login_enqueue_scripts', 'nkd_login_screen' );

/**
* Removes the customizer from the admin bar
*/

function remove_submenus(){
	global $submenu;
	unset($submenu['themes.php'][6]); // Removes the 'Customize' link
	unset($submenu['themes.php'][20]); // Removes 'Background' link
}
add_action( 'admin_menu', 'remove_submenus');


// Remove Comments menu item for all but Administrators

function remove_menus(){
  	remove_menu_page( 'edit-comments.php' ); // Removes 'Comments' link
}
add_action( 'admin_menu', 'remove_menus' );

/**
 * Custom WordPress Admin Color Scheme
 */
function admin_css() {
	wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/dist/admin.css' );
}
add_action('admin_print_styles', 'admin_css' );