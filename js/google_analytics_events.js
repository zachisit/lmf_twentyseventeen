/**
 * File google_analytics_events.js
 *
 * bind GA event code to link classes
 * so client cannot break
 *
 */
jQuery(document).ready(function($){

    /**
     * top sidebar cta
     */
    $('.sidebar_top_cta a').click(function() {
        ga('send', 'event', { eventCategory: 'internal_click', eventAction: 'click', eventLabel: 'sidebar_cta_top'});
    });

    /**
     * bottom sidebar cta
     */
    $('.sidebar_bottom_cta a').click(function() {
        ga('send', 'event', { eventCategory: 'internal_click', eventAction: 'click', eventLabel: 'sidebar_cta_bottom'});
    });

    /**
     * top homepage cta
     */
    $('#homepage_top_cta a').click(function() {
        ga('send', 'event', { eventCategory: 'internal_click', eventAction: 'click', eventLabel: 'homepage_cta_click_top'});
    });

    /**
     * bottom homepage cta
     */
    $('#homepage_bottom_cta a').click(function() {
        ga('send', 'event', { eventCategory: 'internal_click', eventAction: 'click', eventLabel: 'homepage_cta_click_bottom'});
    });

    /**
     * post_order_cta cta
     */
    $('#post_order_cta a').click(function() {
        ga('send', 'event', { eventCategory: 'internal_click', eventAction: 'click', eventLabel: 'post_order_thankyou_cta'});
    });
});