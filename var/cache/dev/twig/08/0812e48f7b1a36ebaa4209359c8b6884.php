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

/* emails/role_change.html.twig */
class __TwigTemplate_f42091b6705fbf0ad7dd79e252c621dc extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/role_change.html.twig"));

        $this->parent = $this->loadTemplate("emails/email_template_base.html.twig", "emails/role_change.html.twig", 1);
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
            yield "        Nous vous informons que votre rôle sur le site Dmqode.be a été modifié.
    ";
        } elseif ((        // line 19
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 19, $this->source); })()) == "en")) {
            // line 20
            yield "        We are writing to inform you that your role on the Dmqode.be website has been changed.
    ";
        } elseif ((        // line 21
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 21, $this->source); })()) == "nl")) {
            // line 22
            yield "        We informeren u dat uw rol op de Dmqode.be-website is gewijzigd.
    ";
        } elseif ((        // line 23
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 23, $this->source); })()) == "de")) {
            // line 24
            yield "        Wir möchten Sie darüber informieren, dass sich Ihre Rolle auf der Dmqode.be-Website geändert hat.
    ";
        }
        // line 26
        yield "</p>

<p>
    ";
        // line 29
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 29, $this->source); })()) == "fr")) {
            // line 30
            yield "        Rôle précédent : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["previousRole"]) || array_key_exists("previousRole", $context) ? $context["previousRole"] : (function () { throw new RuntimeError('Variable "previousRole" does not exist.', 30, $this->source); })()), "html", null, true);
            yield "<br>
        Nouveau rôle : ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["newRole"]) || array_key_exists("newRole", $context) ? $context["newRole"] : (function () { throw new RuntimeError('Variable "newRole" does not exist.', 31, $this->source); })()), "html", null, true);
            yield "
    ";
        } elseif ((        // line 32
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 32, $this->source); })()) == "en")) {
            // line 33
            yield "        Previous Role: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["previousRole"]) || array_key_exists("previousRole", $context) ? $context["previousRole"] : (function () { throw new RuntimeError('Variable "previousRole" does not exist.', 33, $this->source); })()), "html", null, true);
            yield "<br>
        New Role: ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["newRole"]) || array_key_exists("newRole", $context) ? $context["newRole"] : (function () { throw new RuntimeError('Variable "newRole" does not exist.', 34, $this->source); })()), "html", null, true);
            yield "
    ";
        } elseif ((        // line 35
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 35, $this->source); })()) == "nl")) {
            // line 36
            yield "        Vorige rol: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["previousRole"]) || array_key_exists("previousRole", $context) ? $context["previousRole"] : (function () { throw new RuntimeError('Variable "previousRole" does not exist.', 36, $this->source); })()), "html", null, true);
            yield "<br>
        Nieuwe rol: ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["newRole"]) || array_key_exists("newRole", $context) ? $context["newRole"] : (function () { throw new RuntimeError('Variable "newRole" does not exist.', 37, $this->source); })()), "html", null, true);
            yield "
    ";
        } elseif ((        // line 38
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 38, $this->source); })()) == "de")) {
            // line 39
            yield "        Vorherige Rolle: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["previousRole"]) || array_key_exists("previousRole", $context) ? $context["previousRole"] : (function () { throw new RuntimeError('Variable "previousRole" does not exist.', 39, $this->source); })()), "html", null, true);
            yield "<br>
        Neue Rolle: ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["newRole"]) || array_key_exists("newRole", $context) ? $context["newRole"] : (function () { throw new RuntimeError('Variable "newRole" does not exist.', 40, $this->source); })()), "html", null, true);
            yield "
    ";
        }
        // line 42
        yield "</p>

