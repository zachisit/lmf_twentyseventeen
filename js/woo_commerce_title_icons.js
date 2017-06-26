/**
 * File woo_commerce_title_icons.js
 *
 * adds a certain div class to
 * certain product category titles
 * in h1 with a certain div class
 *
 */
jQuery(document).ready(function() {
    var divname = 'h1.woocommerce-products-header__title';

    jQuery('' + divname + ':contains("Video")').addClass("video");
    jQuery('' + divname + ':contains("All DVDs")').addClass("video");
    jQuery('' + divname + ':contains("All Books")').addClass("book");
    jQuery('' + divname + ':contains("All Sale Items")').addClass("sale");
    jQuery('' + divname + ':contains("LMF Merchandise")').addClass("merchandise");
    jQuery('' + divname + ':contains("T-shirts, Hats, etc.")').addClass("merchandise");
});