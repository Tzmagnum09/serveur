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
    private EmailTemplateRepository $emailTemplateRepository;
    private EntityManagerInterface $entityManager;
    private MessageBusInterface $messageBus;
    private Environment $twig;
    private TranslatorInterface $translator;
    private ParameterBagInterface $params;
    private string $senderEmail;
    private string $domain;

    public function __construct(
        EmailTemplateRepository $emailTemplateRepository,
        EntityManagerInterface $entityManager,
        MessageBusInterface $messageBus,
        Environment $twig,
        TranslatorInterface $translator,
        ParameterBagInterface $params
    ) {
        $this->emailTemplateRepository = $emailTemplateRepository;
        $this->entityManager = $entityManager;
        $this->messageBus = $messageBus;
        $this->twig = $twig;
        $this->translator = $translator;
        $this->params = $params;
        
        // Récupération des paramètres depuis le fichier .env
        $this->senderEmail = $params->get('app.email');
        $this->domain = $params->get('app.domain');
    }

    /**
     * Envoie un email à un utilisateur en utilisant un template
     */
    public function sendEmailToUser(string $templateCode, User $user, array $parameters = []): bool
    {
        // Récupérer le template d'email dans la langue de l'utilisateur
        $locale = $user->getLocale();
        $template = $this->emailTemplateRepository->findByCodeAndLocale($templateCode, $locale);
        
        // Si le template n'existe pas dans la langue de l'utilisateur, utiliser le français par défaut
        if (!$template) {
            $template = $this->emailTemplateRepository->findByCodeAndLocale($templateCode, 'fr');
            
            // Si le template n'existe toujours pas, erreur
            if (!$template) {
                return false;
            }
        }
        
        // Paramètres par défaut (utilisateur)
        $defaultParams = [
            'firstName' => $user->getFirstName(),
            'lastName' => $user->getLastName(),
            'fullName' => $user->getFullName(),
            'email' => $user->getEmail(),
            'domain' => $this->domain,
        ];
        
        // Fusionner les paramètres par défaut et ceux passés en argument
        $params = array_merge($defaultParams, $parameters);
        
        // Remplacer les variables dans le sujet et le contenu
        $subject = $this->replaceVariables($template->getSubject(), $params);
        $htmlContent = $this->replaceVariables($template->getHtmlContent(), $params);
        $textContent = $template->getTextContent() ? $this->replaceVariables($template->getTextContent(), $params) : null;
        
        // Créer le message
        $message = new SendEmailMessage(
            $this->senderEmail,
            $user->getEmail(),
            $subject,
            $htmlContent,
            $textContent
        );
        
        // Envoyer le message via le bus
        $this->messageBus->dispatch($message);
        
        return true;
    }

    /**
     * Remplace les variables dans un texte par leurs valeurs
     */
    private function replaceVariables(string $text, array $variables): string
    {
        foreach ($variables as $name => $value) {
            $text = str_replace('{{ ' . $name . ' }}', $value, $text);
        }
        
        return $text;
    }

    /**
     * Récupère un template par code et locale
     */
    public function getTemplate(string $code, string $locale): ?EmailTemplate
    {
        return $this->emailTemplateRepository->findByCodeAndLocale($code, $locale);
    }

    /**
     * Initialise les templates d'emails par défaut
     */
    public function initializeDefaultTemplates(): void
    {
        // Templates à créer
        $defaultTemplates = [
            'role_change' => [
                'fr' => [
                    'subject' => 'Changement de rôle sur la plateforme',
                    'htmlContent' => $this->getDefaultRoleChangeHtmlFr(),
                ],
                'en' => [
                    'subject' => 'Role change on the platform',
                    'htmlContent' => $this->getDefaultRoleChangeHtmlEn(),
                ],
                'nl' => [
                    'subject' => 'Rolwijziging op het platform',
                    'htmlContent' => $this->getDefaultRoleChangeHtmlNl(),
                ],
                'de' => [
                    'subject' => 'Rollenänderung auf der Plattform',
                    'htmlContent' => $this->getDefaultRoleChangeHtmlDe(),
                ],
            ],
            'permission_update' => [
                'fr' => [
                    'subject' => 'Mise à jour de vos permissions',
                    'htmlContent' => $this->getDefaultPermissionUpdateHtmlFr(),
                ],
                'en' => [
                    'subject' => 'Update of your permissions',
                    'htmlContent' => $this->getDefaultPermissionUpdateHtmlEn(),
                ],
                'nl' => [
                    'subject' => 'Update van uw rechten',
                    'htmlContent' => $this->getDefaultPermissionUpdateHtmlNl(),
                ],
                'de' => [
                    'subject' => 'Aktualisierung Ihrer Berechtigungen',
                    'htmlContent' => $this->getDefaultPermissionUpdateHtmlDe(),
                ],
            ],
        ];
        
        // Créer les templates s'ils n'existent pas
        foreach ($defaultTemplates as $code => $locales) {
            foreach ($locales as $locale => $data) {
                $template = $this->emailTemplateRepository->findByCodeAndLocale($code, $locale);
                
                if (!$template) {
                    $template = new EmailTemplate();
                    $template->setCode($code);
                    $template->setLocale($locale);
                    $template->setSubject($data['subject']);
                    $template->setHtmlContent($data['htmlContent']);
                    $template->setCreatedAt(new \DateTimeImmutable());
                    
                    $this->entityManager->persist($template);
                }
            }
        }
        
        $this->entityManager->flush();
    }

    /**
     * Template HTML par défaut pour le changement de rôle (FR)
     */
    private function getDefaultRoleChangeHtmlFr(): string
    {
        return '<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changement de rôle sur la plateforme</title>
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
            <h1>Changement de rôle sur la plateforme</h1>
        </div>
        <div class="content">
            <p>Bonjour {{ firstName }},</p>
            
            <p>Nous vous informons que votre rôle sur la plateforme a changé. Vous êtes maintenant <strong>{{ newRole }}</strong>.</p>
            
            <p>Ce changement a été effectué par <strong>{{ promotedBy }}</strong>.</p>
            
            <p>Vous pouvez dès maintenant vous connecter à votre compte pour découvrir vos nouvelles fonctionnalités.</p>
            
            <p style="text-align: center;">
                <a href="https://{{ domain }}/login" class="button">Se connecter</a>
            </p>
            
            <p>Si vous avez des questions concernant ce changement, n\'hésitez pas à nous contacter.</p>
            
            <p>Cordialement,<br>L\'équipe Dmqode.be.</p>
        </div>
        <div class="footer">
            <p>Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
        </div>
    </div>';
    }

    /**
     * Template HTML par défaut pour le changement de rôle (EN)
     */
    private function getDefaultRoleChangeHtmlEn(): string
    {
        return '<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role change on the platform</title>
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
            <h1>Role change on the platform</h1>
        </div>
        <div class="content">
            <p>Hello {{ firstName }},</p>
            
            <p>We inform you that your role on the platform has changed. You are now an <strong>{{ newRole }}</strong>.</p>
            
            <p>This change was made by <strong>{{ promotedBy }}</strong>
         private function getDefaultRoleChangeHtmlEn(): string
    {
        return '<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role change on the platform</title>
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
            <h1>Role change on the platform</h1>
        </div>
        <div class="content">
            <p>Hello {{ firstName }},</p>
            
            <p>We inform you that your role on the platform has changed. You are now a <strong>{{ newRole }}</strong>.</p>
            
            <p>This change was made by <strong>{{ promotedBy }}</strong>.</p>
            
            <p>You can now log in to your account to discover your new features.</p>
            
            <p style="text-align: center;">
                <a href="https://{{ domain }}/login" class="button">Log in</a>
            </p>
            
            <p>If you have any questions about this change, do not hesitate to contact us.</p>
            
            <p>Best regards,<br>The Dmqode.be Team.</p>
        </div>
        <div class="footer">
            <p>This email was sent automatically; please do not reply to it.</p>
        </div>
    </div>';
    }

    /**
     * Template HTML par défaut pour le changement de rôle (NL)
     */
    private function getDefaultRoleChangeHtmlNl(): string
    {
        return '<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rolwijziging op het platform</title>
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
            <h1>Rolwijziging op het platform</h1>
        </div>
        <div class="content">
            <p>Beste {{ firstName }},</p>
            
            <p>We informeren u dat uw rol op het platform is gewijzigd. U bent nu een <strong>{{ newRole }}</strong>.</p>
            
            <p>Deze wijziging is uitgevoerd door <strong>{{ promotedBy }}</strong>.</p>
            
            <p>U kunt nu inloggen op uw account om uw nieuwe functies te ontdekken.</p>
            
            <p style="text-align: center;">
                <a href="https://{{ domain }}/login" class="button">Inloggen</a>
            </p>
            
            <p>Als u vragen heeft over deze wijziging, aarzel dan niet om contact met ons op te nemen.</p>
            
            <p>Met vriendelijke groeten,<br>Het Dmqode.be-team.</p>
        </div>
        <div class="footer">
            <p>Deze e-mail is automatisch verzonden; gelieve er niet op te reageren.</p>
        </div>
    </div>';
    }

    /**
     * Template HTML par défaut pour le changement de rôle (DE)
     */
    private function getDefaultRoleChangeHtmlDe(): string
    {
        return '<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rollenänderung auf der Plattform</title>
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
            <h1>Rollenänderung auf der Plattform</h1>
        </div>
        <div class="content">
            <p>Sehr geehrte/-r {{ firstName }},</p>
            
            <p>Wir informieren Sie, dass sich Ihre Rolle auf der Plattform geändert hat. Sie sind jetzt ein <strong>{{ newRole }}</strong>.</p>
            
            <p>Diese Änderung wurde von <strong>{{ promotedBy }}</strong> vorgenommen.</p>
            
            <p>Sie können sich jetzt in Ihr Konto einloggen, um Ihre neuen Funktionen zu entdecken.</p>
            
            <p style="text-align: center;">
                <a href="https://{{ domain }}/login" class="button">Einloggen</a>
            </p>
            
            <p>Wenn Sie Fragen zu dieser Änderung haben, zögern Sie nicht, uns zu kontaktieren.</p>
            
            <p>Mit freundlichen Grüßen,<br>Das Dmqode.be-Team.</p>
        </div>
        <div class="footer">
            <p>Diese E-Mail wurde automatisch versendet; bitte antworten Sie nicht darauf.</p>
        </div>
    </div>';
    }

    /**
     * Template HTML par défaut pour la mise à jour des permissions (FR)
     */
    private function getDefaultPermissionUpdateHtmlFr(): string
    {
        return '<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise à jour de vos permissions</title>
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
        .permission-badge {
            display: inline-block;
            background-color: #e9f5ff;
            color: #0056b3;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
        }
        .permission-status {
            display: inline-block;
            margin-left: 10px;
            padding: 3px 8px;
            border-radius: 3px;
            font-size: 12px;
            font-weight: bold;
        }
        .granted {
            background-color: #d4edda;
            color: #155724;
        }
        .revoked {
            background-color: #f8d7da;
            color: #721c24;
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
            <h1>Mise à jour de vos permissions</h1>
        </div>
        <div class="content">
            <p>Bonjour {{ firstName }},</p>
            
            <p>Nous vous informons que vos permissions d\'administrateur ont été mises à jour.</p>
            
            <p>La permission <span class="permission-badge">{{ permissionName }}</span> a été 
            {% if isGranted %}
                <span class="permission-status granted">ACCORDÉE</span>.
            {% else %}
                <span class="permission-status revoked">RÉVOQUÉE</span>.
            {% endif %}
            </p>
            
            <p>Cette modification a été effectuée par <strong>{{ grantedBy }}</strong>.</p>
            
            <p>Vous pouvez dès maintenant vous connecter à votre compte pour constater ces changements.</p>
            
            <p style="text-align: center;">
                <a href="https://{{ domain }}/login" class="button">Se connecter</a>
            </p>
            
            <p>Si vous avez des questions concernant ce changement, n\'hésitez pas à nous contacter.</p>
            
            <p>Cordialement,<br>L\'équipe Dmqode.be.</p>
        </div>
        <div class="footer">
            <p>Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
        </div>
    </div>';
    }

    /**
     * Template HTML par défaut pour la mise à jour des permissions (EN)
     */
    private function getDefaultPermissionUpdateHtmlEn(): string
    {
        return '<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update of your permissions</title>
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
        .permission-badge {
            display: inline-block;
            background-color: #e9f5ff;
            color: #0056b3;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
        }
        .permission-status {
            display: inline-block;
            margin-left: 10px;
            padding: 3px 8px;
            border-radius: 3px;
            font-size: 12px;
            font-weight: bold;
        }
        .granted {
            background-color: #d4edda;
            color: #155724;
        }
        .revoked {
            background-color: #f8d7da;
            color: #721c24;
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
            <h1>Update of your permissions</h1>
        </div>
        <div class="content">
            <p>Hello {{ firstName }},</p>
            
            <p>We inform you that your administrator permissions have been updated.</p>
            
            <p>The permission <span class="permission-badge">{{ permissionName }}</span> has been 
            {% if isGranted %}
                <span class="permission-status granted">GRANTED</span>.
            {% else %}
                <span class="permission-status revoked">REVOKED</span>.
            {% endif %}
            </p>
            
            <p>This change was made by <strong>{{ grantedBy }}</strong>.</p>
            
            <p>You can now log in to your account to see these changes.</p>
            
            <p style="text-align: center;">
                <a href="https://{{ domain }}/login" class="button">Log in</a>
            </p>
            
            <p>If you have any questions about this change, do not hesitate to contact us.</p>
            
            <p>Best regards,<br>The Dmqode.be Team.</p>
        </div>
        <div class="footer">
            <p>This email was sent automatically; please do not reply to it.</p>
        </div>
    </div>';
    }

    /**
     * Template HTML par défaut pour la mise à jour des permissions (NL)
     */
    private function getDefaultPermissionUpdateHtmlNl(): string
    {
        return '<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update van uw rechten</title>
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
        .permission-badge {
            display: inline-block;
            background-color: #e9f5ff;
            color: #0056b3;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
        }
        .permission-status {
            display: inline-block;
            margin-left: 10px;
            padding: 3px 8px;
            border-radius: 3px;
            font-size: 12px;
            font-weight: bold;
        }
        .granted {
            background-color: #d4edda;
            color: #155724;
        }
        .revoked {
            background-color: #f8d7da;
            color: #721c24;
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
            <h1>Update van uw rechten</h1>
        </div>
        <div class="content">
            <p>Beste {{ firstName }},</p>
            
            <p>Wij informeren u dat uw administratorrechten zijn bijgewerkt.</p>
            
            <p>Het recht <span class="permission-badge">{{ permissionName }}</span> is 
            {% if isGranted %}
                <span class="permission-status granted">TOEGEKEND</span>.
            {% else %}
                <span class="permission-status revoked">INGETROKKEN</span>.
            {% endif %}
            </p>
            
            <p>Deze wijziging is uitgevoerd door <strong>{{ grantedBy }}</strong>.</p>
            
            <p>U kunt nu inloggen op uw account om deze wijzigingen te bekijken.</p>
            
            <p style="text-align: center;">
                <a href="https://{{ domain }}/login" class="button">Inloggen</a>
            </p>
            
            <p>Als u vragen heeft over deze wijziging, aarzel dan niet om contact met ons op te nemen.</p>
            
            <p>Met vriendelijke groeten,<br>Het Dmqode.be-team.</p>
        </div>
        <div class="footer">
            <p>Deze e-mail is automatisch verzonden; gelieve er niet op te reageren.</p>
        </div>
    </div>';
    }

    /**
     * Template HTML par défaut pour la mise à jour des permissions (DE)
     */
    private function getDefaultPermissionUpdateHtmlDe(): string
    {
        return '<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktualisierung Ihrer Berechtigungen</title>
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
        .permission-badge {
            display: inline-block;
            background-color: #e9f5ff;
            color: #0056b3;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
        }
        .permission-status {
            display: inline-block;
            margin-left: 10px;
            padding: 3px 8px;
            border-radius: 3px;
            font-size: 12px;
            font-weight: bold;
        }
        .granted {
            background-color: #d4edda;
            color: #155724;
        }
        .revoked {
            background-color: #f8d7da;
            color: #721c24;
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
            <h1>Aktualisierung Ihrer Berechtigungen</h1>
        </div>
        <div class="content">
            <p>Sehr geehrte/-r {{ firstName }},</p>
            
            <p>Wir informieren Sie, dass Ihre Administratorberechtigungen aktualisiert wurden.</p>
            
            <p>Die Berechtigung <span class="permission-badge">{{ permissionName }}</span> wurde 
            {% if isGranted %}
                <span class="permission-status granted">ERTEILT</span>.
            {% else %}
                <span class="permission-status revoked">WIDERRUFEN</span>.
            {% endif %}
            </p>
            
            <p>Diese Änderung wurde von <strong>{{ grantedBy }}</strong> vorgenommen.</p>
            
            <p>Sie können sich jetzt in Ihr Konto einloggen, um diese Änderungen zu sehen.</p>
            
            <p style="text-align: center;">
                <a href="https://{{ domain }}/login" class="button">Einloggen</a>
            </p>
            
            <p>Wenn Sie Fragen zu dieser Änderung haben, zögern Sie nicht, uns zu kontaktieren.</p>
            
            <p>Mit freundlichen Grüßen,<br>Das Dmqode.be-Team.</p>
        </div>
        <div class="footer">
            <p>Diese E-Mail wurde automatisch versendet; bitte antworten Sie nicht darauf.</p>
        </div>
    </div>';
    }
}