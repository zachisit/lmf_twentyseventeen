<?php
/*************************************************************
 * Homepage Announcements CPT
 ************************************************************/
function lmf_homepage_announcements_posttype() {
    register_post_type( 'announcements',
        array(
            'labels' => array(
                'name' => __( 'Announcement' ),
                'singular_name' => __( 'Announcement' ),
                'view_item' => __( 'View Announcement' ),
                'search_items' => __( 'Search Announcement' ),
                'not_found' => __( 'No Announcement found' ),
                'not_found_in_trash' => __( 'No Announcement found in trash' ),
            ),
            'public' => true,
            'supports' => array( 'title', 'editor', ),
            'capability_type' => 'post',
            'capabilities' => array(
                'create_posts' => false,
            ),
            'menu_position' => 3,
            'menu_icon' => 'dashicons-thumbs-up',
            'media_buttons' => false
        )
    );
}

add_action( 'init', 'lmf_homepage_announcements_posttype' );