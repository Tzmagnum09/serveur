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

/* reset_password/check_email.html.twig */
class __TwigTemplate_e9daae496c4dd89025002b0a26e5efb6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/check_email.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/check_email.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("reset_password.check_email.title"), "html", null, true);
        
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
    <div class=\"col-md-6 col-lg-5\">
        <div class=\"card shadow-lg\">
            <div class=\"card-header text-center\">
                <h1 class=\"h4 mb-0\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("reset_password.check_email.header"), "html", null, true);
        yield "</h1>
            </div>
            <div class=\"card-body p-4\">
                <div class=\"text-center mb-4\">
                    <i class=\"fas fa-envelope fa-3x mb-3\" style=\"color: #8e44ad;\"></i>
                </div>
                
                <p>
                    ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("reset_password.check_email.sent"), "html", null, true);
        yield "
                </p>
                <p>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("reset_password.check_email.not_received"), "html", null, true);
        yield "</p>
                <p class=\"text-muted\">
                    ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("reset_password.check_email.expires_in", ["%hours%" => "1"]), "html", null, true);
        yield "
                </p>
            </div>
            <div class=\"card-footer text-center py-3\">
                <div class=\"text-muted\">
                    <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\" class=\"text-decoration-none\">
                        <i class=\"fas fa-redo me-1\"></i> ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("reset_password.check_email.try_again"), "html", null, true);
        yield "
                    </a>
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
        return "reset_password/check_email.html.twig";
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
        return array (  124 => 28,  120 => 27,  112 => 22,  107 => 20,  102 => 18,  91 => 10,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'reset_password.check_email.title'|trans }}{% endblock %}

{% block body %}
<div class=\"row justify-content-center\">
    <div class=\"col-md-6 col-lg-5\">
        <div class=\"card shadow-lg\">
            <div class=\"card-header text-center\">
                <h1 class=\"h4 mb-0\">{{ 'reset_password.check_email.header'|trans }}</h1>
            </div>
            <div class=\"card-body p-4\">
                <div class=\"text-center mb-4\">
                    <i class=\"fas fa-envelope fa-3x mb-3\" style=\"color: #8e44ad;\"></i>
                </div>
                
                <p>
                    {{ 'reset_password.check_email.sent'|trans }}
                </p>
                <p>{{ 'reset_password.check_email.not_received'|trans }}</p>
                <p class=\"text-muted\">
                    {{ 'reset_password.check_email.expires_in'|trans({'%hours%': '1'}) }}
                </p>
            </div>
            <div class=\"card-footer text-center py-3\">
                <div class=\"text-muted\">
                    <a href=\"{{ path('app_forgot_password_request') }}\" class=\"text-decoration-none\">
                        <i class=\"fas fa-redo me-1\"></i> {{ 'reset_password.check_email.try_again'|trans }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "reset_password/check_email.html.twig", "/var/www/serveur/templates/reset_password/check_email.html.twig");
    }
}
