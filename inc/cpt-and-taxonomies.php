<?php

// -------------------------------
// Custom Post Types
// -------------------------------

function helpinghands_register_custom_post_types() {

    // 1. Service Offerings CPT
    $labels = array(
        'name'                     => _x( 'Service Offerings', 'post type general name', 'helpinghands-theme' ),
        'singular_name'            => _x( 'Service Offering', 'post type singular name', 'helpinghands-theme' ),
        'add_new'                  => _x( 'Add New Service Offering', 'helpinghands', 'helpinghands-theme' ),
        'add_new_item'             => __( 'Add New Service Offering', 'helpinghands-theme' ),
        'edit_item'                => __( 'Edit Service Offering', 'helpinghands-theme' ),
        'new_item'                 => __( 'New Service Offering', 'helpinghands-theme' ),
        'view_item'                => __( 'View Service Offering', 'helpinghands-theme' ),
        'view_items'               => __( 'View Service Offerings', 'helpinghands-theme' ),
        'search_items'             => __( 'Search Service Offerings', 'helpinghands-theme' ),
        'not_found'                => __( 'No service offering found.', 'helpinghands-theme' ),
        'not_found_in_trash'       => __( 'No service offering found in Trash.', 'helpinghands-theme' ),
        'parent_item_colon'        => __( 'Parent Service Offering:', 'helpinghands-theme' ),
        'all_items'                => __( 'All Service Offerings', 'helpinghands-theme' ),
        'archives'                 => __( 'Service Offering Archives', 'helpinghands-theme' ),
        'attributes'               => __( 'Service Offering Attributes', 'helpinghands-theme' ),
        'insert_into_item'         => __( 'Insert into service offering', 'helpinghands-theme' ),
        'uploaded_to_this_item'    => __( 'Uploaded to this service offering', 'helpinghands-theme' ),
        'menu_name'                => _x( 'Service Offerings', 'admin menu', 'helpinghands-theme' ),
        'filter_items_list'        => __( 'Filter service offering list', 'helpinghands-theme' ),
        'items_list_navigation'    => __( 'Service Offerings list navigation', 'helpinghands-theme' ),
        'items_list'               => __( 'Service Offerings list', 'helpinghands-theme' ),
        'item_published'           => __( 'Service Offering published', 'helpinghands-theme' ),
        'item_published_privately' => __( 'Service Offering published privately', 'helpinghands-theme' ),
        'item_revereted_to_draft'  => __( 'Service Offering reverted to draft', 'helpinghands-theme' ),
        'item_trashed'             => __( 'Service Offering trashed', 'helpinghands-theme' ),
        'item_scheduled'           => __( 'Service Offering scheduled', 'helpinghands-theme' ),
        'item_updated'             => __( 'Service Offering updated', 'helpinghands-theme' ),
        'item_link'                => __( 'Service Offering link', 'helpinghands-theme' ),
        'item_link_description'    => __( 'A link to a service offering', 'helpinghands-theme' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true, 
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true, // enables use of WP_Query
        'rewrite'            => array( 'slug' => 'services' ),
        'capability_type'    => 'post',
        'has_archive'        => true, 
        'hierarchical'       => false,
        'menu_position'      => 4,
        'menu_icon'          => 'dashicons-insert',
        'supports'           => array('editor'),
        'template_lock'      => 'all', // lock the template to prevent adding/removing blocks
        'template'           => array(
            array('core/heading', array( 
            'level' => 3, 
            'content' => 'Name of Service Offering')),
            array('core/paragraph', array( 
                'placeholder' => 'Describe the service...' ) ),
            array('core/image')
        )
    );
    register_post_type( 'services', $args );

    // 2. Resources CPT
    $labels = array(
        'name'                     => _x( 'Resources', 'post type general name', 'helpinghands-theme' ),
        'singular_name'            => _x( 'Resource', 'post type singular name', 'helpinghands-theme' ),
        'add_new'                  => _x( 'Add New Resource', 'helpinghands', 'helpinghands-theme' ),
        'add_new_item'             => __( 'Add New Resource', 'helpinghands-theme' ),
        'edit_item'                => __( 'Edit Resource', 'helpinghands-theme' ),
        'new_item'                 => __( 'New Resource', 'helpinghands-theme' ),
        'view_item'                => __( 'View Resource', 'helpinghands-theme' ),
        'view_items'               => __( 'View Resources', 'helpinghands-theme' ),
        'search_items'             => __( 'Search Resources', 'helpinghands-theme' ),
        'not_found'                => __( 'No resource found.', 'helpinghands-theme' ),
        'not_found_in_trash'       => __( 'No resource found in Trash.', 'helpinghands-theme' ),
        'parent_item_colon'        => __( 'Parent Resource:', 'helpinghands-theme' ),
        'all_items'                => __( 'All Resources', 'helpinghands-theme' ),
        'archives'                 => __( 'Resource Archives', 'helpinghands-theme' ),
        'attributes'               => __( 'Resource Attributes', 'helpinghands-theme' ),
        'insert_into_item'         => __( 'Insert into resource', 'helpinghands-theme' ),
        'uploaded_to_this_item'    => __( 'Uploaded to this resource', 'helpinghands-theme' ),
        'menu_name'                => _x( 'Resources', 'admin menu', 'helpinghands-theme' ),
        'filter_items_list'        => __( 'Filter resource list', 'helpinghands-theme' ),
        'items_list_navigation'    => __( 'Resources list navigation', 'helpinghands-theme' ),
        'items_list'               => __( 'Resources list', 'helpinghands-theme' ),
        'item_published'           => __( 'Resource published', 'helpinghands-theme' ),
        'item_published_privately' => __( 'Resource published privately', 'helpinghands-theme' ),
        'item_revereted_to_draft'  => __( 'Resource reverted to draft', 'helpinghands-theme' ),
        'item_trashed'             => __( 'Resource trashed', 'helpinghands-theme' ),
        'item_scheduled'           => __( 'Resource scheduled', 'helpinghands-theme' ),
        'item_updated'             => __( 'Resource updated', 'helpinghands-theme' ),
        'item_link'                => __( 'Resource link', 'helpinghands-theme' ),
        'item_link_description'    => __( 'A link to a resource', 'helpinghands-theme' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true, 
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true, // enables use of WP_Query
        'rewrite'            => array( 'slug' => 'resources' ),
        'capability_type'    => 'post',
        'has_archive'        => true, 
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-book', 
        'supports'           => array('editor'),
        'template_lock'      => 'all', // lock the template to prevent adding/removing blocks
        'template'           => array(

            array('core/button', array( 
            'placeholder' => 'Enter Resource Name Here...',
            'backgroundColor' => '#664024', 
            'textColor' => '#F2E9DD',
            'url' => '',
            'lock' => array(
                    'move'   => true,
                    'remove' => true,
        ),
            )
            ),

            array('core/paragraph', array( 
                'placeholder' => 'Describe the resource...',
                'lock' => array(
                    'move'   => true,
                    'remove' => true,
                ), 
            )
            ),
                )
    );
    register_post_type( 'resources', $args );

    // 3. Testimonials CPT
    $labels = array(
        'name'                     => _x( 'Testimonials', 'post type general name', 'helpinghands-theme' ),
        'singular_name'            => _x( 'Testimonial', 'post type singular name', 'helpinghands-theme' ),
        'add_new'                  => _x( 'Add New Testimonial', 'helpinghands', 'helpinghands-theme' ),
        'add_new_item'             => __( 'Add New Testimonial', 'helpinghands-theme' ),
        'edit_item'                => __( 'Edit Testimonial', 'helpinghands-theme' ),
        'new_item'                 => __( 'New Testimonial', 'helpinghands-theme' ),
        'view_item'                => __( 'View Testimonial', 'helpinghands-theme' ),
        'view_items'               => __( 'View Testimonials', 'helpinghands-theme' ),
        'search_items'             => __( 'Search Testimonials', 'helpinghands-theme' ),
        'not_found'                => __( 'No testimonial found.', 'helpinghands-theme' ),
        'not_found_in_trash'       => __( 'No testimonial found in Trash.', 'helpinghands-theme' ),
        'parent_item_colon'        => __( 'Parent Testimonial:', 'helpinghands-theme' ),
        'all_items'                => __( 'All Testimonials', 'helpinghands-theme' ),
        'archives'                 => __( 'Testimonial Archives', 'helpinghands-theme' ),
        'attributes'               => __( 'Testimonial Attributes', 'helpinghands-theme' ),
        'insert_into_item'         => __( 'Insert into testimonial', 'helpinghands-theme' ),
        'uploaded_to_this_item'    => __( 'Uploaded to this testimonial', 'helpinghands-theme' ),
        'menu_name'                => _x( 'Testimonials', 'admin menu', 'helpinghands-theme' ),
        'filter_items_list'        => __( 'Filter testimonial list', 'helpinghands-theme' ),
        'items_list_navigation'    => __( 'Testimonials list navigation', 'helpinghands-theme' ),
        'items_list'               => __( 'Testimonials list', 'helpinghands-theme' ),
        'item_published'           => __( 'Testimonial published', 'helpinghands-theme' ),
        'item_published_privately' => __( 'Testimonial published privately', 'helpinghands-theme' ),
        'item_revereted_to_draft'  => __( 'Testimonial reverted to draft', 'helpinghands-theme' ),
        'item_trashed'             => __( 'Testimonial trashed', 'helpinghands-theme' ),
        'item_scheduled'           => __( 'Testimonial scheduled', 'helpinghands-theme' ),
        'item_updated'             => __( 'Testimonial updated', 'helpinghands-theme' ),
        'item_link'                => __( 'Testimonial link', 'helpinghands-theme' ),
        'item_link_description'    => __( 'A link to a testimonial', 'helpinghands-theme' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true, 
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true, // enables use of WP_Query
        'rewrite'            => array( 'slug' => 'testimonials' ),
        'capability_type'    => 'post',
        'has_archive'        => true, 
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-format-quote',
        'supports'           => array('editor'),
        'template_lock'      => 'all', // lock the template to prevent adding/removing blocks
        'template'           => array(

            array('core/pullquote', array( 
            'value' => 'Enter testimonial content here...', 
            'citation' => "Person's name")),
        )
    );
    register_post_type( 'testimonials', $args );
}
add_action( 'init', 'helpinghands_register_custom_post_types' );

// -------------------------------
// Taxonomies
// -------------------------------

// 1. Resource Categories Taxonomy
function helpinghands_register_taxonomies() {
    $labels = array(
        'name'                  => _x( 'Categories', 'taxonomy general name', 'helpinghands-theme' ),
        'singular_name'         => _x( 'Category', 'taxonomy singular name', 'helpinghands-theme' ),
        'search_items'          => __( 'Search Categories', 'helpinghands-theme' ),
        'all_items'             => __( 'All Categories', 'helpinghands-theme' ),
        'parent_item'           => __( 'Parent Category', 'helpinghands-theme' ),
        'parent_item_colon'     => __( 'Parent Category:', 'helpinghands-theme' ),
        'edit_item'             => __( 'Edit Category', 'helpinghands-theme' ),
        'view_item'             => __( 'View Category', 'helpinghands-theme' ),
        'update_item'           => __( 'Update Category', 'helpinghands-theme' ),
        'add_new_item'          => __( 'Add New Category', 'helpinghands-theme' ),
        'new_item_name'         => __( 'New Category Name', 'helpinghands-theme' ),
        'template_name'         => __( 'Category Archives', 'helpinghands-theme' ),
        'menu_name'             => __( 'Categories', 'helpinghands-theme' ),
        'not_found'             => __( 'No categories found.', 'helpinghands-theme' ),
        'no_terms'              => __( 'No categories', 'helpinghands-theme' ),
        'items_list_navigation' => __( 'Category list navigation', 'helpinghands-theme' ),
        'items_list'            => __( 'Category list', 'helpinghands-theme' ),
        'item_link'             => __( 'Category Link', 'helpinghands-theme' ),
        'item_link_description' => __( 'A link to a category.', 'helpinghands-theme' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'category' ),
    );

    register_taxonomy( 'category', array( 'resources' ), $args );
}
add_action( 'init', 'helpinghands_register_taxonomies' );
