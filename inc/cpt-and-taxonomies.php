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
        'supports'           => array( 'title', 'editor'),
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
        'rewrite'            => array( 'slug' => 'services' ),
        'capability_type'    => 'post',
        'has_archive'        => true, 
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-book', 
        'supports'           => array( 'title', 'editor'),
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
}
add_action( 'init', 'helpinghands_register_custom_post_types' );
