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
            'body' => [$this, 'block_body'],
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"row justify-content-center\">
    <div class=\"col-lg-8\">
        <div class=\"card shadow-lg\">
            <div class=\"card-header text-center\">
                <h1 class=\"h4 mb-0\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.header"), "html", null, true);
        yield "</h1>
            </div>
            <div class=\"card-body p-4\">
                ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 13, $this->source); })()), 'form_start');
        yield "
                ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 14, $this->source); })()), "_token", [], "any", false, false, false, 14), 'widget');
        yield "
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 18, $this->source); })()), "email", [], "any", false, false, false, 18), 'row', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.email_placeholder")]]);
        // line 20
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "username", [], "any", false, false, false, 23), 'row', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.username_placeholder")]]);
        // line 25
        yield "
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "firstName", [], "any", false, false, false, 31), 'row', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.first_name_placeholder")]]);
        // line 33
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "lastName", [], "any", false, false, false, 36), 'row', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.last_name_placeholder")]]);
        // line 38
        yield "
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-8\">
                        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "street", [], "any", false, false, false, 44), 'row', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.street_placeholder")]]);
        // line 46
        yield "
                    </div>
                    <div class=\"col-md-2\">
                        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "houseNumber", [], "any", false, false, false, 49), 'row', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.house_number_placeholder")]]);
        // line 51
        yield "
                    </div>
                    <div class=\"col-md-2\">
                        ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "boxNumber", [], "any", false, false, false, 54), 'row', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.box_number_placeholder")]]);
        // line 56
        yield "
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-3\">
                        ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "postalCode", [], "any", false, false, false, 62), 'row', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.postal_code_placeholder")]]);
        // line 64
        yield "
                    </div>
                    <div class=\"col-md-5\">
                        ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), "city", [], "any", false, false, false, 67), 'row', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.city_placeholder")]]);
        // line 69
        yield "
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), "country", [], "any", false, false, false, 72), 'row');
        yield "
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 78, $this->source); })()), "phoneNumber", [], "any", false, false, false, 78), 'row', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.phone_number_placeholder")]]);
        // line 80
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 83, $this->source); })()), "locale", [], "any", false, false, false, 83), 'row');
        yield "
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 89, $this->source); })()), "plainPassword", [], "any", false, false, false, 89), "first", [], "any", false, false, false, 89), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.password"), "attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.password_placeholder")]]);
        // line 92
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 95, $this->source); })()), "plainPassword", [], "any", false, false, false, 95), "second", [], "any", false, false, false, 95), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.confirm_password"), "attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.confirm_password_placeholder")]]);
        // line 98
        yield "
                    </div>
                </div>
                
                <div class=\"mb-3 form-check\">
                    ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 103, $this->source); })()), "agreeTerms", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                    <label for=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 104, $this->source); })()), "agreeTerms", [], "any", false, false, false, 104), "vars", [], "any", false, false, false, 104), "id", [], "any", false, false, false, 104), "html", null, true);
        yield "\" class=\"form-check-label\">
                        ";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.agree_terms"), "html", null, true);
        yield "
                        <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#termsModal\" class=\"text-decoration-none\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.title"), "html", null, true);
        yield "</a>
                    </label>
                    ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 108, $this->source); })()), "agreeTerms", [], "any", false, false, false, 108), 'errors');
        yield "
                </div>

                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    ";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.info_approval"), "html", null, true);
        yield "
                </div>
                
                <div class=\"d-grid gap-2\">
                    <button type=\"submit\" class=\"btn btn-gradient\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.register"), "html", null, true);
        yield "</button>
                </div>
                
                ";
        // line 120
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 120, $this->source); })()), 'form_end', ["render_rest" => false]);
        yield "
            </div>
            <div class=\"card-footer text-center py-3\">
                <div class=\"text-muted\">
                    ";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.already_account"), "html", null, true);
        yield " 
                    <a href=\"";
        // line 125
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
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.title"), "html", null, true);
        yield "</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <h5>1. ";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.introduction.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.introduction.content"), "html", null, true);
        yield "</p>

                <h5>2. ";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.definitions.title"), "html", null, true);
        yield "</h5>
                <p>
                    <strong>";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.definitions.service"), "html", null, true);
        yield "</strong><br>
                    <strong>";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.definitions.user"), "html", null, true);
        yield "</strong><br>
                    <strong>";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.definitions.account"), "html", null, true);
        yield "</strong>
                </p>

                <h5>3. ";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.registration.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.registration.content1"), "html", null, true);
        yield "</p>
                <p>";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.registration.content2"), "html", null, true);
        yield "</p>

                <h5>4. ";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.content"), "html", null, true);
        yield "</p>
                <ul>
                    <li>";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.item1"), "html", null, true);
        yield "</li>
                    <li>";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.item2"), "html", null, true);
        yield "</li>
                    <li>";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.item3"), "html", null, true);
        yield "</li>
                    <li>";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.item4"), "html", null, true);
        yield "</li>
                    <li>";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.rights.item5"), "html", null, true);
        yield "</li>
                </ul>

                <h5>5. ";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.data_protection.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.data_protection.content1"), "html", null, true);
        yield "</p>
                <p>";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.data_protection.content2"), "html", null, true);
        yield "</p>

                <h5>6. ";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.changes.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.changes.content"), "html", null, true);
        yield "</p>

                <h5>7. ";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.termination.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.termination.content"), "html", null, true);
        yield "</p>

                <h5>8. ";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.contact.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.contact.content"), "html", null, true);
        yield "</p>

                <p class=\"text-muted mt-3\">
                    <small>";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.footer.last_update"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "</small>
                </p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.form.close"), "html", null, true);
        yield "</button>
                <button type=\"button\" class=\"btn btn-gradient\" data-bs-dismiss=\"modal\" onclick=\"document.getElementById('";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 184, $this->source); })()), "agreeTerms", [], "any", false, false, false, 184), "vars", [], "any", false, false, false, 184), "id", [], "any", false, false, false, 184), "html", null, true);
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
        return array (  420 => 184,  416 => 183,  407 => 179,  401 => 176,  397 => 175,  392 => 173,  388 => 172,  383 => 170,  379 => 169,  374 => 167,  370 => 166,  366 => 165,  360 => 162,  356 => 161,  352 => 160,  348 => 159,  344 => 158,  339 => 156,  335 => 155,  330 => 153,  326 => 152,  322 => 151,  316 => 148,  312 => 147,  308 => 146,  303 => 144,  298 => 142,  294 => 141,  287 => 137,  270 => 125,  266 => 124,  259 => 120,  253 => 117,  246 => 113,  238 => 108,  233 => 106,  229 => 105,  225 => 104,  221 => 103,  214 => 98,  212 => 95,  207 => 92,  205 => 89,  196 => 83,  191 => 80,  189 => 78,  180 => 72,  175 => 69,  173 => 67,  168 => 64,  166 => 62,  158 => 56,  156 => 54,  151 => 51,  149 => 49,  144 => 46,  142 => 44,  134 => 38,  132 => 36,  127 => 33,  125 => 31,  117 => 25,  115 => 23,  110 => 20,  108 => 18,  101 => 14,  97 => 13,  91 => 10,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'registration.title'|trans }}{% endblock %}

