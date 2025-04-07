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

/* cookie/cookie_modal.html.twig */
class __TwigTemplate_a3a5222b14ed3b623a2cb5264c3b788c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cookie/cookie_modal.html.twig"));

        // line 1
        yield "<!-- Modal de préférences des cookies -->
<div class=\"modal fade cookie-preferences-modal\" id=\"cookie-preferences-modal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <div class=\"d-flex w-100 justify-content-between align-items-center\">
                    <h5 class=\"modal-title\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.title"), "html", null, true);
        yield "</h5>
                    <select id=\"modal-language-selector\" class=\"form-select w-auto\">
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
                <button type=\"button\" class=\"btn-close close-preferences\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#overview\" role=\"tab\">
                            ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.tab.overview"), "html", null, true);
        yield "
                        </a>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#details\" role=\"tab\">
                            ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.tab.details"), "html", null, true);
        yield "
                        </a>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#about\" role=\"tab\">
                            ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.tab.about"), "html", null, true);
        yield "
                        </a>
                    </li>
                </ul>

                <div class=\"tab-content\">
                    <!-- Onglet Vue d'ensemble -->
                    <div class=\"tab-pane fade show active\" id=\"overview\" role=\"tabpanel\">
                        <div class=\"cookie-tab-content\">
                            <p>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.intro"), "html", null, true);
        yield "</p>
                            
                            <div class=\"form-check form-switch mb-3\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"cookie-necessary\" checked disabled>
                                <label class=\"form-check-label\" for=\"cookie-necessary\">
                                    ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.necessary.title"), "html", null, true);
        yield "
                                    <i class=\"fas fa-info-circle cookie-info-icon\" 
                                       title=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.necessary.description"), "html", null, true);
        yield "\"></i>
                                </label>
                            </div>

                            <div class=\"form-check form-switch mb-3\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"cookie-preference\">
                                <label class=\"form-check-label\" for=\"cookie-preference\">
                                    ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.preferences.title"), "html", null, true);
        yield "
                                    <i class=\"fas fa-info-circle cookie-info-icon\" 
                                       title=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.preferences.description"), "html", null, true);
        yield "\"></i>
                                </label>
                            </div>

                            <div class=\"form-check form-switch mb-3\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"cookie-statistics\">
                                <label class=\"form-check-label\" for=\"cookie-statistics\">
                                    ";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.statistics.title"), "html", null, true);
        yield "
                                    <i class=\"fas fa-info-circle cookie-info-icon\" 
                                       title=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.statistics.description"), "html", null, true);
        yield "\"></i>
                                </label>
                            </div>

                            <div class=\"form-check form-switch mb-3\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"cookie-marketing\">
                                <label class=\"form-check-label\" for=\"cookie-marketing\">
                                    ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.marketing.title"), "html", null, true);
        yield "
                                    <i class=\"fas fa-info-circle cookie-info-icon\" 
                                       title=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.marketing.description"), "html", null, true);
        yield "\"></i>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Onglet Détails -->
                    <div class=\"tab-pane fade\" id=\"details\" role=\"tabpanel\">
                        <div class=\"cookie-tab-content\">
                            <!-- Cookies nécessaires -->
                            <div class=\"cookie-type-description\">
                                <h5>";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.title"), "html", null, true);
        yield "</h5>
                                <p>";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.description"), "html", null, true);
        yield "</p>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered\">
                                        <thead>
                                            <tr>
                                                <th>";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.name"), "html", null, true);
        yield "</th>
                                                <th>";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.provider"), "html", null, true);
        yield "</th>
                                                <th>";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.purpose"), "html", null, true);
        yield "</th>
                                                <th>";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.expiry"), "html", null, true);
        yield "</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>PHPSESSID</td>
                                                <td>";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "request", [], "any", false, false, false, 100), "host", [], "any", false, false, false, 100), "html", null, true);
        yield "</td>
                                                <td>";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.session"), "html", null, true);
        yield "</td>
                                                <td>";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.session_end"), "html", null, true);
        yield "</td>
                                            </tr>
                                            <tr>
                                                <td>cookieConsent</td>
                                                <td>";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "request", [], "any", false, false, false, 106), "host", [], "any", false, false, false, 106), "html", null, true);
        yield "</td>
                                                <td>";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.consent"), "html", null, true);
        yield "</td>
                                                <td>1 ";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.year"), "html", null, true);
        yield "</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Cookies de préférences -->
                            <div class=\"cookie-type-description\">
                                <h5>";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.preferences.title"), "html", null, true);
        yield "</h5>
                                <p>";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.preferences.description"), "html", null, true);
        yield "</p>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered\">
                                        <thead>
                                            <tr>
                                                <th>";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.name"), "html", null, true);
        yield "</th>
                                                <th>";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.provider"), "html", null, true);
        yield "</th>
                                                <th>";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.purpose"), "html", null, true);
        yield "</th>
                                                <th>";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.expiry"), "html", null, true);
        yield "</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>_locale</td>
                                                <td>";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "request", [], "any", false, false, false, 132), "host", [], "any", false, false, false, 132), "html", null, true);
        yield "</td>
                                                <td>";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.preferences.language"), "html", null, true);
        yield "</td>
                                                <td>1 ";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.year"), "html", null, true);
        yield "</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Cookies statistiques -->
                            <div class=\"cookie-type-description\">
                                <h5>";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.statistics.title"), "html", null, true);
        yield "</h5>
                                <p>";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.statistics.description"), "html", null, true);
        yield "</p>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered\">
                                        <thead>
                                            <tr>
                                                <th>";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.name"), "html", null, true);
        yield "</th>
                                                <th>";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.provider"), "html", null, true);
        yield "</th>
                                                <th>";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.purpose"), "html", null, true);
        yield "</th>
                                                <th>";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.expiry"), "html", null, true);
        yield "</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>_ga</td>
                                                <td>Google</td>
                                                <td>";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.statistics.analytics"), "html", null, true);
        yield "</td>
                                                <td>2 ";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.statistics.years"), "html", null, true);
        yield "</td>
                                            </tr>
                                            <tr>
                                                <td>_gid</td>
                                                <td>Google</td>
                                                <td>";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.statistics.user_id"), "html", null, true);
        yield "</td>
                                                <td>24 ";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.statistics.hours"), "html", null, true);
        yield "</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Cookies marketing -->
                            <div class=\"cookie-type-description\">
                                <h5>";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.marketing.title"), "html", null, true);
        yield "</h5>
                                <p>";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.marketing.description"), "html", null, true);
        yield "</p>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered\">
                                        <thead>
                                            <tr>
                                                <th>";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.name"), "html", null, true);
        yield "</th>
                                                <th>";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.provider"), "html", null, true);
        yield "</th>
                                                <th>";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.purpose"), "html", null, true);
        yield "</th>
                                                <th>";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.expiry"), "html", null, true);
        yield "</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>_fbp</td>
                                                <td>Facebook</td>
                                                <td>";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.marketing.facebook"), "html", null, true);
        yield "</td>
                                                <td>3 ";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.marketing.months"), "html", null, true);
        yield "</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Onglet À propos -->
                    <div class=\"tab-pane fade\" id=\"about\" role=\"tabpanel\">
                        <div class=\"cookie-tab-content\">
                            <h5>";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.what_are.title"), "html", null, true);
        yield "</h5>
                            <p>";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.what_are.description"), "html", null, true);
        yield "</p>

                            <h5>";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.how_used.title"), "html", null, true);
        yield "</h5>
                            <p>";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.how_used.description"), "html", null, true);
        yield "</p>

                            <h5>";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.how_manage.title"), "html", null, true);
        yield "</h5>
                            <p>";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.how_manage.description"), "html", null, true);
        yield "</p>

                            <h5>";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.more_info.title"), "html", null, true);
        yield "</h5>
                            <p>
                                ";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.more_info.description"), "html", null, true);
        yield "
                                <a href=\"";
        // line 216
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_terms");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.more_info.terms_link"), "html", null, true);
        yield "</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-cookie-necessary close-preferences me-2\">
                    ";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.necessary_only"), "html", null, true);
        yield "
                </button>
                <button type=\"button\" class=\"btn btn-cookie-accept\" id=\"save-preferences-btn\">
                    ";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.save"), "html", null, true);
        yield "
                </button>
            </div>
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
        return "cookie/cookie_modal.html.twig";
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
        return array (  481 => 227,  475 => 224,  462 => 216,  458 => 215,  453 => 213,  448 => 211,  444 => 210,  439 => 208,  435 => 207,  430 => 205,  426 => 204,  411 => 192,  407 => 191,  397 => 184,  393 => 183,  389 => 182,  385 => 181,  377 => 176,  373 => 175,  361 => 166,  357 => 165,  349 => 160,  345 => 159,  335 => 152,  331 => 151,  327 => 150,  323 => 149,  315 => 144,  311 => 143,  299 => 134,  295 => 133,  291 => 132,  282 => 126,  278 => 125,  274 => 124,  270 => 123,  262 => 118,  258 => 117,  246 => 108,  242 => 107,  238 => 106,  231 => 102,  227 => 101,  223 => 100,  214 => 94,  210 => 93,  206 => 92,  202 => 91,  194 => 86,  190 => 85,  176 => 74,  171 => 72,  161 => 65,  156 => 63,  146 => 56,  141 => 54,  131 => 47,  126 => 45,  118 => 40,  106 => 31,  98 => 26,  90 => 21,  76 => 12,  70 => 11,  64 => 10,  58 => 9,  53 => 7,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Modal de préférences des cookies -->
<div class=\"modal fade cookie-preferences-modal\" id=\"cookie-preferences-modal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <div class=\"d-flex w-100 justify-content-between align-items-center\">
                    <h5 class=\"modal-title\">{{ 'cookie.modal.title'|trans }}</h5>
                    <select id=\"modal-language-selector\" class=\"form-select w-auto\">
                        <option value=\"fr\" {% if app.request.locale == 'fr' %}selected{% endif %}>Français</option>
                        <option value=\"en\" {% if app.request.locale == 'en' %}selected{% endif %}>English</option>
                        <option value=\"nl\" {% if app.request.locale == 'nl' %}selected{% endif %}>Nederlands</option>
                        <option value=\"de\" {% if app.request.locale == 'de' %}selected{% endif %}>Deutsch</option>
                    </select>
                </div>
                <button type=\"button\" class=\"btn-close close-preferences\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#overview\" role=\"tab\">
                            {{ 'cookie.modal.tab.overview'|trans }}
                        </a>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#details\" role=\"tab\">
                            {{ 'cookie.modal.tab.details'|trans }}
                        </a>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#about\" role=\"tab\">
                            {{ 'cookie.modal.tab.about'|trans }}
                        </a>
                    </li>
                </ul>

                <div class=\"tab-content\">
                    <!-- Onglet Vue d'ensemble -->
                    <div class=\"tab-pane fade show active\" id=\"overview\" role=\"tabpanel\">
                        <div class=\"cookie-tab-content\">
                            <p>{{ 'cookie.modal.overview.intro'|trans }}</p>
                            
                            <div class=\"form-check form-switch mb-3\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"cookie-necessary\" checked disabled>
                                <label class=\"form-check-label\" for=\"cookie-necessary\">
                                    {{ 'cookie.modal.overview.necessary.title'|trans }}
                                    <i class=\"fas fa-info-circle cookie-info-icon\" 
                                       title=\"{{ 'cookie.modal.overview.necessary.description'|trans }}\"></i>
                                </label>
                            </div>

                            <div class=\"form-check form-switch mb-3\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"cookie-preference\">
                                <label class=\"form-check-label\" for=\"cookie-preference\">
                                    {{ 'cookie.modal.overview.preferences.title'|trans }}
                                    <i class=\"fas fa-info-circle cookie-info-icon\" 
                                       title=\"{{ 'cookie.modal.overview.preferences.description'|trans }}\"></i>
                                </label>
                            </div>

                            <div class=\"form-check form-switch mb-3\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"cookie-statistics\">
                                <label class=\"form-check-label\" for=\"cookie-statistics\">
                                    {{ 'cookie.modal.overview.statistics.title'|trans }}
                                    <i class=\"fas fa-info-circle cookie-info-icon\" 
                                       title=\"{{ 'cookie.modal.overview.statistics.description'|trans }}\"></i>
                                </label>
                            </div>

                            <div class=\"form-check form-switch mb-3\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"cookie-marketing\">
                                <label class=\"form-check-label\" for=\"cookie-marketing\">
                                    {{ 'cookie.modal.overview.marketing.title'|trans }}
                                    <i class=\"fas fa-info-circle cookie-info-icon\" 
                                       title=\"{{ 'cookie.modal.overview.marketing.description'|trans }}\"></i>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Onglet Détails -->
                    <div class=\"tab-pane fade\" id=\"details\" role=\"tabpanel\">
                        <div class=\"cookie-tab-content\">
                            <!-- Cookies nécessaires -->
                            <div class=\"cookie-type-description\">
                                <h5>{{ 'cookie.modal.details.necessary.title'|trans }}</h5>
                                <p>{{ 'cookie.modal.details.necessary.description'|trans }}</p>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered\">
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
                                                <td>1 {{ 'cookie.modal.details.necessary.year'|trans }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Cookies de préférences -->
                            <div class=\"cookie-type-description\">
                                <h5>{{ 'cookie.modal.details.preferences.title'|trans }}</h5>
                                <p>{{ 'cookie.modal.details.preferences.description'|trans }}</p>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered\">
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
                            </div>

                            <!-- Cookies statistiques -->
                            <div class=\"cookie-type-description\">
                                <h5>{{ 'cookie.modal.details.statistics.title'|trans }}</h5>
                                <p>{{ 'cookie.modal.details.statistics.description'|trans }}</p>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered\">
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
                            </div>

                            <!-- Cookies marketing -->
                            <div class=\"cookie-type-description\">
                                <h5>{{ 'cookie.modal.details.marketing.title'|trans }}</h5>
                                <p>{{ 'cookie.modal.details.marketing.description'|trans }}</p>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered\">
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
                        </div>
                    </div>

                    <!-- Onglet À propos -->
                    <div class=\"tab-pane fade\" id=\"about\" role=\"tabpanel\">
                        <div class=\"cookie-tab-content\">
                            <h5>{{ 'cookie.modal.about.what_are.title'|trans }}</h5>
                            <p>{{ 'cookie.modal.about.what_are.description'|trans }}</p>

                            <h5>{{ 'cookie.modal.about.how_used.title'|trans }}</h5>
                            <p>{{ 'cookie.modal.about.how_used.description'|trans }}</p>

                            <h5>{{ 'cookie.modal.about.how_manage.title'|trans }}</h5>
                            <p>{{ 'cookie.modal.about.how_manage.description'|trans }}</p>

                            <h5>{{ 'cookie.modal.about.more_info.title'|trans }}</h5>
                            <p>
                                {{ 'cookie.modal.about.more_info.description'|trans }}
                                <a href=\"{{ path('app_terms') }}\">{{ 'cookie.modal.about.more_info.terms_link'|trans }}</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-cookie-necessary close-preferences me-2\">
                    {{ 'cookie.modal.necessary_only'|trans }}
                </button>
                <button type=\"button\" class=\"btn btn-cookie-accept\" id=\"save-preferences-btn\">
                    {{ 'cookie.modal.save'|trans }}
                </button>
            </div>
        </div>
    </div>
</div>", "cookie/cookie_modal.html.twig", "/var/www/serveur/templates/cookie/cookie_modal.html.twig");
    }
}
