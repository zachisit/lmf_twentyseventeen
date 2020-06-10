<?php
// Add a new section to WooCommerce > Settings > Products
function add_international_shipping_alert_section( $sections ) {
    $sections['international_shipping_alert'] = __( 'International Shipping Alert', 'my-textdomain' );
    return $sections;
}
add_filter( 'woocommerce_get_sections_shipping', 'add_international_shipping_alert_section' );


// Add Settings for new section
function add_international_shipping_alert_settings( $settings, $current_section ) {

    // make sure we're looking only at our section
    if ( 'international_shipping_alert' === $current_section ) {
        $my_settings = array(
            array(
                'title'     => __( 'International Shipping Alert', 'my-textdomain' ),
                'type'      => 'title',
                'id'        => 'international_shipping_alert_section',
            ),

            array(
                'id'       => 'international_shipping_alert_radio',
                'type'     => 'radio',
                'title'    => __( 'Show Alert Message?', 'my-textdomain' ),
                'options'  => array(
                    'true'  => __( 'Yes, please show alert', 'my-textdomain' ),
                    'false' => __( 'No, do not show alert', 'my-textdomain' ),
                ),
                'default'  => 'true',
                'desc'     => __( 'Select this option to show the alert message on checkout. If this is not selected, a message will not show', 'my-textdomain' ),
                'desc_tip' => true,
            ),
            array(
                'id'       => 'international_shipping_alert_message',
                'type'     => 'textarea',
                'title'    => __( 'Alert Message', 'my-textdomain' )
            ),

            array(
                'type'  => 'sectionend',
                'id'    => 'international_shipping_alert_section',
            ),
        );

        return $my_settings;

    } else {
        // otherwise give us back the other settings
        return $settings;
    }
}
add_filter( 'woocommerce_get_settings_shipping', 'add_international_shipping_alert_settings', 10, 2 );