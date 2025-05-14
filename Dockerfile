# Use the official PHP image with Apache
FROM php:8.1-apache

# Copy only the PHP files from the nested folder
COPY invoice-maker/php /var/www/html

# Enable Apache mod_rewrite (only needed if you use routing)
RUN a2enmod rewrite

# Set permissions (optional but safe)
RUN chown -R www-data:www-data /var/www/html

# Expose the default Apache port
EXPOSE 80
