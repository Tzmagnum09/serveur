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
        // line 7
        yield "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <style>
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

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 29
        yield "<div class=\"sidebar\">
    <h5 class=\"mb-4\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.sidebar.title"), "html", null, true);
        yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">
                <i class=\"fas fa-user me-2\"></i> ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.sidebar.overview"), "html", null, true);
        yield "
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
        yield "\">
                <i class=\"fas fa-edit me-2\"></i> ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.sidebar.edit_profile"), "html", null, true);
        yield "
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_change_password");
        yield "\">
                <i class=\"fas fa-key me-2\"></i> ";
        // line 44
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

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 52
        yield "<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.edit.title"), "html", null, true);
        yield "</h1>
        <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-1\"></i> ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.edit.back_btn"), "html", null, true);
        yield "
        </a>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.edit.form_title"), "html", null, true);
        yield "</h5>
        </div>
        <div class=\"card-body\">
            ";
        // line 65
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 65, $this->source); })()), 'form_start');
        yield "
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 68, $this->source); })()), "email", [], "any", false, false, false, 68), 'row');
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 71, $this->source); })()), "username", [], "any", false, false, false, 71), 'row');
        yield "
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 77, $this->source); })()), "firstName", [], "any", false, false, false, 77), 'row');
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 80, $this->source); })()), "lastName", [], "any", false, false, false, 80), 'row');
        yield "
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 86, $this->source); })()), "birthDate", [], "any", false, false, false, 86), 'label');
        yield "
                        <div class=\"input-group date-picker-group\">
                            ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 88, $this->source); })()), "birthDate", [], "any", false, false, false, 88), 'widget', ["attr" => ["placeholder" => "JJ/MM/AAAA", "class" => "form-control datepicker", "autocomplete" => "off"]]);
        // line 94
        yield "
                            <span class=\"input-group-text\" id=\"calendar-icon\">
                                <i class=\"fas fa-calendar-alt\"></i>
                            </span>
                        </div>
                        ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 99, $this->source); })()), "birthDate", [], "any", false, false, false, 99), 'errors');
        yield "
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-8\">
                        ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 105, $this->source); })()), "street", [], "any", false, false, false, 105), 'row');
        yield "
                    </div>
                    <div class=\"col-md-2\">
                        ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 108, $this->source); })()), "houseNumber", [], "any", false, false, false, 108), 'row');
        yield "
                    </div>
                    <div class=\"col-md-2\">
                        ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 111, $this->source); })()), "boxNumber", [], "any", false, false, false, 111), 'row');
        yield "
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-3\">
                        ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 117, $this->source); })()), "postalCode", [], "any", false, false, false, 117), 'row');
        yield "
                     </div>
                    <div class=\"col-md-5\">
                        ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 120, $this->source); })()), "city", [], "any", false, false, false, 120), 'row');
        yield "
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 123, $this->source); })()), "country", [], "any", false, false, false, 123), 'row');
        yield "
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        ";
        // line 129
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 129, $this->source); })()), "phoneNumber", [], "any", false, false, false, 129), 'row');
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 132, $this->source); })()), "locale", [], "any", false, false, false, 132), 'row');
        yield "
                    </div>
                </div>
                
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"alert alert-info\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            ";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.edit.language_info"), "html", null, true);
        yield "
                        </div>
                    </div>
                </div>
                
                <div class=\"d-flex justify-content-end\">
                    <a href=\"";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"btn btn-outline-secondary me-2\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.edit.cancel_btn"), "html", null, true);
        yield "</a>
                    <button type=\"submit\" class=\"btn btn-gradient\">";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.edit.save_btn"), "html", null, true);
        yield "</button>
                </div>
            ";
        // line 149
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 149, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 155
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 156
        yield "    ";
        // line 157
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
        // line 169
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 169, $this->source); })()), "request", [], "any", false, false, false, 169), "locale", [], "any", false, false, false, 169) == "nl")) {
            // line 170
            yield "                locale = 'nl';
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 171
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 171, $this->source); })()), "request", [], "any", false, false, false, 171), "locale", [], "any", false, false, false, 171) == "en")) {
            // line 172
            yield "                locale = 'en';
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 173
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 173, $this->source); })()), "request", [], "any", false, false, false, 173), "locale", [], "any", false, false, false, 173) == "de")) {
            // line 174
            yield "                locale = 'de';
            ";
        }
        // line 176
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
        return array (  406 => 176,  402 => 174,  400 => 173,  397 => 172,  395 => 171,  392 => 170,  390 => 169,  376 => 157,  374 => 156,  364 => 155,  351 => 149,  346 => 147,  340 => 146,  331 => 140,  320 => 132,  314 => 129,  305 => 123,  299 => 120,  293 => 117,  284 => 111,  278 => 108,  272 => 105,  263 => 99,  256 => 94,  254 => 88,  249 => 86,  240 => 80,  234 => 77,  225 => 71,  219 => 68,  213 => 65,  207 => 62,  198 => 56,  194 => 55,  190 => 54,  186 => 52,  176 => 51,  162 => 44,  158 => 43,  151 => 39,  147 => 38,  140 => 34,  136 => 33,  130 => 30,  127 => 29,  117 => 28,  90 => 7,  88 => 6,  78 => 5,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'profile.edit.title'|trans }}{% endblock %}

{% block stylesheets %}
    {# Style pour le datepicker #}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <style>
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
            {{ form_start(profileForm) }}
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        {{ form_row(profileForm.email) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(profileForm.username) }}
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        {{ form_row(profileForm.firstName) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(profileForm.lastName) }}
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
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
                        {{ form_errors(profileForm.birthDate) }}
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-8\">
                        {{ form_row(profileForm.street) }}
                    </div>
                    <div class=\"col-md-2\">
                        {{ form_row(profileForm.houseNumber) }}
                    </div>
                    <div class=\"col-md-2\">
                        {{ form_row(profileForm.boxNumber) }}
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-3\">
                        {{ form_row(profileForm.postalCode) }}
                     </div>
                    <div class=\"col-md-5\">
                        {{ form_row(profileForm.city) }}
                    </div>
                    <div class=\"col-md-4\">
                        {{ form_row(profileForm.country) }}
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        {{ form_row(profileForm.phoneNumber) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(profileForm.locale) }}
                    </div>
                </div>
                
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"alert alert-info\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            {{ 'profile.edit.language_info'|trans }}
                        </div>
                    </div>
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
{% endblock %}", "profile/edit.html.twig", "/var/www/serveur/templates/profile/edit.html.twig");
    }
}
