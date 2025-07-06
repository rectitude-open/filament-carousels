<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Karuzele',
            'group' => 'Zawartość',
        ],
    ],
    'carousel' => [
        'nav' => [
            'label' => 'Karuzele',
            'group' => '',
        ],
        'field' => [
            'title' => 'Tytuł',
            'taxonomy' => 'Taksonomia',
            'categories' => 'Kategorie',
            'pictures' => 'Obrazy',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Kolejność wyświetlania',
            'created_at' => 'Utworzono',
            'status' => 'Status',
            'status_published' => 'Opublikowany',
            'status_draft' => 'Szkic',
        ],
        'info' => [
            'select_categories' => 'Wybierz kategorie',
        ],
    ],
    'carousel_category' => [
        'nav' => [
            'label' => 'Kategorie karuzeli',
            'group' => '',
        ],
        'field' => [
            'title' => 'Tytuł',
        ],
    ],
];
