/**
 * Script JavaScript pour l'éditeur de templates d'emails
 */
document.addEventListener('DOMContentLoaded', function() {
    // Initialiser l'éditeur Summernote avec configuration pour centrage
    initSummernoteEditor();
    
    // Initialiser les boutons de variables
    initVariableButtons();
    
    // Initialiser le sélecteur de langue
    initLocaleSelector();
    
    // Initialiser le prévisualisateur
    initPreviewModal();
});

/**
 * Initialise l'éditeur Summernote avec les options appropriées
 */
function initSummernoteEditor() {
    const defaultTemplate = `
        <div class="email-template-container">
            <h1>Nouveau template d'email</h1>
        </div>
        <div class="email-content">
            <p>Bonjour,</p>
            <p>Contenu de l'email...</p>
            <p style="text-align: center;">
                <a href="#" class="email-button">Bouton d'action</a>
            </p>
            <p>Si le bouton ne fonctionne pas, vous pouvez utiliser le lien suivant :</p>
            <p>https://dmqode.be/example-link</p>
            <p>Cordialement,<br>L'équipe Dmqode.be</p>
        </div>
        <div class="email-footer">
            <p>Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
        </div>
    `;

    $('.html-editor').summernote({
        height: 400,
        placeholder: 'Contenu HTML du template d\'email...',
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ],
        styleTags: [
            'p', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
        ],
        callbacks: {
            onImageUpload: function(files) {
                alert('L\'upload d\'images n\'est pas autorisé dans les templates d\'emails.');
            },
            onInit: function() {
                // Appliquer l'attribut data-centered à l'éditeur
                const $editable = $(this).find('.note-editable');
                $editable.attr('data-centered', 'true');
                
                // Si l'éditeur est vide, ajouter un template par défaut
                if (window.location.href.includes('new') && $editable.html().trim() === '') {
                    $editable.html(defaultTemplate);
                }
            }
        }
    });

    // Ajouter des styles personnalisés pour l'éditeur
    const $noteEditable = $('.note-editable');
    if ($noteEditable.length > 0) {
        $noteEditable.css({
            'font-family': 'Arial, sans-serif',
            'line-height': '1.6',
            'color': '#333'
        });
    }
}

/**
 * Initialise les boutons d'insertion de variables
 */
function initVariableButtons() {
    $('.variable-btn').on('click', function() {
        const variable = $(this).data('variable');
        $('.html-editor').summernote('insertText', '{{ ' + variable + ' }}');
    });
}

/**
 * Initialise le sélecteur de langue avec redirection
 */
function initLocaleSelector() {
    const localeSelector = document.getElementById('locale-selector');
    if (localeSelector) {
        localeSelector.addEventListener('change', function() {
            const selectedLocale = this.value;
            const urlPattern = document.getElementById('locale-url-pattern');
            
            if (urlPattern) {
                const redirectUrl = urlPattern.dataset.urlPattern.replace('__locale__', selectedLocale);
                window.location.href = redirectUrl;
            }
        });
    }
}

/**
 * Initialise la modal de prévisualisation
 */
function initPreviewModal() {
    const previewBtn = document.getElementById('previewBtn');
    if (previewBtn) {
        const previewModal = new bootstrap.Modal(document.getElementById('previewModal'));
        const previewFrame = document.getElementById('previewFrame');
        const previewLoading = document.getElementById('previewLoading');
        
        previewBtn.addEventListener('click', function() {
            // Réinitialiser l'iframe et afficher le loader
            if (previewFrame) previewFrame.src = '';
            if (previewFrame) previewFrame.style.display = 'none';
            if (previewLoading) previewLoading.style.display = 'block';
            
            // Afficher la modal
            previewModal.show();
            
            // Récupérer l'URL de prévisualisation
            const previewUrl = previewBtn.dataset.previewUrl;
            
            // Charger l'URL dans l'iframe après un court délai
            setTimeout(function() {
                if (previewFrame) {
                    previewFrame.src = previewUrl;
                    
                    // Quand l'iframe est chargée, masquer le loader et afficher l'iframe
                    previewFrame.onload = function() {
                        if (previewLoading) previewLoading.style.display = 'none';
                        previewFrame.style.display = 'block';
                    };
                }
            }, 500);
        });
    }
}