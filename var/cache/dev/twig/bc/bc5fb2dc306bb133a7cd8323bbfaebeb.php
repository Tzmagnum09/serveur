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

/* profile/edit.html.twig */
class __TwigTemplate_98bcd44d90d9c4eacdee4e570a15fc8d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/edit.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.edit.title"), "html", null, true);
        
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
        /* Styles améliorés pour le formulaire de profil */
        .profile-form .form-group {
            margin-bottom: 1.5rem;
        }
        
        .profile-form label {
            font-weight: 500;
            margin-bottom: 0.5rem;
            display: block;
        }
        
        .profile-form .form-control {
            padding: 0.6rem 0.75rem;
        }
        
        .profile-form .row {
            margin-bottom: 1rem;
        }
        
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
        
        /* Message info avec marge */
        .alert-info {
            margin-top: 1rem;
            margin-bottom: 1.5rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 74
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 75
        yield "<div class=\"sidebar\">
    <h5 class=\"mb-4\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.sidebar.title"), "html", null, true);
        yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">
                <i class=\"fas fa-user me-2\"></i> ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.sidebar.overview"), "html", null, true);
        yield "
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
        yield "\">
                <i class=\"fas fa-edit me-2\"></i> ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.sidebar.edit_profile"), "html", null, true);
        yield "
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_change_password");
        yield "\">
                <i class=\"fas fa-key me-2\"></i> ";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.sidebar.change_password"), "html", null, true);
        yield "
            </a>
        </li>
    </ul>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 97
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 98
        yield "<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.edit.title"), "html", null, true);
        yield "</h1>
        <a href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-1\"></i> ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.edit.back_btn"), "html", null, true);
        yield "
        </a>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.edit.form_title"), "html", null, true);
        yield "</h5>
        </div>
        <div class=\"card-body\">
            ";
        // line 111
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 111, $this->source); })()), 'form_start', ["attr" => ["class" => "profile-form"]]);
        yield "
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 115, $this->source); })()), "email", [], "any", false, false, false, 115), 'label');
        yield "
                            ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 116, $this->source); })()), "email", [], "any", false, false, false, 116), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 117, $this->source); })()), "email", [], "any", false, false, false, 117), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 122, $this->source); })()), "username", [], "any", false, false, false, 122), 'label');
        yield "
                            ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 123, $this->source); })()), "username", [], "any", false, false, false, 123), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 124, $this->source); })()), "username", [], "any", false, false, false, 124), 'errors');
        yield "
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 132, $this->source); })()), "firstName", [], "any", false, false, false, 132), 'label');
        yield "
                            ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 133, $this->source); })()), "firstName", [], "any", false, false, false, 133), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 134, $this->source); })()), "firstName", [], "any", false, false, false, 134), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 139, $this->source); })()), "lastName", [], "any", false, false, false, 139), 'label');
        yield "
                            ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 140, $this->source); })()), "lastName", [], "any", false, false, false, 140), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 141
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 141, $this->source); })()), "lastName", [], "any", false, false, false, 141), 'errors');
        yield "
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 149
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 149, $this->source); })()), "birthDate", [], "any", false, false, false, 149), 'label');
        yield "
                            <div class=\"input-group date-picker-group\">
                                ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 151, $this->source); })()), "birthDate", [], "any", false, false, false, 151), 'widget', ["attr" => ["placeholder" => "JJ/MM/AAAA", "class" => "form-control datepicker", "autocomplete" => "off"]]);
        // line 157
        yield "
                                <span class=\"input-group-text\" id=\"calendar-icon\">
                                    <i class=\"fas fa-calendar-alt\"></i>
                                </span>
                            </div>
                            ";
        // line 163
        yield "                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 167, $this->source); })()), "phoneNumber", [], "any", false, false, false, 167), 'label');
        yield "
                            ";
        // line 168
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 168, $this->source); })()), "phoneNumber", [], "any", false, false, false, 168), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 169
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 169, $this->source); })()), "phoneNumber", [], "any", false, false, false, 169), 'errors');
        yield "
                        </div>
                    </div>
                </div>
                
                ";
        // line 175
        yield "                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 178
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 178, $this->source); })()), "street", [], "any", false, false, false, 178), 'label');
        yield "
                            ";
        // line 179
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 179, $this->source); })()), "street", [], "any", false, false, false, 179), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 180, $this->source); })()), "street", [], "any", false, false, false, 180), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            ";
        // line 185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 185, $this->source); })()), "houseNumber", [], "any", false, false, false, 185), 'label');
        yield "
                            ";
        // line 186
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 186, $this->source); })()), "houseNumber", [], "any", false, false, false, 186), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 187
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 187, $this->source); })()), "houseNumber", [], "any", false, false, false, 187), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            ";
        // line 192
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 192, $this->source); })()), "boxNumber", [], "any", false, false, false, 192), 'label');
        yield "
                            ";
        // line 193
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 193, $this->source); })()), "boxNumber", [], "any", false, false, false, 193), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 194
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 194, $this->source); })()), "boxNumber", [], "any", false, false, false, 194), 'errors');
        yield "
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            ";
        // line 202
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 202, $this->source); })()), "postalCode", [], "any", false, false, false, 202), 'label');
        yield "
                            ";
        // line 203
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 203, $this->source); })()), "postalCode", [], "any", false, false, false, 203), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 204
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 204, $this->source); })()), "postalCode", [], "any", false, false, false, 204), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"col-md-5\">
                        <div class=\"form-group\">
                            ";
        // line 209
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 209, $this->source); })()), "city", [], "any", false, false, false, 209), 'label');
        yield "
                            ";
        // line 210
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 210, $this->source); })()), "city", [], "any", false, false, false, 210), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 211
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 211, $this->source); })()), "city", [], "any", false, false, false, 211), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            ";
        // line 216
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 216, $this->source); })()), "country", [], "any", false, false, false, 216), 'label');
        yield "
                            ";
        // line 217
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 217, $this->source); })()), "country", [], "any", false, false, false, 217), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                            ";
        // line 218
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 218, $this->source); })()), "country", [], "any", false, false, false, 218), 'errors');
        yield "
                        </div>
                    </div>
                 </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 226
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 226, $this->source); })()), "locale", [], "any", false, false, false, 226), 'label');
        yield "
                            ";
        // line 227
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 227, $this->source); })()), "locale", [], "any", false, false, false, 227), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                            ";
        // line 228
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 228, $this->source); })()), "locale", [], "any", false, false, false, 228), 'errors');
        yield "
                        </div>
                    </div>
                </div>
                
                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    ";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.edit.language_info"), "html", null, true);
        yield "
                </div>
                
                <div class=\"d-flex justify-content-end\">
                    <a href=\"";
        // line 239
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"btn btn-outline-secondary me-2\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.edit.cancel_btn"), "html", null, true);
        yield "</a>
                    <button type=\"submit\" class=\"btn btn-gradient\">";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.edit.save_btn"), "html", null, true);
        yield "</button>
                </div>
            ";
        // line 242
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 242, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 248
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 249
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 251
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/nl.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/de.js\"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialiser le datepicker avec des options améliorées
            const datepickerElements = document.querySelectorAll('.datepicker');
            
            // Déterminer la locale actuelle
            let locale = 'fr';
            ";
        // line 263
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 263, $this->source); })()), "request", [], "any", false, false, false, 263), "locale", [], "any", false, false, false, 263) == "nl")) {
            // line 264
            yield "                locale = 'nl';
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 265
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 265, $this->source); })()), "request", [], "any", false, false, false, 265), "locale", [], "any", false, false, false, 265) == "en")) {
            // line 266
            yield "                locale = 'en';
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 267
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 267, $this->source); })()), "request", [], "any", false, false, false, 267), "locale", [], "any", false, false, false, 267) == "de")) {
            // line 268
            yield "                locale = 'de';
            ";
        }
        // line 270
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
        return "profile/edit.html.twig";
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
        return array (  575 => 270,  571 => 268,  569 => 267,  566 => 266,  564 => 265,  561 => 264,  559 => 263,  545 => 251,  540 => 249,  530 => 248,  517 => 242,  512 => 240,  506 => 239,  499 => 235,  489 => 228,  485 => 227,  481 => 226,  470 => 218,  466 => 217,  462 => 216,  454 => 211,  450 => 210,  446 => 209,  438 => 204,  434 => 203,  430 => 202,  419 => 194,  415 => 193,  411 => 192,  403 => 187,  399 => 186,  395 => 185,  387 => 180,  383 => 179,  379 => 178,  374 => 175,  366 => 169,  362 => 168,  358 => 167,  352 => 163,  345 => 157,  343 => 151,  338 => 149,  327 => 141,  323 => 140,  319 => 139,  311 => 134,  307 => 133,  303 => 132,  292 => 124,  288 => 123,  284 => 122,  276 => 117,  272 => 116,  268 => 115,  261 => 111,  255 => 108,  246 => 102,  242 => 101,  238 => 100,  234 => 98,  224 => 97,  210 => 90,  206 => 89,  199 => 85,  195 => 84,  188 => 80,  184 => 79,  178 => 76,  175 => 75,  165 => 74,  93 => 8,  88 => 6,  78 => 5,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'profile.edit.title'|trans }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Style pour le datepicker #}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <style>
        /* Styles améliorés pour le formulaire de profil */
        .profile-form .form-group {
            margin-bottom: 1.5rem;
        }
        
        .profile-form label {
            font-weight: 500;
            margin-bottom: 0.5rem;
            display: block;
        }
        
        .profile-form .form-control {
            padding: 0.6rem 0.75rem;
        }
        
        .profile-form .row {
            margin-bottom: 1rem;
        }
        
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
        
        /* Message info avec marge */
        .alert-info {
            margin-top: 1rem;
            margin-bottom: 1.5rem;
        }
    </style>
{% endblock %}

