#!/bin/bash

# Exit on error
set -o errexit -o pipefail

# Update package manager (apt for Debian/Ubuntu)
sudo apt update 

# Install required packages
sudo apt install curl git php7.1 php7.1-cli php7.1-fpm php7.1-mysql php7.1-xml php7.1-curl php7.1-opcache php7.1-pdo php7.1-gd php7.1-apcu php7.1-mbstring php7.1-imap php7.1-redis php7.1-mcrypt php7.1-mysqlnd apache2

# Allow URL rewrites in Apache
sudo sed -i 's#AllowOverride None#AllowOverride All#' /etc/apache2/apache2.conf

# Change Apache document root
sudo mkdir -p /var/www/html/public
sudo sed -i 's#DocumentRoot "/var/www/html"#DocumentRoot "/var/www/html/public"#' /etc/apache2/sites-available/000-default.conf

# Change Apache directory index
sudo sed -i 's/DirectoryIndex.*/DirectoryIndex index.html index.php/' /etc/apache2/apache2.conf

# Get Composer, and install to /usr/local/bin
if [ ! -f "/usr/local/bin/composer" ]; then
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
    rm composer-setup.php
else
    composer self-update --stable --no-ansi --no-interaction
fi

# Restart Apache
sudo service apache2 restart

# Ensure aws-cli is installed and configured
if [ ! -f "/usr/bin/aws" ]; then
    curl "https://awscli.amazonaws.com/awscli-exe-linux-x86_64.zip" -o "awscliv2.zip"
    unzip awscliv2.zip
    sudo ./aws/install
    rm awscliv2.zip
    rm -rf aws
fi

# Ensure AWS Variables are available
if [[ -z "$AWS_ACCOUNT_ID" || -z "$AWS_DEFAULT_REGION" ]]; then
    echo "AWS Variables Not Set. Either AWS_ACCOUNT_ID or AWS_DEFAULT_REGION"
fi
