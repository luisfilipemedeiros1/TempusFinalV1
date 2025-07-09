<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'tempusbelgravia' );
define( 'CHILD_THEME_URL', 'http://www.dicema.com/' );
define( 'CHILD_THEME_VERSION', '2.0.2' ); // Increment version for cache busting

//* Include treatment prices
require_once( get_stylesheet_directory() . '/inc/treatment-prices.php' );


//* Enqueue Google Fonts and Main Styles
add_action( 'wp_enqueue_scripts', 'tempus_enqueue_styles_scripts' );
function tempus_enqueue_styles_scripts() {

	// Enqueue Google Fonts for the new design
	wp_enqueue_style(
		'tempus-google-fonts', // Unique handle for the fonts
		'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400&family=Montserrat:wght@200;300;400;500;600&family=Playfair+Display:wght@400;500;600&display=swap', // The URL from your new template
		array(), // No dependencies for the font file itself
		null     // No version number needed for Google Fonts
	);

	// Enqueue the main theme stylesheet and make it depend on the Google Fonts
	wp_enqueue_style(
		'tempus-main-styles', // Use a specific handle
		get_stylesheet_uri(), // URL to style.css
		array( 'tempus-google-fonts' ), // Make it depend on the fonts being loaded
		CHILD_THEME_VERSION // Use the defined version constant
	);

    // Enqueue Slick CSS (use minified)
    wp_enqueue_style('slick', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', array(), '1.8.1');
    wp_enqueue_style('slicktheme', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', array('slick'), '1.8.1');

    // Enqueue FontAwesome (use latest stable version, CSS version)
    wp_enqueue_style('font-awesome-6', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1');

    // Enqueue Slick JS (if not already handled by another plugin/theme function)
    wp_enqueue_script('slick', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), '1.8.1', true);

    // Enqueue your child theme's main JS file
    wp_enqueue_script('tempus-global-custom', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), CHILD_THEME_VERSION, true);
    
    // Enqueue modern header/footer styles (global)
    wp_enqueue_style('tempus-header-footer', get_stylesheet_directory_uri() . '/css/header-footer.css', array('tempus-main-styles'), CHILD_THEME_VERSION);

    // --- PAGE-SPECIFIC STYLES ---
    
    // Enqueue Home page-specific CSS (with proper dependencies)
    if ( is_page_template('home.php') || 
         is_front_page() || 
         is_home() || 
         (is_page() && get_page_template_slug() == 'home.php') ) {
        $home_css_path = get_stylesheet_directory() . '/css/home.css';
        $home_css_url = get_stylesheet_directory_uri() . '/css/home.css';
        if ( file_exists( $home_css_path ) ) {
            wp_enqueue_style('tempus-home-styles', $home_css_url, array('tempus-main-styles'), CHILD_THEME_VERSION);
        }
    }

    // Enqueue Membership page-specific CSS (with proper dependencies)
    if ( is_page_template('page-memberships.php') ) {
        $membership_css_path = get_stylesheet_directory() . '/css/membership.css';
        $membership_css_url = get_stylesheet_directory_uri() . '/css/membership.css';
        if ( file_exists( $membership_css_path ) ) {
            wp_enqueue_style('tempus-membership-styles', $membership_css_url, array('tempus-main-styles'), CHILD_THEME_VERSION);
        }
    }
    
    // Enqueue Treatment pages CSS (for all treatment category templates)
    if ( is_page_template('body-contouring.php') || 
         is_page_template('face-asthetic-treatment.php') || 
         is_page_template('medical-aesthetics.php') || 
         is_page_template('laser-treatment.php') ) {
        
        // First ensure home.css is loaded (treatment pages inherit from it)
        $home_css_path = get_stylesheet_directory() . '/css/home.css';
        $home_css_url = get_stylesheet_directory_uri() . '/css/home.css';
        if ( file_exists( $home_css_path ) ) {
            wp_enqueue_style('tempus-home-styles', $home_css_url, array('tempus-main-styles'), CHILD_THEME_VERSION);
        }
        
        // Then load treatment pages CSS
        $treatment_css_path = get_stylesheet_directory() . '/css/treatment-pages.css';
        $treatment_css_url = get_stylesheet_directory_uri() . '/css/treatment-pages.css';
        if ( file_exists( $treatment_css_path ) ) {
            wp_enqueue_style('tempus-treatment-pages', $treatment_css_url, array('tempus-main-styles', 'tempus-home-styles'), CHILD_THEME_VERSION);
        }
        
        // Load treatment pages JS
        $treatment_js_path = get_stylesheet_directory() . '/js/treatment-pages.js';
        $treatment_js_url = get_stylesheet_directory_uri() . '/js/treatment-pages.js';
        if ( file_exists( $treatment_js_path ) ) {
            wp_enqueue_script('tempus-treatment-pages', $treatment_js_url, array('jquery'), CHILD_THEME_VERSION, true);
        }
    }
    
    // Enqueue Press page CSS
    if ( is_page_template('press.php') ) {
        $press_css_path = get_stylesheet_directory() . '/css/press.css';
        $press_css_url = get_stylesheet_directory_uri() . '/css/press.css';
        if ( file_exists( $press_css_path ) ) {
            wp_enqueue_style('tempus-press-styles', $press_css_url, array('tempus-main-styles'), CHILD_THEME_VERSION);
        }
    }
    
    // Enqueue Blog page CSS
    if ( is_page_template('blogs.php') || is_home() || is_archive() || is_category() || is_single() ) {
        $blog_css_path = get_stylesheet_directory() . '/css/blog.css';
        $blog_css_url = get_stylesheet_directory_uri() . '/css/blog.css';
        if ( file_exists( $blog_css_path ) ) {
            wp_enqueue_style('tempus-blog-styles', $blog_css_url, array('tempus-main-styles'), CHILD_THEME_VERSION);
        }
    }
    
    // Enqueue Taxonomy Fix CSS for team and blog pages
    if ( is_tax('team_category') || is_tax('treatment_category') || is_page_template('blogs.php') || is_home() || is_archive() || is_category() ) {
        $taxonomy_fix_css_path = get_stylesheet_directory() . '/css/taxonomy-fix.css';
        $taxonomy_fix_css_url = get_stylesheet_directory_uri() . '/css/taxonomy-fix.css';
        if ( file_exists( $taxonomy_fix_css_path ) ) {
            wp_enqueue_style('tempus-taxonomy-fix', $taxonomy_fix_css_url, array('tempus-main-styles'), CHILD_THEME_VERSION);
        }
        
        // Also enqueue the JavaScript fix
        $taxonomy_fix_js_path = get_stylesheet_directory() . '/js/taxonomy-fix.js';
        $taxonomy_fix_js_url = get_stylesheet_directory_uri() . '/js/taxonomy-fix.js';
        if ( file_exists( $taxonomy_fix_js_path ) ) {
            wp_enqueue_script('tempus-taxonomy-fix', $taxonomy_fix_js_url, array('jquery'), CHILD_THEME_VERSION, true);
        }
    }
    
    // Enqueue WooCommerce-specific CSS and JS for shop pages
    if ( is_woocommerce() || is_shop() || is_product_category() || is_product_tag() || is_product() ) {
        $woocommerce_css_path = get_stylesheet_directory() . '/css/woocommerce.css';
        $woocommerce_css_url = get_stylesheet_directory_uri() . '/css/woocommerce.css';
        if ( file_exists( $woocommerce_css_path ) ) {
            wp_enqueue_style('tempus-woocommerce-styles', $woocommerce_css_url, array('tempus-main-styles'), CHILD_THEME_VERSION);
        }
        
        $woocommerce_js_path = get_stylesheet_directory() . '/js/woocommerce.js';
        $woocommerce_js_url = get_stylesheet_directory_uri() . '/js/woocommerce.js';
        if ( file_exists( $woocommerce_js_path ) ) {
            wp_enqueue_script('tempus-woocommerce', $woocommerce_js_url, array('jquery', 'wc-add-to-cart'), CHILD_THEME_VERSION, true);
        }
    }
    
    // Membership V2 template assets are now loaded via separate hook for Genesis compatibility

    // --- PAGE-SPECIFIC SCRIPTS ---

    // Enqueue homepage-specific JS (multiple conditions for different homepage setups)
    if ( is_page_template('home.php') || 
         is_front_page() || 
         is_home() || 
         (is_page() && get_page_template_slug() == 'home.php') ) {
        // Ensure the file exists at 'wp-content/themes/tempusbelgravia/js/home-custom.js'
        $home_js_path = get_stylesheet_directory() . '/js/home-custom.js';
        $home_js_url = get_stylesheet_directory_uri() . '/js/home-custom.js';
        if ( file_exists( $home_js_path ) ) {
            wp_enqueue_script('tempus-home-specific', $home_js_url, array('jquery', 'slick'), CHILD_THEME_VERSION, true);
        }
    }

    // Enqueue Membership page-specific JS
    if ( is_page_template('page-memberships.php') ) {
        $membership_js_path = get_stylesheet_directory() . '/js/membership.js';
        $membership_js_url = get_stylesheet_directory_uri() . '/js/membership.js';
        if ( file_exists( $membership_js_path ) ) {
            wp_enqueue_script('tempus-membership', $membership_js_url, array('jquery'), CHILD_THEME_VERSION, true);
        }
    }

}

//* Add Zoho PageSense tracking script to head
add_action( 'wp_head', 'tempus_add_zoho_tracking' );
function tempus_add_zoho_tracking() {
    ?>
    <script src="https://cdn-eu.pagesense.io/js/foundershealth/a71f79adb32e46278910494ae85a1ac3.js"></script>
    <?php
}

// Debug function removed - membership v2 assets loading successfully

// === MEMBERSHIP V2 TEMPLATE LOADING - MULTIPLE APPROACHES ===
// Try multiple hooks and methods to ensure assets load with Genesis

// Method 1: Standard WordPress hook with better timing
add_action('wp_enqueue_scripts', 'load_membership_v2_assets_standard', 20);
function load_membership_v2_assets_standard() {
    if (!is_page()) {
        return;
    }
    
    global $post;
    $page_template = get_page_template_slug($post->ID ?? 0);
    
    // Support both membership and treatments overview templates
    if ($page_template === 'FHMemberships.php' || is_page_template('FHMemberships.php') || 
        $page_template === 'page-treatments-overview.php' || is_page_template('page-treatments-overview.php')) {
        $css_path = get_stylesheet_directory() . '/css/membership-v2.css';
        $css_url = get_stylesheet_directory_uri() . '/css/membership-v2.css';
        $js_path = get_stylesheet_directory() . '/js/membership-v2.js';
        $js_url = get_stylesheet_directory_uri() . '/js/membership-v2.js';
        
        if (file_exists($css_path)) {
            wp_enqueue_style('tempus-membership-v2-styles', $css_url, array('tempus-main-styles'), CHILD_THEME_VERSION);
        }
        
        if (file_exists($js_path)) {
            wp_enqueue_script('tempus-membership-v2-scripts', $js_url, array('jquery'), CHILD_THEME_VERSION, true);
        }
        
        // Assets loaded successfully
    }
}

// Method 2: Genesis-specific hook
add_action('genesis_meta', 'load_membership_v2_assets_genesis');
function load_membership_v2_assets_genesis() {
    if (!is_page()) {
        return;
    }
    
    global $post;
    $page_template = get_page_template_slug($post->ID ?? 0);
    
    // Support both membership and treatments overview templates
    if ($page_template === 'FHMemberships.php' || is_page_template('FHMemberships.php') || 
        $page_template === 'page-treatments-overview.php' || is_page_template('page-treatments-overview.php')) {
        add_action('wp_enqueue_scripts', function() {
            $css_path = get_stylesheet_directory() . '/css/membership-v2.css';
            $css_url = get_stylesheet_directory_uri() . '/css/membership-v2.css';
            $js_path = get_stylesheet_directory() . '/js/membership-v2.js';
            $js_url = get_stylesheet_directory_uri() . '/js/membership-v2.js';
            
            if (file_exists($css_path)) {
                wp_enqueue_style('tempus-membership-v2-genesis', $css_url, array('tempus-main-styles'), CHILD_THEME_VERSION);
            }
            
            if (file_exists($js_path)) {
                wp_enqueue_script('tempus-membership-v2-genesis', $js_url, array('jquery'), CHILD_THEME_VERSION, true);
            }
            
            // Assets loaded successfully
        }, 25);
    }
}

// Method 3: Template-specific loading (fallback)
add_action('template_redirect', 'load_membership_v2_assets_template_redirect');
function load_membership_v2_assets_template_redirect() {
    if (is_page_template('FHMemberships.php')) {
        add_action('wp_enqueue_scripts', function() {
            $css_path = get_stylesheet_directory() . '/css/membership-v2.css';
            $css_url = get_stylesheet_directory_uri() . '/css/membership-v2.css';
            $js_path = get_stylesheet_directory() . '/js/membership-v2.js';
            $js_url = get_stylesheet_directory_uri() . '/js/membership-v2.js';
            
            if (file_exists($css_path)) {
                wp_enqueue_style('tempus-membership-v2-redirect', $css_url, array('tempus-main-styles'), CHILD_THEME_VERSION);
            }
            
            if (file_exists($js_path)) {
                wp_enqueue_script('tempus-membership-v2-redirect', $js_url, array('jquery'), CHILD_THEME_VERSION, true);
            }
            
            // Assets loaded successfully
        }, 30);
    }
}

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) ); // Added standard array

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 5-column footer widgets (as original)
add_theme_support( 'genesis-footer-widgets', 5 );
/*
// * Add support for accessibility features
add_theme_support( 'genesis-accessibility', array( 'skip-links', 'search-form', 'drop-down-menu', 'headings' ) );*/

