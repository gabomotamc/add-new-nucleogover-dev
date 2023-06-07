FROM php:7.4-apache

RUN apt-get update && apt-get install -y --no-install-recommends \
  curl \
  autoconf \
  build-essential \
  apt-utils \
  zlib1g-dev \
  libzip-dev \
  unzip \
  zip \
  gnupg2 \
  libmagick++-dev \
  libmagickwand-dev \
  libpq-dev \
  libfreetype6-dev \
  libjpeg62-turbo-dev \
  libpng-dev \
  wget \
  xvfb \
  && docker-php-ext-install zip

RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
&& docker-php-ext-install -j$(nproc) gd

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN pecl install imagick-3.4.3
RUN docker-php-ext-enable imagick

RUN a2enmod rewrite
RUN a2enmod ssl

EXPOSE 80
EXPOSE 443
