FROM php:8.3-apache
WORKDIR /var/www/html

COPY ./php.ini ${PHP_INI_DIR}/php.ini

RUN apt-get update && apt-get install -y \
 # For php imagick lib
 #imagemagick libmagickwand-dev \
 # Ensure curl is available for the Fargate health check
 curl \
 # Some debugging utilities
 #iproute2 iputils-ping dnsutils htop vim \
 # for composer
 unzip \
 # for LocalGit.php
 git

RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli

RUN a2enmod \
  rewrite info

COPY . .
