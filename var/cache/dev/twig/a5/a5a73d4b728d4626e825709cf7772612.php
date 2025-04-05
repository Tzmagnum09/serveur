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

/* security/login.html.twig */
class __TwigTemplate_fb415798fba0fd40b5551e0c2595c1d4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.title"), "html", null, true);
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.header"), "html", null, true);
        yield "</h1>
            </div>
            <div class=\"card-body p-4\">
                ";
        // line 13
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })())) {
            // line 14
            yield "                    <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageKey", [], "any", false, false, false, 14), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageData", [], "any", false, false, false, 14), "security"), "html", null, true);
            yield "</div>
                ";
        }
        // line 16
        yield "                
                <form method=\"post\">
                    <div class=\"mb-3\">
                        <label for=\"username\" class=\"form-label\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.username_or_email"), "html", null, true);
        yield "</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
                            <input type=\"text\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 22, $this->source); })()), "html", null, true);
        yield "\" name=\"username\" id=\"username\" class=\"form-control\" autocomplete=\"username\" required autofocus>
                        </div>
                    </div>
                    
                    <div class=\"mb-3\">
                        <label for=\"password\" class=\"form-label\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.password"), "html", null, true);
        yield "</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text\"><i class=\"fas fa-lock\"></i></span>
                            <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\" autocomplete=\"current-password\" required>
                        </div>
                    </div>
                    
                    <div class=\"mb-3 form-check\">
                        <input type=\"checkbox\" name=\"_remember_me\" id=\"remember_me\" class=\"form-check-input\">
                        <label class=\"form-check-label\" for=\"remember_me\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.remember_me"), "html", null, true);
        yield "</label>
                    </div>
                    
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                    
                    <div class=\"d-grid gap-2\">
                        <button class=\"btn btn-gradient\" type=\"submit\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.sign_in"), "html", null, true);
        yield "</button>
                    </div>
                    
                    <div class=\"mt-3 text-center\">
                        <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\" class=\"text-decoration-none\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.forgot_password"), "html", null, true);
        yield "</a>
                    </div>
                </form>
            </div>
            <div class=\"card-footer text-center py-3\">
                <div class=\"text-muted\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.no_account"), "html", null, true);
        yield " <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"text-decoration-none\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.register"), "html", null, true);
        yield "</a></div>
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
        return "security/login.html.twig";
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
        return array (  165 => 51,  155 => 46,  148 => 42,  142 => 39,  136 => 36,  124 => 27,  116 => 22,  110 => 19,  105 => 16,  99 => 14,  97 => 13,  91 => 10,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'login.title'|trans }}{% endblock %}

{% block body %}
<div class=\"row justify-content-center\">
    <div class=\"col-md-6 col-lg-5\">
        <div class=\"card shadow-lg\">
            <div class=\"card-header text-center\">
                <h1 class=\"h4 mb-0\">{{ 'login.header'|trans }}</h1>
            </div>
            <div class=\"card-body p-4\">
                {% if error %}
                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}
                
                <form method=\"post\">
                    <div class=\"mb-3\">
                        <label for=\"username\" class=\"form-label\">{{ 'login.username_or_email'|trans }}</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
                            <input type=\"text\" value=\"{{ last_username }}\" name=\"username\" id=\"username\" class=\"form-control\" autocomplete=\"username\" required autofocus>
                        </div>
                    </div>
                    
                    <div class=\"mb-3\">
                        <label for=\"password\" class=\"form-label\">{{ 'login.password'|trans }}</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text\"><i class=\"fas fa-lock\"></i></span>
                            <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\" autocomplete=\"current-password\" required>
                        </div>
                    </div>
                    
                    <div class=\"mb-3 form-check\">
                        <input type=\"checkbox\" name=\"_remember_me\" id=\"remember_me\" class=\"form-check-input\">
                        <label class=\"form-check-label\" for=\"remember_me\">{{ 'login.remember_me'|trans }}</label>
                    </div>
                    
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                    
                    <div class=\"d-grid gap-2\">
                        <button class=\"btn btn-gradient\" type=\"submit\">{{ 'login.sign_in'|trans }}</button>
                    </div>
                    
                    <div class=\"mt-3 text-center\">
                        <a href=\"{{ path('app_forgot_password_request') }}\" class=\"text-decoration-none\">{{ 'login.forgot_password'|trans }}</a>
                    </div>
                </form>
            </div>
            <div class=\"card-footer text-center py-3\">
                <div class=\"text-muted\">{{ 'login.no_account'|trans }} <a href=\"{{ path('app_register') }}\" class=\"text-decoration-none\">{{ 'login.register'|trans }}</a></div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "security/login.html.twig", "/var/www/serveur/templates/security/login.html.twig");
    }
}
