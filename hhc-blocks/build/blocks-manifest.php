<?php
// This file is generated. Do not modify it manually.
return array(
	'business-info-address' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'hhc-blocks/business-info-address',
		'version' => '0.1.0',
		'title' => 'Business Info - Address',
		'category' => 'text',
		'icon' => 'location',
		'description' => 'Custom block for the address on ACF Options Page',
		'example' => array(
			
		),
		'supports' => array(
			'align' => false,
			'html' => false
		),
		'textdomain' => 'business-info-address',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'render' => 'file:./render.php',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	),
	'business-info-email' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'hhc-blocks/business-info-email',
		'version' => '0.1.0',
		'title' => 'Business Info - Email',
		'category' => 'text',
		'icon' => 'email',
		'description' => 'Custom block for the email on ACF Options Page',
		'example' => array(
			
		),
		'supports' => array(
			'align' => false,
			'html' => false
		),
		'textdomain' => 'business-info-email',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScript' => 'file:./view.js'
	),
	'business-info-phone' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'hhc-blocks/business-info-phone',
		'version' => '0.1.0',
		'title' => 'Business Info - Phone Number',
		'category' => 'text',
		'icon' => 'phone',
		'description' => 'Custom block for the phone number on ACF Options Page',
		'example' => array(
			
		),
		'supports' => array(
			'align' => false,
			'html' => false
		),
		'textdomain' => 'business-info-phone',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScript' => 'file:./view.js'
	),
	'copyright-date' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'hhc-blocks/copyright-date',
		'version' => '0.1.0',
		'title' => 'Copyright Date',
		'category' => 'text',
		'icon' => 'privacy',
		'description' => 'A custom block for the copyright date.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'copyright-date',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	),
	'link-wrapper' => array(
		'apiVersion' => 3,
		'name' => 'hhc-blocks/link-wrapper',
		'title' => 'Link Wrapper',
		'category' => 'design',
		'icon' => 'admin-links',
		'description' => 'Makes an entire block group clickable.',
		'attributes' => array(
			'url' => array(
				'type' => 'string',
				'default' => ''
			)
		),
		'supports' => array(
			'html' => false,
			'anchor' => false,
			'reusable' => false,
			'multiple' => true
		),
		'allowedBlocks' => array(
			'core/group',
			'core/heading',
			'core/paragraph'
		),
		'templateLock' => 'all',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./editor.css',
		'style' => 'file:./style.css'
	),
	'testimonials-slider' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'hhc-blocks/testimonials-slider',
		'version' => '0.1.0',
		'title' => 'Testimonials Slider',
		'category' => 'design',
		'icon' => 'format-quote',
		'description' => 'A custom block for client testimonials.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'multiple' => false
		),
		'attributes' => array(
			'navigation' => array(
				'type' => 'boolean',
				'default' => true
			),
			'pagination' => array(
				'type' => 'boolean',
				'default' => true
			),
			'arrowColor' => array(
				'type' => 'string',
				'default' => '#664024'
			)
		),
		'textdomain' => 'testimonials-slider',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	)
);
