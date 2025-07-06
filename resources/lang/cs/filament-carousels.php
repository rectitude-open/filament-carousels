<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Karusely',
            'group' => 'Obsah',
        ],
    ],
    'carousel' => [
        'nav' => [
            'label' => 'Karusely',
            'group' => '',
        ],
        'field' => [
            'title' => 'Název',
            'taxonomy' => 'Taxonomie',
            'categories' => 'Kategorie',
            'pictures' => 'Obrázky',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Pořadí zobrazení',
            'created_at' => 'Vytvořeno',
            'status' => 'Stav',
            'status_published' => 'Publikováno',
            'status_draft' => 'Návrh',
        ],
        'info' => [
            'select_categories' => 'Vyberte kategorie',
        ],
    ],
    'carousel_category' => [
        'nav' => [
            'label' => 'Kategorie karuselů',
            'group' => '',
        ],
        'field' => [
            'title' => 'Název',
        ],
    ],
];
