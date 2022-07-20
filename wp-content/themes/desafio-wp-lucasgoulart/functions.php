<?php

    // Adicionando a função de Imagens Destacadas no tema
    add_theme_support( 'post-thumbnails' ); 



    // adicionando Custom Post Type Vídeos
    function videos_setup_post_type() {
        $args = array(
            'public'    => true,
            'label'     => __( 'Vídeos', 'textdomain' ),
            'menu_icon' => 'dashicons-format-video',
            'supports' => array( 'title', 'editor', 'thumbnail', 'content', 'custom-fields'),
        );
        register_post_type( 'videos', $args );
    }
    add_action( 'init', 'videos_setup_post_type' );



    // ADICIONANDO AS TAXONOMIAS FILMES, SÉRIES E DOCUMENTÁRIOS
    function add_custom_taxonomies() {
        
        register_taxonomy('classificacao', 'videos', array(
        'hierarchical' => true,
        'labels' => array(
            'name' => _x( 'Classificação', 'taxonomy general name' ),
            'singular_name' => _x( 'Classificação', 'taxonomy singular name' ),
            'edit_item' => __( 'Editar Classificação' ),
            'update_item' => __( 'Atualizar Classificação' ),
            'new_item_name' => __( 'New Classificação Name' ),
            'menu_name' => __( 'Classificações' ),
        ),
        // Control the slugs used for this taxonomy
        'rewrite' => array(
            'slug' => 'classificacao',
            'with_front' => false,
            'hierarchical' => true
        ),
        ));
    }
    add_action( 'init', 'add_custom_taxonomies', 0 );

?>