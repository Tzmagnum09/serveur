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

/* admin/user_permissions.html.twig */
class __TwigTemplate_7bf2aebb350377056d6a7697e810dfaf extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user_permissions.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/user_permissions.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.permissions.title", ["%username%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "username", [], "any", false, false, false, 3)]), "html", null, true);
        
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
        .permissions-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }
        
        .permissions-card .card-header {
            background: linear-gradient(135deg, #8e44ad, #3498db);
            color: white;
            font-weight: 500;
            padding: 1.25rem 1.5rem;
        }
        
        .permissions-card .card-body {
            padding: 1.5rem;
        }
        
        .user-info-table {
            margin-bottom: 0;
        }
        
        .user-info-table th {
            width: 30%;
            font-weight: 600;
            color: #555;
        }
        
        .permission-item {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 1.25rem;
            margin-bottom: 1rem;
            transition: all 0.3s;
        }
        
        .permission-item:hover {
            background-color: #f0f0f0;
            transform: translateY(-2px);
        }
        
        .permission-item.active {
            background-color: rgba(142, 68, 173, 0.1);
            border-left: 4px solid #8e44ad;
        }
        
        .permission-check {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .permission-title {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #333;
        }
        
        .permission-description {
            color: #6c757d;
            margin-bottom: 0;
        }
        
        .form-check-input:checked {
            background-color: #8e44ad;
            border-color: #8e44ad;
        }
        
        .permission-alert {
            background-color: #f8d7da;
            color: #721c24;
            border-radius: 10px;
            padding: 1rem;
            margin-top: 1rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 87
        yield "<div class=\"sidebar\">
    <h5 class=\"mb-4\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.title"), "html", null, true);
        yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
                <i class=\"fas fa-tachometer-alt me-2\"></i> ";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.dashboard"), "html", null, true);
        yield "
            </a>
        </li>
        ";
        // line 95
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "isAdmin", [], "method", false, false, false, 95) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 95, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "manage_users"], "method", false, false, false, 95)))) {
            // line 96
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
            // line 97
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
            yield "\">
                <i class=\"fas fa-users me-2\"></i> ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.users"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 102
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "isAdmin", [], "method", false, false, false, 102) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 102, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "edit_email_templates"], "method", false, false, false, 102)))) {
            // line 103
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 104
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_templates");
            yield "\">
                <i class=\"fas fa-envelope me-2\"></i> ";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.email_templates"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 109
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109), "isAdmin", [], "method", false, false, false, 109) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 109, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109), "translate_content"], "method", false, false, false, 109)))) {
            // line 110
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 111
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_translations");
            yield "\">
                <i class=\"fas fa-language me-2\"></i> ";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.translations"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 116
        yield "    </ul>
    
    ";
        // line 118
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 119
            yield "    <h5 class=\"mb-3 mt-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_admin"), "html", null, true);
            yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 122
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_dashboard");
            yield "\">
                <i class=\"fas fa-shield-alt me-2\"></i> ";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_dashboard"), "html", null, true);
            yield "
            </a>
        </li>
    </ul>
    ";
        }
        // line 128
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 131
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 132
        yield "<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.permissions.title", ["%username%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 134, $this->source); })()), "username", [], "any", false, false, false, 134)]), "html", null, true);
        yield "</h1>
        <a href=\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-1\"></i> ";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.permissions.back_btn"), "html", null, true);
        yield "
        </a>
    </div>
    
    <div class=\"row\">
        <div class=\"col-lg-4\">
            <div class=\"permissions-card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.permissions.user_info"), "html", null, true);
        yield "</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"text-center mb-4\">
                        <div class=\"avatar-circle bg-primary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3\" style=\"width: 100px; height: 100px;\">
                            <span class=\"h1 text-white\">";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 149, $this->source); })()), "firstName", [], "any", false, false, false, 149)), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 149, $this->source); })()), "lastName", [], "any", false, false, false, 149)), "html", null, true);
        yield "</span>
                        </div>
                        <h5>";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 151, $this->source); })()), "fullName", [], "any", false, false, false, 151), "html", null, true);
        yield "</h5>
                        <p class=\"text-muted mb-1\">";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 152, $this->source); })()), "email", [], "any", false, false, false, 152), "html", null, true);
        yield "</p>
                        
                        ";
        // line 154
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 154, $this->source); })()), "isSuperAdmin", [], "any", false, false, false, 154)) {
            // line 155
            yield "                            <span class=\"badge bg-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.role_super_admin"), "html", null, true);
            yield "</span>
                        ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 156
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 156, $this->source); })()), "isAdmin", [], "any", false, false, false, 156)) {
            // line 157
            yield "                            <span class=\"badge bg-primary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.role_admin"), "html", null, true);
            yield "</span>
                        ";
        } else {
            // line 159
            yield "                            <span class=\"badge bg-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.role_user"), "html", null, true);
            yield "</span>
                        ";
        }
        // line 161
        yield "                    </div>
                    
                    <table class=\"table user-info-table\">
                        <tr>
                            <th>";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.permissions.registered_on"), "html", null, true);
        yield "</th>
                            <td>";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 166, $this->source); })()), "createdAt", [], "any", false, false, false, 166), "d/m/Y"), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th>";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.permissions.last_login"), "html", null, true);
        yield "</th>
                            <td>
                                ";
        // line 171
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 171, $this->source); })()), "lastLoginAt", [], "any", false, false, false, 171)) {
            // line 172
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 172, $this->source); })()), "lastLoginAt", [], "any", false, false, false, 172), "d/m/Y H:i"), "html", null, true);
            yield "
                                ";
        } else {
            // line 174
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.permissions.never"), "html", null, true);
            yield "
                                ";
        }
        // line 176
        yield "                            </td>
                        </tr>
                    </table>
                    
                    ";
        // line 180
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 180, $this->source); })()), "isSuperAdmin", [], "any", false, false, false, 180)) {
            // line 181
            yield "                        <div class=\"permission-alert mt-3\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            ";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.permissions.super_admin_info"), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 186
        yield "                </div>
            </div>
        </div>
        
        <div class=\"col-lg-8\">
            <div class=\"permissions-card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.permissions.manage_permissions"), "html", null, true);
        yield "</h5>
                </div>
                <div class=\"card-body\">
                    <p class=\"text-muted mb-4\">";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.permissions.description"), "html", null, true);
        yield "</p>
                    
                    ";
        // line 198
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), 'form_start');
        yield "
                        <div class=\"row\">
                            ";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()));
        foreach ($context['_seq'] as $context["permission"] => $context["field"]) {
            // line 201
            yield "                                ";
            if (($context["permission"] != "_token")) {
                // line 202
                yield "                                    <div class=\"col-lg-6\">
                                        <div class=\"permission-item mb-3 ";
                // line 203
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 203), "data", [], "any", false, false, false, 203)) {
                    yield "active";
                }
                yield "\">
                                            <div class=\"permission-check\">
                                                <h6 class=\"permission-title\">";
                // line 205
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 205), "label", [], "any", false, false, false, 205), "html", null, true);
                yield "</h6>
                                                <div class=\"form-check form-switch\">
                                                    ";
                // line 207
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
                yield "
                                                </div>
                                            </div>
                                            <p class=\"permission-description mt-2\">
                                                ";
                // line 211
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("admin.permissions.desc." . $context["permission"])), "html", null, true);
                yield "
                                            </p>
                                        </div>
                                    </div>
                                ";
            }
            // line 216
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['permission'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        yield "                        </div>
                        
                        <div style=\"display: none;\">
                            ";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()));
        foreach ($context['_seq'] as $context["permission"] => $context["field"]) {
            // line 221
            yield "                                ";
            if (($context["permission"] == "_token")) {
                // line 222
                yield "                                    ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
                yield "
                                    <div>
                                        <span class=\"text-muted\">";
                // line 224
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.permissions.desc.token"), "html", null, true);
                yield "</span>
                                    </div>
                                ";
            }
            // line 227
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['permission'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        yield "                        </div>
                        
                        <div class=\"d-flex justify-content-end mt-4\">
                            <a href=\"";
        // line 231
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        yield "\" class=\"btn btn-outline-secondary me-2\">
                                ";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.permissions.cancel_btn"), "html", null, true);
        yield "
                            </a>
                            <button type=\"submit\" class=\"btn btn-gradient\">
                                <i class=\"fas fa-save me-1\"></i> ";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.permissions.save_btn"), "html", null, true);
        yield "
                            </button>
                        </div>
                    ";
        // line 238
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 238, $this->source); })()), 'form_end');
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

    // line 246
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 247
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ajouter la classe active lorsqu'une permission est cochée
        const checkboxes = document.querySelectorAll('.permission-checkbox');
        
        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                const permissionItem = this.closest('.permission-item');
                
                if (this.checked) {
                    permissionItem.classList.add('active');
                } else {
                    permissionItem.classList.remove('active');
                }
            });
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
        return "admin/user_permissions.html.twig";
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
        return array (  563 => 247,  553 => 246,  538 => 238,  532 => 235,  526 => 232,  522 => 231,  517 => 228,  511 => 227,  505 => 224,  499 => 222,  496 => 221,  492 => 220,  487 => 217,  481 => 216,  473 => 211,  466 => 207,  461 => 205,  454 => 203,  451 => 202,  448 => 201,  444 => 200,  439 => 198,  434 => 196,  428 => 193,  419 => 186,  413 => 183,  409 => 181,  407 => 180,  401 => 176,  395 => 174,  389 => 172,  387 => 171,  382 => 169,  376 => 166,  372 => 165,  366 => 161,  360 => 159,  354 => 157,  352 => 156,  347 => 155,  345 => 154,  340 => 152,  336 => 151,  330 => 149,  322 => 144,  311 => 136,  307 => 135,  303 => 134,  299 => 132,  289 => 131,  280 => 128,  272 => 123,  268 => 122,  261 => 119,  259 => 118,  255 => 116,  248 => 112,  244 => 111,  241 => 110,  238 => 109,  231 => 105,  227 => 104,  224 => 103,  221 => 102,  214 => 98,  210 => 97,  207 => 96,  205 => 95,  199 => 92,  195 => 91,  189 => 88,  186 => 87,  176 => 86,  88 => 6,  78 => 5,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'admin.permissions.title'|trans({'%username%': user.username}) }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .permissions-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }
        
        .permissions-card .card-header {
            background: linear-gradient(135deg, #8e44ad, #3498db);
            color: white;
            font-weight: 500;
            padding: 1.25rem 1.5rem;
        }
        
        .permissions-card .card-body {
            padding: 1.5rem;
        }
        
        .user-info-table {
            margin-bottom: 0;
        }
        
        .user-info-table th {
            width: 30%;
            font-weight: 600;
            color: #555;
        }
        
        .permission-item {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 1.25rem;
            margin-bottom: 1rem;
            transition: all 0.3s;
        }
        
        .permission-item:hover {
            background-color: #f0f0f0;
            transform: translateY(-2px);
        }
        
        .permission-item.active {
            background-color: rgba(142, 68, 173, 0.1);
            border-left: 4px solid #8e44ad;
        }
        
        .permission-check {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .permission-title {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #333;
        }
        
        .permission-description {
            color: #6c757d;
            margin-bottom: 0;
        }
        
        .form-check-input:checked {
            background-color: #8e44ad;
            border-color: #8e44ad;
        }
        
        .permission-alert {
            background-color: #f8d7da;
            color: #721c24;
            border-radius: 10px;
            padding: 1rem;
            margin-top: 1rem;
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
        <h1 class=\"h3\">{{ 'admin.permissions.title'|trans({'%username%': user.username}) }}</h1>
        <a href=\"{{ path('app_admin_users') }}\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-1\"></i> {{ 'admin.permissions.back_btn'|trans }}
        </a>
    </div>
    
    <div class=\"row\">
        <div class=\"col-lg-4\">
            <div class=\"permissions-card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">{{ 'admin.permissions.user_info'|trans }}</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"text-center mb-4\">
                        <div class=\"avatar-circle bg-primary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3\" style=\"width: 100px; height: 100px;\">
                            <span class=\"h1 text-white\">{{ user.firstName|first }}{{ user.lastName|first }}</span>
                        </div>
                        <h5>{{ user.fullName }}</h5>
                        <p class=\"text-muted mb-1\">{{ user.email }}</p>
                        
                        {% if user.isSuperAdmin %}
                            <span class=\"badge bg-danger\">{{ 'admin.users.role_super_admin'|trans }}</span>
                        {% elseif user.isAdmin %}
                            <span class=\"badge bg-primary\">{{ 'admin.users.role_admin'|trans }}</span>
                        {% else %}
                            <span class=\"badge bg-secondary\">{{ 'admin.users.role_user'|trans }}</span>
                        {% endif %}
                    </div>
                    
                    <table class=\"table user-info-table\">
                        <tr>
                            <th>{{ 'admin.permissions.registered_on'|trans }}</th>
                            <td>{{ user.createdAt|date('d/m/Y') }}</td>
                        </tr>
                        <tr>
                            <th>{{ 'admin.permissions.last_login'|trans }}</th>
                            <td>
                                {% if user.lastLoginAt %}
                                    {{ user.lastLoginAt|date('d/m/Y H:i') }}
                                {% else %}
                                    {{ 'admin.permissions.never'|trans }}
                                {% endif %}
                            </td>
                        </tr>
                    </table>
                    
                    {% if user.isSuperAdmin %}
                        <div class=\"permission-alert mt-3\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            {{ 'admin.permissions.super_admin_info'|trans }}
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-8\">
            <div class=\"permissions-card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">{{ 'admin.permissions.manage_permissions'|trans }}</h5>
                </div>
                <div class=\"card-body\">
                    <p class=\"text-muted mb-4\">{{ 'admin.permissions.description'|trans }}</p>
                    
                    {{ form_start(form) }}
                        <div class=\"row\">
                            {% for permission, field in form %}
                                {% if permission != '_token' %}
                                    <div class=\"col-lg-6\">
                                        <div class=\"permission-item mb-3 {% if field.vars.data %}active{% endif %}\">
                                            <div class=\"permission-check\">
                                                <h6 class=\"permission-title\">{{ field.vars.label }}</h6>
                                                <div class=\"form-check form-switch\">
                                                    {{ form_widget(field) }}
                                                </div>
                                            </div>
                                            <p class=\"permission-description mt-2\">
                                                {{ ('admin.permissions.desc.' ~ permission)|trans }}
                                            </p>
                                        </div>
                                    </div>
                                {% endif %}
                            {% endfor %}
                        </div>
                        
                        <div style=\"display: none;\">
                            {% for permission, field in form %}
                                {% if permission == '_token' %}
                                    {{ form_widget(field) }}
                                    <div>
                                        <span class=\"text-muted\">{{ 'admin.permissions.desc.token'|trans }}</span>
                                    </div>
                                {% endif %}
                            {% endfor %}
                        </div>
                        
                        <div class=\"d-flex justify-content-end mt-4\">
                            <a href=\"{{ path('app_admin_users') }}\" class=\"btn btn-outline-secondary me-2\">
                                {{ 'admin.permissions.cancel_btn'|trans }}
                            </a>
                            <button type=\"submit\" class=\"btn btn-gradient\">
                                <i class=\"fas fa-save me-1\"></i> {{ 'admin.permissions.save_btn'|trans }}
                            </button>
                        </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ajouter la classe active lorsqu'une permission est cochée
        const checkboxes = document.querySelectorAll('.permission-checkbox');
        
        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                const permissionItem = this.closest('.permission-item');
                
                if (this.checked) {
                    permissionItem.classList.add('active');
                } else {
                    permissionItem.classList.remove('active');
                }
            });
        });
    });
</script>
{% endblock %}", "admin/user_permissions.html.twig", "/var/www/serveur/templates/admin/user_permissions.html.twig");
    }
}
