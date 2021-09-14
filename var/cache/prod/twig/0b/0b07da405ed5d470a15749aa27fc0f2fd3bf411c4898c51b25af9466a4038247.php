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

/* home/shop.html.twig */
class __TwigTemplate_dc402ca4bd52979562dd53af0cd72faa723aa849c3a584bc8d2c7226ad70d997 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "home/shop.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " AgriExpress Shopping !";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
 ";
        // line 7
        echo twig_include($this->env, $context, "partials/title_section.html.twig", ["name" => "Shop Page"]);
        echo "

<div class=\"section\">
\t<div class=\"container\">
    \t<div class=\"row\">
\t\t\t<div class=\"col-lg-9\">
                <div class=\"row shop_container\">
                ";
        // line 14
        if ( !($context["products"] ?? null)) {
            // line 15
            echo "                    <strong><p class=\"m-5\" style=\"font-size: 20px;\">Sorry. No Product matches your search Results !</p></strong>
                ";
        }
        // line 17
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 18
            echo "                        ";
            echo twig_include($this->env, $context, "partials/product.html.twig", ["product" => $context["product"]]);
            echo "
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                </div>
        \t</div>
          <div class=\"col-lg-3 order-lg-first mt-4 pt-2 mt-lg-0 pt-lg-0\">
            \t<div class=\"sidebar\">
                    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["search"] ?? null), 'form_start');
        echo "
                            <div class=\"widget\">
                                <h5 class=\"widget_title\">Categories</h5>
                                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["search"] ?? null), "categories", [], "any", false, false, false, 27), 'row');
        echo "
                            </div>
                            <div class=\"widget\">
                                <h5 class=\"widget_title\">Price</h5>
                                <div class=\"form-row\">
                                    <div class=\"col-md-6\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["search"] ?? null), "minprice", [], "any", false, false, false, 32), 'row');
        echo "</div>
                                    <div class=\"col-md-6\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["search"] ?? null), "maxprice", [], "any", false, false, false, 33), 'row');
        echo "</div>
                                </div>
                            </div>
                            <div class=\"widget\">
                                <h5 class=\"widget_title\">Tags</h5>
                                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["search"] ?? null), "tags", [], "any", false, false, false, 38), 'row');
        echo "
                            </div>
                            <button class=\"btn btn-border-fill btn-block\"> Search</button>
                    ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["search"] ?? null), 'form_end');
        echo "
                </div>
          </div>
        </div>
    </div>
</div>


 ";
    }

    // line 52
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "    <script>
        \$(document).ready(function() {
            \$('.js-categories-basic').select2();
        });
    </script>
 ";
    }

    public function getTemplateName()
    {
        return "home/shop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 53,  164 => 52,  151 => 41,  145 => 38,  137 => 33,  133 => 32,  125 => 27,  119 => 24,  113 => 20,  96 => 18,  78 => 17,  74 => 15,  72 => 14,  62 => 7,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/shop.html.twig", "/Users/mac/Desktop/AppSymfony/jstore/templates/home/shop.html.twig");
    }
}
