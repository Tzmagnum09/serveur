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

/* admin/users_edit.html.twig */
class __TwigTemplate_94523933c5849f1beb88da33dceec9b6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users_edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/users_edit.html.twig", 1);
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
        
        /* Améliorations pour résoudre le problème de largeur du champ d'année */
        .flatpickr-current-month .numInputWrapper {
            width: 7ch !important; /* Largeur fixe suffisante pour afficher 4 chiffres */
        }
        
        .flatpickr-current-month input.cur-year {
            width: 100% !important; /* Assure que l'input prend toute la largeur disponible */
            padding: 0 0.5ch !important; /* Réduit le padding pour maximiser l'espace */
            font-size: 1rem !important; /* Taille de police uniforme */
            font-weight: 500 !important;
            height: auto !important;
            line-height: inherit !important;
        }
        
        /* Styles pour les boutons d'année et de mois dans le datepicker */
        .flatpickr-current-month .flatpickr-monthDropdown-months {
            font-weight: 500;
            padding: 5px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 50
        yield "<div class=\"sidebar\">
    <h5 class=\"mb-4\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.title"), "html", null, true);
        yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
                <i class=\"fas fa-tachometer-alt me-2\"></i> ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.dashboard"), "html", null, true);
        yield "
            </a>
        </li>
        ";
        // line 58
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "isAdmin", [], "method", false, false, false, 58) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 58, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "manage_users"], "method", false, false, false, 58)))) {
            // line 59
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
            // line 60
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
            yield "\">
                <i class=\"fas fa-users me-2\"></i> ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.users"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 65
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "isAdmin", [], "method", false, false, false, 65) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 65, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "edit_email_templates"], "method", false, false, false, 65)))) {
            // line 66
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 67
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_templates");
            yield "\">
                <i class=\"fas fa-envelope me-2\"></i> ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.email_templates"), "html", null, true);
            yield "
            </a>";
        }
        // line 70
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "isAdmin", [], "method", false, false, false, 70) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 70, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "translate_content"], "method", false, false, false, 70)))) {
            // line 71
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 72
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_translations");
            yield "\">
                <i class=\"fas fa-language me-2\"></i> ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.translations"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 77
        yield "    </ul>
    
    ";
        // line 79
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 80
            yield "    <h5 class=\"mb-3 mt-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_admin"), "html", null, true);
            yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 83
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_dashboard");
            yield "\">
                <i class=\"fas fa-shield-alt me-2\"></i> ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_dashboard"), "html", null, true);
            yield "
            </a>
        </li>
    </ul>
    ";
        }
        // line 89
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 92
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 93
        yield "<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.title", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 95, $this->source); })()), "fullName", [], "any", false, false, false, 95)]), "html", null, true);
        yield "</h1>
        <div class=\"d-flex\">
            <a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"btn btn-outline-secondary me-2\">
                <i class=\"fas fa-arrow-left me-1\"></i> ";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.back_btn"), "html", null, true);
        yield "
            </a>
            
            ";
        // line 101
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 101, $this->source); })()), "isVerified", [], "any", false, false, false, 101) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 101, $this->source); })()), "isApproved", [], "any", false, false, false, 101)) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 101, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101), "approve_users"], "method", false, false, false, 101)))) {
            // line 102
            yield "                <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_approve", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 102, $this->source); })()), "id", [], "any", false, false, false, 102)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.confirm_approve"), "html", null, true);
            yield "')\">
                    <button type=\"submit\" class=\"btn btn-success\">
                        <i class=\"fas fa-check me-1\"></i> ";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.approve_btn"), "html", null, true);
            yield "
                    </button>
                </form>
            ";
        }
        // line 108
        yield "        </div>
    </div>
    
    <div class=\"row mb-4\">
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.user_info"), "html", null, true);
        yield "</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"text-center mb-4\">
                        <div class=\"avatar-circle bg-primary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3\" style=\"width: 80px; height: 80px;\">
                            <span class=\"h1 text-white\">";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 120, $this->source); })()), "firstName", [], "any", false, false, false, 120)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 120, $this->source); })()), "lastName", [], "any", false, false, false, 120)), "html", null, true);
        yield "</span>
                        </div>
                        <h5>";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 122, $this->source); })()), "fullName", [], "any", false, false, false, 122), "html", null, true);
        yield "</h5>
                        <p class=\"text-muted mb-0\">";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 123, $this->source); })()), "email", [], "any", false, false, false, 123), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"mb-3\">
                        <div class=\"fw-bold text-muted mb-1\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.status"), "html", null, true);
        yield "</div>
                        ";
        // line 128
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 128, $this->source); })()), "isVerified", [], "any", false, false, false, 128) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 128, $this->source); })()), "isApproved", [], "any", false, false, false, 128))) {
            // line 129
            yield "                            <span class=\"badge bg-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.status_active"), "html", null, true);
            yield "</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 130
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 130, $this->source); })()), "isVerified", [], "any", false, false, false, 130) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 130, $this->source); })()), "isApproved", [], "any", false, false, false, 130))) {
            // line 131
            yield "                            <span class=\"badge bg-warning text-dark\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.status_pending"), "html", null, true);
            yield "</span>
                        ";
        } else {
            // line 133
            yield "                            <span class=\"badge bg-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.status_unverified"), "html", null, true);
            yield "</span>
                        ";
        }
        // line 135
        yield "                    </div>
                    
                    <div class=\"mb-3\">
                        <div class=\"fw-bold text-muted mb-1\">";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.role"), "html", null, true);
        yield "</div>
                        ";
        // line 139
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 139, $this->source); })()), "isSuperAdmin", [], "any", false, false, false, 139)) {
            // line 140
            yield "                            <span class=\"badge bg-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.role_super_admin"), "html", null, true);
            yield "</span>
                        ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 141
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 141, $this->source); })()), "isAdmin", [], "any", false, false, false, 141)) {
            // line 142
            yield "                            <span class=\"badge bg-primary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.role_admin"), "html", null, true);
            yield "</span>
                        ";
        } else {
            // line 144
            yield "                            <span class=\"badge bg-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.role_user"), "html", null, true);
            yield "</span>
                        ";
        }
        // line 146
        yield "                    </div>
                    
                    <div class=\"mb-3\">
                        <div class=\"fw-bold text-muted mb-1\">";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.registered_on"), "html", null, true);
        yield "</div>
                        <p class=\"mb-0\">";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 150, $this->source); })()), "createdAt", [], "any", false, false, false, 150), "d/m/Y H:i"), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"mb-3\">
                        <div class=\"fw-bold text-muted mb-1\">";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.last_login"), "html", null, true);
        yield "</div>
                        <p class=\"mb-0\">
                            ";
        // line 156
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 156, $this->source); })()), "lastLoginAt", [], "any", false, false, false, 156)) {
            // line 157
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 157, $this->source); })()), "lastLoginAt", [], "any", false, false, false, 157), "d/m/Y H:i"), "html", null, true);
            yield "
                            ";
        } else {
            // line 159
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.never_logged_in"), "html", null, true);
            yield "
                            ";
        }
        // line 161
        yield "                        </p>
                    </div>
                    
                    <div class=\"mb-3\">
                        <div class=\"fw-bold text-muted mb-1\">";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.fields.birth_date"), "html", null, true);
        yield "</div>
                        <p class=\"mb-0\">
                            ";
        // line 167
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 167, $this->source); })()), "birthDate", [], "any", false, false, false, 167)) {
            // line 168
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 168, $this->source); })()), "birthDate", [], "any", false, false, false, 168), "d/m/Y"), "html", null, true);
            yield "
                                <span class=\"text-muted ms-2\">(";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 169, $this->source); })()), "age", [], "any", false, false, false, 169), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.fields.years_old"), "html", null, true);
            yield ")</span>
                            ";
        } else {
            // line 171
            yield "                                -
                            ";
        }
        // line 173
        yield "                        </p>
                    </div>
                    
                    ";
        // line 176
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 176, $this->source); })()), "isVerified", [], "any", false, false, false, 176)) {
            // line 177
            yield "                    <div class=\"mb-3\">
                        <div class=\"fw-bold text-muted mb-1\">";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.verified_on"), "html", null, true);
            yield "</div>
                        <p class=\"mb-0\">";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 179, $this->source); })()), "emailVerifiedAt", [], "any", false, false, false, 179), "d/m/Y H:i"), "html", null, true);
            yield "</p>
                    </div>
                    ";
        }
        // line 182
        yield "                    
                    ";
        // line 183
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 183, $this->source); })()), "isApproved", [], "any", false, false, false, 183)) {
            // line 184
            yield "                    <div class=\"mb-3\">
                        <div class=\"fw-bold text-muted mb-1\">";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.approved_on"), "html", null, true);
            yield "</div>
                        <p class=\"mb-0\">";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 186, $this->source); })()), "approvedAt", [], "any", false, false, false, 186), "d/m/Y H:i"), "html", null, true);
            yield "</p>
                    </div>
                    ";
        }
        // line 189
        yield "                </div>
            </div>
        </div>
        
        <div class=\"col-md-8\">
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.edit_profile"), "html", null, true);
        yield "</h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 199
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 199, $this->source); })()), 'form_start');
        yield "
                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                ";
        // line 202
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 202, $this->source); })()), "email", [], "any", false, false, false, 202), 'row');
        yield "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 205
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 205, $this->source); })()), "username", [], "any", false, false, false, 205), 'row');
        yield "
                            </div>
                        </div>
                        
                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                ";
        // line 211
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 211, $this->source); })()), "firstName", [], "any", false, false, false, 211), 'row');
        yield "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 214
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 214, $this->source); })()), "lastName", [], "any", false, false, false, 214), 'row');
        yield "
                            </div>
                        </div>
                        
                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                ";
        // line 220
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 220, $this->source); })()), "birthDateInput", [], "any", false, false, false, 220), 'label');
        yield "
                                <div class=\"input-group date-picker-group\">
                                    ";
        // line 222
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 222, $this->source); })()), "birthDateInput", [], "any", false, false, false, 222), 'widget', ["attr" => ["placeholder" => "JJ/MM/AAAA", "class" => "form-control datepicker", "autocomplete" => "off"]]);
        // line 228
        yield "
                                    <span class=\"input-group-text\" id=\"calendar-icon\">
                                        <i class=\"fas fa-calendar-alt\"></i>
                                    </span>
                                </div>
                                ";
        // line 233
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 233, $this->source); })()), "birthDateInput", [], "any", false, false, false, 233), 'errors');
        yield "
                            </div>
                        </div>
                        
                        <div class=\"row mb-3\">
                            <div class=\"col-md-8\">
                                ";
        // line 239
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 239, $this->source); })()), "street", [], "any", false, false, false, 239), 'row');
        yield "
                            </div>
                            <div class=\"col-md-2\">
                                ";
        // line 242
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 242, $this->source); })()), "houseNumber", [], "any", false, false, false, 242), 'row');
        yield "
                            </div>
                            <div class=\"col-md-2\">
                                ";
        // line 245
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 245, $this->source); })()), "boxNumber", [], "any", false, false, false, 245), 'row');
        yield "
                            </div>
                        </div>
                        
                        <div class=\"row mb-3\">
                            <div class=\"col-md-3\">
                                ";
        // line 251
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 251, $this->source); })()), "postalCode", [], "any", false, false, false, 251), 'row');
        yield "
                            </div>
                            <div class=\"col-md-5\">
                                ";
        // line 254
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 254, $this->source); })()), "city", [], "any", false, false, false, 254), 'row');
        yield "
                            </div>
                            <div class=\"col-md-4\">
                                ";
        // line 257
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 257, $this->source); })()), "country", [], "any", false, false, false, 257), 'row');
        yield "
                            </div>
                        </div>
                        
                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                ";
        // line 263
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 263, $this->source); })()), "phoneNumber", [], "any", false, false, false, 263), 'row');
        yield "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 266
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 266, $this->source); })()), "locale", [], "any", false, false, false, 266), 'row');
        yield "
                            </div>
                        </div>
                        
                        ";
        // line 270
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["userForm"] ?? null), "isApproved", [], "any", true, true, false, 270)) {
            // line 271
            yield "                            <div class=\"mb-3 form-check\">
                                ";
            // line 272
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 272, $this->source); })()), "isApproved", [], "any", false, false, false, 272), 'widget', ["attr" => ["class" => "form-check-input"]]);
            yield "
                                ";
            // line 273
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 273, $this->source); })()), "isApproved", [], "any", false, false, false, 273), 'label', ["label_attr" => ["class" => "form-check-label"]]);
            yield "
                            </div>
                        ";
        }
        // line 276
        yield "                        
                        <div class=\"d-flex justify-content-end\">
                            <a href=\"";
        // line 278
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"btn btn-outline-secondary me-2\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.cancel_btn"), "html", null, true);
        yield "</a>
                            <button type=\"submit\" class=\"btn btn-gradient\">";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.save_btn"), "html", null, true);
        yield "</button>
                        </div>
                    ";
        // line 281
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 281, $this->source); })()), 'form_end');
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

    // line 289
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 290
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 292
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
        // line 304
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 304, $this->source); })()), "request", [], "any", false, false, false, 304), "locale", [], "any", false, false, false, 304) == "nl")) {
            // line 305
            yield "                locale = 'nl';
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 306
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 306, $this->source); })()), "request", [], "any", false, false, false, 306), "locale", [], "any", false, false, false, 306) == "en")) {
            // line 307
            yield "                locale = 'en';
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 308
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 308, $this->source); })()), "request", [], "any", false, false, false, 308), "locale", [], "any", false, false, false, 308) == "de")) {
            // line 309
            yield "                locale = 'de';
            ";
        }
        // line 311
        yield "            
            datepickerElements.forEach(function(element) {
                const calendarIcon = document.getElementById('calendar-icon');
                
                // Initialiser flatpickr avec des options améliorées
                const flatpickrInstance = flatpickr(element, {
                    dateFormat: \"d/m/Y\",
                    locale: locale,
                    maxDate: new Date(),
                    minDate: '1920-01-01',
                    disableMobile: true, // Important pour la compatibilité mobile
                    allowInput: true,
                    clickOpens: true,
                    enableTime: false,
                    time_24hr: true,
                    
                    // Activer la sélection de l'année et du mois
                    monthSelectorType: 'dropdown',
                    yearSelectorType: 'dropdown',
                    
                    // Fonction pour configurer correctement les années
                    onOpen: function(selectedDates, dateStr, instance) {
                        // Appliquer des ajustements CSS supplémentaires
                        setTimeout(function() {
                            // Ajuster la largeur de l'input d'année
                            const yearInputs = document.querySelectorAll('.numInputWrapper');
                            yearInputs.forEach(function(wrapper) {
                                wrapper.style.width = '7ch';
                            });
                            
                            // Ajuster la largeur de l'input d'année
                            const yearInput = document.querySelectorAll('.flatpickr-current-month input.cur-year');
                            yearInput.forEach(function(input) {
                                input.style.width = '100%';
                                input.style.display = 'inline';
                                input.style.fontSize = '1rem';
                                input.style.padding = '0 0.5ch';
                            });
                        }, 10);
                    }
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
        return "admin/users_edit.html.twig";
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
        return array (  707 => 311,  703 => 309,  701 => 308,  698 => 307,  696 => 306,  693 => 305,  691 => 304,  677 => 292,  672 => 290,  662 => 289,  647 => 281,  642 => 279,  636 => 278,  632 => 276,  626 => 273,  622 => 272,  619 => 271,  617 => 270,  610 => 266,  604 => 263,  595 => 257,  589 => 254,  583 => 251,  574 => 245,  568 => 242,  562 => 239,  553 => 233,  546 => 228,  544 => 222,  539 => 220,  530 => 214,  524 => 211,  515 => 205,  509 => 202,  503 => 199,  497 => 196,  488 => 189,  482 => 186,  478 => 185,  475 => 184,  473 => 183,  470 => 182,  464 => 179,  460 => 178,  457 => 177,  455 => 176,  450 => 173,  446 => 171,  439 => 169,  434 => 168,  432 => 167,  427 => 165,  421 => 161,  415 => 159,  409 => 157,  407 => 156,  402 => 154,  395 => 150,  391 => 149,  386 => 146,  380 => 144,  374 => 142,  372 => 141,  367 => 140,  365 => 139,  361 => 138,  356 => 135,  350 => 133,  344 => 131,  342 => 130,  337 => 129,  335 => 128,  331 => 127,  324 => 123,  320 => 122,  314 => 120,  306 => 115,  297 => 108,  290 => 104,  282 => 102,  280 => 101,  274 => 98,  270 => 97,  265 => 95,  261 => 93,  251 => 92,  242 => 89,  234 => 84,  230 => 83,  223 => 80,  221 => 79,  217 => 77,  210 => 73,  206 => 72,  203 => 71,  200 => 70,  195 => 68,  191 => 67,  188 => 66,  185 => 65,  178 => 61,  174 => 60,  171 => 59,  169 => 58,  163 => 55,  159 => 54,  153 => 51,  150 => 50,  140 => 49,  93 => 8,  88 => 6,  78 => 5,  61 => 3,  44 => 1,);
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
        
        /* Améliorations pour résoudre le problème de largeur du champ d'année */
        .flatpickr-current-month .numInputWrapper {
            width: 7ch !important; /* Largeur fixe suffisante pour afficher 4 chiffres */
        }
        
        .flatpickr-current-month input.cur-year {
            width: 100% !important; /* Assure que l'input prend toute la largeur disponible */
            padding: 0 0.5ch !important; /* Réduit le padding pour maximiser l'espace */
            font-size: 1rem !important; /* Taille de police uniforme */
            font-weight: 500 !important;
            height: auto !important;
            line-height: inherit !important;
        }
        
        /* Styles pour les boutons d'année et de mois dans le datepicker */
        .flatpickr-current-month .flatpickr-monthDropdown-months {
            font-weight: 500;
            padding: 5px;
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
            </a>{% endif %}
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
                                {{ form_label(userForm.birthDateInput) }}
                                <div class=\"input-group date-picker-group\">
                                    {{ form_widget(userForm.birthDateInput, {
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
                                {{ form_errors(userForm.birthDateInput) }}
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
                
                // Initialiser flatpickr avec des options améliorées
                const flatpickrInstance = flatpickr(element, {
                    dateFormat: \"d/m/Y\",
                    locale: locale,
                    maxDate: new Date(),
                    minDate: '1920-01-01',
                    disableMobile: true, // Important pour la compatibilité mobile
                    allowInput: true,
                    clickOpens: true,
                    enableTime: false,
                    time_24hr: true,
                    
                    // Activer la sélection de l'année et du mois
                    monthSelectorType: 'dropdown',
                    yearSelectorType: 'dropdown',
                    
                    // Fonction pour configurer correctement les années
                    onOpen: function(selectedDates, dateStr, instance) {
                        // Appliquer des ajustements CSS supplémentaires
                        setTimeout(function() {
                            // Ajuster la largeur de l'input d'année
                            const yearInputs = document.querySelectorAll('.numInputWrapper');
                            yearInputs.forEach(function(wrapper) {
                                wrapper.style.width = '7ch';
                            });
                            
                            // Ajuster la largeur de l'input d'année
                            const yearInput = document.querySelectorAll('.flatpickr-current-month input.cur-year');
                            yearInput.forEach(function(input) {
                                input.style.width = '100%';
                                input.style.display = 'inline';
                                input.style.fontSize = '1rem';
                                input.style.padding = '0 0.5ch';
                            });
                        }, 10);
                    }
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
{% endblock %}", "admin/users_edit.html.twig", "/var/www/serveur/templates/admin/users_edit.html.twig");
    }
}
