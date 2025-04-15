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

/* __string_template__e9e80b4de187d57dfe7abc3e64a4329b */
class __TwigTemplate_bd55442e51850afa6012a4c30ef6b2d5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__e9e80b4de187d57dfe7abc3e64a4329b"));

        // line 1
        yield "<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Modification de vos permissions</title>
<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #333;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
    }
    .header {
        background: linear-gradient(135deg, #8e44ad, #3498db);
        color: white;
        padding: 20px;
        text-align: center;
    }
    .content {
        padding: 20px;
        background-color: #f9f9f9;
    }
    .button {
        display: inline-block;
        background: linear-gradient(135deg, #8e44ad, #3498db);
        color: white;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 5px;
        margin-top: 20px;
    }
    .footer {
        text-align: center;
        font-size: 12px;
        color: #777;
        margin-top: 20px;
    }
    .permission-changes {
        background-color: #f1f1f1;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 15px;
    }
</style>

<div class=\"container\">
    <div class=\"header\">
        <h1>Modification de vos permissions</h1>
    </div>
    <div class=\"content\">
        <p>Bonjour ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 55, $this->source); })()), "html", null, true);
        yield ",</p>
        
        <p>Nous vous informons que vos permissions sur le site Dmqode.be ont été modifiées.</p>

        <div class=\"permission-changes\">
            <h3>Détails des modifications</h3>
            <p>";
        // line 61
        yield (isset($context["permissionChanges"]) || array_key_exists("permissionChanges", $context) ? $context["permissionChanges"] : (function () { throw new RuntimeError('Variable "permissionChanges" does not exist.', 61, $this->source); })());
        yield "</p>
        </div>
        
        <p>Si vous avez des questions sur ces modifications, n'hésitez pas à contacter notre support.</p>
        
        <p style=\"text-align: center;\">
            <a href=\"https://";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 67, $this->source); })()), "html", null, true);
        yield "/login\" class=\"button\">Se connecter</a>
        </p>
        
        <p>Cordialement,<br>L'équipe Dmqode.be</p>
    </div>
    <div class=\"footer\">
        <p>Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
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
        return "__string_template__e9e80b4de187d57dfe7abc3e64a4329b";
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
        return array (  119 => 67,  110 => 61,  101 => 55,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Modification de vos permissions</title>
<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #333;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
    }
    .header {
        background: linear-gradient(135deg, #8e44ad, #3498db);
        color: white;
        padding: 20px;
        text-align: center;
    }
    .content {
        padding: 20px;
        background-color: #f9f9f9;
    }
    .button {
        display: inline-block;
        background: linear-gradient(135deg, #8e44ad, #3498db);
        color: white;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 5px;
        margin-top: 20px;
    }
    .footer {
        text-align: center;
        font-size: 12px;
        color: #777;
        margin-top: 20px;
    }
    .permission-changes {
        background-color: #f1f1f1;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 15px;
    }
</style>

<div class=\"container\">
    <div class=\"header\">
        <h1>Modification de vos permissions</h1>
    </div>
    <div class=\"content\">
        <p>Bonjour {{ firstName }},</p>
        
        <p>Nous vous informons que vos permissions sur le site Dmqode.be ont été modifiées.</p>

        <div class=\"permission-changes\">
            <h3>Détails des modifications</h3>
            <p>{{ permissionChanges|raw }}</p>
        </div>
        
        <p>Si vous avez des questions sur ces modifications, n'hésitez pas à contacter notre support.</p>
        
        <p style=\"text-align: center;\">
            <a href=\"https://{{ domain }}/login\" class=\"button\">Se connecter</a>
        </p>
        
        <p>Cordialement,<br>L'équipe Dmqode.be</p>
    </div>
    <div class=\"footer\">
        <p>Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
    </div>
</div>", "__string_template__e9e80b4de187d57dfe7abc3e64a4329b", "");
    }
}
