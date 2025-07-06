<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentCarousels\Filament\Resources\CarouselResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use RectitudeOpen\FilamentCarousels\Filament\Resources\CarouselResource;

class ListCarousel extends ListRecords
{
    protected static string $resource = CarouselResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
