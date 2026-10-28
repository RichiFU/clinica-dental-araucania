<?php
// Cargar los estilos del tema hijo.
function clinica_child_cargar_estilos()
{
    wp_enqueue_style(
        'clinica-child-style',
        get_stylesheet_uri(),
        array(),
        '1.0.3'
    );
}

add_action(
    'wp_enqueue_scripts',
    'clinica_child_cargar_estilos',
    20
);



// Añadir una clase al body de la página Contacto.
function clinica_child_clases_body($classes)
{
    if (is_page('contacto')) {
        $classes[] = 'clinica-contacto';
    }

    return $classes;
}

add_filter('body_class', 'clinica_child_clases_body');


// Cargar el JavaScript del tema hijo.
function clinica_child_cargar_scripts()
{
    wp_enqueue_script(
        'clinica-child-script',
        get_stylesheet_directory_uri() . '/assets/js/clinica.js',
        array(),
        '1.0.1',
        true
    );
}

add_action(
    'wp_enqueue_scripts',
    'clinica_child_cargar_scripts'
);
