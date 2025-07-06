<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'カルーセル',
            'group' => 'コンテンツ',
        ],
    ],
    'carousel' => [
        'nav' => [
            'label' => 'カルーセル',
            'group' => '',
        ],
        'field' => [
            'title' => 'タイトル',
            'taxonomy' => 'タクソノミー',
            'categories' => 'カテゴリ',
            'pictures' => '画像',
            'meta' => 'メタ',
            'slug' => 'スラッグ',
            'display_order' => '表示順',
            'created_at' => '作成日',
            'status' => 'ステータス',
            'status_published' => '公開済み',
            'status_draft' => '下書き',
        ],
        'info' => [
            'select_categories' => 'カテゴリを選択',
        ],
    ],
    'carousel_category' => [
        'nav' => [
            'label' => 'カルーセルカテゴリ',
            'group' => '',
        ],
        'field' => [
            'title' => 'タイトル',
        ],
    ],
];
