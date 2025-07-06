<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentCarousels;

use RectitudeOpen\FilamentCarousels\Models\Carousel;

class FilamentCarousels
{
    /**
     * @return class-string<Carousel>
     */
    public function getModel(): string
    {
        return config('filament-carousels.carousel.model', Carousel::class);
    }

    public function getPublishedById(int $id): ?Carousel
    {
        $model = $this->getModel();

        $carousel = $model::published()->find($id);
        assert($carousel instanceof Carousel || $carousel === null);

        return $carousel;
    }

    public function getPublishedBySlug(string $slug): ?Carousel
    {
        $model = $this->getModel();

        $carousel = $model::published()->withSlug($slug)->first();
        assert($carousel instanceof Carousel || $carousel === null);

        return $carousel;
    }
}
