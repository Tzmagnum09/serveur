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

/* partials/cookie-consent.html.twig */
class __TwigTemplate_d907dae54cda9e0a221b3d8865c8e68c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/cookie-consent.html.twig"));

        // line 3
        yield "<div id=\"cookie-banner\" class=\"cookie-banner ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "cookies", [], "any", false, false, false, 3), "get", ["cookieConsent"], "method", false, false, false, 3)) {
            yield "d-none";
        }
        yield "\">
    <div class=\"cookie-banner-content\">
        <div class=\"row\">
            <div class=\"col-md-9\">
                <h5>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.title"), "html", null, true);
        yield "</h5>
                <p>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.content"), "html", null, true);
        yield "</p>
            </div>
            <div class=\"col-md-3\">
                ";
        // line 12
        yield "                <div class=\"mb-3\">
                    <select id=\"cookie-language-selector\" class=\"form-select form-select-sm\">
                        <option value=\"fr\" ";
        // line 14
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "locale", [], "any", false, false, false, 14) == "fr")) {
            yield "selected";
        }
        yield ">Français</option>
                        <option value=\"nl\" ";
        // line 15
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "locale", [], "any", false, false, false, 15) == "nl")) {
            yield "selected";
        }
        yield ">Nederlands</option>
                        <option value=\"en\" ";
        // line 16
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "locale", [], "any", false, false, false, 16) == "en")) {
            yield "selected";
        }
        yield ">English</option>
                        <option value=\"de\" ";
        // line 17
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "locale", [], "any", false, false, false, 17) == "de")) {
            yield "selected";
        }
        yield ">Deutsch</option>
                    </select>
                </div>
                <div class=\"cookie-banner-buttons\">
                    <button id=\"customize-cookies-btn\" class=\"btn btn-cookie-customize\">
                        ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.customize"), "html", null, true);
        yield "
                    </button>
                    <button id=\"necessary-cookies-btn\" class=\"btn btn-cookie-necessary\">
                        ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.necessary_only"), "html", null, true);
        yield "
                    </button>
                    <button id=\"accept-all-cookies-btn\" class=\"btn btn-cookie-accept\">
                        ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.accept_all"), "html", null, true);
        yield "
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 36
        yield "<div class=\"modal fade cookie-preferences-modal\" id=\"cookie-preferences-modal\" tabindex=\"-1\" aria-labelledby=\"cookie-preferences-label\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"cookie-preferences-label\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.title"), "html", null, true);
        yield "</h5>
                <select id=\"modal-language-selector\" class=\"form-select form-select-sm mx-3\" style=\"width: 150px;\">
                    <option value=\"fr\" ";
        // line 42
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "locale", [], "any", false, false, false, 42) == "fr")) {
            yield "selected";
        }
        yield ">Français</option>
                    <option value=\"nl\" ";
        // line 43
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "locale", [], "any", false, false, false, 43) == "nl")) {
            yield "selected";
        }
        yield ">Nederlands</option>
                    <option value=\"en\" ";
        // line 44
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "locale", [], "any", false, false, false, 44) == "en")) {
            yield "selected";
        }
        yield ">English</option>
                    <option value=\"de\" ";
        // line 45
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "locale", [], "any", false, false, false, 45) == "de")) {
            yield "selected";
        }
        yield ">Deutsch</option>
                </select>
                <button type=\"button\" class=\"btn-close close-preferences\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <ul class=\"nav nav-tabs\" id=\"cookie-tabs\" role=\"tablist\">
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link active\" id=\"overview-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#overview\" type=\"button\" role=\"tab\" aria-controls=\"overview\" aria-selected=\"true\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.tab.overview"), "html", null, true);
        yield "</button>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link\" id=\"details-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#details\" type=\"button\" role=\"tab\" aria-controls=\"details\" aria-selected=\"false\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.tab.details"), "html", null, true);
        yield "</button>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link\" id=\"about-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#about\" type=\"button\" role=\"tab\" aria-controls=\"about\" aria-selected=\"false\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.tab.about"), "html", null, true);
        yield "</button>
                    </li>
                </ul>
                <div class=\"tab-content cookie-tab-content\" id=\"cookie-tabs-content\">
                    ";
        // line 63
        yield "                    <div class=\"tab-pane fade show active\" id=\"overview\" role=\"tabpanel\" aria-labelledby=\"overview-tab\">
                        <p>";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.intro"), "html", null, true);
        yield "</p>
