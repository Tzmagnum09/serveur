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

/* emails/reset_password.html.twig */
class __TwigTemplate_83e6ab65c0ced48d5c338a4affefa556 extends Template
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

        $this->blocks = [
            'email_content' => [$this, 'block_email_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "emails/email_template_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/reset_password.html.twig"));

        $this->parent = $this->loadTemplate("emails/email_template_base.html.twig", "emails/reset_password.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_email_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "email_content"));

        // line 4
        yield "<p>
    ";
        // line 5
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 5, $this->source); })()) == "fr")) {
            // line 6
            yield "        Bonjour ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 6, $this->source); })()), "html", null, true);
            yield ",
    ";
        } elseif ((        // line 7
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 7, $this->source); })()) == "en")) {
            // line 8
            yield "        Dear ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 8, $this->source); })()), "html", null, true);
            yield ",
    ";
        } elseif ((        // line 9
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 9, $this->source); })()) == "nl")) {
            // line 10
            yield "        Beste ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 10, $this->source); })()), "html", null, true);
            yield ",
    ";
        } elseif ((        // line 11
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 11, $this->source); })()) == "de")) {
            // line 12
            yield "        Sehr geehrte/-r ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 12, $this->source); })()), "html", null, true);
            yield ",
    ";
        }
        // line 14
        yield "</p>

<p>
    ";
        // line 17
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 17, $this->source); })()) == "fr")) {
            // line 18
            yield "        Nous avons reçu une demande de réinitialisation de mot de passe pour votre compte. Pour définir un nouveau mot de passe, cliquez sur le bouton ci-dessous.
    ";
        } elseif ((        // line 19
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 19, $this->source); })()) == "en")) {
            // line 20
            yield "        We have received a request to reset the password for your account. To set a new password, click the button below.
    ";
        } elseif ((        // line 21
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 21, $this->source); })()) == "nl")) {
            // line 22
            yield "        We hebben een verzoek ontvangen om het wachtwoord voor uw account opnieuw in te stellen. Om een nieuw wachtwoord in te stellen, klikt u op de onderstaande knop.
    ";
        } elseif ((        // line 23
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 23, $this->source); })()) == "de")) {
            // line 24
            yield "        Wir haben eine Anfrage zur Zurücksetzung des Passworts für Ihr Konto erhalten. Um ein neues Passwort festzulegen, klicken Sie bitte auf die Schaltfläche unten.
    ";
        }
        // line 26
        yield "</p>

<p style=\"text-align: center;\">
    <a href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "\" class=\"button\">
        ";
        // line 30
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 30, $this->source); })()) == "fr")) {
            // line 31
            yield "            Réinitialiser mon mot de passe
        ";
        } elseif ((        // line 32
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 32, $this->source); })()) == "en")) {
            // line 33
            yield "            Reset your password
        ";
        } elseif ((        // line 34
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 34, $this->source); })()) == "nl")) {
            // line 35
            yield "            Reset uw wachtwoord
        ";
        } elseif ((        // line 36
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 36, $this->source); })()) == "de")) {
            // line 37
            yield "            Setzen Sie Ihr Passwort zurück
        ";
        }
        // line 39
        yield "    </a>
</p>

<p>
    ";
        // line 43
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 43, $this->source); })()) == "fr")) {
            // line 44
            yield "        Si le bouton ne fonctionne pas, vous pouvez copier et coller le lien suivant dans votre navigateur :
    ";
        } elseif ((        // line 45
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 45, $this->source); })()) == "en")) {
            // line 46
            yield "        If the button doesn't work, you can copy and paste the following link into your browser:
    ";
        } elseif ((        // line 47
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 47, $this->source); })()) == "nl")) {
            // line 48
            yield "        Als de knop niet werkt, kunt u de volgende link kopiëren en plakken in uw browser:
    ";
        } elseif ((        // line 49
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 49, $this->source); })()) == "de")) {
            // line 50
            yield "        Wenn der Button nicht funktioniert, können Sie den folgenden Link kopieren und in Ihren Browser einfügen:
    ";
        }
        // line 52
        yield "</p>
<p>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 53, $this->source); })()), "html", null, true);
        yield "</p>

