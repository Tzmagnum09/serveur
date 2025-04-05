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

/* profile/index.html.twig */
class __TwigTemplate_1eeb4fe3cf1668dfc9cbddcad9d143ea extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/index.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.title"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 6
        yield "<div class=\"sidebar\">
    <h5 class=\"mb-4\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.sidebar.title"), "html", null, true);
        yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">
                <i class=\"fas fa-user me-2\"></i> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.sidebar.overview"), "html", null, true);
        yield "
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
        yield "\">
                <i class=\"fas fa-edit me-2\"></i> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.sidebar.edit_profile"), "html", null, true);
        yield "
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_change_password");
        yield "\">
                <i class=\"fas fa-key me-2\"></i> ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.sidebar.change_password"), "html", null, true);
        yield "
            </a>
        </li>
    </ul>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 29
        yield "<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.overview.title"), "html", null, true);
        yield "</h1>
        <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
        yield "\" class=\"btn btn-gradient\">
            <i class=\"fas fa-edit me-1\"></i> ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.overview.edit_btn"), "html", null, true);
        yield "
        </a>
    </div>
    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.overview.personal_info"), "html", null, true);
        yield "</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <table class=\"table table-borderless\">
                                <tr>
                                    <th class=\"ps-0\" style=\"width: 40%\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.fields.email"), "html", null, true);
        yield "</th>
                                    <td>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.fields.username"), "html", null, true);
        yield "</th>
                                    <td>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "username", [], "any", false, false, false, 53), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.fields.full_name"), "html", null, true);
        yield "</th>
                                    <td>";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "fullName", [], "any", false, false, false, 57), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.fields.phone"), "html", null, true);
        yield "</th>
                                    <td>";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "phoneNumber", [], "any", false, false, false, 61), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.fields.language"), "html", null, true);
        yield "</th>
                                    <td>
                                        ";
        // line 66
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "locale", [], "any", false, false, false, 66) == "fr")) {
            // line 67
            yield "                                            Français
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 68
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 68, $this->source); })()), "locale", [], "any", false, false, false, 68) == "nl")) {
            // line 69
            yield "                                            Nederlands
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 70
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 70, $this->source); })()), "locale", [], "any", false, false, false, 70) == "en")) {
            // line 71
            yield "                                            English
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 72
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 72, $this->source); })()), "locale", [], "any", false, false, false, 72) == "de")) {
            // line 73
            yield "                                            Deutsch
                                        ";
        }
        // line 75
        yield "                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class=\"col-md-6\">
                            <table class=\"table table-borderless\">
                                <tr>
                                    <th class=\"ps-0\" style=\"width: 40%\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.fields.address"), "html", null, true);
        yield "</th>
                                    <td>";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 83, $this->source); })()), "fullAddress", [], "any", false, false, false, 83), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.fields.created_at"), "html", null, true);
        yield "</th>
                                    <td>";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 87, $this->source); })()), "createdAt", [], "any", false, false, false, 87), "d/m/Y"), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.fields.last_login"), "html", null, true);
        yield "</th>
                                    <td>
                                        ";
        // line 92
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 92, $this->source); })()), "lastLoginAt", [], "any", false, false, false, 92)) {
            // line 93
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 93, $this->source); })()), "lastLoginAt", [], "any", false, false, false, 93), "d/m/Y H:i"), "html", null, true);
            yield "
                                        ";
        } else {
            // line 95
            yield "                                            -
                                        ";
        }
        // line 97
        yield "                                    </td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.fields.status"), "html", null, true);
        yield "</th>
                                    <td>
                                        ";
        // line 102
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 102, $this->source); })()), "isVerified", [], "any", false, false, false, 102) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 102, $this->source); })()), "isApproved", [], "any", false, false, false, 102))) {
            // line 103
            yield "                                            <span class=\"badge bg-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.status.active"), "html", null, true);
            yield "</span>
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 104
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 104, $this->source); })()), "isVerified", [], "any", false, false, false, 104) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 104, $this->source); })()), "isApproved", [], "any", false, false, false, 104))) {
            // line 105
            yield "                                            <span class=\"badge bg-warning\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.status.pending_approval"), "html", null, true);
            yield "</span>
                                        ";
        } else {
            // line 107
            yield "                                            <span class=\"badge bg-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.status.unverified"), "html", null, true);
            yield "</span>
                                        ";
        }
        // line 109
        yield "                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
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
        return "profile/index.html.twig";
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
        return array (  321 => 109,  315 => 107,  309 => 105,  307 => 104,  302 => 103,  300 => 102,  295 => 100,  290 => 97,  286 => 95,  280 => 93,  278 => 92,  273 => 90,  267 => 87,  263 => 86,  257 => 83,  253 => 82,  244 => 75,  240 => 73,  238 => 72,  235 => 71,  233 => 70,  230 => 69,  228 => 68,  225 => 67,  223 => 66,  218 => 64,  212 => 61,  208 => 60,  202 => 57,  198 => 56,  192 => 53,  188 => 52,  182 => 49,  178 => 48,  168 => 41,  157 => 33,  153 => 32,  149 => 31,  145 => 29,  135 => 28,  121 => 21,  117 => 20,  110 => 16,  106 => 15,  99 => 11,  95 => 10,  89 => 7,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'profile.title'|trans }}{% endblock %}

