#!/bin/sh

docker run -v "$(pwd)":/app/ composer:2.0 sh -c "cd /app/ && composer install"
docker run -v "$(pwd)":/app/ php:7.4-cli sh -c "cd /app/ && php -d memory_limit=32M bin/console --env prod app:bug"