{% block sidebar %}
<div class=\"sidebar\">
    <h5 class=\"mb-4\">{{ 'profile.sidebar.title'|trans }}</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_profile') }}\">
                <i class=\"fas fa-user me-2\"></i> {{ 'profile.sidebar.overview'|trans }}
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"{{ path('app_profile_edit') }}\">
                <i class=\"fas fa-edit me-2\"></i> {{ 'profile.sidebar.edit_profile'|trans }}
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_profile_change_password') }}\">
                <i class=\"fas fa-key me-2\"></i> {{ 'profile.sidebar.change_password'|trans }}
            </a>
        </li>
    </ul>
</div>
{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">{{ 'profile.edit.title'|trans }}</h1>
        <a href=\"{{ path('app_profile') }}\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-1\"></i> {{ 'profile.edit.back_btn'|trans }}
        </a>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">{{ 'profile.edit.form_title'|trans }}</h5>
        </div>
        <div class=\"card-body\">
            {{ form_start(profileForm, {'attr': {'class': 'profile-form'}}) }}
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            {{ form_label(profileForm.email) }}
                            {{ form_widget(profileForm.email, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(profileForm.email) }}
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            {{ form_label(profileForm.username) }}
                            {{ form_widget(profileForm.username, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(profileForm.username) }}
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            {{ form_label(profileForm.firstName) }}
                            {{ form_widget(profileForm.firstName, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(profileForm.firstName) }}
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            {{ form_label(profileForm.lastName) }}
                            {{ form_widget(profileForm.lastName, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(profileForm.lastName) }}
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            {{ form_label(profileForm.birthDate) }}
                            <div class=\"input-group date-picker-group\">
                                {{ form_widget(profileForm.birthDate, {
                                    'attr': {
                                        'placeholder': 'JJ/MM/AAAA',
                                        'class': 'form-control datepicker',
                                        'autocomplete': 'off'
                                    }
                                }) }}
                                <span class=\"input-group-text\" id=\"calendar-icon\">
                                    <i class=\"fas fa-calendar-alt\"></i>
                                </span>
                            </div>
                            {# Ne pas afficher les erreurs du champ birthDate #}
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            {{ form_label(profileForm.phoneNumber) }}
                            {{ form_widget(profileForm.phoneNumber, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(profileForm.phoneNumber) }}
                        </div>
                    </div>
                </div>
                
                {# Regrouper rue, numéro et boîte sur la même ligne #}
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            {{ form_label(profileForm.street) }}
                            {{ form_widget(profileForm.street, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(profileForm.street) }}
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            {{ form_label(profileForm.houseNumber) }}
                            {{ form_widget(profileForm.houseNumber, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(profileForm.houseNumber) }}
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            {{ form_label(profileForm.boxNumber) }}
                            {{ form_widget(profileForm.boxNumber, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(profileForm.boxNumber) }}
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            {{ form_label(profileForm.postalCode) }}
                            {{ form_widget(profileForm.postalCode, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(profileForm.postalCode) }}
                        </div>
                    </div>
                    <div class=\"col-md-5\">
                        <div class=\"form-group\">
                            {{ form_label(profileForm.city) }}
                            {{ form_widget(profileForm.city, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(profileForm.city) }}
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            {{ form_label(profileForm.country) }}
                            {{ form_widget(profileForm.country, {'attr': {'class': 'form-select'}}) }}
                            {{ form_errors(profileForm.country) }}
                        </div>
                    </div>
                 </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            {{ form_label(profileForm.locale) }}
                            {{ form_widget(profileForm.locale, {'attr': {'class': 'form-select'}}) }}
                            {{ form_errors(profileForm.locale) }}
                        </div>
                    </div>
                </div>
                
                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    {{ 'profile.edit.language_info'|trans }}
                </div>
                
                <div class=\"d-flex justify-content-end\">
                    <a href=\"{{ path('app_profile') }}\" class=\"btn btn-outline-secondary me-2\">{{ 'profile.edit.cancel_btn'|trans }}</a>
                    <button type=\"submit\" class=\"btn btn-gradient\">{{ 'profile.edit.save_btn'|trans }}</button>
                </div>
            {{ form_end(profileForm) }}
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
            // Initialiser le datepicker avec des options améliorées
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
        });
    </script>
{% endblock %}", "profile/edit.html.twig", "/var/www/serveur/templates/profile/edit.html.twig");
    }
}
