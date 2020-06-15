<?php
/**
 * The 404 page for our theme (not found)
 *
 * This is the template that displays generic 404 message
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package tater
 */
get_header(); ?>

<div id="page_content">
    <h1>404 Page Not Found</h1>
    <p>This page is not found. Above is a live-action shot of Snooks looking for it. Until then, please <a href="<?php echo get_home_url(); ?>" title="Home">return to the homepage</a>.</p>
</div>

<?php get_footer(); ?>
