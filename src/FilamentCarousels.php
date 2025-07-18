<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentCarousels;

use Illuminate\Database\Eloquent\Collection;
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

    public function getPublishedCarouselById(int $id): ?Carousel
    {
        $model = $this->getModel();

        $carousel = $model::published()->find($id);
        assert($carousel instanceof Carousel || $carousel === null);

        return $carousel;
    }

    public function getPublishedCarouselBySlug(string $slug): ?Carousel
    {
        $model = $this->getModel();

        $carousel = $model::published()->withSlug($slug)->first();
        assert($carousel instanceof Carousel || $carousel === null);

        return $carousel;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection<int, Carousel>
     */
    public function getPublishedCarouselsByCategory(int $categoryId): Collection
    {
        $model = $this->getModel();

        $carousels = $model::published()->whereHas('categories', function ($query) use ($categoryId) {
            $query->where('carousel_categories.id', $categoryId);
        })->ordered()->get();

        /** @var \Illuminate\Database\Eloquent\Collection<int, Carousel> $carousels */
        return $carousels;
    }
}
