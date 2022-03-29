# delete files
echo $HETZNER_SSH_PASSWORD | sudo -kS rm -rf /var/www/html/philodev/*

# copy files to /var/www/
echo $HETZNER_SSH_PASSWORD | sudo -kS cp -r dev/philodev/* /var/www/html/philodev/

# copy and replace .env file
cp dev/philodev/.env.production /var/www/html/philodev/.env

# fix permissions from sudo copy
echo $HETZNER_SSH_PASSWORD | sudo -kS chown -R www-data:www-data /var/www/html/philodev


# Instruct supervisor to read the new files
#sudo supervisorctl reread
#sudo supervisorctl update
#sudo -kS supervisorctl start all

# navigate to the new files
cd /var/www/html/philodev/

## remove deployment instructions
#composer dumpautoload

# migrate the database
#php artisan migrate --force

# cache the config
php artisan config:cache

# cache the routes
php artisan route:cache

# create storage links
php artisan storage:link

# send restart signal to queue
#php artisan queue:restart
