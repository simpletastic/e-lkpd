FROM dunglas/frankenphp:php8.2-bookworm

RUN install-php-extensions pdo_mysql mbstring exif pcntl bcmath gd intl zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN touch database/database.sqlite

RUN php artisan migrate --force

RUN php artisan storage:link || true

ENV SERVER_NAME=:10000

EXPOSE 10000

CMD ["sh", "-c", "php artisan octane:frankenphp --host=0.0.0.0 --port=${PORT}"]
