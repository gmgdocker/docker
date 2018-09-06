#####################################
#FROM centos:7
FROM ubuntu:16.04
MAINTAINER Blaine
#RUN yum install -y nano postfix -y
RUN apt-get update && apt-get install postfix -y
#CMD ["postfix", "start"]
#CMD ["systemctl", "start", "postfix"]
CMD /etc/init.d/postfix start
