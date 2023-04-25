FROM php:7.4-apache

RUN mkdir -p /var/www/siageov1
COPY .docker/apache2/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY .docker/apache2/siageo.conf /etc/apache2/sites-available/siageo.conf
RUN chown -R $USER:$USER /var/www/siageov1
RUN chmod -R 755 /var/www
RUN a2dissite 000-default.conf
RUN a2ensite siageo.conf
RUN a2enmod ssl