FROM dunglas/frankenphp:php8.2-bookworm

# Install library yang dibutuhkan GD
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libzip-dev \
    && rm -rf /var/lib/apt/lists/*

# Install PHP Extensions
RUN install-php-extensions \
    gd \
    pdo_mysql \
    mbstring \
    zip \
    exif \
    intl \
    bcmath \
    opcache

WORKDIR /app

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy source
COPY . .

# Install Composer
RUN composer install --no-dev --optimize-autoloader

# Install NodeJS 22
RUN curl -fsSL https://deb.nodesource.com/setup_22.x | bash -
RUN apt-get install -y nodejs

RUN npm install
RUN npm run build

# Laravel permission
RUN mkdir -p storage/framework/{cache,sessions,views} bootstrap/cache && \
    chmod -R 775 storage bootstrap/cache

EXPOSE 8080

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]