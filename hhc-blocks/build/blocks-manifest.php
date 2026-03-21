<?php
// This file is generated. Do not modify it manually.
return array(
	'aos-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'hhc-blocks/aos-block',
		'version' => '0.1.0',
		'title' => 'AOS Block',
		'category' => 'widgets',
		'icon' => 'move',
		'description' => 'An AOS block for the Helping Hands Counselling website.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'animation' => array(
				'type' => 'string',
				'default' => 'fade-up'
			),
			'duration' => array(
				'type' => 'number',
				'default' => 1000
			)
		),
		'textdomain' => 'aos-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	),
	'business-info' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'hhc-blocks/business-info',
		'version' => '0.1.0',
		'title' => 'Business Info',
		'category' => 'text',
		'icon' => 'store',
		'description' => 'Custom block for the ACF Pro Options Page.',
		'example' => array(
			
		),
		'supports' => array(
			'align' => false,
			'html' => false
		),
		'textdomain' => 'business-info',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'render' => 'file:./render.php',
		'style' => 'file:./style-index.css',
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
