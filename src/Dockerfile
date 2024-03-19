FROM php:7.4-apache

RUN docker-php-ext-install mysqli pdo_mysql

# Enable Apache modules
RUN a2enmod rewrite

# Copy custom virtual host configuration
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Enable custom virtual host
RUN ln -s /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-enabled/000-default.conf