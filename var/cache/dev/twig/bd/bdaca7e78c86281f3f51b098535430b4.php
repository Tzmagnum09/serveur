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

/* email_templates/permission_update.html.twig */
class __TwigTemplate_a3549984358cae39469f2573661398df extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email_templates/permission_update.html.twig"));

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
        <h1>
            ";
        // line 53
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 53, $this->source); })()) == "fr")) {
            // line 54
            yield "                Modification de vos permissions
            ";
        } elseif ((        // line 55
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 55, $this->source); })()) == "en")) {
            // line 56
            yield "                Permissions Updated
            ";
        } elseif ((        // line 57
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 57, $this->source); })()) == "nl")) {
            // line 58
            yield "                Uw rechten zijn gewijzigd
            ";
        } elseif ((        // line 59
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 59, $this->source); })()) == "de")) {
            // line 60
            yield "                Berechtigungen aktualisiert
            ";
        }
        // line 62
        yield "        </h1>
    </div>
    <div class=\"content\">
        <p>
            ";
        // line 66
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 66, $this->source); })()) == "fr")) {
            // line 67
            yield "                Bonjour ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 67, $this->source); })()), "html", null, true);
            yield ",
            ";
        } elseif ((        // line 68
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 68, $this->source); })()) == "en")) {
            // line 69
            yield "                Dear ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 69, $this->source); })()), "html", null, true);
            yield ",
            ";
        } elseif ((        // line 70
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 70, $this->source); })()) == "nl")) {
            // line 71
            yield "                Beste ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 71, $this->source); })()), "html", null, true);
            yield ",
            ";
        } elseif ((        // line 72
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 72, $this->source); })()) == "de")) {
            // line 73
            yield "                Sehr geehrte/-r ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 73, $this->source); })()), "html", null, true);
            yield ",
            ";
        }
        // line 75
        yield "        </p>
        
        <p>
            ";
        // line 78
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 78, $this->source); })()) == "fr")) {
            // line 79
            yield "                Nous vous informons que vos permissions sur le site Dmqode.be ont été modifiées.
            ";
        } elseif ((        // line 80
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 80, $this->source); })()) == "en")) {
            // line 81
            yield "                We are writing to inform you that your permissions on the Dmqode.be website have been updated.
            ";
        } elseif ((        // line 82
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 82, $this->source); })()) == "nl")) {
            // line 83
            yield "                We informeren u dat uw rechten op de Dmqode.be-website zijn gewijzigd.
            ";
        } elseif ((        // line 84
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 84, $this->source); })()) == "de")) {
            // line 85
            yield "                Wir möchten Sie darüber informieren, dass sich Ihre Berechtigungen auf der Dmqode.be-Website geändert haben.
            ";
        }
        // line 87
        yield "        </p>

        <div class=\"permission-changes\">
            <h3>
                ";
        // line 91
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 91, $this->source); })()) == "fr")) {
            // line 92
            yield "                    Détails des modifications
                ";
        } elseif ((        // line 93
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 93, $this->source); })()) == "en")) {
            // line 94
            yield "                    Changes Details
                ";
        } elseif ((        // line 95
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 95, $this->source); })()) == "nl")) {
            // line 96
            yield "                    Details van de wijzigingen
                ";
        } elseif ((        // line 97
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 97, $this->source); })()) == "de")) {
            // line 98
            yield "                    Details der Änderungen
                ";
        }
        // line 100
        yield "            </h3>
            <p>";
        // line 101
        yield (isset($context["permissionChanges"]) || array_key_exists("permissionChanges", $context) ? $context["permissionChanges"] : (function () { throw new RuntimeError('Variable "permissionChanges" does not exist.', 101, $this->source); })());
        yield "</p>
        </div>
        
        <p>
            ";
        // line 105
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 105, $this->source); })()) == "fr")) {
            // line 106
            yield "                Si vous avez des questions sur ces modifications, n'hésitez pas à contacter notre support.
            ";
        } elseif ((        // line 107
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 107, $this->source); })()) == "en")) {
            // line 108
            yield "                If you have any questions about these changes, please don't hesitate to contact our support.
            ";
        } elseif ((        // line 109
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 109, $this->source); })()) == "nl")) {
            // line 110
            yield "                Als u vragen heeft over deze wijzigingen, aarzel dan niet om contact op te nemen met onze ondersteuning.
            ";
        } elseif ((        // line 111
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 111, $this->source); })()) == "de")) {
            // line 112
            yield "                Bei Fragen zu diesen Änderungen zögern Sie nicht, unseren Support zu kontaktieren.
            ";
        }
        // line 114
        yield "        </p>
        
        <p style=\"text-align: center;\">
            <a href=\"https://";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 117, $this->source); })()), "html", null, true);
        yield "/login\" class=\"button\">
                ";
        // line 118
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 118, $this->source); })()) == "fr")) {
            // line 119
            yield "                    Se connecter
                ";
        } elseif ((        // line 120
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 120, $this->source); })()) == "en")) {
            // line 121
            yield "                    Log in
                ";
        } elseif ((        // line 122
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 122, $this->source); })()) == "nl")) {
            // line 123
            yield "                    Inloggen
                ";
        } elseif ((        // line 124
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 124, $this->source); })()) == "de")) {
            // line 125
            yield "                    Anmelden
                ";
        }
        // line 127
        yield "            </a>
        </p>
        
        <p>
            ";
        // line 131
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 131, $this->source); })()) == "fr")) {
            // line 132
            yield "                Cordialement,<br>L'équipe Dmqode.be
            ";
        } elseif ((        // line 133
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 133, $this->source); })()) == "en")) {
            // line 134
            yield "                Best regards,<br>The Dmqode.be Team
            ";
        } elseif ((        // line 135
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 135, $this->source); })()) == "nl")) {
            // line 136
            yield "                Met vriendelijke groeten,<br>Het Dmqode.be-team
            ";
        } elseif ((        // line 137
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 137, $this->source); })()) == "de")) {
            // line 138
            yield "                Mit freundlichen Grüßen,<br>Das Dmqode.be-Team
            ";
        }
        // line 140
        yield "        </p>
    </div>
    <div class=\"footer\">
        <p>
            ";
        // line 144
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 144, $this->source); })()) == "fr")) {
            // line 145
            yield "                Cet email a été envoyé automatiquement, merci de ne pas y répondre.
            ";
        } elseif ((        // line 146
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 146, $this->source); })()) == "en")) {
            // line 147
            yield "                This email was sent automatically; please do not reply.
            ";
        } elseif ((        // line 148
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 148, $this->source); })()) == "nl")) {
            // line 149
            yield "                Deze e-mail is automatisch verzonden; gelieve niet te reageren.
            ";
        } elseif ((        // line 150
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 150, $this->source); })()) == "de")) {
            // line 151
            yield "                Diese E-Mail wurde automatisch versendet; bitte antworten Sie nicht darauf.
            ";
        }
        // line 153
        yield "        </p>
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
        return "email_templates/permission_update.html.twig";
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
        return array (  323 => 153,  319 => 151,  317 => 150,  314 => 149,  312 => 148,  309 => 147,  307 => 146,  304 => 145,  302 => 144,  296 => 140,  292 => 138,  290 => 137,  287 => 136,  285 => 135,  282 => 134,  280 => 133,  277 => 132,  275 => 131,  269 => 127,  265 => 125,  263 => 124,  260 => 123,  258 => 122,  255 => 121,  253 => 120,  250 => 119,  248 => 118,  244 => 117,  239 => 114,  235 => 112,  233 => 111,  230 => 110,  228 => 109,  225 => 108,  223 => 107,  220 => 106,  218 => 105,  211 => 101,  208 => 100,  204 => 98,  202 => 97,  199 => 96,  197 => 95,  194 => 94,  192 => 93,  189 => 92,  187 => 91,  181 => 87,  177 => 85,  175 => 84,  172 => 83,  170 => 82,  167 => 81,  165 => 80,  162 => 79,  160 => 78,  155 => 75,  149 => 73,  147 => 72,  142 => 71,  140 => 70,  135 => 69,  133 => 68,  128 => 67,  126 => 66,  120 => 62,  116 => 60,  114 => 59,  111 => 58,  109 => 57,  106 => 56,  104 => 55,  101 => 54,  99 => 53,  45 => 1,);
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
        <h1>
            {% if locale == 'fr' %}
                Modification de vos permissions
            {% elseif locale == 'en' %}
                Permissions Updated
            {% elseif locale == 'nl' %}
                Uw rechten zijn gewijzigd
            {% elseif locale == 'de' %}
                Berechtigungen aktualisiert
            {% endif %}
        </h1>
    </div>
    <div class=\"content\">
        <p>
            {% if locale == 'fr' %}
                Bonjour {{ firstName }},
            {% elseif locale == 'en' %}
                Dear {{ firstName }},
            {% elseif locale == 'nl' %}
                Beste {{ firstName }},
            {% elseif locale == 'de' %}
                Sehr geehrte/-r {{ firstName }},
            {% endif %}
        </p>
        
        <p>
            {% if locale == 'fr' %}
                Nous vous informons que vos permissions sur le site Dmqode.be ont été modifiées.
            {% elseif locale == 'en' %}
                We are writing to inform you that your permissions on the Dmqode.be website have been updated.
            {% elseif locale == 'nl' %}
                We informeren u dat uw rechten op de Dmqode.be-website zijn gewijzigd.
            {% elseif locale == 'de' %}
                Wir möchten Sie darüber informieren, dass sich Ihre Berechtigungen auf der Dmqode.be-Website geändert haben.
            {% endif %}
        </p>

        <div class=\"permission-changes\">
            <h3>
                {% if locale == 'fr' %}
                    Détails des modifications
                {% elseif locale == 'en' %}
                    Changes Details
                {% elseif locale == 'nl' %}
                    Details van de wijzigingen
                {% elseif locale == 'de' %}
                    Details der Änderungen
                {% endif %}
            </h3>
            <p>{{ permissionChanges|raw }}</p>
        </div>
        
        <p>
            {% if locale == 'fr' %}
                Si vous avez des questions sur ces modifications, n'hésitez pas à contacter notre support.
            {% elseif locale == 'en' %}
                If you have any questions about these changes, please don't hesitate to contact our support.
            {% elseif locale == 'nl' %}
                Als u vragen heeft over deze wijzigingen, aarzel dan niet om contact op te nemen met onze ondersteuning.
            {% elseif locale == 'de' %}
                Bei Fragen zu diesen Änderungen zögern Sie nicht, unseren Support zu kontaktieren.
            {% endif %}
        </p>
        
        <p style=\"text-align: center;\">
            <a href=\"https://{{ domain }}/login\" class=\"button\">
                {% if locale == 'fr' %}
                    Se connecter
                {% elseif locale == 'en' %}
                    Log in
                {% elseif locale == 'nl' %}
                    Inloggen
                {% elseif locale == 'de' %}
                    Anmelden
                {% endif %}
            </a>
        </p>
        
        <p>
            {% if locale == 'fr' %}
                Cordialement,<br>L'équipe Dmqode.be
            {% elseif locale == 'en' %}
                Best regards,<br>The Dmqode.be Team
            {% elseif locale == 'nl' %}
                Met vriendelijke groeten,<br>Het Dmqode.be-team
            {% elseif locale == 'de' %}
                Mit freundlichen Grüßen,<br>Das Dmqode.be-Team
            {% endif %}
        </p>
    </div>
    <div class=\"footer\">
        <p>
            {% if locale == 'fr' %}
                Cet email a été envoyé automatiquement, merci de ne pas y répondre.
            {% elseif locale == 'en' %}
                This email was sent automatically; please do not reply.
            {% elseif locale == 'nl' %}
                Deze e-mail is automatisch verzonden; gelieve niet te reageren.
            {% elseif locale == 'de' %}
                Diese E-Mail wurde automatisch versendet; bitte antworten Sie nicht darauf.
            {% endif %}
        </p>
    </div>
</div>", "email_templates/permission_update.html.twig", "/var/www/serveur/templates/email_templates/permission_update.html.twig");
    }
}
