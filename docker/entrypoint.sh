#!/bin/bash
set -e

# Create necessary directories with proper permissions
mkdir -p var/cache/prod var/log
chown -R www-data:www-data var/
chmod -R 775 var/

# Ensure www-data can write to cache directory
chown -R www-data:www-data var/cache var/log
chmod -R 777 var/cache var/log

# Install assets if not already done (run as www-data)
su -s /bin/bash -c "php bin/console assets:install public --env=prod --no-debug --symlink || true" www-data || true

# Warm up cache (run as www-data)
su -s /bin/bash -c "php bin/console cache:warmup --env=prod --no-debug || true" www-data || true

# Start supervisor
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf

