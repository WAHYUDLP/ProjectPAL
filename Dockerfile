# Dockerfile
FROM php:8.2-apache

# Install ekstensi yang dibutuhkan
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Aktifkan mod_rewrite (jika kamu pakai .htaccess)
RUN a2enmod rewrite

# Salin semua source code ke dalam container
COPY . /var/www/html

# Atur permission (opsional tapi disarankan)
RUN chown -R www-data:www-data /var/www/html
