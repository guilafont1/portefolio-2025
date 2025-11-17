#!/bin/bash
set -e

# Create necessary directories with proper permissions
mkdir -p var/cache var/log
chown -R www-data:www-data var/
chmod -R 775 var/

# Install assets if not already done
php bin/console assets:install public --env=prod --no-debug --symlink || true

# Warm up cache
php bin/console cache:warmup --env=prod --no-debug || true

# Start supervisor
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf

