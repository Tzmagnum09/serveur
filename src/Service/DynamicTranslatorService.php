<?php

namespace App\Service;

use Doctrine\DBAL\Connection;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * Service pour gérer les traductions dynamiques (contenu de la base de données)
 */
class DynamicTranslatorService
{
    private Connection $connection;
    private TranslatorInterface $translator;
    private string $defaultLocale;

    public function __construct(
        EntityManagerInterface $entityManager,
        TranslatorInterface $translator,
        string $defaultLocale = 'fr'
    ) {
        $this->connection = $entityManager->getConnection();
        $this->translator = $translator;
        $this->defaultLocale = $defaultLocale;
    }

    /**
     * Traduire un contenu dynamique pour une entité et un champ donnés
     */
    public function translate(string $tableName, int $id, string $field, ?string $locale = null): ?string
    {
        $locale = $locale ?? $this->translator->getLocale() ?? $this->defaultLocale;
        $translationTableName = $tableName . '_translation';

        if (!$this->doesTableExist($translationTableName)) {
            return $this->fetchOriginalContent($tableName, $id, $field);
        }

        try {
            $sql = "SELECT content FROM $translationTableName 
                    WHERE entity_id = :id 
                    AND field = :field 
                    AND locale = :locale";
            $stmt = $this->connection->prepare($sql);
            $stmt->bindValue('id', $id);
            $stmt->bindValue('field', $field);
            $stmt->bindValue('locale', $locale);
            $result = $stmt->executeQuery();

            $translation = $result->fetchOne();
            if ($translation !== false) {
                return $translation;
            }

            if ($locale !== $this->defaultLocale) {
                $stmt->bindValue('locale', $this->defaultLocale);
                $result = $stmt->executeQuery();
                return $result->fetchOne() ?: $this->fetchOriginalContent($tableName, $id, $field);
            }
        } catch (\Exception $e) {
            // Si une erreur survient, retourner le contenu original
            return $this->fetchOriginalContent($tableName, $id, $field);
        }

        return $this->fetchOriginalContent($tableName, $id, $field);
    }

    /**
     * Mettre à jour une traduction pour une entité et un champ donnés
     */
    public function updateTranslation(string $tableName, int $id, string $field, string $locale, string $content): bool
    {
        $translationTableName = $tableName . '_translation';
        try {
            $this->ensureTranslationTableExists($tableName);

            $sql = "SELECT id FROM $translationTableName 
                    WHERE entity_id = :id 
                    AND field = :field 
                    AND locale = :locale";
            $stmt = $this->connection->prepare($sql);
            $stmt->bindValue('id', $id);
            $stmt->bindValue('field', $field);
            $stmt->bindValue('locale', $locale);
            $result = $stmt->executeQuery();

            $translationId = $result->fetchOne();

            if ($translationId !== false) {
                // Mise à jour de la traduction existante
                $sql = "UPDATE $translationTableName 
                        SET content = :content, updated_at = NOW() 
                        WHERE id = :id";
                $stmt = $this->connection->prepare($sql);
                $stmt->bindValue('content', $content);
                $stmt->bindValue('id', $translationId);
                $stmt->executeStatement();
            } else {
                // Ajout d'une nouvelle traduction
                $sql = "INSERT INTO $translationTableName 
                        (entity_id, field, locale, content, created_at, updated_at) 
                        VALUES (:entity_id, :field, :locale, :content, NOW(), NOW())";
                $stmt = $this->connection->prepare($sql);
                $stmt->bindValue('entity_id', $id);
                $stmt->bindValue('field', $field);
                $stmt->bindValue('locale', $locale);
                $stmt->bindValue('content', $content);
                $stmt->executeStatement();
            }

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Récupérer toutes les traductions pour une entité et un champ donnés
     */
    public function getAllTranslations(string $tableName, int $id, string $field): array
    {
        $translationTableName = $tableName . '_translation';
        $translations = [];

        if (!$this->doesTableExist($translationTableName)) {
            return [$this->defaultLocale => $this->fetchOriginalContent($tableName, $id, $field)];
        }

        try {
            $sql = "SELECT locale, content FROM $translationTableName 
                    WHERE entity_id = :id 
                    AND field = :field 
                    ORDER BY locale";
            $stmt = $this->connection->prepare($sql);
            $stmt->bindValue('id', $id);
            $stmt->bindValue('field', $field);
            $result = $stmt->executeQuery();

            while ($row = $result->fetchAssociative()) {
                $translations[$row['locale']] = $row['content'];
            }

            if (!isset($translations[$this->defaultLocale])) {
                $translations[$this->defaultLocale] = $this->fetchOriginalContent($tableName, $id, $field);
            }
        } catch (\Exception $e) {
            return [$this->defaultLocale => $this->fetchOriginalContent($tableName, $id, $field)];
        }

        return $translations;
    }

    /**
     * Récupérer le contenu original d'une entité
     */
    public function fetchOriginalContent(string $tableName, int $id, string $field): ?string
    {
        try {
            $sql = "SELECT $field FROM $tableName WHERE id = :id";
            $stmt = $this->connection->prepare($sql);
            $stmt->bindValue('id', $id);
            return $stmt->executeQuery()->fetchOne();
        } catch (\Exception $e) {
            return null;
        }
    }

    /**
     * Vérifier si une table existe dans la base de données
     */
    private function doesTableExist(string $tableName): bool
    {
        $sql = "SELECT COUNT(*) FROM information_schema.tables 
                WHERE table_schema = DATABASE() 
                AND table_name = :tableName";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue('tableName', $tableName);
        return $stmt->executeQuery()->fetchOne() > 0;
    }

    /**
     * S'assurer que la table de traduction existe
     */
    private function ensureTranslationTableExists(string $tableName): void
    {
        $translationTableName = $tableName . '_translation';

        if (!$this->doesTableExist($translationTableName)) {
            $sql = "CREATE TABLE $translationTableName (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    entity_id INT NOT NULL,
                    field VARCHAR(255) NOT NULL,
                    locale VARCHAR(10) NOT NULL,
                    content TEXT,
                    created_at DATETIME NOT NULL,
                    updated_at DATETIME NOT NULL,
                    INDEX idx_entity_field (entity_id, field),
                    INDEX idx_locale (locale),
                    UNIQUE INDEX idx_unique_translation (entity_id, field, locale)
                )";
            $this->connection->executeQuery($sql);
        }
    }
}
