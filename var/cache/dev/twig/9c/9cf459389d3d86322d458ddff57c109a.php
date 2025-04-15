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
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/admin-badges.css"), "html", null, true);
        yield "\">
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

    // line 88
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 89
        yield "<div class=\"sidebar\">
    <h5 class=\"mb-4\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.title"), "html", null, true);
        yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
                <i class=\"fas fa-tachometer-alt me-2\"></i> ";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.dashboard"), "html", null, true);
        yield "
            </a>
        </li>
        ";
        // line 97
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "isAdmin", [], "method", false, false, false, 97) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 97, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "manage_users"], "method", false, false, false, 97)))) {
            // line 98
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
            // line 99
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
            yield "\">
                <i class=\"fas fa-users me-2\"></i> ";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.users"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 104
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "isAdmin", [], "method", false, false, false, 104) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 104, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "edit_email_templates"], "method", false, false, false, 104)))) {
            // line 105
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 106
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_templates");
            yield "\">
                <i class=\"fas fa-envelope me-2\"></i> ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.email_templates"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 111
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), "isAdmin", [], "method", false, false, false, 111) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 111, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), "translate_content"], "method", false, false, false, 111)))) {
            // line 112
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 113
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_translations");
            yield "\">
                <i class=\"fas fa-language me-2\"></i> ";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.translations"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 118
        yield "    </ul>
    
    ";
        // line 120
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 121
            yield "    <h5 class=\"mb-3 mt-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_admin"), "html", null, true);
            yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 124
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_dashboard");
            yield "\">
                <i class=\"fas fa-shield-alt me-2\"></i> ";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_dashboard"), "html", null, true);
            yield "
            </a>
        </li>
    </ul>
    ";
        }
        // line 130
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 133
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 134
        yield "<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.title"), "html", null, true);
        yield "</h1>
        <div class=\"d-flex\">
            <a href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"btn btn-outline-secondary me-2\">
                <i class=\"fas fa-arrow-left me-1\"></i> ";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.back_btn"), "html", null, true);
        yield "
            </a>
            <a href=\"";
        // line 141
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"btn btn-outline-primary me-2\">
                <i class=\"fas fa-sync-alt me-1\"></i> ";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.reset_filters"), "html", null, true);
        yield "
            </a>
            ";
        // line 144
        if ( !Twig\Extension\CoreExtension::testEmpty(((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 144, $this->source); })()), "")) : ("")))) {
            // line 145
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["filter" => ((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 145, $this->source); })()), "")) : (""))]), "html", null, true);
            yield "\" class=\"btn btn-outline-danger\">
                <i class=\"fas fa-times me-1\"></i> ";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.clear_search"), "html", null, true);
            yield "
            </a>
            ";
        }
        // line 149
        yield "        </div>
    </div>
    
    <!-- Barre de recherche et filtres améliorés -->
    <div class=\"search-filter-container\">
        <div class=\"row g-3 mb-3 align-items-center\">
            <div class=\"col-md-7\">
                <form method=\"get\" action=\"";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"d-flex\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white\">
                            <i class=\"fas fa-search text-muted\"></i>
                        </span>
                        <input type=\"text\" name=\"q\" class=\"form-control form-control-lg border-start-0\" placeholder=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.search_placeholder"), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 161, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                        ";
        // line 162
        if ( !Twig\Extension\CoreExtension::testEmpty(((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 162, $this->source); })()), "")) : ("")))) {
            // line 163
            yield "                            <input type=\"hidden\" name=\"filter\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 163, $this->source); })()), "html", null, true);
            yield "\">
                        ";
        }
        // line 165
        yield "                        <button type=\"submit\" class=\"btn btn-gradient\">
                            ";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.search_btn"), "html", null, true);
        yield "
                        </button>
                    </div>
                </form>
            </div>
            
            <div class=\"col-md-5\">
                <div class=\"d-flex align-items-center justify-content-md-end mt-3 mt-md-0\">
                    <span class=\"text-muted me-2\">";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.sort_by"), "html", null, true);
        yield ":</span>
                    <select class=\"form-select\" id=\"sort-select\">
                        <option value=\"lastName\" ";
        // line 176
        if ((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 176, $this->source); })()), "lastName")) : ("lastName")) == "lastName")) {
            yield "selected";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.sort_name"), "html", null, true);
        yield "</option>
                        <option value=\"createdAt\" ";
        // line 177
        if ((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 177, $this->source); })()), "lastName")) : ("lastName")) == "createdAt")) {
            yield "selected";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.sort_date"), "html", null, true);
        yield "</option>
                        <option value=\"lastLoginAt\" ";
        // line 178
        if ((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 178, $this->source); })()), "lastName")) : ("lastName")) == "lastLoginAt")) {
            yield "selected";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.sort_login"), "html", null, true);
        yield "</option>
                    </select>
                    <button class=\"btn btn-outline-secondary ms-2\" id=\"sort-direction-btn\" title=\"";
        // line 180
        yield (((((array_key_exists("direction", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 180, $this->source); })()), "ASC")) : ("ASC")) == "ASC")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.sort_desc"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.sort_asc"), "html", null, true)));
        yield "\">
                        <i class=\"fas fa-sort-";
        // line 181
        yield (((((array_key_exists("direction", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 181, $this->source); })()), "ASC")) : ("ASC")) == "ASC")) ? ("down") : ("up"));
        yield "\"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <div class=\"filter-badges d-flex flex-wrap\">
            <a href=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["q" => ((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 188, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\" class=\"filter-badge ";
        yield (((((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 188, $this->source); })()), "")) : ("")) == "")) ? ("active") : (""));
        yield "\">
                ";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.filter_all"), "html", null, true);
        yield "
            </a>
            <a href=\"";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["filter" => "verified", "q" => ((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 191, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\" class=\"filter-badge ";
        yield (((((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 191, $this->source); })()), "")) : ("")) == "verified")) ? ("active") : (""));
        yield "\">
                ";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.filter_verified"), "html", null, true);
        yield "
            </a>
            <a href=\"";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["filter" => "unverified", "q" => ((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 194, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\" class=\"filter-badge ";
        yield (((((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 194, $this->source); })()), "")) : ("")) == "unverified")) ? ("active") : (""));
        yield "\">
                ";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.filter_unverified"), "html", null, true);
        yield "
            </a>
            <a href=\"";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["filter" => "approved", "q" => ((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 197, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\" class=\"filter-badge ";
        yield (((((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 197, $this->source); })()), "")) : ("")) == "approved")) ? ("active") : (""));
        yield "\">
                ";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.filter_approved"), "html", null, true);
        yield "
            </a>
            <a href=\"";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["filter" => "pending", "q" => ((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 200, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\" class=\"filter-badge ";
        yield (((((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 200, $this->source); })()), "")) : ("")) == "pending")) ? ("active") : (""));
        yield "\">
                ";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.filter_pending"), "html", null, true);
        yield "
            </a>
            <a href=\"";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["filter" => "admins", "q" => ((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 203, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\" class=\"filter-badge ";
        yield (((((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 203, $this->source); })()), "")) : ("")) == "admins")) ? ("active") : (""));
        yield "\">
                ";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.filter_admins"), "html", null, true);
        yield "
            </a>
            <a href=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["filter" => "super_admins", "q" => ((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 206, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\" class=\"filter-badge ";
        yield (((((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 206, $this->source); })()), "")) : ("")) == "super_admins")) ? ("active") : (""));
        yield "\">
                ";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.filter_super_admins"), "html", null, true);
        yield "
            </a>
            <a href=\"";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["filter" => "users", "q" => ((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 209, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\" class=\"filter-badge ";
        yield (((((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 209, $this->source); })()), "")) : ("")) == "users")) ? ("active") : (""));
        yield "\">
                ";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.filter_regular_users"), "html", null, true);
        yield "
            </a>
        </div>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\">
                ";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.list"), "html", null, true);
        yield "
                ";
        // line 219
        if (((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 219, $this->source); })()), "")) : (""))) {
            // line 220
            yield "                    <span class=\"ms-2 text-muted fs-6\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.search_results", ["%query%" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 220, $this->source); })())]), "html", null, true);
            yield "</span>
                ";
        }
        // line 222
        yield "                ";
        if (((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 222, $this->source); })()), "")) : (""))) {
            // line 223
            yield "                    <span class=\"ms-2 text-muted fs-6\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("admin.users.filtered_by_" . (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 223, $this->source); })()))), "html", null, true);
            yield "</span>
                ";
        }
        // line 225
        yield "            </h5>
            
            ";
        // line 227
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 227, $this->source); })())) > 0)) {
            // line 228
            yield "            <span class=\"badge bg-primary rounded-pill\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 228, $this->source); })())), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.count"), "html", null, true);
            yield "</span>
            ";
        }
        // line 230
        yield "        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0\">
                    <thead>
                        <tr>
                            <th>
                                <a href=\"";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["sort" => "lastName", "direction" => ((((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 237, $this->source); })()), "lastName")) : ("lastName")) == "lastName") && (((array_key_exists("direction", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 237, $this->source); })()), "ASC")) : ("ASC")) == "ASC"))) ? ("DESC") : ("ASC")), "q" => ((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 237, $this->source); })()), "")) : ("")), "filter" => ((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 237, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\" class=\"sort-link\">
                                    ";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.name"), "html", null, true);
        yield "
                                    ";
        // line 239
        if ((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 239, $this->source); })()), "lastName")) : ("lastName")) == "lastName")) {
            // line 240
            yield "                                        <i class=\"fas fa-sort-";
            yield (((((array_key_exists("direction", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 240, $this->source); })()), "ASC")) : ("ASC")) == "ASC")) ? ("down") : ("up"));
            yield "\"></i>
                                    ";
        }
        // line 242
        yield "                                </a>
                            </th>
                            <th>";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.email"), "html", null, true);
        yield "</th>
                            <th>";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.username"), "html", null, true);
        yield "</th>
                            <th>
                                <a href=\"";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["sort" => "createdAt", "direction" => ((((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 247, $this->source); })()), "lastName")) : ("lastName")) == "createdAt") && (((array_key_exists("direction", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 247, $this->source); })()), "ASC")) : ("ASC")) == "ASC"))) ? ("DESC") : ("ASC")), "q" => ((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 247, $this->source); })()), "")) : ("")), "filter" => ((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 247, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\" class=\"sort-link\">
                                    ";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.registered_at"), "html", null, true);
        yield "
                                    ";
        // line 249
        if ((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 249, $this->source); })()), "lastName")) : ("lastName")) == "createdAt")) {
            // line 250
            yield "                                        <i class=\"fas fa-sort-";
            yield (((((array_key_exists("direction", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 250, $this->source); })()), "ASC")) : ("ASC")) == "ASC")) ? ("down") : ("up"));
            yield "\"></i>
                                    ";
        }
        // line 252
        yield "                                </a>
                            </th>
                            <th>";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.status"), "html", null, true);
        yield "</th>
                            <th>";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.role"), "html", null, true);
        yield "</th>
                            <th>";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.actions"), "html", null, true);
        yield "</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 260, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 261
            yield "                            <tr>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"avatar-circle bg-primary rounded-circle d-flex align-items-center justify-content-center me-2\" style=\"width: 36px; height: 36px;\">
                                            <span class=\"text-white\">";
            // line 265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 265)), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 265)), "html", null, true);
            yield "</span>
                                        </div>
                                        <span>";
            // line 267
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 267), "html", null, true);
            yield "</span>
                                    </div>
                                </td>
                                <td>";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 270), "html", null, true);
            yield "</td>
                                <td>";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 271), "html", null, true);
            yield "</td>
                                <td>";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 272), "d/m/Y"), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 274
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 274) && CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isApproved", [], "any", false, false, false, 274))) {
                // line 275
                yield "                                        <span class=\"badge bg-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.status_active"), "html", null, true);
                yield "</span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 276
