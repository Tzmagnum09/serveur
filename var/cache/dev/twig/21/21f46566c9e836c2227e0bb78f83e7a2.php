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

/* partials/cookie-popup.html.twig */
class __TwigTemplate_1ae8f0d21850d7689d044526e3d6374a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/cookie-popup.html.twig"));

        // line 1
        yield "<div id=\"cookie-popup-overlay\" class=\"cookie-popup-overlay\"></div>

<div id=\"cookie-popup\" class=\"cookie-popup\">
    <div class=\"cookie-popup-header\">
        <h5 class=\"cookie-popup-title\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.title"), "html", null, true);
        yield "</h5>
    </div>
    <div class=\"cookie-popup-body\">
        <p>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.content"), "html", null, true);
        yield "</p>
    </div>
    <div class=\"cookie-popup-footer\">
        <button id=\"cookie-customize-btn\" class=\"btn-cookie btn-cookie-outline\">
            ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.customize"), "html", null, true);
        yield "
        </button>
        <button id=\"cookie-necessary-btn\" class=\"btn-cookie btn-cookie-secondary\">
            ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.necessary_only"), "html", null, true);
        yield "
        </button>
        <button id=\"cookie-accept-all-btn\" class=\"btn-cookie btn-cookie-primary\">
            ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.banner.accept_all"), "html", null, true);
        yield "
        </button>
    </div>
</div>

