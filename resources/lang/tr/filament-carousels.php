<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Karuseller',
            'group' => 'İçerik',
        ],
    ],
    'carousel' => [
        'nav' => [
            'label' => 'Karuseller',
            'group' => '',
        ],
        'field' => [
            'title' => 'Başlık',
            'taxonomy' => 'Taksonomi',
            'categories' => 'Kategoriler',
            'pictures' => 'Resimler',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Görüntüleme Sırası',
            'created_at' => 'Oluşturulma Tarihi',
            'status' => 'Durum',
            'status_published' => 'Yayınlandı',
            'status_draft' => 'Taslak',
        ],
        'info' => [
            'select_categories' => 'Kategorileri Seçin',
        ],
    ],
    'carousel_category' => [
        'nav' => [
            'label' => 'Karuseller Kategorileri',
            'group' => '',
        ],
        'field' => [
            'title' => 'Başlık',
        ],
    ],
];
