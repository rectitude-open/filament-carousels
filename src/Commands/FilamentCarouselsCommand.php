<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentCarousels\Commands;

use Illuminate\Console\Command;

class FilamentCarouselsCommand extends Command
{
    public $signature = 'filament-carousels';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
