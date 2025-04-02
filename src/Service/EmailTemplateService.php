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

    /**
     * Get a template by code and locale
     */
    public function getTemplate(string $code, ?string $locale = null): ?EmailTemplate
    {
        $locale = $locale ?? $this->defaultLocale;
        
        $template = $this->templateRepository->findByCodeAndLocale($code, $locale);
        
        // Fallback to default locale if not found
        if (!$template && $locale !== $this->defaultLocale) {
            $template = $this->templateRepository->findByCodeAndLocale($code, $this->defaultLocale);
        }
        
        return $template;
    }

    /**
     * Send an email using a template
     */
    public function sendEmail(string $code, string $to, array $params = [], ?string $locale = null): bool
    {
        $locale = $locale ?? $this->defaultLocale;
        $template = $this->getTemplate($code, $locale);
        
        if (!$template) {
            // Log or debug
            error_log("Template not found for code $code and locale $locale");
            return false;
        }
        
        // Prepare template data
        $params = array_merge($params, [
            'domain' => $this->domain,
            'sender' => $this->emailSender,
        ]);
        
        // Ensure token is available as signedUrl or resetToken if provided
        if (isset($params['token']) && !isset($params['signedUrl']) && !isset($params['resetToken'])) {
            $params['signedUrl'] = $params['token'];
            $params['resetToken'] = $params['token'];
        }
        
        // Render templates with Twig string template
        $htmlContent = $this->renderTemplate($template->getHtmlContent(), $params);
        $textContent = $template->getTextContent() 
            ? $this->renderTemplate($template->getTextContent(), $params) 
            : null;
        
        // Create email message
        $emailMessage = new SendEmailMessage(
            $this->emailSender,
            $to,
            $template->getSubject(),
            $htmlContent,
            $textContent
        );
        
        // Send via message bus (async)
        $this->messageBus->dispatch($emailMessage);
        
        return true;
    }
    
    /**
     * Send an email to a user
     */
    public function sendEmailToUser(string $code, User $user, array $params = []): bool
    {
        return $this->sendEmail($code, $user->getEmail(), array_merge([
            'user' => $user,
            'firstName' => $user->getFirstName(),
            'lastName' => $user->getLastName(),
            'fullName' => $user->getFullName(),
        ], $params), $user->getLocale());
    }
    
    /**
     * Preview an email template with sample data
     */
    public function previewTemplate(EmailTemplate $template, array $params = []): string
    {
        // Default sample data
        $sampleUser = new User();
        $sampleUser->setFirstName('John');
        $sampleUser->setLastName('Doe');
        $sampleUser->setEmail('john.doe@example.com');
        
        // Merge with default sample data
        $params = array_merge([
            'domain' => $this->domain,
            'sender' => $this->emailSender,
            'user' => $sampleUser,
            'firstName' => $sampleUser->getFirstName(),
            'lastName' => $sampleUser->getLastName(),
            'fullName' => $sampleUser->getFullName(),
            'signedUrl' => 'https://' . $this->domain . '/verify/email?id=123&token=sample_token_123456789',
            'resetToken' => 'https://' . $this->domain . '/reset-password/reset?token=sample_reset_token_123456789',
            'token' => 'sample_token_123456789' 
        ], $params);
        
        return $this->renderTemplate($template->getHtmlContent(), $params);
    }
    
    /**
     * Render a template with parameters
     */
    private function renderTemplate(string $template, array $params = []): string
    {
        $template = $this->twig->createTemplate($template);
        return $template->render($params);
    }
    
    /**
     * Initialize default email templates if they don't exist
     */
    public function initializeDefaultTemplates(): void
    {
        $locales = ['fr', 'en', 'nl', 'de'];
        
        $defaultTemplates = [
            'registration_confirmation' => [
                'fr' => [
                    'subject' => 'Confirmation de votre inscription',
                    'html' => $this->getDefaultRegistrationTemplate('fr'),
                ],
                'en' => [
                    'subject' => 'Registration confirmation',
                    'html' => $this->getDefaultRegistrationTemplate('en'),
                ],
                'nl' => [
                    'subject' => 'Bevestiging van uw registratie',
                    'html' => $this->getDefaultRegistrationTemplate('nl'),
                ],
                'de' => [
                    'subject' => 'Bestätigung Ihrer Anmeldung',
                    'html' => $this->getDefaultRegistrationTemplate('de'),
                ],
            ],
            'account_approved' => [
                'fr' => [
                    'subject' => 'Votre compte a été approuvé',
                    'html' => $this->getDefaultApprovalTemplate('fr'),
                ],
                'en' => [
                    'subject' => 'Your account has been approved',
                    'html' => $this->getDefaultApprovalTemplate('en'),
                ],
                'nl' => [
                    'subject' => 'Uw account is goedgekeurd',
                    'html' => $this->getDefaultApprovalTemplate('nl'),
                ],
                'de' => [
                    'subject' => 'Ihr Konto wurde genehmigt',
                    'html' => $this->getDefaultApprovalTemplate('de'),
                ],
            ],
            'reset_password' => [
                'fr' => [
                    'subject' => 'Réinitialisation de votre mot de passe',
                    'html' => $this->getDefaultResetPasswordTemplate('fr'),
                ],
                'en' => [
                    'subject' => 'Reset your password',
                    'html' => $this->getDefaultResetPasswordTemplate('en'),
                ],
                'nl' => [
                    'subject' => 'Reset uw wachtwoord',
                    'html' => $this->getDefaultResetPasswordTemplate('nl'),
                ],
                'de' => [
                    'subject' => 'Setzen Sie Ihr Passwort zurück',
                    'html' => $this->getDefaultResetPasswordTemplate('de'),
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
    
    private function getDefaultRegistrationTemplate(string $locale): string
    {
        return <<<HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de votre inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #777;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Confirmation de votre inscription</h1>
        </div>
        <div class="content">
            <p>Bonjour {{ firstName }},</p>
            
            <p>Merci de vous être inscrit sur notre site. Pour confirmer votre adresse email, veuillez cliquer sur le bouton ci-dessous.</p>
            
            <p style="text-align: center;">
                <a href="{{ signedUrl }}" class="button">Confirmer mon adresse email</a>
            </p>
            
            <p>Si le bouton ne fonctionne pas, vous pouvez copier et coller le lien suivant dans votre navigateur :</p>
            <p>{{ signedUrl }}</p>
            
            <p>Ce lien expirera dans 24 heures.</p>
            
            <p>Si vous n'avez pas créé de compte, veuillez ignorer cet email.</p>
            
            <p>Cordialement,<br>L'équipe du site</p>
        </div>
        <div class="footer">
            <p>Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
        </div>
    </div>
</body>
</html>
HTML;
    }
    
    private function getDefaultApprovalTemplate(string $locale): string
    {
        return <<<HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre compte a été approuvé</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #777;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Votre compte a été approuvé</h1>
        </div>
        <div class="content">
            <p>Bonjour {{ firstName }},</p>
            
            <p>Nous avons le plaisir de vous informer que votre compte a été approuvé par notre équipe d'administration.</p>
            
            <p>Vous pouvez désormais vous connecter à votre compte en cliquant sur le bouton ci-dessous.</p>
            
            <p style="text-align: center;">
                <a href="https://{{ domain }}/login" class="button">Se connecter</a>
            </p>
            
            <p>Si vous avez des questions, n'hésitez pas à nous contacter.</p>
            
            <p>Cordialement,<br>L'équipe du site</p>
        </div>
        <div class="footer">
            <p>Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
        </div>
    </div>
</body>
</html>
HTML;
    }
    
    private function getDefaultResetPasswordTemplate(string $locale): string
    {
        return <<<HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réinitialisation de votre mot de passe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
            display:inline-block;
            background: linear-gradient(135deg, #8e44ad, #3498db);
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #777;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Réinitialisation de votre mot de passe</h1>
        </div>
        <div class="content">
            <p>Bonjour {{ firstName }},</p>
            
            <p>Nous avons reçu une demande de réinitialisation de mot de passe pour votre compte.</p>
            
            <p>Cliquez sur le lien suivant pour définir un nouveau mot de passe :</p>
            
            <p style="text-align: center;">
                <a href="{{ resetToken }}" class="button">Réinitialiser mon mot de passe</a>
            </p>
            
            <p>Si le bouton ne fonctionne pas, copiez et collez le lien suivant dans votre navigateur :</p>
            <p>{{ resetToken }}</p>
            
            <p>Ce lien expirera dans 1 heure.</p>
            
            <p>Si vous n'avez pas demandé de réinitialisation de mot de passe, veuillez ignorer cet email.</p>
            
            <p>Cordialement,<br>L'équipe du site</p>
        </div>
        <div class="footer">
            <p>Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
        </div>
    </div>
</body>
</html>
HTML;
    }
}