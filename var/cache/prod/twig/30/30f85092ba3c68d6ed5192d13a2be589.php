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

/* @KnpPaginator/Pagination/bulma_pagination.html.twig */
class __TwigTemplate_6278e92085969b9ec4373100db8f2987 extends Template
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
        yield "
";
        // line 3
        $context["position"] = ((array_key_exists("position", $context)) ? (Twig\Extension\CoreExtension::default(($context["position"] ?? null), "left")) : ("left"));
        // line 4
        $context["rounded"] = ((array_key_exists("rounded", $context)) ? (Twig\Extension\CoreExtension::default(($context["rounded"] ?? null), false)) : (false));
        // line 5
        $context["size"] = ((array_key_exists("size", $context)) ? (Twig\Extension\CoreExtension::default(($context["size"] ?? null), null)) : (null));
        // line 6
        yield "
";
        // line 7
        $context["classes"] = ["pagination"];
        // line 8
        yield "
";
        // line 9
        if ((($context["position"] ?? null) != "left")) {
            $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), [("is-" . ($context["position"] ?? null))]);
        }
        // line 10
        if (($context["rounded"] ?? null)) {
            $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), ["is-rounded"]);
        }
        // line 11
        if ((($context["size"] ?? null) != null)) {
            $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), [("is-" . ($context["size"] ?? null))]);
        }
        // line 12
        yield "
";
        // line 13
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 14
            yield "    <nav class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(($context["classes"] ?? null), " "), "html", null, true);
            yield "\" role=\"navigation\" aria-label=\"pagination\">
        ";
            // line 15
            if (array_key_exists("previous", $context)) {
                // line 16
                yield "            <a rel=\"prev\" class=\"pagination-previous\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["previous"] ?? null), ($context["options"] ?? null))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
        ";
            } else {
                // line 18
                yield "            <a class=\"pagination-previous\" disabled>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
        ";
            }
            // line 20
            yield "
        ";
            // line 21
            if (array_key_exists("next", $context)) {
                // line 22
                yield "            <a rel=\"next\" class=\"pagination-next\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["next"] ?? null), ($context["options"] ?? null))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
        ";
            } else {
                // line 24
                yield "            <a class=\"pagination-next\" disabled>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
        ";
            }
            // line 26
            yield "
        <ul class=\"pagination-list\">
            <li>
                ";
            // line 29
            if ((($context["current"] ?? null) == ($context["first"] ?? null))) {
                // line 30
                yield "                    <a class=\"pagination-link is-current\" aria-label=\"Page ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current"] ?? null), "html", null, true);
                yield "\" aria-current=\"page\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["first"] ?? null), ($context["options"] ?? null))), "html", null, true);
                yield "\">1</a>
                ";
            } else {
                // line 32
                yield "                    <a class=\"pagination-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["first"] ?? null), ($context["options"] ?? null))), "html", null, true);
                yield "\">1</a>
                ";
            }
            // line 34
            yield "            </li>

            ";
            // line 36
            if ((((($_v0 = ($context["pagesInRange"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null) - ($context["first"] ?? null)) >= 2)) {
                // line 37
                yield "                <li>
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            ";
            }
            // line 41
            yield "
            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 43
                yield "                ";
                if (((($context["first"] ?? null) != $context["page"]) && ($context["page"] != ($context["last"] ?? null)))) {
                    // line 44
                    yield "                    <li>
                        ";
                    // line 45
                    if (($context["page"] == ($context["current"] ?? null))) {
                        // line 46
                        yield "                            <a class=\"pagination-link is-current\" aria-label=\"Page ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current"] ?? null), "html", null, true);
                        yield "\" aria-current=\"page\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), $context["page"], ($context["options"] ?? null))), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "</a>
                        ";
                    } else {
                        // line 48
                        yield "                            <a class=\"pagination-link\" aria-label=\"Goto page ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), $context["page"], ($context["options"] ?? null))), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "</a>
                        ";
                    }
                    // line 50
                    yield "                    </li>
                ";
                }
                // line 52
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "
            ";
            // line 54
            if (((($context["last"] ?? null) - (($_v1 = ($context["pagesInRange"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["pagesInRange"] ?? null)) - 1)] ?? null) : null)) >= 2)) {
                // line 55
                yield "                <li>
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            ";
            }
            // line 59
            yield "
            <li>
                ";
            // line 61
            if ((($context["current"] ?? null) == ($context["last"] ?? null))) {
                // line 62
                yield "                    <a class=\"pagination-link is-current\" aria-label=\"Page ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current"] ?? null), "html", null, true);
                yield "\" aria-current=\"page\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["last"] ?? null), ($context["options"] ?? null))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["last"] ?? null), "html", null, true);
                yield "</a>
                ";
            } else {
                // line 64
                yield "                    <a class=\"pagination-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["last"] ?? null), ($context["options"] ?? null))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["last"] ?? null), "html", null, true);
                yield "</a>
                ";
            }
            // line 66
            yield "            </li>
        </ul>
    </nav>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@KnpPaginator/Pagination/bulma_pagination.html.twig";
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
        return array (  229 => 66,  221 => 64,  211 => 62,  209 => 61,  205 => 59,  199 => 55,  197 => 54,  194 => 53,  188 => 52,  184 => 50,  174 => 48,  164 => 46,  162 => 45,  159 => 44,  156 => 43,  152 => 42,  149 => 41,  143 => 37,  141 => 36,  137 => 34,  131 => 32,  123 => 30,  121 => 29,  116 => 26,  110 => 24,  102 => 22,  100 => 21,  97 => 20,  91 => 18,  83 => 16,  81 => 15,  76 => 14,  74 => 13,  71 => 12,  67 => 11,  63 => 10,  59 => 9,  56 => 8,  54 => 7,  51 => 6,  49 => 5,  47 => 4,  45 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@KnpPaginator/Pagination/bulma_pagination.html.twig", "/var/www/serveur/vendor/knplabs/knp-paginator-bundle/templates/Pagination/bulma_pagination.html.twig");
    }
}
