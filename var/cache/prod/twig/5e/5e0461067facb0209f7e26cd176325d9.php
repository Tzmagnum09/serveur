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

/* @KnpPaginator/Pagination/twitter_bootstrap_v4_font_awesome_sortable_link.html.twig */
class __TwigTemplate_4c222ad35409c420b91f87e169daafe7 extends Template
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
        // line 9
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
        // line 11
        if (($context["sorted"] ?? null)) {
            // line 12
            yield "            ";
            if ((($context["direction"] ?? null) == "desc")) {
                // line 13
                yield "                <i class=\"fa fa-sort-down\"></i>
            ";
            } else {
                // line 15
                yield "                <i class=\"fa fa-sort-up\"></i>
            ";
            }
            // line 17
            yield "        ";
        } else {
            // line 18
            yield "            <i class=\"fa fa-sort\"></i>
        ";
        }
        // line 20
        yield "    </span>
    ";
        // line 21
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
        return "@KnpPaginator/Pagination/twitter_bootstrap_v4_font_awesome_sortable_link.html.twig";
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
        return array (  82 => 21,  79 => 20,  75 => 18,  72 => 17,  68 => 15,  64 => 13,  61 => 12,  59 => 11,  42 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@KnpPaginator/Pagination/twitter_bootstrap_v4_font_awesome_sortable_link.html.twig", "/var/www/serveur/vendor/knplabs/knp-paginator-bundle/templates/Pagination/twitter_bootstrap_v4_font_awesome_sortable_link.html.twig");
    }
}
