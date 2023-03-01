<?php

/**
 * Adds the following features to OMP Theme:
 * - post-thumbnails
 * - title-tag
 * - custom-logo
 * - post-thumbnail
 *
 * @return void
 */
function Omp_Theme_support()
{
    // Adds post thumbnail support
    add_theme_support('post-thumbnails');
    // Adds dynamic title tag support for pages that have no title
    add_theme_support('title-tag');
    // Adds dynamic custom logo support
    add_theme_support('custom-logo');
    // Adds post thumbnail support
    add_theme_support('post-thumbnails');
}
add_action('after_theme_support', 'Omp_theme_support');


function Omp_Excerpt_length($length)
{
    return 20;
}
add_filter('excerpt_length', 'omp_excerpt_length');


function Omp_New_Excerpt_more($more)
{
    global $post;
    return '... </a>';
}
add_filter('excerpt_more', 'omp_new_excerpt_more');

/**
 * Adds theme css
 *
 * @return void
 */
function Omp_Register_styles()
{
    wp_enqueue_style(
        'bootstrap-css',
        get_template_directory_uri() . "/assets/bootstrap/bootstrap.min.css",
        array(),
        '5.2.3',
        'all'
    );

    wp_enqueue_style(
        'bootstrap-icons',
        "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css",
        array('bootstrap-css'),
        '5.2.3',
        'all'
    );

    wp_enqueue_style(
        'ompsec_navbar',
        get_template_directory_uri() . "/styles/navbar.css",
        array(),
        '1.0',
        'all'
    );

    wp_enqueue_style(
        'ompsec_footer',
        get_template_directory_uri() . "/styles/footer.css",
        array(),
        '1.0',
        'all'
    );

    if (is_front_page() or is_404()) {
        wp_enqueue_style(
            'ompsec_frontpage',
            get_template_directory_uri() . "/styles/front-page.css",
            array('bootstrap-css'),
            '1.0',
            'all'
        );
    } elseif (is_home() or is_page_template("announcements")) {
        wp_enqueue_style(
            'ompsec_announcements',
            get_template_directory_uri() . "/styles/announcements.css",
            array('bootstrap-css'),
            '1.0',
            'all'
        );
    } elseif (is_page("values")) {
        wp_enqueue_style(
            'ompsec_values',
            get_template_directory_uri() . "/styles/mission-vision.css",
            array('bootstrap-css'),
            '1.0',
            'all'
        );
    } elseif (is_page("personnel")) {
        wp_enqueue_style(
            'ompsec_personnel',
            get_template_directory_uri() . "/styles/personnel.css",
            array('bootstrap-css'),
            '1.0',
            'all'
        );
    } elseif (is_page("service-delivery-and-operations")) {
        wp_enqueue_style(
            'ompsec_service-delivery-and-operations',
            get_template_directory_uri() . "/styles/service-delivery-and-operations.css",
            array('bootstrap-css', 'bootstrap-icons'),
            '1.0',
            'all'
        );
    } elseif (is_page("our-guards")) {
        wp_enqueue_style(
            'ompsec_our-guards',
            get_template_directory_uri() . "/styles/our-guards.css",
            array('bootstrap-css'),
            '1.0',
            'all'
        );
    } elseif (is_page("hiring")) {
        wp_enqueue_style(
            'ompsec_hiring',
            get_template_directory_uri() . "/styles/hiring.css",
            array('bootstrap-css'),
            '1.0',
            'all'
        );
    } elseif (is_page("contact")) {
        wp_enqueue_style(
            'ompsec_contact',
            get_template_directory_uri() . "/styles/contact.css",
            array('bootstrap-css'),
            '1.0',
            'all'
        );
    } elseif (is_single()) {
        wp_enqueue_style(
            'ompsec_single',
            get_template_directory_uri() . "/styles/single.css",
            array('bootstrap-css'),
            '1.0',
            'all'
        );
    }
}

/**
 * Adds theme scripts
 *
 * @return void
 */
function Omp_Register_scripts()
{
    wp_enqueue_script(
        'bootstrap-js',
        get_template_directory_uri() . "/assets/bootstrap/bootstrap.bundle.min.js",
        array(),
        '5.2.3',
        true
    );

    wp_enqueue_script(
        'email-popover',
        get_template_directory_uri() . "/js/email-popover.js",
        array(),
        '1.0',
        true
    );

    wp_enqueue_script(
        'services',
        get_template_directory_uri() . "/js/services.js",
        array(),
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'Omp_Register_styles');
add_action('wp_enqueue_scripts', 'Omp_Register_scripts');
