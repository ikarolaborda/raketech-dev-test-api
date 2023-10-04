FROM php:8.2-fpm

MAINTAINER Ikaro C. Laborda <iclaborda@msn.com>

RUN apt update \
    && apt install -y zlib1g-dev g++ git libicu-dev zip libzip-dev zip libpng-dev libxml2-dev libcurl4-openssl-dev \
    && docker-php-ext-install intl opcache pdo pdo_mysql gd xml curl \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

RUN apt-get install -y dbus-x11 libsecret-1-0

WORKDIR /var/www/raketech

RUN mkdir -p /tmp && chmod 777 /tmp

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN curl -sSfL https://raw.githubusercontent.com/auth0/auth0-cli/main/install.sh | sh -s -- -b .

COPY --chmod=755 entrypoint.sh /usr/local/bin/

ENTRYPOINT ["entrypoint.sh"]
