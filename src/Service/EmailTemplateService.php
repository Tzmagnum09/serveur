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
        string $defaultLocale,
        string $emailSender,
        string $domain
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
        $locales = ['fr', 'en', 'nl', 'de'];
        
        try {
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
                        
                        $template->setSubject(mb_convert_encoding($templateData['subject'], 'UTF-8', 'UTF-8'));
                        $template->setHtmlContent(mb_convert_encoding($templateData['html'], 'UTF-8', 'UTF-8'));
                        
                        $this->templateRepository->save($template, true);
                    }
                }
            }
        } catch (\Exception $e) {
            error_log('Erreur lors de l\'initialisation des templates d\'email : ' . $e->getMessage());
            error_log('Trace : ' . $e->getTraceAsString());
            throw $e;
        }
    }

    private function getBaseEmailStyle(): string
    {
        return <<<STYLE
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #8e44ad, #3498db);
            color: white;
            padding: 20px;
            text-align: center;
        }
        .content {
            padding: 20px;
            background-color: #f9f9f9;
        }
        .button {
            display: inline-block;
            background: linear-gradient(135deg, #8e44ad, #3498db);
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 20px;
            transition: transform 0.3s;
        }
        .button:hover {
            transform: translateY(-2px);
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #777;
            margin-top: 20px;
        }
STYLE;
    }

    // Les méthodes de template (registration, approval, reset_password) 
    // seront les mêmes que dans mon message précédent

    // Toutes les méthodes de templates seront ici :
    // getRegistrationTemplateFr()
    // getRegistrationTemplateEn()
    // getRegistrationTemplateNl()
    // getRegistrationTemplateDe()
    
    // Méthodes similaires pour getApprovalTemplate
    // Méthodes similaires pour getResetPasswordTemplate

    public function sendEmail(string $code, string $to, array $params = [], ?string $locale = null): bool
    {
        $locale = $locale ?? $this->defaultLocale;
        $template = $this->getTemplate($code, $locale);
        
        if (!$template) {
            return false;
        }
        
        $params = array_merge($params, [
            'domain' => $this->domain,
            'sender' => $this->emailSender,
        ]);
        
        $htmlContent = $this->renderTemplate($template->getHtmlContent(), $params);
        $textContent = $template->getTextContent() 
            ? $this->renderTemplate($template->getTextContent(), $params) 
            : null;
        
        $emailMessage = new SendEmailMessage(
            $this->emailSender,
            $to,
            $template->getSubject(),
            $htmlContent,
            $textContent
        );
        
        $this->messageBus->dispatch($emailMessage);
        
        return true;
    }
    
    public function sendEmailToUser(string $code, User $user, array $params = []): bool
    {
        return $this->sendEmail(
            $code, 
            $user->getEmail(), 
            array_merge([
                'user' => $user,
                'firstName' => $user->getFirstName(),
                'lastName' => $user->getLastName(),
                'fullName' => $user->getFullName(),
            ], $params), 
            $user->getLocale()
        );
    }

    private function getTemplate(string $code, ?string $locale = null): ?EmailTemplate
    {
        $locale = $locale ?? $this->defaultLocale;
        
        $template = $this->templateRepository->findByCodeAndLocale($code, $locale);
        
        if (!$template && $locale !== $this->defaultLocale) {
            $template = $this->templateRepository->findByCodeAndLocale($code, $this->defaultLocale);
        }
        
        return $template;
    }

    private function renderTemplate(string $template, array $params = []): string
    {
        $template = $this->twig->createTemplate($template);
        return $template->render($params);
    }
}