<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentCarousels\Filament\Resources\CarouselResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use RectitudeOpen\FilamentCarousels\Filament\Resources\CarouselResource;

class EditCarousel extends EditRecord
{
    protected static string $resource = CarouselResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
