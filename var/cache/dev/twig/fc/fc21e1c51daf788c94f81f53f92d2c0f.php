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

/* partials/cookie-banner.html.twig */
class __TwigTemplate_7ff3783d7ce8b306b6c1fd1970fdc55a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/cookie-banner.html.twig"));

        // line 2
        yield "
<div id=\"cookie-banner\" class=\"cookie-banner\" style=\"display: none;\">
    <div class=\"cookie-banner-content\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <h5>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.content"), "html", null, true);
        yield "</p>
            </div>
            <div class=\"col-md-4\">
                <div class=\"mb-3\">
                    <select id=\"cookie-banner-language\" class=\"form-select form-select-sm cookie-language-selector\">
                        <option value=\"fr\" ";
        // line 13
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "locale", [], "any", false, false, false, 13) == "fr")) {
            yield "selected";
        }
        yield ">Français</option>
                        <option value=\"en\" ";
        // line 14
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "locale", [], "any", false, false, false, 14) == "en")) {
            yield "selected";
        }
        yield ">English</option>
                        <option value=\"nl\" ";
        // line 15
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "locale", [], "any", false, false, false, 15) == "nl")) {
            yield "selected";
        }
        yield ">Nederlands</option>
                        <option value=\"de\" ";
        // line 16
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "locale", [], "any", false, false, false, 16) == "de")) {
            yield "selected";
        }
        yield ">Deutsch</option>
                    </select>
                </div>
                <div class=\"cookie-banner-buttons\">
                    <button id=\"cookie-customize-btn\" class=\"btn btn-cookie btn-cookie-outline\">
                        ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.customize"), "html", null, true);
        yield "
                    </button>
                    <button id=\"cookie-necessary-btn\" class=\"btn btn-cookie btn-cookie-secondary\">
                        ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.necessary_only"), "html", null, true);
        yield "
                    </button>
                    <button id=\"cookie-accept-all-btn\" class=\"btn btn-cookie btn-cookie-primary\">
                        ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.accept_all"), "html", null, true);
        yield "
                    </button>
                </div>
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
        return "partials/cookie-banner.html.twig";
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
        return array (  104 => 27,  98 => 24,  92 => 21,  82 => 16,  76 => 15,  70 => 14,  64 => 13,  56 => 8,  52 => 7,  45 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# À placer dans templates/partials/cookie-banner.html.twig #}

<div id=\"cookie-banner\" class=\"cookie-banner\" style=\"display: none;\">
    <div class=\"cookie-banner-content\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <h5>{{ 'cookie.banner.title'|trans }}</h5>
                <p>{{ 'cookie.banner.content'|trans }}</p>
            </div>
            <div class=\"col-md-4\">
                <div class=\"mb-3\">
                    <select id=\"cookie-banner-language\" class=\"form-select form-select-sm cookie-language-selector\">
                        <option value=\"fr\" {% if app.request.locale == 'fr' %}selected{% endif %}>Français</option>
                        <option value=\"en\" {% if app.request.locale == 'en' %}selected{% endif %}>English</option>
                        <option value=\"nl\" {% if app.request.locale == 'nl' %}selected{% endif %}>Nederlands</option>
                        <option value=\"de\" {% if app.request.locale == 'de' %}selected{% endif %}>Deutsch</option>
                    </select>
                </div>
                <div class=\"cookie-banner-buttons\">
                    <button id=\"cookie-customize-btn\" class=\"btn btn-cookie btn-cookie-outline\">
                        {{ 'cookie.banner.customize'|trans }}
                    </button>
                    <button id=\"cookie-necessary-btn\" class=\"btn btn-cookie btn-cookie-secondary\">
                        {{ 'cookie.banner.necessary_only'|trans }}
                    </button>
                    <button id=\"cookie-accept-all-btn\" class=\"btn btn-cookie btn-cookie-primary\">
                        {{ 'cookie.banner.accept_all'|trans }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>", "partials/cookie-banner.html.twig", "/var/www/serveur/templates/partials/cookie-banner.html.twig");
    }
}
