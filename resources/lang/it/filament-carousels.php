<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Caroselli',
            'group' => 'Contenuto',
        ],
    ],
    'carousel' => [
        'nav' => [
            'label' => 'Caroselli',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titolo',
            'taxonomy' => 'Tassonomia',
            'categories' => 'Categorie',
            'pictures' => 'Immagini',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Ordine di visualizzazione',
            'created_at' => 'Creato il',
            'status' => 'Stato',
            'status_published' => 'Pubblicato',
            'status_draft' => 'Bozza',
        ],
        'info' => [
            'select_categories' => 'Seleziona categorie',
        ],
    ],
    'carousel_category' => [
        'nav' => [
            'label' => 'Categorie carosello',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titolo',
        ],
    ],
];
