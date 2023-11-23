#!/bin/bash

# Fix user rights
sudo usermod -a -G apache ec2-user
sudo chown -R ec2-user:apache /var/www
sudo chmod 2775 /var/www
# Make sure the script is executable
sudo chmod +x scripts/generate-env.sh
sudo chmod +x script/install_dependencies.sh
find /var/www -type d -exec sudo chmod 2775 {} \;
find /var/www -type f -exec sudo chmod 0664 {} \;
