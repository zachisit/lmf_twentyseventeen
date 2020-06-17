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

<div id="page_content" class="fourOhFour">
    <h1>404 Page Not Found</h1>
    <div class="asset">
        <img src="https://cdn.louisianamusicfactory.com/media/wp-content/uploads/2020/06/16104105/SNOOKS-WINDOW-DRESSING-scaled.jpg" alt="Snooks the cat Louisiana Music Factory" />
    </div>
    <p>This page is not found. Above is a live-action shot of Snooks looking for it.</p>
    <p>Until then, please <a href="<?=get_home_url()?>" title="Home">return to the homepage</a>.</p>
</div>

<?php get_footer(); ?>
