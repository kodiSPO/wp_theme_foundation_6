<?php
// Disable use XML-RPC
add_filter( 'xmlrpc_enabled', '__return_false' );


// theme support
// add_theme_support('custom-logo');
add_theme_support('post-thumbnails');


/*
** custom image sizes
*/
// add_image_size('case-preview-865-450', 865, 450, true);
// add_image_size('post-preview-387-220', 387, 220, true);


// allow .svg through wp media uploader
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


// enqueue scripts and styles
function theme_styles_scripts() {
	if (!is_admin()) {

		$theme_uri = get_stylesheet_directory_uri();
		$version   = '1.0.0';

		wp_deregister_script('wp-embed');
		remove_action('wp_head', 'print_emoji_detection_script', 7);
		remove_action('wp_print_styles', 'print_emoji_styles');
		wp_deregister_script('jquery');


		/*
		** load css
		*/
		// wp_enqueue_style('font-opensans-css', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800');
		wp_enqueue_style('foundaion-css', $theme_uri .'/css/plugins/foundation.css', array(), $version);
		wp_enqueue_style('slick-css', $theme_uri .'/css/plugins/slick.css', array(), $version);
		wp_enqueue_style('theme-css', $theme_uri .'/css/theme.css', array(), $version);

		/*
		** load js
		*/
		wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), null);
		wp_enqueue_script('foundation-js', $theme_uri . '/js/plugins/foundation.js', array('jquery'), $version, true);
		wp_enqueue_script('lazy-js', $theme_uri . '/js/plugins/jquery.lazy.min.js', array('jquery'), $version, true);
		wp_enqueue_script('matchHeight-js', $theme_uri . '/js/plugins/jquery.matchHeight.js', array('jquery'), $version, true);
		wp_enqueue_script('slick-js', $theme_uri . '/js/plugins/slick.min.js', array('jquery'), $version, true);

		wp_enqueue_script('theme-js', $theme_uri . '/js/theme.js', array('jquery'), $version, true);

	}
}
add_action('wp_enqueue_scripts', 'theme_styles_scripts');


// custom Walker
class Foundation_6_Walker extends Walker_Nav_Menu {
	/*
	 * Add vertical menu class and submenu data attribute to sub menus
	 */

	function start_lvl(&$output, $depth = 0, $args = array()) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"vertical menu\" data-submenu>\n";
	}
}


// optional fallback
function f6_topbar_menu_fallback($args) {
	/*
	 * Instantiate new Page Walker class instead of applying a filter to the
	 * "wp_page_menu" function in the event there are multiple active menus in theme.
	 */

	$walker_page = new Walker_Page();
	$fallback = $walker_page->walk(get_pages(), 0);
	$fallback = str_replace("<ul class='children'>", '<ul class="menu">', $fallback);

	echo '<ul class="menu" data-responsive-menu="drilldown medium-dropdown">'.$fallback.'</ul>';
}


// register navigation menu
register_nav_menus(array(
	'main-nav'   => 'Main navigation',
	'footer-nav' => 'Footer navigation',
));


// options page
if (function_exists('acf_add_options_page')) {
	acf_add_options_page();
}


// GF: add support to hide field labels
add_filter('gform_enable_field_label_visibility_settings', '__return_true');


/*
** Grvity forms: Disable Automatic Scrolling On All Forms
*/
add_filter( 'gform_confirmation_anchor', '__return_false' );


// customize login screen
function wordpress_login_styling() {
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$image          = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	?>
	<style type="text/css">
		.login #login h1 a {
			background-image: url('<?php echo $image[0]; ?>');
			background-size: contain;
			width: auto;
			height: 78px;
		}
	</style>
<?php }
// add_action( 'login_enqueue_scripts', 'wordpress_login_styling' );


// Removing menu pages
function remove_menus(){
	remove_menu_page( 'edit.php' );          //Posts
	remove_menu_page( 'edit-comments.php' ); //Comments
}
// add_action( 'admin_menu', 'remove_menus' );




/*
** ajax handler - ajax sample
*/
if ( !function_exists('load_instagram_posts') ):

	function load_instagram_posts() {

		$event_id = intval(sanitize_text_field($_POST['id']));
		ob_start(); ?>

			<!-- html -->

		<?php $content = ob_get_contents();
		ob_end_clean();
		echo $content;

		// echo json_encode($insta_posts);
		wp_die();

	}

	// add_action('wp_ajax_load_instagram_posts',        'load_instagram_posts');
	// add_action('wp_ajax_nopriv_load_instagram_posts', 'load_instagram_posts');

endif;