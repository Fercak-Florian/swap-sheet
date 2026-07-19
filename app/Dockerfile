# ---------- Stage 1 : dépendances Composer ----------
FROM composer:2 AS composer_build

WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist --no-interaction

COPY . .

RUN php bin/console asset-map:compile

RUN composer dump-autoload --optimize --no-dev --classmap-authoritative

# ---------- Stage 2 : image PHP-FPM finale ----------
FROM php:8.4-fpm-alpine

# Extensions PHP nécessaires à Symfony (adapte selon ton app : pdo_mysql, intl, opcache, zip...)
RUN apk add --no-cache \
        icu-dev \
        libzip-dev \
        zip \
        unzip \
        git \
    && docker-php-ext-install \
#        pdo_mysql \
        intl \
        opcache \
        zip

# Config PHP recommandée pour la prod
RUN { \
        echo 'opcache.enable=1'; \
        echo 'opcache.validate_timestamps=0'; \
        echo 'opcache.max_accelerated_files=20000'; \
        echo 'opcache.memory_consumption=256'; \
        echo 'memory_limit=256M'; \
    } > /usr/local/etc/php/conf.d/symfony.ini

WORKDIR /var/www/symfony

# Récupère le code + vendor déjà buildé depuis le stage précédent
COPY --from=composer_build /app ./

# Permissions (var/ doit être writable par www-data)
RUN chown -R www-data:www-data var \
    && chmod -R 775 var

USER www-data

EXPOSE 9000

CMD ["php-fpm"]
