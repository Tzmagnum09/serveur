<?php

namespace App\Twig;

use App\Service\DynamicTranslatorService;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class TranslationExtension extends AbstractExtension
{
    private DynamicTranslatorService $translatorService;
    
    public function __construct(DynamicTranslatorService $translatorService)
    {
        $this->translatorService = $translatorService;
    }
    
    public function getFunctions(): array
    {
        return [
            new TwigFunction('translate_db', [$this, 'translateFromDatabase']),
        ];
    }
    
    public function translateFromDatabase(string $tableName, int $id, string $field, ?string $locale = null): ?string
    {
        return $this->translatorService->translate($tableName, $id, $field, $locale);
    }
}