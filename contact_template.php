<?php
/**
 * Template Name: Contact Template
 *
 * The template for displaying contact page
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
    <div id="content_full">
        <?php global $post; ?>
        <?php include 'breadcrumbs.php'; ?>
        <div id="header">
            <h2><?php echo get_the_title($post->ID); ?></h2>
        </div>


            <div id="top_quote">
                <div class="quote"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
                <p>Hello friends and thanks for visiting us! New items are added daily. If you don’t see what you’re looking for you can always call us at 504-586-1094 or send us a message using the link below. Please let us know if you have any problems with the website. We appreciate your business!</p>
            </div>
            <div id="map_contact">
                <div id="left">
                    <a href="https://www.google.com/maps/place/Louisiana+Music+Factory/@29.96243,-90.0597217,17z/data=!3m1!4b1!4m5!3m4!1s0x8620a60d6e3b12a3:0xac5f43d4770bffb8!8m2!3d29.96243!4d-90.057533?q=louisiana+music+factory&rlz=1C1CHBF_enUS731US731&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjBscjvwNvUAhUTET4KHQ2VDrcQ_AUICigB" title="Directions to LMF"><img src="<?php echo get_template_directory_uri(); ?>/images/google_mp.jpg" alt="<?php echo get_bloginfo( 'name' ); ?> - Home" /></a>
                    <p class="map_direction"><a href="https://www.google.com/maps/place/Louisiana+Music+Factory/@29.96243,-90.0597217,17z/data=!3m1!4b1!4m5!3m4!1s0x8620a60d6e3b12a3:0xac5f43d4770bffb8!8m2!3d29.96243!4d-90.057533?q=louisiana+music+factory&rlz=1C1CHBF_enUS731US731&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjBscjvwNvUAhUTET4KHQ2VDrcQ_AUICigB" title="Directions to LMF">Directions to LMF Here</a></p>
                </div>
                <div id="right">
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
                    <div class="datum contact">Click <a href="<?php get_home_url(); ?>/contact-example-6/#contact" title="contact LMF">here</a> to contact us</div>
                    <div class="title">twitter</div>
                    <div class="datum twitter"><a href="https://twitter.com/LMFnola" title="Twitter" target="_blank">@LMFnola</a></div>
                </div>
            </div>
            <div id="how_much">
                <div id="left">WANT TO KNOW HOW MUCH IT WILL COST?</div>
                <div id="right"><a href="" title="Click Here For Shipping Rates">Click Here For Shipping Rates</a></div>
            </div>
            <div id="contactforrm">
                <a name="contact"></a>
                <h2>Contact Us</h2>
                <p>Please use the form below to contact us</p>
                <?php echo do_shortcode('[gravityform id="2" title="false" description="false"]'); ?>
            </div>
    </div>
</main>
<?php get_footer(); ?>
