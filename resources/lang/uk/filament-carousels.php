<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Каруселі',
            'group' => 'Контент',
        ],
    ],
    'carousel' => [
        'nav' => [
            'label' => 'Каруселі',
            'group' => '',
        ],
        'field' => [
            'title' => 'Заголовок',
            'taxonomy' => 'Таксономія',
            'categories' => 'Категорії',
            'pictures' => 'Зображення',
            'meta' => 'Мета',
            'slug' => 'Слаг',
            'display_order' => 'Порядок відображення',
            'created_at' => 'Створено',
            'status' => 'Статус',
            'status_published' => 'Опубліковано',
            'status_draft' => 'Чернетка',
        ],
        'info' => [
            'select_categories' => 'Виберіть категорії',
        ],
    ],
    'carousel_category' => [
        'nav' => [
            'label' => 'Категорії каруселі',
            'group' => '',
        ],
        'field' => [
            'title' => 'Заголовок',
        ],
    ],
];
