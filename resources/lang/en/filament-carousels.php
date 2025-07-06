<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Carousels',
            'group' => 'Content',
        ],
    ],
    'photo' => [
        'nav' => [
            'label' => 'Carousels',
            'group' => '',
        ],
        'field' => [
            'title' => 'Title',
            'taxonomy' => 'Taxonomy',
            'categories' => 'Categories',
            'pictures' => 'Pictures',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Display Order',
            'created_at' => 'Created At',
            'status' => 'Status',
            'status_published' => 'Published',
            'status_draft' => 'Draft',
        ],
        'info' => [
            'select_categories' => 'Select Categories',
        ],
    ],
    'photo_category' => [
        'nav' => [
            'label' => 'Carousel Categories',
            'group' => '',
        ],
        'field' => [
            'title' => 'Title',
        ],
    ],
];
