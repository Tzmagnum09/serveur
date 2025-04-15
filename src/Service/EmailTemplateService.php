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
use Twig\Environment;

class EmailTemplateService
{
    private EntityManagerInterface $entityManager;
    private EmailTemplateRepository $emailTemplateRepository;
    private MessageBusInterface $messageBus;
    private ParameterBagInterface $params;
    private Environment $twig;
    private TranslatorInterface $translator;
    
    public function __construct(
        EntityManagerInterface $entityManager,
        EmailTemplateRepository $emailTemplateRepository,
        MessageBusInterface $messageBus,
        ParameterBagInterface $params,
        Environment $twig,
        TranslatorInterface $translator
    ) {
        $this->entityManager = $entityManager;
        $this->emailTemplateRepository = $emailTemplateRepository;
        $this->messageBus = $messageBus;
        $this->params = $params;
        $this->twig = $twig;
        $this->translator = $translator;
    }
    
        
        public function previewTemplate($templateId)
    {
        // Logique pour prévisualiser le template
        return "Prévisualisation du template avec ID: " . $templateId;
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
        
        // Préparer les variables pour le template
        $variables = array_merge($params, [
            'firstName' => $user->getFirstName(),
            'lastName' => $user->getLastName(),
            'fullName' => $user->getFullName(),
            'email' => $user->getEmail(),
            'domain' => $this->params->get('app.domain') ?? $_SERVER['HTTP_HOST'] ?? 'domaine.com',
            'locale' => $locale
        ]);
        
        // Remplacer les variables dans le contenu HTML
        $htmlContent = $this->replaceVariables($template->getHtmlContent(), $variables);
        
        // Remplacer les variables dans le contenu texte si présent
        $textContent = null;
        if ($template->getTextContent()) {
            $textContent = $this->replaceVariables($template->getTextContent(), $variables);
        }
        
        // Remplacer les variables dans le sujet
        $subject = $this->replaceVariables($template->getSubject(), $variables);
        
        // Créer et envoyer le message
        $message = new SendEmailMessage(
            $this->params->get('app.email') ?? 'contact@domaine.com',
            $user->getEmail(),
            $subject,
            $htmlContent,
            $textContent
        );
        
        $this->messageBus->dispatch($message);
        
        return true;
    }
    
