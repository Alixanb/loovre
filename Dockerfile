FROM php:8.0-apache

# Enable mod_rewrite
RUN a2enmod rewrite

# Install extensions
RUN docker-php-ext-install pdo pdo_mysql

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . /var/www/html/

# Set permissions for Apache user
RUN chown -R www-data:www-data /var/www/html
