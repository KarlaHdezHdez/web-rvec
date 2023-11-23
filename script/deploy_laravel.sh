#!/bin/bash

# Enter html directory
cd /var/www/web_rvec/

# Create cache and chmod folders
mkdir -p /var/www/web_rvec/bootstrap/cache
mkdir -p /var/www/web_rvec/storage/framework/sessions
mkdir -p /var/www/web_rvec/storage/framework/views
mkdir -p /var/www/web_rvec/storage/framework/cache
mkdir -p /var/www/web_rvec/public/files/

# Install dependencies
export COMPOSER_ALLOW_SUPERUSER=1
composer install -d /var/www/web_rvec/

# Copy configuration from /var/www/.env, see README.MD for more information
cp /var/www/.env /var/www/web_rvec/.env

# Migrate all tables
php /var/www/web_rvec/artisan migrate

# Clear any previous cached views
php /var/www/web_rvec/artisan config:clear
php /var/www/web_rvec/artisan cache:clear
php /var/www/web_rvec/artisan view:clear

# Optimize the application
php /var/www/web_rvec/artisan config:cache
php /var/www/web_rvec/artisan optimize
#php /var/www/html/artisan route:cache

# Change rights
chmod 777 -R /var/www/web_rvec/bootstrap/cache
chmod 777 -R /var/www/web_rvec/storage
chmod 777 -R /var/www/web_rvec/public/files/

# Bring up application
php /var/www/web_rvec/artisan up
