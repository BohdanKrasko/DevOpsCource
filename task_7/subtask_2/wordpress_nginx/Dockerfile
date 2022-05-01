FROM ubuntu:21.04

ARG DEBIAN_FRONTEND=noninteractive

USER root

RUN apt-get update -y && \
    apt-get install -y \
        nginx \
        php-fpm \
        php-mysql \
        curl \
        python3-pip \
        php-curl \
        php-gd \
        php-intl \
        php-mbstring \
        php-soap \
        php-xml \
        php-xmlrpc \
        php-zip && \
    pip3 install --no-cache-dir supervisor

COPY conf/nginx/wordpress.conf /etc/nginx/sites-available/wordpress
COPY conf/wordpress/wp-config.php /var/www/wordpress/wp-config.php
COPY conf/supervisor/supervisord.conf /etc/supervisord.conf

RUN ln -s /etc/nginx/sites-available/wordpress /etc/nginx/sites-enabled/ && \
    unlink /etc/nginx/sites-enabled/default && \
    nginx -t && \
    /etc/init.d/nginx reload && \
    curl -LO https://wordpress.org/latest.tar.gz && \
    tar xzvf latest.tar.gz && \
    cp -a wordpress/. /var/www/wordpress/ && \
    chown -R www-data:www-data /var/www/wordpress

ENTRYPOINT ["/usr/local/bin/supervisord", "-n", "-c", "/etc/supervisord.conf"]

EXPOSE 80