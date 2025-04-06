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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.title"), "html", null, true);
        
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
                    <h1 class=\"h3 mb-0\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.title"), "html", null, true);
        yield "</h1>
                </div>
                <div class=\"card-body\">
                    <h2 class=\"h4 mb-3\">1. ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.introduction.title"), "html", null, true);
        yield "</h2>
                    <p>
                        ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.introduction.content"), "html", null, true);
        yield "
                    </p>

                    <h2 class=\"h4 mb-3 mt-4\">2. ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.definitions.title"), "html", null, true);
        yield "</h2>
                    <p>
                        <strong>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.definitions.service"), "html", null, true);
        yield "</strong><br>
                        <strong>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.definitions.user"), "html", null, true);
        yield "</strong><br>
                        <strong>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.definitions.account"), "html", null, true);
        yield "</strong>
                    </p>

                    <h2 class=\"h4 mb-3 mt-4\">3. ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.registration.title"), "html", null, true);
        yield "</h2>
                    <p>
                        ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.registration.content1"), "html", null, true);
        yield "
                    </p>
                    <p>
                        ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.registration.content2"), "html", null, true);
        yield "
                    </p>

                    <h2 class=\"h4 mb-3 mt-4\">4. ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.title"), "html", null, true);
        yield "</h2>
                    <p>
                        ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.content"), "html", null, true);
        yield "
                    </p>
                    <ul>
                        <li>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.item1"), "html", null, true);
        yield "</li>
                        <li>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.item2"), "html", null, true);
        yield "</li>
                        <li>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.item3"), "html", null, true);
        yield "</li>
                        <li>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.item4"), "html", null, true);
        yield "</li>
                        <li>";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.item5"), "html", null, true);
        yield "</li>
                    </ul>

                    <h2 class=\"h4 mb-3 mt-4\">5. ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.data_protection.title"), "html", null, true);
        yield "</h2>
                    <p>
                        ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.data_protection.content1"), "html", null, true);
        yield "
                    </p>
                    <p>
                        ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.data_protection.content2"), "html", null, true);
        yield "
                    </p>

                    <h2 class=\"h4 mb-3 mt-4\">6. ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.changes.title"), "html", null, true);
        yield "</h2>
                    <p>
                        ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.changes.content"), "html", null, true);
        yield "
                    </p>

                    <h2 class=\"h4 mb-3 mt-4\">7. ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.termination.title"), "html", null, true);
        yield "</h2>
                    <p>
                        ";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.termination.content"), "html", null, true);
        yield "
                    </p>

                    <h2 class=\"h4 mb-3 mt-4\">8. ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.contact.title"), "html", null, true);
        yield "</h2>
                    <p>
                        ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.contact.content"), "html", null, true);
        yield "
                    </p>

                    <p class=\"mt-5 text-muted\">
                        <small>";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.footer.last_update"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "</small>
                    </p>
                </div>
            </div>
            <div class=\"text-center mb-5\">
                <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn btn-gradient\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.back_btn"), "html", null, true);
        yield "</a>
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
        return array (  239 => 75,  229 => 70,  222 => 66,  217 => 64,  211 => 61,  206 => 59,  200 => 56,  195 => 54,  189 => 51,  183 => 48,  178 => 46,  172 => 43,  168 => 42,  164 => 41,  160 => 40,  156 => 39,  150 => 36,  145 => 34,  139 => 31,  133 => 28,  128 => 26,  122 => 23,  118 => 22,  114 => 21,  109 => 19,  103 => 16,  98 => 14,  92 => 11,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'terms.title'|trans }}{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card shadow-lg mb-5\">
                <div class=\"card-header\">
                    <h1 class=\"h3 mb-0\">{{ 'terms.title'|trans }}</h1>
                </div>
                <div class=\"card-body\">
                    <h2 class=\"h4 mb-3\">1. {{ 'terms.introduction.title'|trans }}</h2>
                    <p>
                        {{ 'terms.introduction.content'|trans }}
                    </p>

                    <h2 class=\"h4 mb-3 mt-4\">2. {{ 'terms.definitions.title'|trans }}</h2>
                    <p>
                        <strong>{{ 'terms.definitions.service'|trans }}</strong><br>
                        <strong>{{ 'terms.definitions.user'|trans }}</strong><br>
                        <strong>{{ 'terms.definitions.account'|trans }}</strong>
                    </p>

                    <h2 class=\"h4 mb-3 mt-4\">3. {{ 'terms.registration.title'|trans }}</h2>
                    <p>
                        {{ 'terms.registration.content1'|trans }}
                    </p>
                    <p>
                        {{ 'terms.registration.content2'|trans }}
                    </p>

                    <h2 class=\"h4 mb-3 mt-4\">4. {{ 'terms.rights.title'|trans }}</h2>
                    <p>
                        {{ 'terms.rights.content'|trans }}
                    </p>
                    <ul>
                        <li>{{ 'terms.rights.item1'|trans }}</li>
                        <li>{{ 'terms.rights.item2'|trans }}</li>
                        <li>{{ 'terms.rights.item3'|trans }}</li>
                        <li>{{ 'terms.rights.item4'|trans }}</li>
                        <li>{{ 'terms.rights.item5'|trans }}</li>
                    </ul>

                    <h2 class=\"h4 mb-3 mt-4\">5. {{ 'terms.data_protection.title'|trans }}</h2>
                    <p>
                        {{ 'terms.data_protection.content1'|trans }}
                    </p>
                    <p>
                        {{ 'terms.data_protection.content2'|trans }}
                    </p>

                    <h2 class=\"h4 mb-3 mt-4\">6. {{ 'terms.changes.title'|trans }}</h2>
                    <p>
                        {{ 'terms.changes.content'|trans }}
                    </p>

                    <h2 class=\"h4 mb-3 mt-4\">7. {{ 'terms.termination.title'|trans }}</h2>
                    <p>
                        {{ 'terms.termination.content'|trans }}
                    </p>

                    <h2 class=\"h4 mb-3 mt-4\">8. {{ 'terms.contact.title'|trans }}</h2>
                    <p>
                        {{ 'terms.contact.content'|trans }}
                    </p>

                    <p class=\"mt-5 text-muted\">
                        <small>{{ 'terms.footer.last_update'|trans }} {{ \"now\"|date(\"d/m/Y\") }}</small>
                    </p>
                </div>
            </div>
            <div class=\"text-center mb-5\">
                <a href=\"{{ path('app_register') }}\" class=\"btn btn-gradient\">{{ 'terms.back_btn'|trans }}</a>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "terms/index.html.twig", "/var/www/serveur/templates/terms/index.html.twig");
    }
}
