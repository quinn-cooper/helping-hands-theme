<?php
/**
 * PHP file to use when rendering the block type on the server to show on the front end.
 *
 * The following variables are exposed to the file:
 *     $attributes (array): The block attributes.
 *     $content (string): The block default content.
 *     $block (WP_Block): The block instance.
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>


<?php
$address = get_field('address', 'option');
$phone = get_field('phone_number', 'option');
$email = get_field('email', 'option');
?>

<div <?php echo get_block_wrapper_attributes(); ?>>

	<?php if ($address) : ?>
	<p><strong>Address:</strong> <?php echo esc_html($address); ?></p>
	<?php endif; ?>

	<?php if ($phone) : ?>
	<p><strong>Phone:</strong> <?php echo esc_html($phone); ?></p>
	<?php endif; ?>

	<?php if ($email) : ?>
	<p><strong>Email:</strong> <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a></p>
	<?php endif; ?>

</div>

