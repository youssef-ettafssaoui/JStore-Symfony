<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @EasyAdmin/crud/paginator.html.twig */
class __TwigTemplate_5f6ff8b4031b054c9f48443a2b9be683fd959c06d7f2ac1c695f52409e9273fc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<div class=\"list-pagination\">
    <div class=\"list-pagination-counter\">
        ";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.results", ["%count%" => twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "numResults", [], "any", false, false, false, 7)], "EasyAdminBundle");
        echo "
    </div>

    <nav class=\"pager list-pagination-paginator ";
        // line 10
        echo (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 10)) ? ("first-page") : (""));
        echo " ";
        echo (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 10)) ? ("last-page") : (""));
        echo "\">
        <ul class=\"pagination\">
            <li class=\"page-item ";
        // line 12
        echo (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 12)) ? ("disabled") : (""));
        echo "\">
                <a class=\"page-link\" href=\"";
        // line 13
        (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 13)) ? (print ("#")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "generateUrlForPage", [0 => twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "previousPage", [], "any", false, false, false, 13)], "method", false, false, false, 13), "html", null, true))));
        echo "\">
                    <i class=\"fa fa-angle-left mx-1\"></i> <span class=\"btn-label\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous", [], "EasyAdminBundle"), "html", null, true);
        echo "</span>
                </a>
            </li>

            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "pageRange", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 19
            echo "                <li class=\"page-item ";
            echo ((($context["page"] == twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 19))) ? ("active") : (""));
            echo " ";
            echo (((null === $context["page"])) ? ("disabled") : (""));
            echo "\">
                    ";
            // line 20
            if ((null === $context["page"])) {
                // line 21
                echo "                        <span class=\"page-link\">&hellip;</span>
                    ";
            } else {
                // line 23
                echo "                        <a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "generateUrlForPage", [0 => $context["page"]], "method", false, false, false, 23), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                    ";
            }
            // line 25
            echo "                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
            <li class=\"page-item ";
        // line 28
        echo (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 28)) ? ("disabled") : (""));
        echo "\">
                <a class=\"page-link\" href=\"";
        // line 29
        (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 29)) ? (print ("#")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "generateUrlForPage", [0 => twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "nextPage", [], "any", false, false, false, 29)], "method", false, false, false, 29), "html", null, true))));
        echo "\">
                    <span class=\"btn-label\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next", [], "EasyAdminBundle"), "html", null, true);
        echo "</span> <i class=\"fa fa-angle-right mx-1\"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 30,  109 => 29,  105 => 28,  102 => 27,  95 => 25,  87 => 23,  83 => 21,  81 => 20,  74 => 19,  70 => 18,  63 => 14,  59 => 13,  55 => 12,  48 => 10,  42 => 7,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/paginator.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/paginator.html.twig");
    }
}
