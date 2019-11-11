#!/bin/sh
composer install
php artisan cache:clear 
php artisan config:clear
php artisan route:clear
php artisan serve
