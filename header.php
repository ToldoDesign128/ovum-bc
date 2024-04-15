<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php $viewport_content = apply_filters('federicotoldo_viewport_content', 'width=device-width, initial-scale=1'); ?>
    <meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#f3f4f6">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>" type="image/x-icon">

    <title>
        <?php if (is_archive()) {
            echo the_archive_title();
        } else {
            echo the_title();
        }  ?>
    </title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Header -->
    <header>
        <div class="navigation">
            <!-- Logo -->
            <a href="<?php echo home_url(); ?>" class="navigation__logo">
                <?php
                if (is_front_page()) {
                    echo    '<img src="' . get_template_directory_uri() . '/assets/img/logo_benessere_chiropratico_w.svg" alt="' . get_bloginfo('name') . '">';
                } else {
                    echo    '<img src="' . get_template_directory_uri() . '/assets/img/logo_benessere_chiropratico_b.svg" alt="' . get_bloginfo('name') . '">';
                }
                ?>
            </a>
            <!-- Menu Categoria -->
            <div class="navigation__categoria">
                <nav <?php
                        if (is_front_page()) { ?> class="navigation__categoria__wrap white-bg" <?php } else { ?> class="navigation__categoria__wrap gray-bg" <?php } ?>>
                    <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'category',
                        'container'         =>  false,
                        'menu_class'        => 'navigation__categoria__wrap__list',
                        'orderby'           => 'menu_order',
                        'items_wrap'        => '<ol id="%1$s" class="%2$s">%3$s</ol>'
                    ));
                    ?>
                </nav>
            </div>
            <div class="navigation__button">
                <!-- CTA -->
                <div class="navigation__button__cta">
                    <?php
                    if (is_front_page()) {  ?>
                        <a id="homeCta" href="#" class="button-white">
                            <span class="text">Prenota una visita</span>
                            <span class="text-1">Prenota una visita</span>
                            <span class="text-2">Prenota una visita</span>
                            <span class="shape"></span>
                        </a>
                    <?php
                    } else {  ?>
                        <a href="#" class="button-green">
                            <span class="text">Prenota una visita</span>
                            <span class="text-1">Prenota una visita</span>
                            <span class="text-2">Prenota una visita</span>
                            <span class="shape"></span>
                        </a>
                    <?php };
                    ?>
                </div>
                <!-- Hamburger button -->
                <button id="hamburgerButton" class="navigation__button__hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
        <!-- Menu Navigazione  -->
        <div id="menu">
            <div class="menu-bg-1"></div>
            <div class="menu-bg-2">
                <!-- Main menu -->
                <nav>
                    <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'primary',
                        'container'         =>  false,
                        'menu_class'        => 'main-menu',
                        'orderby'           => 'menu_order',
                        'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                    ));
                    ?>
                </nav>
                <!-- Categorie menu -->
                <nav>
                    <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'category menu',
                        'container'         =>  false,
                        'menu_class'        => 'category-menu',
                        'orderby'           => 'menu_order',
                        'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                    ));
                    ?>
                </nav>
            </div>
        </div>
    </header>