# Usa PHP con Apache
FROM php:8.2-apache

# Instala extensiones necesarias
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libicu-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        gd \
        intl \
        calendar \
        pdo \
        pdo_mysql \
        zip

# Copia el código fuente
COPY . /var/www/html

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Copia Composer desde imagen oficial
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Instala dependencias PHP (ya con todas las extensiones disponibles)
RUN composer install --no-dev --optimize-autoloader

# Da permisos a Laravel
RUN chown -R www-data:www-data storage bootstrap/cache

# Expone el puerto
EXPOSE 80
