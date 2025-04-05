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

/* admin/dashboard.html.twig */
class __TwigTemplate_2a5821e34c421fd9924eea71c1a711e2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/dashboard.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.dashboard.title"), "html", null, true);
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.title"), "html", null, true);
        yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
                <i class=\"fas fa-tachometer-alt me-2\"></i> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.dashboard"), "html", null, true);
        yield "
            </a>
        </li>
        ";
        // line 14
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "isAdmin", [], "method", false, false, false, 14) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 14, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "manage_users"], "method", false, false, false, 14)))) {
            // line 15
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 16
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
            yield "\">
                <i class=\"fas fa-users me-2\"></i> ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.users"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 21
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "isAdmin", [], "method", false, false, false, 21) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 21, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "edit_email_templates"], "method", false, false, false, 21)))) {
            // line 22
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 23
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_templates");
            yield "\">
                <i class=\"fas fa-envelope me-2\"></i> ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.email_templates"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 28
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "isAdmin", [], "method", false, false, false, 28) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 28, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "translate_content"], "method", false, false, false, 28)))) {
            // line 29
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 30
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_translations");
            yield "\">
                <i class=\"fas fa-language me-2\"></i> ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.translations"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 35
        yield "    </ul>
    
    ";
        // line 37
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 38
            yield "    <h5 class=\"mb-3 mt-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_admin"), "html", null, true);
            yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 41
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_dashboard");
            yield "\">
                <i class=\"fas fa-shield-alt me-2\"></i> ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_dashboard"), "html", null, true);
            yield "
            </a>
        </li>
    </ul>
    ";
        }
        // line 47
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 51
        yield "<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.dashboard.title"), "html", null, true);
        yield "</h1>
    </div>
    
    <div class=\"row mb-4\">
        <div class=\"col-md-3 mb-3\">
            <div class=\"stats-card\">
                <div class=\"stats-icon\">
                    <i class=\"fas fa-users\"></i>
                </div>
                <div class=\"stats-info\">
                    <div class=\"stats-title\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.dashboard.stats.total_users"), "html", null, true);
        yield "</div>
                    <div class=\"stats-value\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("user_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["user_count"]) || array_key_exists("user_count", $context) ? $context["user_count"] : (function () { throw new RuntimeError('Variable "user_count" does not exist.', 64, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 mb-3\">
            <div class=\"stats-card\">
                <div class=\"stats-icon\">
                    <i class=\"fas fa-user-check\"></i>
                </div>
                <div class=\"stats-info\">
                    <div class=\"stats-title\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.dashboard.stats.approved_users"), "html", null, true);
        yield "</div>
                    <div class=\"stats-value\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("approved_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["approved_count"]) || array_key_exists("approved_count", $context) ? $context["approved_count"] : (function () { throw new RuntimeError('Variable "approved_count" does not exist.', 76, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 mb-3\">
            <div class=\"stats-card\">
                <div class=\"stats-icon\">
                    <i class=\"fas fa-user-clock\"></i>
                </div>
                <div class=\"stats-info\">
                    <div class=\"stats-title\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.dashboard.stats.pending_users"), "html", null, true);
        yield "</div>
                    <div class=\"stats-value\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pending_approvals"]) || array_key_exists("pending_approvals", $context) ? $context["pending_approvals"] : (function () { throw new RuntimeError('Variable "pending_approvals" does not exist.', 88, $this->source); })())), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 mb-3\">
            <div class=\"stats-card\">
                <div class=\"stats-icon\">
                    <i class=\"fas fa-envelope-open-text\"></i>
                </div>
                <div class=\"stats-info\">
                    <div class=\"stats-title\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.dashboard.stats.email_templates"), "html", null, true);
        yield "</div>
                    <div class=\"stats-value\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("template_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["template_count"]) || array_key_exists("template_count", $context) ? $context["template_count"] : (function () { throw new RuntimeError('Variable "template_count" does not exist.', 100, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.dashboard.quick_links"), "html", null, true);
        yield "</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        ";
        // line 114
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "user", [], "any", false, false, false, 114), "isAdmin", [], "method", false, false, false, 114) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 114, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "user", [], "any", false, false, false, 114), "manage_users"], "method", false, false, false, 114)))) {
            // line 115
            yield "                        <div class=\"col-md-4 mb-3\">
                            <a href=\"";
            // line 116
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
            yield "\" class=\"btn btn-outline-primary w-100 p-3\">
                                <i class=\"fas fa-users fa-2x mb-2\"></i><br>
                                ";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.dashboard.manage_users"), "html", null, true);
            yield "
                            </a>
                        </div>
                        ";
        }
        // line 122
        yield "                        
                        ";
        // line 123
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "user", [], "any", false, false, false, 123), "isAdmin", [], "method", false, false, false, 123) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 123, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "user", [], "any", false, false, false, 123), "edit_email_templates"], "method", false, false, false, 123)))) {
            // line 124
            yield "                        <div class=\"col-md-4 mb-3\">
                            <a href=\"";
            // line 125
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_templates");
            yield "\" class=\"btn btn-outline-primary w-100 p-3\">
                                <i class=\"fas fa-envelope fa-2x mb-2\"></i><br>
                                ";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.dashboard.manage_templates"), "html", null, true);
            yield "
                            </a>
                        </div>
                        ";
        }
        // line 131
        yield "                        
                        ";
        // line 132
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 133
            yield "                        <div class=\"col-md-4 mb-3\">
                            <a href=\"";
            // line 134
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_dashboard");
            yield "\" class=\"btn btn-outline-danger w-100 p-3\">
                                <i class=\"fas fa-shield-alt fa-2x mb-2\"></i><br>
                                ";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.dashboard.super_admin"), "html", null, true);
            yield "
                            </a>
                        </div>
                        ";
        }
        // line 140
        yield "                        
                        ";
        // line 141
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "user", [], "any", false, false, false, 141), "isAdmin", [], "method", false, false, false, 141) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 141, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "user", [], "any", false, false, false, 141), "translate_content"], "method", false, false, false, 141)))) {
            // line 142
            yield "                        <div class=\"col-md-4 mb-3\">
                            <a href=\"";
            // line 143
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_translations");
            yield "\" class=\"btn btn-outline-primary w-100 p-3\">
                                <i class=\"fas fa-language fa-2x mb-2\"></i><br>
                                ";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.translations"), "html", null, true);
            yield "
                            </a>
                        </div>
                        ";
        }
        // line 149
        yield "                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-4\">
            ";
        // line 155
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155), "isAdmin", [], "method", false, false, false, 155) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 155, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155), "approve_users"], "method", false, false, false, 155)))) {
            // line 156
            yield "            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.dashboard.pending_approvals"), "html", null, true);
            yield "</h5>
                    <span class=\"badge bg-warning text-dark rounded-pill\">";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pending_approvals"]) || array_key_exists("pending_approvals", $context) ? $context["pending_approvals"] : (function () { throw new RuntimeError('Variable "pending_approvals" does not exist.', 159, $this->source); })())), "html", null, true);
            yield "</span>
                </div>
                <div class=\"card-body\">
                    ";
            // line 162
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["pending_approvals"]) || array_key_exists("pending_approvals", $context) ? $context["pending_approvals"] : (function () { throw new RuntimeError('Variable "pending_approvals" does not exist.', 162, $this->source); })()))) {
                // line 163
                yield "                        <p class=\"text-muted text-center mb-0\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.no_users"), "html", null, true);
                yield "</p>
                    ";
            } else {
                // line 165
                yield "                        <div class=\"list-group\">
                            ";
                // line 166
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pending_approvals"]) || array_key_exists("pending_approvals", $context) ? $context["pending_approvals"] : (function () { throw new RuntimeError('Variable "pending_approvals" does not exist.', 166, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 167
                    yield "                                <div class=\"list-group-item\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div>
                                            <strong>";
                    // line 170
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 170), "html", null, true);
                    yield "</strong><br>
                                            <small class=\"text-muted\">";
                    // line 171
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 171), "html", null, true);
                    yield "</small>
                                        </div>
                                        <form method=\"post\" action=\"";
                    // line 173
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_approve", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 173)]), "html", null, true);
                    yield "\" onsubmit=\"return confirm('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.users.confirm_approve"), "html", null, true);
                    yield "')\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-success\">
                                                <i class=\"fas fa-check me-1\"></i> ";
                    // line 175
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.user_edit.approve_btn"), "html", null, true);
                    yield "
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 181
                yield "                        </div>
                    ";
            }
            // line 183
            yield "                </div>
            </div>
            ";
        }
        // line 186
        yield "        </div>
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
        return "admin/dashboard.html.twig";
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
        return array (  452 => 186,  447 => 183,  443 => 181,  431 => 175,  424 => 173,  419 => 171,  415 => 170,  410 => 167,  406 => 166,  403 => 165,  397 => 163,  395 => 162,  389 => 159,  385 => 158,  381 => 156,  379 => 155,  371 => 149,  364 => 145,  359 => 143,  356 => 142,  354 => 141,  351 => 140,  344 => 136,  339 => 134,  336 => 133,  334 => 132,  331 => 131,  324 => 127,  319 => 125,  316 => 124,  314 => 123,  311 => 122,  304 => 118,  299 => 116,  296 => 115,  294 => 114,  287 => 110,  274 => 100,  270 => 99,  256 => 88,  252 => 87,  238 => 76,  234 => 75,  220 => 64,  216 => 63,  203 => 53,  199 => 51,  189 => 50,  180 => 47,  172 => 42,  168 => 41,  161 => 38,  159 => 37,  155 => 35,  148 => 31,  144 => 30,  141 => 29,  138 => 28,  131 => 24,  127 => 23,  124 => 22,  121 => 21,  114 => 17,  110 => 16,  107 => 15,  105 => 14,  99 => 11,  95 => 10,  89 => 7,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'admin.dashboard.title'|trans }}{% endblock %}

