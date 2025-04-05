#!/bin/bash

# Chemin vers votre projet Symfony
PROJECT_DIR="/var/www/serveur"

# Créer le répertoire des logs s'il n'existe pas
mkdir -p ${PROJECT_DIR}/var/log

# Créer les fichiers de logs s'ils n'existent pas
touch ${PROJECT_DIR}/var/log/debug.log
touch ${PROJECT_DIR}/var/log/info.log
touch ${PROJECT_DIR}/var/log/notice.log
touch ${PROJECT_DIR}/var/log/warning.log
touch ${PROJECT_DIR}/var/log/error.log
touch ${PROJECT_DIR}/var/log/critical.log
touch ${PROJECT_DIR}/var/log/alert.log
touch ${PROJECT_DIR}/var/log/emergency.log
touch ${PROJECT_DIR}/var/log/doctrine.log
touch ${PROJECT_DIR}/var/log/deprecation.log
touch ${PROJECT_DIR}/var/log/dev.log
touch ${PROJECT_DIR}/var/log/prod.log

# Définir les permissions appropriées
# www-data est généralement l'utilisateur Apache
chown -R www-data:www-data ${PROJECT_DIR}/var/log
chmod -R 775 ${PROJECT_DIR}/var/log

# Vider le cache Symfony pour appliquer les modifications
cd ${PROJECT_DIR}
php bin/console cache:clear

echo "Configuration des logs terminée"
