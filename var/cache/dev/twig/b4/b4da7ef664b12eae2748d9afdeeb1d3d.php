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

/* partials/cookie-modal.html.twig */
class __TwigTemplate_bc3267d67e2d57b5af2fb4a65242901d extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/cookie-modal.html.twig"));

        // line 2
        yield "
<div id=\"cookie-modal\" class=\"cookie-modal\">
    <div class=\"cookie-modal-dialog\">
        <div class=\"cookie-modal-header\">
            <div class=\"d-flex justify-content-between align-items-center w-100\">
                <h5 class=\"cookie-modal-title\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.title"), "html", null, true);
        yield "</h5>
                <select id=\"cookie-modal-language\" class=\"form-select form-select-sm cookie-language-selector\" style=\"width: 150px;\">
                    <option value=\"fr\" ";
        // line 9
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "locale", [], "any", false, false, false, 9) == "fr")) {
            yield "selected";
        }
        yield ">Français</option>
                    <option value=\"en\" ";
        // line 10
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "locale", [], "any", false, false, false, 10) == "en")) {
            yield "selected";
        }
        yield ">English</option>
                    <option value=\"nl\" ";
        // line 11
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "locale", [], "any", false, false, false, 11) == "nl")) {
            yield "selected";
        }
        yield ">Nederlands</option>
                    <option value=\"de\" ";
        // line 12
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "locale", [], "any", false, false, false, 12) == "de")) {
            yield "selected";
        }
        yield ">Deutsch</option>
                </select>
            </div>
            <button id=\"cookie-modal-close\" class=\"cookie-modal-close\" aria-label=\"Close\">&times;</button>
        </div>
        
        <div class=\"cookie-modal-body\">
            <div class=\"cookie-tabs\">
                <div class=\"cookie-tab active\" data-tab=\"overview\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.tab.overview"), "html", null, true);
        yield "</div>
                <div class=\"cookie-tab\" data-tab=\"details\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.tab.details"), "html", null, true);
        yield "</div>
                <div class=\"cookie-tab\" data-tab=\"about\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.tab.about"), "html", null, true);
        yield "</div>
            </div>
            
            <div class=\"cookie-tab-content active\" id=\"cookie-tab-overview\">
                <p>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.intro"), "html", null, true);
        yield "</p>
                
                <div class=\"cookie-type\">
                    <div class=\"cookie-type-header\">
                        <h6 class=\"cookie-type-title\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.necessary.title"), "html", null, true);
        yield "</h6>
                        <label class=\"cookie-switch\">
                            <input type=\"checkbox\" id=\"cookie-necessary-checkbox\" checked disabled>
                            <span class=\"cookie-slider\"></span>
                        </label>
                    </div>
                    <p class=\"cookie-type-description\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.necessary.description"), "html", null, true);
        yield "</p>
                </div>
                
                <div class=\"cookie-type\">
                    <div class=\"cookie-type-header\">
                        <h6 class=\"cookie-type-title\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.preferences.title"), "html", null, true);
        yield "</h6>
                        <label class=\"cookie-switch\">
                            <input type=\"checkbox\" id=\"cookie-preferences-checkbox\">
                            <span class=\"cookie-slider\"></span>
                        </label>
                    </div>
                    <p class=\"cookie-type-description\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.preferences.description"), "html", null, true);
        yield "</p>
                </div>
                
                <div class=\"cookie-type\">
                    <div class=\"cookie-type-header\">
                        <h6 class=\"cookie-type-title\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.statistics.title"), "html", null, true);
        yield "</h6>
                        <label class=\"cookie-switch\">
                            <input type=\"checkbox\" id=\"cookie-statistics-checkbox\">
                            <span class=\"cookie-slider\"></span>
                        </label>
                    </div>
                    <p class=\"cookie-type-description\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.statistics.description"), "html", null, true);
        yield "</p>
                </div>
                
                <div class=\"cookie-type\">
                    <div class=\"cookie-type-header\">
                        <h6 class=\"cookie-type-title\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.marketing.title"), "html", null, true);
        yield "</h6>
                        <label class=\"cookie-switch\">
                            <input type=\"checkbox\" id=\"cookie-marketing-checkbox\">
                            <span class=\"cookie-slider\"></span>
                        </label>
                    </div>
                    <p class=\"cookie-type-description\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.marketing.description"), "html", null, true);
        yield "</p>
                </div>
            </div>
            
            <div class=\"cookie-tab-content\" id=\"cookie-tab-details\">
                <!-- Cookies nécessaires -->
                <div class=\"cookie-type\">
                    <h6 class=\"cookie-type-title\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.title"), "html", null, true);
        yield "</h6>
                    <p class=\"cookie-type-description\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.description"), "html", null, true);
        yield "</p>
                    <table class=\"cookie-table\">
                        <thead>
                            <tr>
                                <th>";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.name"), "html", null, true);
        yield "</th>
                                <th>";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.provider"), "html", null, true);
        yield "</th>
                                <th>";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.purpose"), "html", null, true);
        yield "</th>
                                <th>";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.expiry"), "html", null, true);
        yield "</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PHPSESSID</td>
                                <td>";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "request", [], "any", false, false, false, 90), "host", [], "any", false, false, false, 90), "html", null, true);
        yield "</td>
                                <td>";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.session"), "html", null, true);
        yield "</td>
                                <td>";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.session_end"), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <td>cookieConsent</td>
                                <td>";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "request", [], "any", false, false, false, 96), "host", [], "any", false, false, false, 96), "html", null, true);
        yield "</td>
                                <td>";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.consent"), "html", null, true);
        yield "</td>
                                <td>6 ";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.month"), "html", null, true);
        yield "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <!-- Cookies de préférences -->
                <div class=\"cookie-type\">
                    <h6 class=\"cookie-type-title\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.preferences.title"), "html", null, true);
        yield "</h6>
                    <p class=\"cookie-type-description\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.preferences.description"), "html", null, true);
        yield "</p>
                    <table class=\"cookie-table\">
                        <thead>
                            <tr>
                                <th>";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.name"), "html", null, true);
        yield "</th>
                                <th>";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.provider"), "html", null, true);
        yield "</th>
                                <th>";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.purpose"), "html", null, true);
        yield "</th>
                                <th>";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.expiry"), "html", null, true);
        yield "</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>_locale</td>
                                <td>";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "request", [], "any", false, false, false, 120), "host", [], "any", false, false, false, 120), "html", null, true);
        yield "</td>
                                <td>";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.preferences.language"), "html", null, true);
        yield "</td>
                                <td>1 ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.year"), "html", null, true);
        yield "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <!-- Cookies statistiques -->
                <div class=\"cookie-type\">
                    <h6 class=\"cookie-type-title\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.statistics.title"), "html", null, true);
        yield "</h6>
                    <p class=\"cookie-type-description\">";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.statistics.description"), "html", null, true);
        yield "</p>
                    <table class=\"cookie-table\">
                        <thead>
                            <tr>
                                <th>";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.name"), "html", null, true);
        yield "</th>
                                <th>";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.provider"), "html", null, true);
        yield "</th>
                                <th>";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.purpose"), "html", null, true);
        yield "</th>
                                <th>";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.expiry"), "html", null, true);
        yield "</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>_ga</td>
                                <td>Google</td>
                                <td>";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.statistics.analytics"), "html", null, true);
        yield "</td>
                                <td>2 ";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.statistics.years"), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <td>_gid</td>
                                <td>Google</td>
                                <td>";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.statistics.user_id"), "html", null, true);
        yield "</td>
                                <td>24 ";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.statistics.hours"), "html", null, true);
        yield "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <!-- Cookies marketing -->
                <div class=\"cookie-type\">
                    <h6 class=\"cookie-type-title\">";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.marketing.title"), "html", null, true);
        yield "</h6>
                    <p class=\"cookie-type-description\">";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.marketing.description"), "html", null, true);
        yield "</p>
                    <table class=\"cookie-table\">
                        <thead>
                            <tr>
                                <th>";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.name"), "html", null, true);
        yield "</th>
                                <th>";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.provider"), "html", null, true);
        yield "</th>
                                <th>";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.purpose"), "html", null, true);
        yield "</th>
                                <th>";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.expiry"), "html", null, true);
        yield "</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>_fbp</td>
                                <td>Facebook</td>
                                <td>";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.marketing.facebook"), "html", null, true);
        yield "</td>
                                <td>3 ";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.marketing.months"), "html", null, true);
        yield "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class=\"cookie-tab-content\" id=\"cookie-tab-about\">
                <h6>";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.what_are.title"), "html", null, true);
        yield "</h6>
                <p>";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.what_are.description"), "html", null, true);
        yield "</p>
                
                <h6>";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.how_used.title"), "html", null, true);
        yield "</h6>
                <p>";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.how_used.description"), "html", null, true);
        yield "</p>
                
                <h6>";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.how_manage.title"), "html", null, true);
        yield "</h6>
                <p>";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.how_manage.description"), "html", null, true);
        yield "</p>
                
                <h6>";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.more_info.title"), "html", null, true);
        yield "</h6>
                <p>
                    ";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.more_info.description"), "html", null, true);
        yield "
                    <a href=\"";
        // line 196
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_terms");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.more_info.terms_link"), "html", null, true);
        yield "</a>.
                </p>
            </div>
        </div>
        
        <div class=\"cookie-modal-footer\">
            <button id=\"cookie-modal-necessary-btn\" class=\"btn btn-cookie btn-cookie-secondary\">
                ";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.necessary_only"), "html", null, true);
        yield "
            </button>
            <button id=\"cookie-modal-accept-all-btn\" class=\"btn btn-cookie btn-cookie-outline\">
                ";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.accept_all"), "html", null, true);
        yield "
            </button>
            <button id=\"cookie-save-preferences-btn\" class=\"btn btn-cookie btn-cookie-primary\">
                ";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.save"), "html", null, true);
        yield "
            </button>
        </div>
    </div>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/cookie-modal.html.twig";
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
        return array (  465 => 209,  459 => 206,  453 => 203,  441 => 196,  437 => 195,  432 => 193,  427 => 191,  423 => 190,  418 => 188,  414 => 187,  409 => 185,  405 => 184,  394 => 176,  390 => 175,  380 => 168,  376 => 167,  372 => 166,  368 => 165,  361 => 161,  357 => 160,  346 => 152,  342 => 151,  334 => 146,  330 => 145,  320 => 138,  316 => 137,  312 => 136,  308 => 135,  301 => 131,  297 => 130,  286 => 122,  282 => 121,  278 => 120,  269 => 114,  265 => 113,  261 => 112,  257 => 111,  250 => 107,  246 => 106,  235 => 98,  231 => 97,  227 => 96,  220 => 92,  216 => 91,  212 => 90,  203 => 84,  199 => 83,  195 => 82,  191 => 81,  184 => 77,  180 => 76,  170 => 69,  161 => 63,  153 => 58,  144 => 52,  136 => 47,  127 => 41,  119 => 36,  110 => 30,  103 => 26,  96 => 22,  92 => 21,  88 => 20,  75 => 12,  69 => 11,  63 => 10,  57 => 9,  52 => 7,  45 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# À placer dans templates/partials/cookie-modal.html.twig #}

<div id=\"cookie-modal\" class=\"cookie-modal\">
    <div class=\"cookie-modal-dialog\">
        <div class=\"cookie-modal-header\">
            <div class=\"d-flex justify-content-between align-items-center w-100\">
                <h5 class=\"cookie-modal-title\">{{ 'cookie.modal.title'|trans }}</h5>
                <select id=\"cookie-modal-language\" class=\"form-select form-select-sm cookie-language-selector\" style=\"width: 150px;\">
                    <option value=\"fr\" {% if app.request.locale == 'fr' %}selected{% endif %}>Français</option>
                    <option value=\"en\" {% if app.request.locale == 'en' %}selected{% endif %}>English</option>
                    <option value=\"nl\" {% if app.request.locale == 'nl' %}selected{% endif %}>Nederlands</option>
                    <option value=\"de\" {% if app.request.locale == 'de' %}selected{% endif %}>Deutsch</option>
                </select>
            </div>
            <button id=\"cookie-modal-close\" class=\"cookie-modal-close\" aria-label=\"Close\">&times;</button>
        </div>
        
        <div class=\"cookie-modal-body\">
            <div class=\"cookie-tabs\">
                <div class=\"cookie-tab active\" data-tab=\"overview\">{{ 'cookie.modal.tab.overview'|trans }}</div>
                <div class=\"cookie-tab\" data-tab=\"details\">{{ 'cookie.modal.tab.details'|trans }}</div>
                <div class=\"cookie-tab\" data-tab=\"about\">{{ 'cookie.modal.tab.about'|trans }}</div>
            </div>
            
            <div class=\"cookie-tab-content active\" id=\"cookie-tab-overview\">
                <p>{{ 'cookie.modal.overview.intro'|trans }}</p>
                
                <div class=\"cookie-type\">
                    <div class=\"cookie-type-header\">
                        <h6 class=\"cookie-type-title\">{{ 'cookie.modal.overview.necessary.title'|trans }}</h6>
                        <label class=\"cookie-switch\">
                            <input type=\"checkbox\" id=\"cookie-necessary-checkbox\" checked disabled>
                            <span class=\"cookie-slider\"></span>
                        </label>
                    </div>
                    <p class=\"cookie-type-description\">{{ 'cookie.modal.overview.necessary.description'|trans }}</p>
                </div>
                
                <div class=\"cookie-type\">
                    <div class=\"cookie-type-header\">
                        <h6 class=\"cookie-type-title\">{{ 'cookie.modal.overview.preferences.title'|trans }}</h6>
                        <label class=\"cookie-switch\">
                            <input type=\"checkbox\" id=\"cookie-preferences-checkbox\">
                            <span class=\"cookie-slider\"></span>
                        </label>
                    </div>
                    <p class=\"cookie-type-description\">{{ 'cookie.modal.overview.preferences.description'|trans }}</p>
                </div>
                
                <div class=\"cookie-type\">
                    <div class=\"cookie-type-header\">
                        <h6 class=\"cookie-type-title\">{{ 'cookie.modal.overview.statistics.title'|trans }}</h6>
                        <label class=\"cookie-switch\">
                            <input type=\"checkbox\" id=\"cookie-statistics-checkbox\">
                            <span class=\"cookie-slider\"></span>
                        </label>
                    </div>
                    <p class=\"cookie-type-description\">{{ 'cookie.modal.overview.statistics.description'|trans }}</p>
                </div>
                
                <div class=\"cookie-type\">
                    <div class=\"cookie-type-header\">
                        <h6 class=\"cookie-type-title\">{{ 'cookie.modal.overview.marketing.title'|trans }}</h6>
                        <label class=\"cookie-switch\">
                            <input type=\"checkbox\" id=\"cookie-marketing-checkbox\">
                            <span class=\"cookie-slider\"></span>
                        </label>
                    </div>
                    <p class=\"cookie-type-description\">{{ 'cookie.modal.overview.marketing.description'|trans }}</p>
                </div>
            </div>
            
            <div class=\"cookie-tab-content\" id=\"cookie-tab-details\">
                <!-- Cookies nécessaires -->
                <div class=\"cookie-type\">
                    <h6 class=\"cookie-type-title\">{{ 'cookie.modal.details.necessary.title'|trans }}</h6>
                    <p class=\"cookie-type-description\">{{ 'cookie.modal.details.necessary.description'|trans }}</p>
                    <table class=\"cookie-table\">
                        <thead>
                            <tr>
                                <th>{{ 'cookie.modal.details.table.name'|trans }}</th>
                                <th>{{ 'cookie.modal.details.table.provider'|trans }}</th>
                                <th>{{ 'cookie.modal.details.table.purpose'|trans }}</th>
                                <th>{{ 'cookie.modal.details.table.expiry'|trans }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PHPSESSID</td>
                                <td>{{ app.request.host }}</td>
                                <td>{{ 'cookie.modal.details.necessary.session'|trans }}</td>
                                <td>{{ 'cookie.modal.details.necessary.session_end'|trans }}</td>
                            </tr>
                            <tr>
                                <td>cookieConsent</td>
                                <td>{{ app.request.host }}</td>
                                <td>{{ 'cookie.modal.details.necessary.consent'|trans }}</td>
                                <td>6 {{ 'cookie.modal.details.necessary.month'|trans }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <!-- Cookies de préférences -->
                <div class=\"cookie-type\">
                    <h6 class=\"cookie-type-title\">{{ 'cookie.modal.details.preferences.title'|trans }}</h6>
                    <p class=\"cookie-type-description\">{{ 'cookie.modal.details.preferences.description'|trans }}</p>
                    <table class=\"cookie-table\">
                        <thead>
                            <tr>
                                <th>{{ 'cookie.modal.details.table.name'|trans }}</th>
                                <th>{{ 'cookie.modal.details.table.provider'|trans }}</th>
                                <th>{{ 'cookie.modal.details.table.purpose'|trans }}</th>
                                <th>{{ 'cookie.modal.details.table.expiry'|trans }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>_locale</td>
                                <td>{{ app.request.host }}</td>
                                <td>{{ 'cookie.modal.details.preferences.language'|trans }}</td>
                                <td>1 {{ 'cookie.modal.details.necessary.year'|trans }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <!-- Cookies statistiques -->
                <div class=\"cookie-type\">
                    <h6 class=\"cookie-type-title\">{{ 'cookie.modal.details.statistics.title'|trans }}</h6>
                    <p class=\"cookie-type-description\">{{ 'cookie.modal.details.statistics.description'|trans }}</p>
                    <table class=\"cookie-table\">
                        <thead>
                            <tr>
                                <th>{{ 'cookie.modal.details.table.name'|trans }}</th>
                                <th>{{ 'cookie.modal.details.table.provider'|trans }}</th>
                                <th>{{ 'cookie.modal.details.table.purpose'|trans }}</th>
                                <th>{{ 'cookie.modal.details.table.expiry'|trans }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>_ga</td>
                                <td>Google</td>
                                <td>{{ 'cookie.modal.details.statistics.analytics'|trans }}</td>
                                <td>2 {{ 'cookie.modal.details.statistics.years'|trans }}</td>
                            </tr>
                            <tr>
                                <td>_gid</td>
                                <td>Google</td>
                                <td>{{ 'cookie.modal.details.statistics.user_id'|trans }}</td>
                                <td>24 {{ 'cookie.modal.details.statistics.hours'|trans }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <!-- Cookies marketing -->
                <div class=\"cookie-type\">
                    <h6 class=\"cookie-type-title\">{{ 'cookie.modal.details.marketing.title'|trans }}</h6>
                    <p class=\"cookie-type-description\">{{ 'cookie.modal.details.marketing.description'|trans }}</p>
                    <table class=\"cookie-table\">
                        <thead>
                            <tr>
                                <th>{{ 'cookie.modal.details.table.name'|trans }}</th>
                                <th>{{ 'cookie.modal.details.table.provider'|trans }}</th>
                                <th>{{ 'cookie.modal.details.table.purpose'|trans }}</th>
                                <th>{{ 'cookie.modal.details.table.expiry'|trans }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>_fbp</td>
                                <td>Facebook</td>
                                <td>{{ 'cookie.modal.details.marketing.facebook'|trans }}</td>
                                <td>3 {{ 'cookie.modal.details.marketing.months'|trans }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class=\"cookie-tab-content\" id=\"cookie-tab-about\">
                <h6>{{ 'cookie.modal.about.what_are.title'|trans }}</h6>
                <p>{{ 'cookie.modal.about.what_are.description'|trans }}</p>
                
                <h6>{{ 'cookie.modal.about.how_used.title'|trans }}</h6>
                <p>{{ 'cookie.modal.about.how_used.description'|trans }}</p>
                
                <h6>{{ 'cookie.modal.about.how_manage.title'|trans }}</h6>
                <p>{{ 'cookie.modal.about.how_manage.description'|trans }}</p>
                
                <h6>{{ 'cookie.modal.about.more_info.title'|trans }}</h6>
                <p>
                    {{ 'cookie.modal.about.more_info.description'|trans }}
                    <a href=\"{{ path('app_terms') }}\">{{ 'cookie.modal.about.more_info.terms_link'|trans }}</a>.
                </p>
            </div>
        </div>
        
        <div class=\"cookie-modal-footer\">
            <button id=\"cookie-modal-necessary-btn\" class=\"btn btn-cookie btn-cookie-secondary\">
                {{ 'cookie.modal.necessary_only'|trans }}
            </button>
            <button id=\"cookie-modal-accept-all-btn\" class=\"btn btn-cookie btn-cookie-outline\">
                {{ 'cookie.modal.accept_all'|trans }}
            </button>
            <button id=\"cookie-save-preferences-btn\" class=\"btn btn-cookie btn-cookie-primary\">
                {{ 'cookie.modal.save'|trans }}
            </button>
        </div>
    </div>
</div>", "partials/cookie-modal.html.twig", "/var/www/serveur/templates/partials/cookie-modal.html.twig");
    }
}