{% block sidebar %}
<div class=\"sidebar\">
    <h5 class=\"mb-4\">{{ 'admin.sidebar.title'|trans }}</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"{{ path('app_admin_dashboard') }}\">
                <i class=\"fas fa-tachometer-alt me-2\"></i> {{ 'admin.sidebar.dashboard'|trans }}
            </a>
        </li>
        {% if is_granted('ROLE_SUPER_ADMIN') or app.user.isAdmin() and permission_service.hasPermission(app.user, 'manage_users') %}
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_admin_users') }}\">
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
        <h1 class=\"h3\">{{ 'admin.dashboard.title'|trans }}</h1>
    </div>
    
    <div class=\"row mb-4\">
        <div class=\"col-md-3 mb-3\">
            <div class=\"stats-card\">
                <div class=\"stats-icon\">
                    <i class=\"fas fa-users\"></i>
                </div>
                <div class=\"stats-info\">
                    <div class=\"stats-title\">{{ 'admin.dashboard.stats.total_users'|trans }}</div>
                    <div class=\"stats-value\">{{ user_count|default(0) }}</div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 mb-3\">
            <div class=\"stats-card\">
                <div class=\"stats-icon\">
                    <i class=\"fas fa-user-check\"></i>
                </div>
                <div class=\"stats-info\">
                    <div class=\"stats-title\">{{ 'admin.dashboard.stats.approved_users'|trans }}</div>
                    <div class=\"stats-value\">{{ approved_count|default(0) }}</div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 mb-3\">
            <div class=\"stats-card\">
                <div class=\"stats-icon\">
                    <i class=\"fas fa-user-clock\"></i>
                </div>
                <div class=\"stats-info\">
                    <div class=\"stats-title\">{{ 'admin.dashboard.stats.pending_users'|trans }}</div>
                    <div class=\"stats-value\">{{ pending_approvals|length }}</div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 mb-3\">
            <div class=\"stats-card\">
                <div class=\"stats-icon\">
                    <i class=\"fas fa-envelope-open-text\"></i>
                </div>
                <div class=\"stats-info\">
                    <div class=\"stats-title\">{{ 'admin.dashboard.stats.email_templates'|trans }}</div>
                    <div class=\"stats-value\">{{ template_count|default(0) }}</div>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">{{ 'admin.dashboard.quick_links'|trans }}</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        {% if is_granted('ROLE_SUPER_ADMIN') or app.user.isAdmin() and permission_service.hasPermission(app.user, 'manage_users') %}
                        <div class=\"col-md-4 mb-3\">
                            <a href=\"{{ path('app_admin_users') }}\" class=\"btn btn-outline-primary w-100 p-3\">
                                <i class=\"fas fa-users fa-2x mb-2\"></i><br>
                                {{ 'admin.dashboard.manage_users'|trans }}
                            </a>
                        </div>
                        {% endif %}
                        
                        {% if is_granted('ROLE_SUPER_ADMIN') or app.user.isAdmin() and permission_service.hasPermission(app.user, 'edit_email_templates') %}
                        <div class=\"col-md-4 mb-3\">
                            <a href=\"{{ path('app_admin_email_templates') }}\" class=\"btn btn-outline-primary w-100 p-3\">
                                <i class=\"fas fa-envelope fa-2x mb-2\"></i><br>
                                {{ 'admin.dashboard.manage_templates'|trans }}
                            </a>
                        </div>
                        {% endif %}
                        
                        {% if is_granted('ROLE_SUPER_ADMIN') %}
                        <div class=\"col-md-4 mb-3\">
                            <a href=\"{{ path('app_super_admin_dashboard') }}\" class=\"btn btn-outline-danger w-100 p-3\">
                                <i class=\"fas fa-shield-alt fa-2x mb-2\"></i><br>
                                {{ 'admin.dashboard.super_admin'|trans }}
                            </a>
                        </div>
                        {% endif %}
                        
                        {% if is_granted('ROLE_SUPER_ADMIN') or app.user.isAdmin() and permission_service.hasPermission(app.user, 'translate_content') %}
                        <div class=\"col-md-4 mb-3\">
                            <a href=\"{{ path('app_admin_translations') }}\" class=\"btn btn-outline-primary w-100 p-3\">
                                <i class=\"fas fa-language fa-2x mb-2\"></i><br>
                                {{ 'admin.sidebar.translations'|trans }}
                            </a>
                        </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-4\">
            {% if is_granted('ROLE_SUPER_ADMIN') or app.user.isAdmin() and permission_service.hasPermission(app.user, 'approve_users') %}
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">{{ 'admin.dashboard.pending_approvals'|trans }}</h5>
                    <span class=\"badge bg-warning text-dark rounded-pill\">{{ pending_approvals|length }}</span>
                </div>
                <div class=\"card-body\">
                    {% if pending_approvals is empty %}
                        <p class=\"text-muted text-center mb-0\">{{ 'admin.users.no_users'|trans }}</p>
                    {% else %}
                        <div class=\"list-group\">
                            {% for user in pending_approvals %}
                                <div class=\"list-group-item\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div>
                                            <strong>{{ user.fullName }}</strong><br>
                                            <small class=\"text-muted\">{{ user.email }}</small>
                                        </div>
                                        <form method=\"post\" action=\"{{ path('app_admin_user_approve', {'id': user.id}) }}\" onsubmit=\"return confirm('{{ 'admin.users.confirm_approve'|trans }}')\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-success\">
                                                <i class=\"fas fa-check me-1\"></i> {{ 'admin.user_edit.approve_btn'|trans }}
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>
            </div>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}", "admin/dashboard.html.twig", "/var/www/serveur/templates/admin/dashboard.html.twig");
    }
}
