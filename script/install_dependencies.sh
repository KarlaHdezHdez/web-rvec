#!/bin/bash

# Salir en caso de error
set -o errexit -o pipefail

# Actualizar el gestor de paquetes (apt para Debian/Ubuntu)
sudo apt update

# Instalar paquetes necesarios con 'apt-get'
sudo apt-get -y install fontconfig-config fonts-dejavu-core libapache2-mod-php8.1 libdeflate0 \
libfontconfig1 libgd3 libjbig0 libjpeg-turbo8 libjpeg8 libonig5 libtiff5 libwebp7 \
libxpm4 libzip4 php8.1 php8.1-bcmath php8.1-cli php8.1-common php8.1-curl php8.1-fpm \
php8.1-gd php8.1-mbstring php8.1-mysql php8.1-opcache php8.1-readline php8.1-xml php8.1-zip

# Permitir reescritura de URL en Apache
sudo sed -i 's#AllowOverride None#AllowOverride All#' /etc/apache2/apache2.conf

# Cambiar la raíz del documento de Apache
sudo mkdir -p /var/www/html/public
sudo sed -i 's#DocumentRoot "/var/www/html"#DocumentRoot "/var/www/html/public"#' /etc/apache2/sites-available/000-default.conf

# Cambiar el índice del directorio de Apache
sudo sed -i 's/DirectoryIndex.*/DirectoryIndex index.html index.php/' /etc/apache2/apache2.conf

# Obtener Composer e instalar en /usr/local/bin
if [ ! -f "/usr/local/bin/composer" ]; then
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
    rm composer-setup.php
else
    composer self-update --stable --no-ansi --no-interaction
fi

# Reiniciar Apache
sudo service apache2 restart

# Asegurar que aws-cli esté instalado y configurado
if ! command -v aws &> /dev/null; then
    echo "AWS CLI no encontrado. Instalando..."
    curl "https://d1vvhvl2y92vvt.cloudfront.net/awscli-exe-linux-x86_64.zip" -o "awscliv2.zip"
    unzip -o awscliv2.zip
    sudo ./aws/install
    rm -rf aws awscliv2.zip  # Limpiar archivos temporales
else
    echo "AWS CLI ya está instalado. Actualizando..."
    aws --version  # Verificar la versión actual
    sudo aws cli update --cli-binary-format exe-linux-x86_64 --cli-version 2.6.5
fi

# Asegurar que las variables de AWS estén disponibles
if [[ -z "$AWS_ACCOUNT_ID" || -z "$AWS_DEFAULT_REGION" ]]; then
    echo "Variables de AWS no configuradas. Se necesita AWS_ACCOUNT_ID o AWS_DEFAULT_REGION"
fi
