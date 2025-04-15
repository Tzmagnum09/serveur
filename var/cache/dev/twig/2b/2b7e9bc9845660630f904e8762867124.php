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

/* admin/email_templates/new.html.twig */
class __TwigTemplate_4e5beed8e9623cb7fa870245155c29d6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/email_templates/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/email_templates/new.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_new.title"), "html", null, true);
        
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
        .email-template-container {
            background: linear-gradient(135deg, #8e44ad, #3498db);
            color: white;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        
        /* Styles pour l'éditeur */
        .note-editor .note-editable {
            text-align: left; /* Le contenu de l'éditeur sera aligné à gauche par défaut */
        }
        
        /* Pour les contenus centrés spécifiquement */
        .note-editor .note-editable[data-centered=\"true\"] {
            text-align: center;
        }
        
        /* Style pour les titres dans l'éditeur */
        .note-editor .email-template-container h1,
        .note-editor .email-template-container h2,
        .note-editor .email-template-container h3 {
            text-align: center !important;
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

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 58
        yield "<div class=\"sidebar\">
    <h5 class=\"mb-4\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.title"), "html", null, true);
        yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
                <i class=\"fas fa-tachometer-alt me-2\"></i> ";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.dashboard"), "html", null, true);
        yield "
            </a>
        </li>
        ";
        // line 66
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "isAdmin", [], "method", false, false, false, 66) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 66, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "manage_users"], "method", false, false, false, 66)))) {
            // line 67
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 68
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
            yield "\">
                <i class=\"fas fa-users me-2\"></i> ";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.users"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 73
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "isAdmin", [], "method", false, false, false, 73) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 73, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "edit_email_templates"], "method", false, false, false, 73)))) {
            // line 74
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
            // line 75
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_templates");
            yield "\">
                <i class=\"fas fa-envelope me-2\"></i> ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.email_templates"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 80
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80), "isAdmin", [], "method", false, false, false, 80) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 80, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80), "translate_content"], "method", false, false, false, 80)))) {
            // line 81
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 82
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_translations");
            yield "\">
                <i class=\"fas fa-language me-2\"></i> ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.translations"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 87
        yield "    </ul>
    
    ";
        // line 89
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 90
            yield "    <h5 class=\"mb-3 mt-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_admin"), "html", null, true);
            yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 93
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_dashboard");
            yield "\">
                <i class=\"fas fa-shield-alt me-2\"></i> ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_dashboard"), "html", null, true);
            yield "
            </a>
        </li>
    </ul>
    ";
        }
        // line 99
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 103
        yield "<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_new.title"), "html", null, true);
        yield "</h1>
        <a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_templates");
        yield "\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-1\"></i> ";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_new.back_btn"), "html", null, true);
        yield "
        </a>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_new.form_title"), "html", null, true);
        yield "</h5>
        </div>
        <div class=\"card-body\">
            ";
        // line 116
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), 'form_start');
        yield "
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "code", [], "any", false, false, false, 119), 'row');
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "locale", [], "any", false, false, false, 122), 'row');
        yield "
                    </div>
                </div>
                
                <div class=\"mb-3\">
                    ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "subject", [], "any", false, false, false, 127), 'row');
        yield "
                </div>
                
                <div class=\"mb-3\">
                    ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "htmlContent", [], "any", false, false, false, 131), 'label');
        yield "
                    ";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "htmlContent", [], "any", false, false, false, 132), 'widget', ["attr" => ["class" => "html-editor form-control"]]);
        yield "
                    ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "htmlContent", [], "any", false, false, false, 133), 'help');
        yield "
                    ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "htmlContent", [], "any", false, false, false, 134), 'errors');
        yield "
                </div>
                
                <div class=\"mb-3\">
                    ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "textContent", [], "any", false, false, false, 138), 'row');
        yield "
                </div>
                
                <div class=\"card mb-3\">
                    <div class=\"card-header\">
                        <h6 class=\"mb-0\">";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.title"), "html", null, true);
        yield "</h6>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"variables-container\">
                            <!-- Variables personnelles -->
                            <div class=\"var-category\">
                                <div class=\"var-category-title\">";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.categories.personal"), "Informations personnelles"), "html", null, true);
        yield "</div>
                                <div class=\"row\">
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"firstName\">
                                            ";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.firstName"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"lastName\">
                                            ";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.lastName"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"fullName\">
                                            ";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.fullName"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"email\">
                                            ";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.email"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"phoneNumber\">
                                            ";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.phoneNumber"), "Téléphone"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"birthDate\">
                                            ";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.birthDate"), "Date de naissance"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"age\">
                                            ";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.age"), "Âge"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"locale\">
                                            ";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.locale"), "Langue"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Variables d'adresse -->
                            <div class=\"var-category\">
                                <div class=\"var-category-title\">";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.categories.address"), "Adresse"), "html", null, true);
        yield "</div>
                                <div class=\"row\">
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"fullAddress\">
                                            ";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.fullAddress"), "Adresse complète"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"street\">
                                            ";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.street"), "Rue"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"houseNumber\">
                                            ";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.houseNumber"), "Numéro"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"boxNumber\">
                                            ";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.boxNumber"), "Boîte"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"postalCode\">
                                            ";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.postalCode"), "Code postal"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"city\">
                                            ";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.city"), "Ville"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"country\">
                                            ";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.country"), "Pays"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Variables système -->
                            <div class=\"var-category\">
                                <div class=\"var-category-title\">";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.categories.system"), "Système"), "html", null, true);
        yield "</div>
                                <div class=\"row\">
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"domain\">
                                            ";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.domain"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"signedUrl\">
                                            ";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.signedUrl"), "URL de vérification"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"resetToken\">
                                            ";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.resetToken"), "Token de réinitialisation"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"tokenLifetime\">
                                            ";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.tokenLifetime"), "Durée de vie du token"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Variables spécifiques -->
                            <div class=\"var-category\">
                                <div class=\"var-category-title\">";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.categories.specific"), "Variables spécifiques"), "html", null, true);
        yield "</div>
                                <div class=\"row\">
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"permissionChanges\">
                                            ";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.permissionChanges"), "Modifications des permissions"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"previousRole\">
                                            ";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.previousRole"), "Rôle précédent"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                    <div class=\"col-md-4 mb-2\">
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"newRole\">
                                            ";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.newRole"), "Nouveau rôle"), "html", null, true);
        yield "
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"d-flex justify-content-end mt-3\">
                    <a href=\"";
        // line 289
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_templates");
        yield "\" class=\"btn btn-outline-secondary me-2\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_new.cancel_btn"), "html", null, true);
        yield "</a>
                    <button type=\"submit\" class=\"btn btn-gradient\">";
        // line 290
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_new.save_btn"), "html", null, true);
        yield "</button>
                </div>
            ";
        // line 292
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 292, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 298
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 299
        yield "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js\"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize HTML editor
            \$('.html-editor').summernote({
                height: 300,
                placeholder: `<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Nouveau template d'email</title>
<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #333;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
    }
    .header {
        background: linear-gradient(135deg, #8e44ad, #3498db);
        color: white;
        padding: 20px;
        text-align: center;
    }
    .content {
        padding: 20px;
        background-color: #f9f9f9;
    }
    .button {
        display: inline-block;
        background: linear-gradient(135deg, #8e44ad, #3498db);
        color: white;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 5px;
        margin-top: 20px;
    }
    .footer {
        text-align: center;
        font-size: 12px;
        color: #777;
        margin-top: 20px;
    }
</style>

<div class=\"container\">
    <div class=\"header\">
        <h1>Nouveau template d'email</h1>
    </div>
    <div class=\"content\">
        <p>Bonjour,</p>
        
        <p>Text 1.</p>
        <p>Text 2.</p>
        
        <p style=\"text-align: center;\">
            <a href=\"\" class=\"button\">Text bouton</a>
        </p>
        
        <p>Si le bouton ne fonctionne pas, vous pouvez copier et coller le lien suivant dans votre navigateur :</p>
        <p></p>
        
        <p>Ce lien expirera dans X heures.</p>
        
        <p>Text3.</p>
        
        <p>Cordialement,<br>L'équipe Dmqode.be.</p>
    </div>
    <div class=\"footer\">
        <p>Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
    </div>
</div>`,
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
        // line 387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.editor.no_image_upload"), "html", null, true);
        yield "');
                    },
                    onInit: function() {
                        // Mettre le contenu de l'éditeur au centre après initialisation
                        const \$editable = \$(this).find('.note-editable');
                        
                        // Ajouter une classe CSS pour le contenu centré
                        \$editable.attr('data-centered', 'true');
                        
                        // Si l'éditeur est vide, ajouter un template par défaut centré
                        if (\$editable.html().trim() === '') {
                            \$editable.html(`
                                <div class=\"email-template-container\">
                                    <h1>Nouveau template d'email</h1>
                                </div>
                                <p>Bonjour,</p>
                                <p>Text 1.</p>
                            `);
                        }
                    }
                }
            });
            
            // Variable buttons
            \$('.variable-btn').on('click', function() {
                const variable = \$(this).data('variable');
                \$('.html-editor').summernote('insertText', '";
        // line 413
        yield "{{";
        yield " ' + variable + ' ";
        yield "}}";
        yield "');
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
        return "admin/email_templates/new.html.twig";
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
        return array (  729 => 413,  700 => 387,  610 => 299,  600 => 298,  587 => 292,  582 => 290,  576 => 289,  563 => 279,  555 => 274,  547 => 269,  540 => 265,  529 => 257,  521 => 252,  513 => 247,  505 => 242,  498 => 238,  487 => 230,  479 => 225,  471 => 220,  463 => 215,  455 => 210,  447 => 205,  439 => 200,  432 => 196,  421 => 188,  413 => 183,  405 => 178,  397 => 173,  389 => 168,  381 => 163,  373 => 158,  365 => 153,  358 => 149,  349 => 143,  341 => 138,  334 => 134,  330 => 133,  326 => 132,  322 => 131,  315 => 127,  307 => 122,  301 => 119,  295 => 116,  289 => 113,  280 => 107,  276 => 106,  272 => 105,  268 => 103,  258 => 102,  249 => 99,  241 => 94,  237 => 93,  230 => 90,  228 => 89,  224 => 87,  217 => 83,  213 => 82,  210 => 81,  207 => 80,  200 => 76,  196 => 75,  193 => 74,  190 => 73,  183 => 69,  179 => 68,  176 => 67,  174 => 66,  168 => 63,  164 => 62,  158 => 59,  155 => 58,  145 => 57,  88 => 6,  78 => 5,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'admin.email_template_new.title'|trans }}{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css\">
    <style>
        .email-template-container {
            background: linear-gradient(135deg, #8e44ad, #3498db);
            color: white;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        
        /* Styles pour l'éditeur */
        .note-editor .note-editable {
            text-align: left; /* Le contenu de l'éditeur sera aligné à gauche par défaut */
        }
        
        /* Pour les contenus centrés spécifiquement */
        .note-editor .note-editable[data-centered=\"true\"] {
            text-align: center;
        }
        
        /* Style pour les titres dans l'éditeur */
        .note-editor .email-template-container h1,
        .note-editor .email-template-container h2,
        .note-editor .email-template-container h3 {
            text-align: center !important;
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
        <h1 class=\"h3\">{{ 'admin.email_template_new.title'|trans }}</h1>
        <a href=\"{{ path('app_admin_email_templates') }}\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-1\"></i> {{ 'admin.email_template_new.back_btn'|trans }}
        </a>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">{{ 'admin.email_template_new.form_title'|trans }}</h5>
        </div>
        <div class=\"card-body\">
            {{ form_start(form) }}
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        {{ form_row(form.code) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(form.locale) }}
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
                        </div>
                    </div>
                </div>
                
                <div class=\"d-flex justify-content-end mt-3\">
                    <a href=\"{{ path('app_admin_email_templates') }}\" class=\"btn btn-outline-secondary me-2\">{{ 'admin.email_template_new.cancel_btn'|trans }}</a>
                    <button type=\"submit\" class=\"btn btn-gradient\">{{ 'admin.email_template_new.save_btn'|trans }}</button>
                </div>
            {{ form_end(form) }}
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
                placeholder: `<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Nouveau template d'email</title>
<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #333;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
    }
    .header {
        background: linear-gradient(135deg, #8e44ad, #3498db);
        color: white;
        padding: 20px;
        text-align: center;
    }
    .content {
        padding: 20px;
        background-color: #f9f9f9;
    }
    .button {
        display: inline-block;
        background: linear-gradient(135deg, #8e44ad, #3498db);
        color: white;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 5px;
        margin-top: 20px;
    }
    .footer {
        text-align: center;
        font-size: 12px;
        color: #777;
        margin-top: 20px;
    }
</style>

<div class=\"container\">
    <div class=\"header\">
        <h1>Nouveau template d'email</h1>
    </div>
    <div class=\"content\">
        <p>Bonjour,</p>
        
        <p>Text 1.</p>
        <p>Text 2.</p>
        
        <p style=\"text-align: center;\">
            <a href=\"\" class=\"button\">Text bouton</a>
        </p>
        
        <p>Si le bouton ne fonctionne pas, vous pouvez copier et coller le lien suivant dans votre navigateur :</p>
        <p></p>
        
        <p>Ce lien expirera dans X heures.</p>
        
        <p>Text3.</p>
        
        <p>Cordialement,<br>L'équipe Dmqode.be.</p>
    </div>
    <div class=\"footer\">
        <p>Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
    </div>
</div>`,
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
                        // Mettre le contenu de l'éditeur au centre après initialisation
                        const \$editable = \$(this).find('.note-editable');
                        
                        // Ajouter une classe CSS pour le contenu centré
                        \$editable.attr('data-centered', 'true');
                        
                        // Si l'éditeur est vide, ajouter un template par défaut centré
                        if (\$editable.html().trim() === '') {
                            \$editable.html(`
                                <div class=\"email-template-container\">
                                    <h1>Nouveau template d'email</h1>
                                </div>
                                <p>Bonjour,</p>
                                <p>Text 1.</p>
                            `);
                        }
                    }
                }
            });
            
            // Variable buttons
            \$('.variable-btn').on('click', function() {
                const variable = \$(this).data('variable');
                \$('.html-editor').summernote('insertText', '{{ '{{' }} ' + variable + ' {{ '}}' }}');
            });
        });
    </script>
{% endblock %}", "admin/email_templates/new.html.twig", "/var/www/serveur/templates/admin/email_templates/new.html.twig");
    }
}
