FROM php:8.4-cli

WORKDIR /app

# Install system dependencies AND the PHP MySQL driver
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    nodejs \
    npm \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY . .

RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

RUN mkdir -p storage/framework/{sessions,views,cache} storage/logs bootstrap/cache \
    && chmod -R 777 storage bootstrap/cache

EXPOSE 8080

# It's cleaner to clear config before migrating
CMD sleep 10 && php artisan config:clear && php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=8080