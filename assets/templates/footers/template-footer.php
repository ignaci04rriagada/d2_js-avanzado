<!-- ==========================================
FOOTER DINÁMICO CON ZONAS DE WIDGETS
========================================== -->
<footer class="official-footer">
    <div class="container-fluid">
        <div class="row">
            <!-- COLUMNA 1: Navegación -->
            <div class="col-6 col-md-3">
                <?php 
                if(is_active_sidebar('footer_navegacion')) : 
                    dynamic_sidebar('footer_navegacion');
                endif; 
                ?>
            </div>

            <!-- COLUMNA 2: Géneros -->
            <div class="col-6 col-md-3">
                <?php 
                if(is_active_sidebar('footer_generos')) : 
                    dynamic_sidebar('footer_generos');
                endif; 
                ?>
            </div>

            <!-- COLUMNA 3: Sobre el proyecto -->
            <div class="col-6 col-md-3">
                <?php 
                if(is_active_sidebar('footer_proyecto')) : 
                    dynamic_sidebar('footer_proyecto');
                endif; 
                ?>
            </div>

            <!-- COLUMNA 4: Redes Sociales -->
            <div class="col-6 col-md-3">
                <?php 
                if(is_active_sidebar('footer_social')) : 
                    dynamic_sidebar('footer_social');
                endif; 
                ?>
            </div>
        </div>
        <?php 
        $generos = get_terms(array('taxonomy' => 'genero', 'hide_empty' => false));
foreach ($generos as $genero) {
    echo '<a href="' . get_term_link($genero) . '">' . $genero->name . '</a>';
}
        ;?>
        <!-- FILA INFERIOR: Copyright -->
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos los derechos reservados.</p>
            <p class="text-muted small">Hecho con ❤️ para los amantes de la música</p>
        </div>
    </div>
</footer>