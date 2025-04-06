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

/* admin/email_templates/index.html.twig */
class __TwigTemplate_28b6266f4ea6bf9a34d80937baa9928e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/email_templates/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/email_templates/index.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.title"), "html", null, true);
        
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
            <a class=\"nav-link\" href=\"";
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
            <a class=\"nav-link active\" href=\"";
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.title"), "html", null, true);
        yield "</h1>
        <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_new");
        yield "\" class=\"btn btn-gradient\">
            <i class=\"fas fa-plus me-1\"></i> ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.new_btn"), "html", null, true);
        yield "
        </a>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.list"), "html", null, true);
        yield "</h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0\">
                    <thead>
                        <tr>
                            <th>";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.code"), "html", null, true);
        yield "</th>
                            <th>";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.subject"), "html", null, true);
        yield "</th>
                            <th>";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.translations"), "html", null, true);
        yield "</th>
                            <th>";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.updated_at"), "html", null, true);
        yield "</th>
                            <th>";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.actions"), "html", null, true);
        yield "</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new RuntimeError('Variable "templates" does not exist.', 76, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["code"] => $context["localeTemplates"]) {
            // line 77
            yield "                            <tr>
                                <td class=\"fw-bold\">";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["code"], "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 80
            if (CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", true, true, false, 80)) {
                // line 81
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", false, false, false, 81), "subject", [], "any", false, false, false, 81), "html", null, true);
                yield "
                                    ";
            } elseif (Twig\Extension\CoreExtension::first($this->env->getCharset(),             // line 82
$context["localeTemplates"])) {
                // line 83
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["localeTemplates"]), "subject", [], "any", false, false, false, 83), "html", null, true);
                yield "
                                    ";
            }
            // line 85
            yield "                                </td>
                                <td>
                                    ";
            // line 87
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 87, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "preview_email_templates"], "method", false, false, false, 87))) {
                // line 88
                yield "                                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", true, true, false, 88)) {
                    // line 89
                    yield "                                            <a href=\"#\" class=\"badge bg-primary me-1 preview-template\" data-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", false, false, false, 89), "id", [], "any", false, false, false, 89), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.preview"), "html", null, true);
                    yield " (FR)\" data-bs-toggle=\"tooltip\">FR</a>
                                        ";
                }
                // line 91
                yield "                                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "nl", [], "array", true, true, false, 91)) {
                    // line 92
                    yield "                                            <a href=\"#\" class=\"badge bg-primary me-1 preview-template\" data-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "nl", [], "array", false, false, false, 92), "id", [], "any", false, false, false, 92), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.preview"), "html", null, true);
                    yield " (NL)\" data-bs-toggle=\"tooltip\">NL</a>
                                        ";
                }
                // line 94
                yield "                                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "en", [], "array", true, true, false, 94)) {
                    // line 95
                    yield "                                            <a href=\"#\" class=\"badge bg-primary me-1 preview-template\" data-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "en", [], "array", false, false, false, 95), "id", [], "any", false, false, false, 95), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.preview"), "html", null, true);
                    yield " (EN)\" data-bs-toggle=\"tooltip\">EN</a>
                                        ";
                }
                // line 97
                yield "                                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "de", [], "array", true, true, false, 97)) {
                    // line 98
                    yield "                                            <a href=\"#\" class=\"badge bg-primary me-1 preview-template\" data-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "de", [], "array", false, false, false, 98), "id", [], "any", false, false, false, 98), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.preview"), "html", null, true);
                    yield " (DE)\" data-bs-toggle=\"tooltip\">DE</a>
                                        ";
                }
                // line 100
                yield "                                    ";
            } else {
                // line 101
                yield "                                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", true, true, false, 101)) {
                    yield "<span class=\"badge bg-primary me-1\">FR</span>";
                }
                // line 102
                yield "                                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "nl", [], "array", true, true, false, 102)) {
                    yield "<span class=\"badge bg-primary me-1\">NL</span>";
                }
                // line 103
                yield "                                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "en", [], "array", true, true, false, 103)) {
                    yield "<span class=\"badge bg-primary me-1\">EN</span>";
                }
                // line 104
                yield "                                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "de", [], "array", true, true, false, 104)) {
                    yield "<span class=\"badge bg-primary me-1\">DE</span>";
                }
                // line 105
                yield "                                    ";
            }
            // line 106
            yield "                                </td>
                                <td>
                                    ";
            // line 108
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", true, true, false, 108) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", false, false, false, 108), "updatedAt", [], "any", false, false, false, 108))) {
                // line 109
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", false, false, false, 109), "updatedAt", [], "any", false, false, false, 109), "d/m/Y H:i"), "html", null, true);
                yield "
                                    ";
            } elseif ((Twig\Extension\CoreExtension::first($this->env->getCharset(),             // line 110
$context["localeTemplates"]) && CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["localeTemplates"]), "updatedAt", [], "any", false, false, false, 110))) {
                // line 111
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["localeTemplates"]), "updatedAt", [], "any", false, false, false, 111), "d/m/Y H:i"), "html", null, true);
                yield "
                                    ";
            } elseif (Twig\Extension\CoreExtension::first($this->env->getCharset(),             // line 112
$context["localeTemplates"])) {
                // line 113
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["localeTemplates"]), "createdAt", [], "any", false, false, false, 113), "d/m/Y H:i"), "html", null, true);
                yield "
                                    ";
            }
            // line 115
            yield "                                </td>
                                <td>
                                    <div class=\"dropdown\">
                                        <button class=\"btn btn-sm btn-outline-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            ";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.manage"), "html", null, true);
            yield "
                                        </button>
                                        <ul class=\"dropdown-menu\">
                                            ";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["localeTemplates"]);
            foreach ($context['_seq'] as $context["locale"] => $context["template"]) {
                // line 123
                yield "                                                <li>
                                                    <a class=\"dropdown-item\" href=\"";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["template"], "id", [], "any", false, false, false, 124)]), "html", null, true);
                yield "\">
                                                        ";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.edit"), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["locale"]), "html", null, true);
                yield ")
                                                    </a>
                                                </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['locale'], $context['template'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            yield "                                            
                                            <li><hr class=\"dropdown-divider\"></li>
                                            
                                            ";
            // line 132
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", true, true, false, 132)) {
                // line 133
                yield "                                                <li>
                                                    <a class=\"dropdown-item\" href=\"";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_new", ["code" => $context["code"], "locale" => "fr"]), "html", null, true);
                yield "\">
                                                        ";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.add_translation"), "html", null, true);
                yield " (FR)
                                                    </a>
                                                </li>
                                            ";
            }
            // line 139
            yield "                                            
                                            ";
            // line 140
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "nl", [], "array", true, true, false, 140)) {
                // line 141
                yield "                                                <li>
                                                    <a class=\"dropdown-item\" href=\"";
                // line 142
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_new", ["code" => $context["code"], "locale" => "nl"]), "html", null, true);
                yield "\">
                                                        ";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.add_translation"), "html", null, true);
                yield " (NL)
                                                    </a>
                                                </li>
                                            ";
            }
            // line 147
            yield "                                            
                                            ";
            // line 148
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "en", [], "array", true, true, false, 148)) {
                // line 149
                yield "                                                <li>
                                                    <a class=\"dropdown-item\" href=\"";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_new", ["code" => $context["code"], "locale" => "en"]), "html", null, true);
                yield "\">
                                                        ";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.add_translation"), "html", null, true);
                yield " (EN)
                                                    </a>
                                                </li>
                                            ";
            }
            // line 155
            yield "                                            
                                            ";
            // line 156
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "de", [], "array", true, true, false, 156)) {
                // line 157
                yield "                                                <li>
                                                    <a class=\"dropdown-item\" href=\"";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_new", ["code" => $context["code"], "locale" => "de"]), "html", null, true);
                yield "\">
                                                        ";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.add_translation"), "html", null, true);
                yield " (DE)
                                                    </a>
                                                </li>
                                            ";
            }
            // line 163
            yield "                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 167
        if (!$context['_iterated']) {
            // line 168
            yield "                            <tr>
                                <td colspan=\"5\" class=\"text-center py-4\">";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.no_templates"), "html", null, true);
            yield "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['code'], $context['localeTemplates'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.about"), "html", null, true);
        yield "</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"alert alert-info mb-0\">
                <h5 class=\"alert-heading\">";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.description"), "html", null, true);
        yield "</p>
                <hr>
                <ul class=\"mb-0\">
                    <li><code>";
        // line 188
        yield "{{ firstName }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.firstName"), "html", null, true);
        yield "</li>
                    <li><code>";
        // line 189
        yield "{{ lastName }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.lastName"), "html", null, true);
        yield "</li>
                    <li><code>";
        // line 190
        yield "{{ fullName }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.fullName"), "html", null, true);
        yield "</li>
                    <li><code>";
        // line 191
        yield "{{ email }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.email"), "html", null, true);
        yield "</li>
                    <li><code>";
        // line 192
        yield "{{ domain }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.domain"), "html", null, true);
        yield "</li>
                    <li><code>";
        // line 193
        yield "{{ token }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.token"), "html", null, true);
        yield "</li>
                    <li><code>";
        // line 194
        yield "{{ resetToken }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.resetToken"), "html", null, true);
        yield "</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour la prévisualisation du template -->
