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
        // line 7
        yield "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <style>
        /* Style personnalisé pour améliorer l'espacement et l'apparence des champs */
        .registration-form .form-group {
            margin-bottom: 1.5rem;
        }
        
        .registration-form label {
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        .registration-form .form-control {
            transition: all 0.3s ease;
            border: 1px solid #ced4da;
        }
        
        .registration-form .form-control:focus {
            border-color: #8e44ad;
            box-shadow: 0 0 0 0.2rem rgba(142, 68, 173, 0.25);
        }
        
        .registration-form .form-control:hover {
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
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 53
        yield "<div class=\"row justify-content-center\">
    <div class=\"col-lg-8\">
        <div class=\"card shadow-lg\">
            <div class=\"card-header text-center\">
                <h1 class=\"h4 mb-0\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.header"), "html", null, true);
        yield "</h1>
            </div>
            <div class=\"card-body p-4\">
                ";
        // line 60
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), 'form_start', ["attr" => ["class" => "registration-form"]]);
        yield "
                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "_token", [], "any", false, false, false, 61), 'widget');
        yield "
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "email", [], "any", false, false, false, 66), 'label');
        yield "
                            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), "email", [], "any", false, false, false, 67), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.email_placeholder"), "class" => "form-control"]]);
        // line 72
        yield "
                            ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 73, $this->source); })()), "email", [], "any", false, false, false, 73), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 78, $this->source); })()), "username", [], "any", false, false, false, 78), 'label');
        yield "
                            ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 79, $this->source); })()), "username", [], "any", false, false, false, 79), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.username_placeholder"), "class" => "form-control"]]);
        // line 84
        yield "
                            ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 85, $this->source); })()), "username", [], "any", false, false, false, 85), 'errors');
        yield "
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 93, $this->source); })()), "firstName", [], "any", false, false, false, 93), 'label');
        yield "
                            ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 94, $this->source); })()), "firstName", [], "any", false, false, false, 94), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.first_name_placeholder"), "class" => "form-control"]]);
        // line 99
        yield "
                            ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 100, $this->source); })()), "firstName", [], "any", false, false, false, 100), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 105, $this->source); })()), "lastName", [], "any", false, false, false, 105), 'label');
        yield "
                            ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 106, $this->source); })()), "lastName", [], "any", false, false, false, 106), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.last_name_placeholder"), "class" => "form-control"]]);
        // line 111
        yield "
                            ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 112, $this->source); })()), "lastName", [], "any", false, false, false, 112), 'errors');
        yield "
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 120, $this->source); })()), "birthDate", [], "any", false, false, false, 120), 'label');
        yield "
                            <div class=\"input-group date-picker-group\">
                                ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 122, $this->source); })()), "birthDate", [], "any", false, false, false, 122), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.birth_date_placeholder"), "class" => "form-control datepicker", "autocomplete" => "off"]]);
        // line 128
        yield "
                                <span class=\"input-group-text\" id=\"calendar-icon\">
                                    <i class=\"fas fa-calendar-alt\"></i>
                                </span>
                            </div>
                            ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 133, $this->source); })()), "birthDate", [], "any", false, false, false, 133), 'errors');
        yield "
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-8\">
                        <div class=\"form-group\">
                            ";
        // line 141
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 141, $this->source); })()), "street", [], "any", false, false, false, 141), 'label');
        yield "
                            ";
        // line 142
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 142, $this->source); })()), "street", [], "any", false, false, false, 142), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.street_placeholder"), "class" => "form-control"]]);
        // line 147
        yield "
                            ";
        // line 148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 148, $this->source); })()), "street", [], "any", false, false, false, 148), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"col-md-2\">
                        <div class=\"form-group\">
                            ";
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 153, $this->source); })()), "houseNumber", [], "any", false, false, false, 153), 'label');
        yield "
                            ";
        // line 154
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 154, $this->source); })()), "houseNumber", [], "any", false, false, false, 154), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.house_number_placeholder"), "class" => "form-control"]]);
        // line 159
        yield "
                            ";
        // line 160
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 160, $this->source); })()), "houseNumber", [], "any", false, false, false, 160), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"col-md-2\">
                        <div class=\"form-group\">
                            ";
        // line 165
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 165, $this->source); })()), "boxNumber", [], "any", false, false, false, 165), 'label');
        yield "
                            ";
        // line 166
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 166, $this->source); })()), "boxNumber", [], "any", false, false, false, 166), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.box_number_placeholder"), "class" => "form-control"]]);
        // line 171
        yield "
                            ";
        // line 172
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 172, $this->source); })()), "boxNumber", [], "any", false, false, false, 172), 'errors');
        yield "
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            ";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 180, $this->source); })()), "postalCode", [], "any", false, false, false, 180), 'label');
        yield "
                            ";
        // line 181
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 181, $this->source); })()), "postalCode", [], "any", false, false, false, 181), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.postal_code_placeholder"), "class" => "form-control"]]);
        // line 186
        yield "
                            ";
        // line 187
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 187, $this->source); })()), "postalCode", [], "any", false, false, false, 187), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"col-md-5\">
                        <div class=\"form-group\">
                            ";
        // line 192
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 192, $this->source); })()), "city", [], "any", false, false, false, 192), 'label');
        yield "
                            ";
        // line 193
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 193, $this->source); })()), "city", [], "any", false, false, false, 193), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.city_placeholder"), "class" => "form-control"]]);
        // line 198
        yield "
                            ";
        // line 199
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 199, $this->source); })()), "city", [], "any", false, false, false, 199), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            ";
        // line 204
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 204, $this->source); })()), "country", [], "any", false, false, false, 204), 'label');
        yield "
                            ";
        // line 205
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 205, $this->source); })()), "country", [], "any", false, false, false, 205), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 207
        yield "
                            ";
        // line 208
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 208, $this->source); })()), "country", [], "any", false, false, false, 208), 'errors');
        yield "
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 216
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 216, $this->source); })()), "phoneNumber", [], "any", false, false, false, 216), 'label');
        yield "
                            ";
        // line 217
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 217, $this->source); })()), "phoneNumber", [], "any", false, false, false, 217), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.phone_number_placeholder"), "class" => "form-control"]]);
        // line 222
        yield "
                            ";
        // line 223
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 223, $this->source); })()), "phoneNumber", [], "any", false, false, false, 223), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 228
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 228, $this->source); })()), "locale", [], "any", false, false, false, 228), 'label');
        yield "
                            ";
        // line 229
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 229, $this->source); })()), "locale", [], "any", false, false, false, 229), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 231
        yield "
                            ";
        // line 232
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 232, $this->source); })()), "locale", [], "any", false, false, false, 232), 'errors');
        yield "
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 240
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 240, $this->source); })()), "plainPassword", [], "any", false, false, false, 240), "first", [], "any", false, false, false, 240), 'label');
        yield "
                            ";
        // line 241
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 241, $this->source); })()), "plainPassword", [], "any", false, false, false, 241), "first", [], "any", false, false, false, 241), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.password_placeholder"), "class" => "form-control"]]);
        // line 246
        yield "
                            ";
        // line 247
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 247, $this->source); })()), "plainPassword", [], "any", false, false, false, 247), "first", [], "any", false, false, false, 247), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 252
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 252, $this->source); })()), "plainPassword", [], "any", false, false, false, 252), "second", [], "any", false, false, false, 252), 'label');
        yield "
                            ";
        // line 253
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 253, $this->source); })()), "plainPassword", [], "any", false, false, false, 253), "second", [], "any", false, false, false, 253), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.confirm_password_placeholder"), "class" => "form-control"]]);
        // line 258
        yield "
                            ";
        // line 259
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 259, $this->source); })()), "plainPassword", [], "any", false, false, false, 259), "second", [], "any", false, false, false, 259), 'errors');
        yield "
                        </div>
                    </div>
                </div>
                
                <div class=\"mb-4 form-check\">
                    ";
        // line 265
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 265, $this->source); })()), "agreeTerms", [], "any", false, false, false, 265), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                    <label for=\"";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 266, $this->source); })()), "agreeTerms", [], "any", false, false, false, 266), "vars", [], "any", false, false, false, 266), "id", [], "any", false, false, false, 266), "html", null, true);
        yield "\" class=\"form-check-label\">
                        ";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.agree_terms"), "html", null, true);
        yield "
                        <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#termsModal\" class=\"text-decoration-none\">";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.title"), "html", null, true);
        yield "</a>
                    </label>
                    ";
        // line 270
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 270, $this->source); })()), "agreeTerms", [], "any", false, false, false, 270), 'errors');
        yield "
                </div>

                <div class=\"alert alert-info mb-4\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    ";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.info_approval"), "html", null, true);
        yield "
                </div>
                
                <div class=\"d-grid gap-2\">
                    <button type=\"submit\" class=\"btn btn-gradient\">";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.register"), "html", null, true);
        yield "</button>
                </div>
                
                ";
        // line 282
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 282, $this->source); })()), 'form_end', ["render_rest" => false]);
        yield "
            </div>
            <div class=\"card-footer text-center py-3\">
                <div class=\"text-muted\">
                    ";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.already_account"), "html", null, true);
        yield " 
                    <a href=\"";
        // line 287
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
        // line 299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.title"), "html", null, true);
        yield "</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <h5>1. ";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.introduction.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 304
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.introduction.content"), "html", null, true);
        yield "</p>

                <h5>2. ";
        // line 306
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.definitions.title"), "html", null, true);
        yield "</h5>
                <p>
                    <strong>";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.definitions.service"), "html", null, true);
        yield "</strong><br>
                    <strong>";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.definitions.user"), "html", null, true);
        yield "</strong><br>
                    <strong>";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.definitions.account"), "html", null, true);
        yield "</strong>
                </p>

                <h5>3. ";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.registration.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.registration.content1"), "html", null, true);
        yield "</p>
                <p>";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.registration.content2"), "html", null, true);
        yield "</p>

                <h5>4. ";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.content"), "html", null, true);
        yield "</p>
                <ul>
                    <li>";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.item1"), "html", null, true);
        yield "</li>
                    <li>";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.item2"), "html", null, true);
        yield "</li>
                    <li>";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.item3"), "html", null, true);
        yield "</li>
                    <li>";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.item4"), "html", null, true);
        yield "</li>
                    <li>";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.item5"), "html", null, true);
        yield "</li>
                </ul>

                <h5>5. ";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.data_protection.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.data_protection.content1"), "html", null, true);
        yield "</p>
                <p>";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.data_protection.content2"), "html", null, true);
        yield "</p>

                <h5>6. ";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.changes.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.changes.content"), "html", null, true);
        yield "</p>

                <h5>7. ";
        // line 334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.termination.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 335
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.termination.content"), "html", null, true);
        yield "</p>

                <h5>8. ";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.contact.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 338
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.contact.content"), "html", null, true);
        yield "</p>

                <p class=\"text-muted mt-3\">
                    <small>";
        // line 341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.footer.last_update"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "</small>
                </p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">";
        // line 345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.close"), "html", null, true);
        yield "</button>
                <button type=\"button\" class=\"btn btn-gradient\" data-bs-dismiss=\"modal\" onclick=\"document.getElementById('";
        // line 346
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 346, $this->source); })()), "agreeTerms", [], "any", false, false, false, 346), "vars", [], "any", false, false, false, 346), "id", [], "any", false, false, false, 346), "html", null, true);
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

    // line 353
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 354
        yield "    ";
        // line 355
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/nl.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/de.js\"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialiser le datepicker
            const datepickerElements = document.querySelectorAll('.datepicker');
            
            // Déterminer la locale actuelle
            let locale = 'fr';
            ";
        // line 367
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 367, $this->source); })()), "request", [], "any", false, false, false, 367), "locale", [], "any", false, false, false, 367) == "nl")) {
            // line 368
            yield "                locale = 'nl';
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 369
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 369, $this->source); })()), "request", [], "any", false, false, false, 369), "locale", [], "any", false, false, false, 369) == "en")) {
            // line 370
            yield "                locale = 'en';
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 371
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 371, $this->source); })()), "request", [], "any", false, false, false, 371), "locale", [], "any", false, false, false, 371) == "de")) {
            // line 372
            yield "                locale = 'de';
            ";
        }
        // line 374
        yield "            
            datepickerElements.forEach(function(element) {
                const calendarIcon = document.getElementById('calendar-icon');
                
                // Initialiser flatpickr
                const flatpickrInstance = flatpickr(element, {
                    dateFormat: \"d/m/Y\",
                    locale: locale,
                    maxDate: new Date(),
                    yearRange: [1900, new Date().getFullYear()],
                    disableMobile: false,
                    allowInput: true,
                    clickOpens: true,
                    // Permettre la sélection pour les personnes de plus de 13 ans
                    onReady: function(selectedDates, dateStr, instance) {
                        // Calculer la date minimum (13 ans avant aujourd'hui)
                        const today = new Date();
                        const minDate = new Date();
                        minDate.setFullYear(today.getFullYear() - 13);
                        instance.config.maxDate = minDate;
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
        return array (  710 => 374,  706 => 372,  704 => 371,  701 => 370,  699 => 369,  696 => 368,  694 => 367,  680 => 355,  678 => 354,  668 => 353,  652 => 346,  648 => 345,  639 => 341,  633 => 338,  629 => 337,  624 => 335,  620 => 334,  615 => 332,  611 => 331,  606 => 329,  602 => 328,  598 => 327,  592 => 324,  588 => 323,  584 => 322,  580 => 321,  576 => 320,  571 => 318,  567 => 317,  562 => 315,  558 => 314,  554 => 313,  548 => 310,  544 => 309,  540 => 308,  535 => 306,  530 => 304,  526 => 303,  519 => 299,  502 => 287,  498 => 286,  491 => 282,  485 => 279,  478 => 275,  470 => 270,  465 => 268,  461 => 267,  457 => 266,  453 => 265,  444 => 259,  441 => 258,  439 => 253,  435 => 252,  427 => 247,  424 => 246,  422 => 241,  418 => 240,  407 => 232,  404 => 231,  402 => 229,  398 => 228,  390 => 223,  387 => 222,  385 => 217,  381 => 216,  370 => 208,  367 => 207,  365 => 205,  361 => 204,  353 => 199,  350 => 198,  348 => 193,  344 => 192,  336 => 187,  333 => 186,  331 => 181,  327 => 180,  316 => 172,  313 => 171,  311 => 166,  307 => 165,  299 => 160,  296 => 159,  294 => 154,  290 => 153,  282 => 148,  279 => 147,  277 => 142,  273 => 141,  262 => 133,  255 => 128,  253 => 122,  248 => 120,  237 => 112,  234 => 111,  232 => 106,  228 => 105,  220 => 100,  217 => 99,  215 => 94,  211 => 93,  200 => 85,  197 => 84,  195 => 79,  191 => 78,  183 => 73,  180 => 72,  178 => 67,  174 => 66,  166 => 61,  162 => 60,  156 => 57,  150 => 53,  140 => 52,  89 => 7,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'registration.title'|trans }}{% endblock %}

{% block stylesheets %}
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
        }
        
        .registration-form .form-control {
            transition: all 0.3s ease;
            border: 1px solid #ced4da;
        }
        
        .registration-form .form-control:focus {
            border-color: #8e44ad;
            box-shadow: 0 0 0 0.2rem rgba(142, 68, 173, 0.25);
        }
        
        .registration-form .form-control:hover {
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
    </style>
{% endblock %}

{% block body %}
<div class=\"row justify-content-center\">
    <div class=\"col-lg-8\">
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
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-8\">
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
                    <div class=\"col-md-2\">
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
                    <div class=\"col-md-2\">
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
    {# Script pour le datepicker #}
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/nl.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/de.js\"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialiser le datepicker
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
                
                // Initialiser flatpickr
                const flatpickrInstance = flatpickr(element, {
                    dateFormat: \"d/m/Y\",
                    locale: locale,
                    maxDate: new Date(),
                    yearRange: [1900, new Date().getFullYear()],
                    disableMobile: false,
                    allowInput: true,
                    clickOpens: true,
                    // Permettre la sélection pour les personnes de plus de 13 ans
                    onReady: function(selectedDates, dateStr, instance) {
                        // Calculer la date minimum (13 ans avant aujourd'hui)
                        const today = new Date();
                        const minDate = new Date();
                        minDate.setFullYear(today.getFullYear() - 13);
                        instance.config.maxDate = minDate;
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
