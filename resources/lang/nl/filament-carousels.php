<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Carrousels',
            'group' => 'Inhoud',
        ],
    ],
    'carousel' => [
        'nav' => [
            'label' => 'Carrousels',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titel',
            'taxonomy' => 'Taxonomie',
            'categories' => 'Categorieën',
            'pictures' => 'Afbeeldingen',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Weergavevolgorde',
            'created_at' => 'Aangemaakt op',
            'status' => 'Status',
            'status_published' => 'Gepubliceerd',
            'status_draft' => 'Concept',
        ],
        'info' => [
            'select_categories' => 'Selecteer categorieën',
        ],
    ],
    'carousel_category' => [
        'nav' => [
            'label' => 'Carrouselcategorieën',
            'group' => '',
        ],
        'field' => [
            'title' => 'Titel',
        ],
    ],
];
