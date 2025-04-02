#!/bin/bash
# Instructions finales pour l'installation et le lancement de l'application Symfony

# Se placer dans le répertoire du projet
cd /var/www/serveur

# Installer les packages Yarn/NPM pour les assets
yarn install
# ou avec npm
# npm install

# Compiler les assets
yarn encore dev
# ou avec npm
# npm run dev

# Mettre à jour le schéma de la base de données
php bin/console doctrine:schema:update --force

# Créer les données initiales (super admin et templates d'emails)
php bin/console doctrine:fixtures:load --no-interaction

# Vider le cache
php bin/console cache:clear

# Définir les permissions appropriées
sudo chown -R www-data:www-data var
sudo chmod -R 775 var

# Créer un répertoire pour le logo et lui donner les bonnes permissions
mkdir -p public/images
sudo chown -R www-data:www-data public/images
sudo chmod -R 775 public/images

# Activer le worker Messenger pour les emails asynchrones
# Pour une configuration de production, il est recommandé d'utiliser Supervisor
# pour gérer ce processus
php bin/console messenger:consume async -vv &

# Installation terminée
echo "L'installation est terminée. Vous pouvez accéder à votre site à l'adresse: https://serveur.dmqode.be"
echo "Utilisez les identifiants suivants pour vous connecter en tant que super administrateur:"
echo "Email: admin@dmqode.be"
echo "Mot de passe: Tzkev5276.2"