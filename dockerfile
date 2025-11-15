FROM php:8.2-apache

# Instalar extensión mysqli
RUN docker-php-ext-install mysqli

# Activar mod_rewrite si quieres (opcional)
RUN a2enmod rewrite