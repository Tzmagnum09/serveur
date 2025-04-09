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

/* registration/register.html.twig */
class __TwigTemplate_99bee8f8b539a16502b419f59eeac864 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.title"), "html", null, true);
        
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
        /* Style personnalisé pour améliorer l'espacement et l'apparence des champs */
        .registration-form .form-group {
            margin-bottom: 1.5rem;
        }
        
        .registration-form label {
            margin-bottom: 0.5rem;
            font-weight: 500;
            display: block;
        }
        
        .registration-form .form-control,
        .registration-form .form-select {
            padding: 0.6rem 0.75rem;
            transition: all 0.3s ease;
            border: 1px solid #ced4da;
        }
        
        .registration-form .form-control:focus,
        .registration-form .form-select:focus {
            border-color: #8e44ad;
            box-shadow: 0 0 0 0.2rem rgba(142, 68, 173, 0.25);
        }
        
        .registration-form .form-control:hover,
        .registration-form .form-select:hover {
            border-color: #8e44ad;
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
        
        /* Animation sur les boutons */
        .btn-gradient {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 88
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 89
        yield "<div class=\"row justify-content-center\">
    <div class=\"col-lg-10\">
        <div class=\"card shadow-lg\">
            <div class=\"card-header text-center\">
                <h1 class=\"h4 mb-0\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.header"), "html", null, true);
        yield "</h1>
            </div>
            <div class=\"card-body p-4\">
                ";
        // line 96
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 96, $this->source); })()), 'form_start', ["attr" => ["class" => "registration-form"]]);
        yield "
                ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 97, $this->source); })()), "_token", [], "any", false, false, false, 97), 'widget');
        yield "
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 102, $this->source); })()), "email", [], "any", false, false, false, 102), 'label');
        yield "
                            ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 103, $this->source); })()), "email", [], "any", false, false, false, 103), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.email_placeholder"), "class" => "form-control"]]);
        // line 108
        yield "
                            ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 109, $this->source); })()), "email", [], "any", false, false, false, 109), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 114, $this->source); })()), "username", [], "any", false, false, false, 114), 'label');
        yield "
                            ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 115, $this->source); })()), "username", [], "any", false, false, false, 115), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.username_placeholder"), "class" => "form-control"]]);
        // line 120
        yield "
                            ";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 121, $this->source); })()), "username", [], "any", false, false, false, 121), 'errors');
        yield "
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 129
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 129, $this->source); })()), "firstName", [], "any", false, false, false, 129), 'label');
        yield "
                            ";
        // line 130
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 130, $this->source); })()), "firstName", [], "any", false, false, false, 130), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.first_name_placeholder"), "class" => "form-control"]]);
        // line 135
        yield "
                            ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 136, $this->source); })()), "firstName", [], "any", false, false, false, 136), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 141
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 141, $this->source); })()), "lastName", [], "any", false, false, false, 141), 'label');
        yield "
                            ";
        // line 142
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 142, $this->source); })()), "lastName", [], "any", false, false, false, 142), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.last_name_placeholder"), "class" => "form-control"]]);
        // line 147
        yield "
                            ";
        // line 148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 148, $this->source); })()), "lastName", [], "any", false, false, false, 148), 'errors');
        yield "
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 156
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 156, $this->source); })()), "birthDate", [], "any", false, false, false, 156), 'label');
        yield "
                            <div class=\"input-group date-picker-group\">
                                ";
        // line 158
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 158, $this->source); })()), "birthDate", [], "any", false, false, false, 158), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.birth_date_placeholder"), "class" => "form-control datepicker", "autocomplete" => "off"]]);
        // line 164
        yield "
                                <span class=\"input-group-text\" id=\"calendar-icon\">
                                    <i class=\"fas fa-calendar-alt\"></i>
                                </span>
                            </div>
                            ";
        // line 169
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 169, $this->source); })()), "birthDate", [], "any", false, false, false, 169), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 174
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 174, $this->source); })()), "phoneNumber", [], "any", false, false, false, 174), 'label');
        yield "
                            ";
        // line 175
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 175, $this->source); })()), "phoneNumber", [], "any", false, false, false, 175), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.phone_number_placeholder"), "class" => "form-control"]]);
        // line 180
        yield "
                            ";
        // line 181
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 181, $this->source); })()), "phoneNumber", [], "any", false, false, false, 181), 'errors');
        yield "
                        </div>
                    </div>
                </div>
                
                ";
        // line 187
        yield "                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 190, $this->source); })()), "street", [], "any", false, false, false, 190), 'label');
        yield "
                            ";
        // line 191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 191, $this->source); })()), "street", [], "any", false, false, false, 191), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.street_placeholder"), "class" => "form-control"]]);
        // line 196
        yield "
                            ";
        // line 197
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 197, $this->source); })()), "street", [], "any", false, false, false, 197), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            ";
        // line 202
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 202, $this->source); })()), "houseNumber", [], "any", false, false, false, 202), 'label');
        yield "
                            ";
        // line 203
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 203, $this->source); })()), "houseNumber", [], "any", false, false, false, 203), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.house_number_placeholder"), "class" => "form-control"]]);
        // line 208
        yield "
                            ";
        // line 209
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 209, $this->source); })()), "houseNumber", [], "any", false, false, false, 209), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            ";
        // line 214
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 214, $this->source); })()), "boxNumber", [], "any", false, false, false, 214), 'label');
        yield "
                            ";
        // line 215
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 215, $this->source); })()), "boxNumber", [], "any", false, false, false, 215), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.box_number_placeholder"), "class" => "form-control"]]);
        // line 220
        yield "
                            ";
        // line 221
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 221, $this->source); })()), "boxNumber", [], "any", false, false, false, 221), 'errors');
        yield "
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            ";
        // line 229
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 229, $this->source); })()), "postalCode", [], "any", false, false, false, 229), 'label');
        yield "
                            ";
        // line 230
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 230, $this->source); })()), "postalCode", [], "any", false, false, false, 230), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.postal_code_placeholder"), "class" => "form-control"]]);
        // line 235
        yield "
                            ";
        // line 236
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 236, $this->source); })()), "postalCode", [], "any", false, false, false, 236), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"col-md-5\">
                        <div class=\"form-group\">
                            ";
        // line 241
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 241, $this->source); })()), "city", [], "any", false, false, false, 241), 'label');
        yield "
                            ";
        // line 242
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 242, $this->source); })()), "city", [], "any", false, false, false, 242), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.city_placeholder"), "class" => "form-control"]]);
        // line 247
        yield "
                            ";
        // line 248
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 248, $this->source); })()), "city", [], "any", false, false, false, 248), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            ";
        // line 253
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 253, $this->source); })()), "country", [], "any", false, false, false, 253), 'label');
        yield "
                            ";
        // line 254
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 254, $this->source); })()), "country", [], "any", false, false, false, 254), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 256
        yield "
                            ";
        // line 257
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 257, $this->source); })()), "country", [], "any", false, false, false, 257), 'errors');
        yield "
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 265
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 265, $this->source); })()), "locale", [], "any", false, false, false, 265), 'label');
        yield "
                            ";
        // line 266
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 266, $this->source); })()), "locale", [], "any", false, false, false, 266), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 268
        yield "
                            ";
        // line 269
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 269, $this->source); })()), "locale", [], "any", false, false, false, 269), 'errors');
        yield "
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 277
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 277, $this->source); })()), "plainPassword", [], "any", false, false, false, 277), "first", [], "any", false, false, false, 277), 'label');
        yield "
                            ";
        // line 278
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 278, $this->source); })()), "plainPassword", [], "any", false, false, false, 278), "first", [], "any", false, false, false, 278), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.password_placeholder"), "class" => "form-control"]]);
        // line 283
        yield "
                            ";
        // line 284
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 284, $this->source); })()), "plainPassword", [], "any", false, false, false, 284), "first", [], "any", false, false, false, 284), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 289
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 289, $this->source); })()), "plainPassword", [], "any", false, false, false, 289), "second", [], "any", false, false, false, 289), 'label');
        yield "
                            ";
        // line 290
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 290, $this->source); })()), "plainPassword", [], "any", false, false, false, 290), "second", [], "any", false, false, false, 290), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.confirm_password_placeholder"), "class" => "form-control"]]);
        // line 295
        yield "
                            ";
        // line 296
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 296, $this->source); })()), "plainPassword", [], "any", false, false, false, 296), "second", [], "any", false, false, false, 296), 'errors');
        yield "
                        </div>
                    </div>
                </div>
                
                <div class=\"mb-4 form-check\">
                    ";
        // line 302
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 302, $this->source); })()), "agreeTerms", [], "any", false, false, false, 302), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                    <label for=\"";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 303, $this->source); })()), "agreeTerms", [], "any", false, false, false, 303), "vars", [], "any", false, false, false, 303), "id", [], "any", false, false, false, 303), "html", null, true);
        yield "\" class=\"form-check-label\">
                        ";
        // line 304
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.agree_terms"), "html", null, true);
        yield "
                        <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#termsModal\" class=\"text-decoration-none\">";
        // line 305
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.title"), "html", null, true);
        yield "</a>
                    </label>
                    ";
        // line 307
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 307, $this->source); })()), "agreeTerms", [], "any", false, false, false, 307), 'errors');
        yield "
                </div>

                <div class=\"alert alert-info mb-4\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    ";
        // line 312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.info_approval"), "html", null, true);
        yield "
                </div>
                
                <div class=\"d-grid gap-2\">
                    <button type=\"submit\" class=\"btn btn-gradient\">";
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.register"), "html", null, true);
        yield "</button>
                </div>
                
                ";
        // line 319
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 319, $this->source); })()), 'form_end', ["render_rest" => false]);
        yield "
            </div>
            <div class=\"card-footer text-center py-3\">
                <div class=\"text-muted\">
                    ";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.already_account"), "html", null, true);
        yield " 
                    <a href=\"";
        // line 324
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-decoration-none\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.login"), "html", null, true);
        yield "</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal des conditions d'utilisation -->
