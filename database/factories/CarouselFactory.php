<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentCarousels\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use RectitudeOpen\FilamentCarousels\Models\Carousel;

class CarouselFactory extends Factory
{
    protected $model = Carousel::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->realText(255),
            'is_published' => $this->faker->boolean(),
            'display_order' => $this->faker->numberBetween(0, 100),
            'created_at' => $this->faker->dateTimeThisYear(),
        ];
    }
}
