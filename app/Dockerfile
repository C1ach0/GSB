FROM php:8.3-cli

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Installation des extensions PHP courantes pour le développement
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip pdo pdo_mysql \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Définir le répertoire de travail
WORKDIR /app

# Copier les fichiers composer pour installer les dépendances
COPY composer.json composer.lock* ./
RUN composer install --no-scripts --no-autoloader --prefer-dist

# Copier le reste du code
COPY . .

# Générer l'autoloader
RUN composer dump-autoload --optimize

# Exposer le port pour le serveur de développement PHP
EXPOSE 8000