//* Add support for after entry widget
add_theme_support( 'genesis-after-entry-widget-area' );


//* * ********************
/* Custom Post Type Registrations (Keep existing)
* ******************* */
add_action('init', 'theme_custom_init');
function theme_custom_init() {

   /* Treatments Post Type  */
   $labels_treatment = array(
       'name' => _x('Treatments', 'post type general name', 'tempusbelgravia'),
       'singular_name' => _x('Treatment', 'post type singular name', 'tempusbelgravia'),
       'add_new' => _x('Add New', 'Treatment', 'tempusbelgravia'),
       'add_new_item' => __('Add New Treatment', 'tempusbelgravia'),
       'edit_item' => __('Edit Treatment', 'tempusbelgravia'),
       'new_item' => __('New Treatment', 'tempusbelgravia'),
       'all_items' => __('All Treatments', 'tempusbelgravia'),
       'view_item' => __('View Treatment', 'tempusbelgravia'), // Corrected label
       'search_items' => __('Search Treatments', 'tempusbelgravia'), // Corrected label
       'not_found' => __('No Treatments found', 'tempusbelgravia'),
       'not_found_in_trash' => __('No Treatments found in Trash', 'tempusbelgravia'),
       'parent_item_colon' => '',
       'menu_name' => __('Treatments', 'tempusbelgravia') // Added text domain
   );
   $args_treatment = array(
       'labels' => $labels_treatment,
       'public' => true,
       'publicly_queryable' => true,
       'show_ui' => true,
       'show_in_menu' => true,
       'query_var' => true,
       'rewrite' => array( 'slug' => 'treatment' ), // Define a slug
       'capability_type' => 'post',
       'has_archive' => true,
       'hierarchical' => false,
       'menu_position' => 20, // Example position
       'menu_icon' => 'dashicons-heart', // Example icon
       'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'page-attributes') // Added page-attributes for ordering
   );
   register_post_type('treatment', $args_treatment);

   register_taxonomy(
       'treatment_category',
       'treatment',
       array(
           'hierarchical' => true,
           'label' => __('Treatment Categories', 'tempusbelgravia'), // Plural label
           'singular_label' => __('Treatment Category', 'tempusbelgravia'), // Singular label
           'rewrite' => array( 'slug' => 'treatment-category' ), // Define slug
           'query_var' => true,
           'show_admin_column' => true, // Show in admin list table
           'show_ui'           => true, // Ensure it shows in admin UI
           'show_in_nav_menus' => true, // Allow adding to menus
       )
   );

	/*Team Post Type*/
	$labels_team = array(
        'name' => _x('Team Members', 'post type general name', 'tempusbelgravia'), // Changed name
        'singular_name' => _x('Team Member', 'post type singular name', 'tempusbelgravia'), // Changed name
        'add_new' => _x('Add New', 'Team Member', 'tempusbelgravia'),
        'add_new_item' => __('Add New Team Member', 'tempusbelgravia'),
        'edit_item' => __('Edit Team Member', 'tempusbelgravia'),
        'new_item' => __('New Team Member', 'tempusbelgravia'),
        'all_items' => __('All Team Members', 'tempusbelgravia'),
        'view_item' => __('View Team Member', 'tempusbelgravia'), // Corrected label
        'search_items' => __('Search Team Members', 'tempusbelgravia'), // Corrected label
        'not_found' => __('No Team Members found', 'tempusbelgravia'),
        'not_found_in_trash' => __('No Team Members found in Trash', 'tempusbelgravia'),
        'parent_item_colon' => '',
        'menu_name' => __('Team', 'tempusbelgravia') // Menu name
    );
    $args_team = array(
        'labels' => $labels_team,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'team' ), // Define slug
        'capability_type' => 'post',
        'has_archive' => true, // Or false if you don't have a team archive page
        'hierarchical' => false,
        'menu_position' => 21, // Example position
        'menu_icon' => 'dashicons-groups', // Example icon
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'page-attributes')
    );
    register_post_type('teams', $args_team); // Post type key remains 'teams'

    register_taxonomy(
        'team_category',
        'teams', // post type key
        array(
            'hierarchical' => true,
            'label' => __('Team Categories', 'tempusbelgravia'), // Plural label
            'singular_label' => __('Team Category', 'tempusbelgravia'), // Singular label
            'rewrite' => array( 'slug' => 'team-category' ), // Define slug
            'query_var' => true,
            'show_admin_column' => true,
            'show_ui'           => true,
            'show_in_nav_menus' => true,
        )
    );

	/* Post-Press Post Type */
	$labels_press = array(
        'name' => _x('Press Mentions', 'post type general name', 'tempusbelgravia'), // Changed name
        'singular_name' => _x('Press Mention', 'post type singular name', 'tempusbelgravia'), // Changed name
        'add_new' => _x('Add New', 'Press Mention', 'tempusbelgravia'),
        'add_new_item' => __('Add New Press Mention', 'tempusbelgravia'),
        'edit_item' => __('Edit Press Mention', 'tempusbelgravia'),
        'new_item' => __('New Press Mention', 'tempusbelgravia'),
        'all_items' => __('All Press Mentions', 'tempusbelgravia'),
        'view_item' => __('View Press Mention', 'tempusbelgravia'), // Corrected label
        'search_items' => __('Search Press Mentions', 'tempusbelgravia'), // Corrected label
        'not_found' => __('No Press Mentions found', 'tempusbelgravia'),
        'not_found_in_trash' => __('No Press Mentions found in Trash', 'tempusbelgravia'),
        'parent_item_colon' => '',
        'menu_name' => __('Press', 'tempusbelgravia') // Menu name
    );
    $args_press = array(
        'labels' => $labels_press,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'press' ), // Define slug
        'capability_type' => 'post',
        'has_archive' => true, // Or false if you don't have a press archive page
        'hierarchical' => false,
        'menu_position' => 22, // Example position
        'menu_icon' => 'dashicons-megaphone', // Example icon
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt')
    );
    register_post_type('post-press', $args_press); // Post type key remains 'post-press'


	 /* Concerns Post Type */
   $labels_concern = array(
       'name' => _x('Concerns', 'post type general name', 'tempusbelgravia'),
       'singular_name' => _x('Concern', 'post type singular name', 'tempusbelgravia'),
       'add_new' => _x('Add New', 'Concern', 'tempusbelgravia'),
       'add_new_item' => __('Add New Concern', 'tempusbelgravia'),
       'edit_item' => __('Edit Concern', 'tempusbelgravia'),
       'new_item' => __('New Concern', 'tempusbelgravia'),
       'all_items' => __('All Concerns', 'tempusbelgravia'),
       'view_item' => __('View Concern', 'tempusbelgravia'), // Corrected label
       'search_items' => __('Search Concerns', 'tempusbelgravia'), // Corrected label
       'not_found' => __('No Concerns found', 'tempusbelgravia'),
       'not_found_in_trash' => __('No Concerns found in Trash', 'tempusbelgravia'),
       'parent_item_colon' => '',
       'menu_name' => __('Concerns', 'tempusbelgravia')
   );
   $args_concern = array(
       'labels' => $labels_concern,
       'public' => true,
       'publicly_queryable' => true,
       'show_ui' => true,
       'show_in_menu' => true,
       'query_var' => true,
       'rewrite' => array( 'slug' => 'concern' ), // Define slug
       'capability_type' => 'post',
       'has_archive' => true,
       'hierarchical' => false,
       'menu_position' => 23, // Example position
       'menu_icon' => 'dashicons-warning', // Example icon
       'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt')
   );
   register_post_type('concern', $args_concern);


   /* Conditions Post Type  */
   $labels_condition = array(
       'name' => _x('Conditions', 'post type general name', 'tempusbelgravia'),
       'singular_name' => _x('Condition', 'post type singular name', 'tempusbelgravia'),
       'add_new' => _x('Add New', 'Condition', 'tempusbelgravia'),
       'add_new_item' => __('Add New Condition', 'tempusbelgravia'),
       'edit_item' => __('Edit Condition', 'tempusbelgravia'),
       'new_item' => __('New Condition', 'tempusbelgravia'),
       'all_items' => __('All Conditions', 'tempusbelgravia'),
       'view_item' => __('View Condition', 'tempusbelgravia'), // Corrected label
       'search_items' => __('Search Conditions', 'tempusbelgravia'), // Corrected label
       'not_found' => __('No Conditions found', 'tempusbelgravia'),
       'not_found_in_trash' => __('No Conditions found in Trash', 'tempusbelgravia'),
       'parent_item_colon' => '',
       'menu_name' => __('Conditions', 'tempusbelgravia')
   );
   $args_condition = array(
       'labels' => $labels_condition,
       'public' => true,
       'publicly_queryable' => true,
       'show_ui' => true,
       'show_in_menu' => true,
       'query_var' => true,
       'rewrite' => array( 'slug' => 'condition' ), // Define slug
       'capability_type' => 'post',
       'has_archive' => true,
       'hierarchical' => false,
       'menu_position' => 24, // Example position
       'menu_icon' => 'dashicons-clipboard', // Example icon
       'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt')
   );
   register_post_type('condition', $args_condition);

	register_taxonomy(
        'condition_category',
        'condition',
        array(
            'hierarchical' => true,
            'label' => __('Condition Categories', 'tempusbelgravia'), // Plural label
            'singular_label' => __('Condition Category', 'tempusbelgravia'), // Singular label
            'rewrite' => array( 'slug' => 'condition-category' ), // Define slug
            'query_var' => true,
            'show_admin_column' => true,
            'show_ui'           => true,
            'show_in_nav_menus' => true,
        )
	);
}



