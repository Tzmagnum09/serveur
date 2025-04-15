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

/* admin/email_templates/index.html.twig */
class __TwigTemplate_28b6266f4ea6bf9a34d80937baa9928e extends Template
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
            'title' => [$this, 'block_title'],
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/email_templates/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/email_templates/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.title"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 6
        yield "<div class=\"sidebar\">
    <h5 class=\"mb-4\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.title"), "html", null, true);
        yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
                <i class=\"fas fa-tachometer-alt me-2\"></i> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.dashboard"), "html", null, true);
        yield "
            </a>
        </li>
        ";
        // line 14
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "isAdmin", [], "method", false, false, false, 14) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 14, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "manage_users"], "method", false, false, false, 14)))) {
            // line 15
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 16
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
            yield "\">
                <i class=\"fas fa-users me-2\"></i> ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.users"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 21
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "isAdmin", [], "method", false, false, false, 21) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 21, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "edit_email_templates"], "method", false, false, false, 21)))) {
            // line 22
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
            // line 23
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_templates");
            yield "\">
                <i class=\"fas fa-envelope me-2\"></i> ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.email_templates"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 28
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "isAdmin", [], "method", false, false, false, 28) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permission_service"]) || array_key_exists("permission_service", $context) ? $context["permission_service"] : (function () { throw new RuntimeError('Variable "permission_service" does not exist.', 28, $this->source); })()), "hasPermission", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "translate_content"], "method", false, false, false, 28)))) {
            // line 29
            yield "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 30
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_translations");
            yield "\">
                <i class=\"fas fa-language me-2\"></i> ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.translations"), "html", null, true);
            yield "
            </a>
        </li>
        ";
        }
        // line 35
        yield "    </ul>
    
    ";
        // line 37
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 38
            yield "    <h5 class=\"mb-3 mt-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_admin"), "html", null, true);
            yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 41
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_dashboard");
            yield "\">
                <i class=\"fas fa-shield-alt me-2\"></i> ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.sidebar.super_dashboard"), "html", null, true);
            yield "
            </a>
        </li>
    </ul>
    ";
        }
        // line 47
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 51
        yield "<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.title"), "html", null, true);
        yield "</h1>
        <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_new");
        yield "\" class=\"btn btn-gradient\">
            <i class=\"fas fa-plus me-1\"></i> ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.new_btn"), "html", null, true);
        yield "
        </a>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.list"), "html", null, true);
        yield "</h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0\">
                    <thead>
                        <tr>
                            <th>";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.code"), "html", null, true);
        yield "</th>
                            <th>";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.subject"), "html", null, true);
        yield "</th>
                            <th>";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.translations"), "html", null, true);
        yield "</th>
                            <th>";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.updated_at"), "html", null, true);
        yield "</th>
                            <th>";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.actions"), "html", null, true);
        yield "</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new RuntimeError('Variable "templates" does not exist.', 76, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["code"] => $context["localeTemplates"]) {
            // line 77
            yield "                            <tr>
                                <td class=\"fw-bold\">";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["code"], "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 80
            if (CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", true, true, false, 80)) {
                // line 81
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", false, false, false, 81), "subject", [], "any", false, false, false, 81), "html", null, true);
                yield "
                                    ";
            } elseif (Twig\Extension\CoreExtension::first($this->env->getCharset(),             // line 82
$context["localeTemplates"])) {
                // line 83
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["localeTemplates"]), "subject", [], "any", false, false, false, 83), "html", null, true);
                yield "
                                    ";
            }
            // line 85
            yield "                                </td>
                                <td>
                                    ";
            // line 87
            if (CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", true, true, false, 87)) {
                yield "<span class=\"badge bg-primary me-1\">FR</span>";
            }
            // line 88
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "nl", [], "array", true, true, false, 88)) {
                yield "<span class=\"badge bg-primary me-1\">NL</span>";
            }
            // line 89
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "en", [], "array", true, true, false, 89)) {
                yield "<span class=\"badge bg-primary me-1\">EN</span>";
            }
            // line 90
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "de", [], "array", true, true, false, 90)) {
                yield "<span class=\"badge bg-primary me-1\">DE</span>";
            }
            // line 91
            yield "                                </td>
                                <td>
                                    ";
            // line 93
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", true, true, false, 93) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", false, false, false, 93), "updatedAt", [], "any", false, false, false, 93))) {
                // line 94
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", false, false, false, 94), "updatedAt", [], "any", false, false, false, 94), "d/m/Y H:i"), "html", null, true);
                yield "
                                    ";
            } elseif ((Twig\Extension\CoreExtension::first($this->env->getCharset(),             // line 95
$context["localeTemplates"]) && CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["localeTemplates"]), "updatedAt", [], "any", false, false, false, 95))) {
                // line 96
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["localeTemplates"]), "updatedAt", [], "any", false, false, false, 96), "d/m/Y H:i"), "html", null, true);
                yield "
                                    ";
            } elseif (Twig\Extension\CoreExtension::first($this->env->getCharset(),             // line 97
$context["localeTemplates"])) {
                // line 98
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["localeTemplates"]), "createdAt", [], "any", false, false, false, 98), "d/m/Y H:i"), "html", null, true);
                yield "
                                    ";
            }
            // line 100
            yield "                                </td>
                                <td>
                                    <!-- Modifier le menu déroulant par un seul bouton Modifier -->
                                    ";
            // line 103
            $context["defaultTemplate"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", true, true, false, 103)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["localeTemplates"], "fr", [], "array", false, false, false, 103)) : (Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["localeTemplates"])));
            // line 104
            yield "                                    ";
            if ((isset($context["defaultTemplate"]) || array_key_exists("defaultTemplate", $context) ? $context["defaultTemplate"] : (function () { throw new RuntimeError('Variable "defaultTemplate" does not exist.', 104, $this->source); })())) {
                // line 105
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_email_template_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["defaultTemplate"]) || array_key_exists("defaultTemplate", $context) ? $context["defaultTemplate"] : (function () { throw new RuntimeError('Variable "defaultTemplate" does not exist.', 105, $this->source); })()), "id", [], "any", false, false, false, 105)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">
                                            <i class=\"fas fa-edit me-1\"></i> ";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.edit"), "html", null, true);
                yield "
                                        </a>
                                    ";
            }
            // line 109
            yield "                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 111
        if (!$context['_iterated']) {
            // line 112
            yield "                            <tr>
                                <td colspan=\"5\" class=\"text-center py-4\">";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.no_templates"), "html", null, true);
            yield "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['code'], $context['localeTemplates'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.about"), "html", null, true);
        yield "</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"card mb-3\">
                        <div class=\"card-header bg-light\">
                            <h6 class=\"mb-0\">";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.categories.personal"), "Informations personnelles"), "html", null, true);
        yield "</h6>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"mb-0 ps-3\">
                                <li><code>";
        // line 135
        yield "{{ firstName }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.firstName"), "html", null, true);
        yield "</li>
                                <li><code>";
        // line 136
        yield "{{ lastName }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.lastName"), "html", null, true);
        yield "</li>
                                <li><code>";
        // line 137
        yield "{{ fullName }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.fullName"), "html", null, true);
        yield "</li>
                                <li><code>";
        // line 138
        yield "{{ email }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.email"), "html", null, true);
        yield "</li>
                                <li><code>";
        // line 139
        yield "{{ phoneNumber }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.phoneNumber"), "Téléphone"), "html", null, true);
        yield "</li>
                                <li><code>";
        // line 140
        yield "{{ birthDate }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.birthDate"), "Date de naissance"), "html", null, true);
        yield "</li>
                                <li><code>";
        // line 141
        yield "{{ age }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.age"), "Âge"), "html", null, true);
        yield "</li>
                                <li><code>";
        // line 142
        yield "{{ locale }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.locale"), "Langue"), "html", null, true);
        yield "</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-6\">
                    <div class=\"card mb-3\">
                        <div class=\"card-header bg-light\">
                            <h6 class=\"mb-0\">";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.categories.address"), "Adresse"), "html", null, true);
        yield "</h6>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"mb-0 ps-3\">
                                <li><code>";
        // line 155
        yield "{{ fullAddress }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.fullAddress"), "Adresse complète"), "html", null, true);
        yield "</li>
                                <li><code>";
        // line 156
        yield "{{ street }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.street"), "Rue"), "html", null, true);
        yield "</li>
                                <li><code>";
        // line 157
        yield "{{ houseNumber }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.houseNumber"), "Numéro"), "html", null, true);
        yield "</li>
                                <li><code>";
        // line 158
        yield "{{ boxNumber }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.boxNumber"), "Boîte"), "html", null, true);
        yield "</li>
                                <li><code>";
        // line 159
        yield "{{ postalCode }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.postalCode"), "Code postal"), "html", null, true);
        yield "</li>
                                <li><code>";
        // line 160
        yield "{{ city }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.city"), "Ville"), "html", null, true);
        yield "</li>
                                <li><code>";
        // line 161
        yield "{{ country }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.country"), "Pays"), "html", null, true);
        yield "</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-6\">
                    <div class=\"card mb-3\">
                        <div class=\"card-header bg-light\">
                            <h6 class=\"mb-0\">";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.categories.system"), "Système"), "html", null, true);
        yield "</h6>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"mb-0 ps-3\">
                                <li><code>";
        // line 174
        yield "{{ domain }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.domain"), "html", null, true);
        yield "</li>
                                <li><code>";
        // line 175
        yield "{{ signedUrl }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.signedUrl"), "URL de vérification"), "html", null, true);
        yield "</li>
                                <li><code>";
        // line 176
        yield "{{ resetToken }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.resetToken"), "Token de réinitialisation"), "html", null, true);
        yield "</li>
                                <li><code>";
        // line 177
        yield "{{ tokenLifetime }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.tokenLifetime"), "Durée de vie du token"), "html", null, true);
        yield "</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-6\">
                    <div class=\"card mb-3\">
                        <div class=\"card-header bg-light\">
                            <h6 class=\"mb-0\">";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.categories.specific"), "Variables spécifiques"), "html", null, true);
        yield "</h6>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"mb-0 ps-3\">
                                <li><code>";
        // line 190
        yield "{{ permissionChanges }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.permissionChanges"), "Modifications des permissions"), "html", null, true);
        yield "</li>
                                <li><code>";
        // line 191
        yield "{{ previousRole }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.previousRole"), "Rôle précédent"), "html", null, true);
        yield "</li>
                                <li><code>";
        // line 192
        yield "{{ newRole }}";
        yield "</code> - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.newRole"), "Nouveau rôle"), "html", null, true);
        yield "</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-12\">
                    <div class=\"alert alert-info mb-0\">
                        <i class=\"fas fa-info-circle me-2\"></i>
                        ";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.email_templates.variables.description"), "html", null, true);
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/email_templates/index.html.twig";
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
        return array (  583 => 201,  569 => 192,  563 => 191,  557 => 190,  550 => 186,  536 => 177,  530 => 176,  524 => 175,  518 => 174,  511 => 170,  497 => 161,  491 => 160,  485 => 159,  479 => 158,  473 => 157,  467 => 156,  461 => 155,  454 => 151,  440 => 142,  434 => 141,  428 => 140,  422 => 139,  416 => 138,  410 => 137,  404 => 136,  398 => 135,  391 => 131,  381 => 124,  371 => 116,  362 => 113,  359 => 112,  357 => 111,  351 => 109,  345 => 106,  340 => 105,  337 => 104,  335 => 103,  330 => 100,  324 => 98,  322 => 97,  317 => 96,  315 => 95,  310 => 94,  308 => 93,  304 => 91,  299 => 90,  294 => 89,  289 => 88,  285 => 87,  281 => 85,  275 => 83,  273 => 82,  268 => 81,  266 => 80,  261 => 78,  258 => 77,  253 => 76,  246 => 72,  242 => 71,  238 => 70,  234 => 69,  230 => 68,  220 => 61,  211 => 55,  207 => 54,  203 => 53,  199 => 51,  189 => 50,  180 => 47,  172 => 42,  168 => 41,  161 => 38,  159 => 37,  155 => 35,  148 => 31,  144 => 30,  141 => 29,  138 => 28,  131 => 24,  127 => 23,  124 => 22,  121 => 21,  114 => 17,  110 => 16,  107 => 15,  105 => 14,  99 => 11,  95 => 10,  89 => 7,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'admin.email_templates.title'|trans }}{% endblock %}

