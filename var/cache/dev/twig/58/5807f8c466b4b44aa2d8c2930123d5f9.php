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

/* cookie/cookie_preferences.html.twig */
class __TwigTemplate_78222d5ec1580baaef595a8acef67943 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cookie/cookie_preferences.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cookie/cookie_preferences.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.preferences.title"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container my-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10\">
            <div class=\"card shadow\">
                <div class=\"card-header\">
                    <h1 class=\"h3 mb-0\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.preferences.title"), "html", null, true);
        yield "</h1>
                </div>
                <div class=\"card-body\">
                    <p class=\"lead\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.preferences.intro"), "html", null, true);
        yield "</p>
                    
                    <div class=\"cookie-consent-container mt-4\">
                        ";
        // line 17
        yield from $this->loadTemplate("partials/cookie-popup.html.twig", "cookie/cookie_preferences.html.twig", 17)->unwrap()->yield($context);
        // line 18
        yield "                    </div>
                    
                    <script>
                        // Afficher automatiquement la modale des cookies au chargement de la page
                        document.addEventListener('DOMContentLoaded', function() {
                            const modal = document.getElementById('cookie-modal');
                            const overlay = document.getElementById('cookie-modal-overlay');
                            
                            if (modal && overlay) {
                                modal.style.display = 'block';
                                overlay.style.display = 'block';
                                
                                // S'assurer que l'onglet \"Vue d'ensemble\" est actif par défaut
                                switchTab('overview');
                                
                                // Initialiser les cases à cocher
                                initCheckboxes();
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "cookie/cookie_preferences.html.twig";
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
        return array (  106 => 18,  104 => 17,  98 => 14,  92 => 11,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'cookie.preferences.title'|trans }}{% endblock %}

{% block body %}
<div class=\"container my-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10\">
            <div class=\"card shadow\">
                <div class=\"card-header\">
                    <h1 class=\"h3 mb-0\">{{ 'cookie.preferences.title'|trans }}</h1>
                </div>
                <div class=\"card-body\">
                    <p class=\"lead\">{{ 'cookie.preferences.intro'|trans }}</p>
                    
                    <div class=\"cookie-consent-container mt-4\">
                        {% include 'partials/cookie-popup.html.twig' %}
                    </div>
                    
                    <script>
                        // Afficher automatiquement la modale des cookies au chargement de la page
                        document.addEventListener('DOMContentLoaded', function() {
                            const modal = document.getElementById('cookie-modal');
                            const overlay = document.getElementById('cookie-modal-overlay');
                            
                            if (modal && overlay) {
                                modal.style.display = 'block';
                                overlay.style.display = 'block';
                                
                                // S'assurer que l'onglet \"Vue d'ensemble\" est actif par défaut
                                switchTab('overview');
                                
                                // Initialiser les cases à cocher
                                initCheckboxes();
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "cookie/cookie_preferences.html.twig", "/var/www/serveur/templates/cookie/cookie_preferences.html.twig");
    }
}