/* * ********************
 * WooCommerce Support & Modifications (Keep existing)
 * ******************* */

// Add WooCommerce support
add_theme_support( 'woocommerce' );

// Add WooCommerce content wrappers for Genesis
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

add_action( 'woocommerce_before_main_content', 'tempus_woocommerce_wrapper_start', 10 );
add_action( 'woocommerce_after_main_content', 'tempus_woocommerce_wrapper_end', 10 );

function tempus_woocommerce_wrapper_start() {
    echo '<main class="content woocommerce-main">';
}

function tempus_woocommerce_wrapper_end() {
    echo '</main>';
}

// To change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' );
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'ADD TO BASKET', 'tempusbelgravia' ); // Added text domain
}

// To change add to cart text on product archives(Collection) page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );
function woocommerce_custom_product_add_to_cart_text() {
    return __( 'ADD TO BASKET', 'tempusbelgravia' ); // Added text domain
}

// Move WooCommerce checkout coupon form (Keep existing)
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
add_action( 'woocommerce_review_order_after_cart_contents', 'woocommerce_checkout_coupon_form_custom' );
function woocommerce_checkout_coupon_form_custom() {
    // Check if coupons are enabled before showing the form
    if ( wc_coupons_enabled() ) {
        echo '<tr class="coupon-form"><td colspan="2">';
        wc_get_template(
            'checkout/form-coupon.php',
            array(
                'checkout' => WC()->checkout(),
            )
        );
        echo '</td></tr>'; // Corrected closing tags
    }
}

