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

/* __string_template__9a8c42c42da00446a01a77e24fa1807f */
class __TwigTemplate_86b69e23f88012514d3fc5d8a803aee5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__9a8c42c42da00446a01a77e24fa1807f"));

        // line 1
        yield "<meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Réinitialisation de votre mot de passe</title>
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


    <div class=\"container\" fgid=\"296437\">
        <div class=\"header\" fgid=\"296443\">
            <h1 fgid=\"296449\">Réinitialisation de votre mot de passe</h1>
        </div>
        <div class=\"content\" fgid=\"296456\">
            <p fgid=\"296462\">Bonjour ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 50, $this->source); })()), "html", null, true);
        yield ",</p>
            
            <p fgid=\"296469\">Nous avons reçu une demande de réinitialisation de mot de passe pour votre compte. </p><p fgid=\"296469\">Pour définir un nouveau mot de passe, cliquez sur le bouton ci-dessous.</p>
            
            <p style=\"text-align: center;\" fgid=\"296476\">
                <a href=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 55, $this->source); })()), "html", null, true);
        yield "\" class=\"button\" fgid=\"296482\">Réinitialiser mon mot de passe</a>
            </p>
            
            <p fgid=\"296490\">Si le bouton ne fonctionne pas, vous pouvez copier et coller le lien suivant dans votre navigateur :</p>
            <p fgid=\"296497\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 59, $this->source); })()), "html", null, true);
        yield "</p>
            
            <p fgid=\"296504\">Ce lien expirera dans 1 heure.</p>
            
            <p fgid=\"296511\">Si vous n'avez pas demandé de réinitialisation de mot de passe, veuillez ignorer cet email.</p>
            
            <p fgid=\"296518\">Cordialement,<br fgid=\"296525\">L'équipe&nbsp;<span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\" fgid=\"296756\">Dmqode.be.</span></p>
        </div>
        <div class=\"footer\" fgid=\"296532\">
            <p fgid=\"296538\">Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
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
        return "__string_template__9a8c42c42da00446a01a77e24fa1807f";
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
        return array (  111 => 59,  104 => 55,  96 => 50,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Réinitialisation de votre mot de passe</title>
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


    <div class=\"container\" fgid=\"296437\">
        <div class=\"header\" fgid=\"296443\">
            <h1 fgid=\"296449\">Réinitialisation de votre mot de passe</h1>
        </div>
        <div class=\"content\" fgid=\"296456\">
            <p fgid=\"296462\">Bonjour {{ firstName }},</p>
            
            <p fgid=\"296469\">Nous avons reçu une demande de réinitialisation de mot de passe pour votre compte. </p><p fgid=\"296469\">Pour définir un nouveau mot de passe, cliquez sur le bouton ci-dessous.</p>
            
            <p style=\"text-align: center;\" fgid=\"296476\">
                <a href=\"{{ resetToken }}\" class=\"button\" fgid=\"296482\">Réinitialiser mon mot de passe</a>
            </p>
            
            <p fgid=\"296490\">Si le bouton ne fonctionne pas, vous pouvez copier et coller le lien suivant dans votre navigateur :</p>
            <p fgid=\"296497\">{{ resetToken }}</p>
            
            <p fgid=\"296504\">Ce lien expirera dans 1 heure.</p>
            
            <p fgid=\"296511\">Si vous n'avez pas demandé de réinitialisation de mot de passe, veuillez ignorer cet email.</p>
            
            <p fgid=\"296518\">Cordialement,<br fgid=\"296525\">L'équipe&nbsp;<span style=\"color: var(--bs-body-color); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\" fgid=\"296756\">Dmqode.be.</span></p>
        </div>
        <div class=\"footer\" fgid=\"296532\">
            <p fgid=\"296538\">Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
        </div>
    </div>", "__string_template__9a8c42c42da00446a01a77e24fa1807f", "");
    }
}
