<?php
/**
 * _s functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _s
 */

if ( ! function_exists( '_s_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function _s_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on _s, use a find and replace
		 * to change '_s' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( '_s', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', '_s' ),
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
		add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', '_s_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _s_content_width() {
	$GLOBALS['content_width'] = apply_filters( '_s_content_width', 640 );
}
add_action( 'after_setup_theme', '_s_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _s_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', '_s' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', '_s' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', '_s_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function _s_scripts() {
	wp_enqueue_style( '_s-style', get_stylesheet_uri() );

	wp_enqueue_script( '_s-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( '_s-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_s_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Register Custom Post Type
function custom_post_products() {

	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', '_s' ),
		'singular_name'         => _x( 'Product', 'Post Type Singular Name', '_s' ),
		'menu_name'             => __( 'Products', '_s' ),
		'name_admin_bar'        => __( 'Products', '_s' ),
		'archives'              => __( 'Products Archives', '_s' ),
		'attributes'            => __( 'Product Attributes', '_s' ),
		'parent_item_colon'     => __( 'Parent Product:', '_s' ),
		'all_items'             => __( 'All Products', '_s' ),
		'add_new_item'          => __( 'Add New Product', '_s' ),
		'add_new'               => __( 'Add New', '_s' ),
		'new_item'              => __( 'New Product', '_s' ),
		'edit_item'             => __( 'Edit Product', '_s' ),
		'update_item'           => __( 'Update Product', '_s' ),
		'view_item'             => __( 'View Product', '_s' ),
		'view_items'            => __( 'View Products', '_s' ),
		'search_items'          => __( 'Search Product', '_s' ),
		'not_found'             => __( 'Not found', '_s' ),
		'not_found_in_trash'    => __( 'Not found in Trash', '_s' ),
		'featured_image'        => __( 'Featured Image', '_s' ),
		'set_featured_image'    => __( 'Set featured image', '_s' ),
		'remove_featured_image' => __( 'Remove featured image', '_s' ),
		'use_featured_image'    => __( 'Use as featured image', '_s' ),
		'insert_into_item'      => __( 'Insert into Product', '_s' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Product', '_s' ),
		'items_list'            => __( 'Products list', '_s' ),
		'items_list_navigation' => __( 'Products list navigation', '_s' ),
		'filter_items_list'     => __( 'Filter Products list', '_s' ),
	);
	$args = array(
		'label'                 => __( 'Product', '_s' ),
		'description'           => __( 'Products', '_s' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'products', $args );

}
add_action( 'init', 'custom_post_products', 0 );

// Register Custom Post Type
function custom_post_industries() {
    
        $labels = array(
            'name'                  => _x( 'Industries', 'Post Type General Name', '_s' ),
            'singular_name'         => _x( 'Industry', 'Post Type Singular Name', '_s' ),
            'menu_name'             => __( 'Industries', '_s' ),
            'name_admin_bar'        => __( 'Industries', '_s' ),
            'archives'              => __( 'Industries Archives', '_s' ),
            'attributes'            => __( 'Industry Attributes', '_s' ),
            'parent_item_colon'     => __( 'Parent Industry:', '_s' ),
            'all_items'             => __( 'All Industries', '_s' ),
            'add_new_item'          => __( 'Add New Industry', '_s' ),
            'add_new'               => __( 'Add New', '_s' ),
            'new_item'              => __( 'New Industry', '_s' ),
            'edit_item'             => __( 'Edit Industry', '_s' ),
            'update_item'           => __( 'Update Industry', '_s' ),
            'view_item'             => __( 'View Industry', '_s' ),
            'view_items'            => __( 'View Industries', '_s' ),
            'search_items'          => __( 'Search Industry', '_s' ),
            'not_found'             => __( 'Not found', '_s' ),
            'not_found_in_trash'    => __( 'Not found in Trash', '_s' ),
            'featured_image'        => __( 'Featured Image', '_s' ),
            'set_featured_image'    => __( 'Set featured image', '_s' ),
            'remove_featured_image' => __( 'Remove featured image', '_s' ),
            'use_featured_image'    => __( 'Use as featured image', '_s' ),
            'insert_into_item'      => __( 'Insert into Industry', '_s' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Industry', '_s' ),
            'items_list'            => __( 'Industries list', '_s' ),
            'items_list_navigation' => __( 'Industries list navigation', '_s' ),
            'filter_items_list'     => __( 'Filter Industries list', '_s' ),
        );
        $args = array(
            'label'                 => __( 'Industry', '_s' ),
            'description'           => __( 'Industries', '_s' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-hammer',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'industries', $args );
    
    }
    add_action( 'init', 'custom_post_industries', 0 );

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function wp_custom_pagination($args = [], $class = 'pagination') {
    if ($GLOBALS['wp_query']->max_num_pages <= 1) return;

    $args = wp_parse_args( $args, [
        'mid_size'           => 2,
        'prev_next'          => true,
        'prev_text'          => __('Previous', '_s'),
        'next_text'          => __('Next', '_s'),
        'screen_reader_text' => __('Posts navigation', '_s'),
    ]);

    $links     = paginate_links($args);
    $next_link = get_previous_posts_link($args['prev_text']);
    $prev_link = get_next_posts_link($args['next_text']);

    $next_link = str_replace( '<a', '<li><a', $next_link );
    $next_link = str_replace( '</a>', '</a></li>', $next_link );
    $prev_link = str_replace( '<a', '<li><a', $prev_link );
    $prev_link = str_replace( '</a>', '</a></li>', $prev_link );
    $links = str_replace( '<a', '<li><a', $links );
    $links = str_replace( '</a>', '</a></li>', $links );
    $links = str_replace( '<span', '<li><span', $links );
    $links = str_replace( '</span>', '</span></li>', $links );
    $temp = '<ul class="pagination %1$s" role="navigation">
                %3$s%4$s
            </ul>';
    $template  = apply_filters( 'navigation_markup_template',$temp , $args, $class);
    echo sprintf($template, $class, $args['screen_reader_text'], $prev_link, $links, $next_link);

}

function wpb_move_comment_field_to_bottom( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}
 
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );

// define the comment_form_submit_button callback
function filter_comment_form_submit_button( $submit_button, $args ) {
    // make filter magic happen here...
    $submit_before = '<div class="form-group">';
	$submit_after = '</div></div>';
    return $submit_before . $submit_button . $submit_after;
};
 
// add the filter
add_filter( 'comment_form_submit_button', 'filter_comment_form_submit_button', 10, 2 );



/*===================================================================================
* Add global options
* =================================================================================*/

/**
 *
 * The page content surrounding the settings fields. Usually you use this to instruct non-techy people what to do.
 *
 */
function theme_settings_page(){ 
	?>
	<div class="wrap">
		<h1>Contact Info</h1>
		<p>This information is used around the website, so changing these here will update them across the website.</p>
		<form method="post" action="options.php">
			<?php
			settings_fields("section");
			do_settings_sections("theme-options");
			submit_button();
			?>
		</form>
	</div>
	
	<?php }

/**
 *
 * Next comes the settings fields to display. Use anything from inputs and textareas, to checkboxes multi-selects.
 *
 */

// Phone
function display_phone_element(){ ?>
	
	<input type="tel" name="phone" placeholder="Enter phone number" value="<?php echo get_option('phone'); ?>" size="35">

<?php }

// Fax
function display_address_element(){ ?>
	
	<input type="text" name="address" placeholder="Enter Address" value="<?php echo get_option('address'); ?>" size="35">

<?php }

// Email
function display_email_element(){ ?>
	
	<input type="email" name="email" placeholder="Enter email address" value="<?php echo get_option('email'); ?>" size="35">
	
<?php }

// Map
function display_map_element(){ ?>
	
    <input type="text" name="map" placeholder="Enter google map embed" value="<?php echo get_option('map'); ?>" size="100">
    <p class="description">Ex. https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY&q=Space+Needle,Seattle+WA</p>
	
<?php }

// About
function display_footer_about_element(){ ?>
	
    <textarea rows="4" cols="100" placeholder="About us" name="footer_about"><?php echo get_option('footer_about'); ?></textarea>
	
<?php }

/**
 *
 * Here you tell WP what to enqueue into the <form> area. You need:
 *
 * 1. add_settings_section
 * 2. add_settings_field
 * 3. register_setting
 *
 */

function display_custom_info_fields(){
	
	add_settings_section("section", "Company Information", null, "theme-options");

	add_settings_field("address", "Address", "display_address_element", "theme-options", "section");
	add_settings_field("email", "Email address", "display_email_element", "theme-options", "section");
	add_settings_field("phone", "Phone Number", "display_phone_element", "theme-options", "section");
	add_settings_field("map", "Google Map Embed", "display_map_element", "theme-options", "section");
	add_settings_field("footer_about", "About us section in footer", "display_footer_about_element", "theme-options", "section");
    
	register_setting("section", "address");
	register_setting("section", "email");
	register_setting("section", "phone");
	register_setting("section", "map");
	register_setting("section", "footer_about");
	
}

add_action("admin_init", "display_custom_info_fields");

/**
 *
 * Tie it all together by adding the settings page to wherever you like. For this example it will appear
 * in Settings > Contact Info
 *
 */

function add_custom_info_menu_item(){
	
	add_options_page("Contact Info", "Contact Info", "manage_options", "contact-info", "theme_settings_page");
	
}

add_action("admin_menu", "add_custom_info_menu_item");