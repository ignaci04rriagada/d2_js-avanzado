<?php
/**
 * Funciones para encolar scripts
 */

function js_functions() {
    if (!is_admin()) {
        
        // ==========================================
        // 1. JQUERY (desde CDN)
        // ==========================================
        wp_register_script('jquery-cdn', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1', true);
        wp_enqueue_script('jquery-cdn');
     
        // ==========================================
        // 2. custom.js - DESDE LOCAL
        // ==========================================
        wp_register_script('custom-js', get_template_directory_uri() . '/assets/librerias/js/custom.js', array('jquery-cdn'), '1.0.0', true);
        wp_enqueue_script('custom-js');
        wp_localize_script(
            'custom-js',
            'objetoDePrueba',
            array(
                'root'  => esc_url_raw( rest_url() ),
                'nonce' => wp_create_nonce( 'wp_rest'),
            )
        );
        
    }
}
add_action('wp_enqueue_scripts', 'js_functions', 999);