FROM webdevops/php-nginx:alpine

RUN apk add iptables

ADD app/* /app/