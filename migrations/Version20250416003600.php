<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250416DropTextContentFromEmailTemplate extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Supprime la colonne text_content de la table email_template';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE email_template DROP COLUMN text_content');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE email_template ADD text_content LONGTEXT DEFAULT NULL');
    }
}