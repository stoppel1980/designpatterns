FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
    g++ git libicu-dev zip zlib1g-dev libzip-dev zip
RUN docker-php-ext-install zip intl opcache pdo_mysql
RUN pecl install apcu xdebug-2.8.1
RUN docker-php-ext-enable apcu xdebug


WORKDIR /app

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /app
