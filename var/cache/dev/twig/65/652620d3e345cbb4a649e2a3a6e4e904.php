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

/* cookie/cookie_banner.html.twig */
class __TwigTemplate_a52b538a7425ffd5e6cf04bff943b3d2 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cookie/cookie_banner.html.twig"));

        // line 1
        yield "<!-- Bannière de cookies -->
<div id=\"cookie-banner\" class=\"cookie-banner d-none\">
    <div class=\"cookie-banner-content\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-8\">
                <h5>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.content"), "html", null, true);
        yield "</p>
            </div>
            <div class=\"col-md-4 cookie-banner-buttons\">
                <select id=\"cookie-language-selector\" class=\"form-select mb-2\">
                    <option value=\"fr\" ";
        // line 11
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "locale", [], "any", false, false, false, 11) == "fr")) {
            yield "selected";
        }
        yield ">Français</option>
                    <option value=\"en\" ";
        // line 12
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "locale", [], "any", false, false, false, 12) == "en")) {
            yield "selected";
        }
        yield ">English</option>
                    <option value=\"nl\" ";
        // line 13
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "locale", [], "any", false, false, false, 13) == "nl")) {
            yield "selected";
        }
        yield ">Nederlands</option>
                    <option value=\"de\" ";
        // line 14
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "locale", [], "any", false, false, false, 14) == "de")) {
            yield "selected";
        }
        yield ">Deutsch</option>
                </select>
                <button id=\"customize-cookies-btn\" class=\"btn btn-cookie-customize me-2\">
                    ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.customize"), "html", null, true);
        yield "
                </button>
                <button id=\"necessary-cookies-btn\" class=\"btn btn-cookie-necessary me-2\">
                    ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.necessary_only"), "html", null, true);
        yield "
                </button>
                <button id=\"accept-all-cookies-btn\" class=\"btn btn-cookie-accept\">
                    ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.accept_all"), "html", null, true);
        yield "
                </button>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "cookie/cookie_banner.html.twig";
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
        return array (  101 => 23,  95 => 20,  89 => 17,  81 => 14,  75 => 13,  69 => 12,  63 => 11,  56 => 7,  52 => 6,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Bannière de cookies -->
<div id=\"cookie-banner\" class=\"cookie-banner d-none\">
    <div class=\"cookie-banner-content\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-8\">
                <h5>{{ 'cookie.banner.title'|trans }}</h5>
                <p>{{ 'cookie.banner.content'|trans }}</p>
            </div>
            <div class=\"col-md-4 cookie-banner-buttons\">
                <select id=\"cookie-language-selector\" class=\"form-select mb-2\">
                    <option value=\"fr\" {% if app.request.locale == 'fr' %}selected{% endif %}>Français</option>
                    <option value=\"en\" {% if app.request.locale == 'en' %}selected{% endif %}>English</option>
                    <option value=\"nl\" {% if app.request.locale == 'nl' %}selected{% endif %}>Nederlands</option>
                    <option value=\"de\" {% if app.request.locale == 'de' %}selected{% endif %}>Deutsch</option>
                </select>
                <button id=\"customize-cookies-btn\" class=\"btn btn-cookie-customize me-2\">
                    {{ 'cookie.banner.customize'|trans }}
                </button>
                <button id=\"necessary-cookies-btn\" class=\"btn btn-cookie-necessary me-2\">
                    {{ 'cookie.banner.necessary_only'|trans }}
                </button>
                <button id=\"accept-all-cookies-btn\" class=\"btn btn-cookie-accept\">
                    {{ 'cookie.banner.accept_all'|trans }}
                </button>
            </div>
        </div>
    </div>
</div>", "cookie/cookie_banner.html.twig", "/var/www/serveur/templates/cookie/cookie_banner.html.twig");
    }
}
