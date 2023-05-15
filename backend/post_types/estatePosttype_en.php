<?php

function create_estates_PostType_en() {

    $labels = [
        'name'                  => _x( 'Estates englisch', 'Post Type General Name', 'eugen' ),
        'singular_name'         => _x( 'Estates englisch', 'Post Type Singular Name', 'eugen' ),
        'menu_name'             => _x( 'Estates englisch', 'Admin Menu text', 'eugen' ),
        'name_admin_bar'        => _x( 'Estates englisch', 'Add New on Toolbar', 'eugen' ),
        'archives'              => __( 'Estates Archives', 'eugen' ),
        'attributes'            => __( 'Estates Attributes', 'eugen' ),
        'parent_item_colon'     => __( 'Parent Estates:', 'eugen' ),
        'all_items'             => __( 'Alle Estates', 'eugen' ),
        'add_new_item'          => __( 'Add New Estates', 'eugen' ),
        'add_new'               => __( 'Add New', 'eugen' ),
        'new_item'              => __( 'New Estates', 'eugen' ),
        'edit_item'             => __( 'Edit Estates', 'eugen' ),
        'update_item'           => __( 'Update Estates', 'eugen' ),
        'view_item'             => __( 'View Estates', 'eugen' ),
        'view_items'            => __( 'View Estates', 'eugen' ),
        'search_items'          => __( 'Search Estates', 'eugen' ),
        'not_found'             => __( 'Not found', 'eugen' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'eugen' ),
        'featured_image'        => __( 'Featured Image', 'eugen' ),
        'set_featured_image'    => __( 'Set featured image', 'eugen' ),
        'remove_featured_image' => __( 'Remove featured image', 'eugen' ),
        'use_featured_image'    => __( 'Use as featured image', 'eugen' ),
        //'insert_into_item'      => __( 'Insert into Apartment', 'eugen' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Estates', 'eugen' ),
        'items_list'            => __( 'Estates list', 'eugen' ),
        'items_list_navigation' => __( 'Estates list navigation', 'eugen' ),
        'filter_items_list'     => __( 'Filter Estates list', 'eugen' ),
    ];
    $args   = [
        'label'               => __( 'Estates', 'eugen' ),
        'description'         => __( 'The Estates', 'eugen' ),
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

    register_post_type( 'estates_en', $args );

}

add_action( 'init', 'create_estates_PostType_en' , 0 );