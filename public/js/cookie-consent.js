// Gestionnaire pour les cookies
document.addEventListener('DOMContentLoaded', function() {
    // Éléments du DOM
    const cookieModal = document.getElementById('cookie-modal');
    const cookieSettingsLink = document.getElementById('cookie-settings-link');
    
    // Boutons du modal
    const necessaryBtn = document.getElementById('necessary-cookies-btn');
    const acceptAllBtn = document.getElementById('accept-all-cookies-btn');
    const savePreferencesBtn = document.getElementById('save-preferences-btn');
    
    // Checkboxes des préférences
    const preferenceCheckbox = document.getElementById('cookie-preference');
    const statisticsCheckbox = document.getElementById('cookie-statistics');
    const marketingCheckbox = document.getElementById('cookie-marketing');
    
    // Sélecteurs de langue
    const modalLanguageSelector = document.getElementById('modal-language-selector');
    
    // Vérifier si le consentement aux cookies existe déjà
    const hasConsent = getCookie('cookieConsent');
    
    // Afficher le modal si aucun consentement n'existe
    if (!hasConsent && cookieModal) {
        const bsModal = new bootstrap.Modal(cookieModal);
        bsModal.show();
    }
    
    // Gestionnaire pour accepter uniquement les cookies nécessaires
    if (necessaryBtn) {
        necessaryBtn.addEventListener('click', function() {
            // Accepter uniquement les cookies nécessaires
            setConsent({
                necessary: true,
                preferences: false,
                statistics: false,
                marketing: false
            });
            
            // Fermer le modal
            if (cookieModal) {
                const modalInstance = bootstrap.Modal.getInstance(cookieModal);
                if (modalInstance) modalInstance.hide();
            }
        });
    }
    
    // Gestionnaire pour accepter tous les cookies
    if (acceptAllBtn) {
        acceptAllBtn.addEventListener('click', function() {
            // Accepter tous les cookies
            setConsent({
                necessary: true,
                preferences: true,
                statistics: true,
                marketing: true
            });
            
            // Fermer le modal
            if (cookieModal) {
                const modalInstance = bootstrap.Modal.getInstance(cookieModal);
                if (modalInstance) modalInstance.hide();
            }
        });
    }
    
    // Gestionnaire pour le lien dans le footer
    if (cookieSettingsLink) {
        cookieSettingsLink.addEventListener('click', function(e) {
            e.preventDefault();
            if (cookieModal) {
                const bsModal = new bootstrap.Modal(cookieModal);
                bsModal.show();
                
                // Charger les préférences actuelles
                loadPreferences();
            }
        });
    }
    
    // Gestionnaire pour sauvegarder les préférences
    if (savePreferencesBtn) {
        savePreferencesBtn.addEventListener('click', function() {
            // Récupérer les préférences
            const preferences = {
                necessary: true, // Toujours true
                preferences: preferenceCheckbox ? preferenceCheckbox.checked : false,
                statistics: statisticsCheckbox ? statisticsCheckbox.checked : false,
                marketing: marketingCheckbox ? marketingCheckbox.checked : false
            };
            
            // Sauvegarder les préférences
            setConsent(preferences);
            
            // Fermer le modal
            if (cookieModal) {
                const modalInstance = bootstrap.Modal.getInstance(cookieModal);
                if (modalInstance) modalInstance.hide();
            }
        });
    }
    
    // Gestionnaire pour le sélecteur de langue
    if (modalLanguageSelector) {
        modalLanguageSelector.addEventListener('change', function() {
            window.location.href = '/change-locale/' + this.value;
        });
    }
    
    // Fonction pour charger les préférences depuis les cookies
    function loadPreferences() {
        const consentCookie = getCookie('cookieConsent');
        if (consentCookie) {
            try {
                const preferences = JSON.parse(consentCookie);
                if (preferenceCheckbox) preferenceCheckbox.checked = preferences.preferences || false;
                if (statisticsCheckbox) statisticsCheckbox.checked = preferences.statistics || false;
                if (marketingCheckbox) marketingCheckbox.checked = preferences.marketing || false;
            } catch (e) {
                console.error('Erreur lors du chargement des préférences:', e);
            }
        }
    }
    
    // Fonction pour définir le consentement
    function setConsent(preferences) {
        // Créer un cookie qui expire dans 6 mois
        const expiryDate = new Date();
        expiryDate.setMonth(expiryDate.getMonth() + 6);
        
        // Sauvegarder les préférences dans un cookie
        document.cookie = 'cookieConsent=' + JSON.stringify(preferences) + 
                        '; expires=' + expiryDate.toUTCString() + 
                        '; path=/; SameSite=Lax';
        
        // Envoyer les préférences au serveur (facultatif)
        fetch('/api/save-cookie-consent', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(preferences),
        })
        .catch(error => {
            console.error('Erreur lors de l\'enregistrement des préférences:', error);
        });
        
        // Activer/désactiver les scripts en fonction des préférences
        toggleScripts(preferences);
    }
    
    // Fonction pour récupérer un cookie par son nom
    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
        return null;
    }
    
    // Fonction pour activer/désactiver les scripts en fonction des préférences
    function toggleScripts(preferences) {
        // Exemple : activer Google Analytics si statistics = true
        if (preferences.statistics) {
            // Code pour activer Google Analytics
            console.log('Statistiques activées');
        }
        
        // Exemple : activer Facebook Pixel si marketing = true
        if (preferences.marketing) {
            // Code pour activer Facebook Pixel
            console.log('Marketing activé');
        }
    }
    
    // Si le consentement existe, charger les préférences
    if (hasConsent) {
        try {
            const preferences = JSON.parse(hasConsent);
            toggleScripts(preferences);
        } catch (e) {
            console.error('Erreur lors du chargement des préférences:', e);
        }
    }
});