<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header <?php echo is_front_page() ? '' : 'header--active'; ?>">
        <div id="navNormal">
            <nav>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => '',
                    'items_wrap' => '<ul>%3$s</ul>',
                ));
                ?>
            </nav>
        </div>
        <div class="header__logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <h1><?php bloginfo('name'); ?></h1>
                <?php endif; ?>
            </a>
        </div>
        <div id="navMobile">
            <!-- Mobile menu toggle -->
            <div class="header__navbar">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-icon.png" alt="Menu" class="navbar__toggle">
            </div>
        </div>
    </header>
