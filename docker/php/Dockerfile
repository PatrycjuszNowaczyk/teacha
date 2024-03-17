# Set the base image
FROM php:8.3.3-fpm

# Install dependencies
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    zlib1g-dev \
    libxml2-dev \
    libzip-dev \
# Install PHP extensions
    && docker-php-ext-install pdo pdo_mysql \
    mysqli \
    zip \
    intl \
    exif

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer


# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]