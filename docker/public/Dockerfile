﻿FROM php:8.2-apache

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# RUN apt-get update \
#   && apt-get install -y --no-install-recommends locales apt-utils git libicu-dev g++ libpng-dev libxml2-dev libzip-dev libonig-dev libxslt-dev unzip curl gnupg libmagickwand-dev imagemagick

# RUN echo "en_US.UTF-8 UTF-8" > /etc/locale.gen  \
#   &&  echo "fr_FR.UTF-8 UTF-8" >> /etc/locale.gen \
#   &&  locale-gen

# RUN curl -sS https://getcomposer.org/installer | php -- \
#   &&  mv composer.phar /usr/local/bin/composer

# RUN curl -sS https://get.symfony.com/cli/installer | bash \
#   &&  mv /root/.symfony5/bin/symfony /usr/local/bin

# RUN docker-php-ext-configure intl \
#   && docker-php-ext-install mysqli pdo pdo_mysql opcache intl zip calendar dom mbstring gd xsl fileinfo

# RUN pecl install apcu \
#   && docker-php-ext-enable apcu

# RUN pecl install imagick \
#   && docker-php-ext-enable imagick

# RUN pecl install xdebug \
#   && docker-php-ext-enable xdebug

WORKDIR /var/www/html