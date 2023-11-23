#!/bin/bash

# Exit on error
set -o errexit -o pipefail

# Update package manager (apt for Debian/Ubuntu)
sudo apt update 

# Install required packages
apt-get -y install fontconfig-config fonts-dejavu-core libapache2-mod-php8.1 libdeflate0 \
libfontconfig1 libgd3 libjbig0 libjpeg-turbo8 libjpeg8 libonig5 libtiff5 libwebp7 \
libxpm4 libzip4 php8.1 php8.1-bcmath php8.1-cli php8.1-common php8.1-curl php8.1-fpm \
php8.1-gd php8.1-mbstring php8.1-mysql php8.1-opcache php8.1-readline php8.1-xml php8.1-zip

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
# Verificar si ya existe una instalación de AWS CLI
if [ -d "/usr/local/aws-cli/v2/current" ]; then
    echo "Found preexisting AWS CLI installation. Updating..."
    sudo /usr/local/aws-cli/v2/current/aws/install --update
else
    # Si no existe una instalación previa, instalar AWS CLI
    echo "No existing AWS CLI installation found. Proceeding with installation..."
    curl "https://d1vvhvl2y92vvt.cloudfront.net/awscli-exe-linux-x86_64.zip" -o "awscliv2.zip"
    unzip -o awscliv2.zip
    sudo ./aws/install
    rm -rf aws
fi

# Ensure AWS Variables are available
if [[ -z "$AWS_ACCOUNT_ID" || -z "$AWS_DEFAULT_REGION" ]]; then
    echo "AWS Variables Not Set. Either AWS_ACCOUNT_ID or AWS_DEFAULT_REGION"
fi