<p>
    ";
        // line 45
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 45, $this->source); })()) == "fr")) {
            // line 46
            yield "        Si vous avez des questions, n'hésitez pas à contacter notre support.
    ";
        } elseif ((        // line 47
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 47, $this->source); })()) == "en")) {
            // line 48
            yield "        If you have any questions, please don't hesitate to contact our support.
    ";
        } elseif ((        // line 49
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 49, $this->source); })()) == "nl")) {
            // line 50
            yield "        Als u vragen heeft, aarzel dan niet om contact op te nemen met onze ondersteuning.
    ";
        } elseif ((        // line 51
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 51, $this->source); })()) == "de")) {
            // line 52
            yield "        Bei Fragen zögern Sie nicht, unseren Support zu kontaktieren.
    ";
        }
        // line 54
        yield "</p>

<p style=\"text-align: center;\">
    <a href=\"https://";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 57, $this->source); })()), "html", null, true);
        yield "/login\" class=\"button\">
        ";
        // line 58
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 58, $this->source); })()) == "fr")) {
            // line 59
            yield "            Se connecter
        ";
        } elseif ((        // line 60
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 60, $this->source); })()) == "en")) {
            // line 61
            yield "            Log in
        ";
        } elseif ((        // line 62
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 62, $this->source); })()) == "nl")) {
            // line 63
            yield "            Inloggen
        ";
        } elseif ((        // line 64
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 64, $this->source); })()) == "de")) {
            // line 65
            yield "            Einloggen
        ";
        }
        // line 67
        yield "    </a>
</p>

<p>
    ";
        // line 71
        if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 71, $this->source); })()) == "fr")) {
            // line 72
            yield "        Cordialement,<br>L'équipe Dmqode.be.
    ";
        } elseif ((        // line 73
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 73, $this->source); })()) == "en")) {
            // line 74
            yield "        Best regards,<br>The Dmqode.be Team.
    ";
        } elseif ((        // line 75
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 75, $this->source); })()) == "nl")) {
            // line 76
            yield "        Met vriendelijke groeten,<br>Het Dmqode.be-team.
    ";
        } elseif ((        // line 77
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 77, $this->source); })()) == "de")) {
            // line 78
            yield "        Mit freundlichen Grüßen,<br>Das Dmqode.be-Team.
    ";
        }
        // line 80
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
        return "emails/role_change.html.twig";
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
        return array (  258 => 80,  254 => 78,  252 => 77,  249 => 76,  247 => 75,  244 => 74,  242 => 73,  239 => 72,  237 => 71,  231 => 67,  227 => 65,  225 => 64,  222 => 63,  220 => 62,  217 => 61,  215 => 60,  212 => 59,  210 => 58,  206 => 57,  201 => 54,  197 => 52,  195 => 51,  192 => 50,  190 => 49,  187 => 48,  185 => 47,  182 => 46,  180 => 45,  175 => 42,  170 => 40,  165 => 39,  163 => 38,  159 => 37,  154 => 36,  152 => 35,  148 => 34,  143 => 33,  141 => 32,  137 => 31,  132 => 30,  130 => 29,  125 => 26,  121 => 24,  119 => 23,  116 => 22,  114 => 21,  111 => 20,  109 => 19,  106 => 18,  104 => 17,  99 => 14,  93 => 12,  91 => 11,  86 => 10,  84 => 9,  79 => 8,  77 => 7,  72 => 6,  70 => 5,  67 => 4,  57 => 3,  40 => 1,);
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
        Rôle précédent : {{ previousRole }}<br>
        Nouveau rôle : {{ newRole }}
    {% elseif locale == 'en' %}
        Previous Role: {{ previousRole }}<br>
        New Role: {{ newRole }}
    {% elseif locale == 'nl' %}
        Vorige rol: {{ previousRole }}<br>
        Nieuwe rol: {{ newRole }}
    {% elseif locale == 'de' %}
        Vorherige Rolle: {{ previousRole }}<br>
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
{% endblock %}", "emails/role_change.html.twig", "/var/www/serveur/templates/emails/role_change.html.twig");
    }
}
