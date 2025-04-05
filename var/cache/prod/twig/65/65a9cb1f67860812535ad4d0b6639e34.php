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

/* @KnpPaginator/Pagination/tailwindcss_pagination.html.twig */
class __TwigTemplate_bf97b034c837d8a6c2206b75afe33a03 extends Template
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
        // line 2
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 3
            yield "    <div class=\"inline-block\">
        <div class=\"flex items-baseline flex-row border border-gray-400 rounded-sm w-auto\">
        ";
            // line 5
            if ((array_key_exists("first", $context) && (($context["current"] ?? null) != ($context["first"] ?? null)))) {
                // line 6
                yield "            <span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-r border-gray-400 font-bold\">
                <a href=\"";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["first"] ?? null), ($context["options"] ?? null))), "html", null, true);
                yield "\">&lt;&lt;</a>
            </span>
        ";
            }
            // line 10
            yield "
        ";
            // line 11
            if (array_key_exists("previous", $context)) {
                // line 12
                yield "            <span class=\"bg-white text-blue-600 px-3 text-lg py-2 border-r border-gray-400\">
                <a rel=\"prev\" href=\"";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["previous"] ?? null), ($context["options"] ?? null))), "html", null, true);
                yield "\">&lt;</a>
            </span>
        ";
            }
            // line 16
            yield "
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 18
                yield "            ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 19
                    yield "                <span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-r  border-gray-400\">
                    <a href=\"";
                    // line 20
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), $context["page"], ($context["options"] ?? null))), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</a>
                </span>
            ";
                } else {
                    // line 23
                    yield "                <span class=\"bg-blue-600 text-white px-3 py-2 text-lg font-bold\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</span>
            ";
                }
                // line 25
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "
        ";
            // line 27
            if (array_key_exists("next", $context)) {
                // line 28
                yield "            <span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-r border-gray-400\">
                <a rel=\"next\" href=\"";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["next"] ?? null), ($context["options"] ?? null))), "html", null, true);
                yield "\">&gt;</a>
            </span>
        ";
            }
            // line 32
            yield "
        ";
            // line 33
            if ((array_key_exists("last", $context) && (($context["current"] ?? null) != ($context["last"] ?? null)))) {
                // line 34
                yield "            <span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-gray-400 font-bold\">
                <a href=\"";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["last"] ?? null), ($context["options"] ?? null))), "html", null, true);
                yield "\">&gt;&gt;</a>
            </span>
        ";
            }
            // line 38
            yield "        </div>
    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@KnpPaginator/Pagination/tailwindcss_pagination.html.twig";
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
        return array (  134 => 38,  128 => 35,  125 => 34,  123 => 33,  120 => 32,  114 => 29,  111 => 28,  109 => 27,  106 => 26,  100 => 25,  94 => 23,  86 => 20,  83 => 19,  80 => 18,  76 => 17,  73 => 16,  67 => 13,  64 => 12,  62 => 11,  59 => 10,  53 => 7,  50 => 6,  48 => 5,  44 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@KnpPaginator/Pagination/tailwindcss_pagination.html.twig", "/var/www/serveur/vendor/knplabs/knp-paginator-bundle/templates/Pagination/tailwindcss_pagination.html.twig");
    }
}
