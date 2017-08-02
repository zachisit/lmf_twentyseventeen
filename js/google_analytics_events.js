/**
 * File google_analytics_events.js
 *
 * bind GA event code to link classes
 * so client cannot break
 *
 */
jQuery(document).ready(function($){

    /**
     * sidebar cta
     */
    $('.sidebar_cta').click(function() {
        ga('send', 'event', { eventCategory: 'internal_click', eventAction: 'click', eventLabel: 'sidebar_cta'});
    });
});