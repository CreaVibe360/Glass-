FROM php:8.4-cli
WORKDIR /app
COPY . /app
RUN mkdir -p /app/storage/uploads && chmod -R 777 /app/storage
ENV PORT=10000
CMD ["sh", "-c", "php -S 0.0.0.0:${PORT:-10000} index.php"]
