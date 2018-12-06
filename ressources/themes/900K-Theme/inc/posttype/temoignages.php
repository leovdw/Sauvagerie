<?php
add_action( 'init', 'neufsansk_custom_post_type_temoignages' );
function neufsansk_custom_post_type_temoignages() {
    $post_type         = "temoignages";
    $post_type_support = "posts";
    $labels            = array(
        'name'               => __( 'Témoignages',                'neufsansk' ),
        'singular_name'      => __( 'Témoignages',                 'neufsansk' ),
        'all_items'          => __( 'Tous les temoignages',     'neufsansk' ),
        'add_new'            => __( 'Ajouter une temoignages',     'neufsansk' ),
        'add_new_item'       => __( 'Ajouter une temoignages',     'neufsansk' ),
        'edit_item'          => __( "Edit temoignages",            'neufsansk' ),
        'new_item'           => __( 'New temoignages',             'neufsansk' ),
        'view_item'          => __( "View temoignages",            'neufsansk' ),
        'search_items'       => __( 'Find a temoignages',          'neufsansk' ),
        'not_found'          => __( 'No result',                'neufsansk' ),
        'not_found_in_trash' => __( 'No result',                'neufsansk' ),
        'parent_item_colon'  => __( 'Parent temoignages:',         'neufsansk' ),
        'menu_name'          => __( 'Témoignages',                'neufsansk' ),
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title', 'thumbnail', 'editor' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-slides',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => true,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args );

   //  register_taxonomy(
   //   'Type', // slug
   //   array($post_type), // posttype
   //   array(
   //       'label'        => __( 'Type', '900k' ), // label
   //       'rewrite'      => array( 'slug' => 'type' ), // rewrite
   //       'hierarchical' => true, // true: categorie, false: tag
   //   )
   // );

}
