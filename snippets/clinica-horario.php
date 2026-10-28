<?php

add_shortcode('clinica_horario', function () {
    if (!function_exists('get_field')) {
        return '';
    }

    $horario = get_post_meta(get_the_ID(), 'horario_atencion', true);

    if (!is_string($horario) || trim($horario) === '') {
        return '';
    }

    return '<p class="clinica-horario">'
        . esc_html($horario)
        . '</p>';
});
