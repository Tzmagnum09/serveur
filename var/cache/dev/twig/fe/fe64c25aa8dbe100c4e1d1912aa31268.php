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

/* terms/index.html.twig */
class __TwigTemplate_3f7f44c1165a531ac00c15a39219054a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "terms/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "terms/index.html.twig", 1);
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

        yield "Conditions d'utilisation";
        
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
        yield "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card shadow-lg mb-5\">
                <div class=\"card-header\">
                    <h1 class=\"h3 mb-0\">Conditions d'utilisation</h1>
                </div>
                <div class=\"card-body\">
                    <h2 class=\"h4 mb-3\">1. Introduction</h2>
                    <p>
                        Bienvenue sur DMQode.be. Les présentes conditions d'utilisation régissent votre utilisation de notre site web et de nos services. En vous inscrivant sur notre site, vous acceptez d'être lié par ces conditions. Veuillez les lire attentivement.
                    </p>

                    <h2 class=\"h4 mb-3 mt-4\">2. Définitions</h2>
                    <p>
                        <strong>\"Service\"</strong> désigne le site web DMQode.be<br>
                        <strong>\"Utilisateur\"</strong> désigne toute personne qui accède au Service et crée un compte<br>
                        <strong>\"Compte\"</strong> désigne l'accès personnalisé au Service
                    </p>

                    <h2 class=\"h4 mb-3 mt-4\">3. Inscription et compte</h2>
                    <p>
                        Pour utiliser certaines fonctionnalités du Service, vous devez créer un compte. Lors de l'inscription, vous acceptez de fournir des informations exactes, à jour et complètes. Vous êtes responsable de la confidentialité de votre mot de passe et de toutes les activités qui se produisent sous votre compte.
                    </p>
                    <p>
                        Après votre inscription, vous devrez vérifier votre adresse e-mail. Ensuite, un administrateur devra approuver votre compte avant que vous puissiez accéder à toutes les fonctionnalités du service.
                    </p>

                    <h2 class=\"h4 mb-3 mt-4\">4. Droits et responsabilités</h2>
                    <p>
                        En utilisant notre Service, vous acceptez de ne pas :
                    </p>
                    <ul>
                        <li>Violer les lois applicables</li>
                        <li>Distribuer des virus ou tout autre code malveillant</li>
                        <li>Perturber ou interférer avec la sécurité du Service</li>
                        <li>Recueillir des informations sur d'autres utilisateurs sans leur consentement</li>
                        <li>Utiliser le Service d'une manière qui pourrait endommager, désactiver, surcharger ou altérer le Service</li>
                    </ul>

                    <h2 class=\"h4 mb-3 mt-4\">5. Protection des données personnelles</h2>
                    <p>
                        Nous respectons votre vie privée et protégeons vos données personnelles conformément à notre politique de confidentialité et aux lois applicables, notamment le Règlement Général sur la Protection des Données (RGPD).
                    </p>
                    <p>
                        Les données personnelles que vous nous fournissez lors de l'inscription sont utilisées uniquement dans le cadre de la fourniture de nos services et ne seront pas partagées avec des tiers sans votre consentement explicite.
                    </p>

                    <h2 class=\"h4 mb-3 mt-4\">6. Modification des conditions d'utilisation</h2>
                    <p>
                        Nous nous réservons le droit de modifier ces conditions d'utilisation à tout moment. Les modifications entrent en vigueur dès leur publication sur le Service. Il est de votre responsabilité de consulter régulièrement ces conditions.
                    </p>

                    <h2 class=\"h4 mb-3 mt-4\">7. Résiliation</h2>
                    <p>
                        Nous nous réservons le droit de suspendre ou de résilier votre compte et votre accès au Service à notre seule discrétion, sans préavis, pour conduite que nous jugeons contraire à ces conditions d'utilisation ou à toute loi applicable.
                    </p>

                    <h2 class=\"h4 mb-3 mt-4\">8. Contact</h2>
                    <p>
                        Si vous avez des questions concernant ces conditions d'utilisation, veuillez nous contacter à l'adresse suivante : contact@dmqode.be
                    </p>

                    <p class=\"mt-5 text-muted\">
                        <small>Dernière mise à jour : ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "</small>
                    </p>
                </div>
            </div>
            <div class=\"text-center mb-5\">
                <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn btn-gradient\">Retour à l'inscription</a>
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
        return "terms/index.html.twig";
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
        return array (  159 => 75,  151 => 70,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Conditions d'utilisation{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card shadow-lg mb-5\">
                <div class=\"card-header\">
                    <h1 class=\"h3 mb-0\">Conditions d'utilisation</h1>
                </div>
                <div class=\"card-body\">
                    <h2 class=\"h4 mb-3\">1. Introduction</h2>
                    <p>
                        Bienvenue sur DMQode.be. Les présentes conditions d'utilisation régissent votre utilisation de notre site web et de nos services. En vous inscrivant sur notre site, vous acceptez d'être lié par ces conditions. Veuillez les lire attentivement.
                    </p>

                    <h2 class=\"h4 mb-3 mt-4\">2. Définitions</h2>
                    <p>
                        <strong>\"Service\"</strong> désigne le site web DMQode.be<br>
                        <strong>\"Utilisateur\"</strong> désigne toute personne qui accède au Service et crée un compte<br>
                        <strong>\"Compte\"</strong> désigne l'accès personnalisé au Service
                    </p>

                    <h2 class=\"h4 mb-3 mt-4\">3. Inscription et compte</h2>
                    <p>
                        Pour utiliser certaines fonctionnalités du Service, vous devez créer un compte. Lors de l'inscription, vous acceptez de fournir des informations exactes, à jour et complètes. Vous êtes responsable de la confidentialité de votre mot de passe et de toutes les activités qui se produisent sous votre compte.
                    </p>
                    <p>
                        Après votre inscription, vous devrez vérifier votre adresse e-mail. Ensuite, un administrateur devra approuver votre compte avant que vous puissiez accéder à toutes les fonctionnalités du service.
                    </p>

                    <h2 class=\"h4 mb-3 mt-4\">4. Droits et responsabilités</h2>
                    <p>
                        En utilisant notre Service, vous acceptez de ne pas :
                    </p>
                    <ul>
                        <li>Violer les lois applicables</li>
                        <li>Distribuer des virus ou tout autre code malveillant</li>
                        <li>Perturber ou interférer avec la sécurité du Service</li>
                        <li>Recueillir des informations sur d'autres utilisateurs sans leur consentement</li>
                        <li>Utiliser le Service d'une manière qui pourrait endommager, désactiver, surcharger ou altérer le Service</li>
                    </ul>

                    <h2 class=\"h4 mb-3 mt-4\">5. Protection des données personnelles</h2>
                    <p>
                        Nous respectons votre vie privée et protégeons vos données personnelles conformément à notre politique de confidentialité et aux lois applicables, notamment le Règlement Général sur la Protection des Données (RGPD).
                    </p>
                    <p>
                        Les données personnelles que vous nous fournissez lors de l'inscription sont utilisées uniquement dans le cadre de la fourniture de nos services et ne seront pas partagées avec des tiers sans votre consentement explicite.
                    </p>

                    <h2 class=\"h4 mb-3 mt-4\">6. Modification des conditions d'utilisation</h2>
                    <p>
                        Nous nous réservons le droit de modifier ces conditions d'utilisation à tout moment. Les modifications entrent en vigueur dès leur publication sur le Service. Il est de votre responsabilité de consulter régulièrement ces conditions.
                    </p>

                    <h2 class=\"h4 mb-3 mt-4\">7. Résiliation</h2>
                    <p>
                        Nous nous réservons le droit de suspendre ou de résilier votre compte et votre accès au Service à notre seule discrétion, sans préavis, pour conduite que nous jugeons contraire à ces conditions d'utilisation ou à toute loi applicable.
                    </p>

                    <h2 class=\"h4 mb-3 mt-4\">8. Contact</h2>
                    <p>
                        Si vous avez des questions concernant ces conditions d'utilisation, veuillez nous contacter à l'adresse suivante : contact@dmqode.be
                    </p>

                    <p class=\"mt-5 text-muted\">
                        <small>Dernière mise à jour : {{ \"now\"|date(\"d/m/Y\") }}</small>
                    </p>
                </div>
            </div>
            <div class=\"text-center mb-5\">
                <a href=\"{{ path('app_register') }}\" class=\"btn btn-gradient\">Retour à l'inscription</a>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "terms/index.html.twig", "/var/www/serveur/templates/terms/index.html.twig");
    }
}
