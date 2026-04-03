<?php

// -------------------------------
// Enqueue Styles & Scripts
// -------------------------------
function helping_hands_enqueue_styles() {

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

    // 4. AOS CSS
    wp_enqueue_style('aos-css', 
        'https://unpkg.com/aos@2.3.1/dist/aos.css', 
        array(), //  dependencies
        '2.3.4', //  version
    );

}
add_action('wp_enqueue_scripts', 'helping_hands_enqueue_styles');

function helping_hands_enqueue_scripts() {

    // 1. AOS JS
    wp_enqueue_script('aos-js', 
        'https://unpkg.com/aos@2.3.1/dist/aos.js', 
        array(), //  dependencies
        '2.3.4', //  version
        true //  in footer
    );

    // 2. Main JS
    wp_enqueue_script(
        'helping-hands-script',
        get_theme_file_uri('js/main.js'),
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    // 3. Initialize JS
    // Set to false while testing; set to true once it's working  
    // offset forces animation
    wp_add_inline_script(
        'aos-js', 
        'AOS.init({
            duration: 1000,
            once: false,
            offset: 100 
        });'  
    );

    // 4. Dynamic pop-up window for cookies
    wp_enqueue_script(
        'custom-modal-script',
        get_template_directory_uri() . '/js/custom-modal.js',
        array(),
        '1.0.0',
        true
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

    // Small portrait orientation
    add_image_size('small-portrait', 600, 820, true);

    // Medium size
    add_image_size('medium', 800, 600, true);

    // Portrait orientation
    add_image_size('portrait', 600, 900, true);

    // Featured image
    add_image_size('featured', 900, 800, true);

    // Banner image
    add_image_size('banner', 1200, 600, true);

    // Hero image
    add_image_size('hero', 1600, 600, true);
}
add_action( 'after_setup_theme', 'helpinghands_image_sizes');

// Make custom image sizes available in the media library
function helpinghands_custom_image_sizes($sizes) {
    $new_sizes = array (
        'thumbnail' => __('Thumbnail (400x300)', 'helping-hands'),
        'small-portrait' => __('Small Portrait (600x820)', 'helping-hands'),
        'medium' => __('Medium (800x600)', 'helping-hands'),
        'portrait' => __('Portrait (600x900)', 'helping-hands'),
        'featured' => __('Featured (900x800)', 'helping-hands'),
        'banner' => __('Banner (1200x600)', 'helping-hands'),
        'hero' => __('Hero (1600x600)', 'helping-hands')
    );
    return array_merge($sizes, $new_sizes);
}
add_filter('image_size_names_choose', 'helpinghands_custom_image_sizes');

// -------------------------------
// Cookies
// -------------------------------

// Output cookie popup HTML in the footer
function hhc_cookie_modal_html() {
    ?>
    <div id="cookie-consent-modal" class="cookie-modal" style="display:none;">
        <div class="cookie-modal-content">
            <p>This site uses cookies to improve your experience. Read our <a href="/privacy-policy">Privacy Policy</a> for more information.</p>
            <div class="cookie-modal-buttons">
                <button class="accept-cookies">Accept</button>
                <button class="decline-cookies">Decline</button>
            </div>
        </div>
    </div>
    <?php
}
add_action('wp_footer', 'hhc_cookie_modal_html');

// -------------------------------
// CPTs & Blocks
// -------------------------------

// Register CPT
require get_theme_file_path() . '/inc/cpt-and-taxonomies.php';

// Register Blocks
require get_theme_file_path() . '/hhc-blocks/hhc-blocks.php';