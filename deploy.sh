!/bin/sh

composer install --optimize-autoloader --no-dev

php artisan cache:clear
php artisan config:clear
php artisan route:clear

php artisan config:cache
php artisan route:cache