<p>
    ";
        // line 56
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 56, $this->source); })()) == "fr")) {
            // line 57
            yield "        Ce lien expirera dans ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new RuntimeError('Variable "tokenLifetime" does not exist.', 57, $this->source); })()), "html", null, true);
            yield " heure";
            if (((isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new RuntimeError('Variable "tokenLifetime" does not exist.', 57, $this->source); })()) > 1)) {
                yield "s";
            }
            yield ".
    ";
        } elseif ((        // line 58
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 58, $this->source); })()) == "en")) {
            // line 59
            yield "        This link will expire in ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new RuntimeError('Variable "tokenLifetime" does not exist.', 59, $this->source); })()), "html", null, true);
            yield " hour";
            if (((isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new RuntimeError('Variable "tokenLifetime" does not exist.', 59, $this->source); })()) > 1)) {
                yield "s";
            }
            yield ".
    ";
        } elseif ((        // line 60
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 60, $this->source); })()) == "nl")) {
            // line 61
            yield "        Deze link verloopt binnen ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new RuntimeError('Variable "tokenLifetime" does not exist.', 61, $this->source); })()), "html", null, true);
            yield " uur.
    ";
        } elseif ((        // line 62
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 62, $this->source); })()) == "de")) {
            // line 63
            yield "        Dieser Link wird in ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new RuntimeError('Variable "tokenLifetime" does not exist.', 63, $this->source); })()), "html", null, true);
            yield " Stunde";
            if (((isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new RuntimeError('Variable "tokenLifetime" does not exist.', 63, $this->source); })()) > 1)) {
                yield "n";
            }
            yield " ablaufen.
    ";
        }
        // line 65
        yield "</p>

<p>
    ";
        // line 68
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 68, $this->source); })()) == "fr")) {
            // line 69
            yield "        Si vous n'avez pas demandé de réinitialisation de mot de passe, veuillez ignorer cet email.
    ";
        } elseif ((        // line 70
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 70, $this->source); })()) == "en")) {
            // line 71
            yield "        If you did not request a password reset, please ignore this email.
    ";
        } elseif ((        // line 72
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 72, $this->source); })()) == "nl")) {
            // line 73
            yield "        Als u geen verzoek heeft ingediend om uw wachtwoord opnieuw in te stellen, kunt u deze e-mail negeren.
    ";
        } elseif ((        // line 74
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 74, $this->source); })()) == "de")) {
            // line 75
            yield "        Wenn Sie keine Zurücksetzung des Passworts beantragt haben, ignorieren Sie bitte diese E-Mail.
    ";
        }
        // line 77
        yield "</p>

<p>
    ";
        // line 80
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 80, $this->source); })()) == "fr")) {
            // line 81
            yield "        Cordialement,<br>L'équipe Dmqode.be.
    ";
        } elseif ((        // line 82
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 82, $this->source); })()) == "en")) {
            // line 83
            yield "        Best regards,<br>The Dmqode.be Team.
    ";
        } elseif ((        // line 84
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 84, $this->source); })()) == "nl")) {
            // line 85
            yield "        Met vriendelijke groeten,<br>Het Dmqode.be-team.
    ";
        } elseif ((        // line 86
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 86, $this->source); })()) == "de")) {
            // line 87
            yield "        Mit freundlichen Grüßen,<br>Das Dmqode.be-Team.
    ";
        }
        // line 89
        yield "</p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/reset_password.html.twig";
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
        return array (  284 => 89,  280 => 87,  278 => 86,  275 => 85,  273 => 84,  270 => 83,  268 => 82,  265 => 81,  263 => 80,  258 => 77,  254 => 75,  252 => 74,  249 => 73,  247 => 72,  244 => 71,  242 => 70,  239 => 69,  237 => 68,  232 => 65,  222 => 63,  220 => 62,  215 => 61,  213 => 60,  204 => 59,  202 => 58,  193 => 57,  191 => 56,  185 => 53,  182 => 52,  178 => 50,  176 => 49,  173 => 48,  171 => 47,  168 => 46,  166 => 45,  163 => 44,  161 => 43,  155 => 39,  151 => 37,  149 => 36,  146 => 35,  144 => 34,  141 => 33,  139 => 32,  136 => 31,  134 => 30,  130 => 29,  125 => 26,  121 => 24,  119 => 23,  116 => 22,  114 => 21,  111 => 20,  109 => 19,  106 => 18,  104 => 17,  99 => 14,  93 => 12,  91 => 11,  86 => 10,  84 => 9,  79 => 8,  77 => 7,  72 => 6,  70 => 5,  67 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'emails/email_template_base.html.twig' %}

