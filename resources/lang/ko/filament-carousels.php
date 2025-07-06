<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => '캐러셀',
            'group' => '콘텐츠',
        ],
    ],
    'carousel' => [
        'nav' => [
            'label' => '캐러셀',
            'group' => '',
        ],
        'field' => [
            'title' => '제목',
            'taxonomy' => '분류',
            'categories' => '카테고리',
            'pictures' => '사진',
            'meta' => '메타',
            'slug' => '슬러그',
            'display_order' => '표시 순서',
            'created_at' => '생성일',
            'status' => '상태',
            'status_published' => '게시됨',
            'status_draft' => '임시저장',
        ],
        'info' => [
            'select_categories' => '카테고리 선택',
        ],
    ],
    'carousel_category' => [
        'nav' => [
            'label' => '캐러셀 카테고리',
            'group' => '',
        ],
        'field' => [
            'title' => '제목',
        ],
    ],
];
