FROM php:7.2-apache

RUN curl -OL https://github.com/composer/composer/releases/download/1.7.2/composer.phar && \ mv composer.phar /usr/local/bin/composer && \ chmod +x /usr/local/bin/composer 
