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

/* base.html.twig */
class __TwigTemplate_d5a18e0355fd876876985f12fa4656bf extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "locale", [], "any", false, false, false, 2), "html", null, true);
        yield "\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        yield "\">
        
        ";
        // line 10
        yield "        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        
        ";
        // line 13
        yield "        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
        
        ";
        // line 16
        yield "        <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app.css"), "html", null, true);
        yield "\">
        
        ";
        // line 18
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 22
        yield "    </head>
    <body>
        ";
        // line 25
        yield "        <header>
            ";
        // line 26
        yield from $this->loadTemplate("partials/navbar.html.twig", "base.html.twig", 26)->unwrap()->yield($context);
        // line 27
        yield "        </header>

        ";
        // line 30
        yield "        ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "session", [], "any", false, false, false, 30), "flashBag", [], "any", false, false, false, 30), "peekAll", [], "any", false, false, false, 30)) > 0)) {
            // line 31
            yield "            <div class=\"container mt-3\">
                ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "session", [], "any", false, false, false, 32), "flashBag", [], "any", false, false, false, 32), "all", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 33
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 34
                    yield "                        <div class=\"alert alert-";
                    yield ((($context["type"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true)));
                    yield " alert-dismissible fade show\" role=\"alert\">
                            ";
                    // line 35
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                    yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "            </div>
        ";
        }
        // line 42
        yield "
        ";
        // line 44
        yield "        <div class=\"d-flex\">
            ";
        // line 45
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 46
        yield "            
            ";
        // line 48
        yield "            <main class=\"flex-grow-1\">
                ";
        // line 49
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 50
        yield "            </main>
        </div>

        ";
        // line 54
        yield "        <footer class=\"footer mt-5 py-3 bg-light\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <p>&copy; ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("site.name"), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"col-md-6 text-end\">
                        <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_terms");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("terms.title"), "html", null, true);
        yield "</a>
                    </div>
                </div>
            </div>
        </footer>

        ";
        // line 68
        yield "        ";
        yield from $this->loadTemplate("cookie/cookie_banner.html.twig", "base.html.twig", 68)->unwrap()->yield($context);
        // line 69
        yield "        ";
        yield from $this->loadTemplate("cookie/cookie_modal.html.twig", "base.html.twig", 69)->unwrap()->yield($context);
        // line 70
        yield "        
        ";
        // line 72
        yield "        <div class=\"footer-cookie-settings\">
            <div class=\"container\">
                <div class=\"text-center py-2\">
                    <a href=\"#\" id=\"cookie-settings-link\" class=\"cookie-settings-link\" onclick=\"openCookiePreferences(); return false;\">
                        <i class=\"fas fa-cookie-bite me-1\"></i> ";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.footer.settings"), "html", null, true);
        yield "
                    </a>
                </div>
            </div>
        </div>

        ";
        // line 83
        yield "        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
        
        ";
        // line 86
        yield "        <script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
        
        ";
        // line 89
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/app.js"), "html", null, true);
        yield "\"></script>
        
        ";
        // line 91
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 95
        yield "    </body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("site.name"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        yield "            ";
        // line 20
        yield "            <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/cookie-consent.css"), "html", null, true);
        yield "\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 91
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        yield "            ";
        // line 93
        yield "            <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/cookie-consent.js"), "html", null, true);
        yield "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  317 => 93,  315 => 92,  305 => 91,  289 => 49,  273 => 45,  262 => 20,  260 => 19,  250 => 18,  233 => 6,  224 => 95,  222 => 91,  216 => 89,  212 => 86,  208 => 83,  199 => 76,  193 => 72,  190 => 70,  187 => 69,  184 => 68,  173 => 61,  165 => 58,  159 => 54,  154 => 50,  152 => 49,  149 => 48,  146 => 46,  144 => 45,  141 => 44,  138 => 42,  134 => 40,  128 => 39,  118 => 35,  113 => 34,  108 => 33,  104 => 32,  101 => 31,  98 => 30,  94 => 27,  92 => 26,  89 => 25,  85 => 22,  83 => 18,  77 => 16,  73 => 13,  69 => 10,  64 => 7,  60 => 6,  53 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale }}\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>{% block title %}{{ 'site.name'|trans }}{% endblock %}</title>
        <link rel=\"icon\" href=\"{{ asset('images/favicon.ico') }}\">
        
        {# Bootstrap CSS #}
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        
        {# Font Awesome #}
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
        
        {# Site CSS #}
        <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
        
        {% block stylesheets %}
            {# Ajout des styles pour les cookies #}
            <link rel=\"stylesheet\" href=\"{{ asset('css/cookie-consent.css') }}\">
        {% endblock %}
    </head>
    <body>
        {# Barre de navigation #}
        <header>
            {% include 'partials/navbar.html.twig' %}
        </header>

        {# Messages flash #}
        {% if app.session.flashBag.peekAll|length > 0 %}
            <div class=\"container mt-3\">
                {% for type, messages in app.session.flashBag.all %}
                    {% for message in messages %}
                        <div class=\"alert alert-{{ type == 'error' ? 'danger' : type }} alert-dismissible fade show\" role=\"alert\">
                            {{ message }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    {% endfor %}
                {% endfor %}
            </div>
        {% endif %}

        {# Sidebar optionnel (utilisé dans certains templates) #}
        <div class=\"d-flex\">
            {% block sidebar %}{% endblock %}
            
            {# Contenu principal #}
            <main class=\"flex-grow-1\">
                {% block body %}{% endblock %}
            </main>
        </div>

        {# Footer #}
        <footer class=\"footer mt-5 py-3 bg-light\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <p>&copy; {{ \"now\"|date(\"Y\") }} {{ 'site.name'|trans }}</p>
                    </div>
                    <div class=\"col-md-6 text-end\">
                        <a href=\"{{ path('app_terms') }}\">{{ 'terms.title'|trans }}</a>
                    </div>
                </div>
            </div>
        </footer>

        {# Bannière et modal des cookies #}
        {% include 'cookie/cookie_banner.html.twig' %}
        {% include 'cookie/cookie_modal.html.twig' %}
        
        {# Lien vers les paramètres des cookies dans le footer #}
        <div class=\"footer-cookie-settings\">
            <div class=\"container\">
                <div class=\"text-center py-2\">
                    <a href=\"#\" id=\"cookie-settings-link\" class=\"cookie-settings-link\" onclick=\"openCookiePreferences(); return false;\">
                        <i class=\"fas fa-cookie-bite me-1\"></i> {{ 'cookie.footer.settings'|trans }}
                    </a>
                </div>
            </div>
        </div>

        {# Bootstrap JS with Popper #}
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
        
        {# jQuery (si nécessaire) #}
        <script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
        
        {# JavaScript personnalisé #}
        <script src=\"{{ asset('js/app.js') }}\"></script>
        
        {% block javascripts %}
            {# Ajout du JavaScript pour les cookies #}
            <script src=\"{{ asset('js/cookie-consent.js') }}\"></script>
        {% endblock %}
    </body>
</html>", "base.html.twig", "/var/www/serveur/templates/base.html.twig");
    }
}
