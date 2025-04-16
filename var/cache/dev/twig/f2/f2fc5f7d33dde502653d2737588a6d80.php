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

/* super_admin/dashboard.html.twig */
class __TwigTemplate_d3ec7277ff40169d332e71cf42ce4892 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'sidebar' => [$this, 'block_sidebar'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "super_admin/dashboard.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.title"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .filter-badges {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }
        
        .filter-badge {
            padding: 8px 12px;
            border-radius: 20px;
            margin-right: 5px;
            margin-bottom: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .filter-badge:hover {
            transform: translateY(-2px);
        }
        
        .filter-badge.active {
            background: linear-gradient(135deg, #8e44ad, #3498db);
            color: white;
        }
        
        .filter-badge:not(.active) {
            background-color: #eee;
            color: #666;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 41
        yield "<div class=\"sidebar\">
    <h5 class=\"mb-4\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.sidebar.title"), "html", null, true);
        yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_dashboard");
        yield "\">
                <i class=\"fas fa-tachometer-alt me-2\"></i> ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.sidebar.dashboard"), "html", null, true);
        yield "
            </a>
        </li>
    </ul>
    
    <h5 class=\"mb-3 mt-4\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.sidebar.admin_section"), "html", null, true);
        yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
                <i class=\"fas fa-arrow-left me-2\"></i> ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.sidebar.back_to_admin"), "html", null, true);
        yield "
            </a>
        </li>
    </ul>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 63
        yield "<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.title"), "html", null, true);
        yield "</h1>
        <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_dashboard");
        yield "\" class=\"btn btn-outline-primary\">
            <i class=\"fas fa-sync-alt me-1\"></i> ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.reset_filters"), "html", null, true);
        yield "
        </a>
    </div>
    
    <div class=\"row mb-4\">
        <div class=\"col-lg-3 col-md-6 mb-4\">
            <div class=\"stats-card\">
                <div class=\"stats-icon\">
                    <i class=\"fas fa-user-shield\"></i>
                </div>
                <div class=\"stats-info\">
                    <div class=\"stats-title\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.stats.admins"), "html", null, true);
        yield "</div>
                    <div class=\"stats-value\">";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["admins"]) || array_key_exists("admins", $context) ? $context["admins"] : (function () { throw new RuntimeError('Variable "admins" does not exist.', 79, $this->source); })())), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-3 col-md-6 mb-4\">
            <div class=\"stats-card\">
                <div class=\"stats-icon\">
                    <i class=\"fas fa-users-cog\"></i>
                </div>
                <div class=\"stats-info\">
                    <div class=\"stats-title\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.stats.super_admins"), "html", null, true);
        yield "</div>
                    <div class=\"stats-value\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("super_admin_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["super_admin_count"]) || array_key_exists("super_admin_count", $context) ? $context["super_admin_count"] : (function () { throw new RuntimeError('Variable "super_admin_count" does not exist.', 91, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-3 col-md-6 mb-4\">
            <div class=\"stats-card\">
                <div class=\"stats-icon\">
                    <i class=\"fas fa-users\"></i>
                </div>
                <div class=\"stats-info\">
                    <div class=\"stats-title\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.stats.total_users"), "html", null, true);
        yield "</div>
                    <div class=\"stats-value\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("user_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["user_count"]) || array_key_exists("user_count", $context) ? $context["user_count"] : (function () { throw new RuntimeError('Variable "user_count" does not exist.', 103, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-3 col-md-6 mb-4\">
            <div class=\"stats-card\">
                <div class=\"stats-icon\">
                    <i class=\"fas fa-key\"></i>
                </div>
                <div class=\"stats-info\">
                    <div class=\"stats-title\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.stats.permissions"), "html", null, true);
        yield "</div>
                    <div class=\"stats-value\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("permission_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["permission_count"]) || array_key_exists("permission_count", $context) ? $context["permission_count"] : (function () { throw new RuntimeError('Variable "permission_count" does not exist.', 115, $this->source); })()), 6)) : (6)), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\">";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.admins_list"), "html", null, true);
        yield "</h5>
            
            ";
        // line 125
        if (((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 125, $this->source); })()), "")) : (""))) {
            // line 126
            yield "                <span class=\"badge bg-info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("super_admin.dashboard.filtered_by_" . (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 126, $this->source); })()))), "html", null, true);
            yield "</span>
            ";
        }
        // line 128
        yield "        </div>
        <div class=\"card-body p-0\">
            <div class=\"filter-badges px-3 pt-3\">
                <a href=\"";
        // line 131
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_dashboard");
        yield "\" class=\"filter-badge ";
        yield (((((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 131, $this->source); })()), "")) : ("")) == "")) ? ("active") : (""));
        yield "\">
                    ";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.filter_all"), "html", null, true);
        yield "
                </a>
                <a href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_dashboard", ["filter" => "admins_only"]);
        yield "\" class=\"filter-badge ";
        yield (((((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 134, $this->source); })()), "")) : ("")) == "admins_only")) ? ("active") : (""));
        yield "\">
                    ";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.filter_admins"), "html", null, true);
        yield "
                </a>
                <a href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_dashboard", ["filter" => "super_admins"]);
        yield "\" class=\"filter-badge ";
        yield (((((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 137, $this->source); })()), "")) : ("")) == "super_admins")) ? ("active") : (""));
        yield "\">
                    ";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.filter_super_admins"), "html", null, true);
        yield "
                </a>
                <a href=\"";
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_dashboard", ["filter" => "recent"]);
        yield "\" class=\"filter-badge ";
        yield (((((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 140, $this->source); })()), "")) : ("")) == "recent")) ? ("active") : (""));
        yield "\">
                    ";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.filter_recent"), "html", null, true);
        yield "
                </a>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0\">
                    <thead>
                        <tr>
                            <th>";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.admin_name"), "html", null, true);
        yield "</th>
                            <th>";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.admin_email"), "html", null, true);
        yield "</th>
                            <th>";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.created_at"), "html", null, true);
        yield "</th>
                            <th>";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.last_login"), "html", null, true);
        yield "</th>
                            <th>";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.actions"), "html", null, true);
        yield "</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["admins"]) || array_key_exists("admins", $context) ? $context["admins"] : (function () { throw new RuntimeError('Variable "admins" does not exist.', 156, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 157
            yield "                            <tr>
                                <td>";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "fullName", [], "any", false, false, false, 158), "html", null, true);
            yield "</td>
                                <td>";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "email", [], "any", false, false, false, 159), "html", null, true);
            yield "</td>
                                <td>";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "createdAt", [], "any", false, false, false, 160), "d/m/Y"), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 162
            if (CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "lastLoginAt", [], "any", false, false, false, 162)) {
                // line 163
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "lastLoginAt", [], "any", false, false, false, 163), "d/m/Y H:i"), "html", null, true);
                yield "
                                    ";
            } else {
                // line 165
                yield "                                        -
                                    ";
            }
            // line 167
            yield "                                </td>
                                <td>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "id", [], "any", false, false, false, 170)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        
                                        ";
            // line 174
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "email", [], "any", false, false, false, 174) != "admin@dmqode.be")) {
                // line 175
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_permissions", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "id", [], "any", false, false, false, 175)]), "html", null, true);
                yield "\" class=\"btn btn-outline-secondary\">
                                                <i class=\"fas fa-key\"></i>
                                            </a>
                                            
                                            <form method=\"post\" action=\"";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_demote", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "id", [], "any", false, false, false, 179)]), "html", null, true);
                yield "\" style=\"display: inline-block;\" onsubmit=\"return confirm('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.confirm_demote"), "html", null, true);
                yield "')\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 180
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("demote" . CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "id", [], "any", false, false, false, 180))), "html", null, true);
                yield "\">
                                                <button type=\"submit\" class=\"btn btn-outline-danger\">
                                                    <i class=\"fas fa-user-minus\"></i>
                                                </button>
                                            </form>
                                            
                                            ";
                // line 186
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "isSuperAdmin", [], "any", false, false, false, 186)) {
                    // line 187
                    yield "                                                <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_promote_super", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "id", [], "any", false, false, false, 187)]), "html", null, true);
                    yield "\" style=\"display: inline-block;\" onsubmit=\"return confirm('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.confirm_promote_super"), "html", null, true);
                    yield "')\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 188
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("promote-super" . CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "id", [], "any", false, false, false, 188))), "html", null, true);
                    yield "\">
                                                    <button type=\"submit\" class=\"btn btn-outline-primary\">
                                                        <i class=\"fas fa-user-shield\"></i>
                                                    </button>
                                                </form>
                                            ";
                }
                // line 194
                yield "                                        ";
            }
            // line 195
            yield "                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 198
        if (!$context['_iterated']) {
            // line 199
            yield "                            <tr>
                                <td colspan=\"5\" class=\"text-center py-4\">";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.no_admins"), "html", null, true);
            yield "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['admin'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.promote_user"), "html", null, true);
        yield "</h5>
        </div>
        <div class=\"card-body\">
            <form action=\"";
        // line 214
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_dashboard");
        yield "\" method=\"get\" class=\"row g-3\">
                <div class=\"col-md-10\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" id=\"userSearch\" name=\"q\" value=\"";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 217, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.search_users"), "html", null, true);
        yield "\">
                        ";
        // line 218
        if (((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 218, $this->source); })()), "")) : (""))) {
            // line 219
            yield "                            <input type=\"hidden\" name=\"filter\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 219, $this->source); })()), "html", null, true);
            yield "\">
                        ";
        }
        // line 221
        yield "                        <button type=\"submit\" class=\"btn btn-gradient\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.search"), "html", null, true);
        yield "</button>
                        ";
        // line 222
        if (((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 222, $this->source); })()), "")) : (""))) {
            // line 223
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_dashboard", ["filter" => ((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 223, $this->source); })()), "")) : (""))]), "html", null, true);
            yield "\" class=\"btn btn-outline-danger\">
                                <i class=\"fas fa-times\"></i>
                            </a>
                        ";
        }
        // line 227
        yield "                    </div>
                </div>
            </form>
            
            ";
        // line 231
        if ( !Twig\Extension\CoreExtension::testEmpty(((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 231, $this->source); })()), "")) : ("")))) {
            // line 232
            yield "                <div class=\"search-results mt-4\">
                    <h6>";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.search_results"), "html", null, true);
            yield " \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 233, $this->source); })()), "html", null, true);
            yield "\"</h6>
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.user_name"), "html", null, true);
            yield "</th>
                                    <th>";
            // line 239
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.user_email"), "html", null, true);
            yield "</th>
                                    <th>";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.user_role"), "html", null, true);
            yield "</th>
                                    <th>";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.actions"), "html", null, true);
            yield "</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 245
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("search_results", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search_results"]) || array_key_exists("search_results", $context) ? $context["search_results"] : (function () { throw new RuntimeError('Variable "search_results" does not exist.', 245, $this->source); })()), [])) : ([])));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 246
                yield "                                    <tr>
                                        <td>";
                // line 247
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 247), "html", null, true);
                yield "</td>
                                        <td>";
                // line 248
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 248), "html", null, true);
                yield "</td>
                                        <td>
                                            ";
                // line 250
                if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isSuperAdmin", [], "any", false, false, false, 250)) {
                    // line 251
                    yield "                                                <span class=\"badge bg-danger\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.role_super_admin"), "html", null, true);
                    yield "</span>
                                            ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 252
