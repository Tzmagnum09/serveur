<?php

namespace App\Service;

use App\Entity\EmailTemplate;
use App\Entity\User;
use App\Message\SendEmailMessage;
use App\Repository\EmailTemplateRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class EmailTemplateService
{
    private EntityManagerInterface $entityManager;
    private EmailTemplateRepository $emailTemplateRepository;
    private MessageBusInterface $messageBus;
    private ParameterBagInterface $params;
    private EmailRendererService $emailRenderer;
    private TranslatorInterface $translator;
    
    public function __construct(
        EntityManagerInterface $entityManager,
        EmailTemplateRepository $emailTemplateRepository,
        MessageBusInterface $messageBus,
        ParameterBagInterface $params,
        EmailRendererService $emailRenderer,
        TranslatorInterface $translator
    ) {
        $this->entityManager = $entityManager;
        $this->emailTemplateRepository = $emailTemplateRepository;
        $this->messageBus = $messageBus;
        $this->params = $params;
        $this->emailRenderer = $emailRenderer;
        $this->translator = $translator;
    }

    public function previewTemplate(EmailTemplate $template): string
    {
        return $this->emailRenderer->renderPreview($template);
    }

    /**
     * Envoie un email à un utilisateur en utilisant un template
     */
    public function sendEmailToUser(string $templateCode, User $user, array $params = []): bool
    {
        // Récupérer le template selon la locale de l'utilisateur
        $locale = $user->getLocale() ?? 'fr';
        $template = $this->emailTemplateRepository->findByCodeAndLocale($templateCode, $locale);
        
        // Si le template n'existe pas dans la langue de l'utilisateur, essayer en français
        if (!$template && $locale !== 'fr') {
            $template = $this->emailTemplateRepository->findByCodeAndLocale($templateCode, 'fr');
        }
        
        // Si toujours pas de template, essayer en anglais
        if (!$template && $locale !== 'en') {
            $template = $this->emailTemplateRepository->findByCodeAndLocale($templateCode, 'en');
        }
        
        // Si aucun template n'est trouvé
        if (!$template) {
            return false;
        }
        
        // Générer le contenu de l'email
        $emailContent = $this->emailRenderer->renderForUser($template, $user, $params);
        
        // Créer et envoyer le message
        $message = new SendEmailMessage(
            $this->params->get('app.email') ?? 'contact@domaine.com',
            $user->getEmail(),
            $emailContent['subject'],
            $emailContent['htmlContent'],
            $emailContent['textContent']
        );
        
        $this->messageBus->dispatch($message);
        
        return true;
    }
    
    /**
     * Initialiser les templates d'email par défaut
     */
    public function initializeDefaultTemplates(): void
    {
        // On utilise le service de création de templates pour initialiser les templates par défaut
        $defaultTemplateFactory = new DefaultEmailTemplateFactory();
        $defaultTemplates = $defaultTemplateFactory->createDefaultTemplates();
        
        foreach ($defaultTemplates as $templateData) {
            // Vérifier si le template existe déjà
            $existingTemplate = $this->emailTemplateRepository->findByCodeAndLocale(
                $templateData['code'],
                $templateData['locale']
            );
            
            if (!$existingTemplate) {
                $template = new EmailTemplate();
                $template->setCode($templateData['code']);
                $template->setLocale($templateData['locale']);
                $template->setSubject($templateData['subject']);
                $template->setHtmlContent($templateData['htmlContent']);
                $template->setTextContent($templateData['textContent']);
                $template->setCreatedAt(new \DateTimeImmutable());
                
                $this->entityManager->persist($template);
            }
        }
        
        $this->entityManager->flush();
    }
}