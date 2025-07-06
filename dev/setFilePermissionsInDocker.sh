#!/bin/sh
set -e
cd /home/wwwroot/filament-carousels || exit
chown -R www-data:www-data /home/wwwroot/filament-carousels && \
find /home/wwwroot/filament-carousels -type f -exec chmod 644 {} \; && \
find /home/wwwroot/filament-carousels -type d -exec chmod 755 {} \; && \
chmod -R +x /home/wwwroot/filament-carousels/vendor/bin/ && \
chmod -R +x /home/wwwroot/filament-carousels/dev/
