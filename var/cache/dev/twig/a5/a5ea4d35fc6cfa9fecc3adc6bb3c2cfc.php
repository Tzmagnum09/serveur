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

/* admin/user_edit.html.twig */
class __TwigTemplate_626a8e24728eed0ad1c9924318358d2f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user_edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/user_edit.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.title", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "fullName", [], "any", false, false, false, 3)]), "html", null, true);
        
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
    ";
        // line 8
        yield "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <style>
        /* Style pour le groupe d'input avec l'icône de calendrier */
        .date-picker-group {
            position: relative;
        }
        
        .date-picker-group .input-group-text {
            background: linear-gradient(135deg, #8e44ad, #3498db);
            color: white;
            border: none;
            cursor: pointer;
        }
        
        /* Assurer que le datepicker reste au-dessus des autres éléments */
        .flatpickr-calendar {
            z-index: 9999 !important;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 30
        yield "<div class=\"sidebar\">
    <h5 class=\"mb-4\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.title"), "html", null, true);
        yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
                <i class=\"fas fa-tachometer-alt me-2\"></i> ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.dashboard"), "html", null, true);
        yield "
            </a>
        </li>
        ";
        // line 38
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "isAdmin", [], "method", false, false, false, 38) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 38, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "manage_users"], "method", false, false, false, 38)))) {
            // line 39
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
            // line 40
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
            yield "\">
                <i class=\"fas fa-users me-2\"></i> ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.users"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 45
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "isAdmin", [], "method", false, false, false, 45) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 45, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "edit_email_templates"], "method", false, false, false, 45)))) {
            // line 46
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 47
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_templates");
            yield "\">
                <i class=\"fas fa-envelope me-2\"></i> ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.email_templates"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 52
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "isAdmin", [], "method", false, false, false, 52) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 52, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "translate_content"], "method", false, false, false, 52)))) {
            // line 53
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 54
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_translations");
            yield "\">
                <i class=\"fas fa-language me-2\"></i> ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.translations"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 59
        yield "    </ul>
    
    ";
        // line 61
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 62
            yield "    <h5 class=\"mb-3 mt-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_admin"), "html", null, true);
            yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 65
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_dashboard");
            yield "\">
                <i class=\"fas fa-shield-alt me-2\"></i> ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_dashboard"), "html", null, true);
            yield "
            </a>
        </li>
    </ul>
    ";
        }
        // line 71
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 74
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 75
        yield "<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.title", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "fullName", [], "any", false, false, false, 77)]), "html", null, true);
        yield "</h1>
        <div class=\"d-flex\">
            <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"btn btn-outline-secondary me-2\">
                <i class=\"fas fa-arrow-left me-1\"></i> ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.back_btn"), "html", null, true);
        yield "
            </a>
            
            ";
        // line 83
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 83, $this->source); })()), "isVerified", [], "any", false, false, false, 83) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 83, $this->source); })()), "isApproved", [], "any", false, false, false, 83)) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 83, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), "approve_users"], "method", false, false, false, 83)))) {
            // line 84
            yield "                <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_approve", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.confirm_approve"), "html", null, true);
            yield "')\">
                    <button type=\"submit\" class=\"btn btn-success\">
                        <i class=\"fas fa-check me-1\"></i> ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.approve_btn"), "html", null, true);
            yield "
                    </button>
                </form>
            ";
        }
        // line 90
        yield "        </div>
    </div>
    
    <div class=\"row mb-4\">
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.user_info"), "html", null, true);
        yield "</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"text-center mb-4\">
                        <div class=\"avatar-circle bg-primary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3\" style=\"width: 80px; height: 80px;\">
                            <span class=\"h1 text-white\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 102, $this->source); })()), "firstName", [], "any", false, false, false, 102)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 102, $this->source); })()), "lastName", [], "any", false, false, false, 102)), "html", null, true);
        yield "</span>
                        </div>
                        <h5>";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 104, $this->source); })()), "fullName", [], "any", false, false, false, 104), "html", null, true);
        yield "</h5>
                        <p class=\"text-muted mb-0\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 105, $this->source); })()), "email", [], "any", false, false, false, 105), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"mb-3\">
                        <div class=\"fw-bold text-muted mb-1\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.status"), "html", null, true);
        yield "</div>
                        ";
        // line 110
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 110, $this->source); })()), "isVerified", [], "any", false, false, false, 110) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 110, $this->source); })()), "isApproved", [], "any", false, false, false, 110))) {
            // line 111
            yield "                            <span class=\"badge bg-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.status_active"), "html", null, true);
            yield "</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 112
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 112, $this->source); })()), "isVerified", [], "any", false, false, false, 112) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 112, $this->source); })()), "isApproved", [], "any", false, false, false, 112))) {
            // line 113
            yield "                            <span class=\"badge bg-warning text-dark\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.status_pending"), "html", null, true);
            yield "</span>
                        ";
        } else {
            // line 115
            yield "                            <span class=\"badge bg-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.status_unverified"), "html", null, true);
            yield "</span>
                        ";
        }
        // line 117
        yield "                    </div>
                    
                    <div class=\"mb-3\">
                        <div class=\"fw-bold text-muted mb-1\">";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.role"), "html", null, true);
        yield "</div>
                        ";
        // line 121
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 121, $this->source); })()), "isSuperAdmin", [], "any", false, false, false, 121)) {
            // line 122
            yield "                            <span class=\"badge bg-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.role_super_admin"), "html", null, true);
            yield "</span>
                        ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 123
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 123, $this->source); })()), "isAdmin", [], "any", false, false, false, 123)) {
            // line 124
            yield "                            <span class=\"badge bg-primary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.role_admin"), "html", null, true);
            yield "</span>
                        ";
        } else {
            // line 126
            yield "                            <span class=\"badge bg-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.role_user"), "html", null, true);
            yield "</span>
                        ";
        }
        // line 128
        yield "                    </div>
                    
                    <div class=\"mb-3\">
                        <div class=\"fw-bold text-muted mb-1\">";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.registered_on"), "html", null, true);
        yield "</div>
                        <p class=\"mb-0\">";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 132, $this->source); })()), "createdAt", [], "any", false, false, false, 132), "d/m/Y H:i"), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"mb-3\">
                        <div class=\"fw-bold text-muted mb-1\">";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.last_login"), "html", null, true);
        yield "</div>
                        <p class=\"mb-0\">
                            ";
        // line 138
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 138, $this->source); })()), "lastLoginAt", [], "any", false, false, false, 138)) {
            // line 139
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 139, $this->source); })()), "lastLoginAt", [], "any", false, false, false, 139), "d/m/Y H:i"), "html", null, true);
            yield "
                            ";
        } else {
            // line 141
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.never_logged_in"), "html", null, true);
            yield "
                            ";
        }
        // line 143
        yield "                        </p>
                    </div>
                    
                    <div class=\"mb-3\">
                        <div class=\"fw-bold text-muted mb-1\">";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.fields.birth_date"), "html", null, true);
        yield "</div>
                        <p class=\"mb-0\">
                            ";
        // line 149
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 149, $this->source); })()), "birthDate", [], "any", false, false, false, 149)) {
            // line 150
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 150, $this->source); })()), "birthDate", [], "any", false, false, false, 150), "d/m/Y"), "html", null, true);
            yield "
                                <span class=\"text-muted ms-2\">(";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 151, $this->source); })()), "age", [], "any", false, false, false, 151), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.fields.years_old"), "html", null, true);
            yield ")</span>
                            ";
        } else {
            // line 153
            yield "                                -
                            ";
        }
        // line 155
        yield "                        </p>
                    </div>
                    
                    ";
        // line 158
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 158, $this->source); })()), "isVerified", [], "any", false, false, false, 158)) {
            // line 159
            yield "                    <div class=\"mb-3\">
                        <div class=\"fw-bold text-muted mb-1\">";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.verified_on"), "html", null, true);
            yield "</div>
                        <p class=\"mb-0\">";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 161, $this->source); })()), "emailVerifiedAt", [], "any", false, false, false, 161), "d/m/Y H:i"), "html", null, true);
            yield "</p>
                    </div>
                    ";
        }
        // line 164
        yield "                    
                    ";
        // line 165
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 165, $this->source); })()), "isApproved", [], "any", false, false, false, 165)) {
            // line 166
            yield "                    <div class=\"mb-3\">
                        <div class=\"fw-bold text-muted mb-1\">";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.approved_on"), "html", null, true);
            yield "</div>
                        <p class=\"mb-0\">";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 168, $this->source); })()), "approvedAt", [], "any", false, false, false, 168), "d/m/Y H:i"), "html", null, true);
            yield "</p>
                    </div>
                    ";
        }
        // line 171
        yield "                </div>
            </div>
        </div>
        
        <div class=\"col-md-8\">
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.edit_profile"), "html", null, true);
        yield "</h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 181
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 181, $this->source); })()), 'form_start');
        yield "
                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                ";
        // line 184
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 184, $this->source); })()), "email", [], "any", false, false, false, 184), 'row');
        yield "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 187
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 187, $this->source); })()), "username", [], "any", false, false, false, 187), 'row');
        yield "
                            </div>
                        </div>
                        
                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                ";
        // line 193
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 193, $this->source); })()), "firstName", [], "any", false, false, false, 193), 'row');
        yield "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 196
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 196, $this->source); })()), "lastName", [], "any", false, false, false, 196), 'row');
        yield "
                            </div>
                        </div>
                        
                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                ";
        // line 202
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 202, $this->source); })()), "birthDate", [], "any", false, false, false, 202), 'label');
        yield "
                                <div class=\"input-group date-picker-group\">
                                    ";
        // line 204
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 204, $this->source); })()), "birthDate", [], "any", false, false, false, 204), 'widget', ["attr" => ["placeholder" => "JJ/MM/AAAA", "class" => "form-control datepicker", "autocomplete" => "off"]]);
        // line 210
        yield "
                                    <span class=\"input-group-text\" id=\"calendar-icon\">
                                        <i class=\"fas fa-calendar-alt\"></i>
                                    </span>
                                </div>
                                ";
        // line 215
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 215, $this->source); })()), "birthDate", [], "any", false, false, false, 215), 'errors');
        yield "
                            </div>
                        </div>
                        
                        <div class=\"row mb-3\">
                            <div class=\"col-md-8\">
                                ";
        // line 221
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 221, $this->source); })()), "street", [], "any", false, false, false, 221), 'row');
        yield "
                            </div>
                            <div class=\"col-md-2\">
                                ";
        // line 224
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 224, $this->source); })()), "houseNumber", [], "any", false, false, false, 224), 'row');
        yield "
                            </div>
                            <div class=\"col-md-2\">
                                ";
        // line 227
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 227, $this->source); })()), "boxNumber", [], "any", false, false, false, 227), 'row');
        yield "
                            </div>
                        </div>
                        
                        <div class=\"row mb-3\">
                            <div class=\"col-md-3\">
                                ";
        // line 233
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 233, $this->source); })()), "postalCode", [], "any", false, false, false, 233), 'row');
        yield "
                            </div>
                            <div class=\"col-md-5\">
                                ";
        // line 236
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 236, $this->source); })()), "city", [], "any", false, false, false, 236), 'row');
        yield "
                            </div>
                            <div class=\"col-md-4\">
                                ";
        // line 239
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 239, $this->source); })()), "country", [], "any", false, false, false, 239), 'row');
        yield "
                            </div>
                        </div>
                        
                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                ";
        // line 245
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 245, $this->source); })()), "phoneNumber", [], "any", false, false, false, 245), 'row');
        yield "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 248
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 248, $this->source); })()), "locale", [], "any", false, false, false, 248), 'row');
        yield "
                            </div>
                        </div>
                        
                        ";
        // line 252
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["userForm"] ?? null), "isApproved", [], "any", true, true, false, 252)) {
            // line 253
            yield "                            <div class=\"mb-3 form-check\">
                                ";
            // line 254
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 254, $this->source); })()), "isApproved", [], "any", false, false, false, 254), 'widget', ["attr" => ["class" => "form-check-input"]]);
            yield "
                                ";
            // line 255
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 255, $this->source); })()), "isApproved", [], "any", false, false, false, 255), 'label', ["label_attr" => ["class" => "form-check-label"]]);
            yield "
                            </div>
                        ";
        }
        // line 258
        yield "                        
                        <div class=\"d-flex justify-content-end\">
                            <a href=\"";
        // line 260
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"btn btn-outline-secondary me-2\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.cancel_btn"), "html", null, true);
        yield "</a>
                            <button type=\"submit\" class=\"btn btn-gradient\">";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.save_btn"), "html", null, true);
        yield "</button>
                        </div>
                    ";
        // line 263
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 263, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 271
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 272
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 274
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/nl.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/de.js\"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialiser le datepicker
            const datepickerElements = document.querySelectorAll('.datepicker');
            
            // Déterminer la locale actuelle
            let locale = 'fr';
            ";
        // line 286
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 286, $this->source); })()), "request", [], "any", false, false, false, 286), "locale", [], "any", false, false, false, 286) == "nl")) {
            // line 287
            yield "                locale = 'nl';
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 288
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 288, $this->source); })()), "request", [], "any", false, false, false, 288), "locale", [], "any", false, false, false, 288) == "en")) {
            // line 289
            yield "                locale = 'en';
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 290
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 290, $this->source); })()), "request", [], "any", false, false, false, 290), "locale", [], "any", false, false, false, 290) == "de")) {
            // line 291
            yield "                locale = 'de';
            ";
        }
        // line 293
        yield "            
            datepickerElements.forEach(function(element) {
                const calendarIcon = document.getElementById('calendar-icon');
                
                // Initialiser flatpickr
                const flatpickrInstance = flatpickr(element, {
                    dateFormat: \"d/m/Y\",
                    locale: locale,
                    maxDate: new Date(),
                    yearRange: [1900, new Date().getFullYear()],
                    disableMobile: false,
                    allowInput: true,
                    clickOpens: true
                });
                
                // Établir la relation entre l'icône et l'input pour l'accessibilité
                if (calendarIcon) {
                    calendarIcon.addEventListener('click', function() {
                        flatpickrInstance.open();
                    });
                }
            });
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
        return "admin/user_edit.html.twig";
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
        return array (  689 => 293,  685 => 291,  683 => 290,  680 => 289,  678 => 288,  675 => 287,  673 => 286,  659 => 274,  654 => 272,  644 => 271,  629 => 263,  624 => 261,  618 => 260,  614 => 258,  608 => 255,  604 => 254,  601 => 253,  599 => 252,  592 => 248,  586 => 245,  577 => 239,  571 => 236,  565 => 233,  556 => 227,  550 => 224,  544 => 221,  535 => 215,  528 => 210,  526 => 204,  521 => 202,  512 => 196,  506 => 193,  497 => 187,  491 => 184,  485 => 181,  479 => 178,  470 => 171,  464 => 168,  460 => 167,  457 => 166,  455 => 165,  452 => 164,  446 => 161,  442 => 160,  439 => 159,  437 => 158,  432 => 155,  428 => 153,  421 => 151,  416 => 150,  414 => 149,  409 => 147,  403 => 143,  397 => 141,  391 => 139,  389 => 138,  384 => 136,  377 => 132,  373 => 131,  368 => 128,  362 => 126,  356 => 124,  354 => 123,  349 => 122,  347 => 121,  343 => 120,  338 => 117,  332 => 115,  326 => 113,  324 => 112,  319 => 111,  317 => 110,  313 => 109,  306 => 105,  302 => 104,  296 => 102,  288 => 97,  279 => 90,  272 => 86,  264 => 84,  262 => 83,  256 => 80,  252 => 79,  247 => 77,  243 => 75,  233 => 74,  224 => 71,  216 => 66,  212 => 65,  205 => 62,  203 => 61,  199 => 59,  192 => 55,  188 => 54,  185 => 53,  182 => 52,  175 => 48,  171 => 47,  168 => 46,  165 => 45,  158 => 41,  154 => 40,  151 => 39,  149 => 38,  143 => 35,  139 => 34,  133 => 31,  130 => 30,  120 => 29,  93 => 8,  88 => 6,  78 => 5,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'admin.user_edit.title'|trans({'%name%': user.fullName}) }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Style pour le datepicker #}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <style>
        /* Style pour le groupe d'input avec l'icône de calendrier */
        .date-picker-group {
            position: relative;
        }
        
        .date-picker-group .input-group-text {
            background: linear-gradient(135deg, #8e44ad, #3498db);
            color: white;
            border: none;
            cursor: pointer;
        }
        
        /* Assurer que le datepicker reste au-dessus des autres éléments */
        .flatpickr-calendar {
            z-index: 9999 !important;
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
        <h1 class=\"h3\">{{ 'admin.user_edit.title'|trans({'%name%': user.fullName}) }}</h1>
        <div class=\"d-flex\">
            <a href=\"{{ path('app_admin_users') }}\" class=\"btn btn-outline-secondary me-2\">
                <i class=\"fas fa-arrow-left me-1\"></i> {{ 'admin.user_edit.back_btn'|trans }}
            </a>
            
            {% if user.isVerified and not user.isApproved and (is_granted('ROLE_SUPER_ADMIN') or permission_service.hasPermission(app.user, 'approve_users')) %}
                <form method=\"post\" action=\"{{ path('app_admin_user_approve', {'id': user.id}) }}\" onsubmit=\"return confirm('{{ 'admin.users.confirm_approve'|trans }}')\">
                    <button type=\"submit\" class=\"btn btn-success\">
                        <i class=\"fas fa-check me-1\"></i> {{ 'admin.user_edit.approve_btn'|trans }}
                    </button>
                </form>
            {% endif %}
        </div>
    </div>
    
    <div class=\"row mb-4\">
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">{{ 'admin.user_edit.user_info'|trans }}</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"text-center mb-4\">
                        <div class=\"avatar-circle bg-primary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3\" style=\"width: 80px; height: 80px;\">
                            <span class=\"h1 text-white\">{{ user.firstName|first }}{{ user.lastName|first }}</span>
                        </div>
                        <h5>{{ user.fullName }}</h5>
                        <p class=\"text-muted mb-0\">{{ user.email }}</p>
                    </div>
                    
                    <div class=\"mb-3\">
                        <div class=\"fw-bold text-muted mb-1\">{{ 'admin.user_edit.status'|trans }}</div>
                        {% if user.isVerified and user.isApproved %}
                            <span class=\"badge bg-success\">{{ 'admin.users.status_active'|trans }}</span>
                        {% elseif user.isVerified and not user.isApproved %}
                            <span class=\"badge bg-warning text-dark\">{{ 'admin.users.status_pending'|trans }}</span>
                        {% else %}
                            <span class=\"badge bg-danger\">{{ 'admin.users.status_unverified'|trans }}</span>
                        {% endif %}
                    </div>
                    
                    <div class=\"mb-3\">
                        <div class=\"fw-bold text-muted mb-1\">{{ 'admin.user_edit.role'|trans }}</div>
                        {% if user.isSuperAdmin %}
                            <span class=\"badge bg-danger\">{{ 'admin.users.role_super_admin'|trans }}</span>
                        {% elseif user.isAdmin %}
                            <span class=\"badge bg-primary\">{{ 'admin.users.role_admin'|trans }}</span>
                        {% else %}
                            <span class=\"badge bg-secondary\">{{ 'admin.users.role_user'|trans }}</span>
                        {% endif %}
                    </div>
                    
                    <div class=\"mb-3\">
                        <div class=\"fw-bold text-muted mb-1\">{{ 'admin.user_edit.registered_on'|trans }}</div>
                        <p class=\"mb-0\">{{ user.createdAt|date('d/m/Y H:i') }}</p>
                    </div>
                    
                    <div class=\"mb-3\">
                        <div class=\"fw-bold text-muted mb-1\">{{ 'admin.user_edit.last_login'|trans }}</div>
                        <p class=\"mb-0\">
                            {% if user.lastLoginAt %}
                                {{ user.lastLoginAt|date('d/m/Y H:i') }}
                            {% else %}
                                {{ 'admin.user_edit.never_logged_in'|trans }}
                            {% endif %}
                        </p>
                    </div>
                    
                    <div class=\"mb-3\">
                        <div class=\"fw-bold text-muted mb-1\">{{ 'profile.fields.birth_date'|trans }}</div>
                        <p class=\"mb-0\">
                            {% if user.birthDate %}
                                {{ user.birthDate|date('d/m/Y') }}
                                <span class=\"text-muted ms-2\">({{ user.age }} {{ 'profile.fields.years_old'|trans }})</span>
                            {% else %}
                                -
                            {% endif %}
                        </p>
                    </div>
                    
                    {% if user.isVerified %}
                    <div class=\"mb-3\">
                        <div class=\"fw-bold text-muted mb-1\">{{ 'admin.user_edit.verified_on'|trans }}</div>
                        <p class=\"mb-0\">{{ user.emailVerifiedAt|date('d/m/Y H:i') }}</p>
                    </div>
                    {% endif %}
                    
                    {% if user.isApproved %}
                    <div class=\"mb-3\">
                        <div class=\"fw-bold text-muted mb-1\">{{ 'admin.user_edit.approved_on'|trans }}</div>
                        <p class=\"mb-0\">{{ user.approvedAt|date('d/m/Y H:i') }}</p>
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>
        
        <div class=\"col-md-8\">
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">{{ 'admin.user_edit.edit_profile'|trans }}</h5>
                </div>
                <div class=\"card-body\">
                    {{ form_start(userForm) }}
                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                {{ form_row(userForm.email) }}
                            </div>
                            <div class=\"col-md-6\">
                                {{ form_row(userForm.username) }}
                            </div>
                        </div>
                        
                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                {{ form_row(userForm.firstName) }}
                            </div>
                            <div class=\"col-md-6\">
                                {{ form_row(userForm.lastName) }}
                            </div>
                        </div>
                        
                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                {{ form_label(userForm.birthDate) }}
                                <div class=\"input-group date-picker-group\">
                                    {{ form_widget(userForm.birthDate, {
                                        'attr': {
                                            'placeholder': 'JJ/MM/AAAA',
                                            'class': 'form-control datepicker',
                                            'autocomplete': 'off'
                                        }
                                    }) }}
                                    <span class=\"input-group-text\" id=\"calendar-icon\">
                                        <i class=\"fas fa-calendar-alt\"></i>
                                    </span>
                                </div>
                                {{ form_errors(userForm.birthDate) }}
                            </div>
                        </div>
                        
                        <div class=\"row mb-3\">
                            <div class=\"col-md-8\">
                                {{ form_row(userForm.street) }}
                            </div>
                            <div class=\"col-md-2\">
                                {{ form_row(userForm.houseNumber) }}
                            </div>
                            <div class=\"col-md-2\">
                                {{ form_row(userForm.boxNumber) }}
                            </div>
                        </div>
                        
                        <div class=\"row mb-3\">
                            <div class=\"col-md-3\">
                                {{ form_row(userForm.postalCode) }}
                            </div>
                            <div class=\"col-md-5\">
                                {{ form_row(userForm.city) }}
                            </div>
                            <div class=\"col-md-4\">
                                {{ form_row(userForm.country) }}
                            </div>
                        </div>
                        
                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                {{ form_row(userForm.phoneNumber) }}
                            </div>
                            <div class=\"col-md-6\">
                                {{ form_row(userForm.locale) }}
                            </div>
                        </div>
                        
                        {% if userForm.isApproved is defined %}
                            <div class=\"mb-3 form-check\">
                                {{ form_widget(userForm.isApproved, {'attr': {'class': 'form-check-input'}}) }}
                                {{ form_label(userForm.isApproved, null, {'label_attr': {'class': 'form-check-label'}}) }}
                            </div>
                        {% endif %}
                        
                        <div class=\"d-flex justify-content-end\">
                            <a href=\"{{ path('app_admin_users') }}\" class=\"btn btn-outline-secondary me-2\">{{ 'admin.user_edit.cancel_btn'|trans }}</a>
                            <button type=\"submit\" class=\"btn btn-gradient\">{{ 'admin.user_edit.save_btn'|trans }}</button>
                        </div>
                    {{ form_end(userForm) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {# Script pour le datepicker #}
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/nl.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/de.js\"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialiser le datepicker
            const datepickerElements = document.querySelectorAll('.datepicker');
            
            // Déterminer la locale actuelle
            let locale = 'fr';
            {% if app.request.locale == 'nl' %}
                locale = 'nl';
            {% elseif app.request.locale == 'en' %}
                locale = 'en';
            {% elseif app.request.locale == 'de' %}
                locale = 'de';
            {% endif %}
            
            datepickerElements.forEach(function(element) {
                const calendarIcon = document.getElementById('calendar-icon');
                
                // Initialiser flatpickr
                const flatpickrInstance = flatpickr(element, {
                    dateFormat: \"d/m/Y\",
                    locale: locale,
                    maxDate: new Date(),
                    yearRange: [1900, new Date().getFullYear()],
                    disableMobile: false,
                    allowInput: true,
                    clickOpens: true
                });
                
                // Établir la relation entre l'icône et l'input pour l'accessibilité
                if (calendarIcon) {
                    calendarIcon.addEventListener('click', function() {
                        flatpickrInstance.open();
                    });
                }
            });
        });
    </script>
{% endblock %}", "admin/user_edit.html.twig", "/var/www/serveur/templates/admin/user_edit.html.twig");
    }
}
