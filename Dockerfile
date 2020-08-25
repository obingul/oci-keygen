FROM php:7.3-apache
LABEL maintainer="onur.bingul@oracle.com"
RUN mkdir /var/www/html/vendor
COPY index.html /var/www/html/
COPY composer.lock /var/www/html/
COPY ./vendor /var/www/html/vendor/
COPY keys*  /var/www/html/
COPY create.php /var/www/html/
RUN chown -R www-data:www-data /var/www/html/
EXPOSE 80
