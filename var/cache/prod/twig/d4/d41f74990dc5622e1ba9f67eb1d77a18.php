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

/* @KnpPaginator/Pagination/twitter_bootstrap_v4_material_design_icons_sortable_link.html.twig */
class __TwigTemplate_28f51ab5530e53c57cf9bb4405294c01 extends Template
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
        // line 12
        yield "<a";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr"], "html", null, true);
            yield "=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield ">
    <span class=\"float-right\">
        ";
        // line 14
        if (($context["sorted"] ?? null)) {
            // line 15
            yield "            ";
            if ((($context["direction"] ?? null) == "desc")) {
                // line 16
                yield "                <i class=\"material-icons\">expand_more</i>
            ";
            } else {
                // line 18
                yield "                <i class=\"material-icons\">expand_less</i>
            ";
            }
            // line 20
            yield "        ";
        } else {
            // line 21
            yield "            <i class=\"material-icons\">unfold_more</i>
        ";
        }
        // line 23
        yield "    </span>
    ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "
</a>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@KnpPaginator/Pagination/twitter_bootstrap_v4_material_design_icons_sortable_link.html.twig";
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
        return array (  82 => 24,  79 => 23,  75 => 21,  72 => 20,  68 => 18,  64 => 16,  61 => 15,  59 => 14,  42 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@KnpPaginator/Pagination/twitter_bootstrap_v4_material_design_icons_sortable_link.html.twig", "/var/www/serveur/vendor/knplabs/knp-paginator-bundle/templates/Pagination/twitter_bootstrap_v4_material_design_icons_sortable_link.html.twig");
    }
}
