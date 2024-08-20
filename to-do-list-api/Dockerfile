# Usar a imagem oficial do PHP com Apache
FROM php:8.2

# Instalar extensões necessárias
RUN docker-php-ext-install pdo pdo_mysql

# Definir o diretório de trabalho
WORKDIR /var/www/html

# Copiar os arquivos da aplicação para o diretório do Apache
COPY . .

# Ajustar as permissões
RUN chown -R www-data:www-data \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache

# Iniciar servidor
CMD php artisan serve --host=0.0.0.0 --port=8000