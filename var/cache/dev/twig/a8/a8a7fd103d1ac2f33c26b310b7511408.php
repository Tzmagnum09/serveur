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

/* home/index.html.twig */
class __TwigTemplate_2ddd2ab73e2d233c655d58d6e019b743 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.title"), "html", null, true);
        
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
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10\">
            <div class=\"card shadow-lg mb-5\">
                <div class=\"card-header text-center\">
                    <h1 class=\"h3 mb-0\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.welcome"), "html", null, true);
        yield "</h1>
                </div>
                <div class=\"card-body\">
                    <div class=\"text-center mb-4\">
                        <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo_black.png"), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("site.name"), "html", null, true);
        yield "\" class=\"img-fluid mb-4\" style=\"max-width: 200px;\">
                        <p class=\"lead\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.intro"), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"row mt-5\">
                        <div class=\"col-md-4 mb-4\">
                            <div class=\"card h-100 text-center\">
                                <div class=\"card-body\">
                                    <i class=\"fas fa-user-check fa-3x mb-3\" style=\"color: #8e44ad;\"></i>
                                    <h3 class=\"h5\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.feature1.title"), "html", null, true);
        yield "</h3>
                                    <p class=\"card-text\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.feature1.description"), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"col-md-4 mb-4\">
                            <div class=\"card h-100 text-center\">
                                <div class=\"card-body\">
                                    <i class=\"fas fa-globe fa-3x mb-3\" style=\"color: #3498db;\"></i>
                                    <h3 class=\"h5\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.feature2.title"), "html", null, true);
        yield "</h3>
                                    <p class=\"card-text\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.feature2.description"), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"col-md-4 mb-4\">
                            <div class=\"card h-100 text-center\">
                                <div class=\"card-body\">
                                    <i class=\"fas fa-shield-alt fa-3x mb-3\" style=\"color: #8e44ad;\"></i>
                                    <h3 class=\"h5\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.feature3.title"), "html", null, true);
        yield "</h3>
                                    <p class=\"card-text\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.feature3.description"), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"text-center mt-4\">
                        ";
        // line 52
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52)) {
            // line 53
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"btn btn-gradient btn-lg px-4 me-3\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.register_btn"), "html", null, true);
            yield "</a>
                            <a href=\"";
            // line 54
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-outline-secondary btn-lg px-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.login_btn"), "html", null, true);
            yield "</a>
                        ";
        } else {
            // line 56
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\" class=\"btn btn-gradient btn-lg px-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.profile_btn"), "html", null, true);
            yield "</a>
                        ";
        }
        // line 58
        yield "                    </div>
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
        return "home/index.html.twig";
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
        return array (  186 => 58,  178 => 56,  171 => 54,  164 => 53,  162 => 52,  152 => 45,  148 => 44,  136 => 35,  132 => 34,  120 => 25,  116 => 24,  105 => 16,  99 => 15,  92 => 11,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'home.title'|trans }}{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10\">
            <div class=\"card shadow-lg mb-5\">
                <div class=\"card-header text-center\">
                    <h1 class=\"h3 mb-0\">{{ 'home.welcome'|trans }}</h1>
                </div>
                <div class=\"card-body\">
                    <div class=\"text-center mb-4\">
                        <img src=\"{{ asset('images/logo_black.png') }}\" alt=\"{{ 'site.name'|trans }}\" class=\"img-fluid mb-4\" style=\"max-width: 200px;\">
                        <p class=\"lead\">{{ 'home.intro'|trans }}</p>
                    </div>
                    
                    <div class=\"row mt-5\">
                        <div class=\"col-md-4 mb-4\">
                            <div class=\"card h-100 text-center\">
                                <div class=\"card-body\">
                                    <i class=\"fas fa-user-check fa-3x mb-3\" style=\"color: #8e44ad;\"></i>
                                    <h3 class=\"h5\">{{ 'home.feature1.title'|trans }}</h3>
                                    <p class=\"card-text\">{{ 'home.feature1.description'|trans }}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"col-md-4 mb-4\">
                            <div class=\"card h-100 text-center\">
                                <div class=\"card-body\">
                                    <i class=\"fas fa-globe fa-3x mb-3\" style=\"color: #3498db;\"></i>
                                    <h3 class=\"h5\">{{ 'home.feature2.title'|trans }}</h3>
                                    <p class=\"card-text\">{{ 'home.feature2.description'|trans }}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"col-md-4 mb-4\">
                            <div class=\"card h-100 text-center\">
                                <div class=\"card-body\">
                                    <i class=\"fas fa-shield-alt fa-3x mb-3\" style=\"color: #8e44ad;\"></i>
                                    <h3 class=\"h5\">{{ 'home.feature3.title'|trans }}</h3>
                                    <p class=\"card-text\">{{ 'home.feature3.description'|trans }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"text-center mt-4\">
                        {% if not app.user %}
                            <a href=\"{{ path('app_register') }}\" class=\"btn btn-gradient btn-lg px-4 me-3\">{{ 'home.register_btn'|trans }}</a>
                            <a href=\"{{ path('app_login') }}\" class=\"btn btn-outline-secondary btn-lg px-4\">{{ 'home.login_btn'|trans }}</a>
                        {% else %}
                            <a href=\"{{ path('app_profile') }}\" class=\"btn btn-gradient btn-lg px-4\">{{ 'home.profile_btn'|trans }}</a>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "home/index.html.twig", "/var/www/serveur/templates/home/index.html.twig");
    }
}
