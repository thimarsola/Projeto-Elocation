<?php
add_action( 'init', 'category' );
function category() {
    $args = [
        'label'  => esc_html__( 'Categorias', 'Categorias' ),
        'labels' => [
            'menu_name'                  => esc_html__( 'Categorias', 'Categorias' ),
            'all_items'                  => esc_html__( 'Todas as Categorias', 'Categorias' ),
            'edit_item'                  => esc_html__( 'Editar Categoria', 'Categorias' ),
            'view_item'                  => esc_html__( 'Ver Categoria', 'Categorias' ),
            'update_item'                => esc_html__( 'Atualizar Categoria', 'Categorias' ),
            'add_new_item'               => esc_html__( 'Adicionar Nova Categoria', 'Categorias' ),
            'new_item'                   => esc_html__( 'Nova Categoria', 'Categorias' ),
            'parent_item'                => esc_html__( 'Categoria Ascendente', 'Categorias' ),
            'parent_item_colon'          => esc_html__( 'Categoria Ascendente', 'Categorias' ),
            'search_items'               => esc_html__( 'Procurar Categorias', 'Categorias' ),
            'popular_items'              => esc_html__( 'Categorias Populares', 'Categorias' ),
            'separate_items_with_commas' => esc_html__( 'Separar Categorias com vírgula', 'Categorias' ),
            'add_or_remove_items'        => esc_html__( 'Adicionar ou Remover Categorias', 'Categorias' ),
            'choose_from_most_used'      => esc_html__( 'Escolha as Categorias mais usadas', 'Categorias' ),
            'not_found'                  => esc_html__( 'Nenhuma Categoria Encontrada', 'Categorias' ),
            'name'                       => esc_html__( 'Categorias', 'Categorias' ),
            'singular_name'              => esc_html__( 'Categoria', 'Categorias' ),
        ],
        'public'               => true,
        'show_ui'              => true,
        'show_in_menu'         => true,
        'show_in_nav_menus'    => true,
        'show_tagcloud'        => true,
        'show_in_quick_edit'   => true,
        'show_admin_column'    => false,
        'show_in_rest'         => true,
        'hierarchical'         => true,
        'query_var'            => true,
        'sort'                 => false,
        'rewrite_no_front'     => false,
        'rewrite_hierarchical' => false,
        'rewrite' => true
    ];
    register_taxonomy( 'categoria', [ 'produto' ], $args );
}