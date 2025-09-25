FROM php:8.2-apache

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libicu-dev \
    zlib1g-dev \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        gd \
        intl \
        calendar \
        zip \
        pdo \
        pdo_mysql

# Habilitar módulos de Apache (opcional para Laravel)
RUN a2enmod rewrite

# Copiar los archivos del proyecto
COPY . /var/www/html

WORKDIR /var/www/html

# Copiar Composer desde imagen oficial
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Instalar dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader

# Permisos para Laravel
RUN chown -R www-data:www-data storage bootstrap/cache

# Puerto expuesto
EXPOSE 80
