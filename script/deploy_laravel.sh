#!/bin/bash
set -e

# Project directory on server for your project.
export WEB_DIR="/var/www/web-rvec"
# Your server user. Used to fix permission issue & install our project dependencies
export WEB_USER="ubuntu"

# Change directory to the project.
cd "$WEB_DIR" || exit 1

# Change user owner to ubuntu & fix storage permission issues.
# Change the following line to specify the directory you want to modify.
# Example: sudo chown -R ubuntu:ubuntu /var/www/web-rvec/public
sudo chown -R ubuntu:ubuntu /var/www/web-rvec

# Fix permissions
sudo chmod -R u+x .
sudo chmod -R g+w storage

# Install composer dependencies with error handling
sudo -u "$WEB_USER" composer install --no-dev --no-progress --prefer-dist || { echo "Composer installation failed"; exit 1; }

# Load .env file from AWS Systems Manager
# Assuming generate-env.sh is in the scripts directory
./script/generate-env.sh || { echo "Generating .env file failed"; exit 1; }

# Generate app key & run migrations
sudo -u "$WEB_USER" php artisan key:generate || { echo "Generating app key failed"; exit 1; }
sudo -u "$WEB_USER" php artisan migrate --force --no-interaction || { echo "Running migrations failed"; exit 1; }
