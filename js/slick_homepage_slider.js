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
        dots: true,
        arrows: true,
        autoplaySpeed: 5500,
    });

    jQuery('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '.slider-for'
    });

    jQuery('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-nav',
        dots: true,
        arrows: true,
        centerMode: true,
        focusOnSelect: true
    });
});