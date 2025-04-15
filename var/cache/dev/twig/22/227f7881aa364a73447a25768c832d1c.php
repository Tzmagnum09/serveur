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
        
        /* Styles pour l'éditeur */
        .note-editor .note-editable {
            text-align: left; /* Le contenu de l'éditeur sera aligné à gauche par défaut */
        }
        
        /* Pour les contenus centrés spécifiquement */
        .note-editor .note-editable[data-centered=\"true\"] {
            text-align: center;
        }
        
        /* Styles pour les conteneurs d'emails dans l'éditeur */
        .email-template-container {
            background: linear-gradient(135deg, #8e44ad, #3498db);
            color: white;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        
        /* Style pour les variables */
        .variables-container {
            max-height: 300px;
            overflow-y: auto;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            padding: 10px;
        }
        
        .var-category {
            margin-bottom: 15px;
        }
        
        .var-category-title {
            font-weight: 600;
            margin-bottom: 8px;
            color: #333;
            border-bottom: 1px solid #eee;
            padding-bottom: 5px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 102
        yield "<div class=\"sidebar\">
    <h5 class=\"mb-4\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.title"), "html", null, true);
        yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
                <i class=\"fas fa-tachometer-alt me-2\"></i> ";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.dashboard"), "html", null, true);
        yield "
            </a>
        </li>
        ";
        // line 110
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "user", [], "any", false, false, false, 110), "isAdmin", [], "method", false, false, false, 110) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 110, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "user", [], "any", false, false, false, 110), "manage_users"], "method", false, false, false, 110)))) {
            // line 111
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 112
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
            yield "\">
                <i class=\"fas fa-users me-2\"></i> ";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.users"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 117
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117), "isAdmin", [], "method", false, false, false, 117) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 117, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117), "edit_email_templates"], "method", false, false, false, 117)))) {
            // line 118
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
            // line 119
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_templates");
            yield "\">
                <i class=\"fas fa-envelope me-2\"></i> ";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.email_templates"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 124
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124), "isAdmin", [], "method", false, false, false, 124) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 124, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124), "translate_content"], "method", false, false, false, 124)))) {
            // line 125
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 126
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_translations");
            yield "\">
                <i class=\"fas fa-language me-2\"></i> ";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.translations"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 131
        yield "    </ul>
    
    ";
        // line 133
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 134
            yield "    <h5 class=\"mb-3 mt-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_admin"), "html", null, true);
            yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 137
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_dashboard");
            yield "\">
                <i class=\"fas fa-shield-alt me-2\"></i> ";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_dashboard"), "html", null, true);
            yield "
            </a>
        </li>
    </ul>
    ";
        }
        // line 143
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 146
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 147
        yield "<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">Modifier le template ";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 149, $this->source); })()), "code", [], "any", false, false, false, 149), "html", null, true);
        yield "</h1>
        <div class=\"d-flex\">
            <a href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_templates");
        yield "\" class=\"btn btn-outline-secondary me-2\">
                <i class=\"fas fa-arrow-left me-1\"></i> ";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.back_btn"), "html", null, true);
        yield "
            </a>
            
            ";
        // line 155
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 155, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155), "preview_email_templates"], "method", false, false, false, 155))) {
            // line 156
            yield "            <button id=\"previewBtn\" class=\"btn btn-outline-primary me-2\">
                <i class=\"fas fa-eye me-1\"></i> ";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.preview_btn"), "html", null, true);
            yield "
            </button>
            ";
        }
        // line 160
        yield "            
            <form method=\"post\" action=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 161, $this->source); })()), "id", [], "any", false, false, false, 161)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.confirm_delete"), "html", null, true);
        yield "')\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 162, $this->source); })()), "id", [], "any", false, false, false, 162))), "html", null, true);
        yield "\">
                <button type=\"submit\" class=\"btn btn-outline-danger\">
                    <i class=\"fas fa-trash-alt me-1\"></i> ";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.delete_btn"), "html", null, true);
        yield "
                </button>
            </form>
        </div>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.form_title"), "html", null, true);
        yield "</h5>
        </div>
        <div class=\"card-body\">
            ";
        // line 175
        if ((array_key_exists("availableLocales", $context) && array_key_exists("existingLocales", $context))) {
            // line 176
            yield "            <div class=\"language-selector mb-4\">
                <strong class=\"me-2\">";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.languages"), "html", null, true);
            yield ":</strong>
                ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["availableLocales"]) || array_key_exists("availableLocales", $context) ? $context["availableLocales"] : (function () { throw new RuntimeError('Variable "availableLocales" does not exist.', 178, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
                // line 179
                yield "                    ";
                $context["localeClass"] = ((($context["loc"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 179, $this->source); })()), "locale", [], "any", false, false, false, 179))) ? ("active") : (""));
                // line 180
                yield "                    ";
                $context["localeText"] = ((($context["loc"] == "fr")) ? ("Français") : (((($context["loc"] == "nl")) ? ("Néerlandais") : (((($context["loc"] == "en")) ? ("Anglais") : ("Allemand"))))));
                // line 181
                yield "                    
                    ";
                // line 182
                if (CoreExtension::inFilter($context["loc"], (isset($context["existingLocales"]) || array_key_exists("existingLocales", $context) ? $context["existingLocales"] : (function () { throw new RuntimeError('Variable "existingLocales" does not exist.', 182, $this->source); })()))) {
                    // line 183
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_edit_locale", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 183, $this->source); })()), "id", [], "any", false, false, false, 183), "locale" => $context["loc"]]), "html", null, true);
                    yield "\" 
                           class=\"language-badge ";
                    // line 184
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["localeClass"]) || array_key_exists("localeClass", $context) ? $context["localeClass"] : (function () { throw new RuntimeError('Variable "localeClass" does not exist.', 184, $this->source); })()), "html", null, true);
                    yield "\" 
                           title=\"";
                    // line 185
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.switch_language"), "html", null, true);
                    yield "\">
                            ";
                    // line 186
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["localeText"]) || array_key_exists("localeText", $context) ? $context["localeText"] : (function () { throw new RuntimeError('Variable "localeText" does not exist.', 186, $this->source); })()), "html", null, true);
                    yield "
                        </a>
                    ";
                } else {
                    // line 189
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_edit_locale", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 189, $this->source); })()), "id", [], "any", false, false, false, 189), "locale" => $context["loc"]]), "html", null, true);
                    yield "\" 
                           class=\"language-badge ";
                    // line 190
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["localeClass"]) || array_key_exists("localeClass", $context) ? $context["localeClass"] : (function () { throw new RuntimeError('Variable "localeClass" does not exist.', 190, $this->source); })()), "html", null, true);
                    yield "\" 
                           title=\"";
                    // line 191
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.create_translation"), "html", null, true);
                    yield "\">
                            ";
                    // line 192
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["localeText"]) || array_key_exists("localeText", $context) ? $context["localeText"] : (function () { throw new RuntimeError('Variable "localeText" does not exist.', 192, $this->source); })()), "html", null, true);
                    yield " <i class=\"fas fa-plus fa-xs\"></i>
                        </a>
                    ";
                }
                // line 195
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['loc'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            yield "            </div>
            ";
        }
        // line 198
        yield "            
            ";
        // line 199
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), 'form_start');
        yield "
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        ";
        // line 202
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "code", [], "any", false, false, false, 202), 'row');
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 205
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "locale", [], "any", false, false, false, 205), 'row', ["attr" => ["id" => "locale-selector"]]);
        yield "
                    </div>
                </div>
                
                <div class=\"mb-3\">
                    ";
        // line 210
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "subject", [], "any", false, false, false, 210), 'row');
        yield "
                </div>
                
                <div class=\"mb-3\">
                    ";
        // line 214
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "htmlContent", [], "any", false, false, false, 214), 'label');
        yield "
                    ";
        // line 215
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "htmlContent", [], "any", false, false, false, 215), 'widget', ["attr" => ["class" => "html-editor form-control", "data-centered" => "true"]]);
        yield "
                    ";
        // line 216
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "htmlContent", [], "any", false, false, false, 216), 'help');
        yield "
                    ";
        // line 217
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "htmlContent", [], "any", false, false, false, 217), 'errors');
        yield "
                </div>
                
                <div class=\"mb-3\">
                    ";
        // line 221
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), "textContent", [], "any", false, false, false, 221), 'row');
        yield "
                </div>
                
                <div class=\"card mb-3\">
                    <div class=\"card-header\">
                        <h6 class=\"mb-0\">";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.title"), "html", null, true);
        yield "</h6>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"variables-container\">
                            <!-- Variables personnelles -->
                            <div class=\"var-category\">
                                <div class=\"var-category-title\">";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.categories.personal"), "Informations personnelles"), "html", null, true);
        yield "</div>
                                <div class=\"row\">
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"firstName\">
                                            ";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.firstName"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"lastName\">
                                            ";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.lastName"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"fullName\">
                                            ";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.fullName"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"email\">
                                            ";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.email"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"phoneNumber\">
                                            ";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.phoneNumber"), "Téléphone"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"birthDate\">
                                            ";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.birthDate"), "Date de naissance"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"age\">
                                            ";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.age"), "Âge"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"locale\">
                                            ";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.locale"), "Langue"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Variables d'adresse -->
                            <div class=\"var-category\">
                                <div class=\"var-category-title\">";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.categories.address"), "Adresse"), "html", null, true);
        yield "</div>
                                <div class=\"row\">
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"fullAddress\">
                                            ";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.fullAddress"), "Adresse complète"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"street\">
                                            ";
        // line 288
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.street"), "Rue"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"houseNumber\">
                                            ";
        // line 293
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.houseNumber"), "Numéro"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"boxNumber\">
                                            ";
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.boxNumber"), "Boîte"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"postalCode\">
                                            ";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.postalCode"), "Code postal"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"city\">
                                            ";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.city"), "Ville"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"country\">
                                            ";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.country"), "Pays"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Variables système -->
                            <div class=\"var-category\">
                                <div class=\"var-category-title\">";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.categories.system"), "Système"), "html", null, true);
        yield "</div>
                                <div class=\"row\">
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"domain\">
                                            ";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.domain"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"signedUrl\">
                                            ";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.signedUrl"), "URL de vérification"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"resetToken\">
                                            ";
        // line 335
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.resetToken"), "Token de réinitialisation"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"tokenLifetime\">
                                            ";
        // line 340
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.tokenLifetime"), "Durée de vie du token"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Variables spécifiques -->
                            <div class=\"var-category\">
                                <div class=\"var-category-title\">";
        // line 348
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.categories.specific"), "Variables spécifiques"), "html", null, true);
        yield "</div>
                                <div class=\"row\">
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"permissionChanges\">
                                            ";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.permissionChanges"), "Modifications des permissions"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"previousRole\">
                                            ";
        // line 357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.previousRole"), "Rôle précédent"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"newRole\">
                                            ";
        // line 362
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.newRole"), "Nouveau rôle"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div></div>
                </div>
                
                <div class=\"d-flex justify-content-end\">
                    <a href=\"";
        // line 371
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_templates");
        yield "\" class=\"btn btn-outline-secondary me-2\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.cancel_btn"), "html", null, true);
        yield "</a>
                    <button type=\"submit\" class=\"btn btn-gradient\">";
        // line 372
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.save_btn"), "html", null, true);
        yield "</button>
                </div>
            ";
        // line 374
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 374, $this->source); })()), 'form_end');
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
        // line 384
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
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.loading"), "html", null, true);
        yield "</p>
                </div>
                <iframe id=\"previewFrame\" style=\"display: none;\"></iframe>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 397
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

    // line 404
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 405
        yield "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js\"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize HTML editor
            \$('.html-editor').summernote({
                height: 300,
                placeholder: '";
        // line 412
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
        // line 424
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.editor.no_image_upload"), "html", null, true);
        yield "');
                    },
                    onInit: function() {
                        // Appliquer l'attribut data-centered à l'éditeur pour maintenir le centrage
                        const \$editable = \$(this).find('.note-editable');
                        \$editable.attr('data-centered', 'true');
                    }
                }
            });
            
            // Gestionnaire de changement de langue
            const localeSelector = document.getElementById('locale-selector');
            if (localeSelector) {
                localeSelector.addEventListener('change', function() {
                    const selectedLocale = this.value;
                    const templateId = '";
        // line 439
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 439, $this->source); })()), "id", [], "any", false, false, false, 439), "html", null, true);
        yield "';
                    // Rediriger vers la version du template dans la langue sélectionnée
                    window.location.href = '";
        // line 441
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_edit_locale", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 441, $this->source); })()), "id", [], "any", false, false, false, 441), "locale" => "__locale__"]), "html", null, true);
        yield "'.replace('__locale__', selectedLocale);
                });
            }
            
            // Variable buttons
            \$('.variable-btn').on('click', function() {
                const variable = \$(this).data('variable');
                \$('.html-editor').summernote('insertText', '";
        // line 448
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
        // line 468
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_preview", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 468, $this->source); })()), "id", [], "any", false, false, false, 468)]), "html", null, true);
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
        return array (  877 => 468,  852 => 448,  842 => 441,  837 => 439,  819 => 424,  804 => 412,  795 => 405,  785 => 404,  771 => 397,  763 => 392,  752 => 384,  739 => 374,  734 => 372,  728 => 371,  716 => 362,  708 => 357,  700 => 352,  693 => 348,  682 => 340,  674 => 335,  666 => 330,  658 => 325,  651 => 321,  640 => 313,  632 => 308,  624 => 303,  616 => 298,  608 => 293,  600 => 288,  592 => 283,  585 => 279,  574 => 271,  566 => 266,  558 => 261,  550 => 256,  542 => 251,  534 => 246,  526 => 241,  518 => 236,  511 => 232,  502 => 226,  494 => 221,  487 => 217,  483 => 216,  479 => 215,  475 => 214,  468 => 210,  460 => 205,  454 => 202,  448 => 199,  445 => 198,  441 => 196,  435 => 195,  429 => 192,  425 => 191,  421 => 190,  416 => 189,  410 => 186,  406 => 185,  402 => 184,  397 => 183,  395 => 182,  392 => 181,  389 => 180,  386 => 179,  382 => 178,  378 => 177,  375 => 176,  373 => 175,  367 => 172,  356 => 164,  351 => 162,  345 => 161,  342 => 160,  336 => 157,  333 => 156,  331 => 155,  325 => 152,  321 => 151,  316 => 149,  312 => 147,  302 => 146,  293 => 143,  285 => 138,  281 => 137,  274 => 134,  272 => 133,  268 => 131,  261 => 127,  257 => 126,  254 => 125,  251 => 124,  244 => 120,  240 => 119,  237 => 118,  234 => 117,  227 => 113,  223 => 112,  220 => 111,  218 => 110,  212 => 107,  208 => 106,  202 => 103,  199 => 102,  189 => 101,  88 => 6,  78 => 5,  61 => 3,  44 => 1,);
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
        
        /* Styles pour l'éditeur */
        .note-editor .note-editable {
            text-align: left; /* Le contenu de l'éditeur sera aligné à gauche par défaut */
        }
        
        /* Pour les contenus centrés spécifiquement */
        .note-editor .note-editable[data-centered=\"true\"] {
            text-align: center;
        }
        
        /* Styles pour les conteneurs d'emails dans l'éditeur */
        .email-template-container {
            background: linear-gradient(135deg, #8e44ad, #3498db);
            color: white;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        
        /* Style pour les variables */
        .variables-container {
            max-height: 300px;
            overflow-y: auto;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            padding: 10px;
        }
        
        .var-category {
            margin-bottom: 15px;
        }
        
        .var-category-title {
            font-weight: 600;
            margin-bottom: 8px;
            color: #333;
            border-bottom: 1px solid #eee;
            padding-bottom: 5px;
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
                    {{ form_widget(form.htmlContent, {'attr': {'class': 'html-editor form-control', 'data-centered': 'true'}}) }}
                    {{ form_help(form.htmlContent) }}
                    {{ form_errors(form.htmlContent) }}
                </div>
                
                <div class=\"mb-3\">
                    {{ form_row(form.textContent) }}
                </div>
                
                <div class=\"card mb-3\">
                    <div class=\"card-header\">
                        <h6 class=\"mb-0\">{{ 'admin.email_templates.variables.title'|trans }}</h6>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"variables-container\">
                            <!-- Variables personnelles -->
                            <div class=\"var-category\">
                                <div class=\"var-category-title\">{{ 'admin.email_templates.variables.categories.personal'|trans|default('Informations personnelles') }}</div>
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
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"phoneNumber\">
                                            {{ 'admin.email_templates.variables.phoneNumber'|trans|default('Téléphone') }}
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"birthDate\">
                                            {{ 'admin.email_templates.variables.birthDate'|trans|default('Date de naissance') }}
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"age\">
                                            {{ 'admin.email_templates.variables.age'|trans|default('Âge') }}
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"locale\">
                                            {{ 'admin.email_templates.variables.locale'|trans|default('Langue') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Variables d'adresse -->
                            <div class=\"var-category\">
                                <div class=\"var-category-title\">{{ 'admin.email_templates.variables.categories.address'|trans|default('Adresse') }}</div>
                                <div class=\"row\">
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"fullAddress\">
                                            {{ 'admin.email_templates.variables.fullAddress'|trans|default('Adresse complète') }}
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"street\">
                                            {{ 'admin.email_templates.variables.street'|trans|default('Rue') }}
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"houseNumber\">
                                            {{ 'admin.email_templates.variables.houseNumber'|trans|default('Numéro') }}
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"boxNumber\">
                                            {{ 'admin.email_templates.variables.boxNumber'|trans|default('Boîte') }}
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"postalCode\">
                                            {{ 'admin.email_templates.variables.postalCode'|trans|default('Code postal') }}
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"city\">
                                            {{ 'admin.email_templates.variables.city'|trans|default('Ville') }}
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"country\">
                                            {{ 'admin.email_templates.variables.country'|trans|default('Pays') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Variables système -->
                            <div class=\"var-category\">
                                <div class=\"var-category-title\">{{ 'admin.email_templates.variables.categories.system'|trans|default('Système') }}</div>
                                <div class=\"row\">
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"domain\">
                                            {{ 'admin.email_templates.variables.domain'|trans }}
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"signedUrl\">
                                            {{ 'admin.email_templates.variables.signedUrl'|trans|default('URL de vérification') }}
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"resetToken\">
                                            {{ 'admin.email_templates.variables.resetToken'|trans|default('Token de réinitialisation') }}
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"tokenLifetime\">
                                            {{ 'admin.email_templates.variables.tokenLifetime'|trans|default('Durée de vie du token') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Variables spécifiques -->
                            <div class=\"var-category\">
                                <div class=\"var-category-title\">{{ 'admin.email_templates.variables.categories.specific'|trans|default('Variables spécifiques') }}</div>
                                <div class=\"row\">
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"permissionChanges\">
                                            {{ 'admin.email_templates.variables.permissionChanges'|trans|default('Modifications des permissions') }}
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"previousRole\">
                                            {{ 'admin.email_templates.variables.previousRole'|trans|default('Rôle précédent') }}
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"newRole\">
                                            {{ 'admin.email_templates.variables.newRole'|trans|default('Nouveau rôle') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div></div>
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
                    },
                    onInit: function() {
                        // Appliquer l'attribut data-centered à l'éditeur pour maintenir le centrage
                        const \$editable = \$(this).find('.note-editable');
                        \$editable.attr('data-centered', 'true');
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