$context["user"], "isVerified", [], "any", false, false, false, 276) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isApproved", [], "any", false, false, false, 276))) {
                // line 277
                yield "                                        <span class=\"badge bg-warning\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.status_pending"), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 279
                yield "                                        <span class=\"badge bg-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.status_unverified"), "html", null, true);
                yield "</span>
                                    ";
            }
            // line 281
            yield "                                </td>
                                <td>
                                    ";
            // line 283
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isSuperAdmin", [], "any", false, false, false, 283)) {
                // line 284
                yield "                                        <span class=\"badge bg-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.role_super_admin"), "html", null, true);
                yield "</span>
                                    ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 285
$context["user"], "isAdmin", [], "any", false, false, false, 285)) {
                // line 286
                yield "                                        <span class=\"badge bg-primary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.role_admin"), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 288
                yield "                                        <span class=\"badge bg-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.role_user"), "html", null, true);
                yield "</span>
                                    ";
            }
            // line 290
            yield "                                </td>
                                <td>
                                    <div class=\"action-btn-group\">
                                        <a href=\"";
            // line 293
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 293)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        
                                        ";
            // line 297
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 297) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isApproved", [], "any", false, false, false, 297)) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 297, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 297, $this->source); })()), "user", [], "any", false, false, false, 297), "approve_users"], "method", false, false, false, 297)))) {
                // line 298
                yield "                                            <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_approve", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 298)]), "html", null, true);
                yield "\" class=\"d-inline\" onsubmit=\"return confirm('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.confirm_approve"), "html", null, true);
                yield "')\">
                                                <button type=\"submit\" class=\"btn btn-sm btn-success\">
                                                    <i class=\"fas fa-check\"></i>
                                                </button>
                                            </form>
                                        ";
            }
            // line 304
            yield "                                        
                                        ";
            // line 305
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 306
                yield "                                            ";
                if (( !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isAdmin", [], "any", false, false, false, 306) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isSuperAdmin", [], "any", false, false, false, 306))) {
                    // line 307
                    yield "                                                <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_promote", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 307)]), "html", null, true);
                    yield "\" class=\"d-inline\" onsubmit=\"return confirm('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.confirm_promote"), "html", null, true);
                    yield "')\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 308
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("promote" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 308))), "html", null, true);
                    yield "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-primary\" title=\"";
                    // line 309
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.promote_to_admin"), "html", null, true);
                    yield "\">
                                                        <i class=\"fas fa-user-plus\"></i>
                                                    </button>
                                                </form>
                                            ";
                }
                // line 314
                yield "                                            
                                            ";
                // line 315
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isAdmin", [], "any", false, false, false, 315) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isSuperAdmin", [], "any", false, false, false, 315))) {
                    // line 316
                    yield "                                                <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_promote_super", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 316)]), "html", null, true);
                    yield "\" class=\"d-inline\" onsubmit=\"return confirm('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.confirm_promote_super"), "html", null, true);
                    yield "')\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 317
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("promote-super" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 317))), "html", null, true);
                    yield "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\" title=\"";
                    // line 318
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.promote_to_super"), "html", null, true);
                    yield "\">
                                                        <i class=\"fas fa-user-shield\"></i>
                                                    </button>
                                                </form>
                                                
                                                <form method=\"post\" action=\"";
                    // line 323
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_demote", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 323)]), "html", null, true);
                    yield "\" class=\"d-inline\" onsubmit=\"return confirm('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.confirm_demote"), "html", null, true);
                    yield "')\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 324
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("demote" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 324))), "html", null, true);
                    yield "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-warning\" title=\"";
                    // line 325
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.demote_to_user"), "html", null, true);
                    yield "\">
                                                        <i class=\"fas fa-user-minus\"></i>
                                                    </button>
                                                </form>
                                            ";
                }
                // line 330
                yield "                                            
                                            ";
                // line 331
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isSuperAdmin", [], "any", false, false, false, 331) && (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 331) != 5))) {
                    // line 332
                    yield "                                                <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_demote_super", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 332)]), "html", null, true);
                    yield "\" class=\"d-inline\" onsubmit=\"return confirm('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.confirm_demote_super"), "html", null, true);
                    yield "')\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 333
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("demote-super" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 333))), "html", null, true);
                    yield "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-warning\" title=\"";
                    // line 334
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.demote_to_admin"), "html", null, true);
                    yield "\">
                                                        <i class=\"fas fa-user-minus\"></i>
                                                    </button>
                                                </form>
                                            ";
                }
                // line 339
                yield "                                            
                                            ";
                // line 340
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 340) != 5) && CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isAdmin", [], "any", false, false, false, 340))) {
                    // line 341
                    yield "                                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_permissions", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 341)]), "html", null, true);
                    yield "\" class=\"btn btn-sm btn-outline-info\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.manage_permissions"), "html", null, true);
                    yield "\">
                                                    <i class=\"fas fa-key\"></i>
                                                </a>
                                            ";
                }
                // line 345
                yield "                                        ";
            }
            // line 346
            yield "                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 349
        if (!$context['_iterated']) {
            // line 350
            yield "                            <tr>
                                <td colspan=\"7\" class=\"empty-state\">
                                    <i class=\"fas fa-users\"></i>
                                    <p class=\"mb-0\">";
            // line 353
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.no_users"), "html", null, true);
            yield "</p>
                                    ";
            // line 354
            if ((((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 354, $this->source); })()), "")) : ("")) || ((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 354, $this->source); })()), "")) : ("")))) {
                // line 355
                yield "                                        <p class=\"mt-2\">
                                            <a href=\"";
                // line 356
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
                yield "\" class=\"btn btn-outline-primary mt-2\">
                                                <i class=\"fas fa-times me-1\"></i> ";
                // line 357
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.clear_search"), "html", null, true);
                yield "
                                            </a>
                                        </p>
                                    ";
            }
            // line 361
            yield "                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 364
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

    // line 372
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 373
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
        // line 387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("direction", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 387, $this->source); })()), "ASC")) : ("ASC")), "html", null, true);
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
        // line 399
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("direction", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 399, $this->source); })()), "ASC")) : ("ASC")), "html", null, true);
        yield "') {
                    const sort = sortSelect.value;
                    const search = '";
        // line 401
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 401, $this->source); })()), "")) : ("")), "html", null, true);
        yield "';
                    const filter = '";
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 402, $this->source); })()), "")) : ("")), "html", null, true);
        yield "';
                    
                    let url = '";
        // line 404
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
        return array (  967 => 404,  962 => 402,  958 => 401,  953 => 399,  938 => 387,  920 => 373,  910 => 372,  896 => 364,  888 => 361,  881 => 357,  877 => 356,  874 => 355,  872 => 354,  868 => 353,  863 => 350,  861 => 349,  854 => 346,  851 => 345,  841 => 341,  839 => 340,  836 => 339,  828 => 334,  824 => 333,  817 => 332,  815 => 331,  812 => 330,  804 => 325,  800 => 324,  794 => 323,  786 => 318,  782 => 317,  775 => 316,  773 => 315,  770 => 314,  762 => 309,  758 => 308,  751 => 307,  748 => 306,  746 => 305,  743 => 304,  731 => 298,  729 => 297,  722 => 293,  717 => 290,  711 => 288,  705 => 286,  703 => 285,  698 => 284,  696 => 283,  692 => 281,  686 => 279,  680 => 277,  678 => 276,  673 => 275,  671 => 274,  666 => 272,  662 => 271,  658 => 270,  652 => 267,  646 => 265,  640 => 261,  635 => 260,  628 => 256,  624 => 255,  620 => 254,  616 => 252,  610 => 250,  608 => 249,  604 => 248,  600 => 247,  595 => 245,  591 => 244,  587 => 242,  581 => 240,  579 => 239,  575 => 238,  571 => 237,  562 => 230,  554 => 228,  552 => 227,  548 => 225,  542 => 223,  539 => 222,  533 => 220,  531 => 219,  527 => 218,  516 => 210,  510 => 209,  505 => 207,  499 => 206,  494 => 204,  488 => 203,  483 => 201,  477 => 200,  472 => 198,  466 => 197,  461 => 195,  455 => 194,  450 => 192,  444 => 191,  439 => 189,  433 => 188,  423 => 181,  419 => 180,  410 => 178,  402 => 177,  394 => 176,  389 => 174,  378 => 166,  375 => 165,  369 => 163,  367 => 162,  361 => 161,  353 => 156,  344 => 149,  338 => 146,  333 => 145,  331 => 144,  326 => 142,  322 => 141,  317 => 139,  313 => 138,  308 => 136,  304 => 134,  294 => 133,  285 => 130,  277 => 125,  273 => 124,  266 => 121,  264 => 120,  260 => 118,  253 => 114,  249 => 113,  246 => 112,  243 => 111,  236 => 107,  232 => 106,  229 => 105,  226 => 104,  219 => 100,  215 => 99,  212 => 98,  210 => 97,  204 => 94,  200 => 93,  194 => 90,  191 => 89,  181 => 88,  93 => 7,  88 => 6,  78 => 5,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'admin.users.title'|trans }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/admin-badges.css') }}\">
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
            <a href=\"{{ path('app_admin_users') }}\" class=\"btn btn-outline-primary me-2\">
                <i class=\"fas fa-sync-alt me-1\"></i> {{ 'admin.users.reset_filters'|trans }}
            </a>
            {% if search|default('') is not empty %}
            <a href=\"{{ path('app_admin_users', {'filter': filter|default('')}) }}\" class=\"btn btn-outline-danger\">
                <i class=\"fas fa-times me-1\"></i> {{ 'admin.users.clear_search'|trans }}
            </a>
            {% endif %}
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
                        {% if filter|default('') is not empty %}
                            <input type=\"hidden\" name=\"filter\" value=\"{{ filter }}\">
                        {% endif %}
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
            <a href=\"{{ path('app_admin_users', {'q': search|default('')}) }}\" class=\"filter-badge {{ filter|default('') == '' ? 'active' : '' }}\">
                {{ 'admin.users.filter_all'|trans }}
            </a>
            <a href=\"{{ path('app_admin_users', {'filter': 'verified', 'q': search|default('')}) }}\" class=\"filter-badge {{ filter|default('') == 'verified' ? 'active' : '' }}\">
                {{ 'admin.users.filter_verified'|trans }}
            </a>
            <a href=\"{{ path('app_admin_users', {'filter': 'unverified', 'q': search|default('')}) }}\" class=\"filter-badge {{ filter|default('') == 'unverified' ? 'active' : '' }}\">
                {{ 'admin.users.filter_unverified'|trans }}
            </a>
            <a href=\"{{ path('app_admin_users', {'filter': 'approved', 'q': search|default('')}) }}\" class=\"filter-badge {{ filter|default('') == 'approved' ? 'active' : '' }}\">
                {{ 'admin.users.filter_approved'|trans }}
            </a>
            <a href=\"{{ path('app_admin_users', {'filter': 'pending', 'q': search|default('')}) }}\" class=\"filter-badge {{ filter|default('') == 'pending' ? 'active' : '' }}\">
                {{ 'admin.users.filter_pending'|trans }}
            </a>
            <a href=\"{{ path('app_admin_users', {'filter': 'admins', 'q': search|default('')}) }}\" class=\"filter-badge {{ filter|default('') == 'admins' ? 'active' : '' }}\">
                {{ 'admin.users.filter_admins'|trans }}
            </a>
            <a href=\"{{ path('app_admin_users', {'filter': 'super_admins', 'q': search|default('')}) }}\" class=\"filter-badge {{ filter|default('') == 'super_admins' ? 'active' : '' }}\">
                {{ 'admin.users.filter_super_admins'|trans }}
            </a>
            <a href=\"{{ path('app_admin_users', {'filter': 'users', 'q': search|default('')}) }}\" class=\"filter-badge {{ filter|default('') == 'users' ? 'active' : '' }}\">
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
                                        <span class=\"badge bg-success\">{{ 'admin.users.status_active'|trans }}</span>
                                    {% elseif user.isVerified and not user.isApproved %}
                                        <span class=\"badge bg-warning\">{{ 'admin.users.status_pending'|trans }}</span>
                                    {% else %}
                                        <span class=\"badge bg-danger\">{{ 'admin.users.status_unverified'|trans }}</span>
                                    {% endif %}
                                </td>
                                <td>
                                    {% if user.isSuperAdmin %}
                                        <span class=\"badge bg-danger\">{{ 'admin.users.role_super_admin'|trans }}</span>
                                    {% elseif user.isAdmin %}
                                        <span class=\"badge bg-primary\">{{ 'admin.users.role_admin'|trans }}</span>
                                    {% else %}
                                        <span class=\"badge bg-secondary\">{{ 'admin.users.role_user'|trans }}</span>
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
                                            
                                            {% if user.id != 5 and user.isAdmin %}
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
                                    {% if search|default('') or filter|default('') %}
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
