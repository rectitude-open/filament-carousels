<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentCarousels\Filament\Clusters;

use Filament\Clusters\Cluster;
use Illuminate\Contracts\Support\Htmlable;

class CarouselCluster extends Cluster
{
    public static function getNavigationIcon(): string | Htmlable | null
    {
        return static::$navigationIcon ?? config('filament-carousels.cluster.navigation_icon', 'heroicon-o-carousel');
    }

    public static function getNavigationSort(): ?int
    {
        return config('filament-carousels.cluster.navigation_sort', 0);
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-carousels::filament-carousels.cluster.nav.label');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('filament-carousels::filament-carousels.cluster.nav.group');
    }
}
