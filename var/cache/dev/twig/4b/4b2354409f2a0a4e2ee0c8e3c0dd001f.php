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

/* emails/permission_update.html.twig */
class __TwigTemplate_f88c0a47169a7aeba413f63e049ef17c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/permission_update.html.twig"));

        $this->parent = $this->loadTemplate("emails/email_template_base.html.twig", "emails/permission_update.html.twig", 1);
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
            yield "        Nous vous informons que vos permissions sur le site Dmqode.be ont été modifiées.
    ";
        } elseif ((        // line 19
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 19, $this->source); })()) == "en")) {
            // line 20
            yield "        We are writing to inform you that your permissions on the Dmqode.be website have been updated.
    ";
        } elseif ((        // line 21
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 21, $this->source); })()) == "nl")) {
            // line 22
            yield "        We informeren u dat uw rechten op de Dmqode.be-website zijn gewijzigd.
    ";
        } elseif ((        // line 23
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 23, $this->source); })()) == "de")) {
            // line 24
            yield "        Wir möchten Sie darüber informieren, dass sich Ihre Berechtigungen auf der Dmqode.be-Website geändert haben.
    ";
        }
        // line 26
        yield "</p>

<div class=\"permission-changes\">
    <h3>
        ";
        // line 30
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 30, $this->source); })()) == "fr")) {
            // line 31
            yield "            Détails des modifications
        ";
        } elseif ((        // line 32
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 32, $this->source); })()) == "en")) {
            // line 33
            yield "            Changes Details
        ";
        } elseif ((        // line 34
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 34, $this->source); })()) == "nl")) {
            // line 35
            yield "            Details van de wijzigingen
        ";
        } elseif ((        // line 36
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 36, $this->source); })()) == "de")) {
            // line 37
            yield "            Details der Änderungen
        ";
        }
        // line 39
        yield "    </h3>
    <p>";
        // line 40
        yield (isset($context["permissionChanges"]) || array_key_exists("permissionChanges", $context) ? $context["permissionChanges"] : (function () { throw new RuntimeError('Variable "permissionChanges" does not exist.', 40, $this->source); })());
        yield "</p>
</div>

<p>
    ";
        // line 44
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 44, $this->source); })()) == "fr")) {
            // line 45
            yield "        Si vous avez des questions sur ces modifications, n'hésitez pas à contacter notre support.
    ";
        } elseif ((        // line 46
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 46, $this->source); })()) == "en")) {
            // line 47
            yield "        If you have any questions about these changes, please don't hesitate to contact our support.
    ";
        } elseif ((        // line 48
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 48, $this->source); })()) == "nl")) {
            // line 49
            yield "        Als u vragen heeft over deze wijzigingen, aarzel dan niet om contact op te nemen met onze ondersteuning.
    ";
        } elseif ((        // line 50
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 50, $this->source); })()) == "de")) {
            // line 51
            yield "        Bei Fragen zu diesen Änderungen zögern Sie nicht, unseren Support zu kontaktieren.
    ";
        }
        // line 53
        yield "</p>

<p style=\"text-align: center;\">
    <a href=\"https://";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 56, $this->source); })()), "html", null, true);
        yield "/login\" class=\"button\">
        ";
        // line 57
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 57, $this->source); })()) == "fr")) {
            // line 58
            yield "            Se connecter
        ";
        } elseif ((        // line 59
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 59, $this->source); })()) == "en")) {
            // line 60
            yield "            Log in
        ";
        } elseif ((        // line 61
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 61, $this->source); })()) == "nl")) {
            // line 62
            yield "            Inloggen
        ";
        } elseif ((        // line 63
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 63, $this->source); })()) == "de")) {
            // line 64
            yield "            Einloggen
        ";
        }
        // line 66
        yield "    </a>
</p>

<p>
    ";
        // line 70
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 70, $this->source); })()) == "fr")) {
            // line 71
            yield "        Cordialement,<br>L'équipe Dmqode.be.
    ";
        } elseif ((        // line 72
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 72, $this->source); })()) == "en")) {
            // line 73
            yield "        Best regards,<br>The Dmqode.be Team.
    ";
        } elseif ((        // line 74
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 74, $this->source); })()) == "nl")) {
            // line 75
            yield "        Met vriendelijke groeten,<br>Het Dmqode.be-team.
    ";
        } elseif ((        // line 76
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 76, $this->source); })()) == "de")) {
            // line 77
            yield "        Mit freundlichen Grüßen,<br>Das Dmqode.be-Team.
    ";
        }
        // line 79
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
        return "emails/permission_update.html.twig";
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
        return array (  240 => 79,  236 => 77,  234 => 76,  231 => 75,  229 => 74,  226 => 73,  224 => 72,  221 => 71,  219 => 70,  213 => 66,  209 => 64,  207 => 63,  204 => 62,  202 => 61,  199 => 60,  197 => 59,  194 => 58,  192 => 57,  188 => 56,  183 => 53,  179 => 51,  177 => 50,  174 => 49,  172 => 48,  169 => 47,  167 => 46,  164 => 45,  162 => 44,  155 => 40,  152 => 39,  148 => 37,  146 => 36,  143 => 35,  141 => 34,  138 => 33,  136 => 32,  133 => 31,  131 => 30,  125 => 26,  121 => 24,  119 => 23,  116 => 22,  114 => 21,  111 => 20,  109 => 19,  106 => 18,  104 => 17,  99 => 14,  93 => 12,  91 => 11,  86 => 10,  84 => 9,  79 => 8,  77 => 7,  72 => 6,  70 => 5,  67 => 4,  57 => 3,  40 => 1,);
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
            Einloggen
        {% endif %}
    </a>
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
{% endblock %}", "emails/permission_update.html.twig", "/var/www/serveur/templates/emails/permission_update.html.twig");
    }
}
