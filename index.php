<?php get_header(); ?>
    <div id="home_slider">
        <div class="image_slider">
            <?php $query = new WP_Query( array('post_type' => 'homepage_slider', 'posts_per_page' => -1 ) );
            while ( $query->have_posts() ) : $query->the_post();
            $homepage_slider_top_text = get_post_meta( $post->ID, '_homepage_slider_top_text', true );
            $homepage_slider_second_level_text = get_post_meta($post->ID, '_homepage_slider_second_level_text', true); ?>
                <div class="asset">
                    <h1><?php echo $homepage_slider_top_text; ?></h1>
                    <?php if (!empty ($homepage_slider_second_level_text) ) { ?><h2>
                        <?php echo $homepage_slider_second_level_text; ?></h2>
                    <?php } ?>
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
    </div>
    <div id="home_intouch">
        <div id="left">
            <h1>Get In Touch</h1>
            <div class="title">Store Hours</div>
            <div class="datum clock"><?=(get_option('shop_hours_option'))?get_option('shop_hours_option'):'10am - 7pm Daily'?></div>
            <div class="title">Phone Number</div>
            <div class="datum phone"><a href="tel:+15045861094">504-586-1094</a></div>
            <div class="title">Our Address:</div>
            <div class="datum address">
                <div class="address-container">
                    Louisiana Music Factory<br/>421 Frenchmen St,<br/>New Orleans, LA 70116<br/>Click <a href="https://www.google.com/maps/place/Louisiana+Music+Factory/@29.96243,-90.0597217,17z/data=!3m1!4b1!4m5!3m4!1s0x8620a60d6e3b12a3:0xac5f43d4770bffb8!8m2!3d29.96243!4d-90.057533?q=louisiana+music+factory&rlz=1C1CHBF_enUS731US731&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjBscjvwNvUAhUTET4KHQ2VDrcQ_AUICigB" target="_blank" title="click here for map">here for map</a>!
                </div>
            </div>
            <div class="title">Contact Us</div>
            <div class="datum contact">Click <a href="<?php echo get_home_url(); ?>/contact/#contactforrm" title="contact <?php echo get_bloginfo( 'name' ); ?> here">here</a> to contact us</div>
            <div class="title">Social</div>
            <div class="datum twitter"><a href="https://twitter.com/LMFnola" title="<?php echo get_bloginfo( 'name' ); ?> Twitter" target="_blank">@LMFnola</a></div>
            <div class="datum facebook"><a href="https://www.facebook.com/LouisianaMusicFactory" title="<?php echo get_bloginfo( 'name' ); ?> Facebook" target="_blank">@LouisianaMusicFactory</a></div>
            <div class="datum youtube"><a href="https://www.youtube.com/user/LAMUSICFACTORY" title="<?php echo get_bloginfo( 'name' ); ?> YouTube" target="_blank">user/LAMUSICFACTORY</a></div>
            <div class="datum instagram"><a href="https://www.instagram.com/louisianamusicfactory" title="<?php echo get_bloginfo( 'name' ); ?> Instagram" target="_blank">@louisianamusicfactory</a></div>
            <div class="title">Newsletter</div>
            <div class="datum newsletter">Click <a href="<?=home_url('newsletter-signup')?>" title="<?php echo get_bloginfo( 'name' ); ?> Newsletter Signup">here</a> for Newsletter Only Deals!</div>
        </div>
        <div id="right"
        <a href="https://www.google.com/maps/place/Louisiana+Music+Factory/@29.96243,-90.0597217,17z/data=!3m1!4b1!4m5!3m4!1s0x8620a60d6e3b12a3:0xac5f43d4770bffb8!8m2!3d29.96243!4d-90.057533?q=louisiana+music+factory&rlz=1C1CHBF_enUS731US731&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjBscjvwNvUAhUTET4KHQ2VDrcQ_AUICigB" title="Directions to LMF" target="_blank">
            <img src="https://cdn.louisianamusicfactory.com/site-assets/google_mp.jpg" alt="<?php echo get_bloginfo( 'name' ); ?> - Home" />
        </a>
        <p class="map_direction"><a href="https://www.google.com/maps/place/Louisiana+Music+Factory/@29.96243,-90.0597217,17z/data=!3m1!4b1!4m5!3m4!1s0x8620a60d6e3b12a3:0xac5f43d4770bffb8!8m2!3d29.96243!4d-90.057533?q=louisiana+music+factory&rlz=1C1CHBF_enUS731US731&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjBscjvwNvUAhUTET4KHQ2VDrcQ_AUICigB" title="Directions to LMF">Directions to LMF Here</a></p>
        <?php echo do_shortcode('[show_newsletter_signup]') ?>
    </div>
<?php get_footer(); ?>