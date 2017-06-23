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
        <div id="breadcrumb">
            <p>You are here: <a href="<?php echo get_home_url(); ?>" title="Home">Home</a> - <?php echo get_the_title($post->ID); ?></p>
        </div>
        <div id="header">
            <h2><?php echo get_the_title($post->ID); ?></h2>
        </div>


            <div id="top_quote">
                <div class="quote"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
                <p>Hello friends and thanks for visiting us! New items are added daily. If you don’t see what you’re looking for you can always call us at 504-586-1094 or send us a message using the link below. Please let us know if you have any problems with the website. We appreciate your business!</p>
            </div>
            <div id="map_contact">
                <div id="left">
                    <div id="videoWrapper">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.5913818380377!2d-90.05972168488681!3d29.962429981912184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8620a60d6e3b12a3%3A0xac5f43d4770bffb8!2sLouisiana+Music+Factory!5e0!3m2!1sen!2sus!4v1497963094760" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div id="right">
                    <h1>Get In Touch</h1>
                    <div class="title">phone number</div>
                    <div class="datum phone"><a href="tel:+15045861094">504-586-1094</a></div>
                    <div class="title">our address:</div>
                    <div class="datum address">Louisana Music Factory<br />421 Frenchmens St.<br />New Orleans, LA 70116</div>
                    <div class="title">contact us</div>
                    <div class="datum contact">Click <a href="" title="">here</a> to contact us</div>
                    <div class="title">twitter</div>
                    <div class="datum twitter"><a href="https://twitter.com/LMFnola" title="Twitter" target="_blank">@LMFnola</a></div>
                </div>
            </div>
            <div id="how_much">
                <div id="left">WANT TO KNOW HOW MUCH IT WILL COST?</div>
                <div id="right"><a href="" title="Click Here For Shipping Rates">Click Here For Shipping Rates</a></div>
            </div>
            <div id="contactforrm">
                <?php echo do_shortcode('[gravityform id="2" title="false" description="false"]'); ?>
            </div>
    </div>
</main>
<?php get_footer(); ?>
