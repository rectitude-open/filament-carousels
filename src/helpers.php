<?php

declare(strict_types=1);

use Illuminate\Support\Collection;
use RectitudeOpen\FilamentCarousels\FilamentCarousels;
use RectitudeOpen\FilamentCarousels\Models\Carousel;

if (! function_exists('carousel')) {
    /**
     * @return Collection<int, \Awcodes\Curator\Models\Media>
     */
    function carousel(int | string $identifier): Collection
    {
        $service = app(FilamentCarousels::class);

        $carousel = is_numeric($identifier)
            ? $service->getPublishedCarouselById((int) $identifier)
            : $service->getPublishedCarouselBySlug((string) $identifier);

        return $carousel?->pictures ?? new Collection;
    }
}

if (! function_exists('carousels')) {
    /**
     * @return Collection<int, Carousel>
     */
    function carousels(int | string $categoryIdentifier): Collection
    {
        $service = app(FilamentCarousels::class);

        if (is_numeric($categoryIdentifier)) {
            return $service->getPublishedCarouselsByCategory((int) $categoryIdentifier);
        }

        return new Collection;
    }
}
