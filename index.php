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
        <div class="image_slidere">
            <?php
            /*$query = new WP_Query( array('post_type' => 'homepage_slider', 'posts_per_page' => -1 ) );
            while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="asset">
                    <?php the_post_thumbnail( 'full' ); ?>
                </div>
            <?php endwhile; */?>
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
    <div id="home_announcements">
        <h2>Latest Announcements</h2>
        <div id="left"></div>
        <div id="message">
            <p>We are @ the LA Cajun-Zydeco Fest Today - Armstrong Park.</p>
            <p>It did rain yesterday but we enjoyed the music & food!</p>
            <p>Store is Opened Today 11-8</p>
        </div>

    </div>
    <div id="home_intouch">
        <div id="left">
            <h1>Get In Touch</h1>
            <div class="title">phone number</div>
            <div class="datum phone"><a href="tel:+15045861094">504-586-1094</a></div>
            <div class="title">our address:</div>
            <div class="datum address">
                <p>Louisana Music Factory</p>
                <p>421 Frenchmens St.</p>
                <p>New Orleans, LA 70116</p>
            </div>
            <div class="title">contact us</div>
            <div class="datum contact">Click <a href="<?php echo get_home_url(); ?>/contact" title="contact <?php echo get_bloginfo( 'name' ); ?> here">here</a> to contact us</div>
            <div class="title">twitter</div>
            <div class="datum twitter"><a href="https://twitter.com/LMFnola" title="<?php echo get_bloginfo( 'name' ); ?> Twitter" target="_blank">@LMFnola</a></div>
        </div>
        <div id="right">
            <a href="https://www.google.com/maps/place/Louisiana+Music+Factory/@29.96243,-90.0597217,17z/data=!3m1!4b1!4m5!3m4!1s0x8620a60d6e3b12a3:0xac5f43d4770bffb8!8m2!3d29.96243!4d-90.057533?q=louisiana+music+factory&rlz=1C1CHBF_enUS731US731&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjBscjvwNvUAhUTET4KHQ2VDrcQ_AUICigB" title="Directions to LMF" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/google_mp.jpg" alt="<?php echo get_bloginfo( 'name' ); ?> - Home" /></a>
            <p class="map_direction"><a href="https://www.google.com/maps/place/Louisiana+Music+Factory/@29.96243,-90.0597217,17z/data=!3m1!4b1!4m5!3m4!1s0x8620a60d6e3b12a3:0xac5f43d4770bffb8!8m2!3d29.96243!4d-90.057533?q=louisiana+music+factory&rlz=1C1CHBF_enUS731US731&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjBscjvwNvUAhUTET4KHQ2VDrcQ_AUICigB" title="Directions to LMF">Directions to LMF Here</a></p>
        </div>
    </div>
    <div id="home_look">
        <div id="left">Look at all we offer at LMF!</div>
        <div id="right"><a href="<?php echo get_home_url(); ?>/inside-louisiana-music-factory/" title="<?php echo get_bloginfo( 'name' ); ?> Photos">Click for photos</a></div>
    </div>
</main>

<?php get_footer(); ?>
