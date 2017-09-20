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
    <div id="home_slider">
        <div class="image_slider">
            <?php
            $query = new WP_Query( array('post_type' => 'homepage_slider', 'posts_per_page' => -1 ) );
            while ( $query->have_posts() ) : $query->the_post();

                $homepage_slider_top_text = get_post_meta( $post->ID, '_homepage_slider_top_text', true );
                $homepage_slider_second_level_text = get_post_meta($post->ID, '_homepage_slider_second_level_text', true); ?>
                <div class="asset">
                    <h1><?php echo $homepage_slider_top_text; ?></h1>
                    <?php if (!empty ($homepage_slider_second_level_text) ) { ?><h2><?php echo $homepage_slider_second_level_text; ?></h2><?php } ?>
                    <?php the_post_thumbnail( 'full' ); ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <div id="home_announcements">
        <div id="message" class="homepage_top_cta_ga_click">
                <?php echo do_shortcode('[homepage_top_cta]'); ?>
            <div id="message" class="homepage_bottom_cta_ga_click">
                <?php echo do_shortcode('[homepage_bottom_cta]'); ?>
        </div>
    </div>
    <div id="home_intouch">
        <div id="left">
            <h1>Get In Touch</h1>
            <div class="title">Store Hours</div>
            <div class="datum clock">11am - 8pm Daily</div>
            <div class="title">Phone Number</div>
            <div class="datum phone"><a href="tel:+15045861094">504-586-1094</a></div>
            <div class="title">Our Address:</div>
            <div class="datum address">
                <p>Louisana Music Factory</p>
                <p>421 Frenchmens St.</p>
                <p>New Orleans, LA 70116</p>
                <p>Click <a href="https://www.google.com/maps/place/Louisiana+Music+Factory/@29.96243,-90.0597217,17z/data=!3m1!4b1!4m5!3m4!1s0x8620a60d6e3b12a3:0xac5f43d4770bffb8!8m2!3d29.96243!4d-90.057533?q=louisiana+music+factory&rlz=1C1CHBF_enUS731US731&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjBscjvwNvUAhUTET4KHQ2VDrcQ_AUICigB" target="_blank" title="click here for map">here for map</a>!</p>
            </div>
            <div class="title">Contact Us</div>
            <div class="datum contact">Click <a href="<?php echo get_home_url(); ?>/contact/#contactforrm" title="contact <?php echo get_bloginfo( 'name' ); ?> here">here</a> to contact us</div>
            <div class="title">Social</div>
            <div class="datum twitter"><a href="https://twitter.com/LMFnola" title="<?php echo get_bloginfo( 'name' ); ?> Twitter" target="_blank">@LMFnola</a></div>
            <div class="datum facebook"><a href="https://www.facebook.com/LouisianaMusicFactory" title="<?php echo get_bloginfo( 'name' ); ?> Facebook" target="_blank">@LouisianaMusicFactory</a></div>
            <div class="datum youtube"><a href="https://www.youtube.com/user/LAMUSICFACTORY" title="<?php echo get_bloginfo( 'name' ); ?> YouTube" target="_blank">user/LAMUSICFACTORY</a></div>
            <div class="datum instagram"><a href="https://www.instagram.com/louisianamusicfactory/" title="<?php echo get_bloginfo( 'name' ); ?> Instagram" target="_blank">@louisianamusicfactory/</a></div>
            <div class="title">Newsletter</div>
            <div class="datum newsletter">Click <a href="https://www.louisianamusicfactory.com/newsletter-signup/" title="<?php echo get_bloginfo( 'name' ); ?> Newsletter Signup">here</a> for Newsletter Only Deals!</div>
        </div>
        <div id="right">
            <a href="https://www.google.com/maps/place/Louisiana+Music+Factory/@29.96243,-90.0597217,17z/data=!3m1!4b1!4m5!3m4!1s0x8620a60d6e3b12a3:0xac5f43d4770bffb8!8m2!3d29.96243!4d-90.057533?q=louisiana+music+factory&rlz=1C1CHBF_enUS731US731&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjBscjvwNvUAhUTET4KHQ2VDrcQ_AUICigB" title="Directions to LMF" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/google_mp.jpg" alt="<?php echo get_bloginfo( 'name' ); ?> - Home" /></a>
            <p class="map_direction"><a href="https://www.google.com/maps/place/Louisiana+Music+Factory/@29.96243,-90.0597217,17z/data=!3m1!4b1!4m5!3m4!1s0x8620a60d6e3b12a3:0xac5f43d4770bffb8!8m2!3d29.96243!4d-90.057533?q=louisiana+music+factory&rlz=1C1CHBF_enUS731US731&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjBscjvwNvUAhUTET4KHQ2VDrcQ_AUICigB" title="Directions to LMF">Directions to LMF Here</a></p>
            <div id="newsletter_signup">
                <img id="newsletter_header" src="<?php echo get_template_directory_uri(); ?>/images/newsletter_header.png" alt="<?php echo get_bloginfo( 'name' ); ?> - Newsletter" />
                <div class="title">Stay up to date with latest news and concert information, latest sale items available only to newsletter subscribers, and more!</div>
                <!-- Begin MailChimp Signup Form -->

                <style type="text/css">
                    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }<br />        /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.<br />           We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */<br />    </style>
                <div id="mc_embed_signup"><form id="mc-embedded-subscribe-form" class="validate" action="//louisianamusicfactory.us16.list-manage.com/subscribe/post?u=201af0f36fe74776bafcf96bb&amp;id=2e2910f014" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
                        <div id="mc_embed_signup_scroll">
                            <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                            <div class="mc-field-group"><label for="mce-EMAIL">Email Address <span class="asterisk">*</span>
                                </label>
                                <input id="mce-EMAIL" class="required email" name="EMAIL" type="email" value="" /></div>
                            <div id="mce-responses" class="clear"></div>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input tabindex="-1" name="b_201af0f36fe74776bafcf96bb_2e2910f014" type="text" value="" /></div>
                            <div class="clear"><input id="mc-embedded-subscribe" class="button" name="subscribe" type="submit" value="Subscribe" /></div>
                        </div>
                    </form></div>
                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                <!--End mc_embed_signup-->

            </div>
        </div>
    </div>
<?php get_footer(); ?>
