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

/*************************************************************
 * Print Order Detail
 * Backend of Orders Table
 ************************************************************
add_action( 'init', 'lmf_remove_wc_breadcrumbs' );

add_filter( 'manage_shop_order_posts_columns', 'set_custom_edit_post_columns',99,1 );
function set_custom_edit_post_columns($columns) {
    $columns['custom-columns'] = __( 'Print Order Details', 'print_order_details' );
    return $columns;
}
add_action( 'manage_shop_order_posts_custom_column' , 'custom_cpost_column', 99, 2 );
function custom_cpost_column( $column, $post_id ) {
    switch ( $column ) {

        case 'custom-columns'://new-title=your column slug :
            //echo 'custom columns value' ;
            $order = wc_get_order( $post_id );
            $order_data = $order->get_data(); // The Order data
            $order_payment_method = $order_data['payment_method'];
            echo $order_payment_method;
            break;
    }
}
 */