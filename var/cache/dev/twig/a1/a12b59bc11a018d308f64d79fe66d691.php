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

/* partials/footer.html.twig */
class __TwigTemplate_d3e06afa9f4136f23da203d01a485dd0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        // line 2
        yield "
<div class=\"footer-cookie-settings\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <a href=\"#\" id=\"cookie-settings-link\" class=\"cookie-settings-link\">
                    ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.footer.settings"), "html", null, true);
        yield "
                </a>
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
        return "partials/footer.html.twig";
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
        return array (  53 => 8,  45 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# À placer dans templates/partials/footer.html.twig ou à intégrer dans votre footer existant #}

<div class=\"footer-cookie-settings\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <a href=\"#\" id=\"cookie-settings-link\" class=\"cookie-settings-link\">
                    {{ 'cookie.footer.settings'|trans }}
                </a>
            </div>
        </div>
    </div>
</div>", "partials/footer.html.twig", "/var/www/serveur/templates/partials/footer.html.twig");
    }
}
