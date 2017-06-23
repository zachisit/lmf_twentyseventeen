/**
 * File woo_commerce_title_icons.js
 *
 * adds a certain div class to
 * certain product category titles
 * in h1 with a certain div class
 *
 */
jQuery(document).ready(function() {
    jQuery('h1.woocommerce-products-header__title:contains("Video")').addClass("video");
    jQuery('h1.woocommerce-products-header__title:contains("All DVDs")').addClass("video");
    jQuery('h1.woocommerce-products-header__title:contains("All Books")').addClass("book");
    jQuery('h1.woocommerce-products-header__title:contains("All Sale Items")').addClass("sale");
    jQuery('h1.woocommerce-products-header__title:contains("LMF Merchandise")').addClass("merchandise");
    jQuery('h1.woocommerce-products-header__title:contains("T-shirts, Hats, etc.")').addClass("merchandise");
});