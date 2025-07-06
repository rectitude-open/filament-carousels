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
}
