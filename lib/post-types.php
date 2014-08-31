<?php
if ( ! function_exists('partner_post_type') ) {

// Register Custom Post Type
function partner_post_type() {

  $labels = array(
    'name'                => _x( 'Partners', 'Post Type General Name', 'ramprate' ),
    'singular_name'       => _x( 'Partner', 'Post Type Singular Name', 'ramprate' ),
    'menu_name'           => __( 'Partners', 'ramprate' ),
    'parent_item_colon'   => __( 'Parent Item:', 'ramprate' ),
    'all_items'           => __( 'All Partners', 'ramprate' ),
    'view_item'           => __( 'View Partner', 'ramprate' ),
    'add_new_item'        => __( 'Add New Partner', 'ramprate' ),
    'add_new'             => __( 'Add New ', 'ramprate' ),
    'edit_item'           => __( 'Edit Partner', 'ramprate' ),
    'update_item'         => __( 'Update Partner', 'ramprate' ),
    'search_items'        => __( 'Search Partners', 'ramprate' ),
    'not_found'           => __( 'Not found', 'ramprate' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'ramprate' ),
  );
    $rewrite = array(
        'slug'                => 'partners',
        'with_front'          => false,
        'pages'               => true,
        'feeds'               => true,
    );
  $args = array(
    'label'               => __( 'Partner', 'ramprate' ),
    'description'         => __( 'Partners pages', 'ramprate' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', /*'author',*/ 'thumbnail', /*'comments',*/ /*'trackbacks',*/ 'revisions', 'custom-fields', 'page-attributes', /*'post-formats',*/ ),
    //'taxonomies'          => array( 'category', 'post_tag' ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    //'menu_icon'           => '',
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'rewrite'             => $rewrite,
    'capability_type'     => 'page',
  );
  register_post_type( 'partner', $args );

}

// Hook into the 'init' action
add_action( 'init', 'partner_post_type', 0 );

}

if ( ! function_exists('client_post_type') ) {

// Register Custom Post Type
function client_post_type() {

  $labels = array(
    'name'                => _x( 'Clients', 'Post Type General Name', 'ramprate' ),
    'singular_name'       => _x( 'Client', 'Post Type Singular Name', 'ramprate' ),
    'menu_name'           => __( 'Clients', 'ramprate' ),
    'parent_item_colon'   => __( 'Parent Item:', 'ramprate' ),
    'all_items'           => __( 'All Clients', 'ramprate' ),
    'view_item'           => __( 'View Client', 'ramprate' ),
    'add_new_item'        => __( 'Add New Client', 'ramprate' ),
    'add_new'             => __( 'Add New ', 'ramprate' ),
    'edit_item'           => __( 'Edit Client', 'ramprate' ),
    'update_item'         => __( 'Update Client', 'ramprate' ),
    'search_items'        => __( 'Search Clients', 'ramprate' ),
    'not_found'           => __( 'Not found', 'ramprate' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'ramprate' ),
  );
    $rewrite = array(
        'slug'                => 'clients',
        'with_front'          => false,
        'pages'               => true,
        'feeds'               => true,
    );
  $args = array(
    'label'               => __( 'Client', 'ramprate' ),
    'description'         => __( 'Clients pages', 'ramprate' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', /*'author',*/ 'thumbnail', /*'comments',*/ /*'trackbacks',*/ 'revisions', 'custom-fields', 'page-attributes', /*'post-formats',*/ ),
    'taxonomies'          => array( 'client_category' ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    //'menu_icon'           => '',
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'rewrite'             => $rewrite,
    'capability_type'     => 'page',
  );
  register_post_type( 'client', $args );

}

// Hook into the 'init' action
add_action( 'init', 'client_post_type', 0 );

}

if ( ! function_exists('resource_post_type') ) {

// Register Custom Post Type
function resource_post_type() {

  $labels = array(
    'name'                => _x( 'Resources', 'Post Type General Name', 'ramprate' ),
    'singular_name'       => _x( 'Resource', 'Post Type Singular Name', 'ramprate' ),
    'menu_name'           => __( 'Resources', 'ramprate' ),
    'parent_item_colon'   => __( 'Parent Item:', 'ramprate' ),
    'all_items'           => __( 'All Resources', 'ramprate' ),
    'view_item'           => __( 'View Resource', 'ramprate' ),
    'add_new_item'        => __( 'Add New Resource', 'ramprate' ),
    'add_new'             => __( 'Add New ', 'ramprate' ),
    'edit_item'           => __( 'Edit Resource', 'ramprate' ),
    'update_item'         => __( 'Update Resource', 'ramprate' ),
    'search_items'        => __( 'Search Resources', 'ramprate' ),
    'not_found'           => __( 'Not found', 'ramprate' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'ramprate' ),
  );
    $rewrite = array(
        'slug'                => 'resources',
        'with_front'          => false,
        'pages'               => true,
        'feeds'               => true,
    );
  $args = array(
    'label'               => __( 'Resource', 'ramprate' ),
    'description'         => __( 'Resources pages', 'ramprate' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', /*'author',*/ 'thumbnail', /*'comments',*/ /*'trackbacks',*/ 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
    'taxonomies'          => array( 'type' ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    //'menu_icon'           => '',
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'rewrite'             => $rewrite,
    'capability_type'     => 'page',
  );
  register_post_type( 'resource', $args );

}

// Hook into the 'init' action
add_action( 'init', 'resource_post_type', 0 );

}

if ( ! function_exists( 'resource_type' ) ) {

// Register Custom Taxonomy
function resource_type() {

    $labels = array(
        'name'                       => _x( 'Types', 'Taxonomy General Name', 'rampate' ),
        'singular_name'              => _x( 'Type', 'Taxonomy Singular Name', 'rampate' ),
        'menu_name'                  => __( 'Type', 'rampate' ),
        'all_items'                  => __( 'All Items', 'rampate' ),
        'parent_item'                => __( 'Parent Item', 'rampate' ),
        'parent_item_colon'          => __( 'Parent Item:', 'rampate' ),
        'new_item_name'              => __( 'New Item Name', 'rampate' ),
        'add_new_item'               => __( 'Add New Item', 'rampate' ),
        'edit_item'                  => __( 'Edit Item', 'rampate' ),
        'update_item'                => __( 'Update Item', 'rampate' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'rampate' ),
        'search_items'               => __( 'Search Items', 'rampate' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'rampate' ),
        'choose_from_most_used'      => __( 'Choose from the most used items', 'rampate' ),
        'not_found'                  => __( 'Not Found', 'rampate' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'type', array( 'resource' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'resource_type', 0 );

}

if ( ! function_exists( 'client_category' ) ) {

// Register Custom Taxonomy
function client_category() {

    $labels = array(
        'name'                       => _x( 'Categories', 'Taxonomy General Name', 'rampate' ),
        'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'rampate' ),
        'menu_name'                  => __( 'Category', 'rampate' ),
        'all_items'                  => __( 'All Items', 'rampate' ),
        'parent_item'                => __( 'Parent Item', 'rampate' ),
        'parent_item_colon'          => __( 'Parent Item:', 'rampate' ),
        'new_item_name'              => __( 'New Item Name', 'rampate' ),
        'add_new_item'               => __( 'Add New Item', 'rampate' ),
        'edit_item'                  => __( 'Edit Item', 'rampate' ),
        'update_item'                => __( 'Update Item', 'rampate' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'rampate' ),
        'search_items'               => __( 'Search Items', 'rampate' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'rampate' ),
        'choose_from_most_used'      => __( 'Choose from the most used items', 'rampate' ),
        'not_found'                  => __( 'Not Found', 'rampate' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'client_category', array( 'client' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'client_category', 0 );

}