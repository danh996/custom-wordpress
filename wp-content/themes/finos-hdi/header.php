<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FinOs_HDI
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class("home-page-4"); ?>>
<?php wp_body_open(); ?>
<section class="home-page-3">
    <div class="menu-section">
        <div>
            <?php
            the_custom_logo();
            ?>
        </div>
        <nav class="navbar" role="navigation" aria-label="menu">
            <?php
            wp_nav_menu( array(
                'theme_location'  => 'primary',
                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ) );
            ?>

        </nav>
        <div class="select-lang">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/home3/flag.png" alt="">
                <span>VN</span>
                <svg class="icon" width="14" height="16" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 320 512">
                    <path d="M151.5 347.8L3.5 201c-4.7-4.7-4.7-12.3 0-17l19.8-19.8c4.7-4.7 12.3-4.7 17 0L160 282.7l119.7-118.5c4.7-4.7 12.3-4.7 17 0l19.8 19.8c4.7 4.7 4.7 12.3 0 17l-148 146.8c-4.7 4.7-12.3 4.7-17 0z" />
                </svg>
            </div>
        </div>
        <div class="search-login">
            <div class="search">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home3/search.png" alt="">
            </div>

            <div class="login">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home3/key.png" alt="">
                    <span>Đăng Nhập</span>
                </div>
            </div>
        </div>
    </div>
