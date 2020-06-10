/**
 * File woo_commerce_product_listing.js
 *
 * adds a certain div class to product
 * listing li based on what category
 * user is viewing product list in
 *
 * to solve wonky output of product results
 * due to all products having irregular
 * image heights
 *
 */
jQuery(document).ready(function() {
    var divname = 'h1.woocommerce-products-header__title';

    if (jQuery('h1.woocommerce-products-header__title:contains("DVDs")').length > 0) {
        jQuery("#content .products li").addClass("product_dvd_category");
    }
    if (jQuery('h1.woocommerce-products-header__title:contains("Books")').length > 0) {
        jQuery("#content .products li").addClass("product_books_category");
    }
});