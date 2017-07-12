<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tater
 */
get_header(); ?>
<main>
    <div id="content_left">
        <?php while ( have_posts() ) : the_post();

            echo '<div id="header"><h2>'. get_the_title() .'</h2></div>';

                the_content();
        endwhile; // End of the loop.
        ?>
    </div>
</main>
<?php get_footer(); ?>