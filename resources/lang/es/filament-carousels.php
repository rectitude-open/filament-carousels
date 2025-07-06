<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Carruseles',
            'group' => 'Contenido',
        ],
    ],
    'carousel' => [
        'nav' => [
            'label' => 'Carruseles',
            'group' => '',
        ],
        'field' => [
            'title' => 'Título',
            'taxonomy' => 'Taxonomía',
            'categories' => 'Categorías',
            'pictures' => 'Imágenes',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Orden de visualización',
            'created_at' => 'Creado el',
            'status' => 'Estado',
            'status_published' => 'Publicado',
            'status_draft' => 'Borrador',
        ],
        'info' => [
            'select_categories' => 'Seleccionar categorías',
        ],
    ],
    'carousel_category' => [
        'nav' => [
            'label' => 'Categorías de carrusel',
            'group' => '',
        ],
        'field' => [
            'title' => 'Título',
        ],
    ],
];
