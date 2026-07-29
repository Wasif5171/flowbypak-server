FROM php:8.2-apache

# SQLite enable karo
RUN docker-php-ext-install pdo pdo_sqlite

# Rewrite module enable karo
RUN a2enmod rewrite

# Apache configuration
COPY . /var/www/html/
RUN chmod -R 777 /var/www/html/data 2>/dev/null || true

EXPOSE 80