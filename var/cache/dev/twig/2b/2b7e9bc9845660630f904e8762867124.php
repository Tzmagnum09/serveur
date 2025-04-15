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
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 37
        yield "<div class=\"sidebar\">
    <h5 class=\"mb-4\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.title"), "html", null, true);
        yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
                <i class=\"fas fa-tachometer-alt me-2\"></i> ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.dashboard"), "html", null, true);
        yield "
            </a>
        </li>
        ";
        // line 45
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "isAdmin", [], "method", false, false, false, 45) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 45, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "manage_users"], "method", false, false, false, 45)))) {
            // line 46
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 47
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
            yield "\">
                <i class=\"fas fa-users me-2\"></i> ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.users"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 52
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "isAdmin", [], "method", false, false, false, 52) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 52, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "edit_email_templates"], "method", false, false, false, 52)))) {
            // line 53
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
            // line 54
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_templates");
            yield "\">
                <i class=\"fas fa-envelope me-2\"></i> ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.email_templates"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 59
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "isAdmin", [], "method", false, false, false, 59) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 59, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "translate_content"], "method", false, false, false, 59)))) {
            // line 60
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 61
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_translations");
            yield "\">
                <i class=\"fas fa-language me-2\"></i> ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.translations"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 66
        yield "    </ul>
    
    ";
        // line 68
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 69
            yield "    <h5 class=\"mb-3 mt-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_admin"), "html", null, true);
            yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 72
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_dashboard");
            yield "\">
                <i class=\"fas fa-shield-alt me-2\"></i> ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_dashboard"), "html", null, true);
            yield "
            </a>
        </li>
    </ul>
    ";
        }
        // line 78
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 82
        yield "<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_new.title"), "html", null, true);
        yield "</h1>
        <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_templates");
        yield "\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-1\"></i> ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_new.back_btn"), "html", null, true);
        yield "
        </a>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_new.form_title"), "html", null, true);
        yield "</h5>
        </div>
        <div class=\"card-body\">
            ";
        // line 95
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'form_start');
        yield "
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "code", [], "any", false, false, false, 98), 'row');
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "locale", [], "any", false, false, false, 101), 'row');
        yield "
                    </div>
                </div>
                
                <div class=\"mb-3\">
                    ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "subject", [], "any", false, false, false, 106), 'row');
        yield "
                </div>
                
                <div class=\"mb-3\">
                    ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "htmlContent", [], "any", false, false, false, 110), 'label');
        yield "
                    ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "htmlContent", [], "any", false, false, false, 111), 'widget', ["attr" => ["class" => "html-editor form-control"]]);
        yield "
                    ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "htmlContent", [], "any", false, false, false, 112), 'help');
        yield "
                    ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "htmlContent", [], "any", false, false, false, 113), 'errors');
        yield "
                </div>
                
                <div class=\"mb-3\">
                    ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "textContent", [], "any", false, false, false, 117), 'row');
        yield "
                </div>
                
                <div class=\"card mb-3\">
                    <div class=\"card-header\">
                        <h6 class=\"mb-0\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.title"), "html", null, true);
        yield "</h6>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-4 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"firstName\">
                                    ";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.firstName"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-4 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"lastName\">
                                    ";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.lastName"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-4 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"fullName\">
                                    ";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.fullName"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-4 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"email\">
                                    ";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.email"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-4 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"domain\">
                                    ";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.domain"), "html", null, true);
        yield "
                                </button>
                            </div>
                            <div class=\"col-md-4 mb-2\">
                                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary w-100 variable-btn\" data-variable=\"token\">
                                    ";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.token"), "html", null, true);
        yield "
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"d-flex justify-content-end mt-3\">
                    <a href=\"";
        // line 161
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_templates");
        yield "\" class=\"btn btn-outline-secondary me-2\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_new.cancel_btn"), "html", null, true);
        yield "</a>
                    <button type=\"submit\" class=\"btn btn-gradient\">";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_template_new.save_btn"), "html", null, true);
        yield "</button>
                </div>
            ";
        // line 164
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 170
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 171
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
        // line 259
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
        // line 285
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
        return array (  541 => 285,  512 => 259,  422 => 171,  412 => 170,  399 => 164,  394 => 162,  388 => 161,  377 => 153,  369 => 148,  361 => 143,  353 => 138,  345 => 133,  337 => 128,  328 => 122,  320 => 117,  313 => 113,  309 => 112,  305 => 111,  301 => 110,  294 => 106,  286 => 101,  280 => 98,  274 => 95,  268 => 92,  259 => 86,  255 => 85,  251 => 84,  247 => 82,  237 => 81,  228 => 78,  220 => 73,  216 => 72,  209 => 69,  207 => 68,  203 => 66,  196 => 62,  192 => 61,  189 => 60,  186 => 59,  179 => 55,  175 => 54,  172 => 53,  169 => 52,  162 => 48,  158 => 47,  155 => 46,  153 => 45,  147 => 42,  143 => 41,  137 => 38,  134 => 37,  124 => 36,  88 => 6,  78 => 5,  61 => 3,  44 => 1,);
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
