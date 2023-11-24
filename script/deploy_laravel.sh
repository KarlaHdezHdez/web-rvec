#!/bin/bash
set -e
# Resto del script...

# Runs inside production server.

# Project directory on server for your project.
export WEB_DIR="/var/www/web-rvec"
# Your server user. Used to fix permission issue & install our project dependencies
export WEB_USER="ubuntu"

# Change directory to the project.
cd "$WEB_DIR" || exit 1

# change user owner to ubuntu & fix storage permission issues.
sudo chmod -R ubuntu:ubuntu .
sudo chmod -R www-data storage
sudo chmod -R u+x .
sudo chmod g+w -R storage

# install composer dependencies with error handling
sudo -u "$WEB_USER" composer install --no-dev --no-progress --prefer-dist || { echo "Composer installation failed"; exit 1; }

# load .env file from AWS Systems Manager
# Assuming generate-env.sh is in the scripts directory
./script/generate-env.sh || { echo "generating .env file failed"; exit 1; }


# generate app key & run migrations
sudo -u "$WEB_USER" php artisan key:generate || { echo "Generating app key failed"; exit 1; }
sudo -u "$WEB_USER" php artisan migrate --force --no-interaction || { echo "Running migrations failed"; exit 1; }
