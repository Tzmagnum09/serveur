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

/* __string_template__66e3cdb3c9c167a5f1ccb87425ce4e72 */
class __TwigTemplate_0efcc5ce3c962963aef63f6a56fb2ee9 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__66e3cdb3c9c167a5f1ccb87425ce4e72"));

        // line 1
        yield "<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Changement de votre rôle</title>
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
</style>

<div class=\"container\">
    <div class=\"header\">
        <h1>Changement de votre rôle</h1>
    </div>
    <div class=\"content\">
        <p>Bonjour ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 49, $this->source); })()), "html", null, true);
        yield ",</p>
        
        <p>Nous vous informons que votre rôle sur le site Dmqode.be a été modifié.</p>

        <p>
            Rôle précédent : ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["previousRole"]) || array_key_exists("previousRole", $context) ? $context["previousRole"] : (function () { throw new RuntimeError('Variable "previousRole" does not exist.', 54, $this->source); })()), "html", null, true);
        yield "<br>
            Nouveau rôle : ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["newRole"]) || array_key_exists("newRole", $context) ? $context["newRole"] : (function () { throw new RuntimeError('Variable "newRole" does not exist.', 55, $this->source); })()), "html", null, true);
        yield "
        </p>
        
        <p>Si vous avez des questions, n'hésitez pas à contacter notre support.</p>
        
        <p style=\"text-align: center;\">
            <a href=\"https://";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 61, $this->source); })()), "html", null, true);
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
        return "__string_template__66e3cdb3c9c167a5f1ccb87425ce4e72";
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
        return array (  116 => 61,  107 => 55,  103 => 54,  95 => 49,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Changement de votre rôle</title>
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
</style>

<div class=\"container\">
    <div class=\"header\">
        <h1>Changement de votre rôle</h1>
    </div>
    <div class=\"content\">
        <p>Bonjour {{ firstName }},</p>
        
        <p>Nous vous informons que votre rôle sur le site Dmqode.be a été modifié.</p>

        <p>
            Rôle précédent : {{ previousRole }}<br>
            Nouveau rôle : {{ newRole }}
        </p>
        
        <p>Si vous avez des questions, n'hésitez pas à contacter notre support.</p>
        
        <p style=\"text-align: center;\">
            <a href=\"https://{{ domain }}/login\" class=\"button\">Se connecter</a>
        </p>
        
        <p>Cordialement,<br>L'équipe Dmqode.be</p>
    </div>
    <div class=\"footer\">
        <p>Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
    </div>
</div>", "__string_template__66e3cdb3c9c167a5f1ccb87425ce4e72", "");
    }
}
