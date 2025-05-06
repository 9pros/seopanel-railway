FROM php:7.4-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    default-mysql-client \
    libzip-dev \
    libcurl4-openssl-dev \
    libxml2-dev \
    git \
    unzip \
    && docker-php-ext-install pdo pdo_mysql mysqli curl xml zip

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Download and extract SEO Panel
RUN curl -L -o seopanel.zip https://github.com/seopanel/Seo-Panel/archive/refs/tags/4.8.0.zip \
    && unzip seopanel.zip \
    && mv Seo-Panel-4.8.0/* . \
    && rm -rf Seo-Panel-4.8.0 seopanel.zip

# Make required directories writable
RUN chmod -R 777 tmp/
RUN chmod 666 config/sp-config.php

# Create a setup script
RUN echo '#!/bin/bash \n\
sed -i "s/DB_NAME/\${MYSQL_DATABASE}/g" /var/www/html/config/sp-config.php \n\
sed -i "s/DB_USER/\${MYSQL_USER}/g" /var/www/html/config/sp-config.php \n\
sed -i "s/DB_PASSWORD/\${MYSQL_PASSWORD}/g" /var/www/html/config/sp-config.php \n\
sed -i "s/DB_HOST/\${MYSQL_HOST}/g" /var/www/html/config/sp-config.php \n\
sed -i "s#localhost:8080#\${SP_WEBPATH}#g" /var/www/html/config/sp-config.php \n\
apache2-foreground' > /usr/local/bin/start.sh && chmod +x /usr/local/bin/start.sh

# Set ownership to www-data
RUN chown -R www-data:www-data /var/www/html/

# Expose port 80
EXPOSE 80

# Start Apache with our config script
CMD ["/usr/local/bin/start.sh"]