// Plus Minus Quantity Buttons (Keep existing)
add_action( 'woocommerce_after_quantity_input_field', 'bbloomer_display_quantity_plus' );
function bbloomer_display_quantity_plus() {
   // Ensure FontAwesome is loaded or use alternative icons/SVG
   echo '<button type="button" class="plus" aria-label="' . esc_attr__('Increase quantity', 'tempusbelgravia') . '"><i class="fas fa-chevron-right" aria-hidden="true"></i></button>'; // Use fas for solid icons in FA 5+
}

add_action( 'woocommerce_before_quantity_input_field', 'bbloomer_display_quantity_minus' );
function bbloomer_display_quantity_minus() {
   // Ensure FontAwesome is loaded or use alternative icons/SVG
   echo '<button type="button" class="minus" aria-label="' . esc_attr__('Decrease quantity', 'tempusbelgravia') . '"><i class="fas fa-chevron-left" aria-hidden="true"></i></button>'; // Use fas for solid icons in FA 5+
}

// Note: Quantity button JavaScript has been moved to js/woocommerce.js

// Add AJAX handler for cart count updates
add_action( 'wp_ajax_get_cart_count', 'tempus_get_cart_count' );
add_action( 'wp_ajax_nopriv_get_cart_count', 'tempus_get_cart_count' );
function tempus_get_cart_count() {
    if ( function_exists( 'WC' ) ) {
        echo WC()->cart->get_cart_contents_count();
    } else {
        echo '0';
    }
    wp_die();
}

