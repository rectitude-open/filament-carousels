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
            'title' => 'Názov',
            'taxonomy' => 'Taxonómia',
            'categories' => 'Kategórie',
            'pictures' => 'Obrázky',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Poradie zobrazenia',
            'created_at' => 'Vytvorené',
            'status' => 'Stav',
            'status_published' => 'Publikované',
            'status_draft' => 'Návrh',
        ],
        'info' => [
            'select_categories' => 'Vyberte kategórie',
        ],
    ],
    'carousel_category' => [
        'nav' => [
            'label' => 'Kategórie karuselov',
            'group' => '',
        ],
        'field' => [
            'title' => 'Názov',
        ],
    ],
];
