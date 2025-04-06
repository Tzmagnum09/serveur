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

/* __string_template__c854e35ae673f4155b4eaecd36c9d813 */
class __TwigTemplate_a0d1a5aefdb10f1066371fc982ba3405 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__c854e35ae673f4155b4eaecd36c9d813"));

        // line 1
        yield "<meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Votre compte a été approuvé</title>
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


    <div class=\"container\" fgid=\"294385\">
        <div class=\"header\" fgid=\"294391\">
            <h1 fgid=\"294397\">Votre compte a été approuvé</h1>
        </div>
        <div class=\"content\" fgid=\"294404\">
            <p fgid=\"294410\">Bonjour ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 50, $this->source); })()), "html", null, true);
        yield ",</p>
            
            <p fgid=\"294417\">Nous avons le plaisir de vous informer que votre compte a été approuvé par notre équipe d'administration.</p>
            
            <p fgid=\"294424\">Vous pouvez désormais vous connecter à votre compte en cliquant sur le bouton ci-dessous.</p>
            
            <p style=\"text-align: center;\" fgid=\"294431\">
                <a href=\"https://";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 57, $this->source); })()), "html", null, true);
        yield "/login\" class=\"button\" fgid=\"294437\">Se connecter</a>
            </p>
            
            <p fgid=\"294445\">Si vous avez des questions, n'hésitez pas à nous contacter.</p>
            
            <p fgid=\"294452\">Cordialement,<br fgid=\"294459\">L'équipe&nbsp;<span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\" fgid=\"294710\">Dmqode.be.</span></p>
        </div>
        <div class=\"footer\" fgid=\"294466\">
            <p fgid=\"294472\">Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
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
        return "__string_template__c854e35ae673f4155b4eaecd36c9d813";
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
        return array (  106 => 57,  96 => 50,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Votre compte a été approuvé</title>
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


    <div class=\"container\" fgid=\"294385\">
        <div class=\"header\" fgid=\"294391\">
            <h1 fgid=\"294397\">Votre compte a été approuvé</h1>
        </div>
        <div class=\"content\" fgid=\"294404\">
            <p fgid=\"294410\">Bonjour {{ firstName }},</p>
            
            <p fgid=\"294417\">Nous avons le plaisir de vous informer que votre compte a été approuvé par notre équipe d'administration.</p>
            
            <p fgid=\"294424\">Vous pouvez désormais vous connecter à votre compte en cliquant sur le bouton ci-dessous.</p>
            
            <p style=\"text-align: center;\" fgid=\"294431\">
                <a href=\"https://{{ domain }}/login\" class=\"button\" fgid=\"294437\">Se connecter</a>
            </p>
            
            <p fgid=\"294445\">Si vous avez des questions, n'hésitez pas à nous contacter.</p>
            
            <p fgid=\"294452\">Cordialement,<br fgid=\"294459\">L'équipe&nbsp;<span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\" fgid=\"294710\">Dmqode.be.</span></p>
        </div>
        <div class=\"footer\" fgid=\"294466\">
            <p fgid=\"294472\">Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
        </div>
    </div>", "__string_template__c854e35ae673f4155b4eaecd36c9d813", "");
    }
}
