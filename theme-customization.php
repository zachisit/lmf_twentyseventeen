<?php
function theme_option_page() {
    ?>
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

function theme_section_description(){
    echo '<p>Homepage Settings</p>';
}

function test_theme_settings(){
    add_option('first_field_option',1);// add theme option to database
    add_settings_section( 'first_section', 'Theme Customization',
        'theme_section_description','theme-options');
    add_settings_field('shop_hours_option', 'Shop Hours', 'display_shop_hours_option_field', 'theme-options', 'first_section');
    register_setting( 'theme-options-grp', 'shop_hours_option');
}
add_action('admin_init','test_theme_settings');

function display_shop_hours_option_field(){
    ?>
    <input type="text" name="shop_hours_option" id="shop_hours_option" value="<?php echo get_option('shop_hours_option'); ?>" />
    <?php
}
