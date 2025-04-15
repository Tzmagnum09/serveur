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

/* admin/users.html.twig */
class __TwigTemplate_b47d347e7b4b15ee84c1b6059a482a64 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/users.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.title"), "html", null, true);
        
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
        /* Style pour la barre de recherche et les filtres */
        .search-filter-container {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            margin-bottom: 1.5rem;
        }
        
        .search-filter-container .form-control:focus {
            border-color: #8e44ad;
            box-shadow: 0 0 0 0.25rem rgba(142, 68, 173, 0.25);
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
        
        /* Responsive table */
        .table-responsive {
            border-radius: 10px;
            overflow: hidden;
        }
        
        /* User status styles */
        .status-badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: 500;
            font-size: 0.85rem;
        }
        
        /* Sorting styles */
        .sort-link {
            color: inherit;
            text-decoration: none;
            white-space: nowrap;
        }
        
        .sort-link:hover {
            color: #8e44ad;
        }
        
        .sort-link i {
            margin-left: 0.25rem;
        }
        
        /* Action buttons styles */
        .action-btn-group .btn {
            margin-right: 0.25rem;
            margin-bottom: 0.25rem;
        }
        
        /* Empty state */
        .empty-state {
            text-align: center;
            padding: 3rem 0;
        }
        
        .empty-state i {
            font-size: 3rem;
            color: #ccc;
            margin-bottom: 1rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 96
        yield "<div class=\"sidebar\">
    <h5 class=\"mb-4\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.title"), "html", null, true);
        yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
                <i class=\"fas fa-tachometer-alt me-2\"></i> ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.dashboard"), "html", null, true);
        yield "
            </a>
        </li>
        ";
        // line 104
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "isAdmin", [], "method", false, false, false, 104) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 104, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "manage_users"], "method", false, false, false, 104)))) {
            // line 105
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
            // line 106
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
            yield "\">
                <i class=\"fas fa-users me-2\"></i> ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.users"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 111
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), "isAdmin", [], "method", false, false, false, 111) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 111, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), "edit_email_templates"], "method", false, false, false, 111)))) {
            // line 112
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 113
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_templates");
            yield "\">
                <i class=\"fas fa-envelope me-2\"></i> ";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.email_templates"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 118
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "user", [], "any", false, false, false, 118), "isAdmin", [], "method", false, false, false, 118) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 118, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "user", [], "any", false, false, false, 118), "translate_content"], "method", false, false, false, 118)))) {
            // line 119
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 120
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_translations");
            yield "\">
                <i class=\"fas fa-language me-2\"></i> ";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.translations"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 125
        yield "    </ul>
    
    ";
        // line 127
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 128
            yield "    <h5 class=\"mb-3 mt-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_admin"), "html", null, true);
            yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 131
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_dashboard");
            yield "\">
                <i class=\"fas fa-shield-alt me-2\"></i> ";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_dashboard"), "html", null, true);
            yield "
            </a>
        </li>
    </ul>
    ";
        }
        // line 137
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 140
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 141
        yield "<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.title"), "html", null, true);
        yield "</h1>
        <div class=\"d-flex\">
            <a href=\"";
        // line 145
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"btn btn-outline-secondary me-2\">
                <i class=\"fas fa-arrow-left me-1\"></i> ";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.back_btn"), "html", null, true);
        yield "
            </a>
        </div>
    </div>
    
    <!-- Barre de recherche et filtres améliorés -->
    <div class=\"search-filter-container\">
        <div class=\"row g-3 mb-3 align-items-center\">
            <div class=\"col-md-7\">
                <form method=\"get\" action=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"d-flex\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white\">
                            <i class=\"fas fa-search text-muted\"></i>
                        </span>
                        <input type=\"text\" name=\"q\" class=\"form-control form-control-lg border-start-0\" placeholder=\"";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.search_placeholder"), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 160, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                        <button type=\"submit\" class=\"btn btn-gradient\">
                            ";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.search_btn"), "html", null, true);
        yield "
                        </button>
                    </div>
                </form>
            </div>
            
            <div class=\"col-md-5\">
                <div class=\"d-flex align-items-center justify-content-md-end mt-3 mt-md-0\">
                    <span class=\"text-muted me-2\">";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.sort_by"), "html", null, true);
        yield ":</span>
                    <select class=\"form-select\" id=\"sort-select\">
                        <option value=\"lastName\" ";
        // line 172
        if ((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 172, $this->source); })()), "lastName")) : ("lastName")) == "lastName")) {
            yield "selected";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.sort_name"), "html", null, true);
        yield "</option>
                        <option value=\"createdAt\" ";
        // line 173
        if ((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 173, $this->source); })()), "lastName")) : ("lastName")) == "createdAt")) {
            yield "selected";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.sort_date"), "html", null, true);
        yield "</option>
                        <option value=\"lastLoginAt\" ";
        // line 174
        if ((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 174, $this->source); })()), "lastName")) : ("lastName")) == "lastLoginAt")) {
            yield "selected";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.sort_login"), "html", null, true);
        yield "</option>
                    </select>
                    <button class=\"btn btn-outline-secondary ms-2\" id=\"sort-direction-btn\" title=\"";
        // line 176
        yield (((((array_key_exists("direction", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 176, $this->source); })()), "ASC")) : ("ASC")) == "ASC")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.sort_desc"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.sort_asc"), "html", null, true)));
        yield "\">
                        <i class=\"fas fa-sort-";
        // line 177
        yield (((((array_key_exists("direction", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 177, $this->source); })()), "ASC")) : ("ASC")) == "ASC")) ? ("down") : ("up"));
        yield "\"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <div class=\"filter-badges d-flex flex-wrap\">
            <a href=\"";
        // line 184
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"filter-badge ";
        yield (((((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 184, $this->source); })()), "")) : ("")) == "")) ? ("active") : (""));
        yield "\">
                ";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.filter_all"), "html", null, true);
        yield "
            </a>
            <a href=\"";
        // line 187
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["filter" => "verified"]);
        yield "\" class=\"filter-badge ";
        yield (((((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 187, $this->source); })()), "")) : ("")) == "verified")) ? ("active") : (""));
        yield "\">
                ";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.filter_verified"), "html", null, true);
        yield "
            </a>
            <a href=\"";
        // line 190
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["filter" => "unverified"]);
        yield "\" class=\"filter-badge ";
        yield (((((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 190, $this->source); })()), "")) : ("")) == "unverified")) ? ("active") : (""));
        yield "\">
                ";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.filter_unverified"), "html", null, true);
        yield "
            </a>
            <a href=\"";
        // line 193
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["filter" => "approved"]);
        yield "\" class=\"filter-badge ";
        yield (((((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 193, $this->source); })()), "")) : ("")) == "approved")) ? ("active") : (""));
        yield "\">
                ";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.filter_approved"), "html", null, true);
        yield "
            </a>
            <a href=\"";
        // line 196
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["filter" => "pending"]);
        yield "\" class=\"filter-badge ";
        yield (((((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 196, $this->source); })()), "")) : ("")) == "pending")) ? ("active") : (""));
        yield "\">
                ";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.filter_pending"), "html", null, true);
        yield "
            </a>
            <a href=\"";
        // line 199
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["filter" => "admins"]);
        yield "\" class=\"filter-badge ";
        yield (((((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 199, $this->source); })()), "")) : ("")) == "admins")) ? ("active") : (""));
        yield "\">
                ";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.filter_admins"), "html", null, true);
        yield "
            </a>
            <a href=\"";
        // line 202
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["filter" => "super_admins"]);
        yield "\" class=\"filter-badge ";
        yield (((((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 202, $this->source); })()), "")) : ("")) == "super_admins")) ? ("active") : (""));
        yield "\">
                ";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.filter_super_admins"), "html", null, true);
        yield "
            </a>
            <a href=\"";
        // line 205
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["filter" => "users"]);
        yield "\" class=\"filter-badge ";
        yield (((((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 205, $this->source); })()), "")) : ("")) == "users")) ? ("active") : (""));
        yield "\">
                ";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.filter_regular_users"), "html", null, true);
        yield "
            </a>
        </div>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\">
                ";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.list"), "html", null, true);
        yield "
                ";
        // line 215
        if (((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 215, $this->source); })()), "")) : (""))) {
            // line 216
            yield "                    <span class=\"ms-2 text-muted fs-6\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.search_results", ["%query%" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 216, $this->source); })())]), "html", null, true);
            yield "</span>
                ";
        }
        // line 218
        yield "                ";
        if (((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 218, $this->source); })()), "")) : (""))) {
            // line 219
            yield "                    <span class=\"ms-2 text-muted fs-6\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("admin.users.filtered_by_" . (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 219, $this->source); })()))), "html", null, true);
            yield "</span>
                ";
        }
        // line 221
        yield "            </h5>
            
            ";
        // line 223
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 223, $this->source); })())) > 0)) {
            // line 224
            yield "            <span class=\"badge bg-primary rounded-pill\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 224, $this->source); })())), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.count"), "html", null, true);
            yield "</span>
            ";
        }
        // line 226
        yield "        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0\">
                    <thead>
                        <tr>
                            <th>
                                <a href=\"";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["sort" => "lastName", "direction" => ((((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 233, $this->source); })()), "lastName")) : ("lastName")) == "lastName") && (((array_key_exists("direction", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 233, $this->source); })()), "ASC")) : ("ASC")) == "ASC"))) ? ("DESC") : ("ASC")), "q" => ((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 233, $this->source); })()), "")) : ("")), "filter" => ((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 233, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\" class=\"sort-link\">
                                    ";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.name"), "html", null, true);
        yield "
                                    ";
        // line 235
        if ((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 235, $this->source); })()), "lastName")) : ("lastName")) == "lastName")) {
            // line 236
            yield "                                        <i class=\"fas fa-sort-";
            yield (((((array_key_exists("direction", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 236, $this->source); })()), "ASC")) : ("ASC")) == "ASC")) ? ("down") : ("up"));
            yield "\"></i>
                                    ";
        }
        // line 238
        yield "                                </a>
                            </th>
                            <th>";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.email"), "html", null, true);
        yield "</th>
                            <th>";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.username"), "html", null, true);
        yield "</th>
                            <th>
                                <a href=\"";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["sort" => "createdAt", "direction" => ((((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 243, $this->source); })()), "lastName")) : ("lastName")) == "createdAt") && (((array_key_exists("direction", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 243, $this->source); })()), "ASC")) : ("ASC")) == "ASC"))) ? ("DESC") : ("ASC")), "q" => ((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 243, $this->source); })()), "")) : ("")), "filter" => ((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 243, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\" class=\"sort-link\">
                                    ";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.registered_at"), "html", null, true);
        yield "
                                    ";
        // line 245
        if ((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 245, $this->source); })()), "lastName")) : ("lastName")) == "createdAt")) {
            // line 246
            yield "                                        <i class=\"fas fa-sort-";
            yield (((((array_key_exists("direction", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 246, $this->source); })()), "ASC")) : ("ASC")) == "ASC")) ? ("down") : ("up"));
            yield "\"></i>
                                    ";
        }
        // line 248
        yield "                                </a>
                            </th>
                            <th>";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.status"), "html", null, true);
        yield "</th>
                            <th>";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.role"), "html", null, true);
        yield "</th>
                            <th>";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.actions"), "html", null, true);
        yield "</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 256
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 256, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 257
            yield "                            <tr>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"avatar-circle bg-primary rounded-circle d-flex align-items-center justify-content-center me-2\" style=\"width: 36px; height: 36px;\">
                                            <span class=\"text-white\">";
            // line 261
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 261)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 261)), "html", null, true);
            yield "</span>
                                        </div>
                                        <span>";
            // line 263
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 263), "html", null, true);
            yield "</span>
                                    </div>
                                </td>
                                <td>";
            // line 266
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 266), "html", null, true);
            yield "</td>
                                <td>";
            // line 267
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 267), "html", null, true);
            yield "</td>
                                <td>";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 268), "d/m/Y"), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 270
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 270) && CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isApproved", [], "any", false, false, false, 270))) {
                // line 271
                yield "                                        <span class=\"status-badge bg-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.status_active"), "html", null, true);
                yield "</span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 272
