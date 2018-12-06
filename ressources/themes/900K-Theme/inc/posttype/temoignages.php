<?php
add_action( 'init', 'neufsansk_custom_post_type_temoignage' );
function neufsansk_custom_post_type_temoignage() {
    $post_type         = "temoignages";
    $labels            = array(
        'name'               => __( 'Témoignages',         'neufsansk' ),
        'singular_name'      => __( 'Témoignage',          'neufsansk' ),
        'all_items'          => __( 'Tous les témoignages', 'neufsansk' ),
        'add_new'            => __( 'Ajouter un témoignage',    'neufsansk' ),
        'add_new_item'       => __( 'Ajouter un témoignage',    'neufsansk' ),
        'edit_item'          => __( "Editer le temoignage",     'neufsansk' ),
        'new_item'           => __( 'New temoignage',      'neufsansk' ),
        'view_item'          => __( "View temoignage",     'neufsansk' ),
        'search_items'       => __( 'Find a temoignage',   'neufsansk' ),
        'not_found'          => __( 'No result',          'neufsansk' ),
        'not_found_in_trash' => __( 'No result',          'neufsansk' ),
        'parent_item_colon'  => __( 'Parent temoignage:',  'neufsansk' ),
        'menu_name'          => __( 'Témoignages',         'neufsansk' ),
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title', 'editor' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-comments',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args );
}
