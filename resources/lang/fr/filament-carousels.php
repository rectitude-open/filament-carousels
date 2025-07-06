<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Carrousels',
            'group' => 'Contenu',
        ],
    ],
    'carousel' => [
        'nav' => [
            'label' => 'Carrousels',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titre',
            'taxonomy' => 'Taxonomie',
            'categories' => 'Catégories',
            'pictures' => 'Images',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Ordre d’affichage',
            'created_at' => 'Créé le',
            'status' => 'Statut',
            'status_published' => 'Publié',
            'status_draft' => 'Brouillon',
        ],
        'info' => [
            'select_categories' => 'Sélectionner les catégories',
        ],
    ],
    'carousel_category' => [
        'nav' => [
            'label' => 'Catégories de carrousel',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titre',
        ],
    ],
];
