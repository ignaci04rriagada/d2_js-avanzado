<?php
/**
 * Funciones para widgets (footer autoadministrable)
 */

// Deshabilitar el editor de bloques en los widgets (usar el clásico)
add_filter('use_widgets_block_editor', '__return_false');

// Registrar las zonas de widgets (sidebars)
function zona_widget() {
    
    // COLUMNA 1: Navegación (enlaces principales)
    register_sidebar(array(
        'name'          => 'Footer: Navegación',
        'id'            => 'footer_navegacion',
        'description'   => 'Columna con enlaces de navegación del sitio',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>'
    ));
    
    // COLUMNA 2: Géneros (dinámico)
    register_sidebar(array(
        'name'          => 'Footer: Géneros',
        'id'            => 'footer_generos',
        'description'   => 'Columna con lista de géneros musicales',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>'
    ));
    
    // COLUMNA 3: Sobre el proyecto
    register_sidebar(array(
        'name'          => 'Footer: Sobre el proyecto',
        'id'            => 'footer_proyecto',
        'description'   => 'Columna con enlaces informativos del proyecto',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>'
    ));
    
    // COLUMNA 4: Redes Sociales
    register_sidebar(array(
        'name'          => 'Footer: Redes Sociales',
        'id'            => 'footer_social',
        'description'   => 'Columna con enlaces a redes sociales',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>'
    ));
}
add_action('widgets_init', 'zona_widget');