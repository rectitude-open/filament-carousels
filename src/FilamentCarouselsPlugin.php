<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentCarousels;

use Filament\Contracts\Plugin;
use Filament\Panel;
use RectitudeOpen\FilamentCarousels\Filament\Pages\CarouselCategory;
use RectitudeOpen\FilamentCarousels\Filament\Resources\CarouselResource;

class FilamentCarouselsPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-carousels';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                config('filament-carousel.carousel.filament_resource', CarouselResource::class),
            ])
            ->pages([
                config('filament-carousel.carousel_category.page', CarouselCategory::class),
            ])
            ->discoverClusters(
                __DIR__ . '/Filament/Clusters',
                'RectitudeOpen\\FilamentCarousels\\Filament\\Clusters'
            );
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
