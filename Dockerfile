FROM php:8.0-apache
WORKDIR /var/www/html
RUN echo "upload_max_filesize = 100M" >> /usr/local/etc/php/php.ini
RUN echo "post_max_size = 100M" >> /usr/local/etc/php/php.ini
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html
COPY src/ src
