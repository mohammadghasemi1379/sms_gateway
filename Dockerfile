FROM php:8.1-fpm

# Set working directory
WORKDIR /var/www

# Install dependencies
RUN apt-get update -y && \
    apt-get install -y \
    openssl \
    zip \
    unzip \
    git \
    libxml2-dev \
    libc-client-dev \
    libkrb5-dev \
    zlib1g-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libz-dev \
    libzip-dev \
    cron && \
    apt-get clean -y && \
    rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install soap && \
    docker-php-ext-enable soap && \
    docker-php-ext-install sockets && \
    docker-php-ext-configure imap --with-kerberos --with-imap-ssl &&\
    docker-php-ext-install imap && \
    docker-php-ext-install pcntl && \
    docker-php-ext-install gd && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install -j$(nproc) gd && \
    docker-php-ext-install zip && \
    docker-php-ext-install pdo_mysql && \
    docker-php-ext-install bcmath

# Install composer (php package manager)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy existing application directory contents to the container
COPY . /var/www

#install commands
RUN composer install

# Expose port 9000
RUN chown -R www-data:www-data ./*
RUN chmod 777 /var/www/run.sh
CMD /bin/bash -c "/var/www/run.sh"
EXPOSE 9000
