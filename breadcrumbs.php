<?php
/**
 * Breadcrumbs
 *
 * Written custom breadcrumbs to remove WooComm's silly
 * version
 */
echo '<div id="breadcrumb"><p>You are here: <a href="'. get_home_url() .'" title="Home">Home</a> - <span class="italic">'. get_the_title() .'</span></p></div>';