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

/* @KnpPaginator/Pagination/foundation_v6_pagination.html.twig */
class __TwigTemplate_d0deafb529336dfe31f9ac91c1f51bba extends Template
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
        // line 1
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 2
            yield "    <nav aria-label=\"Pagination\">
        ";
            // line 3
            $context["classAlign"] = ((array_key_exists("align", $context)) ? ((" text-" . ($context["align"] ?? null))) : (""));
            // line 4
            yield "        <ul class=\"pagination";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["classAlign"] ?? null), "html", null, true);
            yield "\">

            ";
            // line 6
            if (array_key_exists("previous", $context)) {
                // line 7
                yield "                <li class=\"pagination-previous\">
                    <a rel=\"prev\" href=\"";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["previous"] ?? null), ($context["options"] ?? null))), "html", null, true);
                yield "\">
                        ";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "
                    </a>
                </li>
            ";
            } else {
                // line 13
                yield "                <li class=\"pagination-previous disabled\">
                    ";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "
                </li>
            ";
            }
            // line 17
            yield "
            ";
            // line 18
            if ((($context["startPage"] ?? null) > 1)) {
                // line 19
                yield "                <li>
                    <a href=\"";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), 1, ($context["options"] ?? null))), "html", null, true);
                yield "\">1</a>
                </li>
                ";
                // line 22
                if ((($context["startPage"] ?? null) == 3)) {
                    // line 23
                    yield "                    <li>
                        <a href=\"";
                    // line 24
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), 2, ($context["options"] ?? null))), "html", null, true);
                    yield "\">2</a>
                    </li>
                ";
                } elseif ((                // line 26
($context["startPage"] ?? null) != 2)) {
                    // line 27
                    yield "                    <li class=\"ellipsis\"></li>
                ";
                }
                // line 29
                yield "            ";
            }
            // line 30
            yield "
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 32
                yield "                ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 33
                    yield "                    <li>
                        <a href=\"";
                    // line 34
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), $context["page"], ($context["options"] ?? null))), "html", null, true);
                    yield "\">
                            ";
                    // line 35
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "
                        </a>
                    </li>
                ";
                } else {
                    // line 39
                    yield "                    <li class=\"current\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</li>
                ";
                }
                // line 41
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "
            ";
            // line 43
            if ((($context["pageCount"] ?? null) > ($context["endPage"] ?? null))) {
                // line 44
                yield "                ";
                if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 1))) {
                    // line 45
                    yield "                    ";
                    if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 2))) {
                        // line 46
                        yield "                        <li class=\"ellipsis\"></li>
                    ";
                    } else {
                        // line 48
                        yield "                        <li>
                            <a href=\"";
                        // line 49
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), (($context["pageCount"] ?? null) - 1), ($context["options"] ?? null))), "html", null, true);
                        yield "\">
                                ";
                        // line 50
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["pageCount"] ?? null) - 1), "html", null, true);
                        yield "
                            </a>
                        </li>
                    ";
                    }
                    // line 54
                    yield "                ";
                }
                // line 55
                yield "                <li>
                    <a href=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["pageCount"] ?? null), ($context["options"] ?? null))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pageCount"] ?? null), "html", null, true);
                yield "</a>
                </li>
            ";
            }
            // line 59
            yield "
            ";
            // line 60
            if (array_key_exists("next", $context)) {
                // line 61
                yield "                <li class=\"pagination-next\">
                    <a rel=\"next\" href=\"";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["next"] ?? null), ($context["options"] ?? null))), "html", null, true);
                yield "\">
                        ";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "
                    </a>
                </li>
            ";
            } else {
                // line 67
                yield "                <li class=\"pagination-next disabled\">
                    ";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "
                </li>
            ";
            }
            // line 71
            yield "
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
        return "@KnpPaginator/Pagination/foundation_v6_pagination.html.twig";
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
        return array (  219 => 71,  213 => 68,  210 => 67,  203 => 63,  199 => 62,  196 => 61,  194 => 60,  191 => 59,  183 => 56,  180 => 55,  177 => 54,  170 => 50,  166 => 49,  163 => 48,  159 => 46,  156 => 45,  153 => 44,  151 => 43,  148 => 42,  142 => 41,  136 => 39,  129 => 35,  125 => 34,  122 => 33,  119 => 32,  115 => 31,  112 => 30,  109 => 29,  105 => 27,  103 => 26,  98 => 24,  95 => 23,  93 => 22,  88 => 20,  85 => 19,  83 => 18,  80 => 17,  74 => 14,  71 => 13,  64 => 9,  60 => 8,  57 => 7,  55 => 6,  49 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@KnpPaginator/Pagination/foundation_v6_pagination.html.twig", "/var/www/serveur/vendor/knplabs/knp-paginator-bundle/templates/Pagination/foundation_v6_pagination.html.twig");
    }
}
