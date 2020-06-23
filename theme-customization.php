<?php
function theme_option_page() {
    ?>
    <style>
        .explainer { font-style:italic;font-size:12px;}
    </style>
    <div class="wrap">
        <h1>Custom Theme Options Page</h1>
        <form method="post" action="options.php">
            <?php
            // display settings field on theme-option page
            settings_fields("theme-options-grp");

            // display all sections for theme-options page
            do_settings_sections("theme-options");
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function add_theme_menu_item() {
    add_theme_page("Theme Customization", "Theme Customization", "manage_options", "theme-options", "theme_option_page", null, 99);
}
add_action("admin_menu", "add_theme_menu_item");

function first_section_description(){
    echo '<p>Homepage Settings</p>';
}

function second_section_description(){
    echo '<p>Header Headline Settings</p>';
}

function lmf_theme_settings(){
    add_settings_section( 'first_section', 'Homepage Customization',
        'first_section_description','theme-options');
    add_settings_section( 'second_section', 'Header Headline Customization',
        'second_section_description','theme-options');

    //homepage
    add_settings_field('shop_hours_option', 'Shop Hours', 'display_shop_hours_option_field', 'theme-options', 'first_section');
    register_setting( 'theme-options-grp', 'shop_hours_option');

    add_settings_field('first_header_headline', 'First Header Headline Message', 'display_first_headline_option_field', 'theme-options', 'second_section');
    register_setting( 'theme-options-grp', 'first_header_headline');

    add_settings_field('second_header_headline', 'Second Header Headline Message', 'display_second_headline_option_field', 'theme-options', 'second_section');
    register_setting( 'theme-options-grp', 'second_header_headline');
}
add_action('admin_init','lmf_theme_settings');

function display_shop_hours_option_field(){
    ?>
    <input type="text" name="shop_hours_option" id="shop_hours_option" class="widefat" value="<?=get_option('shop_hours_option'); ?>" />
    <?php
}
function display_first_headline_option_field(){
    echo '<div class="explainer">Keep the message short (ideally less than 130 characters), to the point, and any links should use UTM linking.</div>';
    echo wp_editor( get_option('first_header_headline'), 'first_header_headline', ['textarea_name' => 'first_header_headline','media_buttons' => false,'tinymce' => ['height' => '50', 'toolbar1' => 'bold,italic,underline,separator,link,unlink,undo,redo',]] );
}
function display_second_headline_option_field(){
    echo '<div class="explainer">Keep the message short (ideally less than 130 characters), to the point, and any links should use UTM linking.</div>';
    echo wp_editor( get_option('second_header_headline'), 'second_header_headline', ['textarea_name' => 'second_header_headline','media_buttons' => false,'tinymce' => ['height' => '50', 'toolbar1' => 'bold,italic,underline,separator,link,unlink,undo,redo',]] );
}
