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

add_action( 'init', 'lmf_remove_wc_breadcrumbs' );