# Guide d'installation complet

Ce guide décrit en détail comment installer et configurer l'application sur différents environnements.

## Table des matières

1. [Installation avec Docker](#installation-avec-docker)
2. [Installation manuelle](#installation-manuelle)
3. [Installation sur un serveur de production](#installation-sur-un-serveur-de-production)
4. [Configuration](#configuration)
5. [Dépannage](#dépannage)

## Installation avec Docker

L'installation avec Docker est la méthode recommandée pour le développement, car elle garantit un environnement cohérent et isolé.

### Prérequis

- Docker et Docker Compose installés sur votre machine
- Git

### Étapes d'installation

1. **Cloner le dépôt**

```bash
git clone https://github.com/votre-organisation/serveur.git
cd serveur
```

2. **Configurer les variables d'environnement**

```bash
cp .env .env.local
```

Modifiez le fichier `.env.local` avec vos paramètres personnalisés si nécessaire. Les valeurs par défaut fonctionnent avec la configuration Docker fournie.

3. **Démarrer l'environnement Docker**

```bash
docker-compose up -d
```

Cette commande crée et démarre les conteneurs suivants:
- PHP-FPM (8.2)
- Nginx
- MySQL (8.0)
- Redis
- Mailpit (pour tester les emails)

4. **Installer les dépendances et initialiser l'application**

```bash
docker-compose exec php composer install
docker-compose exec php php bin/console doctrine:migrations:migrate
docker-compose exec php php bin/console doctrine:fixtures:load --no-interaction
docker-compose exec php yarn install
docker-compose exec php yarn encore dev
```

5. **Accéder à l'application**

L'application est maintenant accessible à l'adresse: http://localhost:8080

Identifiants par défaut:
- Email: admin@dmqode.be
- Mot de passe: Tzkev5276.2

L'interface Mailpit pour visualiser les emails est accessible à: http://localhost:8025

## Installation manuelle

Si vous préférez ne pas utiliser Docker, vous pouvez installer l'application directement sur votre système.

### Prérequis

- PHP 8.2 ou supérieur avec extensions:
  - intl
  - pdo_mysql
  - mbstring
  - xml
  - zip
  - gd
  - redis (recommandé)
- MySQL 8.0 ou MariaDB 10.5+
- Composer 2
- Node.js 18+ et Yarn
- Redis (recommandé pour le cache)

### Étapes d'installation

1. **Cloner le dépôt**

```bash
git clone https://github.com/votre-organisation/serveur.git
cd serveur
```

2. **Installer les dépendances PHP**

```bash
composer install
```

3. **Configurer la base de données**

Créez un fichier `.env.local` à la racine du projet et configurez votre connexion à la base de données:

```
DATABASE_URL=mysql://utilisateur:mot_de_passe@127.0.0.1:3306/serveur?serverVersion=8.0&charset=utf8mb4
```

Ensuite, créez la base de données et exécutez les migrations:

```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

4. **Charger les données initiales**

```bash
php bin/console doctrine:fixtures:load
```

5. **Installer les dépendances JavaScript et compiler les assets**

```bash
yarn install
yarn encore dev
```

6. **Démarrer le serveur de développement**

```bash
symfony server:start
```

L'application est maintenant accessible à l'adresse: http://localhost:8000

## Installation sur un serveur de production

Pour un environnement de production, suivez ces étapes supplémentaires pour une configuration sécurisée et optimisée.

### Prérequis

- Serveur Ubuntu 20.04 LTS ou supérieur
- Nginx ou Apache
- PHP 8.2 ou supérieur
- MySQL 8.0 ou MariaDB 10.5+
- Redis
- Supervisor (pour gérer les workers Messenger)

### Configuration du serveur web

#### Configuration Nginx

Créez un fichier de configuration pour votre site dans `/etc/nginx/sites-available/`:

```nginx
server {
    listen 80;
    server_name votre-domaine.com;
    root /var/www/serveur/public;

    location / {
        try_files $uri /index.php$is_args$args;
    }

    location ~ ^/index\.php(/|$) {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_split_path_info ^(.+\.php)(/.*)$;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_param DOCUMENT_ROOT $document_root;
        internal;
    }

    location ~ \.php$ {
        return 404;
    }

    error_log /var/log/nginx/serveur_error.log;
    access_log /var/log/nginx/serveur_access.log;
}
```

Activez la configuration et redémarrez Nginx:

```bash
ln -s /etc/nginx/sites-available/votre-domaine.com /etc/nginx/sites-enabled/
systemctl restart nginx
```

### Utiliser le script d'installation automatique

Un script d'installation automatique est fourni pour faciliter le déploiement sur un serveur de production:

```bash
cd /var/www/serveur
bash scripts/install.sh
```

Ce script:
1. Configure l'environnement
2. Installe les dépendances
3. Compile les assets
4. Met à jour la base de données
5. Configure les permissions
6. Configure Supervisor pour les workers Messenger
7. Redémarre les services nécessaires

## Configuration

### Principales variables d'environnement

Voici les principales variables d'environnement que vous pouvez configurer dans le fichier `.env.local`:

```
# Environnement (dev, test, prod)
APP_ENV=prod

# Clé secrète (doit être unique et sécurisée en production)
APP_SECRET=votre-clé-secrète

# Base de données
DATABASE_URL=mysql://utilisateur:mot_de_passe@127.0.0.1:3306/serveur?serverVersion=8.0&charset=utf8mb4

# Mailer
MAILER_DSN=smtp://utilisateur:mot_de_passe@smtp.exemple.com:587

# Redis (pour le cache)
REDIS_DSN=redis://localhost:6379

# JWT (pour l'API)
JWT_SECRET_KEY=%kernel.project_dir%/config/jwt/private.pem
JWT_PUBLIC_KEY=%kernel.project_dir%/config/jwt/public.pem
JWT_PASSPHRASE=votre-passphrase
```

### Configuration du worker Messenger

Pour traiter les emails et autres tâches asynchrones, configurez Supervisor:

```ini
[program:symfony-messenger]
command=php /var/www/serveur/bin/console messenger:consume async --time-limit=3600
user=www-data
numprocs=2
startsecs=0
autostart=true
autorestart=true
process_name=%(program_name)s_%(process_num)02d
```

Enregistrez ce fichier dans `/etc/supervisor/conf.d/symfony-messenger.conf` et exécutez:

```bash
supervisorctl reread
supervisorctl update
supervisorctl start symfony-messenger:*
```

## Dépannage

### Problèmes courants

#### Les emails ne sont pas envoyés

1. Vérifiez que le worker Messenger est en cours d'exécution:
   ```bash
   supervisorctl status
   ```

2. Vérifiez la configuration du DSN SMTP:
   ```bash
   php bin/console debug:config framework mailer
   ```

3. Vérifiez les journaux pour les erreurs:
   ```bash
   tail -f var/log/prod.log
   ```

#### Erreurs de cache

Si vous rencontrez des erreurs liées au cache:

```bash
php bin/console cache:clear
chmod -R 777 var/cache
```

#### Problèmes de permissions

```bash
chown -R www-data:www-data /var/www/serveur
chmod -R 755 /var/www/serveur
chmod -R 777 /var/www/serveur/var
```

#### Problèmes de base de données

Pour voir l'état des migrations:

```bash
php bin/console doctrine:migrations:status
```

Pour corriger des problèmes de schéma:

```bash
php bin/console doctrine:schema:validate
php bin/console doctrine:schema:update --force # Attention: à n'utiliser qu'en développement
```

### Journaux et débuggage

Les journaux se trouvent dans:
- `var/log/dev.log` (environnement de développement)
- `var/log/prod.log` (environnement de production)

Pour activer le mode de débogage en production temporairement:

```
# Dans .env.local
APP_ENV=prod
APP_DEBUG=1
```

N'oubliez pas de désactiver le mode de débogage après avoir résolu le problème.