#FROM centos:7
#MAINTAINER Blaine
#RUN yum install -y nginx net-tools bind-utils git nano mc vsftpd zip unzip wget curl-devel libpng-devel
##RUN echo "Hello DockerFile1" > /var/www/html/index.html

#EXPOSE 80/tcp
# ["/usr/sbin/nginx", "-g", "daemon off"]
#ENTRYPOINT ["/usr/sbin/nginx"]
#CMD ["-h"]


FROM ubuntu:16.04

RUN apt-get update
RUN apt-get install -y nginx nano net-tools iputils-ping
RUN groupadd -g 1001 webmaster \
 && useradd -d /var/www/ -g 1001 -u 1001 webmaster
    
#RUN echo 'Hi, I am in your container' \
#        >/usr/share/nginx/html/index.html
EXPOSE 80 443
CMD ["nginx", "-g", "daemon off;"]
