<?php
/**
 * Template Name: Newsletter Landing Page
 *
 * The template for displaying mailchimp newsletter signup
 */
get_header(); ?>
<main>
    <div id="content_full">
        <?php echo do_shortcode('[show_newsletter_signup]') ?>
    </div>
</main>
<?php get_footer(); ?>
