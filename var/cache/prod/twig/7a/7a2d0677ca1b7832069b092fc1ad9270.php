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

/* @KnpPaginator/Pagination/foundation_v5_pagination.html.twig */
class __TwigTemplate_d8a68e8996e90db27370311e728159ab extends Template
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
        // line 20
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 21
            yield "    <ul class=\"pagination\">
        ";
            // line 22
            if (array_key_exists("previous", $context)) {
                // line 23
                yield "                 <li class=\"arrow\">
                     <a rel=\"prev\" href=\"";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["previous"] ?? null), ($context["options"] ?? null))), "html", null, true);
                yield "\">&laquo; ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
                 </li>
        ";
            } else {
                // line 27
                yield "            <li class=\"arrow unavailable\">
                <a>
                    &laquo; ";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "
                </a>
            </li>
        ";
            }
            // line 33
            yield "
        ";
            // line 34
            if ((($context["startPage"] ?? null) > 1)) {
                // line 35
                yield "            <li>
                <a href=\"";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), 1, ($context["options"] ?? null))), "html", null, true);
                yield "\">1</a>
            </li>
            ";
                // line 38
                if ((($context["startPage"] ?? null) == 3)) {
                    // line 39
                    yield "                <li>
                    <a href=\"";
                    // line 40
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), 2, ($context["options"] ?? null))), "html", null, true);
                    yield "\">2</a>
                </li>
            ";
                } elseif ((                // line 42
($context["startPage"] ?? null) != 2)) {
                    // line 43
                    yield "                <li class=\"unavailable\">
                    <a>&hellip;</a>
                </li>
            ";
                }
                // line 47
                yield "        ";
            }
            // line 48
            yield "
        ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 50
                yield "            ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 51
                    yield "                <li>
                    <a href=\"";
                    // line 52
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), $context["page"], ($context["options"] ?? null))), "html", null, true);
                    yield "\">
                        ";
                    // line 53
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "
                    </a>
                </li>
            ";
                } else {
                    // line 57
                    yield "                <li class=\"current\">
                    <a>";
                    // line 58
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</a>
                </li>
            ";
                }
                // line 61
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            yield "
        ";
            // line 64
            if ((($context["pageCount"] ?? null) > ($context["endPage"] ?? null))) {
                // line 65
                yield "            ";
                if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 1))) {
                    // line 66
                    yield "                ";
                    if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 2))) {
                        // line 67
                        yield "                    <li class=\"unavailable\">
                        <a>&hellip;</a>
                    </li>
                ";
                    } else {
                        // line 71
                        yield "                    <li>
                        <a href=\"";
                        // line 72
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), (($context["pageCount"] ?? null) - 1), ($context["options"] ?? null))), "html", null, true);
                        yield "\">
                            ";
                        // line 73
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["pageCount"] ?? null) - 1), "html", null, true);
                        yield "
                        </a>
                    </li>
                ";
                    }
                    // line 77
                    yield "            ";
                }
                // line 78
                yield "            <li>
                <a href=\"";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["pageCount"] ?? null), ($context["options"] ?? null))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pageCount"] ?? null), "html", null, true);
                yield "</a>
            </li>
        ";
            }
            // line 82
            yield "
        ";
            // line 83
            if (array_key_exists("next", $context)) {
                // line 84
                yield "            <li class=\"arrow\">
                <a rel=\"next\" href=\"";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["next"] ?? null), ($context["options"] ?? null))), "html", null, true);
                yield "\">
                    ";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield " &nbsp;&raquo;
                </a>
            </li>
        ";
            } else {
                // line 90
                yield "            <li class=\"arrow unavailable\">
                <a>
                    ";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield " &nbsp;&raquo;
                </a>
            </li>
        ";
            }
            // line 96
            yield "    </ul>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@KnpPaginator/Pagination/foundation_v5_pagination.html.twig";
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
        return array (  220 => 96,  213 => 92,  209 => 90,  202 => 86,  198 => 85,  195 => 84,  193 => 83,  190 => 82,  182 => 79,  179 => 78,  176 => 77,  169 => 73,  165 => 72,  162 => 71,  156 => 67,  153 => 66,  150 => 65,  148 => 64,  145 => 63,  138 => 61,  132 => 58,  129 => 57,  122 => 53,  118 => 52,  115 => 51,  112 => 50,  108 => 49,  105 => 48,  102 => 47,  96 => 43,  94 => 42,  89 => 40,  86 => 39,  84 => 38,  79 => 36,  76 => 35,  74 => 34,  71 => 33,  64 => 29,  60 => 27,  52 => 24,  49 => 23,  47 => 22,  44 => 21,  42 => 20,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@KnpPaginator/Pagination/foundation_v5_pagination.html.twig", "/var/www/serveur/vendor/knplabs/knp-paginator-bundle/templates/Pagination/foundation_v5_pagination.html.twig");
    }
}
