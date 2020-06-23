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

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5CPS5KN');</script>
    <!-- End Google Tag Manager -->

    <link rel="apple-touch-icon" sizes="57x57" href="https://cdn.louisianamusicfactory.com/site-assets/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://cdn.louisianamusicfactory.com/site-assets/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://cdn.louisianamusicfactory.com/site-assets/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://cdn.louisianamusicfactory.com/site-assets/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://cdn.louisianamusicfactory.com/site-assets/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://cdn.louisianamusicfactory.com/site-assets/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://cdn.louisianamusicfactory.com/site-assets/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://cdn.louisianamusicfactory.com/site-assets/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://cdn.louisianamusicfactory.com/site-assets/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="https://cdn.louisianamusicfactory.com/site-assets/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://cdn.louisianamusicfactory.com/site-assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://cdn.louisianamusicfactory.com/site-assets/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://cdn.louisianamusicfactory.com/site-assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="https://cdn.louisianamusicfactory.com/site-assets/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#3385c3">
    <meta name="msapplication-TileImage" content="https://cdn.louisianamusicfactory.com/site-assets/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#3385c3">

    <?php wp_head(); ?>
</head>
<!--<body --><?php //body_class(); ?><!---->
<body class="<?=lmf_body_class()?>">
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
<?php
$cartTotal = WC()->cart->get_cart_contents_count();
?>
<?php if (get_option('first_header_headline')) : ?>
    <div class="headerHeadlineMessage"><?=get_option('first_header_headline')?></div>
<?php endif ?>
<?php if (get_option('second_header_headline')) : ?>
    <div class="headerHeadlineMessage"><?=get_option('second_header_headline')?></div>
<?php endif ?>
<div id="wrapper" class="<?php if ( is_home() ) { echo 'home_wrapper';} else { echo 'internal_wrapper'; }?>">
    <div id="mobile_header">
        <ul class="topItems">
            <li class="search"><a href="<?=home_url('/shop')?>" title="Catalog Search"><i class="fas fa-search"></i></a></li>
            <li class="cart"><a href="<?=home_url('/cart')?>" title="Your Cart"><i class="fas fa-shopping-cart"></i><?=($cartTotal>0)?'<span class="cartTotal">'.$cartTotal.'</span>':''?></a></li>
            <li class="menu-trigger"><button class="mobileMenuTrigger"><i class="fas fa-bars"></i></button></li>
        </ul>
        <div class="mobile-menu">
            <ul>
                <li><?=headerUserStatusMessage()?></li>
                <li><a href="<?=home_url('/directions')?>" title="Directions">Directions</a></li>
                <li><a href="tel:+15045861094">504-586-1094</a></li>
                <li><a href="<?=home_url('/contact')?>" title="Contact <?=get_bloginfo( 'name' )?>">Contact</a></li>
                <li><?php wp_nav_menu( array( 'theme_location' => 'header_menu', 'menu_id' => 'primary-menu' ) ); ?></li>
            </ul>
        </div>
    </div>
<header>
    <div id="top">
        <div id="logo">
            <a href="<?=home_url()?>" title="Home"><img src="https://cdn.louisianamusicfactory.com/site-assets/logo-twentyseventeen.png" alt="<?=get_bloginfo( 'name' )?> - Home" /></a>
        </div>
        <div id="right">
            <div id="top">
                <div id="one">
                    <ul>
                        <li><a href="https://www.facebook.com/LouisianaMusicFactory" title="<?php echo get_bloginfo( 'name' ); ?> Facebook" target="_blank"><i class="fab fa-facebook-square" aria-hidden="true"></i>
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
                    <div id="contact"><a href="<?=home_url('/contact')?>" title="Contact <?=get_bloginfo( 'name' )?>">Contact</a></div>
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