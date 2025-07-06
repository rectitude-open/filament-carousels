<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => '輪播圖',
            'group' => '內容',
        ],
    ],
    'carousel' => [
        'nav' => [
            'label' => '輪播圖',
            'group' => '',
        ],
        'field' => [
            'title' => '標題',
            'taxonomy' => '分類',
            'categories' => '類別',
            'pictures' => '圖片',
            'meta' => '中繼資料',
            'slug' => '標識',
            'display_order' => '顯示順序',
            'created_at' => '建立時間',
            'status' => '狀態',
            'status_published' => '已發佈',
            'status_draft' => '草稿',
        ],
        'info' => [
            'select_categories' => '選擇類別',
        ],
    ],
    'carousel_category' => [
        'nav' => [
            'label' => '輪播圖類別',
            'group' => '',
        ],
        'field' => [
            'title' => '標題',
        ],
    ],
];
