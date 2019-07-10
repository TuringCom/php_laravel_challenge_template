#!/bin/bash
set -x;

/bin/bash /entrypoint.sh mysqld > /dev/null 2>&1 &

sudo -uwww-data composer install;
cp .env.example .env;
php artisan key:generate;
php artisan serve --host=0.0.0.0;