// Output product categories before shop loop with improved styling
add_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_categories', 15 );
function woocommerce_output_all_categories() {
    // Get uncategorized term ID to exclude it
    $uncategorized_term = get_term_by( 'slug', 'uncategorized', 'product_cat' );
    $exclude_id = $uncategorized_term ? $uncategorized_term->term_id : 0;

    $terms = get_terms( array(
        'taxonomy' => 'product_cat',
        'hide_empty' => true,
        'count' => true,
        'exclude' => array($exclude_id),
        'orderby' => 'name',
        'order' => 'ASC'
    ) );

    if ( $terms && ! is_wp_error( $terms ) ) {
        $current_cat = get_queried_object();
        $current_cat_id = is_a($current_cat, 'WP_Term') ? $current_cat->term_id : 0;
        
        echo '<div class="product-categories">';
        
        // Add "All" link
        $shop_page_url = get_permalink( wc_get_page_id( 'shop' ) );
        $active_class = ( is_shop() && ! is_product_category() ) ? ' class="active"' : '';
        echo '<a href="' . esc_url($shop_page_url) . '"' . $active_class . '>' . esc_html__('All Products', 'tempusbelgravia') . '</a>';

        foreach ( $terms as $term ) {
            $active_class = ( $current_cat_id === $term->term_id ) ? ' class="active"' : '';
            echo '<a href="' . esc_url(get_term_link( $term )) . '"' . $active_class . '>' . esc_html($term->name) . '<span class="product-count">' . esc_html($term->count) . '</span></a>';
        }
        
        echo '</div>';
    }
}

// Improve WooCommerce product grid display
add_filter( 'loop_shop_columns', 'tempus_loop_columns', 999 );
function tempus_loop_columns() {
    return 3; // Default to 3 columns on shop pages
}

// Add support for WooCommerce gallery features
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

// Remove WooCommerce default styles to use our custom ones
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

// Customize WooCommerce breadcrumbs
add_filter( 'woocommerce_breadcrumb_defaults', 'tempus_woocommerce_breadcrumbs' );
function tempus_woocommerce_breadcrumbs() {
    return array(
        'delimiter'   => ' <i class="fas fa-chevron-right"></i> ',
        'wrap_before' => '<nav class="woocommerce-breadcrumb" aria-label="breadcrumb">',
        'wrap_after'  => '</nav>',
        'before'      => '',
        'after'       => '',
        'home'        => __( 'Home', 'tempusbelgravia' ),
    );
}


/* * ********************
 * Shortcodes (Keep existing)
 * ******************* */
function fulldate_function() {
    // Consider using WordPress date formatting for localization
    return date_i18n('j F'); // Example: '17 July'
}
add_shortcode('fulldate', 'fulldate_function');

function wpb_comment_count() {
    $comments_count = wp_count_comments();
    // Consider adding context, e.g., "Total Approved Comments:"
    $message = esc_html( $comments_count->approved );
    return $message;
}
add_shortcode('wpb_total_comments','wpb_comment_count');

// Enable shortcodes in text widgets (Keep existing)
add_filter('widget_text','do_shortcode');


/* * ********************
 * Template Registration (Add this section)
 * ******************* */
add_filter( 'theme_page_templates', 'tempus_add_page_templates' );
function tempus_add_page_templates( $templates ) {
    $templates['home.php'] = __( 'New Home Integrated', 'tempusbelgravia' );
    $templates['page-memberships.php'] = __( 'Memberships Page', 'tempusbelgravia' );
    $templates['FHMemberships.php'] = __( 'Membership Page Template V2 (Refactored)', 'tempusbelgravia' );
    // Add other custom templates here if needed
    // $templates['your-other-template.php'] = __( 'Your Other Template Name', 'tempusbelgravia' );
    return $templates;
}


/* * ********************
 * Modern Header & Footer V2 Setup
 * ******************* */

// Include custom navigation walker
require_once get_stylesheet_directory() . '/includes/class-custom-walker.php';

// Register navigation menus for modern header
add_action( 'after_setup_theme', 'tempus_register_nav_menus' );
function tempus_register_nav_menus() {
    register_nav_menus( array(
        'primary-menu-v2' => __( 'Primary Navigation V2 (Modern Header)', 'tempusbelgravia' ),
        'footer-menu-v2' => __( 'Footer Navigation V2', 'tempusbelgravia' ),
    ) );
}

// Add theme support for custom logo
add_theme_support( 'custom-logo', array(
    'height'      => 50,
    'width'       => 200,
    'flex-height' => true,
    'flex-width'  => true,
) );

// Enqueue modern header/footer JavaScript
add_action( 'wp_enqueue_scripts', 'tempus_enqueue_header_navigation_js' );
function tempus_enqueue_header_navigation_js() {
    // Main header/footer functionality
    wp_enqueue_script( 
        'tempus-header-navigation', 
        get_stylesheet_directory_uri() . '/js/header-navigation.js', 
        array( 'jquery' ), 
        CHILD_THEME_VERSION, 
        true 
    );
    
    // Header/footer initialization
    wp_enqueue_script( 
        'tempus-init-header-footer', 
        get_stylesheet_directory_uri() . '/js/init-header-footer.js', 
        array( 'jquery' ), 
        CHILD_THEME_VERSION, 
        true 
    );
    
    // Fix body padding issue
    wp_enqueue_script( 
        'tempus-fix-body-padding', 
        get_stylesheet_directory_uri() . '/js/fix-body-padding.js', 
        array(), 
        CHILD_THEME_VERSION, 
        false // Load in header for immediate execution
    );
    
    // Remove body padding script - loads with high priority
    wp_enqueue_script( 
        'tempus-remove-body-padding', 
        get_stylesheet_directory_uri() . '/js/remove-body-padding.js', 
        array(), // No dependencies - runs independently
        CHILD_THEME_VERSION, 
        false // Load in head for early execution
    );
}

