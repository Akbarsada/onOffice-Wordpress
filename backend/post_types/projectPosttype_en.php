<?php

function create_project_PostType_english() {

    $labels = [
        'name'                  => _x( 'Projekte englisch', 'Post Type General Name', 'eugen' ),
        'singular_name'         => _x( 'Projekte englisch', 'Post Type Singular Name', 'eugen' ),
        'menu_name'             => _x( 'Projekte englisch', 'Admin Menu text', 'eugen' ),
        'name_admin_bar'        => _x( 'Projekte englisch', 'Add New on Toolbar', 'eugen' ),
        'archives'              => __( 'Projekte Archives', 'eugen' ),
        'attributes'            => __( 'Projekte Attributes', 'eugen' ),
        'parent_item_colon'     => __( 'Parent Projekte:', 'eugen' ),
        'all_items'             => __( 'Alle Projekte', 'eugen' ),
        'add_new_item'          => __( 'Add New Projekte', 'eugen' ),
        'add_new'               => __( 'Add New', 'eugen' ),
        'new_item'              => __( 'New Projekte', 'eugen' ),
        'edit_item'             => __( 'Edit Projekte', 'eugen' ),
        'update_item'           => __( 'Update Projekte', 'eugen' ),
        'view_item'             => __( 'View Projekte', 'eugen' ),
        'view_items'            => __( 'View Projekte', 'eugen' ),
        'search_items'          => __( 'Search Projekte', 'eugen' ),
        'not_found'             => __( 'Not found', 'eugen' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'eugen' ),
        'featured_image'        => __( 'Featured Image', 'eugen' ),
        'set_featured_image'    => __( 'Set featured image', 'eugen' ),
        'remove_featured_image' => __( 'Remove featured image', 'eugen' ),
        'use_featured_image'    => __( 'Use as featured image', 'eugen' ),
        //'insert_into_item'      => __( 'Insert into Apartment', 'eugen' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Projekte', 'eugen' ),
        'items_list'            => __( 'Projekte list', 'eugen' ),
        'items_list_navigation' => __( 'Projekte list navigation', 'eugen' ),
        'filter_items_list'     => __( 'Filter Projekte list', 'eugen' ),
    ];
    $args   = [
        'label'               => __( 'Projekte', 'eugen' ),
        'description'         => __( 'Projekte', 'eugen' ),
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

    register_post_type( 'projects_en', $args );

}

add_action( 'init', 'create_project_PostType_english' , 0 );