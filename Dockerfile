# Use official PHP image with Apache
FROM php:8.2-apache

# Enable Apache mod_rewrite if needed
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy contents into container
COPY invoice-maker/php/ ./

# Open port 80 for Render
EXPOSE 80
