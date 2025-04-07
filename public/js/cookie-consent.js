/**
 * Système de gestion du consentement aux cookies avec support multilingue
 */
document.addEventListener('DOMContentLoaded', function() {
    // Vérifier si l'utilisateur a déjà fait un choix
    const hasConsent = localStorage.getItem('cookieConsent');
    
    if (!hasConsent) {
        // Afficher la bannière principale si aucun choix n'a été fait
        showCookieBanner();
    }
    
    // Gestionnaire pour le bouton "Personnaliser"
    document.addEventListener('click', function(e) {
        if (e.target && e.target.id === 'customize-cookies-btn') {
            showCookiePreferences();
        }
    });
    
    // Gestionnaire pour le bouton "Uniquement nécessaire"
    document.addEventListener('click', function(e) {
        if (e.target && (e.target.id === 'necessary-cookies-btn' || 
                        (e.target.classList.contains('close-preferences') && 
                         e.target.classList.contains('btn-cookie-necessary')))) {
            saveCookieConsent({
                necessary: true,
                preferences: false,
                statistics: false,
                marketing: false
            });
            hideCookieBanner();
            hideCookiePreferences();
        }
    });
    
    // Gestionnaire pour le bouton "Autoriser et continuer"
    document.addEventListener('click', function(e) {
        if (e.target && e.target.id === 'accept-all-cookies-btn') {
            saveCookieConsent({
                necessary: true,
                preferences: true,
                statistics: true,
                marketing: true
            });
            hideCookieBanner();
        }
    });
    
    // Gestionnaire pour le bouton "Enregistrer les préférences"
    document.addEventListener('click', function(e) {
        if (e.target && e.target.id === 'save-preferences-btn') {
            const preferenceConsent = document.getElementById('cookie-preference').checked;
            const statisticsConsent = document.getElementById('cookie-statistics').checked;
            const marketingConsent = document.getElementById('cookie-marketing').checked;
            
            saveCookieConsent({
                necessary: true, // Toujours nécessaire
                preferences: preferenceConsent,
                statistics: statisticsConsent,
                marketing: marketingConsent
            });
            
            hideCookiePreferences();
            hideCookieBanner();
        }
    });
    
    // Gestionnaire pour le bouton de fermeture des préférences (X)
    document.addEventListener('click', function(e) {
        if (e.target && e.target.classList.contains('btn-close') && 
            e.target.classList.contains('close-preferences')) {
            hideCookiePreferences();
        }
    });

    // Gestionnaire pour le lien des paramètres de cookies dans le footer
    document.addEventListener('click', function(e) {
        if (e.target && e.target.id === 'cookie-settings-link') {
            e.preventDefault();
            openCookiePreferences();
        }
    });

    // Gestionnaire pour le changement de langue dans les cookies
    document.addEventListener('change', function(e) {
        if (e.target && (e.target.id === 'cookie-language-selector' || e.target.id === 'modal-language-selector')) {
            const locale = e.target.value;
            
            // Synchroniser les deux sélecteurs
            if (e.target.id === 'cookie-language-selector') {
                const modalSelector = document.getElementById('modal-language-selector');
                if (modalSelector) {
                    modalSelector.value = locale;
                }
            } else {
                const bannerSelector = document.getElementById('cookie-language-selector');
                if (bannerSelector) {
                    bannerSelector.value = locale;
                }
            }
            
            changeLanguageCookies(locale);
        }
    });

    // Initialiser les cases à cocher si un consentement existe déjà
    if (hasConsent) {
        const consent = getCookieConsent();
        
        // Si on ouvre les préférences ultérieurement
        const preferenceCheckbox = document.getElementById('cookie-preference');
        const statisticsCheckbox = document.getElementById('cookie-statistics');
        const marketingCheckbox = document.getElementById('cookie-marketing');
        
        if (preferenceCheckbox && consent.preferences !== undefined) {
            preferenceCheckbox.checked = consent.preferences;
        }
        
        if (statisticsCheckbox && consent.statistics !== undefined) {
            statisticsCheckbox.checked = consent.statistics;
        }
        
        if (marketingCheckbox && consent.marketing !== undefined) {
            marketingCheckbox.checked = consent.marketing;
        }
    }
});

/**
 * Affiche la bannière principale de consentement aux cookies
 */
