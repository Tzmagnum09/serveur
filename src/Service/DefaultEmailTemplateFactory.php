<?php

namespace App\Service;

/**
 * Classe responsable de la création des templates d'email par défaut
 */
class DefaultEmailTemplateFactory
{
    /**
     * Crée les templates d'email par défaut
     * 
     * @return array Liste des templates par défaut
     */
    public function createDefaultTemplates(): array
    {
        return [
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
    }
    
    /**
     * Obtient le template de confirmation d'inscription
     */
    private function getRegistrationTemplate(string $locale): string
    {
        return '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>' . $this->getSubjectByLocale('registration', $locale) . '</title>
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
        <h1>' . $this->getSubjectByLocale('registration', $locale) . '</h1>
    </div>
    <div class="content">
        <p>' . $this->getGreetingByLocale($locale) . '</p>
        
        <p>' . $this->getRegistrationContentByLocale($locale) . '</p>
        
        <p style="text-align: center;">
            <a href="{{ signedUrl }}" class="button">' . $this->getConfirmButtonByLocale($locale) . '</a>
        </p>
        
        <p>' . $this->getButtonAlternativeByLocale($locale) . '</p>
        <p>{{ signedUrl }}</p>
        
        <p>' . $this->getLinkExpirationByLocale($locale, 24) . '</p>
        
        <p>' . $this->getUnexpectedEmailByLocale($locale) . '</p>
        
        <p>' . $this->getSignatureByLocale($locale) . '</p>
    </div>
    <div class="footer">
        <p>' . $this->getAutoEmailByLocale($locale) . '</p>
    </div>
</div>';
    }
    
    /**
     * Obtient le template d'approbation de compte
     */
    private function getApprovalTemplate(string $locale): string
    {
        return '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>' . $this->getSubjectByLocale('approval', $locale) . '</title>
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
        <h1>' . $this->getSubjectByLocale('approval', $locale) . '</h1>
    </div>
    <div class="content">
        <p>' . $this->getGreetingByLocale($locale) . '</p>
        
        <p>' . $this->getApprovalContentByLocale($locale) . '</p>
        
        <p style="text-align: center;">
            <a href="https://{{ domain }}/login" class="button">' . $this->getLoginButtonByLocale($locale) . '</a>
        </p>
        
        <p>' . $this->getQuestionsContactByLocale($locale) . '</p>
        
        <p>' . $this->getSignatureByLocale($locale) . '</p>
    </div>
    <div class="footer">
        <p>' . $this->getAutoEmailByLocale($locale) . '</p>
    </div>
</div>';
    }
    
    /**
     * Obtient le template de réinitialisation de mot de passe
     */
    private function getResetPasswordTemplate(string $locale): string
    {
        return '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>' . $this->getSubjectByLocale('reset', $locale) . '</title>
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
        <h1>' . $this->getSubjectByLocale('reset', $locale) . '</h1>
    </div>
    <div class="content">
        <p>' . $this->getGreetingByLocale($locale) . '</p>
        
        <p>' . $this->getResetContentByLocale($locale) . '</p>
        
        <p style="text-align: center;">
            <a href="{{ resetToken }}" class="button">' . $this->getResetButtonByLocale($locale) . '</a>
        </p>
        
        <p>' . $this->getButtonAlternativeByLocale($locale) . '</p>
        <p>{{ resetToken }}</p>
        
        <p>' . $this->getLinkExpirationByLocale($locale, 1) . '</p>
        
        <p>' . $this->getUnexpectedResetByLocale($locale) . '</p>
        
        <p>' . $this->getSignatureByLocale($locale) . '</p>
    </div>
    <div class="footer">
        <p>' . $this->getAutoEmailByLocale($locale) . '</p>
    </div>
</div>';
    }
    
    /**
     * Obtient le template de changement de rôle
     */
    private function getRoleChangeTemplate(string $locale): string
    {
        return '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>' . $this->getSubjectByLocale('role', $locale) . '</title>
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
        <h1>' . $this->getSubjectByLocale('role', $locale) . '</h1>
    </div>
    <div class="content">
        <p>' . $this->getGreetingByLocale($locale) . '</p>
        
        <p>' . $this->getRoleChangeContentByLocale($locale) . '</p>
        
        <p>' . $this->getRoleDetailsContentByLocale($locale) . '</p>
        
        <p>' . $this->getQuestionsContactByLocale($locale) . '</p>
        
        <p style="text-align: center;">
            <a href="https://{{ domain }}/login" class="button">' . $this->getLoginButtonByLocale($locale) . '</a>
        </p>
        
        <p>' . $this->getSignatureByLocale($locale) . '</p>
    </div>
    <div class="footer">
        <p>' . $this->getAutoEmailByLocale($locale) . '</p>
    </div>
</div>';
    }
    
    /**
     * Obtient le template de mise à jour des permissions
     */
    private function getPermissionUpdateTemplate(string $locale): string
    {
        return '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>' . $this->getSubjectByLocale('permission', $locale) . '</title>
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
        <h1>' . $this->getSubjectByLocale('permission', $locale) . '</h1>
    </div>
    <div class="content">
        <p>' . $this->getGreetingByLocale($locale) . '</p>
        
        <p>' . $this->getPermissionUpdateContentByLocale($locale) . '</p>

        <div class="permission-changes">
            <h3>' . $this->getPermissionDetailsHeadingByLocale($locale) . '</h3>
            <p>{{ permissionChanges }}</p>
        </div>
        
        <p>' . $this->getQuestionsContactByLocale($locale) . '</p>
        
        <p style="text-align: center;">
            <a href="https://{{ domain }}/login" class="button">' . $this->getLoginButtonByLocale($locale) . '</a>
        </p>
        
        <p>' . $this->getSignatureByLocale($locale) . '</p>
    </div>
    <div class="footer">
        <p>' . $this->getAutoEmailByLocale($locale) . '</p>
    </div>
</div>';
    }
    
    /**
     * Récupère la salutation appropriée en fonction de la locale
     */
    private function getGreetingByLocale(string $locale): string
    {
        switch ($locale) {
            case 'en':
                return 'Dear {{ firstName }},';
            case 'nl':
                return 'Beste {{ firstName }},';
            case 'de':
                return 'Sehr geehrte/-r {{ firstName }},';
            default: // fr
                return 'Bonjour {{ firstName }},';
        }
    }
    
    /**
     * Récupère le sujet en fonction du type et de la locale
     */
    private function getSubjectByLocale(string $type, string $locale): string
    {
        switch ($type) {
            case 'registration':
                switch ($locale) {
                    case 'en': return 'Registration Confirmation';
                    case 'nl': return 'Bevestiging van uw registratie';
                    case 'de': return 'Bestätigung Ihrer Registrierung';
                    default: return 'Confirmation de votre inscription';
                }
            case 'approval':
                switch ($locale) {
                    case 'en': return 'Your account has been approved';
                    case 'nl': return 'Uw account is goedgekeurd';
                    case 'de': return 'Ihr Konto wurde genehmigt';
                    default: return 'Votre compte a été approuvé';
                }
            case 'reset':
                switch ($locale) {
                    case 'en': return 'Password Reset';
                    case 'nl': return 'Uw wachtwoord opnieuw instellen';
                    case 'de': return 'Passwort zurücksetzen';
                    default: return 'Réinitialisation de votre mot de passe';
                }
            case 'role':
                switch ($locale) {
                    case 'en': return 'Your role has changed';
                    case 'nl': return 'Wijziging van uw rol';
                    case 'de': return 'Änderung Ihrer Rolle';
                    default: return 'Changement de votre rôle';
                }
            case 'permission':
                switch ($locale) {
                    case 'en': return 'Your permissions have been updated';
                    case 'nl': return 'Uw machtigingen zijn bijgewerkt';
                    case 'de': return 'Ihre Berechtigungen wurden aktualisiert';
                    default: return 'Mise à jour de vos permissions';
                }
            default:
                return '';
        }
    }
    
    /**
     * Récupère le contenu principal en fonction de la locale pour l'inscription
     */
    private function getRegistrationContentByLocale(string $locale): string
    {
        switch ($locale) {
            case 'en':
                return 'Thank you for registering on our website. To confirm your email address, please click the button below.';
            case 'nl':
                return 'Bedankt voor uw inschrijving op onze website. Om uw e-mailadres te bevestigen, klik op de onderstaande knop.';
            case 'de':
                return 'Vielen Dank, dass Sie sich auf unserer Website registriert haben. Um Ihre E-Mail-Adresse zu bestätigen, klicken Sie bitte auf den untenstehenden Button.';
            default: // fr
                return 'Merci de vous être inscrit sur notre site. Pour confirmer votre adresse email, veuillez cliquer sur le bouton ci-dessous.';
        }
    }
    
    /**
     * Récupère le contenu du bouton de confirmation en fonction de la locale
     */
    private function getConfirmButtonByLocale(string $locale): string
    {
        switch ($locale) {
            case 'en':
                return 'Confirm my email address';
            case 'nl':
                return 'Mijn e-mailadres bevestigen';
            case 'de':
                return 'Meine E-Mail-Adresse bestätigen';
            default: // fr
                return 'Confirmer mon adresse email';
        }
    }
    
    /**
     * Récupère le texte alternatif pour le bouton en fonction de la locale
     */
    private function getButtonAlternativeByLocale(string $locale): string
    {
        switch ($locale) {
            case 'en':
                return 'If the button doesn\'t work, you can copy and paste the following link into your browser:';
            case 'nl':
                return 'Als de knop niet werkt, kunt u de volgende link kopiëren en plakken in uw browser:';
            case 'de':
                return 'Wenn der Button nicht funktioniert, können Sie den folgenden Link kopieren und in Ihren Browser einfügen:';
            default: // fr
                return 'Si le bouton ne fonctionne pas, vous pouvez copier et coller le lien suivant dans votre navigateur :';
        }
    }
    
    /**
     * Récupère le texte d'expiration du lien en fonction de la locale
     */
    private function getLinkExpirationByLocale(string $locale, int $hours): string
    {
        switch ($locale) {
            case 'en':
                return "This link will expire in {$hours} hour" . ($hours > 1 ? 's' : '') . ".";
            case 'nl':
                return "Deze link verloopt binnen {$hours} uur.";
            case 'de':
                return "Dieser Link wird in {$hours} Stunde" . ($hours > 1 ? 'n' : '') . " ablaufen.";
            default: // fr
                return "Ce lien expirera dans {$hours} heure" . ($hours > 1 ? 's' : '') . ".";
        }
    }
    
    /**
     * Récupère le texte en cas d'email inattendu en fonction de la locale
     */
    private function getUnexpectedEmailByLocale(string $locale): string
    {
        switch ($locale) {
            case 'en':
                return 'If you did not create an account, please disregard this email.';
            case 'nl':
                return 'Als u geen account heeft aangemaakt, kunt u deze e-mail negeren.';
            case 'de':
                return 'Wenn Sie kein Konto erstellt haben, ignorieren Sie bitte diese E-Mail.';
            default: // fr
                return 'Si vous n\'avez pas créé de compte, veuillez ignorer cet email.';
        }
    }
    
    /**
     * Récupère le texte en cas de réinitialisation inattendue en fonction de la locale
     */
    private function getUnexpectedResetByLocale(string $locale): string
    {
        switch ($locale) {
            case 'en':
                return 'If you did not request a password reset, please ignore this email.';
            case 'nl':
                return 'Als u geen verzoek heeft ingediend om uw wachtwoord opnieuw in te stellen, kunt u deze e-mail negeren.';
            case 'de':
                return 'Wenn Sie keine Zurücksetzung des Passworts beantragt haben, ignorieren Sie bitte diese E-Mail.';
            default: // fr
                return 'Si vous n\'avez pas demandé de réinitialisation de mot de passe, veuillez ignorer cet email.';
        }
    }
    
    /**
     * Récupère la signature en fonction de la locale
     */
    private function getSignatureByLocale(string $locale): string
    {
        switch ($locale) {
            case 'en':
                return 'Best regards,<br>The Dmqode.be Team.';
            case 'nl':
                return 'Met vriendelijke groeten,<br>Het Dmqode.be-team.';
            case 'de':
                return 'Mit freundlichen Grüßen,<br>Das Dmqode.be-Team.';
            default: // fr
                return 'Cordialement,<br>L\'équipe Dmqode.be.';
        }
    }
    
    /**
     * Récupère le texte d'email automatique en fonction de la locale
     */
    private function getAutoEmailByLocale(string $locale): string
    {
        switch ($locale) {
            case 'en':
                return 'This email was sent automatically; please do not reply to it.';
            case 'nl':
                return 'Deze e-mail is automatisch verzonden; gelieve er niet op te reageren.';
            case 'de':
                return 'Diese E-Mail wurde automatisch versendet; bitte antworten Sie nicht darauf.';
            default: // fr
                return 'Cet email a été envoyé automatiquement, merci de ne pas y répondre.';
        }
    }
    
    /**
     * Récupère le contenu principal en fonction de la locale pour l'approbation
     */
    private function getApprovalContentByLocale(string $locale): string
    {
        switch ($locale) {
            case 'en':
                return 'We are pleased to inform you that your account has been approved by our administration team. You can now log in to your account by clicking the button below.';
            case 'nl':
                return 'We zijn verheugd u te informeren dat uw account is goedgekeurd door ons administratieteam. U kunt nu inloggen op uw account door op de onderstaande knop te klikken.';
            case 'de':
                return 'Wir freuen uns, Ihnen mitteilen zu können, dass Ihr Konto von unserem Verwaltungsteam genehmigt wurde. Sie können sich jetzt in Ihr Konto einloggen, indem Sie auf die Schaltfläche unten klicken.';
            default: // fr
                return 'Nous avons le plaisir de vous informer que votre compte a été approuvé par notre équipe d\'administration. Vous pouvez désormais vous connecter à votre compte en cliquant sur le bouton ci-dessous.';
        }
    }
    
    /**
     * Récupère le texte du bouton de connexion en fonction de la locale
     */
    private function getLoginButtonByLocale(string $locale): string
    {
        switch ($locale) {
            case 'en':
                return 'Log in';
            case 'nl':
                return 'Inloggen';
            case 'de':
                return 'Einloggen';
            default: // fr
                return 'Se connecter';
        }
    }
    
    /**
     * Récupère le texte pour les questions en fonction de la locale
     */
    private function getQuestionsContactByLocale(string $locale): string
    {
        switch ($locale) {
            case 'en':
                return 'If you have any questions, please don\'t hesitate to contact our support.';
            case 'nl':
                return 'Als u vragen heeft, aarzel dan niet om contact op te nemen met onze ondersteuning.';
            case 'de':
                return 'Bei Fragen zögern Sie nicht, unseren Support zu kontaktieren.';
            default: // fr
                return 'Si vous avez des questions, n\'hésitez pas à contacter notre support.';
        }
    }
    
    /**
     * Récupère le contenu principal en fonction de la locale pour la réinitialisation
     */
    private function getResetContentByLocale(string $locale): string
    {
        switch ($locale) {
            case 'en':
                return 'We have received a request to reset the password for your account. To set a new password, click the button below.';
            case 'nl':
                return 'We hebben een verzoek ontvangen om het wachtwoord voor uw account opnieuw in te stellen. Om een nieuw wachtwoord in te stellen, klikt u op de onderstaande knop.';
            case 'de':
                return 'Wir haben eine Anfrage zur Zurücksetzung des Passworts für Ihr Konto erhalten. Um ein neues Passwort festzulegen, klicken Sie bitte auf die Schaltfläche unten.';
            default: // fr
                return 'Nous avons reçu une demande de réinitialisation de mot de passe pour votre compte. Pour définir un nouveau mot de passe, cliquez sur le bouton ci-dessous.';
        }
    }
    
    /**
     * Récupère le texte du bouton de réinitialisation en fonction de la locale
     */
    private function getResetButtonByLocale(string $locale): string
    {
        switch ($locale) {
            case 'en':
                return 'Reset your password';
            case 'nl':
                return 'Reset uw wachtwoord';
            case 'de':
                return 'Setzen Sie Ihr Passwort zurück';
            default: // fr
                return 'Réinitialiser mon mot de passe';
        }
    }
    
    /**
     * Récupère le contenu principal en fonction de la locale pour le changement de rôle
     */
    private function getRoleChangeContentByLocale(string $locale): string
    {
        switch ($locale) {
            case 'en':
                return 'We are writing to inform you that your role on the Dmqode.be website has been changed.';
            case 'nl':
                return 'We informeren u dat uw rol op de Dmqode.be-website is gewijzigd.';
            case 'de':
                return 'Wir möchten Sie darüber informieren, dass sich Ihre Rolle auf der Dmqode.be-Website geändert hat.';
            default: // fr
                return 'Nous vous informons que votre rôle sur le site Dmqode.be a été modifié.';
        }
    }
    
    /**
     * Récupère les détails du rôle en fonction de la locale
     */
    private function getRoleDetailsContentByLocale(string $locale): string
    {
        switch ($locale) {
            case 'en':
                return 'Previous Role: {{ previousRole }}<br>New Role: {{ newRole }}';
            case 'nl':
                return 'Vorige rol: {{ previousRole }}<br>Nieuwe rol: {{ newRole }}';
            case 'de':
                return 'Vorherige Rolle: {{ previousRole }}<br>Neue Rolle: {{ newRole }}';
            default: // fr
                return 'Rôle précédent : {{ previousRole }}<br>Nouveau rôle : {{ newRole }}';
        }
    }
    
    /**
     * Récupère le contenu principal en fonction de la locale pour les permissions
     */
    private function getPermissionUpdateContentByLocale(string $locale): string
    {
        switch ($locale) {
            case 'en':
                return 'We are writing to inform you that your permissions on the Dmqode.be website have been updated.';
            case 'nl':
                return 'We informeren u dat uw rechten op de Dmqode.be-website zijn gewijzigd.';
            case 'de':
                return 'Wir möchten Sie darüber informieren, dass sich Ihre Berechtigungen auf der Dmqode.be-Website geändert haben.';
            default: // fr
                return 'Nous vous informons que vos permissions sur le site Dmqode.be ont été modifiées.';
        }
    }
    
    /**
     * Récupère le titre des détails des permissions en fonction de la locale
     */
    private function getPermissionDetailsHeadingByLocale(string $locale): string
    {
        switch ($locale) {
            case 'en':
                return 'Changes Details';
            case 'nl':
                return 'Details van de wijzigingen';
            case 'de':
                return 'Details der Änderungen';
            default: // fr
                return 'Détails des modifications';
        }
    }    }