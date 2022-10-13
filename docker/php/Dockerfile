FROM php:8.1-fpm

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
  git \
  curl \
  zip \
  unzip

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