$context["user"], "isVerified", [], "any", false, false, false, 272) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isApproved", [], "any", false, false, false, 272))) {
                // line 273
                yield "                                        <span class=\"status-badge bg-warning text-dark\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.status_pending"), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 275
                yield "                                        <span class=\"status-badge bg-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.status_unverified"), "html", null, true);
                yield "</span>
                                    ";
            }
            // line 277
            yield "                                </td>
                                <td>
                                    ";
            // line 279
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isSuperAdmin", [], "any", false, false, false, 279)) {
                // line 280
                yield "                                        <span class=\"status-badge bg-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.role_super_admin"), "html", null, true);
                yield "</span>
                                    ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 281
$context["user"], "isAdmin", [], "any", false, false, false, 281)) {
                // line 282
                yield "                                        <span class=\"status-badge bg-primary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.role_admin"), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 284
                yield "                                        <span class=\"status-badge bg-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.role_user"), "html", null, true);
                yield "</span>
                                    ";
            }
            // line 286
            yield "                                </td>
                                <td>
                                    <div class=\"action-btn-group\">
                                        <a href=\"";
            // line 289
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 289)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        
                                        ";
            // line 293
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 293) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isApproved", [], "any", false, false, false, 293)) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 293, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 293, $this->source); })()), "user", [], "any", false, false, false, 293), "approve_users"], "method", false, false, false, 293)))) {
                // line 294
                yield "                                            <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_approve", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 294)]), "html", null, true);
                yield "\" class=\"d-inline\" onsubmit=\"return confirm('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.confirm_approve"), "html", null, true);
                yield "')\">
                                                <button type=\"submit\" class=\"btn btn-sm btn-success\">
                                                    <i class=\"fas fa-check\"></i>
                                                </button>
                                            </form>
                                        ";
            }
            // line 300
            yield "                                        
                                        ";
            // line 301
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 302
                yield "                                            ";
                if (( !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isAdmin", [], "any", false, false, false, 302) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isSuperAdmin", [], "any", false, false, false, 302))) {
                    // line 303
                    yield "                                                <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_promote", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 303)]), "html", null, true);
                    yield "\" class=\"d-inline\" onsubmit=\"return confirm('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.confirm_promote"), "html", null, true);
                    yield "')\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 304
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("promote" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 304))), "html", null, true);
                    yield "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-primary\" title=\"";
                    // line 305
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.promote_to_admin"), "html", null, true);
                    yield "\">
                                                        <i class=\"fas fa-user-plus\"></i>
                                                    </button>
                                                </form>
                                            ";
                }
                // line 310
                yield "                                            
                                            ";
                // line 311
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isAdmin", [], "any", false, false, false, 311) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isSuperAdmin", [], "any", false, false, false, 311))) {
                    // line 312
                    yield "                                                <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_promote_super", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 312)]), "html", null, true);
                    yield "\" class=\"d-inline\" onsubmit=\"return confirm('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.confirm_promote_super"), "html", null, true);
                    yield "')\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 313
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("promote-super" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 313))), "html", null, true);
                    yield "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\" title=\"";
                    // line 314
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.promote_to_super"), "html", null, true);
                    yield "\">
                                                        <i class=\"fas fa-user-shield\"></i>
                                                    </button>
                                                </form>
                                                
                                                <form method=\"post\" action=\"";
                    // line 319
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_demote", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 319)]), "html", null, true);
                    yield "\" class=\"d-inline\" onsubmit=\"return confirm('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.confirm_demote"), "html", null, true);
                    yield "')\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 320
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("demote" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 320))), "html", null, true);
                    yield "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-warning\" title=\"";
                    // line 321
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.demote_to_user"), "html", null, true);
                    yield "\">
                                                        <i class=\"fas fa-user-minus\"></i>
                                                    </button>
                                                </form>
                                            ";
                }
                // line 326
                yield "                                            
                                            ";
                // line 327
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isSuperAdmin", [], "any", false, false, false, 327) && (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 327) != 5))) {
                    // line 328
                    yield "                                                <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_demote_super", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 328)]), "html", null, true);
                    yield "\" class=\"d-inline\" onsubmit=\"return confirm('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.confirm_demote_super"), "html", null, true);
                    yield "')\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 329
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("demote-super" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 329))), "html", null, true);
                    yield "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-warning\" title=\"";
                    // line 330
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.demote_to_admin"), "html", null, true);
                    yield "\">
                                                        <i class=\"fas fa-user-minus\"></i>
                                                    </button>
                                                </form>
                                            ";
                }
                // line 335
                yield "                                            
                                            ";
                // line 336
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 336) != 5)) {
                    // line 337
                    yield "                                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_permissions", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 337)]), "html", null, true);
                    yield "\" class=\"btn btn-sm btn-outline-info\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.manage_permissions"), "html", null, true);
                    yield "\">
                                                    <i class=\"fas fa-key\"></i>
                                                </a>
                                            ";
                }
                // line 341
                yield "                                        ";
            }
            // line 342
            yield "                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 345
        if (!$context['_iterated']) {
            // line 346
            yield "                            <tr>
                                <td colspan=\"7\" class=\"empty-state\">
                                    <i class=\"fas fa-users\"></i>
                                    <p class=\"mb-0\">";
            // line 349
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.no_users"), "html", null, true);
            yield "</p>
                                    ";
            // line 350
            if (((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 350, $this->source); })()), "")) : (""))) {
                // line 351
                yield "                                        <p class=\"mt-2\">
                                            <a href=\"";
                // line 352
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
                yield "\" class=\"btn btn-outline-primary mt-2\">
                                                <i class=\"fas fa-times me-1\"></i> ";
                // line 353
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.clear_search"), "html", null, true);
                yield "
                                            </a>
                                        </p>
                                    ";
            }
            // line 357
            yield "                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 360
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 368
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 369
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Gestion du tri
            const sortSelect = document.getElementById('sort-select');
            const sortDirectionBtn = document.getElementById('sort-direction-btn');
            
            if (sortSelect && sortDirectionBtn) {
                sortSelect.addEventListener('change', function() {
                    updateSortUrl();
                });
                
                sortDirectionBtn.addEventListener('click', function() {
                    // Inverser la direction
                    const currentDirection = '";
        // line 383
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("direction", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 383, $this->source); })()), "ASC")) : ("ASC")), "html", null, true);
        yield "';
                    const newDirection = currentDirection === 'ASC' ? 'DESC' : 'ASC';
                    
                    // Mettre à jour l'icône
                    const icon = sortDirectionBtn.querySelector('i');
                    if (icon) {
                        icon.className = currentDirection === 'ASC' ? 'fas fa-sort-up' : 'fas fa-sort-down';
                    }
                    
                    updateSortUrl(newDirection);
                });
                
                function updateSortUrl(direction = '";
        // line 395
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("direction", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 395, $this->source); })()), "ASC")) : ("ASC")), "html", null, true);
        yield "') {
                    const sort = sortSelect.value;
                    const search = '";
        // line 397
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 397, $this->source); })()), "")) : ("")), "html", null, true);
        yield "';
                    const filter = '";
        // line 398
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 398, $this->source); })()), "")) : ("")), "html", null, true);
        yield "';
                    
                    let url = '";
        // line 400
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "?sort=' + sort + '&direction=' + direction;
                    
                    if (search) {
                        url += '&q=' + encodeURIComponent(search);
                    }
                    
                    if (filter) {
                        url += '&filter=' + encodeURIComponent(filter);
                    }
                    
                    window.location.href = url;
                }
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
        return "admin/users.html.twig";
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
        return array (  937 => 400,  932 => 398,  928 => 397,  923 => 395,  908 => 383,  890 => 369,  880 => 368,  866 => 360,  858 => 357,  851 => 353,  847 => 352,  844 => 351,  842 => 350,  838 => 349,  833 => 346,  831 => 345,  824 => 342,  821 => 341,  811 => 337,  809 => 336,  806 => 335,  798 => 330,  794 => 329,  787 => 328,  785 => 327,  782 => 326,  774 => 321,  770 => 320,  764 => 319,  756 => 314,  752 => 313,  745 => 312,  743 => 311,  740 => 310,  732 => 305,  728 => 304,  721 => 303,  718 => 302,  716 => 301,  713 => 300,  701 => 294,  699 => 293,  692 => 289,  687 => 286,  681 => 284,  675 => 282,  673 => 281,  668 => 280,  666 => 279,  662 => 277,  656 => 275,  650 => 273,  648 => 272,  643 => 271,  641 => 270,  636 => 268,  632 => 267,  628 => 266,  622 => 263,  616 => 261,  610 => 257,  605 => 256,  598 => 252,  594 => 251,  590 => 250,  586 => 248,  580 => 246,  578 => 245,  574 => 244,  570 => 243,  565 => 241,  561 => 240,  557 => 238,  551 => 236,  549 => 235,  545 => 234,  541 => 233,  532 => 226,  524 => 224,  522 => 223,  518 => 221,  512 => 219,  509 => 218,  503 => 216,  501 => 215,  497 => 214,  486 => 206,  480 => 205,  475 => 203,  469 => 202,  464 => 200,  458 => 199,  453 => 197,  447 => 196,  442 => 194,  436 => 193,  431 => 191,  425 => 190,  420 => 188,  414 => 187,  409 => 185,  403 => 184,  393 => 177,  389 => 176,  380 => 174,  372 => 173,  364 => 172,  359 => 170,  348 => 162,  341 => 160,  333 => 155,  321 => 146,  317 => 145,  312 => 143,  308 => 141,  298 => 140,  289 => 137,  281 => 132,  277 => 131,  270 => 128,  268 => 127,  264 => 125,  257 => 121,  253 => 120,  250 => 119,  247 => 118,  240 => 114,  236 => 113,  233 => 112,  230 => 111,  223 => 107,  219 => 106,  216 => 105,  214 => 104,  208 => 101,  204 => 100,  198 => 97,  195 => 96,  185 => 95,  88 => 6,  78 => 5,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'admin.users.title'|trans }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        /* Style pour la barre de recherche et les filtres */
        .search-filter-container {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            margin-bottom: 1.5rem;
        }
        
        .search-filter-container .form-control:focus {
            border-color: #8e44ad;
            box-shadow: 0 0 0 0.25rem rgba(142, 68, 173, 0.25);
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
        
        /* Responsive table */
        .table-responsive {
            border-radius: 10px;
            overflow: hidden;
        }
        
        /* User status styles */
        .status-badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: 500;
            font-size: 0.85rem;
        }
        
        /* Sorting styles */
        .sort-link {
            color: inherit;
            text-decoration: none;
            white-space: nowrap;
        }
        
        .sort-link:hover {
            color: #8e44ad;
        }
        
        .sort-link i {
            margin-left: 0.25rem;
        }
        
        /* Action buttons styles */
        .action-btn-group .btn {
            margin-right: 0.25rem;
            margin-bottom: 0.25rem;
        }
        
        /* Empty state */
        .empty-state {
            text-align: center;
            padding: 3rem 0;
        }
        
        .empty-state i {
            font-size: 3rem;
            color: #ccc;
            margin-bottom: 1rem;
        }
    </style>
{% endblock %}

