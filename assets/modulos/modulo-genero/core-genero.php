<?php
/**
 * Módulo: Género
 * Registra la taxonomía "genero" para el CPT "cancion"
 */

function registrar_taxonomia_genero() {
    
    $labels = array(
        'name'              => 'Géneros',
        'singular_name'     => 'Género',
        'search_items'      => 'Buscar géneros',
        'all_items'         => 'Todos los géneros',
        'parent_item'       => 'Género padre',
        'parent_item_colon' => 'Género padre:',
        'edit_item'         => 'Editar género',
        'update_item'       => 'Actualizar género',
        'add_new_item'      => 'Añadir nuevo género',
        'new_item_name'     => 'Nombre del nuevo género',
        'menu_name'         => 'Géneros',
        'not_found'         => 'No se encontraron géneros',
    );

    $args = array(
        'hierarchical'      => true, 
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'genero'),
        'show_in_rest'      => true,
        'public'            => true,
    );

    register_taxonomy('genero', array('cancion'), $args);
}
add_action('init', 'registrar_taxonomia_genero');