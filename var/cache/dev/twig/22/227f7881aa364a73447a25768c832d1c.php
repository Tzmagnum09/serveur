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

/* admin/email_templates/edit.html.twig */
class __TwigTemplate_0a8e22b0dec18cbfee3b7b5a19b6bf22 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/email_templates/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/email_templates/edit.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.title", ["%code%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 3, $this->source); })()), "code", [], "any", false, false, false, 3)]), "html", null, true);
        
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
        yield "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css\">
    <style>
        .language-selector {
            display: flex;
            gap: 5px;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .language-badge {
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 5px;
            font-weight: 500;
            transition: all 0.2s;
        }
        
        .language-badge.active {
            background: linear-gradient(135deg, #8e44ad, #3498db);
            color: white;
        }
        
        .language-badge:not(.active) {
            background-color: #f1f1f1;
            color: #333;
        }
        
        .language-badge:hover:not(.active) {
            background-color: #e0e0e0;
            transform: translateY(-2px);
        }
        
        /* Styles pour la modal de prévisualisation */
        #previewModal .modal-dialog {
            max-width: 800px;
        }
        
        #previewModal .modal-body {
            padding: 0;
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

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 61
        yield "<div class=\"sidebar\">
    <h5 class=\"mb-4\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.title"), "html", null, true);
        yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
                <i class=\"fas fa-tachometer-alt me-2\"></i> ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.dashboard"), "html", null, true);
        yield "
            </a>
        </li>
        ";
        // line 69
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "isAdmin", [], "method", false, false, false, 69) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 69, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "manage_users"], "method", false, false, false, 69)))) {
            // line 70
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 71
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
            yield "\">
                <i class=\"fas fa-users me-2\"></i> ";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.users"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 76
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "isAdmin", [], "method", false, false, false, 76) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 76, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "edit_email_templates"], "method", false, false, false, 76)))) {
            // line 77
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
            // line 78
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_templates");
            yield "\">
                <i class=\"fas fa-envelope me-2\"></i> ";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.email_templates"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 83
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), "isAdmin", [], "method", false, false, false, 83) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 83, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), "translate_content"], "method", false, false, false, 83)))) {
            // line 84
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 85
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_translations");
            yield "\">
                <i class=\"fas fa-language me-2\"></i> ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.translations"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 90
        yield "    </ul>
    
    ";
        // line 92
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 93
            yield "    <h5 class=\"mb-3 mt-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_admin"), "html", null, true);
            yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 96
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_dashboard");
            yield "\">
                <i class=\"fas fa-shield-alt me-2\"></i> ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_dashboard"), "html", null, true);
            yield "
            </a>
        </li>
    </ul>
    ";
        }
        // line 102
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 105
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 106
        yield "<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">Modifier le template ";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 108, $this->source); })()), "code", [], "any", false, false, false, 108), "html", null, true);
        yield "</h1>
        <div class=\"d-flex\">
            <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_templates");
        yield "\" class=\"btn btn-outline-secondary me-2\">
                <i class=\"fas fa-arrow-left me-1\"></i> ";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.back_btn"), "html", null, true);
        yield "
            </a>
            
            ";
        // line 114
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 114, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "user", [], "any", false, false, false, 114), "preview_email_templates"], "method", false, false, false, 114))) {
            // line 115
            yield "            <button id=\"previewBtn\" class=\"btn btn-outline-primary me-2\">
                <i class=\"fas fa-eye me-1\"></i> ";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.preview_btn"), "html", null, true);
            yield "
            </button>
            ";
        }
        // line 119
        yield "            
            <form method=\"post\" action=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 120, $this->source); })()), "id", [], "any", false, false, false, 120)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.confirm_delete"), "html", null, true);
        yield "')\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 121, $this->source); })()), "id", [], "any", false, false, false, 121))), "html", null, true);
        yield "\">
                <button type=\"submit\" class=\"btn btn-outline-danger\">
                    <i class=\"fas fa-trash-alt me-1\"></i> ";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.delete_btn"), "html", null, true);
        yield "
                </button>
            </form>
        </div>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.form_title"), "html", null, true);
        yield "</h5>
        </div>
        <div class=\"card-body\">
            ";
        // line 134
        if ((array_key_exists("availableLocales", $context) && array_key_exists("existingLocales", $context))) {
            // line 135
            yield "            <div class=\"language-selector mb-4\">
                <strong class=\"me-2\">";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.languages"), "html", null, true);
            yield ":</strong>
                ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["availableLocales"]) || array_key_exists("availableLocales", $context) ? $context["availableLocales"] : (function () { throw new RuntimeError('Variable "availableLocales" does not exist.', 137, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
                // line 138
                yield "                    ";
                $context["localeClass"] = ((($context["loc"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 138, $this->source); })()), "locale", [], "any", false, false, false, 138))) ? ("active") : (""));
                // line 139
                yield "                    ";
                $context["localeText"] = ((($context["loc"] == "fr")) ? ("Français") : (((($context["loc"] == "nl")) ? ("Néerlandais") : (((($context["loc"] == "en")) ? ("Anglais") : ("Allemand"))))));
                // line 140
                yield "                    
                    ";
                // line 141
                if (CoreExtension::inFilter($context["loc"], (isset($context["existingLocales"]) || array_key_exists("existingLocales", $context) ? $context["existingLocales"] : (function () { throw new RuntimeError('Variable "existingLocales" does not exist.', 141, $this->source); })()))) {
                    // line 142
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_edit_locale", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 142, $this->source); })()), "id", [], "any", false, false, false, 142), "locale" => $context["loc"]]), "html", null, true);
                    yield "\" 
                           class=\"language-badge ";
                    // line 143
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["localeClass"]) || array_key_exists("localeClass", $context) ? $context["localeClass"] : (function () { throw new RuntimeError('Variable "localeClass" does not exist.', 143, $this->source); })()), "html", null, true);
                    yield "\" 
                           title=\"";
                    // line 144
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.switch_language"), "html", null, true);
                    yield "\">
                            ";
                    // line 145
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["localeText"]) || array_key_exists("localeText", $context) ? $context["localeText"] : (function () { throw new RuntimeError('Variable "localeText" does not exist.', 145, $this->source); })()), "html", null, true);
                    yield "
                        </a>
                    ";
                } else {
                    // line 148
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_edit_locale", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 148, $this->source); })()), "id", [], "any", false, false, false, 148), "locale" => $context["loc"]]), "html", null, true);
                    yield "\" 
                           class=\"language-badge ";
                    // line 149
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["localeClass"]) || array_key_exists("localeClass", $context) ? $context["localeClass"] : (function () { throw new RuntimeError('Variable "localeClass" does not exist.', 149, $this->source); })()), "html", null, true);
                    yield "\" 
                           title=\"";
                    // line 150
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.create_translation"), "html", null, true);
                    yield "\">
                            ";
                    // line 151
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["localeText"]) || array_key_exists("localeText", $context) ? $context["localeText"] : (function () { throw new RuntimeError('Variable "localeText" does not exist.', 151, $this->source); })()), "html", null, true);
                    yield " <i class=\"fas fa-plus fa-xs\"></i>
                        </a>
                    ";
                }
                // line 154
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['loc'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            yield "            </div>
            ";
        }
        // line 157
        yield "            
            ";
        // line 158
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), 'form_start');
        yield "
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        ";
        // line 161
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "code", [], "any", false, false, false, 161), 'row');
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 164
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "locale", [], "any", false, false, false, 164), 'row', ["attr" => ["id" => "locale-selector"]]);
        yield "
                    </div>
                </div>
                
                <div class=\"mb-3\">
                    ";
        // line 169
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "subject", [], "any", false, false, false, 169), 'row');
        yield "
                </div>
                
                <div class=\"mb-3\">
                    ";
        // line 173
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "htmlContent", [], "any", false, false, false, 173), 'label');
        yield "
                    ";
        // line 174
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "htmlContent", [], "any", false, false, false, 174), 'widget', ["attr" => ["class" => "html-editor form-control"]]);
        yield "
                    ";
        // line 175
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "htmlContent", [], "any", false, false, false, 175), 'help');
        yield "
                    ";
        // line 176
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "htmlContent", [], "any", false, false, false, 176), 'errors');
        yield "
                </div>
                
                <div class=\"card mb-3\">
                    <div class=\"card-header\">
                        <h6 class=\"mb-0\">";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.title"), "html", null, true);
        yield "</h6>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-4 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"firstName\">
                                    ";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.firstName"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-4 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"lastName\">
                                    ";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.lastName"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-4 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"fullName\">
                                    ";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.fullName"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-4 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"email\">
                                    ";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.email"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-4 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"domain\">
                                    ";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.domain"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-4 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"token\">
                                    ";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.token"), "html", null, true);
        yield "
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"d-flex justify-content-end\">
                    <a href=\"";
        // line 220
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_templates");
        yield "\" class=\"btn btn-outline-secondary me-2\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.cancel_btn"), "html", null, true);
        yield "</a>
                    <button type=\"submit\" class=\"btn btn-gradient\">";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.save_btn"), "html", null, true);
        yield "</button>
                </div>
            ";
        // line 223
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</div>

