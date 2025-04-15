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
        // Note importante : on génère ces templates de façade,
        // mais en réalité ils devraient déjà être en base de données
        // Les templates ci-dessous sont juste pour la fonction d'initialisation
        // qui ne sera exécutée qu'une seule fois lors de l'installation
        
        // Pour être cohérent avec votre base de données, on pourrait retourner 
        // simplement une référence vers les templates existants.
        switch ($locale) {
            case 'en':
                return '<!-- Template from database: registration_confirmation en -->';
            case 'nl': 
                return '<!-- Template from database: registration_confirmation nl -->';
            case 'de':
                return '<!-- Template from database: registration_confirmation de -->';
            default: // fr
                return '<!-- Template from database: registration_confirmation fr -->';
        }
    }
    
    /**
     * Obtient le template d'approbation de compte
     */
    private function getApprovalTemplate(string $locale): string
    {
        switch ($locale) {
            case 'en':
                return '<!-- Template from database: account_approved en -->';
            case 'nl': 
                return '<!-- Template from database: account_approved nl -->';
            case 'de':
                return '<!-- Template from database: account_approved de -->';
            default: // fr
                return '<!-- Template from database: account_approved fr -->';
        }
    }
    
    /**
     * Obtient le template de réinitialisation de mot de passe
     */
    private function getResetPasswordTemplate(string $locale): string
    {
        switch ($locale) {
            case 'en':
                return '<!-- Template from database: reset_password en -->';
            case 'nl': 
                return '<!-- Template from database: reset_password nl -->';
            case 'de':
                return '<!-- Template from database: reset_password de -->';
            default: // fr
                return '<!-- Template from database: reset_password fr -->';
        }
    }
    
    /**
     * Obtient le template de changement de rôle
     */
    private function getRoleChangeTemplate(string $locale): string
    {
        switch ($locale) {
            case 'en':
                return '<!-- Template from database: role_change en -->';
            case 'nl': 
                return '<!-- Template from database: role_change nl -->';
            case 'de':
                return '<!-- Template from database: role_change de -->';
            default: // fr
                return '<!-- Template from database: role_change fr -->';
        }
    }
    
    /**
     * Obtient le template de mise à jour des permissions
     */
    private function getPermissionUpdateTemplate(string $locale): string
    {
        switch ($locale) {
            case 'en':
                return '<!-- Template from database: permission_update en -->';
            case 'nl': 
                return '<!-- Template from database: permission_update nl -->';
            case 'de':
                return '<!-- Template from database: permission_update de -->';
            default: // fr
                return '<!-- Template from database: permission_update fr -->';
        }
    }
}