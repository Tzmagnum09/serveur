<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250405224500 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add created_at and expires_at columns to reset_password_request table';
    }

    public function up(Schema $schema): void
    {
        // Vérifier si les colonnes existent déjà
        $this->addSql('
            SELECT COUNT(*) AS column_count 
            FROM information_schema.COLUMNS 
            WHERE TABLE_SCHEMA = DATABASE() 
              AND TABLE_NAME = "reset_password_request" 
              AND COLUMN_NAME IN ("created_at", "expires_at")
        ');

        $columns = $this->connection->fetchAssociative('
            SELECT 
                SUM(CASE WHEN COLUMN_NAME = "created_at" THEN 1 ELSE 0 END) AS created_at_exists,
                SUM(CASE WHEN COLUMN_NAME = "expires_at" THEN 1 ELSE 0 END) AS expires_at_exists
            FROM information_schema.COLUMNS 
            WHERE TABLE_SCHEMA = DATABASE() 
              AND TABLE_NAME = "reset_password_request" 
              AND COLUMN_NAME IN ("created_at", "expires_at")
        ');

        // Ajouter created_at si absent
        if (empty($columns['created_at_exists'])) {
            $this->addSql('
                ALTER TABLE reset_password_request 
                ADD COLUMN created_at DATETIME NOT NULL COMMENT "(DC2Type:datetime_immutable)"
            ');
            // Initialiser avec la date actuelle pour les entrées existantes
            $this->addSql('
                UPDATE reset_password_request 
                SET created_at = requested_at
            ');
        }

        // Ajouter expires_at si absent
        if (empty($columns['expires_at_exists'])) {
            $this->addSql('
                ALTER TABLE reset_password_request 
                ADD COLUMN expires_at DATETIME NOT NULL COMMENT "(DC2Type:datetime_immutable)"
            ');
            // Initialiser avec la même valeur que requested_at pour les entrées existantes
            $this->addSql('
                UPDATE reset_password_request 
                SET expires_at = requested_at
            ');
        }
    }

    public function down(Schema $schema): void
    {
        // Supprimer les colonnes si nécessaire
        $this->addSql('
            ALTER TABLE reset_password_request 
            DROP COLUMN IF EXISTS created_at, 
            DROP COLUMN IF EXISTS expires_at
        ');
    }
}