<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* base.html.twig */
class __TwigTemplate_d5a18e0355fd876876985f12fa4656bf extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "locale", [], "any", false, false, false, 2), "html", null, true);
        yield "\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("site.name"), "html", null, true);
        yield "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.png"), "html", null, true);
        yield "\">
        
        ";
        // line 10
        yield "        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css\">
        
        ";
        // line 13
        yield "        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
        
        ";
        // line 16
        yield "        <style>
            :root {
                --primary-gradient: linear-gradient(135deg, #8e44ad, #3498db);
                --sidebar-width: 280px;
            }
            
            body {
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            
            /* Navbar styles */
            .navbar-custom {
                background: var(--primary-gradient);
                padding: 0.8rem 1rem;
            }
            
            .navbar-custom .navbar-brand img {
                max-height: 50px;
            }
            
            .navbar-custom .nav-link {
                color: white !important;
                font-weight: 500;
                margin: 0 0.5rem;
                transition: all 0.3s;
                position: relative;
            }
            
            .navbar-custom .nav-link:hover {
                transform: translateY(-2px);
            }
            
            .navbar-custom .nav-link:after {
                content: '';
                position: absolute;
                width: 0;
                height: 2px;
                bottom: 0;
                left: 0;
                background-color: white;
                transition: width 0.3s;
            }
            
            .navbar-custom .nav-link:hover:after {
                width: 100%;
            }
            
            /* Main content */
            .content-wrapper {
                flex: 1;
                display: flex;
            }
            
            /* Sidebar styles */
            .sidebar {
                width: var(--sidebar-width);
                background: var(--primary-gradient);
                color: white;
                padding: 2rem 1rem;
                min-height: 100%;
            }
            
            .sidebar .nav-link {
                color: white;
                border-radius: 5px;
                margin-bottom: 0.5rem;
                transition: all 0.3s;
            }
            
            .sidebar .nav-link:hover, 
            .sidebar .nav-link.active {
                background-color: rgba(255, 255, 255, 0.2);
                transform: translateX(5px);
            }
            
            /* Button styles */
            .btn-gradient {
                background: var(--primary-gradient);
                border: none;
                color: white;
                transition: all 0.3s;
            }
            
            .btn-gradient:hover {
                transform: translateY(-2px);
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                color: white;
            }
            
            /* Card styles */
            .card {
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
                transition: all 0.3s;
            }
            
            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            }
            
            .card-header {
                background: var(--primary-gradient);
                color: white;
                font-weight: 500;
                padding: 1rem 1.5rem;
            }
            
            /* Form styles */
            .form-control:focus {
                border-color: #8e44ad;
                box-shadow: 0 0 0 0.25rem rgba(142, 68, 173, 0.25);
            }
            
            /* Mobile adjustments */
            @media (max-width: 768px) {
                .sidebar {
                    position: fixed;
                    top: 0;
                    left: -280px;
                    height: 100%;
                    z-index: 1000;
                    transition: left 0.3s;
                }
                
                .sidebar.show {
                    left: 0;
                }
                
                .sidebar-toggle {
                    display: block !important;
                }
                
                .main-content {
                    width: 100% !important;
                }
            }
            
            /* Dashboard stats */
            .stats-card {
                border-radius: 10px;
                padding: 1.5rem;
                background: white;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
                transition: all 0.3s;
                height: 100%;
            }
            
            .stats-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            }
            
            .stats-icon {
                width: 60px;
                height: 60px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                background: var(--primary-gradient);
                color: white;
                font-size: 1.5rem;
                margin-bottom: 1rem;
            }
            
            .stats-title {
                color: #777;
                font-size: 0.9rem;
                font-weight: 500;
                margin-bottom: 0.5rem;
            }
            
            .stats-value {
                font-size: 1.8rem;
                font-weight: 700;
                color: #333;
            }
            
            /* Styles pour les modals */
            .modal-header {
                background: var(--primary-gradient);
                color: white;
                border-bottom: none;
            }
            
            .modal-title {
                font-weight: 500;
            }
            
            .modal-header .btn-close {
                color: white;
                filter: brightness(0) invert(1);
                opacity: 0.8;
            }
            
            /* Styles spécifiques au modal de cookies */
            #cookie-modal .nav-tabs .nav-link {
                color: #495057;
                transition: color 0.3s, border-color 0.3s;
            }
            
            #cookie-modal .nav-tabs .nav-link.active {
                font-weight: 600;
                border-bottom-color: #8e44ad;
                color: #8e44ad;
            }
            
            #cookie-modal .form-check-input:checked {
                background-color: #8e44ad;
                border-color: #8e44ad;
            }
            
            /* Style pour le lien de paramètres dans le footer */
            .cookie-settings-link {
                color: #6c757d;
                text-decoration: none;
                font-size: 0.8rem;
                transition: all 0.3s;
            }
            
            .cookie-settings-link:hover {
                text-decoration: underline;
                color: #8e44ad;
                transform: translateY(-2px);
            }
        </style>

        ";
        // line 249
        yield "        <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/cookie-consent.css"), "html", null, true);
        yield "\">
        
        ";
        // line 251
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 252
        yield "    </head>
    <body>
        ";
        // line 254
        yield from $this->loadTemplate("partials/navbar.html.twig", "base.html.twig", 254)->unwrap()->yield($context);
        // line 255
        yield "        
        <div class=\"content-wrapper\">
            ";
        // line 257
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 258
        yield "            
            <div class=\"main-content p-4 ";
        // line 259
        if ( !Twig\Extension\CoreExtension::testEmpty(        $this->unwrap()->renderBlock("sidebar", $context, $blocks))) {
            yield "ps-4";
        } else {
            yield "container py-5";
        }
        yield "\" style=\"";
        if ( !Twig\Extension\CoreExtension::testEmpty(        $this->unwrap()->renderBlock("sidebar", $context, $blocks))) {
            yield "width: calc(100% - var(--sidebar-width))";
        }
        yield "\">
                ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 260, $this->source); })()), "flashes", [], "any", false, false, false, 260));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 261
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 262
                yield "                        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                            ";
                // line 263
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 267
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
        yield "                
                ";
        // line 269
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 270
        yield "            </div>
        </div>

        <!-- Lien pour les paramètres de cookies dans le footer -->
        <div class=\"text-center mt-3 mb-2\">
            <a href=\"#\" id=\"cookie-settings-link\" class=\"cookie-settings-link\">";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.footer.settings"), "html", null, true);
        yield "</a>
        </div>
        
        ";
        // line 279
        yield "        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js\"></script>
        
        ";
        // line 282
        yield "        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
        
        ";
        // line 285
        yield "        <script>
            // Mobile sidebar toggle
            document.addEventListener('DOMContentLoaded', function() {
                const sidebarToggle = document.querySelector('.sidebar-toggle');
                if (sidebarToggle) {
                    sidebarToggle.addEventListener('click', function() {
                        document.querySelector('.sidebar').classList.toggle('show');
                    });
                }
                
                // Address autocomplete
                // This is just a placeholder. In a real project, you would
                // integrate with a proper address service like Google Places API
                // or other geocoding service.
                \$('.address-autocomplete').on('focus', function() {
                    // This would be where you initialize the autocomplete
                    console.log('Address autocomplete field focused');
                });
            });
        </script>
        
        ";
        // line 306
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 307
        yield "        
        <!-- Fenêtre modale des conditions d'utilisation -->
        <div class=\"modal fade\" id=\"termsModal\" tabindex=\"-1\" aria-labelledby=\"termsModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog modal-dialog-scrollable\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"termsModalLabel\">";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.title"), "html", null, true);
        yield "</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
              </div>
              <div class=\"modal-body\">
                <p>Les présentes conditions d'utilisation sont d'application au site Dmqode.be. Par l'utilisation de ce site, vous acceptez les présentes conditions d'utilisation et vous vous engagez à les respecter.</p>
                <ol>
                  <li>Données enregistrées automatiquement : Ce site web peut collecter des données à caractère non personnel tel que le type de navigateur ou l'adresse IP, le programme d'exploitation que vous utilisez, les pages que vous visitez sur le site web ou le nom de domaine du site web à partir duquel vous êtes arrivé sur le site web ou par lequel vous le quittez.
                  Durant une visite sur ce site web, des 'cookies' peuvent également être placés automatiquement sur le disque dur de votre ordinateur. Ces données nous aident à améliorer le site web. Avec la plupart des navigateurs, vous pouvez supprimer les cookies de votre disque dur, rejeter des cookies ou recevoir un avertissement avant qu'un cookie ne soit installé.</li>
                  <li>Informations personnelles : Les données à caractère personnel que vous communiquez à Dmqode.be sont collectées et traitées par Dmqode.be,.
                  Ce traitement a pour but de conclure un éventuel contrat de confidencialité entre l'utilisateur et Dmqode.be.
                  Dmqode.be peut également utiliser ces données pour la création de services demandés par vous-même ou encore des campagnes d'information et de promotion.
                  Conformément à la loi du 8 décembre 1992 relative à la protection de la vie privée, il vous est loisible de demander ces données et, au besoin, de les faire corriger. Vous pouvez également consulter le registre central auprès de la Commission pour la protection de la vie privée.</li>
                  <li>Droits intellectuels : Dmqode.be apporte le plus grand soin à la création et à l'entretien de son site web. Les textes, dessins, photos, films, lay-out, images, data, noms, dénominations commerciales et noms de domaine, marques, logos et autres éléments de quelque nature que ce soit de ce site sont protégés par des droits intellectuels et sont la propriété de Dmqode.be. L'utilisation, la copie, la traduction, l'adaptation, la modification, la diffusion de tout ou partie de ce site, sous quelque forme que ce soit est prohibée, sauf accord écrit préalable du titulaire de ces droits. Toute infraction à de tels droits intellectuels peut donner lieu à des poursuites civiles et pénales.</li>
                  <li>Informations sur le site web : Les informations présentées sur ou par le biais de ce site web peuvent contenir des imperfections. Dmqode.be décline également toute responsabilité au titre d'éventuels virus qui se présenteraient sur ce site web.
                  Dmqode.be se réserve expressément le droit de modifier à tout moment les informations présentées sur le site.</li>
                  <li>Hyperliens : Ce site web peut contenir des hyperliens vers des sites web de tiers. Dmqode.be n'a aucune autorité sur le contenu de ces sites web et n'est en aucun cas responsable de leur contenu.
                  L'insertion de liens par Dmqode.be n'implique en aucune manière une approbation implicite du contenu de ces sites web.</li>
                  <li>Tribunal compétent et loi applicable : Tout différend relatif au site Dmqode.be sera exclusivement régi par le droit belge. Les cours et tribunaux compétent seront seuls compétents en cas de différend.</li>
                </ol>
              </div>
              <div class=\"modal-footer justify-content-end\">
                <button type=\"button\" class=\"btn btn-gradient\" data-bs-dismiss=\"modal\">";
        // line 334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.close"), "html", null, true);
        yield "</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal des préférences de cookies -->
        <div class=\"modal fade\" id=\"cookie-modal\" tabindex=\"-1\" aria-labelledby=\"cookie-modal-label\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <div class=\"d-flex align-items-center\">
                            <h5 class=\"modal-title\" id=\"cookie-modal-label\">";
        // line 346
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.title"), "html", null, true);
        yield "</h5>
                            <select id=\"modal-language-selector\" class=\"form-select form-select-sm ms-3\" style=\"width: 120px;\">
                                <option value=\"fr\" ";
        // line 348
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 348, $this->source); })()), "request", [], "any", false, false, false, 348), "locale", [], "any", false, false, false, 348) == "fr")) {
            yield "selected";
        }
        yield ">Français</option>
                                <option value=\"nl\" ";
        // line 349
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 349, $this->source); })()), "request", [], "any", false, false, false, 349), "locale", [], "any", false, false, false, 349) == "nl")) {
            yield "selected";
        }
        yield ">Nederlands</option>
                                <option value=\"en\" ";
        // line 350
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 350, $this->source); })()), "request", [], "any", false, false, false, 350), "locale", [], "any", false, false, false, 350) == "en")) {
            yield "selected";
        }
        yield ">English</option>
                                <option value=\"de\" ";
        // line 351
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 351, $this->source); })()), "request", [], "any", false, false, false, 351), "locale", [], "any", false, false, false, 351) == "de")) {
            yield "selected";
        }
        yield ">Deutsch</option>
                            </select>
                        </div>
                        ";
        // line 354
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 354, $this->source); })()), "request", [], "any", false, false, false, 354), "cookies", [], "any", false, false, false, 354), "get", ["cookieConsent"], "method", false, false, false, 354)) {
            // line 355
            yield "                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        ";
        }
        // line 357
        yield "                    </div>
                    <div class=\"modal-body\">
                        <div class=\"mb-3\">
                            <p>";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.content"), "html", null, true);
        yield "</p>
                        </div>
                        
                        <ul class=\"nav nav-tabs\" id=\"cookie-tabs\" role=\"tablist\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link active\" id=\"overview-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#overview\" type=\"button\" role=\"tab\" aria-controls=\"overview\" aria-selected=\"true\">";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.tab.overview"), "html", null, true);
        yield "</button>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link\" id=\"details-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#details\" type=\"button\" role=\"tab\" aria-controls=\"details\" aria-selected=\"false\">";
        // line 368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.tab.details"), "html", null, true);
        yield "</button>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link\" id=\"about-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#about\" type=\"button\" role=\"tab\" aria-controls=\"about\" aria-selected=\"false\">";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.tab.about"), "html", null, true);
        yield "</button>
                            </li>
                        </ul>
                        <div class=\"tab-content\" id=\"cookie-tabs-content\">
                            <!-- Onglet Vue d'ensemble -->
                            <div class=\"tab-pane fade show active\" id=\"overview\" role=\"tabpanel\" aria-labelledby=\"overview-tab\">
                                <div class=\"mt-3\">
                                    <div class=\"d-flex justify-content-between align-items-start mb-3\">
                                        <div>
                                            <h6>";
        // line 380
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.necessary.title"), "html", null, true);
        yield "</h6>
                                            <p class=\"mb-0 text-muted small\">";
        // line 381
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.necessary.description"), "html", null, true);
        yield "</p>
                                        </div>
                                        <div class=\"form-check form-switch\">
                                            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"cookie-necessary\" checked disabled>
                                        </div>
                                    </div>
                                    
                                    <div class=\"d-flex justify-content-between align-items-start mb-3\">
                                        <div>
                                            <h6>";
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.preferences.title"), "html", null, true);
        yield "</h6>
                                            <p class=\"mb-0 text-muted small\">";
        // line 391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.preferences.description"), "html", null, true);
        yield "</p>
                                        </div>
                                        <div class=\"form-check form-switch\">
                                            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"cookie-preference\">
                                        </div>
                                    </div>
                                    
                                    <div class=\"d-flex justify-content-between align-items-start mb-3\">
                                        <div>
                                            <h6>";
        // line 400
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.statistics.title"), "html", null, true);
        yield "</h6>
                                            <p class=\"mb-0 text-muted small\">";
        // line 401
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.statistics.description"), "html", null, true);
        yield "</p>
                                        </div>
                                        <div class=\"form-check form-switch\">
                                            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"cookie-statistics\">
                                        </div>
                                    </div>
                                    
                                    <div class=\"d-flex justify-content-between align-items-start mb-3\">
                                        <div>
                                            <h6>";
        // line 410
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.marketing.title"), "html", null, true);
        yield "</h6>
                                            <p class=\"mb-0 text-muted small\">";
        // line 411
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.marketing.description"), "html", null, true);
        yield "</p>
                                        </div>
                                        <div class=\"form-check form-switch\">
                                            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"cookie-marketing\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Onglet Détails -->
                            <div class=\"tab-pane fade\" id=\"details\" role=\"tabpanel\" aria-labelledby=\"details-tab\">
                                <div class=\"accordion mt-3\" id=\"cookie-details-accordion\">
                                    <!-- Cookies nécessaires -->
                                    <div class=\"accordion-item\">
                                        <h2 class=\"accordion-header\">
                                            <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-necessary\" aria-expanded=\"true\">
                                                ";
        // line 427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.title"), "html", null, true);
        yield "
                                            </button>
                                        </h2>
                                        <div id=\"collapse-necessary\" class=\"accordion-collapse collapse show\" data-bs-parent=\"#cookie-details-accordion\">
                                            <div class=\"accordion-body\">
                                                <p>";
        // line 432
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.description"), "html", null, true);
        yield "</p>
                                                <div class=\"table-responsive\">
                                                    <table class=\"table table-bordered\">
                                                        <thead>
                                                            <tr>
                                                                <th>";
        // line 437
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.name"), "html", null, true);
        yield "</th>
                                                                <th>";
        // line 438
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.provider"), "html", null, true);
        yield "</th>
                                                                <th>";
        // line 439
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.purpose"), "html", null, true);
        yield "</th>
                                                                <th>";
        // line 440
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.expiry"), "html", null, true);
        yield "</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>PHPSESSID</td>
                                                                <td>";
        // line 446
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 446, $this->source); })()), "request", [], "any", false, false, false, 446), "host", [], "any", false, false, false, 446), "html", null, true);
        yield "</td>
                                                                <td>";
        // line 447
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.session"), "html", null, true);
        yield "</td>
                                                                <td>";
        // line 448
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.session_end"), "html", null, true);
        yield "</td>
                                                            </tr>
                                                            <tr>
                                                                <td>cookieConsent</td>
                                                                <td>";
        // line 452
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 452, $this->source); })()), "request", [], "any", false, false, false, 452), "host", [], "any", false, false, false, 452), "html", null, true);
        yield "</td>
                                                                <td>";
        // line 453
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.consent"), "html", null, true);
        yield "</td>
                                                                <td>6 ";
        // line 454
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.month"), "html", null, true);
        yield "</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Cookies de préférences -->
                                    <div class=\"accordion-item\">
                                        <h2 class=\"accordion-header\">
                                            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-preferences\" aria-expanded=\"false\">
                                                ";
        // line 467
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.preferences.title"), "html", null, true);
        yield "
                                            </button>
                                        </h2>
                                        <div id=\"collapse-preferences\" class=\"accordion-collapse collapse\" data-bs-parent=\"#cookie-details-accordion\">
                                            <div class=\"accordion-body\">
                                                <p>";
        // line 472
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.preferences.description"), "html", null, true);
        yield "</p>
                                                <div class=\"table-responsive\">
                                                    <table class=\"table table-bordered\">
                                                        <thead>
                                                            <tr>
                                                                <th>";
        // line 477
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.name"), "html", null, true);
        yield "</th>
                                                                <th>";
        // line 478
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.provider"), "html", null, true);
        yield "</th>
                                                                <th>";
        // line 479
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.purpose"), "html", null, true);
        yield "</th>
                                                                <th>";
        // line 480
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.expiry"), "html", null, true);
        yield "</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>_locale</td>
                                                                <td>";
        // line 486
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 486, $this->source); })()), "request", [], "any", false, false, false, 486), "host", [], "any", false, false, false, 486), "html", null, true);
        yield "</td>
                                                                <td>";
        // line 487
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.preferences.language"), "html", null, true);
        yield "</td>
                                                                <td>1 ";
        // line 488
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.year"), "html", null, true);
        yield "</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Cookies statistiques -->
                                    <div class=\"accordion-item\">
                                        <h2 class=\"accordion-header\">
                                            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-statistics\" aria-expanded=\"false\">
                                                ";
        // line 501
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.statistics.title"), "html", null, true);
        yield "
                                            </button></h2>
                                        <div id=\"collapse-statistics\" class=\"accordion-collapse collapse\" data-bs-parent=\"#cookie-details-accordion\">
                                            <div class=\"accordion-body\">
                                                <p>";
        // line 505
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.statistics.description"), "html", null, true);
        yield "</p>
                                                <div class=\"table-responsive\">
                                                    <table class=\"table table-bordered\">
                                                        <thead>
                                                            <tr>
                                                                <th>";
        // line 510
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.name"), "html", null, true);
        yield "</th>
                                                                <th>";
        // line 511
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.provider"), "html", null, true);
        yield "</th>
                                                                <th>";
        // line 512
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.purpose"), "html", null, true);
        yield "</th>
                                                                <th>";
        // line 513
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.expiry"), "html", null, true);
        yield "</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>_ga</td>
                                                                <td>Google</td>
                                                                <td>";
        // line 520
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.statistics.analytics"), "html", null, true);
        yield "</td>
                                                                <td>2 ";
        // line 521
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.statistics.years"), "html", null, true);
        yield "</td>
                                                            </tr>
                                                            <tr>
                                                                <td>_gid</td>
                                                                <td>Google</td>
                                                                <td>";
        // line 526
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.statistics.user_id"), "html", null, true);
        yield "</td>
                                                                <td>24 ";
        // line 527
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.statistics.hours"), "html", null, true);
        yield "</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Cookies marketing -->
                                    <div class=\"accordion-item\">
                                        <h2 class=\"accordion-header\">
                                            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-marketing\" aria-expanded=\"false\">
                                                ";
        // line 540
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.marketing.title"), "html", null, true);
        yield "
                                            </button>
                                        </h2>
                                        <div id=\"collapse-marketing\" class=\"accordion-collapse collapse\" data-bs-parent=\"#cookie-details-accordion\">
                                            <div class=\"accordion-body\">
                                                <p>";
        // line 545
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.marketing.description"), "html", null, true);
        yield "</p>
                                                <div class=\"table-responsive\">
                                                    <table class=\"table table-bordered\">
                                                        <thead>
                                                            <tr>
                                                                <th>";
        // line 550
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.name"), "html", null, true);
        yield "</th>
                                                                <th>";
        // line 551
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.provider"), "html", null, true);
        yield "</th>
                                                                <th>";
        // line 552
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.purpose"), "html", null, true);
        yield "</th>
                                                                <th>";
        // line 553
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.expiry"), "html", null, true);
        yield "</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>_fbp</td>
                                                                <td>Facebook</td>
                                                                <td>";
        // line 560
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.marketing.facebook"), "html", null, true);
        yield "</td>
                                                                <td>3 ";
        // line 561
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.marketing.months"), "html", null, true);
        yield "</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Onglet À propos -->
                            <div class=\"tab-pane fade\" id=\"about\" role=\"tabpanel\" aria-labelledby=\"about-tab\">
                                <div class=\"mt-3\">
                                    <h5>";
        // line 575
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.what_are.title"), "html", null, true);
        yield "</h5>
                                    <p>";
        // line 576
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.what_are.description"), "html", null, true);
        yield "</p>
                                    
                                    <h5 class=\"mt-4\">";
        // line 578
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.how_used.title"), "html", null, true);
        yield "</h5>
                                    <p>";
        // line 579
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.how_used.description"), "html", null, true);
        yield "</p>
                                    
                                    <h5 class=\"mt-4\">";
        // line 581
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.how_manage.title"), "html", null, true);
        yield "</h5>
                                    <p>";
        // line 582
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.how_manage.description"), "html", null, true);
        yield "</p>
                                    
                                    <h5 class=\"mt-4\">";
        // line 584
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.more_info.title"), "html", null, true);
        yield "</h5>
                                    <p>
                                        ";
        // line 586
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.more_info.description"), "html", null, true);
        yield " 
                                        <a href=\"";
        // line 587
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_terms");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.more_info.terms_link"), "html", null, true);
        yield "</a>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        ";
        // line 594
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 594, $this->source); })()), "request", [], "any", false, false, false, 594), "cookies", [], "any", false, false, false, 594), "get", ["cookieConsent"], "method", false, false, false, 594)) {
            // line 595
            yield "                            <button type=\"button\" class=\"btn btn-outline-secondary\" id=\"necessary-cookies-btn\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.necessary_only"), "html", null, true);
            yield "</button>
                            <button type=\"button\" class=\"btn btn-gradient\" id=\"accept-all-cookies-btn\">";
            // line 596
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.accept_all"), "html", null, true);
            yield "</button>
                        ";
        }
        // line 598
        yield "                        <button type=\"button\" class=\"btn btn-gradient\" id=\"save-preferences-btn\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.save"), "html", null, true);
        yield "</button>
                    </div>
                </div>
            </div>
        </div>
        
        ";
        // line 605
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/cookie-consent.js"), "html", null, true);
        yield "\"></script>
    </body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Bienvenue";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 251
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 257
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 269
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 306
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1033 => 306,  1017 => 269,  1001 => 257,  985 => 251,  968 => 6,  956 => 605,  946 => 598,  941 => 596,  936 => 595,  934 => 594,  922 => 587,  918 => 586,  913 => 584,  908 => 582,  904 => 581,  899 => 579,  895 => 578,  890 => 576,  886 => 575,  869 => 561,  865 => 560,  855 => 553,  851 => 552,  847 => 551,  843 => 550,  835 => 545,  827 => 540,  811 => 527,  807 => 526,  799 => 521,  795 => 520,  785 => 513,  781 => 512,  777 => 511,  773 => 510,  765 => 505,  758 => 501,  742 => 488,  738 => 487,  734 => 486,  725 => 480,  721 => 479,  717 => 478,  713 => 477,  705 => 472,  697 => 467,  681 => 454,  677 => 453,  673 => 452,  666 => 448,  662 => 447,  658 => 446,  649 => 440,  645 => 439,  641 => 438,  637 => 437,  629 => 432,  621 => 427,  602 => 411,  598 => 410,  586 => 401,  582 => 400,  570 => 391,  566 => 390,  554 => 381,  550 => 380,  538 => 371,  532 => 368,  526 => 365,  518 => 360,  513 => 357,  509 => 355,  507 => 354,  499 => 351,  493 => 350,  487 => 349,  481 => 348,  476 => 346,  461 => 334,  437 => 313,  429 => 307,  427 => 306,  404 => 285,  400 => 282,  396 => 279,  390 => 275,  383 => 270,  381 => 269,  378 => 268,  372 => 267,  362 => 263,  357 => 262,  352 => 261,  348 => 260,  336 => 259,  333 => 258,  331 => 257,  327 => 255,  325 => 254,  321 => 252,  319 => 251,  313 => 249,  79 => 16,  75 => 13,  71 => 10,  66 => 7,  60 => 6,  53 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale }}\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>{% block title %}Bienvenue{% endblock %} - {{ 'site.name'|trans }}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('favicon.png') }}\">
        
        {# Bootstrap CSS #}
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css\">
        
        {# Font Awesome #}
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
        
        {# Custom CSS #}
        <style>
            :root {
                --primary-gradient: linear-gradient(135deg, #8e44ad, #3498db);
                --sidebar-width: 280px;
            }
            
            body {
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            
            /* Navbar styles */
            .navbar-custom {
                background: var(--primary-gradient);
                padding: 0.8rem 1rem;
            }
            
            .navbar-custom .navbar-brand img {
                max-height: 50px;
            }
            
            .navbar-custom .nav-link {
                color: white !important;
                font-weight: 500;
                margin: 0 0.5rem;
                transition: all 0.3s;
                position: relative;
            }
            
            .navbar-custom .nav-link:hover {
                transform: translateY(-2px);
            }
            
            .navbar-custom .nav-link:after {
                content: '';
                position: absolute;
                width: 0;
                height: 2px;
                bottom: 0;
                left: 0;
                background-color: white;
                transition: width 0.3s;
            }
            
            .navbar-custom .nav-link:hover:after {
                width: 100%;
            }
            
            /* Main content */
            .content-wrapper {
                flex: 1;
                display: flex;
            }
            
            /* Sidebar styles */
            .sidebar {
                width: var(--sidebar-width);
                background: var(--primary-gradient);
                color: white;
                padding: 2rem 1rem;
                min-height: 100%;
            }
            
            .sidebar .nav-link {
                color: white;
                border-radius: 5px;
                margin-bottom: 0.5rem;
                transition: all 0.3s;
            }
            
            .sidebar .nav-link:hover, 
            .sidebar .nav-link.active {
                background-color: rgba(255, 255, 255, 0.2);
                transform: translateX(5px);
            }
            
            /* Button styles */
            .btn-gradient {
                background: var(--primary-gradient);
                border: none;
                color: white;
                transition: all 0.3s;
            }
            
            .btn-gradient:hover {
                transform: translateY(-2px);
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                color: white;
            }
            
            /* Card styles */
            .card {
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
                transition: all 0.3s;
            }
            
            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            }
            
            .card-header {
                background: var(--primary-gradient);
                color: white;
                font-weight: 500;
                padding: 1rem 1.5rem;
            }
            
            /* Form styles */
            .form-control:focus {
                border-color: #8e44ad;
                box-shadow: 0 0 0 0.25rem rgba(142, 68, 173, 0.25);
            }
            
            /* Mobile adjustments */
            @media (max-width: 768px) {
                .sidebar {
                    position: fixed;
                    top: 0;
                    left: -280px;
                    height: 100%;
                    z-index: 1000;
                    transition: left 0.3s;
                }
                
                .sidebar.show {
                    left: 0;
                }
                
                .sidebar-toggle {
                    display: block !important;
                }
                
                .main-content {
                    width: 100% !important;
                }
            }
            
            /* Dashboard stats */
            .stats-card {
                border-radius: 10px;
                padding: 1.5rem;
                background: white;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
                transition: all 0.3s;
                height: 100%;
            }
            
            .stats-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            }
            
            .stats-icon {
                width: 60px;
                height: 60px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                background: var(--primary-gradient);
                color: white;
                font-size: 1.5rem;
                margin-bottom: 1rem;
            }
            
            .stats-title {
                color: #777;
                font-size: 0.9rem;
                font-weight: 500;
                margin-bottom: 0.5rem;
            }
            
            .stats-value {
                font-size: 1.8rem;
                font-weight: 700;
                color: #333;
            }
            
            /* Styles pour les modals */
            .modal-header {
                background: var(--primary-gradient);
                color: white;
                border-bottom: none;
            }
            
            .modal-title {
                font-weight: 500;
            }
            
            .modal-header .btn-close {
                color: white;
                filter: brightness(0) invert(1);
                opacity: 0.8;
            }
            
            /* Styles spécifiques au modal de cookies */
            #cookie-modal .nav-tabs .nav-link {
                color: #495057;
                transition: color 0.3s, border-color 0.3s;
            }
            
            #cookie-modal .nav-tabs .nav-link.active {
                font-weight: 600;
                border-bottom-color: #8e44ad;
                color: #8e44ad;
            }
            
            #cookie-modal .form-check-input:checked {
                background-color: #8e44ad;
                border-color: #8e44ad;
            }
            
            /* Style pour le lien de paramètres dans le footer */
            .cookie-settings-link {
                color: #6c757d;
                text-decoration: none;
                font-size: 0.8rem;
                transition: all 0.3s;
            }
            
            .cookie-settings-link:hover {
                text-decoration: underline;
                color: #8e44ad;
                transform: translateY(-2px);
            }
        </style>

        {# Custom CSS Cookie Consent #}
        <link rel=\"stylesheet\" href=\"{{ asset('css/cookie-consent.css') }}\">
        
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% include 'partials/navbar.html.twig' %}
        
        <div class=\"content-wrapper\">
            {% block sidebar %}{% endblock %}
            
            <div class=\"main-content p-4 {% if block('sidebar') is not empty %}ps-4{% else %}container py-5{% endif %}\" style=\"{% if block('sidebar') is not empty %}width: calc(100% - var(--sidebar-width)){% endif %}\">
                {% for label, messages in app.flashes %}
                    {% for message in messages %}
                        <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                            {{ message }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    {% endfor %}
                {% endfor %}
                
                {% block body %}{% endblock %}
            </div>
        </div>

        <!-- Lien pour les paramètres de cookies dans le footer -->
        <div class=\"text-center mt-3 mb-2\">
            <a href=\"#\" id=\"cookie-settings-link\" class=\"cookie-settings-link\">{{ 'cookie.footer.settings'|trans }}</a>
        </div>
        
        {# Bootstrap JS with Popper #}
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js\"></script>
        
        {# jQuery #}
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
        
        {# Custom JS #}
        <script>
            // Mobile sidebar toggle
            document.addEventListener('DOMContentLoaded', function() {
                const sidebarToggle = document.querySelector('.sidebar-toggle');
                if (sidebarToggle) {
                    sidebarToggle.addEventListener('click', function() {
                        document.querySelector('.sidebar').classList.toggle('show');
                    });
                }
                
                // Address autocomplete
                // This is just a placeholder. In a real project, you would
                // integrate with a proper address service like Google Places API
                // or other geocoding service.
                \$('.address-autocomplete').on('focus', function() {
                    // This would be where you initialize the autocomplete
                    console.log('Address autocomplete field focused');
                });
            });
        </script>
        
        {% block javascripts %}{% endblock %}
        
        <!-- Fenêtre modale des conditions d'utilisation -->
        <div class=\"modal fade\" id=\"termsModal\" tabindex=\"-1\" aria-labelledby=\"termsModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog modal-dialog-scrollable\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"termsModalLabel\">{{ 'terms.title'|trans }}</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
              </div>
              <div class=\"modal-body\">
                <p>Les présentes conditions d'utilisation sont d'application au site Dmqode.be. Par l'utilisation de ce site, vous acceptez les présentes conditions d'utilisation et vous vous engagez à les respecter.</p>
                <ol>
                  <li>Données enregistrées automatiquement : Ce site web peut collecter des données à caractère non personnel tel que le type de navigateur ou l'adresse IP, le programme d'exploitation que vous utilisez, les pages que vous visitez sur le site web ou le nom de domaine du site web à partir duquel vous êtes arrivé sur le site web ou par lequel vous le quittez.
                  Durant une visite sur ce site web, des 'cookies' peuvent également être placés automatiquement sur le disque dur de votre ordinateur. Ces données nous aident à améliorer le site web. Avec la plupart des navigateurs, vous pouvez supprimer les cookies de votre disque dur, rejeter des cookies ou recevoir un avertissement avant qu'un cookie ne soit installé.</li>
                  <li>Informations personnelles : Les données à caractère personnel que vous communiquez à Dmqode.be sont collectées et traitées par Dmqode.be,.
                  Ce traitement a pour but de conclure un éventuel contrat de confidencialité entre l'utilisateur et Dmqode.be.
                  Dmqode.be peut également utiliser ces données pour la création de services demandés par vous-même ou encore des campagnes d'information et de promotion.
                  Conformément à la loi du 8 décembre 1992 relative à la protection de la vie privée, il vous est loisible de demander ces données et, au besoin, de les faire corriger. Vous pouvez également consulter le registre central auprès de la Commission pour la protection de la vie privée.</li>
                  <li>Droits intellectuels : Dmqode.be apporte le plus grand soin à la création et à l'entretien de son site web. Les textes, dessins, photos, films, lay-out, images, data, noms, dénominations commerciales et noms de domaine, marques, logos et autres éléments de quelque nature que ce soit de ce site sont protégés par des droits intellectuels et sont la propriété de Dmqode.be. L'utilisation, la copie, la traduction, l'adaptation, la modification, la diffusion de tout ou partie de ce site, sous quelque forme que ce soit est prohibée, sauf accord écrit préalable du titulaire de ces droits. Toute infraction à de tels droits intellectuels peut donner lieu à des poursuites civiles et pénales.</li>
                  <li>Informations sur le site web : Les informations présentées sur ou par le biais de ce site web peuvent contenir des imperfections. Dmqode.be décline également toute responsabilité au titre d'éventuels virus qui se présenteraient sur ce site web.
                  Dmqode.be se réserve expressément le droit de modifier à tout moment les informations présentées sur le site.</li>
                  <li>Hyperliens : Ce site web peut contenir des hyperliens vers des sites web de tiers. Dmqode.be n'a aucune autorité sur le contenu de ces sites web et n'est en aucun cas responsable de leur contenu.
                  L'insertion de liens par Dmqode.be n'implique en aucune manière une approbation implicite du contenu de ces sites web.</li>
                  <li>Tribunal compétent et loi applicable : Tout différend relatif au site Dmqode.be sera exclusivement régi par le droit belge. Les cours et tribunaux compétent seront seuls compétents en cas de différend.</li>
                </ol>
              </div>
              <div class=\"modal-footer justify-content-end\">
                <button type=\"button\" class=\"btn btn-gradient\" data-bs-dismiss=\"modal\">{{ 'registration.form.close'|trans }}</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal des préférences de cookies -->
        <div class=\"modal fade\" id=\"cookie-modal\" tabindex=\"-1\" aria-labelledby=\"cookie-modal-label\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <div class=\"d-flex align-items-center\">
                            <h5 class=\"modal-title\" id=\"cookie-modal-label\">{{ 'cookie.modal.title'|trans }}</h5>
                            <select id=\"modal-language-selector\" class=\"form-select form-select-sm ms-3\" style=\"width: 120px;\">
                                <option value=\"fr\" {% if app.request.locale == 'fr' %}selected{% endif %}>Français</option>
                                <option value=\"nl\" {% if app.request.locale == 'nl' %}selected{% endif %}>Nederlands</option>
                                <option value=\"en\" {% if app.request.locale == 'en' %}selected{% endif %}>English</option>
                                <option value=\"de\" {% if app.request.locale == 'de' %}selected{% endif %}>Deutsch</option>
                            </select>
                        </div>
                        {% if app.request.cookies.get('cookieConsent') %}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        {% endif %}
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"mb-3\">
                            <p>{{ 'cookie.banner.content'|trans }}</p>
                        </div>
                        
                        <ul class=\"nav nav-tabs\" id=\"cookie-tabs\" role=\"tablist\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link active\" id=\"overview-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#overview\" type=\"button\" role=\"tab\" aria-controls=\"overview\" aria-selected=\"true\">{{ 'cookie.modal.tab.overview'|trans }}</button>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link\" id=\"details-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#details\" type=\"button\" role=\"tab\" aria-controls=\"details\" aria-selected=\"false\">{{ 'cookie.modal.tab.details'|trans }}</button>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <button class=\"nav-link\" id=\"about-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#about\" type=\"button\" role=\"tab\" aria-controls=\"about\" aria-selected=\"false\">{{ 'cookie.modal.tab.about'|trans }}</button>
                            </li>
                        </ul>
                        <div class=\"tab-content\" id=\"cookie-tabs-content\">
                            <!-- Onglet Vue d'ensemble -->
                            <div class=\"tab-pane fade show active\" id=\"overview\" role=\"tabpanel\" aria-labelledby=\"overview-tab\">
                                <div class=\"mt-3\">
                                    <div class=\"d-flex justify-content-between align-items-start mb-3\">
                                        <div>
                                            <h6>{{ 'cookie.modal.overview.necessary.title'|trans }}</h6>
                                            <p class=\"mb-0 text-muted small\">{{ 'cookie.modal.overview.necessary.description'|trans }}</p>
                                        </div>
                                        <div class=\"form-check form-switch\">
                                            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"cookie-necessary\" checked disabled>
                                        </div>
                                    </div>
                                    
                                    <div class=\"d-flex justify-content-between align-items-start mb-3\">
                                        <div>
                                            <h6>{{ 'cookie.modal.overview.preferences.title'|trans }}</h6>
                                            <p class=\"mb-0 text-muted small\">{{ 'cookie.modal.overview.preferences.description'|trans }}</p>
                                        </div>
                                        <div class=\"form-check form-switch\">
                                            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"cookie-preference\">
                                        </div>
                                    </div>
                                    
                                    <div class=\"d-flex justify-content-between align-items-start mb-3\">
                                        <div>
                                            <h6>{{ 'cookie.modal.overview.statistics.title'|trans }}</h6>
                                            <p class=\"mb-0 text-muted small\">{{ 'cookie.modal.overview.statistics.description'|trans }}</p>
                                        </div>
                                        <div class=\"form-check form-switch\">
                                            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"cookie-statistics\">
                                        </div>
                                    </div>
                                    
                                    <div class=\"d-flex justify-content-between align-items-start mb-3\">
                                        <div>
                                            <h6>{{ 'cookie.modal.overview.marketing.title'|trans }}</h6>
                                            <p class=\"mb-0 text-muted small\">{{ 'cookie.modal.overview.marketing.description'|trans }}</p>
                                        </div>
                                        <div class=\"form-check form-switch\">
                                            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"cookie-marketing\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Onglet Détails -->
                            <div class=\"tab-pane fade\" id=\"details\" role=\"tabpanel\" aria-labelledby=\"details-tab\">
                                <div class=\"accordion mt-3\" id=\"cookie-details-accordion\">
                                    <!-- Cookies nécessaires -->
                                    <div class=\"accordion-item\">
                                        <h2 class=\"accordion-header\">
                                            <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-necessary\" aria-expanded=\"true\">
                                                {{ 'cookie.modal.details.necessary.title'|trans }}
                                            </button>
                                        </h2>
                                        <div id=\"collapse-necessary\" class=\"accordion-collapse collapse show\" data-bs-parent=\"#cookie-details-accordion\">
                                            <div class=\"accordion-body\">
                                                <p>{{ 'cookie.modal.details.necessary.description'|trans }}</p>
                                                <div class=\"table-responsive\">
                                                    <table class=\"table table-bordered\">
                                                        <thead>
                                                            <tr>
                                                                <th>{{ 'cookie.modal.details.table.name'|trans }}</th>
                                                                <th>{{ 'cookie.modal.details.table.provider'|trans }}</th>
                                                                <th>{{ 'cookie.modal.details.table.purpose'|trans }}</th>
                                                                <th>{{ 'cookie.modal.details.table.expiry'|trans }}</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>PHPSESSID</td>
                                                                <td>{{ app.request.host }}</td>
                                                                <td>{{ 'cookie.modal.details.necessary.session'|trans }}</td>
                                                                <td>{{ 'cookie.modal.details.necessary.session_end'|trans }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>cookieConsent</td>
                                                                <td>{{ app.request.host }}</td>
                                                                <td>{{ 'cookie.modal.details.necessary.consent'|trans }}</td>
                                                                <td>6 {{ 'cookie.modal.details.necessary.month'|trans }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Cookies de préférences -->
                                    <div class=\"accordion-item\">
                                        <h2 class=\"accordion-header\">
                                            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-preferences\" aria-expanded=\"false\">
                                                {{ 'cookie.modal.details.preferences.title'|trans }}
                                            </button>
                                        </h2>
                                        <div id=\"collapse-preferences\" class=\"accordion-collapse collapse\" data-bs-parent=\"#cookie-details-accordion\">
                                            <div class=\"accordion-body\">
                                                <p>{{ 'cookie.modal.details.preferences.description'|trans }}</p>
                                                <div class=\"table-responsive\">
                                                    <table class=\"table table-bordered\">
                                                        <thead>
                                                            <tr>
                                                                <th>{{ 'cookie.modal.details.table.name'|trans }}</th>
                                                                <th>{{ 'cookie.modal.details.table.provider'|trans }}</th>
                                                                <th>{{ 'cookie.modal.details.table.purpose'|trans }}</th>
                                                                <th>{{ 'cookie.modal.details.table.expiry'|trans }}</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>_locale</td>
                                                                <td>{{ app.request.host }}</td>
                                                                <td>{{ 'cookie.modal.details.preferences.language'|trans }}</td>
                                                                <td>1 {{ 'cookie.modal.details.necessary.year'|trans }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Cookies statistiques -->
                                    <div class=\"accordion-item\">
                                        <h2 class=\"accordion-header\">
                                            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-statistics\" aria-expanded=\"false\">
                                                {{ 'cookie.modal.details.statistics.title'|trans }}
                                            </button></h2>
                                        <div id=\"collapse-statistics\" class=\"accordion-collapse collapse\" data-bs-parent=\"#cookie-details-accordion\">
                                            <div class=\"accordion-body\">
                                                <p>{{ 'cookie.modal.details.statistics.description'|trans }}</p>
                                                <div class=\"table-responsive\">
                                                    <table class=\"table table-bordered\">
                                                        <thead>
                                                            <tr>
                                                                <th>{{ 'cookie.modal.details.table.name'|trans }}</th>
                                                                <th>{{ 'cookie.modal.details.table.provider'|trans }}</th>
                                                                <th>{{ 'cookie.modal.details.table.purpose'|trans }}</th>
                                                                <th>{{ 'cookie.modal.details.table.expiry'|trans }}</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>_ga</td>
                                                                <td>Google</td>
                                                                <td>{{ 'cookie.modal.details.statistics.analytics'|trans }}</td>
                                                                <td>2 {{ 'cookie.modal.details.statistics.years'|trans }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>_gid</td>
                                                                <td>Google</td>
                                                                <td>{{ 'cookie.modal.details.statistics.user_id'|trans }}</td>
                                                                <td>24 {{ 'cookie.modal.details.statistics.hours'|trans }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Cookies marketing -->
                                    <div class=\"accordion-item\">
                                        <h2 class=\"accordion-header\">
                                            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-marketing\" aria-expanded=\"false\">
                                                {{ 'cookie.modal.details.marketing.title'|trans }}
                                            </button>
                                        </h2>
                                        <div id=\"collapse-marketing\" class=\"accordion-collapse collapse\" data-bs-parent=\"#cookie-details-accordion\">
                                            <div class=\"accordion-body\">
                                                <p>{{ 'cookie.modal.details.marketing.description'|trans }}</p>
                                                <div class=\"table-responsive\">
                                                    <table class=\"table table-bordered\">
                                                        <thead>
                                                            <tr>
                                                                <th>{{ 'cookie.modal.details.table.name'|trans }}</th>
                                                                <th>{{ 'cookie.modal.details.table.provider'|trans }}</th>
                                                                <th>{{ 'cookie.modal.details.table.purpose'|trans }}</th>
                                                                <th>{{ 'cookie.modal.details.table.expiry'|trans }}</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>_fbp</td>
                                                                <td>Facebook</td>
                                                                <td>{{ 'cookie.modal.details.marketing.facebook'|trans }}</td>
                                                                <td>3 {{ 'cookie.modal.details.marketing.months'|trans }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Onglet À propos -->
                            <div class=\"tab-pane fade\" id=\"about\" role=\"tabpanel\" aria-labelledby=\"about-tab\">
                                <div class=\"mt-3\">
                                    <h5>{{ 'cookie.modal.about.what_are.title'|trans }}</h5>
                                    <p>{{ 'cookie.modal.about.what_are.description'|trans }}</p>
                                    
                                    <h5 class=\"mt-4\">{{ 'cookie.modal.about.how_used.title'|trans }}</h5>
                                    <p>{{ 'cookie.modal.about.how_used.description'|trans }}</p>
                                    
                                    <h5 class=\"mt-4\">{{ 'cookie.modal.about.how_manage.title'|trans }}</h5>
                                    <p>{{ 'cookie.modal.about.how_manage.description'|trans }}</p>
                                    
                                    <h5 class=\"mt-4\">{{ 'cookie.modal.about.more_info.title'|trans }}</h5>
                                    <p>
                                        {{ 'cookie.modal.about.more_info.description'|trans }} 
                                        <a href=\"{{ path('app_terms') }}\">{{ 'cookie.modal.about.more_info.terms_link'|trans }}</a>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        {% if not app.request.cookies.get('cookieConsent') %}
                            <button type=\"button\" class=\"btn btn-outline-secondary\" id=\"necessary-cookies-btn\">{{ 'cookie.modal.necessary_only'|trans }}</button>
                            <button type=\"button\" class=\"btn btn-gradient\" id=\"accept-all-cookies-btn\">{{ 'cookie.modal.accept_all'|trans }}</button>
                        {% endif %}
                        <button type=\"button\" class=\"btn btn-gradient\" id=\"save-preferences-btn\">{{ 'cookie.modal.save'|trans }}</button>
                    </div>
                </div>
            </div>
        </div>
        
        {# Cookie Consent JS #}
        <script src=\"{{ asset('js/cookie-consent.js') }}\"></script>
    </body>
</html>", "base.html.twig", "/var/www/serveur/templates/base.html.twig");
    }
}
