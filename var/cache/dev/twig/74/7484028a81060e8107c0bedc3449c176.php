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

/* admin/super_admin/dashboard.html.twig */
class __TwigTemplate_17b94e3ea8fb21ed8720b5618748e93b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/super_admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/super_admin/dashboard.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.title"), "html", null, true);
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.sidebar.title"), "html", null, true);
        yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_dashboard");
        yield "\">
                <i class=\"fas fa-tachometer-alt me-2\"></i> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.sidebar.dashboard"), "html", null, true);
        yield "
            </a>
        </li>
    </ul>
    
    <h5 class=\"mb-3 mt-4\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.sidebar.admin_section"), "html", null, true);
        yield "</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
                <i class=\"fas fa-arrow-left me-2\"></i> ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.sidebar.back_to_admin"), "html", null, true);
        yield "
            </a>
        </li>
    </ul>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 28
        yield "<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.title"), "html", null, true);
        yield "</h1>
    </div>
    
    <div class=\"row mb-4\">
        <div class=\"col-lg-3 col-md-6 mb-4\">
            <div class=\"stats-card\">
                <div class=\"stats-icon\">
                    <i class=\"fas fa-user-shield\"></i>
                </div>
                <div class=\"stats-info\">
                    <div class=\"stats-title\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.stats.admins"), "html", null, true);
        yield "</div>
                    <div class=\"stats-value\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["admins"]) || array_key_exists("admins", $context) ? $context["admins"] : (function () { throw new RuntimeError('Variable "admins" does not exist.', 41, $this->source); })())), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-3 col-md-6 mb-4\">
            <div class=\"stats-card\">
                <div class=\"stats-icon\">
                    <i class=\"fas fa-users-cog\"></i>
                </div>
                <div class=\"stats-info\">
                    <div class=\"stats-title\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.stats.super_admins"), "html", null, true);
        yield "</div>
                    <div class=\"stats-value\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("super_admin_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["super_admin_count"]) || array_key_exists("super_admin_count", $context) ? $context["super_admin_count"] : (function () { throw new RuntimeError('Variable "super_admin_count" does not exist.', 53, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-3 col-md-6 mb-4\">
            <div class=\"stats-card\">
                <div class=\"stats-icon\">
                    <i class=\"fas fa-users\"></i>
                </div>
                <div class=\"stats-info\">
                    <div class=\"stats-title\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.stats.total_users"), "html", null, true);
        yield "</div>
                    <div class=\"stats-value\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("user_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["user_count"]) || array_key_exists("user_count", $context) ? $context["user_count"] : (function () { throw new RuntimeError('Variable "user_count" does not exist.', 65, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-3 col-md-6 mb-4\">
            <div class=\"stats-card\">
                <div class=\"stats-icon\">
                    <i class=\"fas fa-key\"></i>
                </div>
                <div class=\"stats-info\">
                    <div class=\"stats-title\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.stats.permissions"), "html", null, true);
        yield "</div>
                    <div class=\"stats-value\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("permission_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["permission_count"]) || array_key_exists("permission_count", $context) ? $context["permission_count"] : (function () { throw new RuntimeError('Variable "permission_count" does not exist.', 77, $this->source); })()), 6)) : (6)), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.admins_list"), "html", null, true);
        yield "</h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0\">
                    <thead>
                        <tr>
                            <th>";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.admin_name"), "html", null, true);
        yield "</th>
                            <th>";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.admin_email"), "html", null, true);
        yield "</th>
                            <th>";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.created_at"), "html", null, true);
        yield "</th>
                            <th>";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.last_login"), "html", null, true);
        yield "</th>
                            <th>";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.actions"), "html", null, true);
        yield "</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["admins"]) || array_key_exists("admins", $context) ? $context["admins"] : (function () { throw new RuntimeError('Variable "admins" does not exist.', 100, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 101
            yield "                            <tr>
                                <td>";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "fullName", [], "any", false, false, false, 102), "html", null, true);
            yield "</td>
                                <td>";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "email", [], "any", false, false, false, 103), "html", null, true);
            yield "</td>
                                <td>";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "createdAt", [], "any", false, false, false, 104), "d/m/Y"), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 106
            if (CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "lastLoginAt", [], "any", false, false, false, 106)) {
                // line 107
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "lastLoginAt", [], "any", false, false, false, 107), "d/m/Y H:i"), "html", null, true);
                yield "
                                    ";
            } else {
                // line 109
                yield "                                        -
                                    ";
            }
            // line 111
            yield "                                </td>
                                <td>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "id", [], "any", false, false, false, 114)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        
                                        <a href=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_permissions", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "id", [], "any", false, false, false, 118)]), "html", null, true);
            yield "\" class=\"btn btn-outline-secondary\">
                                            <i class=\"fas fa-key\"></i>
                                        </a>
                                        
                                        <form method=\"post\" action=\"";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_demote", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "id", [], "any", false, false, false, 122)]), "html", null, true);
            yield "\" style=\"display: inline-block;\" onsubmit=\"return confirm('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.confirm_demote"), "html", null, true);
            yield "')\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("demote" . CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "id", [], "any", false, false, false, 123))), "html", null, true);
            yield "\">
                                            <button type=\"submit\" class=\"btn btn-outline-danger\">
                                                <i class=\"fas fa-user-minus\"></i>
                                            </button>
                                        </form>
                                        
                                        <form method=\"post\" action=\"";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_promote_super", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "id", [], "any", false, false, false, 129)]), "html", null, true);
            yield "\" style=\"display: inline-block;\" onsubmit=\"return confirm('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.confirm_promote_super"), "html", null, true);
            yield "')\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("promote-super" . CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "id", [], "any", false, false, false, 130))), "html", null, true);
            yield "\">
                                            <button type=\"submit\" class=\"btn btn-outline-primary\">
                                                <i class=\"fas fa-user-shield\"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 138
        if (!$context['_iterated']) {
            // line 139
            yield "                            <tr>
                                <td colspan=\"5\" class=\"text-center py-4\">";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.no_admins"), "html", null, true);
            yield "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['admin'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.promote_user"), "html", null, true);
        yield "</h5>
        </div>
        <div class=\"card-body\">
            <form action=\"#\" method=\"get\" class=\"row g-3\">
                <div class=\"col-md-10\">
                    <input type=\"text\" class=\"form-control\" id=\"userSearch\" name=\"q\" placeholder=\"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.search_users"), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-2 d-grid\">
                    <button type=\"submit\" class=\"btn btn-gradient\">";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.search"), "html", null, true);
        yield "</button>
                </div>
            </form>
            
            ";
        // line 163
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 163, $this->source); })()), "request", [], "any", false, false, false, 163), "query", [], "any", false, false, false, 163), "get", ["q"], "method", false, false, false, 163))) {
            // line 164
            yield "                <div class=\"search-results mt-4\">
                    <h6>";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.search_results"), "html", null, true);
            yield "</h6>
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.user_name"), "html", null, true);
            yield "</th>
                                    <th>";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.user_email"), "html", null, true);
            yield "</th>
                                    <th>";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.user_role"), "html", null, true);
            yield "</th>
                                    <th>";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.actions"), "html", null, true);
            yield "</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("search_results", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search_results"]) || array_key_exists("search_results", $context) ? $context["search_results"] : (function () { throw new RuntimeError('Variable "search_results" does not exist.', 177, $this->source); })()), [])) : ([])));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 178
                yield "                                    <tr>
                                        <td>";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 179), "html", null, true);
                yield "</td>
                                        <td>";
                // line 180
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 180), "html", null, true);
                yield "</td>
                                        <td>
                                            ";
                // line 182
                if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isSuperAdmin", [], "any", false, false, false, 182)) {
                    // line 183
                    yield "                                                <span class=\"badge bg-danger\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.role_super_admin"), "html", null, true);
                    yield "</span>
                                            ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 184
