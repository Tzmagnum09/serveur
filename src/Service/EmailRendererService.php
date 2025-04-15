<?php

namespace App\Service;

use App\Entity\EmailTemplate;
use App\Entity\User;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Twig\Environment;

/**
 * Service responsable du rendu des templates d'email
 */
class EmailRendererService
{
    private Environment $twig;
    private ParameterBagInterface $params;
    
    public function __construct(
        Environment $twig,
        ParameterBagInterface $params
    ) {
        $this->twig = $twig;
        $this->params = $params;
    }
    
    /**
     * Génère le contenu HTML d'un template pour un utilisateur
     */
    public function renderForUser(EmailTemplate $template, User $user, array $additionalParams = []): array
    {
        // Préparer les variables pour le template
        $variables = array_merge($additionalParams, [
            'firstName' => $user->getFirstName(),
            'lastName' => $user->getLastName(),
            'fullName' => $user->getFullName(),
            'email' => $user->getEmail(),
            'phoneNumber' => $user->getPhoneNumber(),
            'birthDate' => $user->getBirthDate() ? $user->getBirthDate()->format('d/m/Y') : null,
            'age' => $user->getAge(),
            'fullAddress' => $user->getFullAddress(),
            'street' => $user->getStreet(),
            'houseNumber' => $user->getHouseNumber(),
            'boxNumber' => $user->getBoxNumber(),
            'postalCode' => $user->getPostalCode(),
            'city' => $user->getCity(),
            'country' => $user->getCountry(),
            'locale' => $user->getLocale(),
            'domain' => $this->params->get('app.domain') ?? $_SERVER['HTTP_HOST'] ?? 'dmqode.be'
        ]);
        
        // Générer le contenu
        $htmlContent = $this->renderHtmlContent($template, $variables);
        $textContent = null; // On ne génère plus de contenu texte
        $subject = $this->renderSubject($template, $variables);
        
        return [
            'subject' => $subject,
            'htmlContent' => $htmlContent,
            'textContent' => $textContent
        ];
    }
    
    /**
     * Génère une prévisualisation du template avec des données factices
     */
    public function renderPreview(EmailTemplate $template): string
    {
        // Variables factices pour la prévisualisation
        $variables = [
            'firstName' => 'Prénom',
            'lastName' => 'Nom',
            'fullName' => 'Prénom Nom',
            'email' => 'email@exemple.com',
            'phoneNumber' => '+32 470 12 34 56',
            'birthDate' => '01/01/1990',
            'age' => '34',
            'fullAddress' => 'Rue Exemple 123 (boîte 4), 1000 Bruxelles, Belgique',
            'street' => 'Rue Exemple',
            'houseNumber' => '123',
            'boxNumber' => '4',
            'postalCode' => '1000',
            'city' => 'Bruxelles',
            'country' => 'Belgique',
            'locale' => $template->getLocale(),
            'domain' => $this->params->get('app.domain') ?? 'dmqode.be',
            'resetToken' => 'https://dmqode.be/reset/token123456789',
            'signedUrl' => 'https://dmqode.be/verify/email123456789',
            'tokenLifetime' => '1',
            'permissionChanges' => 'Certaines permissions ont été modifiées',
            'previousRole' => 'Utilisateur',
            'newRole' => 'Administrateur',
            'promotedBy' => 'Super Admin'
        ];
        
        return $this->renderHtmlContent($template, $variables);
    }
    
    /**
     * Génère le contenu HTML en remplaçant les variables
     */
    private function renderHtmlContent(EmailTemplate $template, array $variables): string
    {
        $content = $template->getHtmlContent();
        
        // Remplacement simple des variables
        return $this->replaceVariables($content, $variables);
    }
    
    /**
     * Génère le sujet de l'email en remplaçant les variables
     */
    private function renderSubject(EmailTemplate $template, array $variables): string
    {
        $subject = $template->getSubject();
        
        // Remplacement simple des variables
        return $this->replaceVariables($subject, $variables);
    }
    
    /**
     * Remplace les variables dans un texte
     */
    private function replaceVariables(string $content, array $variables): string
    {
        // Remplacer toutes les variables
        foreach ($variables as $key => $value) {
            $content = str_replace('{{ ' . $key . ' }}', $value, $content);
            $content = str_replace('{{' . $key . '}}', $value, $content);
        }
        
        return $content;
    }
}