Copier                    <div class=\"cookie-type-description\">
                        <div class=\"d-flex justify-content-between\">
                            <div>
                                <h6>";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.necessary.title"), "html", null, true);
        yield "</h6>
                                <p class=\"mb-0\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.necessary.description"), "html", null, true);
        yield "</p>
                            </div>
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"cookie-necessary\" checked disabled>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"cookie-type-description\">
                        <div class=\"d-flex justify-content-between\">
                            <div>
                                <h6>";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.preferences.title"), "html", null, true);
        yield "</h6>
                                <p class=\"mb-0\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.preferences.description"), "html", null, true);
        yield "</p>
                            </div>
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"cookie-preference\">
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"cookie-type-description\">
                        <div class=\"d-flex justify-content-between\">
                            <div>
                                <h6>";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.statistics.title"), "html", null, true);
        yield "</h6>
                                <p class=\"mb-0\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.statistics.description"), "html", null, true);
        yield "</p>
                            </div>
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"cookie-statistics\">
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"cookie-type-description\">
                        <div class=\"d-flex justify-content-between\">
                            <div>
                                <h6>";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.marketing.title"), "html", null, true);
        yield "</h6>
                                <p class=\"mb-0\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.marketing.description"), "html", null, true);
        yield "</p>
                            </div>
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"cookie-marketing\">
                            </div>
                        </div>
                    </div>
                </div>
                
                ";
        // line 115
        yield "                <div class=\"tab-pane fade\" id=\"details\" role=\"tabpanel\" aria-labelledby=\"details-tab\">
                    <div class=\"accordion\" id=\"cookie-details-accordion\">
                        ";
        // line 118
        yield "                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header\" id=\"heading-necessary\">
                                <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-necessary\" aria-expanded=\"true\" aria-controls=\"collapse-necessary\">
                                    ";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.title"), "html", null, true);
        yield "
                                </button>
                            </h2>
                            <div id=\"collapse-necessary\" class=\"accordion-collapse collapse show\" aria-labelledby=\"heading-necessary\" data-bs-parent=\"#cookie-details-accordion\">
                                <div class=\"accordion-body\">
                                    <p>";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.description"), "html", null, true);
        yield "</p>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-striped table-bordered\">
                                            <thead>
                                                <tr>
                                                    <th>";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.name"), "html", null, true);
        yield "</th>
                                                    <th>";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.provider"), "html", null, true);
        yield "</th>
                                                    <th>";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.purpose"), "html", null, true);
        yield "</th>
                                                    <th>";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.expiry"), "html", null, true);
        yield "</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>PHPSESSID</td>
                                                    <td>";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "request", [], "any", false, false, false, 140), "host", [], "any", false, false, false, 140), "html", null, true);
        yield "</td>
                                                    <td>";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.session"), "html", null, true);
        yield "</td>
                                                    <td>";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.session_end"), "html", null, true);
        yield "</td>
                                                </tr>
                                                <tr>
                                                    <td>cookieConsent</td>
                                                    <td>";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "request", [], "any", false, false, false, 146), "host", [], "any", false, false, false, 146), "html", null, true);
        yield "</td>
                                                    <td>";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.consent"), "html", null, true);
        yield "</td>
                                                    <td>1 ";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.year"), "html", null, true);
        yield "</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        ";
        // line 158
        yield "                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header\" id=\"heading-preferences\">
                                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-preferences\" aria-expanded=\"false\" aria-controls=\"collapse-preferences\">
                                    ";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.preferences.title"), "html", null, true);
        yield "
                                </button>
                            </h2>
                            <div id=\"collapse-preferences\" class=\"accordion-collapse collapse\" aria-labelledby=\"heading-preferences\" data-bs-parent=\"#cookie-details-accordion\">
                                <div class=\"accordion-body\">
                                    <p>";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.preferences.description"), "html", null, true);
        yield "</p>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-striped table-bordered\">
                                            <thead>
                                                <tr>
                                                    <th>";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.name"), "html", null, true);
        yield "</th>
                                                    <th>";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.provider"), "html", null, true);
        yield "</th>
                                                    <th>";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.purpose"), "html", null, true);
        yield "</th>
                                                    <th>";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.expiry"), "html", null, true);
        yield "</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>_locale</td>
                                                    <td>";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 180, $this->source); })()), "request", [], "any", false, false, false, 180), "host", [], "any", false, false, false, 180), "html", null, true);
        yield "</td>
                                                    <td>";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.preferences.language"), "html", null, true);
        yield "</td>
                                                    <td>1 ";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.necessary.year"), "html", null, true);
        yield "</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        ";
        // line 192
        yield "                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header\" id=\"heading-statistics\">
                                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-statistics\" aria-expanded=\"false\" aria-controls=\"collapse-statistics\">
                                    ";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.statistics.title"), "html", null, true);
        yield "
                                </button>
                            </h2>
                            <div id=\"collapse-statistics\" class=\"accordion-collapse collapse\" aria-labelledby=\"heading-statistics\" data-bs-parent=\"#cookie-details-accordion\">
                                <div class=\"accordion-body\">
                                    <p>";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.statistics.description"), "html", null, true);
        yield "</p>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-striped table-bordered\">
                                            <thead>
                                                <tr>
                                                    <th>";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.name"), "html", null, true);
        yield "</th>
                                                    <th>";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.provider"), "html", null, true);
        yield "</th>
                                                    <th>";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.purpose"), "html", null, true);
        yield "</th>
                                                    <th>";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.expiry"), "html", null, true);
        yield "</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>_ga</td>
                                                    <td>Google</td>
                                                    <td>";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.statistics.analytics"), "html", null, true);
        yield "</td>
                                                    <td>2 ";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.statistics.years"), "html", null, true);
        yield "</td>
                                                </tr>
                                                <tr>
                                                    <td>_gid</td>
                                                    <td>Google</td>
                                                    <td>";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.statistics.user_id"), "html", null, true);
        yield "</td>
                                                    <td>24 ";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.statistics.hours"), "html", null, true);
        yield "</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        ";
        // line 232
        yield "                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header\" id=\"heading-marketing\">
                                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-marketing\" aria-expanded=\"false\" aria-controls=\"collapse-marketing\">
                                    ";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.marketing.title"), "html", null, true);
        yield "
                                </button>
                            </h2>
                            <div id=\"collapse-marketing\" class=\"accordion-collapse collapse\" aria-labelledby=\"heading-marketing\" data-bs-parent=\"#cookie-details-accordion\">
                                <div class=\"accordion-body\">
                                    <p>";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.marketing.description"), "html", null, true);
        yield "</p>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-striped table-bordered\">
                                            <thead>
                                                <tr>
                                                    <th>";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.name"), "html", null, true);
        yield "</th>
                                                    <th>";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.provider"), "html", null, true);
        yield "</th>
                                                    <th>";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.purpose"), "html", null, true);
        yield "</th>
                                                    <th>";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.table.expiry"), "html", null, true);
        yield "</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>_fbp</td>
                                                    <td>Facebook</td>
                                                    <td>";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.marketing.facebook"), "html", null, true);
        yield "</td>
                                                    <td>3 ";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.details.marketing.months"), "html", null, true);
        yield "</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                ";
        // line 268
        yield "                <div class=\"tab-pane fade\" id=\"about\" role=\"tabpanel\" aria-labelledby=\"about-tab\">
                    <h5>";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.what_are.title"), "html", null, true);
        yield "</h5>
                    <p>";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.what_are.description"), "html", null, true);
        yield "</p>
                    
                    <h5>";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.how_used.title"), "html", null, true);
        yield "</h5>
                    <p>";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.how_used.description"), "html", null, true);
        yield "</p>
                    
                    <h5>";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.how_manage.title"), "html", null, true);
        yield "</h5>
                    <p>";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.how_manage.description"), "html", null, true);
        yield "</p>
                    
                    <h5>";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.more_info.title"), "html", null, true);
        yield "</h5>
                    <p>
                        ";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.more_info.description"), "html", null, true);
        yield " 
                        <a href=\"";
        // line 281
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_terms");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.about.more_info.terms_link"), "html", null, true);
        yield "</a>.
                    </p>
                </div>
            </div>
        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-cookie-necessary\" id=\"modal-necessary-only-btn\">";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.necessary_only"), "html", null, true);
        yield "</button>
            <button type=\"button\" class=\"btn btn-cookie-accept\" id=\"modal-accept-all-btn\">";
        // line 288
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.accept_all"), "html", null, true);
        yield "</button>
            <button type=\"button\" class=\"btn btn-gradient\" id=\"save-preferences-btn\">";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.save"), "html", null, true);
        yield "</button>
        </div>
    </div>