// Helper function for fallback navigation menu (matching your site structure)
function tempus_fallback_menu() {
    echo '<ul class="primary-menu-items">';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'tempusbelgravia' ) . '</a></li>';
    // Memberships dropdown
    echo '<li class="menu-item-has-children-v2"><a href="' . esc_url( home_url( '/memberships/' ) ) . '">' . esc_html__( 'Memberships', 'tempusbelgravia' ) . ' <i class="fas fa-chevron-down menu-arrow" aria-hidden="true"></i></a>';
    echo '<ul class="sub-menu-v2">';
    echo '<li><a href="' . esc_url( home_url( '/memberships/' ) ) . '">' . esc_html__( 'FH Memberships', 'tempusbelgravia' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/tempus-packages/' ) ) . '">' . esc_html__( 'Tempus Packages', 'tempusbelgravia' ) . '</a></li>';
    echo '</ul></li>';
    echo '<li><a href="' . esc_url( home_url( '/contact/' ) ) . '">' . esc_html__( 'Contact', 'tempusbelgravia' ) . '</a></li>';
    
    // Team dropdown
    echo '<li class="menu-item-has-children-v2"><a href="#">' . esc_html__( 'Team', 'tempusbelgravia' ) . ' <i class="fas fa-chevron-down menu-arrow" aria-hidden="true"></i></a>';
    echo '<ul class="sub-menu-v2">';
    echo '<li><a href="' . esc_url( home_url( '/team_category/doctors/' ) ) . '">' . esc_html__( 'Doctors', 'tempusbelgravia' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/team_category/specialist-practitioners/' ) ) . '">' . esc_html__( 'Practitioners', 'tempusbelgravia' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/team_category/patient-liaison-team/' ) ) . '">' . esc_html__( 'Admin Team', 'tempusbelgravia' ) . '</a></li>';
    echo '</ul></li>';
    
    // Treatments dropdown
    echo '<li class="menu-item-has-children-v2"><a href="' . esc_url( home_url( '/treatments/' ) ) . '">' . esc_html__( 'Treatments', 'tempusbelgravia' ) . ' <i class="fas fa-chevron-down menu-arrow" aria-hidden="true"></i></a>';
    echo '<ul class="sub-menu-v2">';
    echo '<li><a href="' . esc_url( home_url( '/treatment_category/medical-aesthetics/' ) ) . '">' . esc_html__( 'Medical Aesthetics', 'tempusbelgravia' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/treatment_category/surgical-services/' ) ) . '">' . esc_html__( 'Surgical Services', 'tempusbelgravia' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/treatment_category/dermatology/' ) ) . '">' . esc_html__( 'Dermatology', 'tempusbelgravia' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/treatment_category/facial-aesthetics/' ) ) . '">' . esc_html__( 'Facial Aesthetics', 'tempusbelgravia' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/body-treatment/' ) ) . '">' . esc_html__( 'Body Treatments', 'tempusbelgravia' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/treatment_category/nutrition-and-functional-medicine/' ) ) . '">' . esc_html__( 'Nutrition and Functional Medicine', 'tempusbelgravia' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/treatment_category/laser-treatments/' ) ) . '">' . esc_html__( 'Laser Hair Removal', 'tempusbelgravia' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/treatment_category/iv-infusions/' ) ) . '">' . esc_html__( 'IV Infusions', 'tempusbelgravia' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/certified-packages/' ) ) . '">' . esc_html__( 'Certified Packages', 'tempusbelgravia' ) . '</a></li>';
    echo '</ul></li>';
    
    echo '<li><a href="' . esc_url( home_url( '/conditions-treated-2/' ) ) . '">' . esc_html__( 'Conditions Treated', 'tempusbelgravia' ) . '</a></li>';
    
    
    echo '<li><a href="' . esc_url( home_url( '/journal/' ) ) . '">' . esc_html__( 'Journal', 'tempusbelgravia' ) . '</a></li>';
    echo '</ul>';
}


/* * ********************
 * Helper Functions (Optional - Add if needed)
 * ******************* */

// Example: Remove Genesis default loop (if your template handles the loop entirely)
// add_action( 'genesis_before', 'tempus_remove_default_loop_for_template' );
// function tempus_remove_default_loop_for_template() {
//     if ( is_page_template( 'page_new_home_integrated.php' ) ) {
//         remove_action( 'genesis_loop', 'genesis_do_loop' );
//         // Add your custom loop function hook here if needed
//         // add_action( 'genesis_loop', 'tempus_new_home_loop_function' );
//     }
// }

// Example: Add a body class for the specific template
// add_filter( 'body_class', 'tempus_add_body_class_for_template' );
// function tempus_add_body_class_for_template( $classes ) {
//     if ( is_page_template( 'page_new_home_integrated.php' ) ) {
//         $classes[] = 'new-home-page-integrated';
//     }
//     return $classes;
// }

// Prevent Genesis from adding body padding for sticky header
add_action( 'wp_head', 'tempus_remove_genesis_sticky_header_padding', 999 );
function tempus_remove_genesis_sticky_header_padding() {
    ?>
    <style>
        /* Force remove any body padding that Genesis might add */
        body { padding-top: 0 !important; }
        body[style*="padding-top"] { padding-top: 0 !important; }
    </style>
    <script>
        // Remove padding as soon as possible
        document.addEventListener('DOMContentLoaded', function() {
            document.body.style.paddingTop = '0';
            document.body.style.setProperty('padding-top', '0', 'important');
        });
        // Check again after window load
        window.addEventListener('load', function() {
            document.body.style.paddingTop = '0';
            document.body.style.setProperty('padding-top', '0', 'important');
        });
    </script>
    <?php
}

// Disable Genesis sticky header functionality if it exists
add_action( 'init', 'tempus_disable_genesis_sticky_header' );
function tempus_disable_genesis_sticky_header() {
    // Remove Genesis sticky header scripts if they exist
    remove_action( 'wp_enqueue_scripts', 'genesis_enqueue_sticky_header_script' );
    remove_action( 'genesis_before', 'genesis_sticky_header_setup' );
    remove_action( 'genesis_header', 'genesis_sticky_header' );
}

/**
 * Render Treatment Category Taxonomy Template
 * Reusable function for all treatment category pages
 */
