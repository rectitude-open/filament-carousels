<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Karussells',
            'group' => 'Inhalt',
        ],
    ],
    'carousel' => [
        'nav' => [
            'label' => 'Karussells',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titel',
            'taxonomy' => 'Taxonomie',
            'categories' => 'Kategorien',
            'pictures' => 'Bilder',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Anzeigereihenfolge',
            'created_at' => 'Erstellt am',
            'status' => 'Status',
            'status_published' => 'Veröffentlicht',
            'status_draft' => 'Entwurf',
        ],
        'info' => [
            'select_categories' => 'Kategorien auswählen',
        ],
    ],
    'carousel_category' => [
        'nav' => [
            'label' => 'Karussell-Kategorien',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titel',
        ],
    ],
];
