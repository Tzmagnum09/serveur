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

/* cookie_consent.html.twig */
class __TwigTemplate_371608ae46259651c2b64614b144b595 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cookie_consent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cookie_consent.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/cookie-consent.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        yield "    <!-- Bannière de cookies -->
    <div id=\"cookie-banner\" class=\"cookie-banner d-none\">
        <div class=\"cookie-banner-content\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-8\">
                    <h5>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.title"), "html", null, true);
        yield "</h5>
                    <p>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.content"), "html", null, true);
        yield "</p>
                </div>
                <div class=\"col-md-4 cookie-banner-buttons\">
                    <select id=\"cookie-language-selector\" class=\"form-select mb-2\">
                        <option value=\"fr\" ";
        // line 19
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "locale", [], "any", false, false, false, 19) == "fr")) {
            yield "selected";
        }
        yield ">Français</option>
                        <option value=\"en\" ";
        // line 20
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "locale", [], "any", false, false, false, 20) == "en")) {
            yield "selected";
        }
        yield ">English</option>
                        <option value=\"nl\" ";
        // line 21
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "locale", [], "any", false, false, false, 21) == "nl")) {
            yield "selected";
        }
        yield ">Nederlands</option>
                        <option value=\"de\" ";
        // line 22
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "locale", [], "any", false, false, false, 22) == "de")) {
            yield "selected";
        }
        yield ">Deutsch</option>
                    </select>
                    <button id=\"customize-cookies-btn\" class=\"btn btn-cookie-customize me-2\">
                        ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.customize"), "html", null, true);
        yield "
                    </button>
                    <button id=\"necessary-cookies-btn\" class=\"btn btn-cookie-necessary me-2\">
                        ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.necessary_only"), "html", null, true);
        yield "
                    </button>
                    <button id=\"accept-all-cookies-btn\" class=\"btn btn-cookie-accept\">
                        ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.accept_all"), "html", null, true);
        yield "
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de préférences des cookies -->
    <div class=\"modal fade cookie-preferences-modal\" id=\"cookie-preferences-modal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <div class=\"d-flex w-100 justify-content-between align-items-center\">
                        <h5 class=\"modal-title\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.title"), "html", null, true);
        yield "</h5>
                        <select id=\"modal-language-selector\" class=\"form-select w-auto\">
                            <option value=\"fr\" ";
        // line 46
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "request", [], "any", false, false, false, 46), "locale", [], "any", false, false, false, 46) == "fr")) {
            yield "selected";
        }
        yield ">Français</option>
                            <option value=\"en\" ";
        // line 47
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "locale", [], "any", false, false, false, 47) == "en")) {
            yield "selected";
        }
        yield ">English</option>
                            <option value=\"nl\" ";
        // line 48
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "locale", [], "any", false, false, false, 48) == "nl")) {
            yield "selected";
        }
        yield ">Nederlands</option>
                            <option value=\"de\" ";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "locale", [], "any", false, false, false, 49) == "de")) {
            yield "selected";
        }
        yield ">Deutsch</option>
                        </select>
                    </div>
                    <button type=\"button\" class=\"btn-close close-preferences\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#overview\" role=\"tab\">
                                ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.tab.overview"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#details\" role=\"tab\">
                                ";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.tab.details"), "html", null, true);
        yield "
                            </a>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#about\" role=\"tab\">
                                ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.tab.about"), "html", null, true);
        yield "
                            </a>
                        </li>
                    </ul>

                    <div class=\"tab-content\">
                        <!-- Onglet Vue d'ensemble -->
                        <div class=\"tab-pane fade show active\" id=\"overview\" role=\"tabpanel\">
                            <div class=\"cookie-tab-content\">
                                <p>";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.intro"), "html", null, true);
        yield "</p>
                                
                                <div class=\"form-check form-switch mb-3\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"cookie-necessary\" checked disabled>
                                    <label class=\"form-check-label\" for=\"cookie-necessary\">
                                        ";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.necessary.title"), "html", null, true);
        yield "
                                        <i class=\"fas fa-info-circle cookie-info-icon\" 
                                           title=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.necessary.description"), "html", null, true);
        yield "\"></i>
                                    </label>
                                </div>

                                <div class=\"form-check form-switch mb-3\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"cookie-preference\">
                                    <label class=\"form-check-label\" for=\"cookie-preference\">
                                        ";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.preferences.title"), "html", null, true);
        yield "
                                        <i class=\"fas fa-info-circle cookie-info-icon\" 
                                           title=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.preferences.description"), "html", null, true);
        yield "\"></i>
                                    </label>
                                </div>

                                <div class=\"form-check form-switch mb-3\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"cookie-statistics\">
                                    <label class=\"form-check-label\" for=\"cookie-statistics\">
                                        ";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.statistics.title"), "html", null, true);
        yield "
                                        <i class=\"fas fa-info-circle cookie-info-icon\" 
                                           title=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.statistics.description"), "html", null, true);
        yield "\"></i>
                                    </label>
                                </div>

                                <div class=\"form-check form-switch mb-3\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"cookie-marketing\">
                                    <label class=\"form-check-label\" for=\"cookie-marketing\">
                                        ";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.marketing.title"), "html", null, true);
        yield "
                                        <i class=\"fas fa-info-circle cookie-info-icon\" 
                                           title=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.marketing.description"), "html", null, true);
        yield "\"></i>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Les onglets Détails et À propos seraient similaires -->
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-cookie-necessary close-preferences me-2\">
                        ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.necessary_only"), "html", null, true);
        yield "
                    </button>
                    <button type=\"button\" class=\"btn btn-cookie-accept\" id=\"save-preferences-btn\">
                        ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.save"), "html", null, true);
        yield "
                    </button>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 133
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/cookie-consent.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "cookie_consent.html.twig";
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
        return array (  339 => 135,  334 => 134,  324 => 133,  309 => 125,  303 => 122,  289 => 111,  284 => 109,  274 => 102,  269 => 100,  259 => 93,  254 => 91,  244 => 84,  239 => 82,  231 => 77,  219 => 68,  211 => 63,  203 => 58,  189 => 49,  183 => 48,  177 => 47,  171 => 46,  166 => 44,  150 => 31,  144 => 28,  138 => 25,  130 => 22,  124 => 21,  118 => 20,  112 => 19,  105 => 15,  101 => 14,  94 => 9,  84 => 8,  74 => 5,  69 => 4,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/cookie-consent.css') }}\">
{% endblock %}

{% block body %}
    <!-- Bannière de cookies -->
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
    </div>

    <!-- Modal de préférences des cookies -->
    <div class=\"modal fade cookie-preferences-modal\" id=\"cookie-preferences-modal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <div class=\"d-flex w-100 justify-content-between align-items-center\">
                        <h5 class=\"modal-title\">{{ 'cookie.modal.title'|trans }}</h5>
                        <select id=\"modal-language-selector\" class=\"form-select w-auto\">
                            <option value=\"fr\" {% if app.request.locale == 'fr' %}selected{% endif %}>Français</option>
                            <option value=\"en\" {% if app.request.locale == 'en' %}selected{% endif %}>English</option>
                            <option value=\"nl\" {% if app.request.locale == 'nl' %}selected{% endif %}>Nederlands</option>
                            <option value=\"de\" {% if app.request.locale == 'de' %}selected{% endif %}>Deutsch</option>
                        </select>
                    </div>
                    <button type=\"button\" class=\"btn-close close-preferences\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#overview\" role=\"tab\">
                                {{ 'cookie.modal.tab.overview'|trans }}
                            </a>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#details\" role=\"tab\">
                                {{ 'cookie.modal.tab.details'|trans }}
                            </a>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#about\" role=\"tab\">
                                {{ 'cookie.modal.tab.about'|trans }}
                            </a>
                        </li>
                    </ul>

                    <div class=\"tab-content\">
                        <!-- Onglet Vue d'ensemble -->
                        <div class=\"tab-pane fade show active\" id=\"overview\" role=\"tabpanel\">
                            <div class=\"cookie-tab-content\">
                                <p>{{ 'cookie.modal.overview.intro'|trans }}</p>
                                
                                <div class=\"form-check form-switch mb-3\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"cookie-necessary\" checked disabled>
                                    <label class=\"form-check-label\" for=\"cookie-necessary\">
                                        {{ 'cookie.modal.overview.necessary.title'|trans }}
                                        <i class=\"fas fa-info-circle cookie-info-icon\" 
                                           title=\"{{ 'cookie.modal.overview.necessary.description'|trans }}\"></i>
                                    </label>
                                </div>

                                <div class=\"form-check form-switch mb-3\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"cookie-preference\">
                                    <label class=\"form-check-label\" for=\"cookie-preference\">
                                        {{ 'cookie.modal.overview.preferences.title'|trans }}
                                        <i class=\"fas fa-info-circle cookie-info-icon\" 
                                           title=\"{{ 'cookie.modal.overview.preferences.description'|trans }}\"></i>
                                    </label>
                                </div>

                                <div class=\"form-check form-switch mb-3\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"cookie-statistics\">
                                    <label class=\"form-check-label\" for=\"cookie-statistics\">
                                        {{ 'cookie.modal.overview.statistics.title'|trans }}
                                        <i class=\"fas fa-info-circle cookie-info-icon\" 
                                           title=\"{{ 'cookie.modal.overview.statistics.description'|trans }}\"></i>
                                    </label>
                                </div>

                                <div class=\"form-check form-switch mb-3\">
                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"cookie-marketing\">
                                    <label class=\"form-check-label\" for=\"cookie-marketing\">
                                        {{ 'cookie.modal.overview.marketing.title'|trans }}
                                        <i class=\"fas fa-info-circle cookie-info-icon\" 
                                           title=\"{{ 'cookie.modal.overview.marketing.description'|trans }}\"></i>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Les onglets Détails et À propos seraient similaires -->
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-cookie-necessary close-preferences me-2\">
                        {{ 'cookie.modal.necessary_only'|trans }}
                    </button>
                    <button type=\"button\" class=\"btn btn-cookie-accept\" id=\"save-preferences-btn\">
                        {{ 'cookie.modal.save'|trans }}
                    </button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/cookie-consent.js') }}\"></script>
{% endblock %}", "cookie_consent.html.twig", "/var/www/serveur/templates/cookie_consent.html.twig");
    }
}
