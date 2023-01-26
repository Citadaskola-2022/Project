# https://github.com/joseluisq/alpine-php-fpm/blob/master/8.1-fpm/Dockerfile

FROM php:8.1-fpm-alpine

ARG USER
ARG UID
ARG GID

ENV USER=${USER}
ENV UID=${UID}
ENV GID=${GID}

RUN mkdir -p /var/www/public

WORKDIR /var/www

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# MacOS staff group's gid is 20, so is the dialout group in alpine linux. We're not using it, let's just remove it.
RUN delgroup dialout

# Create user to fix PHPs write permissions
RUN addgroup -g ${GID} --system perm.to.write
RUN adduser -G perm.to.write --system -D -s /bin/sh -u ${UID} ${USER}

# Replace user and group PHP runs as
RUN sed -i "s/user = www-data/user = ${USER}/g" /usr/local/etc/php-fpm.d/www.conf
RUN sed -i "s/group = www-data/group = perm.to.write/g" /usr/local/etc/php-fpm.d/www.conf
RUN echo "php_admin_flag[log_errors] = on" >> /usr/local/etc/php-fpm.d/www.conf

RUN set -eux \
    && apk add --no-cache --virtual .build-deps $PHPIZE_DEPS \
    && apk add --update linux-headers \
# Install xdebug
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && true \
# Install sqlite \
    && apk add sqlite sqlite3 \
    && docker-php-ext-install pdo_sqlite \
    && true \
# Clean up build packages
    && docker-php-source delete \
    && apk del .build-deps \
    && true

USER ${USER}

CMD ["php-fpm", "-y", "/usr/local/etc/php-fpm.conf", "-R"]