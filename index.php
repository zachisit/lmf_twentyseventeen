<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tater
 */
get_header(); ?>

<main>
    <div id="home_slider">
        <div class="image_slider">
            <?php
            $query = new WP_Query( ['post_type' => 'homepage_slider', 'posts_per_page' => -1 ] );
            while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="asset">
                    <?php the_post_thumbnail( 'full' ); ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <div id="home_hours">
        <p>Hours: 11AM to 8PM Daily</p>
    </div>
    <div id="home_two_cta">
        <div id="one">
            <div id="left">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home_two_cta_one_left.jpg" alt="<?php echo get_bloginfo( 'name' ); ?> - Home" />
            </div>
            <div id="right">
                <h2>Free Concerts & News</h2>
                <a href="<?php echo get_home_url(); ?>/lmf-news-2/" title="<?php echo get_bloginfo( 'name' ); ?> Schedule and Events">Click to view schedule</a>
            </div>
        </div>
        <div id="two">
            <div id="left">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home_two_cta_two_left.jpg" alt="<?php echo get_bloginfo( 'name' ); ?> - Home" />
            </div>
            <div id="right">
                <h2>New Releases</h2>
                <a href="<?php echo get_home_url(); ?>/louisiana-music/new-release/" title="<?php echo get_bloginfo( 'name' ); ?> New Releases">Click to view new items</a>
            </div>
        </div>
    </div>
    <div id="home_intouch">
        <div id="left">
            <h1>Get In Touch</h1>
            <div class="title">phone number</div>
            <div class="datum phone"><a href="tel:+15045861094">504-586-1094</a></div>
            <div class="title">our address:</div>
            <div class="datum address">Louisana Music Factory<br />421 Frenchmens St.<br />New Orleans, LA 70116</div>
            <div class="title">contact us</div>
            <div class="datum contact">Click <a href="<?php echo get_home_url(); ?>/contact-example-6/" title="">here</a> to contact us</div>
            <div class="title">twitter</div>
            <div class="datum twitter"><a href="https://twitter.com/LMFnola" title="Twitter" target="_blank">@LMFnola</a></div>
        </div>
        <div id="right">
            <div class="videoWrapper"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.5913818380377!2d-90.05972168488681!3d29.962429981912184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8620a60d6e3b12a3%3A0xac5f43d4770bffb8!2sLouisiana+Music+Factory!5e0!3m2!1sen!2sus!4v1497963094760" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        </div>
    </div>
    <div id="home_look">
        <div id="left">Look at all we offer at LMF!</div>
        <div id="right"><a href="" title="">Click for photos</a></div>
    </div>
</main>

<?php get_footer(); ?>
