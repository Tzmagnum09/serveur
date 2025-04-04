<?php

namespace App\Service;

use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Filesystem\Filesystem;

class StaticTranslationService
{
    private string $translationsDir;
    private array $availableLocales;
    
    public function __construct(string $projectDir, array $availableLocales)
    {
        $this->translationsDir = $projectDir . '/translations';
        $this->availableLocales = $availableLocales;
    }
    
    public function getAllTranslations(): array
    {
        $translations = [];
        
        foreach ($this->availableLocales as $locale) {
            $file = $this->translationsDir . '/messages.' . $locale . '.yaml';
            if (file_exists($file)) {
                $translations[$locale] = Yaml::parseFile($file);
            }
        }
        
        return $translations;
    }
    
    public function getTranslation(string $key, string $locale): ?string
    {
        $file = $this->translationsDir . '/messages.' . $locale . '.yaml';
        if (!file_exists($file)) {
            return null;
        }
        
        $translations = Yaml::parseFile($file);
        $parts = explode('.', $key);
        $current = $translations;
        
        foreach ($parts as $part) {
            if (!isset($current[$part])) {
                return null;
            }
            $current = $current[$part];
        }
        
        return is_string($current) ? $current : null;
    }
    
    public function updateTranslation(string $key, string $locale, string $value): bool
    {
        $file = $this->translationsDir . '/messages.' . $locale . '.yaml';
        if (!file_exists($file)) {
            return false;
        }
        
        $translations = Yaml::parseFile($file);
        $parts = explode('.', $key);
        $this->setNestedValue($translations, $parts, $value);
        
        $yaml = Yaml::dump($translations, 6); // 6 levels of indentation
        
        $filesystem = new Filesystem();
        $filesystem->dumpFile($file, $yaml);
        
        return true;
    }
    
    public function getAllKeys(): array
    {
        $keys = [];
        $mainLocale = $this->availableLocales[0] ?? 'fr';
        
        $file = $this->translationsDir . '/messages.' . $mainLocale . '.yaml';
        if (!file_exists($file)) {
            return $keys;
        }
        
        $translations = Yaml::parseFile($file);
        $this->extractKeys($translations, '', $keys);
        
        return $keys;
    }
    
    private function extractKeys(array $array, string $prefix, array &$keys): void
    {
        foreach ($array as $key => $value) {
            $currentKey = $prefix ? $prefix . '.' . $key : $key;
            
            if (is_array($value)) {
                $this->extractKeys($value, $currentKey, $keys);
            } else {
                $keys[] = $currentKey;
            }
        }
    }
    
    private function setNestedValue(array &$array, array $keys, $value): void
    {
        $key = array_shift($keys);
        
        if (empty($keys)) {
            $array[$key] = $value;
            return;
        }
        
        if (!isset($array[$key]) || !is_array($array[$key])) {
            $array[$key] = [];
        }
        
        $this->setNestedValue($array[$key], $keys, $value);
    }
}