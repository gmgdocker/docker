FROM mysql:5.7
MAINTAINER Blaine
RUN apt-get update -y > /dev/null && \
apt-get upgrade -y > /dev/null && \
apt-get install apt-utils -y > /dev/null && \
apt-get install -y wget curl nano net-tools iputils-ping

ENV MYSQL_ROOT_PASSWORD="1111" 
#MYSQL_PORT_NUMBER="3306"
EXPOSE 3306
#CMD php-fpm