{% block sidebar %}
<div class=\"sidebar\">
    <h5 class=\"mb-4\">{{ 'admin.sidebar.title'|trans }}</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_admin_dashboard') }}\">
                <i class=\"fas fa-tachometer-alt me-2\"></i> {{ 'admin.sidebar.dashboard'|trans }}
            </a>
        </li>
        {% if is_granted('ROLE_SUPER_ADMIN') or app.user.isAdmin() and permission_service.hasPermission(app.user, 'manage_users') %}
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"{{ path('app_admin_users') }}\">
                <i class=\"fas fa-users me-2\"></i> {{ 'admin.sidebar.users'|trans }}
            </a>
        </li>
        {% endif %}
        {% if is_granted('ROLE_SUPER_ADMIN') or app.user.isAdmin() and permission_service.hasPermission(app.user, 'edit_email_templates') %}
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_admin_email_templates') }}\">
                <i class=\"fas fa-envelope me-2\"></i> {{ 'admin.sidebar.email_templates'|trans }}
            </a>
        </li>
        {% endif %}
        {% if is_granted('ROLE_SUPER_ADMIN') or app.user.isAdmin() and permission_service.hasPermission(app.user, 'translate_content') %}
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_admin_translations') }}\">
                <i class=\"fas fa-language me-2\"></i> {{ 'admin.sidebar.translations'|trans }}
            </a>
        </li>
        {% endif %}
    </ul>
    
    {% if is_granted('ROLE_SUPER_ADMIN') %}
    <h5 class=\"mb-3 mt-4\">{{ 'admin.sidebar.super_admin'|trans }}</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_super_admin_dashboard') }}\">
                <i class=\"fas fa-shield-alt me-2\"></i> {{ 'admin.sidebar.super_dashboard'|trans }}
            </a>
        </li>
    </ul>
    {% endif %}
