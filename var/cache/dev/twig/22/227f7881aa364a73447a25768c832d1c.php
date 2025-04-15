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
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 81
        yield "<div class=\"sidebar\">
    <h5 class=\"mb-4\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.title"), "html", null, true);
        yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
                <i class=\"fas fa-tachometer-alt me-2\"></i> ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.dashboard"), "html", null, true);
        yield "
            </a>
        </li>
        ";
        // line 89
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "isAdmin", [], "method", false, false, false, 89) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 89, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "manage_users"], "method", false, false, false, 89)))) {
            // line 90
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 91
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
            yield "\">
                <i class=\"fas fa-users me-2\"></i> ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.users"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 96
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "user", [], "any", false, false, false, 96), "isAdmin", [], "method", false, false, false, 96) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 96, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "user", [], "any", false, false, false, 96), "edit_email_templates"], "method", false, false, false, 96)))) {
            // line 97
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
            // line 98
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_templates");
            yield "\">
                <i class=\"fas fa-envelope me-2\"></i> ";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.email_templates"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 103
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "isAdmin", [], "method", false, false, false, 103) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 103, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "translate_content"], "method", false, false, false, 103)))) {
            // line 104
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 105
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_translations");
            yield "\">
                <i class=\"fas fa-language me-2\"></i> ";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.translations"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 110
        yield "    </ul>
    
    ";
        // line 112
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 113
            yield "    <h5 class=\"mb-3 mt-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_admin"), "html", null, true);
            yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 116
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_dashboard");
            yield "\">
                <i class=\"fas fa-shield-alt me-2\"></i> ";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_dashboard"), "html", null, true);
            yield "
            </a>
        </li>
    </ul>
    ";
        }
        // line 122
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 125
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 126
        yield "<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">Modifier le template ";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 128, $this->source); })()), "code", [], "any", false, false, false, 128), "html", null, true);
        yield "</h1>
        <div class=\"d-flex\">
            <a href=\"";
        // line 130
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_templates");
        yield "\" class=\"btn btn-outline-secondary me-2\">
                <i class=\"fas fa-arrow-left me-1\"></i> ";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.back_btn"), "html", null, true);
        yield "
            </a>
            
            ";
        // line 134
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 134, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "user", [], "any", false, false, false, 134), "preview_email_templates"], "method", false, false, false, 134))) {
            // line 135
            yield "            <button id=\"previewBtn\" class=\"btn btn-outline-primary me-2\">
                <i class=\"fas fa-eye me-1\"></i> ";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.preview_btn"), "html", null, true);
            yield "
            </button>
            ";
        }
        // line 139
        yield "            
            <form method=\"post\" action=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 140, $this->source); })()), "id", [], "any", false, false, false, 140)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.confirm_delete"), "html", null, true);
        yield "')\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 141, $this->source); })()), "id", [], "any", false, false, false, 141))), "html", null, true);
        yield "\">
                <button type=\"submit\" class=\"btn btn-outline-danger\">
                    <i class=\"fas fa-trash-alt me-1\"></i> ";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.delete_btn"), "html", null, true);
        yield "
                </button>
            </form>
        </div>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.form_title"), "html", null, true);
        yield "</h5>
        </div>
        <div class=\"card-body\">
            ";
        // line 154
        if ((array_key_exists("availableLocales", $context) && array_key_exists("existingLocales", $context))) {
            // line 155
            yield "            <div class=\"language-selector mb-4\">
                <strong class=\"me-2\">";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.languages"), "html", null, true);
            yield ":</strong>
                ";
            // line 157
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["availableLocales"]) || array_key_exists("availableLocales", $context) ? $context["availableLocales"] : (function () { throw new RuntimeError('Variable "availableLocales" does not exist.', 157, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
                // line 158
                yield "                    ";
                $context["localeClass"] = ((($context["loc"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 158, $this->source); })()), "locale", [], "any", false, false, false, 158))) ? ("active") : (""));
                // line 159
                yield "                    ";
                $context["localeText"] = ((($context["loc"] == "fr")) ? ("Français") : (((($context["loc"] == "nl")) ? ("Néerlandais") : (((($context["loc"] == "en")) ? ("Anglais") : ("Allemand"))))));
                // line 160
                yield "                    
                    ";
                // line 161
                if (CoreExtension::inFilter($context["loc"], (isset($context["existingLocales"]) || array_key_exists("existingLocales", $context) ? $context["existingLocales"] : (function () { throw new RuntimeError('Variable "existingLocales" does not exist.', 161, $this->source); })()))) {
                    // line 162
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_edit_locale", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 162, $this->source); })()), "id", [], "any", false, false, false, 162), "locale" => $context["loc"]]), "html", null, true);
                    yield "\" 
                           class=\"language-badge ";
                    // line 163
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["localeClass"]) || array_key_exists("localeClass", $context) ? $context["localeClass"] : (function () { throw new RuntimeError('Variable "localeClass" does not exist.', 163, $this->source); })()), "html", null, true);
                    yield "\" 
                           title=\"";
                    // line 164
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.switch_language"), "html", null, true);
                    yield "\">
                            ";
                    // line 165
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["localeText"]) || array_key_exists("localeText", $context) ? $context["localeText"] : (function () { throw new RuntimeError('Variable "localeText" does not exist.', 165, $this->source); })()), "html", null, true);
                    yield "
                        </a>
                    ";
                } else {
                    // line 168
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_edit_locale", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 168, $this->source); })()), "id", [], "any", false, false, false, 168), "locale" => $context["loc"]]), "html", null, true);
                    yield "\" 
                           class=\"language-badge ";
                    // line 169
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["localeClass"]) || array_key_exists("localeClass", $context) ? $context["localeClass"] : (function () { throw new RuntimeError('Variable "localeClass" does not exist.', 169, $this->source); })()), "html", null, true);
                    yield "\" 
                           title=\"";
                    // line 170
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.create_translation"), "html", null, true);
                    yield "\">
                            ";
                    // line 171
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["localeText"]) || array_key_exists("localeText", $context) ? $context["localeText"] : (function () { throw new RuntimeError('Variable "localeText" does not exist.', 171, $this->source); })()), "html", null, true);
                    yield " <i class=\"fas fa-plus fa-xs\"></i>
                        </a>
                    ";
                }
                // line 174
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['loc'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            yield "            </div>
            ";
        }
        // line 177
        yield "            
            ";
        // line 178
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), 'form_start');
        yield "
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        ";
        // line 181
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "code", [], "any", false, false, false, 181), 'row');
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 184
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "locale", [], "any", false, false, false, 184), 'row', ["attr" => ["id" => "locale-selector"]]);
        yield "
                    </div>
                </div>
                
                <div class=\"mb-3\">
                    ";
        // line 189
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "subject", [], "any", false, false, false, 189), 'row');
        yield "
                </div>
                
                <div class=\"mb-3\">
                    ";
        // line 193
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "htmlContent", [], "any", false, false, false, 193), 'label');
        yield "
                    ";
        // line 194
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "htmlContent", [], "any", false, false, false, 194), 'widget', ["attr" => ["class" => "html-editor form-control", "data-centered" => "true"]]);
        yield "
                    ";
        // line 195
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "htmlContent", [], "any", false, false, false, 195), 'help');
        yield "
                    ";
        // line 196
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "htmlContent", [], "any", false, false, false, 196), 'errors');
        yield "
                </div>
                
                <div class=\"mb-3\">
                    ";
        // line 200
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "textContent", [], "any", false, false, false, 200), 'row');
        yield "
                </div>
                
                <div class=\"card mb-3\">
                    <div class=\"card-header\">
                        <h6 class=\"mb-0\">";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.title"), "html", null, true);
        yield "</h6>
                    </div>
                    <div class=\"card-body\">
                        <h6 class=\"mb-2\">";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.user_info"), "html", null, true);
        yield "</h6>
                        <div class=\"row mb-3\">
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"firstName\">
                                    ";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.firstName"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"lastName\">
                                    ";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.lastName"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"fullName\">
                                    ";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.fullName"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"email\">
                                    ";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.email"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"username\">
                                    ";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.username"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"phoneNumber\">
                                    ";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.phoneNumber"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"birthDate\">
                                    ";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.birthDate"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"age\">
                                    ";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.age"), "html", null, true);
        yield "
                                </button>
                            </div>
                        </div>
                        
                        <h6 class=\"mb-2\">";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.address"), "html", null, true);
        yield "</h6>
                        <div class=\"row mb-3\">
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"street\">
                                    ";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.street"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"houseNumber\">
                                    ";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.houseNumber"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"boxNumber\">
                                    ";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.boxNumber"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"postalCode\">
                                    ";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.postalCode"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"city\">
                                    ";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.city"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"country\">
                                    ";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.country"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"fullAddress\">
                                    ";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.fullAddress"), "html", null, true);
        yield "
                                </button>
                            </div>
                        </div>
                        
                        <h6 class=\"mb-2\">";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.system"), "html", null, true);
        yield "</h6>
                        <div class=\"row mb-3\">
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"locale\">
                                    ";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.locale"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"domain\">
                                    ";
        // line 300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.domain"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"createdAt\">
                                    ";
        // line 305
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.createdAt"), "html", null, true);
        yield "
                                </button>
                            </div>
                        </div>
                        
                        <h6 class=\"mb-2\">";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.specific"), "html", null, true);
        yield "</h6>
                        <div class=\"row\">
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"signedUrl\">
                                    ";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.signedUrl"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"resetToken\">
                                    ";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.resetToken"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"tokenLifetime\">
                                    ";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.tokenLifetime"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"previousRole\">
                                    ";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.previousRole"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"newRole\">
                                    ";
        // line 334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.newRole"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"permissionChanges\">
                                    ";
        // line 339
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.permissionChanges"), "html", null, true);
        yield "
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"d-flex justify-content-end\">
                    <a href=\"";
        // line 347
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_templates");
        yield "\" class=\"btn btn-outline-secondary me-2\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.cancel_btn"), "html", null, true);
        yield "</a>
                    <button type=\"submit\" class=\"btn btn-gradient\">";
        // line 348
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.save_btn"), "html", null, true);
        yield "</button>
                </div>
            ";
        // line 350
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 350, $this->source); })()), 'form_end');
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
        // line 360
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
        // line 368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_edit.loading"), "html", null, true);
        yield "</p>
                </div>
                <iframe id=\"previewFrame\" style=\"display: none;\"></iframe>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 373
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

    // line 380
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 381
        yield "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js\"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize HTML editor
            \$('.html-editor').summernote({
                height: 300,
                placeholder: '";
        // line 388
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
        // line 400
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
        // line 415
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 415, $this->source); })()), "id", [], "any", false, false, false, 415), "html", null, true);
        yield "';
                    // Rediriger vers la version du template dans la langue sélectionnée
                    window.location.href = '";
        // line 417
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_edit_locale", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 417, $this->source); })()), "id", [], "any", false, false, false, 417), "locale" => "__locale__"]), "html", null, true);
        yield "'.replace('__locale__', selectedLocale);
                });
            }
            
            // Variable buttons
            \$('.variable-btn').on('click', function() {
                const variable = \$(this).data('variable');
                \$('.html-editor').summernote('insertText', '";
        // line 424
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
        // line 444
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_preview", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 444, $this->source); })()), "id", [], "any", false, false, false, 444)]), "html", null, true);
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
        return array (  859 => 444,  834 => 424,  824 => 417,  819 => 415,  801 => 400,  786 => 388,  777 => 381,  767 => 380,  753 => 373,  745 => 368,  734 => 360,  721 => 350,  716 => 348,  710 => 347,  699 => 339,  691 => 334,  683 => 329,  675 => 324,  667 => 319,  659 => 314,  652 => 310,  644 => 305,  636 => 300,  628 => 295,  621 => 291,  613 => 286,  605 => 281,  597 => 276,  589 => 271,  581 => 266,  573 => 261,  565 => 256,  558 => 252,  550 => 247,  542 => 242,  534 => 237,  526 => 232,  518 => 227,  510 => 222,  502 => 217,  494 => 212,  487 => 208,  481 => 205,  473 => 200,  466 => 196,  462 => 195,  458 => 194,  454 => 193,  447 => 189,  439 => 184,  433 => 181,  427 => 178,  424 => 177,  420 => 175,  414 => 174,  408 => 171,  404 => 170,  400 => 169,  395 => 168,  389 => 165,  385 => 164,  381 => 163,  376 => 162,  374 => 161,  371 => 160,  368 => 159,  365 => 158,  361 => 157,  357 => 156,  354 => 155,  352 => 154,  346 => 151,  335 => 143,  330 => 141,  324 => 140,  321 => 139,  315 => 136,  312 => 135,  310 => 134,  304 => 131,  300 => 130,  295 => 128,  291 => 126,  281 => 125,  272 => 122,  264 => 117,  260 => 116,  253 => 113,  251 => 112,  247 => 110,  240 => 106,  236 => 105,  233 => 104,  230 => 103,  223 => 99,  219 => 98,  216 => 97,  213 => 96,  206 => 92,  202 => 91,  199 => 90,  197 => 89,  191 => 86,  187 => 85,  181 => 82,  178 => 81,  168 => 80,  88 => 6,  78 => 5,  61 => 3,  44 => 1,);
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
                        <h6 class=\"mb-2\">{{ 'admin.email_templates.variables.user_info'|trans }}</h6>
                        <div class=\"row mb-3\">
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"firstName\">
                                    {{ 'admin.email_templates.variables.firstName'|trans }}
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"lastName\">
                                    {{ 'admin.email_templates.variables.lastName'|trans }}
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"fullName\">
                                    {{ 'admin.email_templates.variables.fullName'|trans }}
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"email\">
                                    {{ 'admin.email_templates.variables.email'|trans }}
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"username\">
                                    {{ 'admin.email_templates.variables.username'|trans }}
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"phoneNumber\">
                                    {{ 'admin.email_templates.variables.phoneNumber'|trans }}
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"birthDate\">
                                    {{ 'admin.email_templates.variables.birthDate'|trans }}
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"age\">
                                    {{ 'admin.email_templates.variables.age'|trans }}
                                </button>
                            </div>
                        </div>
                        
                        <h6 class=\"mb-2\">{{ 'admin.email_templates.variables.address'|trans }}</h6>
                        <div class=\"row mb-3\">
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"street\">
                                    {{ 'admin.email_templates.variables.street'|trans }}
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"houseNumber\">
                                    {{ 'admin.email_templates.variables.houseNumber'|trans }}
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"boxNumber\">
                                    {{ 'admin.email_templates.variables.boxNumber'|trans }}
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"postalCode\">
                                    {{ 'admin.email_templates.variables.postalCode'|trans }}
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"city\">
                                    {{ 'admin.email_templates.variables.city'|trans }}
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"country\">
                                    {{ 'admin.email_templates.variables.country'|trans }}
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"fullAddress\">
                                    {{ 'admin.email_templates.variables.fullAddress'|trans }}
                                </button>
                            </div>
                        </div>
                        
                        <h6 class=\"mb-2\">{{ 'admin.email_templates.variables.system'|trans }}</h6>
                        <div class=\"row mb-3\">
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"locale\">
                                    {{ 'admin.email_templates.variables.locale'|trans }}
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"domain\">
                                    {{ 'admin.email_templates.variables.domain'|trans }}
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"createdAt\">
                                    {{ 'admin.email_templates.variables.createdAt'|trans }}
                                </button>
                            </div>
                        </div>
                        
                        <h6 class=\"mb-2\">{{ 'admin.email_templates.variables.specific'|trans }}</h6>
                        <div class=\"row\">
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"signedUrl\">
                                    {{ 'admin.email_templates.variables.signedUrl'|trans }}
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"resetToken\">
                                    {{ 'admin.email_templates.variables.resetToken'|trans }}
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"tokenLifetime\">
                                    {{ 'admin.email_templates.variables.tokenLifetime'|trans }}
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"previousRole\">
                                    {{ 'admin.email_templates.variables.previousRole'|trans }}
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"newRole\">
                                    {{ 'admin.email_templates.variables.newRole'|trans }}
                                </button>
                            </div>
                            <div class=\"col-md-3 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"permissionChanges\">
                                    {{ 'admin.email_templates.variables.permissionChanges'|trans }}
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
