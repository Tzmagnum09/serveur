# Serveur - Application de gestion d'utilisateurs multilingue

Une application Symfony moderne pour la gestion d'utilisateurs, avec authentification, gestion des rôles et permissions, et envoi d'emails en plusieurs langues.

## Fonctionnalités

- 🔒 **Authentification sécurisée** avec options avancées:
  - Authentification à deux facteurs (2FA)
  - Restriction des tentatives de connexion
  - Validation par email
  - Approbation des comptes par administrateur
  - Gestion de mots de passe forts

- 👥 **Gestion des utilisateurs**:
  - Création et gestion de comptes
  - Gestion des rôles (ROLE_USER, ROLE_ADMIN, ROLE_SUPER_ADMIN)
  - Gestion fine des permissions pour les administrateurs
  - Tableau de bord administrateur avec statistiques

- 📧 **Système d'emails**:
  - Templates d'emails multilingues
  - Éditeur WYSIWYG pour les templates
  - Files d'attente pour les envois asynchrones
  - Prévisualisation des emails

- 📊 **Suivi et audit**:
  - Journal d'audit des actions
  - Statistiques sur les utilisateurs
  - Traçabilité des connexions

- 🌐 **Multilingue**:
  - Interface en français, anglais, néerlandais et allemand
  - Emails en plusieurs langues
  - Préférences de langue par utilisateur

- 🚀 **API REST**:
  - Authentification JWT
  - Endpoints pour les opérations courantes
  - Documentation Swagger/OpenAPI

## Prérequis techniques

- PHP 8.2 ou supérieur
- MySQL 8.0 ou MariaDB 10.5+
- Composer 2
- Node.js 18+ et Yarn
- Redis (recommandé pour le cache)

## Installation rapide

### Avec Docker (recommandé)

```bash
# Cloner le dépôt
git clone https://github.com/votre-organisation/serveur.git
cd serveur

# Configurer les variables d'environnement
cp .env .env.local
# Éditer .env.local avec vos paramètres

# Démarrer l'environnement Docker
docker-compose up -d

# Installer les dépendances et initialiser l'application
docker-compose exec php composer install
docker-compose exec php php bin/console doctrine:migrations:migrate
docker-compose exec php php bin/console doctrine:fixtures:load
docker-compose exec php yarn install
docker-compose exec php yarn encore dev
```

### Installation manuelle

```bash
# Cloner le dépôt
git clone https://github.com/votre-organisation/serveur.git
cd serveur

# Installer les dépendances PHP
composer install

# Configurer la base de données
# Éditer .env.local avec vos paramètres de connexion à la BDD
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load

# Installer les dépendances JavaScript et compiler les assets
yarn install
yarn encore dev

# Démarrer le serveur de développement
symfony server:start
```

## Configuration

### Principales variables d'environnement

```
# Base de données
DATABASE_URL=mysql://app:!ChangeMe!@127.0.0.1:3306/serveur?serverVersion=8.0&charset=utf8mb4

# Mailer
MAILER_DSN=smtp://localhost:1025

# Redis
REDIS_DSN=redis://localhost:6379

# JWT (pour l'API)
JWT_SECRET_KEY=%kernel.project_dir%/config/jwt/private.pem
JWT_PUBLIC_KEY=%kernel.project_dir%/config/jwt/public.pem
JWT_PASSPHRASE=your-passphrase
```

### Génération des clés JWT

```bash
mkdir -p config/jwt
openssl genpkey -out config/jwt/private.pem -aes256 -algorithm rsa -pkeyopt rsa_keygen_bits:4096 -pass pass:your-passphrase
openssl pkey -in config/jwt/private.pem -out config/jwt/public.pem -pubout -passin pass:your-passphrase
```

## Commandes utiles

### Utilisateurs et permissions

```bash
# Créer un super admin
php bin/console app:create-admin email@example.com password --super-admin

# Lister les utilisateurs
php bin/console app:list-users

# Attribuer un rôle
php bin/console app:assign-role username ROLE_ADMIN
```

### Emails

```bash
# Gérer les templates d'emails
php bin/console app:email-templates:list
php bin/console app:email-templates:import
php bin/console app:email-templates:export

# Tester l'envoi d'un email
php bin/console app:send-test-email recipient@example.com template_code
```

### Maintenance

```bash
# Vider le cache
php bin/console cache:clear

# Voir les routes disponibles
php bin/console debug:router

# Vérifier la configuration de sécurité
php bin/console security:check
```

## Structure du projet

```
serveur/
├── assets/            # Fichiers frontend (JS, CSS, images)
├── bin/               # Exécutables (console)
├── config/            # Configuration
├── migrations/        # Migrations de base de données
├── public/            # Fichiers publics
├── src/               # Code source PHP
│   ├── Controller/    # Contrôleurs
│   ├── Entity/        # Entités Doctrine
│   ├── Repository/    # Repositories
│   ├── Service/       # Services
│   ├── Security/      # Classes de sécurité
│   └── Twig/          # Extensions Twig
├── templates/         # Templates Twig
│   ├── admin/         # Interface d'administration
│   ├── emails/        # Templates d'emails
│   └── security/      # Pages d'authentification
├── tests/             # Tests automatisés
├── translations/      # Fichiers de traduction
└── vendor/            # Dépendances PHP
```

## Documentation

Une documentation plus détaillée est disponible dans le répertoire `docs/`:

- [Guide d'installation](docs/installation.md)
- [Guide de développement](docs/development.md)
- [API Documentation](docs/api.md)
- [Architecture technique](docs/architecture.md)

## Tests

```bash
# Exécuter tous les tests
php bin/phpunit

# Exécuter un groupe spécifique de tests
php bin/phpunit --group=user
```

## Contribuer

Les contributions sont les bienvenues! Veuillez consulter notre [guide de contribution](CONTRIBUTING.md) pour plus de détails.

## Licence

Ce projet est sous licence propriétaire. Tous droits réservés.