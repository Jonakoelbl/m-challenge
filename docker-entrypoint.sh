#!/bin/bash

until mysqladmin ping -h db -u laravel -psecret --silent; do
  sleep 1
done

# Ejecutar migraciones
php artisan migrate:reset --force
php artisan migrate --force
php artisan db:seed --class=DatabaseSeeder --force

exec "$@"