<div class=\"modal fade\" id=\"previewModal\" tabindex=\"-1\" aria-labelledby=\"previewModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"previewModalLabel\">";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.preview"), "html", null, true);
        yield "</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"text-center py-4\" id=\"previewLoading\">
                    <div class=\"spinner-border text-primary\" role=\"status\">
                        <span class=\"visually-hidden\">Loading...</span>
                    </div>
                    <p class=\"mt-2\">";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.loading"), "html", null, true);
        yield "</p>
                </div>
                <iframe id=\"previewFrame\" style=\"width: 100%; height: 600px; border: none; display: none;\"></iframe>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.close_btn"), "html", null, true);
        yield "</button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 226
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 227
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialiser les tooltips pour les badges de langue
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });

        // Prévisualisation du template en modal
        const previewModal = new bootstrap.Modal(document.getElementById('previewModal'));
        const previewFrame = document.getElementById('previewFrame');
        const previewLoading = document.getElementById('previewLoading');
        
        document.querySelectorAll('.preview-template').forEach(function(element) {
            element.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Réinitialiser l'iframe et afficher le loader
                previewFrame.src = '';
                previewFrame.style.display = 'none';
                previewLoading.style.display = 'block';
                
                // Mettre à jour le titre avec la langue
                const language = this.textContent.trim();
                document.getElementById('previewModalLabel').textContent = '";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.preview"), "html", null, true);
        yield "' + ' (' + language + ')';
                
                // Afficher la modal
                previewModal.show();
                
                // Charger le contenu
                const id = this.getAttribute('data-id');
                const previewUrl = '";
        // line 259
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_preview", ["id" => "TEMPLATE_ID"]);
        yield "'.replace('TEMPLATE_ID', id);
                
                // Charger l'URL dans l'iframe après un court délai
                setTimeout(function() {
                    previewFrame.src = previewUrl;
                    
                    // Quand l'iframe est chargée, masquer le loader et afficher l'iframe
                    previewFrame.onload = function() {
                        previewLoading.style.display = 'none';
                        previewFrame.style.display = 'block';
                    };
                }, 500);
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
        return "admin/email_templates/index.html.twig";
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
        return array (  680 => 259,  670 => 252,  642 => 227,  632 => 226,  618 => 219,  610 => 214,  599 => 206,  582 => 194,  576 => 193,  570 => 192,  564 => 191,  558 => 190,  552 => 189,  546 => 188,  540 => 185,  536 => 184,  529 => 180,  519 => 172,  510 => 169,  507 => 168,  505 => 167,  497 => 163,  490 => 159,  486 => 158,  483 => 157,  481 => 156,  478 => 155,  471 => 151,  467 => 150,  464 => 149,  462 => 148,  459 => 147,  452 => 143,  448 => 142,  445 => 141,  443 => 140,  440 => 139,  433 => 135,  429 => 134,  426 => 133,  424 => 132,  419 => 129,  407 => 125,  403 => 124,  400 => 123,  396 => 122,  390 => 119,  384 => 115,  378 => 113,  376 => 112,  371 => 111,  369 => 110,  364 => 109,  362 => 108,  358 => 106,  355 => 105,  350 => 104,  345 => 103,  340 => 102,  335 => 101,  332 => 100,  324 => 98,  321 => 97,  313 => 95,  310 => 94,  302 => 92,  299 => 91,  291 => 89,  288 => 88,  286 => 87,  282 => 85,  276 => 83,  274 => 82,  269 => 81,  267 => 80,  262 => 78,  259 => 77,  254 => 76,  247 => 72,  243 => 71,  239 => 70,  235 => 69,  231 => 68,  221 => 61,  212 => 55,  208 => 54,  204 => 53,  200 => 51,  190 => 50,  181 => 47,  173 => 42,  169 => 41,  162 => 38,  160 => 37,  156 => 35,  149 => 31,  145 => 30,  142 => 29,  139 => 28,  132 => 24,  128 => 23,  125 => 22,  122 => 21,  115 => 17,  111 => 16,  108 => 15,  106 => 14,  100 => 11,  96 => 10,  90 => 7,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'admin.email_templates.title'|trans }}{% endblock %}

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
            <a class=\"nav-link\" href=\"{{ path('app_admin_users') }}\">
                <i class=\"fas fa-users me-2\"></i> {{ 'admin.sidebar.users'|trans }}
            </a>
        </li>
        {% endif %}
        {% if is_granted('ROLE_SUPER_ADMIN') or app.user.isAdmin() and permission_service.hasPermission(app.user, 'edit_email_templates') %}
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"{{ path('app_admin_email_templates') }}\">
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
        <h1 class=\"h3\">{{ 'admin.email_templates.title'|trans }}</h1>
        <a href=\"{{ path('app_admin_email_template_new') }}\" class=\"btn btn-gradient\">
            <i class=\"fas fa-plus me-1\"></i> {{ 'admin.email_templates.new_btn'|trans }}
        </a>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">{{ 'admin.email_templates.list'|trans }}</h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0\">
                    <thead>
                        <tr>
                            <th>{{ 'admin.email_templates.code'|trans }}</th>
                            <th>{{ 'admin.email_templates.subject'|trans }}</th>
                            <th>{{ 'admin.email_templates.translations'|trans }}</th>
                            <th>{{ 'admin.email_templates.updated_at'|trans }}</th>
                            <th>{{ 'admin.email_templates.actions'|trans }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for code, localeTemplates in templates %}
                            <tr>
                                <td class=\"fw-bold\">{{ code }}</td>
                                <td>
                                    {% if localeTemplates['fr'] is defined %}
                                        {{ localeTemplates['fr'].subject }}
                                    {% elseif localeTemplates|first %}
                                        {{ localeTemplates|first.subject }}
                                    {% endif %}
                                </td>
                                <td>
                                    {% if is_granted('ROLE_SUPER_ADMIN') or permission_service.hasPermission(app.user, 'preview_email_templates') %}
                                        {% if localeTemplates['fr'] is defined %}
                                            <a href=\"#\" class=\"badge bg-primary me-1 preview-template\" data-id=\"{{ localeTemplates['fr'].id }}\" title=\"{{ 'admin.email_templates.preview'|trans }} (FR)\" data-bs-toggle=\"tooltip\">FR</a>
                                        {% endif %}
                                        {% if localeTemplates['nl'] is defined %}
                                            <a href=\"#\" class=\"badge bg-primary me-1 preview-template\" data-id=\"{{ localeTemplates['nl'].id }}\" title=\"{{ 'admin.email_templates.preview'|trans }} (NL)\" data-bs-toggle=\"tooltip\">NL</a>
                                        {% endif %}
                                        {% if localeTemplates['en'] is defined %}
                                            <a href=\"#\" class=\"badge bg-primary me-1 preview-template\" data-id=\"{{ localeTemplates['en'].id }}\" title=\"{{ 'admin.email_templates.preview'|trans }} (EN)\" data-bs-toggle=\"tooltip\">EN</a>
                                        {% endif %}
                                        {% if localeTemplates['de'] is defined %}
                                            <a href=\"#\" class=\"badge bg-primary me-1 preview-template\" data-id=\"{{ localeTemplates['de'].id }}\" title=\"{{ 'admin.email_templates.preview'|trans }} (DE)\" data-bs-toggle=\"tooltip\">DE</a>
                                        {% endif %}
                                    {% else %}
                                        {% if localeTemplates['fr'] is defined %}<span class=\"badge bg-primary me-1\">FR</span>{% endif %}
                                        {% if localeTemplates['nl'] is defined %}<span class=\"badge bg-primary me-1\">NL</span>{% endif %}
                                        {% if localeTemplates['en'] is defined %}<span class=\"badge bg-primary me-1\">EN</span>{% endif %}
                                        {% if localeTemplates['de'] is defined %}<span class=\"badge bg-primary me-1\">DE</span>{% endif %}
                                    {% endif %}
                                </td>
                                <td>
                                    {% if localeTemplates['fr'] is defined and localeTemplates['fr'].updatedAt %}
                                        {{ localeTemplates['fr'].updatedAt|date('d/m/Y H:i') }}
                                    {% elseif localeTemplates|first and localeTemplates|first.updatedAt %}
                                        {{ localeTemplates|first.updatedAt|date('d/m/Y H:i') }}
                                    {% elseif localeTemplates|first %}
                                        {{ localeTemplates|first.createdAt|date('d/m/Y H:i') }}
                                    {% endif %}
                                </td>
                                <td>
                                    <div class=\"dropdown\">
                                        <button class=\"btn btn-sm btn-outline-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            {{ 'admin.email_templates.manage'|trans }}
                                        </button>
                                        <ul class=\"dropdown-menu\">
                                            {% for locale, template in localeTemplates %}
                                                <li>
                                                    <a class=\"dropdown-item\" href=\"{{ path('app_admin_email_template_edit', {'id': template.id}) }}\">
                                                        {{ 'admin.email_templates.edit'|trans }} ({{ locale|upper }})
                                                    </a>
                                                </li>
                                            {% endfor %}
                                            
                                            <li><hr class=\"dropdown-divider\"></li>
                                            
                                            {% if not localeTemplates['fr'] is defined %}
                                                <li>
                                                    <a class=\"dropdown-item\" href=\"{{ path('app_admin_email_template_new', {'code': code, 'locale': 'fr'}) }}\">
                                                        {{ 'admin.email_templates.add_translation'|trans }} (FR)
                                                    </a>
                                                </li>
                                            {% endif %}
                                            
                                            {% if not localeTemplates['nl'] is defined %}
                                                <li>
                                                    <a class=\"dropdown-item\" href=\"{{ path('app_admin_email_template_new', {'code': code, 'locale': 'nl'}) }}\">
                                                        {{ 'admin.email_templates.add_translation'|trans }} (NL)
                                                    </a>
                                                </li>
                                            {% endif %}
                                            
                                            {% if not localeTemplates['en'] is defined %}
                                                <li>
                                                    <a class=\"dropdown-item\" href=\"{{ path('app_admin_email_template_new', {'code': code, 'locale': 'en'}) }}\">
                                                        {{ 'admin.email_templates.add_translation'|trans }} (EN)
                                                    </a>
                                                </li>
                                            {% endif %}
                                            
                                            {% if not localeTemplates['de'] is defined %}
                                                <li>
                                                    <a class=\"dropdown-item\" href=\"{{ path('app_admin_email_template_new', {'code': code, 'locale': 'de'}) }}\">
                                                        {{ 'admin.email_templates.add_translation'|trans }} (DE)
                                                    </a>
                                                </li>
                                            {% endif %}
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"5\" class=\"text-center py-4\">{{ 'admin.email_templates.no_templates'|trans }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">{{ 'admin.email_templates.about'|trans }}</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"alert alert-info mb-0\">
                <h5 class=\"alert-heading\">{{ 'admin.email_templates.variables.title'|trans }}</h5>
                <p>{{ 'admin.email_templates.variables.description'|trans }}</p>
                <hr>
                <ul class=\"mb-0\">
                    <li><code>{{ '{{ firstName }}' }}</code> - {{ 'admin.email_templates.variables.firstName'|trans }}</li>
                    <li><code>{{ '{{ lastName }}' }}</code> - {{ 'admin.email_templates.variables.lastName'|trans }}</li>
                    <li><code>{{ '{{ fullName }}' }}</code> - {{ 'admin.email_templates.variables.fullName'|trans }}</li>
                    <li><code>{{ '{{ email }}' }}</code> - {{ 'admin.email_templates.variables.email'|trans }}</li>
                    <li><code>{{ '{{ domain }}' }}</code> - {{ 'admin.email_templates.variables.domain'|trans }}</li>
                    <li><code>{{ '{{ token }}' }}</code> - {{ 'admin.email_templates.variables.token'|trans }}</li>
                    <li><code>{{ '{{ resetToken }}' }}</code> - {{ 'admin.email_templates.variables.resetToken'|trans }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour la prévisualisation du template -->
<div class=\"modal fade\" id=\"previewModal\" tabindex=\"-1\" aria-labelledby=\"previewModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"previewModalLabel\">{{ 'admin.email_templates.preview'|trans }}</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"text-center py-4\" id=\"previewLoading\">
                    <div class=\"spinner-border text-primary\" role=\"status\">
                        <span class=\"visually-hidden\">Loading...</span>
                    </div>
                    <p class=\"mt-2\">{{ 'admin.email_templates.loading'|trans }}</p>
                </div>
                <iframe id=\"previewFrame\" style=\"width: 100%; height: 600px; border: none; display: none;\"></iframe>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">{{ 'admin.email_template_edit.close_btn'|trans }}</button>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialiser les tooltips pour les badges de langue
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });

        // Prévisualisation du template en modal
        const previewModal = new bootstrap.Modal(document.getElementById('previewModal'));
        const previewFrame = document.getElementById('previewFrame');
        const previewLoading = document.getElementById('previewLoading');
        
        document.querySelectorAll('.preview-template').forEach(function(element) {
            element.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Réinitialiser l'iframe et afficher le loader
                previewFrame.src = '';
                previewFrame.style.display = 'none';
                previewLoading.style.display = 'block';
                
                // Mettre à jour le titre avec la langue
                const language = this.textContent.trim();
                document.getElementById('previewModalLabel').textContent = '{{ 'admin.email_templates.preview'|trans }}' + ' (' + language + ')';
                
                // Afficher la modal
                previewModal.show();
                
                // Charger le contenu
                const id = this.getAttribute('data-id');
                const previewUrl = '{{ path('app_admin_email_template_preview', {'id': 'TEMPLATE_ID'}) }}'.replace('TEMPLATE_ID', id);
                
                // Charger l'URL dans l'iframe après un court délai
                setTimeout(function() {
                    previewFrame.src = previewUrl;
                    
                    // Quand l'iframe est chargée, masquer le loader et afficher l'iframe
                    previewFrame.onload = function() {
                        previewLoading.style.display = 'none';
                        previewFrame.style.display = 'block';
                    };
                }, 500);
            });
        });
    });
</script>
{% endblock %}", "admin/email_templates/index.html.twig", "/var/www/serveur/templates/admin/email_templates/index.html.twig");
    }
}
