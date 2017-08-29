<?php
/*************************************************************
 * WooCommerce Change Number of Results Per Page
 *************************************************************/
function lmf_new_loop_shop_per_page( $cols ) {
    // $cols contains the current number of products per page based on the value stored on Options -> Reading
    // Return the number of products you wanna show per page.
    $cols = 16;
    return $cols;
}

add_filter( 'loop_shop_per_page', 'lmf_new_loop_shop_per_page', 20 );

/*************************************************************
 * WooCommerce Declare WC Support For Theme
 *************************************************************/
function lmf_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'lmf_woocommerce_support' );

/*************************************************************
 * Hide WooCommerce Breadcrumbs
 *************************************************************/
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
 * @snippet       WooCommerce add text to the thank you page
 * @testedwith    WooCommerce 2.6.7
 */
function bbloomer_add_content_thankyou() {
    //include_once "thankyou_cta.html";//depcreiated
    echo do_shortcode('[post_order_cta]');
}

add_action( 'woocommerce_thankyou', 'bbloomer_add_content_thankyou', 5 );