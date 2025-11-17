#!/bin/bash
set -e

# Wait for services to be ready (if needed)
# Install assets if not already done
php bin/console assets:install public --env=prod --no-debug --symlink || true

# Warm up cache
php bin/console cache:warmup --env=prod --no-debug || true

# Start supervisor
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf

