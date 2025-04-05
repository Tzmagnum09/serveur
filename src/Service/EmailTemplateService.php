<?php

namespace App\Service;

use App\Entity\EmailTemplate;
use App\Repository\EmailTemplateRepository;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Contracts\Translation\TranslatorInterface;
use Twig\Environment;

class EmailTemplateService
{
    private $templateRepository;
    private $mailer;
    private $defaultTemplates = [];
    private $twig;
    private $senderEmail;
    private $senderName;
    private $translator;
    private $defaultLocale;
    private $emailSender;
    private $domain;

    public function __construct(
        EmailTemplateRepository $templateRepository,
        MailerInterface $mailer,
        Environment $twig,
        TranslatorInterface $translator,
        string $defaultLocale = 'fr',
        string $emailSender = 'contact@dmqode.be',
        string $domain = 'dmqode.be',
        string $senderName = 'DMQode.be'
    ) {
        $this->templateRepository = $templateRepository;
        $this->mailer = $mailer;
        $this->twig = $twig;
        $this->translator = $translator;
        $this->defaultLocale = $defaultLocale;
        $this->emailSender = $emailSender;
        $this->senderEmail = $emailSender;
        $this->domain = $domain;
        $this->senderName = $senderName;
        $this->initializeDefaultTemplates();
    }

    // Méthode pour envoyer un email à un utilisateur
    public function sendEmailToUser(string $templateCode, $user, array $context = []): void
    {
        // Récupérer le template selon le code et la langue de l'utilisateur
        $locale = $user->getLocale() ?? 'fr';
        $template = $this->getTemplateByCodeAndLocale($templateCode, $locale);
        
        // Préparer le contexte avec les variables de l'utilisateur
        $emailContext = array_merge([
            'firstName' => $user->getFirstName(),
            'lastName' => $user->getLastName(),
            'email' => $user->getEmail(),
            'domain' => $this->domain,
        ], $context);
        
        // Rendre le contenu HTML avec Twig
        $htmlContent = $this->renderTemplateContent($template->getHtmlContent(), $emailContext);
        
        // Créer et envoyer l'email
        $email = (new TemplatedEmail())
            ->from(new Address($this->senderEmail, $this->senderName))
            ->to($user->getEmail())
            ->subject($template->getSubject())
            ->html($htmlContent);
        
        // Ajouter le contenu texte si disponible
        if ($template->getTextContent()) {
            $textContent = $this->renderTemplateContent($template->getTextContent(), $emailContext);
            $email->text($textContent);
        }
        
        $this->mailer->send($email);
    }
    
    // Méthode pour prévisualiser un template avec des données de test
    public function previewTemplate(EmailTemplate $template): string
    {
        // Données de test pour la prévisualisation
        $context = [
            'firstName' => 'John',
            'lastName' => 'Doe',
            'email' => 'john.doe@example.com',
            'domain' => $this->domain,
            'signedUrl' => 'https://' . $this->domain . '/verify/email?token=sample-token',
            'resetToken' => 'https://' . $this->domain . '/reset-password/reset?token=sample-token',
        ];
        
        return $this->renderTemplateContent($template->getHtmlContent(), $context);
    }
    
    // Méthode privée pour récupérer un template par code et locale
    private function getTemplateByCodeAndLocale(string $code, string $locale): EmailTemplate
    {
        // Chercher dans la base de données
        $template = $this->templateRepository->findOneBy([
            'code' => $code,
            'locale' => $locale,
        ]);
        
        // Si non trouvé, créer un template par défaut
        if (!$template) {
            $template = $this->createDefaultTemplate($code, $locale);
        }
        
        return $template;
    }
    
    // Méthode pour créer un template par défaut si nécessaire
    private function createDefaultTemplate(string $code, string $locale): EmailTemplate
    {
        // Vérifier si un template par défaut existe pour ce code et cette locale
        if (!isset($this->defaultTemplates[$code][$locale])) {
            // Fallback sur l'anglais ou le français si disponible
            $fallbackLocale = isset($this->defaultTemplates[$code]['en']) ? 'en' : 'fr';
            
            if (!isset($this->defaultTemplates[$code][$fallbackLocale])) {
                throw new \Exception("No template found for code '$code' and locale '$locale'");
            }
            
            $locale = $fallbackLocale;
        }
        
        // Créer et sauvegarder le nouveau template
        $template = new EmailTemplate();
        $template->setCode($code);
        $template->setLocale($locale);
        $template->setSubject($this->defaultTemplates[$code][$locale]['subject']);
        $template->setHtmlContent($this->defaultTemplates[$code][$locale]['content']);
        $template->setCreatedAt(new \DateTimeImmutable());
        
        $this->templateRepository->save($template, true);
        
        return $template;
    }
    
