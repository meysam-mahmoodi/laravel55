FROM php:7.1-apache
RUN apt-get update && apt-get install -y  git zip  \
                                libxslt-dev \
                libfreetype6-dev \
                libjpeg62-turbo-dev \
                libmcrypt-dev \
                libpng-dev \
        && docker-php-ext-install -j$(nproc) iconv mcrypt pdo mysqli pdo_mysql xsl intl zip \
        && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
        && docker-php-ext-install -j$(nproc) gd

WORKDIR /var/www/html

RUN a2enmod rewrite
