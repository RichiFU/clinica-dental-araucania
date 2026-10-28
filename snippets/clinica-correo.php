<?php

add_shortcode('clinica_correo', function () {
    $correo = get_post_meta(get_the_ID(), 'correo_contacto', true);

    if (!is_string($correo)) {
        return '';
    }

    $correo = trim($correo);

    if (!is_email($correo)) {
        return '';
    }

    return '<p class="clinica-correo">'
        . '<a href="' . esc_url('mailto:' . $correo) . '">'
        . esc_html($correo)
        . '</a></p>';
});
