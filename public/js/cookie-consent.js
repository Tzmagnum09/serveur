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
        
        // Animation d'entrée plus fluide
        cookieModal.style.transition = 'opacity 0.5s ease';
        setTimeout(() => {
            cookieModal.style.opacity = '1';
        }, 100);
    }
    
    // Initialiser les tooltips Bootstrap si présents
    if (typeof bootstrap !== 'undefined' && typeof bootstrap.Tooltip !== 'undefined') {
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
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
            
            // Ajouter une classe pour l'animation
            necessaryBtn.classList.add('btn-clicked');
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
            
            // Mettre à jour les checkboxes
            if (preferenceCheckbox) preferenceCheckbox.checked = true;
            if (statisticsCheckbox) statisticsCheckbox.checked = true;
            if (marketingCheckbox) marketingCheckbox.checked = true;
            
            // Fermer le modal
            if (cookieModal) {
                const modalInstance = bootstrap.Modal.getInstance(cookieModal);
                if (modalInstance) modalInstance.hide();
            }
            
            // Ajouter une classe pour l'animation
            acceptAllBtn.classList.add('btn-clicked');
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
            
            // Feedback visuel
            savePreferencesBtn.innerHTML = '<i class="fas fa-check me-2"></i>' + savePreferencesBtn.innerHTML;
            setTimeout(() => {
                savePreferencesBtn.innerHTML = savePreferencesBtn.innerHTML.replace('<i class="fas fa-check me-2"></i>', '');
            }, 2000);
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
        
        // Ajouter un message de confirmation
        showConfirmationMessage(preferences);
    }
    
    // Fonction pour afficher un message de confirmation
    function showConfirmationMessage(preferences) {
        // Créer un élément pour le message
        const messageElement = document.createElement('div');
        messageElement.className = 'alert alert-success alert-dismissible fade show position-fixed bottom-0 end-0 m-3';
        messageElement.style.zIndex = '9999';
        messageElement.innerHTML = `
            <strong>Préférences enregistrées!</strong> 
            Vos préférences de cookies ont été mises à jour.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        `;
        
        // Ajouter au body
        document.body.appendChild(messageElement);
        
        // Supprimer après 5 secondes
        setTimeout(() => {
            if (messageElement.parentNode) {
                messageElement.parentNode.removeChild(messageElement);
            }
        }, 5000);
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
            
            // Exemple de code pour Google Analytics (décommentez si nécessaire)
            /*
            if (typeof ga === 'undefined') {
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
                
                ga('create', 'UA-XXXXXXXX-X', 'auto');
                ga('send', 'pageview');
            }
            */
        }
        
        // Exemple : activer Facebook Pixel si marketing = true
        if (preferences.marketing) {
            // Code pour activer Facebook Pixel
            console.log('Marketing activé');
            
            // Exemple de code pour Facebook Pixel (décommentez si nécessaire)
            /*
            if (typeof fbq === 'undefined') {
                !function(f,b,e,v,n,t,s)
                {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
                fbq('init', 'XXXXXXXXXXXXXXXXX');
                fbq('track', 'PageView');
            }
            */
        }
    }
    
    // Si le consentement existe, charger les préférences
    if (hasConsent) {
        try {
            const preferences = JSON.parse(hasConsent);
            toggleScripts(preferences);
            
            // Pré-remplir les cases à cocher si le modal est ouvert
            loadPreferences();
        } catch (e) {
            console.error('Erreur lors du chargement des préférences:', e);
        }
    }
    
    // Initialiser les onglets dans le modal si nécessaire
    if (cookieModal) {
        const tabs = cookieModal.querySelectorAll('.nav-link');
        tabs.forEach(tab => {
            tab.addEventListener('click', function(e) {
                e.preventDefault();
                // Retirer la classe active de tous les onglets
                tabs.forEach(t => t.classList.remove('active'));
                // Ajouter la classe active à l'onglet cliqué
                this.classList.add('active');
                
                // Afficher le contenu correspondant
                const target = this.getAttribute('data-bs-target');
                const targetElement = document.querySelector(target);
                
                // Masquer tous les contenus
                document.querySelectorAll('.tab-pane').forEach(pane => {
                    pane.classList.remove('show', 'active');
                });
                
                // Afficher le contenu cible
                targetElement.classList.add('show', 'active');
            });
        });
    }
});