{% block email_content %}
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
        Nous avons reçu une demande de réinitialisation de mot de passe pour votre compte. Pour définir un nouveau mot de passe, cliquez sur le bouton ci-dessous.
    {% elseif locale == 'en' %}
        We have received a request to reset the password for your account. To set a new password, click the button below.
    {% elseif locale == 'nl' %}
        We hebben een verzoek ontvangen om het wachtwoord voor uw account opnieuw in te stellen. Om een nieuw wachtwoord in te stellen, klikt u op de onderstaande knop.
    {% elseif locale == 'de' %}
        Wir haben eine Anfrage zur Zurücksetzung des Passworts für Ihr Konto erhalten. Um ein neues Passwort festzulegen, klicken Sie bitte auf die Schaltfläche unten.
    {% endif %}
</p>

<p style=\"text-align: center;\">
    <a href=\"{{ resetToken }}\" class=\"button\">
        {% if locale == 'fr' %}
            Réinitialiser mon mot de passe
        {% elseif locale == 'en' %}
            Reset your password
        {% elseif locale == 'nl' %}
            Reset uw wachtwoord
        {% elseif locale == 'de' %}
            Setzen Sie Ihr Passwort zurück
        {% endif %}
    </a>
</p>

<p>
    {% if locale == 'fr' %}
        Si le bouton ne fonctionne pas, vous pouvez copier et coller le lien suivant dans votre navigateur :
    {% elseif locale == 'en' %}
        If the button doesn't work, you can copy and paste the following link into your browser:
    {% elseif locale == 'nl' %}
        Als de knop niet werkt, kunt u de volgende link kopiëren en plakken in uw browser:
    {% elseif locale == 'de' %}
        Wenn der Button nicht funktioniert, können Sie den folgenden Link kopieren und in Ihren Browser einfügen:
    {% endif %}
</p>
<p>{{ resetToken }}</p>

<p>
    {% if locale == 'fr' %}
        Ce lien expirera dans {{ tokenLifetime }} heure{% if tokenLifetime > 1 %}s{% endif %}.
    {% elseif locale == 'en' %}
        This link will expire in {{ tokenLifetime }} hour{% if tokenLifetime > 1 %}s{% endif %}.
    {% elseif locale == 'nl' %}
        Deze link verloopt binnen {{ tokenLifetime }} uur.
    {% elseif locale == 'de' %}
        Dieser Link wird in {{ tokenLifetime }} Stunde{% if tokenLifetime > 1 %}n{% endif %} ablaufen.
    {% endif %}
</p>

<p>
    {% if locale == 'fr' %}
        Si vous n'avez pas demandé de réinitialisation de mot de passe, veuillez ignorer cet email.
    {% elseif locale == 'en' %}
        If you did not request a password reset, please ignore this email.
    {% elseif locale == 'nl' %}
        Als u geen verzoek heeft ingediend om uw wachtwoord opnieuw in te stellen, kunt u deze e-mail negeren.
    {% elseif locale == 'de' %}
        Wenn Sie keine Zurücksetzung des Passworts beantragt haben, ignorieren Sie bitte diese E-Mail.
    {% endif %}
</p>

<p>
    {% if locale == 'fr' %}
        Cordialement,<br>L'équipe Dmqode.be.
    {% elseif locale == 'en' %}
        Best regards,<br>The Dmqode.be Team.
    {% elseif locale == 'nl' %}
        Met vriendelijke groeten,<br>Het Dmqode.be-team.
    {% elseif locale == 'de' %}
        Mit freundlichen Grüßen,<br>Das Dmqode.be-Team.
    {% endif %}
</p>
{% endblock %}", "emails/reset_password.html.twig", "/var/www/serveur/templates/emails/reset_password.html.twig");
    }
}
