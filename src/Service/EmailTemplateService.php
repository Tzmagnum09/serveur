<?php

namespace App\Service;

use App\Entity\EmailTemplate;
use App\Entity\User;
use App\Message\SendEmailMessage;
use App\Repository\EmailTemplateRepository;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Mime\Email;
use Symfony\Contracts\Translation\TranslatorInterface;
use Twig\Environment;

class EmailTemplateService
{
    private EmailTemplateRepository $templateRepository;
    private TranslatorInterface $translator;
    private string $defaultLocale;
    private string $emailSender;
    private string $domain;
    private MessageBusInterface $messageBus;
    private Environment $twig;

    public function __construct(
        EmailTemplateRepository $templateRepository,
        TranslatorInterface $translator,
        MessageBusInterface $messageBus,
        Environment $twig,
        string $defaultLocale = 'fr',
        string $emailSender = 'contact@example.com',
        string $domain = 'example.com'
    ) {
        $this->templateRepository = $templateRepository;
        $this->translator = $translator;
        $this->messageBus = $messageBus;
        $this->twig = $twig;
        $this->defaultLocale = $defaultLocale;
        $this->emailSender = $emailSender;
        $this->domain = $domain;
    }

    public function initializeDefaultTemplates(): void
    {
        $defaultTemplates = [
            'registration_confirmation' => [
                'fr' => [
                    'subject' => 'Confirmation de votre inscription',
                    'html' => $this->getRegistrationTemplateFr(),
                ],
                'en' => [
                    'subject' => 'Registration Confirmation',
                    'html' => $this->getRegistrationTemplateEn(),
                ],
                'nl' => [
                    'subject' => 'Bevestiging van uw registratie',
                    'html' => $this->getRegistrationTemplateNl(),
                ],
                'de' => [
                    'subject' => 'Registrierungsbestätigung',
                    'html' => $this->getRegistrationTemplateDe(),
                ],
            ],
            'account_approved' => [
                'fr' => [
                    'subject' => 'Votre compte a été approuvé',
                    'html' => $this->getApprovalTemplateFr(),
                ],
                'en' => [
                    'subject' => 'Your account has been approved',
                    'html' => $this->getApprovalTemplateEn(),
                ],
                'nl' => [
                    'subject' => 'Uw account is goedgekeurd',
                    'html' => $this->getApprovalTemplateNl(),
                ],
                'de' => [
                    'subject' => 'Ihr Konto wurde genehmigt',
                    'html' => $this->getApprovalTemplateDe(),
                ],
            ],
            'reset_password' => [
                'fr' => [
                    'subject' => 'Réinitialisation de votre mot de passe',
                    'html' => $this->getResetPasswordTemplateFr(),
                ],
                'en' => [
                    'subject' => 'Reset your password',
                    'html' => $this->getResetPasswordTemplateEn(),
                ],
                'nl' => [
                    'subject' => 'Reset uw wachtwoord',
                    'html' => $this->getResetPasswordTemplateNl(),
                ],
                'de' => [
                    'subject' => 'Setzen Sie Ihr Passwort zurück',
                    'html' => $this->getResetPasswordTemplateDe(),
                ],
            ],
        ];
        
        foreach ($defaultTemplates as $code => $localeTemplates) {
            foreach ($localeTemplates as $locale => $templateData) {
                $existingTemplate = $this->templateRepository->findByCodeAndLocale($code, $locale);
                
                if (!$existingTemplate) {
                    $template = new EmailTemplate();
                    $template->setCode($code);
                    $template->setLocale($locale);
                    $template->setSubject($templateData['subject']);
                    $template->setHtmlContent($templateData['html']);
                    
                    $this->templateRepository->save($template, true);
                }
            }
        }
    }

    // Registration Templates
    public function getRegistrationTemplateFr(): string 
    {
        return $this->getBaseRegistrationTemplate('fr');
    }

    public function getRegistrationTemplateEn(): string 
    {
        return $this->getBaseRegistrationTemplate('en');
    }

    public function getRegistrationTemplateNl(): string 
    {
        return $this->getBaseRegistrationTemplate('nl');
    }

    public function getRegistrationTemplateDe(): string 
    {
        return $this->getBaseRegistrationTemplate('de');
    }

    // Approval Templates
    public function getApprovalTemplateFr(): string 
    {
        return $this->getBaseApprovalTemplate('fr');
    }

    public function getApprovalTemplateEn(): string 
    {
        return $this->getBaseApprovalTemplate('en');
    }

    public function getApprovalTemplateNl(): string 
    {
        return $this->getBaseApprovalTemplate('nl');
    }