{% block sidebar %}
<div class=\"sidebar\">
    <h5 class=\"mb-4\">{{ 'admin.sidebar.title'|trans }}</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_admin_dashboard') }}\">
                <i class=\"fas fa-tachometer-alt me-2\"></i> {{ 'admin.sidebar.dashboard'|trans }}
            </a>
        </li>
        {% if is_granted('ROLE_SUPER_ADMIN') or app.user.isAdmin() and permission_service.hasPermission(app.user, 'manage_users') %}
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_admin_users') }}\">
                <i class=\"fas fa-users me-2\"></i> {{ 'admin.sidebar.users'|trans }}
            </a>
        </li>
        {% endif %}
        {% if is_granted('ROLE_SUPER_ADMIN') or app.user.isAdmin() and permission_service.hasPermission(app.user, 'edit_email_templates') %}
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"{{ path('app_admin_email_templates') }}\">
                <i class=\"fas fa-envelope me-2\"></i> {{ 'admin.sidebar.email_templates'|trans }}
            </a>
        </li>
        {% endif %}
        {% if is_granted('ROLE_SUPER_ADMIN') or app.user.isAdmin() and permission_service.hasPermission(app.user, 'translate_content') %}
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_admin_translations') }}\">
                <i class=\"fas fa-language me-2\"></i> {{ 'admin.sidebar.translations'|trans }}
            </a>
        </li>
        {% endif %}
    </ul>
    
    {% if is_granted('ROLE_SUPER_ADMIN') %}
    <h5 class=\"mb-3 mt-4\">{{ 'admin.sidebar.super_admin'|trans }}</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_super_admin_dashboard') }}\">
                <i class=\"fas fa-shield-alt me-2\"></i> {{ 'admin.sidebar.super_dashboard'|trans }}
            </a>
        </li>
    </ul>
    {% endif %}
