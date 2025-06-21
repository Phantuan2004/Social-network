# Dockerfile
FROM php:8.2-fpm

# Cài extension Laravel yêu cầu
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    zip \
    unzip \
    curl \
    git \
    nano \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Cài composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Cài Node LTS + npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs

WORKDIR /var/www

# Copy toàn bộ mã nguồn
COPY . .

# Cài Laravel & Vite
RUN composer install
RUN npm install

# Quyền cho Laravel
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 storage bootstrap/cache

EXPOSE 5173

CMD ["php-fpm"]
