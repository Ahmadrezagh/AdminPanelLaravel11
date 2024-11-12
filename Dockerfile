# Use Ubuntu 22.04 as the base image
FROM ubuntu:22.04

# Set COMPOSER_ALLOW_SUPERUSER environment variable
ENV COMPOSER_ALLOW_SUPERUSER=1

# Update Ubuntu packages
RUN apt-get update && \
    apt-get install -y software-properties-common && \
    add-apt-repository -y ppa:ondrej/php && \
    apt-get update

# Install PHP 8.2 and necessary extensions
RUN DEBIAN_FRONTEND=noninteractive TZ=Etc/UTC apt-get install -y \
    php8.2 \
    php8.2-cli \
    php8.2-fpm \
    php8.2-mysql \
    php8.2-curl \
    php8.2-mbstring \
    php8.2-xml \
    php8.2-zip \
    php8.2-gd \
    php8.2-intl \
    php8.2-bcmath \
    php8.2-imagick \
    php8.2-dev \
    apache2 \
    libapache2-mod-php8.2 \
    unzip \
    curl \
    git \
    nano

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set PHP 8.2 as the default version
RUN update-alternatives --set php /usr/bin/php8.2

# Enable Apache modules
RUN a2enmod rewrite

# Set up a Laravel project (you might want to replace this with your own setup process)
RUN mkdir -p /var/www/project

# Set the working directory
WORKDIR /var/www/project
COPY . .

RUN cp .env.docker .env

# Install Composer dependencies
RUN composer install

# Generate Laravel application key
RUN php artisan key:generate

# Check if database has tables, if not run php artisan migrate:reset
RUN php artisan tinker --execute="if (!Schema::hasTable('migrations')) { Artisan::call('migrate:reset'); }"

# Set permissions
RUN chown -R www-data:www-data /var/www/project

# Copy Apache configuration file
COPY laravel.conf /etc/apache2/sites-available/000-default.conf

# Expose port 80
EXPOSE 80

# Start Apache service
CMD apachectl -D FOREGROUND
