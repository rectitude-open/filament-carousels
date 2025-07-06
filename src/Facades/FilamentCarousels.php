<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentCarousels\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RectitudeOpen\FilamentCarousels\FilamentCarousels
 */
class FilamentCarousels extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \RectitudeOpen\FilamentCarousels\FilamentCarousels::class;
    }
}
