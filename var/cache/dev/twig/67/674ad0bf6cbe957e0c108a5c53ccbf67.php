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
        .language-badge {
            cursor: pointer;
            transition: transform 0.2s ease;
        }
        
        .language-badge:hover {
            transform: translateY(-2px);
        }
        
        /* Modal styles */
        #previewModal .modal-dialog {
            max-width: 800px;
        }
        
        #previewFrame {
            width: 100%;
            height: 600px;
            border: none;
        }
        
        #previewLoading {
            padding: 3rem;
            text-align: center;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 36
        yield "<div class=\"sidebar\">
    <h5 class=\"mb-4\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.title"), "html", null, true);
        yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
                <i class=\"fas fa-tachometer-alt me-2\"></i> ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.dashboard"), "html", null, true);
        yield "
            </a>
        </li>
        ";
        // line 44
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "isAdmin", [], "method", false, false, false, 44) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 44, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "manage_users"], "method", false, false, false, 44)))) {
            // line 45
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 46
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
            yield "\">
                <i class=\"fas fa-users me-2\"></i> ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.users"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 51
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "isAdmin", [], "method", false, false, false, 51) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 51, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "edit_email_templates"], "method", false, false, false, 51)))) {
            // line 52
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
            // line 53
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_templates");
            yield "\">
                <i class=\"fas fa-envelope me-2\"></i> ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.email_templates"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 58
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "isAdmin", [], "method", false, false, false, 58) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 58, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "translate_content"], "method", false, false, false, 58)))) {
            // line 59
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 60
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_translations");
            yield "\">
                <i class=\"fas fa-language me-2\"></i> ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.translations"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 65
        yield "    </ul>
    
    ";
        // line 67
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 68
            yield "    <h5 class=\"mb-3 mt-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_admin"), "html", null, true);
            yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 71
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_dashboard");
            yield "\">
                <i class=\"fas fa-shield-alt me-2\"></i> ";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_dashboard"), "html", null, true);
            yield "
            </a>
        </li>
    </ul>
    ";
        }
        // line 77
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 81
        yield "<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.title"), "html", null, true);
        yield "</h1>
        <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_new");
        yield "\" class=\"btn btn-gradient\">
            <i class=\"fas fa-plus me-1\"></i> ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.new_btn"), "html", null, true);
        yield "
        </a>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.list"), "html", null, true);
        yield "</h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0\">
                    <thead>
                        <tr>
                            <th>";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.code"), "html", null, true);
        yield "</th>
                            <th>";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.subject"), "html", null, true);
        yield "</th>
                            <th>";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.translations"), "html", null, true);
        yield "</th>
                            <th>";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.updated_at"), "html", null, true);
        yield "</th>
                            <th>";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.actions"), "html", null, true);
        yield "</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new RuntimeError('Variable "templates" does not exist.', 106, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["code"] => $context["localeTemplates"]) {
            // line 107
            yield "                            <tr>
                                <td class=\"fw-bold\">";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["code"], "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 110
            if (CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", true, true, false, 110)) {
                // line 111
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", false, false, false, 111), "subject", [], "any", false, false, false, 111), "html", null, true);
                yield "
                                    ";
            } elseif (Twig\Extension\CoreExtension::first($this->env->getCharset(),             // line 112
$context["localeTemplates"])) {
                // line 113
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["localeTemplates"]), "subject", [], "any", false, false, false, 113), "html", null, true);
                yield "
                                    ";
            }
            // line 115
            yield "                                </td>
                                <td>
                                    ";
            // line 117
            if (CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", true, true, false, 117)) {
                // line 118
                yield "                                        <span class=\"badge bg-primary me-1 language-badge\" 
                                              data-template-id=\"";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", false, false, false, 119), "id", [], "any", false, false, false, 119), "html", null, true);
                yield "\" 
                                              data-template-locale=\"fr\"
                                              data-bs-toggle=\"tooltip\" 
                                              title=\"";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.preview"), "html", null, true);
                yield " (FR)\">FR</span>
                                    ";
            }
            // line 124
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "nl", [], "array", true, true, false, 124)) {
                // line 125
                yield "                                        <span class=\"badge bg-primary me-1 language-badge\" 
                                              data-template-id=\"";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "nl", [], "array", false, false, false, 126), "id", [], "any", false, false, false, 126), "html", null, true);
                yield "\" 
                                              data-template-locale=\"nl\"
                                              data-bs-toggle=\"tooltip\" 
                                              title=\"";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.preview"), "html", null, true);
                yield " (NL)\">NL</span>
                                    ";
            }
            // line 131
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "en", [], "array", true, true, false, 131)) {
                // line 132
                yield "                                        <span class=\"badge bg-primary me-1 language-badge\" 
                                              data-template-id=\"";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "en", [], "array", false, false, false, 133), "id", [], "any", false, false, false, 133), "html", null, true);
                yield "\" 
                                              data-template-locale=\"en\"
                                              data-bs-toggle=\"tooltip\" 
                                              title=\"";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.preview"), "html", null, true);
                yield " (EN)\">EN</span>
                                    ";
            }
            // line 138
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "de", [], "array", true, true, false, 138)) {
                // line 139
                yield "                                        <span class=\"badge bg-primary me-1 language-badge\" 
                                              data-template-id=\"";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "de", [], "array", false, false, false, 140), "id", [], "any", false, false, false, 140), "html", null, true);
                yield "\" 
                                              data-template-locale=\"de\"
                                              data-bs-toggle=\"tooltip\" 
                                              title=\"";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.preview"), "html", null, true);
                yield " (DE)\">DE</span>
                                    ";
            }
            // line 145
            yield "                                </td>
                                <td>
                                    ";
            // line 147
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", true, true, false, 147) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", false, false, false, 147), "updatedAt", [], "any", false, false, false, 147))) {
                // line 148
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", false, false, false, 148), "updatedAt", [], "any", false, false, false, 148), "d/m/Y H:i"), "html", null, true);
                yield "
                                    ";
            } elseif ((Twig\Extension\CoreExtension::first($this->env->getCharset(),             // line 149
$context["localeTemplates"]) && CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["localeTemplates"]), "updatedAt", [], "any", false, false, false, 149))) {
                // line 150
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["localeTemplates"]), "updatedAt", [], "any", false, false, false, 150), "d/m/Y H:i"), "html", null, true);
                yield "
                                    ";
            } elseif (Twig\Extension\CoreExtension::first($this->env->getCharset(),             // line 151
$context["localeTemplates"])) {
                // line 152
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["localeTemplates"]), "createdAt", [], "any", false, false, false, 152), "d/m/Y H:i"), "html", null, true);
                yield "
                                    ";
            }
            // line 154
            yield "                                </td>
                                <td>
                                    ";
            // line 156
            $context["defaultTemplate"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", true, true, false, 156)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", false, false, false, 156)) : (Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["localeTemplates"])));
            // line 157
            yield "                                    ";
            if ((isset($context["defaultTemplate"]) || array_key_exists("defaultTemplate", $context) ? $context["defaultTemplate"] : (function () { throw new RuntimeError('Variable "defaultTemplate" does not exist.', 157, $this->source); })())) {
                // line 158
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["defaultTemplate"]) || array_key_exists("defaultTemplate", $context) ? $context["defaultTemplate"] : (function () { throw new RuntimeError('Variable "defaultTemplate" does not exist.', 158, $this->source); })()), "id", [], "any", false, false, false, 158)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">
                                            <i class=\"fas fa-edit me-1\"></i> ";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.edit"), "html", null, true);
                yield "
                                        </a>
                                    ";
            }
            // line 162
            yield "                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 164
        if (!$context['_iterated']) {
            // line 165
            yield "                            <tr>
                                <td colspan=\"5\" class=\"text-center py-4\">";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.no_templates"), "html", null, true);
            yield "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['code'], $context['localeTemplates'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.about"), "html", null, true);
        yield "</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"alert alert-info mb-0\">
                <h5 class=\"alert-heading\">";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.description"), "html", null, true);
        yield "</p>
                <hr>
                <h6>";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.user_info"), "html", null, true);
        yield "</h6>
                <div class=\"row mb-3\">
                    <div class=\"col-md-4\">
                        <ul class=\"mb-0 ps-3\">
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
                        </ul>
                    </div>
                    <div class=\"col-md-4\">
                        <ul class=\"mb-0 ps-3\">
                            <li><code>";
        // line 196
        yield "{{ username }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.username"), "html", null, true);
        yield "</li>
                            <li><code>";
        // line 197
        yield "{{ phoneNumber }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.phoneNumber"), "html", null, true);
        yield "</li>
                            <li><code>";
        // line 198
        yield "{{ birthDate }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.birthDate"), "html", null, true);
        yield "</li>
                            <li><code>";
        // line 199
        yield "{{ age }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.age"), "html", null, true);
        yield "</li>
                        </ul>
                    </div>
                </div>
                
                <h6>";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.address"), "html", null, true);
        yield "</h6>
                <div class=\"row mb-3\">
                    <div class=\"col-md-4\">
                        <ul class=\"mb-0 ps-3\">
                            <li><code>";
        // line 208
        yield "{{ street }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.street"), "html", null, true);
        yield "</li>
                            <li><code>";
        // line 209
        yield "{{ houseNumber }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.houseNumber"), "html", null, true);
        yield "</li>
                            <li><code>";
        // line 210
        yield "{{ boxNumber }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.boxNumber"), "html", null, true);
        yield "</li>
                        </ul>
                    </div>
                    <div class=\"col-md-4\">
                        <ul class=\"mb-0 ps-3\">
                            <li><code>";
        // line 215
        yield "{{ postalCode }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.postalCode"), "html", null, true);
        yield "</li>
                            <li><code>";
        // line 216
        yield "{{ city }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.city"), "html", null, true);
        yield "</li>
                            <li><code>";
        // line 217
        yield "{{ country }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.country"), "html", null, true);
        yield "</li>
                            <li><code>";
        // line 218
        yield "{{ fullAddress }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.fullAddress"), "html", null, true);
        yield "</li>
                        </ul>
                    </div>
                </div>
                
                <h6>";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.system"), "html", null, true);
        yield "</h6>
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        <ul class=\"mb-0 ps-3\">
                            <li><code>";
        // line 227
        yield "{{ locale }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.locale"), "html", null, true);
        yield "</li>
                            <li><code>";
        // line 228
        yield "{{ domain }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.domain"), "html", null, true);
        yield "</li>
                            <li><code>";
        // line 229
        yield "{{ createdAt }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.createdAt"), "html", null, true);
        yield "</li>
                        </ul>
                    </div>
                </div>
                
                <h6>";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.specific"), "html", null, true);
        yield "</h6>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <ul class=\"mb-0 ps-3\">
                            <li><code>";
        // line 238
        yield "{{ signedUrl }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.signedUrl"), "html", null, true);
        yield "</li>
                            <li><code>";
        // line 239
        yield "{{ resetToken }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.resetToken"), "html", null, true);
        yield "</li>
                        </ul>
                    </div>
                    <div class=\"col-md-4\">
                        <ul class=\"mb-0 ps-3\">
                            <li><code>";
        // line 244
        yield "{{ tokenLifetime }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.tokenLifetime"), "html", null, true);
        yield "</li>
                            <li><code>";
        // line 245
        yield "{{ previousRole }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.previousRole"), "html", null, true);
        yield "</li>
                            <li><code>";
        // line 246
        yield "{{ newRole }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.newRole"), "html", null, true);
        yield "</li>
                            <li><code>";
        // line 247
        yield "{{ permissionChanges }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.permissionChanges"), "html", null, true);
        yield "</li>
                        </ul>
                    </div>
                </div>
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
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.preview_title"), "html", null, true);
        yield "</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div id=\"previewLoading\">
                    <div class=\"spinner-border text-primary\" role=\"status\">
                        <span class=\"visually-hidden\">Loading...</span>
                    </div>
                    <p class=\"mt-2\">";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.loading"), "html", null, true);
        yield "</p>
                </div>
                <iframe id=\"previewFrame\" style=\"display: none;\"></iframe>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 274
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

    // line 281
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 282
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialiser les tooltips
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
            tooltipTriggerList.forEach(function(tooltipTriggerEl) {
                new bootstrap.Tooltip(tooltipTriggerEl);
            });
            
            // Gestionnaire d'événements pour les badges de langue
            const languageBadges = document.querySelectorAll('.language-badge');
            const previewModal = new bootstrap.Modal(document.getElementById('previewModal'));
            const previewFrame = document.getElementById('previewFrame');
            const previewLoading = document.getElementById('previewLoading');
            
            languageBadges.forEach(function(badge) {
                badge.addEventListener('click', function() {
                    // Récupérer l'ID du template et la locale
                    const templateId = this.getAttribute('data-template-id');
                    const locale = this.getAttribute('data-template-locale');
                    
                    // Mettre à jour le titre de la modal
                    const modalTitle = document.getElementById('previewModalLabel');
                    modalTitle.textContent = '";
        // line 305
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.preview_title"), "html", null, true);
        yield " (' + locale.toUpperCase() + ')';
                    
                    // Réinitialiser l'iframe et afficher le loader
                    previewFrame.src = '';
                    previewFrame.style.display = 'none';
                    previewLoading.style.display = 'block';
                    
                    // Afficher la modal
                    previewModal.show();
                    
                    // Charger la prévisualisation
                    setTimeout(function() {
                        const previewUrl = '";
        // line 317
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_preview", ["id" => "TEMPLATE_ID"]);
        yield "'.replace('TEMPLATE_ID', templateId);
                        
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
        return array (  787 => 317,  772 => 305,  745 => 282,  735 => 281,  721 => 274,  713 => 269,  702 => 261,  683 => 247,  677 => 246,  671 => 245,  665 => 244,  655 => 239,  649 => 238,  642 => 234,  632 => 229,  626 => 228,  620 => 227,  613 => 223,  603 => 218,  597 => 217,  591 => 216,  585 => 215,  575 => 210,  569 => 209,  563 => 208,  556 => 204,  546 => 199,  540 => 198,  534 => 197,  528 => 196,  518 => 191,  512 => 190,  506 => 189,  500 => 188,  493 => 184,  488 => 182,  484 => 181,  477 => 177,  467 => 169,  458 => 166,  455 => 165,  453 => 164,  447 => 162,  441 => 159,  436 => 158,  433 => 157,  431 => 156,  427 => 154,  421 => 152,  419 => 151,  414 => 150,  412 => 149,  407 => 148,  405 => 147,  401 => 145,  396 => 143,  390 => 140,  387 => 139,  384 => 138,  379 => 136,  373 => 133,  370 => 132,  367 => 131,  362 => 129,  356 => 126,  353 => 125,  350 => 124,  345 => 122,  339 => 119,  336 => 118,  334 => 117,  330 => 115,  324 => 113,  322 => 112,  317 => 111,  315 => 110,  310 => 108,  307 => 107,  302 => 106,  295 => 102,  291 => 101,  287 => 100,  283 => 99,  279 => 98,  269 => 91,  260 => 85,  256 => 84,  252 => 83,  248 => 81,  238 => 80,  229 => 77,  221 => 72,  217 => 71,  210 => 68,  208 => 67,  204 => 65,  197 => 61,  193 => 60,  190 => 59,  187 => 58,  180 => 54,  176 => 53,  173 => 52,  170 => 51,  163 => 47,  159 => 46,  156 => 45,  154 => 44,  148 => 41,  144 => 40,  138 => 37,  135 => 36,  125 => 35,  88 => 6,  78 => 5,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'admin.email_templates.title'|trans }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .language-badge {
            cursor: pointer;
            transition: transform 0.2s ease;
        }
        
        .language-badge:hover {
            transform: translateY(-2px);
        }
        
        /* Modal styles */
        #previewModal .modal-dialog {
            max-width: 800px;
        }
        
        #previewFrame {
            width: 100%;
            height: 600px;
            border: none;
        }
        
        #previewLoading {
            padding: 3rem;
            text-align: center;
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
                                    {% if localeTemplates['fr'] is defined %}
                                        <span class=\"badge bg-primary me-1 language-badge\" 
                                              data-template-id=\"{{ localeTemplates['fr'].id }}\" 
                                              data-template-locale=\"fr\"
                                              data-bs-toggle=\"tooltip\" 
                                              title=\"{{ 'admin.email_templates.preview'|trans }} (FR)\">FR</span>
                                    {% endif %}
                                    {% if localeTemplates['nl'] is defined %}
                                        <span class=\"badge bg-primary me-1 language-badge\" 
                                              data-template-id=\"{{ localeTemplates['nl'].id }}\" 
                                              data-template-locale=\"nl\"
                                              data-bs-toggle=\"tooltip\" 
                                              title=\"{{ 'admin.email_templates.preview'|trans }} (NL)\">NL</span>
                                    {% endif %}
                                    {% if localeTemplates['en'] is defined %}
                                        <span class=\"badge bg-primary me-1 language-badge\" 
                                              data-template-id=\"{{ localeTemplates['en'].id }}\" 
                                              data-template-locale=\"en\"
                                              data-bs-toggle=\"tooltip\" 
                                              title=\"{{ 'admin.email_templates.preview'|trans }} (EN)\">EN</span>
                                    {% endif %}
                                    {% if localeTemplates['de'] is defined %}
                                        <span class=\"badge bg-primary me-1 language-badge\" 
                                              data-template-id=\"{{ localeTemplates['de'].id }}\" 
                                              data-template-locale=\"de\"
                                              data-bs-toggle=\"tooltip\" 
                                              title=\"{{ 'admin.email_templates.preview'|trans }} (DE)\">DE</span>
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
                                    {% set defaultTemplate = localeTemplates['fr'] is defined ? localeTemplates['fr'] : localeTemplates|first %}
                                    {% if defaultTemplate %}
                                        <a href=\"{{ path('app_admin_email_template_edit', {'id': defaultTemplate.id}) }}\" class=\"btn btn-sm btn-outline-primary\">
                                            <i class=\"fas fa-edit me-1\"></i> {{ 'admin.email_templates.edit'|trans }}
                                        </a>
                                    {% endif %}
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
                <h6>{{ 'admin.email_templates.variables.user_info'|trans }}</h6>
                <div class=\"row mb-3\">
                    <div class=\"col-md-4\">
                        <ul class=\"mb-0 ps-3\">
                            <li><code>{{ '{{ firstName }}' }}</code> - {{ 'admin.email_templates.variables.firstName'|trans }}</li>
                            <li><code>{{ '{{ lastName }}' }}</code> - {{ 'admin.email_templates.variables.lastName'|trans }}</li>
                            <li><code>{{ '{{ fullName }}' }}</code> - {{ 'admin.email_templates.variables.fullName'|trans }}</li>
                            <li><code>{{ '{{ email }}' }}</code> - {{ 'admin.email_templates.variables.email'|trans }}</li>
                        </ul>
                    </div>
                    <div class=\"col-md-4\">
                        <ul class=\"mb-0 ps-3\">
                            <li><code>{{ '{{ username }}' }}</code> - {{ 'admin.email_templates.variables.username'|trans }}</li>
                            <li><code>{{ '{{ phoneNumber }}' }}</code> - {{ 'admin.email_templates.variables.phoneNumber'|trans }}</li>
                            <li><code>{{ '{{ birthDate }}' }}</code> - {{ 'admin.email_templates.variables.birthDate'|trans }}</li>
                            <li><code>{{ '{{ age }}' }}</code> - {{ 'admin.email_templates.variables.age'|trans }}</li>
                        </ul>
                    </div>
                </div>
                
                <h6>{{ 'admin.email_templates.variables.address'|trans }}</h6>
                <div class=\"row mb-3\">
                    <div class=\"col-md-4\">
                        <ul class=\"mb-0 ps-3\">
                            <li><code>{{ '{{ street }}' }}</code> - {{ 'admin.email_templates.variables.street'|trans }}</li>
                            <li><code>{{ '{{ houseNumber }}' }}</code> - {{ 'admin.email_templates.variables.houseNumber'|trans }}</li>
                            <li><code>{{ '{{ boxNumber }}' }}</code> - {{ 'admin.email_templates.variables.boxNumber'|trans }}</li>
                        </ul>
                    </div>
                    <div class=\"col-md-4\">
                        <ul class=\"mb-0 ps-3\">
                            <li><code>{{ '{{ postalCode }}' }}</code> - {{ 'admin.email_templates.variables.postalCode'|trans }}</li>
                            <li><code>{{ '{{ city }}' }}</code> - {{ 'admin.email_templates.variables.city'|trans }}</li>
                            <li><code>{{ '{{ country }}' }}</code> - {{ 'admin.email_templates.variables.country'|trans }}</li>
                            <li><code>{{ '{{ fullAddress }}' }}</code> - {{ 'admin.email_templates.variables.fullAddress'|trans }}</li>
                        </ul>
                    </div>
                </div>
                
                <h6>{{ 'admin.email_templates.variables.system'|trans }}</h6>
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        <ul class=\"mb-0 ps-3\">
                            <li><code>{{ '{{ locale }}' }}</code> - {{ 'admin.email_templates.variables.locale'|trans }}</li>
                            <li><code>{{ '{{ domain }}' }}</code> - {{ 'admin.email_templates.variables.domain'|trans }}</li>
                            <li><code>{{ '{{ createdAt }}' }}</code> - {{ 'admin.email_templates.variables.createdAt'|trans }}</li>
                        </ul>
                    </div>
                </div>
                
                <h6>{{ 'admin.email_templates.variables.specific'|trans }}</h6>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <ul class=\"mb-0 ps-3\">
                            <li><code>{{ '{{ signedUrl }}' }}</code> - {{ 'admin.email_templates.variables.signedUrl'|trans }}</li>
                            <li><code>{{ '{{ resetToken }}' }}</code> - {{ 'admin.email_templates.variables.resetToken'|trans }}</li>
                        </ul>
                    </div>
                    <div class=\"col-md-4\">
                        <ul class=\"mb-0 ps-3\">
                            <li><code>{{ '{{ tokenLifetime }}' }}</code> - {{ 'admin.email_templates.variables.tokenLifetime'|trans }}</li>
                            <li><code>{{ '{{ previousRole }}' }}</code> - {{ 'admin.email_templates.variables.previousRole'|trans }}</li>
                            <li><code>{{ '{{ newRole }}' }}</code> - {{ 'admin.email_templates.variables.newRole'|trans }}</li>
                            <li><code>{{ '{{ permissionChanges }}' }}</code> - {{ 'admin.email_templates.variables.permissionChanges'|trans }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour la prévisualisation du template -->
<div class=\"modal fade\" id=\"previewModal\" tabindex=\"-1\" aria-labelledby=\"previewModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"previewModalLabel\">{{ 'admin.email_template_edit.preview_title'|trans }}</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div id=\"previewLoading\">
                    <div class=\"spinner-border text-primary\" role=\"status\">
                        <span class=\"visually-hidden\">Loading...</span>
                    </div>
                    <p class=\"mt-2\">{{ 'admin.email_template_edit.loading'|trans }}</p>
                </div>
                <iframe id=\"previewFrame\" style=\"display: none;\"></iframe>
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
            // Initialiser les tooltips
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
            tooltipTriggerList.forEach(function(tooltipTriggerEl) {
                new bootstrap.Tooltip(tooltipTriggerEl);
            });
            
            // Gestionnaire d'événements pour les badges de langue
            const languageBadges = document.querySelectorAll('.language-badge');
            const previewModal = new bootstrap.Modal(document.getElementById('previewModal'));
            const previewFrame = document.getElementById('previewFrame');
            const previewLoading = document.getElementById('previewLoading');
            
            languageBadges.forEach(function(badge) {
                badge.addEventListener('click', function() {
                    // Récupérer l'ID du template et la locale
                    const templateId = this.getAttribute('data-template-id');
                    const locale = this.getAttribute('data-template-locale');
                    
                    // Mettre à jour le titre de la modal
                    const modalTitle = document.getElementById('previewModalLabel');
                    modalTitle.textContent = '{{ 'admin.email_template_edit.preview_title'|trans }} (' + locale.toUpperCase() + ')';
                    
                    // Réinitialiser l'iframe et afficher le loader
                    previewFrame.src = '';
                    previewFrame.style.display = 'none';
                    previewLoading.style.display = 'block';
                    
                    // Afficher la modal
                    previewModal.show();
                    
                    // Charger la prévisualisation
                    setTimeout(function() {
                        const previewUrl = '{{ path('app_admin_email_template_preview', {'id': 'TEMPLATE_ID'}) }}'.replace('TEMPLATE_ID', templateId);
                        
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
