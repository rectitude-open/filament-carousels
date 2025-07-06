<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => '轮播图',
            'group' => '内容',
        ],
    ],
    'carousel' => [
        'nav' => [
            'label' => '轮播图',
            'group' => '',
        ],
        'field' => [
            'title' => '标题',
            'taxonomy' => '分类',
            'categories' => '类别',
            'pictures' => '图片',
            'meta' => '元信息',
            'slug' => '标识',
            'display_order' => '显示顺序',
            'created_at' => '创建时间',
            'status' => '状态',
            'status_published' => '已发布',
            'status_draft' => '草稿',
        ],
        'info' => [
            'select_categories' => '选择类别',
        ],
    ],
    'carousel_category' => [
        'nav' => [
            'label' => '轮播图类别',
            'group' => '',
        ],
        'field' => [
            'title' => '标题',
        ],
    ],
];
