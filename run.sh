#!/bin/bash
if [[ $(cat /etc/hostname) == sms_gateway ]]; then
    cd /var/www
    php artisan storage:link --force
    php artisan cache:clear
    php artisan config:clear
    php artisan route:clear
    php artisan view:clear
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache
    php artisan migrate --force
    php artisan db:seed
    php-fpm
fi
if [[ $(cat /etc/hostname) == sms_gateway_queue ]]; then
    cd /var/www
    php artisan queue:work
fi
#if [[ $(cat /etc/hostname) == crontab ]]; then
#    crontab /etc/cron.d/crontab
#    tail -f /var/log/cron.log
#fi
