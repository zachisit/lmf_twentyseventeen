<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tater
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title><?php if ( !is_front_page() ) { wp_title( '|', true, 'right' ); } bloginfo( 'name' ); ?></title>
    <!--mailchimp-->
    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
    </style>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5CPS5KN');</script>
    <!-- End Google Tag Manager -->
    <?php wp_head(); ?>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5CPS5KN"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!--fb share-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div id="wrapper" class="<?php if ( is_home() ) { echo 'home_wrapper';} else { echo 'internal_wrapper'; }?>">
    <div id="top_mobile_directions">
        <p><a href="<?php echo get_home_url(); ?>/contact" title="Directions">Directions</a></p>
    </div>
<header>
    <div id="top">
        <div id="logo">
            <a href="<?php echo get_home_url(); ?>" title="Home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-twentyseventeen.png" alt="<?php echo get_bloginfo( 'name' ); ?> - Home" /></a>
        </div>
        <div id="right">
            <div id="top">
                <div id="one">
                    <ul>
                        <li><a href="https://www.facebook.com/LouisianaMusicFactory" title="<?php echo get_bloginfo( 'name' ); ?> Facebook" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i>
                            </a></li>
                        <li><a href="https://twitter.com/LMFnola" title="<?php echo get_bloginfo( 'name' ); ?> Twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i>
                            </a></li>
                        <li><a href="http://www.youtube.com/user/LAMUSICFACTORY" title="<?php echo get_bloginfo( 'name' ); ?> YouTube" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i>
                            </a></li>
                        <li><a href="https://www.instagram.com/louisianamusicfactory/" title="<?php echo get_bloginfo( 'name' ); ?> Instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i>
                            </a></li>
                    </ul>
                </div>
                <div id="two">
                    <div id="phone"><a href="tel:+15045861094">504-586-1094</a></div>
                </div>
                <div id="three">
                    <div id="contact"><a href="<?=get_home_url()?>/contact#contact" title="Contact <?=get_bloginfo( 'name' )?>">Contact</a></div>
                </div>
                <div id="four">
                    <div id="login">
                        <?=headerUserStatusMessage()?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="bottom">
        <div id="box">
            <div id="search">
                <?php dynamic_sidebar( 'header-search' );?>
            </div>
            <div id="menu">
                <?php wp_nav_menu( array( 'theme_location' => 'header_menu', 'menu_id' => 'primary-menu' ) ); ?>
            </div>
        </div>
    </div>
</header>