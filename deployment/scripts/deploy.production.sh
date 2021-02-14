echo $HETZNER_SSH_PASSWORD | sudo -kS cp -r dev/philodev/* /var/www/html/philodev/

cd /var/www/html/philodev/

echo $HETZNER_SSH_PASSWORD | sudo -kS chown -R $HETZNER_SSH_USERNAME:$HETZNER_SSH_USERNAME /var/www/html/philodev

php artisan migrate --force

php artisan config:cache

php artisan route:clear

php artisan route:cache

echo $HETZNER_SSH_PASSWORD | sudo -kS chown -R www-data:www-data /var/www/html/philodev
