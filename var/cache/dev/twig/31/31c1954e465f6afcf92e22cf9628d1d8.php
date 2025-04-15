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

/* emails/account_approved.html.twig */
class __TwigTemplate_ecbef3a47b488c51d872eb804578c786 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/account_approved.html.twig"));

        $this->parent = $this->loadTemplate("emails/email_template_base.html.twig", "emails/account_approved.html.twig", 1);
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
            yield "        Nous avons le plaisir de vous informer que votre compte a été approuvé par notre équipe d'administration. Vous pouvez désormais vous connecter à votre compte en cliquant sur le bouton ci-dessous.
    ";
        } elseif ((        // line 19
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 19, $this->source); })()) == "en")) {
            // line 20
            yield "        We are pleased to inform you that your account has been approved by our administration team. You can now log in to your account by clicking the button below.
    ";
        } elseif ((        // line 21
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 21, $this->source); })()) == "nl")) {
            // line 22
            yield "        We zijn verheugd u te informeren dat uw account is goedgekeurd door ons administratieteam. U kunt nu inloggen op uw account door op de onderstaande knop te klikken.
    ";
        } elseif ((        // line 23
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 23, $this->source); })()) == "de")) {
            // line 24
            yield "        Wir freuen uns, Ihnen mitteilen zu können, dass Ihr Konto von unserem Verwaltungsteam genehmigt wurde. Sie können sich jetzt in Ihr Konto einloggen, indem Sie auf die Schaltfläche unten klicken.
    ";
        }
        // line 26
        yield "</p>

<p style=\"text-align: center;\">
    <a href=\"https://";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "/login\" class=\"button\">
        ";
        // line 30
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 30, $this->source); })()) == "fr")) {
            // line 31
            yield "            Se connecter
        ";
        } elseif ((        // line 32
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 32, $this->source); })()) == "en")) {
            // line 33
            yield "            Log in
        ";
        } elseif ((        // line 34
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 34, $this->source); })()) == "nl")) {
            // line 35
            yield "            Inloggen
        ";
        } elseif ((        // line 36
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 36, $this->source); })()) == "de")) {
            // line 37
            yield "            Einloggen
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
            yield "        Si vous avez des questions, n'hésitez pas à nous contacter.
    ";
        } elseif ((        // line 45
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 45, $this->source); })()) == "en")) {
            // line 46
            yield "        If you have any questions, please don't hesitate to contact us.
    ";
        } elseif ((        // line 47
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 47, $this->source); })()) == "nl")) {
            // line 48
            yield "        Als u vragen heeft, aarzel dan niet om contact met ons op te nemen.
    ";
        } elseif ((        // line 49
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 49, $this->source); })()) == "de")) {
            // line 50
            yield "        Wenn Sie Fragen haben, zögern Sie nicht, uns zu kontaktieren.
    ";
        }
        // line 52
        yield "</p>

<p>
    ";
        // line 55
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 55, $this->source); })()) == "fr")) {
            // line 56
            yield "        Cordialement,<br>L'équipe Dmqode.be.
    ";
        } elseif ((        // line 57
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 57, $this->source); })()) == "en")) {
            // line 58
            yield "        Best regards,<br>The Dmqode.be Team.
    ";
        } elseif ((        // line 59
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 59, $this->source); })()) == "nl")) {
            // line 60
            yield "        Met vriendelijke groeten,<br>Het Dmqode.be-team.
    ";
        } elseif ((        // line 61
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 61, $this->source); })()) == "de")) {
            // line 62
            yield "        Mit freundlichen Grüßen,<br>Das Dmqode.be-Team.
    ";
        }
        // line 64
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
        return "emails/account_approved.html.twig";
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
        return array (  208 => 64,  204 => 62,  202 => 61,  199 => 60,  197 => 59,  194 => 58,  192 => 57,  189 => 56,  187 => 55,  182 => 52,  178 => 50,  176 => 49,  173 => 48,  171 => 47,  168 => 46,  166 => 45,  163 => 44,  161 => 43,  155 => 39,  151 => 37,  149 => 36,  146 => 35,  144 => 34,  141 => 33,  139 => 32,  136 => 31,  134 => 30,  130 => 29,  125 => 26,  121 => 24,  119 => 23,  116 => 22,  114 => 21,  111 => 20,  109 => 19,  106 => 18,  104 => 17,  99 => 14,  93 => 12,  91 => 11,  86 => 10,  84 => 9,  79 => 8,  77 => 7,  72 => 6,  70 => 5,  67 => 4,  57 => 3,  40 => 1,);
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
        Nous avons le plaisir de vous informer que votre compte a été approuvé par notre équipe d'administration. Vous pouvez désormais vous connecter à votre compte en cliquant sur le bouton ci-dessous.
    {% elseif locale == 'en' %}
        We are pleased to inform you that your account has been approved by our administration team. You can now log in to your account by clicking the button below.
    {% elseif locale == 'nl' %}
        We zijn verheugd u te informeren dat uw account is goedgekeurd door ons administratieteam. U kunt nu inloggen op uw account door op de onderstaande knop te klikken.
    {% elseif locale == 'de' %}
        Wir freuen uns, Ihnen mitteilen zu können, dass Ihr Konto von unserem Verwaltungsteam genehmigt wurde. Sie können sich jetzt in Ihr Konto einloggen, indem Sie auf die Schaltfläche unten klicken.
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
            Einloggen
        {% endif %}
    </a>
</p>

<p>
    {% if locale == 'fr' %}
        Si vous avez des questions, n'hésitez pas à nous contacter.
    {% elseif locale == 'en' %}
        If you have any questions, please don't hesitate to contact us.
    {% elseif locale == 'nl' %}
        Als u vragen heeft, aarzel dan niet om contact met ons op te nemen.
    {% elseif locale == 'de' %}
        Wenn Sie Fragen haben, zögern Sie nicht, uns zu kontaktieren.
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
{% endblock %}", "emails/account_approved.html.twig", "/var/www/serveur/templates/emails/account_approved.html.twig");
    }
}
