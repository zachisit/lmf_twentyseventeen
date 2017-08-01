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
 *************************************************************/
add_action( 'init', 'lmf_remove_wc_breadcrumbs' );

add_filter( 'manage_shop_order_posts_columns', 'set_custom_edit_post_columns',99,1 );
function set_custom_edit_post_columns($columns) {
    $columns['custom-columns'] = __( 'Print Order', 'print_order_details' );
    return $columns;
}
add_action( 'manage_shop_order_posts_custom_column' , 'custom_cpost_column', 99, 2 );
function custom_cpost_column( $column, $post_id ) {
    switch ( $column ) {

        case 'custom-columns'://new-title=your column slug :
            add_thickbox();
        ?>
            <style>
                .fa {
                    font-size:1.8em !important;
                    color:#999;
                }
            </style>
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

            <a href="#TB_inline?width=600&height=550&inlineId=order_detail_view" class="thickbox"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
<div id="order_detail_view" style="display:none;">
    <p>
        <?php
        //echo 'custom columns value' ;
        $order = wc_get_order( $post_id );
        $order_data = $order->get_data(); //the Order data

        $data_order_created = [
            'd_c_' => $order_date_created = $order_data['date_created']->date('Y-m-d H:i:s'),
        'd_c_m' => $order_date_modified = $order_data['date_modified']->date('Y-m-d H:i:s'),
        'd_c_i' => $order_id = $order_data['id'],
        'd_c_pid' => $order_parent_id = $order_data['parent_id'],
        'd_c_s' => $order_status = $order_data['status'],
        'd_c_c' => $order_currency = $order_data['currency'],
        'd_c_v' => $order_version = $order_data['version'],
        'd_c_pm' => $order_payment_method = $order_data['payment_method'],
        'd_c_pmt' => $order_payment_method_title = $order_data['payment_method_title'],
        ];

        $data_shipping = [
            's_s' => $order_shipping_first_name = $order_data['shipping']['first_name'],
        's_ln' => $order_shipping_last_name = $order_data['shipping']['last_name'],
        's_c' => $order_shipping_company = $order_data['shipping']['company'],
        's_aone' => $order_shipping_address_1 = $order_data['shipping']['address_1'],
        's_atwo' => $order_shipping_address_2 = $order_data['shipping']['address_2'],
        's_c' => $order_shipping_city = $order_data['shipping']['city'],
        's_st' => $order_shipping_state = $order_data['shipping']['state'],
        's_z' => $order_shipping_postcode = $order_data['shipping']['postcode'],
        's_ccc' => $order_shipping_country = $order_data['shipping']['country'],
        ];

        $data_billing = [
            'b_fname' => $order_billing_first_name = $order_data['billing']['first_name'],
            'b_lname' => $order_billing_last_name = $order_data['billing']['last_name'],
        ];

        //$order_payment_method = $order_data['payment_method'];
        foreach ($data_order_created as $key => $value){
            echo $value."\n";
        }
        foreach ($data_shipping as $key => $value){
            echo $value."\n";
        }
        foreach ($data_billing as $key => $value){
            echo $value."\n";
        }

        /*-------------
        order details
        ------------*/
        // Get an instance of the WC_Order object
        $order = wc_get_order( $order_id );

        // Iterating through each WC_Order_Item objects
        foreach( $order-> get_items() as $item_key => $item_values ):

            ## Using WC_Order_Item methods ##

            // Item ID is directly accessible from the $item_key in the foreach loop or
            $item_id = $item_values->get_id();

            $item_name = $item_values->get_name(); // Name of the product
            $item_type = $item_values->get_type(); // Type of the order item ("line_item")

            ## Access Order Items data properties (in an array of values) ##
            $item_data = $item_values->get_data();

    $product_name = $item_data['name'];
    $product_id = $item_data['product_id'];
    $variation_id = $item_data['variation_id'];
    $quantity = $item_data['quantity'];
    $tax_class = $item_data['tax_class'];
    $line_subtotal = $item_data['subtotal'];
    $line_subtotal_tax = $item_data['subtotal_tax'];
    $line_total = $item_data['total'];
    $line_total_tax = $item_data['total_tax'];

    echo $product_name;
    echo $product_id;
    echo $variation_id;
    echo $quantity;
    echo $tax_class;
    echo $line_subtotal;
    echo $line_subtotal_tax;
    echo $line_total;
    echo $line_total_tax;

        endforeach;
        ?>
        <script>
            jQuery('.printMe').click(function(){
                window.print();
            });//@todo turn into button not alink
        </script>
        <a href="#" class=".printMe">print this</a>
    </p>
</div>
<?php



    }
}
