<?php
/**
 * Loop: Al azar
 * Muestra canciones aleatorias
 */

$args = array(
    'post_type' => 'cancion',
    'posts_per_page' => 6,
    'orderby' => 'rand',
);
$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        $artista_relacionado = get_field('artista_relacionado');
        $nombre_artista = $artista_relacionado ? get_the_title($artista_relacionado) : 'Artista desconocido';
        $audio_url = get_field('audio_url');
        $portada = get_the_post_thumbnail_url(get_the_ID(), 'medium') ?: 'https://picsum.photos/seed/' . get_the_ID() . '/200/200';
?>
        <div class="music-card">
            <div class="music-card-cover-wrapper">
                <img src="<?php echo esc_url($portada); ?>" class="music-card-cover" alt="<?php the_title_attribute(); ?>">
                <button class="music-card-play-btn play-trigger"
                        data-toggle="tooltip"
                        title="Reproducir canción"
                        data-src="<?php echo esc_url($audio_url); ?>"
                        data-title="<?php the_title_attribute(); ?>"
                        data-artist="<?php echo esc_attr($nombre_artista); ?>"
                        data-cover="<?php echo esc_url($portada); ?>">
                    <i class="bi bi-play-fill"></i>
                </button>
            </div>
            <div class="music-card-info">
                <!-- Título con enlace a single-cancion.php -->
                <div class="music-card-title">
                    <a href="<?php the_permalink(); ?>" class="music-card-title-link">
                        <?php the_title(); ?>
                    </a>
                </div>
                <!-- Artista con enlace a single-artista.php -->
                <div class="music-card-artist">
                    <?php if ($artista_relacionado) : ?>
                        <a href="<?php echo get_permalink($artista_relacionado); ?>" class="music-card-artist-link">
                            <?php echo esc_html($nombre_artista); ?>
                        </a>
                    <?php else : ?>
                        <?php echo esc_html($nombre_artista); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
<?php
    endwhile;
    wp_reset_postdata();
else :
?>
    <p class="text-secondary">No hay canciones disponibles.</p>
<?php endif; ?>