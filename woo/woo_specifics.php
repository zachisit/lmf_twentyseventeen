<?php
/*
 * WooCommerce Declare WC Support For Theme
 */
function lmf_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'lmf_woocommerce_support' );

/*
 * Hide WooCommerce Breadcrumbs
 */
function lmf_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

/**
 * newsletter signup
 */
function action_woocommerce_after_single_product(  ) {
    //show template
    include_once "mailchimp_newsletter_signup.php";
};

// add the action
add_action( 'woocommerce_after_single_product', 'action_woocommerce_after_single_product', 10, 0 );

/**
 * WooCommerce add text to the thank you page
 */
function bbloomer_add_content_thankyou() {
    //include_once "thankyou_cta.html";//depcreiated
    echo do_shortcode('[post_order_cta]');
}

add_action( 'woocommerce_thankyou', 'bbloomer_add_content_thankyou', 5 );



/**
 * How many products to show on archive pages
 * @param $cols
 * @return int
 */
function new_loop_shop_per_page( $cols ) {
    $cols = 32;
    return $cols;
}

add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

