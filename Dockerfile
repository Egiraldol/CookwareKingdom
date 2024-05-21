FROM php:8.1.4-apache
RUN apt-get update -y && apt-get install -y openssl zip unzip git 
RUN docker-php-ext-install pdo_mysql 
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY . /var/www/html
COPY ./public/.htaccess /var/www/html/.htaccess
WORKDIR /var/www/html
RUN composer install \
    --ignore-platform-reqs \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist
USER root
RUN mkdir -p public/storage/products
RUN mkdir -p public/storage/recipes
RUN chmod -R 777 public/storage
RUN php artisan storage:link

RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

RUN php artisan key:generate
RUN php artisan migrate
RUN php artisan db:seed

RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
RUN chmod -R 777 public/storage/products
RUN chmod -R 777 public/storage/recipes

RUN a2enmod rewrite
RUN service apache2 restart
