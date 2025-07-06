<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Карусели',
            'group' => 'Контент',
        ],
    ],
    'carousel' => [
        'nav' => [
            'label' => 'Карусели',
            'group' => '',
        ],
        'field' => [
            'title' => 'Заголовок',
            'taxonomy' => 'Таксономия',
            'categories' => 'Категории',
            'pictures' => 'Изображения',
            'meta' => 'Мета',
            'slug' => 'Слаг',
            'display_order' => 'Порядок отображения',
            'created_at' => 'Создано',
            'status' => 'Статус',
            'status_published' => 'Опубликовано',
            'status_draft' => 'Черновик',
        ],
        'info' => [
            'select_categories' => 'Выберите категории',
        ],
    ],
    'carousel_category' => [
        'nav' => [
            'label' => 'Категории карусели',
            'group' => '',
        ],
        'field' => [
            'title' => 'Заголовок',
        ],
    ],
];
