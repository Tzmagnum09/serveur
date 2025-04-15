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

/* emails/registration_confirmation.html.twig */
class __TwigTemplate_f710a30ed75f45c2681fca6968901118 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/registration_confirmation.html.twig"));

        $this->parent = $this->loadTemplate("emails/email_template_base.html.twig", "emails/registration_confirmation.html.twig", 1);
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
            yield "        Merci de vous être inscrit sur notre site. Pour confirmer votre adresse email, veuillez cliquer sur le bouton ci-dessous.
    ";
        } elseif ((        // line 19
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 19, $this->source); })()) == "en")) {
            // line 20
            yield "        Thank you for registering on our website. To confirm your email address, please click the button below.
    ";
        } elseif ((        // line 21
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 21, $this->source); })()) == "nl")) {
            // line 22
            yield "        Bedankt voor uw inschrijving op onze website. Om uw e-mailadres te bevestigen, klik op de onderstaande knop.
    ";
        } elseif ((        // line 23
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 23, $this->source); })()) == "de")) {
            // line 24
            yield "        Vielen Dank, dass Sie sich auf unserer Website registriert haben. Um Ihre E-Mail-Adresse zu bestätigen, klicken Sie bitte auf den untenstehenden Button.
    ";
        }
        // line 26
        yield "</p>

<p style=\"text-align: center;\">
    <a href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["signedUrl"]) || array_key_exists("signedUrl", $context) ? $context["signedUrl"] : (function () { throw new RuntimeError('Variable "signedUrl" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "\" class=\"button\">
        ";
        // line 30
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 30, $this->source); })()) == "fr")) {
            // line 31
            yield "            Confirmer mon adresse email
        ";
        } elseif ((        // line 32
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 32, $this->source); })()) == "en")) {
            // line 33
            yield "            Confirm my email address
        ";
        } elseif ((        // line 34
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 34, $this->source); })()) == "nl")) {
            // line 35
            yield "            Mijn e-mailadres bevestigen
        ";
        } elseif ((        // line 36
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 36, $this->source); })()) == "de")) {
            // line 37
            yield "            Meine E-Mail-Adresse bestätigen
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["signedUrl"]) || array_key_exists("signedUrl", $context) ? $context["signedUrl"] : (function () { throw new RuntimeError('Variable "signedUrl" does not exist.', 53, $this->source); })()), "html", null, true);
        yield "</p>

<p>
    ";
        // line 56
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 56, $this->source); })()) == "fr")) {
            // line 57
            yield "        Ce lien expirera dans 24 heures.
    ";
        } elseif ((        // line 58
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 58, $this->source); })()) == "en")) {
            // line 59
            yield "        This link will expire in 24 hours.
    ";
        } elseif ((        // line 60
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 60, $this->source); })()) == "nl")) {
            // line 61
            yield "        Deze link verloopt binnen 24 uur.
    ";
        } elseif ((        // line 62
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 62, $this->source); })()) == "de")) {
            // line 63
            yield "        Dieser Link wird in 24 Stunden ablaufen.
    ";
        }
        // line 65
        yield "</p>

<p>
    ";
        // line 68
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 68, $this->source); })()) == "fr")) {
            // line 69
            yield "        Si vous n'avez pas créé de compte, veuillez ignorer cet email.
    ";
        } elseif ((        // line 70
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 70, $this->source); })()) == "en")) {
            // line 71
            yield "        If you did not create an account, please disregard this email.
    ";
        } elseif ((        // line 72
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 72, $this->source); })()) == "nl")) {
            // line 73
            yield "        Als u geen account heeft aangemaakt, kunt u deze e-mail negeren.
    ";
        } elseif ((        // line 74
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 74, $this->source); })()) == "de")) {
            // line 75
            yield "        Wenn Sie kein Konto erstellt haben, ignorieren Sie bitte diese E-Mail.
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
        return "emails/registration_confirmation.html.twig";
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
        return array (  264 => 89,  260 => 87,  258 => 86,  255 => 85,  253 => 84,  250 => 83,  248 => 82,  245 => 81,  243 => 80,  238 => 77,  234 => 75,  232 => 74,  229 => 73,  227 => 72,  224 => 71,  222 => 70,  219 => 69,  217 => 68,  212 => 65,  208 => 63,  206 => 62,  203 => 61,  201 => 60,  198 => 59,  196 => 58,  193 => 57,  191 => 56,  185 => 53,  182 => 52,  178 => 50,  176 => 49,  173 => 48,  171 => 47,  168 => 46,  166 => 45,  163 => 44,  161 => 43,  155 => 39,  151 => 37,  149 => 36,  146 => 35,  144 => 34,  141 => 33,  139 => 32,  136 => 31,  134 => 30,  130 => 29,  125 => 26,  121 => 24,  119 => 23,  116 => 22,  114 => 21,  111 => 20,  109 => 19,  106 => 18,  104 => 17,  99 => 14,  93 => 12,  91 => 11,  86 => 10,  84 => 9,  79 => 8,  77 => 7,  72 => 6,  70 => 5,  67 => 4,  57 => 3,  40 => 1,);
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
        Merci de vous être inscrit sur notre site. Pour confirmer votre adresse email, veuillez cliquer sur le bouton ci-dessous.
    {% elseif locale == 'en' %}
        Thank you for registering on our website. To confirm your email address, please click the button below.
    {% elseif locale == 'nl' %}
        Bedankt voor uw inschrijving op onze website. Om uw e-mailadres te bevestigen, klik op de onderstaande knop.
    {% elseif locale == 'de' %}
        Vielen Dank, dass Sie sich auf unserer Website registriert haben. Um Ihre E-Mail-Adresse zu bestätigen, klicken Sie bitte auf den untenstehenden Button.
    {% endif %}
</p>

<p style=\"text-align: center;\">
    <a href=\"{{ signedUrl }}\" class=\"button\">
        {% if locale == 'fr' %}
            Confirmer mon adresse email
        {% elseif locale == 'en' %}
            Confirm my email address
        {% elseif locale == 'nl' %}
            Mijn e-mailadres bevestigen
        {% elseif locale == 'de' %}
            Meine E-Mail-Adresse bestätigen
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
<p>{{ signedUrl }}</p>

<p>
    {% if locale == 'fr' %}
        Ce lien expirera dans 24 heures.
    {% elseif locale == 'en' %}
        This link will expire in 24 hours.
    {% elseif locale == 'nl' %}
        Deze link verloopt binnen 24 uur.
    {% elseif locale == 'de' %}
        Dieser Link wird in 24 Stunden ablaufen.
    {% endif %}
</p>

<p>
    {% if locale == 'fr' %}
        Si vous n'avez pas créé de compte, veuillez ignorer cet email.
    {% elseif locale == 'en' %}
        If you did not create an account, please disregard this email.
    {% elseif locale == 'nl' %}
        Als u geen account heeft aangemaakt, kunt u deze e-mail negeren.
    {% elseif locale == 'de' %}
        Wenn Sie kein Konto erstellt haben, ignorieren Sie bitte diese E-Mail.
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
{% endblock %}", "emails/registration_confirmation.html.twig", "/var/www/serveur/templates/emails/registration_confirmation.html.twig");
    }
}
