FROM php:7.3-fpm-alpine

RUN set -eux \
    && apk --no-cache add \
    vim \
    postgresql-dev \
    libzip-dev \
    icu-libs \
    bash \
    autoconf \
    g++ \
    gcc \
    make \
    icu-dev \
    libtool \
    openssh \
    git \
    && addgroup foo \
    && adduser --gecos "" --disabled-password --home=/usr/share/nginx/html --shell=/bin/sh --ingroup foo foo


# Configure Timezone
RUN ln -fs /usr/share/zoneinfo/Europe/Paris /etc/localtime && \
    echo "Europe/Paris" > /etc/timezone

# Install composer
RUN curl https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer

RUN pecl install -f xdebug

RUN docker-php-ext-install \
    intl \
    pdo_pgsql \
    pdo_mysql \
    zip \
    sockets

RUN docker-php-ext-configure zip \
        && docker-php-ext-install pdo_mysql \
        && docker-php-ext-enable xdebug

RUN chmod -R 777 /usr/share/

USER foo

WORKDIR /var/www

CMD ["php-fpm", "-F"]
