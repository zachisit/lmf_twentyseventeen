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
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        dots: false,
        arrows: false,
        autoplaySpeed: 5500,
    });

    jQuery('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: false,
        asNavFor: '.slider-for'
    });

    jQuery('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-nav',
        dots: false,
        arrows: false,
        centerMode: true,
        focusOnSelect: true
    });
});