</div>
{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">{{ 'admin.email_templates.title'|trans }}</h1>
        <a href=\"{{ path('app_admin_email_template_new') }}\" class=\"btn btn-gradient\">
            <i class=\"fas fa-plus me-1\"></i> {{ 'admin.email_templates.new_btn'|trans }}
        </a>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">{{ 'admin.email_templates.list'|trans }}</h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0\">
                    <thead>
                        <tr>
                            <th>{{ 'admin.email_templates.code'|trans }}</th>
                            <th>{{ 'admin.email_templates.subject'|trans }}</th>
                            <th>{{ 'admin.email_templates.translations'|trans }}</th>
                            <th>{{ 'admin.email_templates.updated_at'|trans }}</th>
                            <th>{{ 'admin.email_templates.actions'|trans }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for code, localeTemplates in templates %}
                            <tr>
                                <td class=\"fw-bold\">{{ code }}</td>
                                <td>
                                    {% if localeTemplates['fr'] is defined %}
                                        {{ localeTemplates['fr'].subject }}
                                    {% elseif localeTemplates|first %}
                                        {{ localeTemplates|first.subject }}
                                    {% endif %}
                                </td>
                                <td>
                                    {% if localeTemplates['fr'] is defined %}<span class=\"badge bg-primary me-1\">FR</span>{% endif %}
                                    {% if localeTemplates['nl'] is defined %}<span class=\"badge bg-primary me-1\">NL</span>{% endif %}
                                    {% if localeTemplates['en'] is defined %}<span class=\"badge bg-primary me-1\">EN</span>{% endif %}
                                    {% if localeTemplates['de'] is defined %}<span class=\"badge bg-primary me-1\">DE</span>{% endif %}
                                </td>
                                <td>
                                    {% if localeTemplates['fr'] is defined and localeTemplates['fr'].updatedAt %}
                                        {{ localeTemplates['fr'].updatedAt|date('d/m/Y H:i') }}
                                    {% elseif localeTemplates|first and localeTemplates|first.updatedAt %}
                                        {{ localeTemplates|first.updatedAt|date('d/m/Y H:i') }}
                                    {% elseif localeTemplates|first %}
                                        {{ localeTemplates|first.createdAt|date('d/m/Y H:i') }}
                                    {% endif %}
                                </td>
                                <td>
                                    <!-- Modifier le menu déroulant par un seul bouton Modifier -->
                                    {% set defaultTemplate = localeTemplates['fr'] is defined ? localeTemplates['fr'] : localeTemplates|first %}
                                    {% if defaultTemplate %}
                                        <a href=\"{{ path('app_admin_email_template_edit', {'id': defaultTemplate.id}) }}\" class=\"btn btn-sm btn-outline-primary\">
                                            <i class=\"fas fa-edit me-1\"></i> {{ 'admin.email_templates.edit'|trans }}
                                        </a>
                                    {% endif %}
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"5\" class=\"text-center py-4\">{{ 'admin.email_templates.no_templates'|trans }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">{{ 'admin.email_templates.about'|trans }}</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"card mb-3\">
                        <div class=\"card-header bg-light\">
                            <h6 class=\"mb-0\">{{ 'admin.email_templates.variables.categories.personal'|trans|default('Informations personnelles') }}</h6>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"mb-0 ps-3\">
                                <li><code>{{ '{{ firstName }}' }}</code> - {{ 'admin.email_templates.variables.firstName'|trans }}</li>
                                <li><code>{{ '{{ lastName }}' }}</code> - {{ 'admin.email_templates.variables.lastName'|trans }}</li>
                                <li><code>{{ '{{ fullName }}' }}</code> - {{ 'admin.email_templates.variables.fullName'|trans }}</li>
                                <li><code>{{ '{{ email }}' }}</code> - {{ 'admin.email_templates.variables.email'|trans }}</li>
                                <li><code>{{ '{{ phoneNumber }}' }}</code> - {{ 'admin.email_templates.variables.phoneNumber'|trans|default('Téléphone') }}</li>
                                <li><code>{{ '{{ birthDate }}' }}</code> - {{ 'admin.email_templates.variables.birthDate'|trans|default('Date de naissance') }}</li>
                                <li><code>{{ '{{ age }}' }}</code> - {{ 'admin.email_templates.variables.age'|trans|default('Âge') }}</li>
                                <li><code>{{ '{{ locale }}' }}</code> - {{ 'admin.email_templates.variables.locale'|trans|default('Langue') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-6\">
                    <div class=\"card mb-3\">
                        <div class=\"card-header bg-light\">
                            <h6 class=\"mb-0\">{{ 'admin.email_templates.variables.categories.address'|trans|default('Adresse') }}</h6>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"mb-0 ps-3\">
                                <li><code>{{ '{{ fullAddress }}' }}</code> - {{ 'admin.email_templates.variables.fullAddress'|trans|default('Adresse complète') }}</li>
                                <li><code>{{ '{{ street }}' }}</code> - {{ 'admin.email_templates.variables.street'|trans|default('Rue') }}</li>
                                <li><code>{{ '{{ houseNumber }}' }}</code> - {{ 'admin.email_templates.variables.houseNumber'|trans|default('Numéro') }}</li>
                                <li><code>{{ '{{ boxNumber }}' }}</code> - {{ 'admin.email_templates.variables.boxNumber'|trans|default('Boîte') }}</li>
                                <li><code>{{ '{{ postalCode }}' }}</code> - {{ 'admin.email_templates.variables.postalCode'|trans|default('Code postal') }}</li>
                                <li><code>{{ '{{ city }}' }}</code> - {{ 'admin.email_templates.variables.city'|trans|default('Ville') }}</li>
                                <li><code>{{ '{{ country }}' }}</code> - {{ 'admin.email_templates.variables.country'|trans|default('Pays') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-6\">
                    <div class=\"card mb-3\">
                        <div class=\"card-header bg-light\">
                            <h6 class=\"mb-0\">{{ 'admin.email_templates.variables.categories.system'|trans|default('Système') }}</h6>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"mb-0 ps-3\">
                                <li><code>{{ '{{ domain }}' }}</code> - {{ 'admin.email_templates.variables.domain'|trans }}</li>
                                <li><code>{{ '{{ signedUrl }}' }}</code> - {{ 'admin.email_templates.variables.signedUrl'|trans|default('URL de vérification') }}</li>
                                <li><code>{{ '{{ resetToken }}' }}</code> - {{ 'admin.email_templates.variables.resetToken'|trans|default('Token de réinitialisation') }}</li>
                                <li><code>{{ '{{ tokenLifetime }}' }}</code> - {{ 'admin.email_templates.variables.tokenLifetime'|trans|default('Durée de vie du token') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-6\">
                    <div class=\"card mb-3\">
                        <div class=\"card-header bg-light\">
                            <h6 class=\"mb-0\">{{ 'admin.email_templates.variables.categories.specific'|trans|default('Variables spécifiques') }}</h6>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"mb-0 ps-3\">
                                <li><code>{{ '{{ permissionChanges }}' }}</code> - {{ 'admin.email_templates.variables.permissionChanges'|trans|default('Modifications des permissions') }}</li>
                                <li><code>{{ '{{ previousRole }}' }}</code> - {{ 'admin.email_templates.variables.previousRole'|trans|default('Rôle précédent') }}</li>
                                <li><code>{{ '{{ newRole }}' }}</code> - {{ 'admin.email_templates.variables.newRole'|trans|default('Nouveau rôle') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-12\">
                    <div class=\"alert alert-info mb-0\">
                        <i class=\"fas fa-info-circle me-2\"></i>
                        {{ 'admin.email_templates.variables.description'|trans }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/email_templates/index.html.twig", "/var/www/serveur/templates/admin/email_templates/index.html.twig");
    }
}
