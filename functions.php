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
// Image Sizes
// -------------------------------

function helpinghands_image_sizes() {
    
    // Load style.css on backend 
    add_editor_style(get_stylesheet_uri( ));

    // Thumbnail or small preview
    add_image_size('thumbnail', 400, 300, true);

    // Medium size
    add_image_size('medium', 800, 600, true);

    // Portrait orientation
    add_image_size('portrait', 600, 900, true);

    // Featured image
    add_image_size('featured', 900, 800, true);

    // Banner image
    add_image_size('banner', 1200, 600, true);
}
add_action( 'after_setup_theme', 'helpinghands_image_sizes');

// Make custom image sizes available in the media library
function helpinghands_custom_image_sizes($sizes) {
    $new_sizes = array (
        'thumbnail' => __('Thumbnail (400x300)', 'helping-hands'),
        'medium' => __('Medium (800x600)', 'helping-hands'),
        'portrait' => __('Portrait (600x900)', 'helping-hands'),
        'featured' => __('Featured (900x800)', 'helping-hands'),
        'banner' => __('Banner (1200x600)', 'helping-hands')
    );
    return array_merge($sizes, $new_sizes);
}
add_filter('image_size_names_choose', 'helpinghands_custom_image_sizes');

// -------------------------------
// CPTs & Blocks
// -------------------------------

// Register CPT
require get_theme_file_path() . '/inc/cpt-and-taxonomies.php';

// Register Blocks
require get_theme_file_path() . '/hhc-blocks/hhc-blocks.php';