    /**
     * Remplacer les variables dans un texte
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
    
    /**
     * Initialiser les templates d'email par défaut
     */
    public function initializeDefaultTemplates(): void
    {
        $defaultTemplates = [
            // Template de confirmation d'inscription
            [
                'code' => 'registration_confirmation',
                'locale' => 'fr',
                'subject' => 'Confirmation de votre inscription',
                'htmlContent' => $this->getRegistrationTemplate('fr'),
                'textContent' => null
            ],
            [
                'code' => 'registration_confirmation',
                'locale' => 'en',
                'subject' => 'Registration Confirmation',
                'htmlContent' => $this->getRegistrationTemplate('en'),
                'textContent' => null
            ],
            [
                'code' => 'registration_confirmation',
                'locale' => 'nl',
                'subject' => 'Bevestiging van uw registratie',
                'htmlContent' => $this->getRegistrationTemplate('nl'),
                'textContent' => null
            ],
            [
                'code' => 'registration_confirmation',
                'locale' => 'de',
                'subject' => 'Bestätigung Ihrer Registrierung',
                'htmlContent' => $this->getRegistrationTemplate('de'),
                'textContent' => null
            ],
            
            // Template d'approbation de compte
            [
                'code' => 'account_approved',
                'locale' => 'fr',
                'subject' => 'Votre compte a été approuvé',
                'htmlContent' => $this->getApprovalTemplate('fr'),
                'textContent' => null
            ],
            [
                'code' => 'account_approved',
                'locale' => 'en',
                'subject' => 'Your account has been approved',
                'htmlContent' => $this->getApprovalTemplate('en'),
                'textContent' => null
            ],
            [
                'code' => 'account_approved',
                'locale' => 'nl',
                'subject' => 'Uw account is goedgekeurd',
                'htmlContent' => $this->getApprovalTemplate('nl'),
                'textContent' => null
            ],
            [
                'code' => 'account_approved',
                'locale' => 'de',
                'subject' => 'Ihr Konto wurde genehmigt',
                'htmlContent' => $this->getApprovalTemplate('de'),
                'textContent' => null
            ],
            
            // Template de réinitialisation de mot de passe
            [
                'code' => 'reset_password',
                'locale' => 'fr',
                'subject' => 'Réinitialisation de votre mot de passe',
                'htmlContent' => $this->getResetPasswordTemplate('fr'),
                'textContent' => null
            ],
            [
                'code' => 'reset_password',
                'locale' => 'en',
                'subject' => 'Password Reset',
                'htmlContent' => $this->getResetPasswordTemplate('en'),
                'textContent' => null
            ],
            [
                'code' => 'reset_password',
                'locale' => 'nl',
                'subject' => 'Uw wachtwoord opnieuw instellen',
                'htmlContent' => $this->getResetPasswordTemplate('nl'),
                'textContent' => null
            ],
            [
                'code' => 'reset_password',
                'locale' => 'de',
                'subject' => 'Passwort zurücksetzen',
                'htmlContent' => $this->getResetPasswordTemplate('de'),
                'textContent' => null
            ],
            
            // Template de changement de rôle
            [
                'code' => 'role_change',
                'locale' => 'fr',
                'subject' => 'Changement de votre rôle',
                'htmlContent' => $this->getRoleChangeTemplate('fr'),
                'textContent' => null
            ],
            [
                'code' => 'role_change',
                'locale' => 'en',
                'subject' => 'Your role has changed',
                'htmlContent' => $this->getRoleChangeTemplate('en'),
                'textContent' => null
            ],
            [
                'code' => 'role_change',
                'locale' => 'nl',
                'subject' => 'Wijziging van uw rol',
                'htmlContent' => $this->getRoleChangeTemplate('nl'),
                'textContent' => null
            ],
            [
                'code' => 'role_change',
                'locale' => 'de',
                'subject' => 'Änderung Ihrer Rolle',
                'htmlContent' => $this->getRoleChangeTemplate('de'),
                'textContent' => null
            ],
            
            // Template de changement de permissions
            [
                'code' => 'permission_update',
                'locale' => 'fr',
                'subject' => 'Mise à jour de vos permissions',
                'htmlContent' => $this->getPermissionUpdateTemplate('fr'),
                'textContent' => null
            ],
            [
                'code' => 'permission_update',
                'locale' => 'en',
                'subject' => 'Your permissions have been updated',
                'htmlContent' => $this->getPermissionUpdateTemplate('en'),
                'textContent' => null
            ],
            [
                'code' => 'permission_update',
                'locale' => 'nl',
                'subject' => 'Uw machtigingen zijn bijgewerkt',
                'htmlContent' => $this->getPermissionUpdateTemplate('nl'),
                'textContent' => null
            ],
            [
                'code' => 'permission_update',
                'locale' => 'de',
                'subject' => 'Ihre Berechtigungen wurden aktualisiert',
                'htmlContent' => $this->getPermissionUpdateTemplate('de'),
                'textContent' => null
            ],
        ];
        
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
    
    /**
     * Obtient le contenu HTML par défaut pour un nouveau template
     */
    private function getDefaultTemplate(): string
    {
        return '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nouveau template d\'email</title>
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

<div class="container">
    <div class="header">
        <h1>Nouveau template d\'email</h1>
    </div>
    <div class="content">
        <p>Bonjour {{ firstName }},</p>
        
        <p>Ceci est un exemple de template d\'email. Vous pouvez modifier ce contenu selon vos besoins.</p>
        
        <p style="text-align: center;">
            <a href="https://{{ domain }}" class="button">Visiter notre site</a>
        </p>
        
        <p>Si le bouton ne fonctionne pas, vous pouvez copier et coller le lien suivant dans votre navigateur :</p>
        <p>https://{{ domain }}</p>
        
        <p>Cordialement,<br>L\'équipe {{ domain }}.</p>
    </div>
    <div class="footer">
        <p>Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
    </div>
</div>';
    }
    
    /**
     * Obtient le template de confirmation d'inscription
     */
    private function getRegistrationTemplate(string $locale): string
    {
        if ($locale === 'en') {
            return '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Confirm your registration</title>
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

<div class="container">
    <div class="header">
        <h1>Welcome to our platform!</h1>
    </div>
    <div class="content">
        <p>Hello {{ firstName }},</p>
        
        <p>Thank you for registering on our platform. To complete your registration and verify your email address, please click on the button below:</p>
        
        <p style="text-align: center;">
            <a href="{{ signedUrl }}" class="button">Confirm my email address</a>
        </p>
        
        <p>If the button doesn\'t work, you can copy and paste the following link into your browser:</p>
        <p>{{ signedUrl }}</p>
        
        <p>Note: After email verification, an administrator will need to approve your account before you can log in. You\'ll receive another email when your account is approved.</p>
        
        <p>Best regards,<br>The Team</p>
    </div>
    <div class="footer">
        <p>This email was sent automatically; please do not reply.</p>
    </div>
</div>';
        } elseif ($locale === 'nl') {
            return '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bevestig uw registratie</title>
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

<div class="container">
    <div class="header">
        <h1>Welkom op ons platform!</h1>
    </div>
    <div class="content">
        <p>Hallo {{ firstName }},</p>
        
        <p>Bedankt voor uw registratie op ons platform. Om uw registratie te voltooien en uw e-mailadres te verifiëren, klikt u op de onderstaande knop:</p>
        
        <p style="text-align: center;">
            <a href="{{ signedUrl }}" class="button">Bevestig mijn e-mailadres</a>
        </p>
        
        <p>Als de knop niet werkt, kunt u de volgende link kopiëren en plakken in uw browser:</p>
        <p>{{ signedUrl }}</p>
        
        <p>Opmerking: Na e-mailverificatie moet een beheerder uw account goedkeuren voordat u kunt inloggen. U ontvangt een andere e-mail wanneer uw account is goedgekeurd.</p>
        
        <p>Met vriendelijke groeten,<br>Het Team</p>
    </div>
    <div class="footer">
        <p>Deze e-mail is automatisch verzonden; gelieve niet te reageren.</p>
    </div>
</div>';
        } elseif ($locale === 'de') {
            return '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bestätigen Sie Ihre Registrierung</title>
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

<div class="container">
    <div class="header">
        <h1>Willkommen auf unserer Plattform!</h1>
    </div>
    <div class="content">
        <p>Hallo {{ firstName }},</p>
        
        <p>Vielen Dank für Ihre Registrierung auf unserer Plattform. Um Ihre Registrierung abzuschließen und Ihre E-Mail-Adresse zu verifizieren, klicken Sie bitte auf die untenstehende Schaltfläche:</p>
        
        <p style="text-align: center;">
            <a href="{{ signedUrl }}" class="button">E-Mail-Adresse bestätigen</a>
        </p>
        
        <p>Wenn die Schaltfläche nicht funktioniert, können Sie den folgenden Link in Ihren Browser kopieren und einfügen:</p>
        <p>{{ signedUrl }}</p>
        
        <p>Hinweis: Nach der E-Mail-Verifizierung muss ein Administrator Ihr Konto genehmigen, bevor Sie sich anmelden können. Sie erhalten eine weitere E-Mail, wenn Ihr Konto genehmigt wurde.</p>
        
        <p>Mit freundlichen Grüßen,<br>Das Team</p>
    </div>
    <div class="footer">
        <p>Diese E-Mail wurde automatisch versendet; bitte antworten Sie nicht darauf.</p>
    </div>
</div>';
        } else { // French by default
            return '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Confirmez votre inscription</title>
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

<div class="container">
    <div class="header">
        <h1>Bienvenue sur notre plateforme !</h1>
    </div>
    <div class="content">
        <p>Bonjour {{ firstName }},</p>
        
        <p>Merci de vous être inscrit sur notre plateforme. Pour finaliser votre inscription et vérifier votre adresse e-mail, veuillez cliquer sur le bouton ci-dessous :</p>
        
        <p style="text-align: center;">
            <a href="{{ signedUrl }}" class="button">Confirmer mon adresse e-mail</a>
        </p>
        
        <p>Si le bouton ne fonctionne pas, vous pouvez copier et coller le lien suivant dans votre navigateur :</p>
        <p>{{ signedUrl }}</p>
        
        <p>Note : Après la vérification de l\'e-mail, un administrateur devra approuver votre compte avant que vous puissiez vous connecter. Vous recevrez un autre e-mail lorsque votre compte sera approuvé.</p>
        
        <p>Cordialement,<br>L\'équipe</p>
    </div>
    <div class="footer">
        <p>Cet e-mail a été envoyé automatiquement, merci de ne pas y répondre.</p>
    </div>
</div>';
        }
    }
    
    /**
     * Obtient le template d'approbation de compte
     */
    private function getApprovalTemplate(string $locale): string
    {
        if ($locale === 'en') {
            return '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Your account has been approved</title>
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

<div class="container">
    <div class="header">
        <h1>Account Approved!</h1>
    </div>
    <div class="content">
        <p>Hello {{ firstName }},</p>
        
        <p>We are pleased to inform you that your account has been approved by our administrators. You can now log in to our platform and access all features.</p>
        
        <p style="text-align: center;">
            <a href="https://{{ domain }}/login" class="button">Log in now</a>
        </p>
        
        <p>If the button doesn\'t work, you can access the login page at the following URL:</p>
        <p>https://{{ domain }}/login</p>
        
        <p>Thank you for your patience during the approval process. We hope you enjoy using our platform!</p>
        
        <p>Best regards,<br>The Team</p>
    </div>
    <div class="footer">
        <p>This email was sent automatically; please do not reply.</p>
    </div>
</div>';
        } elseif ($locale === 'nl') {
            return '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Uw account is goedgekeurd</title>
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

<div class="container">
    <div class="header">
        <h1>Account goedgekeurd!</h1>
    </div>
    <div class="content">
        <p>Hallo {{ firstName }},</p>
        
        <p>We zijn verheugd u te kunnen mededelen dat uw account is goedgekeurd door onze beheerders. U kunt nu inloggen op ons platform en toegang krijgen tot alle functies.</p>
        
        <p style="text-align: center;">
            <a href="https://{{ domain }}/login" class="button">Nu inloggen</a>
        </p>
        
        <p>Als de knop niet werkt, kunt u de inlogpagina bezoeken op de volgende URL:</p>
        <p>https://{{ domain }}/login</p>
        
        <p>Bedankt voor uw geduld tijdens het goedkeuringsproces. We hopen dat u geniet van het gebruik van ons platform!</p>
        
        <p>Met vriendelijke groeten,<br>Het Team</p>
    </div>
    <div class="footer">
        <p>Deze e-mail is automatisch verzonden; gelieve niet te reageren.</p>
    </div>
</div>';
        } elseif ($locale === 'de') {
            return '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ihr Konto wurde genehmigt</title>
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

<div class="container">
    <div class="header">
        <h1>Konto genehmigt!</h1>
    </div>
    <div class="content">
    <p>Hallo {{ firstName }},</p>
        
        <p>Wir freuen uns, Ihnen mitteilen zu können, dass Ihr Konto von unseren Administratoren genehmigt wurde. Sie können sich jetzt bei unserer Plattform anmelden und auf alle Funktionen zugreifen.</p>
        
        <p style="text-align: center;">
            <a href="https://{{ domain }}/login" class="button">Jetzt anmelden</a>
        </p>
        
        <p>Wenn die Schaltfläche nicht funktioniert, können Sie die Anmeldeseite unter der folgenden URL aufrufen:</p>
        <p>https://{{ domain }}/login</p>
        
        <p>Vielen Dank für Ihre Geduld während des Genehmigungsprozesses. Wir hoffen, dass Sie unsere Plattform gerne nutzen!</p>
        
        <p>Mit freundlichen Grüßen,<br>Das Team</p>
    </div>
    <div class="footer">
        <p>Diese E-Mail wurde automatisch versendet; bitte antworten Sie nicht darauf.</p>
    </div>
</div>';
        } else { // French by default
            return '<meta charset="UTF-8">
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

<div class="container">
    <div class="header">
        <h1>Compte approuvé !</h1>
    </div>
    <div class="content">
        <p>Bonjour {{ firstName }},</p>
        
        <p>Nous avons le plaisir de vous informer que votre compte a été approuvé par nos administrateurs. Vous pouvez maintenant vous connecter à notre plateforme et accéder à toutes les fonctionnalités.</p>
        
        <p style="text-align: center;">
            <a href="https://{{ domain }}/login" class="button">Se connecter maintenant</a>
        </p>
        
        <p>Si le bouton ne fonctionne pas, vous pouvez accéder à la page de connexion à l\'URL suivante :</p>
        <p>https://{{ domain }}/login</p>
        
        <p>Merci de votre patience pendant le processus d\'approbation. Nous espérons que vous apprécierez l\'utilisation de notre plateforme !</p>
        
        <p>Cordialement,<br>L\'équipe</p>
    </div>
    <div class="footer">
        <p>Cet e-mail a été envoyé automatiquement, merci de ne pas y répondre.</p>
    </div>
</div>';
        }
    }
    
    /**
     * Obtient le template de réinitialisation de mot de passe
     */
    private function getResetPasswordTemplate(string $locale): string
    {
        if ($locale === 'en') {
            return '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Password Reset</title>
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

<div class="container">
    <div class="header">
        <h1>Password Reset Request</h1>
    </div>
    <div class="content">
        <p>Hello {{ firstName }},</p>
        
        <p>We received a request to reset your password. To proceed with the password reset, please click on the button below:</p>
        
        <p style="text-align: center;">
            <a href="{{ resetToken }}" class="button">Reset my password</a>
        </p>
        
        <p>If the button doesn\'t work, you can copy and paste the following link into your browser:</p>
        <p>{{ resetToken }}</p>
        
        <p>This link will expire in {{ tokenLifetime }} hour(s). If you did not request a password reset, please ignore this email or contact support if you have concerns.</p>
        
        <p>Best regards,<br>The Team</p>
    </div>
    <div class="footer">
        <p>This email was sent automatically; please do not reply.</p>
    </div>
</div>';
        } elseif ($locale === 'nl') {
            return '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Wachtwoord resetten</title>
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

<div class="container">
    <div class="header">
        <h1>Verzoek om wachtwoord te resetten</h1>
    </div>
    <div class="content">
        <p>Hallo {{ firstName }},</p>
        
        <p>We hebben een verzoek ontvangen om uw wachtwoord te resetten. Om door te gaan met het resetten van het wachtwoord, klikt u op de onderstaande knop:</p>
        
        <p style="text-align: center;">
            <a href="{{ resetToken }}" class="button">Mijn wachtwoord resetten</a>
        </p>
        
        <p>Als de knop niet werkt, kunt u de volgende link kopiëren en plakken in uw browser:</p>
        <p>{{ resetToken }}</p>
        
        <p>Deze link verloopt over {{ tokenLifetime }} uur. Als u geen wachtwoord reset heeft aangevraagd, negeer dan deze e-mail of neem contact op met de ondersteuning als u vragen heeft.</p>
        
        <p>Met vriendelijke groeten,<br>Het Team</p>
    </div>
    <div class="footer">
        <p>Deze e-mail is automatisch verzonden; gelieve niet te reageren.</p>
    </div>
</div>';
        } elseif ($locale === 'de') {
            return '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Passwort zurücksetzen</title>
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

<div class="container">
    <div class="header">
        <h1>Anfrage zum Zurücksetzen des Passworts</h1>
    </div>
    <div class="content">
        <p>Hallo {{ firstName }},</p>
        
        <p>Wir haben eine Anfrage zum Zurücksetzen Ihres Passworts erhalten. Um mit dem Zurücksetzen des Passworts fortzufahren, klicken Sie bitte auf die untenstehende Schaltfläche:</p>
        
        <p style="text-align: center;">
            <a href="{{ resetToken }}" class="button">Mein Passwort zurücksetzen</a>
        </p>
        
        <p>Wenn die Schaltfläche nicht funktioniert, können Sie den folgenden Link in Ihren Browser kopieren und einfügen:</p>
        <p>{{ resetToken }}</p>
        
        <p>Dieser Link läuft in {{ tokenLifetime }} Stunde(n) ab. Wenn Sie kein Zurücksetzen des Passworts angefordert haben, ignorieren Sie bitte diese E-Mail oder wenden Sie sich an den Support, wenn Sie Bedenken haben.</p>
        
        <p>Mit freundlichen Grüßen,<br>Das Team</p>
    </div>
    <div class="footer">
        <p>Diese E-Mail wurde automatisch versendet; bitte antworten Sie nicht darauf.</p>
    </div>
</div>';
        } else { // French by default
            return '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Réinitialisation de mot de passe</title>
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

<div class="container">
    <div class="header">
        <h1>Demande de réinitialisation de mot de passe</h1>
    </div>
    <div class="content">
        <p>Bonjour {{ firstName }},</p>
        
        <p>Nous avons reçu une demande de réinitialisation de votre mot de passe. Pour procéder à la réinitialisation, veuillez cliquer sur le bouton ci-dessous :</p>
        
        <p style="text-align: center;">
            <a href="{{ resetToken }}" class="button">Réinitialiser mon mot de passe</a>
        </p>
        
        <p>Si le bouton ne fonctionne pas, vous pouvez copier et coller le lien suivant dans votre navigateur :</p>
        <p>{{ resetToken }}</p>
        
        <p>Ce lien expirera dans {{ tokenLifetime }} heure(s). Si vous n\'avez pas demandé de réinitialisation de mot de passe, veuillez ignorer cet e-mail ou contacter le support si vous avez des inquiétudes.</p>
        
        <p>Cordialement,<br>L\'équipe</p>
    </div>
    <div class="footer">
        <p>Cet e-mail a été envoyé automatiquement, merci de ne pas y répondre.</p>
    </div>
</div>';
        }
    }
    
    /**
     * Obtient le template de changement de rôle
     */
    private function getRoleChangeTemplate(string $locale): string
    {
        if ($locale === 'en') {
            return '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Role Change Notification</title>
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

<div class="container">
    <div class="header">
        <h1>Role Change Notification</h1>
    </div>
    <div class="content">
        <p>Dear {{ firstName }},</p>
        
        <p>We are writing to inform you that your role on the {{ domain }} website has been changed.</p>

        <p>
            Previous Role: {{ previousRole }}<br>
            New Role: {{ newRole }}
        </p>
        
        <p>If you have any questions, please don\'t hesitate to contact our support.</p>
        
        <p style="text-align: center;">
            <a href="https://{{ domain }}/login" class="button">Log in</a>
        </p>
        
        <p>Best regards,<br>The {{ domain }} Team</p>
    </div>
    <div class="footer">
        <p>This email was sent automatically; please do not reply.</p>
    </div>
</div>';
        } elseif ($locale === 'nl') {
            return '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Wijziging van uw rol</title>
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

<div class="container">
    <div class="header">
        <h1>Wijziging van uw rol</h1>
    </div>
    <div class="content">
        <p>Beste {{ firstName }},</p>
        
        <p>We informeren u dat uw rol op de {{ domain }}-website is gewijzigd.</p>

        <p>
            Vorige rol: {{ previousRole }}<br>
            Nieuwe rol: {{ newRole }}
        </p>
        
        <p>Als u vragen heeft, aarzel dan niet om contact op te nemen met onze ondersteuning.</p>
        
        <p style="text-align: center;">
            <a href="https://{{ domain }}/login" class="button">Inloggen</a>
        </p>
        
        <p>Met vriendelijke groeten,<br>Het {{ domain }}-team</p>
    </div>
    <div class="footer">
        <p>Deze e-mail is automatisch verzonden; gelieve niet te reageren.</p>
    </div>
</div>';
        } elseif ($locale === 'de') {
            return '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rollenänderung</title>
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

<div class="container">
    <div class="header">
        <h1>Rollenänderung</h1>
    </div>
    <div class="content">
        <p>Sehr geehrte/-r {{ firstName }},</p>
        
        <p>Wir möchten Sie darüber informieren, dass sich Ihre Rolle auf der {{ domain }}-Website geändert hat.</p>

        <p>
            Vorherige Rolle: {{ previousRole }}<br>
            Neue Rolle: {{ newRole }}
        </p>
        
        <p>Bei Fragen zögern Sie nicht, unseren Support zu kontaktieren.</p>
        
        <p style="text-align: center;">
            <a href="https://{{ domain }}/login" class="button">Anmelden</a>
        </p>
        
        <p>Mit freundlichen Grüßen,<br>Das {{ domain }}-Team</p>
    </div>
    <div class="footer">
        <p>Diese E-Mail wurde automatisch versendet; bitte antworten Sie nicht darauf.</p>
    </div>
</div>';
        } else { // French by default
            return '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Changement de votre rôle</title>
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

<div class="container">
    <div class="header">
        <h1>Changement de votre rôle</h1>
    </div>
    <div class="content">
        <p>Bonjour {{ firstName }},</p>
        
        <p>Nous vous informons que votre rôle sur le site {{ domain }} a été modifié.</p>

        <p>
            Rôle précédent : {{ previousRole }}<br>
            Nouveau rôle : {{ newRole }}
        </p>
        
        <p>Si vous avez des questions, n\'hésitez pas à contacter notre support.</p>
        
        <p style="text-align: center;">
            <a href="https://{{ domain }}/login" class="button">Se connecter</a>
        </p>
        
        <p>Cordialement,<br>L\'équipe {{ domain }}</p>
    </div>
    <div class="footer">
        <p>Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
    </div>
</div>';
        }
    }
    
    /**
     * Obtient le template de mise à jour des permissions
     */
    private function getPermissionUpdateTemplate(string $locale): string
    {
        if ($locale === 'en') {
            return '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Permissions Updated</title>
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
    .permission-changes {
        background-color: #f1f1f1;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 15px;
    }
</style>

<div class="container">
    <div class="header">
        <h1>Permissions Updated</h1>
    </div>
    <div class="content">
        <p>Dear {{ firstName }},</p>
        
        <p>We are writing to inform you that your permissions on the {{ domain }} website have been updated.</p>

        <div class="permission-changes">
            <h3>Changes Details</h3>
            <p>{{ permissionChanges|raw }}</p>
        </div>
        
        <p>If you have any questions about these changes, please don\'t hesitate to contact our support.</p>
        
        <p style="text-align: center;">
            <a href="https://{{ domain }}/login" class="button">Log in</a>
        </p>
        
        <p>Best regards,<br>The {{ domain }} Team</p>
    </div>
    <div class="footer">
        <p>This email was sent automatically; please do not reply.</p>
    </div>
</div>';
        } elseif ($locale === 'nl') {
            return '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Uw rechten zijn gewijzigd</title>
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
    .permission-changes {
        background-color: #f1f1f1;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 15px;
    }
</style>

<div class="container">
    <div class="header">
        <h1>Uw rechten zijn gewijzigd</h1>
    </div>
    <div class="content">
        <p>Beste {{ firstName }},</p>
        
        <p>We informeren u dat uw rechten op de {{ domain }}-website zijn gewijzigd.</p>

        <div class="permission-changes">
            <h3>Details van de wijzigingen</h3>
            <p>{{ permissionChanges|raw }}</p>
        </div>
        
        <p>Als u vragen heeft over deze wijzigingen, aarzel dan niet om contact op te nemen met onze ondersteuning.</p>
        
        <p style="text-align: center;">
            <a href="https://{{ domain }}/login" class="button">Inloggen</a>
        </p>
        
        <p>Met vriendelijke groeten,<br>Het {{ domain }}-team</p>
    </div>
    <div class="footer">
        <p>Deze e-mail is automatisch verzonden; gelieve niet te reageren.</p>
    </div>
</div>';
        } elseif ($locale === 'de') {
            return '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Berechtigungen aktualisiert</title>
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
    .permission-changes {
        background-color: #f1f1f1;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 15px;
    }
</style>

<div class="container">
    <div class="header">
        <h1>Berechtigungen aktualisiert</h1>
    </div>
    <div class="content">
        <p>Sehr geehrte/-r {{ firstName }},</p>
        
        <p>Wir möchten Sie darüber informieren, dass sich Ihre Berechtigungen auf der {{ domain }}-Website geändert haben.</p>

        <div class="permission-changes">
            <h3>Details der Änderungen</h3>
            <p>{{ permissionChanges|raw }}</p>
        </div>
        
        <p>Bei Fragen zu diesen Änderungen zögern Sie nicht, unseren Support zu kontaktieren.</p>
        
        <p style="text-align: center;">
            <a href="https://{{ domain }}/login" class="button">Anmelden</a>
        </p>
        
        <p>Mit freundlichen Grüßen,<br>Das {{ domain }}-Team</p>
    </div>
    <div class="footer">
        <p>Diese E-Mail wurde automatisch versendet; bitte antworten Sie nicht darauf.</p>
    </div>
</div>';
        } else { // French by default
            return '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modification de vos permissions</title>
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
    .permission-changes {
        background-color: #f1f1f1;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 15px;
    }
</style>

<div class="container">
    <div class="header">
        <h1>Modification de vos permissions</h1>
    </div>
    <div class="content">
        <p>Bonjour {{ firstName }},</p>
        
        <p>Nous vous informons que vos permissions sur le site {{ domain }} ont été modifiées.</p>

        <div class="permission-changes">
            <h3>Détails des modifications</h3>
            <p>{{ permissionChanges|raw }}</p>
        </div>
        
        <p>Si vous avez des questions sur ces modifications, n\'hésitez pas à contacter notre support.</p>
        
        <p style="text-align: center;">
            <a href="https://{{ domain }}/login" class="button">Se connecter</a>
        </p>
        
        <p>Cordialement,<br>L\'équipe {{ domain }}</p>
    </div>
    <div class="footer">
        <p>Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
    </div>
</div>';
        }
    }
}