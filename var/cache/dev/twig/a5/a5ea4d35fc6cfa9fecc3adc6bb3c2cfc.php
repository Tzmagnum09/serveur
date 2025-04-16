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

        /* Amélioration des espacements et styles du formulaire */
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-label {
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: #8e44ad;
            box-shadow: 0 0 0 0.25rem rgba(142, 68, 173, 0.25);
        }
        
        /* Styles pour les conteneurs flexbox d'adresse */
        .address-flex-container {
            display: flex;
            gap: 15px;
            margin-bottom: 1.5rem;
        }
        
        .address-flex-container > div:first-child {
            flex: 3;
        }
        
        .address-flex-container > div:not(:first-child) {
            flex: 1;
        }
        
        /* Styles pour les conteneurs flexbox de localisation */
        .location-flex-container {
            display: flex;
            gap: 15px;
            margin-bottom: 1.5rem;
        }
        
        .location-flex-container > div:first-child {
            flex: 1;
        }
        
        .location-flex-container > div:nth-child(2) {
            flex: 2;
        }
        
        .location-flex-container > div:last-child {
            flex: 2;
        }
        
        /* Style pour la section utilisateur */
        .user-profile-section {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 1.5rem;
        }
        
        .section-title {
            border-bottom: 1px solid #dee2e6;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-weight: 600;
            color: #333;
        }
        
        /* Rendre la carte plus attrayante */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .card:hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }
        
        .card-header {
            border-radius: 12px 12px 0 0 !important;
            background: linear-gradient(135deg, #8e44ad, #3498db);
            color: white;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 132
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 133
        yield "<div class=\"sidebar\">
    <h5 class=\"mb-4\">";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.title"), "html", null, true);
        yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
                <i class=\"fas fa-tachometer-alt me-2\"></i> ";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.dashboard"), "html", null, true);
        yield "
            </a>
        </li>
        ";
        // line 141
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "user", [], "any", false, false, false, 141), "isAdmin", [], "method", false, false, false, 141) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 141, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "user", [], "any", false, false, false, 141), "manage_users"], "method", false, false, false, 141)))) {
            // line 142
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
            // line 143
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
            yield "\">
                <i class=\"fas fa-users me-2\"></i> ";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.users"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 148
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "user", [], "any", false, false, false, 148), "isAdmin", [], "method", false, false, false, 148) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 148, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "user", [], "any", false, false, false, 148), "edit_email_templates"], "method", false, false, false, 148)))) {
            // line 149
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 150
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_templates");
            yield "\">
                <i class=\"fas fa-envelope me-2\"></i> ";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.email_templates"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 155
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155), "isAdmin", [], "method", false, false, false, 155) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 155, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155), "translate_content"], "method", false, false, false, 155)))) {
            // line 156
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 157
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_translations");
            yield "\">
                <i class=\"fas fa-language me-2\"></i> ";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.translations"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 162
        yield "    </ul>
    
    ";
        // line 164
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 165
            yield "    <h5 class=\"mb-3 mt-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_admin"), "html", null, true);
            yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 168
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_dashboard");
            yield "\">
                <i class=\"fas fa-shield-alt me-2\"></i> ";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_dashboard"), "html", null, true);
            yield "
            </a>
        </li>
    </ul>
    ";
        }
        // line 174
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 177
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 178
        yield "<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.title", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 180, $this->source); })()), "fullName", [], "any", false, false, false, 180)]), "html", null, true);
        yield "</h1>
        <div class=\"d-flex\">
            <a href=\"";
        // line 182
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"btn btn-outline-secondary me-2\">
                <i class=\"fas fa-arrow-left me-1\"></i> ";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.back_btn"), "html", null, true);
        yield "
            </a>
            
            ";
        // line 186
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 186, $this->source); })()), "isVerified", [], "any", false, false, false, 186) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 186, $this->source); })()), "isApproved", [], "any", false, false, false, 186)) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 186, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 186, $this->source); })()), "user", [], "any", false, false, false, 186), "approve_users"], "method", false, false, false, 186)))) {
            // line 187
            yield "                <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_approve", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 187, $this->source); })()), "id", [], "any", false, false, false, 187)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.confirm_approve"), "html", null, true);
            yield "')\">
                    <button type=\"submit\" class=\"btn btn-success\">
                        <i class=\"fas fa-check me-1\"></i> ";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.approve_btn"), "html", null, true);
            yield "
                    </button>
                </form>
            ";
        }
        // line 193
        yield "        </div>
    </div>
    
    <div class=\"row mb-4\">
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header py-3\">
                    <h5 class=\"mb-0\">";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.user_info"), "html", null, true);
        yield "</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"text-center mb-4\">
                        <div class=\"avatar-circle bg-primary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3\" style=\"width: 100px; height: 100px;\">
                            <span class=\"h1 text-white\">";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 205, $this->source); })()), "firstName", [], "any", false, false, false, 205)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 205, $this->source); })()), "lastName", [], "any", false, false, false, 205)), "html", null, true);
        yield "</span>
                        </div>
                        <h5 class=\"mb-2\">";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 207, $this->source); })()), "fullName", [], "any", false, false, false, 207), "html", null, true);
        yield "</h5>
                        <p class=\"text-muted mb-0\">";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 208, $this->source); })()), "email", [], "any", false, false, false, 208), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"mb-4\">
                        <div class=\"fw-bold text-muted mb-2\">";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.status"), "html", null, true);
        yield "</div>
                        ";
        // line 213
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 213, $this->source); })()), "isVerified", [], "any", false, false, false, 213) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 213, $this->source); })()), "isApproved", [], "any", false, false, false, 213))) {
            // line 214
            yield "                            <span class=\"badge bg-success py-2 px-3\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.status_active"), "html", null, true);
            yield "</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 215
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 215, $this->source); })()), "isVerified", [], "any", false, false, false, 215) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 215, $this->source); })()), "isApproved", [], "any", false, false, false, 215))) {
            // line 216
            yield "                            <span class=\"badge bg-warning text-dark py-2 px-3\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.status_pending"), "html", null, true);
            yield "</span>
                        ";
        } else {
            // line 218
            yield "                            <span class=\"badge bg-danger py-2 px-3\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.status_unverified"), "html", null, true);
            yield "</span>
                        ";
        }
        // line 220
        yield "                    </div>
                    
                    <div class=\"mb-4\">
                        <div class=\"fw-bold text-muted mb-2\">";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.role"), "html", null, true);
        yield "</div>
                        ";
        // line 224
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 224, $this->source); })()), "isSuperAdmin", [], "any", false, false, false, 224)) {
            // line 225
            yield "                            <span class=\"badge bg-danger py-2 px-3\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.role_super_admin"), "html", null, true);
            yield "</span>
                        ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 226
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 226, $this->source); })()), "isAdmin", [], "any", false, false, false, 226)) {
            // line 227
            yield "                            <span class=\"badge bg-primary py-2 px-3\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.role_admin"), "html", null, true);
            yield "</span>
                        ";
        } else {
            // line 229
            yield "                            <span class=\"badge bg-secondary py-2 px-3\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.role_user"), "html", null, true);
            yield "</span>
                        ";
        }
        // line 231
        yield "                    </div>
                    
                    <div class=\"mb-4\">
                        <div class=\"fw-bold text-muted mb-2\">";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.registered_on"), "html", null, true);
        yield "</div>
                        <p class=\"mb-0\">";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 235, $this->source); })()), "createdAt", [], "any", false, false, false, 235), "d/m/Y H:i"), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"mb-4\">
                        <div class=\"fw-bold text-muted mb-2\">";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.last_login"), "html", null, true);
        yield "</div>
                        <p class=\"mb-0\">
                            ";
        // line 241
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 241, $this->source); })()), "lastLoginAt", [], "any", false, false, false, 241)) {
            // line 242
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 242, $this->source); })()), "lastLoginAt", [], "any", false, false, false, 242), "d/m/Y H:i"), "html", null, true);
            yield "
                            ";
        } else {
            // line 244
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.never_logged_in"), "html", null, true);
            yield "
                            ";
        }
        // line 246
        yield "                        </p>
                    </div>
                    
                    <div class=\"mb-4\">
                        <div class=\"fw-bold text-muted mb-2\">";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.fields.birth_date"), "html", null, true);
        yield "</div>
                        <p class=\"mb-0\">
                            ";
        // line 252
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 252, $this->source); })()), "birthDate", [], "any", false, false, false, 252)) {
            // line 253
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 253, $this->source); })()), "birthDate", [], "any", false, false, false, 253), "d/m/Y"), "html", null, true);
            yield "
                                <span class=\"text-muted ms-2\">(";
            // line 254
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 254, $this->source); })()), "age", [], "any", false, false, false, 254), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.fields.years_old"), "html", null, true);
            yield ")</span>
                            ";
        } else {
            // line 256
            yield "                                -
                            ";
        }
        // line 258
        yield "                        </p>
                    </div>
                    
                    ";
        // line 261
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 261, $this->source); })()), "isVerified", [], "any", false, false, false, 261)) {
            // line 262
            yield "                    <div class=\"mb-4\">
                        <div class=\"fw-bold text-muted mb-2\">";
            // line 263
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.verified_on"), "html", null, true);
            yield "</div>
                        <p class=\"mb-0\">";
            // line 264
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 264, $this->source); })()), "emailVerifiedAt", [], "any", false, false, false, 264), "d/m/Y H:i"), "html", null, true);
            yield "</p>
                    </div>
                    ";
        }
        // line 267
        yield "                    
                    ";
        // line 268
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 268, $this->source); })()), "isApproved", [], "any", false, false, false, 268)) {
            // line 269
            yield "                    <div class=\"mb-4\">
                        <div class=\"fw-bold text-muted mb-2\">";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.approved_on"), "html", null, true);
            yield "</div>
                        <p class=\"mb-0\">";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 271, $this->source); })()), "approvedAt", [], "any", false, false, false, 271), "d/m/Y H:i"), "html", null, true);
            yield "</p>
                    </div>
                    ";
        }
        // line 274
        yield "                </div>
            </div>
        </div>
        
        <div class=\"col-md-8\">
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header py-3\">
                    <h5 class=\"mb-0\">";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.edit_profile"), "html", null, true);
        yield "</h5>
                </div>
                <div class=\"card-body p-4\">
                    ";
        // line 284
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 284, $this->source); })()), 'form_start');
        yield "
                        <!-- Informations d'identification -->
                        <div class=\"user-profile-section\">
                            <h6 class=\"section-title\">Informations d'identification</h6>
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"form-group\">
                                        ";
        // line 291
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 291, $this->source); })()), "email", [], "any", false, false, false, 291), 'label');
        yield "
                                        ";
        // line 292
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 292, $this->source); })()), "email", [], "any", false, false, false, 292), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                        ";
        // line 293
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 293, $this->source); })()), "email", [], "any", false, false, false, 293), 'errors');
        yield "
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"form-group\">
                                        ";
        // line 298
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 298, $this->source); })()), "username", [], "any", false, false, false, 298), 'label');
        yield "
                                        ";
        // line 299
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 299, $this->source); })()), "username", [], "any", false, false, false, 299), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                        ";
        // line 300
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 300, $this->source); })()), "username", [], "any", false, false, false, 300), 'errors');
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Informations personnelles -->
                        <div class=\"user-profile-section\">
                            <h6 class=\"section-title\">Informations personnelles</h6>
                            <div class=\"row mb-4\">
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"form-group\">
                                        ";
        // line 312
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 312, $this->source); })()), "firstName", [], "any", false, false, false, 312), 'label');
        yield "
                                        ";
        // line 313
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 313, $this->source); })()), "firstName", [], "any", false, false, false, 313), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                        ";
        // line 314
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 314, $this->source); })()), "firstName", [], "any", false, false, false, 314), 'errors');
        yield "
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"form-group\">
                                        ";
        // line 319
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 319, $this->source); })()), "lastName", [], "any", false, false, false, 319), 'label');
        yield "
                                        ";
        // line 320
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 320, $this->source); })()), "lastName", [], "any", false, false, false, 320), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                        ";
        // line 321
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 321, $this->source); })()), "lastName", [], "any", false, false, false, 321), 'errors');
        yield "
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"form-group\">
                                        <label class=\"form-label\" for=\"birth_date_input\">";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.birth_date"), "html", null, true);
        yield "</label>
                                        <div class=\"input-group date-picker-group\">
                                            <input type=\"text\" id=\"birth_date_input\" name=\"birth_date\" class=\"form-control datepicker\" 
                                                placeholder=\"JJ/MM/AAAA\" autocomplete=\"off\" 
                                                value=\"";
        // line 333
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 333, $this->source); })()), "birthDate", [], "any", false, false, false, 333)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 333, $this->source); })()), "birthDate", [], "any", false, false, false, 333), "d/m/Y"), "html", null, true)) : (""));
        yield "\">
                                            <span class=\"input-group-text\" id=\"calendar-icon\">
                                                <i class=\"fas fa-calendar-alt\"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"form-group\">
                                        ";
        // line 342
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 342, $this->source); })()), "phoneNumber", [], "any", false, false, false, 342), 'label');
        yield "
                                        ";
        // line 343
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 343, $this->source); })()), "phoneNumber", [], "any", false, false, false, 343), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                        ";
        // line 344
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 344, $this->source); })()), "phoneNumber", [], "any", false, false, false, 344), 'errors');
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Adresse -->
                        <div class=\"user-profile-section\">
                            <h6 class=\"section-title\">Adresse</h6>
                            
                            <!-- Rue, numéro et boîte sur la même ligne -->
                            <div class=\"address-flex-container\">
                                <div class=\"form-group\">
                                    ";
        // line 357
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 357, $this->source); })()), "street", [], "any", false, false, false, 357), 'label');
        yield "
                                    ";
        // line 358
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 358, $this->source); })()), "street", [], "any", false, false, false, 358), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    ";
        // line 359
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 359, $this->source); })()), "street", [], "any", false, false, false, 359), 'errors');
        yield "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 362
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 362, $this->source); })()), "houseNumber", [], "any", false, false, false, 362), 'label');
        yield "
                                    ";
        // line 363
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 363, $this->source); })()), "houseNumber", [], "any", false, false, false, 363), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    ";
        // line 364
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 364, $this->source); })()), "houseNumber", [], "any", false, false, false, 364), 'errors');
        yield "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 367
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 367, $this->source); })()), "boxNumber", [], "any", false, false, false, 367), 'label');
        yield "
                                    ";
        // line 368
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 368, $this->source); })()), "boxNumber", [], "any", false, false, false, 368), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    ";
        // line 369
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 369, $this->source); })()), "boxNumber", [], "any", false, false, false, 369), 'errors');
        yield "
                                </div>
                            </div>
                            
                            <!-- Code postal, ville et pays sur la même ligne -->
                            <div class=\"location-flex-container\">
                                <div class=\"form-group\">
                                    ";
        // line 376
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 376, $this->source); })()), "postalCode", [], "any", false, false, false, 376), 'label');
        yield "
                                    ";
        // line 377
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 377, $this->source); })()), "postalCode", [], "any", false, false, false, 377), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    ";
        // line 378
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 378, $this->source); })()), "postalCode", [], "any", false, false, false, 378), 'errors');
        yield "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 381
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 381, $this->source); })()), "city", [], "any", false, false, false, 381), 'label');
        yield "
                                    ";
        // line 382
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 382, $this->source); })()), "city", [], "any", false, false, false, 382), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    ";
        // line 383
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 383, $this->source); })()), "city", [], "any", false, false, false, 383), 'errors');
        yield "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 386
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 386, $this->source); })()), "country", [], "any", false, false, false, 386), 'label');
        yield "
                                    ";
        // line 387
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 387, $this->source); })()), "country", [], "any", false, false, false, 387), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                                    ";
        // line 388
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 388, $this->source); })()), "country", [], "any", false, false, false, 388), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                        
                        <!-- Préférences -->
                        <div class=\"user-profile-section\">
                            <h6 class=\"section-title\">Préférences</h6>
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"form-group\">
                                        ";
        // line 399
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 399, $this->source); })()), "locale", [], "any", false, false, false, 399), 'label');
        yield "
                                        ";
        // line 400
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 400, $this->source); })()), "locale", [], "any", false, false, false, 400), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                                        ";
        // line 401
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 401, $this->source); })()), "locale", [], "any", false, false, false, 401), 'errors');
        yield "
                                    </div>
                                </div>
                            </div>
                            
                            ";
        // line 406
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["userForm"] ?? null), "isApproved", [], "any", true, true, false, 406)) {
            // line 407
            yield "                                <div class=\"form-check mt-3\">
                                    ";
            // line 408
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 408, $this->source); })()), "isApproved", [], "any", false, false, false, 408), 'widget', ["attr" => ["class" => "form-check-input"]]);
            yield "
                                    ";
            // line 409
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 409, $this->source); })()), "isApproved", [], "any", false, false, false, 409), 'label', ["label_attr" => ["class" => "form-check-label"]]);
            yield "
                                </div>
                            ";
        }
        // line 412
        yield "                        </div>
                        
                        <div class=\"d-flex justify-content-end mt-4\">
                            <a href=\"";
        // line 415
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"btn btn-outline-secondary me-2 px-4\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.cancel_btn"), "html", null, true);
        yield "</a>
                            <button type=\"submit\" class=\"btn btn-gradient px-4\">";
        // line 416
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.save_btn"), "html", null, true);
        yield "</button>
                        </div>
                    ";
        // line 418
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 418, $this->source); })()), 'form_end');
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

    // line 426
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 427
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 429
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
        // line 441
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 441, $this->source); })()), "request", [], "any", false, false, false, 441), "locale", [], "any", false, false, false, 441) == "nl")) {
            // line 442
            yield "                locale = 'nl';
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 443
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 443, $this->source); })()), "request", [], "any", false, false, false, 443), "locale", [], "any", false, false, false, 443) == "en")) {
            // line 444
            yield "                locale = 'en';
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 445
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 445, $this->source); })()), "request", [], "any", false, false, false, 445), "locale", [], "any", false, false, false, 445) == "de")) {
            // line 446
            yield "                locale = 'de';
            ";
        }
        // line 448
        yield "            
            datepickerElements.forEach(function(element) {
                const calendarIcon = document.getElementById('calendar-icon');
                
                // Initialiser flatpickr avec des options améliorées
                const flatpickrInstance = flatpickr(element, {
                    dateFormat: \"d/m/Y\",
                    locale: locale,
                    maxDate: new Date(),
                    minDate: new Date(1900, 0, 1), // Date minimum: 1er janvier 1900
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

            // Masquer les éventuels champs de date de naissance dupliqués
            const dateLabels = document.querySelectorAll('label');
            let birthDateCount = 0;
            
            dateLabels.forEach(label => {
                if (label.textContent.trim() === '";
        // line 503
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.birth_date"), "html", null, true);
        yield "') {
                    birthDateCount++;
                    if (birthDateCount > 1) {
                        // Masquer le conteneur complet du deuxième champ
                        const container = label.closest('.form-group') || label.closest('div');
                        if (container) {
                            container.style.display = 'none';
                        }
                    }
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
        return array (  975 => 503,  918 => 448,  914 => 446,  912 => 445,  909 => 444,  907 => 443,  904 => 442,  902 => 441,  888 => 429,  883 => 427,  873 => 426,  858 => 418,  853 => 416,  847 => 415,  842 => 412,  836 => 409,  832 => 408,  829 => 407,  827 => 406,  819 => 401,  815 => 400,  811 => 399,  797 => 388,  793 => 387,  789 => 386,  783 => 383,  779 => 382,  775 => 381,  769 => 378,  765 => 377,  761 => 376,  751 => 369,  747 => 368,  743 => 367,  737 => 364,  733 => 363,  729 => 362,  723 => 359,  719 => 358,  715 => 357,  699 => 344,  695 => 343,  691 => 342,  679 => 333,  672 => 329,  661 => 321,  657 => 320,  653 => 319,  645 => 314,  641 => 313,  637 => 312,  622 => 300,  618 => 299,  614 => 298,  606 => 293,  602 => 292,  598 => 291,  588 => 284,  582 => 281,  573 => 274,  567 => 271,  563 => 270,  560 => 269,  558 => 268,  555 => 267,  549 => 264,  545 => 263,  542 => 262,  540 => 261,  535 => 258,  531 => 256,  524 => 254,  519 => 253,  517 => 252,  512 => 250,  506 => 246,  500 => 244,  494 => 242,  492 => 241,  487 => 239,  480 => 235,  476 => 234,  471 => 231,  465 => 229,  459 => 227,  457 => 226,  452 => 225,  450 => 224,  446 => 223,  441 => 220,  435 => 218,  429 => 216,  427 => 215,  422 => 214,  420 => 213,  416 => 212,  409 => 208,  405 => 207,  399 => 205,  391 => 200,  382 => 193,  375 => 189,  367 => 187,  365 => 186,  359 => 183,  355 => 182,  350 => 180,  346 => 178,  336 => 177,  327 => 174,  319 => 169,  315 => 168,  308 => 165,  306 => 164,  302 => 162,  295 => 158,  291 => 157,  288 => 156,  285 => 155,  278 => 151,  274 => 150,  271 => 149,  268 => 148,  261 => 144,  257 => 143,  254 => 142,  252 => 141,  246 => 138,  242 => 137,  236 => 134,  233 => 133,  223 => 132,  93 => 8,  88 => 6,  78 => 5,  61 => 3,  44 => 1,);
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

        /* Amélioration des espacements et styles du formulaire */
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-label {
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: #8e44ad;
            box-shadow: 0 0 0 0.25rem rgba(142, 68, 173, 0.25);
        }
        
        /* Styles pour les conteneurs flexbox d'adresse */
        .address-flex-container {
            display: flex;
            gap: 15px;
            margin-bottom: 1.5rem;
        }
        
        .address-flex-container > div:first-child {
            flex: 3;
        }
        
        .address-flex-container > div:not(:first-child) {
            flex: 1;
        }
        
        /* Styles pour les conteneurs flexbox de localisation */
        .location-flex-container {
            display: flex;
            gap: 15px;
            margin-bottom: 1.5rem;
        }
        
        .location-flex-container > div:first-child {
            flex: 1;
        }
        
        .location-flex-container > div:nth-child(2) {
            flex: 2;
        }
        
        .location-flex-container > div:last-child {
            flex: 2;
        }
        
        /* Style pour la section utilisateur */
        .user-profile-section {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 1.5rem;
        }
        
        .section-title {
            border-bottom: 1px solid #dee2e6;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-weight: 600;
            color: #333;
        }
        
        /* Rendre la carte plus attrayante */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .card:hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }
        
        .card-header {
            border-radius: 12px 12px 0 0 !important;
            background: linear-gradient(135deg, #8e44ad, #3498db);
            color: white;
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
                <div class=\"card-header py-3\">
                    <h5 class=\"mb-0\">{{ 'admin.user_edit.user_info'|trans }}</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"text-center mb-4\">
                        <div class=\"avatar-circle bg-primary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3\" style=\"width: 100px; height: 100px;\">
                            <span class=\"h1 text-white\">{{ user.firstName|first }}{{ user.lastName|first }}</span>
                        </div>
                        <h5 class=\"mb-2\">{{ user.fullName }}</h5>
                        <p class=\"text-muted mb-0\">{{ user.email }}</p>
                    </div>
                    
                    <div class=\"mb-4\">
                        <div class=\"fw-bold text-muted mb-2\">{{ 'admin.user_edit.status'|trans }}</div>
                        {% if user.isVerified and user.isApproved %}
                            <span class=\"badge bg-success py-2 px-3\">{{ 'admin.users.status_active'|trans }}</span>
                        {% elseif user.isVerified and not user.isApproved %}
                            <span class=\"badge bg-warning text-dark py-2 px-3\">{{ 'admin.users.status_pending'|trans }}</span>
                        {% else %}
                            <span class=\"badge bg-danger py-2 px-3\">{{ 'admin.users.status_unverified'|trans }}</span>
                        {% endif %}
                    </div>
                    
                    <div class=\"mb-4\">
                        <div class=\"fw-bold text-muted mb-2\">{{ 'admin.user_edit.role'|trans }}</div>
                        {% if user.isSuperAdmin %}
                            <span class=\"badge bg-danger py-2 px-3\">{{ 'admin.users.role_super_admin'|trans }}</span>
                        {% elseif user.isAdmin %}
                            <span class=\"badge bg-primary py-2 px-3\">{{ 'admin.users.role_admin'|trans }}</span>
                        {% else %}
                            <span class=\"badge bg-secondary py-2 px-3\">{{ 'admin.users.role_user'|trans }}</span>
                        {% endif %}
                    </div>
                    
                    <div class=\"mb-4\">
                        <div class=\"fw-bold text-muted mb-2\">{{ 'admin.user_edit.registered_on'|trans }}</div>
                        <p class=\"mb-0\">{{ user.createdAt|date('d/m/Y H:i') }}</p>
                    </div>
                    
                    <div class=\"mb-4\">
                        <div class=\"fw-bold text-muted mb-2\">{{ 'admin.user_edit.last_login'|trans }}</div>
                        <p class=\"mb-0\">
                            {% if user.lastLoginAt %}
                                {{ user.lastLoginAt|date('d/m/Y H:i') }}
                            {% else %}
                                {{ 'admin.user_edit.never_logged_in'|trans }}
                            {% endif %}
                        </p>
                    </div>
                    
                    <div class=\"mb-4\">
                        <div class=\"fw-bold text-muted mb-2\">{{ 'profile.fields.birth_date'|trans }}</div>
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
                    <div class=\"mb-4\">
                        <div class=\"fw-bold text-muted mb-2\">{{ 'admin.user_edit.verified_on'|trans }}</div>
                        <p class=\"mb-0\">{{ user.emailVerifiedAt|date('d/m/Y H:i') }}</p>
                    </div>
                    {% endif %}
                    
                    {% if user.isApproved %}
                    <div class=\"mb-4\">
                        <div class=\"fw-bold text-muted mb-2\">{{ 'admin.user_edit.approved_on'|trans }}</div>
                        <p class=\"mb-0\">{{ user.approvedAt|date('d/m/Y H:i') }}</p>
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>
        
        <div class=\"col-md-8\">
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header py-3\">
                    <h5 class=\"mb-0\">{{ 'admin.user_edit.edit_profile'|trans }}</h5>
                </div>
                <div class=\"card-body p-4\">
                    {{ form_start(userForm) }}
                        <!-- Informations d'identification -->
                        <div class=\"user-profile-section\">
                            <h6 class=\"section-title\">Informations d'identification</h6>
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"form-group\">
                                        {{ form_label(userForm.email) }}
                                        {{ form_widget(userForm.email, {'attr': {'class': 'form-control'}}) }}
                                        {{ form_errors(userForm.email) }}
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"form-group\">
                                        {{ form_label(userForm.username) }}
                                        {{ form_widget(userForm.username, {'attr': {'class': 'form-control'}}) }}
                                        {{ form_errors(userForm.username) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Informations personnelles -->
                        <div class=\"user-profile-section\">
                            <h6 class=\"section-title\">Informations personnelles</h6>
                            <div class=\"row mb-4\">
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"form-group\">
                                        {{ form_label(userForm.firstName) }}
                                        {{ form_widget(userForm.firstName, {'attr': {'class': 'form-control'}}) }}
                                        {{ form_errors(userForm.firstName) }}
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"form-group\">
                                        {{ form_label(userForm.lastName) }}
                                        {{ form_widget(userForm.lastName, {'attr': {'class': 'form-control'}}) }}
                                        {{ form_errors(userForm.lastName) }}
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"form-group\">
                                        <label class=\"form-label\" for=\"birth_date_input\">{{ 'registration.form.birth_date'|trans }}</label>
                                        <div class=\"input-group date-picker-group\">
                                            <input type=\"text\" id=\"birth_date_input\" name=\"birth_date\" class=\"form-control datepicker\" 
                                                placeholder=\"JJ/MM/AAAA\" autocomplete=\"off\" 
                                                value=\"{{ user.birthDate ? user.birthDate|date('d/m/Y') : '' }}\">
                                            <span class=\"input-group-text\" id=\"calendar-icon\">
                                                <i class=\"fas fa-calendar-alt\"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"form-group\">
                                        {{ form_label(userForm.phoneNumber) }}
                                        {{ form_widget(userForm.phoneNumber, {'attr': {'class': 'form-control'}}) }}
                                        {{ form_errors(userForm.phoneNumber) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Adresse -->
                        <div class=\"user-profile-section\">
                            <h6 class=\"section-title\">Adresse</h6>
                            
                            <!-- Rue, numéro et boîte sur la même ligne -->
                            <div class=\"address-flex-container\">
                                <div class=\"form-group\">
                                    {{ form_label(userForm.street) }}
                                    {{ form_widget(userForm.street, {'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(userForm.street) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(userForm.houseNumber) }}
                                    {{ form_widget(userForm.houseNumber, {'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(userForm.houseNumber) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(userForm.boxNumber) }}
                                    {{ form_widget(userForm.boxNumber, {'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(userForm.boxNumber) }}
                                </div>
                            </div>
                            
                            <!-- Code postal, ville et pays sur la même ligne -->
                            <div class=\"location-flex-container\">
                                <div class=\"form-group\">
                                    {{ form_label(userForm.postalCode) }}
                                    {{ form_widget(userForm.postalCode, {'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(userForm.postalCode) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(userForm.city) }}
                                    {{ form_widget(userForm.city, {'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(userForm.city) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(userForm.country) }}
                                    {{ form_widget(userForm.country, {'attr': {'class': 'form-select'}}) }}
                                    {{ form_errors(userForm.country) }}
                                </div>
                            </div>
                        </div>
                        
                        <!-- Préférences -->
                        <div class=\"user-profile-section\">
                            <h6 class=\"section-title\">Préférences</h6>
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <div class=\"form-group\">
                                        {{ form_label(userForm.locale) }}
                                        {{ form_widget(userForm.locale, {'attr': {'class': 'form-select'}}) }}
                                        {{ form_errors(userForm.locale) }}
                                    </div>
                                </div>
                            </div>
                            
                            {% if userForm.isApproved is defined %}
                                <div class=\"form-check mt-3\">
                                    {{ form_widget(userForm.isApproved, {'attr': {'class': 'form-check-input'}}) }}
                                    {{ form_label(userForm.isApproved, null, {'label_attr': {'class': 'form-check-label'}}) }}
                                </div>
                            {% endif %}
                        </div>
                        
                        <div class=\"d-flex justify-content-end mt-4\">
                            <a href=\"{{ path('app_admin_users') }}\" class=\"btn btn-outline-secondary me-2 px-4\">{{ 'admin.user_edit.cancel_btn'|trans }}</a>
                            <button type=\"submit\" class=\"btn btn-gradient px-4\">{{ 'admin.user_edit.save_btn'|trans }}</button>
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
                    minDate: new Date(1900, 0, 1), // Date minimum: 1er janvier 1900
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

            // Masquer les éventuels champs de date de naissance dupliqués
            const dateLabels = document.querySelectorAll('label');
            let birthDateCount = 0;
            
            dateLabels.forEach(label => {
                if (label.textContent.trim() === '{{ 'registration.form.birth_date'|trans }}') {
                    birthDateCount++;
                    if (birthDateCount > 1) {
                        // Masquer le conteneur complet du deuxième champ
                        const container = label.closest('.form-group') || label.closest('div');
                        if (container) {
                            container.style.display = 'none';
                        }
                    }
                }
            });
        });
    </script>
{% endblock %}", "admin/user_edit.html.twig", "/var/www/serveur/templates/admin/user_edit.html.twig");
    }
}
