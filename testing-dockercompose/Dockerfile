FROM composer as backend

WORKDIR /app

COPY composer.json /app/
RUN composer install \
	--ignore-platform-reqs \
	--no-ansi \
	--no-autoloader \
	--no-dev \
	--no-interaction \
	--no-scripts

COPY . /app/
RUN composer dump-autoload --no-dev --optimize --classmap-authoritative

FROM php:7.2-apache

RUN pecl install xdebug-2.6.0 \
	&& docker-php-ext-enable xdebug \
	&& docker-php-ext-install pdo pdo_mysql

COPY --from=backend /app /var/www/html
COPY php.ini /usr/local/etc/php/php.ini 

