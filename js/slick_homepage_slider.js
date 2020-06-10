/**
 * File slick_slider_homepage.js
 *
 * all jquery related to the homepage sliders
 *
 * dependencies: slick slider
 *
 */

/**
 * Top Image Slider
 */
jQuery(document).ready(function(){
    jQuery('.image_slider').slick({
        slidesToShow:1,
        slidesToScroll:1,
        autoplay:false,
        dots:false,
        arrows:true
    });
});