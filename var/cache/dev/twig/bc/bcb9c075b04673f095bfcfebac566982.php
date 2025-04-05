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
        </style>
        
        ";
        // line 200
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 201
        yield "    </head>
    <body>
        ";
        // line 203
        yield from $this->loadTemplate("partials/navbar.html.twig", "base.html.twig", 203)->unwrap()->yield($context);
        // line 204
        yield "        
        <div class=\"content-wrapper\">
            ";
        // line 206
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 207
        yield "            
            <div class=\"main-content p-4 ";
        // line 208
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
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 209, $this->source); })()), "flashes", [], "any", false, false, false, 209));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 210
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 211
                yield "                        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                            ";
                // line 212
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        yield "                
                ";
        // line 218
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 219
        yield "            </div>
        </div>
        
        ";
        // line 223
        yield "        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js\"></script>
        
        ";
        // line 226
        yield "        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
        
        ";
        // line 229
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
        // line 250
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 251
        yield "        
        <!-- Fenêtre modale des conditions d'utilisation -->
        <div class=\"modal fade\" id=\"termsModal\" tabindex=\"-1\" aria-labelledby=\"termsModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog modal-dialog-scrollable\">
            <div class=\"modal-content\">
              <div class=\"modal-header text-center\">
                <h5 class=\"modal-title w-100\" id=\"termsModalLabel\">Conditions d'utilisation</h5>
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
                <button type=\"button\" class=\"btn btn-gradient\" data-bs-dismiss=\"modal\">Fermer</button>
              </div>
            </div>
          </div>
        </div>
        
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

    // line 200
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

    // line 206
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

    // line 218
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

    // line 250
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
        return array (  474 => 250,  458 => 218,  442 => 206,  426 => 200,  409 => 6,  367 => 251,  365 => 250,  342 => 229,  338 => 226,  334 => 223,  329 => 219,  327 => 218,  324 => 217,  318 => 216,  308 => 212,  303 => 211,  298 => 210,  294 => 209,  282 => 208,  279 => 207,  277 => 206,  273 => 204,  271 => 203,  267 => 201,  265 => 200,  79 => 16,  75 => 13,  71 => 10,  66 => 7,  60 => 6,  53 => 2,  50 => 1,);
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
        </style>
        
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
              <div class=\"modal-header text-center\">
                <h5 class=\"modal-title w-100\" id=\"termsModalLabel\">Conditions d'utilisation</h5>
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
                <button type=\"button\" class=\"btn btn-gradient\" data-bs-dismiss=\"modal\">Fermer</button>
              </div>
            </div>
          </div>
        </div>
        
    </body>
</html>", "base.html.twig", "/var/www/serveur/templates/base.html.twig");
    }
}
