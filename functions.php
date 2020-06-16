<?php
/**
 * tater functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tater
 */
define('THEME_VERSION','3.90.173');
require_once "cpts/announcements.php";
require_once "cpts/homepage_slider.php";
require_once "woo/woo_specifics.php";
require_once 'woo/international_shipping_alert_product_settings.php';

/*************************************************
 * disable xml logins
*************************************************/
add_filter( 'xmlrpc_enabled', '__return_false' );

/*************************************************
 * hide wp admin bar
 *************************************************/
show_admin_bar( true );

/*************************************************
 * widgetize theme
 **************************************************/
function arphabet_widgets_init() {

    register_sidebar( [
        'name' => 'Internal Sidebar',
        'id'   => 'internal-sidebar',
        'description'   => 'Widgetized sidebar for all internal pages.',
        'before_widget' => '<div class="widgetblock">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ] );

    register_sidebar( [
        'name' => 'Header Search',
        'id'   => 'header-search',
        'description'   => 'Header search specifically',
        'before_widget' => '<div class="widgetblock">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ] );

    register_sidebar( [
        'name' => 'Product Archive Left',
        'id'   => 'product-archive-left',
        'description'   => 'Shown on left sidebar for Product archive screens',
        'before_widget' => '<div class="widgetblock">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ] );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

/*************************************************
 * declare theme menus
 **************************************************/
register_nav_menus( array(
    'header_menu' => 'Header Main Navigation Menu',
    'footer_menu' => 'Footer Main Navigation Menu',
) );

/*************************************************
 * css and js scripts
 **************************************************/
function lmf_theme_scripts() {
    //normalize
    wp_enqueue_script('jquery');

    //css
    //wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
    wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/style.css', [], THEME_VERSION );
    wp_enqueue_style( 'slick_carousel_css', 'https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css');
    wp_enqueue_style( 'slick_css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css' );
    wp_enqueue_style( 'font_awesome_css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' );

    //js
    wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/966d4a5f64.js', array(), '20170621' );
    wp_enqueue_script( 'slick_carousel_js', 'https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js', [], THEME_VERSION, true );
    wp_enqueue_script( 'slick_carousel_declaractions_js', get_template_directory_uri() . '/js/slick_homepage_slider.js', [], THEME_VERSION );
    wp_enqueue_script( 'woo_commerce_title_icons', get_template_directory_uri() . '/js/woo_commerce_title_icons.js', array(), THEME_VERSION );
    wp_enqueue_script( 'woo_commece_product_listing', get_template_directory_uri() . '/js/woo_commerce_product_listing.js', array(), THEME_VERSION, true );
    //wp_enqueue_script( 'google_plus_share', 'https://apis.google.com/js/platform.js', array(), '20170711', true );
    wp_enqueue_script( 'google_analytics_events', get_template_directory_uri() . '/js/google_analytics_events.js', THEME_VERSION, true );
    wp_enqueue_script( 'mobile-cat-menu-handler', get_template_directory_uri() . '/js/mobileCatMenu.js', time(), THEME_VERSION );

    if (is_page('checkout')) {
        wp_register_script( "checkout_international_alert", get_template_directory_uri() . '/js/checkout_international_alert.js', array('jquery') );
        wp_enqueue_script( 'checkout_international_alert', get_template_directory_uri() . '/js/checkout_international_alert.js', THEME_VERSION, true );
        wp_localize_script( 'checkout_international_alert', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));
        wp_enqueue_script( 'checkout_international_alert' );
    }
}
add_action( 'wp_enqueue_scripts', 'lmf_theme_scripts' );

//wordpress login landing page re-branding
function lmf_login_script() {
    wp_enqueue_style( 'login_custom_style', get_stylesheet_directory_uri(). '/login_view.css', ['login'] );
}

add_action( 'login_enqueue_scripts', 'lmf_login_script', 1 );

/*************************************************
 * featured images in Page Edit
 **************************************************/
add_theme_support( 'post-thumbnails' );


/*************************************************
 * Enable Product Opening In Lightbox
 **************************************************/
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );


/*************************************************
 * Social Share
 ************************************************/
function lmf_social_share() {
    include 'social_share.php';
}

//add_action('woocommerce_before_single_product', 'lmf_social_share', 1);

/**
 * Returns Newsletter Signup
 * used globally:
 * on sidebar widget
 * on single product underneath
 * on homepage
 */
function lmf_show_newsletter_signup() {
    include 'woo/mailchimp_newsletter_signup.php';
}
add_shortcode('show_newsletter_signup', 'lmf_show_newsletter_signup');


function checkout_international_alert() {
    echo json_encode([
        'status' => 200,
        'msg' => [
            'show_alert' => get_option('international_shipping_alert_radio'),
            'alert_message' => get_option('international_shipping_alert_message')
        ]
    ]);
    die();
}
add_action("wp_ajax_checkout_international_alert", "checkout_international_alert");
add_action("wp_ajax_nopriv_checkout_international_alert", "checkout_international_alert");

function headerUserStatusMessage(): string
{
    if (is_user_logged_in()) {
        return '<a href="/my-account-2/" title="My Account">My Account</a> | <a href="'.wp_logout_url().'">Logout</a>';
    } else {
        return'<a href="'.get_home_url().'/my-account-2/" title="'.get_bloginfo('name').' Customer Login">Customer Login</a>';
    }
}

/**
 * mega hack:
 * since we are not using <body <?=body_class()?>; none of the default
 * WC body classes are added to page
 * and all of my page styling is set to something other than body class
 * when i enable, it breaks all my styling
 * so for now we just hardcode the internal product layout and move on with life
 * 
 * this may be reason why when some WC updates it breaks the layout?
 **/
//@TODO: remove after further testing
function bbloomer_single_product_pages() {
 if ( is_product() ) { ?>
	<style>
		.content-area .site-main {
			width:75% !important;
		}
</style>
<?php }
}
//add_action( 'woocommerce_before_main_content', 'bbloomer_single_product_pages' );

//add_filter('woocommerce_available_payment_gateways','filter_gateways',1);
//function filter_gateways($gateways){
//    if (!current_user_can('administrator'))
//        unset($gateways['cod']);
//
//    return $gateways;
//}
