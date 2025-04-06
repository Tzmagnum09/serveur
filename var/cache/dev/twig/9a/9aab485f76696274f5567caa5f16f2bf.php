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

/* __string_template__8b932e825fe0154ddf073f5322d1ec8f */
class __TwigTemplate_50ae7eaf22dbd968dc1591515e398685 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__8b932e825fe0154ddf073f5322d1ec8f"));

        // line 1
        yield "<meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Confirmation de votre inscription</title>
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


    <div class=\"container\" fgid=\"290438\">
        <div class=\"header\" fgid=\"290444\">
            <h1 fgid=\"290450\">Confirmation de votre inscription</h1>
        </div>
        <div class=\"content\" fgid=\"290457\">
            <p fgid=\"290463\">Bonjour ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 50, $this->source); })()), "html", null, true);
        yield ",</p>
            
            <p fgid=\"290470\">Merci de vous être inscrit sur notre site. </p><p fgid=\"290470\">Pour confirmer votre adresse email, veuillez cliquer sur le bouton ci-dessous.</p>
            
            <p style=\"text-align: center;\" fgid=\"290477\">
                <a href=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["signedUrl"]) || array_key_exists("signedUrl", $context) ? $context["signedUrl"] : (function () { throw new RuntimeError('Variable "signedUrl" does not exist.', 55, $this->source); })()), "html", null, true);
        yield "\" class=\"button\" fgid=\"290483\">Confirmer mon adresse email</a>
            </p>
            
            <p fgid=\"290491\">Si le bouton ne fonctionne pas, vous pouvez copier et coller le lien suivant dans votre navigateur :</p>
            <p fgid=\"290498\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["signedUrl"]) || array_key_exists("signedUrl", $context) ? $context["signedUrl"] : (function () { throw new RuntimeError('Variable "signedUrl" does not exist.', 59, $this->source); })()), "html", null, true);
        yield "</p>
            
            <p fgid=\"290505\">Ce lien expirera dans 24 heures.</p>
            
            <p fgid=\"290512\">Si vous n'avez pas créé de compte, veuillez ignorer cet email.</p>
            
            <p fgid=\"290519\">Cordialement,<br fgid=\"290526\">L'équipe Dmqode.be.</p>
        </div>
        <div class=\"footer\" fgid=\"290533\">
            <p fgid=\"290539\">Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
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
        return "__string_template__8b932e825fe0154ddf073f5322d1ec8f";
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
    <title>Confirmation de votre inscription</title>
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


    <div class=\"container\" fgid=\"290438\">
        <div class=\"header\" fgid=\"290444\">
            <h1 fgid=\"290450\">Confirmation de votre inscription</h1>
        </div>
        <div class=\"content\" fgid=\"290457\">
            <p fgid=\"290463\">Bonjour {{ firstName }},</p>
            
            <p fgid=\"290470\">Merci de vous être inscrit sur notre site. </p><p fgid=\"290470\">Pour confirmer votre adresse email, veuillez cliquer sur le bouton ci-dessous.</p>
            
            <p style=\"text-align: center;\" fgid=\"290477\">
                <a href=\"{{ signedUrl }}\" class=\"button\" fgid=\"290483\">Confirmer mon adresse email</a>
            </p>
            
            <p fgid=\"290491\">Si le bouton ne fonctionne pas, vous pouvez copier et coller le lien suivant dans votre navigateur :</p>
            <p fgid=\"290498\">{{ signedUrl }}</p>
            
            <p fgid=\"290505\">Ce lien expirera dans 24 heures.</p>
            
            <p fgid=\"290512\">Si vous n'avez pas créé de compte, veuillez ignorer cet email.</p>
            
            <p fgid=\"290519\">Cordialement,<br fgid=\"290526\">L'équipe Dmqode.be.</p>
        </div>
        <div class=\"footer\" fgid=\"290533\">
            <p fgid=\"290539\">Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
        </div>
    </div>", "__string_template__8b932e825fe0154ddf073f5322d1ec8f", "");
    }
}
