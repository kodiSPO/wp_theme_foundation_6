<?php
// theme support
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');


// allow .svg through wp media uploader
// function cc_mime_types($mimes) {
// 	$mimes['svg'] = 'image/svg+xml';
// 	return $mimes;
// }
// add_filter('upload_mimes', 'cc_mime_types');


// enqueue scripts and styles
function theme_styles_scripts() {
	if (!is_admin()) {

		$theme_uri = get_template_directory_uri();

		// load stylesheets
		wp_enqueue_style('foundation',   $theme_uri .'/css/foundation.min.css',   array(), null);
		wp_enqueue_style('slick-css',    $theme_uri .'/css/slick.css',            array(), null);
		wp_enqueue_style('font-awesome', $theme_uri .'/css/font-awesome.min.css', array(), null);
		wp_enqueue_style('style',        $theme_uri .'/style.css',                array(), null);

		// load javaScripts
		wp_enqueue_script('jquery');
		wp_enqueue_script('foundation',  $theme_uri . '/js/foundation.min.js',         array(), null, true);
		wp_enqueue_script('slick-js',    $theme_uri . '/js/slick.min.js',              array(), null, true);
		wp_enqueue_script('matchHeight', $theme_uri . '/js/jquery.matchHeight-min.js', array(), null, true);
		wp_enqueue_script('global',      $theme_uri . '/js/global.js',                 array(), null, true);

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
	'footer-nav' => 'Footer navigation'
));


// options page
if (function_exists('acf_add_options_page')) {
	acf_add_options_page();
}


// GF: add support to hide field labels
add_filter('gform_enable_field_label_visibility_settings', '__return_true');


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
add_action( 'login_enqueue_scripts', 'wordpress_login_styling' );


// Removing menu pages
function remove_menus(){
	// remove_menu_page( 'edit.php' );          //Posts
	// remove_menu_page( 'edit-comments.php' ); //Comments
}
// add_action( 'admin_menu', 'remove_menus' );