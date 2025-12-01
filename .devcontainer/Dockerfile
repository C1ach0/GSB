FROM php:8.3-cli

# Créer un utilisateur non-root pour VS Code
ARG USERNAME=vscode
ARG USER_UID=1000
ARG USER_GID=$USER_UID

RUN groupadd --gid $USER_GID $USERNAME \
    && useradd --uid $USER_UID --gid $USER_GID -m $USERNAME \
    && apt-get update \
    && apt-get install -y sudo \
    && echo $USERNAME ALL=\(root\) NOPASSWD:ALL > /etc/sudoers.d/$USERNAME \
    && chmod 0440 /etc/sudoers.d/$USERNAME

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Installation des outils et extensions PHP
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        zip \
        pdo \
        pdo_mysql \
        mbstring \
        exif \
        pcntl \
        bcmath \
        gd \
        opcache \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Installation de Xdebug pour le debugging
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Configuration Xdebug
RUN echo "xdebug.mode=develop,debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_port=9003" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Configuration PHP pour le développement
RUN cp /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini \
    && echo "memory_limit=512M" >> /usr/local/etc/php/php.ini \
    && echo "upload_max_filesize=50M" >> /usr/local/etc/php/php.ini \
    && echo "post_max_size=50M" >> /usr/local/etc/php/php.ini

# Définir le répertoire de travail
WORKDIR /workspace

# Passer à l'utilisateur non-root
USER $USERNAME