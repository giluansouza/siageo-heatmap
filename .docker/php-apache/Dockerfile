FROM php:8.2-apache

RUN mkdir -p /var/www/devboot
COPY .docker/php-apache/sites-available/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY .docker/php-apache/sites-available/devboot.conf /etc/apache2/sites-available/devboot.conf
RUN chown -R $USER:$USER /var/www/html
RUN chmod -R 755 /var/www
RUN a2dissite 000-default.conf
RUN a2ensite devboot.conf
RUN a2enmod rewrite ssl

RUN apt-get update && \
    docker-php-ext-install mysqli pdo pdo_mysql