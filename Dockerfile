FROM php:5.6.14-apache
MAINTAINER Chris Fortier <cfortier2@gmail.com>

### The `Packages and PHP Extensions` lines originated from: https://github.com/RobLoach/docker-composer/blob/master/base/Dockerfile
# Packages
RUN apt-get update && \
  DEBIAN_FRONTEND=noninteractive apt-get install -y \
    apt-utils \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libmcrypt-dev \
    libpng12-dev \
    libbz2-dev \
    php-pear \
    curl \
    git \
    vim \
  && rm -r /var/lib/apt/lists/*

# PHP Extensions
RUN docker-php-ext-install mcrypt zip bz2 mbstring \
  && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
  && docker-php-ext-install gd

# install composer
RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

# move application to correct location
COPY . /app

# set apache conf
COPY ./etc/apache2/sites-enabled/000-default.conf /etc/apache2/sites-enabled/000-default.conf
COPY ./etc/apache2/conf-enabled/security.conf /etc/apache2/conf-enabled/security.conf

# Enable apache rewrite module
RUN a2enmod rewrite

# symlink /app/public to /var/www/html
RUN rm -rf /var/www/html && ln -s /app/public /var/www/html

# chown everything to the apache user
RUN chown -R www-data:www-data /app

# set workdir
WORKDIR /app

EXPOSE 80

# run composer install
RUN composer install --ansi
