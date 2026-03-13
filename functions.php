<?php

// -------------------------------
// Enqueue Styles & Scripts
// -------------------------------
function helping_hands_enqueue_scripts() {

    // 1. Normalize CSS
    wp_enqueue_style(
        'normalize',
        get_theme_file_uri('assets/css/normalize.css'),
        array(),
        '12.1.1'
    );
    // 2. Main Theme stylesheet
    wp_enqueue_style(
        'helping-hands-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version'),
        'all'
    );

    // 3. Navigation CSS
    wp_enqueue_style(
        'navigation',
        get_theme_file_uri('assets/css/navigation.css'),
        array(),
        '12.1.1'
    );
}
add_action('wp_enqueue_scripts', 'helping_hands_enqueue_scripts');

// -------------------------------
// CPTs & Blocks
// -------------------------------

// Register CPT
require get_theme_file_path() . '/inc/cpt-and-taxonomies.php';

// Register Blocks