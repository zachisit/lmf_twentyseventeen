<?php
/*************************************************************
 * Homepage Image Slider CPT
 *************************************************************/
function lmf_homepage_slider_posttype() {
    register_post_type( 'homepage_slider',
        array(
            'labels' => array(
                'name' => __( 'Home Image Slider' ),
                'singular_name' => __( 'Image Slider' ),
                'add_new' => __( 'Add New Image Slider' ),
                'add_new_item' => __( 'Add New Image Slider' ),
                'edit_item' => __( 'Edit Image Sliders' ),
                'new_item' => __( 'Add New Image Slider' ),
                'view_item' => __( 'View Image Slider' ),
                'search_items' => __( 'Search Image Slider' ),
                'not_found' => __( 'No Image Slider found' ),
                'not_found_in_trash' => __( 'No Image Slider found in trash' )
            ),
            'public' => true,
            'supports' => array( 'title', 'thumbnail', ),
            'capability_type' => 'post',
            'rewrite' => array("slug" => "homepage_slider"),
            'menu_position' => 3,
            'register_meta_box_cb' => 'add_homepage_slider_metaboxes',
            'menu_icon' => 'dashicons-format-gallery',
            'media_buttons' => false
        )
    );
}

add_action( 'init', 'lmf_homepage_slider_posttype' );

function add_homepage_slider_metaboxes() {
    add_meta_box('lmf_homepage_slider_meta_values', 'Slider Specifics', 'lmf_homepage_slider_meta_values', 'homepage_slider', 'side', 'default');
}

function lmf_homepage_slider_meta_values() {
    global $post;

    //noncename needed to verify where the data originated
    echo '<input type="hidden" name="homepage_slider_noncename" id="homepage_slider_noncename" value="' .
        wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

    $homepage_slider_meta = get_post_meta($post->ID);

    //get the slider data if its already been entered
    $homepage_slider_top_text = get_post_meta($post->ID, '_homepage_slider_top_text', true);
    $homepage_slider_link_button_text = get_post_meta($post->ID, '_homepage_slider_link_button_text', true);
    $homepage_slider_link_button_link = get_post_meta($post->ID, '_homepage_slider_link_button_link', true);
    $homepage_slider_second_level_text = get_post_meta($post->ID, '_homepage_slider_second_level_text', true);
    $homepage_slider_viddler_id = get_post_meta($post->ID, '_homepage_slider_viddler_id', true);

    //echo out the slider text field
    echo '<label>Main Slider Text</label><br /><input type="text" name="_homepage_slider_top_text" value="' . $homepage_slider_meta['_homepage_slider_viddler_id']  . '" class="widefat" /><br /><br />';

    //echo out the button text field
    echo '<label>Button Button Text</label><br /><input type="text" name="_homepage_slider_link_button_text" value="' . $homepage_slider_link_button_text  . '" class="widefat" /><br /><br />';

    //echo out the button button link field
    echo '<label>Button Button Link</label><br /><input type="text" name="_homepage_slider_link_button_link" value="' . $homepage_slider_link_button_link  . '" class="widefat" /><br /><br />';

    //echo out the lower level text field
    echo '<label>Lower Level Text</label><br /><input type="text" name="_homepage_slider_second_level_text" value="' . $homepage_slider_second_level_text  . '" class="widefat" /><br /><br />';

    //echo out the viddler video id field
    echo '<label>Viddler Video ID</label><br /><input type="text" name="_homepage_slider_viddler_id" value="' . $homepage_slider_viddler_id  . '" class="widefat" /><br /><br />';

    //output video for ease of client
    //do not show this if no value added for viddler video
    if ( !empty ($homepage_slider_viddler_id)) {
        echo '<iframe id="viddler-'. $homepage_slider_viddler_id .'" src="//www.viddler.com/embed/'. $homepage_slider_viddler_id .'/?f=1&player=simple&secret=34213636&enablejsapi=1" width="100%" height="159" frameborder="0" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
';
    }
}

function lmf_homepage_slider_save_meta($post_id, $post) {
    //verify this came from the our screen and with proper authorization
    if ( !wp_verify_nonce( $_POST['homepage_slider_noncename'], plugin_basename(__FILE__) )) {
        return $post->ID;
    }

    //is the user allowed to edit the post or page?
    if ( !current_user_can( 'edit_post', $post->ID ))
        return $post->ID;

    //save data
    $homepage_slider_block_meta['_homepage_slider_top_text'] = $_POST['_homepage_slider_top_text'];
    $homepage_slider_block_meta['_homepage_slider_link_button_text'] = $_POST['_homepage_slider_link_button_text'];
    $homepage_slider_block_meta['_homepage_slider_link_button_link'] = $_POST['_homepage_slider_link_button_link'];
    $homepage_slider_block_meta['_homepage_slider_second_level_text'] = $_POST['_homepage_slider_second_level_text'];
    $homepage_slider_block_meta['_homepage_slider_viddler_id'] = $_POST['_homepage_slider_viddler_id'];

    //add values of $home_block_meta as custom fields
    foreach ($homepage_slider_block_meta as $key => $value) {
        if( $post->post_type == 'revision' ) return;
        $value = implode(',', (array)$value);
        if(get_post_meta($post->ID, $key, FALSE)) {
            update_post_meta($post->ID, $key, $value);
        } else {
            add_post_meta($post->ID, $key, $value);
        }
        if(!$value) delete_post_meta($post->ID, $key);
    }
}

add_action('save_post', 'lmf_homepage_slider_save_meta', 1, 2);