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

/* admin/static_translations/edit.html.twig */
class __TwigTemplate_cae4d45aacce78dd1f183fafea69eb6d extends Template
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
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/static_translations/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/static_translations/edit.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.static_translations.edit_title", ["%key%" => (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 4, $this->source); })())]), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        yield "<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.static_translations.edit_title", ["%key%" => (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 13, $this->source); })())]), "html", null, true);
        yield "</h1>
        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_static_translations");
        yield "\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-1\"></i> ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.static_translations.back_btn"), "html", null, true);
        yield "
        </a>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.static_translations.edit_form_title"), "html", null, true);
        yield "</h5>
        </div>
        <div class=\"card-body\">
            <form method=\"post\">
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 26
            yield "                    <div class=\"mb-3\">
                        <label for=\"translation_";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["locale"], "html", null, true);
            yield "\" class=\"form-label\">
                            ";
            // line 28
            if (($context["locale"] == "fr")) {
                // line 29
                yield "                                <span class=\"badge bg-primary me-2\">Français</span>
                            ";
            } elseif ((            // line 30
$context["locale"] == "nl")) {
                // line 31
                yield "                                <span class=\"badge bg-primary me-2\">Nederlands</span>
                            ";
            } elseif ((            // line 32
$context["locale"] == "en")) {
                // line 33
                yield "                                <span class=\"badge bg-primary me-2\">English</span>
                            ";
            } elseif ((            // line 34
$context["locale"] == "de")) {
                // line 35
                yield "                                <span class=\"badge bg-primary me-2\">Deutsch</span>
                            ";
            }
            // line 37
            yield "                            ";
            if (($context["locale"] == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "request", [], "any", false, false, false, 37), "locale", [], "any", false, false, false, 37))) {
                // line 38
                yield "                                <span class=\"badge bg-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.translations.current_locale"), "html", null, true);
                yield "</span>
                            ";
            }
            // line 40
            yield "                        </label>
                        
                        <input type=\"text\" id=\"translation_";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["locale"], "html", null, true);
            yield "\" name=\"translation_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["locale"], "html", null, true);
            yield "\" class=\"form-control\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 42, $this->source); })()), $context["locale"], [], "array", false, false, false, 42), "html", null, true);
            yield "\">
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "                
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("edit-static-translation" . (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 46, $this->source); })()))), "html", null, true);
        yield "\">
                
                <div class=\"d-flex justify-content-end\">
                    <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_static_translations");
        yield "\" class=\"btn btn-outline-secondary me-2\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.static_translations.cancel_btn"), "html", null, true);
        yield "</a>
                    <button type=\"submit\" class=\"btn btn-gradient\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.static_translations.save_btn"), "html", null, true);
        yield "</button>
                </div>
            </form>
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
        return "admin/static_translations/edit.html.twig";
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
        return array (  203 => 50,  197 => 49,  191 => 46,  188 => 45,  175 => 42,  171 => 40,  165 => 38,  162 => 37,  158 => 35,  156 => 34,  153 => 33,  151 => 32,  148 => 31,  146 => 30,  143 => 29,  141 => 28,  137 => 27,  134 => 26,  130 => 25,  123 => 21,  114 => 15,  110 => 14,  106 => 13,  102 => 11,  92 => 10,  76 => 6,  59 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/static_translations/edit.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}{{ 'admin.static_translations.edit_title'|trans({'%key%': key}) }}{% endblock %}

{% block sidebar %}
{# Similaire à vos autres pages d'administration #}
{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">{{ 'admin.static_translations.edit_title'|trans({'%key%': key}) }}</h1>
        <a href=\"{{ path('app_admin_static_translations') }}\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-1\"></i> {{ 'admin.static_translations.back_btn'|trans }}
        </a>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">{{ 'admin.static_translations.edit_form_title'|trans }}</h5>
        </div>
        <div class=\"card-body\">
            <form method=\"post\">
                {% for locale in locales %}
                    <div class=\"mb-3\">
                        <label for=\"translation_{{ locale }}\" class=\"form-label\">
                            {% if locale == 'fr' %}
                                <span class=\"badge bg-primary me-2\">Français</span>
                            {% elseif locale == 'nl' %}
                                <span class=\"badge bg-primary me-2\">Nederlands</span>
                            {% elseif locale == 'en' %}
                                <span class=\"badge bg-primary me-2\">English</span>
                            {% elseif locale == 'de' %}
                                <span class=\"badge bg-primary me-2\">Deutsch</span>
                            {% endif %}
                            {% if locale == app.request.locale %}
                                <span class=\"badge bg-success\">{{ 'admin.translations.current_locale'|trans }}</span>
                            {% endif %}
                        </label>
                        
                        <input type=\"text\" id=\"translation_{{ locale }}\" name=\"translation_{{ locale }}\" class=\"form-control\" value=\"{{ translations[locale] }}\">
                    </div>
                {% endfor %}
                
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('edit-static-translation' ~ key) }}\">
                
                <div class=\"d-flex justify-content-end\">
                    <a href=\"{{ path('app_admin_static_translations') }}\" class=\"btn btn-outline-secondary me-2\">{{ 'admin.static_translations.cancel_btn'|trans }}</a>
                    <button type=\"submit\" class=\"btn btn-gradient\">{{ 'admin.static_translations.save_btn'|trans }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}", "admin/static_translations/edit.html.twig", "/var/www/serveur/templates/admin/static_translations/edit.html.twig");
    }
}
