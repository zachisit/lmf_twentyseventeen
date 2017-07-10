<?php
/**
 * tater functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tater
 */

require_once "cpts/announcements.php";
require_once "cpts/homepage_slider.php";
require_once "woo/woo_specifics.php";

/*************************************************
 * hide wp admin bar
 *************************************************/
show_admin_bar( false );

/*************************************************
 * widgetize theme
 **************************************************/
function arphabet_widgets_init() {

    register_sidebar( array(
        'name' => 'Internal Sidebar',
        'id'   => 'internal-sidebar',
        'description'   => 'Widgetized sidebar for all internal pages.',
        'before_widget' => '<div class="widgetblock">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

    //additional sidebars here
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
    wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
    wp_enqueue_style( 'slick_carousel_css', 'https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css');
    wp_enqueue_style( 'slick_carousell_theme_css' , get_template_directory_uri() . '/slick-theme.css' );
    wp_enqueue_style( 'slick_css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css' );
    wp_enqueue_style( 'font_awesome_css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' );

    //js
    wp_enqueue_script( 'mobile-menu', get_template_directory_uri() . '/js/mobile_menu.js', array(), '20180428', true );
    wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/966d4a5f64.js', array(), '20170621' );
    wp_enqueue_script( 'slick_carousel_js', 'https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js', array(), '20170615', true );
    wp_enqueue_script( 'slick_carousel_declaractions_js', get_template_directory_uri() . '/js/slick_homepage_slider.js', array(), '20170629' );
    wp_enqueue_script( 'woo_commerce_title_icons', get_template_directory_uri() . '/js/woo_commerce_title_icons.js', array(), '20170615' );
    wp_enqueue_script( 'woo_commece_product_listing', get_template_directory_uri() . '/js/woo_commerce_product_listing.js', array(), '20170706', true );
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
 * Custom Breadcrumbs
 *************************************************
//for general pages
function lmf_site_breadcrumbs(){
    echo '<div id="breadcrumb"><p>You are here: <a href="'. get_home_url() .'" title="Home">Home</a> - <span class="italic">'. get_the_title() .'</span></p></div>';
}

add_action( 'woocommerce_before_single_product_summary', 'lmf_site_breadcrumbs', 1);

//for woocommerce pages
function lmf_woocommerce_breadcrumb(){


    $product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );

    if ( $product_cats && ! is_wp_error ( $product_cats ) ){

        $single_cat = array_shift( $product_cats );

        echo '<h2 itemprop="name" class="product_category_title"><span>'. $single_cat->name .'</span></h2>';

    }
}

add_action( 'woocommerce_breadcrumb', 'lmf_woocommerce_breadcrumb', 1);
*/