</div>
{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">{{ 'admin.users.title'|trans }}</h1>
        <div class=\"d-flex\">
            <a href=\"{{ path('app_admin_dashboard') }}\" class=\"btn btn-outline-secondary me-2\">
                <i class=\"fas fa-arrow-left me-1\"></i> {{ 'admin.users.back_btn'|trans }}
            </a>
        </div>
    </div>
    
    <!-- Barre de recherche et filtres améliorés -->
    <div class=\"search-filter-container\">
        <div class=\"row g-3 mb-3 align-items-center\">
            <div class=\"col-md-7\">
                <form method=\"get\" action=\"{{ path('app_admin_users') }}\" class=\"d-flex\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white\">
                            <i class=\"fas fa-search text-muted\"></i>
                        </span>
                        <input type=\"text\" name=\"q\" class=\"form-control form-control-lg border-start-0\" placeholder=\"{{ 'admin.users.search_placeholder'|trans }}\" value=\"{{ search|default('') }}\">
                        <button type=\"submit\" class=\"btn btn-gradient\">
                            {{ 'admin.users.search_btn'|trans }}
                        </button>
                    </div>
                </form>
            </div>
            
            <div class=\"col-md-5\">
                <div class=\"d-flex align-items-center justify-content-md-end mt-3 mt-md-0\">
                    <span class=\"text-muted me-2\">{{ 'admin.users.sort_by'|trans }}:</span>
                    <select class=\"form-select\" id=\"sort-select\">
                        <option value=\"lastName\" {% if sort|default('lastName') == 'lastName' %}selected{% endif %}>{{ 'admin.users.sort_name'|trans }}</option>
                        <option value=\"createdAt\" {% if sort|default('lastName') == 'createdAt' %}selected{% endif %}>{{ 'admin.users.sort_date'|trans }}</option>
                        <option value=\"lastLoginAt\" {% if sort|default('lastName') == 'lastLoginAt' %}selected{% endif %}>{{ 'admin.users.sort_login'|trans }}</option>
                    </select>
                    <button class=\"btn btn-outline-secondary ms-2\" id=\"sort-direction-btn\" title=\"{{ direction|default('ASC') == 'ASC' ? 'admin.users.sort_desc'|trans : 'admin.users.sort_asc'|trans }}\">
                        <i class=\"fas fa-sort-{{ direction|default('ASC') == 'ASC' ? 'down' : 'up' }}\"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <div class=\"filter-badges d-flex flex-wrap\">
            <a href=\"{{ path('app_admin_users') }}\" class=\"filter-badge {{ filter|default('') == '' ? 'active' : '' }}\">
                {{ 'admin.users.filter_all'|trans }}
            </a>
            <a href=\"{{ path('app_admin_users', {'filter': 'verified'}) }}\" class=\"filter-badge {{ filter|default('') == 'verified' ? 'active' : '' }}\">
                {{ 'admin.users.filter_verified'|trans }}
            </a>
            <a href=\"{{ path('app_admin_users', {'filter': 'unverified'}) }}\" class=\"filter-badge {{ filter|default('') == 'unverified' ? 'active' : '' }}\">
                {{ 'admin.users.filter_unverified'|trans }}
            </a>
            <a href=\"{{ path('app_admin_users', {'filter': 'approved'}) }}\" class=\"filter-badge {{ filter|default('') == 'approved' ? 'active' : '' }}\">
                {{ 'admin.users.filter_approved'|trans }}
            </a>
            <a href=\"{{ path('app_admin_users', {'filter': 'pending'}) }}\" class=\"filter-badge {{ filter|default('') == 'pending' ? 'active' : '' }}\">
                {{ 'admin.users.filter_pending'|trans }}
            </a>
            <a href=\"{{ path('app_admin_users', {'filter': 'admins'}) }}\" class=\"filter-badge {{ filter|default('') == 'admins' ? 'active' : '' }}\">
                {{ 'admin.users.filter_admins'|trans }}
            </a>
            <a href=\"{{ path('app_admin_users', {'filter': 'super_admins'}) }}\" class=\"filter-badge {{ filter|default('') == 'super_admins' ? 'active' : '' }}\">
                {{ 'admin.users.filter_super_admins'|trans }}
            </a>
            <a href=\"{{ path('app_admin_users', {'filter': 'users'}) }}\" class=\"filter-badge {{ filter|default('') == 'users' ? 'active' : '' }}\">
                {{ 'admin.users.filter_regular_users'|trans }}
            </a>
        </div>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\">
                {{ 'admin.users.list'|trans }}
                {% if search|default('') %}
                    <span class=\"ms-2 text-muted fs-6\">{{ 'admin.users.search_results'|trans({'%query%': search}) }}</span>
                {% endif %}
                {% if filter|default('') %}
                    <span class=\"ms-2 text-muted fs-6\">{{ ('admin.users.filtered_by_'~filter)|trans }}</span>
                {% endif %}
            </h5>
            
            {% if users|length > 0 %}
            <span class=\"badge bg-primary rounded-pill\">{{ users|length }} {{ 'admin.users.count'|trans }}</span>
            {% endif %}
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0\">
                    <thead>
                        <tr>
                            <th>
                                <a href=\"{{ path('app_admin_users', {'sort': 'lastName', 'direction': sort|default('lastName') == 'lastName' and direction|default('ASC') == 'ASC' ? 'DESC' : 'ASC', 'q': search|default(''), 'filter': filter|default('')}) }}\" class=\"sort-link\">
                                    {{ 'admin.users.name'|trans }}
                                    {% if sort|default('lastName') == 'lastName' %}
                                        <i class=\"fas fa-sort-{{ direction|default('ASC') == 'ASC' ? 'down' : 'up' }}\"></i>
                                    {% endif %}
                                </a>
                            </th>
                            <th>{{ 'admin.users.email'|trans }}</th>
                            <th>{{ 'admin.users.username'|trans }}</th>
                            <th>
                                <a href=\"{{ path('app_admin_users', {'sort': 'createdAt', 'direction': sort|default('lastName') == 'createdAt' and direction|default('ASC') == 'ASC' ? 'DESC' : 'ASC', 'q': search|default(''), 'filter': filter|default('')}) }}\" class=\"sort-link\">
                                    {{ 'admin.users.registered_at'|trans }}
                                    {% if sort|default('lastName') == 'createdAt' %}
                                        <i class=\"fas fa-sort-{{ direction|default('ASC') == 'ASC' ? 'down' : 'up' }}\"></i>
                                    {% endif %}
                                </a>
                            </th>
                            <th>{{ 'admin.users.status'|trans }}</th>
                            <th>{{ 'admin.users.role'|trans }}</th>
                            <th>{{ 'admin.users.actions'|trans }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for user in users %}
                            <tr>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"avatar-circle bg-primary rounded-circle d-flex align-items-center justify-content-center me-2\" style=\"width: 36px; height: 36px;\">
                                            <span class=\"text-white\">{{ user.firstName|first }}{{ user.lastName|first }}</span>
                                        </div>
                                        <span>{{ user.fullName }}</span>
                                    </div>
                                </td>
                                <td>{{ user.email }}</td>
                                <td>{{ user.username }}</td>
                                <td>{{ user.createdAt|date('d/m/Y') }}</td>
                                <td>
                                    {% if user.isVerified and user.isApproved %}
                                        <span class=\"status-badge bg-success\">{{ 'admin.users.status_active'|trans }}</span>
                                    {% elseif user.isVerified and not user.isApproved %}
                                        <span class=\"status-badge bg-warning text-dark\">{{ 'admin.users.status_pending'|trans }}</span>
                                    {% else %}
                                        <span class=\"status-badge bg-danger\">{{ 'admin.users.status_unverified'|trans }}</span>
                                    {% endif %}
                                </td>
                                <td>
                                    {% if user.isSuperAdmin %}
                                        <span class=\"status-badge bg-danger\">{{ 'admin.users.role_super_admin'|trans }}</span>
                                    {% elseif user.isAdmin %}
                                        <span class=\"status-badge bg-primary\">{{ 'admin.users.role_admin'|trans }}</span>
                                    {% else %}
                                        <span class=\"status-badge bg-secondary\">{{ 'admin.users.role_user'|trans }}</span>
                                    {% endif %}
                                </td>
                                <td>
                                    <div class=\"action-btn-group\">
                                        <a href=\"{{ path('app_admin_user_edit', {'id': user.id}) }}\" class=\"btn btn-sm btn-outline-primary\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        
                                        {% if user.isVerified and not user.isApproved and (is_granted('ROLE_SUPER_ADMIN') or permission_service.hasPermission(app.user, 'approve_users')) %}
                                            <form method=\"post\" action=\"{{ path('app_admin_user_approve', {'id': user.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm('{{ 'admin.users.confirm_approve'|trans }}')\">
                                                <button type=\"submit\" class=\"btn btn-sm btn-success\">
                                                    <i class=\"fas fa-check\"></i>
                                                </button>
                                            </form>
                                        {% endif %}
                                        
                                        {% if is_granted('ROLE_SUPER_ADMIN') %}
                                            {% if not user.isAdmin and not user.isSuperAdmin %}
                                                <form method=\"post\" action=\"{{ path('app_admin_user_promote', {'id': user.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm('{{ 'admin.users.confirm_promote'|trans }}')\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('promote' ~ user.id) }}\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-primary\" title=\"{{ 'admin.users.promote_to_admin'|trans }}\">
                                                        <i class=\"fas fa-user-plus\"></i>
                                                    </button>
                                                </form>
                                            {% endif %}
                                            
                                            {% if user.isAdmin and not user.isSuperAdmin %}
                                                <form method=\"post\" action=\"{{ path('app_admin_user_promote_super', {'id': user.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm('{{ 'admin.users.confirm_promote_super'|trans }}')\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('promote-super' ~ user.id) }}\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\" title=\"{{ 'admin.users.promote_to_super'|trans }}\">
                                                        <i class=\"fas fa-user-shield\"></i>
                                                    </button>
                                                </form>
                                                
                                                <form method=\"post\" action=\"{{ path('app_admin_user_demote', {'id': user.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm('{{ 'admin.users.confirm_demote'|trans }}')\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('demote' ~ user.id) }}\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-warning\" title=\"{{ 'admin.users.demote_to_user'|trans }}\">
                                                        <i class=\"fas fa-user-minus\"></i>
                                                    </button>
                                                </form>
                                            {% endif %}
                                            
                                            {% if user.isSuperAdmin and user.id != 5 %}
                                                <form method=\"post\" action=\"{{ path('app_admin_user_demote_super', {'id': user.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm('{{ 'admin.users.confirm_demote_super'|trans }}')\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('demote-super' ~ user.id) }}\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-warning\" title=\"{{ 'admin.users.demote_to_admin'|trans }}\">
                                                        <i class=\"fas fa-user-minus\"></i>
                                                    </button>
                                                </form>
                                            {% endif %}
                                            
                                            {% if user.id != 5 %}
                                                <a href=\"{{ path('app_admin_user_permissions', {'id': user.id}) }}\" class=\"btn btn-sm btn-outline-info\" title=\"{{ 'admin.users.manage_permissions'|trans }}\">
                                                    <i class=\"fas fa-key\"></i>
                                                </a>
                                            {% endif %}
                                        {% endif %}
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"7\" class=\"empty-state\">
                                    <i class=\"fas fa-users\"></i>
                                    <p class=\"mb-0\">{{ 'admin.users.no_users'|trans }}</p>
                                    {% if search|default('') %}
                                        <p class=\"mt-2\">
                                            <a href=\"{{ path('app_admin_users') }}\" class=\"btn btn-outline-primary mt-2\">
                                                <i class=\"fas fa-times me-1\"></i> {{ 'admin.users.clear_search'|trans }}
                                            </a>
                                        </p>
                                    {% endif %}
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Gestion du tri
            const sortSelect = document.getElementById('sort-select');
            const sortDirectionBtn = document.getElementById('sort-direction-btn');
            
            if (sortSelect && sortDirectionBtn) {
                sortSelect.addEventListener('change', function() {
                    updateSortUrl();
                });
                
                sortDirectionBtn.addEventListener('click', function() {
                    // Inverser la direction
                    const currentDirection = '{{ direction|default('ASC') }}';
                    const newDirection = currentDirection === 'ASC' ? 'DESC' : 'ASC';
                    
                    // Mettre à jour l'icône
                    const icon = sortDirectionBtn.querySelector('i');
                    if (icon) {
                        icon.className = currentDirection === 'ASC' ? 'fas fa-sort-up' : 'fas fa-sort-down';
                    }
                    
                    updateSortUrl(newDirection);
                });
                
                function updateSortUrl(direction = '{{ direction|default('ASC') }}') {
                    const sort = sortSelect.value;
                    const search = '{{ search|default('') }}';
                    const filter = '{{ filter|default('') }}';
                    
                    let url = '{{ path('app_admin_users') }}?sort=' + sort + '&direction=' + direction;
                    
                    if (search) {
                        url += '&q=' + encodeURIComponent(search);
                    }
                    
                    if (filter) {
                        url += '&filter=' + encodeURIComponent(filter);
                    }
                    
                    window.location.href = url;
                }
            }
        });
    </script>
{% endblock %}", "admin/users.html.twig", "/var/www/serveur/templates/admin/users.html.twig");
    }
}
