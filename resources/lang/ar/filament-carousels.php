<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'الشرائح',
            'group' => 'المحتوى',
        ],
    ],
    'carousel' => [
        'nav' => [
            'label' => 'الشرائح',
            'group' => '',
        ],
        'field' => [
            'title' => 'العنوان',
            'taxonomy' => 'التصنيف',
            'categories' => 'الفئات',
            'pictures' => 'الصور',
            'meta' => 'ميتا',
            'slug' => 'المعرف',
            'display_order' => 'ترتيب العرض',
            'created_at' => 'تاريخ الإنشاء',
            'status' => 'الحالة',
            'status_published' => 'منشور',
            'status_draft' => 'مسودة',
        ],
        'info' => [
            'select_categories' => 'اختر الفئات',
        ],
    ],
    'carousel_category' => [
        'nav' => [
            'label' => 'فئات الشرائح',
            'group' => '',
        ],
        'field' => [
            'title' => 'العنوان',
        ],
    ],
];