</div>
</div>
";
        // line 295
        yield "<div class=\"cookie-settings-footer\">
    <a href=\"javascript:void(0);\" onclick=\"openCookiePreferences()\" class=\"cookie-settings-link\">";
        // line 296
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.footer.settings"), "html", null, true);
        yield "</a>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/cookie-consent.html.twig";
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
        return array (  603 => 296,  600 => 295,  592 => 289,  588 => 288,  584 => 287,  573 => 281,  569 => 280,  564 => 278,  559 => 276,  555 => 275,  550 => 273,  546 => 272,  541 => 270,  537 => 269,  534 => 268,  520 => 256,  516 => 255,  506 => 248,  502 => 247,  498 => 246,  494 => 245,  486 => 240,  478 => 235,  473 => 232,  461 => 222,  457 => 221,  449 => 216,  445 => 215,  435 => 208,  431 => 207,  427 => 206,  423 => 205,  415 => 200,  407 => 195,  402 => 192,  390 => 182,  386 => 181,  382 => 180,  373 => 174,  369 => 173,  365 => 172,  361 => 171,  353 => 166,  345 => 161,  340 => 158,  328 => 148,  324 => 147,  320 => 146,  313 => 142,  309 => 141,  305 => 140,  296 => 134,  292 => 133,  288 => 132,  284 => 131,  276 => 126,  268 => 121,  263 => 118,  259 => 115,  247 => 105,  243 => 104,  229 => 93,  225 => 92,  211 => 81,  207 => 80,  193 => 69,  189 => 68,  182 => 64,  179 => 63,  172 => 58,  166 => 55,  160 => 52,  148 => 45,  142 => 44,  136 => 43,  130 => 42,  125 => 40,  119 => 36,  109 => 28,  103 => 25,  97 => 22,  87 => 17,  81 => 16,  75 => 15,  69 => 14,  65 => 12,  59 => 8,  55 => 7,  45 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/partials/cookie-consent.html.twig #}
{# Bannière principale des cookies #}
<div id=\"cookie-banner\" class=\"cookie-banner {% if app.request.cookies.get('cookieConsent') %}d-none{% endif %}\">
    <div class=\"cookie-banner-content\">
        <div class=\"row\">
            <div class=\"col-md-9\">
                <h5>{{ 'cookie.banner.title'|trans }}</h5>
                <p>{{ 'cookie.banner.content'|trans }}</p>
            </div>
            <div class=\"col-md-3\">
                {# Sélecteur de langue - optionnel #}
                <div class=\"mb-3\">
                    <select id=\"cookie-language-selector\" class=\"form-select form-select-sm\">
                        <option value=\"fr\" {% if app.request.locale == 'fr' %}selected{% endif %}>Français</option>
                        <option value=\"nl\" {% if app.request.locale == 'nl' %}selected{% endif %}>Nederlands</option>
                        <option value=\"en\" {% if app.request.locale == 'en' %}selected{% endif %}>English</option>
                        <option value=\"de\" {% if app.request.locale == 'de' %}selected{% endif %}>Deutsch</option>
                    </select>
                </div>
                <div class=\"cookie-banner-buttons\">
                    <button id=\"customize-cookies-btn\" class=\"btn btn-cookie-customize\">
                        {{ 'cookie.banner.customize'|trans }}
                    </button>
                    <button id=\"necessary-cookies-btn\" class=\"btn btn-cookie-necessary\">
                        {{ 'cookie.banner.necessary_only'|trans }}
                    </button>
                    <button id=\"accept-all-cookies-btn\" class=\"btn btn-cookie-accept\">
                        {{ 'cookie.banner.accept_all'|trans }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
{# Fenêtre modale des préférences de cookies #}
<div class=\"modal fade cookie-preferences-modal\" id=\"cookie-preferences-modal\" tabindex=\"-1\" aria-labelledby=\"cookie-preferences-label\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"cookie-preferences-label\">{{ 'cookie.modal.title'|trans }}</h5>
                <select id=\"modal-language-selector\" class=\"form-select form-select-sm mx-3\" style=\"width: 150px;\">
                    <option value=\"fr\" {% if app.request.locale == 'fr' %}selected{% endif %}>Français</option>
                    <option value=\"nl\" {% if app.request.locale == 'nl' %}selected{% endif %}>Nederlands</option>
                    <option value=\"en\" {% if app.request.locale == 'en' %}selected{% endif %}>English</option>
                    <option value=\"de\" {% if app.request.locale == 'de' %}selected{% endif %}>Deutsch</option>
                </select>
                <button type=\"button\" class=\"btn-close close-preferences\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <ul class=\"nav nav-tabs\" id=\"cookie-tabs\" role=\"tablist\">
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link active\" id=\"overview-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#overview\" type=\"button\" role=\"tab\" aria-controls=\"overview\" aria-selected=\"true\">{{ 'cookie.modal.tab.overview'|trans }}</button>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link\" id=\"details-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#details\" type=\"button\" role=\"tab\" aria-controls=\"details\" aria-selected=\"false\">{{ 'cookie.modal.tab.details'|trans }}</button>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link\" id=\"about-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#about\" type=\"button\" role=\"tab\" aria-controls=\"about\" aria-selected=\"false\">{{ 'cookie.modal.tab.about'|trans }}</button>
                    </li>
                </ul>
                <div class=\"tab-content cookie-tab-content\" id=\"cookie-tabs-content\">
                    {# Onglet Vue d'ensemble #}
                    <div class=\"tab-pane fade show active\" id=\"overview\" role=\"tabpanel\" aria-labelledby=\"overview-tab\">
                        <p>{{ 'cookie.modal.overview.intro'|trans }}</p>
Copier                    <div class=\"cookie-type-description\">
                        <div class=\"d-flex justify-content-between\">
                            <div>
                                <h6>{{ 'cookie.modal.overview.necessary.title'|trans }}</h6>
                                <p class=\"mb-0\">{{ 'cookie.modal.overview.necessary.description'|trans }}</p>
                            </div>
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"cookie-necessary\" checked disabled>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"cookie-type-description\">
                        <div class=\"d-flex justify-content-between\">
                            <div>
                                <h6>{{ 'cookie.modal.overview.preferences.title'|trans }}</h6>
                                <p class=\"mb-0\">{{ 'cookie.modal.overview.preferences.description'|trans }}</p>
                            </div>
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"cookie-preference\">
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"cookie-type-description\">
                        <div class=\"d-flex justify-content-between\">
                            <div>
                                <h6>{{ 'cookie.modal.overview.statistics.title'|trans }}</h6>
                                <p class=\"mb-0\">{{ 'cookie.modal.overview.statistics.description'|trans }}</p>
                            </div>
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"cookie-statistics\">
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"cookie-type-description\">
                        <div class=\"d-flex justify-content-between\">
                            <div>
                                <h6>{{ 'cookie.modal.overview.marketing.title'|trans }}</h6>
                                <p class=\"mb-0\">{{ 'cookie.modal.overview.marketing.description'|trans }}</p>
                            </div>
                            <div class=\"form-check form-switch\">
                                <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"cookie-marketing\">
                            </div>
                        </div>
                    </div>
                </div>
                
                {# Onglet Détails #}
                <div class=\"tab-pane fade\" id=\"details\" role=\"tabpanel\" aria-labelledby=\"details-tab\">
                    <div class=\"accordion\" id=\"cookie-details-accordion\">
                        {# Cookies nécessaires #}
                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header\" id=\"heading-necessary\">
                                <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-necessary\" aria-expanded=\"true\" aria-controls=\"collapse-necessary\">
                                    {{ 'cookie.modal.details.necessary.title'|trans }}
                                </button>
                            </h2>
                            <div id=\"collapse-necessary\" class=\"accordion-collapse collapse show\" aria-labelledby=\"heading-necessary\" data-bs-parent=\"#cookie-details-accordion\">
                                <div class=\"accordion-body\">
                                    <p>{{ 'cookie.modal.details.necessary.description'|trans }}</p>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-striped table-bordered\">
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
                            </div>
                        </div>
                        
                        {# Cookies de préférences #}
                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header\" id=\"heading-preferences\">
                                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-preferences\" aria-expanded=\"false\" aria-controls=\"collapse-preferences\">
                                    {{ 'cookie.modal.details.preferences.title'|trans }}
                                </button>
                            </h2>
                            <div id=\"collapse-preferences\" class=\"accordion-collapse collapse\" aria-labelledby=\"heading-preferences\" data-bs-parent=\"#cookie-details-accordion\">
                                <div class=\"accordion-body\">
                                    <p>{{ 'cookie.modal.details.preferences.description'|trans }}</p>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-striped table-bordered\">
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
                            </div>
                        </div>
                        
                        {# Cookies statistiques #}
                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header\" id=\"heading-statistics\">
                                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-statistics\" aria-expanded=\"false\" aria-controls=\"collapse-statistics\">
                                    {{ 'cookie.modal.details.statistics.title'|trans }}
                                </button>
                            </h2>
                            <div id=\"collapse-statistics\" class=\"accordion-collapse collapse\" aria-labelledby=\"heading-statistics\" data-bs-parent=\"#cookie-details-accordion\">
                                <div class=\"accordion-body\">
                                    <p>{{ 'cookie.modal.details.statistics.description'|trans }}</p>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-striped table-bordered\">
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
                            </div>
                        </div>
                        
                        {# Cookies marketing #}
                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header\" id=\"heading-marketing\">
                                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-marketing\" aria-expanded=\"false\" aria-controls=\"collapse-marketing\">
                                    {{ 'cookie.modal.details.marketing.title'|trans }}
                                </button>
                            </h2>
                            <div id=\"collapse-marketing\" class=\"accordion-collapse collapse\" aria-labelledby=\"heading-marketing\" data-bs-parent=\"#cookie-details-accordion\">
                                <div class=\"accordion-body\">
                                    <p>{{ 'cookie.modal.details.marketing.description'|trans }}</p>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-striped table-bordered\">
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
                    </div>
                </div>
                
                {# Onglet À propos #}
                <div class=\"tab-pane fade\" id=\"about\" role=\"tabpanel\" aria-labelledby=\"about-tab\">
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
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-cookie-necessary\" id=\"modal-necessary-only-btn\">{{ 'cookie.modal.necessary_only'|trans }}</button>
            <button type=\"button\" class=\"btn btn-cookie-accept\" id=\"modal-accept-all-btn\">{{ 'cookie.modal.accept_all'|trans }}</button>
            <button type=\"button\" class=\"btn btn-gradient\" id=\"save-preferences-btn\">{{ 'cookie.modal.save'|trans }}</button>
        </div>
    </div>
</div>
</div>
{# Lien pour les paramètres de cookies dans le footer #}
<div class=\"cookie-settings-footer\">
    <a href=\"javascript:void(0);\" onclick=\"openCookiePreferences()\" class=\"cookie-settings-link\">{{ 'cookie.footer.settings'|trans }}</a>
</div>", "partials/cookie-consent.html.twig", "/var/www/serveur/templates/partials/cookie-consent.html.twig");
    }
}
