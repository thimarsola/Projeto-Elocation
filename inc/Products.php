<?php
function products() {
    $args = [
        'label'  => esc_html__( 'Produtos', 'produtos' ),
        'labels' => [
            'menu_name'          => esc_html__( 'Produtos', 'Produtos' ),
            'name_admin_bar'     => esc_html__( 'Produto', 'Produtos' ),
            'add_new'            => esc_html__( 'Adicionar produto', 'Produtos' ),
            'add_new_item'       => esc_html__( 'Adicionar novo produto', 'Produtos' ),
            'new_item'           => esc_html__( 'Novo produtos', 'Produtos' ),
            'edit_item'          => esc_html__( 'Editar produto', 'Produtos' ),
            'view_item'          => esc_html__( 'Ver produto', 'Produtos' ),
            'update_item'        => esc_html__( 'Ver produto', 'Produtos' ),
            'all_items'          => esc_html__( 'Todos os produtos', 'Produtos' ),
            'search_items'       => esc_html__( 'Procurar produto', 'Produtos' ),
            'parent_item_colon'  => esc_html__( 'Produto filho', 'Produtos' ),
            'not_found'          => esc_html__( 'Nenhum produto encontrado', 'Produtos' ),
            'not_found_in_trash' => esc_html__( 'Nenhum produto encontrado na lixeira', 'Produtos' ),
            'name'               => esc_html__( 'Produtos', 'Produtos' ),
            'singular_name'      => esc_html__( 'Produto', 'Produtos' ),
        ],
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'show_in_rest'        => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => false,
        'rewrite_no_front'    => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-clipboard',
        'supports' => [
            'title',
            'thumbnail'
        ],
        'taxonomies' => [
            'categorias',
        ],
        'rewrite' => true
    ];

    register_post_type( 'produto', $args );
    flush_rewrite_rules();
}
add_action( 'init', 'products' );
