<?php
/*************************************************************
 * Site CTAs CPT
 * this is an ad-hock advertising element on site
 *
 * CTAs are showing on
 * 1.homepage
 * 2.sidebar top
 * 3.sidebar bottom
 * 4.post order
 ************************************************************/
function lmf_homepage_announcements_posttype() {
    register_post_type( 'announcements',
        [
            'labels' => [
                'name' => __( 'Homepage CTAs' ),
                'singular_name' => __( 'Homepage CTAs' ),
                'view_item' => __( 'View Homepage CTAs' ),
                'search_items' => __( 'Search Homepage CTAs' ),
                'not_found' => __( 'No Homepage CTAs found' ),
                'not_found_in_trash' => __( 'No Homepage CTAs found in trash' ),
            ],
            'public' => true,
            'supports' => [ 'title', 'editor', 'revisions'],
            'capabilities' => [
                'create_posts' => 'do_not_allow',
            ],
            'map_meta_cap' => true,
            'capability_type' => 'post',
            'menu_position' => 3,
            'has_archive' => false,
            'exclude_from_search' => true,
            'show_in_nav_menus' => false,
            'menu_icon' => 'dashicons-thumbs-up',
            'media_buttons' => false
        ]
    );
}

add_action( 'init', 'lmf_homepage_announcements_posttype' );

//remove permalink
function lmf_announcements_hide_permalinks($return, $post_id, $new_title, $new_slug, $post)
{
    if($post->post_type == 'announcements') {
        return '';
    }
    return $return;
}

add_filter('get_sample_permalink_html', 'lmf_announcements_hide_permalinks', 10, 5);

//register taxonomies
function lmf_announcements_taxonomies()
{
    register_taxonomy('announcements_section',
        ['announcements'],
        [
            'hierarchical' => true,
            'show_ui' => false,
            'show_admin_column' => true,
            'query_var' => true,
            'label' => 'CTA locations',
            'rewrite' => true
        ]
    );

}

add_action( 'init', 'lmf_announcements_taxonomies', 0 );

/*
 * output top homepage CTA via shortcode
 * @return mixed
 */
function lmf_homepage_top_cta_output() {
    $query = new WP_Query( [
            'posts_per_page' => 1,
            'post_type' => 'announcements',
            'tax_query' => [
                [
                    'taxonomy' => 'announcements_section',
                    'field' => 'slug',
                    'terms' => 'homepage_top'
                ]
            ]
        ]
    );
    while ( $query->have_posts() ) : $query->the_post();

        echo '<div id="homepage_top_cta">';
        the_content();
        echo '</div>';

    endwhile;
}

add_shortcode('homepage_top_cta', 'lmf_homepage_top_cta_output');


/*
 * output bottom homepage CTA via shortcode
 * @return mixed
 */
function lmf_homepage_bottom_cta_output() {
    $query = new WP_Query( [
            'posts_per_page' => 1,
            'post_type' => 'announcements',
            'tax_query' => [
                [
                    'taxonomy' => 'announcements_section',
                    'field' => 'slug',
                    'terms' => 'homepage_bottom'
                ]
            ]
        ]
    );
    while ( $query->have_posts() ) : $query->the_post();

        echo '<div id="homepage_bottom_cta">';
        the_content();
        echo '</div>';

    endwhile;
}

add_shortcode('homepage_bottom_cta', 'lmf_homepage_bottom_cta_output');

/*
 * output top sidebar CTA via shortcode
 * @return mixed
 */
function lmf_sidebar_top_cta_output() {
    $query = new WP_Query( [
            'posts_per_page' => 1,
            'post_type' => 'announcements',
            'tax_query' => [
                [
                    'taxonomy' => 'announcements_section',
                    'field' => 'slug',
                    'terms' => 'sidebar_top'
                ]
            ]
        ]
    );
    while ( $query->have_posts() ) : $query->the_post();

    echo '<div class="sidebar_cta sidebar_top_cta">';
    the_content();
    echo '</div>';

    endwhile;
}

add_shortcode('sidebar_top_cta', 'lmf_sidebar_top_cta_output');


/*
 * output bottom sidebar CTA via shortcode
 * @return mixed
 */
function lmf_sidebar_bottom_cta_output() {
    $query = new WP_Query( [
            'posts_per_page' => 1,
            'post_type' => 'announcements',
            'tax_query' => [
                [
                    'taxonomy' => 'announcements_section',
                    'field' => 'slug',
                    'terms' => 'sidebar_bottom'
                ]
            ]
        ]
    );
    while ( $query->have_posts() ) : $query->the_post();

    echo '<div class="sidebar_cta sidebar_bottom_cta">';
    the_content();
    echo '</div>';

    endwhile;
}

add_shortcode('sidebar_bottom_cta', 'lmf_sidebar_bottom_cta_output');

/*
 * output post_order CTA via shortcode
 * @return mixed
 */
function lmf_post_order_cta_output() {
    $query = new WP_Query( [
            'posts_per_page' => 1,
            'post_type' => 'announcements',
            'tax_query' => [
                [
                    'taxonomy' => 'announcements_section',
                    'field' => 'slug',
                    'terms' => 'post_order'
                ]
            ]
        ]
    );
    while ( $query->have_posts() ) : $query->the_post();

        echo '<div id="post_order_cta">';
        the_content();
        echo '</div>';

    endwhile;
}

add_shortcode('post_order_cta', 'lmf_post_order_cta_output');