<div class=\"modal fade\" id=\"termsModal\" tabindex=\"-1\" aria-labelledby=\"termsModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-scrollable modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"termsModalLabel\">";
        // line 336
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.title"), "html", null, true);
        yield "</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <h5>1. ";
        // line 340
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.introduction.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.introduction.content"), "html", null, true);
        yield "</p>

                <h5>2. ";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.definitions.title"), "html", null, true);
        yield "</h5>
                <p>
                    <strong>";
        // line 345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.definitions.service"), "html", null, true);
        yield "</strong><br>
                    <strong>";
        // line 346
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.definitions.user"), "html", null, true);
        yield "</strong><br>
                    <strong>";
        // line 347
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.definitions.account"), "html", null, true);
        yield "</strong>
                </p>

                <h5>3. ";
        // line 350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.registration.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.registration.content1"), "html", null, true);
        yield "</p>
                <p>";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.registration.content2"), "html", null, true);
        yield "</p>

                <h5>4. ";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 355
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.content"), "html", null, true);
        yield "</p>
                <ul>
                    <li>";
        // line 357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.item1"), "html", null, true);
        yield "</li>
                    <li>";
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.item2"), "html", null, true);
        yield "</li>
                    <li>";
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.item3"), "html", null, true);
        yield "</li>
                    <li>";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.item4"), "html", null, true);
        yield "</li>
                    <li>";
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.item5"), "html", null, true);
        yield "</li>
                </ul>

                <h5>5. ";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.data_protection.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.data_protection.content1"), "html", null, true);
        yield "</p>
                <p>";
        // line 366
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.data_protection.content2"), "html", null, true);
        yield "</p>

                <h5>6. ";
        // line 368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.changes.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.changes.content"), "html", null, true);
        yield "</p>

                <h5>7. ";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.termination.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 372
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.termination.content"), "html", null, true);
        yield "</p>

                <h5>8. ";
        // line 374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.contact.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.contact.content"), "html", null, true);
        yield "</p>

                <p class=\"text-muted mt-3\">
                    <small>";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.footer.last_update"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "</small>
                </p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">";
        // line 382
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.close"), "html", null, true);
        yield "</button>
                <button type=\"button\" class=\"btn btn-gradient\" data-bs-dismiss=\"modal\" onclick=\"document.getElementById('";
        // line 383
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 383, $this->source); })()), "agreeTerms", [], "any", false, false, false, 383), "vars", [], "any", false, false, false, 383), "id", [], "any", false, false, false, 383), "html", null, true);
        yield "').checked = true;\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.accept"), "html", null, true);
        yield "</button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 390
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 391
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 393
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
        // line 405
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 405, $this->source); })()), "request", [], "any", false, false, false, 405), "locale", [], "any", false, false, false, 405) == "nl")) {
            // line 406
            yield "                locale = 'nl';
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 407
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 407, $this->source); })()), "request", [], "any", false, false, false, 407), "locale", [], "any", false, false, false, 407) == "en")) {
            // line 408
            yield "                locale = 'en';
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 409
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 409, $this->source); })()), "request", [], "any", false, false, false, 409), "locale", [], "any", false, false, false, 409) == "de")) {
            // line 410
            yield "                locale = 'de';
            ";
        }
        // line 412
        yield "            
            datepickerElements.forEach(function(element) {
                const calendarIcon = document.getElementById('calendar-icon');
                
                // Calculer la date minimale (13 ans avant aujourd'hui)
                const today = new Date();
                const minDate = new Date();
                minDate.setFullYear(today.getFullYear() - 13);
                
                // Initialiser flatpickr avec des options améliorées
                const flatpickrInstance = flatpickr(element, {
                    dateFormat: \"d/m/Y\",
                    locale: locale,
                    maxDate: minDate, // Max date est 13 ans avant aujourd'hui (âge minimum)
                    minDate: '1920-01-01', // Date raisonnable minimum
                    disableMobile: true, // Important pour la compatibilité mobile
                    allowInput: true,
                    clickOpens: true,
                    enableTime: false,
                    time_24hr: true,
                    
                    // Activer la sélection de l'année et du mois
                    monthSelectorType: 'dropdown',
                    yearSelectorType: 'dropdown',
                    
                    // Année par défaut raisonnable (30 ans avant aujourd'hui)
                    defaultDate: new Date(today.getFullYear() - 30, today.getMonth(), today.getDate()),
                    
                    // S'assurer que l'interface est complètement chargée
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
        return "registration/register.html.twig";
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
        return array (  753 => 412,  749 => 410,  747 => 409,  744 => 408,  742 => 407,  739 => 406,  737 => 405,  723 => 393,  718 => 391,  708 => 390,  692 => 383,  688 => 382,  679 => 378,  673 => 375,  669 => 374,  664 => 372,  660 => 371,  655 => 369,  651 => 368,  646 => 366,  642 => 365,  638 => 364,  632 => 361,  628 => 360,  624 => 359,  620 => 358,  616 => 357,  611 => 355,  607 => 354,  602 => 352,  598 => 351,  594 => 350,  588 => 347,  584 => 346,  580 => 345,  575 => 343,  570 => 341,  566 => 340,  559 => 336,  542 => 324,  538 => 323,  531 => 319,  525 => 316,  518 => 312,  510 => 307,  505 => 305,  501 => 304,  497 => 303,  493 => 302,  484 => 296,  481 => 295,  479 => 290,  475 => 289,  467 => 284,  464 => 283,  462 => 278,  458 => 277,  447 => 269,  444 => 268,  442 => 266,  438 => 265,  427 => 257,  424 => 256,  422 => 254,  418 => 253,  410 => 248,  407 => 247,  405 => 242,  401 => 241,  393 => 236,  390 => 235,  388 => 230,  384 => 229,  373 => 221,  370 => 220,  368 => 215,  364 => 214,  356 => 209,  353 => 208,  351 => 203,  347 => 202,  339 => 197,  336 => 196,  334 => 191,  330 => 190,  325 => 187,  317 => 181,  314 => 180,  312 => 175,  308 => 174,  300 => 169,  293 => 164,  291 => 158,  286 => 156,  275 => 148,  272 => 147,  270 => 142,  266 => 141,  258 => 136,  255 => 135,  253 => 130,  249 => 129,  238 => 121,  235 => 120,  233 => 115,  229 => 114,  221 => 109,  218 => 108,  216 => 103,  212 => 102,  204 => 97,  200 => 96,  194 => 93,  188 => 89,  178 => 88,  92 => 8,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'registration.title'|trans }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# Style pour le datepicker #}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <style>
        /* Style personnalisé pour améliorer l'espacement et l'apparence des champs */
        .registration-form .form-group {
            margin-bottom: 1.5rem;
        }
        
        .registration-form label {
            margin-bottom: 0.5rem;
            font-weight: 500;
            display: block;
        }
        
        .registration-form .form-control,
        .registration-form .form-select {
            padding: 0.6rem 0.75rem;
            transition: all 0.3s ease;
            border: 1px solid #ced4da;
        }
        
        .registration-form .form-control:focus,
        .registration-form .form-select:focus {
            border-color: #8e44ad;
            box-shadow: 0 0 0 0.2rem rgba(142, 68, 173, 0.25);
        }
        
        .registration-form .form-control:hover,
        .registration-form .form-select:hover {
            border-color: #8e44ad;
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
        
        /* Animation sur les boutons */
        .btn-gradient {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"row justify-content-center\">
    <div class=\"col-lg-10\">
        <div class=\"card shadow-lg\">
            <div class=\"card-header text-center\">
                <h1 class=\"h4 mb-0\">{{ 'registration.header'|trans }}</h1>
            </div>
            <div class=\"card-body p-4\">
                {{ form_start(registrationForm, {'attr': {'class': 'registration-form'}}) }}
                {{ form_widget(registrationForm._token) }}
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            {{ form_label(registrationForm.email) }}
                            {{ form_widget(registrationForm.email, {
                                'attr': {
                                    'placeholder': 'registration.form.email_placeholder'|trans,
                                    'class': 'form-control'
                                }
                            }) }}
                            {{ form_errors(registrationForm.email) }}
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            {{ form_label(registrationForm.username) }}
                            {{ form_widget(registrationForm.username, {
                                'attr': {
                                    'placeholder': 'registration.form.username_placeholder'|trans,
                                    'class': 'form-control'
                                }
                            }) }}
                            {{ form_errors(registrationForm.username) }}
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            {{ form_label(registrationForm.firstName) }}
                            {{ form_widget(registrationForm.firstName, {
                                'attr': {
                                    'placeholder': 'registration.form.first_name_placeholder'|trans,
                                    'class': 'form-control'
                                }
                            }) }}
                            {{ form_errors(registrationForm.firstName) }}
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            {{ form_label(registrationForm.lastName) }}
                            {{ form_widget(registrationForm.lastName, {
                                'attr': {
                                    'placeholder': 'registration.form.last_name_placeholder'|trans,
                                    'class': 'form-control'
                                }
                            }) }}
                            {{ form_errors(registrationForm.lastName) }}
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            {{ form_label(registrationForm.birthDate) }}
                            <div class=\"input-group date-picker-group\">
                                {{ form_widget(registrationForm.birthDate, {
                                    'attr': {
                                        'placeholder': 'registration.form.birth_date_placeholder'|trans,
                                        'class': 'form-control datepicker',
                                        'autocomplete': 'off'
                                    }
                                }) }}
                                <span class=\"input-group-text\" id=\"calendar-icon\">
                                    <i class=\"fas fa-calendar-alt\"></i>
                                </span>
                            </div>
                            {{ form_errors(registrationForm.birthDate) }}
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            {{ form_label(registrationForm.phoneNumber) }}
                            {{ form_widget(registrationForm.phoneNumber, {
                                'attr': {
                                    'placeholder': 'registration.form.phone_number_placeholder'|trans,
                                    'class': 'form-control'
                                }
                            }) }}
                            {{ form_errors(registrationForm.phoneNumber) }}
                        </div>
                    </div>
                </div>
                
                {# Regroupement de la rue, numéro et boîte sur la même ligne #}
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            {{ form_label(registrationForm.street) }}
                            {{ form_widget(registrationForm.street, {
                                'attr': {
                                    'placeholder': 'registration.form.street_placeholder'|trans,
                                    'class': 'form-control'
                                }
                            }) }}
                            {{ form_errors(registrationForm.street) }}
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            {{ form_label(registrationForm.houseNumber) }}
                            {{ form_widget(registrationForm.houseNumber, {
                                'attr': {
                                    'placeholder': 'registration.form.house_number_placeholder'|trans,
                                    'class': 'form-control'
                                }
                            }) }}
                            {{ form_errors(registrationForm.houseNumber) }}
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            {{ form_label(registrationForm.boxNumber) }}
                            {{ form_widget(registrationForm.boxNumber, {
                                'attr': {
                                    'placeholder': 'registration.form.box_number_placeholder'|trans,
                                    'class': 'form-control'
                                }
                            }) }}
                            {{ form_errors(registrationForm.boxNumber) }}
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            {{ form_label(registrationForm.postalCode) }}
                            {{ form_widget(registrationForm.postalCode, {
                                'attr': {
                                    'placeholder': 'registration.form.postal_code_placeholder'|trans,
                                    'class': 'form-control'
                                }
                            }) }}
                            {{ form_errors(registrationForm.postalCode) }}
                        </div>
                    </div>
                    <div class=\"col-md-5\">
                        <div class=\"form-group\">
                            {{ form_label(registrationForm.city) }}
                            {{ form_widget(registrationForm.city, {
                                'attr': {
                                    'placeholder': 'registration.form.city_placeholder'|trans,
                                    'class': 'form-control'
                                }
                            }) }}
                            {{ form_errors(registrationForm.city) }}
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            {{ form_label(registrationForm.country) }}
                            {{ form_widget(registrationForm.country, {
                                'attr': {'class': 'form-select'}
                            }) }}
                            {{ form_errors(registrationForm.country) }}
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            {{ form_label(registrationForm.locale) }}
                            {{ form_widget(registrationForm.locale, {
                                'attr': {'class': 'form-select'}
                            }) }}
                            {{ form_errors(registrationForm.locale) }}
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            {{ form_label(registrationForm.plainPassword.first) }}
                            {{ form_widget(registrationForm.plainPassword.first, {
                                'attr': {
                                    'placeholder': 'registration.form.password_placeholder'|trans,
                                    'class': 'form-control'
                                }
                            }) }}
                            {{ form_errors(registrationForm.plainPassword.first) }}
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            {{ form_label(registrationForm.plainPassword.second) }}
                            {{ form_widget(registrationForm.plainPassword.second, {
                                'attr': {
                                    'placeholder': 'registration.form.confirm_password_placeholder'|trans,
                                    'class': 'form-control'
                                }
                            }) }}
                            {{ form_errors(registrationForm.plainPassword.second) }}
                        </div>
                    </div>
                </div>
                
                <div class=\"mb-4 form-check\">
                    {{ form_widget(registrationForm.agreeTerms, {'attr': {'class': 'form-check-input'}}) }}
                    <label for=\"{{ registrationForm.agreeTerms.vars.id }}\" class=\"form-check-label\">
                        {{ 'registration.form.agree_terms'|trans }}
                        <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#termsModal\" class=\"text-decoration-none\">{{ 'terms.title'|trans }}</a>
                    </label>
                    {{ form_errors(registrationForm.agreeTerms) }}
                </div>

                <div class=\"alert alert-info mb-4\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    {{ 'registration.info_approval'|trans }}
                </div>
                
                <div class=\"d-grid gap-2\">
                    <button type=\"submit\" class=\"btn btn-gradient\">{{ 'registration.register'|trans }}</button>
                </div>
                
                {{ form_end(registrationForm, {'render_rest': false}) }}
            </div>
            <div class=\"card-footer text-center py-3\">
                <div class=\"text-muted\">
                    {{ 'registration.already_account'|trans }} 
                    <a href=\"{{ path('app_login') }}\" class=\"text-decoration-none\">{{ 'registration.login'|trans }}</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal des conditions d'utilisation -->
<div class=\"modal fade\" id=\"termsModal\" tabindex=\"-1\" aria-labelledby=\"termsModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-scrollable modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"termsModalLabel\">{{ 'terms.title'|trans }}</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <h5>1. {{ 'terms.introduction.title'|trans }}</h5>
                <p>{{ 'terms.introduction.content'|trans }}</p>

                <h5>2. {{ 'terms.definitions.title'|trans }}</h5>
                <p>
                    <strong>{{ 'terms.definitions.service'|trans }}</strong><br>
                    <strong>{{ 'terms.definitions.user'|trans }}</strong><br>
                    <strong>{{ 'terms.definitions.account'|trans }}</strong>
                </p>

                <h5>3. {{ 'terms.registration.title'|trans }}</h5>
                <p>{{ 'terms.registration.content1'|trans }}</p>
                <p>{{ 'terms.registration.content2'|trans }}</p>

                <h5>4. {{ 'terms.rights.title'|trans }}</h5>
                <p>{{ 'terms.rights.content'|trans }}</p>
                <ul>
                    <li>{{ 'terms.rights.item1'|trans }}</li>
                    <li>{{ 'terms.rights.item2'|trans }}</li>
                    <li>{{ 'terms.rights.item3'|trans }}</li>
                    <li>{{ 'terms.rights.item4'|trans }}</li>
                    <li>{{ 'terms.rights.item5'|trans }}</li>
                </ul>

                <h5>5. {{ 'terms.data_protection.title'|trans }}</h5>
                <p>{{ 'terms.data_protection.content1'|trans }}</p>
                <p>{{ 'terms.data_protection.content2'|trans }}</p>

                <h5>6. {{ 'terms.changes.title'|trans }}</h5>
                <p>{{ 'terms.changes.content'|trans }}</p>

                <h5>7. {{ 'terms.termination.title'|trans }}</h5>
                <p>{{ 'terms.termination.content'|trans }}</p>

                <h5>8. {{ 'terms.contact.title'|trans }}</h5>
                <p>{{ 'terms.contact.content'|trans }}</p>

                <p class=\"text-muted mt-3\">
                    <small>{{ 'terms.footer.last_update'|trans }} {{ \"now\"|date(\"d/m/Y\") }}</small>
                </p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">{{ 'registration.form.close'|trans }}</button>
                <button type=\"button\" class=\"btn btn-gradient\" data-bs-dismiss=\"modal\" onclick=\"document.getElementById('{{ registrationForm.agreeTerms.vars.id }}').checked = true;\">{{ 'registration.form.accept'|trans }}</button>
            </div>
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
                
                // Calculer la date minimale (13 ans avant aujourd'hui)
                const today = new Date();
                const minDate = new Date();
                minDate.setFullYear(today.getFullYear() - 13);
                
                // Initialiser flatpickr avec des options améliorées
                const flatpickrInstance = flatpickr(element, {
                    dateFormat: \"d/m/Y\",
                    locale: locale,
                    maxDate: minDate, // Max date est 13 ans avant aujourd'hui (âge minimum)
                    minDate: '1920-01-01', // Date raisonnable minimum
                    disableMobile: true, // Important pour la compatibilité mobile
                    allowInput: true,
                    clickOpens: true,
                    enableTime: false,
                    time_24hr: true,
                    
                    // Activer la sélection de l'année et du mois
                    monthSelectorType: 'dropdown',
                    yearSelectorType: 'dropdown',
                    
                    // Année par défaut raisonnable (30 ans avant aujourd'hui)
                    defaultDate: new Date(today.getFullYear() - 30, today.getMonth(), today.getDate()),
                    
                    // S'assurer que l'interface est complètement chargée
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
{% endblock %}", "registration/register.html.twig", "/var/www/serveur/templates/registration/register.html.twig");
    }
}
