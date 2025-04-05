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

/* registration/register.html.twig */
class __TwigTemplate_99bee8f8b539a16502b419f59eeac864 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.title"), "html", null, true);
        
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
        yield "<div class=\"row justify-content-center\">
    <div class=\"col-lg-8\">
        <div class=\"card shadow-lg\">
            <div class=\"card-header text-center\">
                <h1 class=\"h4 mb-0\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.header"), "html", null, true);
        yield "</h1>
            </div>
            <div class=\"card-body p-4\">
                ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 13, $this->source); })()), 'form_start');
        yield "
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), "email", [], "any", false, false, false, 17), 'row');
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 20, $this->source); })()), "username", [], "any", false, false, false, 20), 'row');
        yield "
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), "firstName", [], "any", false, false, false, 26), 'row');
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "lastName", [], "any", false, false, false, 29), 'row');
        yield "
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-8\">
                        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "street", [], "any", false, false, false, 35), 'row');
        yield "
                    </div>
                    <div class=\"col-md-2\">
                        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "houseNumber", [], "any", false, false, false, 38), 'row');
        yield "
                    </div>
                    <div class=\"col-md-2\">
                        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "boxNumber", [], "any", false, false, false, 41), 'row');
        yield "
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-3\">
                        ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "postalCode", [], "any", false, false, false, 47), 'row');
        yield "
                    </div>
                    <div class=\"col-md-5\">
                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "city", [], "any", false, false, false, 50), 'row');
        yield "
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "country", [], "any", false, false, false, 53), 'row');
        yield "
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "phoneNumber", [], "any", false, false, false, 59), 'row');
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "locale", [], "any", false, false, false, 62), 'row');
        yield "
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 68, $this->source); })()), "plainPassword", [], "any", false, false, false, 68), "first", [], "any", false, false, false, 68), 'row');
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "plainPassword", [], "any", false, false, false, 71), "second", [], "any", false, false, false, 71), 'row');
        yield "
                    </div>
                </div>
                
                <div class=\"mb-3 form-check\">
                    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), "agreeTerms", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                    <label for=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), "agreeTerms", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77), "html", null, true);
        yield "\" class=\"form-check-label\">
                        J'accepte les <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_terms");
        yield "\" class=\"text-decoration-none\" target=\"_blank\">conditions d'utilisation</a>
                    </label>
                    ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 80, $this->source); })()), "agreeTerms", [], "any", false, false, false, 80), 'errors');
        yield "
                </div>

                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.info_approval"), "html", null, true);
        yield "
                </div>
                
                <div class=\"d-grid gap-2\">
                    <button type=\"submit\" class=\"btn btn-gradient\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.register"), "html", null, true);
        yield "</button>
                </div>
                ";
        // line 91
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 91, $this->source); })()), 'form_end', ["render_rest" => false]);
        yield "
            </div>
            <div class=\"card-footer text-center py-3\">
                <div class=\"text-muted\">
                    ";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.already_account"), "html", null, true);
        yield " 
                    <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-decoration-none\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.login"), "html", null, true);
        yield "</a>
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
        return "registration/register.html.twig";
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
        return array (  249 => 96,  245 => 95,  238 => 91,  233 => 89,  226 => 85,  218 => 80,  213 => 78,  209 => 77,  205 => 76,  197 => 71,  191 => 68,  182 => 62,  176 => 59,  167 => 53,  161 => 50,  155 => 47,  146 => 41,  140 => 38,  134 => 35,  125 => 29,  119 => 26,  110 => 20,  104 => 17,  97 => 13,  91 => 10,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'registration.title'|trans }}{% endblock %}

{% block body %}
<div class=\"row justify-content-center\">
    <div class=\"col-lg-8\">
        <div class=\"card shadow-lg\">
            <div class=\"card-header text-center\">
                <h1 class=\"h4 mb-0\">{{ 'registration.header'|trans }}</h1>
            </div>
            <div class=\"card-body p-4\">
                {{ form_start(registrationForm) }}
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        {{ form_row(registrationForm.email) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(registrationForm.username) }}
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        {{ form_row(registrationForm.firstName) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(registrationForm.lastName) }}
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-8\">
                        {{ form_row(registrationForm.street) }}
                    </div>
                    <div class=\"col-md-2\">
                        {{ form_row(registrationForm.houseNumber) }}
                    </div>
                    <div class=\"col-md-2\">
                        {{ form_row(registrationForm.boxNumber) }}
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-3\">
                        {{ form_row(registrationForm.postalCode) }}
                    </div>
                    <div class=\"col-md-5\">
                        {{ form_row(registrationForm.city) }}
                    </div>
                    <div class=\"col-md-4\">
                        {{ form_row(registrationForm.country) }}
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        {{ form_row(registrationForm.phoneNumber) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(registrationForm.locale) }}
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        {{ form_row(registrationForm.plainPassword.first) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(registrationForm.plainPassword.second) }}
                    </div>
                </div>
                
                <div class=\"mb-3 form-check\">
                    {{ form_widget(registrationForm.agreeTerms, {'attr': {'class': 'form-check-input'}}) }}
                    <label for=\"{{ registrationForm.agreeTerms.vars.id }}\" class=\"form-check-label\">
                        J'accepte les <a href=\"{{ path('app_terms') }}\" class=\"text-decoration-none\" target=\"_blank\">conditions d'utilisation</a>
                    </label>
                    {{ form_errors(registrationForm.agreeTerms) }}
                </div>

                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    {{ 'registration.info_approval'|trans }}
                </div>
                
                <div class=\"d-grid gap-2\">
                    <button type=\"submit\" class=\"btn btn-gradient\">{{ 'registration.register'|trans }}</button>
                </div>
                {{ form_end(registrationForm, {'render_rest': false}) }}
            </div>
            <div class=\"card-footer text-center py-3\">
                <div class=\"text-muted\">
                    {{ 'registration.already_account'|trans }} 
                    <a href=\"{{ path('app_login') }}\" class=\"text-decoration-none\">{{ 'registration.login'|trans }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "registration/register.html.twig", "/var/www/serveur/templates/registration/register.html.twig");
    }
}
