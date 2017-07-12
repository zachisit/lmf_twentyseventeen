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
    <?php wp_head(); ?>
</head>
<body>
<!--fb share-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div id="wrapper">
<header>
    <div id="logo">
        <a href="<?php echo get_home_url(); ?>" title="Home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php echo get_bloginfo( 'name' ); ?> - Home" /></a>
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
                </ul>
            </div>
            <div id="two">
                <div id="phone"><a href="tel:+15045861094">504-586-1094</a></div>
            </div>
            <div id="three">
                <div id="contact"><a href="<?php echo get_home_url(); ?>/contact" title="Contact <?php echo get_bloginfo( 'name' ); ?>">Contact Us</a></div>
            </div>
            <div id="four">
                <div id="login">
                    <?php
                    if ( is_user_logged_in() ) {
                        $current_user = wp_get_current_user();

                        echo 'Welcome '. $current_user->user_login .'<br />';
                        echo '<a href="'. get_home_url() .'/my-account-2/" title="My Account">My Account</a> | <a href="'. wp_logout_url( 'http://multisiteparent.com' ) .'">Logout</a>';
                    } else {
                        echo'<a href="' .get_home_url() .'/my-account-2/" title="' .get_bloginfo( 'name' ) .' Customer Login">Customer Login</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <div id="bottom">
            <div id="search">
                <?php
                if ( ! is_active_sidebar( 'header-search' ) ) {
                    echo "please set up the search widget in your theme under 'header-search'";
                } else {
                    dynamic_sidebar( 'header-search' );
                }
                ?>
            </div>
                <a href="javascript:void(0);" id="menu_btn"><div class="mobilemenubars"></div><div class="mobilemenubars"></div><div class="mobilemenubars"></div></a>
                <div id="menu"><a href="#" id="menu_close">X</a>
                    <?php wp_nav_menu( array( 'theme_location' => 'header_menu', 'menu_id' => 'primary-menu' ) ); ?>
                </div>
    </div>
</header>