FROM php:8.5-apache

# Laravelに必要なツール

RUN apt-get update && apt-get install -y git

# Laravelに必要なPHP拡張

RUN apt-get update && apt-get install -y unzip libzip-dev \
    && docker-php-ext-install pdo_mysql zip

# ApacheのDocumentRootをLaravelのpublicに変更

ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Composerをコピー

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Laravelプロジェクトをコピー

COPY . /var/www/html

WORKDIR /var/www/html

# Composerの依存パッケージをインストール

RUN composer install --no-dev --optimize-autoloader

# Apacheのrewriteを有効化

RUN a2enmod rewrite

# Laravelが書き込めるようにする

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

CMD ["apache2-foreground"]
