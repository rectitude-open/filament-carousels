#!/bin/bash
set -e

/home/wwwroot/filament-carousels/vendor/bin/pest
/home/wwwroot/filament-carousels/vendor/bin/pint
/home/wwwroot/filament-carousels/vendor/bin/phpstan analyse
