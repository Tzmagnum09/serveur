/**
 * Système de gestion du consentement aux cookies
 * À placer dans public/js/cookie-consent.js
 */
document.addEventListener('DOMContentLoaded', function() {
    // Initialisation du système de consentement aux cookies
    initCookieConsent();
});

/**
 * Initialise le système de consentement aux cookies
 */
function initCookieConsent() {
    // Vérifier si l'utilisateur a déjà fait un choix
    const hasConsent = getCookie('cookieConsent');
    
    if (!hasConsent) {
        // Afficher la bannière principale si aucun choix n'a été fait
        showCookieBanner();
    }
    
    // Attacher les gestionnaires d'événements
    attachEventHandlers();
}

/**
 * Attache les gestionnaires d'événements pour les boutons et les liens
 */
function attachEventHandlers() {
    // Bouton "Personnaliser" dans la bannière
    const customizeBtn = document.getElementById('cookie-customize-btn');
    if (customizeBtn) {
        customizeBtn.addEventListener('click', showCookieModal);
    }
    
    // Bouton "Uniquement nécessaire" dans la bannière
    const necessaryBtn = document.getElementById('cookie-necessary-btn');
    if (necessaryBtn) {
        necessaryBtn.addEventListener('click', function() {
            saveConsent({
                necessary: true,
                preferences: false,
                statistics: false,
                marketing: false
            });
            hideCookieBanner();
        });
    }
    
    // Bouton "Autoriser et continuer" dans la bannière
    const acceptAllBtn = document.getElementById('cookie-accept-all-btn');
    if (acceptAllBtn) {
        acceptAllBtn.addEventListener('click', function() {
            saveConsent({
                necessary: true,
                preferences: true,
                statistics: true,
                marketing: true
            });
            hideCookieBanner();
        });
    }
    
    // Gestionnaire pour le bouton de fermeture de la modale
    const closeModalBtn = document.getElementById('cookie-modal-close');
    if (closeModalBtn) {
        closeModalBtn.addEventListener('click', hideCookieModal);
    }
    
    // Gestionnaire pour le changement d'onglets
    const tabs = document.querySelectorAll('.cookie-tab');
    tabs.forEach(function(tab) {
        tab.addEventListener('click', function() {
            const tabId = this.getAttribute('data-tab');
            switchTab(tabId);
        });
    });
    
    // Bouton "Uniquement nécessaire" dans la modale
    const modalNecessaryBtn = document.getElementById('cookie-modal-necessary-btn');
    if (modalNecessaryBtn) {
        modalNecessaryBtn.addEventListener('click', function() {
            saveConsent({
                necessary: true,
                preferences: false,
                statistics: false,
                marketing: false
            });
            hideCookieModal();
            hideCookieBanner();
        });
    }
    
    // Bouton "Enregistrer les préférences" dans la modale
    const savePreferencesBtn = document.getElementById('cookie-save-preferences-btn');
    if (savePreferencesBtn) {
        savePreferencesBtn.addEventListener('click', function() {
            const preferencesEnabled = document.getElementById('cookie-preferences-checkbox').checked;
            const statisticsEnabled = document.getElementById('cookie-statistics-checkbox').checked;
            const marketingEnabled = document.getElementById('cookie-marketing-checkbox').checked;
            
            saveConsent({
                necessary: true, // Toujours nécessaire
                preferences: preferencesEnabled,
                statistics: statisticsEnabled,
                marketing: marketingEnabled
            });
            
            hideCookieModal();
            hideCookieBanner();
        });
    }
    
    // Lien des paramètres de cookies dans le footer
    const settingsLink = document.getElementById('cookie-settings-link');
    if (settingsLink) {
        settingsLink.addEventListener('click', function(e) {
            e.preventDefault();
            showCookieModal();
        });
    }
    
    // Bouton "Autoriser tout" dans la modale
    const modalAcceptAllBtn = document.getElementById('cookie-modal-accept-all-btn');
    if (modalAcceptAllBtn) {
        modalAcceptAllBtn.addEventListener('click', function() {
            // Cocher toutes les cases
            document.getElementById('cookie-preferences-checkbox').checked = true;
            document.getElementById('cookie-statistics-checkbox').checked = true;
            document.getElementById('cookie-marketing-checkbox').checked = true;
            
            saveConsent({
                necessary: true,
                preferences: true,
                statistics: true,
                marketing: true
            });
            
            hideCookieModal();
            hideCookieBanner();
        });
    }
    
    // Gestionnaire pour le sélecteur de langue
    const languageSelectors = document.querySelectorAll('.cookie-language-selector');
    languageSelectors.forEach(function(selector) {
        selector.addEventListener('change', function() {
            const locale = this.value;
            changeLanguage(locale);
        });
    });
    
    // Initialiser les cases à cocher avec les préférences enregistrées
    initCheckboxes();
}

/**
 * Affiche la bannière de consentement aux cookies
 */
function showCookieBanner() {
    const banner = document.getElementById('cookie-banner');
    if (banner) {
        banner.style.display = 'block';
    }
}

/**
 * Cache la bannière de consentement aux cookies
 */
function hideCookieBanner() {
    const banner = document.getElementById('cookie-banner');
    if (banner) {
        banner.style.display = 'none';
    }
}

/**
 * Affiche la fenêtre modale des préférences de cookies
 */