    public function getApprovalTemplateDe(): string 
    {
        return $this->getBaseApprovalTemplate('de');
    }

    // Reset Password Templates
    public function getResetPasswordTemplateFr(): string 
    {
        return $this->getBaseResetPasswordTemplate('fr');
    }

    public function getResetPasswordTemplateEn(): string 
    {
        return $this->getBaseResetPasswordTemplate('en');
    }

    public function getResetPasswordTemplateNl(): string 
    {
        return $this->getBaseResetPasswordTemplate('nl');
    }

    public function getResetPasswordTemplateDe(): string 
    {
        return $this->getBaseResetPasswordTemplate('de');
    }

    // Base Template Methods
    private function getBaseRegistrationTemplate(string $locale): string 
    {
        $templates = [
            'fr' => [
                'title' => 'Confirmation de votre inscription',
                'welcome' => 'Bienvenue!',
                'message' => 'Cliquez sur ce lien pour confirmer votre inscription.'
            ],
            'en' => [
                'title' => 'Registration Confirmation',
                'welcome' => 'Welcome!',
                'message' => 'Click on this link to confirm your registration.'
            ],
            'nl' => [
                'title' => 'Registratiebevestiging',
                'welcome' => 'Welkom!',
                'message' => 'Klik op deze link om uw registratie te bevestigen.'
            ],
            'de' => [
                'title' => 'Registrierungsbestätigung',
                'welcome' => 'Willkommen!',
                'message' => 'Klicken Sie auf diesen Link, um Ihre Registrierung zu bestätigen.'
            ]
        ];

        $t = $templates[$locale] ?? $templates['fr'];

        return <<<HTML
<!DOCTYPE html>
<html>
<head>
    <title>{$t['title']}</title>
</head>
<body>
    <h1>{$t['welcome']}</h1>
    <p>Bonjour {{ firstName }},</p>
    <p>{$t['message']} : {{ signedUrl }}</p>
</body>
</html>
HTML;
    }

    private function getBaseApprovalTemplate(string $locale): string 
    {
        $templates = [
            'fr' => [
                'title' => 'Compte approuvé',
                'welcome' => 'Félicitations!',
                'message' => 'Votre compte a été approuvé. Vous pouvez maintenant vous connecter.'
            ],
            'en' => [
                'title' => 'Account Approved',
                'welcome' => 'Congratulations!',
                'message' => 'Your account has been approved. You can now log in.'
            ],
            'nl' => [
                'title' => 'Account goedgekeurd',
                'welcome' => 'Gefeliciteerd!',
                'message' => 'Uw account is goedgekeurd. U kunt nu inloggen.'
            ],
            'de' => [
                'title' => 'Konto genehmigt',
                'welcome' => 'Glückwunsch!',
                'message' => 'Ihr Konto wurde genehmigt. Sie können sich jetzt anmelden.'
            ]
        ];

        $t = $templates[$locale] ?? $templates['fr'];

        return <<<HTML
<!DOCTYPE html>
<html>
<head>
    <title>{$t['title']}</title>
</head>
<body>
    <h1>{$t['welcome']}</h1>
    <p>Bonjour {{ firstName }},</p>
    <p>{$t['message']}</p>
</body>
</html>
HTML;
    }

    private function getBaseResetPasswordTemplate(string $locale): string 
    {
        $templates = [
            'fr' => [
                'title' => 'Réinitialisation de mot de passe',
                'welcome' => 'Réinitialisation de mot de passe',
                'message' => 'Cliquez sur ce lien pour réinitialiser votre mot de passe.'
            ],
            'en' => [
                'title' => 'Password Reset',
                'welcome' => 'Password Reset',
                'message' => 'Click on this link to reset your password.'
            ],
            'nl' => [
                'title' => 'Wachtwoord resetten',
                'welcome' => 'Wachtwoord resetten',
                'message' => 'Klik op deze link om uw wachtwoord te resetten.'
            ],
            'de' => [
                'title' => 'Passwort zurücksetzen',
                'welcome' => 'Passwort zurücksetzen',
                'message' => 'Klicken Sie auf diesen Link, um Ihr Passwort zurückzusetzen.'
            ]
        ];

        $t = $templates[$locale] ?? $templates['fr'];

        return <<<HTML
<!DOCTYPE html>
<html>
<head>
    <title>{$t['title']}</title>
</head>
<body>
    <h1>{$t['welcome']}</h1>
    <p>Bonjour {{ firstName }},</p>
    <p>{$t['message']} : {{ resetToken }}</p>
</body>
</html>
HTML;
    }

    // Existing methods like sendEmail, sendEmailToUser, etc. would remain the same
}