$context["user"], "isAdmin", [], "any", false, false, false, 184)) {
                    // line 185
                    yield "                                                <span class=\"badge bg-primary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.role_admin"), "html", null, true);
                    yield "</span>
                                            ";
                } else {
                    // line 187
                    yield "                                                <span class=\"badge bg-secondary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.role_user"), "html", null, true);
                    yield "</span>
                                            ";
                }
                // line 189
                yield "                                        </td>
                                        <td>
                                            ";
                // line 191
                if (( !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isAdmin", [], "any", false, false, false, 191) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isSuperAdmin", [], "any", false, false, false, 191))) {
                    // line 192
                    yield "                                                <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_promote", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 192)]), "html", null, true);
                    yield "\" style=\"display: inline-block;\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 193
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("promote" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 193))), "html", null, true);
                    yield "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-primary\">
                                                        <i class=\"fas fa-user-plus me-1\"></i> ";
                    // line 195
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.promote_to_admin"), "html", null, true);
                    yield "
                                                    </button>
                                                </form>
                                            ";
                }
                // line 199
                yield "                                        </td>
                                    </tr>
                                ";
                $context['_iterated'] = true;
            }
            // line 201
            if (!$context['_iterated']) {
                // line 202
                yield "                                    <tr>
                                        <td colspan=\"4\" class=\"text-center py-3\">";
                // line 203
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("super_admin.dashboard.no_results"), "html", null, true);
                yield "</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            yield "                            </tbody>
                        </table>
                    </div>
                </div>
            ";
        }
        // line 211
        yield "        </div>
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
        return "admin/super_admin/dashboard.html.twig";
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
        return array (  511 => 211,  504 => 206,  495 => 203,  492 => 202,  490 => 201,  484 => 199,  477 => 195,  472 => 193,  467 => 192,  465 => 191,  461 => 189,  455 => 187,  449 => 185,  447 => 184,  442 => 183,  440 => 182,  435 => 180,  431 => 179,  428 => 178,  423 => 177,  416 => 173,  412 => 172,  408 => 171,  404 => 170,  396 => 165,  393 => 164,  391 => 163,  384 => 159,  378 => 156,  370 => 151,  360 => 143,  351 => 140,  348 => 139,  346 => 138,  333 => 130,  327 => 129,  318 => 123,  312 => 122,  305 => 118,  298 => 114,  293 => 111,  289 => 109,  283 => 107,  281 => 106,  276 => 104,  272 => 103,  268 => 102,  265 => 101,  260 => 100,  253 => 96,  249 => 95,  245 => 94,  241 => 93,  237 => 92,  227 => 85,  216 => 77,  212 => 76,  198 => 65,  194 => 64,  180 => 53,  176 => 52,  162 => 41,  158 => 40,  145 => 30,  141 => 28,  131 => 27,  117 => 20,  113 => 19,  107 => 16,  99 => 11,  95 => 10,  89 => 7,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'super_admin.dashboard.title'|trans }}{% endblock %}

