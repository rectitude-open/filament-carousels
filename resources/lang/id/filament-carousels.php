<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Karusel',
            'group' => 'Konten',
        ],
    ],
    'carousel' => [
        'nav' => [
            'label' => 'Karusel',
            'group' => '',
        ],
        'field' => [
            'title' => 'Judul',
            'taxonomy' => 'Taksonomi',
            'categories' => 'Kategori',
            'pictures' => 'Gambar',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Urutan Tampil',
            'created_at' => 'Dibuat Pada',
            'status' => 'Status',
            'status_published' => 'Dipublikasikan',
            'status_draft' => 'Draft',
        ],
        'info' => [
            'select_categories' => 'Pilih Kategori',
        ],
    ],
    'carousel_category' => [
        'nav' => [
            'label' => 'Kategori Karusel',
            'group' => '',
        ],
        'field' => [
            'title' => 'Judul',
        ],
    ],
];
