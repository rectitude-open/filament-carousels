<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Képgalériák',
            'group' => 'Tartalom',
        ],
    ],
    'carousel' => [
        'nav' => [
            'label' => 'Képgalériák',
            'group' => '',
        ],
        'field' => [
            'title' => 'Cím',
            'taxonomy' => 'Taxonómia',
            'categories' => 'Kategóriák',
            'pictures' => 'Képek',
            'meta' => 'Meta',
            'slug' => 'Azonosító',
            'display_order' => 'Megjelenítési sorrend',
            'created_at' => 'Létrehozva',
            'status' => 'Állapot',
            'status_published' => 'Közzétéve',
            'status_draft' => 'Piszkozat',
        ],
        'info' => [
            'select_categories' => 'Válasszon kategóriákat',
        ],
    ],
    'carousel_category' => [
        'nav' => [
            'label' => 'Képgaléria kategóriák',
            'group' => '',
        ],
        'field' => [
            'title' => 'Cím',
        ],
    ],
];
