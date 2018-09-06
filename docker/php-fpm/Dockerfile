# Version: 0.0.1
#FROM ubuntu:16.04
#FROM php:fpm
FROM php:7.0-fpm
MAINTAINER Blaine
RUN apt-get update -y > /dev/null && \
apt-get upgrade -y > /dev/null && \
apt-get install apt-utils -y > /dev/null && \
apt-get install -y wget curl nano net-tools iputils-ping && \

apt-get install -y libpng-dev libjpeg-dev libpq-dev \
&& rm -rf /var/lib/apt/lists/* \
&& docker-php-ext-configure gd --with-png-dir=/usr --with-jpeg-dir=/usr \
&& docker-php-ext-install gd mbstring pdo pdo_mysql pdo_pgsql


RUN groupadd -g 1001 webmaster \
 && useradd -d /var/www/ -g 1001 -u 1001 webmaster

#php php-cli php-common php-mysql php-gd php-fpm php-cgi php-pear php-mcrypt php-curl php-gettext
EXPOSE 9000/tcp
#CMD /usr/sbin/php-fpm7.0 --nodaemonize --fpm-config /etc/php/7.0/fpm/php-fpm.conf
CMD php-fpm
#CMD ["php-fpm7.0"]
#CMD ["service", "php7.0-fpm", "start"]
#CMD service php7.0-fpm start
