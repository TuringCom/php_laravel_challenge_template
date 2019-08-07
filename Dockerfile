FROM mysql:5.7
MAINTAINER Alexey Borovkov <alexey.b@turing.com>

ENV MYSQL_DATABASE 'turing'
ENV MYSQL_ROOT_PASSWORD 'root'
ENV MYSQL_USER 'turing'
ENV MYSQL_PASSWORD 'turing'

COPY ./database/dump.sql /docker-entrypoint-initdb.d/dump.sql

RUN apt-get update && apt-get install -y \
    apt-utils \
    curl \
    supervisor \
    wget \
    apt-transport-https \
    lsb-release \
    ca-certificates \
    less


RUN wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg && \
    echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" |  tee /etc/apt/sources.list.d/php.list

RUN apt-get update && \
    apt-get install -y \
    apache2 \
    apache2-bin \
    apache2-data \
    apache2-utils \
    php7.2 \
    php7.2-bcmath \
    php7.2-ctype \
    php7.2-json \
    php7.2-mbstring \
    php7.2-mysql \
    php7.2-xml \
    php7.2-zip \
    sudo

RUN curl --silent --show-error https://getcomposer.org/installer | php && \
    mv composer.phar /usr/bin/composer

RUN mkdir /var/www/laravel
WORKDIR /var/www/laravel

COPY . .
RUN composer install
EXPOSE 80

COPY turing-entrypoint.sh /turing-entrypoint.sh

ENTRYPOINT ["/turing-entrypoint.sh"]
