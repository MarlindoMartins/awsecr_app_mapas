FROM ubuntu:24.04

LABEL maintainer="MPAP"

ENV DEBIAN_FRONTEND=noninteractive 

ENV TZ=Etc/UTC

RUN apt update && apt-get upgrade -y

RUN apt install -y git nano curl zip unzip sudo tzdata nginx

RUN apt-get install -y php8.3 

RUN apt-get install -y php8.3-xml

RUN apt-get install -y php8.3-curl

RUN apt-get install -y php8.3-pgsql

RUN apt-get install -y php8.3 php8.3-sqlite3

RUN apt-get install -y php8.3 php8.3-mysql

RUN apt-get install -y php8.3 php8.3-intl

RUN apt-get install -y php-mbstring

RUN apt-get install -y php8.3-zip

RUN apt-get install -y php8.3-gd

RUN apt-get install -y php8.3-bcmath

RUN apt update && apt-get upgrade -y

RUN apt-get install -y php8.3-fpm

RUN curl -sS https://getcomposer.org/installer | php  

RUN mv composer.phar /usr/local/bin/composer

RUN chmod +x /usr/local/bin/composer

RUN composer global require laravel/installer

RUN rm /etc/nginx/sites-enabled/*

COPY ./nginx.conf /etc/nginx/sites-enabled/nginx.conf

RUN echo 'PS1="APP_MAPAS_MPAP:$PS1>"' >> /root/.bashrc

RUN echo 'service nginx start' >> /root/.bashrc

RUN echo 'service php8.3-fpm start' >> /root/.bashrc

EXPOSE 5173 5174 443 8443 80 8080 8000-8009
