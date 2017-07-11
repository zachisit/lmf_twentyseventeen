<?php
/*************************************************************
 * Homepage Announcements CPT
 ************************************************************/
function lmf_homepage_announcements_posttype() {
    register_post_type( 'announcements',
        array(
            'labels' => array(
                'name' => __( 'Homepage CTAs' ),
                'singular_name' => __( 'Homepage CTAs' ),
                'view_item' => __( 'View Homepage CTAs' ),
                'search_items' => __( 'Search Homepage CTAs' ),
                'not_found' => __( 'No Homepage CTAs found' ),
                'not_found_in_trash' => __( 'No Homepage CTAs found in trash' ),
            ),
            'public' => true,
            'supports' => array( 'title', 'editor', ),
            'capability_type' => 'post',
            'menu_position' => 3,
            'menu_icon' => 'dashicons-thumbs-up',
            'media_buttons' => false
        )
    );
}

add_action( 'init', 'lmf_homepage_announcements_posttype' );