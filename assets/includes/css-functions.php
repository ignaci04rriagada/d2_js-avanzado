<?php
function css_functions() {
   
    wp_register_style('estilo-tema', get_template_directory_uri() . '/assets/librerias/css/style.css', array(), null, 'all');
   



    wp_enqueue_style('estilo-tema');
    
}
add_action('wp_enqueue_scripts', 'css_functions');