{% block body %}
<div class=\"row justify-content-center\">
    <div class=\"col-lg-8\">
        <div class=\"card shadow-lg\">
            <div class=\"card-header text-center\">
                <h1 class=\"h4 mb-0\">{{ 'registration.header'|trans }}</h1>
            </div>
            <div class=\"card-body p-4\">
                {{ form_start(registrationForm) }}
                {{ form_widget(registrationForm._token) }}
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        {{ form_row(registrationForm.email, {
                            'attr': {'placeholder': 'registration.form.email_placeholder'|trans}
                        }) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(registrationForm.username, {
                            'attr': {'placeholder': 'registration.form.username_placeholder'|trans}
                        }) }}
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        {{ form_row(registrationForm.firstName, {
                            'attr': {'placeholder': 'registration.form.first_name_placeholder'|trans}
                        }) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(registrationForm.lastName, {
                            'attr': {'placeholder': 'registration.form.last_name_placeholder'|trans}
                        }) }}
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-8\">
                        {{ form_row(registrationForm.street, {
                            'attr': {'placeholder': 'registration.form.street_placeholder'|trans}
                        }) }}
                    </div>
                    <div class=\"col-md-2\">
                        {{ form_row(registrationForm.houseNumber, {
                            'attr': {'placeholder': 'registration.form.house_number_placeholder'|trans}
                        }) }}
                    </div>
                    <div class=\"col-md-2\">
                        {{ form_row(registrationForm.boxNumber, {
                            'attr': {'placeholder': 'registration.form.box_number_placeholder'|trans}
                        }) }}
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-3\">
                        {{ form_row(registrationForm.postalCode, {
                            'attr': {'placeholder': 'registration.form.postal_code_placeholder'|trans}
                        }) }}
                    </div>
                    <div class=\"col-md-5\">
                        {{ form_row(registrationForm.city, {
                            'attr': {'placeholder': 'registration.form.city_placeholder'|trans}
                        }) }}
                    </div>
                    <div class=\"col-md-4\">
                        {{ form_row(registrationForm.country) }}
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        {{ form_row(registrationForm.phoneNumber, {
                            'attr': {'placeholder': 'registration.form.phone_number_placeholder'|trans}
                        }) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(registrationForm.locale) }}
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        {{ form_row(registrationForm.plainPassword.first, {
                            'label': 'registration.form.password'|trans,
                            'attr': {'placeholder': 'registration.form.password_placeholder'|trans}
                        }) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(registrationForm.plainPassword.second, {
                            'label': 'registration.form.confirm_password'|trans,
                            'attr': {'placeholder': 'registration.form.confirm_password_placeholder'|trans}
                        }) }}
                    </div>
                </div>
                
                <div class=\"mb-3 form-check\">
                    {{ form_widget(registrationForm.agreeTerms, {'attr': {'class': 'form-check-input'}}) }}
                    <label for=\"{{ registrationForm.agreeTerms.vars.id }}\" class=\"form-check-label\">
                        {{ 'registration.form.agree_terms'|trans }}
                        <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#termsModal\" class=\"text-decoration-none\">{{ 'terms.title'|trans }}</a>
                    </label>
                    {{ form_errors(registrationForm.agreeTerms) }}
                </div>

                <div class=\"alert alert-info\">
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
{% endblock %}", "registration/register.html.twig", "/var/www/serveur/templates/registration/register.html.twig");
    }
}
