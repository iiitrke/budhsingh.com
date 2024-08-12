#FROM nginx:1.27.0-alpine-slim
FROM php:7.2-apache
COPY ./src/ /var/www/html/
EXPOSE 80