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
        string $emailSender = 'admin@dmqode.be',
        string $domain = 'serveur.dmqode.be',
        string $senderName = 'Administrateur Serveur Dmqode.be'
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
            'domain' => $_SERVER['HTTP_HOST'] ?? 'dmqode.be',
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
            'domain' => 'dmqode.be',
            'signedUrl' => 'https://dmqode.be/verify/email?token=sample-token',
            'resetToken' => 'https://dmqode.be/reset-password/reset?token=sample-token',
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


    <div class="container" fgid="290438">
        <div class="header" fgid="290444">
            <h1 fgid="290450">Confirmation de votre inscription</h1>
        </div>
        <div class="content" fgid="290457">
            <p fgid="290463">Bonjour {{ firstName }},</p>
            
            <p fgid="290470">Merci de vous être inscrit sur notre site. </p><p fgid="290470">Pour confirmer votre adresse email, veuillez cliquer sur le bouton ci-dessous.</p>
            
            <p style="text-align: center;" fgid="290477">
                <a href="{{ signedUrl }}" class="button" fgid="290483">Confirmer mon adresse email</a>
            </p>
            
            <p fgid="290491">Si le bouton ne fonctionne pas, vous pouvez copier et coller le lien suivant dans votre navigateur :</p>
            <p fgid="290498">{{ signedUrl }}</p>
            
            <p fgid="290505">Ce lien expirera dans 24 heures.</p>
            
            <p fgid="290512">Si vous n\'avez pas créé de compte, veuillez ignorer cet email.</p>
            
            <p fgid="290519">Cordialement,<br fgid="290526">L\'équipe Dmqode.be.</p>
        </div>
        <div class="footer" fgid="290533">
            <p fgid="290539">Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
        </div>
    </div>',
                ],
                'en' => [
                    'subject' => 'Registration confirmation',
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


    <div class="container" fgid="298465">
        <div class="header" fgid="298471">
            <h1 fgid="298477">Confirmation of your registration</h1>
        </div>
        <div class="content" fgid="298484">
            <p fgid="298490">Dear {{ firstName }},</p>
            
            <p fgid="298497">Thank you for registering on our website. </p><p fgid="298497">To confirm your email address, please click the buttom below.</p>
            
            <p style="text-align: center;" fgid="298504">
                <a href="{{ signedUrl }}" class="button" fgid="298510">Confirm my email address</a></p>
            
            <p fgid="298518">If the button doesn\'t work, you can copy and paste the following link into your browser :</p>
            <p fgid="298525">{{ signedUrl }}</p>
            
            <p>This link will expire in 24 hours.</p><p>If you did not create an account, please disregard this email.</p><p fgid="298532"><span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">Best regards, </span></p><p fgid="298532"><span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);"> 
The Dmqode.be&nbsp;</span><span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">Team.</span></p>
        </div>
        <div class="footer" fgid="298560">
            <p fgid="298566">This email was sent automatically; please do not reply to it.</p>
        </div>
    </div>',
                ],
                'nl' => [
                    'subject' => 'Bevestiging van uw inschrijving',
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


    <div class="container" fgid="300483">
        <div class="header" fgid="300489">
            <h1 fgid="300495">Bevestiging van uw inschrijving</h1>
        </div>
        <div class="content" fgid="300502">
            <p fgid="300508">Beste {{ firstName }},</p>
            
            <p fgid="300515">Bedankt voor uw inschrijving op onze website. </p><p fgid="300515">Om uw e-mailadres te bevestigen, klik op de onderstaande knop</p>
            
            <p style="text-align: center;" fgid="300522"><a href="{{ signedUrl }}" class="button" fgid="300528">Mijn e-mailadres bevestigen</a></p>
            
            <p fgid="300536">Als de knop niet werkt, kunt u de volgende link kopiëren en plakken in uw browser:</p>
            <p fgid="300543">{{ signedUrl }}</p>
            
            <p fgid="300550"><span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">Deze link verloopt binnen 24 uur.</span></p><p>Als u geen account heeft aangemaakt, kunt u deze e-mail negeren.</p><p>Met vriendelijke groet, </p><p> 
Het Dmqode.be-team.</p>
        </div>
        <div class="footer" fgid="300578">
            <p fgid="300584">Deze e-mail is automatisch verzonden; gelieve er niet op te reageren.</p>
        </div>
    </div>',
                ],  
                'de' => [
                    'subject' => 'Bestätigung Ihrer Anmeldung',
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


    <div class="container" fgid="302541">
        <div class="header" fgid="302547">
            <h1 fgid="302553">Bestätigung Ihrer Anmeldung</h1>
        </div>
        <div class="content" fgid="302560">
            <p fgid="302566">Sehr geehrte/-r {{ firstName }},</p>
            
            <div data-tabster="{&quot;groupper&quot;:{&quot;tabbability&quot;:2},&quot;focusable&quot;:{}}" data-content="ai-message" aria-labelledby="6x4iMeEPGNTjSsUjPrqsT-author} 6x4iMeEPGNTjSsUjPrqsT-content-0" tabindex="0" role="article"><div id="6x4iMeEPGNTjSsUjPrqsT-content-0"><p>Vielen Dank, dass Sie sich auf unserer Website registriert haben.</p><p>Um Ihre E-Mail-Adresse zu bestätigen, klicken Sie bitte auf den untenstehenden Button.</p></div></div><p fgid="302573"><i tabindex="0" role="none" data-tabster-dummy="" aria-hidden="true" style="position: fixed; height: 1px; width: 1px; opacity: 0.001; z-index: -1; content-visibility: hidden; top: 0px; left: 0px;"></i></p>
            
            <p style="text-align: center;" fgid="302580">
                <a href="{{ signedUrl }}" class="button" fgid="302586">Meine E-Mail-Adresse bestätigen</a>
            </p>
            
            <p fgid="302594">Wenn der Button nicht funktioniert, können Sie den folgenden Link kopieren und in Ihren Browser einfügen:</p>
            <p fgid="302601">{{ signedUrl }}</p>
            
            <p>Dieser Link wird in 24 Stunden ablaufen.</p><p>Wenn Sie kein Konto erstellt haben, ignorieren Sie bitte diese E-Mail.</p><p>Mit freundlichen Grüßen, </p><p> 
Das Dmqode.be-Team.</p>
        </div>
        <div class="footer" fgid="302636">
            <p fgid="302642">Diese E-Mail wurde automatisch versendet; bitte antworten Sie nicht darauf.</p>
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


    <div class="container" fgid="294385">
        <div class="header" fgid="294391">
            <h1 fgid="294397">Votre compte a été approuvé</h1>
        </div>
        <div class="content" fgid="294404">
            <p fgid="294410">Bonjour {{ firstName }},</p>
            
            <p fgid="294417">Nous avons le plaisir de vous informer que votre compte a été approuvé par notre équipe d\'administration.</p>
            
            <p fgid="294424">Vous pouvez désormais vous connecter à votre compte en cliquant sur le bouton ci-dessous.</p>
            
            <p style="text-align: center;" fgid="294431">
                <a href="/login" class="button" fgid="294437">Se connecter</a>
            </p>
            
            <p fgid="294445">Si vous avez des questions, n\'hésitez pas à nous contacter.</p>
            
            <p fgid="294452">Cordialement,<br fgid="294459">L\'équipe&nbsp;<span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);" fgid="294710">Dmqode.be.</span></p>
        </div>
        <div class="footer" fgid="294466">
            <p fgid="294472">Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
        </div>
    </div>',
                ],
                'en' => [
                    'subject' => 'Your account has been approved',
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


    <div class="container" fgid="304758">
        <div class="header" fgid="304764">
            <h1 fgid="304770">Your account has been approved</h1>
        </div>
        <div class="content" fgid="304777">
            <p fgid="304783">Dear {{ firstName }},</p><p>We are pleased to inform you that your account has been approved by our administration team.</p><p>You can now log in to your account by clicking the button below.</p>
            
            <p style="text-align: center;" fgid="304804"><a href="/login" class="button" fgid="304810">Log in</a></p>
            
            <p>If you have any questions, feel free to contact us.</p><p>Best regards, </p><p>The Dmoqe.be Team.</p>
        </div>
        <div class="footer" fgid="304839">
            <p fgid="304845">This email was sent automatically; please do not reply to it..</p>
        </div>
    </div>',
                ],
                'nl' => [
                    'subject' => 'Uw account is goedgekeurd',
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


    <div class="container" fgid="307083">
        <div class="header" fgid="307089">
            <h1 fgid="307095">Uw account is goedgekeurd</h1>
        </div>
        <div class="content" fgid="307102">
            <p fgid="307108">Beste {{ firstName }},</p>
            
            <p>We zijn verheugd u te informeren dat uw account is goedgekeurd door ons administratieteam.</p><p>U kunt nu inloggen op uw account door op de onderstaande knop te klikken.</p>
            
            <p style="text-align: center;" fgid="307129"><a href="/login" class="button" fgid="307135">Inloggen</a></p>
            
            <p>Als u vragen heeft, aarzel dan niet om contact met ons op te nemen.</p><p>Met vriendelijke groet, </p><p> 
Het Dmqode.be-team.</p>
        </div>
        <div class="footer" fgid="307164">
            <p fgid="307170">Deze e-mail is automatisch verzonden; gelieve er niet op te reageren..</p>
        </div>
    </div>',
                ],
                'de' => [
                    'subject' => 'Ihr Konto wurde genehmigt',
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


    <div class="container" fgid="308946">
        <div class="header" fgid="308952">
            <h1 fgid="308958">Ihr Konto wurde genehmigt</h1>
        </div>
        <div class="content" fgid="308965">
            <p fgid="308971">Sehr geehrte/-r {{ firstName }},</p>
            
            <p>Wir freuen uns, Ihnen mitteilen zu können, dass Ihr Konto von unserem Verwaltungsteam genehmigt wurde.</p><p>Sie können sich jetzt in Ihr Konto einloggen, indem Sie auf die Schaltfläche unten klicken.</p>
            
            <p style="text-align: center;" fgid="308992"><a href="/login" class="button" fgid="308998">Einloggen</a></p>
            
            <p>Wenn Sie Fragen haben, zögern Sie nicht, uns zu kontaktieren.</p><p>Mit freundlichen Grüßen, </p><p> 
Das Dmqode.be-Team.</p>
        </div>
        <div class="footer" fgid="309027">
            <p fgid="309033">Diese E-Mail wurde automatisch versendet; bitte antworten Sie nicht darauf.</p>
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


    <div class="container" fgid="296437">
        <div class="header" fgid="296443">
            <h1 fgid="296449">Réinitialisation de votre mot de passe</h1>
        </div>
        <div class="content" fgid="296456">
            <p fgid="296462">Bonjour {{ firstName }},</p>
            
            <p fgid="296469">Nous avons reçu une demande de réinitialisation de mot de passe pour votre compte. </p><p fgid="296469">Pour définir un nouveau mot de passe, cliquez sur le bouton ci-dessous.</p>
            
            <p style="text-align: center;" fgid="296476">
                <a href="{{ resetToken }}" class="button" fgid="296482">Réinitialiser mon mot de passe</a>
            </p>
            
            <p fgid="296490">Si le bouton ne fonctionne pas, vous pouvez copier et coller le lien suivant dans votre navigateur :</p>
            <p fgid="296497">{{ resetToken }}</p>
            
            <p fgid="296504">Ce lien expirera dans 1 heure.</p>
            
            <p fgid="296511">Si vous n\'avez pas demandé de réinitialisation de mot de passe, veuillez ignorer cet email.</p>
            
            <p fgid="296518">Cordialement,<br fgid="296525">L\'équipe&nbsp;<span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);" fgid="296756">Dmqode.be.</span></p>
        </div>
        <div class="footer" fgid="296532">
            <p fgid="296538">Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
        </div>
    </div>',
                ],
                'en' => [
                    'subject' => 'Reset your password',
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


    <div class="container" fgid="311452">
        <div class="header" fgid="311458">
            <h1 fgid="311464">Reset your password</h1>
        </div>
        <div class="content" fgid="311471">
            <p fgid="311477">Dear {{ firstName }},</p>
            
            <p fgid="311484">We have received a request to reset the password for your account.</p><p fgid="311484">To set a new password, click the button below.</p>
            
            <p style="text-align: center;" fgid="311491"><a href="{{ resetToken }}" class="button" fgid="311497">Reset your password</a>
            </p>
            
            <p fgid="311505">If the button doesn\'t work, you can copy and paste the following link into your browser:</p>
            <p fgid="311512">{{ resetToken }}</p>
            
            <p fgid="311519"><span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">This link will expire in 1 hour.</span></p><p>If you did not request a password reset, please ignore this email.</p><p>Best regards,</p><p><span style="text-align: center; color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight);">The Dmqode.be Team.</span></p>
        </div>
        <div class="footer" fgid="311547">
            <p fgid="311553">This email was sent automatically; please do not reply to it.</p>
        </div>
    </div>',
                ],
                'nl' => [
                    'subject' => 'Reset uw wachtwoord',
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


    <div class="container" fgid="317400">
        <div class="header" fgid="317406">
            <h1 fgid="317412">Reset uw wachtwoord</h1>
        </div>
        <div class="content" fgid="317419">
            <p fgid="317425">Beste {{ firstName }},</p>
            
            <p fgid="317432">We hebben een verzoek ontvangen om het wachtwoord voor uw account opnieuw in te stellen. </p><p fgid="317432">Om een nieuw wachtwoord in te stellen, klikt u op de onderstaande knop.</p>
            
            <p style="text-align: center;" fgid="317439"><a href="{{ resetToken }}" class="button" fgid="317445">Reset uw wachtwoord</a>
            </p>
            
            <p fgid="317453">Als de knop niet werkt, kunt u de volgende link kopiëren en plakken in uw browser:</p>
            <p fgid="317460">{{ resetToken }}</p>
            
            <p fgid="317467"><span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">Deze link verloopt binnen 1 uur.</span></p><p>Als u geen verzoek heeft ingediend om uw wachtwoord opnieuw in te stellen, kunt u deze e-mail negeren.</p><p>Met vriendelijke groet, </p><p> 
Het Dmqode.be-team.</p>
        </div>
        <div class="footer" fgid="317495">
            <p fgid="317501">Deze e-mail is automatisch verzonden; gelieve er niet op te reageren.</p>
        </div>
    </div>',
                ],
                'de' => [
                    'subject' => 'Setzen Sie Ihr Passwort zurück', 
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


    <div class="container" fgid="325608">
        <div class="header" fgid="325614">
            <h1 fgid="325620">Setzen Sie Ihr Passwort zurück</h1>
        </div>
        <div class="content" fgid="325627"><p fgid="325633"><span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">Sehr geehrte/-r</span>&nbsp;{{ firstName }},</p>
            
            <div data-tabster="{&quot;groupper&quot;:{&quot;tabbability&quot;:2},&quot;focusable&quot;:{}}" data-content="ai-message" aria-labelledby="QAAnSFLFfetpVjgyUuwJs-author} QAAnSFLFfetpVjgyUuwJs-content-0" tabindex="0" role="article"><div id="QAAnSFLFfetpVjgyUuwJs-content-0"><p>Wir haben eine Anfrage zur Zurücksetzung des Passworts für Ihr Konto erhalten. </p><p>Um ein neues Passwort festzulegen, klicken Sie bitte auf die Schaltfläche unten.</p></div></div><p fgid="325640"><i tabindex="0" role="none" data-tabster-dummy="" aria-hidden="true" style="position: fixed; height: 1px; width: 1px; opacity: 0.001; z-index: -1; content-visibility: hidden; top: 0px; left: 0px;"></i></p>
            
            <p style="text-align: center;" fgid="325647"><a href="{{ resetToken }}" class="button" fgid="325653">Setzen Sie Ihr Passwort zurück</a>
            </p>
            
            <p fgid="325661"><span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">Wenn </span><span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">die </span><span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">Schaltfläche </span><span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">nicht </span><span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">funktioniert, </span><span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">können </span><span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">Sie </span><span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">den </span><span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">folgenden </span><span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">Link </span><span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">kopieren </span><span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">und </span><span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">in </span><span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">Ihren </span><span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">Browser </span><span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">einfügen :</span></p><p fgid="325661"><span style="color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">{{ resetToken }}</span></p>
            
            <p>Dieser Link wird in 1 Stunde ablaufen.</p><p>Wenn Sie keine Zurücksetzung des Passworts beantragt haben, ignorieren Sie bitte diese E-Mail.</p><p>Mit freundlichen Grüßen, </p><p> 
Das Dmqode.be-Team.</p>
        </div>
        <div class="footer" fgid="325703">
            <p fgid="325709"><span style="background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight);">Diese E-Mail wurde automatisch versendet; bitte antworten Sie nicht darauf.</span></p>
        </div>
    </div>',
                ],
            ],
        ];
    }
}