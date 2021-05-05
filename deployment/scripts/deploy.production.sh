echo $HETZNER_SSH_PASSWORD | sudo -kS cp -r dev/philodev/* /var/www/html/philodev/

cd /var/www/html/philodev/

echo $HETZNER_SSH_PASSWORD | sudo -kS chown -R www-data:www-data /var/www/html/philodev

php artisan config:cache

php artisan route:clear

php artisan route:cache

php artisan storage:link

echo $HETZNER_SSH_PASSWORD | sudo -kS chown -R www-data:www-data /var/www/html/philodev
