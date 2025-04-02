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
     * Traduire un contenu dynamique
     */
    public function translate(string $tableName, int $id, string $field, ?string $locale = null): ?string
    {
        $locale = $locale ?? $this->translator->getLocale() ?? $this->defaultLocale;
        
        // Rechercher la traduction
        $translationTableName = $tableName . '_translation';
        
        // Vérifier si la table de traduction existe
        try {
            $sql = "SELECT COUNT(*) FROM information_schema.tables 
                   WHERE table_schema = DATABASE() 
                   AND table_name = :tableName";
            
            $stmt = $this->connection->prepare($sql);
            $stmt->bindValue('tableName', $translationTableName);
            $result = $stmt->executeQuery();
            
            if ($result->fetchOne() === 0) {
                // Table n'existe pas, retourner le contenu original
                return $this->getOriginalContent($tableName, $id, $field);
            }
        } catch (\Exception $e) {
            // En cas d'erreur, retourner le contenu original
            return $this->getOriginalContent($tableName, $id, $field);
        }
        
        // Rechercher la traduction
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
            
            // Si pas de traduction pour cette langue, essayer la langue par défaut
            if ($locale !== $this->defaultLocale) {
                $stmt->bindValue('locale', $this->defaultLocale);
                $result = $stmt->executeQuery();
                $defaultTranslation = $result->fetchOne();
                
                if ($defaultTranslation !== false) {
                    return $defaultTranslation;
                }
            }
        } catch (\Exception $e) {
            // En cas d'erreur, retourner le contenu original
        }
        
        // Si aucune traduction trouvée, retourner le contenu original
        return $this->getOriginalContent($tableName, $id, $field);
    }
    
    /**
     * Mettre à jour une traduction
     */
    public function updateTranslation(string $tableName, int $id, string $field, string $locale, string $content): bool
    {
        $translationTableName = $tableName . '_translation';
        
        try {
            // Vérifier si la table existe, sinon la créer
            $this->ensureTranslationTableExists($tableName);
            
            // Vérifier si la traduction existe déjà
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
                // Mettre à jour la traduction existante
                $sql = "UPDATE $translationTableName 
                       SET content = :content, updated_at = NOW() 
                       WHERE id = :id";
                
                $stmt = $this->connection->prepare($sql);
                $stmt->bindValue('content', $content);
                $stmt->bindValue('id', $translationId);
                $stmt->executeStatement();
            } else {
                // Créer une nouvelle traduction
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
            // Log error or handle as needed
            return false;
        }
    }
    
    /**
     * Obtenir toutes les traductions pour une entité
     */
    public function getAllTranslations(string $tableName, int $id, string $field): array
    {
        $translationTableName = $tableName . '_translation';
        $translations = [];
        
        try {
            // Vérifier si la table existe
            $sql = "SELECT COUNT(*) FROM information_schema.tables 
                   WHERE table_schema = DATABASE() 
                   AND table_name = :tableName";
            
            $stmt = $this->connection->prepare($sql);
            $stmt->bindValue('tableName', $translationTableName);
            $result = $stmt->executeQuery();
            
            if ($result->fetchOne() === 0) {
                // Table n'existe pas, retourner uniquement le contenu original
                $original = $this->getOriginalContent($tableName, $id, $field);
                return [$this->defaultLocale => $original];
            }
            
            // Obtenir toutes les traductions
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
            
            // Ajouter le contenu original s'il n'y a pas de traduction dans la langue par défaut
            if (!isset($translations[$this->defaultLocale])) {
                $original = $this->getOriginalContent($tableName, $id, $field);
                $translations[$this->defaultLocale] = $original;
            }
            
            return $translations;
        } catch (\Exception $e) {
            // En cas d'erreur, retourner uniquement le contenu original
            $original = $this->getOriginalContent($tableName, $id, $field);
            return [$this->defaultLocale => $original];
        }
    }
    
    /**
     * Obtenir le contenu original
     */
    private function getOriginalContent(string $tableName, int $id, string $field): ?string
    {
        try {
            $sql = "SELECT $field FROM $tableName WHERE id = :id";
            
            $stmt = $this->connection->prepare($sql);
            $stmt->bindValue('id', $id);
            $result = $stmt->executeQuery();
            
            return $result->fetchOne();
        } catch (\Exception $e) {
            return null;
        }
    }
    
    /**
     * S'assurer que la table de traduction existe
     */
    private function ensureTranslationTableExists(string $tableName): void
    {
        $translationTableName = $tableName . '_translation';
        
        // Vérifier si la table existe
        $sql = "SELECT COUNT(*) FROM information_schema.tables 
               WHERE table_schema = DATABASE() 
               AND table_name = :tableName";
        
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue('tableName', $translationTableName);
        $result = $stmt->executeQuery();
        
        if ($result->fetchOne() === 0) {
            // Créer la table de traduction
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
