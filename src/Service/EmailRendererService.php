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
            'domain' => $this->params->get('app.domain') ?? $_SERVER['HTTP_HOST'] ?? 'domaine.com',
            'locale' => $user->getLocale()
        ]);
        
        // Générer le contenu
        $htmlContent = $this->renderHtmlContent($template, $variables);
        $textContent = $template->getTextContent() ? $this->renderTextContent($template, $variables) : null;
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
            'domain' => $this->params->get('app.domain') ?? 'dmqode.be',
            'locale' => $template->getLocale(),
            'resetToken' => 'https://exemple.com/reset/token123456789',
            'signedUrl' => 'https://exemple.com/verify/email123456789',
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
        
        try {
            // Si le contenu est au format Twig, essayer de le rendre
            if (strpos($content, '{% ') !== false || strpos($content, '{{ ') !== false) {
                $template = $this->twig->createTemplate($content);
                return $template->render($variables);
            }
        } catch (\Exception $e) {
            // En cas d'erreur, utiliser le remplacement simple
        }
        
        // Remplacement simple des variables
        return $this->replaceVariables($content, $variables);
    }
    
    /**
     * Génère le contenu texte en remplaçant les variables
     */
    private function renderTextContent(EmailTemplate $template, array $variables): string
    {
        $content = $template->getTextContent();
        
        try {
            // Si le contenu est au format Twig, essayer de le rendre
            if (strpos($content, '{% ') !== false || strpos($content, '{{ ') !== false) {
                $template = $this->twig->createTemplate($content);
                return $template->render($variables);
            }
        } catch (\Exception $e) {
            // En cas d'erreur, utiliser le remplacement simple
        }
        
        // Remplacement simple des variables
        return $this->replaceVariables($content, $variables);
    }
    
    /**
     * Génère le sujet de l'email en remplaçant les variables
     */
    private function renderSubject(EmailTemplate $template, array $variables): string
    {
        $subject = $template->getSubject();
        
        try {
            // Si le sujet est au format Twig, essayer de le rendre
            if (strpos($subject, '{% ') !== false || strpos($subject, '{{ ') !== false) {
                $template = $this->twig->createTemplate($subject);
                return $template->render($variables);
            }
        } catch (\Exception $e) {
            // En cas d'erreur, utiliser le remplacement simple
        }
        
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