    // Méthode pour rendre le contenu du template avec Twig
    private function renderTemplateContent(string $content, array $context): string
    {
        $template = $this->twig->createTemplate($content);
        return $template->render($context);
    }

    // Changé en public pour permettre l'accès depuis les fixtures
    public function initializeDefaultTemplates(): void
    {
        $this->defaultTemplates = [
            // Registration confirmation
            'registration_confirmation' => [
                'fr' => [
                    'subject' => 'Confirmation de votre inscription',
                    'content' => '<meta charset="UTF-8">
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


    <div class="container">
        <div class="header">
            <h1>Confirmation de votre inscription</h1>
        </div>
        <div class="content">
            <p>Bonjour {{ firstName }},</p>
            
            <p>Merci de vous être inscrit sur notre site. </p><p>Pour confirmer votre adresse email, veuillez cliquer sur le bouton ci-dessous.</p>
            
            <p style="text-align: center;">
                <a href="{{ signedUrl }}" class="button">Confirmer mon adresse email</a>
            </p>
            
            <p>Si le bouton ne fonctionne pas, vous pouvez copier et coller le lien suivant dans votre navigateur :</p>
            <p>{{ signedUrl }}</p>
            
            <p>Ce lien expirera dans 24 heures.</p>
            
            <p>Si vous n\'avez pas créé de compte, veuillez ignorer cet email.</p>
            
            <p>Cordialement,<br>L\'équipe DMQode.be.</p>
        </div>
        <div class="footer">
            <p>Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
        </div>
    </div>',
                ],
                'en' => [
                    'subject' => 'Registration confirmation',
                    'content' => '<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration confirmation</title>
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
            <h1>Confirmation of your registration</h1>
        </div>
        <div class="content">
            <p>Dear {{ firstName }},</p>
            
            <p>Thank you for registering on our website. </p><p>To confirm your email address, please click the button below.</p>
            
            <p style="text-align: center;">
                <a href="{{ signedUrl }}" class="button">Confirm my email address</a></p>
            
            <p>If the button doesn\'t work, you can copy and paste the following link into your browser:</p>
            <p>{{ signedUrl }}</p>
            
            <p>This link will expire in 24 hours.</p>
            <p>If you did not create an account, please disregard this email.</p>
            <p>Best regards,</p>
            <p>The DMQode.be Team.</p>
        </div>
        <div class="footer">
            <p>This email was sent automatically; please do not reply to it.</p>
        </div>
    </div>',
                ],
                'nl' => [
                    'subject' => 'Bevestiging van uw inschrijving',
                    'content' => '<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bevestiging van uw inschrijving</title>
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
            <h1>Bevestiging van uw inschrijving</h1>
        </div>
        <div class="content">
            <p>Beste {{ firstName }},</p>
            
            <p>Bedankt voor uw inschrijving op onze website. </p><p>Om uw e-mailadres te bevestigen, klik op de onderstaande knop</p>
            
            <p style="text-align: center;"><a href="{{ signedUrl }}" class="button">Mijn e-mailadres bevestigen</a></p>
            
            <p>Als de knop niet werkt, kunt u de volgende link kopiëren en plakken in uw browser:</p>
            <p>{{ signedUrl }}</p>
            
            <p>Deze link verloopt binnen 24 uur.</p>
            <p>Als u geen account heeft aangemaakt, kunt u deze e-mail negeren.</p>
            <p>Met vriendelijke groet, </p>
            <p>Het DMQode.be-team.</p>
        </div>
        <div class="footer">
            <p>Deze e-mail is automatisch verzonden; gelieve er niet op te reageren.</p>
        </div>
    </div>',
                ],  
                'de' => [
                    'subject' => 'Bestätigung Ihrer Anmeldung',
                    'content' => '<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestätigung Ihrer Anmeldung</title>
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
            <h1>Bestätigung Ihrer Anmeldung</h1>
        </div>
        <div class="content">
            <p>Sehr geehrte/-r {{ firstName }},</p>
            
            <p>Vielen Dank, dass Sie sich auf unserer Website registriert haben.</p>
            <p>Um Ihre E-Mail-Adresse zu bestätigen, klicken Sie bitte auf den untenstehenden Button.</p>
            
            <p style="text-align: center;">
                <a href="{{ signedUrl }}" class="button">Meine E-Mail-Adresse bestätigen</a>
            </p>
            
            <p>Wenn der Button nicht funktioniert, können Sie den folgenden Link kopieren und in Ihren Browser einfügen:</p>
            <p>{{ signedUrl }}</p>
            
            <p>Dieser Link wird in 24 Stunden ablaufen.</p>
            <p>Wenn Sie kein Konto erstellt haben, ignorieren Sie bitte diese E-Mail.</p>
            <p>Mit freundlichen Grüßen, </p>
            <p>Das DMQode.be-Team.</p>
        </div>
        <div class="footer">
            <p>Diese E-Mail wurde automatisch versendet; bitte antworten Sie nicht darauf.</p>
        </div>
    </div>',
                ],
            ],

            // Account approved
            'account_approved' => [
                'fr' => [
                    'subject' => 'Votre compte a été approuvé',
                    'content' => '<meta charset="UTF-8">
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
            <h1>Votre compte a été approuvé</h1>
        </div>
        <div class="content">
            <p>Bonjour {{ firstName }},</p>
            
            <p>Nous avons le plaisir de vous informer que votre compte a été approuvé par notre équipe d\'administration.</p>
            
            <p>Vous pouvez désormais vous connecter à votre compte en cliquant sur le bouton ci-dessous.</p>
            
            <p style="text-align: center;">
                <a href="https://{{ domain }}/login" class="button">Se connecter</a>
            </p>
            
            <p>Si vous avez des questions, n\'hésitez pas à nous contacter.</p>
            
            <p>Cordialement,<br>L\'équipe DMQode.be.</p>
        </div>
        <div class="footer">
            <p>Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
        </div>
    </div>',
                ],
                'en' => [
                    'subject' => 'Your account has been approved',
                    'content' => '<meta charset="UTF-8">
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
            <h1>Your account has been approved</h1>
        </div>
        <div class="content">
            <p>Dear {{ firstName }},</p>
            <p>We are pleased to inform you that your account has been approved by our administration team.</p>
            <p>You can now log in to your account by clicking the button below.</p>
            
            <p style="text-align: center;">
                <a href="https://{{ domain }}/login" class="button">Log in</a>
            </p>
            
            <p>If you have any questions, feel free to contact us.</p>
            <p>Best regards, </p>
            <p>The DMQode.be Team.</p>
        </div>
        <div class="footer">
            <p>This email was sent automatically; please do not reply to it.</p>
        </div>
    </div>',
                ],
                'nl' => [
                    'subject' => 'Uw account is goedgekeurd',
                    'content' => '<meta charset="UTF-8">
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
            <h1>Uw account is goedgekeurd</h1>
        </div>
        <div class="content">
            <p>Beste {{ firstName }},</p>
            
            <p>We zijn verheugd u te informeren dat uw account is goedgekeurd door ons administratieteam.</p>
            <p>U kunt nu inloggen op uw account door op de onderstaande knop te klikken.</p>
            
            <p style="text-align: center;">
                <a href="https://{{ domain }}/login" class="button">Inloggen</a>
            </p>
            
            <p>Als u vragen heeft, aarzel dan niet om contact met ons op te nemen.</p>
            <p>Met vriendelijke groet, </p>
            <p>Het DMQode.be-team.</p>
        </div>
        <div class="footer">
            <p>Deze e-mail is automatisch verzonden; gelieve er niet op te reageren.</p>
        </div>
    </div>',
                ],
                'de' => [
                    'subject' => 'Ihr Konto wurde genehmigt',
                    'content' => '<meta charset="UTF-8">
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
            <h1>Ihr Konto wurde genehmigt</h1>
        </div>
        <div class="content">
            <p>Sehr geehrte/-r {{ firstName }},</p>
            
            <p>Wir freuen uns, Ihnen mitteilen zu können, dass Ihr Konto von unserem Verwaltungsteam genehmigt wurde.</p>
            <p>Sie können sich jetzt in Ihr Konto einloggen, indem Sie auf die Schaltfläche unten klicken.</p>
            
            <p style="text-align: center;">
                <a href="https://{{ domain }}/login" class="button">Einloggen</a>
            </p>
            
            <p>Wenn Sie Fragen haben, zögern Sie nicht, uns zu kontaktieren.</p>
            <p>Mit freundlichen Grüßen, </p>
            <p>Das DMQode.be-Team.</p>
        </div>
        <div class="footer">
            <p>Diese E-Mail wurde automatisch versendet; bitte antworten Sie nicht darauf.</p>
        </div>
    </div>',
                ],
            ],

            // Reset password request
            'reset_password' => [
                'fr' => [
                    'subject' => 'Réinitialisation de votre mot de passe',
                    'content' => '<meta charset="UTF-8">
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
            <h1>Réinitialisation de votre mot de passe</h1>
        </div>
        <div class="content">
            <p>Bonjour {{ firstName }},</p>
            
            <p>Nous avons reçu une demande de réinitialisation de mot de passe pour votre compte. </p>
            <p>Pour définir un nouveau mot de passe, cliquez sur le bouton ci-dessous.</p>
            
            <p style="text-align: center;">
                <a href="{{ resetToken }}" class="button">Réinitialiser mon mot de passe</a>
            </p>
            
            <p>Si le bouton ne fonctionne pas, vous pouvez copier et coller le lien suivant dans votre navigateur :</p>
            <p>{{ resetToken }}</p>
            
            <p>Ce lien expirera dans 1 heure.</p>
            
            <p>Si vous n\'avez pas demandé de réinitialisation de mot de passe, veuillez ignorer cet email.</p>
            
            <p>Cordialement,<br>L\'équipe DMQode.be.</p>
        </div>
        <div class="footer">
            <p>Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
        </div>
    </div>',
                ],
                'en' => [
                    'subject' => 'Reset your password',
                    'content' => '<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset your password</title>
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
            <h1>Reset your password</h1>
        </div>
        <div class="content">
            <p>Dear {{ firstName }},</p>
            
            <p>We have received a request to reset the password for your account.</p>
            <p>To set a new password, click the button below.</p>
            
            <p style="text-align: center;">
                <a href="{{ resetToken }}" class="button">Reset your password</a>
            </p>
            
            <p>If the button doesn\'t work, you can copy and paste the following link into your browser:</p>
            <p>{{ resetToken }}</p>
            
            <p>This link will expire in 1 hour.</p>
            <p>If you did not request a password reset, please ignore this email.</p>
            <p>Best regards,</p>
            <p>The DMQode.be Team.</p>
        </div>
        <div class="footer">
            <p>This email was sent automatically; please do not reply to it.</p>
        </div>
    </div>',
                ],
                'nl' => [
                    'subject' => 'Reset uw wachtwoord',
                    'content' => '<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset uw wachtwoord</title>
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
            <h1>Reset uw wachtwoord</h1>
        </div>
        <div class="content">
            <p>Beste {{ firstName }},</p>
            
            <p>We hebben een verzoek ontvangen om het wachtwoord voor uw account opnieuw in te stellen. </p>
            <p>Om een nieuw wachtwoord in te stellen, klikt u op de onderstaande knop.</p>
            
            <p style="text-align: center;">
                <a href="{{ resetToken }}" class="button">Reset uw wachtwoord</a>
            </p>
            
            <p>Als de knop niet werkt, kunt u de volgende link kopiëren en plakken in uw browser:</p>
            <p>{{ resetToken }}</p>
            
            <p>Deze link verloopt binnen 1 uur.</p>
            <p>Als u geen verzoek heeft ingediend om uw wachtwoord opnieuw in te stellen, kunt u deze e-mail negeren.</p>
            <p>Met vriendelijke groet, </p>
            <p>Het DMQode.be-team.</p>
        </div>
        <div class="footer">
            <p>Deze e-mail is automatisch verzonden; gelieve er niet op te reageren.</p>
        </div>
    </div>',
                ],
                'de' => [
                    'subject' => 'Setzen Sie Ihr Passwort zurück', 
                    'content' => '<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setzen Sie Ihr Passwort zurück</title>
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
            <h1>Setzen Sie Ihr Passwort zurück</h1>
        </div>
        <div class="content">
            <p>Sehr geehrte/-r {{ firstName }},</p>
            
            <p>Wir haben eine Anfrage zur Zurücksetzung des Passworts für Ihr Konto erhalten. </p>
            <p>Um ein neues Passwort festzulegen, klicken Sie bitte auf die Schaltfläche unten.</p>
            
            <p style="text-align: center;">
                <a href="{{ resetToken }}" class="button">Setzen Sie Ihr Passwort zurück</a>
            </p>
            
            <p>Wenn die Schaltfläche nicht funktioniert, können Sie den folgenden Link kopieren und in Ihren Browser einfügen:</p>
            <p>{{ resetToken }}</p>
            
            <p>Dieser Link wird in 1 Stunde ablaufen.</p>
            <p>Wenn Sie keine Zurücksetzung des Passworts beantragt haben, ignorieren Sie bitte diese E-Mail.</p>
            <p>Mit freundlichen Grüßen, </p>
            <p>Das DMQode.be-Team.</p>
        </div>
        <div class="footer">
            <p>Diese E-Mail wurde automatisch versendet; bitte antworten Sie nicht darauf.</p>
        </div>
    </div>',
                ],
            ],
        ];
    }
}