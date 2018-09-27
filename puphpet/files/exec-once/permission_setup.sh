#!/bin/bash

echo 'appending vagrant to www-data group...'
sudo usermod -a -G vagrant www-data

echo 'appending vagrant to www-user group'
sudo usermod -a -G vagrant www-user

echo 'restarting php7.1-fpm...'
sudo systemctl restart php7.2-fpm.service

echo 'restarting apache2...'
sudo systemctl restart apache2.service
