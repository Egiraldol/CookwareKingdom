FROM php:8.2-apache
RUN apt-get update -y && apt-get install -y openssl zip unzip git libzip-dev
RUN docker-php-ext-configure zip && docker-php-ext-install zip
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

RUN php artisan key:generate
RUN php artisan migrate
RUN php artisan db:seed
RUN chmod -R 777 storage
RUN chmod -R 777 public/img/products
RUN chmod -R 777 public/img/recipes
RUN php artisan storage:link
RUN a2enmod rewrite
RUN php artisan db:seed
RUN php artisan storage:link
RUN service apache2 restart
