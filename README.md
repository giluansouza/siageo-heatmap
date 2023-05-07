# php-apache-mysql-phpmyadmin-composer

Docker running Apache, PHP, Composer, MySQL and PHPMyAdmin.

## Overview

1. [Configuração inicial](#initial-config)

    Altere o arquivo .env com os dados do seu container
    Altere o composer.json para refletir as necessidades do aplicativo

2. [Gerando certificado SSL](#certificate)

    ```sh
    openssl req -x509 -sha256 -newkey rsa:2048 -keyout cert.key -out cert.crt -days 365 -nodes
    ```

3. [Run the application](#run-application)

    ```sh
    $ openssl req -x509 -sha256 -newkey rsa:2048 -keyout cert.key -out cert.crt -days 365 -nodes
    ```

4. Open your favorite browser

    * [http://siageo.gs:8001](http://siageo.gs:8001/)
    * [https://siageo.gs:3001](https://siageo.gs:3001/)

5. Stop and clear services

    ```sh
    docker-compose down -v
    ```