function showCookieModal() {
    const modal = document.getElementById('cookie-modal');
    if (modal) {
        modal.style.display = 'block';
        
        // S'assurer que l'onglet "Vue d'ensemble" est actif par défaut
        switchTab('overview');
        
        // Initialiser les cases à cocher
        initCheckboxes();
    }
}

/**
 * Cache la fenêtre modale des préférences de cookies
 */
function hideCookieModal() {
    const modal = document.getElementById('cookie-modal');
    if (modal) {
        modal.style.display = 'none';
    }
}

/**
 * Change l'onglet actif dans la fenêtre modale
 * @param {string} tabId - Identifiant de l'onglet à afficher
 */
function switchTab(tabId) {
    // Désactiver tous les onglets et contenus
    document.querySelectorAll('.cookie-tab').forEach(function(tab) {
        tab.classList.remove('active');
    });
    
    document.querySelectorAll('.cookie-tab-content').forEach(function(content) {
        content.classList.remove('active');
    });
    
    // Activer l'onglet et le contenu sélectionnés
    document.querySelector(`.cookie-tab[data-tab="${tabId}"]`).classList.add('active');
    document.getElementById(`cookie-tab-${tabId}`).classList.add('active');
}

/**
 * Initialise les cases à cocher avec les préférences enregistrées
 */
function initCheckboxes() {
    const consent = getConsent();
    
    if (consent) {
        const preferencesCheckbox = document.getElementById('cookie-preferences-checkbox');
        const statisticsCheckbox = document.getElementById('cookie-statistics-checkbox');
        const marketingCheckbox = document.getElementById('cookie-marketing-checkbox');
        
        if (preferencesCheckbox) preferencesCheckbox.checked = consent.preferences;
        if (statisticsCheckbox) statisticsCheckbox.checked = consent.statistics;
        if (marketingCheckbox) marketingCheckbox.checked = consent.marketing;
    }
}

/**
 * Enregistre les préférences de consentement aux cookies
 * @param {Object} consent - Objet contenant les préférences de consentement
 */
function saveConsent(consent) {
    // Créer un objet avec les préférences et la date
    const consentData = {
        preferences: consent.preferences,
        statistics: consent.statistics,
        marketing: consent.marketing,
        timestamp: new Date().toISOString()
    };
    
    // Enregistrer dans un cookie qui expire dans 6 mois
    setCookie('cookieConsent', JSON.stringify(consentData), 180);
    
    // Appliquer les consentements
    applyConsent(consent);
    
    // Envoyer les données au serveur (optionnel)
    // sendConsentToServer(consent);
}

/**
 * Récupère les préférences de consentement aux cookies
 * @returns {Object|null} - Objet contenant les préférences de consentement ou null
 */
function getConsent() {
    const consentCookie = getCookie('cookieConsent');
    
    if (consentCookie) {
        try {
            return JSON.parse(consentCookie);
        } catch (e) {
            return null;
        }
    }
    
    return null;
}

/**
 * Applique les préférences de consentement (charge les scripts appropriés)
 * @param {Object} consent - Objet contenant les préférences de consentement
 */
function applyConsent(consent) {
    // Scripts pour les cookies de préférences
    if (consent.preferences) {
        // Exemple : chargement de scripts pour les préférences
        // loadPreferencesScripts();
    }
    
    // Scripts pour les cookies statistiques
    if (consent.statistics) {
        // Exemple : chargement de Google Analytics
        // loadGoogleAnalytics();
    }
    
    // Scripts pour les cookies marketing
    if (consent.marketing) {
        // Exemple : chargement des scripts de marketing
        // loadMarketingScripts();
    }
}

/**
 * Change la langue de l'interface
 * @param {string} locale - Code de la langue (fr, en, nl, de)
 */
function changeLanguage(locale) {
    // Rediriger vers la version localisée
    window.location.href = '/change-locale/' + locale;
}

/**
 * Définit un cookie
 * @param {string} name - Nom du cookie
 * @param {string} value - Valeur du cookie
 * @param {number} days - Durée de vie du cookie en jours
 */
function setCookie(name, value, days) {
    let expires = '';
    
    if (days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = '; expires=' + date.toUTCString();
    }
    
    document.cookie = name + '=' + encodeURIComponent(value) + expires + '; path=/; SameSite=Lax';
}

/**
 * Récupère la valeur d'un cookie
 * @param {string} name - Nom du cookie
 * @returns {string|null} - Valeur du cookie ou null
 */
function getCookie(name) {
    const nameEQ = name + '=';
    const cookies = document.cookie.split(';');
    
    for (let i = 0; i < cookies.length; i++) {
        let cookie = cookies[i];
        while (cookie.charAt(0) === ' ') {
            cookie = cookie.substring(1, cookie.length);
        }
        
        if (cookie.indexOf(nameEQ) === 0) {
            return decodeURIComponent(cookie.substring(nameEQ.length, cookie.length));
        }
    }
    
    return null;
}

/**
 * Supprime un cookie
 * @param {string} name - Nom du cookie
 */
function deleteCookie(name) {
    setCookie(name, '', -1);
}

/**
 * Envoie les préférences de consentement au serveur (optionnel)
 * @param {Object} consent - Objet contenant les préférences de consentement
 */
function sendConsentToServer(consent) {
    fetch('/cookie-consent', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        },
        body: JSON.stringify({
            consent: consent,
            timestamp: new Date().toISOString()
        })
    }).catch(error => {
        console.error('Erreur lors de l\'envoi du consentement:', error);
    });
}