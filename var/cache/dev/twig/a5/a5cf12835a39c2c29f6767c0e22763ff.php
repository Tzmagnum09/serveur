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

/* partials/navbar_utf8.html.twig */
class __TwigTemplate_19d0f6a2244ce5a0e9552fec0889f754 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navbar_utf8.html.twig"));

        // line 1
        yield "<nav class=\"navbar navbar-expand-lg navbar-dark navbar-custom\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
            <img src=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("site.name"), "html", null, true);
        yield "\">
        </a>
        
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 14
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "get", ["_route"], "method", false, false, false, 14) == "app_home")) {
            yield "active";
        }
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                        ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("navbar.home"), "html", null, true);
        yield "
                    </a>
                </li>
                
                ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 20
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 21
            if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "get", ["_route"], "method", false, false, false, 21)) && is_string($_v1 = "app_super_admin") && str_starts_with($_v0, $_v1))) {
                yield "active";
            }
            yield "\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_dashboard");
            yield "\">
                            ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("navbar.super_admin"), "html", null, true);
            yield "
                        </a>
                    </li>
                ";
        }
        // line 26
        yield "                
                ";
        // line 27
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 28
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 29
            if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "get", ["_route"], "method", false, false, false, 29)) && is_string($_v3 = "app_admin") && str_starts_with($_v2, $_v3))) {
                yield "active";
            }
            yield "\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
            yield "\">
                            ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("navbar.admin"), "html", null, true);
            yield "
                        </a>
                    </li>
                ";
        }
        // line 34
        yield "            </ul>
            
            <ul class=\"navbar-nav\">
                ";
        // line 37
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37)) {
            // line 38
            yield "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "fullName", [], "any", false, false, false, 40), "html", null, true);
            yield "
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                            <li>
                                <a class=\"dropdown-item\" href=\"";
            // line 44
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\">
                                    <i class=\"fas fa-user me-2\"></i> ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("navbar.profile"), "html", null, true);
            yield "
                                </a>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
            // line 50
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                    <i class=\"fas fa-sign-out-alt me-2\"></i> ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("navbar.logout"), "html", null, true);
            yield "
                                </a>
                            </li>
                        </ul>
                    </li>
                ";
        } else {
            // line 57
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 58
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
                            <i class=\"fas fa-sign-in-alt me-1\"></i> ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("navbar.login"), "html", null, true);
            yield "
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 63
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">
                            <i class=\"fas fa-user-plus me-1\"></i> ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("navbar.register"), "html", null, true);
            yield "
                        </a>
                    </li>
                ";
        }
        // line 68
        yield "                
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"languageDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        ";
        // line 71
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "request", [], "any", false, false, false, 71), "locale", [], "any", false, false, false, 71) == "fr")) {
            // line 72
            yield "                            <i class=\"fas fa-flag me-1\"></i> FR
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 73
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "locale", [], "any", false, false, false, 73) == "nl")) {
            // line 74
            yield "                            <i class=\"fas fa-flag me-1\"></i> NL
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 75
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "request", [], "any", false, false, false, 75), "locale", [], "any", false, false, false, 75) == "en")) {
            // line 76
            yield "                            <i class=\"fas fa-flag me-1\"></i> EN
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 77
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "request", [], "any", false, false, false, 77), "locale", [], "any", false, false, false, 77) == "de")) {
            // line 78
            yield "                            <i class=\"fas fa-flag me-1\"></i> DE
                        ";
        }
        // line 80
        yield "                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"languageDropdown\">
                        <li>
                            <a class=\"dropdown-item\" href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_locale", ["locale" => "fr"]);
        yield "\">
                                Français
                            </a>
                        </li>
                        <li>
                            <a class=\"dropdown-item\" href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_locale", ["locale" => "nl"]);
        yield "\">
                                Nederlands
                            </a>
                        </li>
                        <li>
                            <a class=\"dropdown-item\" href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_locale", ["locale" => "en"]);
        yield "\">
                                English
                            </a>
                        </li>
                        <li>
                            <a class=\"dropdown-item\" href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_locale", ["locale" => "de"]);
        yield "\">
                                Deutsch
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/navbar_utf8.html.twig";
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
        return array (  249 => 98,  241 => 93,  233 => 88,  225 => 83,  220 => 80,  216 => 78,  214 => 77,  211 => 76,  209 => 75,  206 => 74,  204 => 73,  201 => 72,  199 => 71,  194 => 68,  187 => 64,  183 => 63,  176 => 59,  172 => 58,  169 => 57,  160 => 51,  156 => 50,  148 => 45,  144 => 44,  137 => 40,  133 => 38,  131 => 37,  126 => 34,  119 => 30,  111 => 29,  108 => 28,  106 => 27,  103 => 26,  96 => 22,  88 => 21,  85 => 20,  83 => 19,  76 => 15,  68 => 14,  53 => 4,  49 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark navbar-custom\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">
            <img src=\"{{ asset('images/logo.png') }}\" alt=\"{{ 'site.name'|trans }}\">
        </a>
        
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if app.request.get('_route') == 'app_home' %}active{% endif %}\" href=\"{{ path('app_home') }}\">
                        {{ 'navbar.home'|trans }}
                    </a>
                </li>
                
                {% if is_granted('ROLE_SUPER_ADMIN') %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if app.request.get('_route') starts with 'app_super_admin' %}active{% endif %}\" href=\"{{ path('app_super_admin_dashboard') }}\">
                            {{ 'navbar.super_admin'|trans }}
                        </a>
                    </li>
                {% endif %}
                
                {% if is_granted('ROLE_ADMIN') %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if app.request.get('_route') starts with 'app_admin' %}active{% endif %}\" href=\"{{ path('app_admin_dashboard') }}\">
                            {{ 'navbar.admin'|trans }}
                        </a>
                    </li>
                {% endif %}
            </ul>
            
            <ul class=\"navbar-nav\">
                {% if app.user %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            {{ app.user.fullName }}
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('app_profile') }}\">
                                    <i class=\"fas fa-user me-2\"></i> {{ 'navbar.profile'|trans }}
                                </a>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">
                                    <i class=\"fas fa-sign-out-alt me-2\"></i> {{ 'navbar.logout'|trans }}
                                </a>
                            </li>
                        </ul>
                    </li>
                {% else %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_login') }}\">
                            <i class=\"fas fa-sign-in-alt me-1\"></i> {{ 'navbar.login'|trans }}
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_register') }}\">
                            <i class=\"fas fa-user-plus me-1\"></i> {{ 'navbar.register'|trans }}
                        </a>
                    </li>
                {% endif %}
                
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"languageDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        {% if app.request.locale == 'fr' %}
                            <i class=\"fas fa-flag me-1\"></i> FR
                        {% elseif app.request.locale == 'nl' %}
                            <i class=\"fas fa-flag me-1\"></i> NL
                        {% elseif app.request.locale == 'en' %}
                            <i class=\"fas fa-flag me-1\"></i> EN
                        {% elseif app.request.locale == 'de' %}
                            <i class=\"fas fa-flag me-1\"></i> DE
                        {% endif %}
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"languageDropdown\">
                        <li>
                            <a class=\"dropdown-item\" href=\"{{ path('change_locale', {'locale': 'fr'}) }}\">
                                Français
                            </a>
                        </li>
                        <li>
                            <a class=\"dropdown-item\" href=\"{{ path('change_locale', {'locale': 'nl'}) }}\">
                                Nederlands
                            </a>
                        </li>
                        <li>
                            <a class=\"dropdown-item\" href=\"{{ path('change_locale', {'locale': 'en'}) }}\">
                                English
                            </a>
                        </li>
                        <li>
                            <a class=\"dropdown-item\" href=\"{{ path('change_locale', {'locale': 'de'}) }}\">
                                Deutsch
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>", "partials/navbar_utf8.html.twig", "/var/www/serveur/templates/partials/navbar_utf8.html.twig");
    }
}