function render_treatment_category_template($category_title, $category_slug, $hero_image_url, $intro_content = array()) {
    ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/taxonomy.css">
    
    <main class="taxonomy-main">
        <!-- Hero Section -->
        <section class="taxonomy-hero fade-in">
            <div class="taxonomy-hero-image">
                <img src="<?php echo esc_url($hero_image_url); ?>" alt="<?php echo esc_attr($category_title); ?>">
            </div>
            <div class="taxonomy-hero-overlay"></div>
            <div class="taxonomy-hero-content">
                <h1><?php echo esc_html($category_title); ?></h1>
                <?php if (get_field('sub_text_for_banner', 'treatment_category_' . get_queried_object_id())) : ?>
                    <p class="taxonomy-hero-subtitle"><?php echo get_field('sub_text_for_banner', 'treatment_category_' . get_queried_object_id()); ?></p>
                <?php endif; ?>
                <div class="hero-cta">
                    <a href="#book-consultation" class="cta-button">Book Your Appointment Now</a>
                </div>
            </div>
        </section>

        <!-- Main Content Section -->
        <section class="taxonomy-content">
            <div class="taxonomy-container">
                <!-- Introduction -->
                <?php if (!empty($intro_content)) : ?>
                <div class="taxonomy-intro fade-in-up">
                    <?php if (isset($intro_content['title'])) : ?>
                        <h2><?php echo esc_html($intro_content['title']); ?></h2>
                    <?php endif; ?>
                    <?php if (isset($intro_content['paragraphs'])) : ?>
                        <?php foreach ($intro_content['paragraphs'] as $paragraph) : ?>
                            <p><?php echo wp_kses_post($paragraph); ?></p>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <?php endif; ?>

                <!-- Treatments Grid -->
                <div class="taxonomy-grid treatments-grid">
                    <?php
                    $args = array(
                        'post_type' => 'treatment',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'posts_per_page' => 50,
                        'treatment_category' => $category_slug
                    );
                    
                    $treatments = new WP_Query($args);
                    
                    if ($treatments->have_posts()) :
                        while ($treatments->have_posts()) : $treatments->the_post();
                    ?>
                        <article class="taxonomy-card fade-in-up">
                            <a href="<?php the_permalink(); ?>" class="card-link">
                                <div class="card-image">
                                    <?php if (get_field('_thumb_image')) : ?>
                                        <img src="<?php echo get_field('_thumb_image'); ?>" alt="<?php the_title(); ?>">
                                    <?php elseif (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large'); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/placeholder-treatment.jpg" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="card-content">
                                    <h3 class="card-title"><?php the_title(); ?></h3>
                                    <?php if (get_field('description_for_treatment')) : ?>
                                        <p class="card-description"><?php echo wp_trim_words(get_field('description_for_treatment'), 25); ?></p>
                                    <?php endif; ?>
                                    <?php if (get_field('price_of_treatment')) : ?>
                                        <p class="card-price">From £<?php echo get_field('price_of_treatment'); ?>.00</p>
                                    <?php endif; ?>
                                </div>
                            </a>
                            <div class="card-actions">
                                <a href="#book-consultation" class="cta-button-secondary">Book Now</a>
                            </div>
                        </article>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                    ?>
                        <div class="no-treatments">
                            <p>No treatments found in this category.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <!-- Additional Content Section -->
        <?php if (isset($intro_content['additional']) && !empty($intro_content['additional'])) : ?>
        <section class="taxonomy-additional">
            <div class="taxonomy-container">
                <?php foreach ($intro_content['additional'] as $section) : ?>
                    <?php if (isset($section['title'])) : ?>
                        <h2 class="fade-in-up" <?php echo isset($section['style']) ? 'style="' . esc_attr($section['style']) . '"' : ''; ?>><?php echo esc_html($section['title']); ?></h2>
                    <?php endif; ?>
                    <?php if (isset($section['paragraphs'])) : ?>
                        <?php foreach ($section['paragraphs'] as $paragraph) : ?>
                            <p class="fade-in-up"><?php echo wp_kses_post($paragraph); ?></p>
                        <?php endforeach; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </section>
        <?php endif; ?>
    </main>

    <script>
    // Intersection Observer for animations
    document.addEventListener('DOMContentLoaded', function() {
        const animatedElements = document.querySelectorAll('.fade-in, .fade-in-up');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });
        
        animatedElements.forEach(el => {
            el.style.animationPlayState = 'paused';
            observer.observe(el);
        });
    });
    </script>
    <?php
}

/**
 * Render Team Category Taxonomy Template
 * Reusable function for all team category pages
 */