function showCookieBanner() {
    const cookieBanner = document.getElementById('cookie-banner');
    if (cookieBanner) {
        cookieBanner.classList.remove('d-none');
    }
}

/**
 * Cache la bannière principale de consentement aux cookies
 */
function hideCookieBanner() {
    const cookieBanner = document.getElementById('cookie-banner');
    if (cookieBanner) {
        cookieBanner.classList.add('d-none');
    }
}

/**
 * Affiche la fenêtre modale des préférences de cookies
 */
function showCookiePreferences() {
    const preferences = document.getElementById('cookie-preferences-modal');
    if (preferences) {
        // Initialiser les checkboxes avec les valeurs actuelles (si disponibles)
        const consent = getCookieConsent();
        if (consent) {
            const preferenceCheckbox = document.getElementById('cookie-preference');
            const statisticsCheckbox = document.getElementById('cookie-statistics');
            const marketingCheckbox = document.getElementById('cookie-marketing');
            
            if (preferenceCheckbox) preferenceCheckbox.checked = consent.preferences;
            if (statisticsCheckbox) statisticsCheckbox.checked = consent.statistics;
            if (marketingCheckbox) marketingCheckbox.checked = consent.marketing;
        }
        
        // Afficher la fenêtre modale
        const modal = new bootstrap.Modal(preferences);
        modal.show();
    }
}

/**
 * Cache la fenêtre modale des préférences de cookies
 */
function hideCookiePreferences() {
    const preferences = document.getElementById('cookie-preferences-modal');
    if (preferences) {
        const modal = bootstrap.Modal.getInstance(preferences);
        if (modal) {
            modal.hide();
        }
    }
}

/**
 * Sauvegarde les préférences de consentement aux cookies
 */
function saveCookieConsent(consent) {
    // Enregistrer le consentement dans localStorage
    localStorage.setItem('cookieConsent', JSON.stringify(consent));
    localStorage.setItem('cookieConsentDate', new Date().toISOString());
    
    // Activer/désactiver les scripts en fonction des consentements
    applyConsentPreferences(consent);
    
    // Envoyer les données au serveur (si nécessaire)
    sendConsentToServer(consent);
}

/**
 * Récupère les préférences de consentement aux cookies
 */
function getCookieConsent() {
    const consent = localStorage.getItem('cookieConsent');
    return consent ? JSON.parse(consent) : null;
}

/**
 * Applique les préférences de consentement (active/désactive les scripts)
 */
function applyConsentPreferences(consent) {
    // Exemple: si l'utilisateur a accepté les cookies statistiques, charger Google Analytics
    if (consent.statistics) {
        loadGoogleAnalytics();
    }
    
    // Exemple: si l'utilisateur a accepté les cookies marketing, charger des scripts publicitaires
    if (consent.marketing) {
        loadMarketingScripts();
    }
}

/**
 * Charge Google Analytics si l'utilisateur a donné son consentement
 */
function loadGoogleAnalytics() {
    // Votre code pour charger Google Analytics
    // Exemple:
    /*
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    
    ga('create', 'UA-XXXXXXXXX-X', 'auto');
    ga('send', 'pageview');
    */
}

/**
 * Charge les scripts marketing si l'utilisateur a donné son consentement
 */
function loadMarketingScripts() {
    // Votre code pour charger les scripts marketing
    // Exemple:
    /*
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', 'XXXXXXXXXXXXXXX');
    fbq('track', 'PageView');
    */
}

/**
 * Envoie les préférences de consentement au serveur
 */
function sendConsentToServer(consent) {
    // Envoyer les données au serveur via une requête AJAX
    // Cette fonction est optionnelle, mais peut être utile pour suivre les consentements
    fetch('/cookie-consent', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        },
        body: JSON.stringify({
            consent: consent,
            date: new Date().toISOString()
        })
    }).catch(error => {
        console.error('Erreur lors de l\'envoi du consentement au serveur:', error);
    });
}

/**
 * Change la langue de l'interface des cookies et redirige vers la version localisée
 */
function changeLanguageCookies(locale) {
    // Sauvegarder la préférence de langue
    if (locale) {
        // Rediriger vers la version localisée du site
        window.location.href = '/change-locale/' + locale;
    }
}

/**
 * Fonction pour ouvrir les préférences de cookies depuis n'importe où sur le site
 * (peut être appelée depuis un lien dans le footer par exemple)
 */
function openCookiePreferences() {
    showCookiePreferences();
}