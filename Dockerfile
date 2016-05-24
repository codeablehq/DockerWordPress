FROM nginx:1.10-alpine
MAINTAINER Tomaz Zaman <tomaz@codeable.io>

COPY nginx.conf /etc/nginx/conf.d/default.conf

RUN mkdir -p /var/www/html
WORKDIR /var/www/html

COPY . ./