$context["user"], "isAdmin", [], "any", false, false, false, 252)) {
                    // line 253
                    yield "                                                <span class=\"badge bg-primary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.role_admin"), "html", null, true);
                    yield "</span>
                                            ";
                } else {
                    // line 255
                    yield "                                                <span class=\"badge bg-secondary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.role_user"), "html", null, true);
                    yield "</span>
                                            ";
                }
                // line 257
                yield "                                        </td>
                                        <td>
                                            ";
                // line 259
                if (( !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isAdmin", [], "any", false, false, false, 259) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isSuperAdmin", [], "any", false, false, false, 259))) {
                    // line 260
                    yield "                                                <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_promote", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 260)]), "html", null, true);
                    yield "\" style=\"display: inline-block;\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 261
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("promote" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 261))), "html", null, true);
                    yield "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-primary\">
                                                        <i class=\"fas fa-user-plus me-1\"></i> ";
                    // line 263
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.promote_to_admin"), "html", null, true);
                    yield "
                                                    </button>
                                                </form>
                                            ";
                }
                // line 267
                yield "                                        </td>
                                    </tr>
                                ";
                $context['_iterated'] = true;
            }
            // line 269
            if (!$context['_iterated']) {
                // line 270
                yield "                                    <tr>
                                        <td colspan=\"4\" class=\"text-center py-3\">";
                // line 271
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.no_results"), "html", null, true);
                yield "</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 274
            yield "                            </tbody>
                        </table>
                    </div>
                </div>
            ";
        }
        // line 279
        yield "        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 284
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 285
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mettez automatiquement le focus sur le champ de recherche utilisateur
            const searchInput = document.getElementById('userSearch');
            if (searchInput) {
                searchInput.focus();
            }
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "super_admin/dashboard.html.twig";
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
        return array (  692 => 285,  682 => 284,  671 => 279,  664 => 274,  655 => 271,  652 => 270,  650 => 269,  644 => 267,  637 => 263,  632 => 261,  627 => 260,  625 => 259,  621 => 257,  615 => 255,  609 => 253,  607 => 252,  602 => 251,  600 => 250,  595 => 248,  591 => 247,  588 => 246,  583 => 245,  576 => 241,  572 => 240,  568 => 239,  564 => 238,  554 => 233,  551 => 232,  549 => 231,  543 => 227,  535 => 223,  533 => 222,  528 => 221,  522 => 219,  520 => 218,  514 => 217,  508 => 214,  502 => 211,  492 => 203,  483 => 200,  480 => 199,  478 => 198,  471 => 195,  468 => 194,  459 => 188,  452 => 187,  450 => 186,  441 => 180,  435 => 179,  427 => 175,  425 => 174,  418 => 170,  413 => 167,  409 => 165,  403 => 163,  401 => 162,  396 => 160,  392 => 159,  388 => 158,  385 => 157,  380 => 156,  373 => 152,  369 => 151,  365 => 150,  361 => 149,  357 => 148,  347 => 141,  341 => 140,  336 => 138,  330 => 137,  325 => 135,  319 => 134,  314 => 132,  308 => 131,  303 => 128,  297 => 126,  295 => 125,  290 => 123,  279 => 115,  275 => 114,  261 => 103,  257 => 102,  243 => 91,  239 => 90,  225 => 79,  221 => 78,  207 => 67,  203 => 66,  199 => 65,  195 => 63,  185 => 62,  171 => 55,  167 => 54,  161 => 51,  153 => 46,  149 => 45,  143 => 42,  140 => 41,  130 => 40,  88 => 6,  78 => 5,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'super_admin.dashboard.title'|trans }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .filter-badges {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }
        
        .filter-badge {
            padding: 8px 12px;
            border-radius: 20px;
            margin-right: 5px;
            margin-bottom: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .filter-badge:hover {
            transform: translateY(-2px);
        }
        
        .filter-badge.active {
            background: linear-gradient(135deg, #8e44ad, #3498db);
            color: white;
        }
        
        .filter-badge:not(.active) {
            background-color: #eee;
            color: #666;
        }
    </style>
{% endblock %}

{% block sidebar %}
<div class=\"sidebar\">
    <h5 class=\"mb-4\">{{ 'super_admin.sidebar.title'|trans }}</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"{{ path('app_super_admin_dashboard') }}\">
                <i class=\"fas fa-tachometer-alt me-2\"></i> {{ 'super_admin.sidebar.dashboard'|trans }}
            </a>
        </li>
    </ul>
    
    <h5 class=\"mb-3 mt-4\">{{ 'super_admin.sidebar.admin_section'|trans }}</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_admin_dashboard') }}\">
                <i class=\"fas fa-arrow-left me-2\"></i> {{ 'super_admin.sidebar.back_to_admin'|trans }}
            </a>
        </li>
    </ul>
</div>
{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">{{ 'super_admin.dashboard.title'|trans }}</h1>
        <a href=\"{{ path('app_super_admin_dashboard') }}\" class=\"btn btn-outline-primary\">
            <i class=\"fas fa-sync-alt me-1\"></i> {{ 'admin.users.reset_filters'|trans }}
        </a>
    </div>
    
    <div class=\"row mb-4\">
        <div class=\"col-lg-3 col-md-6 mb-4\">
            <div class=\"stats-card\">
                <div class=\"stats-icon\">
                    <i class=\"fas fa-user-shield\"></i>
                </div>
                <div class=\"stats-info\">
                    <div class=\"stats-title\">{{ 'super_admin.dashboard.stats.admins'|trans }}</div>
                    <div class=\"stats-value\">{{ admins|length }}</div>
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-3 col-md-6 mb-4\">
            <div class=\"stats-card\">
                <div class=\"stats-icon\">
                    <i class=\"fas fa-users-cog\"></i>
                </div>
                <div class=\"stats-info\">
                    <div class=\"stats-title\">{{ 'super_admin.dashboard.stats.super_admins'|trans }}</div>
                    <div class=\"stats-value\">{{ super_admin_count|default(0) }}</div>
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-3 col-md-6 mb-4\">
            <div class=\"stats-card\">
                <div class=\"stats-icon\">
                    <i class=\"fas fa-users\"></i>
                </div>
                <div class=\"stats-info\">
                    <div class=\"stats-title\">{{ 'super_admin.dashboard.stats.total_users'|trans }}</div>
                    <div class=\"stats-value\">{{ user_count|default(0) }}</div>
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-3 col-md-6 mb-4\">
            <div class=\"stats-card\">
                <div class=\"stats-icon\">
                    <i class=\"fas fa-key\"></i>
                </div>
                <div class=\"stats-info\">
                    <div class=\"stats-title\">{{ 'super_admin.dashboard.stats.permissions'|trans }}</div>
                    <div class=\"stats-value\">{{ permission_count|default(6) }}</div>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\">{{ 'super_admin.dashboard.admins_list'|trans }}</h5>
            
            {% if filter|default('') %}
                <span class=\"badge bg-info\">{{ ('super_admin.dashboard.filtered_by_'~filter)|trans }}</span>
            {% endif %}
        </div>
        <div class=\"card-body p-0\">
            <div class=\"filter-badges px-3 pt-3\">
                <a href=\"{{ path('app_super_admin_dashboard') }}\" class=\"filter-badge {{ filter|default('') == '' ? 'active' : '' }}\">
                    {{ 'super_admin.dashboard.filter_all'|trans }}
                </a>
                <a href=\"{{ path('app_super_admin_dashboard', {'filter': 'admins_only'}) }}\" class=\"filter-badge {{ filter|default('') == 'admins_only' ? 'active' : '' }}\">
                    {{ 'super_admin.dashboard.filter_admins'|trans }}
                </a>
                <a href=\"{{ path('app_super_admin_dashboard', {'filter': 'super_admins'}) }}\" class=\"filter-badge {{ filter|default('') == 'super_admins' ? 'active' : '' }}\">
                    {{ 'super_admin.dashboard.filter_super_admins'|trans }}
                </a>
                <a href=\"{{ path('app_super_admin_dashboard', {'filter': 'recent'}) }}\" class=\"filter-badge {{ filter|default('') == 'recent' ? 'active' : '' }}\">
                    {{ 'super_admin.dashboard.filter_recent'|trans }}
                </a>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0\">
                    <thead>
                        <tr>
                            <th>{{ 'super_admin.dashboard.admin_name'|trans }}</th>
                            <th>{{ 'super_admin.dashboard.admin_email'|trans }}</th>
                            <th>{{ 'super_admin.dashboard.created_at'|trans }}</th>
                            <th>{{ 'super_admin.dashboard.last_login'|trans }}</th>
                            <th>{{ 'super_admin.dashboard.actions'|trans }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for admin in admins %}
                            <tr>
                                <td>{{ admin.fullName }}</td>
                                <td>{{ admin.email }}</td>
                                <td>{{ admin.createdAt|date('d/m/Y') }}</td>
                                <td>
                                    {% if admin.lastLoginAt %}
                                        {{ admin.lastLoginAt|date('d/m/Y H:i') }}
                                    {% else %}
                                        -
                                    {% endif %}
                                </td>
                                <td>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"{{ path('app_admin_user_edit', {'id': admin.id}) }}\" class=\"btn btn-outline-primary\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        
                                        {% if admin.email != 'admin@dmqode.be' %}
                                            <a href=\"{{ path('app_super_admin_permissions', {'id': admin.id}) }}\" class=\"btn btn-outline-secondary\">
                                                <i class=\"fas fa-key\"></i>
                                            </a>
                                            
                                            <form method=\"post\" action=\"{{ path('app_super_admin_demote', {'id': admin.id}) }}\" style=\"display: inline-block;\" onsubmit=\"return confirm('{{ 'super_admin.dashboard.confirm_demote'|trans }}')\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('demote' ~ admin.id) }}\">
                                                <button type=\"submit\" class=\"btn btn-outline-danger\">
                                                    <i class=\"fas fa-user-minus\"></i>
                                                </button>
                                            </form>
                                            
                                            {% if not admin.isSuperAdmin %}
                                                <form method=\"post\" action=\"{{ path('app_super_admin_promote_super', {'id': admin.id}) }}\" style=\"display: inline-block;\" onsubmit=\"return confirm('{{ 'super_admin.dashboard.confirm_promote_super'|trans }}')\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('promote-super' ~ admin.id) }}\">
                                                    <button type=\"submit\" class=\"btn btn-outline-primary\">
                                                        <i class=\"fas fa-user-shield\"></i>
                                                    </button>
                                                </form>
                                            {% endif %}
                                        {% endif %}
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"5\" class=\"text-center py-4\">{{ 'super_admin.dashboard.no_admins'|trans }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">{{ 'super_admin.dashboard.promote_user'|trans }}</h5>
        </div>
        <div class=\"card-body\">
            <form action=\"{{ path('app_super_admin_dashboard') }}\" method=\"get\" class=\"row g-3\">
                <div class=\"col-md-10\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" id=\"userSearch\" name=\"q\" value=\"{{ search|default('') }}\" placeholder=\"{{ 'super_admin.dashboard.search_users'|trans }}\">
                        {% if filter|default('') %}
                            <input type=\"hidden\" name=\"filter\" value=\"{{ filter }}\">
                        {% endif %}
                        <button type=\"submit\" class=\"btn btn-gradient\">{{ 'super_admin.dashboard.search'|trans }}</button>
                        {% if search|default('') %}
                            <a href=\"{{ path('app_super_admin_dashboard', {'filter': filter|default('')}) }}\" class=\"btn btn-outline-danger\">
                                <i class=\"fas fa-times\"></i>
                            </a>
                        {% endif %}
                    </div>
                </div>
            </form>
            
            {% if search|default('') is not empty %}
                <div class=\"search-results mt-4\">
                    <h6>{{ 'super_admin.dashboard.search_results'|trans }} \"{{ search }}\"</h6>
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>{{ 'super_admin.dashboard.user_name'|trans }}</th>
                                    <th>{{ 'super_admin.dashboard.user_email'|trans }}</th>
                                    <th>{{ 'super_admin.dashboard.user_role'|trans }}</th>
                                    <th>{{ 'super_admin.dashboard.actions'|trans }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for user in search_results|default([]) %}
                                    <tr>
                                        <td>{{ user.fullName }}</td>
                                        <td>{{ user.email }}</td>
                                        <td>
                                            {% if user.isSuperAdmin %}
                                                <span class=\"badge bg-danger\">{{ 'super_admin.dashboard.role_super_admin'|trans }}</span>
                                            {% elseif user.isAdmin %}
                                                <span class=\"badge bg-primary\">{{ 'super_admin.dashboard.role_admin'|trans }}</span>
                                            {% else %}
                                                <span class=\"badge bg-secondary\">{{ 'super_admin.dashboard.role_user'|trans }}</span>
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% if not user.isAdmin and not user.isSuperAdmin %}
                                                <form method=\"post\" action=\"{{ path('app_super_admin_promote', {'id': user.id}) }}\" style=\"display: inline-block;\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('promote' ~ user.id) }}\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-primary\">
                                                        <i class=\"fas fa-user-plus me-1\"></i> {{ 'super_admin.dashboard.promote_to_admin'|trans }}
                                                    </button>
                                                </form>
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"4\" class=\"text-center py-3\">{{ 'super_admin.dashboard.no_results'|trans }}</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mettez automatiquement le focus sur le champ de recherche utilisateur
            const searchInput = document.getElementById('userSearch');
            if (searchInput) {
                searchInput.focus();
            }
        });
    </script>
{% endblock %}", "super_admin/dashboard.html.twig", "/var/www/serveur/templates/super_admin/dashboard.html.twig");
    }
}
