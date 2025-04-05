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

/* @KnpPaginator/Pagination/semantic_ui_pagination.html.twig */
class __TwigTemplate_abe0b1a142bad8aad91782c0c2b4a2b5 extends Template
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
        // line 13
        yield "<div class=\"ui pagination menu\">
    ";
        // line 14
        if ((array_key_exists("first", $context) && (($context["current"] ?? null) != ($context["first"] ?? null)))) {
            // line 15
            yield "        <a class=\"icon item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["first"] ?? null), ($context["options"] ?? null))), "html", null, true);
            yield "\">
            <i class=\"angle double left icon\"></i>
        </a>
    ";
        }
        // line 19
        yield "
    ";
        // line 20
        if (array_key_exists("previous", $context)) {
            // line 21
            yield "        <a rel=\"prev\" class=\"item icon\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["previous"] ?? null), ($context["options"] ?? null))), "html", null, true);
            yield "\">
            <i class=\"angle left icon\"></i>
        </a>
    ";
        }
        // line 25
        yield "
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["pagesInRange"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 27
            yield "        ";
            if (($context["page"] != ($context["current"] ?? null))) {
                // line 28
                yield "            <a class=\"item\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), $context["page"], ($context["options"] ?? null))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
        ";
            } else {
                // line 30
                yield "            <span class=\"active item\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</span>
        ";
            }
            // line 32
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "
    ";
        // line 35
        if (array_key_exists("next", $context)) {
            // line 36
            yield "        <a rel=\"next\" class=\"icon item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["next"] ?? null), ($context["options"] ?? null))), "html", null, true);
            yield "\">
            <i class=\"angle right icon\"></i>
        </a>
    ";
        }
        // line 40
        yield "
    ";
        // line 41
        if ((array_key_exists("last", $context) && (($context["current"] ?? null) != ($context["last"] ?? null)))) {
            // line 42
            yield "        <a class=\"icon item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["last"] ?? null), ($context["options"] ?? null))), "html", null, true);
            yield "\">
            <i class=\"angle right double icon\"></i>
        </a>
    ";
        }
        // line 46
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@KnpPaginator/Pagination/semantic_ui_pagination.html.twig";
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
        return array (  125 => 46,  117 => 42,  115 => 41,  112 => 40,  104 => 36,  102 => 35,  99 => 34,  92 => 32,  86 => 30,  78 => 28,  75 => 27,  71 => 26,  68 => 25,  60 => 21,  58 => 20,  55 => 19,  47 => 15,  45 => 14,  42 => 13,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@KnpPaginator/Pagination/semantic_ui_pagination.html.twig", "/var/www/serveur/vendor/knplabs/knp-paginator-bundle/templates/Pagination/semantic_ui_pagination.html.twig");
    }
}
