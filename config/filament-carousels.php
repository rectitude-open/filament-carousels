<?php

declare(strict_types=1);

return [
    'cluster' => [
        'navigation_sort' => 0,
        'navigation_icon' => 'heroicon-o-swatch',
    ],
    'carousel' => [
        'navigation_sort' => 0,
        'navigation_icon' => 'heroicon-o-swatch',
        'datetime_format' => 'Y-m-d H:i:s',
        'navigation_badge' => false,
        'model' => \RectitudeOpen\FilamentCarousels\Models\Carousel::class,
        'filament_resource' => \RectitudeOpen\FilamentCarousels\Filament\Resources\CarouselResource::class,
    ],
    'carousel_category' => [
        'model' => \RectitudeOpen\FilamentCarousels\Models\CarouselCategory::class,
        'page' => \RectitudeOpen\FilamentCarousels\Filament\Pages\CarouselCategory::class,
        'navigation_sort' => 2,
        'navigation_icon' => 'heroicon-o-rectangle-stack',
    ],
];
