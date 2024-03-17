# Set the base image
FROM php:8.3.3-fpm-alpine

# Install dependencies
RUN apk add --no-cache \
    openssl \
    bash \
    nano \
    git

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