<div id=\"cookie-modal-overlay\" class=\"cookie-popup-overlay\"></div>
<div id=\"cookie-modal\" class=\"cookie-popup\" style=\"width: 700px; max-width: 95%;\">
    <div class=\"cookie-popup-header\">
        <h5 class=\"cookie-popup-title\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.title"), "html", null, true);
        yield "</h5>
        <button id=\"close-modal-btn\" style=\"background: none; border: none; font-size: 18px; cursor: pointer;\">&times;</button>
    </div>
    <div class=\"cookie-popup-body\">
        <div class=\"cookie-tabs\">
            <div class=\"cookie-tab active\" data-tab=\"overview\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.tab.overview"), "html", null, true);
        yield "</div>
            <div class=\"cookie-tab\" data-tab=\"details\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.tab.details"), "html", null, true);
        yield "</div>
            <div class=\"cookie-tab\" data-tab=\"about\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.tab.about"), "html", null, true);
        yield "</div>
        </div>
        
        <div id=\"tab-overview\" class=\"cookie-tab-content active\">
            <div class=\"cookie-type\">
                <div class=\"cookie-type-header\">
                    <h6 class=\"cookie-type-title\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.necessary.title"), "html", null, true);
        yield "</h6>
                    <div class=\"form-check form-switch\">
                        <input class=\"form-check-input\" type=\"checkbox\" checked disabled id=\"cookie-necessary-checkbox\">
                    </div>
                </div>
                <p>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.necessary.description"), "html", null, true);
        yield "</p>
            </div>
            
            <div class=\"cookie-type\">
                <div class=\"cookie-type-header\">
                    <h6 class=\"cookie-type-title\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.preferences.title"), "html", null, true);
        yield "</h6>
                    <div class=\"form-check form-switch\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"cookie-preferences-checkbox\">
                    </div>
                </div>
                <p>";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.preferences.description"), "html", null, true);
        yield "</p>
            </div>
            
            <div class=\"cookie-type\">
                <div class=\"cookie-type-header\">
                    <h6 class=\"cookie-type-title\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.statistics.title"), "html", null, true);
        yield "</h6>
                    <div class=\"form-check form-switch\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"cookie-statistics-checkbox\">
                    </div>
                </div>
                <p>";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.statistics.description"), "html", null, true);
        yield "</p>
            </div>
            
            <div class=\"cookie-type\">
                <div class=\"cookie-type-header\">
                    <h6 class=\"cookie-type-title\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.marketing.title"), "html", null, true);
        yield "</h6>
                    <div class=\"form-check form-switch\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"cookie-marketing-checkbox\">
                    </div>
                </div>
                <p>";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.overview.marketing.description"), "html", null, true);
        yield "</p>
            </div>
        </div>
        
        <div id=\"tab-details\" class=\"cookie-tab-content\">
            <!-- Contenu détaillé des cookies ici -->
            <p>Les détails sur les cookies utilisés seront affichés ici.</p>
        </div>
        
        <div id=\"tab-about\" class=\"cookie-tab-content\">
            <!-- Informations sur les cookies ici -->
            <p>Les informations sur ce que sont les cookies et comment nous les utilisons seront affichées ici.</p>
        </div>
    </div>
    <div class=\"cookie-popup-footer\">
        <button id=\"modal-necessary-btn\" class=\"btn-cookie btn-cookie-secondary\">
            ";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.necessary_only"), "html", null, true);
        yield "
        </button>
        <button id=\"modal-accept-all-btn\" class=\"btn-cookie btn-cookie-outline\">
            ";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.accept_all"), "html", null, true);
        yield "
        </button>
        <button id=\"save-preferences-btn\" class=\"btn-cookie btn-cookie-primary\">
            ";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.modal.save"), "html", null, true);
        yield "
        </button>
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
        return "partials/cookie-popup.html.twig";
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
        return array (  199 => 96,  193 => 93,  187 => 90,  168 => 74,  160 => 69,  152 => 64,  144 => 59,  136 => 54,  128 => 49,  120 => 44,  112 => 39,  103 => 33,  99 => 32,  95 => 31,  87 => 26,  76 => 18,  70 => 15,  64 => 12,  57 => 8,  51 => 5,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"cookie-popup-overlay\" class=\"cookie-popup-overlay\"></div>

<div id=\"cookie-popup\" class=\"cookie-popup\">
    <div class=\"cookie-popup-header\">
        <h5 class=\"cookie-popup-title\">{{ 'cookie.banner.title'|trans }}</h5>
    </div>
    <div class=\"cookie-popup-body\">
        <p>{{ 'cookie.banner.content'|trans }}</p>
    </div>
    <div class=\"cookie-popup-footer\">
        <button id=\"cookie-customize-btn\" class=\"btn-cookie btn-cookie-outline\">
            {{ 'cookie.banner.customize'|trans }}
        </button>
        <button id=\"cookie-necessary-btn\" class=\"btn-cookie btn-cookie-secondary\">
            {{ 'cookie.banner.necessary_only'|trans }}
        </button>
        <button id=\"cookie-accept-all-btn\" class=\"btn-cookie btn-cookie-primary\">
            {{ 'cookie.banner.accept_all'|trans }}
        </button>
    </div>
</div>

<div id=\"cookie-modal-overlay\" class=\"cookie-popup-overlay\"></div>
<div id=\"cookie-modal\" class=\"cookie-popup\" style=\"width: 700px; max-width: 95%;\">
    <div class=\"cookie-popup-header\">
        <h5 class=\"cookie-popup-title\">{{ 'cookie.modal.title'|trans }}</h5>
        <button id=\"close-modal-btn\" style=\"background: none; border: none; font-size: 18px; cursor: pointer;\">&times;</button>
    </div>
    <div class=\"cookie-popup-body\">
        <div class=\"cookie-tabs\">
            <div class=\"cookie-tab active\" data-tab=\"overview\">{{ 'cookie.modal.tab.overview'|trans }}</div>
            <div class=\"cookie-tab\" data-tab=\"details\">{{ 'cookie.modal.tab.details'|trans }}</div>
            <div class=\"cookie-tab\" data-tab=\"about\">{{ 'cookie.modal.tab.about'|trans }}</div>
        </div>
        
        <div id=\"tab-overview\" class=\"cookie-tab-content active\">
            <div class=\"cookie-type\">
                <div class=\"cookie-type-header\">
                    <h6 class=\"cookie-type-title\">{{ 'cookie.modal.overview.necessary.title'|trans }}</h6>
                    <div class=\"form-check form-switch\">
                        <input class=\"form-check-input\" type=\"checkbox\" checked disabled id=\"cookie-necessary-checkbox\">
                    </div>
                </div>
                <p>{{ 'cookie.modal.overview.necessary.description'|trans }}</p>
            </div>
            
            <div class=\"cookie-type\">
                <div class=\"cookie-type-header\">
                    <h6 class=\"cookie-type-title\">{{ 'cookie.modal.overview.preferences.title'|trans }}</h6>
                    <div class=\"form-check form-switch\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"cookie-preferences-checkbox\">
                    </div>
                </div>
                <p>{{ 'cookie.modal.overview.preferences.description'|trans }}</p>
            </div>
            
            <div class=\"cookie-type\">
                <div class=\"cookie-type-header\">
                    <h6 class=\"cookie-type-title\">{{ 'cookie.modal.overview.statistics.title'|trans }}</h6>
                    <div class=\"form-check form-switch\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"cookie-statistics-checkbox\">
                    </div>
                </div>
                <p>{{ 'cookie.modal.overview.statistics.description'|trans }}</p>
            </div>
            
            <div class=\"cookie-type\">
                <div class=\"cookie-type-header\">
                    <h6 class=\"cookie-type-title\">{{ 'cookie.modal.overview.marketing.title'|trans }}</h6>
                    <div class=\"form-check form-switch\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"cookie-marketing-checkbox\">
                    </div>
                </div>
                <p>{{ 'cookie.modal.overview.marketing.description'|trans }}</p>
            </div>
        </div>
        
        <div id=\"tab-details\" class=\"cookie-tab-content\">
            <!-- Contenu détaillé des cookies ici -->
            <p>Les détails sur les cookies utilisés seront affichés ici.</p>
        </div>
        
        <div id=\"tab-about\" class=\"cookie-tab-content\">
            <!-- Informations sur les cookies ici -->
            <p>Les informations sur ce que sont les cookies et comment nous les utilisons seront affichées ici.</p>
        </div>
    </div>
    <div class=\"cookie-popup-footer\">
        <button id=\"modal-necessary-btn\" class=\"btn-cookie btn-cookie-secondary\">
            {{ 'cookie.modal.necessary_only'|trans }}
        </button>
        <button id=\"modal-accept-all-btn\" class=\"btn-cookie btn-cookie-outline\">
            {{ 'cookie.modal.accept_all'|trans }}
        </button>
        <button id=\"save-preferences-btn\" class=\"btn-cookie btn-cookie-primary\">
            {{ 'cookie.modal.save'|trans }}
        </button>
    </div>
</div>", "partials/cookie-popup.html.twig", "/var/www/serveur/templates/partials/cookie-popup.html.twig");
    }
}
