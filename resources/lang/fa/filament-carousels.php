<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'اسلایدرها',
            'group' => 'محتوا',
        ],
    ],
    'carousel' => [
        'nav' => [
            'label' => 'اسلایدرها',
            'group' => '',
        ],
        'field' => [
            'title' => 'عنوان',
            'taxonomy' => 'رده‌بندی',
            'categories' => 'دسته‌بندی‌ها',
            'pictures' => 'تصاویر',
            'meta' => 'متا',
            'slug' => 'نامک',
            'display_order' => 'ترتیب نمایش',
            'created_at' => 'تاریخ ایجاد',
            'status' => 'وضعیت',
            'status_published' => 'منتشر شده',
            'status_draft' => 'پیش‌نویس',
        ],
        'info' => [
            'select_categories' => 'انتخاب دسته‌بندی‌ها',
        ],
    ],
    'carousel_category' => [
        'nav' => [
            'label' => 'دسته‌بندی اسلایدرها',
            'group' => '',
        ],
        'field' => [
            'title' => 'عنوان',
        ],
    ],
];
