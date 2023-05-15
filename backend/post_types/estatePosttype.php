<?php

function create_estate_PostType() {

    $labels = [
        'name'                  => _x( 'Estate', 'Post Type General Name', 'eugen' ),
        'singular_name'         => _x( 'Apartment', 'Post Type Singular Name', 'eugen' ),
        'menu_name'             => _x( 'Estate', 'Admin Menu text', 'eugen' ),
        'name_admin_bar'        => _x( 'Estate', 'Add New on Toolbar', 'eugen' ),
        'archives'              => __( 'Estate Archives', 'eugen' ),
        'attributes'            => __( 'Estate Attributes', 'eugen' ),
        'parent_item_colon'     => __( 'Parent Estate:', 'eugen' ),
        'all_items'             => __( 'Alle Estate', 'eugen' ),
        'add_new_item'          => __( 'Add New Estate', 'eugen' ),
        'add_new'               => __( 'Add New', 'eugen' ),
        'new_item'              => __( 'New Estate', 'eugen' ),
        'edit_item'             => __( 'Edit Estate', 'eugen' ),
        'update_item'           => __( 'Update Estate', 'eugen' ),
        'view_item'             => __( 'View Estate', 'eugen' ),
        'view_items'            => __( 'View Estate', 'eugen' ),
        'search_items'          => __( 'Search Estate', 'eugen' ),
        'not_found'             => __( 'Not found', 'eugen' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'eugen' ),
        'featured_image'        => __( 'Featured Image', 'eugen' ),
        'set_featured_image'    => __( 'Set featured image', 'eugen' ),
        'remove_featured_image' => __( 'Remove featured image', 'eugen' ),
        'use_featured_image'    => __( 'Use as featured image', 'eugen' ),
        //'insert_into_item'      => __( 'Insert into Apartment', 'eugen' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Estate', 'eugen' ),
        'items_list'            => __( 'Estate list', 'eugen' ),
        'items_list_navigation' => __( 'Estate list navigation', 'eugen' ),
        'filter_items_list'     => __( 'Filter Estate list', 'eugen' ),
    ];
    $args   = [
        'label'               => __( 'Estate', 'eugen' ),
        'description'         => __( 'The estate', 'eugen' ),
        'labels'              => $labels,
        'menu_icon'           => 'dashicons-admin-home',
        'supports'            => [
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
            'author',
            'comments',
            'trackbacks',
            'page-attributes',
            'custom-fields',
        ],
        'taxonomies'          => [],
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 3,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'hierarchical'        => false,
        'exclude_from_search' => false,
        'show_in_rest'        => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    ];

    register_post_type( 'estates', $args );

}

add_action( 'init', 'create_estate_PostType' , 0 );