<?php

declare(strict_types=1);

return [
    'cluster' => [
        'nav' => [
            'label' => 'Carrosséis',
            'group' => 'Conteúdo',
        ],
    ],
    'carousel' => [
        'nav' => [
            'label' => 'Carrosséis',
            'group' => '',
        ],
        'field' => [
            'title' => 'Título',
            'taxonomy' => 'Taxonomia',
            'categories' => 'Categorias',
            'pictures' => 'Imagens',
            'meta' => 'Meta',
            'slug' => 'Slug',
            'display_order' => 'Ordem de Exibição',
            'created_at' => 'Criado em',
            'status' => 'Status',
            'status_published' => 'Publicado',
            'status_draft' => 'Rascunho',
        ],
        'info' => [
            'select_categories' => 'Selecionar Categorias',
        ],
    ],
    'carousel_category' => [
        'nav' => [
            'label' => 'Categorias de Carrossel',
            'group' => '',
        ],
        'field' => [
            'title' => 'Título',
        ],
    ],
];
