<?php

add_action('admin_menu', 'register_my_custom_submenu_page');

function register_my_custom_submenu_page()
{
    add_submenu_page(
        'themes.php',
        'HDI Theme Option',
        'HDI Theme Setting',
        'manage_options',
        'hdi_theme_option',
        'hdi_theme_option');
}

function hdi_theme_option()
{
    ?>
    <div class="wrap">
        <h1>Theme Panel</h1>
        <form method="post" enctype=”multipart/form-data” action="options.php">
            <?php
            settings_fields("hdi_theme_option");
            do_settings_sections("theme-options");
            submit_button();
            ?>
        </form>
    </div>
<?php }

function display_twitter_element()
{
    ?>
    <input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>"/>
    <?php
}

function display_facebook_element()
{
    ?>
    <input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>"/>
    <?php
}

function display_instagram_element()
{
    ?>
    <input type="text" name="instagram_url" id="instagram_url" value="<?php echo get_option('instagram_url'); ?>"/>
    <?php
}

function display_youtube_element()
{
    ?>
    <input type="text" name="youtube_url" id="youtube_url" value="<?php echo get_option('youtube_url'); ?>"/>
    <?php
}

function display_layout_element()
{
    ?>
    <input type="checkbox" name="theme_layout" value="1" <?php checked(1, get_option('theme_layout'), true); ?> />
    <?php
}

function display_theme_panel_fields()
{
    add_settings_section("hdi_theme_option", "All Settings", null, "theme-options");

    add_settings_field("twitter_url", "Twitter Profile Url", "display_twitter_element", "theme-options", "hdi_theme_option");
    add_settings_field("facebook_url", "Facebook Profile Url", "display_facebook_element", "theme-options", "hdi_theme_option");
    add_settings_field("instagram_url", "Instagram Profile Url", "display_instagram_element", "theme-options", "hdi_theme_option");
    add_settings_field("youtube_url", "Youtube Profile Url", "display_youtube_element", "theme-options", "hdi_theme_option");
    add_settings_field("theme_layout", "Do you want the layout to be responsive?", "display_layout_element", "theme-options", "hdi_theme_option");

    register_setting("hdi_theme_option", "twitter_url");
    register_setting("hdi_theme_option", "facebook_url");
    register_setting("hdi_theme_option", "instagram_url");
    register_setting("hdi_theme_option", "youtube_url");
    register_setting("hdi_theme_option", "theme_layout");
}

add_action("admin_init", "display_theme_panel_fields");