function render_team_category_template($category_title, $category_slug, $hero_image_url, $intro_content = array()) {
    ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/taxonomy.css">
    
    <main class="taxonomy-main">
        <!-- Hero Section -->
        <section class="taxonomy-hero fade-in">
            <div class="taxonomy-hero-image">
                <img src="<?php echo esc_url($hero_image_url); ?>" alt="<?php echo esc_attr($category_title); ?>">
            </div>
            <div class="taxonomy-hero-overlay"></div>
            <div class="taxonomy-hero-content">
                <h1><?php echo esc_html($category_title); ?></h1>
                <?php if (isset($intro_content['subtitle'])) : ?>
                    <p class="taxonomy-hero-subtitle"><?php echo esc_html($intro_content['subtitle']); ?></p>
                <?php endif; ?>
            </div>
        </section>

        <!-- Main Content Section -->
        <section class="taxonomy-content">
            <div class="taxonomy-container">
                <!-- Introduction -->
                <?php if (!empty($intro_content) && isset($intro_content['paragraphs'])) : ?>
                <div class="taxonomy-intro fade-in-up">
                    <?php foreach ($intro_content['paragraphs'] as $paragraph) : ?>
                        <p><?php echo wp_kses_post($paragraph); ?></p>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <!-- Team Members Grid -->
                <div class="taxonomy-grid team-grid <?php echo $category_slug === 'Doctors' ? 'doctors' : ''; ?>">
                    <?php
                    $args = array(
                        'post_type' => 'teams',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'posts_per_page' => 50,
                        'team_category' => $category_slug
                    );
                    
                    $team_members = new WP_Query($args);
                    
                    if ($team_members->have_posts()) :
                        while ($team_members->have_posts()) : $team_members->the_post();
                    ?>
                        <article class="taxonomy-card team-member-card fade-in-up" data-member-id="<?php the_ID(); ?>">
                            <div class="card-image">
                                <?php 
                                $member_video = get_field('member_video');
                                if ($member_video) : ?>
                                    <video width="100%" height="100%" controls loop muted>
                                        <source src="<?php echo esc_url($member_video); ?>" type="video/mp4">
                                    </video>
                                <?php elseif (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large'); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/placeholder-team.jpg" alt="<?php the_title(); ?>">
                                <?php endif; ?>
                            </div>
                            <div class="card-content">
                                <h3 class="card-title"><?php the_title(); ?></h3>
                                <?php if (get_field('doctor_specialization')) : ?>
                                    <p class="card-subtitle"><?php echo get_field('doctor_specialization'); ?></p>
                                <?php endif; ?>
                                <div class="card-excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                                <button class="cta-button-secondary view-profile" data-member-id="<?php the_ID(); ?>">View Profile</button>
                            </div>
                            
                            <!-- Team Social Links -->
                            <?php 
                            $fb = get_field('facebook');
                            $insta = get_field('insta');
                            $tw = get_field('twitter');
                            if ($fb || $insta || $tw) : ?>
                            <div class="team-social-links">
                                <?php if ($fb) : ?>
                                    <a href="<?php echo esc_url($fb); ?>" class="social-link" target="_blank" rel="noopener noreferrer">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if ($insta) : ?>
                                    <a href="<?php echo esc_url($insta); ?>" class="social-link" target="_blank" rel="noopener noreferrer">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if ($tw) : ?>
                                    <a href="<?php echo esc_url($tw); ?>" class="social-link" target="_blank" rel="noopener noreferrer">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                        </article>

                        <!-- Modal Popup for Team Member -->
                        <div class="team-popup" id="popup-<?php the_ID(); ?>">
                            <div class="popup-content">
                                <button class="popup-close" aria-label="Close popup">
                                    <i class="fas fa-times"></i>
                                </button>
                                <div class="popup-body">
                                    <div class="popup-left">
                                        <?php if ($member_video) : ?>
                                            <video width="100%" height="100%" controls loop muted>
                                                <source src="<?php echo esc_url($member_video); ?>" type="video/mp4">
                                            </video>
                                        <?php elseif (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('large'); ?>
                                        <?php endif; ?>
                                        
                                        <?php if ($fb || $insta || $tw) : ?>
                                        <div class="team-social-links">
                                            <?php if ($fb) : ?>
                                                <a href="<?php echo esc_url($fb); ?>" class="social-link" target="_blank" rel="noopener noreferrer">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            <?php endif; ?>
                                            <?php if ($insta) : ?>
                                                <a href="<?php echo esc_url($insta); ?>" class="social-link" target="_blank" rel="noopener noreferrer">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            <?php endif; ?>
                                            <?php if ($tw) : ?>
                                                <a href="<?php echo esc_url($tw); ?>" class="social-link" target="_blank" rel="noopener noreferrer">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="popup-right">
                                        <h2><?php the_title(); ?></h2>
                                        <?php if (get_field('doctor_specialization')) : ?>
                                            <p class="popup-specialization"><?php echo get_field('doctor_specialization'); ?></p>
                                        <?php endif; ?>
                                        <div class="popup-content-text">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                    ?>
                        <div class="no-team-members">
                            <p>No team members found in this category.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>

    <script>
    // Team Member Modal Functionality
    document.addEventListener('DOMContentLoaded', function() {
        // Intersection Observer for animations
        const animatedElements = document.querySelectorAll('.fade-in, .fade-in-up');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });
        
        animatedElements.forEach(el => {
            el.style.animationPlayState = 'paused';
            observer.observe(el);
        });

        // Modal functionality
        const viewProfileButtons = document.querySelectorAll('.view-profile');
        const popupCloseButtons = document.querySelectorAll('.popup-close');
        const popups = document.querySelectorAll('.team-popup');

        viewProfileButtons.forEach(button => {
            button.addEventListener('click', function() {
                const memberId = this.getAttribute('data-member-id');
                const popup = document.getElementById('popup-' + memberId);
                if (popup) {
                    popup.classList.add('active');
                    document.body.style.overflow = 'hidden';
                }
            });
        });

        popupCloseButtons.forEach(button => {
            button.addEventListener('click', function() {
                const popup = this.closest('.team-popup');
                if (popup) {
                    popup.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        });

        popups.forEach(popup => {
            popup.addEventListener('click', function(e) {
                if (e.target === this) {
                    this.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        });

        // Close on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                const activePopup = document.querySelector('.team-popup.active');
                if (activePopup) {
                    activePopup.classList.remove('active');
                    document.body.style.overflow = '';
                }
            }
        });
    });
    </script>
    <?php
}

//* Newsletter Signup Handler
add_action("wp_ajax_newsletter_signup", "tempus_newsletter_signup");
add_action("wp_ajax_nopriv_newsletter_signup", "tempus_newsletter_signup");
function tempus_newsletter_signup() {
    // Verify nonce
    if (!wp_verify_nonce($_POST["newsletter_nonce_field"], "newsletter_nonce")) {
        wp_die("Security check failed");
    }
    
    // Validate email
    $email = sanitize_email($_POST["email"]);
    if (!is_email($email)) {
        wp_send_json_error(array("message" => "Please enter a valid email address."));
    }
    
    // Check if using a newsletter plugin
    $newsletter_saved = false;
    
    // Try to save with MailChimp for WordPress
    if (function_exists("mc4wp_get_api_v3")) {
        // Add to MailChimp
        $api = mc4wp_get_api_v3();
        try {
            $list_id = get_option("mc4wp_default_list_id");
            if ($list_id) {
                $api->add_list_member($list_id, array(
                    "email_address" => $email,
                    "status" => "subscribed"
                ));
                $newsletter_saved = true;
            }
        } catch (Exception $e) {
            // Continue to try other methods
        }
    }
    
    // If no plugin is available, save to options
    if (!$newsletter_saved) {
        $subscribers = get_option("tempus_newsletter_subscribers", array());
        if (!in_array($email, $subscribers)) {
            $subscribers[] = $email;
            update_option("tempus_newsletter_subscribers", $subscribers);
        }
        
        // Send notification email to admin
        $admin_email = get_option("admin_email");
        $subject = "New Newsletter Subscription - Tempus Belgravia";
        $message = "A new user has subscribed to the newsletter:

Email: " . $email . "

Date: " . date("Y-m-d H:i:s");
        wp_mail($admin_email, $subject, $message);
    }
    
    wp_send_json_success(array("message" => "Thank you for subscribing! We will keep you updated with our latest news."));
}

// Add AJAX handler script to footer
add_action("wp_footer", "tempus_newsletter_ajax_script");
function tempus_newsletter_ajax_script() {
    ?>
    <script>
    jQuery(document).ready(function($) {
        $(".newsletter-form").on("submit", function(e) {
            e.preventDefault();
            var form = $(this);
            var button = form.find(".submit-btn");
            var originalText = button.html();
            
            // Show loading state
            button.html("<span>Sending...</span>");
            button.prop("disabled", true);
            
            $.ajax({
                url: form.attr("action"),
                type: "POST",
                data: form.serialize(),
                success: function(response) {
                    if (response.success) {
                        form.html("<div style=\"color: white; padding: 20px; text-align: center;\">" + response.data.message + "</div>");
                    } else {
                        alert(response.data.message);
                        button.html(originalText);
                        button.prop("disabled", false);
                    }
                },
                error: function() {
                    alert("An error occurred. Please try again later.");
                    button.html(originalText);
                    button.prop("disabled", false);
                }
            });
        });
    });
    </script>
    <?php
}
