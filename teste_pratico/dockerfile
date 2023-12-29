FROM php:7.4-fpm

# Instale as extensões necessárias
RUN docker-php-ext-install pdo_mysql

# Defina o diretório de trabalho
WORKDIR /var/www

# Copie os arquivos do projeto para o contêiner
COPY . /var/www

# Instale as dependências do Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install

# Exponha a porta 9000
EXPOSE 9000