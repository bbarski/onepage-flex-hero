<?php
// Rejestracja menu
function theme_setup() {
    register_nav_menus(array(
        'primary' => 'Główne menu',
    ));
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'theme_setup');

// Rejestracja widgetów
function theme_widgets_init() {
    register_sidebar(array(
        'name' => 'Stopka 1',
        'id' => 'footer-1',
        'before_widget' => '<div class="footer__description">',
        'after_widget' => '</div>',
        'before_title' => '<div class="footer__title"><h1>',
        'after_title' => '</h1></div><div class="footer__underline"><span></span><span></span></div>',
    ));
}
add_action('widgets_init', 'theme_widgets_init');

// Dodanie stylów i skryptów
function theme_scripts() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;800&display=swap');
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'theme_scripts');
?>
