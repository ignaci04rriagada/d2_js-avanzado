<nav class="navbar navbar-expand-lg top-header">
    <div class="container-fluid px-3 px-md-4">
        <!-- Logo dinámico desde WordPress -->
        <div class="navbar-brand p-0">
            <?php the_custom_logo(); ?>
        </div>

        <!-- Toggler móvil -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
            <i class="bi bi-list fs-2 text-white"></i>
        </button>

        <!-- Menú dinámico -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-superior',
                'menu_class'     => 'nav-list', // clases ul
                'container'      => 'nav',
                'container_class'=> 'main-nav d-none d-md-flex', // clases del nav
                'container_aria_label' => 'Menú escritorio superior',
                'fallback_cb'    => '__return_false',
                'depth'          => 1,
                'walker'         => new bootstrap_5_wp_nav_menu_walker(),
            ));
            ?>
        </div>

        <!-- Iconos adicionales -->
        <div class="d-flex align-items-center gap-2">
            <button class="btn btn-outline-light btn-sm d-none d-sm-inline-block">
                <i class="bi bi-search"></i>
            </button>
        </div>
    </div>
</nav>