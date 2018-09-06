FROM node
MAINTAINER Blaine
RUN groupadd -g 1020 webmaster \
 && useradd -d /node -m -g 1020 -u 1001 webmaster \
 && npm install fsevents@1.2.4 && npm install && npm install forever -g && npm install forever-monitor
CMD [ "node" ]
