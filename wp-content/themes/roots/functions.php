<?php

include_once('includes/roots-activation.php');	// activation
include_once('includes/roots-admin.php');		// admin additions/mods
include_once('includes/roots-options.php');		// theme options menu
include_once('includes/roots-ob.php');			// output buffer
//include_once('includes/roots-cleanup.php');		// code cleanup/removal
include_once('includes/roots-htaccess.php');	// h5bp htaccess

// set the maximum 'Large' image width to the Blueprint grid maximum width
if (!isset($content_width)) $content_width = 950;

// tell the TinyMCE editor to use editor-style.css
// if you have issues with getting the editor to show your changes then use the following line:
// add_editor_style('editor-style.css?' . time());
add_editor_style('editor-style.css');

add_theme_support('post-thumbnails');

// http://codex.wordpress.org/Post_Formats
// add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

add_theme_support('menus');
register_nav_menus(
	array(
	  'primary_navigation' => 'Primary Navigation',
	  'utility_navigation' => 'Utility Navigation'
	)
);

// make sure the menu fallback (wp_list_pages) adds the home link
function roots_page_menu_args($args) {
	$args['show_home'] = true;
	return $args;
}

add_filter('wp_page_menu_args', 'roots_page_menu_args');

// remove container from menus
function roots_nav_menu_args($args = ''){
	$args['container'] = false;
	return $args;
}

add_filter('wp_nav_menu_args', 'roots_nav_menu_args');

// create widget areas: sidebar, footer
$sidebars = array('Sidebar', 'Footer');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
		'before_widget' => '<article id="%1$s" class="widget %2$s"><div class="container">',
		'after_widget' => '</div></article>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}

// add to robots.txt
// http://codex.wordpress.org/Search_Engine_Optimization_for_WordPress#Robots.txt_Optimization
add_action('do_robots', 'roots_robots');

function roots_robots() {
	echo "Disallow: /cgi-bin\n";
	echo "Disallow: /wp-admin\n";
	echo "Disallow: /wp-includes\n";
	echo "Disallow: /wp-content/plugins\n";
	echo "Disallow: /plugins\n";
	echo "Disallow: /wp-content/cache\n";
	echo "Disallow: /wp-content/themes\n";
	echo "Disallow: /trackback\n";
	echo "Disallow: /feed\n";
	echo "Disallow: /comments\n";
	echo "Disallow: /category/*/*\n";
	echo "Disallow: */trackback\n";
	echo "Disallow: */feed\n";
	echo "Disallow: */comments\n";
	echo "Disallow: /*?*\n";
	echo "Disallow: /*?\n";
	echo "Allow: /wp-content/uploads\n";
	echo "Allow: /assets";
}

// Products

add_action('init', 'create_cc_products');
function create_cc_products()
{
	$cc_labels = array(
		'name' => _x('Products', 'post type general name'),
		'singular_name' => _x('Product', 'post type singular name'),
		'add_new' => _x('Add New', 'products'),
		'add_new_item' => __('Add New Product'),
		'edit_item' => __('Edit Product'),
		'new_item' => __('New Product'),
		'view_item' => __('View Product'),
		'search_items' => __('Search Products'),
		'not_found' =>  __('No Products found'),
		'not_found_in_trash' => __('No Products found in Trash'), 
		'parent_item_colon' => '',
		'menu_name' => 'Products'
	);
	
	$cc_args = array(
		'labels' => $cc_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => array('slug' => 'products', 'with_front' => false),
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => 20,
		'supports' => array('title','editor','thumbnail','page-attributes')
	);
	register_post_type('products', $cc_args);
}

// Product categories

register_taxonomy("cc_categories", array("products"), array("hierarchical" => true, "label" => "Categories", "singular_label" => "Category", "rewrite" => true));

// Admin UI

// Product list

add_action("manage_posts_custom_column",  "products_custom_columns");
add_filter("manage_edit-products_columns", "products_edit_columns");
 
function products_edit_columns($columns){
  $columns = array(
    "cb" => "<input type=\"checkbox\" />",
    "title" => "Name",
    "quantity" => "Quantity",
	"cc_categories" => "Categories",
    "date" => "Added"
  );
 
  return $columns;
}
function products_custom_columns($column){
  global $post;
 
  switch ($column) {
    case "quantity":
      $custom = get_post_custom();
	  echo $custom['quantity'][0];
      break;
    case "date":
      the_date();
      break;
    case "cc_categories":
      echo get_the_term_list($post->ID, 'cc_categories', '', ', ','');
      break;
  }
}

// Product metadata

add_action("admin_init", "admin_init");
 
function admin_init()
{
  add_meta_box("products_meta", "Product Information", "products_meta", "products", "side", "core");
}

function products_meta()
{
	global $post;
	$custom = get_post_custom($post->ID);
	$quantity = $custom['quantity'][0];
	?>
	<p><label>Quantity:</label>
	<input type="text" size="4" maxlength="6" name="quantity" value="<?php echo $quantity; ?>" /></p>
	<?php
}

add_action('save_post', 'save_products_meta');

function save_products_meta()
{
	global $post;
	$quantity = (!$_POST['quantity']) ? '1' : $_POST['quantity'];
	update_post_meta($post->ID, 'quantity', $quantity);
}

add_theme_support('post-thumbnails', array('products'));
set_post_thumbnail_size( 150, 150, true );

// Small helper function

function is_even($num)
{
	return ($num % 2 == 0) ? true : false;
}

?>