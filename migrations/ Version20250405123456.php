<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Migration pour corriger la table reset_password_request
 */
final class Version20250405123456 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajout de la colonne created_at à la table reset_password_request';
    }

    public function up(Schema $schema): void
    {
        // Vérifie si la colonne existe déjà avant de l'ajouter
        $this->addSql('
            SELECT COUNT(*) as count
            FROM information_schema.COLUMNS 
            WHERE TABLE_SCHEMA = DATABASE() 
            AND TABLE_NAME = "reset_password_request" 
            AND COLUMN_NAME = "created_at"
        ');
        
        $columnExists = (bool) $this->connection->fetchOne('SELECT @result := COUNT(*) FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = "reset_password_request" AND COLUMN_NAME = "created_at"');
        
        if (!$columnExists) {
            $this->addSql('ALTER TABLE reset_password_request ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
            // Initialise la colonne avec la date actuelle pour les entrées existantes
            $this->addSql('UPDATE reset_password_request SET created_at = NOW()');
        }
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE reset_password_request DROP created_at');
    }
}