<!-- Modal pour la prévisualisation du template -->
<div class=\"modal fade\" id=\"previewModal\" tabindex=\"-1\" aria-labelledby=\"previewModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"previewModalLabel\">";
        // line 233
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
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.loading"), "html", null, true);
        yield "</p>
                </div>
                <iframe id=\"previewFrame\" style=\"display: none;\"></iframe>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 246
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

    // line 253
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 254
        yield "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js\"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize HTML editor
            \$('.html-editor').summernote({
                height: 300,
                placeholder: '";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.editor.placeholder"), "html", null, true);
        yield "',
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ],
                callbacks: {
                    onImageUpload: function(files) {
                        alert('";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.editor.no_image_upload"), "html", null, true);
        yield "');
                    }
                }
            });
            
            // Gestionnaire de changement de langue
            const localeSelector = document.getElementById('locale-selector');
            if (localeSelector) {
                localeSelector.addEventListener('change', function() {
                    const selectedLocale = this.value;
                    const templateId = '";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 283, $this->source); })()), "id", [], "any", false, false, false, 283), "html", null, true);
        yield "';
                    // Rediriger vers la version du template dans la langue sélectionnée
                    window.location.href = '";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_edit_locale", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 285, $this->source); })()), "id", [], "any", false, false, false, 285), "locale" => "__locale__"]), "html", null, true);
        yield "'.replace('__locale__', selectedLocale);
                });
            }
            
            // Variable buttons
            \$('.variable-btn').on('click', function() {
                const variable = \$(this).data('variable');
                \$('.html-editor').summernote('insertText', '";
        // line 292
        yield "{{";
        yield " ' + variable + ' ";
        yield "}}";
        yield "');
            });
            
            // Modal preview
            const previewBtn = document.getElementById('previewBtn');
            if (previewBtn) {
                const previewModal = new bootstrap.Modal(document.getElementById('previewModal'));
                const previewFrame = document.getElementById('previewFrame');
                const previewLoading = document.getElementById('previewLoading');
                
                previewBtn.addEventListener('click', function() {
                    // Réinitialiser l'iframe et afficher le loader
                    previewFrame.src = '';
                    previewFrame.style.display = 'none';
                    previewLoading.style.display = 'block';
                    
                    // Afficher la modal
                    previewModal.show();
                    
                    // Charger le contenu
                    const previewUrl = '";
        // line 312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_preview", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 312, $this->source); })()), "id", [], "any", false, false, false, 312)]), "html", null, true);
        yield "';
                    
                    // Charger l'URL dans l'iframe
                    setTimeout(function() {
                        previewFrame.src = previewUrl;
                        
                        // Quand l'iframe est chargée, masquer le loader et afficher l'iframe
                        previewFrame.onload = function() {
                            previewLoading.style.display = 'none';
                            previewFrame.style.display = 'block';
                        };
                    }, 500);
                });
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
        return "admin/email_templates/edit.html.twig";
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
        return array (  658 => 312,  633 => 292,  623 => 285,  618 => 283,  605 => 273,  590 => 261,  581 => 254,  571 => 253,  557 => 246,  549 => 241,  538 => 233,  525 => 223,  520 => 221,  514 => 220,  503 => 212,  495 => 207,  487 => 202,  479 => 197,  471 => 192,  463 => 187,  454 => 181,  446 => 176,  442 => 175,  438 => 174,  434 => 173,  427 => 169,  419 => 164,  413 => 161,  407 => 158,  404 => 157,  400 => 155,  394 => 154,  388 => 151,  384 => 150,  380 => 149,  375 => 148,  369 => 145,  365 => 144,  361 => 143,  356 => 142,  354 => 141,  351 => 140,  348 => 139,  345 => 138,  341 => 137,  337 => 136,  334 => 135,  332 => 134,  326 => 131,  315 => 123,  310 => 121,  304 => 120,  301 => 119,  295 => 116,  292 => 115,  290 => 114,  284 => 111,  280 => 110,  275 => 108,  271 => 106,  261 => 105,  252 => 102,  244 => 97,  240 => 96,  233 => 93,  231 => 92,  227 => 90,  220 => 86,  216 => 85,  213 => 84,  210 => 83,  203 => 79,  199 => 78,  196 => 77,  193 => 76,  186 => 72,  182 => 71,  179 => 70,  177 => 69,  171 => 66,  167 => 65,  161 => 62,  158 => 61,  148 => 60,  88 => 6,  78 => 5,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'admin.email_template_edit.title'|trans({'%code%': template.code}) }}{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css\">
    <style>
        .language-selector {
            display: flex;
            gap: 5px;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .language-badge {
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 5px;
            font-weight: 500;
            transition: all 0.2s;
        }
        
        .language-badge.active {
            background: linear-gradient(135deg, #8e44ad, #3498db);
            color: white;
        }
        
        .language-badge:not(.active) {
            background-color: #f1f1f1;
            color: #333;
        }
        
        .language-badge:hover:not(.active) {
            background-color: #e0e0e0;
            transform: translateY(-2px);
        }
        
        /* Styles pour la modal de prévisualisation */
        #previewModal .modal-dialog {
            max-width: 800px;
        }
        
        #previewModal .modal-body {
            padding: 0;
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
        <h1 class=\"h3\">Modifier le template {{ template.code }}</h1>
        <div class=\"d-flex\">
            <a href=\"{{ path('app_admin_email_templates') }}\" class=\"btn btn-outline-secondary me-2\">
                <i class=\"fas fa-arrow-left me-1\"></i> {{ 'admin.email_template_edit.back_btn'|trans }}
            </a>
            
            {% if is_granted('ROLE_SUPER_ADMIN') or permission_service.hasPermission(app.user, 'preview_email_templates') %}
            <button id=\"previewBtn\" class=\"btn btn-outline-primary me-2\">
                <i class=\"fas fa-eye me-1\"></i> {{ 'admin.email_template_edit.preview_btn'|trans }}
            </button>
            {% endif %}
            
            <form method=\"post\" action=\"{{ path('app_admin_email_template_delete', {'id': template.id}) }}\" onsubmit=\"return confirm('{{ 'admin.email_template_edit.confirm_delete'|trans }}')\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ template.id) }}\">
                <button type=\"submit\" class=\"btn btn-outline-danger\">
                    <i class=\"fas fa-trash-alt me-1\"></i> {{ 'admin.email_template_edit.delete_btn'|trans }}
                </button>
            </form>
        </div>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">{{ 'admin.email_template_edit.form_title'|trans }}</h5>
        </div>
        <div class=\"card-body\">
            {% if availableLocales is defined and existingLocales is defined %}
            <div class=\"language-selector mb-4\">
                <strong class=\"me-2\">{{ 'admin.email_template_edit.languages'|trans }}:</strong>
                {% for loc in availableLocales %}
                    {% set localeClass = loc == template.locale ? 'active' : '' %}
                    {% set localeText = loc == 'fr' ? 'Français' : (loc == 'nl' ? 'Néerlandais' : (loc == 'en' ? 'Anglais' : 'Allemand')) %}
                    
                    {% if loc in existingLocales %}
                        <a href=\"{{ path('app_admin_email_template_edit_locale', {'id': template.id, 'locale': loc}) }}\" 
                           class=\"language-badge {{ localeClass }}\" 
                           title=\"{{ 'admin.email_template_edit.switch_language'|trans }}\">
                            {{ localeText }}
                        </a>
                    {% else %}
                        <a href=\"{{ path('app_admin_email_template_edit_locale', {'id': template.id, 'locale': loc}) }}\" 
                           class=\"language-badge {{ localeClass }}\" 
                           title=\"{{ 'admin.email_template_edit.create_translation'|trans }}\">
                            {{ localeText }} <i class=\"fas fa-plus fa-xs\"></i>
                        </a>
                    {% endif %}
                {% endfor %}
            </div>
            {% endif %}
            
            {{ form_start(form) }}
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        {{ form_row(form.code) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(form.locale, {'attr': {'id': 'locale-selector'}}) }}
                    </div>
                </div>
                
                <div class=\"mb-3\">
                    {{ form_row(form.subject) }}
                </div>
                
                <div class=\"mb-3\">
                    {{ form_label(form.htmlContent) }}
                    {{ form_widget(form.htmlContent, {'attr': {'class': 'html-editor form-control'}}) }}
                    {{ form_help(form.htmlContent) }}
                    {{ form_errors(form.htmlContent) }}
                </div>
                
                <div class=\"card mb-3\">
                    <div class=\"card-header\">
                        <h6 class=\"mb-0\">{{ 'admin.email_templates.variables.title'|trans }}</h6>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-4 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"firstName\">
                                    {{ 'admin.email_templates.variables.firstName'|trans }}
                                </button>
                            </div>
                            <div class=\"col-md-4 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"lastName\">
                                    {{ 'admin.email_templates.variables.lastName'|trans }}
                                </button>
                            </div>
                            <div class=\"col-md-4 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"fullName\">
                                    {{ 'admin.email_templates.variables.fullName'|trans }}
                                </button>
                            </div>
                            <div class=\"col-md-4 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"email\">
                                    {{ 'admin.email_templates.variables.email'|trans }}
                                </button>
                            </div>
                            <div class=\"col-md-4 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"domain\">
                                    {{ 'admin.email_templates.variables.domain'|trans }}
                                </button>
                            </div>
                            <div class=\"col-md-4 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"token\">
                                    {{ 'admin.email_templates.variables.token'|trans }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"d-flex justify-content-end\">
                    <a href=\"{{ path('app_admin_email_templates') }}\" class=\"btn btn-outline-secondary me-2\">{{ 'admin.email_template_edit.cancel_btn'|trans }}</a>
                    <button type=\"submit\" class=\"btn btn-gradient\">{{ 'admin.email_template_edit.save_btn'|trans }}</button>
                </div>
            {{ form_end(form) }}
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
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js\"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize HTML editor
            \$('.html-editor').summernote({
                height: 300,
                placeholder: '{{ 'admin.email_templates.editor.placeholder'|trans }}',
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ],
                callbacks: {
                    onImageUpload: function(files) {
                        alert('{{ 'admin.email_templates.editor.no_image_upload'|trans }}');
                    }
                }
            });
            
            // Gestionnaire de changement de langue
            const localeSelector = document.getElementById('locale-selector');
            if (localeSelector) {
                localeSelector.addEventListener('change', function() {
                    const selectedLocale = this.value;
                    const templateId = '{{ template.id }}';
                    // Rediriger vers la version du template dans la langue sélectionnée
                    window.location.href = '{{ path(\"app_admin_email_template_edit_locale\", {\"id\": template.id, \"locale\": \"__locale__\"}) }}'.replace('__locale__', selectedLocale);
                });
            }
            
            // Variable buttons
            \$('.variable-btn').on('click', function() {
                const variable = \$(this).data('variable');
                \$('.html-editor').summernote('insertText', '{{ '{{' }} ' + variable + ' {{ '}}' }}');
            });
            
            // Modal preview
            const previewBtn = document.getElementById('previewBtn');
            if (previewBtn) {
                const previewModal = new bootstrap.Modal(document.getElementById('previewModal'));
                const previewFrame = document.getElementById('previewFrame');
                const previewLoading = document.getElementById('previewLoading');
                
                previewBtn.addEventListener('click', function() {
                    // Réinitialiser l'iframe et afficher le loader
                    previewFrame.src = '';
                    previewFrame.style.display = 'none';
                    previewLoading.style.display = 'block';
                    
                    // Afficher la modal
                    previewModal.show();
                    
                    // Charger le contenu
                    const previewUrl = '{{ path('app_admin_email_template_preview', {'id': template.id}) }}';
                    
                    // Charger l'URL dans l'iframe
                    setTimeout(function() {
                        previewFrame.src = previewUrl;
                        
                        // Quand l'iframe est chargée, masquer le loader et afficher l'iframe
                        previewFrame.onload = function() {
                            previewLoading.style.display = 'none';
                            previewFrame.style.display = 'block';
                        };
                    }, 500);
                });
            }
        });
    </script>
{% endblock %}", "admin/email_templates/edit.html.twig", "/var/www/serveur/templates/admin/email_templates/edit.html.twig");
    }
}
