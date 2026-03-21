<?php
/**
 * Plugin Name:       HHC Blocks
 * Description:       Custom blocks for the Helping Hands Counselling site.
 * Version:           0.1.0
 * Requires at least: 6.8
 * Requires PHP:      7.4
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       hhc-blocks
 *
 * @package HhcBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Registers the block(s) metadata from the `blocks-manifest.php` and registers the block type(s)
 * based on the registered block metadata. Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://make.wordpress.org/core/2025/03/13/more-efficient-block-type-registration-in-6-8/
 * @see https://make.wordpress.org/core/2024/10/17/new-block-type-registration-apis-to-improve-performance-in-wordpress-6-7/
 */
function hhc_blocks_hhc_blocks_block_init() {
	wp_register_block_types_from_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
}
add_action( 'init', 'hhc_blocks_hhc_blocks_block_init' );

// Add a render callback for the testimonial slider block
function hhc_testimonials_slider_render_callback( $args, $block_type ) {
    if ( 'hhc-blocks/testimonials-slider' === $block_type ) {
    $args['render_callback'] = 'hhc_render_testimonials_slider';
}
    return $args;
}

add_filter( 'register_block_type_args', 'hhc_testimonials_slider_render_callback', 10, 2 );

// <!-- Add variable that store string containing css custom prop (from edit.js) & arrowColor att as value -->
function hhc_render_testimonials_slider( $attributes ) {
	ob_start();
	$swiper_settings = array(
		'navigation' => $attributes['navigation'],
		'pagination' => $attributes['pagination'],
	);
    
    $styles = "--arrow-color: " . $attributes[ "arrowColor" ];
    ?>
    <div <?php echo get_block_wrapper_attributes( array( "style" => $styles ) );
    ?>>
        <script>
            const swiper_settings = <?php echo json_encode( $swiper_settings ); ?>;
            
        </script>
        <?php
        $args = array(
            'post_type'      => 'testimonials',
            'posts_per_page' => -1
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) : ?>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="swiper-slide">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php if ( $attributes['pagination'] ) : ?>
                <div class="swiper-pagination"></div>
            <?php endif; ?>
            <?php if ( $attributes['navigation'] ) : ?>
                <button class="swiper-button-prev"></button>
                <button class="swiper-button-next"></button>
            <?php endif; ?>
            <?php
            wp_reset_postdata();
        endif;
        ?>
    </div>

    <?php
    return ob_get_clean();
}
?>