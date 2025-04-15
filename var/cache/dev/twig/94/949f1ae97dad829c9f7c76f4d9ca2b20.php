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

/* email_templates/role_change.html.twig */
class __TwigTemplate_04476ad475ec4480a1210f72b302fad2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email_templates/role_change.html.twig"));

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
        <h1>
            ";
        // line 47
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 47, $this->source); })()) == "fr")) {
            // line 48
            yield "                Changement de votre rôle
            ";
        } elseif ((        // line 49
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 49, $this->source); })()) == "en")) {
            // line 50
            yield "                Role Change Notification
            ";
        } elseif ((        // line 51
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 51, $this->source); })()) == "nl")) {
            // line 52
            yield "                Wijziging van uw rol
            ";
        } elseif ((        // line 53
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 53, $this->source); })()) == "de")) {
            // line 54
            yield "                Rollenänderung
            ";
        }
        // line 56
        yield "        </h1>
    </div>
    <div class=\"content\">
        <p>
            ";
        // line 60
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 60, $this->source); })()) == "fr")) {
            // line 61
            yield "                Bonjour ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 61, $this->source); })()), "html", null, true);
            yield ",
            ";
        } elseif ((        // line 62
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 62, $this->source); })()) == "en")) {
            // line 63
            yield "                Dear ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 63, $this->source); })()), "html", null, true);
            yield ",
            ";
        } elseif ((        // line 64
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 64, $this->source); })()) == "nl")) {
            // line 65
            yield "                Beste ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 65, $this->source); })()), "html", null, true);
            yield ",
            ";
        } elseif ((        // line 66
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 66, $this->source); })()) == "de")) {
            // line 67
            yield "                Sehr geehrte/-r ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 67, $this->source); })()), "html", null, true);
            yield ",
            ";
        }
        // line 69
        yield "        </p>
        
        <p>
            ";
        // line 72
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 72, $this->source); })()) == "fr")) {
            // line 73
            yield "                Nous vous informons que votre rôle sur le site Dmqode.be a été modifié.
            ";
        } elseif ((        // line 74
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 74, $this->source); })()) == "en")) {
            // line 75
            yield "                We are writing to inform you that your role on the Dmqode.be website has been changed.
            ";
        } elseif ((        // line 76
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 76, $this->source); })()) == "nl")) {
            // line 77
            yield "                We informeren u dat uw rol op de Dmqode.be-website is gewijzigd.
            ";
        } elseif ((        // line 78
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 78, $this->source); })()) == "de")) {
            // line 79
            yield "                Wir möchten Sie darüber informieren, dass sich Ihre Rolle auf der Dmqode.be-Website geändert hat.
            ";
        }
        // line 81
        yield "        </p>

        <p>
            ";
        // line 84
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 84, $this->source); })()) == "fr")) {
            // line 85
            yield "                Rôle précédent : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["previousRole"]) || array_key_exists("previousRole", $context) ? $context["previousRole"] : (function () { throw new RuntimeError('Variable "previousRole" does not exist.', 85, $this->source); })()), "html", null, true);
            yield "
                Nouveau rôle : ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["newRole"]) || array_key_exists("newRole", $context) ? $context["newRole"] : (function () { throw new RuntimeError('Variable "newRole" does not exist.', 86, $this->source); })()), "html", null, true);
            yield "
            ";
        } elseif ((        // line 87
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 87, $this->source); })()) == "en")) {
            // line 88
            yield "                Previous Role: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["previousRole"]) || array_key_exists("previousRole", $context) ? $context["previousRole"] : (function () { throw new RuntimeError('Variable "previousRole" does not exist.', 88, $this->source); })()), "html", null, true);
            yield "
                New Role: ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["newRole"]) || array_key_exists("newRole", $context) ? $context["newRole"] : (function () { throw new RuntimeError('Variable "newRole" does not exist.', 89, $this->source); })()), "html", null, true);
            yield "
            ";
        } elseif ((        // line 90
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 90, $this->source); })()) == "nl")) {
            // line 91
            yield "                Vorige rol: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["previousRole"]) || array_key_exists("previousRole", $context) ? $context["previousRole"] : (function () { throw new RuntimeError('Variable "previousRole" does not exist.', 91, $this->source); })()), "html", null, true);
            yield "
                Nieuwe rol: ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["newRole"]) || array_key_exists("newRole", $context) ? $context["newRole"] : (function () { throw new RuntimeError('Variable "newRole" does not exist.', 92, $this->source); })()), "html", null, true);
            yield "
            ";
        } elseif ((        // line 93
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 93, $this->source); })()) == "de")) {
            // line 94
            yield "                Vorherige Rolle: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["previousRole"]) || array_key_exists("previousRole", $context) ? $context["previousRole"] : (function () { throw new RuntimeError('Variable "previousRole" does not exist.', 94, $this->source); })()), "html", null, true);
            yield "
                Neue Rolle: ";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["newRole"]) || array_key_exists("newRole", $context) ? $context["newRole"] : (function () { throw new RuntimeError('Variable "newRole" does not exist.', 95, $this->source); })()), "html", null, true);
            yield "
            ";
        }
        // line 97
        yield "        </p>
        
        <p>
            ";
        // line 100
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 100, $this->source); })()) == "fr")) {
            // line 101
            yield "                Si vous avez des questions, n'hésitez pas à contacter notre support.
            ";
        } elseif ((        // line 102
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 102, $this->source); })()) == "en")) {
            // line 103
            yield "                If you have any questions, please don't hesitate to contact our support.
            ";
        } elseif ((        // line 104
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 104, $this->source); })()) == "nl")) {
            // line 105
            yield "                Als u vragen heeft, aarzel dan niet om contact op te nemen met onze ondersteuning.
            ";
        } elseif ((        // line 106
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 106, $this->source); })()) == "de")) {
            // line 107
            yield "                Bei Fragen zögern Sie nicht, unseren Support zu kontaktieren.
            ";
        }
        // line 109
        yield "        </p>
        
        <p style=\"text-align: center;\">
            <a href=\"https://";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 112, $this->source); })()), "html", null, true);
        yield "/login\" class=\"button\">
                ";
        // line 113
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 113, $this->source); })()) == "fr")) {
            // line 114
            yield "                    Se connecter
                ";
        } elseif ((        // line 115
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 115, $this->source); })()) == "en")) {
            // line 116
            yield "                    Log in
                ";
        } elseif ((        // line 117
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 117, $this->source); })()) == "nl")) {
            // line 118
            yield "                    Inloggen
                ";
        } elseif ((        // line 119
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 119, $this->source); })()) == "de")) {
            // line 120
            yield "                    Anmelden
                ";
        }
        // line 122
        yield "            </a>
        </p>
        
        <p>
            ";
        // line 126
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 126, $this->source); })()) == "fr")) {
            // line 127
            yield "                Cordialement,<br>L'équipe Dmqode.be
            ";
        } elseif ((        // line 128
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 128, $this->source); })()) == "en")) {
            // line 129
            yield "                Best regards,<br>The Dmqode.be Team
            ";
        } elseif ((        // line 130
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 130, $this->source); })()) == "nl")) {
            // line 131
            yield "                Met vriendelijke groeten,<br>Het Dmqode.be-team
            ";
        } elseif ((        // line 132
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 132, $this->source); })()) == "de")) {
            // line 133
            yield "                Mit freundlichen Grüßen,<br>Das Dmqode.be-Team
            ";
        }
        // line 135
        yield "        </p>
    </div>
    <div class=\"footer\">
        <p>
            ";
        // line 139
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 139, $this->source); })()) == "fr")) {
            // line 140
            yield "                Cet email a été envoyé automatiquement, merci de ne pas y répondre.
            ";
        } elseif ((        // line 141
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 141, $this->source); })()) == "en")) {
            // line 142
            yield "                This email was sent automatically; please do not reply.
            ";
        } elseif ((        // line 143
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 143, $this->source); })()) == "nl")) {
            // line 144
            yield "                Deze e-mail is automatisch verzonden; gelieve niet te reageren.
            ";
        } elseif ((        // line 145
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 145, $this->source); })()) == "de")) {
            // line 146
            yield "                Diese E-Mail wurde automatisch versendet; bitte antworten Sie nicht darauf.
            ";
        }
        // line 148
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
        return "email_templates/role_change.html.twig";
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
        return array (  335 => 148,  331 => 146,  329 => 145,  326 => 144,  324 => 143,  321 => 142,  319 => 141,  316 => 140,  314 => 139,  308 => 135,  304 => 133,  302 => 132,  299 => 131,  297 => 130,  294 => 129,  292 => 128,  289 => 127,  287 => 126,  281 => 122,  277 => 120,  275 => 119,  272 => 118,  270 => 117,  267 => 116,  265 => 115,  262 => 114,  260 => 113,  256 => 112,  251 => 109,  247 => 107,  245 => 106,  242 => 105,  240 => 104,  237 => 103,  235 => 102,  232 => 101,  230 => 100,  225 => 97,  220 => 95,  215 => 94,  213 => 93,  209 => 92,  204 => 91,  202 => 90,  198 => 89,  193 => 88,  191 => 87,  187 => 86,  182 => 85,  180 => 84,  175 => 81,  171 => 79,  169 => 78,  166 => 77,  164 => 76,  161 => 75,  159 => 74,  156 => 73,  154 => 72,  149 => 69,  143 => 67,  141 => 66,  136 => 65,  134 => 64,  129 => 63,  127 => 62,  122 => 61,  120 => 60,  114 => 56,  110 => 54,  108 => 53,  105 => 52,  103 => 51,  100 => 50,  98 => 49,  95 => 48,  93 => 47,  45 => 1,);
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
        <h1>
            {% if locale == 'fr' %}
                Changement de votre rôle
            {% elseif locale == 'en' %}
                Role Change Notification
            {% elseif locale == 'nl' %}
                Wijziging van uw rol
            {% elseif locale == 'de' %}
                Rollenänderung
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
                Nous vous informons que votre rôle sur le site Dmqode.be a été modifié.
            {% elseif locale == 'en' %}
                We are writing to inform you that your role on the Dmqode.be website has been changed.
            {% elseif locale == 'nl' %}
                We informeren u dat uw rol op de Dmqode.be-website is gewijzigd.
            {% elseif locale == 'de' %}
                Wir möchten Sie darüber informieren, dass sich Ihre Rolle auf der Dmqode.be-Website geändert hat.
            {% endif %}
        </p>

        <p>
            {% if locale == 'fr' %}
                Rôle précédent : {{ previousRole }}
                Nouveau rôle : {{ newRole }}
            {% elseif locale == 'en' %}
                Previous Role: {{ previousRole }}
                New Role: {{ newRole }}
            {% elseif locale == 'nl' %}
                Vorige rol: {{ previousRole }}
                Nieuwe rol: {{ newRole }}
            {% elseif locale == 'de' %}
                Vorherige Rolle: {{ previousRole }}
                Neue Rolle: {{ newRole }}
            {% endif %}
        </p>
        
        <p>
            {% if locale == 'fr' %}
                Si vous avez des questions, n'hésitez pas à contacter notre support.
            {% elseif locale == 'en' %}
                If you have any questions, please don't hesitate to contact our support.
            {% elseif locale == 'nl' %}
                Als u vragen heeft, aarzel dan niet om contact op te nemen met onze ondersteuning.
            {% elseif locale == 'de' %}
                Bei Fragen zögern Sie nicht, unseren Support zu kontaktieren.
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
</div>", "email_templates/role_change.html.twig", "/var/www/serveur/templates/email_templates/role_change.html.twig");
    }
}
