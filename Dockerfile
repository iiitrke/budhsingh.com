FROM nginx:1.27.0-alpine-slim
COPY  ./src/ /usr/share/nginx/html
EXPOSE 80