{% block sidebar %}
<div class=\"sidebar\">
    <h5 class=\"mb-4\">{{ 'super_admin.sidebar.title'|trans }}</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"{{ path('app_super_admin_dashboard') }}\">
                <i class=\"fas fa-tachometer-alt me-2\"></i> {{ 'super_admin.sidebar.dashboard'|trans }}
            </a>
        </li>
    </ul>
    
    <h5 class=\"mb-3 mt-4\">{{ 'super_admin.sidebar.admin_section'|trans }}</h5>
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_admin_dashboard') }}\">
                <i class=\"fas fa-arrow-left me-2\"></i> {{ 'super_admin.sidebar.back_to_admin'|trans }}
            </a>
        </li>
    </ul>
</div>
{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">{{ 'super_admin.dashboard.title'|trans }}</h1>
    </div>
    
    <div class=\"row mb-4\">
        <div class=\"col-lg-3 col-md-6 mb-4\">
            <div class=\"stats-card\">
                <div class=\"stats-icon\">
                    <i class=\"fas fa-user-shield\"></i>
                </div>
                <div class=\"stats-info\">
                    <div class=\"stats-title\">{{ 'super_admin.dashboard.stats.admins'|trans }}</div>
                    <div class=\"stats-value\">{{ admins|length }}</div>
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-3 col-md-6 mb-4\">
            <div class=\"stats-card\">
                <div class=\"stats-icon\">
                    <i class=\"fas fa-users-cog\"></i>
                </div>
                <div class=\"stats-info\">
                    <div class=\"stats-title\">{{ 'super_admin.dashboard.stats.super_admins'|trans }}</div>
                    <div class=\"stats-value\">{{ super_admin_count|default(0) }}</div>
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-3 col-md-6 mb-4\">
            <div class=\"stats-card\">
                <div class=\"stats-icon\">
                    <i class=\"fas fa-users\"></i>
                </div>
                <div class=\"stats-info\">
                    <div class=\"stats-title\">{{ 'super_admin.dashboard.stats.total_users'|trans }}</div>
                    <div class=\"stats-value\">{{ user_count|default(0) }}</div>
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-3 col-md-6 mb-4\">
            <div class=\"stats-card\">
                <div class=\"stats-icon\">
                    <i class=\"fas fa-key\"></i>
                </div>
                <div class=\"stats-info\">
                    <div class=\"stats-title\">{{ 'super_admin.dashboard.stats.permissions'|trans }}</div>
                    <div class=\"stats-value\">{{ permission_count|default(6) }}</div>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\">{{ 'super_admin.dashboard.admins_list'|trans }}</h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0\">
                    <thead>
                        <tr>
                            <th>{{ 'super_admin.dashboard.admin_name'|trans }}</th>
                            <th>{{ 'super_admin.dashboard.admin_email'|trans }}</th>
                            <th>{{ 'super_admin.dashboard.created_at'|trans }}</th>
                            <th>{{ 'super_admin.dashboard.last_login'|trans }}</th>
                            <th>{{ 'super_admin.dashboard.actions'|trans }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for admin in admins %}
                            <tr>
                                <td>{{ admin.fullName }}</td>
                                <td>{{ admin.email }}</td>
                                <td>{{ admin.createdAt|date('d/m/Y') }}</td>
                                <td>
                                    {% if admin.lastLoginAt %}
                                        {{ admin.lastLoginAt|date('d/m/Y H:i') }}
                                    {% else %}
                                        -
                                    {% endif %}
                                </td>
                                <td>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"{{ path('app_admin_user_edit', {'id': admin.id}) }}\" class=\"btn btn-outline-primary\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        
                                        <a href=\"{{ path('app_super_admin_permissions', {'id': admin.id}) }}\" class=\"btn btn-outline-secondary\">
                                            <i class=\"fas fa-key\"></i>
                                        </a>
                                        
                                        <form method=\"post\" action=\"{{ path('app_super_admin_demote', {'id': admin.id}) }}\" style=\"display: inline-block;\" onsubmit=\"return confirm('{{ 'super_admin.dashboard.confirm_demote'|trans }}')\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('demote' ~ admin.id) }}\">
                                            <button type=\"submit\" class=\"btn btn-outline-danger\">
                                                <i class=\"fas fa-user-minus\"></i>
                                            </button>
                                        </form>
                                        
                                        <form method=\"post\" action=\"{{ path('app_super_admin_promote_super', {'id': admin.id}) }}\" style=\"display: inline-block;\" onsubmit=\"return confirm('{{ 'super_admin.dashboard.confirm_promote_super'|trans }}')\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('promote-super' ~ admin.id) }}\">
                                            <button type=\"submit\" class=\"btn btn-outline-primary\">
                                                <i class=\"fas fa-user-shield\"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"5\" class=\"text-center py-4\">{{ 'super_admin.dashboard.no_admins'|trans }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header\">
            <h5 class=\"mb-0\">{{ 'super_admin.dashboard.promote_user'|trans }}</h5>
        </div>
        <div class=\"card-body\">
            <form action=\"#\" method=\"get\" class=\"row g-3\">
                <div class=\"col-md-10\">
                    <input type=\"text\" class=\"form-control\" id=\"userSearch\" name=\"q\" placeholder=\"{{ 'super_admin.dashboard.search_users'|trans }}\">
                </div>
                <div class=\"col-md-2 d-grid\">
                    <button type=\"submit\" class=\"btn btn-gradient\">{{ 'super_admin.dashboard.search'|trans }}</button>
                </div>
            </form>
            
            {% if app.request.query.get('q') is not empty %}
                <div class=\"search-results mt-4\">
                    <h6>{{ 'super_admin.dashboard.search_results'|trans }}</h6>
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>{{ 'super_admin.dashboard.user_name'|trans }}</th>
                                    <th>{{ 'super_admin.dashboard.user_email'|trans }}</th>
                                    <th>{{ 'super_admin.dashboard.user_role'|trans }}</th>
                                    <th>{{ 'super_admin.dashboard.actions'|trans }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for user in search_results|default([]) %}
                                    <tr>
                                        <td>{{ user.fullName }}</td>
                                        <td>{{ user.email }}</td>
                                        <td>
                                            {% if user.isSuperAdmin %}
                                                <span class=\"badge bg-danger\">{{ 'super_admin.dashboard.role_super_admin'|trans }}</span>
                                            {% elseif user.isAdmin %}
                                                <span class=\"badge bg-primary\">{{ 'super_admin.dashboard.role_admin'|trans }}</span>
                                            {% else %}
                                                <span class=\"badge bg-secondary\">{{ 'super_admin.dashboard.role_user'|trans }}</span>
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% if not user.isAdmin and not user.isSuperAdmin %}
                                                <form method=\"post\" action=\"{{ path('app_super_admin_promote', {'id': user.id}) }}\" style=\"display: inline-block;\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('promote' ~ user.id) }}\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-primary\">
                                                        <i class=\"fas fa-user-plus me-1\"></i> {{ 'super_admin.dashboard.promote_to_admin'|trans }}
                                                    </button>
                                                </form>
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"4\" class=\"text-center py-3\">{{ 'super_admin.dashboard.no_results'|trans }}</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}", "admin/super_admin/dashboard.html.twig", "/var/www/serveur/templates/admin/super_admin/dashboard.html.twig");
    }
}
