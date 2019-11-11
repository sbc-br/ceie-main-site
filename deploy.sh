!/bin/sh

php artisan down

git remote update origin --prune
git checkout master
git pull

composer install --optimize-autoloader --no-dev

php artisan cache:clear
php artisan config:clear
php artisan route:clear

php artisan config:cache
php artisan route:cache

php artisan up