{% block sidebar %}
<div class=\"sidebar\">
    <h5 class=\"mb-4\">{{ 'profile.sidebar.title'|trans }}</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"{{ path('app_profile') }}\">
                <i class=\"fas fa-user me-2\"></i> {{ 'profile.sidebar.overview'|trans }}
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_profile_edit') }}\">
                <i class=\"fas fa-edit me-2\"></i> {{ 'profile.sidebar.edit_profile'|trans }}
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_profile_change_password') }}\">
                <i class=\"fas fa-key me-2\"></i> {{ 'profile.sidebar.change_password'|trans }}
            </a>
        </li>
    </ul>
</div>
{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">{{ 'profile.overview.title'|trans }}</h1>
        <a href=\"{{ path('app_profile_edit') }}\" class=\"btn btn-gradient\">
            <i class=\"fas fa-edit me-1\"></i> {{ 'profile.overview.edit_btn'|trans }}
        </a>
    </div>
    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">{{ 'profile.overview.personal_info'|trans }}</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <table class=\"table table-borderless\">
                                <tr>
                                    <th class=\"ps-0\" style=\"width: 40%\">{{ 'profile.fields.email'|trans }}</th>
                                    <td>{{ user.email }}</td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">{{ 'profile.fields.username'|trans }}</th>
                                    <td>{{ user.username }}</td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">{{ 'profile.fields.full_name'|trans }}</th>
                                    <td>{{ user.fullName }}</td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">{{ 'profile.fields.phone'|trans }}</th>
                                    <td>{{ user.phoneNumber }}</td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">{{ 'profile.fields.language'|trans }}</th>
                                    <td>
                                        {% if user.locale == 'fr' %}
                                            Français
                                        {% elseif user.locale == 'nl' %}
                                            Nederlands
                                        {% elseif user.locale == 'en' %}
                                            English
                                        {% elseif user.locale == 'de' %}
                                            Deutsch
                                        {% endif %}
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class=\"col-md-6\">
                            <table class=\"table table-borderless\">
                                <tr>
                                    <th class=\"ps-0\" style=\"width: 40%\">{{ 'profile.fields.address'|trans }}</th>
                                    <td>{{ user.fullAddress }}</td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">{{ 'profile.fields.created_at'|trans }}</th>
                                    <td>{{ user.createdAt|date('d/m/Y') }}</td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">{{ 'profile.fields.last_login'|trans }}</th>
                                    <td>
                                        {% if user.lastLoginAt %}
                                            {{ user.lastLoginAt|date('d/m/Y H:i') }}
                                        {% else %}
                                            -
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <th class=\"ps-0\">{{ 'profile.fields.status'|trans }}</th>
                                    <td>
                                        {% if user.isVerified and user.isApproved %}
                                            <span class=\"badge bg-success\">{{ 'profile.status.active'|trans }}</span>
                                        {% elseif user.isVerified and not user.isApproved %}
                                            <span class=\"badge bg-warning\">{{ 'profile.status.pending_approval'|trans }}</span>
                                        {% else %}
                                            <span class=\"badge bg-danger\">{{ 'profile.status.unverified'|trans }}</span>
                                        {% endif %}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "profile/index.html.twig", "/var/www/serveur/templates/profile/index.html.twig");
    }
}
